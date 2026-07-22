# Rules for Multi-Tab Blade Pages & Core Layout Preservation

1. **Do Not Modify Core Layout & Seeder Architecture**:
   - Never alter core layout partials (`_menu-item.blade.php`, `_menu-item-temp.blade.php`, `navs.blade.php`) or existing menu seeder configurations (`config/menu_seeder/*_seeder.php`) to add sub-tabs.

2. **Multi-Tab Architecture via Single Route & Query Parameters**:
   - Implement multi-tab sub-views on a single route (e.g. `/profil-pengguna?tab=...`) to ensure sidebar menu active highlights remain intact.
   - Dynamically `@include` tab partials from a subfolder (e.g., `resources/views/pages/<feature>/tabs/_<tab>.blade.php`).

3. **Tab Partial Cleanliness & Script Preservation**:
   - Tab partial files must NOT contain `@endsection`, `@extends`, or outer layout closing `</div>` tags that prematurely close parent containers or misalign footers.
   - Ensure the parent view's `@section('scripts')` includes necessary vendor and widget bundles (`widgets.bundle.js`, `custom/widgets.js`, `datatables.bundle.js`) to render charts and Datatables properly.
