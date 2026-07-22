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
                    <!--begin::Notice-->
                    <div class="d-flex align-items-center rounded py-5 px-4 bg-light-info "> <!--begin::Icon-->
                        <div class="d-flex h-80px w-80px flex-shrink-0 flex-center position-relative ms-3 me-6"> <svg
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                class="text-primary h-80px w-80px position-absolute opacity-5">
                                <path fill="currentColor"
                                    d="M10.2,21.23,4.91,18.17a3.58,3.58,0,0,1-1.8-3.11V8.94a3.58,3.58,0,0,1,1.8-3.11L10.2,2.77a3.62,3.62,0,0,1,3.6,0l5.29,3.06a3.58,3.58,0,0,1,1.8,3.11v6.12a3.58,3.58,0,0,1-1.8,3.11L13.8,21.23A3.62,3.62,0,0,1,10.2,21.23Z" />
                            </svg> <i class="ki-duotone ki-design-frame fs-3x text-info  position-absolute"><span
                                    class="path1"></span><span class="path2"></span></i> </div> <!--end::Icon-->
                        <!--begin::Description-->
                        <div class="text-gray-700 fw-bold fs-6 lh-lg">
                            Draggable is a lightweight, responsive, modern drag & drop library. Draggable abstracts native
                            browser events into a comprehensive API to create a custom drag and drop experience. For more
                            info see <a href="https://shopify.github.io/draggable/" class="fw-bold me-1">the official
                                site</a>and <a class="fw-bold" href="https://github.com/Shopify/draggable">the Github
                                repository</a>.
                        </div> <!--end::Description-->
                    </div><!--end::Notice-->
                    <!--begin::Section-->
                    <div class="pt-10">
                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" data-kt-scroll-offset="85" id="restricted">
                            <a href="#restricted" data-kt-scroll-toggle></a>
                            Restricted Zones Example
                        </h1>
                        <!--end::Heading-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <ul>
                                <li class="py-2">
                                    Wrap draggable zone with <code>.draggable-zone</code> and define draggable elements with
                                    <code>.draggable</code> and let drag & drop through <code>.draggable-handle</code>
                                    element.
                                </li>
                                <li class="py-2">
                                    Add <code>data-kt-draggable-level="restricted"</code> to draggable zones to set a
                                    restricted permission level to the container.
                                </li>
                                <li class="py-2">
                                    Define draggable cards with permissions levels by adding
                                    <code>data-kt-draggable-level="admin"</code> to allow specific cards into the restricted
                                    container.
                                </li>
                                <li class="py-2">
                                    Restricted cards are allowed to drag into any column.
                                </li>
                                <li class="py-2">
                                    Restricted column will only allow restricted cards
                                </li>
                            </ul>
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <!--begin::Information-->
                            <div class="d-flex align-items-center rounded py-5 px-5 bg-light-warning "><i
                                    class="ki-duotone ki-information-5 fs-3x text-warning me-5"><span
                                        class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-bold fs-6">
                                    The HTML attribute is not an official attribute, and can be replaced with any other name
                                    according to your product requirements.
                                </div> <!--end::Description-->
                            </div><!--end::Information-->
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <!--begin::Row-->
                            <div class="row row-cols-lg-3 g-10">
                                <!--begin::Col-->
                                <div class="col">
                                    <!--begin::Card-->
                                    <div class="card card-bordered mb-10">
                                        <!--begin::Card header-->
                                        <div class="card-header">
                                            <div class="card-title">
                                                <h3 class="card-label">Public Tasks</h3>
                                            </div>
                                        </div>
                                        <!--end::Card header-->

                                        <!--begin::Card body-->
                                        <div class="card-body">
                                            <!--begin::Row-->
                                            <div class="row row-cols-1 g-10 min-h-200px draggable-zone">
                                                <!--begin::Col-->
                                                <div class="col draggable">
                                                    <!--begin::Card-->
                                                    <div class="card bg-light-primary">
                                                        <div class="card-header">
                                                            <div class="card-title">
                                                                <h3 class="card-label">Card 1 </h3>
                                                            </div>
                                                            <div class="card-toolbar">
                                                                <a href="javascript:void(0)"
                                                                    class="btn btn-icon btn-sm btn-hover-light-primary draggable-handle">
                                                                    <i class="ki-duotone ki-abstract-14 fs-2x"><span
                                                                            class="path1"></span><span
                                                                            class="path2"></span></i> </a>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            Lorem Ipsum is simply dummy text of the printing and typesetting
                                                            industry.
                                                        </div>
                                                    </div>
                                                    <!--end::Card-->
                                                </div>
                                                <!--begin::Col-->

                                                <!--end::Col-->
                                                <div class="col draggable">
                                                    <!--begin::Card-->
                                                    <div class="card bg-light-primary">
                                                        <div class="card-header">
                                                            <div class="card-title">
                                                                <h3 class="card-label">Card 2</h3>
                                                            </div>
                                                            <div class="card-toolbar">
                                                                <a href="javascript:void(0)"
                                                                    class="btn btn-icon btn-hover-light-primary draggable-handle">
                                                                    <i class="ki-duotone ki-abstract-14 fs-2x"><span
                                                                            class="path1"></span><span
                                                                            class="path2"></span></i> </a>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            Lorem Ipsum is simply dummy text of the printing and typesetting
                                                            industry.
                                                        </div>
                                                    </div>
                                                    <!--end::Card-->
                                                </div>
                                                <!--begin::Col-->

                                                <!--end::Col-->
                                                <div class="col draggable">
                                                    <!--begin::Card-->
                                                    <div class="card bg-light-primary">
                                                        <div class="card-header">
                                                            <div class="card-title">
                                                                <h3 class="card-label">Card 3</h3>
                                                            </div>
                                                            <div class="card-toolbar">
                                                                <a href="javascript:void(0)"
                                                                    class="btn btn-icon btn-hover-light-primary draggable-handle">
                                                                    <i class="ki-duotone ki-abstract-14 fs-2x"><span
                                                                            class="path1"></span><span
                                                                            class="path2"></span></i> </a>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            Lorem Ipsum is simply dummy text of the printing and typesetting
                                                            industry.
                                                        </div>
                                                    </div>
                                                    <!--end::Card-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->
                                        </div>
                                        <!--end::Card body-->
                                    </div>
                                    <!--end::Card-->
                                </div>
                                <!--end::Col-->

                                <!--begin::Col-->
                                <div class="col">
                                    <!--begin::Card-->
                                    <div class="card card-bordered">
                                        <!--begin::Card header-->
                                        <div class="card-header">
                                            <div class="card-title">
                                                <h3 class="card-label">Public Tasks</h3>
                                            </div>
                                        </div>
                                        <!--end::Card header-->

                                        <!--begin::Card body-->
                                        <div class="card-body">
                                            <!--begin::Row-->
                                            <div class="row row-cols-1 g-10 min-h-200px draggable-zone">
                                                <!--begin::Col-->
                                                <div class="col draggable">
                                                    <!--begin::Card-->
                                                    <div class="card bg-light-success">
                                                        <div class="card-header">
                                                            <div class="card-title">
                                                                <h3 class="card-label">Card 4</h3>
                                                            </div>
                                                            <div class="card-toolbar">
                                                                <a href="javascript:void(0)"
                                                                    class="btn btn-icon btn-hover-light-primary draggable-handle">
                                                                    <i class="ki-duotone ki-abstract-14 fs-2x"><span
                                                                            class="path1"></span><span
                                                                            class="path2"></span></i> </a>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            Lorem Ipsum is simply dummy text of the printing and typesetting
                                                            industry.
                                                        </div>
                                                    </div>
                                                    <!--end::Card-->
                                                </div>
                                                <!--end::Col-->

                                                <!--begin::Col-->
                                                <div class="col draggable">
                                                    <!--begin::Card-->
                                                    <div class="card bg-light-success">
                                                        <div class="card-header">
                                                            <div class="card-title">
                                                                <h3 class="card-label">Card 5</h3>
                                                            </div>
                                                            <div class="card-toolbar">
                                                                <a href="javascript:void(0)"
                                                                    class="btn btn-icon btn-hover-light-primary draggable-handle">
                                                                    <i class="ki-duotone ki-abstract-14 fs-2x"><span
                                                                            class="path1"></span><span
                                                                            class="path2"></span></i> </a>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            Lorem Ipsum is simply dummy text of the printing and typesetting
                                                            industry.
                                                        </div>
                                                    </div>
                                                    <!--end::Card-->
                                                </div>
                                                <!--end::Col-->

                                                <!--begin::Col-->
                                                <div class="col draggable">
                                                    <!--begin::Card-->
                                                    <div class="card bg-light-success">
                                                        <div class="card-header">
                                                            <div class="card-title">
                                                                <h3 class="card-label">Card 6</h3>
                                                            </div>
                                                            <div class="card-toolbar">
                                                                <a href="javascript:void(0)"
                                                                    class="btn btn-icon btn-hover-light-primary draggable-handle">
                                                                    <i class="ki-duotone ki-abstract-14 fs-2x"><span
                                                                            class="path1"></span><span
                                                                            class="path2"></span></i> </a>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            Lorem Ipsum is simply dummy text of the printing and typesetting
                                                            industry.
                                                        </div>
                                                    </div>
                                                    <!--end::Card-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->
                                        </div>
                                        <!--end::Card body-->
                                    </div>
                                    <!--end::Card-->
                                </div>
                                <!--end::Col-->

                                <!--begin::Col-->
                                <div class="col">
                                    <!--begin::Card-->
                                    <div class="card card-bordered" data-kt-draggable-level="restricted">
                                        <!--begin::Card header-->
                                        <div class="card-header">
                                            <div class="card-title">
                                                <h3 class="card-label">Restricted</h3>
                                            </div>
                                        </div>
                                        <!--end::Card header-->

                                        <!--begin::Card body-->
                                        <div class="card-body">
                                            <!--begin::Row-->
                                            <div class="row row-cols-1 g-10 min-h-200px draggable-zone">
                                                <!--begin::Col-->
                                                <div class="col draggable" data-kt-draggable-level="admin">
                                                    <!--begin::Card-->
                                                    <div class="card bg-light-danger">
                                                        <div class="card-header">
                                                            <div class="card-title">
                                                                <h3 class="card-label">Card 7</h3>
                                                            </div>
                                                            <div class="card-toolbar">
                                                                <a href="javascript:void(0)"
                                                                    class="btn btn-icon btn-hover-light-primary draggable-handle">
                                                                    <i class="ki-duotone ki-abstract-14 fs-2x"><span
                                                                            class="path1"></span><span
                                                                            class="path2"></span></i> </a>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            Lorem Ipsum is simply dummy text of the printing and typesetting
                                                            industry.
                                                        </div>
                                                    </div>
                                                    <!--end::Card-->
                                                </div>
                                                <!--end::Col-->

                                                <!--begin::Col-->
                                                <div class="col draggable" data-kt-draggable-level="admin">
                                                    <!--begin::Card-->
                                                    <div class="card bg-light-danger">
                                                        <div class="card-header">
                                                            <div class="card-title">
                                                                <h3 class="card-label">Card 6</h3>
                                                            </div>
                                                            <div class="card-toolbar">
                                                                <a href="javascript:void(0)"
                                                                    class="btn btn-icon btn-hover-light-primary draggable-handle">
                                                                    <i class="ki-duotone ki-abstract-14 fs-2x"><span
                                                                            class="path1"></span><span
                                                                            class="path2"></span></i> </a>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            Lorem Ipsum is simply dummy text of the printing and typesetting
                                                            industry.
                                                        </div>
                                                    </div>
                                                    <!--end::Card-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->
                                        </div>
                                        <!--end::Card body-->
                                    </div>
                                    <!--end::Card-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="pt-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <ul class="nav nav-pills" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab"
                                            href="#kt_highlight_68e5b62ae5a35" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e5b62ae5a3b" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e5b62ae5a35"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript" style="height:400px"><code class="language-javascript">var containers = document.querySelectorAll(&quot;.draggable-zone&quot;);
