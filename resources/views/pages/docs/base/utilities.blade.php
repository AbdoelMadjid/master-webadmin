@extends('layouts.document832')
@section('styles')
    <link href="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <!--begin::Content-->
    <div class="docs-content d-flex flex-column flex-column-fluid" id="kt_docs_content">
        <!--begin::Container-->
        <div class="container d-flex flex-column flex-lg-row" id="kt_docs_content_container">
            <!--begin::Card-->
            <div class="card card-docs flex-row-fluid mb-2" id="kt_docs_content_card">
                <!--begin::Card Body-->
                <div class="card-body fs-6 py-15 px-10 py-lg-15 px-lg-15 text-gray-700">
                    <!--begin::Section-->
                    <div class="pb-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="overview" data-kt-scroll-offset="50">
                            <a href="#overview"></a>

                            Overview
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Metronicfully utilizes the <a href="https://getbootstrap.com/docs/5.2/utilities/api/"
                                class="fw-semibold">Bootstrap Utility API</a>&nbsp;
                            in <code>src/sass/components/_utilities.scss</code> to generate additional utility
                            classes to cover its own design system.
                            The customized utility SASS variables are defined in
                            <code>src/sass/components/_variables.scss</code> and in
                            <code>src/sass/components/_variables.custom.scss</code>
                            you can override any variable for your needs.
                        </div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="pb-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="theme-colors" data-kt-scroll-offset="50">
                            <a href="#theme-colors"></a>

                            Theme Colors
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Metronic extends <a href="https://getbootstrap.com/docs/5.2/customize/color/"
                                class="fw-semibold">Bootstrap Colors</a>&nbsp; system with extra variants
                            to cover its own design system build on top of the Boostrap Standards. The extended
                            theme color SASS variables are defined in
                            <code>src/sass/components/_variables.scss</code>:
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-scss" style="height:300px"><code class="language-scss">// Theme colors
$theme-colors: (
    &quot;white&quot;:      $white,  // custom color type
    &quot;primary&quot;:    $primary,
    &quot;secondary&quot;:  $secondary,
    &quot;success&quot;:    $success,
    &quot;info&quot;:       $info,
    &quot;warning&quot;:    $warning,
    &quot;danger&quot;:     $danger,
    &quot;light&quot;:      $light,
    &quot;dark&quot;:       $dark
) !default;

// Active and hover states colors
$theme-active-colors: (
    &quot;white&quot;:      $white-active,   // custom color type
    &quot;primary&quot;:    $primary-active,
    &quot;secondary&quot;:  $secondary-active,
    &quot;success&quot;:    $success-active,
    &quot;info&quot;:       $info-active,
    &quot;warning&quot;:    $warning-active,
    &quot;danger&quot;:     $danger-active,
    &quot;light&quot;:      $light-active,
    &quot;dark&quot;:       $dark-active
) !default;  // Custom variable

// Inverse colors
$theme-inverse-colors: (
    &quot;white&quot;:      $white-inverse,
    &quot;primary&quot;:    $primary-inverse,
    &quot;secondary&quot;:  $secondary-inverse,
    &quot;success&quot;:    $success-inverse,
    &quot;info&quot;:       $info-inverse,
    &quot;warning&quot;:    $warning-inverse,
    &quot;danger&quot;:     $danger-inverse,
    &quot;light&quot;:      $light-inverse,
    &quot;dark&quot;:       $dark-inverse
) !default;  // Custom variable

// Light colors
$theme-light-colors: (
    &quot;white&quot;:      $white-light,
    &quot;primary&quot;:    $primary-light,
    &quot;secondary&quot;:  $secondary-light,
    &quot;success&quot;:    $success-light,
    &quot;info&quot;:       $info-light,
    &quot;warning&quot;:    $warning-light,
    &quot;danger&quot;:     $danger-light,
    &quot;light&quot;:      $light-light,
    &quot;dark&quot;:       $dark-light
) !default;  // Custom variable

