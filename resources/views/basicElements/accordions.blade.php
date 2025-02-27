@extends('layout.master')

@section('content')
<div class="content-body">

    <!-- Page Headings Start -->
    <div class="row justify-content-between align-items-center mb-10">

        <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3 class="title">Elements <span>/ Accordion</span></h3>
            </div>
        </div><!-- Page Heading End -->

    </div><!-- Page Headings End -->

    <div class="row">

        <!--Default Start-->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Default Accordion</h4>
                </div>
                <div class="box-body">
                    <!--Accordion Start-->
                    <div class="accordion" id="accordionExample">

                        <!--Card Start-->
                        <div class="card">

                            <!--Card Header Start-->
                            <div class="card-header">
                                <h2><button data-bs-toggle="collapse" data-bs-target="#collapseOne">Collapsible Group Item #1</button></h2>
                            </div>
                            <!--Card Header End-->

                            <!--Collapse Start-->
                            <div id="collapseOne" class="collapse show" data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird.</p>
                                </div>
                            </div>
                            <!--Collapse End-->

                        </div>
                        <!--Card End-->

                        <!--Card Start-->
                        <div class="card">

                            <!--Card Header Start-->
                            <div class="card-header">
                                <h2><button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo">Collapsible Group Item #2</button></h2>
                            </div>
                            <!--Card Header End-->

                            <!--Collapse Start-->
                            <div id="collapseTwo" class="collapse" data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird.</p>
                                </div>
                            </div>
                            <!--Collapse End-->

                        </div>
                        <!--Card End-->

                        <!--Card Start-->
                        <div class="card">

                            <!--Card Header Start-->
                            <div class="card-header">
                                <h2><button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree">Collapsible Group Item #3</button></h2>
                            </div>
                            <!--Card Header End-->

                            <!--Collapse Start-->
                            <div id="collapseThree" class="collapse" data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird.</p>
                                </div>
                            </div>
                            <!--Collapse End-->

                        </div>
                        <!--Card End-->

                    </div>
                    <!--Accordion End-->
                </div>
            </div>
        </div>
        <!--Default End-->

        <!--Accordion With Icon Start-->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Accordion With Icon</h4>
                </div>
                <div class="box-body">
                    <!--Accordion Start-->
                    <div class="accordion accordion-icon" id="accordionExampleTwo">

                        <!--Card Start-->
                        <div class="card">

                            <!--Card Header Start-->
                            <div class="card-header">
                                <h2><button data-bs-toggle="collapse" data-bs-target="#collapse2One">Collapsible Group Item #1</button></h2>
                            </div>
                            <!--Card Header End-->

                            <!--Collapse Start-->
                            <div id="collapse2One" class="collapse show" data-bs-parent="#accordionExampleTwo">
                                <div class="card-body">
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird.</p>
                                </div>
                            </div>
                            <!--Collapse End-->

                        </div>
                        <!--Card End-->

                        <!--Card Start-->
                        <div class="card">

                            <!--Card Header Start-->
                            <div class="card-header">
                                <h2><button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapse2Two">Collapsible Group Item #2</button></h2>
                            </div>
                            <!--Card Header End-->

                            <!--Collapse Start-->
                            <div id="collapse2Two" class="collapse" data-bs-parent="#accordionExampleTwo">
                                <div class="card-body">
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird.</p>
                                </div>
                            </div>
                            <!--Collapse End-->

                        </div>
                        <!--Card End-->

                        <!--Card Start-->
                        <div class="card">

                            <!--Card Header Start-->
                            <div class="card-header">
                                <h2><button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapse2Three">Collapsible Group Item #3</button></h2>
                            </div>
                            <!--Card Header End-->

                            <!--Collapse Start-->
                            <div id="collapse2Three" class="collapse" data-bs-parent="#accordionExampleTwo">
                                <div class="card-body">
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird.</p>
                                </div>
                            </div>
                            <!--Collapse End-->

                        </div>
                        <!--Card End-->

                    </div>
                    <!--Accordion End-->
                </div>
            </div>
        </div>
        <!--Accordion With Icon End-->

        <!--Accordion Color Start-->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Accordion Color</h4>
                </div>
                <div class="box-body">
                    <!--Accordion Start-->
                    <div class="accordion accordion-icon primary" id="accordionExampleThree">

                        <!--Card Start-->
                        <div class="card">

                            <!--Card Header Start-->
                            <div class="card-header">
                                <h2><button data-bs-toggle="collapse" data-bs-target="#collapse3One">Collapsible Group Item #1</button></h2>
                            </div>
                            <!--Card Header End-->

                            <!--Collapse Start-->
                            <div id="collapse3One" class="collapse show" data-bs-parent="#accordionExampleThree">
                                <div class="card-body">
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird.</p>
                                </div>
                            </div>
                            <!--Collapse End-->

                        </div>
                        <!--Card End-->

                        <!--Card Start-->
                        <div class="card">

                            <!--Card Header Start-->
                            <div class="card-header">
                                <h2><button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapse3Two">Collapsible Group Item #2</button></h2>
                            </div>
                            <!--Card Header End-->

                            <!--Collapse Start-->
                            <div id="collapse3Two" class="collapse" data-bs-parent="#accordionExampleThree">
                                <div class="card-body">
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird.</p>
                                </div>
                            </div>
                            <!--Collapse End-->

                        </div>
                        <!--Card End-->

                        <!--Card Start-->
                        <div class="card">

                            <!--Card Header Start-->
                            <div class="card-header">
                                <h2><button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapse3Three">Collapsible Group Item #3</button></h2>
                            </div>
                            <!--Card Header End-->

                            <!--Collapse Start-->
                            <div id="collapse3Three" class="collapse" data-bs-parent="#accordionExampleThree">
                                <div class="card-body">
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird.</p>
                                </div>
                            </div>
                            <!--Collapse End-->

                        </div>
                        <!--Card End-->

                    </div>
                    <!--Accordion End-->
                </div>
            </div>
        </div>
        <!--Accordion Color End-->

        <!--Accordion Color (Cards) Start-->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Accordion Color (Cards)</h4>
                </div>
                <div class="box-body">
                    <!--Accordion Start-->
                    <div class="accordion accordion-icon primary" id="accordionExampleFour">

                        <!--Card Start-->
                        <div class="card secondary">

                            <!--Card Header Start-->
                            <div class="card-header">
                                <h2><button data-bs-toggle="collapse" data-bs-target="#collapse4One">Collapsible Group Item #1</button></h2>
                            </div>
                            <!--Card Header End-->

                            <!--Collapse Start-->
                            <div id="collapse4One" class="collapse show" data-bs-parent="#accordionExampleFour">
                                <div class="card-body">
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird.</p>
                                </div>
                            </div>
                            <!--Collapse End-->

                        </div>
                        <!--Card End-->

                        <!--Card Start-->
                        <div class="card success">

                            <!--Card Header Start-->
                            <div class="card-header">
                                <h2><button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapse4Two">Collapsible Group Item #2</button></h2>
                            </div>
                            <!--Card Header End-->

                            <!--Collapse Start-->
                            <div id="collapse4Two" class="collapse" data-bs-parent="#accordionExampleFour">
                                <div class="card-body">
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird.</p>
                                </div>
                            </div>
                            <!--Collapse End-->

                        </div>
                        <!--Card End-->

                        <!--Card Start-->
                        <div class="card danger">

                            <!--Card Header Start-->
                            <div class="card-header">
                                <h2><button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapse4Three">Collapsible Group Item #3</button></h2>
                            </div>
                            <!--Card Header End-->

                            <!--Collapse Start-->
                            <div id="collapse4Three" class="collapse" data-bs-parent="#accordionExampleFour">
                                <div class="card-body">
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird.</p>
                                </div>
                            </div>
                            <!--Collapse End-->

                        </div>
                        <!--Card End-->

                    </div>
                    <!--Accordion End-->
                </div>
            </div>
        </div>
        <!--Accordion Color (Cards) End-->

        <!--How To Use Start-->
        <div class="col-12">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">How To Use</h4>
                </div>
                <div class="box-body">
                    <h6>Basic Use</h6>
                    <code>
                    &lt;div class="accordion" id="accordionExample"&gt;<br />&nbsp;&nbsp;&nbsp; &lt;!--Card Start--&gt;<br />&nbsp;&nbsp;&nbsp; &lt;div class="card"&gt;<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &lt;!--Card Header Start--&gt;<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &lt;div class="card-header"&gt;<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &lt;h2&gt;&lt;button data-bs-toggle="collapse" data-bs-target="#collapseOne"&gt;Collapsible Group Item #1&lt;/button&gt;&lt;/h2&gt;<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &lt;/div&gt;&lt;!--Card Header End--&gt;<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &lt;!--Collapse Start--&gt;<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &lt;div id="collapseOne" class="collapse show" data-bs-parent="#accordionExample"&gt;<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &lt;div class="card-body"&gt;...&lt;/div&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/div&gt;&lt;!--Collapse End--&gt;<br />&nbsp;&nbsp;&nbsp; &lt;/div&gt;&lt;!--Card End--&gt;<br />&nbsp;&nbsp;&nbsp; &lt;!--Card Start--&gt;<br />&nbsp;&nbsp;&nbsp; &lt;div class="card"&gt;<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &lt;!--Card Header Start--&gt;<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &lt;div class="card-header"&gt;<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &lt;h2&gt;&lt;button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo"&gt;Collapsible Group Item #2&lt;/button&gt;&lt;/h2&gt;<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &lt;/div&gt;&lt;!--Card Header End--&gt;<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &lt;!--Collapse Start--&gt;<br />&nbsp;&nbsp; &nbsp;&nbsp; &lt;div id="collapseTwo" class="collapse" data-bs-parent="#accordionExample"&gt;<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &lt;div class="card-body"&gt;...&lt;/div&gt;<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &lt;/div&gt;&lt;!--Collapse End--&gt;<br />&nbsp;&nbsp;&nbsp; &lt;/div&gt;&lt;!--Card End--&gt;<br />&lt;/div&gt;
                </code>
                    <p class="mt-15">For Accordion icon style add a class <code>accordion-icon</code> to accordion <code>&lt;div class="accordion accordion-icon" id="yourAccordionId"&gt;</code>. And for color add a class <code>primary / secondary / success / danger / warning / info</code> to accordion <code>&lt;div class="accordion primary" id="yourAccordionId"&gt;</code>. You can also use individual card color just add the class to <code>&lt;div class="card primary"&gt;</code> </p>
                    <p>For more Information please follow the <a class="text-primary" href="https://getbootstrap.com/docs/5.2/components/accordion/">Official Documentation</a></p>
                </div>
            </div>
        </div>
        <!--How To Use End-->

    </div>

</div>
@endsection