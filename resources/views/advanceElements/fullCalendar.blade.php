@extends('layout.master')

@section('content')
<div class="content-body">

    <!-- Page Headings Start -->
    <div class="row justify-content-between align-items-center mb-10">

        <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3 class="title">Elements <span>/ Fullcalendar</span></h3>
            </div>
        </div><!-- Page Heading End -->

    </div><!-- Page Headings End -->

    <div class="row">
        <!--Fullcalendar Start-->
        <div class="col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Fullcalendar</h4>
                </div>
                <div class="box-body">
                    <div class="fullcalendar fullcalendar-example"></div>
                </div>
            </div>
        </div>
        <!--Fullcalendar End-->

        <!--How To Use Start-->
        <div class="col-12">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">How To Use</h4>
                </div>
                <div class="box-body">
                    <h6>Basic Use HTML</h6>
                    <code>
                    &lt;div class="fullcalendar fullcalendar-example"&gt;&lt;/div&gt;
                </code>
                    <h6 class="mt-15">Js Activation</h6>
                    <code>
                    $('.fullcalendar-example').fullCalendar({<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;// put your options and callbacks here <br>
                    });
                </code>
                    <p class="mt-15">For more Information please follow the <a class="text-primary" href="https://fullcalendar.io/docs/v3">Official Documentation</a></p>
                </div>
            </div>
        </div>
        <!--How To Use End-->
    </div>

</div>
@endsection