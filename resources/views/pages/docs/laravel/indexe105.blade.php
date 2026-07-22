
<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: MetronicProduct Version: 8.3.1
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en" >
    <!--begin::Head-->
    
<!-- Mirrored from preview.keenthemes.com/laravel/metronic/docs/?page=getting-started/changelog by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Feb 2026 10:34:14 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
        <title>Changelog by KeenThemes</title>
        <meta charset="utf-8"/>
        <meta name="description" content=""/>
        <meta name="keywords" content=""/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="Changelog by KeenThemes" />
        <meta property="og:url" content="https://keenthemes.com/metronic"/>
        <meta property="og:site_name" content="Metronic by Keenthemes" />
        <link rel="canonical" href="{{ url('docs/laravel/indexe105') }}"/>
        <link rel="shortcut icon" href="assets/media/logos/metronic.ico"/>

        <!--begin::Fonts(mandatory for all pages)-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"/>        <!--end::Fonts-->

                    <!--begin::Vendor Stylesheets(used for this page only)-->
                            <link href="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.css') }}" rel="stylesheet" type="text/css"/>
                        <!--end::Vendor Stylesheets-->
        
        
                    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
                            <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css"/>
                            <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css"/>
                        <!--end::Global Stylesheets Bundle-->
        
        
        <script>
            // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking)
            if (window.top != window.self) {
                window.top.location.replace(window.self.location.href);
            }
        </script>
    </head>
    <!--end::Head-->

    <!--begin::Body-->
    <body >
        <!--begin::Theme mode setup on page load-->
<script>
	var defaultThemeMode = "light";
	var themeMode;

	if ( document.documentElement ) {
		if ( document.documentElement.hasAttribute("data-bs-theme-mode")) {
			themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
		} else {
			if ( localStorage.getItem("data-bs-theme") !== null ) {
				themeMode = localStorage.getItem("data-bs-theme");
			} else {
				themeMode = defaultThemeMode;
			}			
		}

		if (themeMode === "system") {
			themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
		}

		document.documentElement.setAttribute("data-bs-theme", themeMode);
	}            
</script>
<!--end::Theme mode setup on page load-->
        
        <!--begin::Main-->
<div class="d-flex flex-column flex-root">
	<!--begin::Page-->
	<div class="docs-page d-flex flex-row flex-column-fluid">
		<!--begin::Aside-->
<div
	id="kt_docs_aside"
	class="docs-aside"
	data-kt-drawer="true"
	data-kt-drawer-name="aside"
	data-kt-drawer-activate="{default: true, lg: false}"
	data-kt-drawer-overlay="true"
	data-kt-drawer-width="{default:'200px', '300px': '250px'}"
	data-kt-drawer-direction="start"
	data-kt-drawer-toggle="#kt_docs_aside_toggle">

    
<!--begin::Logo-->
<div class="docs-aside-logo flex-column-auto h-75px px-7" id="kt_docs_aside_logo">
    <!--begin::Link-->
    <a href="{{ url('docs/laravel/index708f') }}">
                    <img alt="Logo" src="assets/media/logos/metronic.svg" class="theme-light-show h-25px"/>
            <img alt="Logo" src="assets/media/logos/metronic-dark.svg" class="theme-dark-show h-25px"/>
            </a>
    <!--end::Link-->
