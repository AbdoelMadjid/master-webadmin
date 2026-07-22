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
                            <b>DropzoneJS</b>&nbsp;is an open source library that provides drag’n’drop file uploads with
                            image previews.
                            It’s lightweight, doesn’t depend on any other library (like jQuery) and is highly customizable.
                            For full documentation please check the <a href="https://www.dropzonejs.com/" target="_blank"
                                class="fw-semibold">plugin's official site</a>.
                        </div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="usage" data-kt-scroll-offset="50">
                            <a href="#usage"></a>

                            Usage
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            <b>DropzoneJS's</b>&nbsp;CSS and Javascript files are bundled in the global plugin bundles and
                            globally included in all pages:
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;link href=&quot;assets/plugins/global/plugins.bundle.css&quot; rel=&quot;stylesheet&quot; type=&quot;text/css&quot;/&gt;
&lt;script src=&quot;assets/plugins/global/plugins.bundle.js&quot;&gt;&lt;/script&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="initialization" data-kt-scroll-offset="50">
                            <a href="#initialization"></a>

                            Initialization
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            <ul class="py-0">
                                <li class="py-2">
                                    <b>DropzoneJS</b>&nbsp;CSS is highly customized in
                                    <code>sass/vendors/plugins/_dropzone.scss</code> SCSS file in order to use it as native
                                    component within the design system.
                                    The SCSS code is compiled into <code>assets/plugins/global/plugins.bundle.css</code> and
                                    globally included in all pages.
                                </li>
                                <li class="py-2">
                                    <b>DropzoneJS</b>&nbsp;Javascript is globally initialized with some predefined settings
                                    in <code>src/js/vendors/plugins/dropzone.init.js</code> and the initialization code is
                                    bundled within
                                    <code>assets/plugins/global/plugins.bundle.js</code> and globally included in all pages.
                                </li>
                            </ul>
                        </div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="basic-example" data-kt-scroll-offset="50">
                            <a href="#basic-example"></a>

                            Basic Example
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            <b>DropzoneJS</b>&nbsp;example with manual file attachment and upload controls.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <!--begin::Form-->
                                <form class="form" action="#" method="post">
                                    <!--begin::Input group-->
                                    <div class="fv-row">
                                        <!--begin::Dropzone-->
                                        <div class="dropzone" id="kt_dropzonejs_example_1">
                                            <!--begin::Message-->
                                            <div class="dz-message needsclick">
                                                <i class="ki-duotone ki-file-up fs-3x text-primary"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                                <!--begin::Info-->
                                                <div class="ms-4">
                                                    <h3 class="fs-5 fw-bold text-gray-900 mb-1">Drop files here or click to
                                                        upload.</h3>
                                                    <span class="fs-7 fw-semibold text-primary opacity-75">Upload up to 10
                                                        files</span>
                                                </div>
                                                <!--end::Info-->
                                            </div>
                                        </div>
                                        <!--end::Dropzone-->
                                    </div>
                                    <!--end::Input group-->
                                </form>
                                <!--end::Form-->
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <ul class="nav nav-pills" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab"
                                            href="#kt_highlight_68e350e43fc6a" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e350e43fc6e" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e350e43fc6a" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript"><code class="language-javascript">var myDropzone = new Dropzone(&quot;#kt_dropzonejs_example_1&quot;, {
    url: &quot;https://keenthemes.com/scripts/void.php&quot;, // Set the url for your upload script location
    paramName: &quot;file&quot;, // The name that will be used to transfer the file
    maxFiles: 10,
    maxFilesize: 10, // MB
    addRemoveLinks: true,
    accept: function(file, done) {
        if (file.name == &quot;wow.jpg&quot;) {
            done(&quot;Naha, you don&#039;t.&quot;);
        } else {
            done();
        }
    }
});</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e350e43fc6e" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px"><code class="language-html">&lt;!--begin::Form--&gt;
&lt;form class=&quot;form&quot; action=&quot;#&quot; method=&quot;post&quot;&gt;
    &lt;!--begin::Input group--&gt;
    &lt;div class=&quot;fv-row&quot;&gt;
        &lt;!--begin::Dropzone--&gt;
        &lt;div class=&quot;dropzone&quot; id=&quot;kt_dropzonejs_example_1&quot;&gt;
            &lt;!--begin::Message--&gt;
            &lt;div class=&quot;dz-message needsclick&quot;&gt;
                &lt;i class=&quot;ki-duotone ki-file-up fs-3x text-primary&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;/i&gt;

                &lt;!--begin::Info--&gt;
                &lt;div class=&quot;ms-4&quot;&gt;
                    &lt;h3 class=&quot;fs-5 fw-bold text-gray-900 mb-1&quot;&gt;Drop files here or click to upload.&lt;/h3&gt;
                    &lt;span class=&quot;fs-7 fw-semibold text-gray-500&quot;&gt;Upload up to 10 files&lt;/span&gt;
                &lt;/div&gt;
                &lt;!--end::Info--&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;!--end::Dropzone--&gt;
    &lt;/div&gt;
    &lt;!--end::Input group--&gt;
