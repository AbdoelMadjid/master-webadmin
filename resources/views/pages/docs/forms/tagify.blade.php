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
                            Transforms an input field or a textarea into a Tags component, in an easy, customizable
                            way, with great performance and small code footprint, exploded with features
                            For full documentation please check the <a href="https://yaireo.github.io/tagify/"
                                target="_blank" class="fw-semibold">plugin's site</a>.
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
                            Tagify's CSS and Javascript files are bundled in the global plugin bundles and globally
                            included in all pages:
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
                                    Tagify's CSS is highly customized in
                                    <code>sass/vendors/plugins/_tagify.scss</code> SCSS file in order to use it as
                                    native component within the design system.
                                    The SCSS code is compiled into
                                    <code>assets/plugins/global/plugins.bundle.css</code> and globally included in
                                    all pages.
                                </li>
                                <li class="py-2">
                                    Tagify's Javascript is bundled in
                                    <code>assets/plugins/global/plugins.bundle.js</code> and globally included in
                                    all pages.
                                </li>
                            </ul>
                        </div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="basic" data-kt-scroll-offset="50">
                            <a href="#basic"></a>

                            Basic
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Basic example of Tagify attached to an input element:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="mb-10">
                                    <label class="form-label">Default input style</label>
                                    <input class="form-control" value="tag1, tag2, tag3" id="kt_tagify_1" />
                                </div>

                                <div class="mb-0">
                                    <label class="form-label">Solid background style</label>
                                    <input class="form-control form-control-solid" value="tag1, tag2, tag3"
                                        id="kt_tagify_2" />
                                </div>
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
                                            href="#kt_highlight_68e0d2bac9642" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e0d2bac9646" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e0d2bac9642" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript"><code class="language-javascript">// The DOM elements you wish to replace with Tagify