</div>
<!--end::Logo-->
			
    <!--begin::Select-->
    <div class="docs-aside-select flex-column-auto px-7 pt-5 pt-lg-0 pb-lg-5" id="kt_docs_aside_select">
        <!--begin::Select wrapper-->
        <div>        
            <!--begin::Toggle-->
            <button type="button" class="btn btn-flex border flex-stack btn-light w-100 px-4 py-3 rotate" data-kt-menu-trigger="click" data-kt-menu-placement="bottom">
                <span class="d-flex align-items-center">
                    <span class="d-flex flex-center w-20px h-20px me-2">
                        <img src="assets/media/framework-logos/laravel.png" alt="" class="mw-100"/>
                    </span>

                    <span class="menu-title">
                        Laravel                    </span>
                </span>
                
                <span class="d-flex flex-center rotate-180 ms-3">
                     <i class="ki-duotone ki-down fs-4"></i>                </span>
            </button>
            <!--end::Toggle-->

            <!--begin::Menu-->
            <div class="docs-aside-select-menu menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-active-bg fw-semibold py-3 mh-75 hover-scroll" data-kt-menu="true">
                                    
                    <!--begin::Menu item-->
                    <div class="menu-item px-3" data-bs-toggle="tooltip" data-bs-placement="right" title="Metronic HTML theme documentation" data-bs-html="true" data-bs-delay-show="1000">
                        <a href="https://preview.keenthemes.com/html/metronic/docs/" class="menu-link px-3 "  >
                            <span class="d-flex flex-center w-20px h-20px me-2 ">
                                <img src="assets/media/framework-logos/html.png" alt="" class="w-100"/>
                            </span>

                            <span class="menu-title ">
                                HTML                            </span>

                                                    </a>
                    </div>
                    <!--end::Menu item-->
                                    
                    <!--begin::Menu item-->
                    <div class="menu-item px-3" data-bs-toggle="tooltip" data-bs-placement="right" title="Vue Starter Kit" data-bs-html="true" data-bs-delay-show="1000">
                        <a href="https://preview.keenthemes.com/metronic8/vue/docs/#/doc-overview" class="menu-link px-3 " target="_blank" >
                            <span class="d-flex flex-center w-20px h-20px me-2 ">
                                <img src="assets/media/framework-logos/vue.png" alt="" class="w-100"/>
                            </span>

                            <span class="menu-title ">
                                Vue                            </span>

                                                    </a>
                    </div>
                    <!--end::Menu item-->
                                    
                    <!--begin::Menu item-->
                    <div class="menu-item px-3" data-bs-toggle="tooltip" data-bs-placement="right" title="React Starter Kit" data-bs-html="true" data-bs-delay-show="1000">
                        <a href="https://preview.keenthemes.com/metronic8/react/docs/quick-start" class="menu-link px-3 " target="_blank" >
                            <span class="d-flex flex-center w-20px h-20px me-2 ">
                                <img src="assets/media/framework-logos/react.png" alt="" class="w-100"/>
                            </span>

                            <span class="menu-title ">
                                React                            </span>

                                                    </a>
                    </div>
                    <!--end::Menu item-->
                                    
                    <!--begin::Menu item-->
                    <div class="menu-item px-3" data-bs-toggle="tooltip" data-bs-placement="right" title="Angular Starter Kit" data-bs-html="true" data-bs-delay-show="1000">
                        <a href="https://preview.keenthemes.com/metronic8/angular/docs/quick-start" class="menu-link px-3 " target="_blank" >
                            <span class="d-flex flex-center w-20px h-20px me-2 ">
                                <img src="assets/media/framework-logos/angular.png" alt="" class="w-100"/>
                            </span>

                            <span class="menu-title ">
                                Angular                            </span>

                                                    </a>
                    </div>
                    <!--end::Menu item-->
                                    
                    <!--begin::Menu item-->
                    <div class="menu-item px-3" data-bs-toggle="tooltip" data-bs-placement="right" title="ASP.NET Core Starter Kit" data-bs-html="true" data-bs-delay-show="1000">
                        <a href="https://preview.keenthemes.com/asp.net-core/metronic/docs/" class="menu-link px-3 "  >
                            <span class="d-flex flex-center w-20px h-20px me-2 ">
                                <img src="assets/media/framework-logos/asp.net-core.png" alt="" class="w-100"/>
                            </span>

                            <span class="menu-title ">
                                ASP.NET Core                            </span>

                                                    </a>
                    </div>
                    <!--end::Menu item-->
                                    
                    <!--begin::Menu item-->
                    <div class="menu-item px-3" data-bs-toggle="tooltip" data-bs-placement="right" title="Node.js & Express.js <br/> Starter Kit" data-bs-html="true" data-bs-delay-show="1000">
                        <a href="https://preview.keenthemes.com/nodejs/metronic/docs/" class="menu-link px-3 "  >
                            <span class="d-flex flex-center w-20px h-20px me-2 ">
                                <img src="assets/media/framework-logos/nodejs.png" alt="" class="w-100"/>
                            </span>

                            <span class="menu-title ">
                                Node.js                            </span>

                                                    </a>
                    </div>
                    <!--end::Menu item-->
                                    
                    <!--begin::Menu item-->
                    <div class="menu-item px-3" data-bs-toggle="tooltip" data-bs-placement="right" title="Blazor Starter Kit" data-bs-html="true" data-bs-delay-show="1000">
                        <a href="https://preview.keenthemes.com/blazor/metronic/docs/" class="menu-link px-3 "  >
                            <span class="d-flex flex-center w-20px h-20px me-2 ">
                                <img src="assets/media/framework-logos/blazor.png" alt="" class="w-100"/>
                            </span>

                            <span class="menu-title ">
                                Blazor                            </span>

                                                    </a>
                    </div>
                    <!--end::Menu item-->
                                    
                    <!--begin::Menu item-->
                    <div class="menu-item px-3" data-bs-toggle="tooltip" data-bs-placement="right" title="Spring Starter Kit" data-bs-html="true" data-bs-delay-show="1000">
                        <a href="https://preview.keenthemes.com/spring/metronic/docs/" class="menu-link px-3 "  >
                            <span class="d-flex flex-center w-20px h-20px me-2 ">
                                <img src="assets/media/framework-logos/spring.png" alt="" class="w-100"/>
                            </span>

                            <span class="menu-title ">
                                Spring                            </span>

                                                    </a>
                    </div>
                    <!--end::Menu item-->
                                    
                    <!--begin::Menu item-->
                    <div class="menu-item px-3" data-bs-toggle="tooltip" data-bs-placement="right" title="Laravel Starter Kit" data-bs-html="true" data-bs-delay-show="1000">
                        <a href="{{ url('docs/laravel/index') }}" class="menu-link px-3 active" target="_blank" >
                            <span class="d-flex flex-center w-20px h-20px me-2 ">
                                <img src="assets/media/framework-logos/laravel.png" alt="" class="w-100"/>
                            </span>

                            <span class="menu-title ">
                                Laravel                            </span>

                                                    </a>
                    </div>
                    <!--end::Menu item-->
                                    
                    <!--begin::Menu item-->
                    <div class="menu-item px-3" data-bs-toggle="tooltip" data-bs-placement="right" title="Django Starter Kit" data-bs-html="true" data-bs-delay-show="1000">
                        <a href="https://preview.keenthemes.com/django/metronic/docs/" class="menu-link px-3 "  >
                            <span class="d-flex flex-center w-20px h-20px me-2 ">
                                <img src="assets/media/framework-logos/django.png" alt="" class="w-100"/>
                            </span>

                            <span class="menu-title ">
                                Django                            </span>

                                                    </a>
                    </div>
                    <!--end::Menu item-->
                                    
                    <!--begin::Menu item-->
                    <div class="menu-item px-3" data-bs-toggle="tooltip" data-bs-placement="right" title="Rails Starter Kit" data-bs-html="true" data-bs-delay-show="1000">
                        <a href="https://preview.keenthemes.com/rails/metronic/docs/" class="menu-link px-3 "  >
                            <span class="d-flex flex-center w-20px h-20px me-2 ">
                                <img src="assets/media/framework-logos/rails.png" alt="" class="w-100"/>
                            </span>

                            <span class="menu-title ">
                                Rails                            </span>

                                                    </a>
                    </div>
                    <!--end::Menu item-->
                                    
                    <!--begin::Menu item-->
                    <div class="menu-item px-3" data-bs-toggle="tooltip" data-bs-placement="right" title="Flask Starter Kit" data-bs-html="true" data-bs-delay-show="1000">
                        <a href="https://preview.keenthemes.com/flask/metronic/docs/" class="menu-link px-3 "  >
                            <span class="d-flex flex-center w-20px h-20px me-2 ">
                                <img src="assets/media/framework-logos/flask.png" alt="" class="w-100"/>
                            </span>

                            <span class="menu-title ">
                                Flask                            </span>

                                                    </a>
                    </div>
                    <!--end::Menu item-->
                                    
                    <!--begin::Menu item-->
                    <div class="menu-item px-3" data-bs-toggle="tooltip" data-bs-placement="right" title="Symfony Starter Kit" data-bs-html="true" data-bs-delay-show="1000">
                        <a href="https://preview.keenthemes.com/symfony/metronic/docs/" class="menu-link px-3 "  >
                            <span class="d-flex flex-center w-20px h-20px me-2 ">
                                <img src="assets/media/framework-logos/symfony.png" alt="" class="w-100"/>
                            </span>

                            <span class="menu-title ">
                                Symfony                            </span>

                                                    </a>
                    </div>
                    <!--end::Menu item-->
                                    
                    <!--begin::Menu item-->
                    <div class="menu-item px-3" data-bs-toggle="tooltip" data-bs-placement="right" title="Codeigniter Starter Kit" data-bs-html="true" data-bs-delay-show="1000">
                        <a href="javascript:void(0)" class="menu-link px-3 "  >
                            <span class="d-flex flex-center w-20px h-20px me-2 opacity-50">
                                <img src="assets/media/framework-logos/codeigniter.png" alt="" class="w-100"/>
                            </span>

                            <span class="menu-title opacity-50">
                                Codeigniter                            </span>

                                                            <span class="menu-badge opacity-75">
                                    <span class="badge badge-success badge-sm fw-semibold">Soon</span>
                                </span>
                                                    </a>
                    </div>
                    <!--end::Menu item-->
                                    
                    <!--begin::Menu item-->
                    <div class="menu-item px-3" data-bs-toggle="tooltip" data-bs-placement="right" title="Yii Starter Kit" data-bs-html="true" data-bs-delay-show="1000">
                        <a href="javascript:void(0)" class="menu-link px-3 "  >
                            <span class="d-flex flex-center w-20px h-20px me-2 opacity-50">
                                <img src="assets/media/framework-logos/yii.png" alt="" class="w-100"/>
                            </span>

                            <span class="menu-title opacity-50">
                                Yii                            </span>

                                                            <span class="menu-badge opacity-75">
                                    <span class="badge badge-success badge-sm fw-semibold">Soon</span>
                                </span>
                                                    </a>
                    </div>
                    <!--end::Menu item-->
                                    
                    <!--begin::Menu item-->
                    <div class="menu-item px-3" data-bs-toggle="tooltip" data-bs-placement="right" title="Play Starter Kit" data-bs-html="true" data-bs-delay-show="1000">
                        <a href="javascript:void(0)" class="menu-link px-3 "  >
                            <span class="d-flex flex-center w-20px h-20px me-2 opacity-50">
                                <img src="assets/media/framework-logos/play.png" alt="" class="w-100"/>
                            </span>

                            <span class="menu-title opacity-50">
                                Play                            </span>

                                                            <span class="menu-badge opacity-75">
                                    <span class="badge badge-success badge-sm fw-semibold">Soon</span>
                                </span>
                                                    </a>
                    </div>
                    <!--end::Menu item-->
                 
            </div>
            <!--end::Menu-->
        </div>
        <!--end::Select wrapper-->
    </div>
    <!--end::Select-->
	
    <!--begin::Aside Menu-->

