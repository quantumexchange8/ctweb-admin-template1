@extends('layout.master')

@section('content')
<div class="content-body">

    <!-- Page Headings Start -->
    <div class="row justify-content-between align-items-center mb-10">

        <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3 class="title">Elements <span>/ Rating</span></h3>
            </div>
        </div><!-- Page Heading End -->

    </div><!-- Page Headings End -->

    <div class="row">

        <!--Default Start-->
        <div class="col-lg-4 col-md-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Default</h4>
                </div>
                <div class="box-body">
                    <p class="mb-10">This is the most basic example of ratings.</p>
                    <div class="rating rating-default"></div>
                </div>
            </div>
        </div>
        <!--Default End-->

        <!--Score Start-->
        <div class="col-lg-4 col-md-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Score</h4>
                </div>
                <div class="box-body">
                    <p class="mb-10">Used when we want stars with a saved rating.</p>
                    <div class="rating rating-score"></div>
                </div>
            </div>
        </div>
        <!--Score End-->

        <!--Score Name Start-->
        <div class="col-lg-4 col-md-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Score Name</h4>
                </div>
                <div class="box-body">
                    <p class="mb-10">Changes the name of the hidden score field.</p>
                    <div class="rating rating-score-name"></div>
                </div>
            </div>
        </div>
        <!--Score Name End-->

        <!--Number Start-->
        <div class="col-lg-4 col-md-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Number</h4>
                </div>
                <div class="box-body">
                    <p class="mb-10">Changes the number of stars.</p>
                    <div class="rating rating-number"></div>
                </div>
            </div>
        </div>
        <!--Number End-->

        <!--Number Max Start-->
        <div class="col-lg-4 col-md-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Number Max</h4>
                </div>
                <div class="box-body">
                    <p class="mb-10">Change the max number of stars that can be created.</p>
                    <div class="rating rating-number-max"></div>
                </div>
            </div>
        </div>
        <!--Number Max End-->

        <!--Read Only Start-->
        <div class="col-lg-4 col-md-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Read Only</h4>
                </div>
                <div class="box-body">
                    <p class="mb-10">You can prevent users from voting. It can be applied with or without a score.</p>
                    <div class="rating rating-read-only mb-10"></div>
                    <div class="rating rating-read-only2"></div>
                </div>
            </div>
        </div>
        <!--Read Only End-->

        <!--Not Rated Message Start-->
        <div class="col-lg-4 col-md-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Not Rated Message</h4>
                </div>
                <div class="box-body">
                    <p class="mb-10">If readOnly is enabled and there is no score, the hint "Not rated yet!" will be shown for all stars. But you can change it. Hover the mouse over the star to see:</p>
                    <div class="rating rating-not-rated-msg"></div>
                </div>
            </div>
        </div>
        <!--Not Rated Message End-->

        <!--Half Show Start-->
        <div class="col-lg-4 col-md-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Half Show</h4>
                </div>
                <div class="box-body">
                    <p class="mb-10">You can represent a float score as a half star icon.</p>
                    <div class="row">
                        <div class="col-6">
                            <h6>Enable</h6>
                            <div class="rating rating-half-enable"></div>
                        </div>
                        <div class="col-6">
                            <h6>Disable</h6>
                            <div class="rating rating-half-disable"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Half Show End-->

        <!--Half Rating Start-->
        <div class="col-lg-4 col-md-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Half Rating</h4>
                </div>
                <div class="box-body">
                    <p class="mb-10">Enables the half star mouseover to make voting with half values possible.</p>
                    <div class="rating rating-half"></div>
                </div>
            </div>
        </div>
        <!--Half Rating End-->

        <!--Hints Start-->
        <div class="col-lg-4 col-md-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Hints</h4>
                </div>
                <div class="box-body">
                    <p class="mb-10">Changes the hint for each star by it position on array.</p>
                    <div class="rating rating-hint"></div>
                </div>
            </div>
        </div>
        <!--Hints End-->

        <!--Path Start-->
        <div class="col-lg-4 col-md-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Path</h4>
                </div>
                <div class="box-body">
                    <p class="mb-10">Changes the path where your icons are located. Set it only if you want the same path for all icons.</p>
                    <div class="rating rating-path"></div>
                </div>
            </div>
        </div>
        <!--Path End-->

        <!--Cancel Start-->
        <div class="col-lg-4 col-md-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Cancel</h4>
                </div>
                <div class="box-body">
                    <p class="mb-10">Add a cancel button on the left side of the stars to cacel the score.</p>
                    <div class="rating rating-cancel"></div>
                </div>
            </div>
        </div>
        <!--Cancel End-->

        <!--Custom Icon Start-->
        <div class="col-lg-4 col-md-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Custom Icon</h4>
                </div>
                <div class="box-body">
                    <p class="mb-10">Use any icon you want.</p>
                    <div class="rating rating-custom-icon"></div>
                </div>
            </div>
        </div>
        <!--Custom Icon End-->

        <!--Icon Font Start-->
        <div class="col-lg-4 col-md-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Icon Font</h4>
                </div>
                <div class="box-body">
                    <p class="mb-10">Use any icon you want.</p>
                    <div class="rating rating-font rating-font-star h3"></div>
                </div>
            </div>
        </div>
        <!--Icon Font End-->

        <!--Icon Range Start-->
        <div class="col-lg-4 col-md-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Icon Range</h4>
                </div>
                <div class="box-body">
                    <p class="mb-10">Is an array of objects where each one represents a custom icon. The range attribute is where the icon will be displayed (out of the five stars).</p>
                    <div class="rating rating-icon-range h3"></div>
                </div>
            </div>
        </div>
        <!--Icon Range End-->

        <!--How To Use Start-->
        <div class="col-12">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">How To Use</h4>
                </div>
                <div class="box-body">
                    <h6>Basic Use HTML</h6>
                    <code>
                    &lt;div class="rating rating-default"&gt;&lt;/div&gt;
                </code>
                    <h6 class="mt-15">Js Activation</h6>
                    <code>
                    $.fn.raty.defaults.path = 'assets/images/rating/'<br>
                    $('.rating-default').raty();
                </code>
                    <p class="mt-15">For more Information please follow the <a class="text-primary" href="https://github.com/wbotelhos/raty">Official Documentation</a></p>
                </div>
            </div>
        </div>
        <!--How To Use End-->

    </div>

</div>
@endsection