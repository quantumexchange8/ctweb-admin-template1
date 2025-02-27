@extends('layout.master')

@section('content')
<div class="content-body">

    <!-- Page Headings Start -->
    <div class="row justify-content-between align-items-center mb-10">

        <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3 class="title">Elements <span>/ Tabs</span></h3>
            </div>
        </div><!-- Page Heading End -->

    </div><!-- Page Headings End -->

    <div class="row">

        <!--Basic Tab Start-->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Basic Tab</h4>
                </div>
                <div class="box-body">
                    <ul class="nav nav-tabs mb-15">
                        <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#home">Home</a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#profile">Profile</a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#contact">Contact</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="home">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus cumque corporis et hic obcaecati ipsum consequatur nostrum, explicabo praesentium saepe porro expedita iure suscipit harum illum quas esse quo fugiat vel temporibus ad ipsam! Laudantium asperiores ad at saepe illum.</p>
                        </div>
                        <div class="tab-pane fade" id="profile">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus cumque corporis et hic obcaecati ipsum consequatur nostrum, explicabo praesentium saepe porro expedita iure suscipit harum illum quas esse quo fugiat vel temporibus ad ipsam! Laudantium asperiores ad at saepe illum.</p>
                        </div>
                        <div class="tab-pane fade" id="contact">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus cumque corporis et hic obcaecati ipsum consequatur nostrum, explicabo praesentium saepe porro expedita iure suscipit harum illum quas esse quo fugiat vel temporibus ad ipsam! Laudantium asperiores ad at saepe illum.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Basic Tab End-->

        <!--Tab With Icon Start-->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Tab With Icon</h4>
                </div>
                <div class="box-body">
                    <ul class="nav nav-tabs mb-15">
                        <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#home2"><i class="zmdi zmdi-home"></i> Home</a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#profile2"><i class="zmdi zmdi-account"></i> Profile</a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#contact2"><i class="zmdi zmdi-email"></i> Contact</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="home2">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus cumque corporis et hic obcaecati ipsum consequatur nostrum, explicabo praesentium saepe porro expedita iure suscipit harum illum quas esse quo fugiat vel temporibus ad ipsam! Laudantium asperiores ad at saepe illum.</p>
                        </div>
                        <div class="tab-pane fade" id="profile2">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus cumque corporis et hic obcaecati ipsum consequatur nostrum, explicabo praesentium saepe porro expedita iure suscipit harum illum quas esse quo fugiat vel temporibus ad ipsam! Laudantium asperiores ad at saepe illum.</p>
                        </div>
                        <div class="tab-pane fade" id="contact2">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus cumque corporis et hic obcaecati ipsum consequatur nostrum, explicabo praesentium saepe porro expedita iure suscipit harum illum quas esse quo fugiat vel temporibus ad ipsam! Laudantium asperiores ad at saepe illum.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Tab With Icon End-->

        <!--Vertical Tab Start-->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Vertical Tab</h4>
                </div>
                <div class="box-body">
                    <div class="row mbn-15">
                        <div class="col-md-4 col-12 mb-15">
                            <ul class="nav nav-tabs flex-column">
                                <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#home3">Home</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#profile3">Profile</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#contact3">Contact</a></li>
                            </ul>
                        </div>
                        <div class="col-md-8 col-12 mb-15">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="home3">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus cumque corporis et hic obcaecati ipsum consequatur nostrum, explicabo praesentium saepe porro expedita iure suscipit harum illum quas esse quo fugiat vel temporibus ad ipsam! Laudantium asperiores ad at saepe illum.</p>
                                </div>
                                <div class="tab-pane fade" id="profile3">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus cumque corporis et hic obcaecati ipsum consequatur nostrum, explicabo praesentium saepe porro expedita iure suscipit harum illum quas esse quo fugiat vel temporibus ad ipsam! Laudantium asperiores ad at saepe illum.</p>
                                </div>
                                <div class="tab-pane fade" id="contact3">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus cumque corporis et hic obcaecati ipsum consequatur nostrum, explicabo praesentium saepe porro expedita iure suscipit harum illum quas esse quo fugiat vel temporibus ad ipsam! Laudantium asperiores ad at saepe illum.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Vertical Tab End-->


        <!--Vertical Tab With Icon Start-->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Vertical Tab With Icon</h4>
                </div>
                <div class="box-body">
                    <div class="row mbn-15">
                        <div class="col-md-4 col-12 mb-15">
                            <ul class="nav nav-tabs flex-column">
                                <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#home4"><i class="zmdi zmdi-home"></i> Home</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#profile4"><i class="zmdi zmdi-account"></i> Profile</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#contact4"><i class="zmdi zmdi-email"></i> Contact</a></li>
                            </ul>
                        </div>
                        <div class="col-md-8 col-12 mb-15">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="home4">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus cumque corporis et hic obcaecati ipsum consequatur nostrum, explicabo praesentium saepe porro expedita iure suscipit harum illum quas esse quo fugiat vel temporibus ad ipsam! Laudantium asperiores ad at saepe illum.</p>
                                </div>
                                <div class="tab-pane fade" id="profile4">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus cumque corporis et hic obcaecati ipsum consequatur nostrum, explicabo praesentium saepe porro expedita iure suscipit harum illum quas esse quo fugiat vel temporibus ad ipsam! Laudantium asperiores ad at saepe illum.</p>
                                </div>
                                <div class="tab-pane fade" id="contact4">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus cumque corporis et hic obcaecati ipsum consequatur nostrum, explicabo praesentium saepe porro expedita iure suscipit harum illum quas esse quo fugiat vel temporibus ad ipsam! Laudantium asperiores ad at saepe illum.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Vertical Tab With Icon End-->

        <!--Basic Pill Start-->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Basic Pill</h4>
                </div>
                <div class="box-body">
                    <ul class="nav nav-pills mb-15">
                        <li class="nav-item"><a class="nav-link active" data-bs-toggle="pill" href="#home5">Home</a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="pill" href="#profile5">Profile</a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="pill" href="#contact5">Contact</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="home5">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus cumque corporis et hic obcaecati ipsum consequatur nostrum, explicabo praesentium saepe porro expedita iure suscipit harum illum quas esse quo fugiat vel temporibus ad ipsam! Laudantium asperiores ad at saepe illum.</p>
                        </div>
                        <div class="tab-pane fade" id="profile5">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus cumque corporis et hic obcaecati ipsum consequatur nostrum, explicabo praesentium saepe porro expedita iure suscipit harum illum quas esse quo fugiat vel temporibus ad ipsam! Laudantium asperiores ad at saepe illum.</p>
                        </div>
                        <div class="tab-pane fade" id="contact5">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus cumque corporis et hic obcaecati ipsum consequatur nostrum, explicabo praesentium saepe porro expedita iure suscipit harum illum quas esse quo fugiat vel temporibus ad ipsam! Laudantium asperiores ad at saepe illum.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Basic Pill End-->

        <!--Pill With Icon Start-->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Pill With Icon</h4>
                </div>
                <div class="box-body">
                    <ul class="nav nav-pills mb-15">
                        <li class="nav-item"><a class="nav-link active" data-bs-toggle="pill" href="#home6"><i class="zmdi zmdi-home"></i> Home</a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="pill" href="#profile6"><i class="zmdi zmdi-account"></i> Profile</a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="pill" href="#contact6"><i class="zmdi zmdi-email"></i> Contact</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="home6">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus cumque corporis et hic obcaecati ipsum consequatur nostrum, explicabo praesentium saepe porro expedita iure suscipit harum illum quas esse quo fugiat vel temporibus ad ipsam! Laudantium asperiores ad at saepe illum.</p>
                        </div>
                        <div class="tab-pane fade" id="profile6">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus cumque corporis et hic obcaecati ipsum consequatur nostrum, explicabo praesentium saepe porro expedita iure suscipit harum illum quas esse quo fugiat vel temporibus ad ipsam! Laudantium asperiores ad at saepe illum.</p>
                        </div>
                        <div class="tab-pane fade" id="contact6">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus cumque corporis et hic obcaecati ipsum consequatur nostrum, explicabo praesentium saepe porro expedita iure suscipit harum illum quas esse quo fugiat vel temporibus ad ipsam! Laudantium asperiores ad at saepe illum.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Pill With Icon End-->

        <!--Vertical Pill Start-->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Vertical Pill</h4>
                </div>
                <div class="box-body">
                    <div class="row mbn-15">
                        <div class="col-md-4 col-12 mb-15">
                            <ul class="nav nav-pills flex-column">
                                <li class="nav-item"><a class="nav-link active" data-bs-toggle="pill" href="#home7">Home</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="pill" href="#profile7">Profile</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="pill" href="#contact7">Contact</a></li>
                            </ul>
                        </div>
                        <div class="col-md-8 col-12 mb-15">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="home7">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus cumque corporis et hic obcaecati ipsum consequatur nostrum, explicabo praesentium saepe porro expedita iure suscipit harum illum quas esse quo fugiat vel temporibus ad ipsam! Laudantium asperiores ad at saepe illum.</p>
                                </div>
                                <div class="tab-pane fade" id="profile7">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus cumque corporis et hic obcaecati ipsum consequatur nostrum, explicabo praesentium saepe porro expedita iure suscipit harum illum quas esse quo fugiat vel temporibus ad ipsam! Laudantium asperiores ad at saepe illum.</p>
                                </div>
                                <div class="tab-pane fade" id="contact7">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus cumque corporis et hic obcaecati ipsum consequatur nostrum, explicabo praesentium saepe porro expedita iure suscipit harum illum quas esse quo fugiat vel temporibus ad ipsam! Laudantium asperiores ad at saepe illum.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Vertical Pill End-->

        <!--Vertical Pill With Icon Start-->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Vertical Pill With Icon</h4>
                </div>
                <div class="box-body">
                    <div class="row mbn-15">
                        <div class="col-md-4 col-12 mb-15">
                            <ul class="nav nav-pills flex-column">
                                <li class="nav-item"><a class="nav-link active" data-bs-toggle="pill" href="#home8"><i class="zmdi zmdi-home"></i> Home</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="pill" href="#profile8"><i class="zmdi zmdi-account"></i> Profile</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="pill" href="#contact8"><i class="zmdi zmdi-email"></i> Contact</a></li>
                            </ul>
                        </div>
                        <div class="col-md-8 col-12 mb-15">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="home8">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus cumque corporis et hic obcaecati ipsum consequatur nostrum, explicabo praesentium saepe porro expedita iure suscipit harum illum quas esse quo fugiat vel temporibus ad ipsam! Laudantium asperiores ad at saepe illum.</p>
                                </div>
                                <div class="tab-pane fade" id="profile8">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus cumque corporis et hic obcaecati ipsum consequatur nostrum, explicabo praesentium saepe porro expedita iure suscipit harum illum quas esse quo fugiat vel temporibus ad ipsam! Laudantium asperiores ad at saepe illum.</p>
                                </div>
                                <div class="tab-pane fade" id="contact8">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus cumque corporis et hic obcaecati ipsum consequatur nostrum, explicabo praesentium saepe porro expedita iure suscipit harum illum quas esse quo fugiat vel temporibus ad ipsam! Laudantium asperiores ad at saepe illum.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Vertical Pill With Icon End-->

        <!--How To Use Start-->
        <div class="col-12">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">How To Use</h4>
                </div>
                <div class="box-body">
                    <h6>Basic Use HTML</h6>
                    <code>
                    &lt;ul class="nav nav-tabs mb-15"&gt;<br />&nbsp;&nbsp;&nbsp; &lt;li class="nav-item"&gt;&lt;a class="nav-link active" data-bs-toggle="tab" href="#home"&gt;Home&lt;/a&gt;&lt;/li&gt;<br />&nbsp;&nbsp;&nbsp; &lt;li class="nav-item"&gt;&lt;a class="nav-link" data-bs-toggle="tab" href="#profile"&gt;Profile&lt;/a&gt;&lt;/li&gt;<br />&nbsp;&nbsp;&nbsp; &lt;li class="nav-item"&gt;&lt;a class="nav-link" data-bs-toggle="tab" href="#contact"&gt;Contact&lt;/a&gt;&lt;/li&gt;<br />&lt;/ul&gt;<br />&lt;div class="tab-content"&gt;<br />&nbsp;&nbsp;&nbsp; &lt;div class="tab-pane fade show active" id="home"&gt;<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &lt;p&gt;...&lt;/p&gt;<br />&nbsp;&nbsp;&nbsp; &lt;/div&gt;<br />&nbsp;&nbsp;&nbsp; &lt;div class="tab-pane fade" id="profile"&gt;<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &lt;p&gt;...&lt;/p&gt;<br />&nbsp;&nbsp;&nbsp; &lt;/div&gt;<br />&nbsp;&nbsp;&nbsp; &lt;div class="tab-pane fade" id="contact"&gt;<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &lt;p&gt;...&lt;/p&gt;<br />&nbsp;&nbsp;&nbsp; &lt;/div&gt;<br />&lt;/div&gt;
                </code>
                    <p class="mt-15">For more Information please follow the <a class="text-primary" href="https://getbootstrap.com/docs/5.2/components/navs-tabs/#javascript-behavior">Official Documentation</a></p>
                </div>
            </div>
        </div>
        <!--How To Use End-->

    </div>

</div>
@endsection