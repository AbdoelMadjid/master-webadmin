<!--begin::Footer-->
<div class="app-sidebar-footer flex-column-auto pt-2 pb-6 px-6" id="kt_app_sidebar_footer">
    <button type="button"
        class="btn btn-flex align-items-center justify-content-center btn-danger px-4 h-40px w-100 app-sidebar-footer-btn"
        data-bs-toggle="modal" data-bs-target="#kt_modal_about_app">
        <i class="ki-duotone ki-information-5 btn-icon fs-2 me-2 text-white app-sidebar-footer-icon">
            <span class="path1"></span>
            <span class="path2"></span>
            <span class="path3"></span>
        </i>
        <span class="btn-label fw-semibold text-white app-sidebar-footer-label">
            {{ app()->getLocale() == 'en' ? 'About App' : 'Tentang Aplikasi' }}
        </span>
    </button>
</div>
<!--end::Footer-->

<style>
    /* Transisi saat toggle minimize/expand sidebar */
    #kt_app_sidebar_footer .app-sidebar-footer-btn,
    #kt_app_sidebar_footer .app-sidebar-footer-label {
        transition: all 0.25s ease-in-out;
    }

    /* Tampilan Tombol mengecil HANYA saat Sidebar Minimised DAN TIDAK SEDANG DI-HOVER */
    body[data-kt-app-sidebar-minimize="on"] #kt_app_sidebar:not(:hover) #kt_app_sidebar_footer {
        padding-left: 0.5rem !important;
        padding-right: 0.5rem !important;
        display: flex !important;
        justify-content: center !important;
    }

    body[data-kt-app-sidebar-minimize="on"] #kt_app_sidebar:not(:hover) #kt_app_sidebar_footer .app-sidebar-footer-label {
        display: none !important;
    }

    body[data-kt-app-sidebar-minimize="on"] #kt_app_sidebar:not(:hover) #kt_app_sidebar_footer .app-sidebar-footer-icon {
        margin-right: 0 !important;
    }

    body[data-kt-app-sidebar-minimize="on"] #kt_app_sidebar:not(:hover) #kt_app_sidebar_footer .app-sidebar-footer-btn {
        width: 40px !important;
        height: 40px !important;
        padding: 0 !important;
        justify-content: center !important;
    }
</style>
