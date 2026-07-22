<!--begin::Toolbar-->
@isset($kt_app_toolbar)
    {{ $kt_app_toolbar }}
@else
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar  py-3 py-lg-6 ">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container  container-fluid d-flex flex-stack ">

            <!--layout-partial:layout/partials/_page-title.html-->
            @include('layouts.partials._page-title')

            <div class="d-flex align-items-center ms-2">
                <button id="kt_toolbar_date_popover_trigger" class="btn btn-icon btn-sm btn-light-primary d-md-none"
                    type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="bottom"
                    data-bs-html="true" data-bs-content="{!! renderDate() !!}" aria-label="Tanggal">
                    <i class="ki-duotone ki-calendar fs-2">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </button>

                <div class="d-none d-md-block ms-2 ms-md-0">
                    {!! renderDate() !!}
                </div>

            </div>
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    var triggerEl = document.getElementById('kt_toolbar_date_popover_trigger');
                    if (!triggerEl || typeof bootstrap === 'undefined') {
                        return;
                    }

                    if (!bootstrap.Popover.getInstance(triggerEl)) {
                        new bootstrap.Popover(triggerEl);
                    }
                });
            </script>
            <!--begin::Actions-->
            {{-- @isset($action)
                {{ $action }}
            @else
                <!--begin::Actions--> --}}
            {{-- @include('layouts.partials._action-filter') --}}
            {{-- @include('partials.general._button-1')
                @include('partials.menus._menu-1')
                <!--end::Actions-->
            @endisset --}}
            <!--end::Actions-->
        </div>
        <!--end::Toolbar container-->
    </div>
    <!--end::Toolbar-->
@endisset
<!--end::Toolbar-->