<!--begin::Menu wrapper-->
<div class="docs-aside-menu flex-column-fluid">
    <div
        class="hover-scroll-overlay-y mt-5 mb-5 mt-lg-0 mb-lg-5 mx-3"
        id="kt_docs_aside_menu_wrapper"
        
        data-kt-scroll="true"
        data-kt-scroll-activate="{default: false, lg: true}"
        data-kt-scroll-height="auto"     
        data-kt-scroll-dependencies="#kt_docs_aside_logo, #kt_docs_aside_select, #kt_docs_aside_footer"
        data-kt-scroll-wrappers="#kt_docs_aside_menu" 
        data-kt-scroll-offset="10px"
    >
        <!--begin::Menu-->
        <div class="menu menu-fit menu-column menu-title-gray-800 menu-arrow-gray-500 menu-state-primary fw-semibold px-5" id="#kt_docs_aside_menu" data-kt-menu="true">
            <!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link py-2"  href="{{ url('docs/laravel/index708f') }}"  ><span  class="menu-title" >Overview</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link py-2"  href="{{ url('docs/laravel/getting-started') }}"  ><span  class="menu-title" >Getting Started</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link py-2"  href="{{ url('docs/laravel/file-structure') }}"  ><span  class="menu-title" >File Structure</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link py-2"  href="{{ url('docs/laravel/setting') }}"  ><span  class="menu-title" >Settings</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link py-2"  href="{{ url('docs/laravel/theme-api') }}"  ><span  class="menu-title" >Theme API</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link py-2"  href="{{ url('docs/laravel/assets') }}"  ><span  class="menu-title" >Assets</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link py-2"  href="{{ url('docs/laravel/rtl') }}"  ><span  class="menu-title" >RTL</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link py-2"  href="{{ url('docs/laravel/views') }}"  ><span  class="menu-title" >Views</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link py-2"  href="{{ url('docs/laravel/update') }}"  ><span  class="menu-title" >Updates</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link py-2"  href="https://devs.keenthemes.com/question/understanding-metronic-themeforest-license-a-comprehensive-guide" target="_blank"  ><span  class="menu-title" >Licenses & FAQs</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link py-2"  href="{{ url('docs/laravel/changelog') }}"  ><span  class="menu-title" >Changelog</span></a><!--end:Menu link--></div><!--end:Menu item-->        </div>
        <!--end::Menu-->
    </div>
</div>
<!--end::Menu wrapper-->
	<!--begin::Footer-->
<div class="d-flex flex-column flex-column-auto px-7 pb-7" id="kt_docs_aside_footer">
    <a href="https://devs.keenthemes.com/" class="btn btn-success w-100 fw-bold" target="_blank">
        Get Support
    </a>
</div>
<!--end::Footer--></div>
<!--end::Aside-->

		<!--begin::Wrapper-->
		<div class="docs-wrapper d-flex flex-column flex-row-fluid" id="kt_docs_wrapper">
			
<!--begin::Header-->
<div id="kt_docs_header" class="docs-header align-items-stretch mb-2 mb-lg-10">
	<!--begin::Container-->
	<div class="container">
		<div class="d-flex align-items-stretch justify-content-between py-3 h-75px">		
			<!--begin::Aside toggle-->
			<div class="d-flex align-items-center d-lg-none ms-n2 me-1" title="Show aside menu">
				<div class="btn btn-icon btn-flex btn-active-color-primary" id="kt_docs_aside_toggle">
					<i class="ki-duotone ki-abstract-14 fs-2"><span class="path1"></span><span class="path2"></span></i>				</div>
			</div>
			<!--end::Aside toggle-->

			<!--begin::Logo-->
			<div class="d-flex d-lg-none align-items-center flex-grow-1 flex-lg-grow-0 me-3 me-lg-15">
				<a href="{{ url('docs/laravel/index708f') }}">
											<img alt="Logo" src="assets/media/logos/metronic-small.svg" class="h-25px"/>
									</a>
			</div>
			<!--end::Logo-->
		
			<!--begin::Wrapper-->
			<div class="d-flex align-items-center justify-content-between flex-lg-grow-1">
				<!--begin::Header title-->
				<div class="d-flex align-items-center" id="kt_docs_header_title">
					
<!--begin::Page title-->
<div class="docs-page-title d-flex flex-column flex-lg-row align-items-lg-center py-5 mb-lg-0"
    data-kt-swapper="true"
    data-kt-swapper-mode="prepend"
    data-kt-swapper-parent="{default: '#kt_docs_content_container', 'lg': '#kt_docs_header_title'}"
    >

    <!--begin::Title-->
    <h1 class="d-flex align-items-center text-gray-900 my-1 fs-4">
        Documentation 

        <a href="{{ url('docs/laravel/indexe105') }}" class="badge fw-semibold fs-9 px-2 ms-2 bg-body text-gray-900 text-hover-primary shadow-sm">
            v8.3.1        </a>        
    </h1>
    <!--end::Title-->

    </div>
<!--end::Page title-->				</div>
				<!--end::Header title-->

				<!--begin::Toolbar-->
				<div class="d-flex align-items-center">
					<!--begin::Search-->
<div 
    id="kt_docs_search" 
    
    class="d-flex align-items-center w-lg-200px me-2 me-lg-3"
    
    data-kt-search-keypress="true"
    data-kt-search-min-length="2"
    data-kt-search-enter="enter"     
    data-kt-search-layout="menu"
    data-kt-search-responsive="lg"
    
    data-kt-menu-trigger="auto" 
    data-kt-menu-permanent="true" 
    data-kt-menu-placement="bottom-end">

    <!--begin::Tablet and mobile search toggle-->
    <div data-kt-search-element="toggle" class="d-flex d-lg-none align-items-center">
        <div class="btn btn-icon btn-color-gray-700 btn-active-color-primary bg-body w-40px h-40px">
            <i class="ki-duotone ki-magnifier fs-2"><span class="path1"></span><span class="path2"></span></i>        </div>
    </div>
    <!--end::Tablet and mobile search toggle-->

    <!--begin::Form-->
    <form data-kt-search-element="form" class="d-none d-lg-block w-100 mb-5 mb-lg-0 position-relative" autocomplete="off">	
        <!--begin::Hidden input(Added to disable form autocomplete)-->
        <input type="hidden"/>
        <!--end::Hidden input-->

        <!--begin::Icon-->
        <i class="ki-duotone ki-magnifier fs-2 text-gray-500 position-absolute top-50 translate-middle-y ms-4"><span class="path1"></span><span class="path2"></span></i>        <!--end::Icon-->

        <!--begin::Input-->
        <input type="text" class="form-control border-gray-200 h-40px bg-body ps-13 fs-7" name="search" value="" placeholder="Search..." data-kt-search-element="input"/>
        <!--end::Input-->

        <!--begin::Spinner-->
        <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
            <span class="spinner-border h-15px w-15px align-middle text-gray-500"></span>
        </span>
        <!--end::Spinner-->

        <!--begin::Reset-->
        <span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-4" data-kt-search-element="clear">
            <i class="ki-duotone ki-cross fs-2 me-0"><span class="path1"></span><span class="path2"></span></i>        </span>
        <!--end::Reset-->
    </form>
    <!--end::Form-->

    <!--begin::Menu-->
    <div data-kt-search-element="content" class="menu menu-sub menu-sub-dropdown w-300px w-md-350px py-7 ps-7 pe-5 overflow-hidden">
        <!--begin::Wrapper-->
        <div data-kt-search-element="wrapper">
            <!--begin::Search results-->
