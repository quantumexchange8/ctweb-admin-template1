@extends('layout.master')

@section('content')
<div class="content-body">

    <!-- Page Headings Start -->
    <div class="row justify-content-between align-items-center mb-10">

        <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3 class="title">Elements <span>/ Clipboard</span></h3>
            </div>
        </div><!-- Page Heading End -->

    </div><!-- Page Headings End -->

    <div class="row">

        <!--Clipboard on Text Input Start-->
        <div class="col-md-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Clipboard on Text Input</h4>
                </div>
                <div class="box-body">
                    <input id="inputClipboard" type="text" class="form-control" value="Hi There">
                    <button class="button button-primary button-clipboard mb-0 mt-15" data-clipboard-target="#inputClipboard">Copy</button>
                    <button class="button button-secondary button-clipboard mb-0 mt-15" data-clipboard-target="#inputClipboard" data-clipboard-action="cut">Cut</button>
                </div>
            </div>
        </div>
        <!--Clipboard on Text Input End-->

        <!--Clipboard on Textarea Start-->
        <div class="col-md-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Clipboard on Textarea</h4>
                </div>
                <div class="box-body">
                    <textarea id="textareaClipboard" class="form-control">Clipboard on Textarea</textarea>
                    <button class="button button-primary button-clipboard mb-0 mt-15" data-clipboard-target="#textareaClipboard">Copy</button>
                    <button class="button button-secondary button-clipboard mb-0 mt-15" data-clipboard-target="#textareaClipboard" data-clipboard-action="cut">Cut</button>
                </div>
            </div>
        </div>
        <!--Clipboard on Textarea End-->

        <!--Clipboard on Paragraph Start-->
        <div class="col-md-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Clipboard on Paragraph</h4>
                </div>
                <div class="box-body">
                    <p id="paragraphClipboard">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem porro reiciendis odio in cumque omnis fuga iusto ipsam asperiores nesciunt officia officiis labore laboriosam aperiam deleniti consequatur debitis, ea. Veniam.</p>
                    <button class="button button-primary button-clipboard mb-0 mt-15" data-clipboard-target="#paragraphClipboard">Copy</button>
                </div>
            </div>
        </div>
        <!--Clipboard on Paragraph End-->

        <!--Copy Portion from Paragraph Start-->
        <div class="col-md-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Copy Portion from Paragraph</h4>
                </div>
                <div class="box-body">
                    <p>Lorem ipsum dolor sit amet, consectetur <span id="paragraphClipboard2" class="fw-700 text-primary">adipisicing elit</span>. Quidem porro reiciendis odio in cumque omnis fuga iusto ipsam asperiores nesciunt officia officiis labore laboriosam aperiam deleniti consequatur debitis, ea. Veniam.</p>
                    <button class="button button-primary button-clipboard mb-0 mt-15" data-clipboard-target="#paragraphClipboard2">Copy</button>
                </div>
            </div>
        </div>
        <!--Copy Portion from Paragraph End-->

        <!--How To Use Start-->
        <div class="col-12">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">How To Use</h4>
                </div>
                <div class="box-body">
                    <h6>Basic Use HTML</h6>
                    <code>
                    &lt;input id="inputClipboard" type="text" class="form-control" value="Hi There"&gt;<br />&lt;button class="button button-primary button-clipboard mb-0 mt-15" data-clipboard-target="#inputClipboard"&gt;Copy&lt;/button&gt;<br />&lt;button class="button button-secondary button-clipboard mb-0 mt-15" data-clipboard-target="#inputClipboard" data-clipboard-action="cut"&gt;Cut&lt;/button&gt;
                </code>
                    <h6 class="mt-15">Js Activation</h6>
                    <code>
                    var clipboard = new ClipboardJS('.button-clipboard');
                </code>
                    <p class="mt-15">For more Information please follow the <a class="text-primary" href="https://clipboardjs.com/">Official Documentation</a></p>
                </div>
            </div>
        </div>
        <!--How To Use End-->

    </div>

</div>
@endsection