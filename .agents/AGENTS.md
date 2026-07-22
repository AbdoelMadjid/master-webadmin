# Rules for Multi-Tab Blade Pages & Core Layout Preservation

1. **Do Not Modify Core Layout & Seeder Architecture**:
   - Never alter core layout partials (`_menu-item.blade.php`, `_menu-item-temp.blade.php`, `navs.blade.php`) or existing menu seeder configurations (`config/menu_seeder/*_seeder.php`) to add sub-tabs.

2. **Multi-Tab Architecture via Single Route & Query Parameters**:
   - Implement multi-tab sub-views on a single route (e.g. `/profil-pengguna?tab=...`) to ensure sidebar menu active highlights remain intact.
   - Dynamically `@include` tab partials from a subfolder (e.g., `resources/views/pages/<feature>/tabs/_<tab>.blade.php`).

3. **Tab Partial Cleanliness & Script Preservation**:
   - Tab partial files must NOT contain `@endsection`, `@extends`, or outer layout closing `</div>` tags that prematurely close parent containers or misalign footers.
   - Ensure the parent view's `@section('scripts')` includes necessary vendor and widget bundles (`widgets.bundle.js`, `custom/widgets.js`, `datatables.bundle.js`) to render charts and Datatables properly.

# Rules for Responsive Table Creation

1. **No Custom CSS `<style>` Blocks**:
   - Do not write custom CSS `<style>` overrides for table layout or column widths. Rely strictly on Metronic & Bootstrap 5 native classes.

2. **Native Responsive Wrapper**:
   - Always wrap data tables with `<div class="table-responsive">`. This guarantees clean fluid rendering on desktop and automatic horizontal scrolling on mobile/gadgets.

3. **Column Width Preservation with Built-in Classes**:
   - Use Metronic's native minimum width classes (e.g., `min-w-200px`, `min-w-150px`, `min-w-125px`) on `<th>` elements to ensure columns maintain adequate width without shrinking.

# Rules for File Architecture & Form Partials

1. **Mirror Folder Structure for Controllers & Models**:
   - Controllers and Models must be placed inside subfolders that mirror the Blade view structure under `resources/views/pages/`.
   - Example: View `resources/views/pages/appsupport/feature.blade.php` must have Controller `App\Http\Controllers\AppSupport\FeatureController` and Model `App\Models\AppSupport\Feature`.

2. **Form Partials Extraction**:
   - Create form HTML (e.g. CRUD modal forms) in dedicated partial files under `resources/views/pages/<folder>/partials/<feature>-form.blade.php`.
   - Cleanly `@include` the form partial inside the main view.

3. **Form Request Validation Mirroring**:
   - Validation rules must be extracted into Laravel Form Request classes under `App\Http\Requests\<SubFolder>\<FeatureRequest>.php`, mirroring the view subfolder structure.
   - Example: View `resources/views/pages/appsupport/app-profil.blade.php` uses Form Request `App\Http\Requests\AppSupport\AppProfilRequest`.

# Rules for JavaScript CRUD Notifications & Helpers

1. **Global SweetAlert2 Helper (`SwalHelper`)**:
   - Do not write verbose inline `Swal.fire` configurations in Blade views. Use the global JS helper `SwalHelper`:
     * Success: `SwalHelper.success(message)`
     * General Error: `SwalHelper.error(message)`
     * Validation Error (422 XHR): `SwalHelper.validationError(xhr)`
     * Delete Confirmation Prompt: `SwalHelper.confirmDelete(itemName, callback)`
