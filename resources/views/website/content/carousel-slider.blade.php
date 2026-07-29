@php
    $activeBanners = \Illuminate\Support\Facades\Cache::remember('web_slide_banners', 86400, function () {
        return \App\Models\PageContent\SlideBanner::active()->ordered()->get();
    });
    $currentLang = app()->getLocale();
@endphp

<div class="js-carousel u-carousel-v5" data-infinite="true" data-autoplay="true" data-speed="8000"
    data-pagi-classes="u-carousel-indicators-v34 g-absolute-centered--y g-left-auto g-right-30 g-right-100--md"
    data-calc-target="#js-header">

    @if($activeBanners->count() > 0)
        @foreach($activeBanners as $banner)
            @php
                $bgImg = $banner->image_url ? asset($banner->image_url) : asset('assets/img-temp/1920x1080/img5.jpg');
                $titlePrefix = $currentLang == 'en' && !empty($banner->title_prefix_en) ? $banner->title_prefix_en : $banner->title_prefix;
                $titleHighlight = $currentLang == 'en' && !empty($banner->title_highlight_en) ? $banner->title_highlight_en : $banner->title_highlight;
                $desc = $currentLang == 'en' && !empty($banner->description_en) ? $banner->description_en : $banner->description;
                $btnText = $currentLang == 'en' && !empty($banner->button_text_en) ? $banner->button_text_en : $banner->button_text;
            @endphp
            <!-- Carousel Slide -->
            <div class="js-slide h-100 g-flex-centered g-bg-img-hero g-bg-cover g-bg-black-opacity-0_3--after"
                style="background-image: url('{{ $bgImg }}');">
                <div class="container">
                    <div class="g-max-width-600 g-pos-rel g-z-index-1">
                        <a class="d-block g-text-underline--none--hover" href="{{ $banner->button_url ?: '#' }}">
                            @if($titlePrefix || $titleHighlight)
                                <span class="d-block g-color-white g-font-size-20--md mb-2">
                                    {{ $titlePrefix }} 
                                    @if($titleHighlight)
                                        <span class="g-brd-bottom--dashed g-brd-2 g-brd-primary g-color-primary g-font-weight-700 g-pb-2">
                                            {{ $titleHighlight }}
                                        </span>
                                    @endif
                                </span>
                            @endif
                            @if($desc)
                                <span class="d-block g-color-white g-font-secondary g-font-size-25 g-font-size-45--md g-line-height-1_4">
                                    {{ $desc }}
                                </span>
                            @endif
                        </a>

                        @if($btnText && $banner->button_url)
                            <div class="mt-4">
                                <a class="btn btn-primary btn-sm rounded-pill px-4 py-2" href="{{ $banner->button_url }}">
                                    {{ $btnText }}
                                </a>
                            </div>
                        @endif
                    </div>

                    <!-- Go to Button / Petunjuk Menggulung Halaman -->
                    <a class="js-go-to d-flex align-items-center g-color-white g-pos-abs g-bottom-0 g-z-index-1 g-text-underline--none--hover g-pb-60"
                        href="#" data-target="#content">
                        <span class="d-block u-go-to-v4 mr-3"></span>
                        <span class="g-brd-bottom--dashed g-brd-white-opacity-0_5 mr-1">{{ __('website.scroll_down') }}</span>
                        {{ __('website.to_find_out_more') }}
                    </a>
                    <!-- End Go to Button -->
                </div>
            </div>
            <!-- End Carousel Slide -->
        @endforeach
    @else
        <!-- Fallback Slide 1 -->
        <div class="js-slide h-100 g-flex-centered g-bg-img-hero g-bg-cover g-bg-black-opacity-0_3--after"
            style="background-image: url(assets/img-temp/1920x1080/img5.jpg);">
            <div class="container">
                <div class="g-max-width-600 g-pos-rel g-z-index-1">
                    <a class="d-block g-text-underline--none--hover" href="#">
                        <span class="d-block g-color-white g-font-size-20--md mb-2">
                            {{ __('website.carousel_slide1_title_prefix') }} <span
                                class="g-brd-bottom--dashed g-brd-2 g-brd-primary g-color-primary g-font-weight-700 g-pb-2">{{ __('website.carousel_slide1_title_highlight') }}</span>
                        </span>
                        <span
                            class="d-block g-color-white g-font-secondary g-font-size-25 g-font-size-45--md g-line-height-1_4">
                            {{ __('website.carousel_slide1_description') }}
                        </span>
                    </a>
                </div>

                <a class="js-go-to d-flex align-items-center g-color-white g-pos-abs g-bottom-0 g-z-index-1 g-text-underline--none--hover g-pb-60"
                    href="#" data-target="#content">
                    <span class="d-block u-go-to-v4 mr-3"></span>
                    <span class="g-brd-bottom--dashed g-brd-white-opacity-0_5 mr-1">{{ __('website.scroll_down') }}</span>
                    {{ __('website.to_find_out_more') }}
                </a>
            </div>
        </div>

        <!-- Fallback Slide 2 -->
        <div class="js-slide h-100 g-flex-centered g-bg-img-hero g-bg-cover g-bg-black-opacity-0_2--after"
            style="background-image: url(assets/img-temp/1920x1080/img6.jpg);">
            <div class="container">
                <div class="g-max-width-600 g-pos-rel g-z-index-1">
                    <a class="d-block g-text-underline--none--hover" href="#">
                        <span class="d-block g-color-white g-font-size-20--md mb-2">
                            {{ __('website.carousel_slide2_title_prefix') }} <span
                                class="g-brd-bottom--dashed g-brd-2 g-brd-primary g-color-primary g-font-weight-700 g-pb-2">{{ __('website.carousel_slide2_title_highlight') }}</span>
                        </span>
                        <span
                            class="d-block g-color-white g-font-secondary g-font-size-25 g-font-size-45--md g-line-height-1_4">
                            {{ __('website.carousel_slide2_description') }}
                        </span>
                    </a>
                </div>

                <a class="js-go-to d-flex align-items-center g-color-white g-pos-abs g-bottom-0 g-z-index-1 g-text-underline--none--hover g-pb-60"
                    href="#" data-target="#content">
                    <span class="d-block u-go-to-v4 mr-3"></span>
                    <span class="g-brd-bottom--dashed g-brd-white-opacity-0_5 mr-1">{{ __('website.scroll_down') }}</span>
                    {{ __('website.to_find_out_more') }}
                </a>
            </div>
        </div>
    @endif
</div>