<div data-kt-search-element="results" class="d-none">
    <!--begin::Items-->
    <div class="scroll-y mh-200px mh-lg-350px">
                    <!--begin::Item-->
            <a href="{{ url('docs/laravel/index708f') }}" data-kt-searchable="true" class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                <span class="fw-bold fs-5 mb-0">Overview</span>

                                   <span class="fw-semibold fs-base text-muted">Overview</span>
                                    

                                
            </a>
            <!--end::Item-->
                    <!--begin::Item-->
            <a href="{{ url('docs/laravel/getting-started') }}" data-kt-searchable="true" class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                <span class="fw-bold fs-5 mb-0">Getting Started</span>

                                   <span class="fw-semibold fs-base text-muted">Getting started with your next project in just 5 minutes</span>
                                    

                                
            </a>
            <!--end::Item-->
                    <!--begin::Item-->
            <a href="{{ url('docs/laravel/file-structure') }}" data-kt-searchable="true" class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                <span class="fw-bold fs-5 mb-0">File Structure</span>

                                   <span class="fw-semibold fs-base text-muted">File structure and organization for your project</span>
                                    

                                
            </a>
            <!--end::Item-->
                    <!--begin::Item-->
            <a href="{{ url('docs/laravel/setting') }}" data-kt-searchable="true" class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                <span class="fw-bold fs-5 mb-0">Settings</span>

                                   <span class="fw-semibold fs-base text-muted">Theme configuration & settings</span>
                                    

                                
            </a>
            <!--end::Item-->
                    <!--begin::Item-->
            <a href="{{ url('docs/laravel/rtl') }}" data-kt-searchable="true" class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                <span class="fw-bold fs-5 mb-0">RTL</span>

                                   <span class="fw-semibold fs-base text-muted">Enable Right-to-Left</span>
                                    

                                
            </a>
            <!--end::Item-->
                    <!--begin::Item-->
            <a href="{{ url('docs/laravel/theme-api') }}" data-kt-searchable="true" class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                <span class="fw-bold fs-5 mb-0">Theme API</span>

                                   <span class="fw-semibold fs-base text-muted">Theme API</span>
                                    

                                
            </a>
            <!--end::Item-->
                    <!--begin::Item-->
            <a href="{{ url('docs/laravel/assets') }}" data-kt-searchable="true" class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                <span class="fw-bold fs-5 mb-0">Assets</span>

                                   <span class="fw-semibold fs-base text-muted">Assets</span>
                                    

                                
            </a>
            <!--end::Item-->
                    <!--begin::Item-->
            <a href="{{ url('docs/laravel/views') }}" data-kt-searchable="true" class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                <span class="fw-bold fs-5 mb-0">View</span>

                                   <span class="fw-semibold fs-base text-muted">View Templates</span>
                                    

                                
            </a>
            <!--end::Item-->
                    <!--begin::Item-->
            <a href="{{ url('docs/laravel/update') }}" data-kt-searchable="true" class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                <span class="fw-bold fs-5 mb-0">Updates</span>

                                   <span class="fw-semibold fs-base text-muted">Updates</span>
                                    

                                
            </a>
            <!--end::Item-->
                    <!--begin::Item-->
            <a href="{{ url('docs/laravel/changelog') }}" data-kt-searchable="true" class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                <span class="fw-bold fs-5 mb-0">Changelog</span>

                                   <span class="fw-semibold fs-base text-muted">Changelog</span>
                                    

                                
            </a>
            <!--end::Item-->
            </div>
    <!--end::Items-->
</div>
<!--end::Search results-->
            <!--begin::Recently viewed-->
<div class="mb-0" data-kt-search-element="main">
    <!--begin::Heading-->
    <div class="d-flex flex-stack fw-semibold mb-2">
        <!--begin::Label-->
        <span class="text-muted fs-base me-2">Suggestions:</span>
        <!--end::Label-->
    </div>
    <!--end::Heading-->

    <!--begin::Items-->
    <div class="scroll-y mh-200px mh-lg-325px">
                                                        <!--begin::Item-->
                <a href="{{ url('docs/laravel/getting-started') }}" class="d-flex flex-column text-gray-900 text-hover-primary py-2">
                    <span class="fw-bold fs-5 mb-0">Getting Started</span>
                                            <span class="fw-semibold fs-base text-muted">Getting started with your next project in just 5 minutes</span>
                                    </a>
                <!--end::Item-->
                                                <!--begin::Item-->
                <a href="{{ url('docs/laravel/file-structure') }}" class="d-flex flex-column text-gray-900 text-hover-primary py-2">
                    <span class="fw-bold fs-5 mb-0">File Structure</span>
                                            <span class="fw-semibold fs-base text-muted">File structure and organization for your project</span>
                                    </a>
                <!--end::Item-->
                                                <!--begin::Item-->
                <a href="{{ url('docs/laravel/setting') }}" class="d-flex flex-column text-gray-900 text-hover-primary py-2">
                    <span class="fw-bold fs-5 mb-0">Settings</span>
                                            <span class="fw-semibold fs-base text-muted">Theme configuration & settings</span>
                                    </a>
                <!--end::Item-->
                                                <!--begin::Item-->
                <a href="{{ url('docs/laravel/rtl') }}" class="d-flex flex-column text-gray-900 text-hover-primary py-2">
                    <span class="fw-bold fs-5 mb-0">RTL</span>
                                            <span class="fw-semibold fs-base text-muted">Enable Right-to-Left</span>
                                    </a>
                <!--end::Item-->
                                                                                                                            </div>
    <!--end::Items-->
</div>
<!--end::Recently viewed-->
            <!--begin::Empty-->
<div data-kt-search-element="empty" class="text-center d-none">
    <!--begin::Icon-->
    <div class="pt-10 pb-5">
        <i class="ki-duotone ki-search-list fs-4x opacity-50"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>    </div>
    <!--end::Icon-->

    <!--begin::Message-->
    <div class="pb-15 fw-semibold">
        <h3 class="text-gray-600 fs-5 mb-2">No result found</h3>
        <div class="text-muted fs-7">Please try again with a different query</div>
    </div>
    <!--end::Message-->
</div>
<!--end::Empty-->        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Menu-->
</div>
<!--end::Search-->
						

											<!--begin::Downloads link-->
						<a 
							class="btn btn-flex btn-outline border-gray-200 btn-color-gray-700 btn-active-color-primary bg-body h-40px fw-bold px-4 px-lg-6 me-2 me-lg-3" 
							href="https://devs.keenthemes.com/metronic/laravel">
							Downloads
						</a>
						<!--end::Downloads link-->
					
					<!--begin::Preview link-->
					<a class="btn btn-primary btn-flex h-40px border-0 fw-bold px-4 px-lg-6" href="https://preview.keenthemes.com/starterkit/metronic/laravel" target="_blank">
						Preview
					</a>
					<!--end::Preview link-->
					
					<!--begin::Theme mode-->
					<div class="d-flex align-items-center">
						
<!--begin::Menu toggle-->
<a href="javascript:void(0)" class="btn btn-icon btn-icon-muted btn-active-icon-primar ms-1" data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
    <i class="ki-duotone ki-night-day theme-light-show fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span></i>    <i class="ki-duotone ki-moon theme-dark-show fs-1"><span class="path1"></span><span class="path2"></span></i></a>
<!--begin::Menu toggle-->

<!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px" data-kt-menu="true" data-kt-element="theme-mode-menu">
    <!--begin::Menu item-->
    <div class="menu-item px-3 my-0">
        <a href="javascript:void(0)" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
            <span class="menu-icon" data-kt-element="icon">
                <i class="ki-duotone ki-night-day fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span></i>            </span>
            <span class="menu-title">
                Light
            </span>
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3 my-0">
        <a href="javascript:void(0)" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
            <span class="menu-icon" data-kt-element="icon">
                <i class="ki-duotone ki-moon fs-2"><span class="path1"></span><span class="path2"></span></i>            </span>
            <span class="menu-title">
                Dark
            </span>
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3 my-0">
        <a href="javascript:void(0)" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
            <span class="menu-icon" data-kt-element="icon">
                <i class="ki-duotone ki-screen fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>            </span>
            <span class="menu-title">
                System
            </span>
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->

					</div>
					<!--end::Theme mode-->
				</div>
				<!--end::Toolbar-->
			</div>
			<!--end::Wrapper-->
		</div>		

		<div class="border-gray-300 border-bottom border-bottom-dashed"></div>
	</div>
	<!--end::Container-->
</div>
<!--end::Header-->

			<!--begin::Content-->
			<div class="docs-content d-flex flex-column flex-column-fluid" id="kt_docs_content">
				<!--begin::Container-->
<div class="container d-flex flex-column flex-lg-row" id="kt_docs_content_container">
    <!--begin::Card-->
    <div class="card card-docs flex-row-fluid mb-2" id="kt_docs_content_card"> 
        <!--begin::Card Body-->
        <div class="card-body fs-6 py-15 px-10 py-lg-15 px-lg-15 text-gray-700">
            
