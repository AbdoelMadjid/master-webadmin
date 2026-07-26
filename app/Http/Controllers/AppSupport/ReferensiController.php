<?php

namespace App\Http\Controllers\AppSupport;

use App\Http\Controllers\Controller;
use App\Http\Requests\AppSupport\ReferensiItemRequest;
use App\Http\Requests\AppSupport\ReferensiKategoriRequest;
use App\Models\AppSupport\ReferensiItem;
use App\Models\AppSupport\ReferensiKategori;
use Illuminate\Http\Request;

class ReferensiController extends Controller
{
    public function index(Request $request)
    {
        $activeTab = $request->get('tab', 'kategori');
        $selectedKategoriId = $request->get('kategori_id');
        $searchQuery = $request->get('q');

        // Categories query
        $kategoriQuery = ReferensiKategori::withCount('items')->orderBy('kode', 'asc');
        if ($searchQuery && $activeTab === 'kategori') {
            $kategoriQuery->where(function ($q) use ($searchQuery) {
                $q->where('kode', 'like', "%{$searchQuery}%")
                    ->orWhere('nama', 'like', "%{$searchQuery}%")
                    ->orWhere('deskripsi', 'like', "%{$searchQuery}%");
            });
        }
        $kategoris = $kategoriQuery->get();

        // Items query
        $itemQuery = ReferensiItem::with('kategori')->orderBy('kategori_id', 'asc')->orderBy('urutan', 'asc')->orderBy('nama', 'asc');

        if ($selectedKategoriId) {
            $itemQuery->where('kategori_id', $selectedKategoriId);
        }

        if ($searchQuery && $activeTab === 'item') {
            $itemQuery->where(function ($q) use ($searchQuery) {
                $q->where('kode', 'like', "%{$searchQuery}%")
                    ->orWhere('nama', 'like', "%{$searchQuery}%")
                    ->orWhere('keterangan', 'like', "%{$searchQuery}%");
            });
        }
        $items = $itemQuery->get();

        // Statistics
        $totalKategori = ReferensiKategori::count();
        $activeKategori = ReferensiKategori::where('is_active', true)->count();
        $totalItem = ReferensiItem::count();
        $activeItem = ReferensiItem::where('is_active', true)->count();

        // Demo data for preview tab
        $previewData = ReferensiKategori::with('activeItems')->where('is_active', true)->get()->keyBy('kode');

        return view('pages.appsupport.referensi', compact(
            'activeTab',
            'kategoris',
            'items',
            'selectedKategoriId',
            'searchQuery',
            'totalKategori',
            'activeKategori',
            'totalItem',
            'activeItem',
            'previewData'
        ));
    }

    public function storeKategori(ReferensiKategoriRequest $request)
    {
        $kategori = ReferensiKategori::create([
            'kode' => strtoupper(trim($request->kode)),
            'nama' => trim($request->nama),
            'deskripsi' => $request->deskripsi,
            'is_active' => $request->has('is_active') ? (bool) $request->is_active : true,
            'is_system' => false,
        ]);

        return response()->json([
            'success' => true,
            'message' => app()->getLocale() == 'en'
                ? 'Reference category created successfully.'
                : 'Kategori referensi berhasil ditambahkan.',
            'data' => $kategori,
        ]);
    }

    public function updateKategori(ReferensiKategoriRequest $request, $id)
    {
        $kategori = ReferensiKategori::findOrFail($id);

        $kategori->update([
            'kode' => strtoupper(trim($request->kode)),
            'nama' => trim($request->nama),
            'deskripsi' => $request->deskripsi,
            'is_active' => $request->has('is_active') ? (bool) $request->is_active : $kategori->is_active,
        ]);

        return response()->json([
            'success' => true,
            'message' => app()->getLocale() == 'en'
                ? 'Reference category updated successfully.'
                : 'Kategori referensi berhasil diperbarui.',
            'data' => $kategori,
        ]);
    }

