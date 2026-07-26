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

# Rules for Template/Demo Preservation & View Duplication

1. **Preserve Demo & Template Views (Hardcoded)**:
   - Never modify original Metronic template/demo view files (e.g. `resources/views/pages/pages/...`, `resources/views/pages/account/...`) directly when developing database-driven application features.
   - Leave demo/template views 100% hardcoded so they remain intact as reference layouts.

2. **Copy & Duplicate to Dedicated Feature Folders**:
   - Always copy/duplicate template partials or views to a dedicated feature folder under `resources/views/pages/<subfolder>/` before adding dynamic data or custom logic.
   - Example: For route `profil-pengguna`, create/duplicate header details to `resources/views/pages/profil/partials/details.blade.php` instead of modifying `resources/views/pages/pages/account/partials/details.blade.php`.

# Rules for Icon Buttons & Top Tooltips

1. **Mandatory Top Tooltips for Icon-Only Buttons**:
   - Every icon-only button (`btn-icon`) must use Bootstrap 5 & Metronic top tooltips (`data-bs-toggle="tooltip" data-bs-placement="top" title="..."`) instead of plain browser default `title="..."` attributes.

2. **Modal Trigger Tooltip Wrapper**:
   - In Bootstrap 5, elements with `data-bs-toggle="modal"` cannot hold `data-bs-toggle="tooltip"` on the same HTML tag due to plugin attribute collision.
   - Wrap modal trigger icon buttons inside a `<span data-bs-toggle="tooltip" data-bs-placement="top" title="...">` wrapper element so that both top tooltips and modal triggers function smoothly.

# Rules for Bilingual Help & Documentation Pages

1. **Mandatory 100% Bilingual Support**:
   - Every Help/Documentation page, tab, sub-tab, card, table, list item, and code description MUST support both English and Indonesian locales (`en` and `id`).
   - When the active locale is set to English (`en`), NO Indonesian text should remain visible in either the menu navigation or the view/tab content.

2. **Bilingual Blade Template Pattern**:
   - For rich documentation views and tab partials, wrap content using `@if(app()->getLocale() == 'en') ... @else ... @endif` conditional blocks to maintain clean HTML layout formatting, cards, tables, and code snippets.
   - For UI labels, hero titles, lead texts, and card headers, use Laravel translation keys (e.g., `__('help.pages.skema.manajemen-pengguna.hero_title')`).

3. **Menu Item Translation Keys**:
   - Ensure menu items configured in `config/sidebar/_sidebar_helps.php` and `config/header/_header_help.php` have exact corresponding translation key mappings in both `lang/en/menu.php` and `lang/id/menu.php` (e.g., `'manajemen_pengguna' => 'User Management'`).
   - Avoid mapping Indonesian keys to Indonesian text in `lang/en/menu.php`.

4. **Uniform Card Box Border Styling**:
   - All main section card boxes in Help & Documentation views must use clean, standard `<div class="schema-card">` or `<div class="schema-card h-100">` wrappers.
   - Do not add custom colored left-border overrides (`border-start border-4 border-primary/warning/danger`) to main section cards to maintain visual uniformity across all help pages.

5. **Mandatory Icon Prefix for Card Headings**:
   - Every section card heading (`<h4>` or `<h5>`) MUST have a valid Keenicons duotone icon (`<i class="ki-duotone ki-<icon-name> fs-2 text-<color> me-2">`) placed directly before the heading title text.
   - Icon classes MUST be valid Keenicons in Metronic 8 (e.g., `ki-route`, `ki-element-11`, `ki-layers`, `ki-global`, `ki-shield-tick`, `ki-key`, `ki-map`, `ki-wrench`, `ki-check-square`) and include all required child `<span class="pathN"></span>` elements.

# Rules for Route-to-Blade File Placement & Multi-Tab Subfolder Architecture

1. **Strict Route-to-Blade View Path Alignment**:
   - Every route rendering a Blade view MUST map directly to a main view file at the matching path under `resources/views/pages/`.
   - **Pattern**: Route `/{subfolder}/{feature}` &rarr; Main View File `resources/views/pages/{subfolder}/{feature}.blade.php`.
   - **Example**: Route `/help/pemrograman/skema/manajemen-pengguna` &rarr; `resources/views/pages/help/pemrograman/skema/manajemen-pengguna.blade.php`.
   - **Example**: Route `/profil-pengguna` &rarr; `resources/views/pages/profil-pengguna.blade.php`.