<!--begin::Changelog-->
<div class="accordion accordion-flush accordion-icon-toggle" id="kt_accordion">
                    
        <!--begin::Item-->
        <div class="accordion-item mb-5">
            <!--begin::Header-->
            <div class="accordion-header py-3 d-flex " data-bs-toggle="collapse" data-bs-target="#kt_accordion_body_v8_3_1">
                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span class="path1"></span><span class="path2"></span></i></span>
                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                    Metronic v8.3.1 - 26 June, 2025                </h3>
            </div>
            <!--end::Header-->

            <!--begin::Body-->
            <div id="kt_accordion_body_v8_3_1" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse show" data-bs-parent="#kt_accordion">
                <div class="accordion-body ps-0 pt-0">
                                                                        <div class="mb-5">
                                <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                <ul class="my-0 py-0">
                                                                                                                        <li class="py-2">Synchronize the latest HTML version update - <a href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog" class="fw-bold" target="_blank">Changelog</a>.</li>
                                                                                                            </ul>         
                            </div>           
                                                            </div>
            </div>
            <!--end::Body-->
        </div>
        <!--end::Item-->
                    
        <!--begin::Item-->
        <div class="accordion-item mb-5">
            <!--begin::Header-->
            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_body_v8_3_0">
                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span class="path1"></span><span class="path2"></span></i></span>
                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                    Metronic v8.3.0 - 30 April, 2025                </h3>
            </div>
            <!--end::Header-->

            <!--begin::Body-->
            <div id="kt_accordion_body_v8_3_0" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse " data-bs-parent="#kt_accordion">
                <div class="accordion-body ps-0 pt-0">
                                                                        <div class="mb-5">
                                <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                <ul class="my-0 py-0">
                                                                                                                        <li class="py-2">Synchronize the latest HTML version update - <a href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog" class="fw-bold" target="_blank">Changelog</a>.</li>
                                                                                                                                                                <li class="py-2">Update Livewire to version 3.14.7.</li>
                                                                                                                                                                <li class="py-2">Refactor mutation handling in livewire.esm.js.</li>
                                                                                                                                                                <li class="py-2">Implement wire:current directive for active link highlighting.</li>
                                                                                                                                                                <li class="py-2">Adjust related source maps and manifest for consistency.</li>
                                                                                                                                                                <li class="py-2">Update composer.lock for package version upgrades.</li>
                                                                                                                                                                <li class="py-2">Modify Livewire update route to be conditional based on the production environment.</li>
                                                                                                                                                                <li class="py-2">Enhance drawer toggle condition in component logic.</li>
                                                                                                                                                                <li class="py-2">Fix menu click behavior.</li>
                                                                                                                                                                <li class="py-2">Adjust stepper functionality.</li>
                                                                                                                                                                <li class="py-2">Modify SCSS for nav tabs and dark theme variables.</li>
                                                                                                                                                                <li class="py-2">Remove deprecated button styles.</li>
                                                                                                                                                                <li class="py-2">Update package dependencies.</li>
                                                                                                            </ul>         
                            </div>           
                                                            </div>
            </div>
            <!--end::Body-->
        </div>
        <!--end::Item-->
                    
        <!--begin::Item-->
        <div class="accordion-item mb-5">
            <!--begin::Header-->
            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_body_v8_2_9">
                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span class="path1"></span><span class="path2"></span></i></span>
                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                    Metronic v8.2.9 - 20 November, 2024                </h3>
            </div>
            <!--end::Header-->

            <!--begin::Body-->
            <div id="kt_accordion_body_v8_2_9" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse " data-bs-parent="#kt_accordion">
                <div class="accordion-body ps-0 pt-0">
                                                                        <div class="mb-5">
                                <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                <ul class="my-0 py-0">
                                                                                                                        <li class="py-2">Synchronize the latest HTML version update - <a href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog" class="fw-bold" target="_blank">Changelog</a>.</li>
                                                                                                            </ul>         
                            </div>           
                                                            </div>
            </div>
            <!--end::Body-->
        </div>
        <!--end::Item-->
                    
        <!--begin::Item-->
        <div class="accordion-item mb-5">
            <!--begin::Header-->
            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_body_v8_2_8">
                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span class="path1"></span><span class="path2"></span></i></span>
                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                    Metronic v8.2.8 - 17 October, 2024                </h3>
            </div>
            <!--end::Header-->

            <!--begin::Body-->
            <div id="kt_accordion_body_v8_2_8" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse " data-bs-parent="#kt_accordion">
                <div class="accordion-body ps-0 pt-0">
                                                                        <div class="mb-5">
                                <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                <ul class="my-0 py-0">
                                                                                                                        <li class="py-2">Synchronize the latest HTML version update - <a href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog" class="fw-bold" target="_blank">Changelog</a>.</li>
                                                                                                                                                                <li class="py-2">Upgrade Laravel version 11</li>
                                                                                                                                                                <li class="py-2">Upgrade Livewire version 3.5</li>
                                                                                                            </ul>         
                            </div>           
                                                    <div class="mb-5">
                                <h3 class="fs-6 fw-bold mb-1">Fix:</h3>
                                <ul class="my-0 py-0">
                                                                                                                        <li class="py-2">Livewire error when edit user management</li>
                                                                                                            </ul>         
                            </div>           
                                                            </div>
            </div>
            <!--end::Body-->
        </div>
        <!--end::Item-->
                    
        <!--begin::Item-->
        <div class="accordion-item mb-5">
            <!--begin::Header-->
            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_body_v8_2_7">
                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span class="path1"></span><span class="path2"></span></i></span>
                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                    Metronic v8.2.7 - 12 August, 2024                </h3>
            </div>
            <!--end::Header-->

            <!--begin::Body-->
            <div id="kt_accordion_body_v8_2_7" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse " data-bs-parent="#kt_accordion">
                <div class="accordion-body ps-0 pt-0">
                                                                        <div class="mb-5">
                                <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                <ul class="my-0 py-0">
                                                                                                                        <li class="py-2">Synchronize the latest HTML version update - <a href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog" class="fw-bold" target="_blank">Changelog</a>.</li>
                                                                                                            </ul>         
                            </div>           
                                                    <div class="mb-5">
                                <h3 class="fs-6 fw-bold mb-1">Fix:</h3>
                                <ul class="my-0 py-0">
                                                                    </ul>         
                            </div>           
                                                            </div>
            </div>
            <!--end::Body-->
        </div>
        <!--end::Item-->
                    
        <!--begin::Item-->
        <div class="accordion-item mb-5">
            <!--begin::Header-->
            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_body_v8_2_6">
                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span class="path1"></span><span class="path2"></span></i></span>
                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                    Metronic v8.2.6 - 25 June, 2024                </h3>
            </div>
            <!--end::Header-->

            <!--begin::Body-->
            <div id="kt_accordion_body_v8_2_6" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse " data-bs-parent="#kt_accordion">
                <div class="accordion-body ps-0 pt-0">
                                                                        <div class="mb-5">
                                <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                <ul class="my-0 py-0">
                                                                                                                        <li class="py-2">Synchronize the latest HTML version update - <a href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog" class="fw-bold" target="_blank">Changelog</a>.</li>
                                                                                                                                                                <li class="py-2">Upgrade laravel v11</li>
                                                                                                            </ul>         
                            </div>           
                                                    <div class="mb-5">
                                <h3 class="fs-6 fw-bold mb-1">Fix:</h3>
                                <ul class="my-0 py-0">
                                                                                                                        <li class="py-2">Fixed datatable page buttons aligment</li>
                                                                                                                                                                <li class="py-2">Fixed keenicons not displaying</li>
                                                                                                                                                                <li class="py-2">Fixed JS error in datatable js file</li>
                                                                                                                                                                <li class="py-2">Fixed tagify plugin file location and version update</li>
                                                                                                            </ul>         
                            </div>           
                                                            </div>
            </div>
            <!--end::Body-->
        </div>
        <!--end::Item-->
                    
        <!--begin::Item-->
        <div class="accordion-item mb-5">
            <!--begin::Header-->
            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_body_v8_2_5">
                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span class="path1"></span><span class="path2"></span></i></span>
                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                    Metronic v8.2.5 - 30 March, 2024                </h3>
            </div>
            <!--end::Header-->

            <!--begin::Body-->
            <div id="kt_accordion_body_v8_2_5" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse " data-bs-parent="#kt_accordion">
                <div class="accordion-body ps-0 pt-0">
                                                                        <div class="mb-5">
                                <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                <ul class="my-0 py-0">
                                                                                                                        <li class="py-2">Synchronize the latest HTML version update - <a href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog" class="fw-bold" target="_blank">Changelog</a>.</li>
                                                                                                            </ul>         
                            </div>           
                                                            </div>
            </div>
            <!--end::Body-->
        </div>
        <!--end::Item-->
                    
        <!--begin::Item-->
        <div class="accordion-item mb-5">
            <!--begin::Header-->
            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_body_v8_2_4">
                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span class="path1"></span><span class="path2"></span></i></span>
                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                    Metronic v8.2.4 - 21 March, 2024                </h3>
            </div>
            <!--end::Header-->

            <!--begin::Body-->
            <div id="kt_accordion_body_v8_2_4" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse " data-bs-parent="#kt_accordion">
                <div class="accordion-body ps-0 pt-0">
                                                                        <div class="mb-5">
                                <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                <ul class="my-0 py-0">
                                                                                                                        <li class="py-2">Synchronize the latest HTML version update - <a href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog" class="fw-bold" target="_blank">Changelog</a>.</li>
                                                                                                                                                                <li class="py-2">Updates login page with specific error message</li>
                                                                                                                                                                <li class="py-2">Updates datatable version and fix the file name</li>
                                                                                                            </ul>         
                            </div>           
                                                    <div class="mb-5">
                                <h3 class="fs-6 fw-bold mb-1">Fix:</h3>
                                <ul class="my-0 py-0">
                                                                                                                        <li class="py-2">Fixes webpack mix warning</li>
                                                                                                                                                                <li class="py-2">Fixes missing theme mode dropdown</li>
                                                                                                                                                                <li class="py-2">Fixes empty CRUD form when adding new user</li>
                                                                                                                                                                <li class="py-2">Fixes redirection after signup</li>
                                                                                                            </ul>         
                            </div>           
                                                            </div>
            </div>
            <!--end::Body-->
        </div>
        <!--end::Item-->
                    
        <!--begin::Item-->
        <div class="accordion-item mb-5">
            <!--begin::Header-->
            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_body_v8_2_3">
                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span class="path1"></span><span class="path2"></span></i></span>
                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                    Metronic v8.2.3 - 13 January, 2024                </h3>
            </div>
            <!--end::Header-->

            <!--begin::Body-->
            <div id="kt_accordion_body_v8_2_3" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse " data-bs-parent="#kt_accordion">
                <div class="accordion-body ps-0 pt-0">
                                                                        <div class="mb-5">
                                <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                <ul class="my-0 py-0">
                                                                                                                        <li class="py-2">Synchronize the latest HTML version update - <a href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog" class="fw-bold" target="_blank">Changelog</a>.</li>
                                                                                                            </ul>         
                            </div>           
                                                            </div>
            </div>
            <!--end::Body-->
        </div>
        <!--end::Item-->
                    
        <!--begin::Item-->
        <div class="accordion-item mb-5">
            <!--begin::Header-->
            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_body_v8_2_2">
                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span class="path1"></span><span class="path2"></span></i></span>
                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                    Metronic v8.2.2 - 30 December, 2023                </h3>
            </div>
            <!--end::Header-->

            <!--begin::Body-->
            <div id="kt_accordion_body_v8_2_2" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse " data-bs-parent="#kt_accordion">
                <div class="accordion-body ps-0 pt-0">
                                                                        <div class="mb-5">
                                <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                <ul class="my-0 py-0">
                                                                                                                        <li class="py-2">Synchronize the latest HTML version update - <a href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog" class="fw-bold" target="_blank">Changelog</a>.</li>
                                                                                                                                                                <li class="py-2">Upgrade Livewire v3</li>
                                                                                                            </ul>         
                            </div>           
                                                    <div class="mb-5">
                                <h3 class="fs-6 fw-bold mb-1">Fix:</h3>
                                <ul class="my-0 py-0">
                                                                    </ul>         
                            </div>           
                                                            </div>
            </div>
            <!--end::Body-->
        </div>
        <!--end::Item-->
                    
        <!--begin::Item-->
        <div class="accordion-item mb-5">
            <!--begin::Header-->
            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_body_v8_2_1">
                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span class="path1"></span><span class="path2"></span></i></span>
                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                    Metronic v8.2.1 - 2 November, 2023                </h3>
            </div>
            <!--end::Header-->

            <!--begin::Body-->
            <div id="kt_accordion_body_v8_2_1" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse " data-bs-parent="#kt_accordion">
                <div class="accordion-body ps-0 pt-0">
                                                                        <div class="mb-5">
                                <h3 class="fs-6 fw-bold mb-1">New:</h3>
                                <ul class="my-0 py-0">
                                                                                                                        <li class="py-2">Added missing view button to user management listing</li>
                                                                                                                                                                <li class="py-2">Added email verification for signup</li>
                                                                                                            </ul>         
                            </div>           
                                                    <div class="mb-5">
                                <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                <ul class="my-0 py-0">
                                                                                                                        <li class="py-2">Synchronize the latest HTML version update - <a href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog" class="fw-bold" target="_blank">Changelog</a>.</li>
                                                                                                                                                                <li class="py-2">Update gray text html class</li>
                                                                                                                                                                <li class="py-2">Include backend API demo for Angular CRUD</li>
                                                                                                            </ul>         
                            </div>           
                                                    <div class="mb-5">
                                <h3 class="fs-6 fw-bold mb-1">Fix:</h3>
                                <ul class="my-0 py-0">
                                                                                                                        <li class="py-2">Fixed webpack issue with the latest version of draggable plugin.</li>
                                                                                                                                                                <li class="py-2">Fixed webpack mix issue with latest draggable plugin issue</li>
                                                                                                                                                                <li class="py-2">Fixed theme mode option</li>
                                                                                                                                                                <li class="py-2">Fixed redirect links</li>
                                                                                                                                                                <li class="py-2">Fixed remove uploaded image in user management</li>
                                                                                                                                                                <li class="py-2">Fixed uploaded image URL in user management</li>
                                                                                                                                                                <li class="py-2">Fixed aside menu collapse state</li>
                                                                                                                                                                <li class="py-2">Fixed page breadcrumbs generator</li>
                                                                                                            </ul>         
                            </div>           
                                                            </div>
            </div>
            <!--end::Body-->
        </div>
        <!--end::Item-->
                    
        <!--begin::Item-->
        <div class="accordion-item mb-5">
            <!--begin::Header-->
            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_body_v8_2_0">
                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span class="path1"></span><span class="path2"></span></i></span>
                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                    Metronic v8.2.0 - 19 July, 2023                </h3>
            </div>
            <!--end::Header-->

            <!--begin::Body-->
            <div id="kt_accordion_body_v8_2_0" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse " data-bs-parent="#kt_accordion">
                <div class="accordion-body ps-0 pt-0">
                                                                        <div class="mb-5">
                                <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                <ul class="my-0 py-0">
                                                                                                                        <li class="py-2">Synchronize the latest HTML version core assets update - <a href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog" class="fw-bold" target="_blank">Changelog</a>.</li>
                                                                                                                                                                <li class="py-2">Improve User, Roles, and Permissions Management CRUD and datatables.</li>
                                                                                                            </ul>         
                            </div>           
                                                    <div class="mb-5">
                                <h3 class="fs-6 fw-bold mb-1">Fix:</h3>
                                <ul class="my-0 py-0">
                                                                                                                        <li class="py-2">Fix webpack mix build NULL error on Windows.</li>
                                                                                                                                                                <li class="py-2"><code>KeenIcons</code> Rendering issue on Mac Safari</li>
                                                                                                            </ul>         
                            </div>           
                                                            </div>
            </div>
            <!--end::Body-->
        </div>
        <!--end::Item-->
                    
        <!--begin::Item-->
        <div class="accordion-item mb-5">
            <!--begin::Header-->
            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_body_v8_1_9">
                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span class="path1"></span><span class="path2"></span></i></span>
                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                    Metronic v8.1.9 - 10 July, 2023                </h3>
            </div>
            <!--end::Header-->

            <!--begin::Body-->
            <div id="kt_accordion_body_v8_1_9" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse " data-bs-parent="#kt_accordion">
                <div class="accordion-body ps-0 pt-0">
                                                                        <div class="mb-5">
                                <h3 class="fs-6 fw-bold mb-1">New:</h3>
                                <ul class="my-0 py-0">
                                                                                                                        <li class="py-2">Add new Roles management CRUD</li>
                                                                                                                                                                <li class="py-2">Add new Permissions management CRUD</li>
                                                                                                                                                                <li class="py-2">Add new User management CRUD - datatable list, create, edit, update, delete</li>
                                                                                                                                                                <li class="py-2">Add new User authentication - login, register, reset password</li>
                                                                                                            </ul>         
                            </div>           
                                                    <div class="mb-5">
                                <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                <ul class="my-0 py-0">
                                                                                                                        <li class="py-2">Synchronize the latest HTML version update - <a href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog" class="fw-bold" target="_blank">Changelog</a>.</li>
                                                                                                                                                                <li class="py-2">Update header layout</li>
                                                                                                                                                                <li class="py-2">Update FormValidation webpack build</li>
                                                                                                            </ul>         
                            </div>           
                                                    <div class="mb-5">
                                <h3 class="fs-6 fw-bold mb-1">Fix:</h3>
                                <ul class="my-0 py-0">
                                                                                                                        <li class="py-2">Fix Typed.js plugin error in webpack</li>
                                                                                                                                                                <li class="py-2">Fix RTL to enable by config</li>
                                                                                                            </ul>         
                            </div>           
                                                            </div>
            </div>
            <!--end::Body-->
        </div>
        <!--end::Item-->
                    
        <!--begin::Item-->
        <div class="accordion-item mb-5">
            <!--begin::Header-->
            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_body_v8_1_8">
                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span class="path1"></span><span class="path2"></span></i></span>
                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                    Metronic v8.1.8 - 24 March, 2023                </h3>
            </div>
            <!--end::Header-->

            <!--begin::Body-->
            <div id="kt_accordion_body_v8_1_8" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse " data-bs-parent="#kt_accordion">
                <div class="accordion-body ps-0 pt-0">
                                                                        <div class="mb-5">
                                <h3 class="fs-6 fw-bold mb-1">New:</h3>
                                <ul class="my-0 py-0">
                                                                                                                        <li class="py-2">Global Icons Migration to Keenicons - <a href="https://docs.google.com/spreadsheets/d/1qwrKmX-2i_mRr_JkAbEVQTdbUiZg85-hEM89sSXatf8/edit#gid=0" class="fw-bold" target="_blank">Changelog</a>.</li>
                                                                                                                                                                <li class="py-2">Store sidebar minimized state in cookies.</li>
                                                                                                                                                                <li class="py-2">Add new function <code>removeHtmlClass($scope, $value)</code> to remove existing class in the list.</li>
                                                                                                                                                                <li class="py-2">Add new icon <code>keenicons</code>.</li>
                                                                                                                                                                <li class="py-2">Add new function to get icon <code>getIcon($name, $class, $type)</code></li>
                                                                                                                                                                <li class="py-2">Add a date picker plugin <code>Tempus Dominus</code></li>
                                                                                                            </ul>         
                            </div>           
                                                    <div class="mb-5">
                                <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                <ul class="my-0 py-0">
                                                                                                                        <li class="py-2">Synchronize the latest HTML version update - <a href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog" class="fw-bold" target="_blank">Changelog</a>.</li>
                                                                                                                                                                <li class="py-2">Upgrade Laravel version 10</li>
                                                                                                                                                                <li class="py-2">Move <code>search</code> component folder into layout folder.</li>
                                                                                                                                                                <li class="py-2">Update <code>addHtmlClass($scope, $value)</code> to append new class instead of replacing existing class list.</li>
                                                                                                                                                                <li class="py-2">Add feature to keep sidebar state cookie</li>
                                                                                                                                                                <li class="py-2">Exclude encrypt cookies for sidebar state</li>
                                                                                                                                                                <li class="py-2">Move global search to local layout search folder (sidebar-layout /  header-layout)</li>
                                                                                                            </ul>         
                            </div>           
                                                    <div class="mb-5">
                                <h3 class="fs-6 fw-bold mb-1">Fix:</h3>
                                <ul class="my-0 py-0">
                                                                                                                        <li class="py-2">Remove broken href HTML links.</li>
                                                                                                                                                                <li class="py-2">Fix missing token in the reset new password page. <code>$request->input('token')</code></li>
                                                                                                                                                                <li class="py-2">Fix registration page</li>
                                                                                                                                                                <li class="py-2">Fix missing <code>app-blank</code> class to the error page.</li>
                                                                                                                                                                <li class="py-2">Fix missing <code>app-auth</code> class to the auth page.</li>
                                                                                                                                                                <li class="py-2">Fix missing required body class <code>app-default</code>.</li>
                                                                                                                                                                <li class="py-2">Fix <code>&lt;?</code> in the blade HTML file.</li>
                                                                                                                                                                <li class="py-2">Fix sidebar animating behaviour.</li>
                                                                                                                                                                <li class="py-2">Fix <code>typed.js</code> version issue when build using webpack</li>
                                                                                                                                                                <li class="py-2">Fix missing fix tempus-dominus</li>
                                                                                                                                                                <li class="py-2">Fix function addHtmlClass() to append classes instead of replacing it</li>
                                                                                                            </ul>         
                            </div>           
                                                            </div>
            </div>
            <!--end::Body-->
        </div>
        <!--end::Item-->
                    
        <!--begin::Item-->
        <div class="accordion-item mb-5">
            <!--begin::Header-->
            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_body_v8_1_7">
                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span class="path1"></span><span class="path2"></span></i></span>
                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                    Metronic v8.1.7 - 25 January, 2023                </h3>
            </div>
            <!--end::Header-->

            <!--begin::Body-->
            <div id="kt_accordion_body_v8_1_7" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse " data-bs-parent="#kt_accordion">
                <div class="accordion-body ps-0 pt-0">
                                                                        <div class="mb-5">
                                <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                <ul class="my-0 py-0">
                                                                                                                        <li class="py-2">Synchronize the base version update - <a href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog" class="fw-bold" target="_blank">Changelog</a>.</li>
                                                                                                                                                                <li class="py-2">Globally change <code>data-theme</code> HTML attribute to <code>data-bs-theme</code></li>
                                                                                                            </ul>         
                            </div>           
                                                    <div class="mb-5">
                                <h3 class="fs-6 fw-bold mb-1">Fix:</h3>
                                <ul class="my-0 py-0">
                                                                                                                        <li class="py-2">Fix select2 style and include missing demo custom plugin scss file.</li>
                                                                                                                                                                <li class="py-2">Fix components.scss file of broken <code>stepper</code> style.</li>
                                                                                                            </ul>         
                            </div>           
                                                            </div>
            </div>
            <!--end::Body-->
        </div>
        <!--end::Item-->
                    
        <!--begin::Item-->
        <div class="accordion-item mb-5">
            <!--begin::Header-->
            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_body_v8_1_6">
                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span class="path1"></span><span class="path2"></span></i></span>
                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                    Metronic v8.1.6 - 24 November, 2022                </h3>
            </div>
            <!--end::Header-->

            <!--begin::Body-->
            <div id="kt_accordion_body_v8_1_6" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse " data-bs-parent="#kt_accordion">
                <div class="accordion-body ps-0 pt-0">
                                                                        <div class="mb-5">
                                <h3 class="fs-6 fw-bold mb-1">New:</h3>
                                <ul class="my-0 py-0">
                                                                                                                        <li class="py-2">Initial release</li>
                                                                                                            </ul>         
                            </div>           
                                                            </div>
            </div>
            <!--end::Body-->
        </div>
        <!--end::Item-->
    </div>
