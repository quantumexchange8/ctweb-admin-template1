@extends('layout.master')

@section('content')
<div class="content-body">

    <!-- Page Headings Start -->
    <div class="row justify-content-between align-items-center mb-10">

        <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3 class="title">Elements <span>/ Media</span></h3>
            </div>
        </div><!-- Page Heading End -->

    </div><!-- Page Headings End -->

    <div class="row mbn-30">

        <!--Basic Example Start-->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Basic Example</h4>
                </div>
                <div class="box-body">
                    <div class="d-flex">
                        <div class="flex-shrink-0">
                            <img src="assets/images/team/team-small-1.jpg" alt="...">
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h6 class="mt-0">Media heading</h6>
                            This is some content from a media component. You can replace this with any content and adjust it as needed.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Basic Example End-->

        <!--Order Start-->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Order</h4>
                </div>
                <div class="box-body">
                    <div class="d-flex">
                        <div class="media-body me-3">
                            <h6 class="mt-0">Media heading</h6>
                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                        </div>
                        <div class="flex-shrink-0">
                            <img src="assets/images/team/team-small-1.jpg" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Order End-->

        <!--Nesting Start-->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Nesting</h4>
                </div>
                <div class="box-body">
                    <div class="d-flex">
                        <div class="flex-shrink-0">
                            <img src="assets/images/team/team-small-3.jpg" alt="...">
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h6 class="mt-0">Media heading</h6>
                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <img src="assets/images/team/team-small-3.jpg" alt="...">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h6 class="mt-0">Media heading</h6>
                                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Nesting End-->

        <!--Alignment Top Start-->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Alignment Top</h4>
                </div>
                <div class="box-body">
                    <div class="d-flex align-items-start">
                        <div class="flex-shrink-0">
                            <img src="assets/images/team/team-small-3.jpg" alt="...">
                        </div>
                        <div class="media-body flex-grow-1 ms-3">
                            <h6 class="mt-0">Media heading</h6>
                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Alignment Top End-->

        <!--Alignment Center Start-->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Alignment Center</h4>
                </div>
                <div class="box-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <img src="assets/images/team/team-small-3.jpg" alt="...">
                        </div>
                        <div class="media-body flex-grow-1 ms-3">
                            <h6 class="mt-0">Media heading</h6>
                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Alignment Center End-->

        <!--Alignment Bottom Start-->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Alignment Bottom</h4>
                </div>
                <div class="box-body">
                    <div class="d-flex align-items-end">
                        <div class="flex-shrink-0">
                            <img src="assets/images/team/team-small-3.jpg" alt="...">
                        </div>
                        <div class="media-body flex-grow-1 ms-3">
                            <h6 class="mt-0">Media heading</h6>
                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Alignment Bottom End-->

        <!--Media List Start-->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Media List</h4>
                </div>
                <div class="box-body">
                    <ul class="list-unstyled mbn-20">
                        <li class="media d-flex mb-20">
                            <div class="flex-shrink-0">
                                <img src="assets/images/team/team-small-3.jpg" alt="...">
                            </div>
                            <div class="media-body flex-grow-1 ms-3">
                                <h6 class="mt-0">Media heading</h6>
                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>

                            </div>
                        </li>
                        <li class="media d-flex mb-20">
                            <div class="flex-shrink-0">
                                <img src="assets/images/team/team-small-3.jpg" alt="...">
                            </div>
                            <div class="media-body flex-grow-1 ms-3">
                                <h6 class="mt-0">Media heading</h6>
                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>

                            </div>
                        </li>
                        <li class="media d-flex mb-20">
                            <div class="flex-shrink-0">
                                <img src="assets/images/team/team-small-3.jpg" alt="...">
                            </div>
                            <div class="media-body flex-grow-1 ms-3">
                                <h6 class="mt-0">Media heading</h6>
                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>

                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--Media List End-->

        <!--How To Use Start-->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">How To Use</h4>
                </div>
                <div class="box-body">
                    <h6>Basic Use HTML</h6>
                    <code>
                    &lt;div class="d-flex"&gt;<br />&nbsp; &nbsp;&lt;div class="flex-shrink-0"&gt;<br />&nbsp; &nbsp; &nbsp; &lt;img src="assets/images/team/team-small-1.jpg" alt="..."&gt;<br />&nbsp; &nbsp;&lt;/div&gt;<br />&nbsp; &nbsp;&lt;div class="flex-grow-1 ms-3"&gt;<br />&nbsp; &nbsp; &nbsp; &lt;h6 class="mt-0"&gt;Media heading&lt;/h6&gt;<br />&nbsp; &nbsp; &nbsp; This is some content from a media component. You can replace this with *** content and adjust ** as needed.<br />&nbsp; &nbsp; &lt;/div&gt;<br />&lt;/div&gt;
                </code>
                    <p class="mt-15">For more Information please follow the <a class="text-primary" href="https://getbootstrap.com/docs/5.2/utilities/flex/#media-object">Official Documentation</a></p>
                </div>
            </div>
        </div>
        <!--How To Use End-->

    </div>

</div>
@endsection