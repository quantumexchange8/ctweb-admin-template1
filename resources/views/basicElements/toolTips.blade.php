@extends('layout.master')

@section('content')
<div class="content-body">

    <!-- Page Headings Start -->
    <div class="row justify-content-between align-items-center mb-10">

        <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3 class="title">Elements <span>/ Tooltip & Popovers</span></h3>
            </div>
        </div><!-- Page Heading End -->

    </div><!-- Page Headings End -->

    <div class="row">

        <!--Bootstrap Tooltip Start-->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Bootstrap Tooltip</h4>
                </div>
                <div class="box-body">
                    <div class="buttons-inline">
                        <button class="button button-primary" data-bs-toggle="tooltip" data-bs-container="body" data-bs-placement="top" title="Tooltip on top">Tooltip top</button>
                        <button class="button button-primary" data-bs-toggle="tooltip" data-bs-container="body" data-bs-placement="right" title="Tooltip on right">Tooltip right</button>
                        <button class="button button-primary" data-bs-toggle="tooltip" data-bs-container="body" data-bs-placement="bottom" title="Tooltip on bottom">Tooltip bottom</button>
                        <button class="button button-primary" data-bs-toggle="tooltip" data-bs-container="body" data-bs-placement="left" title="Tooltip on left">Tooltip left</button>
                    </div>
                </div>
            </div>
        </div>
        <!--Bootstrap Tooltip End-->

        <!--Bootstrap Popovers Start-->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Bootstrap Popovers</h4>
                </div>
                <div class="box-body">
                    <div class="buttons-inline">
                        <button class="button button-primary" data-bs-toggle="popover" data-bs-container="body" data-bs-placement="top" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Popover top</button>
                        <button class="button button-primary" data-bs-toggle="popover" data-bs-container="body" data-bs-placement="right" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Popover right</button>
                        <button class="button button-primary" data-bs-toggle="popover" data-bs-container="body" data-bs-placement="bottom" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Popover bottom</button>
                        <button class="button button-primary" data-bs-toggle="popover" data-bs-container="body" data-bs-placement="left" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Popover left</button>
                    </div>
                </div>
            </div>
        </div>
        <!--Bootstrap Popovers End-->

        <!--Tippy Tooltip Start-->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Tippy Tooltip</h4>
                </div>
                <div class="box-body">
                    <div class="buttons-inline">
                        <button class="button button-primary" data-tippy-placement="top" data-tippy-content="Tooltip on top">Tooltip top</button>
                        <button class="button button-primary" data-tippy-placement="right" data-tippy-content="Tooltip on right">Tooltip right</button>
                        <button class="button button-primary" data-tippy-placement="bottom" data-tippy-content="Tooltip on bottom">Tooltip bottom</button>
                        <button class="button button-primary" data-tippy-placement="left" data-tippy-content="Tooltip on left">Tooltip left</button>
                    </div>

                    <div class="buttons-inline">
                        <button class="button button-primary" data-tippy-placement="top-start" data-tippy-content="Tooltip on top start">Tooltip top start</button>
                        <button class="button button-primary" data-tippy-placement="top-end" data-tippy-content="Tooltip on top end">Tooltip top end</button>
                        <button class="button button-primary" data-tippy-placement="bottom-start" data-tippy-content="Tooltip on bottom start">Tooltip bottom start</button>
                        <button class="button button-primary" data-tippy-placement="bottom-end" data-tippy-content="Tooltip on bottom end">Tooltip bottom end</button>
                    </div>
                </div>
            </div>
        </div>
        <!--Tippy Tooltip End-->

        <!--Tippy Arrow Start-->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Tippy Arrow</h4>
                </div>
                <div class="box-body">
                    <div class="buttons-inline">
                        <button class="button button-primary" data-tippy-arrow="true" data-tippy-content="Default arrow">Default arrow</button>
                        <button class="button button-primary" data-tippy-arrow="true" data-tippy-arrowtype="round" data-tippy-content="Round arrow">Round arrow</button>
                    </div>
                </div>
            </div>
        </div>
        <!--Tippy Arrow End-->

        <!--Tippy Animation Start-->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Tippy Animation</h4>
                </div>
                <div class="box-body">
                    <div class="buttons-inline">
                        <button class="button button-primary" data-tippy-animatefill="false" data-tippy-animation="shift-away" data-tippy-content="Shift away">Shift away</button>
                        <button class="button button-primary" data-tippy-animatefill="false" data-tippy-animation="shift-toward" data-tippy-content="Shift toward">Shift toward</button>
                        <button class="button button-primary" data-tippy-animatefill="false" data-tippy-animation="scale" data-tippy-content="Scale">Scale</button>
                        <button class="button button-primary" data-tippy-animatefill="false" data-tippy-animation="fade" data-tippy-content="Fade">Fade</button>
                        <button class="button button-primary" data-tippy-animatefill="false" data-tippy-animation="perspective" data-tippy-content="Perspective">Perspective</button>
                    </div>
                </div>
            </div>
        </div>
        <!--Tippy Animation End-->

        <!--Tippy Theme Start-->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Tippy Theme</h4>
                </div>
                <div class="box-body">
                    <div class="buttons-inline">
                        <button class="button button-primary" data-tippy-theme="dark" data-tippy-content="Theme Dark">Dark</button>
                        <button class="button button-primary" data-tippy-theme="light" data-tippy-content="Theme Light">Light</button>
                        <button class="button button-primary" data-tippy-theme="primary" data-tippy-content="Theme Primary">Primary</button>
                        <button class="button button-primary" data-tippy-theme="secondary" data-tippy-content="Theme Secondary">Secondary</button>
                        <button class="button button-primary" data-tippy-theme="success" data-tippy-content="Theme Success">Success</button>
                        <button class="button button-primary" data-tippy-theme="danger" data-tippy-content="Theme Danger">Danger</button>
                        <button class="button button-primary" data-tippy-theme="warning" data-tippy-content="Theme Warning">Warning</button>
                        <button class="button button-primary" data-tippy-theme="info" data-tippy-content="Theme Info">Info</button>
                    </div>
                </div>
            </div>
        </div>
        <!--Tippy Theme End-->

        <!--FilePond Start-->
        <div class="col-12">
            <div class="box">
                <div class="box-head">
                    <h3 class="title">How To Use</h3>
                </div>
                <div class="box-body">
                    <h6>Basic Use HTML (Bootstrap Tooltip)</h6>
                    <code>
                    &lt;button class="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top"&gt;Tooltip top&lt;/button&gt;
                </code>
                    <h6 class="mt-15">Js Activation</h6>
                    <code>
                    $('[data-bs-toggle="tooltip"]').tooltip();
                </code>
                    <p class="mt-15">For more Information please follow the <a class="text-primary" href="https://getbootstrap.com/docs/4.3/components/tooltips/">Official Documentation</a></p>

                    <h6>Basic Use HTML (Bootstrap Popovers)</h6>
                    <code>
                    &lt;button class="button" data-bs-toggle="popover" data-container="body" data-bs-placement="top" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."&gt;Popover top&lt;/button&gt;
                </code>
                    <h6 class="mt-15">Js Activation</h6>
                    <code>
                    const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
                    const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))
                </code>
                    <p class="mt-15">For more Information please follow the <a class="text-primary" href="https://getbootstrap.com/docs/4.3/components/popovers/">Official Documentation</a></p>

                    <h6>Basic Use HTML (Tippy)</h6>
                    <code>
                    &lt;button class="button" data-tippy-placement="top" data-tippy-content="Tooltip on top"&gt;Tooltip top&lt;/button&gt;
                </code>
                    <h6 class="mt-15">Js Activation</h6>
                    <code>
                    tippy('.tippy, [data-tippy-content], [data-tooltip]', { <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;flipOnUpdate: true, <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;boundary: 'window', <br>
                    });
                </code>
                    <p class="mt-15">For more Information please follow the <a class="text-primary" href="https://atomiks.github.io/tippyjs/">Official Documentation</a></p>
                </div>
            </div>
        </div>
        <!--FilePond End-->

    </div>

</div>
@endsection