<!--end::Changelog-->        </div>
        <!--end::Card Body-->
    </div>
    <!--end::Card-->

    <!--begin::Sidebar wrapper-->
    <div class="ms-7 flex-row-auto w-lg-250px">
        <!--begin::Sidebar nav-->
<div
    class="card card-flush d-none d-lg-flex"
    
    data-kt-sticky="true"
    data-kt-sticky-name="sidebar-navs"
    data-kt-sticky-offset="{default: false, lg: 250}"
    data-kt-sticky-width="250px"
    data-kt-sticky-animation="false"
    data-kt-sticky-left="auto"
    data-kt-sticky-top="25px"
    data-kt-sticky-zindex="5"
>
    <!--begin::Card body-->
    <div class="card-body px-0 px-6 py-6 min-h-300px">
        
                
            <a href="https://1.envato.market/Vm7VRE" class="d-block mb-8">
                <img src="../../../../devs.keenthemes.com/assets/media/banners/buy-metronic.png" 
                alt="buy metronic" class="mw-100 rounded-3" data-bs-toggle="popover" 
                data-bs-trigger="hover" 
                data-bs-html="true" 
                data-bs-placement="top" 
                data-bs-title="<b>License Reminder</b>" 
                data-bs-content="One license allows using Metronic for a single deployment and all subsequent usage requires a separate license. <div class='mb-3'></div> If you plan to use Metronic in a Software as a Service (SaaS) model with paid subscriptions, you'll need an Extended License." 
                />
            </a>
        
        <a href="https://keenthemes.com/products/templates-mega-bundle?utm_source=docs&amp;utm_content=mega-bundle" class="d-block mb-8">
            <img src="../../../../devs.keenthemes.com/assets/media/banners/mega-bundle.png" alt="buy mega bundle" class="mw-100 rounded-3"/>
        </a>
    </div>
    <!--end::Card body-->
