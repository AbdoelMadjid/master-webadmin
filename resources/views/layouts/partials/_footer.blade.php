<!--begin::Footer-->
<div id="kt_app_footer" class="app-footer ">
    <!--begin::Footer container-->
    <div class="app-container  container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3 ">
        <!--begin::Copyright-->
        <div class="text-gray-900 order-2 order-md-1">
            <span class="text-muted fw-semibold me-1">2025&copy;</span>
            <a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
            @php
                $phpVersion = phpversion();
                $laravelVersion = app()->version();
                $mysqlVersion = 'N/A';
                try {
                    $mysqlVersion = \Illuminate\Support\Facades\DB::connection()
                        ->getPdo()
                        ->getAttribute(\PDO::ATTR_SERVER_VERSION);
                } catch (\Throwable $e) {
                    $mysqlVersion = 'N/A';
                }
            @endphp
            <span class="text-muted fw-semibold ms-3">Laravel {{ $laravelVersion }} | PHP
                {{ $phpVersion }}{{--  | MySQL {{ $mysqlVersion }} --}}</span>
        </div>
        <!--end::Copyright-->
        <!--begin::Menu-->
        <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
            <li class="menu-item"><a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a></li>
            <li class="menu-item"><a href="https://devs.keenthemes.com" target="_blank"
                    class="menu-link px-2">Support</a></li>
            <li class="menu-item"><a href="https://1.envato.market/EA4JP" target="_blank"
                    class="menu-link px-2">Purchase</a></li>
        </ul>
        <!--end::Menu-->
    </div>
    <!--end::Footer container-->
</div>
<!--end::Footer-->