    public function destroyKategori($id)
    {
        $kategori = ReferensiKategori::findOrFail($id);

        if ($kategori->is_system) {
            return response()->json([
                'success' => false,
                'message' => app()->getLocale() == 'en'
                    ? 'System reference categories cannot be deleted.'
                    : 'Kategori referensi bawaan sistem tidak dapat dihapus.',
            ], 422);
        }

        $kategori->delete();

        return response()->json([
            'success' => true,
            'message' => app()->getLocale() == 'en'
                ? 'Reference category deleted successfully.'
                : 'Kategori referensi berhasil dihapus.',
        ]);
    }

    public function toggleKategoriStatus($id)
    {
        $kategori = ReferensiKategori::findOrFail($id);
        $kategori->is_active = !$kategori->is_active;
        $kategori->save();

        return response()->json([
            'success' => true,
            'active' => $kategori->is_active,
            'message' => app()->getLocale() == 'en'
                ? 'Category status updated to ' . ($kategori->is_active ? 'Active' : 'Inactive')
                : 'Status kategori diperbarui menjadi ' . ($kategori->is_active ? 'Aktif' : 'Non-Aktif'),
        ]);
    }

    public function storeItem(ReferensiItemRequest $request)
    {
        $item = ReferensiItem::create([
            'kategori_id' => $request->kategori_id,
            'kode' => strtoupper(trim($request->kode)),
            'nama' => trim($request->nama),
            'urutan' => $request->urutan ?? 0,
            'keterangan' => $request->keterangan,
            'is_active' => $request->has('is_active') ? (bool) $request->is_active : true,
        ]);

        return response()->json([
            'success' => true,
            'message' => app()->getLocale() == 'en'
                ? 'Reference item created successfully.'
                : 'Item referensi berhasil ditambahkan.',
            'data' => $item,
        ]);
    }

    public function updateItem(ReferensiItemRequest $request, $id)
    {
        $item = ReferensiItem::findOrFail($id);

        $item->update([
            'kategori_id' => $request->kategori_id,
            'kode' => strtoupper(trim($request->kode)),
            'nama' => trim($request->nama),
            'urutan' => $request->urutan ?? 0,
            'keterangan' => $request->keterangan,
            'is_active' => $request->has('is_active') ? (bool) $request->is_active : $item->is_active,
        ]);

        return response()->json([
            'success' => true,
            'message' => app()->getLocale() == 'en'
                ? 'Reference item updated successfully.'
                : 'Item referensi berhasil diperbarui.',
            'data' => $item,
        ]);
    }

    public function destroyItem($id)
    {
        $item = ReferensiItem::findOrFail($id);
        $item->delete();

        return response()->json([
            'success' => true,
            'message' => app()->getLocale() == 'en'
                ? 'Reference item deleted successfully.'
                : 'Item referensi berhasil dihapus.',
        ]);
    }

    public function toggleItemStatus($id)
    {
        $item = ReferensiItem::findOrFail($id);
        $item->is_active = !$item->is_active;
        $item->save();

        return response()->json([
            'success' => true,
            'active' => $item->is_active,
            'message' => app()->getLocale() == 'en'
                ? 'Item status updated to ' . ($item->is_active ? 'Active' : 'Inactive')
                : 'Status item diperbarui menjadi ' . ($item->is_active ? 'Aktif' : 'Non-Aktif'),
        ]);
    }

    public function getItemsByKategori($id)
    {
        $query = ReferensiItem::where('is_active', true)->orderBy('urutan', 'asc')->orderBy('nama', 'asc');

        if (is_numeric($id)) {
            $query->where('kategori_id', $id);
        } else {
            $query->whereHas('kategori', function ($q) use ($id) {
                $q->where('kode', strtoupper($id));
            });
        }

        $items = $query->get(['id', 'kode', 'nama', 'urutan', 'keterangan']);

        return response()->json([
            'success' => true,
            'data' => $items,
        ]);
    }
}