const restrcitedWrapper = document.querySelector(&quot;[data-kt-draggable-level=&quot;restricted&quot;]&quot;);

if (containers.length === 0) {
    return false;
}

var droppable = new Droppable.default(containers, {
    draggable: &quot;.draggable&quot;,
    dropzone: &quot;.draggable-zone&quot;,
    handle: &quot;.draggable .draggable-handle&quot;,
    mirror: {
        //appendTo: selector,
        appendTo: &quot;body&quot;,
        constrainDimensions: true
    }
});

// Define draggable element variable for permissions level
let droppableOrigin;

// Handle drag start event -- more info: https://shopify.github.io/draggable/docs/class/src/Draggable/DragEvent/DragEvent.js~DragEvent.html
droppable.on(&quot;drag:start&quot;, (e) =&gt; {
    droppableOrigin = e.originalSource.getAttribute(&quot;data-kt-draggable-level&quot;);
});

// Handle drag over event -- more info: https://shopify.github.io/draggable/docs/class/src/Draggable/DragEvent/DragEvent.js~DragOverEvent.html
droppable.on(&quot;drag:over&quot;, (e) =&gt; {
    const isRestricted = e.overContainer.closest(&quot;[data-kt-draggable-level=&quot;restricted&quot;]&quot;);
    if (isRestricted) {
        if (droppableOrigin !== &quot;admin&quot;) {
            restrcitedWrapper.classList.add(&quot;bg-light-danger&quot;);
        } else {
            restrcitedWrapper.classList.remove(&quot;bg-light-danger&quot;);
        }
    } else {
        restrcitedWrapper.classList.remove(&quot;bg-light-danger&quot;);
    }
});

