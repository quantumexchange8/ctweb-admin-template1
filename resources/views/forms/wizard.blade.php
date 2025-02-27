@extends('layout.master')

@section('content')
<div class="content-body">

    <!-- Page Headings Start -->
    <div class="row justify-content-between align-items-center mb-10">

        <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3>Form <span>/ Form Wizard</span></h3>
            </div>
        </div><!-- Page Heading End -->

    </div><!-- Page Headings End -->

    <div class="row">

        <!--Form Wizard Horizontal Start-->
        <div class="col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h3 class="title">Smart Wizard Horizontal</h3>
                </div>
                <div class="box-body">

                    <div class="smart-wizard">
                        <ul>
                            <li><a href="#step-1">1. Step One</a></li>
                            <li><a href="#step-2">2. Step Two</a></li>
                            <li><a href="#step-3">3. Step Three</a></li>
                            <li><a href="#step-4">4. Step Four</a></li>
                        </ul>

                        <div>
                            <div id="step-1">
                                <form action="#">
                                    <div class="row mbn-20">
                                        <div class="col-12 mb-20">
                                            <h4>Step 1 Form</h4>
                                        </div>
                                        <div class="col-lg-6 col-12 mb-20"><input type="text" placeholder="Your Name" class="form-control"></div>
                                        <div class="col-lg-6 col-12 mb-20"><input type="email" placeholder="Your Email" class="form-control"></div>
                                        <div class="col-12 mb-20"><textarea class="form-control" placeholder="Message"></textarea></div>
                                        <div class="col-lg-6 col-12 mb-20"><input type="submit" class="button button-primary" value="Submit"></div>
                                    </div>
                                </form>
                            </div>
                            <div id="step-2">
                                <form action="#">
                                    <div class="row mbn-20">
                                        <div class="col-12 mb-20">
                                            <h4>Step 2 Form</h4>
                                        </div>
                                        <div class="col-lg-6 col-12 mb-20"><input type="text" placeholder="Your Name" class="form-control"></div>
                                        <div class="col-lg-6 col-12 mb-20"><input type="email" placeholder="Your Email" class="form-control"></div>
                                        <div class="col-12 mb-20"><textarea class="form-control" placeholder="Message"></textarea></div>
                                        <div class="col-lg-6 col-12 mb-20"><input type="submit" class="button button-primary" value="Submit"></div>
                                    </div>
                                </form>
                            </div>
                            <div id="step-3">
                                <form action="#">
                                    <div class="row mbn-20">
                                        <div class="col-12 mb-20">
                                            <h4>Step 3 Form</h4>
                                        </div>
                                        <div class="col-lg-6 col-12 mb-20"><input type="text" placeholder="Your Name" class="form-control"></div>
                                        <div class="col-lg-6 col-12 mb-20"><input type="email" placeholder="Your Email" class="form-control"></div>
                                        <div class="col-12 mb-20"><textarea class="form-control" placeholder="Message"></textarea></div>
                                        <div class="col-lg-6 col-12 mb-20"><input type="submit" class="button button-primary" value="Submit"></div>
                                    </div>
                                </form>
                            </div>
                            <div id="step-4">
                                <form action="#">
                                    <div class="row mbn-20">
                                        <div class="col-12 mb-20">
                                            <h4>Step 4 Form</h4>
                                        </div>
                                        <div class="col-lg-6 col-12 mb-20"><input type="text" placeholder="Your Name" class="form-control"></div>
                                        <div class="col-lg-6 col-12 mb-20"><input type="email" placeholder="Your Email" class="form-control"></div>
                                        <div class="col-12 mb-20"><textarea class="form-control" placeholder="Message"></textarea></div>
                                        <div class="col-lg-6 col-12 mb-20"><input type="submit" class="button button-primary" value="Submit"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--Form Wizard Horizontal End-->

        <!--Form Wizard Vertical Start-->
        <div class="col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h3 class="title">Smart Wizard Vertical</h3>
                </div>
                <div class="box-body">

                    <div class="smart-wizard vertical row mbn-30">
                        <ul class="col-lg-3 col-12 mb-30">
                            <li><a href="#step2-1">1. Step One</a></li>
                            <li><a href="#step2-2">2. Step Two</a></li>
                            <li><a href="#step2-3">3. Step Three</a></li>
                            <li><a href="#step2-4">4. Step Four</a></li>
                        </ul>

                        <div class="col-lg-9 col-12 mb-30">
                            <div id="step2-1">
                                <form action="#">
                                    <div class="row mbn-20">
                                        <div class="col-12 mb-20">
                                            <h4>Step 1 Form</h4>
                                        </div>
                                        <div class="col-lg-6 col-12 mb-20"><input type="text" placeholder="Your Name" class="form-control"></div>
                                        <div class="col-lg-6 col-12 mb-20"><input type="email" placeholder="Your Email" class="form-control"></div>
                                        <div class="col-12 mb-20"><textarea class="form-control" placeholder="Message"></textarea></div>
                                        <div class="col-lg-6 col-12 mb-20"><input type="submit" class="button button-primary" value="Submit"></div>
                                    </div>
                                </form>
                            </div>
                            <div id="step2-2">
                                <form action="#">
                                    <div class="row mbn-20">
                                        <div class="col-12 mb-20">
                                            <h4>Step 2 Form</h4>
                                        </div>
                                        <div class="col-lg-6 col-12 mb-20"><input type="text" placeholder="Your Name" class="form-control"></div>
                                        <div class="col-lg-6 col-12 mb-20"><input type="email" placeholder="Your Email" class="form-control"></div>
                                        <div class="col-12 mb-20"><textarea class="form-control" placeholder="Message"></textarea></div>
                                        <div class="col-lg-6 col-12 mb-20"><input type="submit" class="button button-primary" value="Submit"></div>
                                    </div>
                                </form>
                            </div>
                            <div id="step2-3">
                                <form action="#">
                                    <div class="row mbn-20">
                                        <div class="col-12 mb-20">
                                            <h4>Step 3 Form</h4>
                                        </div>
                                        <div class="col-lg-6 col-12 mb-20"><input type="text" placeholder="Your Name" class="form-control"></div>
                                        <div class="col-lg-6 col-12 mb-20"><input type="email" placeholder="Your Email" class="form-control"></div>
                                        <div class="col-12 mb-20"><textarea class="form-control" placeholder="Message"></textarea></div>
                                        <div class="col-lg-6 col-12 mb-20"><input type="submit" class="button button-primary" value="Submit"></div>
                                    </div>
                                </form>
                            </div>
                            <div id="step2-4">
                                <form action="#">
                                    <div class="row mbn-20">
                                        <div class="col-12 mb-20">
                                            <h4>Step 4 Form</h4>
                                        </div>
                                        <div class="col-lg-6 col-12 mb-20"><input type="text" placeholder="Your Name" class="form-control"></div>
                                        <div class="col-lg-6 col-12 mb-20"><input type="email" placeholder="Your Email" class="form-control"></div>
                                        <div class="col-12 mb-20"><textarea class="form-control" placeholder="Message"></textarea></div>
                                        <div class="col-lg-6 col-12 mb-20"><input type="submit" class="button button-primary" value="Submit"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--Form Wizard Vertical End-->

        <!--How To Use Start-->
        <div class="col-12">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">How To Use</h4>
                </div>
                <div class="box-body">
                    <h6>Basic Use HTML</h6>
                    <code>
                    &lt;div class="smart-wizard"&gt;<br />&nbsp;&nbsp;&nbsp; &lt;ul&gt;<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &lt;li&gt;&lt;a href="#step-1"&gt;1. Step One&lt;/a&gt;&lt;/li&gt;<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; ...<br />&nbsp;&nbsp;&nbsp; &lt;/ul&gt;<br />&nbsp;&nbsp;&nbsp; &lt;div&gt;<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &lt;div id="step-1"&gt;<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &lt;form action="#"&gt;<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &lt;div class="row mbn-20"&gt;<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; Content Here<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &lt;/div&gt;<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &lt;/form&gt;<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &lt;/div&gt;<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; ...<br />&nbsp;&nbsp;&nbsp; &lt;/div&gt;<br />&lt;/div&gt;
                </code>
                    <h6 class="mt-15">Js Activation</h6>
                    <code>
                    $('.smart-wizard').smartWizard({<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;showStepURLhash: false,<br>
                    });
                </code>
                    <p class="mt-15">For more Information please follow the <a class="text-primary" href="http://techlaboratory.net/smartwizard/documentation">Official Documentation</a></p>
                </div>
            </div>
        </div>
        <!--How To Use End-->

    </div>

</div>
@endsection