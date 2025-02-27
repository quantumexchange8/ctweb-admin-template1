@extends('layout.master')

@section('content')
<div class="content-body">

    <!-- Page Headings Start -->
    <div class="row justify-content-between align-items-center mb-10">

        <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3 class="title">Elements <span>/ Sweetalert</span></h3>
            </div>
        </div><!-- Page Heading End -->

    </div><!-- Page Headings End -->

    <div class="row">

        <!--Sweetalert Start-->
        <div class="col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h3 class="title">Sweetalert</h3>
                </div>
                <div class="box-body">
                    <button class="sweetalert sweetalert-basic button button-primary">Basic</button>
                    <button class="sweetalert sweetalert-success button button-success">Success</button>
                    <button class="sweetalert sweetalert-warning button button-warning">Warning</button>
                    <button class="sweetalert sweetalert-error button button-danger">Error</button>
                    <button class="sweetalert sweetalert-info button button-info">Info</button>
                    <button class="sweetalert sweetalert-multiple button button-primary">Multiple</button>
                    <button class="sweetalert sweetalert-prompt button button-primary">Prompt</button>
                    <button class="sweetalert sweetalert-ajax button button-primary">Ajax</button>
                    <button class="sweetalert sweetalert-timer button button-primary">Timer</button>
                </div>
            </div>
        </div>
        <!--Sweetalert End-->

        <!--How To Use Start-->
        <div class="col-12">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">How To Use</h4>
                </div>
                <div class="box-body">
                    <h6>Basic Use HTML</h6>
                    <code>
                    &lt;button class="sweetalert sweetalert-basic button button-primary"&gt;Basic&lt;/button&gt;
                </code>
                    <h6 class="mt-15">Js Activation</h6>
                    <code>
                    $('.sweetalert-basic').on('click', function(){<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;swal({<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;title: "Here's the title!",<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;text: "Here's the Lorem ipsum text!"<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;});<br>
                    });
                </code>
                    <p class="mt-15">For more Information please follow the <a class="text-primary" href="https://sweetalert.js.org/guides/">Official Documentation</a></p>
                </div>
            </div>
        </div>
        <!--How To Use End-->

    </div>

</div>
@endsection