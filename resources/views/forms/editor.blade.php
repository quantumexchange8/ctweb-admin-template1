@extends('layout.master')

@section('content')
<div class="content-body">

    <!-- Page Headings Start -->
    <div class="row justify-content-between align-items-center mb-10">

        <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3>Form <span>/ Editors</span></h3>
            </div>
        </div><!-- Page Heading End -->

    </div><!-- Page Headings End -->

    <div class="row">

        <!--Summernote Start-->
        <div class="col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h3 class="title">Summernote</h3>
                </div>
                <div class="box-body">
                    <textarea class="summernote"></textarea>
                </div>
            </div>
        </div>
        <!--Summernote End-->

        <!--How To Use Start-->
        <div class="col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">How To Use</h4>
                </div>
                <div class="box-body">
                    <h6>Basic Use HTML</h6>
                    <code>
                    &lt;textarea class="summernote" &gt;&lt;/textarea&gt;
                </code>
                    <h6 class="mt-15">Js Activation</h6>
                    <code>
                    $('.summernote').summernote({ <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;height: 250, <br>
                    });
                </code>
                    <p class="mt-15">For more Information please follow the <a class="text-primary" href="https://summernote.org/getting-started/">Official Documentation</a></p>
                </div>
            </div>
        </div>
        <!--How To Use End-->

        <!--Quill Start-->
        <div class="col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h3 class="title">Quill</h3>
                </div>
                <div class="box-body">
                    <div class="quill">
                        <p>Hello World!</p>
                        <p>Some initial <strong>bold</strong> text</p>
                        <p><br></p>
                    </div>
                </div>
            </div>
        </div>
        <!--Quill End-->

        <!--How To Use Start-->
        <div class="col-12">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">How To Use</h4>
                </div>
                <div class="box-body">
                    <h6>Basic Use HTML</h6>
                    <code>
                    &lt;div class="quill"&gt;&lt;/div&gt;
                </code>
                    <h6 class="mt-15">Js Activation</h6>
                    <code>
                    var quill = new Quill('.quill', { <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;theme: 'snow' <br>
                    });
                </code>
                    <p class="mt-15">For more Information please follow the <a class="text-primary" href="https://quilljs.com/docs/quickstart/">Official Documentation</a></p>
                </div>
            </div>
        </div>
        <!--How To Use End-->

    </div>

</div>
@endsection