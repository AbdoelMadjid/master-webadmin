<!-- Footer -->
<footer class="g-bg-secondary g-pt-100 g-pb-50">
    <div class="container">
@php
    use App\Models\PageConfig\MenuWebsite\FooterNavigation;
    use App\Models\PageConfig\WebsiteProfile;
    use Illuminate\Support\Str;
    use Illuminate\Support\Facades\Route;

    $footerNavItems = FooterNavigation::active()->ordered()->get();

    try {
        $webProfile = WebsiteProfile::getActiveProfile();
    } catch (\Throwable $e) {
        $webProfile = (object) [
            'name' => 'Universitas Unify',
            'established_year' => '1978',
            'address' => 'Kingston, Ontario, Kanada',
            'copyright_text' => 'Sakola Repalogic - Sejak 1978',
        ];
    }

    $footerAddress = app()->getLocale() == 'en' && !empty($webProfile->address_en ?? null) ? $webProfile->address_en : ($webProfile->address ?? __('website.kingston_ontario_canada'));
    $footerCopyright = app()->getLocale() == 'en' && !empty($webProfile->copyright_text_en ?? null) ? $webProfile->copyright_text_en : ($webProfile->copyright_text ?? (($webProfile->name ?? 'Universitas Unify') . ' - Sejak ' . ($webProfile->established_year ?? '1978')));

    $getFooterUrl = function ($item) {
        if (empty($item->url) || $item->url === '#') {
            return '#';
        }
        if ($item->is_external || Str::startsWith($item->url, ['http://', 'https://', '/'])) {
            return $item->url;
        }
        if (Route::has($item->url)) {
            return route($item->url);
        }
        return url($item->url);
    };

    $getFooterTitle = function ($item) {
        $locale = app()->getLocale();
        if ($locale === 'en' && !empty($item->title_en)) {
            return $item->title_en;
        }
        return $item->title;
    };
@endphp

        <div class="row g-mb-40">
            @for($col = 1; $col <= 4; $col++)
                @php
                    $columnNavs = $footerNavItems->where('column', $col);
                @endphp
                <div class="col-6 col-md-3 g-mb-20">
                    <!-- Footer Links Column {{ $col }} -->
                    <ul class="list-unstyled">
                        @foreach($columnNavs as $nav)
                            <li class="g-py-5">
                                <a class="u-link-v5 g-color-footer-links g-color-primary--hover g-font-size-16"
                                    href="{{ $getFooterUrl($nav) }}" target="{{ $nav->target ?? '_self' }}">
                                    {{ $getFooterTitle($nav) }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                    <!-- End Footer Links Column {{ $col }} -->
                </div>
            @endfor
        </div>

        <!-- Footer Copyright -->
        <div class="row justify-content-lg-center align-items-center text-center">
            <div class="col-sm-6 col-md-4 col-lg-3 order-md-3 g-mb-30">
                <a class="u-link-v5 g-color-text g-color-primary--hover" href="#">
                    <i class="align-middle mr-2 icon-real-estate-027 u-line-icon-pro"></i>
                    {{ $footerAddress }}
                </a>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3 order-md-2 g-mb-30">
                <!-- Social Icons -->
                <ul class="list-inline mb-0">
                    <li class="list-inline-item g-mx-2">
                        <a class="u-icon-v1 u-icon-size--sm u-shadow-v32 g-color-primary g-color-white--hover g-bg-white g-bg-primary--hover rounded-circle"
                            href="#">
                            <i class="g-font-size-default fa fa-twitter"></i>
                        </a>
                    </li>
                    <li class="list-inline-item g-mx-2">
                        <a class="u-icon-v1 u-icon-size--sm u-shadow-v32 g-color-primary g-color-white--hover g-bg-white g-bg-primary--hover rounded-circle"
                            href="#">
                            <i class="g-font-size-default fa fa-facebook"></i>
                        </a>
                    </li>
                    <li class="list-inline-item g-mx-2">
                        <a class="u-icon-v1 u-icon-size--sm u-shadow-v32 g-color-primary g-color-white--hover g-bg-white g-bg-primary--hover rounded-circle"
                            href="#">
                            <i class="g-font-size-default fa fa-instagram"></i>
                        </a>
                    </li>
                    <li class="list-inline-item g-mx-2">
                        <a class="u-icon-v1 u-icon-size--sm u-shadow-v32 g-color-primary g-color-white--hover g-bg-white g-bg-primary--hover rounded-circle"
                            href="#">
                            <i class="g-font-size-default fa fa-youtube"></i>
                        </a>
                    </li>
                    <li class="list-inline-item g-mx-2">
                        <a class="u-icon-v1 u-icon-size--sm u-shadow-v32 g-color-primary g-color-white--hover g-bg-white g-bg-primary--hover rounded-circle"
                            href="#">
                            <i class="g-font-size-default fa fa-linkedin"></i>
                        </a>
                    </li>
                </ul>
                <!-- End Social Icons -->
            </div>

            <div class="col-md-4 col-lg-3 order-md-1 g-mb-30">
                <p class="g-color-text mb-0">{{ $footerCopyright }}</p>
            </div>
        </div>
        <!-- End Footer Copyright -->
    </div>
</footer>
<!-- End Footer -->

<!-- Go to Top -->
<a class="js-go-to u-go-to-v1 u-shadow-v32 g-width-40 g-height-40 g-color-primary g-color-white--hover g-bg-white g-bg-main--hover g-bg-main--focus g-font-size-12 rounded-circle"
    href="#" data-type="fixed" data-position='{
       "bottom": 15,
       "right": 15
     }'
    data-offset-top="400" data-compensation="#js-header" data-show-effect="slideInUp"
    data-hide-effect="slideInDown">
    <i class="hs-icon hs-icon-arrow-top"></i>
</a>
<!-- End Go to Top -->

