@extends('layout.master')

@section('content')
<div class="content-body">

    <!-- Page Headings Start -->
    <div class="row justify-content-between align-items-center mb-10">

        <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3 class="title">Elements <span>/ Avatar</span></h3>
            </div>
        </div><!-- Page Heading End -->

    </div><!-- Page Headings End -->

    <div class="row mbn-30">

        <!--Sizes Start-->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Sizes</h4>
                </div>
                <div class="box-body">
                    <div class="avatar-wrap d-flex align-items-center flex-wrap mbn-10">
                        <div class="avatar avatar-xs mr-10 mb-10">
                            <img src="assets/images/avatar/avatar-1.jpg" alt="">
                            <span class="status"></span>
                        </div>
                        <div class="avatar avatar-sm mr-10 mb-10">
                            <img src="assets/images/avatar/avatar-1.jpg" alt="">
                            <span class="status"></span>
                        </div>
                        <div class="avatar mr-10 mb-10">
                            <img src="assets/images/avatar/avatar-1.jpg" alt="">
                            <span class="status"></span>
                        </div>
                        <div class="avatar avatar-lg mr-10 mb-10">
                            <img src="assets/images/avatar/avatar-1.jpg" alt="">
                            <span class="status"></span>
                        </div>
                        <div class="avatar avatar-xl mr-10 mb-10">
                            <img src="assets/images/avatar/avatar-1.jpg" alt="">
                            <span class="status"></span>
                        </div>
                        <div class="avatar avatar-xxl mr-10 mb-10">
                            <img src="assets/images/avatar/avatar-1.jpg" alt="">
                            <span class="status"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Sizes End-->

        <!--Initials Start-->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Initials</h4>
                </div>
                <div class="box-body">
                    <div class="avatar-wrap d-flex align-items-center flex-wrap mbn-10">
                        <div class="avatar avatar-xs mr-10 mb-10">
                            mh
                            <span class="status"></span>
                        </div>
                        <div class="avatar avatar-sm mr-10 mb-10">
                            mh
                            <span class="status"></span>
                        </div>
                        <div class="avatar mr-10 mb-10">
                            mh
                            <span class="status"></span>
                        </div>
                        <div class="avatar avatar-lg mr-10 mb-10">
                            mh
                            <span class="status"></span>
                        </div>
                        <div class="avatar avatar-xl mr-10 mb-10">
                            mh
                            <span class="status"></span>
                        </div>
                        <div class="avatar avatar-xxl mr-10 mb-10">
                            mh
                            <span class="status"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Initials End-->

        <!--Status Start-->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Status</h4>
                </div>
                <div class="box-body">
                    <div class="avatar-wrap d-flex align-items-center flex-wrap mbn-10">
                        <div class="avatar mr-10 mb-10">
                            <img src="assets/images/avatar/avatar-1.jpg" alt="">
                            <span class="status"></span>
                        </div>
                        <div class="avatar online mr-10 mb-10">
                            <img src="assets/images/avatar/avatar-1.jpg" alt="">
                            <span class="status"></span>
                        </div>
                        <div class="avatar away mr-10 mb-10">
                            <img src="assets/images/avatar/avatar-1.jpg" alt="">
                            <span class="status"></span>
                        </div>
                        <div class="avatar donot mr-10 mb-10">
                            <img src="assets/images/avatar/avatar-1.jpg" alt="">
                            <span class="status"></span>
                        </div>
                        <div class="avatar invisible mr-10 mb-10">
                            <img src="assets/images/avatar/avatar-1.jpg" alt="">
                            <span class="status"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Status End-->

        <!--How To Use Start-->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">How To Use</h4>
                </div>
                <div class="box-body">
                    <h6>Basic Use HTML</h6>
                    <code>&lt;div class="avatar"&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp; &lt;img src="assets/images/avatar/avatar-1.jpg" alt=""&gt;<br />&nbsp;&nbsp;&nbsp; &lt;span class="status"&gt;&lt;/span&gt;<br />&lt;/div&gt;</code>
                    <p class="mt-15">This is the default markup for Avatar. for sizes you can add a class to <code>avatar</code> like <code>avatar avatar-(xs/sm/lg/xl/xxl) </code> and for status add a class to <code>avatar</code> like <code>avatar online/away/donot/invisible</code></p>
                </div>
            </div>
        </div>
        <!--How To Use End-->

    </div>

</div>
@endsection