</div>
<!--end::Sidebar nav-->    </div>
    <!--end::Sidebar wrapper-->
</div>
<!--end::Container-->			</div>
			<!--end::Content-->

			<!--begin::Footer-->
<div class="py-4 d-flex flex-lg-column py-6" id="kt_footer">
	<!--begin::Container-->
	<div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
		<!--begin::Copyright-->
		<div class="text-gray-900 order-2 order-md-1">
			<span class="text-muted fw-semibold me-1">2026&copy;</span>
			<a href="https://keenthemes.com/" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
		</div>
		<!--end::Copyright-->

		<!--begin::Menu-->
		<ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1 align-items-center mb-3 mb-md-0">
							<!--begin::Menu item-->
				<li class="menu-item">
					<!--begin::Menu link-->
					<a href="https://www.youtube.com/c/KeenThemesTuts/videos" target="_blank" class="menu-link px-3">
						<img alt="Keenthemes Youtube" src="assets/media/svg/social-logos/youtube.svg" class="w-20px"/>
					</a>
					<!--end::Menu link-->
				</li>
				<!--end::Menu link-->
							<!--begin::Menu item-->
				<li class="menu-item">
					<!--begin::Menu link-->
					<a href="https://www.facebook.com/keenthemes/" target="_blank" class="menu-link px-3">
						<img alt="Keenthemes Facebook" src="assets/media/svg/social-logos/facebook.svg" class="w-20px"/>
					</a>
					<!--end::Menu link-->
				</li>
				<!--end::Menu link-->
							<!--begin::Menu item-->
				<li class="menu-item">
					<!--begin::Menu link-->
					<a href="https://github.com/keenthemes" target="_blank" class="menu-link px-3">
						<img alt="Keenthemes Github" src="assets/media/svg/social-logos/github.svg" class="w-20px"/>
					</a>
					<!--end::Menu link-->
				</li>
				<!--end::Menu link-->
							<!--begin::Menu item-->
				<li class="menu-item">
					<!--begin::Menu link-->
					<a href="https://twitter.com/keenthemes" target="_blank" class="menu-link px-3">
						<img alt="Keenthemes Twitter" src="assets/media/svg/social-logos/x.svg" class="w-20px"/>
					</a>
					<!--end::Menu link-->
				</li>
				<!--end::Menu link-->
							<!--begin::Menu item-->
				<li class="menu-item">
					<!--begin::Menu link-->
					<a href="https://www.instagram.com/keenthemes" target="_blank" class="menu-link px-3">
						<img alt="Keenthemes Instagram" src="assets/media/svg/social-logos/instagram.svg" class="w-20px"/>
					</a>
					<!--end::Menu link-->
				</li>
				<!--end::Menu link-->
							<!--begin::Menu item-->
				<li class="menu-item">
					<!--begin::Menu link-->
					<a href="https://www.linkedin.com/company/keenthemes" target="_blank" class="menu-link px-3">
						<img alt="Keenthemes Linkedin" src="assets/media/svg/social-logos/linkedin.svg" class="w-20px"/>
					</a>
					<!--end::Menu link-->
				</li>
				<!--end::Menu link-->
							<!--begin::Menu item-->
				<li class="menu-item">
					<!--begin::Menu link-->
					<a href="https://dribbble.com/keenthemes" target="_blank" class="menu-link px-3">
						<img alt="Keenthemes Dribbble" src="assets/media/svg/social-logos/dribbble.svg" class="w-20px"/>
					</a>
					<!--end::Menu link-->
				</li>
				<!--end::Menu link-->
					</ul>
		<!--end::Menu-->
	</div>
	<!--end::Container-->