&lt;/form&gt;
&lt;!--end::Form--&gt;</code></pre>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="queue-upload" data-kt-scroll-offset="50">
                            <a href="#queue-upload"></a>

                            Queue Upload
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            <b>DropzoneJS</b>&nbsp;example with multiple file attachment with preview and cancel action.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <!--begin::Form-->
                                <form class="form" action="#" method="post">
                                    <!--begin::Input group-->
                                    <div class="form-group row">
                                        <!--begin::Label-->
                                        <label class="col-lg-2 col-form-label text-lg-right">Upload Files:</label>
                                        <!--end::Label-->

                                        <!--begin::Col-->
                                        <div class="col-lg-10">
                                            <!--begin::Dropzone-->
                                            <div class="dropzone dropzone-queue mb-2" id="kt_dropzonejs_example_2">
                                                <!--begin::Controls-->
                                                <div class="dropzone-panel mb-lg-0 mb-2">
                                                    <a class="dropzone-select btn btn-sm btn-primary me-2">Attach files</a>
                                                    <a class="dropzone-upload btn btn-sm btn-light-primary me-2">Upload
                                                        All</a>
                                                    <a class="dropzone-remove-all btn btn-sm btn-light-primary">Remove
                                                        All</a>
                                                </div>
                                                <!--end::Controls-->

                                                <!--begin::Items-->
                                                <div class="dropzone-items wm-200px">
                                                    <div class="dropzone-item" style="display:none">
                                                        <!--begin::File-->
                                                        <div class="dropzone-file">
                                                            <div class="dropzone-filename"
                                                                title="some_image_file_name.jpg">
                                                                <span data-dz-name>some_image_file_name.jpg</span>
                                                                <strong>(<span data-dz-size>340kb</span>)</strong>
                                                            </div>

                                                            <div class="dropzone-error" data-dz-errormessage></div>
                                                        </div>
                                                        <!--end::File-->

                                                        <!--begin::Progress-->
                                                        <div class="dropzone-progress">
                                                            <div class="progress">
                                                                <div class="progress-bar bg-primary" role="progressbar"
                                                                    aria-valuemin="0" aria-valuemax="100"
                                                                    aria-valuenow="0" data-dz-uploadprogress>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end::Progress-->

                                                        <!--begin::Toolbar-->
                                                        <div class="dropzone-toolbar">
                                                            <span class="dropzone-start"><i
                                                                    class="bi bi-play-fill fs-3"></i></span>
                                                            <span class="dropzone-cancel" data-dz-remove
                                                                style="display: none;"><i class="bi bi-x fs-3"></i></span>
                                                            <span class="dropzone-delete" data-dz-remove><i
                                                                    class="bi bi-x fs-1"></i></span>
                                                        </div>
                                                        <!--end::Toolbar-->
                                                    </div>
                                                </div>
                                                <!--end::Items-->
                                            </div>
                                            <!--end::Dropzone-->

                                            <!--begin::Hint-->
                                            <span class="form-text text-muted">Max file size is 1MB and max number of files
                                                is 5.</span>
                                            <!--end::Hint-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                </form>
                                <!--end::Form-->
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <ul class="nav nav-pills" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab"
                                            href="#kt_highlight_68e350e43fcc6" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e350e43fcc7" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e350e43fcc6"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript" style="height:400px"><code class="language-javascript">// set the dropzone container id
const id = &quot;#kt_dropzonejs_example_2&quot;;
const dropzone = document.querySelector(id);

// set the preview element template
var previewNode = dropzone.querySelector(&quot;.dropzone-item&quot;);
previewNode.id = &quot;&quot;;
var previewTemplate = previewNode.parentNode.innerHTML;
previewNode.parentNode.removeChild(previewNode);

