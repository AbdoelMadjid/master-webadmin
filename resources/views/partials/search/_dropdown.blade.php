<!--begin::Search-->
<div id="kt_header_search" class="header-search d-flex align-items-stretch" data-kt-search-keypress="true"
    data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-menu-trigger="auto"
    data-kt-menu-overflow="false" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-end">
    <!--begin::Search toggle-->
    <div class="d-flex align-items-center" data-kt-search-element="toggle" id="kt_header_search_toggle">
        <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px">
            <i class="ki-duotone ki-magnifier fs-2">
                <span class="path1"></span>
                <span class="path2"></span>
            </i>
        </div>
    </div>
    <!--end::Search toggle-->
    <!--begin::Menu-->
    <div data-kt-search-element="content" class="menu menu-sub menu-sub-dropdown p-7 w-325px w-md-375px">
        <!--begin::Wrapper-->
        <div data-kt-search-element="wrapper">
            <!--layout-partial:partials/search/partials/_form-dropdown.html-->
            @include('partials.search.partials._form-dropdown')
            <!--layout-partial:partials/search/partials/_results.html-->
            @include('partials.search.partials._results')
            <!--layout-partial:partials/search/partials/_main.html-->
            @include('partials.search.partials._main')
            <!--layout-partial:partials/search/partials/_empty.html-->
            @include('partials.search.partials._empty')
        </div>
        <!--end::Wrapper-->
        <!--layout-partial:partials/search/partials/_advanced-options.html-->
        @include('partials.search.partials._advanced-options')
        <!--layout-partial:partials/search/partials/_preferences.html-->
        @include('partials.search.partials._preferences')
    </div>
    <!--end::Menu-->
</div>
<!--end::Search-->