</div>
<!--end::Footer-->
		</div>
		<!--end::Wrapper-->
	</div>
	<!--end::Page-->
</div>
<!--end::Main-->

		<!--begin::Engage-->
		<div class="app-engage " id="kt_app_engage">  
			
			
							<!--begin::Prebuilts toggle-->
				<a href="https://preview.keenthemes.com/starterkit/metronic/laravel" target="_blank" class="app-engage-btn hover-dark">		
					<i class="ki-duotone ki-abstract-41 fs-1 pt-1 mb-2"><span class="path1"></span><span class="path2"></span></i>					Preview
				</a>
				<!--end::Prebuilts toggle-->
			
							<!--begin::Get help-->
				<a href="https://devs.keenthemes.com/" target="_blank" class="app-engage-btn hover-primary">			
					<i class="ki-duotone ki-like-shapes fs-1 pt-1 mb-2"><span class="path1"></span><span class="path2"></span></i>					Get Help
				</a>
				<!--end::Get help-->
			
							<!--begin::Prebuilts toggle-->
				<a href="https://1.envato.market/EA4JP" target="_blank" class="app-engage-btn hover-success">			
					<i class="ki-duotone ki-basket fs-2 pt-1 mb-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>					Buy Now
				</a>
				<!--end::Prebuilts toggle-->
			
					</div>
		<!--end::Engage-->

		<!--begin::Engage modals-->
				<!--end::Engage modals-->
<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
	<i class="ki-duotone ki-arrow-up"><span class="path1"></span><span class="path2"></span></i></div>
<!--end::Scrolltop-->

        
        <!--begin::Javascript-->
        <script>
            var hostUrl = "assets/index.html";        </script>

                    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
                            <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
                            <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
                            <script src="{{ asset('assets/js/custom/documentation/documentation.js') }}"></script>
                            <script src="{{ asset('assets/js/custom/documentation/search.js') }}"></script>
                        <!--end::Global Javascript Bundle-->
        
                    <!--begin::Vendors Javascript(used for this page only)-->
                            <script src="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.js') }}"></script>
                        <!--end::Vendors Javascript-->
        
                <!--end::Javascript-->
    </body>
    <!--end::Body-->

<!-- Mirrored from preview.keenthemes.com/laravel/metronic/docs/?page=getting-started/changelog by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Feb 2026 10:34:14 GMT -->
</html>