// Handle drag stop event -- more info: https://shopify.github.io/draggable/docs/class/src/Draggable/DragEvent/DragEvent.js~DragStopEvent.html
droppable.on(&quot;drag:stop&quot;, (e) =&gt; {
    // remove all draggable occupied limit
    containers.forEach(c =&gt; {
        c.classList.remove(&quot;draggable-dropzone--occupied&quot;);
    });

    // Remove restricted alert
    restrcitedWrapper.classList.remove(&quot;bg-light-danger&quot;);
});

// Handle drop event -- https://shopify.github.io/draggable/docs/class/src/Droppable/DroppableEvent/DroppableEvent.js~DroppableDroppedEvent.html
droppable.on(&quot;droppable:dropped&quot;, (e) =&gt; {
    const isRestricted = e.dropzone.closest(&quot;[data-kt-draggable-level=&quot;restricted&quot;]&quot;);
    // Detect if drop container is restricted
    if (isRestricted) {
        // Check if dragged element has permission level
        if (droppableOrigin !== &quot;admin&quot;) {
            restrcitedWrapper.classList.add(&quot;bg-light-danger&quot;);
            e.cancel();
        }
    }
});</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e5b62ae5a3b" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px"><code class="language-html">&lt;div class=&quot;row row-cols-lg-3 g-10&quot;&gt;
    &lt;!--begin::Col--&gt;
    &lt;div class=&quot;col&quot;&gt;
        &lt;!--begin::Card--&gt;
        &lt;div class=&quot;card card-bordered mb-10&quot;&gt;
            &lt;!--begin::Card header--&gt;
            &lt;div class=&quot;card-header&quot;&gt;
                &lt;div class=&quot;card-title&quot;&gt;
                    &lt;h3 class=&quot;card-label&quot;&gt;Public Tasks&lt;/h3&gt;
                &lt;/div&gt;
            &lt;/div&gt;
            &lt;!--end::Card header--&gt;

            &lt;!--begin::Card body--&gt;
            &lt;div class=&quot;card-body&quot;&gt;
                &lt;!--begin::Row--&gt;
                &lt;div class=&quot;row row-cols-1 g-10 min-h-200px draggable-zone&quot;&gt;
                    &lt;!--begin::Col--&gt;
                    &lt;div class=&quot;col draggable&quot;&gt;
                        &lt;!--begin::Card--&gt;
                        &lt;div class=&quot;card bg-light-primary&quot;&gt;
                            ...
                        &lt;/div&gt;
                        &lt;!--end::Card--&gt;
                    &lt;/div&gt;
                    &lt;!--begin::Col--&gt;

                    &lt;!--end::Col--&gt;
                    &lt;div class=&quot;col draggable&quot;&gt;
                        &lt;!--begin::Card--&gt;
                        &lt;div class=&quot;card bg-light-primary&quot;&gt;
                            ...
                        &lt;/div&gt;
                        &lt;!--end::Card--&gt;
                    &lt;/div&gt;
                    &lt;!--begin::Col--&gt;

                    &lt;!--end::Col--&gt;
                    &lt;div class=&quot;col draggable&quot;&gt;
                        &lt;!--begin::Card--&gt;
                        &lt;div class=&quot;card bg-light-primary&quot;&gt;
                            ...
                        &lt;/div&gt;
                        &lt;!--end::Card--&gt;
                    &lt;/div&gt;
                    &lt;!--end::Col--&gt;
                &lt;/div&gt;
                &lt;!--end::Row--&gt;
            &lt;/div&gt;
            &lt;!--end::Card body--&gt;
        &lt;/div&gt;
        &lt;!--end::Card--&gt;
    &lt;/div&gt;
    &lt;!--end::Col--&gt;

    &lt;!--begin::Col--&gt;
    &lt;div class=&quot;col&quot;&gt;
        &lt;!--begin::Card--&gt;
        &lt;div class=&quot;card card-bordered&quot;&gt;
            &lt;!--begin::Card header--&gt;
            &lt;div class=&quot;card-header&quot;&gt;
                &lt;div class=&quot;card-title&quot;&gt;
                    &lt;h3 class=&quot;card-label&quot;&gt;Public Tasks&lt;/h3&gt;
                &lt;/div&gt;
            &lt;/div&gt;
            &lt;!--end::Card header--&gt;

            &lt;!--begin::Card body--&gt;
            &lt;div class=&quot;card-body&quot;&gt;
                &lt;!--begin::Row--&gt;
                &lt;div class=&quot;row row-cols-1 g-10 min-h-200px draggable-zone&quot;&gt;
                    &lt;!--begin::Col--&gt;
                    &lt;div class=&quot;col draggable&quot;&gt;
                        &lt;!--begin::Card--&gt;
                        &lt;div class=&quot;card bg-light-success&quot;&gt;
                            ...
                        &lt;/div&gt;
                        &lt;!--end::Card--&gt;
                    &lt;/div&gt;
                    &lt;!--end::Col--&gt;

                    &lt;!--begin::Col--&gt;
                    &lt;div class=&quot;col draggable&quot;&gt;
                        &lt;!--begin::Card--&gt;
                        &lt;div class=&quot;card bg-light-success&quot;&gt;
                           ...
                        &lt;/div&gt;
                        &lt;!--end::Card--&gt;
                    &lt;/div&gt;
                    &lt;!--end::Col--&gt;

                    &lt;!--begin::Col--&gt;
                    &lt;div class=&quot;col draggable&quot;&gt;
                        &lt;!--begin::Card--&gt;
                        &lt;div class=&quot;card bg-light-success&quot;&gt;
                            ...
                        &lt;/div&gt;
                        &lt;!--end::Card--&gt;
                    &lt;/div&gt;
                    &lt;!--end::Col--&gt;
                &lt;/div&gt;
                &lt;!--end::Row--&gt;
            &lt;/div&gt;
            &lt;!--end::Card body--&gt;
        &lt;/div&gt;
        &lt;!--end::Card--&gt;
    &lt;/div&gt;
    &lt;!--end::Col--&gt;

    &lt;!--begin::Col--&gt;
    &lt;div class=&quot;col&quot;&gt;
        &lt;!--begin::Card--&gt;
        &lt;div class=&quot;card card-bordered&quot; data-kt-draggable-level=&quot;restricted&quot;&gt;
            &lt;!--begin::Card header--&gt;
            &lt;div class=&quot;card-header&quot;&gt;
                &lt;div class=&quot;card-title&quot;&gt;
                    &lt;h3 class=&quot;card-label&quot;&gt;Restricted&lt;/h3&gt;
                &lt;/div&gt;
            &lt;/div&gt;
            &lt;!--end::Card header--&gt;

            &lt;!--begin::Card body--&gt;
            &lt;div class=&quot;card-body&quot;&gt;
                &lt;!--begin::Row--&gt;
                &lt;div class=&quot;row row-cols-1 g-10 min-h-200px draggable-zone&quot;&gt;
                    &lt;!--begin::Col--&gt;
                    &lt;div class=&quot;col draggable&quot; data-kt-draggable-level=&quot;admin&quot;&gt;
                        &lt;!--begin::Card--&gt;
                        &lt;div class=&quot;card bg-light-danger&quot;&gt;
                            ...
                        &lt;/div&gt;
                        &lt;!--end::Card--&gt;
                    &lt;/div&gt;
                    &lt;!--end::Col--&gt;

                    &lt;!--begin::Col--&gt;
                    &lt;div class=&quot;col draggable&quot; data-kt-draggable-level=&quot;admin&quot;&gt;
                        &lt;!--begin::Card--&gt;
                        &lt;div class=&quot;card bg-light-danger&quot;&gt;
                            ...
                        &lt;/div&gt;
                        &lt;!--end::Card--&gt;
                    &lt;/div&gt;
                    &lt;!--end::Col--&gt;
                &lt;/div&gt;
                &lt;!--end::Row--&gt;
            &lt;/div&gt;
            &lt;!--end::Card body--&gt;
        &lt;/div&gt;
        &lt;!--end::Card--&gt;
    &lt;/div&gt;
    &lt;!--end::Col--&gt;
&lt;/div&gt;</code></pre>
                                        </div>
                                    </div>
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
    <script src="{{ asset('assets/plugins/custom/draggable/draggable.bundle.js') }}"></script>
    <!--end::Vendors Javascript-->

    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{ asset('assets/js/custom/documentation/general/draggable/restricted.js') }}"></script>
    <!--end::Custom Javascript-->
@endsection