var myDropzone = new Dropzone(id, { // Make the whole body a dropzone
    url: &quot;https://keenthemes.com/scripts/void.php&quot;, // Set the url for your upload script location
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    maxFilesize: 1, // Max filesize in MB
    autoQueue: false, // Make sure the files aren&#039;t queued until manually added
    previewsContainer: id + &quot; .dropzone-items&quot;, // Define the container to display the previews
    clickable: id + &quot; .dropzone-select&quot; // Define the element that should be used as click trigger to select files.
});

myDropzone.on(&quot;addedfile&quot;, function (file) {
    // Hookup the start button
    file.previewElement.querySelector(id + &quot; .dropzone-start&quot;).onclick = function () { myDropzone.enqueueFile(file); };
    const dropzoneItems = dropzone.querySelectorAll(&#039;.dropzone-item&#039;);
    dropzoneItems.forEach(dropzoneItem =&gt; {
        dropzoneItem.style.display = &#039;&#039;;
    });
    dropzone.querySelector(&#039;.dropzone-upload&#039;).style.display = &quot;inline-block&quot;;
    dropzone.querySelector(&#039;.dropzone-remove-all&#039;).style.display = &quot;inline-block&quot;;
});

// Update the total progress bar
myDropzone.on(&quot;totaluploadprogress&quot;, function (progress) {
    const progressBars = dropzone.querySelectorAll(&#039;.progress-bar&#039;);
    progressBars.forEach(progressBar =&gt; {
        progressBar.style.width = progress + &quot;%&quot;;
    });
});

myDropzone.on(&quot;sending&quot;, function (file) {
    // Show the total progress bar when upload starts
    const progressBars = dropzone.querySelectorAll(&#039;.progress-bar&#039;);
    progressBars.forEach(progressBar =&gt; {
        progressBar.style.opacity = &quot;1&quot;;
    });
    // And disable the start button
    file.previewElement.querySelector(id + &quot; .dropzone-start&quot;).setAttribute(&quot;disabled&quot;, &quot;disabled&quot;);
});

// Hide the total progress bar when nothing&#039;s uploading anymore
myDropzone.on(&quot;complete&quot;, function (progress) {
    const progressBars = dropzone.querySelectorAll(&#039;.dz-complete&#039;);

    setTimeout(function () {
        progressBars.forEach(progressBar =&gt; {
            progressBar.querySelector(&#039;.progress-bar&#039;).style.opacity = &quot;0&quot;;
            progressBar.querySelector(&#039;.progress&#039;).style.opacity = &quot;0&quot;;
            progressBar.querySelector(&#039;.dropzone-start&#039;).style.opacity = &quot;0&quot;;
        });
    }, 300);
});

// Setup the buttons for all transfers
dropzone.querySelector(&quot;.dropzone-upload&quot;).addEventListener(&#039;click&#039;, function () {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED));
});

// Setup the button for remove all files
dropzone.querySelector(&quot;.dropzone-remove-all&quot;).addEventListener(&#039;click&#039;, function () {
    dropzone.querySelector(&#039;.dropzone-upload&#039;).style.display = &quot;none&quot;;
    dropzone.querySelector(&#039;.dropzone-remove-all&#039;).style.display = &quot;none&quot;;
    myDropzone.removeAllFiles(true);
});

// On all files completed upload
myDropzone.on(&quot;queuecomplete&quot;, function (progress) {
    const uploadIcons = dropzone.querySelectorAll(&#039;.dropzone-upload&#039;);
    uploadIcons.forEach(uploadIcon =&gt; {
        uploadIcon.style.display = &quot;none&quot;;
    });
});

// On all files removed
myDropzone.on(&quot;removedfile&quot;, function (file) {
    if (myDropzone.files.length &lt; 1) {
        dropzone.querySelector(&#039;.dropzone-upload&#039;).style.display = &quot;none&quot;;
        dropzone.querySelector(&#039;.dropzone-remove-all&#039;).style.display = &quot;none&quot;;
    }
});</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e350e43fcc7" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px"><code class="language-html">&lt;!--begin::Form--&gt;
&lt;form class=&quot;form&quot; action=&quot;#&quot; method=&quot;post&quot;&gt;
    &lt;!--begin::Input group--&gt;
    &lt;div class=&quot;form-group row&quot;&gt;
        &lt;!--begin::Label--&gt;
        &lt;label class=&quot;col-lg-2 col-form-label text-lg-right&quot;&gt;Upload Files:&lt;/label&gt;
        &lt;!--end::Label--&gt;

        &lt;!--begin::Col--&gt;
        &lt;div class=&quot;col-lg-10&quot;&gt;
            &lt;!--begin::Dropzone--&gt;
            &lt;div class=&quot;dropzone dropzone-queue mb-2&quot; id=&quot;kt_dropzonejs_example_2&quot;&gt;
                &lt;!--begin::Controls--&gt;
                &lt;div class=&quot;dropzone-panel mb-lg-0 mb-2&quot;&gt;
                    &lt;a class=&quot;dropzone-select btn btn-sm btn-primary me-2&quot;&gt;Attach files&lt;/a&gt;
                    &lt;a class=&quot;dropzone-upload btn btn-sm btn-light-primary me-2&quot;&gt;Upload All&lt;/a&gt;
                    &lt;a class=&quot;dropzone-remove-all btn btn-sm btn-light-primary&quot;&gt;Remove All&lt;/a&gt;
                &lt;/div&gt;
                &lt;!--end::Controls--&gt;

                &lt;!--begin::Items--&gt;
                &lt;div class=&quot;dropzone-items wm-200px&quot;&gt;
                    &lt;div class=&quot;dropzone-item&quot; style=&quot;display:none&quot;&gt;
                        &lt;!--begin::File--&gt;
                        &lt;div class=&quot;dropzone-file&quot;&gt;
                            &lt;div class=&quot;dropzone-filename&quot; title=&quot;some_image_file_name.jpg&quot;&gt;
                                &lt;span data-dz-name&gt;some_image_file_name.jpg&lt;/span&gt;
                                &lt;strong&gt;(&lt;span data-dz-size&gt;340kb&lt;/span&gt;)&lt;/strong&gt;
                            &lt;/div&gt;

                            &lt;div class=&quot;dropzone-error&quot; data-dz-errormessage&gt;&lt;/div&gt;
                        &lt;/div&gt;
                        &lt;!--end::File--&gt;

                        &lt;!--begin::Progress--&gt;
                        &lt;div class=&quot;dropzone-progress&quot;&gt;
                            &lt;div class=&quot;progress&quot;&gt;
                                &lt;div
                                    class=&quot;progress-bar bg-primary&quot;
                                    role=&quot;progressbar&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot; aria-valuenow=&quot;0&quot; data-dz-uploadprogress&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                        &lt;!--end::Progress--&gt;

                        &lt;!--begin::Toolbar--&gt;
                        &lt;div class=&quot;dropzone-toolbar&quot;&gt;
                            &lt;span class=&quot;dropzone-start&quot;&gt;&lt;i class=&quot;bi bi-play-fill fs-3&quot;&gt;&lt;/i&gt;&lt;/span&gt;
                            &lt;span class=&quot;dropzone-cancel&quot; data-dz-remove style=&quot;display: none;&quot;&gt;&lt;i class=&quot;bi bi-x fs-3&quot;&gt;&lt;/i&gt;&lt;/span&gt;
                            &lt;span class=&quot;dropzone-delete&quot; data-dz-remove&gt;&lt;i class=&quot;bi bi-x fs-1&quot;&gt;&lt;/i&gt;&lt;/span&gt;
                        &lt;/div&gt;
                        &lt;!--end::Toolbar--&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;!--end::Items--&gt;
            &lt;/div&gt;
            &lt;!--end::Dropzone--&gt;

            &lt;!--begin::Hint--&gt;
            &lt;span class=&quot;form-text text-muted&quot;&gt;Max file size is 1MB and max number of files is 5.&lt;/span&gt;
            &lt;!--end::Hint--&gt;
        &lt;/div&gt;
        &lt;!--end::Col--&gt;
    &lt;/div&gt;
    &lt;!--end::Input group--&gt;
&lt;/form&gt;
&lt;!--end::Form--&gt;</code></pre>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="pt-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="queue-auto-upload" data-kt-scroll-offset="50">
                            <a href="#queue-auto-upload"></a>

                            Queue Auto Upload
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            <b>DropzoneJS</b>&nbsp;example with manual file attachment and auto upload.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <!--begin::Form-->
                                <form class="form" action="#" method="post">
                                    <!--begin::Input group-->
                                    <div class="form-group row">
                                        <!--begin::Label-->
                                        <label class="col-lg-2 col-form-label text-lg-right">Upload Files:</label>
                                        <!--end::Label-->

                                        <!--begin::Col-->
                                        <div class="col-lg-10">
                                            <!--begin::Dropzone-->
                                            <div class="dropzone dropzone-queue mb-2" id="kt_dropzonejs_example_3">
                                                <!--begin::Controls-->
                                                <div class="dropzone-panel mb-lg-0 mb-2">
                                                    <a class="dropzone-select btn btn-sm btn-primary me-2">Attach files</a>
                                                </div>
                                                <!--end::Controls-->

                                                <!--begin::Items-->
                                                <div class="dropzone-items wm-200px">
                                                    <div class="dropzone-item" style="display:none">
                                                        <!--begin::File-->
                                                        <div class="dropzone-file">
                                                            <div class="dropzone-filename"
                                                                title="some_image_file_name.jpg">
                                                                <span data-dz-name>some_image_file_name.jpg</span>
                                                                <strong>(<span data-dz-size>340kb</span>)</strong>
                                                            </div>

                                                            <div class="dropzone-error" data-dz-errormessage></div>
                                                        </div>
                                                        <!--end::File-->

                                                        <!--begin::Progress-->
                                                        <div class="dropzone-progress">
                                                            <div class="progress">
                                                                <div class="progress-bar bg-primary" role="progressbar"
                                                                    aria-valuemin="0" aria-valuemax="100"
                                                                    aria-valuenow="0" data-dz-uploadprogress>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end::Progress-->

                                                        <!--begin::Toolbar-->
                                                        <div class="dropzone-toolbar">
                                                            <span class="dropzone-delete" data-dz-remove><i
                                                                    class="bi bi-x fs-1"></i></span>
                                                        </div>
                                                        <!--end::Toolbar-->
                                                    </div>
                                                </div>
                                                <!--end::Items-->
                                            </div>
                                            <!--end::Dropzone-->

                                            <!--begin::Hint-->
                                            <span class="form-text text-muted">Max file size is 1MB and max number of files
                                                is 5.</span>
                                            <!--end::Hint-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                </form>
                                <!--end::Form-->
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <ul class="nav nav-pills" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab"
                                            href="#kt_highlight_68e350e43fd41" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e350e43fd42" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e350e43fd41"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript" style="height:400px"><code class="language-javascript">// set the dropzone container id
const id = &quot;#kt_dropzonejs_example_3&quot;;
const dropzone = document.querySelector(id);

// set the preview element template
var previewNode = dropzone.querySelector(&quot;.dropzone-item&quot;);
previewNode.id = &quot;&quot;;
var previewTemplate = previewNode.parentNode.innerHTML;
previewNode.parentNode.removeChild(previewNode);

var myDropzone = new Dropzone(id, { // Make the whole body a dropzone
    url: &quot;https://keenthemes.com/scripts/void.php&quot;, // Set the url for your upload script location
    parallelUploads: 20,
    maxFilesize: 1, // Max filesize in MB
    previewTemplate: previewTemplate,
    previewsContainer: id + &quot; .dropzone-items&quot;, // Define the container to display the previews
    clickable: id + &quot; .dropzone-select&quot; // Define the element that should be used as click trigger to select files.
});

myDropzone.on(&quot;addedfile&quot;, function (file) {
    // Hookup the start button
    const dropzoneItems = dropzone.querySelectorAll(&#039;.dropzone-item&#039;);
    dropzoneItems.forEach(dropzoneItem =&gt; {
        dropzoneItem.style.display = &#039;&#039;;
    });
});

// Update the total progress bar
myDropzone.on(&quot;totaluploadprogress&quot;, function (progress) {
    const progressBars = dropzone.querySelectorAll(&#039;.progress-bar&#039;);
    progressBars.forEach(progressBar =&gt; {
        progressBar.style.width = progress + &quot;%&quot;;
    });
});

myDropzone.on(&quot;sending&quot;, function (file) {
    // Show the total progress bar when upload starts
    const progressBars = dropzone.querySelectorAll(&#039;.progress-bar&#039;);
    progressBars.forEach(progressBar =&gt; {
        progressBar.style.opacity = &quot;1&quot;;
    });
});

// Hide the total progress bar when nothing&quot;s uploading anymore
myDropzone.on(&quot;complete&quot;, function (progress) {
    const progressBars = dropzone.querySelectorAll(&#039;.dz-complete&#039;);

    setTimeout(function () {
        progressBars.forEach(progressBar =&gt; {
            progressBar.querySelector(&#039;.progress-bar&#039;).style.opacity = &quot;0&quot;;
            progressBar.querySelector(&#039;.progress&#039;).style.opacity = &quot;0&quot;;
        });
    }, 300);
});</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e350e43fd42" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px"><code class="language-html">&lt;!--begin::Form--&gt;
&lt;form class=&quot;form&quot; action=&quot;#&quot; method=&quot;post&quot;&gt;
    &lt;!--begin::Input group--&gt;
    &lt;div class=&quot;form-group row&quot;&gt;
        &lt;!--begin::Label--&gt;
        &lt;label class=&quot;col-lg-2 col-form-label text-lg-right&quot;&gt;Upload Files:&lt;/label&gt;
        &lt;!--end::Label--&gt;

        &lt;!--begin::Col--&gt;
        &lt;div class=&quot;col-lg-10&quot;&gt;
            &lt;!--begin::Dropzone--&gt;
            &lt;div class=&quot;dropzone dropzone-queue mb-2&quot; id=&quot;kt_dropzonejs_example_3&quot;&gt;
                &lt;!--begin::Controls--&gt;
                &lt;div class=&quot;dropzone-panel mb-lg-0 mb-2&quot;&gt;
                    &lt;a class=&quot;dropzone-select btn btn-sm btn-primary me-2&quot;&gt;Attach files&lt;/a&gt;
                    &lt;a class=&quot;dropzone-remove-all btn btn-sm btn-light-primary&quot;&gt;Remove All&lt;/a&gt;
                &lt;/div&gt;
                &lt;!--end::Controls--&gt;

                &lt;!--begin::Items--&gt;
                &lt;div class=&quot;dropzone-items wm-200px&quot;&gt;
                    &lt;div class=&quot;dropzone-item&quot; style=&quot;display:none&quot;&gt;
                        &lt;!--begin::File--&gt;
                        &lt;div class=&quot;dropzone-file&quot;&gt;
                            &lt;div class=&quot;dropzone-filename&quot; title=&quot;some_image_file_name.jpg&quot;&gt;
                                &lt;span data-dz-name&gt;some_image_file_name.jpg&lt;/span&gt;
                                &lt;strong&gt;(&lt;span data-dz-size&gt;340kb&lt;/span&gt;)&lt;/strong&gt;
                            &lt;/div&gt;

                            &lt;div class=&quot;dropzone-error&quot; data-dz-errormessage&gt;&lt;/div&gt;
                        &lt;/div&gt;
                        &lt;!--end::File--&gt;

                        &lt;!--begin::Progress--&gt;
                        &lt;div class=&quot;dropzone-progress&quot;&gt;
                            &lt;div class=&quot;progress&quot;&gt;
                                &lt;div
                                    class=&quot;progress-bar bg-primary&quot;
                                    role=&quot;progressbar&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot; aria-valuenow=&quot;0&quot; data-dz-uploadprogress&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                        &lt;!--end::Progress--&gt;

                        &lt;!--begin::Toolbar--&gt;
                        &lt;div class=&quot;dropzone-toolbar&quot;&gt;
                            &lt;span class=&quot;dropzone-delete&quot; data-dz-remove&gt;&lt;i class=&quot;bi bi-x fs-1&quot;&gt;&lt;/i&gt;&lt;/span&gt;
                        &lt;/div&gt;
                        &lt;!--end::Toolbar--&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;!--end::Items--&gt;
            &lt;/div&gt;
            &lt;!--end::Dropzone--&gt;

            &lt;!--begin::Hint--&gt;
            &lt;span class=&quot;form-text text-muted&quot;&gt;Max file size is 1MB and max number of files is 5.&lt;/span&gt;
            &lt;!--end::Hint--&gt;
        &lt;/div&gt;
        &lt;!--end::Col--&gt;
    &lt;/div&gt;
    &lt;!--end::Input group--&gt;
&lt;/form&gt;
&lt;!--end::Form--&gt;</code></pre>
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
                                <a href="#usage" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Usage</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#initialization" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Initialization</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#basic-example" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Basic Example</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#queue-upload" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Queue Upload</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#queue-auto-upload" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Queue Auto Upload</span>
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
    <script src="{{ asset('assets/js/custom/documentation/forms/dropzonejs.js') }}"></script>
    <!--end::Vendors Javascript-->
@endsection