2. **Universal Multi-Tab Subfolder Architecture (`tabs/<feature>/`)**:
   - For any multi-tab feature using single route query parameters (`/{subfolder}/{feature}?tab=...`), all sub-tab partial files (prefixed with `_`) MUST be placed inside a dedicated `tabs/<feature>/` subdirectory.
   - **Pattern**: `resources/views/pages/{subfolder}/tabs/{feature}/_{tab}.blade.php`.
   - **Example**: Tab `user` on `/help/pemrograman/skema/manajemen-pengguna?tab=user` &rarr; `resources/views/pages/help/pemrograman/skema/tabs/manajemen-pengguna/_user.blade.php`.
   - **Example**: Tab `app-fitur` on `/appsupport?tab=app-fitur` &rarr; `resources/views/pages/appsupport/tabs/app-support/_app_fitur.blade.php`.

3. **Dynamic `@include` Path Invariant**:
   - Main multi-tab view templates MUST dynamically include tab partials using the standardized path structure:
     `@include('pages.{subfolder}.tabs.{feature}._' . str_replace('-', '_', $activeTab))`
   - Never include tab partials directly from parent folders or non-standard paths.

4. **Prohibition of Redundant Feature Directories**:
   - Do NOT create standalone non-tab feature subdirectories directly under parent view folders (e.g., do NOT create `pages/{subfolder}/{feature}/` to hold main view files or stray tab views). All sub-tab partials MUST reside cleanly inside `pages/{subfolder}/tabs/{feature}/`.

# Rules for Page Operational Guide Modals (`Petunjuk Operasional`)

1. **Dedicated Partial Location for Operational Modals**:
   - Every page operational guide modal HTML MUST be extracted into a dedicated partial file under `resources/views/pages/<subfolder>/partials/<feature>-help-modal.blade.php`.
   - **Example**: For route `/manajemenpengguna/roles` (`pages/manajemenpengguna/roles.blade.php`), the modal partial file MUST be `resources/views/pages/manajemenpengguna/partials/roles-help-modal.blade.php`.
   - Cleanly `@include('pages.<subfolder>.partials.<feature>-help-modal')` near the bottom of the main view.

2. **Standardized Trigger Button & Tooltip Wrapper**:
   - The operational guide trigger MUST be a solid danger icon-only button (`btn btn-icon btn-danger shadow-xs`) using the valid Metronic 8 Keenicon `ki-question` with 3 child path elements (`<i class="ki-duotone ki-question fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>`).
   - The trigger button MUST be wrapped inside a `<span data-bs-toggle="tooltip" data-bs-placement="top" title="...">` element to ensure top tooltips function smoothly without Bootstrap 5 modal attribute collision.
   - **Pattern**:
     ```html
     <span data-bs-toggle="tooltip" data-bs-placement="top" title="{{ app()->getLocale() == 'en' ? 'Operational Guide' : 'Petunjuk Operasional' }}">
         <button type="button" class="btn btn-icon btn-danger shadow-xs" data-bs-toggle="modal" data-bs-target="#kt_modal_<feature>_help">
             <i class="ki-duotone ki-question fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
         </button>
     </span>
     ```

3. **Mandatory 100% Bilingual Operational Content**:
   - Modal body content MUST use `@if(app()->getLocale() == 'en') ... @else ... @endif` conditional blocks to present comprehensive operational instructions in both English and Indonesian.
   - Content MUST include:
     - **Overview & Feature Architecture**: Clear explanation of what the module does and its underlying system architecture.
     - **Step-by-Step Operational Workflow**: Numbered sequential steps for performing CRUD actions (Create, Read, Update, Delete, Import, Export, etc.).
     - **Rules & Important Notes**: Key operational rules, safeguards (e.g. protected core roles), and best practices.

4. **Placement in Top Header Action Bar**:
   - Place the operational guide trigger button in the top page header action bar (`d-flex align-items-center gap-2`) alongside primary page action buttons (e.g. Add/Import buttons) to ensure high visibility upon page load without duplicating buttons in child datatable toolbars.

