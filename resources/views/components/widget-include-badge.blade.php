@props(['name', 'flexible' => false, 'hapus' => false, 'follow' => false])

@php
    $mainName = $name;
    $followTarget = null;

    // Deteksi pola: (follow something)
    if (preg_match('/\((follow\s+.*?)\)/', $name, $matches)) {
        $followTarget = $matches[1]; // follow __widget-37
        $mainName = trim(str_replace($matches[0], '', $name));
    }
@endphp

<div class="widget-include-badge" style="height:0;line-height:0;position:relative;z-index:2;overflow:visible;">

    {{-- Badge Nama Utama --}}
    <span class="badge badge-light-primary" style="position:relative;top:-8px;">
        {{ $mainName }}
    </span>

    {{-- Badge Follow Otomatis dari Nama --}}
    @if ($followTarget)
        <span class="badge badge-light-warning" style="position:relative;top:-8px;">
            {{ $followTarget }}
        </span>
    @endif

    {{-- Badge Follow Manual --}}
    @if ($follow)
        <span class="badge badge-light-info" style="position:relative;top:-8px;">
            Follow
        </span>
    @endif

    @if ($flexible)
        <span class="badge badge-light-success" style="position:relative;top:-8px;">
            fleksible
        </span>
    @endif

    @if ($hapus)
        <span class="badge badge-light-danger" style="position:relative;top:-8px;">
            hapus
        </span>
    @endif
</div>
