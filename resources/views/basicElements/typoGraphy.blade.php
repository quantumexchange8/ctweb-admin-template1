@extends('layout.master')

@section('content')
<div class="content-body">

    <!-- Page Headings Start -->
    <div class="row justify-content-between align-items-center mb-10">

        <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3 class="title">Elements <span> / Typography</span></h3>
            </div>
        </div><!-- Page Heading End -->

    </div><!-- Page Headings End -->

    <div class="row mbn-30">

        <!--Default Headings Start-->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">

                <div class="box-head">
                    <h3 class="title">Headings</h3>
                </div>

                <div class="box-body">
                    <h1>This is Heading 1</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, eaque.</p>
                    <h2 class="mt-30">This is Heading 2</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, voluptate.</p>
                    <h3 class="mt-30">This is Heading 3</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam, inventore.</p>
                    <h4 class="mt-30">This is Heading 4</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, repellat.</p>
                    <h5 class="mt-30">This is Heading 5</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, necessitatibus.</p>
                    <h6 class="mt-30">This is Heading 6</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, voluptatum!</p>
                </div>

            </div>
        </div>
        <!--Default Headings End-->

        <!--Display Headings Start-->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">

                <div class="box-head">
                    <h3 class="title">Display Headings</h3>
                </div>

                <div class="box-body">

                    <h1 class="display-1">Display 1</h1>
                    <h1 class="display-2">Display 2</h1>
                    <h1 class="display-3">Display 3</h1>
                    <h1 class="display-4">Display 4</h1>

                </div>

            </div>
        </div>
        <!--Display Heading End-->

        <!--Text Colors Start-->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">

                <div class="box-head">
                    <h3 class="title">Text Colors</h3>
                </div>

                <div class="box-body">

                    <p class="text-body mb-5">.text-body</p>
                    <p class="text-body-light mb-5">.text-body-light</p>
                    <p class="text-heading mb-5">.text-heading</p>
                    <p class="text-primary mb-5">.text-primary</p>
                    <p class="text-secondary mb-5">.text-secondary</p>
                    <p class="text-success mb-5">.text-success</p>
                    <p class="text-danger mb-5">.text-danger</p>
                    <p class="text-warning mb-5">.text-warning</p>
                    <p class="text-info mb-5">.text-info</p>

                </div>

            </div>
        </div>
        <!--Text Colors End-->

        <!--Other Text Elements Start-->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">

                <div class="box-head">
                    <h3 class="title">Other Text Elements</h3>
                </div>

                <div class="box-body">

                    You can use the <code>mark</code> tag to
                    <mark>highlight</mark> text.
                    <br>
                    <del>This line of text is meant to be treated as deleted text use <code>del</code> tag.</del>
                    <br>
                    <ins>This line of text is meant to be treated as an addition to the document use <code>ins</code> or <code>u</code> tag..</ins>
                    <br>
                    <strong>rendered as bold text use <code>strong</code>tag</strong>
                    <br>
                    <em>rendered as italicized text use <code>em</code>tag</em>
                    <br>
                    <span class="h6 fw-600 text-lowercase text-primary">lowercase</span> use class <code>text-lowercase</code> for lowercase text
                    <br>
                    <span class="h6 fw-600 text-uppercase text-primary">uppercase</span> use class <code>text-uppercase</code> for uppercase text
                    <br>
                    <span class="h6 fw-600 text-capitalize text-primary">capitalize</span> use class <code>text-capitalize</code> for capitalize text

                </div>

            </div>
        </div>
        <!--Other Text Elements End-->

        <!--Unordered List Start-->
        <div class="col-lg-4 col-12 mb-30">
            <div class="box">

                <div class="box-head">
                    <h3 class="title">Unordered</h3>
                </div>

                <div class="box-body">

                    <ul>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Consectetur adipisicing elit</li>
                        <li>Atque quasi totam recusandae ab</li>
                        <li>Minus illum exercitationem nihil</li>
                        <li>Nemo suscipit deserunt neque ut
                            <ul>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Consectetur adipisicing elit</li>
                                <li>Atque quasi totam recusandae ab</li>
                                <li>Minus illum exercitationem nihil</li>
                            </ul>
                        </li>
                        <li>Aspernatur quaerat et ipsa</li>
                        <li>Natus aut dolores esse</li>
                        <li>Aenean sit amet erat nunc</li>
                    </ul>

                </div>

            </div>
        </div>
        <!--Unordered List End-->

        <!--Ordered List Start-->
        <div class="col-lg-4 col-12 mb-30">
            <div class="box">

                <div class="box-head">
                    <h3 class="title">Ordered</h3>
                </div>

                <div class="box-body">

                    <ol>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Consectetur adipisicing elit</li>
                        <li>Atque quasi totam recusandae ab</li>
                        <li>Minus illum exercitationem nihil</li>
                        <li>Nemo suscipit deserunt neque ut
                            <ul>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Consectetur adipisicing elit</li>
                                <li>Atque quasi totam recusandae ab</li>
                                <li>Minus illum exercitationem nihil</li>
                            </ul>
                        </li>
                        <li>Aspernatur quaerat et ipsa</li>
                        <li>Natus aut dolores esse</li>
                        <li>Aenean sit amet erat nunc</li>
                    </ol>

                </div>

            </div>
        </div>
        <!--Ordered List End-->

        <!--Unstyled List Start-->
        <div class="col-lg-4 col-12 mb-30">
            <div class="box">

                <div class="box-head">
                    <h3 class="title">Unstyled</h3>
                </div>

                <div class="box-body">

                    <ul class="list-unstyled">
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Consectetur adipisicing elit</li>
                        <li>Atque quasi totam recusandae ab</li>
                        <li>Minus illum exercitationem nihil</li>
                        <li>Nemo suscipit deserunt neque ut
                            <ul>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Consectetur adipisicing elit</li>
                                <li>Atque quasi totam recusandae ab</li>
                                <li>Minus illum exercitationem nihil</li>
                            </ul>
                        </li>
                        <li>Aspernatur quaerat et ipsa</li>
                        <li>Natus aut dolores esse</li>
                        <li>Aenean sit amet erat nunc</li>
                    </ul>

                </div>

            </div>
        </div>
        <!--Unstyled List End-->

        <!--List With Icon (Check) Start-->
        <div class="col-lg-4 col-12 mb-30">
            <div class="box">

                <div class="box-head">
                    <h3 class="title">List Check</h3>
                </div>

                <div class="box-body">

                    <ul class="list-icon list-check primary">
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Consectetur adipisicing elit</li>
                        <li>Atque quasi totam recusandae ab</li>
                        <li>Minus illum exercitationem nihil</li>
                        <li>Nemo suscipit deserunt neque ut</li>
                        <li>Aspernatur quaerat et ipsa</li>
                        <li>Natus aut dolores esse</li>
                        <li>Aenean sit amet erat nunc</li>
                    </ul>

                    <div class="how-to-use mt-15">
                        <h5>How to Use</h5>
                        <p>Use class <code>list-icon list-check</code>. Class <code>list-icon</code> is Common it need for the basic styles.</p>
                    </div>

                </div>

            </div>
        </div>
        <!--List With Icon (Check) End-->

        <!--List With Icon (Check all) Start-->
        <div class="col-lg-4 col-12 mb-30">
            <div class="box">

                <div class="box-head">
                    <h3 class="title">List Check All</h3>
                </div>

                <div class="box-body">

                    <ul class="list-icon list-ticked secondary">
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Consectetur adipisicing elit</li>
                        <li>Atque quasi totam recusandae ab</li>
                        <li>Minus illum exercitationem nihil</li>
                        <li>Nemo suscipit deserunt neque ut</li>
                        <li>Aspernatur quaerat et ipsa</li>
                        <li>Natus aut dolores esse</li>
                        <li>Aenean sit amet erat nunc</li>
                    </ul>

                    <div class="how-to-use mt-15">
                        <h5>How to Use</h5>
                        <p>Use class <code>list-icon list-ticked</code>. Class <code>list-icon</code> is Common it need for the basic styles.</p>
                    </div>

                </div>

            </div>
        </div>
        <!--List With Icon (Check all) End-->

        <!--List With Icon (Star) Start-->
        <div class="col-lg-4 col-12 mb-30">
            <div class="box">

                <div class="box-head">
                    <h3 class="title">List Icon Class List</h3>
                </div>

                <div class="box-body">

                    <ul class="list-icon list-check primary">
                        <li>list-check</li>
                    </ul>
                    <ul class="list-icon list-check-square secondary">
                        <li>list-check-square</li>
                    </ul>
                    <ul class="list-icon list-ticked success">
                        <li>list-ticked</li>
                    </ul>
                    <ul class="list-icon list-star danger">
                        <li>list-star</li>
                    </ul>
                    <ul class="list-icon list-star-circle warning">
                        <li>list-star-circle</li>
                    </ul>
                    <ul class="list-icon list-arrow info">
                        <li>list-arrow</li>
                    </ul>
                    <ul class="list-icon list-caret primary">
                        <li>list-caret</li>
                    </ul>
                    <ul class="list-icon list-chevron secondary">
                        <li>list-chevron</li>
                    </ul>
                    <ul class="list-icon list-long-arrow success">
                        <li>list-long-arrow</li>
                    </ul>
                    <ul class="list-icon list-forward danger">
                        <li>list-forward</li>
                    </ul>

                </div>

            </div>
        </div>
        <!--List With Icon (Star) End-->

    </div>

</div>
@endsection