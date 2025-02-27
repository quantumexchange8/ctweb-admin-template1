@extends('layout.master')

@section('content')
<div class="content-body">

    <!-- Page Headings Start -->
    <div class="row justify-content-between align-items-center mb-10">

        <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3 class="title">Elements <span>/ Toastr</span></h3>
            </div>
        </div><!-- Page Heading End -->

    </div><!-- Page Headings End -->

    <div class="row">

        <!--Toastr Start-->
        <div class="col-12 mb-30">
            <div class="box mb-30">
                <div class="box-head">
                    <h4 class="title">Toastr</h4>
                </div>
                <div class="box-body">
                    <div class="row mbn-50">

                        <div class="col-lg-6 col-12 mb-50">
                            <div class="row mb-10">
                                <div class="col-12 mb-20">
                                    <label class="control-label" for="title">Title</label>
                                    <input id="title" type="text" class="form-control" placeholder="Enter a title ..." />
                                </div>
                                <div class="col-12 mb-20">
                                    <label class="control-label" for="message">Message</label>
                                    <textarea class="form-control" id="message" rows="3" placeholder="Enter a message ..."></textarea>
                                </div>
                            </div>
                            <div class="adomx-checkbox-radio-group">
                                <label class="adomx-checkbox" for="closeButton"><input id="closeButton" type="checkbox" /><i class="icon"></i>Close Button</label>
                                <label class="adomx-checkbox" for="addBehaviorOnToastClick"><input id="addBehaviorOnToastClick" type="checkbox" /><i class="icon"></i>Add behavior on toast click</label>
                                <label class="adomx-checkbox" for="addBehaviorOnToastCloseClick"><input id="addBehaviorOnToastCloseClick" type="checkbox" /><i class="icon"></i>Add behavior on toast close button click</label>
                                <label class="adomx-checkbox" for="debugInfo"><input id="debugInfo" type="checkbox" /><i class="icon"></i>Debug</label>
                                <label class="adomx-checkbox" for="progressBar"><input id="progressBar" type="checkbox" /><i class="icon"></i>Progress Bar</label>
                                <label class="adomx-checkbox" for="rtl"><input id="rtl" type="checkbox" /><i class="icon"></i>Right-To-Left</label>
                                <label class="adomx-checkbox" for="preventDuplicates"><input id="preventDuplicates" type="checkbox" /><i class="icon"></i>Prevent Duplicates</label>
                                <label class="adomx-checkbox" for="addClear"><input id="addClear" type="checkbox" /><i class="icon"></i>Add button to force clearing a toast, ignoring focus</label>
                                <label class="adomx-checkbox" for="newestOnTop"><input id="newestOnTop" type="checkbox" /><i class="icon"></i>Newest on top</label>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-4 col-12 mb-50">
                            <h5 class="sub-title">Toast Type</h5>
                            <div class="adomx-checkbox-radio-group" id="toastTypeGroup">
                                <label class="adomx-radio"><input type="radio" name="toasts" value="success" checked /><i class="icon"></i>Success</label>
                                <label class="adomx-radio"><input type="radio" name="toasts" value="info" /><i class="icon"></i>Info</label>
                                <label class="adomx-radio"><input type="radio" name="toasts" value="warning" /><i class="icon"></i>Warning</label>
                                <label class="adomx-radio"><input type="radio" name="toasts" value="error" /><i class="icon"></i>Error</label>
                            </div>
                            <h5 class="sub-title mt-30">Position</h5>
                            <div class="adomx-checkbox-radio-group" id="positionGroup">
                                <label class="adomx-radio"><input type="radio" name="positions" value="toast-top-right" checked /><i class="icon"></i>Top Right</label>
                                <label class="adomx-radio"><input type="radio" name="positions" value="toast-bottom-right" /><i class="icon"></i>Bottom Right</label>
                                <label class="adomx-radio"><input type="radio" name="positions" value="toast-bottom-left" /><i class="icon"></i>Bottom Left</label>
                                <label class="adomx-radio"><input type="radio" name="positions" value="toast-top-left" /><i class="icon"></i>Top Left</label>
                                <label class="adomx-radio"><input type="radio" name="positions" value="toast-top-full-width" /><i class="icon"></i>Top Full Width</label>
                                <label class="adomx-radio"><input type="radio" name="positions" value="toast-bottom-full-width" /><i class="icon"></i>Bottom Full Width</label>
                                <label class="adomx-radio"><input type="radio" name="positions" value="toast-top-center" /><i class="icon"></i>Top Center</label>
                                <label class="adomx-radio"><input type="radio" name="positions" value="toast-bottom-center" /><i class="icon"></i>Bottom Center</label>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-4 col-12 mb-50">
                            <div class="row mbn-20">
                                <div class="col-12 mb-20">
                                    <label class="control-label" for="showEasing">Show Easing</label>
                                    <input id="showEasing" type="text" placeholder="swing, linear" class="form-control" value="swing" />
                                </div>

                                <div class="col-12 mb-20">
                                    <label class="control-label" for="hideEasing">Hide Easing</label>
                                    <input id="hideEasing" type="text" placeholder="swing, linear" class="form-control" value="linear" />
                                </div>

                                <div class="col-12 mb-20">
                                    <label class="control-label" for="showMethod">Show Method</label>
                                    <input id="showMethod" type="text" placeholder="show, fadeIn, slideDown" class="form-control" value="fadeIn" />
                                </div>

                                <div class="col-12 mb-20">
                                    <label class="control-label" for="hideMethod">Hide Method</label>
                                    <input id="hideMethod" type="text" placeholder="hide, fadeOut, slideUp" class="form-control" value="fadeOut" />
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-4 col-12 mb-50">
                            <div class="row mbn-20">
                                <div class="col-12 mb-20">
                                    <label class="control-label" for="showDuration">Show Duration</label>
                                    <input id="showDuration" type="number" placeholder="ms" class="form-control" value="300" />
                                </div>

                                <div class="col-12 mb-20">
                                    <label class="control-label" for="hideDuration">Hide Duration</label>
                                    <input id="hideDuration" type="number" placeholder="ms" class="form-control" value="1000" />
                                </div>

                                <div class="col-12 mb-20">
                                    <label class="control-label" for="timeOut">Time out</label>
                                    <input id="timeOut" type="number" placeholder="ms" class="form-control" value="5000" />
                                </div>

                                <div class="col-12 mb-20">
                                    <label class="control-label" for="extendedTimeOut">Extended time out</label>
                                    <input id="extendedTimeOut" type="number" placeholder="ms" class="form-control" value="1000" />
                                </div>
                            </div>
                        </div>

                        <div class="col-12 mb-50">
                            <button type="button" class="button button-primary" id="showtoast">Show Toast</button>
                            <button type="button" class="button button-danger" id="cleartoasts">Clear Toasts</button>
                            <button type="button" class="button button-danger" id="clearlasttoast">Clear Last Toast</button>
                        </div>

                        <div class="col-12 mb-50">
                            <pre id='toastrOptions'>Output:</pre>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--Toastr End-->

        <!--How To Use Start-->
        <div class="col-12">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">How To Use</h4>
                </div>
                <div class="box-body">
                    <p>For more Information please follow the <a class="text-primary" href="https://codeseven.github.io/toastr/demo.html">Official Documentation</a></p>
                </div>
            </div>
        </div>
        <!--How To Use End-->

    </div>

</div>
@endsection