var input1 = document.querySelector(&quot;#kt_tagify_1&quot;);
var input2 = document.querySelector(&quot;#kt_tagify_2&quot;);

// Initialize Tagify components on the above inputs
new Tagify(input1);
new Tagify(input2);</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e0d2bac9646" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html"><code class="language-html">&lt;div class=&quot;mb-10&quot;&gt;
    &lt;label class=&quot;form-label&quot;&gt;Default input style&lt;/label&gt;
    &lt;input class=&quot;form-control&quot; value=&quot;tag1, tag2, tag3&quot; id=&quot;kt_tagify_1&quot;/&gt;
&lt;/div&gt;

&lt;div class=&quot;mb-0&quot;&gt;
    &lt;label class=&quot;form-label&quot;&gt;Solid background style&lt;/label&gt;
    &lt;input class=&quot;form-control form-control-solid&quot; value=&quot;tag1, tag2, tag3&quot; id=&quot;kt_tagify_2&quot;/&gt;
&lt;/div&gt;</code></pre>
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
                        <h1 class="anchor fw-bold mb-5" id="countries-with-flags" data-kt-scroll-offset="50">
                            <a href="#countries-with-flags"></a>

                            Countries With Flags
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Initialize Tagify programmatically and control the country flags via Javascript.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <label class="form-label">Country Tags</label>
                                <input class="form-control d-flex align-items-center" value=""
                                    id="kt_tagify_country" />
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
                                            href="#kt_highlight_68e0d2bac9685" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e0d2bac9686" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e0d2bac9685"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript" style="height:400px"><code class="language-javascript">var tagify = new Tagify(document.querySelector(&#039;#kt_tagify_country&#039;), {
    delimiters: null,
    templates: {
        tag: function (tagData) {
            const countryPath = &#039;assets/media/flags/&#039; + tagData.value.toLowerCase().replace(/\s+/g, &#039;-&#039;) + &#039;.svg&#039;;
            try {
                // _ESCAPE_START_
                return `&lt;tag title=&#039;${tagData.value}&#039; contenteditable=&#039;false&#039; spellcheck=&quot;false&quot;
                    class=&#039;tagify__tag ${tagData.class ? tagData.class : &quot;&quot;}&#039; ${this.getAttributes(tagData)}&gt;
                        &lt;x title=&#039;remove tag&#039; class=&#039;tagify__tag__removeBtn&#039;&gt;&lt;/x&gt;
                        &lt;div class=&quot;d-flex align-items-center&quot;&gt;
                            ${tagData.code ?
                        `&lt;img onerror=&quot;this.style.visibility = &#039;hidden&#039;&quot; class=&quot;w-25px rounded-circle me-2&quot; src=&#039;${countryPath}&#039; /&gt;` : &#039;&#039;
                    }
                            &lt;span class=&#039;tagify__tag-text&#039;&gt;${tagData.value}&lt;/span&gt;
                        &lt;/div&gt;
                    &lt;/tag&gt;`
                // _ESCAPE_END_
            }
            catch (err) { }
        },

        dropdownItem: function (tagData) {
            const countryPath = &#039;assets/media/flags/&#039; + tagData.value.toLowerCase().replace(/\s+/g, &#039;-&#039;) + &#039;.svg&#039;;
            try {
                // _ESCAPE_START_
                return `&lt;div ${this.getAttributes(tagData)} class=&#039;tagify__dropdown__item ${tagData.class ? tagData.class : &quot;&quot;}&#039;&gt;
                            &lt;img onerror=&quot;this.style.visibility = &#039;hidden&#039;&quot; class=&quot;w-25px rounded-circle me-2&quot;
                                    src=&#039;${countryPath}&#039; /&gt;
                            &lt;span&gt;${tagData.value}&lt;/span&gt;
                        &lt;/div&gt;`
                // _ESCAPE_END_
            }
            catch (err) { }
        }
    },
    enforceWhitelist: true,
    whitelist: [
        { value: &#039;Argentina&#039;, code: &#039;AR&#039; },
        { value: &#039;Australia&#039;, code: &#039;AU&#039;, searchBy: &#039;beach, sub-tropical&#039; },
        { value: &#039;Austria&#039;, code: &#039;AT&#039; },
        { value: &#039;Brazil&#039;, code: &#039;BR&#039; },
        { value: &#039;China&#039;, code: &#039;CN&#039; },
        { value: &#039;Egypt&#039;, code: &#039;EG&#039; },
        { value: &#039;Finland&#039;, code: &#039;FI&#039; },
        { value: &#039;France&#039;, code: &#039;FR&#039; },
        { value: &#039;Germany&#039;, code: &#039;DE&#039; },
        { value: &#039;Hong Kong&#039;, code: &#039;HK&#039; },
        { value: &#039;Hungary&#039;, code: &#039;HU&#039; },
        { value: &#039;Iceland&#039;, code: &#039;IS&#039; },
        { value: &#039;India&#039;, code: &#039;IN&#039; },
        { value: &#039;Indonesia&#039;, code: &#039;ID&#039; },
        { value: &#039;Italy&#039;, code: &#039;IT&#039; },
        { value: &#039;Jamaica&#039;, code: &#039;JM&#039; },
        { value: &#039;Japan&#039;, code: &#039;JP&#039; },
        { value: &#039;Jersey&#039;, code: &#039;JE&#039; },
        { value: &#039;Luxembourg&#039;, code: &#039;LU&#039; },
        { value: &#039;Mexico&#039;, code: &#039;MX&#039; },
        { value: &#039;Netherlands&#039;, code: &#039;NL&#039; },
        { value: &#039;New Zealand&#039;, code: &#039;NZ&#039; },
        { value: &#039;Norway&#039;, code: &#039;NO&#039; },
        { value: &#039;Philippines&#039;, code: &#039;PH&#039; },
        { value: &#039;Singapore&#039;, code: &#039;SG&#039; },
        { value: &#039;South Korea&#039;, code: &#039;KR&#039; },
        { value: &#039;Sweden&#039;, code: &#039;SE&#039; },
        { value: &#039;Switzerland&#039;, code: &#039;CH&#039; },
        { value: &#039;Thailand&#039;, code: &#039;TH&#039; },
        { value: &#039;Ukraine&#039;, code: &#039;UA&#039; },
        { value: &#039;United Kingdom&#039;, code: &#039;GB&#039; },
        { value: &#039;United States&#039;, code: &#039;US&#039; },
        { value: &#039;Vietnam&#039;, code: &#039;VN&#039; }
    ],
    dropdown: {
        enabled: 1, // suggest tags after a single character input
        classname: &#039;extra-properties&#039; // custom class for the suggestions dropdown
    } // map tags&#039; values to this property name, so this property will be the actual value and not the printed value on the screen
})

// add the first 2 tags and makes them readonly
var tagsToAdd = tagify.settings.whitelist.slice(0, 2);
tagify.addTags(tagsToAdd);</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e0d2bac9686" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px"><code class="language-html">&lt;label class=&quot;form-label&quot;&gt;Country Tags&lt;/label&gt;
&lt;input class=&quot;form-control d-flex align-items-center&quot; value=&quot;&quot; id=&quot;kt_tagify_country&quot; /&gt;</code></pre>
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
                        <h1 class="anchor fw-bold mb-5" id="users-with-avatars" data-kt-scroll-offset="50">
                            <a href="#users-with-avatars"></a>

                            Users With Avatars
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Initialize Tagify programmatically and control the user portraits and names via
                            Javascript.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <label class="form-label">User Tags</label>
                                <input class="form-control d-flex align-items-center" value=""
                                    placeholder='Select users' id="kt_tagify_users" />
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
                                            href="#kt_highlight_68e0d2bac96d4" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e0d2bac96d5" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e0d2bac96d4"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript" style="height:400px"><code class="language-javascript">var inputElm = document.querySelector(&#039;#kt_tagify_users&#039;);

const usersList = [
    { value: 1, name: &#039;Emma Smith&#039;, avatar: &#039;avatars/300-6.jpg&#039;, email: &#039;e.smith@kpmg.com.au&#039; },
    { value: 2, name: &#039;Max Smith&#039;, avatar: &#039;avatars/300-1.jpg&#039;, email: &#039;max@kt.com&#039; },
    { value: 3, name: &#039;Sean Bean&#039;, avatar: &#039;avatars/300-5.jpg&#039;, email: &#039;sean@dellito.com&#039; },
    { value: 4, name: &#039;Brian Cox&#039;, avatar: &#039;avatars/300-25.jpg&#039;, email: &#039;brian@exchange.com&#039; },
    { value: 5, name: &#039;Francis Mitcham&#039;, avatar: &#039;avatars/300-9.jpg&#039;, email: &#039;f.mitcham@kpmg.com.au&#039; },
    { value: 6, name: &#039;Dan Wilson&#039;, avatar: &#039;avatars/300-23.jpg&#039;, email: &#039;dam@consilting.com&#039; },
    { value: 7, name: &#039;Ana Crown&#039;, avatar: &#039;avatars/300-12.jpg&#039;, email: &#039;ana.cf@limtel.com&#039; },
    { value: 8, name: &#039;John Miller&#039;, avatar: &#039;avatars/300-13.jpg&#039;, email: &#039;miller@mapple.com&#039; }
];

function tagTemplate(tagData) {
    return `
        &lt;tag title=&quot;${(tagData.title || tagData.email)}&quot;
                contenteditable=&#039;false&#039;
                spellcheck=&#039;false&#039;
                tabIndex=&quot;-1&quot;
                class=&quot;${this.settings.classNames.tag} ${tagData.class ? tagData.class : &quot;&quot;}&quot;
                ${this.getAttributes(tagData)}&gt;
            &lt;x title=&#039;&#039; class=&#039;tagify__tag__removeBtn&#039; role=&#039;button&#039; aria-label=&#039;remove tag&#039;&gt;&lt;/x&gt;
            &lt;div class=&quot;d-flex align-items-center&quot;&gt;
                &lt;div class=&#039;tagify__tag__avatar-wrap ps-0&#039;&gt;
                    &lt;img onerror=&quot;this.style.visibility=&#039;hidden&#039;&quot; class=&quot;rounded-circle w-25px me-2&quot; src=&quot;assets/media/${tagData.avatar}&quot;&gt;
                &lt;/div&gt;
                &lt;span class=&#039;tagify__tag-text&#039;&gt;${tagData.name}&lt;/span&gt;
            &lt;/div&gt;
        &lt;/tag&gt;
    `
}

function suggestionItemTemplate(tagData) {
    return `
        &lt;div ${this.getAttributes(tagData)}
            class=&#039;tagify__dropdown__item d-flex align-items-center ${tagData.class ? tagData.class : &quot;&quot;}&#039;
            tabindex=&quot;0&quot;
            role=&quot;option&quot;&gt;

            ${tagData.avatar ? `
                    &lt;div class=&#039;tagify__dropdown__item__avatar-wrap me-2&#039;&gt;
                        &lt;img onerror=&quot;this.style.visibility=&#039;hidden&#039;&quot;  class=&quot;rounded-circle w-50px me-2&quot; src=&quot;assets/media/${tagData.avatar}&quot;&gt;
                    &lt;/div&gt;` : &#039;&#039;
                }

            &lt;div class=&quot;d-flex flex-column&quot;&gt;
                &lt;strong&gt;${tagData.name}&lt;/strong&gt;
                &lt;span&gt;${tagData.email}&lt;/span&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    `
}

// initialize Tagify on the above input node reference
var tagify = new Tagify(inputElm, {
    tagTextProp: &#039;name&#039;, // very important since a custom template is used with this property as text. allows typing a &quot;value&quot; or a &quot;name&quot; to match input with whitelist
    enforceWhitelist: true,
    skipInvalid: true, // do not remporarily add invalid tags
    dropdown: {
        closeOnSelect: false,
        enabled: 0,
        classname: &#039;users-list&#039;,
        searchKeys: [&#039;name&#039;, &#039;email&#039;]  // very important to set by which keys to search for suggesttions when typing
    },
    templates: {
        tag: tagTemplate,
        dropdownItem: suggestionItemTemplate
    },
    whitelist: usersList
})

tagify.on(&#039;dropdown:show dropdown:updated&#039;, onDropdownShow)
tagify.on(&#039;dropdown:select&#039;, onSelectSuggestion)

var addAllSuggestionsElm;

function onDropdownShow(e) {
    var dropdownContentElm = e.detail.tagify.DOM.dropdown.content;

    if (tagify.suggestedListItems.length &gt; 1) {
        addAllSuggestionsElm = getAddAllSuggestionsElm();

        // insert &quot;addAllSuggestionsElm&quot; as the first element in the suggestions list
        dropdownContentElm.insertBefore(addAllSuggestionsElm, dropdownContentElm.firstChild)
    }
}

function onSelectSuggestion(e) {
    if (e.detail.elm == addAllSuggestionsElm)
        tagify.dropdown.selectAll.call(tagify);
}

// create a &quot;add all&quot; custom suggestion element every time the dropdown changes
function getAddAllSuggestionsElm() {
    // suggestions items should be based on &quot;dropdownItem&quot; template
    return tagify.parseTemplate(&#039;dropdownItem&#039;, [{
        class: &quot;addAll&quot;,
        name: &quot;Add all&quot;,
        email: tagify.settings.whitelist.reduce(function (remainingSuggestions, item) {
            return tagify.isTagDuplicate(item.value) ? remainingSuggestions : remainingSuggestions + 1
        }, 0) + &quot; Members&quot;
    }]
    )
}</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e0d2bac96d5" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html"><code class="language-html">&lt;label class=&quot;form-label&quot;&gt;User Tags&lt;/label&gt;
&lt;input class=&quot;form-control d-flex align-items-center&quot; value=&quot;&quot; placeholder=&quot;write some tags&quot; id=&quot;kt_tagify_users&quot; /&gt;</code></pre>
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
                        <h1 class="anchor fw-bold mb-5" id="sizes" data-kt-scroll-offset="50">
                            <a href="#sizes"></a>

                            Sizes
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Apply the standard Bootstrap input sizes <code>.form-control-sm</code> and
                            <code>.form-control-lg</code>:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="mb-10">
                                    <label class="form-label">Small size</label>
                                    <input class="form-control form-control-sm form-control-solid"
                                        placeholder="Enter tags" value="tag1, tag2, tag3" id="kt_tagify_3" />
                                </div>

                                <div class="mb-10">
                                    <label class="form-label">Default size</label>
                                    <input class="form-control form-control-solid" placeholder="Enter tags"
                                        value="tag1, tag2, tag3" id="kt_tagify_4" />
                                </div>

                                <div class="mb-0">
                                    <label class="form-label">Large size</label>
                                    <input class="form-control form-control-lg form-control-solid"
                                        placeholder="Enter tags" value="tag1, tag2, tag3" id="kt_tagify_5" />
                                </div>
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
                                            href="#kt_highlight_68e0d2bac972b" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e0d2bac972c" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e0d2bac972b"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript"><code class="language-javascript">// The DOM elements you wish to replace with Tagify
var input1 = document.querySelector(&quot;#kt_tagify_3&quot;);
var input2 = document.querySelector(&quot;#kt_tagify_4&quot;);
var input2 = document.querySelector(&quot;#kt_tagify_5&quot;);

// Initialize Tagify components on the above inputs
new Tagify(input1);
new Tagify(input2);
new Tagify(input3);</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e0d2bac972c" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html"><code class="language-html">&lt;input class=&quot;form-control form-control-sm form-control-solid&quot; placeholder=&quot;Enter tags&quot; value=&quot;tag1, tag2, tag3&quot; id=&quot;kt_tagify_3&quot;/&gt;
&lt;input class=&quot;form-control form-control-solid&quot; placeholder=&quot;Enter tags&quot; value=&quot;tag1, tag2, tag3&quot; id=&quot;kt_tagify_4&quot;/&gt;
&lt;input class=&quot;form-control form-control-lg form-control-solid&quot; placeholder=&quot;Enter tags&quot; value=&quot;tag1, tag2, tag3&quot; id=&quot;kt_tagify_5&quot;/&gt;</code></pre>
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
                        <h1 class="anchor fw-bold mb-5" id="suggestions" data-kt-scroll-offset="50">
                            <a href="#suggestions"></a>

                            Suggestions
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            A dropdown with suggestions will appear immediately when Tagify has focus.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="mb-10">
                                    <label class="form-label">Inline Suggestions</label>
                                    <input class="form-control form-control-solid" value="css, html, javascript"
                                        id="kt_tagify_6" />
                                </div>

                                <div class="mb-0">
                                    <label class="form-label">List Suggestions</label>
                                    <input class="form-control form-control-solid" value="css, html, javascript"
                                        id="kt_tagify_7" />
                                </div>
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
                                            href="#kt_highlight_68e0d2bac9758" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e0d2bac9759" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e0d2bac9758"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript" style="height:400px"><code class="language-javascript">// The DOM elements you wish to replace with Tagify
var input = document.querySelector(&quot;#kt_tagify_6&quot;);
var input = document.querySelector(&quot;#kt_tagify_7&quot;);

// Initialize Tagify script on the above inputs
new Tagify(input, {
    whitelist: [&quot;Ada&quot;, &quot;Adenine&quot;, &quot;Agda&quot;, &quot;Agilent VEE&quot;],
    maxTags: 10,
    dropdown: {
        maxItems: 20,           // &lt;- mixumum allowed rendered suggestions
        classname: &quot;tagify__inline__suggestions&quot;, // &lt;- custom classname for this dropdown, so it could be targeted
        enabled: 0,             // &lt;- show suggestions on focus
        closeOnSelect: false    // &lt;- do not hide the suggestions dropdown once an item has been selected
    }
});

new Tagify(input, {
    whitelist: [&quot;Ada&quot;, &quot;Adenine&quot;, &quot;Agda&quot;, &quot;Agilent VEE&quot;],
    maxTags: 10,
    dropdown: {
        maxItems: 20,           // &lt;- mixumum allowed rendered suggestions
        classname: &quot;&quot;, // &lt;- custom classname for this dropdown, so it could be targeted
        enabled: 0,             // &lt;- show suggestions on focus
        closeOnSelect: false    // &lt;- do not hide the suggestions dropdown once an item has been selected
    }
});</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e0d2bac9759" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html"><code class="language-html">&lt;input class=&quot;form-control form-control-solid&quot; value=&quot;css, html, javascript&quot; id=&quot;kt_tagify_6&quot;/&gt;

&lt;input class=&quot;form-control form-control-solid&quot; value=&quot;css, html, javascript&quot; id=&quot;kt_tagify_7&quot;/&gt;</code></pre>
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
                        <h1 class="anchor fw-bold mb-5" id="external-suggestions" data-kt-scroll-offset="50">
                            <a href="#external-suggestions"></a>

                            External Suggestions
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Allows to select suggestions from an external container.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="mb-0">
                                    <label class="form-label">External Suggestions</label>
                                    <input class="form-control form-control-solid" value="Bootstrap"
                                        id="kt_tagify_custom" />
                                    <div class="pt-3">
                                        <span class="text-gray-700">Suggested:</span>

                                        <span class="text-danger" id="kt_tagify_custom_suggestions">
                                            <span class="cursor-pointer" data-kt-suggestion="true">Bootstrap</span>,
                                            <span class="cursor-pointer" data-kt-suggestion="true">Angular</span>,
                                            <span class="cursor-pointer" data-kt-suggestion="true">React</span>,
                                            <span class="cursor-pointer" data-kt-suggestion="true">Vue</span>
                                        </span>
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
                                <ul class="nav nav-pills" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab"
                                            href="#kt_highlight_68e0d2bac978c" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e0d2bac978d" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e0d2bac978c"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript" style="height:400px"><code class="language-javascript">var input = document.querySelector(&#039;#kt_tagify_custom&#039;),

// Init Tagify script on the above inputs
tagify = new Tagify(input, {
    whitelist: [&quot;Bootstrap&quot;, &quot;Angular&quot;, &quot;React&quot;, &quot;Vue&quot;],
    placeholder: &quot;Type something&quot;,
    enforceWhitelist: true
});

// Suggestions
var suggestions = document.querySelector(&#039;#kt_tagify_custom_suggestions&#039;);

// Suggestion item click
KTUtil.on(suggestions,  &#039;[data-kt-suggestion=&quot;true&quot;]&#039;, &#039;click&#039;, function(e) {
    tagify.addTags([this.innerText]);
});</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e0d2bac978d" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html"><code class="language-html">&lt;div class=&quot;mb-0&quot;&gt;
    &lt;label class=&quot;form-label&quot;&gt;External Suggestions&lt;/label&gt;
    &lt;input class=&quot;form-control form-control-solid&quot; value=&quot;Bootstrap&quot; id=&quot;kt_tagify_custom&quot;/&gt;
    &lt;div class=&quot;pt-3&quot;&gt;
        &lt;span class=&quot;text-gray-700&quot;&gt;Suggested:&lt;/span&gt;

        &lt;span class=&quot;text-danger&quot; id=&quot;kt_tagify_custom_suggestions&quot;&gt;
            &lt;span class=&quot;cursor-pointer&quot; data-kt-suggestion=&quot;true&quot;&gt;Bootstrap&lt;/span&gt;,
            &lt;span class=&quot;cursor-pointer&quot; data-kt-suggestion=&quot;true&quot;&gt;Angular&lt;/span&gt;,
            &lt;span class=&quot;cursor-pointer&quot; data-kt-suggestion=&quot;true&quot;&gt;React&lt;/span&gt;,
            &lt;span class=&quot;cursor-pointer&quot; data-kt-suggestion=&quot;true&quot;&gt;Vue&lt;/span&gt;
        &lt;/span&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
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
                        <h1 class="anchor fw-bold mb-5" id="readonly-mode" data-kt-scroll-offset="50">
                            <a href="#readonly-mode"></a>

                            Readonly Mode
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            If the original input field has a readonly attribute, then, via CSS, there will be no
                            way of manually adding tags because the inline contenteditable element will be hidden.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="mb-0">
                                    <label class="form-label">Example</label>
                                    <input class="form-control form-control-solid" readonly value="css, html, javascript"
                                        id="kt_tagify_8" />
                                </div>
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
                                            href="#kt_highlight_68e0d2bac97b9" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e0d2bac97ba" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e0d2bac97b9"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript"><code class="language-javascript">// The DOM elements you wish to replace with Tagify
var input1 = document.querySelector(&quot;#kt_tagify_8&quot;);

// Initialize Tagify components on the above inputs
new Tagify(input1);</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e0d2bac97ba" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html"><code class="language-html">&lt;input class=&quot;form-control form-control-solid&quot; value=&quot;css, html, javascript&quot; readonly id=&quot;kt_tagify_8&quot;/&gt;</code></pre>
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
                                <a href="#basic" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Basic</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#countries-with-flags" data-kt-scroll-toggle="true"
                                    class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Countries With Flags</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#users-with-avatars" data-kt-scroll-toggle="true"
                                    class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Users With Avatars</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#sizes" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Sizes</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#suggestions" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Suggestions</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#external-suggestions" data-kt-scroll-toggle="true"
                                    class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">External Suggestions</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#readonly-mode" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Readonly Mode</span>
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
    <script src="{{ asset('assets/js/custom/documentation/forms/tagify.js') }}"></script>
    <!--end::Vendors Javascript-->
@endsection


