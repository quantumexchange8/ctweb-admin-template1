@extends('layout.master')

@section('content')
<div class="content-body">

    <!-- Page Headings Start -->
    <div class="row justify-content-between align-items-center mb-10">

        <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3 class="title">Elements <span>/ Media Player</span></h3>
            </div>
        </div><!-- Page Heading End -->

    </div><!-- Page Headings End -->

    <div class="row">

        <!--HTML5 Video Start-->
        <div class="col-md-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">HTML5 Video (Plyr)</h4>
                </div>
                <div class="box-body">
                    <video poster="assets/images/bg/video-1-poster.jpg" class="plyr-video" playsinline controls>
                        <source src="assets/media/video-1-576p.mp4" type="video/mp4" data-res="576" />
                        <source src="assets/media/video-1-720p.mp4" type="video/mp4" data-res="720" />
                        <source src="assets/media/video-1-1080p.mp4" type="video/mp4" data-res="1080" />
                    </video>
                </div>
            </div>
        </div>
        <!--HTML5 Video Start-->

        <!--HTML5 Audio Start-->
        <div class="col-md-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">HTML5 Audio (Plyr)</h4>
                </div>
                <div class="box-body">
                    <audio class="plyr-audio" controls>
                        <source src="assets/media/audio-1.mp3" type="audio/mp3" />
                    </audio>
                </div>
            </div>
        </div>
        <!--HTML5 Audio Start-->

        <!--Youtube Video Start-->
        <div class="col-md-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Youtube Video (Plyr)</h4>
                </div>
                <div class="box-body">
                    <div class="plyr__video-embed plyr-youtube">
                        <iframe src="https://www.youtube.com/embed/bTqVqk7FSmY?origin=https://plyr.io&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1" allowfullscreen allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!--Youtube Video Start-->

        <!--Vimeo Video Start-->
        <div class="col-md-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Vimeo Video (Plyr)</h4>
                </div>
                <div class="box-body">
                    <div class="plyr__video-embed plyr-vimeo">
                        <iframe src="https://player.vimeo.com/video/76979871?loop=false&amp;byline=false&amp;portrait=false&amp;title=false&amp;speed=true&amp;transparent=0&amp;gesture=media" allowfullscreen allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!--Vimeo Video Start-->

        <!--How To Use Start-->
        <div class="col-12">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">How To Use</h4>
                </div>
                <div class="box-body">
                    <h6>Basic Use HTML</h6>
                    <code>
                    &lt;video poster="assets/images/bg/video-1-poster.jpg" class="plyr-video" playsinline controls&gt;<br />&nbsp;&nbsp;&nbsp; &lt;source src="assets/media/video-1-576p.mp4" type="video/mp4" size="576" /&gt;<br />&nbsp;&nbsp;&nbsp; &lt;source src="assets/media/video-1-720p.mp4" type="video/mp4" size="720" /&gt;<br />&nbsp;&nbsp;&nbsp; &lt;source src="assets/media/video-1-1080p.mp4" type="video/mp4" size="1080" /&gt;<br />&lt;/video&gt;
                </code>
                    <h6 class="mt-15">Js Activation</h6>
                    <code>
                    const plyrVideo = new Plyr('.plyr-video');
                </code>
                    <p class="mt-15">For more Information please follow the <a class="text-primary" href="https://github.com/sampotts/plyr">Official Documentation</a></p>
                </div>
            </div>
        </div>
        <!--How To Use End-->

    </div>

</div>
@endsection