// Text colors
$theme-text-colors: (
    &quot;white&quot;:      $white,
    &quot;primary&quot;:    $primary,
    &quot;secondary&quot;:  $dark,
    &quot;success&quot;:    $success,
    &quot;info&quot;:       $info,
    &quot;warning&quot;:    $warning,
    &quot;danger&quot;:     $danger,
    &quot;light&quot;:      $light,
    &quot;dark&quot;:       $dark,
    &quot;muted&quot;:      $text-muted,
    &quot;gray-100&quot;:   $gray-100,
    &quot;gray-200&quot;:   $gray-200,
    &quot;gray-300&quot;:   $gray-300,
    &quot;gray-400&quot;:   $gray-400,
    &quot;gray-500&quot;:   $gray-500,
    &quot;gray-600&quot;:   $gray-600,
    &quot;gray-700&quot;:   $gray-700,
    &quot;gray-800&quot;:   $gray-800,
    &quot;gray-900&quot;:   $gray-900
) !default;  // Custom variable</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->

                        <!--begin::Info-->
                        <div class="py-5">
                            <!--begin::Information-->
                            <div class="d-flex align-items-center rounded py-5 px-5 bg-light-warning "><i
                                    class="ki-duotone ki-information-5 fs-3x text-warning me-5"><span
                                        class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-bold fs-6">
                                    Custom variables that used to customize Bootstrap components are marked with
                                    <code>Custom variable</code> comment in <code>_variables.scss</code>&nbsp; file.
                                </div> <!--end::Description-->
                            </div><!--end::Information-->
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="spacing" data-kt-scroll-offset="50">
                            <a href="#spacing"></a>

                            Spacing
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Metronic extends
                            <a href="https://getbootstrap.com/docs/5.2/utilities/spacing/" class="fw-semibold">Bootstrap
                                Spacing Classes</a>&nbsp;
                            to provide additonal spacing options by overidding the default spacing SASS variable as
                            shown below:
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-scss" style="height:200px"><code class="language-scss">$spacers: (
    0: 0,
    1: ($spacer * .25),
    2: ($spacer * .5),
    3: ($spacer * .75),
    4: ($spacer * 1),
    5: ($spacer * 1.25),
    6: ($spacer * 1.5),
    7: ($spacer * 1.75),
    8: ($spacer * 2),
    9: ($spacer * 2.25),
    10: ($spacer * 2.5),
    11: ($spacer * 2.75),
    12: ($spacer * 3),
    13: ($spacer * 3.25),
    14: ($spacer * 3.5),
    15: ($spacer * 3.75),
    16: ($spacer * 4),
    17: ($spacer * 4.25),
    18: ($spacer * 4.5),
    19: ($spacer * 4.75),
    20: ($spacer * 5)
);</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="font-sizes" data-kt-scroll-offset="50">
                            <a href="#font-sizes"></a>

                            Font Sizes
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Metronic extends
                            <a href="https://getbootstrap.com/docs/5.2/utilities/text/#font-size"
                                class="fw-semibold">Bootstrap Font Size Classes</a>&nbsp;
                            to provide additonal sizing options by overidding the default font size SASS variable as
                            shown below:
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-scss" style="height:200px"><code class="language-scss">$font-sizes: (
    1: $h1-font-size,   // 22.75px
    2: $h2-font-size,   // 19.50px
    3: $h3-font-size,   // 17.55px
    4: $h4-font-size,   // 16.25px
    5: $h5-font-size,   // 14.95px
    6: $h6-font-size,   // 13.95px

    7: $font-size-base * 0.95,  // 12.35px
    8: $font-size-base * 0.85,  // 11.05px
    9: $font-size-base * 0.75,  // 9.75px
    10: $font-size-base * 0.5,  // 6.50px

    base: $font-size-base, // 13px
    fluid: 100%, // 100%

    2x: $font-size-base * 2,        // 26px
    2qx: $font-size-base * 2.25,    // 29.25px
    2hx: $font-size-base * 2.5,     // 32.5px
    2tx: $font-size-base * 2.75,    // 35.75px

    3x: $font-size-base * 3,        // 39px
    3qx: $font-size-base * 3.25,    // 42.25px
    3hx: $font-size-base * 3.5,     // 45.5px
    3tx: $font-size-base * 3.75,    // 48.75px

    4x: $font-size-base * 4,        // 52px
    4qx: $font-size-base * 4.25,    // 55.25px
    4hx: $font-size-base * 4.5,     // 58.5px
    4tx: $font-size-base * 4.75,    // 61.75px

    5x: $font-size-base * 5,        // 65px
    5qx: $font-size-base * 5.25,    // 68.25px
    5hx: $font-size-base * 5.5,     // 71.5px
    5tx: $font-size-base * 5.75     // 74.75px
) !default;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="line-height" data-kt-scroll-offset="50">
                            <a href="#line-height"></a>

                            Line Height
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Metronic extends
                            <a href="https://getbootstrap.com/docs/5.2utilities/text/#line-height"
                                class="fw-semibold">Bootstrap Line Height Classes</a>&nbsp;
                            to provide additonal line height options by overidding the line height SASS variable.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            Use <code>.lh-{value}</code> class to set an element's line height where
                            <code>value</code> is one of:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <ul class="pt-3 pb-5">
                            <li class="py-2">
                                <code>1</code> - for classes that set line height to <code>1</code>
                            </li>
                            <li class="py-2">
                                <code>sm</code> - for classes that set line height to <code>1.25</code>
                            </li>
                            <li class="py-2">
                                <code>base</code> - for classes that set line height to <code>1.5</code>
                            </li>
                            <li class="py-2">
                                <code>lg</code> - for classes that set line height to <code>1.75</code>
                            </li>
                            <li class="py-2">
                                <code>xl</code> - for classes that set line height to <code>2</code>
                            </li>
                            <li class="py-2">
                                <code>xxl</code> - for classes that set line height to <code>2.25</code>
                            </li>
                        </ul>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">

                                <div class="lh-1 py-5">Example text <br /> for <code>.lh-1</code></div>
                                <div class="lh-sm py-5">Example text <br /> for <code>.lh-sm</code></div>
                                <div class="lh-base py-5">Example text <br /> for <code>.lh-base</code></div>
                                <div class="lh-lg py-5">Example text <br /> for <code>.lh-lg</code></div>
                                <div class="lh-xl py-5">Example text <br /> for <code>.lh-xl</code></div>
                                <div class="lh-xxl py-5">Example text <br /> for <code>.lh-xxl</code></div>
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;div class=&quot;lh-1&quot;&gt;Example text for .lh-1&lt;/div&gt;
&lt;div class=&quot;lh-sm&quot;&gt;Example text for .lh-sm&lt;/div&gt;
&lt;div class=&quot;lh-base&quot;&gt;Example text for .lh-base&lt;/div&gt;
&lt;div class=&quot;lh-lg&quot;&gt;Example text for .lh-lg&lt;/div&gt;
&lt;div class=&quot;lh-xl&quot;&gt;Example text for .lh-xl&lt;/div&gt;
&lt;div class=&quot;lh-xxl&quot;&gt;Example text for .lh-xxl&lt;/div&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="letter-spacing" data-kt-scroll-offset="50">
                            <a href="#letter-spacing"></a>

                            Letter Spacing
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Use <code>.ls-{value}</code> class to set an element's letter spacing where
                            <code>value</code> is one of:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <ul class="pt-3 pb-5">
                            <li class="py-2">
                                <code>1</code> - for classes that set letter spacing to <code>0.1rem</code>
                            </li>
                            <li class="py-2">
                                <code>2</code> - for classes that set letter spacing to <code>0.115rem</code>
                            </li>
                            <li class="py-2">
                                <code>3</code> - for classes that set letter spacing to <code>0.125rem</code>
                            </li>
                            <li class="py-2">
                                <code>4</code> - for classes that set letter spacing to <code>0.25rem</code>
                            </li>
                            <li class="py-2">
                                <code>5</code> - for classes that set letter spacing to <code>0.5rem</code>
                            </li>
                            <li class="py-2">
                                <code>n1</code> - for classes that set letter spacing to <code>-0.1rem</code>
                            </li>
                            <li class="py-2">
                                <code>n2</code> - for classes that set letter spacing to <code>-0.115rem</code>
                            </li>
                            <li class="py-2">
                                <code>n3</code> - for classes that set letter spacing to <code>-0.125rem</code>
                            </li>
                            <li class="py-2">
                                <code>n4</code> - for classes that set letter spacing to <code>-0.25rem</code>
                            </li>
                            <li class="py-2">
                                <code>n5</code> - for classes that set letter spacing to <code>-0.5rem</code>
                            </li>
                        </ul>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">

                                <div class="ls-1 py-5">Example text for <code>.ls-1</code></div>
                                <div class="ls-2 py-5">Example text for <code>.ls-2</code></div>
                                <div class="ls-3 py-5">Example text for <code>.ls-3</code></div>
                                <div class="ls-4 py-5">Example text for <code>.ls-4</code></div>
                                <div class="ls-5 py-5">Example text for <code>.ls-5</code></div>
                                <div class="ls-n1 py-5">Example text for <code>.ls-n1</code></div>
                                <div class="ls-n2 py-5">Example text for <code>.ls-n2</code></div>
                                <div class="ls-n3 py-5">Example text for <code>.ls-n3</code></div>
                                <div class="ls-n4 py-5">Example text for <code>.ls-n4</code></div>
                                <div class="ls-n5 py-5">Example text for <code>.ls-n5</code></div>
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;div class=&quot;ls-1&quot;&gt;Example text for .ls-1&lt;/div&gt;
&lt;div class=&quot;ls-2&quot;&gt;Example text for .ls-2&lt;/div&gt;
&lt;div class=&quot;ls-3&quot;&gt;Example text for .ls-3&lt;/div&gt;
&lt;div class=&quot;ls-4&quot;&gt;Example text for .ls-4&lt;/div&gt;
&lt;div class=&quot;ls-5&quot;&gt;Example text for .ls-5&lt;/div&gt;
&lt;div class=&quot;ls-n1&quot;&gt;Example text for .ls-n1&lt;/div&gt;
&lt;div class=&quot;ls-n2&quot;&gt;Example text for .ls-n2&lt;/div&gt;
&lt;div class=&quot;ls-n3&quot;&gt;Example text for .ls-n3&lt;/div&gt;
&lt;div class=&quot;ls-n4&quot;&gt;Example text for .ls-n4&lt;/div&gt;
&lt;div class=&quot;ls-n5&quot;&gt;Example text for .ls-n5&lt;/div&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="width-and-height" data-kt-scroll-offset="50">
                            <a href="#width-and-height"></a>

                            Width & Height
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Assign responsive-friendly <code>height</code>, <code>min-height</code>,
                            <code>max-height</code>, <code>width</code> , <code>min-with</code> and
                            <code>max-width</code> values to an element with shorthand classes.

                            The classes are named using the format <code>{property}-{size}</code> for
                            <code>xs</code> and <code>{property}-{breakpoint}-{size}</code>
                            for <code>sm</code>, <code>md</code>, <code>lg</code>, <code>xl</code>, and
                            <code>xxl</code>.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            Where <code>property</code> is one of:
                            <ul class="pt-3">
                                <li class="py-2"><code>h</code> - for classes that set height</li>
                                <li class="py-2"><code>mh</code> - for classes that set max height</li>
                                <li class="py-2"><code>min-h</code> - for classes that set min height</li>
                                <li class="py-2"><code>w</code> - for classes that set width</li>
                                <li class="py-2"><code>mw</code> - for classes that set max width</li>
                                <li class="py-2"><code>min-w</code> - for classes that set min width</li>
                            </ul>
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            Where <code>size</code> defined with <code>$custom-sizes</code> variable in
                            <code>sass/_variables.scss</code> is one of-
                            <ul class="pt-3">
                                <li class="py-2"><code>25</code> - for 25%</li>
                                <li class="py-2"><code>50</code> - for 50%</li>
                                <li class="py-2"><code>75</code> - for 75%</li>
                                <li class="py-2"><code>100</code> - for 100%</li>
                                <li class="py-2"><code>auto</code> - for auto</li>
                                <li class="py-2"><code>1px</code></li>
                                <li class="py-2"><code>2px</code></li>
                                <li class="py-2"><code>3px</code></li>
                                <li class="py-2"><code>4px</code></li>
                                <li class="py-2"><code>5px</code></li>
                                <li class="py-2"><code>6px</code></li>
                                <li class="py-2"><code>7px</code></li>
                                <li class="py-2"><code>8px</code></li>
                                <li class="py-2"><code>9px</code></li>
                                <li class="py-2"><code>10px</code></li>
                                <li class="py-2"><code>15px</code></li>
                                <li class="py-2"><code>20px</code></li>
                                <li class="py-2"><code>25px</code></li>
                                <li class="py-2"><code>30px</code></li>
                                <li class="py-2"><code>35px</code></li>
                                <li class="py-2"><code>40px</code></li>
                                <li class="py-2"><code>45px</code></li>
                                <li class="py-2"><code>50px</code></li>
                                <li class="py-2"><code>55px</code></li>
                                <li class="py-2"><code>60px</code></li>
                                <li class="py-2"><code>65px</code></li>
                                <li class="py-2"><code>70px</code></li>
                                <li class="py-2"><code>75px</code></li>
                                <li class="py-2"><code>80px</code></li>
                                <li class="py-2"><code>85px</code></li>
                                <li class="py-2"><code>90px</code></li>
                                <li class="py-2"><code>95px</code></li>
                                <li class="py-2"><code>100px</code></li>
                                <li class="py-2"><code>125px</code></li>
                                <li class="py-2"><code>150px</code></li>
                                <li class="py-2"><code>175px</code></li>
                                <li class="py-2"><code>200px</code></li>
                                <li class="py-2"><code>225px</code></li>
                                <li class="py-2"><code>250px</code></li>
                                <li class="py-2"><code>275px</code></li>
                                <li class="py-2"><code>300px</code></li>
                                <li class="py-2"><code>325px</code></li>
                                <li class="py-2"><code>350px</code></li>
                                <li class="py-2"><code>375px</code></li>
                                <li class="py-2"><code>400px</code></li>
                                <li class="py-2"><code>425px</code></li>
                                <li class="py-2"><code>450px</code></li>
                                <li class="py-2"><code>475px</code></li>
                                <li class="py-2"><code>500px</code></li>
                                <li class="py-2"><code>550px</code></li>
                                <li class="py-2"><code>600px</code></li>
                                <li class="py-2"><code>650px</code></li>
                                <li class="py-2"><code>700px</code></li>
                                <li class="py-2"><code>750px</code></li>
                                <li class="py-2"><code>800px</code></li>
                                <li class="py-2"><code>850px</code></li>
                                <li class="py-2"><code>900px</code></li>
                                <li class="py-2"><code>950px</code></li>
                                <li class="py-2"><code>1000px</code></li>
                            </ul>
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">

                                <div class="d-flex flex-wrap align-items-center">

                                    <div
                                        class="w-100px h-100px d-flex flex-column flex-center me-5 mb-5 bg-light   fw-semibold ">
                                        w-100px<br />
                                        h-100px
                                    </div>

                                    <div
                                        class="w-150px h-150px d-flex flex-column flex-center me-5 mb-5 bg-light   fw-semibold ">
                                        w-150px<br />
                                        h-150px
                                    </div>

                                    <div
                                        class="w-200px h-200px d-flex flex-column flex-center me-5 mb-5 bg-light   fw-semibold ">
                                        w-200px<br />
                                        h-200px
                                    </div>

                                    <div
                                        class="w-250px h-250px d-flex flex-column flex-center me-5 mb-5 bg-light   fw-semibold ">
                                        w-250px<br />
                                        h-250px
                                    </div>
                                </div>

                                <div class="separator border-solid mt-10 mb-12"></div>

                                <div class="d-flex flex-wrap align-items-center">

                                    <div
                                        class="min-w-100px min-h-100px mw-100px mh-100px d-flex flex-column flex-center me-5 mb-5 bg-light   fw-semibold">
                                        min-w-100px<br />
                                        min-h-100px<br />
                                        mw-100px<br />
                                        mh-100px
                                    </div>

                                    <div
                                        class="min-w-150px min-h-150px mw-150px mh-150px d-flex flex-column flex-center me-5 mb-5 bg-light   fw-semibold">
                                        min-w-150px<br />
                                        min-h-150px<br />
                                        mw-150px<br />
                                        mh-150px
                                    </div>

                                    <div
                                        class="min-w-200px min-h-200px mw-200px mh-200px d-flex flex-column flex-center me-5 mb-5 bg-light   fw-semibold">
                                        min-w-200px<br />
                                        min-h-200px<br />
                                        mw-200px<br />
                                        mh-200px
                                    </div>

                                    <div
                                        class="min-w-250px min-h-250px mw-250px mh-250px d-flex flex-column flex-center me-5 mb-5 bg-light   fw-semibold">
                                        min-w-250px<br />
                                        min-h-250px<br />
                                        mw-250px<br />
                                        mh-250px
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;div class=&quot;w-100px h-100px&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;w-150px h-150px&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;w-200px h-200px&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;w-250px h-250px&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;min-w-100px min-h-100px mw-100px mh-100px&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;min-w-150px min-h-150px mw-150px mh-150px&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;min-w-200px min-h-200px mw-200px mh-200px&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;min-w-250px min-h-250px mw-250px mh-250px&quot;&gt;&lt;/div&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="z-index" data-kt-scroll-offset="50">
                            <a href="#z-index"></a>

                            Z-Index
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Use <code>.z-index-{value}</code> class to set an element's z-index:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            Where <code>value</code> is one of:
                            <ul class="pt-3">
                                <li class="py-2">
                                    <code>n1</code> - for classes that set z-index <code>n1</code>
                                </li>
                                <li class="py-2">
                                    <code>n2</code> - for classes that set z-index <code>n2</code>
                                </li>
                                <li class="py-2">
                                    <code>0</code> - for classes that set z-index <code>0</code>
                                </li>
                                <li class="py-2">
                                    <code>1</code> - for classes that set z-index <code>1</code>
                                </li>
                                <li class="py-2">
                                    <code>2</code> - for classes that set z-index <code>2</code>
                                </li>
                                <li class="py-2">
                                    <code>3</code> - for classes that set z-index <code>3</code>
                                </li>
                            </ul>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;div class=&quot;z-index-n1&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;z-index-n2&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;z-index-0&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;z-index-1&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;z-index-2&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;z-index-3&quot;&gt;&lt;/div&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="pt-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="css-variables-in-js" data-kt-scroll-offset="50">
                            <a href="#css-variables-in-js"></a>

                            CSS Variables
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            There are a variety custom CSS variables available. To access these variables in
                            Javascript(Charts, etc),
                            we have provided a simple Javascript function to grab it through CSS variables easily
                            and quickly. Here's the list of CSS variables available for you:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <ul class="py-0">
                                <li class="py-2">
                                    <code>--kt-primary</code> - Primary color hex value.
                                </li>
                                <li class="py-2">
                                    <code>--kt-success</code> - Success color hex value.
                                </li>
                                <li class="py-2">
                                    <code>--kt-info</code> - Info color hex value.
                                </li>
                                <li class="py-2">
                                    <code>--kt-danger</code> - Danger color hex value.
                                </li>
                                <li class="py-2">
                                    <code>--kt-warning</code> - Warning color hex value.
                                </li>
                                <li class="py-2">
                                    <code>--kt-dark</code> - Dark color hex value.
                                </li>
                                <li class="py-2">
                                    <code>--kt-light</code> - Light color hex value.
                                </li>
                                <li class="py-2">
                                    <code>--kt-gray-100</code> - Gray 100 color hex value.
                                </li>
                                <li class="py-2">
                                    <code>--kt-gray-200</code> - Gray 200 color hex value.
                                </li>
                                <li class="py-2">
                                    <code>--kt-gray-300</code> - Gray 300 color hex value.
                                </li>
                                <li class="py-2">
                                    <code>--kt-gray-500</code> - Gray 400 color hex value.
                                </li>
                                <li class="py-2">
                                    <code>--kt-gray-500</code> - Gray 500 color hex value.
                                </li>
                                <li class="py-2">
                                    <code>--kt-gray-600</code> - Gray 600 color hex value.
                                </li>
                                <li class="py-2">
                                    <code>--kt-gray-700</code> - Gray 700 color hex value.
                                </li>
                                <li class="py-2">
                                    <code>--kt-gray-800</code> - Gray 800 color hex value.
                                </li>
                                <li class="py-2">
                                    <code>--kt-gray-900</code> - Gray 900 color hex value.
                                </li>
                                <li class="py-2">
                                    <code>--kt-xs</code> - Extra small breakpoint width value - 0.
                                </li>
                                <li class="py-2">
                                    <code>--kt-sm</code> - Extra small breakpoint width value - 576px.
                                </li>
                                <li class="py-2">
                                    <code>--kt-md</code> - Medium small breakpoint width value - 768px.
                                </li>
                                <li class="py-2">
                                    <code>--kt-lg</code> - Large small breakpoint width value - 992px.
                                </li>
                                <li class="py-2">
                                    <code>--kt-xl</code> - Extra large small breakpoint width value - 1200px.
                                </li>
                                <li class="py-2">
                                    <code>--kt-xxl</code> - Double extra large breakpoint width value - 1400px.
                                </li>
                                <li class="py-2">
                                    <code>--kt-font-sans-serif</code> - Main font family. E.g: <code>"Roboto",
                                        sans-serif</code>.
                                </li>
                            </ul>
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            To access these variables, simply call it with this function
                            <code>KTUtil.getCssVariableValue('css variable name')</code>.<br />
                            For example to access the primary color, CSS responsive breakpoint value or the theme
                            font family you can use the below code:
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-javascript"><code class="language-javascript">var primaryColor = KTUtil.getCssVariableValue(&quot;--kt-primary&quot;);
var breakpointLg = KTUtil.getCssVariableValue(&quot;--kt-lg&quot;);
var fontFamily = KTUtil.getCssVariableValue(&quot;--kt-font-sans-serif&quot;);</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                </div>
                <!--end::Card Body-->
            </div>
            <!--end::Card-->

            <!--begin::Sidebar wrapper-->
            <div class="ms-7 flex-row-auto w-lg-250px">
                <!--begin::Sidebar nav-->
                <div class="card card-flush d-none d-lg-flex position-sticky" style="top: 25px;" data-kt-sticky="true" data-kt-sticky-name="sidebar-navs"
                    data-kt-sticky-offset="{default: false, lg: 250}" data-kt-sticky-width="250px"
                    data-kt-sticky-animation="false" data-kt-sticky-left="auto" data-kt-sticky-top="25px"
                    data-kt-sticky-zindex="5">
                    <!--begin::Card body-->
                    <div class="card-body px-0 px-6 py-6 min-h-300px">
                        <!--begin::Menu-->
                        <ul id="kt_sidebar_nav"
                            class="nav nav-flush menu menu-column menu-title-gray-700 menu-bullet-gray-300 menu-state-primary fw-semibold fs-6 mb-8">
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#overview" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Overview</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#theme-colors" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Theme Colors</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#spacing" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Spacing</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#font-sizes" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Font Sizes</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#line-height" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Line Height</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#letter-spacing" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Letter Spacing</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#width-and-height" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Width & Height</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#z-index" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Z-Index</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#css-variables-in-js" data-kt-scroll-toggle="true"
                                    class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">CSS Variables</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                        </ul>
                        <!--end::Menu-->


                        <a href="https://1.envato.market/Vm7VRE" class="d-block mb-8">
                            <img src="https://devs.keenthemes.com/assets/media/banners/buy-metronic.png"
                                alt="buy metronic" class="mw-100 rounded-3" data-bs-toggle="popover"
                                data-bs-trigger="hover" data-bs-html="true" data-bs-placement="top"
                                data-bs-title="<b>License Reminder</b>"
                                data-bs-content="One license allows using Metronic for a single deployment and all subsequent usage requires a separate license. <div class='mb-3'></div> If you plan to use Metronic in a Software as a Service (SaaS) model with paid subscriptions, you'll need an Extended License." />
                        </a>

                        <a href="https://keenthemes.com/products/templates-mega-bundle?utm_source=docs&utm_content=mega-bundle"
                            class="d-block mb-8">
                            <img src="https://devs.keenthemes.com/assets/media/banners/mega-bundle.png"
                                alt="buy mega bundle" class="mw-100 rounded-3" />
                        </a>
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Sidebar nav-->
            </div>
            <!--end::Sidebar wrapper-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Content-->
@endsection
@section('scripts')
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.js') }}"></script>
    <!--end::Vendors Javascript-->
@endsection


