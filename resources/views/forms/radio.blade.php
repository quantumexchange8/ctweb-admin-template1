@extends('layout.master')

@section('content')
<div class="content-body">

    <!-- Page Headings Start -->
    <div class="row justify-content-between align-items-center mb-10">

        <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3>Form <span>/ Radio</span></h3>
            </div>
        </div><!-- Page Heading End -->

    </div><!-- Page Headings End -->

    <div class="row">

        <!--Custom Radio Start-->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h3 class="title">Custom Radio 1</h3>
                </div>
                <div class="box-body">
                    <div class="row mbn-20">

                        <div class="col-sm-6 col-12 mb-20">
                            <h6 class="mb-15">Radio 1</h6>
                            <div class="adomx-checkbox-radio-group">
                                <label class="adomx-radio"><input type="radio" name="adomxRadio"> <i class="icon"></i> Radio 1</label>
                                <label class="adomx-radio"><input type="radio" name="adomxRadio" checked> <i class="icon"></i> Radio 1 Active</label>
                                <label class="adomx-radio"><input type="radio" name="adomxRadio" disabled> <i class="icon"></i> Radio 1 Disabled</label>
                            </div>
                        </div>

                        <div class="col-sm-6 col-12 mb-20">
                            <h6 class="mb-15">Radio 1 Inline</h6>
                            <div class="adomx-checkbox-radio-group inline">
                                <label class="adomx-radio"><input type="radio" name="inlineAdomxRadio"> <i class="icon"></i> One</label>
                                <label class="adomx-radio"><input type="radio" name="inlineAdomxRadio"> <i class="icon"></i> Two</label>
                                <label class="adomx-radio"><input type="radio" name="inlineAdomxRadio"> <i class="icon"></i> Three</label>
                            </div>
                        </div>

                        <div class="col-12 mb-20">
                            <h6 class="mb-15">Radio 1 Color Variation</h6>
                            <div class="adomx-checkbox-radio-group inline">
                                <label class="adomx-radio primary"><input type="radio" checked> <i class="icon"></i> Primary</label>
                                <label class="adomx-radio secondary"><input type="radio" checked> <i class="icon"></i> Secondary</label>
                                <label class="adomx-radio success"><input type="radio" checked> <i class="icon"></i> Success</label>
                                <label class="adomx-radio danger"><input type="radio" checked> <i class="icon"></i> Danger</label>
                                <label class="adomx-radio warning"><input type="radio" checked> <i class="icon"></i> Warning</label>
                                <label class="adomx-radio info"><input type="radio" checked> <i class="icon"></i> Info</label>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--Custom Radio End-->

        <!--Custom Radio Start-->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h3 class="title">Custom Radio 2</h3>
                </div>
                <div class="box-body">
                    <div class="row mbn-20">

                        <div class="col-sm-6 col-12 mb-20">
                            <h6 class="mb-15">Radio 2</h6>
                            <div class="adomx-checkbox-radio-group">
                                <label class="adomx-radio-2"><input type="radio" name="adomxRadio2"> <i class="icon"></i> Radio 2</label>
                                <label class="adomx-radio-2"><input type="radio" name="adomxRadio2" checked> <i class="icon"></i> Radio 2 Active</label>
                                <label class="adomx-radio-2"><input type="radio" name="adomxRadio2" disabled> <i class="icon"></i> Radio 2 Disabled</label>
                            </div>
                        </div>

                        <div class="col-sm-6 col-12 mb-20">
                            <h6 class="mb-15">Radio 2 Inline</h6>
                            <div class="adomx-checkbox-radio-group inline">
                                <label class="adomx-radio-2"><input type="radio" name="inlineAdomxRadio2"> <i class="icon"></i> One</label>
                                <label class="adomx-radio-2"><input type="radio" name="inlineAdomxRadio2"> <i class="icon"></i> Two</label>
                                <label class="adomx-radio-2"><input type="radio" name="inlineAdomxRadio2"> <i class="icon"></i> Three</label>
                            </div>
                        </div>

                        <div class="col-12 mb-20">
                            <h6 class="mb-15">Radio 2 Color Variation</h6>
                            <div class="adomx-checkbox-radio-group inline">
                                <label class="adomx-radio-2 primary"><input type="radio" checked> <i class="icon"></i> Primary</label>
                                <label class="adomx-radio-2 secondary"><input type="radio" checked> <i class="icon"></i> Secondary</label>
                                <label class="adomx-radio-2 success"><input type="radio" checked> <i class="icon"></i> Success</label>
                                <label class="adomx-radio-2 danger"><input type="radio" checked> <i class="icon"></i> Danger</label>
                                <label class="adomx-radio-2 warning"><input type="radio" checked> <i class="icon"></i> Warning</label>
                                <label class="adomx-radio-2 info"><input type="radio" checked> <i class="icon"></i> Info</label>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--Custom Radio End-->

        <!--How To Use Start-->
        <div class="col-12">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">How To Use</h4>
                </div>
                <div class="box-body">
                    <h6>Basic Use HTML</h6>
                    <code>&lt;div class="adomx-checkbox-radio-group"&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;label class="adomx-radio"&gt;&lt;input type="radio"&gt; &lt;i class="icon"&gt;&lt;/i&gt; Radio 1&lt;/label&gt;<br />&lt;/div&gt;</code>
                    <p class="mt-15">This is the common markup for Adomx custom Radio. To use Radio 2 just change <code>&lt;label class="adomx-radio"&gt;</code> to <code>&lt;label class="adomx-radio-2"&gt;</code>. For color variation just add the color class like for secondary color <code>&lt;label class="adomx-radio secondary"&gt;</code> and for inline radio add <code>inline</code> class to <code>&lt;div class="adomx-checkbox-radio-group"&gt;</code></p>
                </div>
            </div>
        </div>
        <!--How To Use End-->

    </div>

</div>
@endsection