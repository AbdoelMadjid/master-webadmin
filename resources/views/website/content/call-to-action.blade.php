@php
    $hasCtaRecords = \App\Models\PageContent\CallToAction::count() > 0;
    $activeCta = \App\Models\PageContent\CallToAction::active()->first();
    $currentLang = app()->getLocale();
@endphp

@if(!$hasCtaRecords || $activeCta)
<!-- Call to Action -->
<div class="g-pos-rel">
    <div class="container text-center g-pt-100 g-pb-50">
        @if($activeCta)
            @php
                $ctaTitle = $currentLang == 'en' && !empty($activeCta->title_en) ? $activeCta->title_en : $activeCta->title;
                $ctaDesc = $currentLang == 'en' && !empty($activeCta->description_en) ? $activeCta->description_en : $activeCta->description;
                $primaryBtnText = $currentLang == 'en' && !empty($activeCta->primary_button_text_en) ? $activeCta->primary_button_text_en : ($activeCta->primary_button_text ?: __('website.apply_now'));
                $primaryBtnUrl = $activeCta->primary_button_url ? (str_starts_with($activeCta->primary_button_url, 'http') ? $activeCta->primary_button_url : url($activeCta->primary_button_url)) : route('website.apply-all-intake');
                
                $secondaryBtnText = $currentLang == 'en' && !empty($activeCta->secondary_button_text_en) ? $activeCta->secondary_button_text_en : ($activeCta->secondary_button_text ?: __('website.contact_us'));
                $secondaryBtnUrl = $activeCta->secondary_button_url ? (str_starts_with($activeCta->secondary_button_url, 'http') ? $activeCta->secondary_button_url : url($activeCta->secondary_button_url)) : route('website.contacts');
            @endphp
            <!-- Heading -->
            <div class="g-max-width-645 mx-auto g-mb-40">
                <h2 class="h1 mb-3">{{ $ctaTitle }}</h2>
                @if($ctaDesc)
                    <p>{{ $ctaDesc }}</p>
                @endif
            </div>
            <!-- End Heading -->

            <a class="btn u-shadow-v33 g-color-white g-bg-primary g-bg-main--hover g-rounded-30 g-px-35 g-py-13"
                href="{{ $primaryBtnUrl }}">{{ $primaryBtnText }}</a>

            <!-- SVG Shape -->
            <svg class="d-inline-block g-width-35" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 37 1"
                enable-background="new 0 0 37 1" xml:space="preserve">
                <linearGradient id="SVGID_5_" gradientUnits="userSpaceOnUse" x1="0" y1="0.5" x2="37"
                    y2="0.5">
                    <stop offset="0" style="stop-color:#f5f6fa" />
                    <stop offset="1" style="stop-color:#b5b8cb" />
                </linearGradient>
                <line fill="none" stroke="url(#SVGID_5_)" stroke-miterlimit="10" x1="37" y1="0.5"
                    x2="0" y2="0.5" />
            </svg>
            <!-- End SVG Shape -->

            <span class="align-middle g-color-primary mx-1">{{ __('website.or') }}</span>

            <!-- SVG Shape -->
            <svg class="d-inline-block g-width-35" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 37 1"
                enable-background="new 0 0 37 1" xml:space="preserve">
                <linearGradient id="SVGID_6_" gradientUnits="userSpaceOnUse" x1="-10" y1="-1.5" x2="27"
                    y2="-1.5" gradientTransform="matrix(-1 0 0 -1 27 -1)">
                    <stop offset="0" style="stop-color:#f5f6fa" />
                    <stop offset="1" style="stop-color:#b5b8cb" />
                </linearGradient>
                <line fill="none" stroke="url(#SVGID_6_)" stroke-miterlimit="10" x1="0" y1="0.5"
                    x2="37" y2="0.5" />
            </svg>
            <!-- End SVG Shape -->

            <a class="btn u-shadow-v32 g-color-primary g-color-white--hover g-bg-white g-bg-main--hover g-rounded-30 g-px-35 g-py-13"
                href="{{ $secondaryBtnUrl }}">{{ $secondaryBtnText }}</a>
        @else
            <!-- Fallback Static Heading -->
            <div class="g-max-width-645 mx-auto g-mb-40">
                <h2 class="h1 mb-3">{{ __('website.cta_join_university') }}</h2>
                <p>{{ __('website.cta_strategy_text') }}</p>
            </div>

            <a class="btn u-shadow-v33 g-color-white g-bg-primary g-bg-main--hover g-rounded-30 g-px-35 g-py-13"
                href="{{ route('website.apply-all-intake') }}">{{ __('website.apply_now') }}</a>

            <!-- SVG Shape -->
            <svg class="d-inline-block g-width-35" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 37 1"
                enable-background="new 0 0 37 1" xml:space="preserve">
                <linearGradient id="SVGID_5_" gradientUnits="userSpaceOnUse" x1="0" y1="0.5" x2="37"
                    y2="0.5">
                    <stop offset="0" style="stop-color:#f5f6fa" />
                    <stop offset="1" style="stop-color:#b5b8cb" />
                </linearGradient>
                <line fill="none" stroke="url(#SVGID_5_)" stroke-miterlimit="10" x1="37" y1="0.5"
                    x2="0" y2="0.5" />
            </svg>

            <span class="align-middle g-color-primary mx-1">{{ __('website.or') }}</span>

            <!-- SVG Shape -->
            <svg class="d-inline-block g-width-35" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 37 1"
                enable-background="new 0 0 37 1" xml:space="preserve">
                <linearGradient id="SVGID_6_" gradientUnits="userSpaceOnUse" x1="-10" y1="-1.5" x2="27"
                    y2="-1.5" gradientTransform="matrix(-1 0 0 -1 27 -1)">
                    <stop offset="0" style="stop-color:#f5f6fa" />
                    <stop offset="1" style="stop-color:#b5b8cb" />
                </linearGradient>
                <line fill="none" stroke="url(#SVGID_6_)" stroke-miterlimit="10" x1="0" y1="0.5"
                    x2="37" y2="0.5" />
            </svg>

            <a class="btn u-shadow-v32 g-color-primary g-color-white--hover g-bg-white g-bg-main--hover g-rounded-30 g-px-35 g-py-13"
                href="{{ route('website.contacts') }}">{{ __('website.contact_us') }}</a>
        @endif
    </div>

    <!-- SVG Background Shape -->
    <svg class="g-pos-abs g-bottom-0 g-left-0 g-z-index-minus-1" xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 323"
        enable-background="new 0 0 1920 323" xml:space="preserve">
        <polygon fill="#f0f2f8" points="0,323 1920,323 1920,0 " />
        <polygon fill="#f5f6fa" points="-0.5,322.5 -0.5,131.5 658.3,212.3 " />
    </svg>
    <!-- End SVG Background Shape -->
</div>
<!-- End Call to Action -->
@else
<!-- Spacer when CTA is deactivated so content doesn't touch footer -->
<div class="g-mb-50 g-pb-30"></div>
@endif
