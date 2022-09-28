@extends('frontView.master')

@section('title_area')
		Lecture
@endsection



@section('css_js')
		<link href="{{ asset('frontEnd') }}/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- pignose css -->
<link href="{{ asset('frontEnd') }}/css/pignose.layerslider.css" rel="stylesheet" type="text/css" media="all" />


<!-- //pignose css -->
<link href="{{ asset('frontEnd') }}/css/style1.css" rel="stylesheet" type="text/css" media="all" />

<!-- js -->
<script type="text/javascript" src="{{ asset('frontEnd') }}/js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- cart -->
	<script src="{{ asset('frontEnd') }}/js/simpleCart.min.js"></script>
<!-- cart -->
<!-- for bootstrap working -->
	<script type="text/javascript" src="{{ asset('frontEnd') }}/js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
<script src="{{ asset('frontEnd') }}/js/jquery.easing.min.js"></script>	

@endsection

@section('feature')


<section class="w3l-offered-courses">
        <div class="blog py-5" id="blog">
            <div class="containerv pb-lg-5">
        
                <div class="row">
@foreach ($lecture as $video)

<div class="col-lg-4 col-md-6 item">

                   <div class="card">
                       <div class="card-header p-0 position-relative">
                           <a href="#url" class="zoom d-block">
                               <img class="card-img-bottom d-block" src="{{$video->video_link}}" loading="lazy" alt="Card image cap">
                                <iframe class="responsive-iframe" src="{{$video->video_link}}"></iframe>
                           </a>
                           
                       </div><br>
                       <div class="course-title">
                                   <a href="#url"  style="color:black; font-size:25px">{{$video->lecturer_name}}</a><br>
                        </div><br><br>
                        <div class="course-title">
                                   <a href="#url"  style="color:black; font-size:20px">{{$video->video_title}}</a><br>
                        </div><br><br>
                       <a href="{{url('/lectureById='.$video->id)}}" class="{{$theme}} btn btn-light btn-block"><strong>Play Video</strong></a>

                   </div>
               </div>                
                        
                               
                          
@endforeach
                </div>

                
            </div>
        </div>


	<br><br><br><br>
@endsection


<style>
@charset "UTF-8";
/*!
 *  Font Awesome 4.7.0 by @davegandy - http://fontawesome.io - @fontawesome
 *  License - http://fontawesome.io/license (Font: SIL OFL 1.1, CSS: MIT License)
 */
/* FONT PATH
 * -------------------------- */
@font-face {
    font-family: "FontAwesome";
    src: url("../fonts/fontawesome-webfont.eot?v=4.7.0");
    src: url("../fonts/fontawesome-webfont.eot?#iefix&v=4.7.0")
            format("embedded-opentype"),
        url("../fonts/fontawesome-webfont.woff2?v=4.7.0") format("woff2"),
        url("../fonts/fontawesome-webfont.woff?v=4.7.0") format("woff"),
        url("../fonts/fontawesome-webfont.ttf?v=4.7.0") format("truetype"),
        url("../fonts/fontawesome-webfont.svg?v=4.7.0#fontawesomeregular")
            format("svg");
    font-weight: normal;
    font-style: normal;
}

.fa {
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

/* makes the font 33% larger relative to the icon containerv */
.fa-lg {
    font-size: 1.33333em;
    line-height: 0.75em;
    vertical-align: -15%;
}

.fa-2x {
    font-size: 2em;
}

.fa-3x {
    font-size: 3em;
}

.fa-4x {
    font-size: 4em;
}

.fa-5x {
    font-size: 5em;
}

.fa-fw {
    width: 1.28571em;
    text-align: center;
}

.fa-ul {
    padding-left: 0;
    margin-left: 2.14286em;
    list-style-type: none;
}
.fa-ul > li {
    position: relative;
}

.fa-li {
    position: absolute;
    left: -2.14286em;
    width: 2.14286em;
    top: 0.14286em;
    text-align: center;
}
.fa-li.fa-lg {
    left: -1.85714em;
}

.fa-border {
    padding: 0.2em 0.25em 0.15em;
    border: solid 0.08em #eee;
    border-radius: 0.1em;
}

.fa-pull-left {
    float: left;
}

.fa-pull-right {
    float: right;
}

.fa.fa-pull-left {
    margin-right: 0.3em;
}

.fa.fa-pull-right {
    margin-left: 0.3em;
}

/* Deprecated as of 4.4.0 */
.pull-right {
    float: right;
}

.pull-left {
    float: left;
}

.fa.pull-left {
    margin-right: 0.3em;
}

.fa.pull-right {
    margin-left: 0.3em;
}

.fa-spin {
    -webkit-animation: fa-spin 2s infinite linear;
    animation: fa-spin 2s infinite linear;
}

.fa-pulse {
    -webkit-animation: fa-spin 1s infinite steps(8);
    animation: fa-spin 1s infinite steps(8);
}

@-webkit-keyframes fa-spin {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(359deg);
    }
}

@keyframes fa-spin {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(359deg);
    }
}

.fa-rotate-90 {
    -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=1)";
    transform: rotate(90deg);
}

.fa-rotate-180 {
    -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2)";
    transform: rotate(180deg);
}

.fa-rotate-270 {
    -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=3)";
    transform: rotate(270deg);
}

.fa-flip-horizontal {
    -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1)";
    transform: scale(-1, 1);
}

.fa-flip-vertical {
    -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)";
    transform: scale(1, -1);
}

:root .fa-rotate-90,
:root .fa-rotate-180,
:root .fa-rotate-270,
:root .fa-flip-horizontal,
:root .fa-flip-vertical {
    -webkit-filter: none;
    filter: none;
}

.fa-stack {
    position: relative;
    display: inline-block;
    width: 2em;
    height: 2em;
    line-height: 2em;
    vertical-align: middle;
}

.fa-stack-1x,
.fa-stack-2x {
    position: absolute;
    left: 0;
    width: 100%;
    text-align: center;
}

.fa-stack-1x {
    line-height: inherit;
}

.fa-stack-2x {
    font-size: 2em;
}

.fa-inverse {
    color: #fff;
}

/* Font Awesome uses the Unicode Private Use Area (PUA) to ensure screen
   readers do not read off random characters that represent icons */
.fa-glass:before {
    content: "";
}

.fa-music:before {
    content: "";
}

.fa-search:before {
    content: "";
}

.fa-envelope-o:before {
    content: "";
}

.fa-heart:before {
    content: "";
}

.fa-star:before {
    content: "";
}

.fa-star-o:before {
    content: "";
}

.fa-user:before {
    content: "";
}

.fa-film:before {
    content: "";
}

.fa-th-large:before {
    content: "";
}

.fa-th:before {
    content: "";
}

.fa-th-list:before {
    content: "";
}

.fa-check:before {
    content: "";
}

.fa-remove:before,
.fa-close:before,
.fa-times:before {
    content: "";
}

.fa-search-plus:before {
    content: "";
}

.fa-search-minus:before {
    content: "";
}

.fa-power-off:before {
    content: "";
}

.fa-signal:before {
    content: "";
}

.fa-gear:before,
.fa-cog:before {
    content: "";
}

.fa-trash-o:before {
    content: "";
}

.fa-home:before {
    content: "";
}

.fa-file-o:before {
    content: "";
}

.fa-clock-o:before {
    content: "";
}

.fa-road:before {
    content: "";
}

.fa-download:before {
    content: "";
}

.fa-arrow-circle-o-down:before {
    content: "";
}

.fa-arrow-circle-o-up:before {
    content: "";
}

.fa-inbox:before {
    content: "";
}

.fa-play-circle-o:before {
    content: "";
}

.fa-rotate-right:before,
.fa-repeat:before {
    content: "";
}

.fa-refresh:before {
    content: "";
}

.fa-list-alt:before {
    content: "";
}

.fa-lock:before {
    content: "";
}

.fa-flag:before {
    content: "";
}

.fa-headphones:before {
    content: "";
}

.fa-volume-off:before {
    content: "";
}

.fa-volume-down:before {
    content: "";
}

.fa-volume-up:before {
    content: "";
}

.fa-qrcode:before {
    content: "";
}

.fa-barcode:before {
    content: "";
}

.fa-tag:before {
    content: "";
}

.fa-tags:before {
    content: "";
}

.fa-book:before {
    content: "";
}

.fa-bookmark:before {
    content: "";
}

.fa-print:before {
    content: "";
}

.fa-camera:before {
    content: "";
}

.fa-font:before {
    content: "";
}

.fa-bold:before {
    content: "";
}

.fa-italic:before {
    content: "";
}

.fa-text-height:before {
    content: "";
}

.fa-text-width:before {
    content: "";
}

.fa-align-left:before {
    content: "";
}

.fa-align-center:before {
    content: "";
}

.fa-align-right:before {
    content: "";
}

.fa-align-justify:before {
    content: "";
}

.fa-list:before {
    content: "";
}

.fa-dedent:before,
.fa-outdent:before {
    content: "";
}

.fa-indent:before {
    content: "";
}

.fa-video-camera:before {
    content: "";
}

.fa-photo:before,
.fa-image:before,
.fa-picture-o:before {
    content: "";
}

.fa-pencil:before {
    content: "";
}

.fa-map-marker:before {
    content: "";
}

.fa-adjust:before {
    content: "";
}

.fa-tint:before {
    content: "";
}

.fa-edit:before,
.fa-pencil-square-o:before {
    content: "";
}

.fa-share-square-o:before {
    content: "";
}

.fa-check-square-o:before {
    content: "";
}

.fa-arrows:before {
    content: "";
}

.fa-step-backward:before {
    content: "";
}

.fa-fast-backward:before {
    content: "";
}

.fa-backward:before {
    content: "";
}

.fa-play:before {
    content: "";
}

.fa-pause:before {
    content: "";
}

.fa-stop:before {
    content: "";
}

.fa-forward:before {
    content: "";
}

.fa-fast-forward:before {
    content: "";
}

.fa-step-forward:before {
    content: "";
}

.fa-eject:before {
    content: "";
}

.fa-chevron-left:before {
    content: "";
}

.fa-chevron-right:before {
    content: "";
}

.fa-plus-circle:before {
    content: "";
}

.fa-minus-circle:before {
    content: "";
}

.fa-times-circle:before {
    content: "";
}

.fa-check-circle:before {
    content: "";
}

.fa-question-circle:before {
    content: "";
}

.fa-info-circle:before {
    content: "";
}

.fa-crosshairs:before {
    content: "";
}

.fa-times-circle-o:before {
    content: "";
}

.fa-check-circle-o:before {
    content: "";
}

.fa-ban:before {
    content: "";
}

.fa-arrow-left:before {
    content: "";
}

.fa-arrow-right:before {
    content: "";
}

.fa-arrow-up:before {
    content: "";
}

.fa-arrow-down:before {
    content: "";
}

.fa-mail-forward:before,
.fa-share:before {
    content: "";
}

.fa-expand:before {
    content: "";
}

.fa-compress:before {
    content: "";
}

.fa-plus:before {
    content: "";
}

.fa-minus:before {
    content: "";
}

.fa-asterisk:before {
    content: "";
}

.fa-exclamation-circle:before {
    content: "";
}

.fa-gift:before {
    content: "";
}

.fa-leaf:before {
    content: "";
}

.fa-fire:before {
    content: "";
}

.fa-eye:before {
    content: "";
}

.fa-eye-slash:before {
    content: "";
}

.fa-warning:before,
.fa-exclamation-triangle:before {
    content: "";
}

.fa-plane:before {
    content: "";
}

.fa-calendar:before {
    content: "";
}

.fa-random:before {
    content: "";
}

.fa-comment:before {
    content: "";
}

.fa-magnet:before {
    content: "";
}

.fa-chevron-up:before {
    content: "";
}

.fa-chevron-down:before {
    content: "";
}

.fa-retweet:before {
    content: "";
}

.fa-shopping-cart:before {
    content: "";
}

.fa-folder:before {
    content: "";
}

.fa-folder-open:before {
    content: "";
}

.fa-arrows-v:before {
    content: "";
}

.fa-arrows-h:before {
    content: "";
}

.fa-bar-chart-o:before,
.fa-bar-chart:before {
    content: "";
}

.fa-twitter-square:before {
    content: "";
}

.fa-facebook-square:before {
    content: "";
}

.fa-camera-retro:before {
    content: "";
}

.fa-key:before {
    content: "";
}

.fa-gears:before,
.fa-cogs:before {
    content: "";
}

.fa-comments:before {
    content: "";
}

.fa-thumbs-o-up:before {
    content: "";
}

.fa-thumbs-o-down:before {
    content: "";
}

.fa-star-half:before {
    content: "";
}

.fa-heart-o:before {
    content: "";
}

.fa-sign-out:before {
    content: "";
}

.fa-linkedin-square:before {
    content: "";
}

.fa-thumb-tack:before {
    content: "";
}

.fa-external-link:before {
    content: "";
}

.fa-sign-in:before {
    content: "";
}

.fa-trophy:before {
    content: "";
}

.fa-github-square:before {
    content: "";
}

.fa-upload:before {
    content: "";
}

.fa-lemon-o:before {
    content: "";
}

.fa-phone:before {
    content: "";
}

.fa-square-o:before {
    content: "";
}

.fa-bookmark-o:before {
    content: "";
}

.fa-phone-square:before {
    content: "";
}

.fa-twitter:before {
    content: "";
}

.fa-facebook-f:before,
.fa-facebook:before {
    content: "";
}

.fa-github:before {
    content: "";
}

.fa-unlock:before {
    content: "";
}

.fa-credit-card:before {
    content: "";
}

.fa-feed:before,
.fa-rss:before {
    content: "";
}

.fa-hdd-o:before {
    content: "";
}

.fa-bullhorn:before {
    content: "";
}

.fa-bell:before {
    content: "";
}

.fa-certificate:before {
    content: "";
}

.fa-hand-o-right:before {
    content: "";
}

.fa-hand-o-left:before {
    content: "";
}

.fa-hand-o-up:before {
    content: "";
}

.fa-hand-o-down:before {
    content: "";
}

.fa-arrow-circle-left:before {
    content: "";
}

.fa-arrow-circle-right:before {
    content: "";
}

.fa-arrow-circle-up:before {
    content: "";
}

.fa-arrow-circle-down:before {
    content: "";
}

.fa-globe:before {
    content: "";
}

.fa-wrench:before {
    content: "";
}

.fa-tasks:before {
    content: "";
}

.fa-filter:before {
    content: "";
}

.fa-briefcase:before {
    content: "";
}

.fa-arrows-alt:before {
    content: "";
}

.fa-group:before,
.fa-users:before {
    content: "";
}

.fa-chain:before,
.fa-link:before {
    content: "";
}

.fa-cloud:before {
    content: "";
}

.fa-flask:before {
    content: "";
}

.fa-cut:before,
.fa-scissors:before {
    content: "";
}

.fa-copy:before,
.fa-files-o:before {
    content: "";
}

.fa-paperclip:before {
    content: "";
}

.fa-save:before,
.fa-floppy-o:before {
    content: "";
}

.fa-square:before {
    content: "";
}

.fa-navicon:before,
.fa-reorder:before,
.fa-bars:before {
    content: "";
}

.fa-list-ul:before {
    content: "";
}

.fa-list-ol:before {
    content: "";
}

.fa-strikethrough:before {
    content: "";
}

.fa-underline:before {
    content: "";
}

.fa-table:before {
    content: "";
}

.fa-magic:before {
    content: "";
}

.fa-truck:before {
    content: "";
}

.fa-pinterest:before {
    content: "";
}

.fa-pinterest-square:before {
    content: "";
}

.fa-google-plus-square:before {
    content: "";
}

.fa-google-plus:before {
    content: "";
}

.fa-money:before {
    content: "";
}

.fa-caret-down:before {
    content: "";
}

.fa-caret-up:before {
    content: "";
}

.fa-caret-left:before {
    content: "";
}

.fa-caret-right:before {
    content: "";
}

.fa-columns:before {
    content: "";
}

.fa-unsorted:before,
.fa-sort:before {
    content: "";
}

.fa-sort-down:before,
.fa-sort-desc:before {
    content: "";
}

.fa-sort-up:before,
.fa-sort-asc:before {
    content: "";
}

.fa-envelope:before {
    content: "";
}

.fa-linkedin:before {
    content: "";
}

.fa-rotate-left:before,
.fa-undo:before {
    content: "";
}

.fa-legal:before,
.fa-gavel:before {
    content: "";
}

.fa-dashboard:before,
.fa-tachometer:before {
    content: "";
}

.fa-comment-o:before {
    content: "";
}

.fa-comments-o:before {
    content: "";
}

.fa-flash:before,
.fa-bolt:before {
    content: "";
}

.fa-sitemap:before {
    content: "";
}

.fa-umbrella:before {
    content: "";
}

.fa-paste:before,
.fa-clipboard:before {
    content: "";
}

.fa-lightbulb-o:before {
    content: "";
}

.fa-exchange:before {
    content: "";
}

.fa-cloud-download:before {
    content: "";
}

.fa-cloud-upload:before {
    content: "";
}

.fa-user-md:before {
    content: "";
}

.fa-stethoscope:before {
    content: "";
}

.fa-suitcase:before {
    content: "";
}

.fa-bell-o:before {
    content: "";
}

.fa-coffee:before {
    content: "";
}

.fa-cutlery:before {
    content: "";
}

.fa-file-text-o:before {
    content: "";
}

.fa-building-o:before {
    content: "";
}

.fa-hospital-o:before {
    content: "";
}

.fa-ambulance:before {
    content: "";
}

.fa-medkit:before {
    content: "";
}

.fa-fighter-jet:before {
    content: "";
}

.fa-beer:before {
    content: "";
}

.fa-h-square:before {
    content: "";
}

.fa-plus-square:before {
    content: "";
}

.fa-angle-double-left:before {
    content: "";
}

.fa-angle-double-right:before {
    content: "";
}

.fa-angle-double-up:before {
    content: "";
}

.fa-angle-double-down:before {
    content: "";
}

.fa-angle-left:before {
    content: "";
}

.fa-angle-right:before {
    content: "";
}

.fa-angle-up:before {
    content: "";
}

.fa-angle-down:before {
    content: "";
}

.fa-desktop:before {
    content: "";
}

.fa-laptop:before {
    content: "";
}

.fa-tablet:before {
    content: "";
}

.fa-mobile-phone:before,
.fa-mobile:before {
    content: "";
}

.fa-circle-o:before {
    content: "";
}

.fa-quote-left:before {
    content: "";
}

.fa-quote-right:before {
    content: "";
}

.fa-spinner:before {
    content: "";
}

.fa-circle:before {
    content: "";
}

.fa-mail-reply:before,
.fa-reply:before {
    content: "";
}

.fa-github-alt:before {
    content: "";
}

.fa-folder-o:before {
    content: "";
}

.fa-folder-open-o:before {
    content: "";
}

.fa-smile-o:before {
    content: "";
}

.fa-frown-o:before {
    content: "";
}

.fa-meh-o:before {
    content: "";
}

.fa-gamepad:before {
    content: "";
}

.fa-keyboard-o:before {
    content: "";
}

.fa-flag-o:before {
    content: "";
}

.fa-flag-checkered:before {
    content: "";
}

.fa-terminal:before {
    content: "";
}

.fa-code:before {
    content: "";
}

.fa-mail-reply-all:before,
.fa-reply-all:before {
    content: "";
}

.fa-star-half-empty:before,
.fa-star-half-full:before,
.fa-star-half-o:before {
    content: "";
}

.fa-location-arrow:before {
    content: "";
}

.fa-crop:before {
    content: "";
}

.fa-code-fork:before {
    content: "";
}

.fa-unlink:before,
.fa-chain-broken:before {
    content: "";
}

.fa-question:before {
    content: "";
}

.fa-info:before {
    content: "";
}

.fa-exclamation:before {
    content: "";
}

.fa-superscript:before {
    content: "";
}

.fa-subscript:before {
    content: "";
}

.fa-eraser:before {
    content: "";
}

.fa-puzzle-piece:before {
    content: "";
}

.fa-microphone:before {
    content: "";
}

.fa-microphone-slash:before {
    content: "";
}

.fa-shield:before {
    content: "";
}

.fa-calendar-o:before {
    content: "";
}

.fa-fire-extinguisher:before {
    content: "";
}

.fa-rocket:before {
    content: "";
}

.fa-maxcdn:before {
    content: "";
}

.fa-chevron-circle-left:before {
    content: "";
}

.fa-chevron-circle-right:before {
    content: "";
}

.fa-chevron-circle-up:before {
    content: "";
}

.fa-chevron-circle-down:before {
    content: "";
}

.fa-html5:before {
    content: "";
}

.fa-css3:before {
    content: "";
}

.fa-anchor:before {
    content: "";
}

.fa-unlock-alt:before {
    content: "";
}

.fa-bullseye:before {
    content: "";
}

.fa-ellipsis-h:before {
    content: "";
}

.fa-ellipsis-v:before {
    content: "";
}

.fa-rss-square:before {
    content: "";
}

.fa-play-circle:before {
    content: "";
}

.fa-ticket:before {
    content: "";
}

.fa-minus-square:before {
    content: "";
}

.fa-minus-square-o:before {
    content: "";
}

.fa-level-up:before {
    content: "";
}

.fa-level-down:before {
    content: "";
}

.fa-check-square:before {
    content: "";
}

.fa-pencil-square:before {
    content: "";
}

.fa-external-link-square:before {
    content: "";
}

.fa-share-square:before {
    content: "";
}

.fa-compass:before {
    content: "";
}

.fa-toggle-down:before,
.fa-caret-square-o-down:before {
    content: "";
}

.fa-toggle-up:before,
.fa-caret-square-o-up:before {
    content: "";
}

.fa-toggle-right:before,
.fa-caret-square-o-right:before {
    content: "";
}

.fa-euro:before,
.fa-eur:before {
    content: "";
}

.fa-gbp:before {
    content: "";
}

.fa-dollar:before,
.fa-usd:before {
    content: "";
}

.fa-rupee:before,
.fa-inr:before {
    content: "";
}

.fa-cny:before,
.fa-rmb:before,
.fa-yen:before,
.fa-jpy:before {
    content: "";
}

.fa-ruble:before,
.fa-rouble:before,
.fa-rub:before {
    content: "";
}

.fa-won:before,
.fa-krw:before {
    content: "";
}

.fa-bitcoin:before,
.fa-btc:before {
    content: "";
}

.fa-file:before {
    content: "";
}

.fa-file-text:before {
    content: "";
}

.fa-sort-alpha-asc:before {
    content: "";
}

.fa-sort-alpha-desc:before {
    content: "";
}

.fa-sort-amount-asc:before {
    content: "";
}

.fa-sort-amount-desc:before {
    content: "";
}

.fa-sort-numeric-asc:before {
    content: "";
}

.fa-sort-numeric-desc:before {
    content: "";
}

.fa-thumbs-up:before {
    content: "";
}

.fa-thumbs-down:before {
    content: "";
}

.fa-youtube-square:before {
    content: "";
}

.fa-youtube:before {
    content: "";
}

.fa-xing:before {
    content: "";
}

.fa-xing-square:before {
    content: "";
}

.fa-youtube-play:before {
    content: "";
}

.fa-dropbox:before {
    content: "";
}

.fa-stack-overflow:before {
    content: "";
}

.fa-instagram:before {
    content: "";
}

.fa-flickr:before {
    content: "";
}

.fa-adn:before {
    content: "";
}

.fa-bitbucket:before {
    content: "";
}

.fa-bitbucket-square:before {
    content: "";
}

.fa-tumblr:before {
    content: "";
}

.fa-tumblr-square:before {
    content: "";
}

.fa-long-arrow-down:before {
    content: "";
}

.fa-long-arrow-up:before {
    content: "";
}

.fa-long-arrow-left:before {
    content: "";
}

.fa-long-arrow-right:before {
    content: "";
}

.fa-apple:before {
    content: "";
}

.fa-windows:before {
    content: "";
}

.fa-android:before {
    content: "";
}

.fa-linux:before {
    content: "";
}

.fa-dribbble:before {
    content: "";
}

.fa-skype:before {
    content: "";
}

.fa-foursquare:before {
    content: "";
}

.fa-trello:before {
    content: "";
}

.fa-female:before {
    content: "";
}

.fa-male:before {
    content: "";
}

.fa-gittip:before,
.fa-gratipay:before {
    content: "";
}

.fa-sun-o:before {
    content: "";
}

.fa-moon-o:before {
    content: "";
}

.fa-archive:before {
    content: "";
}

.fa-bug:before {
    content: "";
}

.fa-vk:before {
    content: "";
}

.fa-weibo:before {
    content: "";
}

.fa-renren:before {
    content: "";
}

.fa-pagelines:before {
    content: "";
}

.fa-stack-exchange:before {
    content: "";
}

.fa-arrow-circle-o-right:before {
    content: "";
}

.fa-arrow-circle-o-left:before {
    content: "";
}

.fa-toggle-left:before,
.fa-caret-square-o-left:before {
    content: "";
}

.fa-dot-circle-o:before {
    content: "";
}

.fa-wheelchair:before {
    content: "";
}

.fa-vimeo-square:before {
    content: "";
}

.fa-turkish-lira:before,
.fa-try:before {
    content: "";
}

.fa-plus-square-o:before {
    content: "";
}

.fa-space-shuttle:before {
    content: "";
}

.fa-slack:before {
    content: "";
}

.fa-envelope-square:before {
    content: "";
}

.fa-wordpress:before {
    content: "";
}

.fa-openid:before {
    content: "";
}

.fa-institution:before,
.fa-bank:before,
.fa-university:before {
    content: "";
}

.fa-mortar-board:before,
.fa-graduation-cap:before {
    content: "";
}

.fa-yahoo:before {
    content: "";
}

.fa-google:before {
    content: "";
}

.fa-reddit:before {
    content: "";
}

.fa-reddit-square:before {
    content: "";
}

.fa-stumbleupon-circle:before {
    content: "";
}

.fa-stumbleupon:before {
    content: "";
}

.fa-delicious:before {
    content: "";
}

.fa-digg:before {
    content: "";
}

.fa-pied-piper-pp:before {
    content: "";
}

.fa-pied-piper-alt:before {
    content: "";
}

.fa-drupal:before {
    content: "";
}

.fa-joomla:before {
    content: "";
}

.fa-language:before {
    content: "";
}

.fa-fax:before {
    content: "";
}

.fa-building:before {
    content: "";
}

.fa-child:before {
    content: "";
}

.fa-paw:before {
    content: "";
}

.fa-spoon:before {
    content: "";
}

.fa-cube:before {
    content: "";
}

.fa-cubes:before {
    content: "";
}

.fa-behance:before {
    content: "";
}

.fa-behance-square:before {
    content: "";
}

.fa-steam:before {
    content: "";
}

.fa-steam-square:before {
    content: "";
}

.fa-recycle:before {
    content: "";
}

.fa-automobile:before,
.fa-car:before {
    content: "";
}

.fa-cab:before,
.fa-taxi:before {
    content: "";
}

.fa-tree:before {
    content: "";
}

.fa-spotify:before {
    content: "";
}

.fa-deviantart:before {
    content: "";
}

.fa-soundcloud:before {
    content: "";
}

.fa-database:before {
    content: "";
}

.fa-file-pdf-o:before {
    content: "";
}

.fa-file-word-o:before {
    content: "";
}

.fa-file-excel-o:before {
    content: "";
}

.fa-file-powerpoint-o:before {
    content: "";
}

.fa-file-photo-o:before,
.fa-file-picture-o:before,
.fa-file-image-o:before {
    content: "";
}

.fa-file-zip-o:before,
.fa-file-archive-o:before {
    content: "";
}

.fa-file-sound-o:before,
.fa-file-audio-o:before {
    content: "";
}

.fa-file-movie-o:before,
.fa-file-video-o:before {
    content: "";
}

.fa-file-code-o:before {
    content: "";
}

.fa-vine:before {
    content: "";
}

.fa-codepen:before {
    content: "";
}

.fa-jsfiddle:before {
    content: "";
}

.fa-life-bouy:before,
.fa-life-buoy:before,
.fa-life-saver:before,
.fa-support:before,
.fa-life-ring:before {
    content: "";
}

.fa-circle-o-notch:before {
    content: "";
}

.fa-ra:before,
.fa-resistance:before,
.fa-rebel:before {
    content: "";
}

.fa-ge:before,
.fa-empire:before {
    content: "";
}

.fa-git-square:before {
    content: "";
}

.fa-git:before {
    content: "";
}

.fa-y-combinator-square:before,
.fa-yc-square:before,
.fa-hacker-news:before {
    content: "";
}

.fa-tencent-weibo:before {
    content: "";
}

.fa-qq:before {
    content: "";
}

.fa-wechat:before,
.fa-weixin:before {
    content: "";
}

.fa-send:before,
.fa-paper-plane:before {
    content: "";
}

.fa-send-o:before,
.fa-paper-plane-o:before {
    content: "";
}

.fa-history:before {
    content: "";
}

.fa-circle-thin:before {
    content: "";
}

.fa-header:before {
    content: "";
}

.fa-paragraph:before {
    content: "";
}

.fa-sliders:before {
    content: "";
}

.fa-share-alt:before {
    content: "";
}

.fa-share-alt-square:before {
    content: "";
}

.fa-bomb:before {
    content: "";
}

.fa-soccer-ball-o:before,
.fa-futbol-o:before {
    content: "";
}

.fa-tty:before {
    content: "";
}

.fa-binoculars:before {
    content: "";
}

.fa-plug:before {
    content: "";
}

.fa-slideshare:before {
    content: "";
}

.fa-twitch:before {
    content: "";
}

.fa-yelp:before {
    content: "";
}

.fa-newspaper-o:before {
    content: "";
}

.fa-wifi:before {
    content: "";
}

.fa-calculator:before {
    content: "";
}

.fa-paypal:before {
    content: "";
}

.fa-google-wallet:before {
    content: "";
}

.fa-cc-visa:before {
    content: "";
}

.fa-cc-mastercard:before {
    content: "";
}

.fa-cc-discover:before {
    content: "";
}

.fa-cc-amex:before {
    content: "";
}

.fa-cc-paypal:before {
    content: "";
}

.fa-cc-stripe:before {
    content: "";
}

.fa-bell-slash:before {
    content: "";
}

.fa-bell-slash-o:before {
    content: "";
}

.fa-trash:before {
    content: "";
}

.fa-copyright:before {
    content: "";
}

.fa-at:before {
    content: "";
}

.fa-eyedropper:before {
    content: "";
}

.fa-paint-brush:before {
    content: "";
}

.fa-birthday-cake:before {
    content: "";
}

.fa-area-chart:before {
    content: "";
}

.fa-pie-chart:before {
    content: "";
}

.fa-line-chart:before {
    content: "";
}

.fa-lastfm:before {
    content: "";
}

.fa-lastfm-square:before {
    content: "";
}

.fa-toggle-off:before {
    content: "";
}

.fa-toggle-on:before {
    content: "";
}

.fa-bicycle:before {
    content: "";
}

.fa-bus:before {
    content: "";
}

.fa-ioxhost:before {
    content: "";
}

.fa-angellist:before {
    content: "";
}

.fa-cc:before {
    content: "";
}

.fa-shekel:before,
.fa-sheqel:before,
.fa-ils:before {
    content: "";
}

.fa-meanpath:before {
    content: "";
}

.fa-buysellads:before {
    content: "";
}

.fa-connectdevelop:before {
    content: "";
}

.fa-dashcube:before {
    content: "";
}

.fa-forumbee:before {
    content: "";
}

.fa-leanpub:before {
    content: "";
}

.fa-sellsy:before {
    content: "";
}

.fa-shirtsinbulk:before {
    content: "";
}

.fa-simplybuilt:before {
    content: "";
}

.fa-skyatlas:before {
    content: "";
}

.fa-cart-plus:before {
    content: "";
}

.fa-cart-arrow-down:before {
    content: "";
}

.fa-diamond:before {
    content: "";
}

.fa-ship:before {
    content: "";
}

.fa-user-secret:before {
    content: "";
}

.fa-motorcycle:before {
    content: "";
}

.fa-street-view:before {
    content: "";
}

.fa-heartbeat:before {
    content: "";
}

.fa-venus:before {
    content: "";
}

.fa-mars:before {
    content: "";
}

.fa-mercury:before {
    content: "";
}

.fa-intersex:before,
.fa-transgender:before {
    content: "";
}

.fa-transgender-alt:before {
    content: "";
}

.fa-venus-double:before {
    content: "";
}

.fa-mars-double:before {
    content: "";
}

.fa-venus-mars:before {
    content: "";
}

.fa-mars-stroke:before {
    content: "";
}

.fa-mars-stroke-v:before {
    content: "";
}

.fa-mars-stroke-h:before {
    content: "";
}

.fa-neuter:before {
    content: "";
}

.fa-genderless:before {
    content: "";
}

.fa-facebook-official:before {
    content: "";
}

.fa-pinterest-p:before {
    content: "";
}

.fa-whatsapp:before {
    content: "";
}

.fa-server:before {
    content: "";
}

.fa-user-plus:before {
    content: "";
}

.fa-user-times:before {
    content: "";
}

.fa-hotel:before,
.fa-bed:before {
    content: "";
}

.fa-viacoin:before {
    content: "";
}

.fa-train:before {
    content: "";
}

.fa-subway:before {
    content: "";
}

.fa-medium:before {
    content: "";
}

.fa-yc:before,
.fa-y-combinator:before {
    content: "";
}

.fa-optin-monster:before {
    content: "";
}

.fa-opencart:before {
    content: "";
}

.fa-expeditedssl:before {
    content: "";
}

.fa-battery-4:before,
.fa-battery:before,
.fa-battery-full:before {
    content: "";
}

.fa-battery-3:before,
.fa-battery-three-quarters:before {
    content: "";
}

.fa-battery-2:before,
.fa-battery-half:before {
    content: "";
}

.fa-battery-1:before,
.fa-battery-quarter:before {
    content: "";
}

.fa-battery-0:before,
.fa-battery-empty:before {
    content: "";
}

.fa-mouse-pointer:before {
    content: "";
}

.fa-i-cursor:before {
    content: "";
}

.fa-object-group:before {
    content: "";
}

.fa-object-ungroup:before {
    content: "";
}

.fa-sticky-note:before {
    content: "";
}

.fa-sticky-note-o:before {
    content: "";
}

.fa-cc-jcb:before {
    content: "";
}

.fa-cc-diners-club:before {
    content: "";
}

.fa-clone:before {
    content: "";
}

.fa-balance-scale:before {
    content: "";
}

.fa-hourglass-o:before {
    content: "";
}

.fa-hourglass-1:before,
.fa-hourglass-start:before {
    content: "";
}

.fa-hourglass-2:before,
.fa-hourglass-half:before {
    content: "";
}

.fa-hourglass-3:before,
.fa-hourglass-end:before {
    content: "";
}

.fa-hourglass:before {
    content: "";
}

.fa-hand-grab-o:before,
.fa-hand-rock-o:before {
    content: "";
}

.fa-hand-stop-o:before,
.fa-hand-paper-o:before {
    content: "";
}

.fa-hand-scissors-o:before {
    content: "";
}

.fa-hand-lizard-o:before {
    content: "";
}

.fa-hand-spock-o:before {
    content: "";
}

.fa-hand-pointer-o:before {
    content: "";
}

.fa-hand-peace-o:before {
    content: "";
}

.fa-trademark:before {
    content: "";
}

.fa-registered:before {
    content: "";
}

.fa-creative-commons:before {
    content: "";
}

.fa-gg:before {
    content: "";
}

.fa-gg-circle:before {
    content: "";
}

.fa-tripadvisor:before {
    content: "";
}

.fa-odnoklassniki:before {
    content: "";
}

.fa-odnoklassniki-square:before {
    content: "";
}

.fa-get-pocket:before {
    content: "";
}

.fa-wikipedia-w:before {
    content: "";
}

.fa-safari:before {
    content: "";
}

.fa-chrome:before {
    content: "";
}

.fa-firefox:before {
    content: "";
}

.fa-opera:before {
    content: "";
}

.fa-internet-explorer:before {
    content: "";
}

.fa-tv:before,
.fa-television:before {
    content: "";
}

.fa-contao:before {
    content: "";
}

.fa-500px:before {
    content: "";
}

.fa-amazon:before {
    content: "";
}

.fa-calendar-plus-o:before {
    content: "";
}

.fa-calendar-minus-o:before {
    content: "";
}

.fa-calendar-times-o:before {
    content: "";
}

.fa-calendar-check-o:before {
    content: "";
}

.fa-industry:before {
    content: "";
}

.fa-map-pin:before {
    content: "";
}

.fa-map-signs:before {
    content: "";
}

.fa-map-o:before {
    content: "";
}

.fa-map:before {
    content: "";
}

.fa-commenting:before {
    content: "";
}

.fa-commenting-o:before {
    content: "";
}

.fa-houzz:before {
    content: "";
}

.fa-vimeo:before {
    content: "";
}

.fa-black-tie:before {
    content: "";
}

.fa-fonticons:before {
    content: "";
}

.fa-reddit-alien:before {
    content: "";
}

.fa-edge:before {
    content: "";
}

.fa-credit-card-alt:before {
    content: "";
}

.fa-codiepie:before {
    content: "";
}

.fa-modx:before {
    content: "";
}

.fa-fort-awesome:before {
    content: "";
}

.fa-usb:before {
    content: "";
}

.fa-product-hunt:before {
    content: "";
}

.fa-mixcloud:before {
    content: "";
}

.fa-scribd:before {
    content: "";
}

.fa-pause-circle:before {
    content: "";
}

.fa-pause-circle-o:before {
    content: "";
}

.fa-stop-circle:before {
    content: "";
}

.fa-stop-circle-o:before {
    content: "";
}

.fa-shopping-bag:before {
    content: "";
}

.fa-shopping-basket:before {
    content: "";
}

.fa-hashtag:before {
    content: "";
}

.fa-bluetooth:before {
    content: "";
}

.fa-bluetooth-b:before {
    content: "";
}

.fa-percent:before {
    content: "";
}

.fa-gitlab:before {
    content: "";
}

.fa-wpbeginner:before {
    content: "";
}

.fa-wpforms:before {
    content: "";
}

.fa-envira:before {
    content: "";
}

.fa-universal-access:before {
    content: "";
}

.fa-wheelchair-alt:before {
    content: "";
}

.fa-question-circle-o:before {
    content: "";
}

.fa-blind:before {
    content: "";
}

.fa-audio-description:before {
    content: "";
}

.fa-volume-control-phone:before {
    content: "";
}

.fa-braille:before {
    content: "";
}

.fa-assistive-listening-systems:before {
    content: "";
}

.fa-asl-interpreting:before,
.fa-american-sign-language-interpreting:before {
    content: "";
}

.fa-deafness:before,
.fa-hard-of-hearing:before,
.fa-deaf:before {
    content: "";
}

.fa-glide:before {
    content: "";
}

.fa-glide-g:before {
    content: "";
}

.fa-signing:before,
.fa-sign-language:before {
    content: "";
}

.fa-low-vision:before {
    content: "";
}

.fa-viadeo:before {
    content: "";
}

.fa-viadeo-square:before {
    content: "";
}

.fa-snapchat:before {
    content: "";
}

.fa-snapchat-ghost:before {
    content: "";
}

.fa-snapchat-square:before {
    content: "";
}

.fa-pied-piper:before {
    content: "";
}

.fa-first-order:before {
    content: "";
}

.fa-yoast:before {
    content: "";
}

.fa-themeisle:before {
    content: "";
}

.fa-google-plus-circle:before,
.fa-google-plus-official:before {
    content: "";
}

.fa-fa:before,
.fa-font-awesome:before {
    content: "";
}

.fa-handshake-o:before {
    content: "";
}

.fa-envelope-open:before {
    content: "";
}

.fa-envelope-open-o:before {
    content: "";
}

.fa-linode:before {
    content: "";
}

.fa-address-book:before {
    content: "";
}

.fa-address-book-o:before {
    content: "";
}

.fa-vcard:before,
.fa-address-card:before {
    content: "";
}

.fa-vcard-o:before,
.fa-address-card-o:before {
    content: "";
}

.fa-user-circle:before {
    content: "";
}

.fa-user-circle-o:before {
    content: "";
}

.fa-user-o:before {
    content: "";
}

.fa-id-badge:before {
    content: "";
}

.fa-drivers-license:before,
.fa-id-card:before {
    content: "";
}

.fa-drivers-license-o:before,
.fa-id-card-o:before {
    content: "";
}

.fa-quora:before {
    content: "";
}

.fa-free-code-camp:before {
    content: "";
}

.fa-telegram:before {
    content: "";
}

.fa-thermometer-4:before,
.fa-thermometer:before,
.fa-thermometer-full:before {
    content: "";
}

.fa-thermometer-3:before,
.fa-thermometer-three-quarters:before {
    content: "";
}

.fa-thermometer-2:before,
.fa-thermometer-half:before {
    content: "";
}

.fa-thermometer-1:before,
.fa-thermometer-quarter:before {
    content: "";
}

.fa-thermometer-0:before,
.fa-thermometer-empty:before {
    content: "";
}

.fa-shower:before {
    content: "";
}

.fa-bathtub:before,
.fa-s15:before,
.fa-bath:before {
    content: "";
}

.fa-podcast:before {
    content: "";
}

.fa-window-maximize:before {
    content: "";
}

.fa-window-minimize:before {
    content: "";
}

.fa-window-restore:before {
    content: "";
}

.fa-times-rectangle:before,
.fa-window-close:before {
    content: "";
}

.fa-times-rectangle-o:before,
.fa-window-close-o:before {
    content: "";
}

.fa-bandcamp:before {
    content: "";
}

.fa-grav:before {
    content: "";
}

.fa-etsy:before {
    content: "";
}

.fa-imdb:before {
    content: "";
}

.fa-ravelry:before {
    content: "";
}

.fa-eercast:before {
    content: "";
}

.fa-microchip:before {
    content: "";
}

.fa-snowflake-o:before {
    content: "";
}

.fa-superpowers:before {
    content: "";
}

.fa-wpexplorer:before {
    content: "";
}

.fa-meetup:before {
    content: "";
}

.sr-only {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    border: 0;
}

.sr-only-focusable:active,
.sr-only-focusable:focus {
    position: static;
    width: auto;
    height: auto;
    margin: 0;
    overflow: visible;
    clip: auto;
}

/*!
 * Bootstrap v4.4.1 (https://getbootstrap.com/)
 * Copyright 2011-2019 The Bootstrap Authors
 * Copyright 2011-2019 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */
:root {
    --blue: #007bff;
    --indigo: #6610f2;
    --purple: #6f42c1;
    --pink: #e83e8c;
    --red: #dc3545;
    --orange: #fd7e14;
    --yellow: #ffffff;
    --green: #28a745;
    --teal: #20c997;
    --cyan: #17a2b8;
    --white: #fff;
    --gray: #6c757d;
    --gray-dark: #343a40;
    --primary: ##ffffff;
    --secondary: #ba3833;
    --success: #28a745;
    --info: #17a2b8;
    --warning: #ffffff;
    --danger: #dc3545;
    --light: #f8f9fa;
    --dark: #343a40;
    --breakpoint-xs: 0;
    --breakpoint-sm: 576px;
    --breakpoint-md: 768px;
    --breakpoint-lg: 992px;
    --breakpoint-xl: 1200px;
    --font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI",
        Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif,
        "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol",
        "Noto Color Emoji";
    --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas,
        "Liberation Mono", "Courier New", monospace;
}

*,
*::before,
*::after {
    box-sizing: border-box;
}

html {
    font-family: sans-serif;
    line-height: 1.15;
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}

article,
aside,
figcaption,
figure,
footer,
header,
hgroup,
main,
navv,
section {
    display: block;
    padding: 10px;
}

body {
    margin: 0;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
        "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji",
        "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    text-align: left;
    background-color: #fff;
}

[tabindex="-1"]:focus:not(:focus-visible) {
    outline: 0 !important;
}

hr {
    box-sizing: content-box;
    height: 0;
    overflow: visible;
}

h1,
h2,
h3,
h4,
h5,
h6 {
    margin-top: 0;
    margin-bottom: 0.5rem;
}

p {
    margin-top: 0;
    margin-bottom: 1rem;
}

abbr[title],
abbr[data-original-title] {
    text-decoration: underline;
    -webkit-text-decoration: underline dotted;
    text-decoration: underline dotted;
    cursor: help;
    border-bottom: 0;
    -webkit-text-decoration-skip-ink: none;
    text-decoration-skip-ink: none;
}

address {
    margin-bottom: 1rem;
    font-style: normal;
    line-height: inherit;
}

ol,
ul,
dl {
    margin-top: 0;
    margin-bottom: 1rem;
}

ol ol,
ul ul,
ol ul,
ul ol {
    margin-bottom: 0;
}

dt {
    font-weight: 700;
}

dd {
    margin-bottom: 0.5rem;
    margin-left: 0;
}

blockquote {
    margin: 0 0 1rem;
}

b,
strong {
    font-weight: bolder;
    color: black;
}

c,
strong {
    font-weight: bolder;
    color: white;
}

small {
    font-size: 80%;
}

sub,
sup {
    position: relative;
    font-size: 75%;
    line-height: 0;
    vertical-align: baseline;
}

sub {
    bottom: -0.25em;
}

sup {
    top: -0.5em;
}

a {
    color: ##ffffff;
    text-decoration: none;
    background-color: transparent;
}
a:hover {
    color: #ba6600;
    text-decoration: underline;
}

a:not([href]) {
    color: inherit;
    text-decoration: none;
}
a:not([href]):hover {
    color: inherit;
    text-decoration: none;
}

pre,
code,
kbd,
samp {
    font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono",
        "Courier New", monospace;
    font-size: 1em;
}

pre {
    margin-top: 0;
    margin-bottom: 1rem;
    overflow: auto;
}

figure {
    margin: 0 0 1rem;
}

img {
    vertical-align: middle;
    border-style: none;
}

svg {
    overflow: hidden;
    vertical-align: middle;
}

table {
    border-collapse: collapse;
}

caption {
    padding-top: 0.75rem;
    padding-bottom: 0.75rem;
    color: #6c757d;
    text-align: left;
    caption-side: bottom;
}

th {
    text-align: inherit;
}

label {
    display: inline-block;
    margin-bottom: 0.5rem;
}

button {
    border-radius: 0;
}

button:focus {
    outline: 1px dotted;
    outline: 5px auto -webkit-focus-ring-color;
}

input,
button,
select,
optgroup,
textarea {
    margin: 10px 15px;
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
}

button,
input {
    overflow: visible;
}

button,
select {
    text-transform: none;
}

select {
    word-wrap: normal;
}

button,
[type="button"],
[type="reset"],
[type="submit"] {
    -webkit-appearance: button;
}

button:not(:disabled),
[type="button"]:not(:disabled),
[type="reset"]:not(:disabled),
[type="submit"]:not(:disabled) {
    cursor: pointer;
}

button::-moz-focus-inner,
[type="button"]::-moz-focus-inner,
[type="reset"]::-moz-focus-inner,
[type="submit"]::-moz-focus-inner {
    padding: 0;
    border-style: none;
}

input[type="radio"],
input[type="checkbox"] {
    box-sizing: border-box;
    padding: 0;
}

input[type="date"],
input[type="time"],
input[type="datetime-local"],
input[type="month"] {
    -webkit-appearance: listbox;
}

textarea {
    overflow: auto;
    resize: vertical;
}

fieldset {
    min-width: 0;
    padding: 0;
    margin: 0;
    border: 0;
}

legend {
    display: block;
    width: 100%;
    max-width: 100%;
    padding: 0;
    margin-bottom: 0.5rem;
    font-size: 1.5rem;
    line-height: inherit;
    color: inherit;
    white-space: normal;
}
@media (max-width: 1200px) {
    legend {
        font-size: calc(1.275rem + 0.3vw);
    }
}

progress {
    vertical-align: baseline;
}

[type="number"]::-webkit-inner-spin-button,
[type="number"]::-webkit-outer-spin-button {
    height: auto;
}

[type="search"] {
    outline-offset: -2px;
    -webkit-appearance: none;
}

[type="search"]::-webkit-search-decoration {
    -webkit-appearance: none;
}

::-webkit-file-upload-button {
    font: inherit;
    -webkit-appearance: button;
}

output {
    display: inline-block;
}

summary {
    display: list-item;
    cursor: pointer;
}

template {
    display: none;
}

[hidden] {
    display: none !important;
}

h1,
h2,
h3,
h4,
h5,
h6,
.h1,
.h2,
.h3,
.h4,
.h5,
.h6 {
    margin-bottom: 0.5rem;
    font-weight: 500;
    line-height: 1.2;
}

h1,
.h1 {
    font-size: 2.5rem;
}
@media (max-width: 1200px) {
    h1,
    .h1 {
        font-size: calc(1.375rem + 1.5vw);
    }
}

h2,
.h2 {
    font-size: 2rem;
}
@media (max-width: 1200px) {
    h2,
    .h2 {
        font-size: calc(1.325rem + 0.9vw);
    }
}

h3,
.h3 {
    font-size: 1.75rem;
}
@media (max-width: 1200px) {
    h3,
    .h3 {
        font-size: calc(1.3rem + 0.6vw);
    }
}

h4,
.h4 {
    font-size: 1.5rem;
}
@media (max-width: 1200px) {
    h4,
    .h4 {
        font-size: calc(1.275rem + 0.3vw);
    }
}

h5,
.h5 {
    font-size: 1.25rem;
}

h6,
.h6 {
    font-size: 1rem;
}

.lead {
    font-size: 1.25rem;
    font-weight: 300;
}

.display-1 {
    font-size: 6rem;
    font-weight: 300;
    line-height: 1.2;
}
@media (max-width: 1200px) {
    .display-1 {
        font-size: calc(1.725rem + 5.7vw);
    }
}

.display-2 {
    font-size: 5.5rem;
    font-weight: 300;
    line-height: 1.2;
}
@media (max-width: 1200px) {
    .display-2 {
        font-size: calc(1.675rem + 5.1vw);
    }
}

.display-3 {
    font-size: 4.5rem;
    font-weight: 300;
    line-height: 1.2;
}
@media (max-width: 1200px) {
    .display-3 {
        font-size: calc(1.575rem + 3.9vw);
    }
}

.display-4 {
    font-size: 3.5rem;
    font-weight: 300;
    line-height: 1.2;
}
@media (max-width: 1200px) {
    .display-4 {
        font-size: calc(1.475rem + 2.7vw);
    }
}

hr {
    margin-top: 1rem;
    margin-bottom: 1rem;
    border: 0;
    border-top: 1px solid rgba(0, 0, 0, 0.1);
}

small,
.small {
    font-size: 80%;
    font-weight: 400;
}

mark,
.mark {
    padding: 0.2em;
    background-color: #fcf8e3;
}

.list-unstyled {
    padding-left: 0;
    list-style: none;
}

.list-inline {
    padding-left: 0;
    list-style: none;
}

.list-inline-item {
    display: inline-block;
}
.list-inline-item:not(:last-child) {
    margin-right: 0.5rem;
}

.initialism {
    font-size: 90%;
    text-transform: uppercase;
}

.blockquote {
    margin-bottom: 1rem;
    font-size: 1.25rem;
}

.blockquote-footer {
    display: block;
    font-size: 80%;
    color: #6c757d;
}
.blockquote-footer::before {
    content: "\2014\00A0";
}

.img-fluid {
    max-width: 100%;
    height: auto;
}
.img-fluid2 {
    width: 100%;
    height: auto;
}

.img-thumbnail {
    padding: 0.25rem;
    background-color: #fff;
    border: 1px solid #dee2e6;
    border-radius: 0.25rem;
    max-width: 100%;
    height: auto;
}

.figure {
    display: inline-block;
}

.figure-img {
    margin-bottom: 0.5rem;
    line-height: 1;
}

.figure-caption {
    font-size: 90%;
    color: #6c757d;
}

code {
    font-size: 87.5%;
    color: #e83e8c;
    word-wrap: break-word;
}
a > code {
    color: inherit;
}

kbd {
    padding: 0.2rem 0.4rem;
    font-size: 87.5%;
    color: #fff;
    background-color: #212529;
    border-radius: 0.2rem;
}
kbd kbd {
    padding: 0;
    font-size: 100%;
    font-weight: 700;
}

pre {
    display: block;
    font-size: 87.5%;
    color: #212529;
}
pre code {
    font-size: inherit;
    color: inherit;
    word-break: normal;
}

.pre-scrollable {
    max-height: 340px;
    overflow-y: scroll;
}

.containerv {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}
@media (min-width: 576px) {
    .containerv {
        max-width: 540px;
    }
}
@media (min-width: 768px) {
    .containerv {
        max-width: 720px;
    }
}
@media (min-width: 992px) {
    .containerv {
        max-width: 960px;
    }
}
@media (min-width: 1200px) {
    .containerv {
        max-width: 1140px;
    }
}

.containerv-fluid,
.containerv-sm,
.containerv-md,
.containerv-lg,
.containerv-xl {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}

@media (min-width: 576px) {
    .containerv,
    .containerv-sm {
        max-width: 540px;
    }
}

@media (min-width: 768px) {
    .containerv,
    .containerv-sm,
    .containerv-md {
        max-width: 720px;
    }
}

@media (min-width: 992px) {
    .containerv,
    .containerv-sm,
    .containerv-md,
    .containerv-lg {
        max-width: 960px;
    }
}

@media (min-width: 1200px) {
    .containerv,
    .containerv-sm,
    .containerv-md,
    .containerv-lg,
    .containerv-xl {
        max-width: 1140px;
    }
}

.row {
    display: flex;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
}

.no-gutters {
    margin-right: 0;
    margin-left: 0;
}
.no-gutters > .col,
.no-gutters > [class*="col-"] {
    padding-right: 0;
    padding-left: 0;
}

.col-1,
.col-2,
.col-3,
.col-4,
.col-5,
.col-6,
.col-7,
.col-8,
.col-9,
.col-10,
.col-11,
.col-12,
.col,
.col-auto,
.col-sm-1,
.col-sm-2,
.col-sm-3,
.col-sm-4,
.col-sm-5,
.col-sm-6,
.col-sm-7,
.col-sm-8,
.col-sm-9,
.col-sm-10,
.col-sm-11,
.col-sm-12,
.col-sm,
.col-sm-auto,
.col-md-1,
.col-md-2,
.col-md-3,
.col-md-4,
.col-md-5,
.col-md-6,
.col-md-7,
.col-md-8,
.col-md-9,
.col-md-10,
.col-md-11,
.col-md-12,
.col-md,
.col-md-auto,
.col-lg-1,
.col-lg-2,
.col-lg-3,
.col-lg-4,
.col-lg-5,
.col-lg-6,
.col-lg-7,
.col-lg-8,
.col-lg-9,
.col-lg-10,
.col-lg-11,
.col-lg-12,
.col-lg,
.col-lg-auto,
.col-xl-1,
.col-xl-2,
.col-xl-3,
.col-xl-4,
.col-xl-5,
.col-xl-6,
.col-xl-7,
.col-xl-8,
.col-xl-9,
.col-xl-10,
.col-xl-11,
.col-xl-12,
.col-xl,
.col-xl-auto {
    position: relative;
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
}

.col {
    flex-basis: 0;
    flex-grow: 1;
    max-width: 100%;
}

.row-cols-1 > * {
    flex: 0 0 100%;
    max-width: 100%;
}

.row-cols-2 > * {
    flex: 0 0 50%;
    max-width: 50%;
}

.row-cols-3 > * {
    flex: 0 0 33.33333%;
    max-width: 33.33333%;
}

.row-cols-4 > * {
    flex: 0 0 25%;
    max-width: 25%;
}

.row-cols-5 > * {
    flex: 0 0 20%;
    max-width: 20%;
}

.row-cols-6 > * {
    flex: 0 0 16.66667%;
    max-width: 16.66667%;
}

.col-auto {
    flex: 0 0 auto;
    width: auto;
    max-width: 100%;
}

.col-1 {
    flex: 0 0 8.33333%;
    max-width: 8.33333%;
}

.col-2 {
    flex: 0 0 16.66667%;
    max-width: 16.66667%;
}

.col-3 {
    flex: 0 0 45%;
    max-width: max-content;
}

.col-4 {
    flex: 0 0 33.33333%;
    max-width: 33.33333%;
}

.col-5 {
    flex: 0 0 41.66667%;
    max-width: 41.66667%;
}

.col-6 {
    flex: 0 0 50%;
    max-width: 100%;
}

.col-7 {
    flex: 0 0 58.33333%;
    max-width: 58.33333%;
}

.col-8 {
    flex: 0 0 66.66667%;
    max-width: 66.66667%;
}

.col-9 {
    flex: 0 0 75%;
    max-width: 75%;
}

.col-10 {
    flex: 0 0 83.33333%;
    max-width: 83.33333%;
}

.col-11 {
    flex: 0 0 91.66667%;
    max-width: 91.66667%;
}

.col-12 {
    flex: 0 0 100%;
    max-width: 100%;
}

.order-first {
    order: -1;
}

.order-last {
    order: 13;
}

.order-0 {
    order: 0;
}

.order-1 {
    order: 1;
}

.order-2 {
    order: 2;
}

.order-3 {
    order: 3;
}

.order-4 {
    order: 4;
}

.order-5 {
    order: 5;
}

.order-6 {
    order: 6;
}

.order-7 {
    order: 7;
}

.order-8 {
    order: 8;
}

.order-9 {
    order: 9;
}

.order-10 {
    order: 10;
}

.order-11 {
    order: 11;
}

.order-12 {
    order: 12;
}

.offset-1 {
    margin-left: 8.33333%;
}

.offset-2 {
    margin-left: 16.66667%;
}

.offset-3 {
    margin-left: 25%;
}

.offset-4 {
    margin-left: 33.33333%;
}

.offset-5 {
    margin-left: 41.66667%;
}

.offset-6 {
    margin-left: 50%;
}

.offset-7 {
    margin-left: 58.33333%;
}

.offset-8 {
    margin-left: 66.66667%;
}

.offset-9 {
    margin-left: 75%;
}

.offset-10 {
    margin-left: 83.33333%;
}

.offset-11 {
    margin-left: 91.66667%;
}

@media (min-width: 576px) {
    .col-sm {
        flex-basis: 0;
        flex-grow: 1;
        max-width: 100%;
    }
    .row-cols-sm-1 > * {
        flex: 0 0 100%;
        max-width: 100%;
    }
    .row-cols-sm-2 > * {
        flex: 0 0 50%;
        max-width: 50%;
    }
    .row-cols-sm-3 > * {
        flex: 0 0 33.33333%;
        max-width: 33.33333%;
    }
    .row-cols-sm-4 > * {
        flex: 0 0 25%;
        max-width: 25%;
    }
    .row-cols-sm-5 > * {
        flex: 0 0 20%;
        max-width: 20%;
    }
    .row-cols-sm-6 > * {
        flex: 0 0 16.66667%;
        max-width: 16.66667%;
    }
    .col-sm-auto {
        flex: 0 0 auto;
        width: auto;
        max-width: 100%;
    }
    .col-sm-1 {
        flex: 0 0 8.33333%;
        max-width: 8.33333%;
    }
    .col-sm-2 {
        flex: 0 0 16.66667%;
        max-width: 16.66667%;
    }
    .col-sm-3 {
        flex: 0 0 25%;
        max-width: 25%;
    }
    .col-sm-4 {
        flex: 0 0 33.33333%;
        max-width: 33.33333%;
    }
    .col-sm-5 {
        flex: 0 0 41.66667%;
        max-width: 41.66667%;
    }
    .col-sm-6 {
        flex: 0 0 50%;
        max-width: 50%;
    }
    .col-sm-7 {
        flex: 0 0 58.33333%;
        max-width: 58.33333%;
    }
    .col-sm-8 {
        flex: 0 0 66.66667%;
        max-width: 66.66667%;
    }
    .col-sm-9 {
        flex: 0 0 75%;
        max-width: 75%;
    }
    .col-sm-10 {
        flex: 0 0 83.33333%;
        max-width: 83.33333%;
    }
    .col-sm-11 {
        flex: 0 0 91.66667%;
        max-width: 91.66667%;
    }
    .col-sm-12 {
        flex: 0 0 100%;
        max-width: 100%;
    }
    .order-sm-first {
        order: -1;
    }
    .order-sm-last {
        order: 13;
    }
    .order-sm-0 {
        order: 0;
    }
    .order-sm-1 {
        order: 1;
    }
    .order-sm-2 {
        order: 2;
    }
    .order-sm-3 {
        order: 3;
    }
    .order-sm-4 {
        order: 4;
    }
    .order-sm-5 {
        order: 5;
    }
    .order-sm-6 {
        order: 6;
    }
    .order-sm-7 {
        order: 7;
    }
    .order-sm-8 {
        order: 8;
    }
    .order-sm-9 {
        order: 9;
    }
    .order-sm-10 {
        order: 10;
    }
    .order-sm-11 {
        order: 11;
    }
    .order-sm-12 {
        order: 12;
    }
    .offset-sm-0 {
        margin-left: 0;
    }
    .offset-sm-1 {
        margin-left: 8.33333%;
    }
    .offset-sm-2 {
        margin-left: 16.66667%;
    }
    .offset-sm-3 {
        margin-left: 25%;
    }
    .offset-sm-4 {
        margin-left: 33.33333%;
    }
    .offset-sm-5 {
        margin-left: 41.66667%;
    }
    .offset-sm-6 {
        margin-left: 50%;
    }
    .offset-sm-7 {
        margin-left: 58.33333%;
    }
    .offset-sm-8 {
        margin-left: 66.66667%;
    }
    .offset-sm-9 {
        margin-left: 75%;
    }
    .offset-sm-10 {
        margin-left: 83.33333%;
    }
    .offset-sm-11 {
        margin-left: 91.66667%;
    }
}

@media (min-width: 768px) {
    .col-md {
        flex-basis: 0;
        flex-grow: 1;
        max-width: 100%;
    }
    .row-cols-md-1 > * {
        flex: 0 0 100%;
        max-width: 100%;
    }
    .row-cols-md-2 > * {
        flex: 0 0 50%;
        max-width: 50%;
    }
    .row-cols-md-3 > * {
        flex: 0 0 33.33333%;
        max-width: 33.33333%;
    }
    .row-cols-md-4 > * {
        flex: 0 0 25%;
        max-width: 25%;
    }
    .row-cols-md-5 > * {
        flex: 0 0 20%;
        max-width: 20%;
    }
    .row-cols-md-6 > * {
        flex: 0 0 16.66667%;
        max-width: 16.66667%;
    }
    .col-md-auto {
        flex: 0 0 auto;
        width: auto;
        max-width: 100%;
    }
    .col-md-1 {
        flex: 0 0 8.33333%;
        max-width: 8.33333%;
    }
    .col-md-2 {
        flex: 0 0 16.66667%;
        max-width: 16.66667%;
    }
    .col-md-3 {
        flex: 0 0 25%;
        max-width: 25%;
    }
    .col-md-4 {
        flex: 0 0 33.33333%;
        max-width: 33.33333%;
    }
    .col-md-5 {
        flex: 0 0 41.66667%;
        max-width: 41.66667%;
    }
    .col-md-6 {
        flex: 0 0 50%;
        max-width: 50%;
    }
    .col-md-7 {
        flex: 0 0 58.33333%;
        max-width: 58.33333%;
    }
    .col-md-8 {
        flex: 0 0 66.66667%;
        max-width: 66.66667%;
    }
    .col-md-9 {
        flex: 0 0 75%;
        max-width: 75%;
    }
    .col-md-10 {
        flex: 0 0 83.33333%;
        max-width: 83.33333%;
    }
    .col-md-11 {
        flex: 0 0 91.66667%;
        max-width: 91.66667%;
    }
    .col-md-12 {
        flex: 0 0 100%;
        max-width: 100%;
    }
    .order-md-first {
        order: -1;
    }
    .order-md-last {
        order: 13;
    }
    .order-md-0 {
        order: 0;
    }
    .order-md-1 {
        order: 1;
    }
    .order-md-2 {
        order: 2;
    }
    .order-md-3 {
        order: 3;
    }
    .order-md-4 {
        order: 4;
    }
    .order-md-5 {
        order: 5;
    }
    .order-md-6 {
        order: 6;
    }
    .order-md-7 {
        order: 7;
    }
    .order-md-8 {
        order: 8;
    }
    .order-md-9 {
        order: 9;
    }
    .order-md-10 {
        order: 10;
    }
    .order-md-11 {
        order: 11;
    }
    .order-md-12 {
        order: 12;
    }
    .offset-md-0 {
        margin-left: 0;
    }
    .offset-md-1 {
        margin-left: 8.33333%;
    }
    .offset-md-2 {
        margin-left: 16.66667%;
    }
    .offset-md-3 {
        margin-left: 25%;
    }
    .offset-md-4 {
        margin-left: 33.33333%;
    }
    .offset-md-5 {
        margin-left: 41.66667%;
    }
    .offset-md-6 {
        margin-left: 50%;
    }
    .offset-md-7 {
        margin-left: 58.33333%;
    }
    .offset-md-8 {
        margin-left: 66.66667%;
    }
    .offset-md-9 {
        margin-left: 75%;
    }
    .offset-md-10 {
        margin-left: 83.33333%;
    }
    .offset-md-11 {
        margin-left: 91.66667%;
    }
}

@media (min-width: 992px) {
    .col-lg {
        flex-basis: 0;
        flex-grow: 1;
        max-width: 100%;
    }
    .row-cols-lg-1 > * {
        flex: 0 0 100%;
        max-width: 100%;
    }
    .row-cols-lg-2 > * {
        flex: 0 0 50%;
        max-width: 50%;
    }
    .row-cols-lg-3 > * {
        flex: 0 0 33.33333%;
        max-width: 33.33333%;
    }
    .row-cols-lg-4 > * {
        flex: 0 0 25%;
        max-width: 25%;
    }
    .row-cols-lg-5 > * {
        flex: 0 0 20%;
        max-width: 20%;
    }
    .row-cols-lg-6 > * {
        flex: 0 0 16.66667%;
        max-width: 16.66667%;
    }
    .col-lg-auto {
        flex: 0 0 auto;
        width: auto;
        max-width: 100%;
    }
    .col-lg-1 {
        flex: 0 0 8.33333%;
        max-width: 8.33333%;
    }
    .col-lg-2 {
        flex: 0 0 16.66667%;
        max-width: 16.66667%;
    }
    .col-lg-3 {
        flex: 0 0 25%;
        max-width: 25%;
    }
    .col-lg-4 {
        flex: 0 0 33.33333%;
        max-width: 33.33333%;
    }
    .col-lg-5 {
        flex: 0 0 41.66667%;
        max-width: 41.66667%;
    }
    .col-lg-6 {
        flex: 0 0 50%;
        max-width: 50%;
    }
    .col-lg-7 {
        flex: 0 0 58.33333%;
        max-width: 58.33333%;
    }
    .col-lg-8 {
        flex: 0 0 66.66667%;
        max-width: 66.66667%;
    }
    .col-lg-9 {
        flex: 0 0 75%;
        max-width: 75%;
    }
    .col-lg-10 {
        flex: 0 0 83.33333%;
        max-width: 83.33333%;
    }
    .col-lg-11 {
        flex: 0 0 91.66667%;
        max-width: 91.66667%;
    }
    .col-lg-12 {
        flex: 0 0 100%;
        max-width: 100%;
    }
    .order-lg-first {
        order: -1;
    }
    .order-lg-last {
        order: 13;
    }
    .order-lg-0 {
        order: 0;
    }
    .order-lg-1 {
        order: 1;
    }
    .order-lg-2 {
        order: 2;
    }
    .order-lg-3 {
        order: 3;
    }
    .order-lg-4 {
        order: 4;
    }
    .order-lg-5 {
        order: 5;
    }
    .order-lg-6 {
        order: 6;
    }
    .order-lg-7 {
        order: 7;
    }
    .order-lg-8 {
        order: 8;
    }
    .order-lg-9 {
        order: 9;
    }
    .order-lg-10 {
        order: 10;
    }
    .order-lg-11 {
        order: 11;
    }
    .order-lg-12 {
        order: 12;
    }
    .offset-lg-0 {
        margin-left: 0;
    }
    .offset-lg-1 {
        margin-left: 8.33333%;
    }
    .offset-lg-2 {
        margin-left: 16.66667%;
    }
    .offset-lg-3 {
        margin-left: 25%;
    }
    .offset-lg-4 {
        margin-left: 33.33333%;
    }
    .offset-lg-5 {
        margin-left: 41.66667%;
    }
    .offset-lg-6 {
        margin-left: 50%;
    }
    .offset-lg-7 {
        margin-left: 58.33333%;
    }
    .offset-lg-8 {
        margin-left: 66.66667%;
    }
    .offset-lg-9 {
        margin-left: 75%;
    }
    .offset-lg-10 {
        margin-left: 83.33333%;
    }
    .offset-lg-11 {
        margin-left: 91.66667%;
    }
}

@media (min-width: 1200px) {
    .col-xl {
        flex-basis: 0;
        flex-grow: 1;
        max-width: 100%;
    }
    .row-cols-xl-1 > * {
        flex: 0 0 100%;
        max-width: 100%;
    }
    .row-cols-xl-2 > * {
        flex: 0 0 50%;
        max-width: 50%;
    }
    .row-cols-xl-3 > * {
        flex: 0 0 33.33333%;
        max-width: 33.33333%;
    }
    .row-cols-xl-4 > * {
        flex: 0 0 25%;
        max-width: 25%;
    }
    .row-cols-xl-5 > * {
        flex: 0 0 20%;
        max-width: 20%;
    }
    .row-cols-xl-6 > * {
        flex: 0 0 16.66667%;
        max-width: 16.66667%;
    }
    .col-xl-auto {
        flex: 0 0 auto;
        width: auto;
        max-width: 100%;
    }
    .col-xl-1 {
        flex: 0 0 8.33333%;
        max-width: 8.33333%;
    }
    .col-xl-2 {
        flex: 0 0 16.66667%;
        max-width: 16.66667%;
    }
    .col-xl-3 {
        flex: 0 0 25%;
        max-width: 25%;
    }
    .col-xl-4 {
        flex: 0 0 33.33333%;
        max-width: 33.33333%;
    }
    .col-xl-5 {
        flex: 0 0 41.66667%;
        max-width: 41.66667%;
    }
    .col-xl-6 {
        flex: 0 0 50%;
        max-width: 50%;
    }
    .col-xl-7 {
        flex: 0 0 58.33333%;
        max-width: 58.33333%;
    }
    .col-xl-8 {
        flex: 0 0 66.66667%;
        max-width: 66.66667%;
    }
    .col-xl-9 {
        flex: 0 0 75%;
        max-width: 75%;
    }
    .col-xl-10 {
        flex: 0 0 83.33333%;
        max-width: 83.33333%;
    }
    .col-xl-11 {
        flex: 0 0 91.66667%;
        max-width: 91.66667%;
    }
    .col-xl-12 {
        flex: 0 0 100%;
        max-width: 100%;
    }
    .order-xl-first {
        order: -1;
    }
    .order-xl-last {
        order: 13;
    }
    .order-xl-0 {
        order: 0;
    }
    .order-xl-1 {
        order: 1;
    }
    .order-xl-2 {
        order: 2;
    }
    .order-xl-3 {
        order: 3;
    }
    .order-xl-4 {
        order: 4;
    }
    .order-xl-5 {
        order: 5;
    }
    .order-xl-6 {
        order: 6;
    }
    .order-xl-7 {
        order: 7;
    }
    .order-xl-8 {
        order: 8;
    }
    .order-xl-9 {
        order: 9;
    }
    .order-xl-10 {
        order: 10;
    }
    .order-xl-11 {
        order: 11;
    }
    .order-xl-12 {
        order: 12;
    }
    .offset-xl-0 {
        margin-left: 0;
    }
    .offset-xl-1 {
        margin-left: 8.33333%;
    }
    .offset-xl-2 {
        margin-left: 16.66667%;
    }
    .offset-xl-3 {
        margin-left: 25%;
    }
    .offset-xl-4 {
        margin-left: 33.33333%;
    }
    .offset-xl-5 {
        margin-left: 41.66667%;
    }
    .offset-xl-6 {
        margin-left: 50%;
    }
    .offset-xl-7 {
        margin-left: 58.33333%;
    }
    .offset-xl-8 {
        margin-left: 66.66667%;
    }
    .offset-xl-9 {
        margin-left: 75%;
    }
    .offset-xl-10 {
        margin-left: 83.33333%;
    }
    .offset-xl-11 {
        margin-left: 91.66667%;
    }
}

.table {
    width: 100%;
    margin-bottom: 1rem;
    color: #212529;
}
.table th,
.table td {
    padding: 0.75rem;
    vertical-align: top;
    border-top: 1px solid #dee2e6;
}
.table thead th {
    vertical-align: bottom;
    border-bottom: 2px solid #dee2e6;
}
.table tbody + tbody {
    border-top: 2px solid #dee2e6;
}

.table-sm th,
.table-sm td {
    padding: 0.3rem;
}

.table-bordered {
    border: 1px solid #dee2e6;
}
.table-bordered th,
.table-bordered td {
    border: 1px solid #dee2e6;
}
.table-bordered thead th,
.table-bordered thead td {
    border-bottom-width: 2px;
}

.table-borderless th,
.table-borderless td,
.table-borderless thead th,
.table-borderless tbody + tbody {
    border: 0;
}

.table-striped tbody tr:nth-of-type(odd) {
    background-color: rgba(0, 0, 0, 0.05);
}

.table-hover tbody tr:hover {
    color: #212529;
    background-color: rgba(0, 0, 0, 0.075);
}

.table-primary,
.table-primary > th,
.table-primary > td {
    background-color: #ffe0ba;
}

.table-primary th,
.table-primary td,
.table-primary thead th,
.table-primary tbody + tbody {
    border-color: #ffc57e;
}

.table-hover .table-primary:hover {
    background-color: #ffd5a1;
}
.table-hover .table-primary:hover > td,
.table-hover .table-primary:hover > th {
    background-color: #ffd5a1;
}

.table-secondary,
.table-secondary > th,
.table-secondary > td {
    background-color: #ecc7c6;
}

.table-secondary th,
.table-secondary td,
.table-secondary thead th,
.table-secondary tbody + tbody {
    border-color: #db9895;
}

.table-hover .table-secondary:hover {
    background-color: #e6b4b3;
}
.table-hover .table-secondary:hover > td,
.table-hover .table-secondary:hover > th {
    background-color: #e6b4b3;
}

.table-success,
.table-success > th,
.table-success > td {
    background-color: #c3e6cb;
}

.table-success th,
.table-success td,
.table-success thead th,
.table-success tbody + tbody {
    border-color: #8fd19e;
}

.table-hover .table-success:hover {
    background-color: #b1dfbb;
}
.table-hover .table-success:hover > td,
.table-hover .table-success:hover > th {
    background-color: #b1dfbb;
}

.table-info,
.table-info > th,
.table-info > td {
    background-color: #bee5eb;
}

.table-info th,
.table-info td,
.table-info thead th,
.table-info tbody + tbody {
    border-color: #86cfda;
}

.table-hover .table-info:hover {
    background-color: #abdde5;
}
.table-hover .table-info:hover > td,
.table-hover .table-info:hover > th {
    background-color: #abdde5;
}

.table-warning,
.table-warning > th,
.table-warning > td {
    background-color: #ffeeba;
}

.table-warning th,
.table-warning td,
.table-warning thead th,
.table-warning tbody + tbody {
    border-color: #ffdf7e;
}

.table-hover .table-warning:hover {
    background-color: #ffe8a1;
}
.table-hover .table-warning:hover > td,
.table-hover .table-warning:hover > th {
    background-color: #ffe8a1;
}

.table-danger,
.table-danger > th,
.table-danger > td {
    background-color: #f5c6cb;
}

.table-danger th,
.table-danger td,
.table-danger thead th,
.table-danger tbody + tbody {
    border-color: #ed969e;
}

.table-hover .table-danger:hover {
    background-color: #f1b0b7;
}
.table-hover .table-danger:hover > td,
.table-hover .table-danger:hover > th {
    background-color: #f1b0b7;
}

.table-light,
.table-light > th,
.table-light > td {
    background-color: #fdfdfe;
}

.table-light th,
.table-light td,
.table-light thead th,
.table-light tbody + tbody {
    border-color: #fbfcfc;
}

.table-hover .table-light:hover {
    background-color: #ececf6;
}
.table-hover .table-light:hover > td,
.table-hover .table-light:hover > th {
    background-color: #ececf6;
}

.table-dark,
.table-dark > th,
.table-dark > td {
    background-color: #c6c8ca;
}

.table-dark th,
.table-dark td,
.table-dark thead th,
.table-dark tbody + tbody {
    border-color: #95999c;
}

.table-hover .table-dark:hover {
    background-color: #b9bbbe;
}
.table-hover .table-dark:hover > td,
.table-hover .table-dark:hover > th {
    background-color: #b9bbbe;
}

.table-active,
.table-active > th,
.table-active > td {
    background-color: rgba(0, 0, 0, 0.075);
}

.table-hover .table-active:hover {
    background-color: rgba(0, 0, 0, 0.075);
}
.table-hover .table-active:hover > td,
.table-hover .table-active:hover > th {
    background-color: rgba(0, 0, 0, 0.075);
}

.table .thead-dark th {
    color: #fff;
    background-color: #343a40;
    border-color: #454d55;
}

.table .thead-light th {
    color: #495057;
    background-color: #e9ecef;
    border-color: #dee2e6;
}

.table-dark {
    color: #fff;
    background-color: #343a40;
}
.table-dark th,
.table-dark td,
.table-dark thead th {
    border-color: #454d55;
}
.table-dark.table-bordered {
    border: 0;
}
.table-dark.table-striped tbody tr:nth-of-type(odd) {
    background-color: rgba(255, 255, 255, 0.05);
}
.table-dark.table-hover tbody tr:hover {
    color: #fff;
    background-color: rgba(255, 255, 255, 0.075);
}

@media (max-width: 575.98px) {
    .table-responsive-sm {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }
    .table-responsive-sm > .table-bordered {
        border: 0;
    }
}

@media (max-width: 767.98px) {
    .table-responsive-md {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }
    .table-responsive-md > .table-bordered {
        border: 0;
    }
}

@media (max-width: 991.98px) {
    .table-responsive-lg {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }
    .table-responsive-lg > .table-bordered {
        border: 0;
    }
}

@media (max-width: 1199.98px) {
    .table-responsive-xl {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }
    .table-responsive-xl > .table-bordered {
        border: 0;
    }
}

.table-responsive {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
}
.table-responsive > .table-bordered {
    border: 0;
}

.form-control {
    display: block;
    width: 100%;
    height: calc(1.5em + 0.75rem + 2px);
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
    .form-control {
        transition: none;
    }
}
.form-control::-ms-expand {
    background-color: transparent;
    border: 0;
}
.form-control:-moz-focusring {
    color: transparent;
    text-shadow: 0 0 0 #495057;
}
.form-control:focus {
    color: #495057;
    background-color: #fff;
    border-color: #ffc987;
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(255, 143, 7, 0.25);
}
.form-control::-webkit-input-placeholder {
    color: #6c757d;
    opacity: 1;
}
.form-control::-moz-placeholder {
    color: #6c757d;
    opacity: 1;
}
.form-control:-ms-input-placeholder {
    color: #6c757d;
    opacity: 1;
}
.form-control::-ms-input-placeholder {
    color: #6c757d;
    opacity: 1;
}
.form-control::placeholder {
    color: #6c757d;
    opacity: 1;
}
.form-control:disabled,
.form-control[readonly] {
    background-color: #e9ecef;
    opacity: 1;
}

select.form-control:focus::-ms-value {
    color: #495057;
    background-color: #fff;
}

.form-control-file,
.form-control-range {
    display: block;
    width: 100%;
}

.col-form-label {
    padding-top: calc(0.375rem + 1px);
    padding-bottom: calc(0.375rem + 1px);
    margin-bottom: 0;
    font-size: inherit;
    line-height: 1.5;
}

.col-form-label-lg {
    padding-top: calc(0.5rem + 1px);
    padding-bottom: calc(0.5rem + 1px);
    font-size: 1.25rem;
    line-height: 1.5;
}

.col-form-label-sm {
    padding-top: calc(0.25rem + 1px);
    padding-bottom: calc(0.25rem + 1px);
    font-size: 0.875rem;
    line-height: 1.5;
}

.form-control-plaintext {
    display: block;
    width: 100%;
    padding: 0.375rem 0;
    margin-bottom: 0;
    font-size: 1rem;
    line-height: 1.5;
    color: #212529;
    background-color: transparent;
    border: solid transparent;
    border-width: 1px 0;
}
.form-control-plaintext.form-control-sm,
.form-control-plaintext.form-control-lg {
    padding-right: 0;
    padding-left: 0;
}

.form-control-sm {
    height: calc(1.5em + 0.5rem + 2px);
    padding: 0.25rem 0.5rem;
    font-size: 0.875rem;
    line-height: 1.5;
    border-radius: 0.2rem;
}

.form-control-lg {
    height: calc(1.5em + 1rem + 2px);
    padding: 0.5rem 1rem;
    font-size: 1.25rem;
    line-height: 1.5;
    border-radius: 0.3rem;
}

select.form-control[size],
select.form-control[multiple] {
    height: auto;
}

textarea.form-control {
    height: auto;
}

.form-group {
    margin-bottom: 1rem;
}

.form-text {
    display: block;
    margin-top: 0.25rem;
}

.form-row {
    display: flex;
    flex-wrap: wrap;
    margin-right: -5px;
    margin-left: -5px;
}
.form-row > .col,
.form-row > [class*="col-"] {
    padding-right: 5px;
    padding-left: 5px;
}

.form-check {
    position: relative;
    display: block;
    padding-left: 1.25rem;
}

.form-check-input {
    position: absolute;
    margin-top: 0.3rem;
    margin-left: -1.25rem;
}
.form-check-input[disabled] ~ .form-check-label,
.form-check-input:disabled ~ .form-check-label {
    color: #6c757d;
}

.form-check-label {
    margin-bottom: 0;
}

.form-check-inline {
    display: inline-flex;
    align-items: center;
    padding-left: 0;
    margin-right: 0.75rem;
}
.form-check-inline .form-check-input {
    position: static;
    margin-top: 0;
    margin-right: 0.3125rem;
    margin-left: 0;
}

.valid-feedback {
    display: none;
    width: 100%;
    margin-top: 0.25rem;
    font-size: 80%;
    color: #28a745;
}

.valid-tooltip {
    position: absolute;
    top: 100%;
    z-index: 5;
    display: none;
    max-width: 100%;
    padding: 0.25rem 0.5rem;
    margin-top: 0.1rem;
    font-size: 0.875rem;
    line-height: 1.5;
    color: #fff;
    background-color: rgba(40, 167, 69, 0.9);
    border-radius: 0.25rem;
}

.was-validated :valid ~ .valid-feedback,
.was-validated :valid ~ .valid-tooltip,
.is-valid ~ .valid-feedback,
.is-valid ~ .valid-tooltip {
    display: block;
}

.was-validated .form-control:valid,
.form-control.is-valid {
    border-color: #28a745;
    padding-right: calc(1.5em + 0.75rem);
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath fill='%2328a745' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
    background-repeat: no-repeat;
    background-position: right calc(0.375em + 0.1875rem) center;
    background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
}
.was-validated .form-control:valid:focus,
.form-control.is-valid:focus {
    border-color: #28a745;
    box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
}

.was-validated textarea.form-control:valid,
textarea.form-control.is-valid {
    padding-right: calc(1.5em + 0.75rem);
    background-position: top calc(0.375em + 0.1875rem) right
        calc(0.375em + 0.1875rem);
}

.was-validated .custom-select:valid,
.custom-select.is-valid {
    border-color: #28a745;
    padding-right: calc(0.75em + 2.3125rem);
    background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e")
            no-repeat right 0.75rem center/8px 10px,
        url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath fill='%2328a745' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e")
            #fff no-repeat center right 1.75rem / calc(0.75em + 0.375rem)
            calc(0.75em + 0.375rem);
}
.was-validated .custom-select:valid:focus,
.custom-select.is-valid:focus {
    border-color: #28a745;
    box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
}

.was-validated .form-check-input:valid ~ .form-check-label,
.form-check-input.is-valid ~ .form-check-label {
    color: #28a745;
}

.was-validated .form-check-input:valid ~ .valid-feedback,
.was-validated .form-check-input:valid ~ .valid-tooltip,
.form-check-input.is-valid ~ .valid-feedback,
.form-check-input.is-valid ~ .valid-tooltip {
    display: block;
}

.was-validated .custom-control-input:valid ~ .custom-control-label,
.custom-control-input.is-valid ~ .custom-control-label {
    color: #28a745;
}
.was-validated .custom-control-input:valid ~ .custom-control-label::before,
.custom-control-input.is-valid ~ .custom-control-label::before {
    border-color: #28a745;
}

.was-validated
    .custom-control-input:valid:checked
    ~ .custom-control-label::before,
.custom-control-input.is-valid:checked ~ .custom-control-label::before {
    border-color: #34ce57;
    background-color: #34ce57;
}

.was-validated
    .custom-control-input:valid:focus
    ~ .custom-control-label::before,
.custom-control-input.is-valid:focus ~ .custom-control-label::before {
    box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
}

.was-validated
    .custom-control-input:valid:focus:not(:checked)
    ~ .custom-control-label::before,
.custom-control-input.is-valid:focus:not(:checked)
    ~ .custom-control-label::before {
    border-color: #28a745;
}

.was-validated .custom-file-input:valid ~ .custom-file-label,
.custom-file-input.is-valid ~ .custom-file-label {
    border-color: #28a745;
}

.was-validated .custom-file-input:valid:focus ~ .custom-file-label,
.custom-file-input.is-valid:focus ~ .custom-file-label {
    border-color: #28a745;
    box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
}

.invalid-feedback {
    display: none;
    width: 100%;
    margin-top: 0.25rem;
    font-size: 80%;
    color: #dc3545;
}

.invalid-tooltip {
    position: absolute;
    top: 100%;
    z-index: 5;
    display: none;
    max-width: 100%;
    padding: 0.25rem 0.5rem;
    margin-top: 0.1rem;
    font-size: 0.875rem;
    line-height: 1.5;
    color: #fff;
    background-color: rgba(220, 53, 69, 0.9);
    border-radius: 0.25rem;
}

.was-validated :invalid ~ .invalid-feedback,
.was-validated :invalid ~ .invalid-tooltip,
.is-invalid ~ .invalid-feedback,
.is-invalid ~ .invalid-tooltip {
    display: block;
}

.was-validated .form-control:invalid,
.form-control.is-invalid {
    border-color: #dc3545;
    padding-right: calc(1.5em + 0.75rem);
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23dc3545' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");
    background-repeat: no-repeat;
    background-position: right calc(0.375em + 0.1875rem) center;
    background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
}
.was-validated .form-control:invalid:focus,
.form-control.is-invalid:focus {
    border-color: #dc3545;
    box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
}

.was-validated textarea.form-control:invalid,
textarea.form-control.is-invalid {
    padding-right: calc(1.5em + 0.75rem);
    background-position: top calc(0.375em + 0.1875rem) right
        calc(0.375em + 0.1875rem);
}

.was-validated .custom-select:invalid,
.custom-select.is-invalid {
    border-color: #dc3545;
    padding-right: calc(0.75em + 2.3125rem);
    background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e")
            no-repeat right 0.75rem center/8px 10px,
        url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23dc3545' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e")
            #fff no-repeat center right 1.75rem / calc(0.75em + 0.375rem)
            calc(0.75em + 0.375rem);
}
.was-validated .custom-select:invalid:focus,
.custom-select.is-invalid:focus {
    border-color: #dc3545;
    box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
}

.was-validated .form-check-input:invalid ~ .form-check-label,
.form-check-input.is-invalid ~ .form-check-label {
    color: #dc3545;
}

.was-validated .form-check-input:invalid ~ .invalid-feedback,
.was-validated .form-check-input:invalid ~ .invalid-tooltip,
.form-check-input.is-invalid ~ .invalid-feedback,
.form-check-input.is-invalid ~ .invalid-tooltip {
    display: block;
}

.was-validated .custom-control-input:invalid ~ .custom-control-label,
.custom-control-input.is-invalid ~ .custom-control-label {
    color: #dc3545;
}
.was-validated .custom-control-input:invalid ~ .custom-control-label::before,
.custom-control-input.is-invalid ~ .custom-control-label::before {
    border-color: #dc3545;
}

.was-validated
    .custom-control-input:invalid:checked
    ~ .custom-control-label::before,
.custom-control-input.is-invalid:checked ~ .custom-control-label::before {
    border-color: #e4606d;
    background-color: #e4606d;
}

.was-validated
    .custom-control-input:invalid:focus
    ~ .custom-control-label::before,
.custom-control-input.is-invalid:focus ~ .custom-control-label::before {
    box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
}

.was-validated
    .custom-control-input:invalid:focus:not(:checked)
    ~ .custom-control-label::before,
.custom-control-input.is-invalid:focus:not(:checked)
    ~ .custom-control-label::before {
    border-color: #dc3545;
}

.was-validated .custom-file-input:invalid ~ .custom-file-label,
.custom-file-input.is-invalid ~ .custom-file-label {
    border-color: #dc3545;
}

.was-validated .custom-file-input:invalid:focus ~ .custom-file-label,
.custom-file-input.is-invalid:focus ~ .custom-file-label {
    border-color: #dc3545;
    box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
}

.form-inline {
    display: flex;
    flex-flow: row wrap;
    align-items: center;
}
.form-inline .form-check {
    width: 100%;
}
@media (min-width: 576px) {
    .form-inline label {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 0;
    }
    .form-inline .form-group {
        display: flex;
        flex: 0 0 auto;
        flex-flow: row wrap;
        align-items: center;
        margin-bottom: 0;
    }
    .form-inline .form-control {
        display: inline-block;
        width: auto;
        vertical-align: middle;
    }
    .form-inline .form-control-plaintext {
        display: inline-block;
    }
    .form-inline .input-group,
    .form-inline .custom-select {
        width: auto;
    }
    .form-inline .form-check {
        display: flex;
        align-items: center;
        justify-content: center;
        width: auto;
        padding-left: 0;
    }
    .form-inline .form-check-input {
        position: relative;
        flex-shrink: 0;
        margin-top: 0;
        margin-right: 0.25rem;
        margin-left: 0;
    }
    .form-inline .custom-control {
        align-items: center;
        justify-content: center;
    }
    .form-inline .custom-control-label {
        margin-bottom: 0;
    }
}

.btn {
    display: inline-block;
    font-weight: 400;
    color: #212529;
    text-align: center;
    vertical-align: middle;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-color: transparent;
    border: 1px solid transparent;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: 0.25rem;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out,
        border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
    .btn {
        transition: none;
    }
}
.btn:hover {
    color: #212529;
    text-decoration: none;
}
.btn:focus,
.btn.focus {
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(255, 143, 7, 0.25);
}
.btn.disabled,
.btn:disabled {
    opacity: 0.65;
}

a.btn.disabled,
fieldset:disabled a.btn {
    pointer-events: none;
}

.btn-primary {
    color: #212529;
    background-color: ##ffffff;
    border-color: ##ffffff;
}
.btn-primary:hover {
    color: #fff;
    background-color: #e07b00;
    border-color: #d37400;
}
.btn-primary:focus,
.btn-primary.focus {
    color: #fff;
    background-color: #e07b00;
    border-color: #d37400;
    box-shadow: 0 0 0 0.2rem rgba(222, 127, 12, 0.5);
}
.btn-primary.disabled,
.btn-primary:disabled {
    color: #212529;
    background-color: ##ffffff;
    border-color: ##ffffff;
}
.btn-primary:not(:disabled):not(.disabled):active,
.btn-primary:not(:disabled):not(.disabled).active,
.show > .btn-primary.dropdown-toggle {
    color: #fff;
    background-color: #d37400;
    border-color: #c66d00;
}
.btn-primary:not(:disabled):not(.disabled):active:focus,
.btn-primary:not(:disabled):not(.disabled).active:focus,
.show > .btn-primary.dropdown-toggle:focus {
    box-shadow: 0 0 0 0.2rem rgba(222, 127, 12, 0.5);
}

.btn-secondary {
    color: #fff;
    background-color: #ba3833;
    border-color: #ba3833;
}
.btn-secondary:hover {
    color: #fff;
    background-color: #9c2f2b;
    border-color: #922c28;
}
.btn-secondary:focus,
.btn-secondary.focus {
    color: #fff;
    background-color: #9c2f2b;
    border-color: #922c28;
    box-shadow: 0 0 0 0.2rem rgba(196, 86, 82, 0.5);
}
.btn-secondary.disabled,
.btn-secondary:disabled {
    color: #fff;
    background-color: #ba3833;
    border-color: #ba3833;
}
.btn-secondary:not(:disabled):not(.disabled):active,
.btn-secondary:not(:disabled):not(.disabled).active,
.show > .btn-secondary.dropdown-toggle {
    color: #fff;
    background-color: #922c28;
    border-color: #882925;
}
.btn-secondary:not(:disabled):not(.disabled):active:focus,
.btn-secondary:not(:disabled):not(.disabled).active:focus,
.show > .btn-secondary.dropdown-toggle:focus {
    box-shadow: 0 0 0 0.2rem rgba(196, 86, 82, 0.5);
}

.btn-success {
    color: #fff;
    background-color: #28a745;
    border-color: #28a745;
}
.btn-success:hover {
    color: #fff;
    background-color: #218838;
    border-color: #1e7e34;
}
.btn-success:focus,
.btn-success.focus {
    color: #fff;
    background-color: #218838;
    border-color: #1e7e34;
    box-shadow: 0 0 0 0.2rem rgba(72, 180, 97, 0.5);
}
.btn-success.disabled,
.btn-success:disabled {
    color: #fff;
    background-color: #28a745;
    border-color: #28a745;
}
.btn-success:not(:disabled):not(.disabled):active,
.btn-success:not(:disabled):not(.disabled).active,
.show > .btn-success.dropdown-toggle {
    color: #fff;
    background-color: #1e7e34;
    border-color: #1c7430;
}
.btn-success:not(:disabled):not(.disabled):active:focus,
.btn-success:not(:disabled):not(.disabled).active:focus,
.show > .btn-success.dropdown-toggle:focus {
    box-shadow: 0 0 0 0.2rem rgba(72, 180, 97, 0.5);
}

.btn-info {
    color: #fff;
    background-color: #17a2b8;
    border-color: #17a2b8;
}
.btn-info:hover {
    color: #fff;
    background-color: #138496;
    border-color: #117a8b;
}
.btn-info:focus,
.btn-info.focus {
    color: #fff;
    background-color: #138496;
    border-color: #117a8b;
    box-shadow: 0 0 0 0.2rem rgba(58, 176, 195, 0.5);
}
.btn-info.disabled,
.btn-info:disabled {
    color: #fff;
    background-color: #17a2b8;
    border-color: #17a2b8;
}
.btn-info:not(:disabled):not(.disabled):active,
.btn-info:not(:disabled):not(.disabled).active,
.show > .btn-info.dropdown-toggle {
    color: #fff;
    background-color: #117a8b;
    border-color: #10707f;
}
.btn-info:not(:disabled):not(.disabled):active:focus,
.btn-info:not(:disabled):not(.disabled).active:focus,
.show > .btn-info.dropdown-toggle:focus {
    box-shadow: 0 0 0 0.2rem rgba(58, 176, 195, 0.5);
}

.btn-warning {
    color: #212529;
    background-color: #ffffff;
    border-color: #ffffff;
}
.btn-warning:hover {
    color: #212529;
    background-color: #e0a800;
    border-color: #d39e00;
}
.btn-warning:focus,
.btn-warning.focus {
    color: #212529;
    background-color: #e0a800;
    border-color: #d39e00;
    box-shadow: 0 0 0 0.2rem rgba(222, 170, 12, 0.5);
}
.btn-warning.disabled,
.btn-warning:disabled {
    color: #212529;
    background-color: #ffffff;
    border-color: #ffffff;
}
.btn-warning:not(:disabled):not(.disabled):active,
.btn-warning:not(:disabled):not(.disabled).active,
.show > .btn-warning.dropdown-toggle {
    color: #212529;
    background-color: #d39e00;
    border-color: #c69500;
}
.btn-warning:not(:disabled):not(.disabled):active:focus,
.btn-warning:not(:disabled):not(.disabled).active:focus,
.show > .btn-warning.dropdown-toggle:focus {
    box-shadow: 0 0 0 0.2rem rgba(222, 170, 12, 0.5);
}

.btn-danger {
    color: #fff;
    background-color: #dc3545;
    border-color: #dc3545;
}
.btn-danger:hover {
    color: #fff;
    background-color: #c82333;
    border-color: #bd2130;
}
.btn-danger:focus,
.btn-danger.focus {
    color: #fff;
    background-color: #c82333;
    border-color: #bd2130;
    box-shadow: 0 0 0 0.2rem rgba(225, 83, 97, 0.5);
}
.btn-danger.disabled,
.btn-danger:disabled {
    color: #fff;
    background-color: #dc3545;
    border-color: #dc3545;
}
.btn-danger:not(:disabled):not(.disabled):active,
.btn-danger:not(:disabled):not(.disabled).active,
.show > .btn-danger.dropdown-toggle {
    color: #fff;
    background-color: #bd2130;
    border-color: #b21f2d;
}
.btn-danger:not(:disabled):not(.disabled):active:focus,
.btn-danger:not(:disabled):not(.disabled).active:focus,
.show > .btn-danger.dropdown-toggle:focus {
    box-shadow: 0 0 0 0.2rem rgba(225, 83, 97, 0.5);
}

.btn-light {
    color: #212529;
    background-color: ##ffffff;
    border-color: #f8f9fa;
}

.btn-lightcart {
    color: #212529;
    background-color: #dc3544;
    border-color: #f8f9fa;
}

.btn-light:hover {
    color: #212529;
    background-color: #e2e6ea;
    border-color: #dae0e5;
}
.btn-light:focus,
.btn-light.focus {
    color: #212529;
    background-color: #e2e6ea;
    border-color: #dae0e5;
    box-shadow: 0 0 0 0.2rem rgba(216, 217, 219, 0.5);
}
.btn-light.disabled,
.btn-light:disabled {
    color: #212529;
    background-color: #f8f9fa;
    border-color: #f8f9fa;
}
.btn-light:not(:disabled):not(.disabled):active,
.btn-light:not(:disabled):not(.disabled).active,
.show > .btn-light.dropdown-toggle {
    color: #212529;
    background-color: #dae0e5;
    border-color: #d3d9df;
}
.btn-light:not(:disabled):not(.disabled):active:focus,
.btn-light:not(:disabled):not(.disabled).active:focus,
.show > .btn-light.dropdown-toggle:focus {
    box-shadow: 0 0 0 0.2rem rgba(216, 217, 219, 0.5);
}

.btn-dark {
    color: #fff;
    background-color: #343a40;
    border-color: #343a40;
}
.btn-dark:hover {
    color: #fff;
    background-color: #23272b;
    border-color: #1d2124;
}
.btn-dark:focus,
.btn-dark.focus {
    color: #fff;
    background-color: #23272b;
    border-color: #1d2124;
    box-shadow: 0 0 0 0.2rem rgba(82, 88, 93, 0.5);
}
.btn-dark.disabled,
.btn-dark:disabled {
    color: #fff;
    background-color: #343a40;
    border-color: #343a40;
}
.btn-dark:not(:disabled):not(.disabled):active,
.btn-dark:not(:disabled):not(.disabled).active,
.show > .btn-dark.dropdown-toggle {
    color: #fff;
    background-color: #1d2124;
    border-color: #171a1d;
}
.btn-dark:not(:disabled):not(.disabled):active:focus,
.btn-dark:not(:disabled):not(.disabled).active:focus,
.show > .btn-dark.dropdown-toggle:focus {
    box-shadow: 0 0 0 0.2rem rgba(82, 88, 93, 0.5);
}

.btn-outline-primary {
    color: ##ffffff;
    border-color: ##ffffff;
}
.btn-outline-primary:hover {
    color: #212529;
    background-color: ##ffffff;
    border-color: ##ffffff;
}
.btn-outline-primary:focus,
.btn-outline-primary.focus {
    box-shadow: 0 0 0 0.2rem rgba(255, 143, 7, 0.5);
}
.btn-outline-primary.disabled,
.btn-outline-primary:disabled {
    color: ##ffffff;
    background-color: transparent;
}
.btn-outline-primary:not(:disabled):not(.disabled):active,
.btn-outline-primary:not(:disabled):not(.disabled).active,
.show > .btn-outline-primary.dropdown-toggle {
    color: #212529;
    background-color: ##ffffff;
    border-color: ##ffffff;
}
.btn-outline-primary:not(:disabled):not(.disabled):active:focus,
.btn-outline-primary:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-primary.dropdown-toggle:focus {
    box-shadow: 0 0 0 0.2rem rgba(255, 143, 7, 0.5);
}

.btn-outline-secondary {
    color: #ba3833;
    border-color: #ba3833;
}
.btn-outline-secondary:hover {
    color: #fff;
    background-color: #ba3833;
    border-color: #ba3833;
}
.btn-outline-secondary:focus,
.btn-outline-secondary.focus {
    box-shadow: 0 0 0 0.2rem rgba(186, 56, 51, 0.5);
}
.btn-outline-secondary.disabled,
.btn-outline-secondary:disabled {
    color: #ba3833;
    background-color: transparent;
}
.btn-outline-secondary:not(:disabled):not(.disabled):active,
.btn-outline-secondary:not(:disabled):not(.disabled).active,
.show > .btn-outline-secondary.dropdown-toggle {
    color: #fff;
    background-color: #ba3833;
    border-color: #ba3833;
}
.btn-outline-secondary:not(:disabled):not(.disabled):active:focus,
.btn-outline-secondary:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-secondary.dropdown-toggle:focus {
    box-shadow: 0 0 0 0.2rem rgba(186, 56, 51, 0.5);
}

.btn-outline-success {
    color: #28a745;
    border-color: #28a745;
}
.btn-outline-success:hover {
    color: #fff;
    background-color: #28a745;
    border-color: #28a745;
}
.btn-outline-success:focus,
.btn-outline-success.focus {
    box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
}
.btn-outline-success.disabled,
.btn-outline-success:disabled {
    color: #28a745;
    background-color: transparent;
}
.btn-outline-success:not(:disabled):not(.disabled):active,
.btn-outline-success:not(:disabled):not(.disabled).active,
.show > .btn-outline-success.dropdown-toggle {
    color: #fff;
    background-color: #28a745;
    border-color: #28a745;
}
.btn-outline-success:not(:disabled):not(.disabled):active:focus,
.btn-outline-success:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-success.dropdown-toggle:focus {
    box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
}

.btn-outline-info {
    color: #17a2b8;
    border-color: #17a2b8;
}
.btn-outline-info:hover {
    color: #fff;
    background-color: #17a2b8;
    border-color: #17a2b8;
}
.btn-outline-info:focus,
.btn-outline-info.focus {
    box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5);
}
.btn-outline-info.disabled,
.btn-outline-info:disabled {
    color: #17a2b8;
    background-color: transparent;
}
.btn-outline-info:not(:disabled):not(.disabled):active,
.btn-outline-info:not(:disabled):not(.disabled).active,
.show > .btn-outline-info.dropdown-toggle {
    color: #fff;
    background-color: #17a2b8;
    border-color: #17a2b8;
}
.btn-outline-info:not(:disabled):not(.disabled):active:focus,
.btn-outline-info:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-info.dropdown-toggle:focus {
    box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5);
}

.btn-outline-warning {
    color: #ffffff;
    border-color: #ffffff;
}
.btn-outline-warning:hover {
    color: #212529;
    background-color: #ffffff;
    border-color: #ffffff;
}
.btn-outline-warning:focus,
.btn-outline-warning.focus {
    box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5);
}
.btn-outline-warning.disabled,
.btn-outline-warning:disabled {
    color: #ffffff;
    background-color: transparent;
}
.btn-outline-warning:not(:disabled):not(.disabled):active,
.btn-outline-warning:not(:disabled):not(.disabled).active,
.show > .btn-outline-warning.dropdown-toggle {
    color: #212529;
    background-color: #ffffff;
    border-color: #ffffff;
}
.btn-outline-warning:not(:disabled):not(.disabled):active:focus,
.btn-outline-warning:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-warning.dropdown-toggle:focus {
    box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5);
}

.btn-outline-danger {
    color: #dc3545;
    border-color: #dc3545;
}
.btn-outline-danger:hover {
    color: #fff;
    background-color: #dc3545;
    border-color: #dc3545;
}
.btn-outline-danger:focus,
.btn-outline-danger.focus {
    box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
}
.btn-outline-danger.disabled,
.btn-outline-danger:disabled {
    color: #dc3545;
    background-color: transparent;
}
.btn-outline-danger:not(:disabled):not(.disabled):active,
.btn-outline-danger:not(:disabled):not(.disabled).active,
.show > .btn-outline-danger.dropdown-toggle {
    color: #fff;
    background-color: #dc3545;
    border-color: #dc3545;
}
.btn-outline-danger:not(:disabled):not(.disabled):active:focus,
.btn-outline-danger:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-danger.dropdown-toggle:focus {
    box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
}

.btn-outline-light {
    color: #f8f9fa;
    border-color: #f8f9fa;
}
.btn-outline-light:hover {
    color: #212529;
    background-color: #f8f9fa;
    border-color: #f8f9fa;
}
.btn-outline-light:focus,
.btn-outline-light.focus {
    box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
}
.btn-outline-light.disabled,
.btn-outline-light:disabled {
    color: #f8f9fa;
    background-color: transparent;
}
.btn-outline-light:not(:disabled):not(.disabled):active,
.btn-outline-light:not(:disabled):not(.disabled).active,
.show > .btn-outline-light.dropdown-toggle {
    color: #212529;
    background-color: #f8f9fa;
    border-color: #f8f9fa;
}
.btn-outline-light:not(:disabled):not(.disabled):active:focus,
.btn-outline-light:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-light.dropdown-toggle:focus {
    box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
}

.btn-outline-dark {
    color: #343a40;
    border-color: #343a40;
}
.btn-outline-dark:hover {
    color: #fff;
    background-color: #343a40;
    border-color: #343a40;
}
.btn-outline-dark:focus,
.btn-outline-dark.focus {
    box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
}
.btn-outline-dark.disabled,
.btn-outline-dark:disabled {
    color: #343a40;
    background-color: transparent;
}
.btn-outline-dark:not(:disabled):not(.disabled):active,
.btn-outline-dark:not(:disabled):not(.disabled).active,
.show > .btn-outline-dark.dropdown-toggle {
    color: #fff;
    background-color: #343a40;
    border-color: #343a40;
}
.btn-outline-dark:not(:disabled):not(.disabled):active:focus,
.btn-outline-dark:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-dark.dropdown-toggle:focus {
    box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
}

.btn-link {
    font-weight: 400;
    color: ##ffffff;
    text-decoration: none;
}
.btn-link:hover {
    color: #ba6600;
    text-decoration: underline;
}
.btn-link:focus,
.btn-link.focus {
    text-decoration: underline;
    box-shadow: none;
}
.btn-link:disabled,
.btn-link.disabled {
    color: #6c757d;
    pointer-events: none;
}

.btn-lg,
.btn-group-lg > .btn {
    padding: 0.5rem 1rem;
    font-size: 1.25rem;
    line-height: 1.5;
    border-radius: 0.3rem;
}

.btn-sm,
.btn-group-sm > .btn {
    padding: 0.25rem 0.5rem;
    font-size: 0.875rem;
    line-height: 1.5;
    border-radius: 0.2rem;
}

.btn-block {
    display: block;
    width: 100%;
}

.btn-block-pay {
    display: block;
    position: centre;
    width: 50%;
}


.btn-block + .btn-block {
    margin-top: 0.5rem;
}

input[type="submit"].btn-block,
input[type="reset"].btn-block,
input[type="button"].btn-block {
    width: 100%;
}

.btn-block2 {
    display: contents;
    width: 18%;
}
.btn-block2 + .btn-block2 {
    margin-top: 0.5rem;
}

input[type="submit"].btn-block2,
input[type="reset"].btn-block2,
input[type="button"].btn-block2 {
    width: 100%;
}

.fade {
    transition: opacity 0.15s linear;
}
@media (prefers-reduced-motion: reduce) {
    .fade {
        transition: none;
    }
}
.fade:not(.show) {
    opacity: 0;
}

.collapse:not(.show) {
    display: none;
}

.collapsing {
    position: relative;
    height: 0;
    overflow: hidden;
    transition: height 0.35s ease;
}
@media (prefers-reduced-motion: reduce) {
    .collapsing {
        transition: none;
    }
}

.dropup,
.dropright,
.dropdown,
.dropleft {
    position: relative;
}

.dropdown-toggle {
    white-space: nowrap;
}
.dropdown-toggle::after {
    display: inline-block;
    margin-left: 0.255em;
    vertical-align: 0.255em;
    content: "";
    border-top: 0.3em solid;
    border-right: 0.3em solid transparent;
    border-bottom: 0;
    border-left: 0.3em solid transparent;
}
.dropdown-toggle:empty::after {
    margin-left: 0;
}

.dropdown-menu {
    position: absolute;
    top: 100%;
    left: 0;
    z-index: 1000;
    display: none;
    float: left;
    min-width: 10rem;
    padding: 0.5rem 0;
    margin: 0.125rem 0 0;
    font-size: 1rem;
    color: #212529;
    text-align: left;
    list-style: none;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0, 0, 0, 0.15);
    border-radius: 0.25rem;
}

.dropdown-menu-left {
    right: auto;
    left: 0;
}

.dropdown-menu-right {
    right: 0;
    left: auto;
}

@media (min-width: 576px) {
    .dropdown-menu-sm-left {
        right: auto;
        left: 0;
    }
    .dropdown-menu-sm-right {
        right: 0;
        left: auto;
    }
}

@media (min-width: 768px) {
    .dropdown-menu-md-left {
        right: auto;
        left: 0;
    }
    .dropdown-menu-md-right {
        right: 0;
        left: auto;
    }
}

@media (min-width: 992px) {
    .dropdown-menu-lg-left {
        right: auto;
        left: 0;
    }
    .dropdown-menu-lg-right {
        right: 0;
        left: auto;
    }
}

@media (min-width: 1200px) {
    .dropdown-menu-xl-left {
        right: auto;
        left: 0;
    }
    .dropdown-menu-xl-right {
        right: 0;
        left: auto;
    }
}

.dropup .dropdown-menu {
    top: auto;
    bottom: 100%;
    margin-top: 0;
    margin-bottom: 0.125rem;
}

.dropup .dropdown-toggle::after {
    display: inline-block;
    margin-left: 0.255em;
    vertical-align: 0.255em;
    content: "";
    border-top: 0;
    border-right: 0.3em solid transparent;
    border-bottom: 0.3em solid;
    border-left: 0.3em solid transparent;
}

.dropup .dropdown-toggle:empty::after {
    margin-left: 0;
}

.dropright .dropdown-menu {
    top: 0;
    right: auto;
    left: 100%;
    margin-top: 0;
    margin-left: 0.125rem;
}

.dropright .dropdown-toggle::after {
    display: inline-block;
    margin-left: 0.255em;
    vertical-align: 0.255em;
    content: "";
    border-top: 0.3em solid transparent;
    border-right: 0;
    border-bottom: 0.3em solid transparent;
    border-left: 0.3em solid;
}

.dropright .dropdown-toggle:empty::after {
    margin-left: 0;
}

.dropright .dropdown-toggle::after {
    vertical-align: 0;
}

.dropleft .dropdown-menu {
    top: 0;
    right: 100%;
    left: auto;
    margin-top: 0;
    margin-right: 0.125rem;
}

.dropleft .dropdown-toggle::after {
    display: inline-block;
    margin-left: 0.255em;
    vertical-align: 0.255em;
    content: "";
}

.dropleft .dropdown-toggle::after {
    display: none;
}

.dropleft .dropdown-toggle::before {
    display: inline-block;
    margin-right: 0.255em;
    vertical-align: 0.255em;
    content: "";
    border-top: 0.3em solid transparent;
    border-right: 0.3em solid;
    border-bottom: 0.3em solid transparent;
}

.dropleft .dropdown-toggle:empty::after {
    margin-left: 0;
}

.dropleft .dropdown-toggle::before {
    vertical-align: 0;
}

.dropdown-menu[x-placement^="top"],
.dropdown-menu[x-placement^="right"],
.dropdown-menu[x-placement^="bottom"],
.dropdown-menu[x-placement^="left"] {
    right: auto;
    bottom: auto;
}

.dropdown-divider {
    height: 0;
    margin: 0.5rem 0;
    overflow: hidden;
    border-top: 1px solid #e9ecef;
}

.dropdown-item {
    display: block;
    width: 100%;
    padding: 0.25rem 1.5rem;
    clear: both;
    font-weight: 400;
    color: #212529;
    text-align: inherit;
    white-space: nowrap;
    background-color: transparent;
    border: 0;
}
.dropdown-item:hover,
.dropdown-item:focus {
    color: #16181b;
    text-decoration: none;
    background-color: #f8f9fa;
}
.dropdown-item.active,
.dropdown-item:active {
    color: #fff;
    text-decoration: none;
    background-color: ##ffffff;
}
.dropdown-item.disabled,
.dropdown-item:disabled {
    color: #6c757d;
    pointer-events: none;
    background-color: transparent;
}

.dropdown-menu.show {
    display: block;
}

.dropdown-header {
    display: block;
    padding: 0.5rem 1.5rem;
    margin-bottom: 0;
    font-size: 0.875rem;
    color: #6c757d;
    white-space: nowrap;
}

.dropdown-item-text {
    display: block;
    padding: 0.25rem 1.5rem;
    color: #212529;
}

.btn-group,
.btn-group-vertical {
    position: relative;
    display: inline-flex;
    vertical-align: middle;
}
.btn-group > .btn,
.btn-group-vertical > .btn {
    position: relative;
    flex: 1 1 auto;
}
.btn-group > .btn:hover,
.btn-group-vertical > .btn:hover {
    z-index: 1;
}
.btn-group > .btn:focus,
.btn-group > .btn:active,
.btn-group > .btn.active,
.btn-group-vertical > .btn:focus,
.btn-group-vertical > .btn:active,
.btn-group-vertical > .btn.active {
    z-index: 1;
}

.btn-toolbar {
    display: flex;
    flex-wrap: wrap;
    justify-content: flex-start;
}
.btn-toolbar .input-group {
    width: auto;
}

.btn-group > .btn:not(:first-child),
.btn-group > .btn-group:not(:first-child) {
    margin-left: -1px;
}

.btn-group > .btn:not(:last-child):not(.dropdown-toggle),
.btn-group > .btn-group:not(:last-child) > .btn {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}

.btn-group > .btn:not(:first-child),
.btn-group > .btn-group:not(:first-child) > .btn {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}

.dropdown-toggle-split {
    padding-right: 0.5625rem;
    padding-left: 0.5625rem;
}
.dropdown-toggle-split::after,
.dropup .dropdown-toggle-split::after,
.dropright .dropdown-toggle-split::after {
    margin-left: 0;
}
.dropleft .dropdown-toggle-split::before {
    margin-right: 0;
}

.btn-sm + .dropdown-toggle-split,
.btn-group-sm > .btn + .dropdown-toggle-split {
    padding-right: 0.375rem;
    padding-left: 0.375rem;
}

.btn-lg + .dropdown-toggle-split,
.btn-group-lg > .btn + .dropdown-toggle-split {
    padding-right: 0.75rem;
    padding-left: 0.75rem;
}

.btn-group-vertical {
    flex-direction: column;
    align-items: flex-start;
    justify-content: center;
}
.btn-group-vertical > .btn,
.btn-group-vertical > .btn-group {
    width: 100%;
}
.btn-group-vertical > .btn:not(:first-child),
.btn-group-vertical > .btn-group:not(:first-child) {
    margin-top: -1px;
}
.btn-group-vertical > .btn:not(:last-child):not(.dropdown-toggle),
.btn-group-vertical > .btn-group:not(:last-child) > .btn {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
}
.btn-group-vertical > .btn:not(:first-child),
.btn-group-vertical > .btn-group:not(:first-child) > .btn {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}

.btn-group-toggle > .btn,
.btn-group-toggle > .btn-group > .btn {
    margin-bottom: 0;
}
.btn-group-toggle > .btn input[type="radio"],
.btn-group-toggle > .btn input[type="checkbox"],
.btn-group-toggle > .btn-group > .btn input[type="radio"],
.btn-group-toggle > .btn-group > .btn input[type="checkbox"] {
    position: absolute;
    clip: rect(0, 0, 0, 0);
    pointer-events: none;
}

.input-group {
    position: relative;
    display: flex;
    flex-wrap: wrap;
    align-items: stretch;
    width: 100%;
}
.input-group > .form-control,
.input-group > .form-control-plaintext,
.input-group > .custom-select,
.input-group > .custom-file {
    position: relative;
    flex: 1 1 0%;
    min-width: 0;
    margin-bottom: 0;
}
.input-group > .form-control + .form-control,
.input-group > .form-control + .custom-select,
.input-group > .form-control + .custom-file,
.input-group > .form-control-plaintext + .form-control,
.input-group > .form-control-plaintext + .custom-select,
.input-group > .form-control-plaintext + .custom-file,
.input-group > .custom-select + .form-control,
.input-group > .custom-select + .custom-select,
.input-group > .custom-select + .custom-file,
.input-group > .custom-file + .form-control,
.input-group > .custom-file + .custom-select,
.input-group > .custom-file + .custom-file {
    margin-left: -1px;
}
.input-group > .form-control:focus,
.input-group > .custom-select:focus,
.input-group > .custom-file .custom-file-input:focus ~ .custom-file-label {
    z-index: 3;
}
.input-group > .custom-file .custom-file-input:focus {
    z-index: 4;
}
.input-group > .form-control:not(:last-child),
.input-group > .custom-select:not(:last-child) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}
.input-group > .form-control:not(:first-child),
.input-group > .custom-select:not(:first-child) {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}
.input-group > .custom-file {
    display: flex;
    align-items: center;
}
.input-group > .custom-file:not(:last-child) .custom-file-label,
.input-group > .custom-file:not(:last-child) .custom-file-label::after {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}
.input-group > .custom-file:not(:first-child) .custom-file-label {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}

.input-group-prepend,
.input-group-append {
    display: flex;
}
.input-group-prepend .btn,
.input-group-append .btn {
    position: relative;
    z-index: 2;
}
.input-group-prepend .btn:focus,
.input-group-append .btn:focus {
    z-index: 3;
}
.input-group-prepend .btn + .btn,
.input-group-prepend .btn + .input-group-text,
.input-group-prepend .input-group-text + .input-group-text,
.input-group-prepend .input-group-text + .btn,
.input-group-append .btn + .btn,
.input-group-append .btn + .input-group-text,
.input-group-append .input-group-text + .input-group-text,
.input-group-append .input-group-text + .btn {
    margin-left: -1px;
}

.input-group-prepend {
    margin-right: -1px;
}

.input-group-append {
    margin-left: -1px;
}

.input-group-text {
    display: flex;
    align-items: center;
    padding: 0.375rem 0.75rem;
    margin-bottom: 0;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    text-align: center;
    white-space: nowrap;
    background-color: #e9ecef;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
}
.input-group-text input[type="radio"],
.input-group-text input[type="checkbox"] {
    margin-top: 0;
}

.input-group-lg > .form-control:not(textarea),
.input-group-lg > .custom-select {
    height: calc(1.5em + 1rem + 2px);
}

.input-group-lg > .form-control,
.input-group-lg > .custom-select,
.input-group-lg > .input-group-prepend > .input-group-text,
.input-group-lg > .input-group-append > .input-group-text,
.input-group-lg > .input-group-prepend > .btn,
.input-group-lg > .input-group-append > .btn {
    padding: 0.5rem 1rem;
    font-size: 1.25rem;
    line-height: 1.5;
    border-radius: 0.3rem;
}

.input-group-sm > .form-control:not(textarea),
.input-group-sm > .custom-select {
    height: calc(1.5em + 0.5rem + 2px);
}

.input-group-sm > .form-control,
.input-group-sm > .custom-select,
.input-group-sm > .input-group-prepend > .input-group-text,
.input-group-sm > .input-group-append > .input-group-text,
.input-group-sm > .input-group-prepend > .btn,
.input-group-sm > .input-group-append > .btn {
    padding: 0.25rem 0.5rem;
    font-size: 0.875rem;
    line-height: 1.5;
    border-radius: 0.2rem;
}

.input-group-lg > .custom-select,
.input-group-sm > .custom-select {
    padding-right: 1.75rem;
}

.input-group > .input-group-prepend > .btn,
.input-group > .input-group-prepend > .input-group-text,
.input-group > .input-group-append:not(:last-child) > .btn,
.input-group > .input-group-append:not(:last-child) > .input-group-text,
.input-group
    > .input-group-append:last-child
    > .btn:not(:last-child):not(.dropdown-toggle),
.input-group
    > .input-group-append:last-child
    > .input-group-text:not(:last-child) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}

.input-group > .input-group-append > .btn,
.input-group > .input-group-append > .input-group-text,
.input-group > .input-group-prepend:not(:first-child) > .btn,
.input-group > .input-group-prepend:not(:first-child) > .input-group-text,
.input-group > .input-group-prepend:first-child > .btn:not(:first-child),
.input-group
    > .input-group-prepend:first-child
    > .input-group-text:not(:first-child) {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}

.custom-control {
    position: relative;
    display: block;
    min-height: 1.5rem;
    padding-left: 1.5rem;
}

.custom-control-inline {
    display: inline-flex;
    margin-right: 1rem;
}

.custom-control-input {
    position: absolute;
    left: 0;
    z-index: -1;
    width: 1rem;
    height: 1.25rem;
    opacity: 0;
}
.custom-control-input:checked ~ .custom-control-label::before {
    color: #fff;
    border-color: ##ffffff;
    background-color: ##ffffff;
}
.custom-control-input:focus ~ .custom-control-label::before {
    box-shadow: 0 0 0 0.2rem rgba(255, 143, 7, 0.25);
}
.custom-control-input:focus:not(:checked) ~ .custom-control-label::before {
    border-color: #ffc987;
}
.custom-control-input:not(:disabled):active ~ .custom-control-label::before {
    color: #fff;
    background-color: #ffe0ba;
    border-color: #ffe0ba;
}
.custom-control-input[disabled] ~ .custom-control-label,
.custom-control-input:disabled ~ .custom-control-label {
    color: #6c757d;
}
.custom-control-input[disabled] ~ .custom-control-label::before,
.custom-control-input:disabled ~ .custom-control-label::before {
    background-color: #e9ecef;
}

.custom-control-label {
    position: relative;
    margin-bottom: 0;
    vertical-align: top;
}
.custom-control-label::before {
    position: absolute;
    top: 0.25rem;
    left: -1.5rem;
    display: block;
    width: 1rem;
    height: 1rem;
    pointer-events: none;
    content: "";
    background-color: #fff;
    border: #adb5bd solid 1px;
}
.custom-control-label::after {
    position: absolute;
    top: 0.25rem;
    left: -1.5rem;
    display: block;
    width: 1rem;
    height: 1rem;
    content: "";
    background: no-repeat 50% / 50% 50%;
}

.custom-checkbox .custom-control-label::before {
    border-radius: 0.25rem;
}

.custom-checkbox .custom-control-input:checked ~ .custom-control-label::after {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26l2.974 2.99L8 2.193z'/%3e%3c/svg%3e");
}

.custom-checkbox
    .custom-control-input:indeterminate
    ~ .custom-control-label::before {
    border-color: ##ffffff;
    background-color: ##ffffff;
}

.custom-checkbox
    .custom-control-input:indeterminate
    ~ .custom-control-label::after {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='4' viewBox='0 0 4 4'%3e%3cpath stroke='%23fff' d='M0 2h4'/%3e%3c/svg%3e");
}

.custom-checkbox
    .custom-control-input:disabled:checked
    ~ .custom-control-label::before {
    background-color: rgba(255, 143, 7, 0.5);
}

.custom-checkbox
    .custom-control-input:disabled:indeterminate
    ~ .custom-control-label::before {
    background-color: rgba(255, 143, 7, 0.5);
}

.custom-radio .custom-control-label::before {
    border-radius: 50%;
}

.custom-radio .custom-control-input:checked ~ .custom-control-label::after {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e");
}

.custom-radio
    .custom-control-input:disabled:checked
    ~ .custom-control-label::before {
    background-color: rgba(255, 143, 7, 0.5);
}

.custom-switch {
    padding-left: 2.25rem;
}
.custom-switch .custom-control-label::before {
    left: -2.25rem;
    width: 1.75rem;
    pointer-events: all;
    border-radius: 0.5rem;
}
.custom-switch .custom-control-label::after {
    top: calc(0.25rem + 2px);
    left: calc(-2.25rem + 2px);
    width: calc(1rem - 4px);
    height: calc(1rem - 4px);
    background-color: #adb5bd;
    border-radius: 0.5rem;
    transition: transform 0.15s ease-in-out, background-color 0.15s ease-in-out,
        border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
    .custom-switch .custom-control-label::after {
        transition: none;
    }
}
.custom-switch .custom-control-input:checked ~ .custom-control-label::after {
    background-color: #fff;
    transform: translateX(0.75rem);
}
.custom-switch
    .custom-control-input:disabled:checked
    ~ .custom-control-label::before {
    background-color: rgba(255, 143, 7, 0.5);
}

.custom-select {
    display: inline-block;
    width: 100%;
    height: calc(1.5em + 0.75rem + 2px);
    padding: 0.375rem 1.75rem 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    vertical-align: middle;
    background: #fff
        url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e")
        no-repeat right 0.75rem center/8px 10px;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
}
.custom-select:focus {
    border-color: #ffc987;
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(255, 143, 7, 0.25);
}
.custom-select:focus::-ms-value {
    color: #495057;
    background-color: #fff;
}
.custom-select[multiple],
.custom-select[size]:not([size="1"]) {
    height: auto;
    padding-right: 0.75rem;
    background-image: none;
}
.custom-select:disabled {
    color: #6c757d;
    background-color: #e9ecef;
}
.custom-select::-ms-expand {
    display: none;
}
.custom-select:-moz-focusring {
    color: transparent;
    text-shadow: 0 0 0 #495057;
}

.custom-select-sm {
    height: calc(1.5em + 0.5rem + 2px);
    padding-top: 0.25rem;
    padding-bottom: 0.25rem;
    padding-left: 0.5rem;
    font-size: 0.875rem;
}

.custom-select-lg {
    height: calc(1.5em + 1rem + 2px);
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
    padding-left: 1rem;
    font-size: 1.25rem;
}

.custom-file {
    position: relative;
    display: inline-block;
    width: 100%;
    height: calc(1.5em + 0.75rem + 2px);
    margin-bottom: 0;
}

.custom-file-input {
    position: relative;
    z-index: 2;
    width: 100%;
    height: calc(1.5em + 0.75rem + 2px);
    margin: 0;
    opacity: 0;
}
.custom-file-input:focus ~ .custom-file-label {
    border-color: #ffc987;
    box-shadow: 0 0 0 0.2rem rgba(255, 143, 7, 0.25);
}
.custom-file-input[disabled] ~ .custom-file-label,
.custom-file-input:disabled ~ .custom-file-label {
    background-color: #e9ecef;
}
.custom-file-input:lang(en) ~ .custom-file-label::after {
    content: "Browse";
}
.custom-file-input ~ .custom-file-label[data-browse]::after {
    content: attr(data-browse);
}

.custom-file-label {
    position: absolute;
    top: 0;
    right: 0;
    left: 0;
    z-index: 1;
    height: calc(1.5em + 0.75rem + 2px);
    padding: 0.375rem 0.75rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
}
.custom-file-label::after {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    z-index: 3;
    display: block;
    height: calc(1.5em + 0.75rem);
    padding: 0.375rem 0.75rem;
    line-height: 1.5;
    color: #495057;
    content: "Browse";
    background-color: #e9ecef;
    border-left: inherit;
    border-radius: 0 0.25rem 0.25rem 0;
}

.custom-range {
    width: 100%;
    height: 1.4rem;
    padding: 0;
    background-color: transparent;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
}
.custom-range:focus {
    outline: none;
}
.custom-range:focus::-webkit-slider-thumb {
    box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(255, 143, 7, 0.25);
}
.custom-range:focus::-moz-range-thumb {
    box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(255, 143, 7, 0.25);
}
.custom-range:focus::-ms-thumb {
    box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(255, 143, 7, 0.25);
}
.custom-range::-moz-focus-outer {
    border: 0;
}
.custom-range::-webkit-slider-thumb {
    width: 1rem;
    height: 1rem;
    margin-top: -0.25rem;
    background-color: ##ffffff;
    border: 0;
    border-radius: 1rem;
    transition: background-color 0.15s ease-in-out,
        border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    -webkit-appearance: none;
    appearance: none;
}
@media (prefers-reduced-motion: reduce) {
    .custom-range::-webkit-slider-thumb {
        transition: none;
    }
}
.custom-range::-webkit-slider-thumb:active {
    background-color: #ffe0ba;
}
.custom-range::-webkit-slider-runnable-track {
    width: 100%;
    height: 0.5rem;
    color: transparent;
    cursor: pointer;
    background-color: #dee2e6;
    border-color: transparent;
    border-radius: 1rem;
}
.custom-range::-moz-range-thumb {
    width: 1rem;
    height: 1rem;
    background-color: ##ffffff;
    border: 0;
    border-radius: 1rem;
    transition: background-color 0.15s ease-in-out,
        border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    -moz-appearance: none;
    appearance: none;
}
@media (prefers-reduced-motion: reduce) {
    .custom-range::-moz-range-thumb {
        transition: none;
    }
}
.custom-range::-moz-range-thumb:active {
    background-color: #ffe0ba;
}
.custom-range::-moz-range-track {
    width: 100%;
    height: 0.5rem;
    color: transparent;
    cursor: pointer;
    background-color: #dee2e6;
    border-color: transparent;
    border-radius: 1rem;
}
.custom-range::-ms-thumb {
    width: 1rem;
    height: 1rem;
    margin-top: 0;
    margin-right: 0.2rem;
    margin-left: 0.2rem;
    background-color: ##ffffff;
    border: 0;
    border-radius: 1rem;
    transition: background-color 0.15s ease-in-out,
        border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    appearance: none;
}
@media (prefers-reduced-motion: reduce) {
    .custom-range::-ms-thumb {
        transition: none;
    }
}
.custom-range::-ms-thumb:active {
    background-color: #ffe0ba;
}
.custom-range::-ms-track {
    width: 100%;
    height: 0.5rem;
    color: transparent;
    cursor: pointer;
    background-color: transparent;
    border-color: transparent;
    border-width: 0.5rem;
}
.custom-range::-ms-fill-lower {
    background-color: #dee2e6;
    border-radius: 1rem;
}
.custom-range::-ms-fill-upper {
    margin-right: 15px;
    background-color: #dee2e6;
    border-radius: 1rem;
}
.custom-range:disabled::-webkit-slider-thumb {
    background-color: #adb5bd;
}
.custom-range:disabled::-webkit-slider-runnable-track {
    cursor: default;
}
.custom-range:disabled::-moz-range-thumb {
    background-color: #adb5bd;
}
.custom-range:disabled::-moz-range-track {
    cursor: default;
}
.custom-range:disabled::-ms-thumb {
    background-color: #adb5bd;
}

.custom-control-label::before,
.custom-file-label,
.custom-select {
    transition: background-color 0.15s ease-in-out,
        border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
    .custom-control-label::before,
    .custom-file-label,
    .custom-select {
        transition: none;
    }
}

.navv {
    display: flex;
    flex-wrap: wrap;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
}

.navv-link {
    display: block;
    padding: 0.5rem 1rem;
}
.navv-link:hover,
.navv-link:focus {
    text-decoration: none;
}
.navv-link.disabled {
    color: #6c757d;
    pointer-events: none;
    cursor: default;
}

.navv-tabs {
    border-bottom: 1px solid #dee2e6;
}
.navv-tabs .navv-item {
    margin-bottom: -1px;
}
.navv-tabs .navv-link {
    border: 1px solid transparent;
    border-top-left-radius: 0.25rem;
    border-top-right-radius: 0.25rem;
}
.navv-tabs .navv-link:hover,
.navv-tabs .navv-link:focus {
    border-color: #e9ecef #e9ecef #dee2e6;
}
.navv-tabs .navv-link.disabled {
    color: #6c757d;
    background-color: transparent;
    border-color: transparent;
}
.navv-tabs .navv-link.active,
.navv-tabs .navv-item.show .navv-link {
    color: #495057;
    background-color: #fff;
    border-color: #dee2e6 #dee2e6 #fff;
}
.navv-tabs .dropdown-menu {
    margin-top: -1px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}

.navv-pills .navv-link {
    border-radius: 0.25rem;
}

.navv-pills .navv-link.active,
.navv-pills .show > .navv-link {
    color: #fff;
    background-color: ##ffffff;
}

.navv-fill .navv-item {
    flex: 1 1 auto;
    text-align: center;
}

.navv-justified .navv-item {
    flex-basis: 0;
    flex-grow: 1;
    text-align: center;
}

.tab-content > .tab-pane {
    display: none;
}

.tab-content > .active {
    display: block;
}

.navbarv {
    position: relative;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
    padding: 0.5rem 1rem;
}
.navbarv .containerv,
.navbarv .containerv-fluid,
.navbarv .containerv-sm,
.navbarv .containerv-md,
.navbarv .containerv-lg,
.navbarv .containerv-xl {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
}

.navbarv-brand {
    display: inline-block;
    padding-top: 0.3125rem;
    padding-bottom: 0.3125rem;
    margin-right: 1rem;
    font-size: 1.25rem;
    line-height: inherit;
    white-space: nowrap;
}
.navbarv-brand:hover,
.navbarv-brand:focus {
    text-decoration: none;
}

.navbarv-navv {
    display: flex;
    flex-direction: column;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
}
.navbarv-navv .navv-link {
    padding-right: 0;
    padding-left: 0;
}
.navbarv-navv .dropdown-menu {
    position: static;
    float: none;
}

.navbarv-text {
    display: inline-block;
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
}

.navbarv-collapse {
    flex-basis: 100%;
    flex-grow: 1;
    align-items: center;
}

.navbarv-toggler {
    padding: 0.25rem 0.75rem;
    font-size: 1.25rem;
    line-height: 1;
    background-color: transparent;
    border: 1px solid transparent;
    border-radius: 0.25rem;
}
.navbarv-toggler:hover,
.navbarv-toggler:focus {
    text-decoration: none;
}

.navbarv-toggler-icon {
    display: inline-block;
    width: 1.5em;
    height: 1.5em;
    vertical-align: middle;
    content: "";
    background: no-repeat center center;
    background-size: 100% 100%;
}

@media (max-width: 575.98px) {
    .navbarv-expand-sm > .containerv,
    .navbarv-expand-sm > .containerv-fluid,
    .navbarv-expand-sm > .containerv-sm,
    .navbarv-expand-sm > .containerv-md,
    .navbarv-expand-sm > .containerv-lg,
    .navbarv-expand-sm > .containerv-xl {
        padding-right: 0;
        padding-left: 0;
    }
}

@media (min-width: 576px) {
    .navbarv-expand-sm {
        flex-flow: row nowrap;
        justify-content: flex-start;
    }
    .navbarv-expand-sm .navbarv-navv {
        flex-direction: row;
    }
    .navbarv-expand-sm .navbarv-navv .dropdown-menu {
        position: absolute;
    }
    .navbarv-expand-sm .navbarv-navv .navv-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem;
    }
    .navbarv-expand-sm > .containerv,
    .navbarv-expand-sm > .containerv-fluid,
    .navbarv-expand-sm > .containerv-sm,
    .navbarv-expand-sm > .containerv-md,
    .navbarv-expand-sm > .containerv-lg,
    .navbarv-expand-sm > .containerv-xl {
        flex-wrap: nowrap;
    }
    .navbarv-expand-sm .navbarv-collapse {
        display: flex !important;
        flex-basis: auto;
    }
    .navbarv-expand-sm .navbarv-toggler {
        display: none;
    }
}

@media (max-width: 767.98px) {
    .navbarv-expand-md > .containerv,
    .navbarv-expand-md > .containerv-fluid,
    .navbarv-expand-md > .containerv-sm,
    .navbarv-expand-md > .containerv-md,
    .navbarv-expand-md > .containerv-lg,
    .navbarv-expand-md > .containerv-xl {
        padding-right: 0;
        padding-left: 0;
    }
}

@media (min-width: 768px) {
    .navbarv-expand-md {
        flex-flow: row nowrap;
        justify-content: flex-start;
    }
    .navbarv-expand-md .navbarv-navv {
        flex-direction: row;
    }
    .navbarv-expand-md .navbarv-navv .dropdown-menu {
        position: absolute;
    }
    .navbarv-expand-md .navbarv-navv .navv-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem;
    }
    .navbarv-expand-md > .containerv,
    .navbarv-expand-md > .containerv-fluid,
    .navbarv-expand-md > .containerv-sm,
    .navbarv-expand-md > .containerv-md,
    .navbarv-expand-md > .containerv-lg,
    .navbarv-expand-md > .containerv-xl {
        flex-wrap: nowrap;
    }
    .navbarv-expand-md .navbarv-collapse {
        display: flex !important;
        flex-basis: auto;
    }
    .navbarv-expand-md .navbarv-toggler {
        display: none;
    }
}

@media (max-width: 991.98px) {
    .navbarv-expand-lg > .containerv,
    .navbarv-expand-lg > .containerv-fluid,
    .navbarv-expand-lg > .containerv-sm,
    .navbarv-expand-lg > .containerv-md,
    .navbarv-expand-lg > .containerv-lg,
    .navbarv-expand-lg > .containerv-xl {
        padding-right: 0;
        padding-left: 0;
    }
}

@media (min-width: 992px) {
    .navbarv-expand-lg {
        flex-flow: row nowrap;
        justify-content: flex-start;
    }
    .navbarv-expand-lg .navbarv-navv {
        flex-direction: row;
    }
    .navbarv-expand-lg .navbarv-navv .dropdown-menu {
        position: absolute;
    }
    .navbarv-expand-lg .navbarv-navv .navv-link {
        padding-right: -5rem;
        padding-left: 0.5rem;
    }
    .navbarv-expand-lg > .containerv,
    .navbarv-expand-lg > .containerv-fluid,
    .navbarv-expand-lg > .containerv-sm,
    .navbarv-expand-lg > .containerv-md,
    .navbarv-expand-lg > .containerv-lg,
    .navbarv-expand-lg > .containerv-xl {
        flex-wrap: nowrap;
    }
    .navbarv-expand-lg .navbarv-collapse {
        display: flex !important;
        flex-basis: auto;
    }
    .navbarv-expand-lg .navbarv-toggler {
        display: none;
    }
}

@media (max-width: 1199.98px) {
    .navbarv-expand-xl > .containerv,
    .navbarv-expand-xl > .containerv-fluid,
    .navbarv-expand-xl > .containerv-sm,
    .navbarv-expand-xl > .containerv-md,
    .navbarv-expand-xl > .containerv-lg,
    .navbarv-expand-xl > .containerv-xl {
        padding-right: 0;
        padding-left: 0;
    }
}

@media (min-width: 1200px) {
    .navbarv-expand-xl {
        flex-flow: row nowrap;
        justify-content: flex-start;
    }
    .navbarv-expand-xl .navbarv-navv {
        flex-direction: row;
    }
    .navbarv-expand-xl .navbarv-navv .dropdown-menu {
        position: absolute;
    }
    .navbarv-expand-xl .navbarv-navv .navv-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem;
    }
    .navbarv-expand-xl > .containerv,
    .navbarv-expand-xl > .containerv-fluid,
    .navbarv-expand-xl > .containerv-sm,
    .navbarv-expand-xl > .containerv-md,
    .navbarv-expand-xl > .containerv-lg,
    .navbarv-expand-xl > .containerv-xl {
        flex-wrap: nowrap;
    }
    .navbarv-expand-xl .navbarv-collapse {
        display: flex !important;
        flex-basis: auto;
    }
    .navbarv-expand-xl .navbarv-toggler {
        display: none;
    }
}

.navbarv-expand {
    flex-flow: row nowrap;
    justify-content: flex-start;
}
.navbarv-expand > .containerv,
.navbarv-expand > .containerv-fluid,
.navbarv-expand > .containerv-sm,
.navbarv-expand > .containerv-md,
.navbarv-expand > .containerv-lg,
.navbarv-expand > .containerv-xl {
    padding-right: 0;
    padding-left: 0;
}
.navbarv-expand .navbarv-navv {
    flex-direction: row;
}
.navbarv-expand .navbarv-navv .dropdown-menu {
    position: absolute;
}
.navbarv-expand .navbarv-navv .navv-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
}
.navbarv-expand > .containerv,
.navbarv-expand > .containerv-fluid,
.navbarv-expand > .containerv-sm,
.navbarv-expand > .containerv-md,
.navbarv-expand > .containerv-lg,
.navbarv-expand > .containerv-xl {
    flex-wrap: nowrap;
}
.navbarv-expand .navbarv-collapse {
    display: flex !important;
    flex-basis: auto;
}
.navbarv-expand .navbarv-toggler {
    display: none;
}

.navbarv-light .navbarv-brand {
    color: rgba(0, 0, 0, 0.9);
}
.navbarv-light .navbarv-brand:hover,
.navbarv-light .navbarv-brand:focus {
    color: rgba(0, 0, 0, 0.9);
}

.navbarv-light .navbarv-navv .navv-link {
    color: rgba(0, 0, 0, 0.5);
}
.navbarv-light .navbarv-navv .navv-link:hover,
.navbarv-light .navbarv-navv .navv-link:focus {
    color: rgba(0, 0, 0, 0.7);
}
.navbarv-light .navbarv-navv .navv-link.disabled {
    color: rgba(0, 0, 0, 0.3);
}

.navbarv-light .navbarv-navv .show > .navv-link,
.navbarv-light .navbarv-navv .active > .navv-link,
.navbarv-light .navbarv-navv .navv-link.show,
.navbarv-light .navbarv-navv .navv-link.active {
    color: rgba(0, 0, 0, 0.9);
}

.navbarv-light .navbarv-toggler {
    color: rgba(0, 0, 0, 0.5);
    border-color: rgba(0, 0, 0, 0.1);
}

.navbarv-light .navbarv-toggler-icon {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(0, 0, 0, 0.5)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
}

.navbarv-light .navbarv-text {
    color: rgba(0, 0, 0, 0.5);
}
.navbarv-light .navbarv-text a {
    color: rgba(0, 0, 0, 0.9);
}
.navbarv-light .navbarv-text a:hover,
.navbarv-light .navbarv-text a:focus {
    color: rgba(0, 0, 0, 0.9);
}

.navbarv-dark .navbarv-brand {
    color: #fff;
}
.navbarv-dark .navbarv-brand:hover,
.navbarv-dark .navbarv-brand:focus {
    color: #fff;
}

.navbarv-dark .navbarv-navv .navv-link {
    color: rgba(255, 255, 255, 0.5);
}
.navbarv-dark .navbarv-navv .navv-link:hover,
.navbarv-dark .navbarv-navv .navv-link:focus {
    color: rgba(255, 255, 255, 0.75);
}
.navbarv-dark .navbarv-navv .navv-link.disabled {
    color: rgba(255, 255, 255, 0.25);
}

.navbarv-dark .navbarv-navv .show > .navv-link,
.navbarv-dark .navbarv-navv .active > .navv-link,
.navbarv-dark .navbarv-navv .navv-link.show,
.navbarv-dark .navbarv-navv .navv-link.active {
    color: #fff;
}

.navbarv-dark .navbarv-toggler {
    color: rgba(255, 255, 255, 0.5);
    border-color: rgba(255, 255, 255, 0.1);
}

.navbarv-dark .navbarv-toggler-icon {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(255, 255, 255, 0.5)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
}

.navbarv-dark .navbarv-text {
    color: rgba(255, 255, 255, 0.5);
}
.navbarv-dark .navbarv-text a {
    color: #fff;
}
.navbarv-dark .navbarv-text a:hover,
.navbarv-dark .navbarv-text a:focus {
    color: #fff;
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0, 0, 0, 0.125);
    border-radius: 0.25rem;
}
.card > hr {
    margin-right: 0;
    margin-left: 0;
}
.card > .list-group:first-child .list-group-item:first-child {
    border-top-left-radius: 0.25rem;
    border-top-right-radius: 0.25rem;
}
.card > .list-group:last-child .list-group-item:last-child {
    border-bottom-right-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1.25rem;
}

.card-title {
    margin-bottom: 0.75rem;
}

.card-subtitle {
    margin-top: -0.375rem;
    margin-bottom: 0;
}

.card-text:last-child {
    margin-bottom: 0;
}

.card-link:hover {
    text-decoration: none;
}

.card-link + .card-link {
    margin-left: 1.25rem;
}

.card-header {
    padding: 0.75rem 1.25rem;
    margin-bottom: 0;
    background-color: rgba(0, 0, 0, 0.03);
    border-bottom: 1px solid rgba(0, 0, 0, 0.125);
}
.card-header:first-child {
    border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0;
}
.card-header + .list-group .list-group-item:first-child {
    border-top: 0;
}

.card-footer {
    padding: 0.75rem 1.25rem;
    background-color: rgba(0, 0, 0, 0.03);
    border-top: 1px solid rgba(0, 0, 0, 0.125);
}
.card-footer:last-child {
    border-radius: 0 0 calc(0.25rem - 1px) calc(0.25rem - 1px);
}

.card-header-tabs {
    margin-right: -0.625rem;
    margin-bottom: -0.75rem;
    margin-left: -0.625rem;
    border-bottom: 0;
}

.card-header-pills {
    margin-right: -0.625rem;
    margin-left: -0.625rem;
}

.card-img-overlay {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    padding: 1.25rem;
}

.card-img,
.card-img-top,
.card-img-bottom {
    flex-shrink: 0;
    width: 100%;
    height:300px;
}

.card-img,
.card-img-top {
    border-top-left-radius: calc(0.25rem - 1px);
    border-top-right-radius: calc(0.25rem - 1px);
}

.card-img,
.card-img-bottom {
    border-bottom-right-radius: calc(0.25rem - 1px);
    border-bottom-left-radius: calc(0.25rem - 1px);
}

.card-deck .card {
    margin-bottom: 15px;
}

@media (min-width: 576px) {
    .card-deck {
        display: flex;
        flex-flow: row wrap;
        margin-right: -15px;
        margin-left: -15px;
    }
    .card-deck .card {
        flex: 1 0 0%;
        margin-right: 15px;
        margin-bottom: 0;
        margin-left: 15px;
    }
}

.card-group > .card {
    margin-bottom: 15px;
}

@media (min-width: 576px) {
    .card-group {
        display: flex;
        flex-flow: row wrap;
    }
    .card-group > .card {
        flex: 1 0 0%;
        margin-bottom: 0;
    }
    .card-group > .card + .card {
        margin-left: 0;
        border-left: 0;
    }
    .card-group > .card:not(:last-child) {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
    }
    .card-group > .card:not(:last-child) .card-img-top,
    .card-group > .card:not(:last-child) .card-header {
        border-top-right-radius: 0;
    }
    .card-group > .card:not(:last-child) .card-img-bottom,
    .card-group > .card:not(:last-child) .card-footer {
        border-bottom-right-radius: 0;
    }
    .card-group > .card:not(:first-child) {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
    }
    .card-group > .card:not(:first-child) .card-img-top,
    .card-group > .card:not(:first-child) .card-header {
        border-top-left-radius: 0;
    }
    .card-group > .card:not(:first-child) .card-img-bottom,
    .card-group > .card:not(:first-child) .card-footer {
        border-bottom-left-radius: 0;
    }
}

.card-columns .card {
    margin-bottom: 0.75rem;
}

@media (min-width: 576px) {
    .card-columns {
        -webkit-column-count: 3;
        -moz-column-count: 3;
        column-count: 3;
        -webkit-column-gap: 1.25rem;
        -moz-column-gap: 1.25rem;
        column-gap: 1.25rem;
        orphans: 1;
        widows: 1;
    }
    .card-columns .card {
        display: inline-block;
        width: 100%;
    }
}

.accordion > .card {
    overflow: hidden;
}
.accordion > .card:not(:last-of-type) {
    border-bottom: 0;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
}
.accordion > .card:not(:first-of-type) {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}
.accordion > .card > .card-header {
    border-radius: 0;
    margin-bottom: -1px;
}

.breadcrumb {
    display: flex;
    flex-wrap: wrap;
    padding: 0.75rem 1rem;
    margin-bottom: 1rem;
    list-style: none;
    background-color: #e9ecef;
    border-radius: 0.25rem;
}

.breadcrumb-item + .breadcrumb-item {
    padding-left: 0.5rem;
}
.breadcrumb-item + .breadcrumb-item::before {
    display: inline-block;
    padding-right: 0.5rem;
    color: #6c757d;
    content: "/";
}

.breadcrumb-item + .breadcrumb-item:hover::before {
    text-decoration: underline;
}

.breadcrumb-item + .breadcrumb-item:hover::before {
    text-decoration: none;
}

.breadcrumb-item.active {
    color: #6c757d;
}

.pagination {
    display: flex;
    padding-left: 0;
    list-style: none;
    border-radius: 0.25rem;
}

.page-link {
    position: relative;
    display: block;
    padding: 0.5rem 0.75rem;
    margin-left: -1px;
    line-height: 1.25;
    color: ##ffffff;
    background-color: #fff;
    border: 1px solid #dee2e6;
}
.page-link:hover {
    z-index: 2;
    color: #ba6600;
    text-decoration: none;
    background-color: #e9ecef;
    border-color: #dee2e6;
}
.page-link:focus {
    z-index: 3;
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(255, 143, 7, 0.25);
}

.page-item:first-child .page-link {
    margin-left: 0;
    border-top-left-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem;
}

.page-item:last-child .page-link {
    border-top-right-radius: 0.25rem;
    border-bottom-right-radius: 0.25rem;
}

.page-item.active .page-link {
    z-index: 3;
    color: #fff;
    background-color: ##ffffff;
    border-color: ##ffffff;
}

.page-item.disabled .page-link {
    color: #6c757d;
    pointer-events: none;
    cursor: auto;
    background-color: #fff;
    border-color: #dee2e6;
}

.pagination-lg .page-link {
    padding: 0.75rem 1.5rem;
    font-size: 1.25rem;
    line-height: 1.5;
}

.pagination-lg .page-item:first-child .page-link {
    border-top-left-radius: 0.3rem;
    border-bottom-left-radius: 0.3rem;
}

.pagination-lg .page-item:last-child .page-link {
    border-top-right-radius: 0.3rem;
    border-bottom-right-radius: 0.3rem;
}

.pagination-sm .page-link {
    padding: 0.25rem 0.5rem;
    font-size: 0.875rem;
    line-height: 1.5;
}

.pagination-sm .page-item:first-child .page-link {
    border-top-left-radius: 0.2rem;
    border-bottom-left-radius: 0.2rem;
}

.pagination-sm .page-item:last-child .page-link {
    border-top-right-radius: 0.2rem;
    border-bottom-right-radius: 0.2rem;
}

.badge {
    display: inline-block;
    padding: 0.25em 0.4em;
    font-size: 75%;
    font-weight: 700;
    line-height: 1;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: 0.25rem;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out,
        border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
    .badge {
        transition: none;
    }
}
a.badge:hover,
a.badge:focus {
    text-decoration: none;
}
.badge:empty {
    display: none;
}

.btn .badge {
    position: relative;
    top: -1px;
}

.badge-pill {
    padding-right: 0.6em;
    padding-left: 0.6em;
    border-radius: 10rem;
}

.badge-primary {
    color: #212529;
    background-color: ##ffffff;
}
a.badge-primary:hover,
a.badge-primary:focus {
    color: #212529;
    background-color: #d37400;
}
a.badge-primary:focus,
a.badge-primary.focus {
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(255, 143, 7, 0.5);
}

.badge-secondary {
    color: #fff;
    background-color: #ba3833;
}
a.badge-secondary:hover,
a.badge-secondary:focus {
    color: #fff;
    background-color: #922c28;
}
a.badge-secondary:focus,
a.badge-secondary.focus {
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(186, 56, 51, 0.5);
}

.badge-success {
    color: #fff;
    background-color: #28a745;
}
a.badge-success:hover,
a.badge-success:focus {
    color: #fff;
    background-color: #1e7e34;
}
a.badge-success:focus,
a.badge-success.focus {
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
}

.badge-info {
    color: #fff;
    background-color: #17a2b8;
}
a.badge-info:hover,
a.badge-info:focus {
    color: #fff;
    background-color: #117a8b;
}
a.badge-info:focus,
a.badge-info.focus {
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5);
}

.badge-warning {
    color: #212529;
    background-color: #ffffff;
}
a.badge-warning:hover,
a.badge-warning:focus {
    color: #212529;
    background-color: #d39e00;
}
a.badge-warning:focus,
a.badge-warning.focus {
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5);
}

.badge-danger {
    color: #fff;
    background-color: #dc3545;
}
a.badge-danger:hover,
a.badge-danger:focus {
    color: #fff;
    background-color: #bd2130;
}
a.badge-danger:focus,
a.badge-danger.focus {
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
}

.badge-light {
    color: #212529;
    background-color: #f8f9fa;
}
a.badge-light:hover,
a.badge-light:focus {
    color: #212529;
    background-color: #dae0e5;
}
a.badge-light:focus,
a.badge-light.focus {
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
}

.badge-dark {
    color: #fff;
    background-color: #343a40;
}
a.badge-dark:hover,
a.badge-dark:focus {
    color: #fff;
    background-color: #1d2124;
}
a.badge-dark:focus,
a.badge-dark.focus {
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
}

.jumbotron {
    padding: 2rem 1rem;
    margin-bottom: 2rem;
    background-color: #e9ecef;
    border-radius: 0.3rem;
}
@media (min-width: 576px) {
    .jumbotron {
        padding: 4rem 2rem;
    }
}

.jumbotron-fluid {
    padding-right: 0;
    padding-left: 0;
    border-radius: 0;
}

.alert {
    position: relative;
    padding: 0.75rem 1.25rem;
    margin-bottom: 1rem;
    border: 1px solid transparent;
    border-radius: 0.25rem;
}

.alert-heading {
    color: inherit;
}

.alert-link {
    font-weight: 700;
}

.alert-dismissible {
    padding-right: 4rem;
}
.alert-dismissible .close {
    position: absolute;
    top: 0;
    right: 0;
    padding: 0.75rem 1.25rem;
    color: inherit;
}

.alert-primary {
    color: #854a04;
    background-color: #ffe9cd;
    border-color: #ffe0ba;
}
.alert-primary hr {
    border-top-color: #ffd5a1;
}
.alert-primary .alert-link {
    color: #532e03;
}

.alert-secondary {
    color: #611d1b;
    background-color: #f1d7d6;
    border-color: #ecc7c6;
}
.alert-secondary hr {
    border-top-color: #e6b4b3;
}
.alert-secondary .alert-link {
    color: #391110;
}

.alert-success {
    color: #155724;
    background-color: #d4edda;
    border-color: #c3e6cb;
}
.alert-success hr {
    border-top-color: #b1dfbb;
}
.alert-success .alert-link {
    color: #0b2e13;
}

.alert-info {
    color: #0c5460;
    background-color: #d1ecf1;
    border-color: #bee5eb;
}
.alert-info hr {
    border-top-color: #abdde5;
}
.alert-info .alert-link {
    color: #062c33;
}

.alert-warning {
    color: #856404;
    background-color: #fff3cd;
    border-color: #ffeeba;
}
.alert-warning hr {
    border-top-color: #ffe8a1;
}
.alert-warning .alert-link {
    color: #533f03;
}

.alert-danger {
    color: #721c24;
    background-color: #f8d7da;
    border-color: #f5c6cb;
}
.alert-danger hr {
    border-top-color: #f1b0b7;
}
.alert-danger .alert-link {
    color: #491217;
}

.alert-light {
    color: #818182;
    background-color: #fefefe;
    border-color: #fdfdfe;
}
.alert-light hr {
    border-top-color: #ececf6;
}
.alert-light .alert-link {
    color: #686868;
}

.alert-dark {
    color: #1b1e21;
    background-color: #d6d8d9;
    border-color: #c6c8ca;
}
.alert-dark hr {
    border-top-color: #b9bbbe;
}
.alert-dark .alert-link {
    color: #040505;
}

@-webkit-keyframes progress-bar-stripes {
    from {
        background-position: 1rem 0;
    }
    to {
        background-position: 0 0;
    }
}

@keyframes progress-bar-stripes {
    from {
        background-position: 1rem 0;
    }
    to {
        background-position: 0 0;
    }
}

.progress {
    display: flex;
    height: 1rem;
    overflow: hidden;
    font-size: 0.75rem;
    background-color: #e9ecef;
    border-radius: 0.25rem;
}

.progress-bar {
    display: flex;
    flex-direction: column;
    justify-content: center;
    overflow: hidden;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    background-color: ##ffffff;
    transition: width 0.6s ease;
}
@media (prefers-reduced-motion: reduce) {
    .progress-bar {
        transition: none;
    }
}

.progress-bar-striped {
    background-image: linear-gradient(
        45deg,
        rgba(255, 255, 255, 0.15) 25%,
        transparent 25%,
        transparent 50%,
        rgba(255, 255, 255, 0.15) 50%,
        rgba(255, 255, 255, 0.15) 75%,
        transparent 75%,
        transparent
    );
    background-size: 1rem 1rem;
}

.progress-bar-animated {
    -webkit-animation: progress-bar-stripes 1s linear infinite;
    animation: progress-bar-stripes 1s linear infinite;
}
@media (prefers-reduced-motion: reduce) {
    .progress-bar-animated {
        -webkit-animation: none;
        animation: none;
    }
}

.media {
    display: flex;
    align-items: flex-start;
}

.media-body {
    flex: 1;
}

.list-group {
    display: flex;
    flex-direction: column;
    padding-left: 0;
    margin-bottom: 0;
}

.list-group-item-action {
    width: 100%;
    color: #495057;
    text-align: inherit;
}
.list-group-item-action:hover,
.list-group-item-action:focus {
    z-index: 1;
    color: #495057;
    text-decoration: none;
    background-color: #f8f9fa;
}
.list-group-item-action:active {
    color: #212529;
    background-color: #e9ecef;
}

.list-group-item {
    position: relative;
    display: block;
    padding: 0.75rem 1.25rem;
    background-color: #fff;
    border: 1px solid rgba(0, 0, 0, 0.125);
}
.list-group-item:first-child {
    border-top-left-radius: 0.25rem;
    border-top-right-radius: 0.25rem;
}
.list-group-item:last-child {
    border-bottom-right-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem;
}
.list-group-item.disabled,
.list-group-item:disabled {
    color: #6c757d;
    pointer-events: none;
    background-color: #fff;
}
.list-group-item.active {
    z-index: 2;
    color: #fff;
    background-color: ##ffffff;
    border-color: ##ffffff;
}
.list-group-item + .list-group-item {
    border-top-width: 0;
}
.list-group-item + .list-group-item.active {
    margin-top: -1px;
    border-top-width: 1px;
}

.list-group-horizontal {
    flex-direction: row;
}
.list-group-horizontal .list-group-item:first-child {
    border-bottom-left-radius: 0.25rem;
    border-top-right-radius: 0;
}
.list-group-horizontal .list-group-item:last-child {
    border-top-right-radius: 0.25rem;
    border-bottom-left-radius: 0;
}
.list-group-horizontal .list-group-item.active {
    margin-top: 0;
}
.list-group-horizontal .list-group-item + .list-group-item {
    border-top-width: 1px;
    border-left-width: 0;
}
.list-group-horizontal .list-group-item + .list-group-item.active {
    margin-left: -1px;
    border-left-width: 1px;
}

@media (min-width: 576px) {
    .list-group-horizontal-sm {
        flex-direction: row;
    }
    .list-group-horizontal-sm .list-group-item:first-child {
        border-bottom-left-radius: 0.25rem;
        border-top-right-radius: 0;
    }
    .list-group-horizontal-sm .list-group-item:last-child {
        border-top-right-radius: 0.25rem;
        border-bottom-left-radius: 0;
    }
    .list-group-horizontal-sm .list-group-item.active {
        margin-top: 0;
    }
    .list-group-horizontal-sm .list-group-item + .list-group-item {
        border-top-width: 1px;
        border-left-width: 0;
    }
    .list-group-horizontal-sm .list-group-item + .list-group-item.active {
        margin-left: -1px;
        border-left-width: 1px;
    }
}

@media (min-width: 768px) {
    .list-group-horizontal-md {
        flex-direction: row;
    }
    .list-group-horizontal-md .list-group-item:first-child {
        border-bottom-left-radius: 0.25rem;
        border-top-right-radius: 0;
    }
    .list-group-horizontal-md .list-group-item:last-child {
        border-top-right-radius: 0.25rem;
        border-bottom-left-radius: 0;
    }
    .list-group-horizontal-md .list-group-item.active {
        margin-top: 0;
    }
    .list-group-horizontal-md .list-group-item + .list-group-item {
        border-top-width: 1px;
        border-left-width: 0;
    }
    .list-group-horizontal-md .list-group-item + .list-group-item.active {
        margin-left: -1px;
        border-left-width: 1px;
    }
}

@media (min-width: 992px) {
    .list-group-horizontal-lg {
        flex-direction: row;
    }
    .list-group-horizontal-lg .list-group-item:first-child {
        border-bottom-left-radius: 0.25rem;
        border-top-right-radius: 0;
    }
    .list-group-horizontal-lg .list-group-item:last-child {
        border-top-right-radius: 0.25rem;
        border-bottom-left-radius: 0;
    }
    .list-group-horizontal-lg .list-group-item.active {
        margin-top: 0;
    }
    .list-group-horizontal-lg .list-group-item + .list-group-item {
        border-top-width: 1px;
        border-left-width: 0;
    }
    .list-group-horizontal-lg .list-group-item + .list-group-item.active {
        margin-left: -1px;
        border-left-width: 1px;
    }
}

@media (min-width: 1200px) {
    .list-group-horizontal-xl {
        flex-direction: row;
    }
    .list-group-horizontal-xl .list-group-item:first-child {
        border-bottom-left-radius: 0.25rem;
        border-top-right-radius: 0;
    }
    .list-group-horizontal-xl .list-group-item:last-child {
        border-top-right-radius: 0.25rem;
        border-bottom-left-radius: 0;
    }
    .list-group-horizontal-xl .list-group-item.active {
        margin-top: 0;
    }
    .list-group-horizontal-xl .list-group-item + .list-group-item {
        border-top-width: 1px;
        border-left-width: 0;
    }
    .list-group-horizontal-xl .list-group-item + .list-group-item.active {
        margin-left: -1px;
        border-left-width: 1px;
    }
}

.list-group-flush .list-group-item {
    border-right-width: 0;
    border-left-width: 0;
    border-radius: 0;
}
.list-group-flush .list-group-item:first-child {
    border-top-width: 0;
}

.list-group-flush:last-child .list-group-item:last-child {
    border-bottom-width: 0;
}

.list-group-item-primary {
    color: #854a04;
    background-color: #ffe0ba;
}
.list-group-item-primary.list-group-item-action:hover,
.list-group-item-primary.list-group-item-action:focus {
    color: #854a04;
    background-color: #ffd5a1;
}
.list-group-item-primary.list-group-item-action.active {
    color: #fff;
    background-color: #854a04;
    border-color: #854a04;
}

.list-group-item-secondary {
    color: #611d1b;
    background-color: #ecc7c6;
}
.list-group-item-secondary.list-group-item-action:hover,
.list-group-item-secondary.list-group-item-action:focus {
    color: #611d1b;
    background-color: #e6b4b3;
}
.list-group-item-secondary.list-group-item-action.active {
    color: #fff;
    background-color: #611d1b;
    border-color: #611d1b;
}

.list-group-item-success {
    color: #155724;
    background-color: #c3e6cb;
}
.list-group-item-success.list-group-item-action:hover,
.list-group-item-success.list-group-item-action:focus {
    color: #155724;
    background-color: #b1dfbb;
}
.list-group-item-success.list-group-item-action.active {
    color: #fff;
    background-color: #155724;
    border-color: #155724;
}

.list-group-item-info {
    color: #0c5460;
    background-color: #bee5eb;
}
.list-group-item-info.list-group-item-action:hover,
.list-group-item-info.list-group-item-action:focus {
    color: #0c5460;
    background-color: #abdde5;
}
.list-group-item-info.list-group-item-action.active {
    color: #fff;
    background-color: #0c5460;
    border-color: #0c5460;
}

.list-group-item-warning {
    color: #856404;
    background-color: #ffeeba;
}
.list-group-item-warning.list-group-item-action:hover,
.list-group-item-warning.list-group-item-action:focus {
    color: #856404;
    background-color: #ffe8a1;
}
.list-group-item-warning.list-group-item-action.active {
    color: #fff;
    background-color: #856404;
    border-color: #856404;
}

.list-group-item-danger {
    color: #721c24;
    background-color: #f5c6cb;
}
.list-group-item-danger.list-group-item-action:hover,
.list-group-item-danger.list-group-item-action:focus {
    color: #721c24;
    background-color: #f1b0b7;
}
.list-group-item-danger.list-group-item-action.active {
    color: #fff;
    background-color: #721c24;
    border-color: #721c24;
}

.list-group-item-light {
    color: #818182;
    background-color: #fdfdfe;
}
.list-group-item-light.list-group-item-action:hover,
.list-group-item-light.list-group-item-action:focus {
    color: #818182;
    background-color: #ececf6;
}
.list-group-item-light.list-group-item-action.active {
    color: #fff;
    background-color: #818182;
    border-color: #818182;
}

.list-group-item-dark {
    color: #1b1e21;
    background-color: #c6c8ca;
}
.list-group-item-dark.list-group-item-action:hover,
.list-group-item-dark.list-group-item-action:focus {
    color: #1b1e21;
    background-color: #b9bbbe;
}
.list-group-item-dark.list-group-item-action.active {
    color: #fff;
    background-color: #1b1e21;
    border-color: #1b1e21;
}

.close {
    float: right;
    font-size: 1.5rem;
    font-weight: 700;
    line-height: 1;
    color: #000;
    text-shadow: 0 1px 0 #fff;
    opacity: 0.5;
}
@media (max-width: 1200px) {
    .close {
        font-size: calc(1.275rem + 0.3vw);
    }
}
.close:hover {
    color: #000;
    text-decoration: none;
}
.close:not(:disabled):not(.disabled):hover,
.close:not(:disabled):not(.disabled):focus {
    opacity: 0.75;
}

button.close {
    padding: 0;
    background-color: transparent;
    border: 0;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
}

a.close.disabled {
    pointer-events: none;
}

.toast {
    max-width: 350px;
    overflow: hidden;
    font-size: 0.875rem;
    background-color: rgba(255, 255, 255, 0.85);
    background-clip: padding-box;
    border: 1px solid rgba(0, 0, 0, 0.1);
    box-shadow: 0 0.25rem 0.75rem rgba(0, 0, 0, 0.1);
    -webkit-backdrop-filter: blur(10px);
    backdrop-filter: blur(10px);
    opacity: 0;
    border-radius: 0.25rem;
}
.toast:not(:last-child) {
    margin-bottom: 0.75rem;
}
.toast.showing {
    opacity: 1;
}
.toast.show {
    display: block;
    opacity: 1;
}
.toast.hide {
    display: none;
}

.toast-header {
    display: flex;
    align-items: center;
    padding: 0.25rem 0.75rem;
    color: #6c757d;
    background-color: rgba(255, 255, 255, 0.85);
    background-clip: padding-box;
    border-bottom: 1px solid rgba(0, 0, 0, 0.05);
}

.toast-body {
    padding: 0.75rem;
}

.modal-open {
    overflow: hidden;
}
.modal-open .modal {
    overflow-x: hidden;
    overflow-y: auto;
}

.modal {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1050;
    display: none;
    width: 100%;
    height: 100%;
    overflow: hidden;
    outline: 0;
}

.modal-dialog {
    position: relative;
    width: auto;
    margin: 0.5rem;
    pointer-events: none;
}
.modal.fade .modal-dialog {
    transition: transform 0.3s ease-out;
    transform: translate(0, -50px);
}
@media (prefers-reduced-motion: reduce) {
    .modal.fade .modal-dialog {
        transition: none;
    }
}
.modal.show .modal-dialog {
    transform: none;
}
.modal.modal-static .modal-dialog {
    transform: scale(1.02);
}

.modal-dialog-scrollable {
    display: flex;
    max-height: calc(100% - 1rem);
}
.modal-dialog-scrollable .modal-content {
    max-height: calc(100vh - 1rem);
    overflow: hidden;
}
.modal-dialog-scrollable .modal-header,
.modal-dialog-scrollable .modal-footer {
    flex-shrink: 0;
}
.modal-dialog-scrollable .modal-body {
    overflow-y: auto;
}

.modal-dialog-centered {
    display: flex;
    align-items: center;
    min-height: calc(100% - 1rem);
}
.modal-dialog-centered::before {
    display: block;
    height: calc(100vh - 1rem);
    content: "";
}
.modal-dialog-centered.modal-dialog-scrollable {
    flex-direction: column;
    justify-content: center;
    height: 100%;
}
.modal-dialog-centered.modal-dialog-scrollable .modal-content {
    max-height: none;
}
.modal-dialog-centered.modal-dialog-scrollable::before {
    content: none;
}

.modal-content {
    position: relative;
    display: flex;
    flex-direction: column;
    width: 100%;
    pointer-events: auto;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0, 0, 0, 0.2);
    border-radius: 0.3rem;
    outline: 0;
}

.modal-backdrop {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1040;
    width: 100vw;
    height: 100vh;
    background-color: #000;
}
.modal-backdrop.fade {
    opacity: 0;
}
.modal-backdrop.show {
    opacity: 0.5;
}

.modal-header {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    padding: 1rem 1rem;
    border-bottom: 1px solid #dee2e6;
    border-top-left-radius: calc(0.3rem - 1px);
    border-top-right-radius: calc(0.3rem - 1px);
}
.modal-header .close {
    padding: 1rem 1rem;
    margin: -1rem -1rem -1rem auto;
}

.modal-title {
    margin-bottom: 0;
    line-height: 1.5;
}

.modal-body {
    position: relative;
    flex: 1 1 auto;
    padding: 1rem;
}

.modal-footer {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: flex-end;
    padding: 0.75rem;
    border-top: 1px solid #dee2e6;
    border-bottom-right-radius: calc(0.3rem - 1px);
    border-bottom-left-radius: calc(0.3rem - 1px);
}
.modal-footer > * {
    margin: 0.25rem;
}

.modal-scrollbar-measure {
    position: absolute;
    top: -9999px;
    width: 50px;
    height: 50px;
    overflow: scroll;
}

@media (min-width: 576px) {
    .modal-dialog {
        max-width: 500px;
        margin: 1.75rem auto;
    }
    .modal-dialog-scrollable {
        max-height: calc(100% - 3.5rem);
    }
    .modal-dialog-scrollable .modal-content {
        max-height: calc(100vh - 3.5rem);
    }
    .modal-dialog-centered {
        min-height: calc(100% - 3.5rem);
    }
    .modal-dialog-centered::before {
        height: calc(100vh - 3.5rem);
    }
    .modal-sm {
        max-width: 300px;
    }
}

@media (min-width: 992px) {
    .modal-lg,
    .modal-xl {
        max-width: 800px;
    }
}

@media (min-width: 1200px) {
    .modal-xl {
        max-width: 1140px;
    }
}

.tooltip {
    position: absolute;
    z-index: 1070;
    display: block;
    margin: 0;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
        "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji",
        "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    font-style: normal;
    font-weight: 400;
    line-height: 1.5;
    text-align: left;
    text-align: start;
    text-decoration: none;
    text-shadow: none;
    text-transform: none;
    letter-spacing: normal;
    word-break: normal;
    word-spacing: normal;
    white-space: normal;
    line-break: auto;
    font-size: 0.875rem;
    word-wrap: break-word;
    opacity: 0;
}
.tooltip.show {
    opacity: 0.9;
}
.tooltip .arrow {
    position: absolute;
    display: block;
    width: 0.8rem;
    height: 0.4rem;
}
.tooltip .arrow::before {
    position: absolute;
    content: "";
    border-color: transparent;
    border-style: solid;
}

.bs-tooltip-top,
.bs-tooltip-auto[x-placement^="top"] {
    padding: 0.4rem 0;
}
.bs-tooltip-top .arrow,
.bs-tooltip-auto[x-placement^="top"] .arrow {
    bottom: 0;
}
.bs-tooltip-top .arrow::before,
.bs-tooltip-auto[x-placement^="top"] .arrow::before {
    top: 0;
    border-width: 0.4rem 0.4rem 0;
    border-top-color: #000;
}

.bs-tooltip-right,
.bs-tooltip-auto[x-placement^="right"] {
    padding: 0 0.4rem;
}
.bs-tooltip-right .arrow,
.bs-tooltip-auto[x-placement^="right"] .arrow {
    left: 0;
    width: 0.4rem;
    height: 0.8rem;
}
.bs-tooltip-right .arrow::before,
.bs-tooltip-auto[x-placement^="right"] .arrow::before {
    right: 0;
    border-width: 0.4rem 0.4rem 0.4rem 0;
    border-right-color: #000;
}

.bs-tooltip-bottom,
.bs-tooltip-auto[x-placement^="bottom"] {
    padding: 0.4rem 0;
}
.bs-tooltip-bottom .arrow,
.bs-tooltip-auto[x-placement^="bottom"] .arrow {
    top: 0;
}
.bs-tooltip-bottom .arrow::before,
.bs-tooltip-auto[x-placement^="bottom"] .arrow::before {
    bottom: 0;
    border-width: 0 0.4rem 0.4rem;
    border-bottom-color: #000;
}

.bs-tooltip-left,
.bs-tooltip-auto[x-placement^="left"] {
    padding: 0 0.4rem;
}
.bs-tooltip-left .arrow,
.bs-tooltip-auto[x-placement^="left"] .arrow {
    right: 0;
    width: 0.4rem;
    height: 0.8rem;
}
.bs-tooltip-left .arrow::before,
.bs-tooltip-auto[x-placement^="left"] .arrow::before {
    left: 0;
    border-width: 0.4rem 0 0.4rem 0.4rem;
    border-left-color: #000;
}

.tooltip-inner {
    max-width: 200px;
    padding: 0.25rem 0.5rem;
    color: #fff;
    text-align: center;
    background-color: #000;
    border-radius: 0.25rem;
}

.popover {
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1060;
    display: block;
    max-width: 276px;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
        "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji",
        "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    font-style: normal;
    font-weight: 400;
    line-height: 1.5;
    text-align: left;
    text-align: start;
    text-decoration: none;
    text-shadow: none;
    text-transform: none;
    letter-spacing: normal;
    word-break: normal;
    word-spacing: normal;
    white-space: normal;
    line-break: auto;
    font-size: 0.875rem;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0, 0, 0, 0.2);
    border-radius: 0.3rem;
}
.popover .arrow {
    position: absolute;
    display: block;
    width: 1rem;
    height: 0.5rem;
    margin: 0 0.3rem;
}
.popover .arrow::before,
.popover .arrow::after {
    position: absolute;
    display: block;
    content: "";
    border-color: transparent;
    border-style: solid;
}

.bs-popover-top,
.bs-popover-auto[x-placement^="top"] {
    margin-bottom: 0.5rem;
}
.bs-popover-top > .arrow,
.bs-popover-auto[x-placement^="top"] > .arrow {
    bottom: calc(-0.5rem - 1px);
}
.bs-popover-top > .arrow::before,
.bs-popover-auto[x-placement^="top"] > .arrow::before {
    bottom: 0;
    border-width: 0.5rem 0.5rem 0;
    border-top-color: rgba(0, 0, 0, 0.25);
}
.bs-popover-top > .arrow::after,
.bs-popover-auto[x-placement^="top"] > .arrow::after {
    bottom: 1px;
    border-width: 0.5rem 0.5rem 0;
    border-top-color: #fff;
}

.bs-popover-right,
.bs-popover-auto[x-placement^="right"] {
    margin-left: 0.5rem;
}
.bs-popover-right > .arrow,
.bs-popover-auto[x-placement^="right"] > .arrow {
    left: calc(-0.5rem - 1px);
    width: 0.5rem;
    height: 1rem;
    margin: 0.3rem 0;
}
.bs-popover-right > .arrow::before,
.bs-popover-auto[x-placement^="right"] > .arrow::before {
    left: 0;
    border-width: 0.5rem 0.5rem 0.5rem 0;
    border-right-color: rgba(0, 0, 0, 0.25);
}
.bs-popover-right > .arrow::after,
.bs-popover-auto[x-placement^="right"] > .arrow::after {
    left: 1px;
    border-width: 0.5rem 0.5rem 0.5rem 0;
    border-right-color: #fff;
}

.bs-popover-bottom,
.bs-popover-auto[x-placement^="bottom"] {
    margin-top: 0.5rem;
}
.bs-popover-bottom > .arrow,
.bs-popover-auto[x-placement^="bottom"] > .arrow {
    top: calc(-0.5rem - 1px);
}
.bs-popover-bottom > .arrow::before,
.bs-popover-auto[x-placement^="bottom"] > .arrow::before {
    top: 0;
    border-width: 0 0.5rem 0.5rem 0.5rem;
    border-bottom-color: rgba(0, 0, 0, 0.25);
}
.bs-popover-bottom > .arrow::after,
.bs-popover-auto[x-placement^="bottom"] > .arrow::after {
    top: 1px;
    border-width: 0 0.5rem 0.5rem 0.5rem;
    border-bottom-color: #fff;
}
.bs-popover-bottom .popover-header::before,
.bs-popover-auto[x-placement^="bottom"] .popover-header::before {
    position: absolute;
    top: 0;
    left: 50%;
    display: block;
    width: 1rem;
    margin-left: -0.5rem;
    content: "";
    border-bottom: 1px solid #f7f7f7;
}

.bs-popover-left,
.bs-popover-auto[x-placement^="left"] {
    margin-right: 0.5rem;
}
.bs-popover-left > .arrow,
.bs-popover-auto[x-placement^="left"] > .arrow {
    right: calc(-0.5rem - 1px);
    width: 0.5rem;
    height: 1rem;
    margin: 0.3rem 0;
}
.bs-popover-left > .arrow::before,
.bs-popover-auto[x-placement^="left"] > .arrow::before {
    right: 0;
    border-width: 0.5rem 0 0.5rem 0.5rem;
    border-left-color: rgba(0, 0, 0, 0.25);
}
.bs-popover-left > .arrow::after,
.bs-popover-auto[x-placement^="left"] > .arrow::after {
    right: 1px;
    border-width: 0.5rem 0 0.5rem 0.5rem;
    border-left-color: #fff;
}

.popover-header {
    padding: 0.5rem 0.75rem;
    margin-bottom: 0;
    font-size: 1rem;
    background-color: #f7f7f7;
    border-bottom: 1px solid #ebebeb;
    border-top-left-radius: calc(0.3rem - 1px);
    border-top-right-radius: calc(0.3rem - 1px);
}
.popover-header:empty {
    display: none;
}

.popover-body {
    padding: 0.5rem 0.75rem;
    color: #212529;
}

.carousel {
    position: relative;
}

.carousel.pointer-event {
    touch-action: pan-y;
}

.carousel-inner {
    position: relative;
    width: 100%;
    overflow: hidden;
}
.carousel-inner::after {
    display: block;
    clear: both;
    content: "";
}

.carousel-item {
    position: relative;
    display: none;
    float: left;
    width: 100%;
    margin-right: -100%;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    transition: transform 0.6s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
    .carousel-item {
        transition: none;
    }
}

.carousel-item.active,
.carousel-item-next,
.carousel-item-prev {
    display: block;
}

.carousel-item-next:not(.carousel-item-left),
.active.carousel-item-right {
    transform: translateX(100%);
}

.carousel-item-prev:not(.carousel-item-right),
.active.carousel-item-left {
    transform: translateX(-100%);
}

.carousel-fade .carousel-item {
    opacity: 0;
    transition-property: opacity;
    transform: none;
}

.carousel-fade .carousel-item.active,
.carousel-fade .carousel-item-next.carousel-item-left,
.carousel-fade .carousel-item-prev.carousel-item-right {
    z-index: 1;
    opacity: 1;
}

.carousel-fade .active.carousel-item-left,
.carousel-fade .active.carousel-item-right {
    z-index: 0;
    opacity: 0;
    transition: opacity 0s 0.6s;
}
@media (prefers-reduced-motion: reduce) {
    .carousel-fade .active.carousel-item-left,
    .carousel-fade .active.carousel-item-right {
        transition: none;
    }
}

.carousel-control-prev,
.carousel-control-next {
    position: absolute;
    top: 0;
    bottom: 0;
    z-index: 1;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 15%;
    color: #fff;
    text-align: center;
    opacity: 0.5;
    transition: opacity 0.15s ease;
}
@media (prefers-reduced-motion: reduce) {
    .carousel-control-prev,
    .carousel-control-next {
        transition: none;
    }
}
.carousel-control-prev:hover,
.carousel-control-prev:focus,
.carousel-control-next:hover,
.carousel-control-next:focus {
    color: #fff;
    text-decoration: none;
    outline: 0;
    opacity: 0.9;
}

.carousel-control-prev {
    left: 0;
}

.carousel-control-next {
    right: 0;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
    display: inline-block;
    width: 20px;
    height: 20px;
    background: no-repeat 50% / 100% 100%;
}

.carousel-control-prev-icon {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath d='M5.25 0l-4 4 4 4 1.5-1.5L4.25 4l2.5-2.5L5.25 0z'/%3e%3c/svg%3e");
}

.carousel-control-next-icon {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath d='M2.75 0l-1.5 1.5L3.75 4l-2.5 2.5L2.75 8l4-4-4-4z'/%3e%3c/svg%3e");
}

.carousel-indicators {
    position: absolute;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 15;
    display: flex;
    justify-content: center;
    padding-left: 0;
    margin-right: 15%;
    margin-left: 15%;
    list-style: none;
}
.carousel-indicators li {
    box-sizing: content-box;
    flex: 0 1 auto;
    width: 30px;
    height: 3px;
    margin-right: 3px;
    margin-left: 3px;
    text-indent: -999px;
    cursor: pointer;
    background-color: #fff;
    background-clip: padding-box;
    border-top: 10px solid transparent;
    border-bottom: 10px solid transparent;
    opacity: 0.5;
    transition: opacity 0.6s ease;
}
@media (prefers-reduced-motion: reduce) {
    .carousel-indicators li {
        transition: none;
    }
}
.carousel-indicators .active {
    opacity: 1;
}

.carousel-caption {
    position: absolute;
    right: 15%;
    bottom: 20px;
    left: 15%;
    z-index: 10;
    padding-top: 20px;
    padding-bottom: 20px;
    color: #fff;
    text-align: center;
}

@-webkit-keyframes spinner-border {
    to {
        transform: rotate(360deg);
    }
}

@keyframes spinner-border {
    to {
        transform: rotate(360deg);
    }
}

.spinner-border {
    display: inline-block;
    width: 2rem;
    height: 2rem;
    vertical-align: text-bottom;
    border: 0.25em solid currentColor;
    border-right-color: transparent;
    border-radius: 50%;
    -webkit-animation: spinner-border 0.75s linear infinite;
    animation: spinner-border 0.75s linear infinite;
}

.spinner-border-sm {
    width: 1rem;
    height: 1rem;
    border-width: 0.2em;
}

@-webkit-keyframes spinner-grow {
    0% {
        transform: scale(0);
    }
    50% {
        opacity: 1;
    }
}

@keyframes spinner-grow {
    0% {
        transform: scale(0);
    }
    50% {
        opacity: 1;
    }
}

.spinner-grow {
    display: inline-block;
    width: 2rem;
    height: 2rem;
    vertical-align: text-bottom;
    background-color: currentColor;
    border-radius: 50%;
    opacity: 0;
    -webkit-animation: spinner-grow 0.75s linear infinite;
    animation: spinner-grow 0.75s linear infinite;
}

.spinner-grow-sm {
    width: 1rem;
    height: 1rem;
}

.align-baseline {
    vertical-align: baseline !important;
}

.align-top {
    vertical-align: top !important;
}

.align-middle {
    vertical-align: middle !important;
}

.align-bottom {
    vertical-align: bottom !important;
}

.align-text-bottom {
    vertical-align: text-bottom !important;
}

.align-text-top {
    vertical-align: text-top !important;
}

.bg-primary {
    background-color: ##ffffff !important;
}

a.bg-primary:hover,
a.bg-primary:focus,
button.bg-primary:hover,
button.bg-primary:focus {
    background-color: #d37400 !important;
}

.bg-secondary {
    background-color: #ba3833 !important;
}

a.bg-secondary:hover,
a.bg-secondary:focus,
button.bg-secondary:hover,
button.bg-secondary:focus {
    background-color: #922c28 !important;
}

.bg-success {
    background-color: #28a745 !important;
}

a.bg-success:hover,
a.bg-success:focus,
button.bg-success:hover,
button.bg-success:focus {
    background-color: #1e7e34 !important;
}

.bg-info {
    background-color: #17a2b8 !important;
}

a.bg-info:hover,
a.bg-info:focus,
button.bg-info:hover,
button.bg-info:focus {
    background-color: #117a8b !important;
}

.bg-warning {
    background-color: ##ffffff !important;
}

a.bg-warning:hover,
a.bg-warning:focus,
button.bg-warning:hover,
button.bg-warning:focus {
    background-color: #d39e00 !important;
}

.bg-danger {
    background-color: #dc3545 !important;
}

a.bg-danger:hover,
a.bg-danger:focus,
button.bg-danger:hover,
button.bg-danger:focus {
    background-color: #bd2130 !important;
}

.bg-light {
    background-color: #f8f9fa !important;
}

a.bg-light:hover,
a.bg-light:focus,
button.bg-light:hover,
button.bg-light:focus {
    background-color: #dae0e5 !important;
}

.bg-dark {
    background-color: #343a40 !important;
}

a.bg-dark:hover,
a.bg-dark:focus,
button.bg-dark:hover,
button.bg-dark:focus {
    background-color: #1d2124 !important;
}

.bg-white {
    background-color: #fff !important;
}

.bg-transparent {
    background-color: transparent !important;
}

.border {
    border: 1px solid #dee2e6 !important;
}

.border-top {
    border-top: 1px solid #dee2e6 !important;
}

.border-right {
    border-right: 1px solid #dee2e6 !important;
}

.border-bottom {
    border-bottom: 1px solid #dee2e6 !important;
}

.border-left {
    border-left: 1px solid #dee2e6 !important;
}

.border-0 {
    border: 0 !important;
}

.border-top-0 {
    border-top: 0 !important;
}

.border-right-0 {
    border-right: 0 !important;
}

.border-bottom-0 {
    border-bottom: 0 !important;
}

.border-left-0 {
    border-left: 0 !important;
}

.border-primary {
    border-color: ##ffffff !important;
}

.border-secondary {
    border-color: #ba3833 !important;
}

.border-success {
    border-color: #28a745 !important;
}

.border-info {
    border-color: #17a2b8 !important;
}

.border-warning {
    border-color: #ffffff !important;
}

.border-danger {
    border-color: #dc3545 !important;
}

.border-light {
    border-color: #f8f9fa !important;
}

.border-dark {
    border-color: #343a40 !important;
}

.border-white {
    border-color: #fff !important;
}

.rounded-sm {
    border-radius: 0.2rem !important;
}

.rounded {
    border-radius: 0.25rem !important;
}

.rounded-top {
    border-top-left-radius: 0.25rem !important;
    border-top-right-radius: 0.25rem !important;
}

.rounded-right {
    border-top-right-radius: 0.25rem !important;
    border-bottom-right-radius: 0.25rem !important;
}

.rounded-bottom {
    border-bottom-right-radius: 0.25rem !important;
    border-bottom-left-radius: 0.25rem !important;
}

.rounded-left {
    border-top-left-radius: 0.25rem !important;
    border-bottom-left-radius: 0.25rem !important;
}

.rounded-lg {
    border-radius: 0.3rem !important;
}

.rounded-circle {
    border-radius: 50% !important;
}

.rounded-pill {
    border-radius: 50rem !important;
}

.rounded-0 {
    border-radius: 0 !important;
}

.clearfix::after {
    display: block;
    clear: both;
    content: "";
}

.d-none {
    display: none !important;
}

.d-inline {
    display: inline !important;
}

.d-inline-block {
    display: inline-block !important;
}

.d-block {
    display: block !important;
}

.d-table {
    display: table !important;
}

.d-table-row {
    display: table-row !important;
}

.d-table-cell {
    display: table-cell !important;
}

.d-flex {
    display: flex !important;
}

.d-inline-flex {
    display: inline-flex !important;
}

@media (min-width: 576px) {
    .d-sm-none {
        display: none !important;
    }
    .d-sm-inline {
        display: inline !important;
    }
    .d-sm-inline-block {
        display: inline-block !important;
    }
    .d-sm-block {
        display: block !important;
    }
    .d-sm-table {
        display: table !important;
    }
    .d-sm-table-row {
        display: table-row !important;
    }
    .d-sm-table-cell {
        display: table-cell !important;
    }
    .d-sm-flex {
        display: flex !important;
    }
    .d-sm-inline-flex {
        display: inline-flex !important;
    }
}

@media (min-width: 768px) {
    .d-md-none {
        display: none !important;
    }
    .d-md-inline {
        display: inline !important;
    }
    .d-md-inline-block {
        display: inline-block !important;
    }
    .d-md-block {
        display: block !important;
    }
    .d-md-table {
        display: table !important;
    }
    .d-md-table-row {
        display: table-row !important;
    }
    .d-md-table-cell {
        display: table-cell !important;
    }
    .d-md-flex {
        display: flex !important;
    }
    .d-md-inline-flex {
        display: inline-flex !important;
    }
}

@media (min-width: 992px) {
    .d-lg-none {
        display: none !important;
    }
    .d-lg-inline {
        display: inline !important;
    }
    .d-lg-inline-block {
        display: inline-block !important;
    }
    .d-lg-block {
        display: block !important;
    }
    .d-lg-table {
        display: table !important;
    }
    .d-lg-table-row {
        display: table-row !important;
    }
    .d-lg-table-cell {
        display: table-cell !important;
    }
    .d-lg-flex {
        display: flex !important;
    }
    .d-lg-inline-flex {
        display: inline-flex !important;
    }
}

@media (min-width: 1200px) {
    .d-xl-none {
        display: none !important;
    }
    .d-xl-inline {
        display: inline !important;
    }
    .d-xl-inline-block {
        display: inline-block !important;
    }
    .d-xl-block {
        display: block !important;
    }
    .d-xl-table {
        display: table !important;
    }
    .d-xl-table-row {
        display: table-row !important;
    }
    .d-xl-table-cell {
        display: table-cell !important;
    }
    .d-xl-flex {
        display: flex !important;
    }
    .d-xl-inline-flex {
        display: inline-flex !important;
    }
}

@media print {
    .d-print-none {
        display: none !important;
    }
    .d-print-inline {
        display: inline !important;
    }
    .d-print-inline-block {
        display: inline-block !important;
    }
    .d-print-block {
        display: block !important;
    }
    .d-print-table {
        display: table !important;
    }
    .d-print-table-row {
        display: table-row !important;
    }
    .d-print-table-cell {
        display: table-cell !important;
    }
    .d-print-flex {
        display: flex !important;
    }
    .d-print-inline-flex {
        display: inline-flex !important;
    }
}

.embed-responsive {
    position: relative;
    display: block;
    width: 100%;
    padding: 0;
    overflow: hidden;
}
.embed-responsive::before {
    display: block;
    content: "";
}
.embed-responsive .embed-responsive-item,
.embed-responsive iframe,
.embed-responsive embed,
.embed-responsive object,
.embed-responsive video {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: 0;
}

.embed-responsive-21by9::before {
    padding-top: 42.85714%;
}

.embed-responsive-16by9::before {
    padding-top: 56.25%;
}

.embed-responsive-4by3::before {
    padding-top: 75%;
}

.embed-responsive-1by1::before {
    padding-top: 100%;
}

.embed-responsive-21by9::before {
    padding-top: 42.85714%;
}

.embed-responsive-16by9::before {
    padding-top: 56.25%;
}

.embed-responsive-4by3::before {
    padding-top: 75%;
}

.embed-responsive-1by1::before {
    padding-top: 100%;
}

.flex-row {
    flex-direction: row !important;
}

.flex-column {
    flex-direction: column !important;
}

.flex-row-reverse {
    flex-direction: row-reverse !important;
}

.flex-column-reverse {
    flex-direction: column-reverse !important;
}

.flex-wrap {
    flex-wrap: wrap !important;
}

.flex-nowrap {
    flex-wrap: nowrap !important;
}

.flex-wrap-reverse {
    flex-wrap: wrap-reverse !important;
}

.flex-fill {
    flex: 1 1 auto !important;
}

.flex-grow-0 {
    flex-grow: 0 !important;
}

.flex-grow-1 {
    flex-grow: 1 !important;
}

.flex-shrink-0 {
    flex-shrink: 0 !important;
}

.flex-shrink-1 {
    flex-shrink: 1 !important;
}

.justify-content-start {
    justify-content: flex-start !important;
}

.justify-content-end {
    justify-content: flex-end !important;
}

.justify-content-center {
    justify-content: center !important;
}

.justify-content-between {
    justify-content: space-between !important;
}

.justify-content-around {
    justify-content: space-around !important;
}

.align-items-start {
    align-items: flex-start !important;
}

.align-items-end {
    align-items: flex-end !important;
}

.align-items-center {
    align-items: center !important;
}

.align-items-baseline {
    align-items: baseline !important;
}

.align-items-stretch {
    align-items: stretch !important;
}

.align-content-start {
    align-content: flex-start !important;
}

.align-content-end {
    align-content: flex-end !important;
}

.align-content-center {
    align-content: center !important;
}

.align-content-between {
    align-content: space-between !important;
}

.align-content-around {
    align-content: space-around !important;
}

.align-content-stretch {
    align-content: stretch !important;
}

.align-self-auto {
    align-self: auto !important;
}

.align-self-start {
    align-self: flex-start !important;
}

.align-self-end {
    align-self: flex-end !important;
}

.align-self-center {
    align-self: center !important;
}

.align-self-baseline {
    align-self: baseline !important;
}

.align-self-stretch {
    align-self: stretch !important;
}

@media (min-width: 576px) {
    .flex-sm-row {
        flex-direction: row !important;
    }
    .flex-sm-column {
        flex-direction: column !important;
    }
    .flex-sm-row-reverse {
        flex-direction: row-reverse !important;
    }
    .flex-sm-column-reverse {
        flex-direction: column-reverse !important;
    }
    .flex-sm-wrap {
        flex-wrap: wrap !important;
    }
    .flex-sm-nowrap {
        flex-wrap: nowrap !important;
    }
    .flex-sm-wrap-reverse {
        flex-wrap: wrap-reverse !important;
    }
    .flex-sm-fill {
        flex: 1 1 auto !important;
    }
    .flex-sm-grow-0 {
        flex-grow: 0 !important;
    }
    .flex-sm-grow-1 {
        flex-grow: 1 !important;
    }
    .flex-sm-shrink-0 {
        flex-shrink: 0 !important;
    }
    .flex-sm-shrink-1 {
        flex-shrink: 1 !important;
    }
    .justify-content-sm-start {
        justify-content: flex-start !important;
    }
    .justify-content-sm-end {
        justify-content: flex-end !important;
    }
    .justify-content-sm-center {
        justify-content: center !important;
    }
    .justify-content-sm-between {
        justify-content: space-between !important;
    }
    .justify-content-sm-around {
        justify-content: space-around !important;
    }
    .align-items-sm-start {
        align-items: flex-start !important;
    }
    .align-items-sm-end {
        align-items: flex-end !important;
    }
    .align-items-sm-center {
        align-items: center !important;
    }
    .align-items-sm-baseline {
        align-items: baseline !important;
    }
    .align-items-sm-stretch {
        align-items: stretch !important;
    }
    .align-content-sm-start {
        align-content: flex-start !important;
    }
    .align-content-sm-end {
        align-content: flex-end !important;
    }
    .align-content-sm-center {
        align-content: center !important;
    }
    .align-content-sm-between {
        align-content: space-between !important;
    }
    .align-content-sm-around {
        align-content: space-around !important;
    }
    .align-content-sm-stretch {
        align-content: stretch !important;
    }
    .align-self-sm-auto {
        align-self: auto !important;
    }
    .align-self-sm-start {
        align-self: flex-start !important;
    }
    .align-self-sm-end {
        align-self: flex-end !important;
    }
    .align-self-sm-center {
        align-self: center !important;
    }
    .align-self-sm-baseline {
        align-self: baseline !important;
    }
    .align-self-sm-stretch {
        align-self: stretch !important;
    }
}

@media (min-width: 768px) {
    .flex-md-row {
        flex-direction: row !important;
    }
    .flex-md-column {
        flex-direction: column !important;
    }
    .flex-md-row-reverse {
        flex-direction: row-reverse !important;
    }
    .flex-md-column-reverse {
        flex-direction: column-reverse !important;
    }
    .flex-md-wrap {
        flex-wrap: wrap !important;
    }
    .flex-md-nowrap {
        flex-wrap: nowrap !important;
    }
    .flex-md-wrap-reverse {
        flex-wrap: wrap-reverse !important;
    }
    .flex-md-fill {
        flex: 1 1 auto !important;
    }
    .flex-md-grow-0 {
        flex-grow: 0 !important;
    }
    .flex-md-grow-1 {
        flex-grow: 1 !important;
    }
    .flex-md-shrink-0 {
        flex-shrink: 0 !important;
    }
    .flex-md-shrink-1 {
        flex-shrink: 1 !important;
    }
    .justify-content-md-start {
        justify-content: flex-start !important;
    }
    .justify-content-md-end {
        justify-content: flex-end !important;
    }
    .justify-content-md-center {
        justify-content: center !important;
    }
    .justify-content-md-between {
        justify-content: space-between !important;
    }
    .justify-content-md-around {
        justify-content: space-around !important;
    }
    .align-items-md-start {
        align-items: flex-start !important;
    }
    .align-items-md-end {
        align-items: flex-end !important;
    }
    .align-items-md-center {
        align-items: center !important;
    }
    .align-items-md-baseline {
        align-items: baseline !important;
    }
    .align-items-md-stretch {
        align-items: stretch !important;
    }
    .align-content-md-start {
        align-content: flex-start !important;
    }
    .align-content-md-end {
        align-content: flex-end !important;
    }
    .align-content-md-center {
        align-content: center !important;
    }
    .align-content-md-between {
        align-content: space-between !important;
    }
    .align-content-md-around {
        align-content: space-around !important;
    }
    .align-content-md-stretch {
        align-content: stretch !important;
    }
    .align-self-md-auto {
        align-self: auto !important;
    }
    .align-self-md-start {
        align-self: flex-start !important;
    }
    .align-self-md-end {
        align-self: flex-end !important;
    }
    .align-self-md-center {
        align-self: center !important;
    }
    .align-self-md-baseline {
        align-self: baseline !important;
    }
    .align-self-md-stretch {
        align-self: stretch !important;
    }
}

@media (min-width: 992px) {
    .flex-lg-row {
        flex-direction: row !important;
    }
    .flex-lg-column {
        flex-direction: column !important;
    }
    .flex-lg-row-reverse {
        flex-direction: row-reverse !important;
    }
    .flex-lg-column-reverse {
        flex-direction: column-reverse !important;
    }
    .flex-lg-wrap {
        flex-wrap: wrap !important;
    }
    .flex-lg-nowrap {
        flex-wrap: nowrap !important;
    }
    .flex-lg-wrap-reverse {
        flex-wrap: wrap-reverse !important;
    }
    .flex-lg-fill {
        flex: 1 1 auto !important;
    }
    .flex-lg-grow-0 {
        flex-grow: 0 !important;
    }
    .flex-lg-grow-1 {
        flex-grow: 1 !important;
    }
    .flex-lg-shrink-0 {
        flex-shrink: 0 !important;
    }
    .flex-lg-shrink-1 {
        flex-shrink: 1 !important;
    }
    .justify-content-lg-start {
        justify-content: flex-start !important;
    }
    .justify-content-lg-end {
        justify-content: flex-end !important;
    }
    .justify-content-lg-center {
        justify-content: center !important;
    }
    .justify-content-lg-between {
        justify-content: space-between !important;
    }
    .justify-content-lg-around {
        justify-content: space-around !important;
    }
    .align-items-lg-start {
        align-items: flex-start !important;
    }
    .align-items-lg-end {
        align-items: flex-end !important;
    }
    .align-items-lg-center {
        align-items: center !important;
    }
    .align-items-lg-baseline {
        align-items: baseline !important;
    }
    .align-items-lg-stretch {
        align-items: stretch !important;
    }
    .align-content-lg-start {
        align-content: flex-start !important;
    }
    .align-content-lg-end {
        align-content: flex-end !important;
    }
    .align-content-lg-center {
        align-content: center !important;
    }
    .align-content-lg-between {
        align-content: space-between !important;
    }
    .align-content-lg-around {
        align-content: space-around !important;
    }
    .align-content-lg-stretch {
        align-content: stretch !important;
    }
    .align-self-lg-auto {
        align-self: auto !important;
    }
    .align-self-lg-start {
        align-self: flex-start !important;
    }
    .align-self-lg-end {
        align-self: flex-end !important;
    }
    .align-self-lg-center {
        align-self: center !important;
    }
    .align-self-lg-baseline {
        align-self: baseline !important;
    }
    .align-self-lg-stretch {
        align-self: stretch !important;
    }
}

@media (min-width: 1200px) {
    .flex-xl-row {
        flex-direction: row !important;
    }
    .flex-xl-column {
        flex-direction: column !important;
    }
    .flex-xl-row-reverse {
        flex-direction: row-reverse !important;
    }
    .flex-xl-column-reverse {
        flex-direction: column-reverse !important;
    }
    .flex-xl-wrap {
        flex-wrap: wrap !important;
    }
    .flex-xl-nowrap {
        flex-wrap: nowrap !important;
    }
    .flex-xl-wrap-reverse {
        flex-wrap: wrap-reverse !important;
    }
    .flex-xl-fill {
        flex: 1 1 auto !important;
    }
    .flex-xl-grow-0 {
        flex-grow: 0 !important;
    }
    .flex-xl-grow-1 {
        flex-grow: 1 !important;
    }
    .flex-xl-shrink-0 {
        flex-shrink: 0 !important;
    }
    .flex-xl-shrink-1 {
        flex-shrink: 1 !important;
    }
    .justify-content-xl-start {
        justify-content: flex-start !important;
    }
    .justify-content-xl-end {
        justify-content: flex-end !important;
    }
    .justify-content-xl-center {
        justify-content: center !important;
    }
    .justify-content-xl-between {
        justify-content: space-between !important;
    }
    .justify-content-xl-around {
        justify-content: space-around !important;
    }
    .align-items-xl-start {
        align-items: flex-start !important;
    }
    .align-items-xl-end {
        align-items: flex-end !important;
    }
    .align-items-xl-center {
        align-items: center !important;
    }
    .align-items-xl-baseline {
        align-items: baseline !important;
    }
    .align-items-xl-stretch {
        align-items: stretch !important;
    }
    .align-content-xl-start {
        align-content: flex-start !important;
    }
    .align-content-xl-end {
        align-content: flex-end !important;
    }
    .align-content-xl-center {
        align-content: center !important;
    }
    .align-content-xl-between {
        align-content: space-between !important;
    }
    .align-content-xl-around {
        align-content: space-around !important;
    }
    .align-content-xl-stretch {
        align-content: stretch !important;
    }
    .align-self-xl-auto {
        align-self: auto !important;
    }
    .align-self-xl-start {
        align-self: flex-start !important;
    }
    .align-self-xl-end {
        align-self: flex-end !important;
    }
    .align-self-xl-center {
        align-self: center !important;
    }
    .align-self-xl-baseline {
        align-self: baseline !important;
    }
    .align-self-xl-stretch {
        align-self: stretch !important;
    }
}

.float-left {
    float: left !important;
}

.float-right {
    float: right !important;
}

.float-none {
    float: none !important;
}

@media (min-width: 576px) {
    .float-sm-left {
        float: left !important;
    }
    .float-sm-right {
        float: right !important;
    }
    .float-sm-none {
        float: none !important;
    }
}

@media (min-width: 768px) {
    .float-md-left {
        float: left !important;
    }
    .float-md-right {
        float: right !important;
    }
    .float-md-none {
        float: none !important;
    }
}

@media (min-width: 992px) {
    .float-lg-left {
        float: left !important;
    }
    .float-lg-right {
        float: right !important;
    }
    .float-lg-none {
        float: none !important;
    }
}

@media (min-width: 1200px) {
    .float-xl-left {
        float: left !important;
    }
    .float-xl-right {
        float: right !important;
    }
    .float-xl-none {
        float: none !important;
    }
}

.overflow-auto {
    overflow: auto !important;
}

.overflow-hidden {
    overflow: hidden !important;
}

.position-static {
    position: static !important;
}

.position-relative {
    position: relative !important;
}

.position-absolute {
    position: absolute !important;
}

.position-fixed {
    position: fixed !important;
}

.position-sticky {
    position: -webkit-sticky !important;
    position: sticky !important;
}

.fixed-top {
    position: fixed;
    top: 0;
    right: 0;
    left: 0;
    z-index: 1030;
}

.fixed-bottom {
    position: fixed;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1030;
}

@supports ((position: -webkit-sticky) or (position: sticky)) {
    .sticky-top {
        position: -webkit-sticky;
        position: sticky;
        top: 0;
        z-index: 1020;
    }
}

.sr-only {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    white-space: nowrap;
    border: 0;
}

.sr-only-focusable:active,
.sr-only-focusable:focus {
    position: static;
    width: auto;
    height: auto;
    overflow: visible;
    clip: auto;
    white-space: normal;
}

.shadow-sm {
    box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
}

.shadow {
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
}

.shadow-lg {
    box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important;
}

.shadow-none {
    box-shadow: none !important;
}

.w-25 {
    width: 25% !important;
}

.w-50 {
    width: 50% !important;
}

.w-75 {
    width: 75% !important;
}

.w-100 {
    width: 100% !important;
}

.w-auto {
    width: auto !important;
}

.h-25 {
    height: 25% !important;
}

.h-50 {
    height: 50% !important;
}

.h-75 {
    height: 75% !important;
}

.h-100 {
    height: 100% !important;
}

.h-auto {
    height: auto !important;
}

.mw-100 {
    max-width: 100% !important;
}

.mh-100 {
    max-height: 100% !important;
}

.min-vw-100 {
    min-width: 100vw !important;
}

.min-vh-100 {
    min-height: 100vh !important;
}

.vw-100 {
    width: 100vw !important;
}

.vh-100 {
    height: 100vh !important;
}

.stretched-link::after {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1;
    pointer-events: auto;
    content: "";
    background-color: rgba(0, 0, 0, 0);
}

.m-0 {
    margin: 0 !important;
}

.mt-0,
.my-0 {
    margin-top: 0 !important;
}

.mr-0,
.mx-0 {
    margin-right: 0 !important;
}

.mb-0,
.my-0 {
    margin-bottom: 0 !important;
}

.ml-0,
.mx-0 {
    margin-left: 0 !important;
}

.m-1 {
    margin: 0.25rem !important;
}

.mt-1,
.my-1 {
    margin-top: 0.25rem !important;
}

.mr-1,
.mx-1 {
    margin-right: 0.25rem !important;
}

.mb-1,
.my-1 {
    margin-bottom: 0.25rem !important;
}

.ml-1,
.mx-1 {
    margin-left: 0.25rem !important;
}

.m-2 {
    margin: 0.5rem !important;
}

.mt-2,
.my-2 {
    margin-top: 0.5rem !important;
}

.mr-2,
.mx-2 {
    margin-right: 0.5rem !important;
}

.mb-2,
.my-2 {
    margin-bottom: 0.5rem !important;
}

.ml-2,
.mx-2 {
    margin-left: 0.5rem !important;
}

.m-3 {
    margin: 1rem !important;
}

.mt-3,
.my-3 {
    margin-top: 1rem !important;
}

.mr-3,
.mx-3 {
    margin-right: 1rem !important;
}

.mb-3,
.my-3 {
    margin-bottom: 1rem !important;
}

.ml-3,
.mx-3 {
    margin-left: 1rem !important;
}

.m-4 {
    margin: 1.5rem !important;
}

.mt-4,
.my-4 {
    margin-top: 1.5rem !important;
}

.mr-4,
.mx-4 {
    margin-right: 1.5rem !important;
}

.mb-4,
.my-4 {
    margin-bottom: 1.5rem !important;
}

.ml-4,
.mx-4 {
    margin-left: 1.5rem !important;
}

.m-5 {
    margin: 3rem !important;
}

.mt-5,
.my-5 {
    margin-top: 3rem !important;
}

.mr-5,
.mx-5 {
    margin-right: 3rem !important;
}

.mb-5,
.my-5 {
    margin-bottom: 3rem !important;
}

.ml-5,
.mx-5 {
    margin-left: 3rem !important;
}

.p-0 {
    padding: 0 !important;
}

.pt-0,
.py-0 {
    padding-top: 0 !important;
}

.pr-0,
.px-0 {
    padding-right: 0 !important;
}

.pb-0,
.py-0 {
    padding-bottom: 0 !important;
}

.pl-0,
.px-0 {
    padding-left: 0 !important;
}

.p-1 {
    padding: 0.25rem !important;
}

.pt-1,
.py-1 {
    padding-top: 0.25rem !important;
}

.pr-1,
.px-1 {
    padding-right: 0.25rem !important;
}

.pb-1,
.py-1 {
    padding-bottom: 0.25rem !important;
}

.pl-1,
.px-1 {
    padding-left: 0.25rem !important;
}

.p-2 {
    padding: 0.5rem !important;
}

.pt-2,
.py-2 {
    padding-top: 0.5rem !important;
}

.pr-2,
.px-2 {
    padding-right: 0.5rem !important;
}

.pb-2,
.py-2 {
    padding-bottom: 0.5rem !important;
}

.pl-2,
.px-2 {
    padding-left: 0.5rem !important;
}

.p-3 {
    padding: 1rem !important;
}

.pt-3,
.py-3 {
    padding-top: 1rem !important;
}

.pr-3,
.px-3 {
    padding-right: 1rem !important;
}

.pb-3,
.py-3 {
    padding-bottom: 1rem !important;
}

.pl-3,
.px-3 {
    padding-left: 1rem !important;
}

.p-4 {
    padding: 1.5rem !important;
}

.pt-4,
.py-4 {
    padding-top: 1.5rem !important;
}

.pr-4,
.px-4 {
    padding-right: 1.5rem !important;
}

.pb-4,
.py-4 {
    padding-bottom: 1.5rem !important;
}

.pl-4,
.px-4 {
    padding-left: 1.5rem !important;
}

.p-5 {
    padding: 3rem !important;
}

.pt-5,
.py-5 {
    padding-top: 0rem !important;
}

.pr-5,
.px-5 {
    padding-right: 3rem !important;
}

.pb-5,
.py-5 {
    padding-bottom: 3rem !important;
}

.pl-5,
.px-5 {
    padding-left: 3rem !important;
}

.m-n1 {
    margin: -0.25rem !important;
}

.mt-n1,
.my-n1 {
    margin-top: -0.25rem !important;
}

.mr-n1,
.mx-n1 {
    margin-right: -0.25rem !important;
}

.mb-n1,
.my-n1 {
    margin-bottom: -0.25rem !important;
}

.ml-n1,
.mx-n1 {
    margin-left: -0.25rem !important;
}

.m-n2 {
    margin: -0.5rem !important;
}

.mt-n2,
.my-n2 {
    margin-top: -0.5rem !important;
}

.mr-n2,
.mx-n2 {
    margin-right: -0.5rem !important;
}

.mb-n2,
.my-n2 {
    margin-bottom: -0.5rem !important;
}

.ml-n2,
.mx-n2 {
    margin-left: -0.5rem !important;
}

.m-n3 {
    margin: -1rem !important;
}

.mt-n3,
.my-n3 {
    margin-top: -1rem !important;
}

.mr-n3,
.mx-n3 {
    margin-right: -1rem !important;
}

.mb-n3,
.my-n3 {
    margin-bottom: -1rem !important;
}

.ml-n3,
.mx-n3 {
    margin-left: -1rem !important;
}

.m-n4 {
    margin: -1.5rem !important;
}

.mt-n4,
.my-n4 {
    margin-top: -1.5rem !important;
}

.mr-n4,
.mx-n4 {
    margin-right: -1.5rem !important;
}

.mb-n4,
.my-n4 {
    margin-bottom: -1.5rem !important;
}

.ml-n4,
.mx-n4 {
    margin-left: -1.5rem !important;
}

.m-n5 {
    margin: -3rem !important;
}

.mt-n5,
.my-n5 {
    margin-top: -3rem !important;
}

.mr-n5,
.mx-n5 {
    margin-right: -3rem !important;
}

.mb-n5,
.my-n5 {
    margin-bottom: -3rem !important;
}

.ml-n5,
.mx-n5 {
    margin-left: -3rem !important;
}

.m-auto {
    margin: auto !important;
}

.mt-auto,
.my-auto {
    margin-top: auto !important;
}

.mr-auto,
.mx-auto {
    margin-right: auto !important;
}

.mb-auto,
.my-auto {
    margin-bottom: auto !important;
}

.ml-auto,
.mx-auto {
    margin-left: auto !important;
}

@media (min-width: 576px) {
    .m-sm-0 {
        margin: 0 !important;
    }
    .mt-sm-0,
    .my-sm-0 {
        margin-top: 0 !important;
    }
    .mr-sm-0,
    .mx-sm-0 {
        margin-right: 0 !important;
    }
    .mb-sm-0,
    .my-sm-0 {
        margin-bottom: 0 !important;
    }
    .ml-sm-0,
    .mx-sm-0 {
        margin-left: 0 !important;
    }
    .m-sm-1 {
        margin: 0.25rem !important;
    }
    .mt-sm-1,
    .my-sm-1 {
        margin-top: 0.25rem !important;
    }
    .mr-sm-1,
    .mx-sm-1 {
        margin-right: 0.25rem !important;
    }
    .mb-sm-1,
    .my-sm-1 {
        margin-bottom: 0.25rem !important;
    }
    .ml-sm-1,
    .mx-sm-1 {
        margin-left: 0.25rem !important;
    }
    .m-sm-2 {
        margin: 0.5rem !important;
    }
    .mt-sm-2,
    .my-sm-2 {
        margin-top: 0.5rem !important;
    }
    .mr-sm-2,
    .mx-sm-2 {
        margin-right: 0.5rem !important;
    }
    .mb-sm-2,
    .my-sm-2 {
        margin-bottom: 0.5rem !important;
    }
    .ml-sm-2,
    .mx-sm-2 {
        margin-left: 0.5rem !important;
    }
    .m-sm-3 {
        margin: 1rem !important;
    }
    .mt-sm-3,
    .my-sm-3 {
        margin-top: 1rem !important;
    }
    .mr-sm-3,
    .mx-sm-3 {
        margin-right: 1rem !important;
    }
    .mb-sm-3,
    .my-sm-3 {
        margin-bottom: 1rem !important;
    }
    .ml-sm-3,
    .mx-sm-3 {
        margin-left: 1rem !important;
    }
    .m-sm-4 {
        margin: 1.5rem !important;
    }
    .mt-sm-4,
    .my-sm-4 {
        margin-top: 1.5rem !important;
    }
    .mr-sm-4,
    .mx-sm-4 {
        margin-right: 1.5rem !important;
    }
    .mb-sm-4,
    .my-sm-4 {
        margin-bottom: 1.5rem !important;
    }
    .ml-sm-4,
    .mx-sm-4 {
        margin-left: 1.5rem !important;
    }
    .m-sm-5 {
        margin: 3rem !important;
    }
    .mt-sm-5,
    .my-sm-5 {
        margin-top: 3rem !important;
    }
    .mr-sm-5,
    .mx-sm-5 {
        margin-right: 3rem !important;
    }
    .mb-sm-5,
    .my-sm-5 {
        margin-bottom: 3rem !important;
    }
    .ml-sm-5,
    .mx-sm-5 {
        margin-left: 3rem !important;
    }
    .p-sm-0 {
        padding: 0 !important;
    }
    .pt-sm-0,
    .py-sm-0 {
        padding-top: 0 !important;
    }
    .pr-sm-0,
    .px-sm-0 {
        padding-right: 0 !important;
    }
    .pb-sm-0,
    .py-sm-0 {
        padding-bottom: 0 !important;
    }
    .pl-sm-0,
    .px-sm-0 {
        padding-left: 0 !important;
    }
    .p-sm-1 {
        padding: 0.25rem !important;
    }
    .pt-sm-1,
    .py-sm-1 {
        padding-top: 0.25rem !important;
    }
    .pr-sm-1,
    .px-sm-1 {
        padding-right: 0.25rem !important;
    }
    .pb-sm-1,
    .py-sm-1 {
        padding-bottom: 0.25rem !important;
    }
    .pl-sm-1,
    .px-sm-1 {
        padding-left: 0.25rem !important;
    }
    .p-sm-2 {
        padding: 0.5rem !important;
    }
    .pt-sm-2,
    .py-sm-2 {
        padding-top: 0.5rem !important;
    }
    .pr-sm-2,
    .px-sm-2 {
        padding-right: 0.5rem !important;
    }
    .pb-sm-2,
    .py-sm-2 {
        padding-bottom: 0.5rem !important;
    }
    .pl-sm-2,
    .px-sm-2 {
        padding-left: 0.5rem !important;
    }
    .p-sm-3 {
        padding: 1rem !important;
    }
    .pt-sm-3,
    .py-sm-3 {
        padding-top: 1rem !important;
    }
    .pr-sm-3,
    .px-sm-3 {
        padding-right: 1rem !important;
    }
    .pb-sm-3,
    .py-sm-3 {
        padding-bottom: 1rem !important;
    }
    .pl-sm-3,
    .px-sm-3 {
        padding-left: 1rem !important;
    }
    .p-sm-4 {
        padding: 1.5rem !important;
    }
    .pt-sm-4,
    .py-sm-4 {
        padding-top: 1.5rem !important;
    }
    .pr-sm-4,
    .px-sm-4 {
        padding-right: 1.5rem !important;
    }
    .pb-sm-4,
    .py-sm-4 {
        padding-bottom: 1.5rem !important;
    }
    .pl-sm-4,
    .px-sm-4 {
        padding-left: 1.5rem !important;
    }
    .p-sm-5 {
        padding: 3rem !important;
    }
    .pt-sm-5,
    .py-sm-5 {
        padding-top: 3rem !important;
    }
    .pr-sm-5,
    .px-sm-5 {
        padding-right: 3rem !important;
    }
    .pb-sm-5,
    .py-sm-5 {
        padding-bottom: 3rem !important;
    }
    .pl-sm-5,
    .px-sm-5 {
        padding-left: 3rem !important;
    }
    .m-sm-n1 {
        margin: -0.25rem !important;
    }
    .mt-sm-n1,
    .my-sm-n1 {
        margin-top: -0.25rem !important;
    }
    .mr-sm-n1,
    .mx-sm-n1 {
        margin-right: -0.25rem !important;
    }
    .mb-sm-n1,
    .my-sm-n1 {
        margin-bottom: -0.25rem !important;
    }
    .ml-sm-n1,
    .mx-sm-n1 {
        margin-left: -0.25rem !important;
    }
    .m-sm-n2 {
        margin: -0.5rem !important;
    }
    .mt-sm-n2,
    .my-sm-n2 {
        margin-top: -0.5rem !important;
    }
    .mr-sm-n2,
    .mx-sm-n2 {
        margin-right: -0.5rem !important;
    }
    .mb-sm-n2,
    .my-sm-n2 {
        margin-bottom: -0.5rem !important;
    }
    .ml-sm-n2,
    .mx-sm-n2 {
        margin-left: -0.5rem !important;
    }
    .m-sm-n3 {
        margin: -1rem !important;
    }
    .mt-sm-n3,
    .my-sm-n3 {
        margin-top: -1rem !important;
    }
    .mr-sm-n3,
    .mx-sm-n3 {
        margin-right: -1rem !important;
    }
    .mb-sm-n3,
    .my-sm-n3 {
        margin-bottom: -1rem !important;
    }
    .ml-sm-n3,
    .mx-sm-n3 {
        margin-left: -1rem !important;
    }
    .m-sm-n4 {
        margin: -1.5rem !important;
    }
    .mt-sm-n4,
    .my-sm-n4 {
        margin-top: -1.5rem !important;
    }
    .mr-sm-n4,
    .mx-sm-n4 {
        margin-right: -1.5rem !important;
    }
    .mb-sm-n4,
    .my-sm-n4 {
        margin-bottom: -1.5rem !important;
    }
    .ml-sm-n4,
    .mx-sm-n4 {
        margin-left: -1.5rem !important;
    }
    .m-sm-n5 {
        margin: -3rem !important;
    }
    .mt-sm-n5,
    .my-sm-n5 {
        margin-top: -3rem !important;
    }
    .mr-sm-n5,
    .mx-sm-n5 {
        margin-right: -3rem !important;
    }
    .mb-sm-n5,
    .my-sm-n5 {
        margin-bottom: -3rem !important;
    }
    .ml-sm-n5,
    .mx-sm-n5 {
        margin-left: -3rem !important;
    }
    .m-sm-auto {
        margin: auto !important;
    }
    .mt-sm-auto,
    .my-sm-auto {
        margin-top: auto !important;
    }
    .mr-sm-auto,
    .mx-sm-auto {
        margin-right: auto !important;
    }
    .mb-sm-auto,
    .my-sm-auto {
        margin-bottom: auto !important;
    }
    .ml-sm-auto,
    .mx-sm-auto {
        margin-left: auto !important;
    }
}

@media (min-width: 768px) {
    .m-md-0 {
        margin: 0 !important;
    }
    .mt-md-0,
    .my-md-0 {
        margin-top: 0 !important;
    }
    .mr-md-0,
    .mx-md-0 {
        margin-right: 0 !important;
    }
    .mb-md-0,
    .my-md-0 {
        margin-bottom: 0 !important;
    }
    .ml-md-0,
    .mx-md-0 {
        margin-left: 0 !important;
    }
    .m-md-1 {
        margin: 0.25rem !important;
    }
    .mt-md-1,
    .my-md-1 {
        margin-top: 0.25rem !important;
    }
    .mr-md-1,
    .mx-md-1 {
        margin-right: 0.25rem !important;
    }
    .mb-md-1,
    .my-md-1 {
        margin-bottom: 0.25rem !important;
    }
    .ml-md-1,
    .mx-md-1 {
        margin-left: 0.25rem !important;
    }
    .m-md-2 {
        margin: 0.5rem !important;
    }
    .mt-md-2,
    .my-md-2 {
        margin-top: 0.5rem !important;
    }
    .mr-md-2,
    .mx-md-2 {
        margin-right: 0.5rem !important;
    }
    .mb-md-2,
    .my-md-2 {
        margin-bottom: 0.5rem !important;
    }
    .ml-md-2,
    .mx-md-2 {
        margin-left: 0.5rem !important;
    }
    .m-md-3 {
        margin: 1rem !important;
    }
    .mt-md-3,
    .my-md-3 {
        margin-top: 1rem !important;
    }
    .mr-md-3,
    .mx-md-3 {
        margin-right: 1rem !important;
    }
    .mb-md-3,
    .my-md-3 {
        margin-bottom: 1rem !important;
    }
    .ml-md-3,
    .mx-md-3 {
        margin-left: 1rem !important;
    }
    .m-md-4 {
        margin: 1.5rem !important;
    }
    .mt-md-4,
    .my-md-4 {
        margin-top: 1.5rem !important;
    }
    .mr-md-4,
    .mx-md-4 {
        margin-right: 1.5rem !important;
    }
    .mb-md-4,
    .my-md-4 {
        margin-bottom: 1.5rem !important;
    }
    .ml-md-4,
    .mx-md-4 {
        margin-left: 1.5rem !important;
    }
    .m-md-5 {
        margin: 3rem !important;
    }
    .mt-md-5,
    .my-md-5 {
        margin-top: 3rem !important;
    }
    .mr-md-5,
    .mx-md-5 {
        margin-right: 3rem !important;
    }
    .mb-md-5,
    .my-md-5 {
        margin-bottom: 3rem !important;
    }
    .ml-md-5,
    .mx-md-5 {
        margin-left: 3rem !important;
    }
    .p-md-0 {
        padding: 0 !important;
    }
    .pt-md-0,
    .py-md-0 {
        padding-top: 0 !important;
    }
    .pr-md-0,
    .px-md-0 {
        padding-right: 0 !important;
    }
    .pb-md-0,
    .py-md-0 {
        padding-bottom: 0 !important;
    }
    .pl-md-0,
    .px-md-0 {
        padding-left: 0 !important;
    }
    .p-md-1 {
        padding: 0.25rem !important;
    }
    .pt-md-1,
    .py-md-1 {
        padding-top: 0.25rem !important;
    }
    .pr-md-1,
    .px-md-1 {
        padding-right: 0.25rem !important;
    }
    .pb-md-1,
    .py-md-1 {
        padding-bottom: 0.25rem !important;
    }
    .pl-md-1,
    .px-md-1 {
        padding-left: 0.25rem !important;
    }
    .p-md-2 {
        padding: 0.5rem !important;
    }
    .pt-md-2,
    .py-md-2 {
        padding-top: 0.5rem !important;
    }
    .pr-md-2,
    .px-md-2 {
        padding-right: 0.5rem !important;
    }
    .pb-md-2,
    .py-md-2 {
        padding-bottom: 0.5rem !important;
    }
    .pl-md-2,
    .px-md-2 {
        padding-left: 0.5rem !important;
    }
    .p-md-3 {
        padding: 1rem !important;
    }
    .pt-md-3,
    .py-md-3 {
        padding-top: 1rem !important;
    }
    .pr-md-3,
    .px-md-3 {
        padding-right: 1rem !important;
    }
    .pb-md-3,
    .py-md-3 {
        padding-bottom: 1rem !important;
    }
    .pl-md-3,
    .px-md-3 {
        padding-left: 1rem !important;
    }
    .p-md-4 {
        padding: 1.5rem !important;
    }
    .pt-md-4,
    .py-md-4 {
        padding-top: 1.5rem !important;
    }
    .pr-md-4,
    .px-md-4 {
        padding-right: 1.5rem !important;
    }
    .pb-md-4,
    .py-md-4 {
        padding-bottom: 1.5rem !important;
    }
    .pl-md-4,
    .px-md-4 {
        padding-left: 1.5rem !important;
    }
    .p-md-5 {
        padding: 3rem !important;
    }
    .pt-md-5,
    .py-md-5 {
        padding-top: 3rem !important;
    }
    .pr-md-5,
    .px-md-5 {
        padding-right: 3rem !important;
    }
    .pb-md-5,
    .py-md-5 {
        padding-bottom: 3rem !important;
    }
    .pl-md-5,
    .px-md-5 {
        padding-left: 3rem !important;
    }
    .m-md-n1 {
        margin: -0.25rem !important;
    }
    .mt-md-n1,
    .my-md-n1 {
        margin-top: -0.25rem !important;
    }
    .mr-md-n1,
    .mx-md-n1 {
        margin-right: -0.25rem !important;
    }
    .mb-md-n1,
    .my-md-n1 {
        margin-bottom: -0.25rem !important;
    }
    .ml-md-n1,
    .mx-md-n1 {
        margin-left: -0.25rem !important;
    }
    .m-md-n2 {
        margin: -0.5rem !important;
    }
    .mt-md-n2,
    .my-md-n2 {
        margin-top: -0.5rem !important;
    }
    .mr-md-n2,
    .mx-md-n2 {
        margin-right: -0.5rem !important;
    }
    .mb-md-n2,
    .my-md-n2 {
        margin-bottom: -0.5rem !important;
    }
    .ml-md-n2,
    .mx-md-n2 {
        margin-left: -0.5rem !important;
    }
    .m-md-n3 {
        margin: -1rem !important;
    }
    .mt-md-n3,
    .my-md-n3 {
        margin-top: -1rem !important;
    }
    .mr-md-n3,
    .mx-md-n3 {
        margin-right: -1rem !important;
    }
    .mb-md-n3,
    .my-md-n3 {
        margin-bottom: -1rem !important;
    }
    .ml-md-n3,
    .mx-md-n3 {
        margin-left: -1rem !important;
    }
    .m-md-n4 {
        margin: -1.5rem !important;
    }
    .mt-md-n4,
    .my-md-n4 {
        margin-top: -1.5rem !important;
    }
    .mr-md-n4,
    .mx-md-n4 {
        margin-right: -1.5rem !important;
    }
    .mb-md-n4,
    .my-md-n4 {
        margin-bottom: -1.5rem !important;
    }
    .ml-md-n4,
    .mx-md-n4 {
        margin-left: -1.5rem !important;
    }
    .m-md-n5 {
        margin: -3rem !important;
    }
    .mt-md-n5,
    .my-md-n5 {
        margin-top: -3rem !important;
    }
    .mr-md-n5,
    .mx-md-n5 {
        margin-right: -3rem !important;
    }
    .mb-md-n5,
    .my-md-n5 {
        margin-bottom: -3rem !important;
    }
    .ml-md-n5,
    .mx-md-n5 {
        margin-left: -3rem !important;
    }
    .m-md-auto {
        margin: auto !important;
    }
    .mt-md-auto,
    .my-md-auto {
        margin-top: auto !important;
    }
    .mr-md-auto,
    .mx-md-auto {
        margin-right: auto !important;
    }
    .mb-md-auto,
    .my-md-auto {
        margin-bottom: auto !important;
    }
    .ml-md-auto,
    .mx-md-auto {
        margin-left: auto !important;
    }
}

@media (min-width: 992px) {
    .m-lg-0 {
        margin: 0 !important;
    }
    .mt-lg-0,
    .my-lg-0 {
        margin-top: 0 !important;
    }
    .mr-lg-0,
    .mx-lg-0 {
        margin-right: 0 !important;
    }
    .mb-lg-0,
    .my-lg-0 {
        margin-bottom: 0 !important;
    }
    .ml-lg-0,
    .mx-lg-0 {
        margin-left: 0 !important;
    }
    .m-lg-1 {
        margin: 0.25rem !important;
    }
    .mt-lg-1,
    .my-lg-1 {
        margin-top: 0.25rem !important;
    }
    .mr-lg-1,
    .mx-lg-1 {
        margin-right: 0.25rem !important;
    }
    .mb-lg-1,
    .my-lg-1 {
        margin-bottom: 0.25rem !important;
    }
    .ml-lg-1,
    .mx-lg-1 {
        margin-left: 0.25rem !important;
    }
    .m-lg-2 {
        margin: 0.5rem !important;
    }
    .mt-lg-2,
    .my-lg-2 {
        margin-top: 0.5rem !important;
    }
    .mr-lg-2,
    .mx-lg-2 {
        margin-right: 0.5rem !important;
    }
    .mb-lg-2,
    .my-lg-2 {
        margin-bottom: 0.5rem !important;
    }
    .ml-lg-2,
    .mx-lg-2 {
        margin-left: 0.5rem !important;
    }
    .m-lg-3 {
        margin: 1rem !important;
    }
    .mt-lg-3,
    .my-lg-3 {
        margin-top: 1rem !important;
    }
    .mr-lg-3,
    .mx-lg-3 {
        margin-right: 1rem !important;
    }
    .mb-lg-3,
    .my-lg-3 {
        margin-bottom: 1rem !important;
    }
    .ml-lg-3,
    .mx-lg-3 {
        margin-left: 1rem !important;
    }
    .m-lg-4 {
        margin: 1.5rem !important;
    }
    .mt-lg-4,
    .my-lg-4 {
        margin-top: 1.5rem !important;
    }
    .mr-lg-4,
    .mx-lg-4 {
        margin-right: 1.5rem !important;
    }
    .mb-lg-4,
    .my-lg-4 {
        margin-bottom: 1.5rem !important;
    }
    .ml-lg-4,
    .mx-lg-4 {
        margin-left: 1.5rem !important;
    }
    .m-lg-5 {
        margin: 3rem !important;
    }
    .mt-lg-5,
    .my-lg-5 {
        margin-top: 3rem !important;
    }
    .mr-lg-5,
    .mx-lg-5 {
        margin-right: 3rem !important;
    }
    .mb-lg-5,
    .my-lg-5 {
        margin-bottom: 3rem !important;
    }
    .ml-lg-5,
    .mx-lg-5 {
        margin-left: 3rem !important;
    }
    .p-lg-0 {
        padding: 0 !important;
    }
    .pt-lg-0,
    .py-lg-0 {
        padding-top: 0 !important;
    }
    .pr-lg-0,
    .px-lg-0 {
        padding-right: 0 !important;
    }
    .pb-lg-0,
    .py-lg-0 {
        padding-bottom: 0 !important;
    }
    .pl-lg-0,
    .px-lg-0 {
        padding-left: 0 !important;
    }
    .p-lg-1 {
        padding: 0.25rem !important;
    }
    .pt-lg-1,
    .py-lg-1 {
        padding-top: 0.25rem !important;
    }
    .pr-lg-1,
    .px-lg-1 {
        padding-right: 0.25rem !important;
    }
    .pb-lg-1,
    .py-lg-1 {
        padding-bottom: 0.25rem !important;
    }
    .pl-lg-1,
    .px-lg-1 {
        padding-left: 0.25rem !important;
    }
    .p-lg-2 {
        padding: 0.5rem !important;
    }
    .pt-lg-2,
    .py-lg-2 {
        padding-top: 0.5rem !important;
    }
    .pr-lg-2,
    .px-lg-2 {
        padding-right: 0.5rem !important;
    }
    .pb-lg-2,
    .py-lg-2 {
        padding-bottom: 0.5rem !important;
    }
    .pl-lg-2,
    .px-lg-2 {
        padding-left: 0.5rem !important;
    }
    .p-lg-3 {
        padding: 1rem !important;
    }
    .pt-lg-3,
    .py-lg-3 {
        padding-top: 1rem !important;
    }
    .pr-lg-3,
    .px-lg-3 {
        padding-right: 1rem !important;
    }
    .pb-lg-3,
    .py-lg-3 {
        padding-bottom: 1rem !important;
    }
    .pl-lg-3,
    .px-lg-3 {
        padding-left: 1rem !important;
    }
    .p-lg-4 {
        padding: 1.5rem !important;
    }
    .pt-lg-4,
    .py-lg-4 {
        padding-top: 1.5rem !important;
    }
    .pr-lg-4,
    .px-lg-4 {
        padding-right: 1.5rem !important;
    }
    .pb-lg-4,
    .py-lg-4 {
        padding-bottom: 1.5rem !important;
    }
    .pl-lg-4,
    .px-lg-4 {
        padding-left: 1.5rem !important;
    }
    .p-lg-5 {
        padding: 3rem !important;
    }
    .pt-lg-5,
    .py-lg-5 {
        padding-top: 3rem !important;
    }
    .pr-lg-5,
    .px-lg-5 {
        padding-right: 3rem !important;
    }
    .pb-lg-5,
    .py-lg-5 {
        padding-bottom: 3rem !important;
    }
    .pl-lg-5,
    .px-lg-5 {
        padding-left: 3rem !important;
    }
    .m-lg-n1 {
        margin: -0.25rem !important;
    }
    .mt-lg-n1,
    .my-lg-n1 {
        margin-top: -0.25rem !important;
    }
    .mr-lg-n1,
    .mx-lg-n1 {
        margin-right: -0.25rem !important;
    }
    .mb-lg-n1,
    .my-lg-n1 {
        margin-bottom: -0.25rem !important;
    }
    .ml-lg-n1,
    .mx-lg-n1 {
        margin-left: -0.25rem !important;
    }
    .m-lg-n2 {
        margin: -0.5rem !important;
    }
    .mt-lg-n2,
    .my-lg-n2 {
        margin-top: -0.5rem !important;
    }
    .mr-lg-n2,
    .mx-lg-n2 {
        margin-right: -0.5rem !important;
    }
    .mb-lg-n2,
    .my-lg-n2 {
        margin-bottom: -0.5rem !important;
    }
    .ml-lg-n2,
    .mx-lg-n2 {
        margin-left: -0.5rem !important;
    }
    .m-lg-n3 {
        margin: -1rem !important;
    }
    .mt-lg-n3,
    .my-lg-n3 {
        margin-top: -1rem !important;
    }
    .mr-lg-n3,
    .mx-lg-n3 {
        margin-right: -1rem !important;
    }
    .mb-lg-n3,
    .my-lg-n3 {
        margin-bottom: -1rem !important;
    }
    .ml-lg-n3,
    .mx-lg-n3 {
        margin-left: -1rem !important;
    }
    .m-lg-n4 {
        margin: -1.5rem !important;
    }
    .mt-lg-n4,
    .my-lg-n4 {
        margin-top: -1.5rem !important;
    }
    .mr-lg-n4,
    .mx-lg-n4 {
        margin-right: -1.5rem !important;
    }
    .mb-lg-n4,
    .my-lg-n4 {
        margin-bottom: -1.5rem !important;
    }
    .ml-lg-n4,
    .mx-lg-n4 {
        margin-left: -1.5rem !important;
    }
    .m-lg-n5 {
        margin: -3rem !important;
    }
    .mt-lg-n5,
    .my-lg-n5 {
        margin-top: -3rem !important;
    }
    .mr-lg-n5,
    .mx-lg-n5 {
        margin-right: -3rem !important;
    }
    .mb-lg-n5,
    .my-lg-n5 {
        margin-bottom: -3rem !important;
    }
    .ml-lg-n5,
    .mx-lg-n5 {
        margin-left: -3rem !important;
    }
    .m-lg-auto {
        margin: auto !important;
    }
    .mt-lg-auto,
    .my-lg-auto {
        margin-top: auto !important;
    }
    .mr-lg-auto,
    .mx-lg-auto {
        margin-right: auto !important;
    }
    .mb-lg-auto,
    .my-lg-auto {
        margin-bottom: auto !important;
    }
    .ml-lg-auto,
    .mx-lg-auto {
        margin-left: auto !important;
    }
}

@media (min-width: 1200px) {
    .m-xl-0 {
        margin: 0 !important;
    }
    .mt-xl-0,
    .my-xl-0 {
        margin-top: 0 !important;
    }
    .mr-xl-0,
    .mx-xl-0 {
        margin-right: 0 !important;
    }
    .mb-xl-0,
    .my-xl-0 {
        margin-bottom: 0 !important;
    }
    .ml-xl-0,
    .mx-xl-0 {
        margin-left: 0 !important;
    }
    .m-xl-1 {
        margin: 0.25rem !important;
    }
    .mt-xl-1,
    .my-xl-1 {
        margin-top: 0.25rem !important;
    }
    .mr-xl-1,
    .mx-xl-1 {
        margin-right: 0.25rem !important;
    }
    .mb-xl-1,
    .my-xl-1 {
        margin-bottom: 0.25rem !important;
    }
    .ml-xl-1,
    .mx-xl-1 {
        margin-left: 0.25rem !important;
    }
    .m-xl-2 {
        margin: 0.5rem !important;
    }
    .mt-xl-2,
    .my-xl-2 {
        margin-top: 0.5rem !important;
    }
    .mr-xl-2,
    .mx-xl-2 {
        margin-right: 0.5rem !important;
    }
    .mb-xl-2,
    .my-xl-2 {
        margin-bottom: 0.5rem !important;
    }
    .ml-xl-2,
    .mx-xl-2 {
        margin-left: 0.5rem !important;
    }
    .m-xl-3 {
        margin: 1rem !important;
    }
    .mt-xl-3,
    .my-xl-3 {
        margin-top: 1rem !important;
    }
    .mr-xl-3,
    .mx-xl-3 {
        margin-right: 1rem !important;
    }
    .mb-xl-3,
    .my-xl-3 {
        margin-bottom: 1rem !important;
    }
    .ml-xl-3,
    .mx-xl-3 {
        margin-left: 1rem !important;
    }
    .m-xl-4 {
        margin: 1.5rem !important;
    }
    .mt-xl-4,
    .my-xl-4 {
        margin-top: 1.5rem !important;
    }
    .mr-xl-4,
    .mx-xl-4 {
        margin-right: 1.5rem !important;
    }
    .mb-xl-4,
    .my-xl-4 {
        margin-bottom: 1.5rem !important;
    }
    .ml-xl-4,
    .mx-xl-4 {
        margin-left: 1.5rem !important;
    }
    .m-xl-5 {
        margin: 3rem !important;
    }
    .mt-xl-5,
    .my-xl-5 {
        margin-top: 3rem !important;
    }
    .mr-xl-5,
    .mx-xl-5 {
        margin-right: 3rem !important;
    }
    .mb-xl-5,
    .my-xl-5 {
        margin-bottom: 3rem !important;
    }
    .ml-xl-5,
    .mx-xl-5 {
        margin-left: 3rem !important;
    }
    .p-xl-0 {
        padding: 0 !important;
    }
    .pt-xl-0,
    .py-xl-0 {
        padding-top: 0 !important;
    }
    .pr-xl-0,
    .px-xl-0 {
        padding-right: 0 !important;
    }
    .pb-xl-0,
    .py-xl-0 {
        padding-bottom: 0 !important;
    }
    .pl-xl-0,
    .px-xl-0 {
        padding-left: 0 !important;
    }
    .p-xl-1 {
        padding: 0.25rem !important;
    }
    .pt-xl-1,
    .py-xl-1 {
        padding-top: 0.25rem !important;
    }
    .pr-xl-1,
    .px-xl-1 {
        padding-right: 0.25rem !important;
    }
    .pb-xl-1,
    .py-xl-1 {
        padding-bottom: 0.25rem !important;
    }
    .pl-xl-1,
    .px-xl-1 {
        padding-left: 0.25rem !important;
    }
    .p-xl-2 {
        padding: 0.5rem !important;
    }
    .pt-xl-2,
    .py-xl-2 {
        padding-top: 0.5rem !important;
    }
    .pr-xl-2,
    .px-xl-2 {
        padding-right: 0.5rem !important;
    }
    .pb-xl-2,
    .py-xl-2 {
        padding-bottom: 0.5rem !important;
    }
    .pl-xl-2,
    .px-xl-2 {
        padding-left: 0.5rem !important;
    }
    .p-xl-3 {
        padding: 1rem !important;
    }
    .pt-xl-3,
    .py-xl-3 {
        padding-top: 1rem !important;
    }
    .pr-xl-3,
    .px-xl-3 {
        padding-right: 1rem !important;
    }
    .pb-xl-3,
    .py-xl-3 {
        padding-bottom: 1rem !important;
    }
    .pl-xl-3,
    .px-xl-3 {
        padding-left: 1rem !important;
    }
    .p-xl-4 {
        padding: 1.5rem !important;
    }
    .pt-xl-4,
    .py-xl-4 {
        padding-top: 1.5rem !important;
    }
    .pr-xl-4,
    .px-xl-4 {
        padding-right: 1.5rem !important;
    }
    .pb-xl-4,
    .py-xl-4 {
        padding-bottom: 1.5rem !important;
    }
    .pl-xl-4,
    .px-xl-4 {
        padding-left: 1.5rem !important;
    }
    .p-xl-5 {
        padding: 3rem !important;
    }
    .pt-xl-5,
    .py-xl-5 {
        padding-top: 3rem !important;
    }
    .pr-xl-5,
    .px-xl-5 {
        padding-right: 3rem !important;
    }
    .pb-xl-5,
    .py-xl-5 {
        padding-bottom: 3rem !important;
    }
    .pl-xl-5,
    .px-xl-5 {
        padding-left: 3rem !important;
    }
    .m-xl-n1 {
        margin: -0.25rem !important;
    }
    .mt-xl-n1,
    .my-xl-n1 {
        margin-top: -0.25rem !important;
    }
    .mr-xl-n1,
    .mx-xl-n1 {
        margin-right: -0.25rem !important;
    }
    .mb-xl-n1,
    .my-xl-n1 {
        margin-bottom: -0.25rem !important;
    }
    .ml-xl-n1,
    .mx-xl-n1 {
        margin-left: -0.25rem !important;
    }
    .m-xl-n2 {
        margin: -0.5rem !important;
    }
    .mt-xl-n2,
    .my-xl-n2 {
        margin-top: -0.5rem !important;
    }
    .mr-xl-n2,
    .mx-xl-n2 {
        margin-right: -0.5rem !important;
    }
    .mb-xl-n2,
    .my-xl-n2 {
        margin-bottom: -0.5rem !important;
    }
    .ml-xl-n2,
    .mx-xl-n2 {
        margin-left: -0.5rem !important;
    }
    .m-xl-n3 {
        margin: -1rem !important;
    }
    .mt-xl-n3,
    .my-xl-n3 {
        margin-top: -1rem !important;
    }
    .mr-xl-n3,
    .mx-xl-n3 {
        margin-right: -1rem !important;
    }
    .mb-xl-n3,
    .my-xl-n3 {
        margin-bottom: -1rem !important;
    }
    .ml-xl-n3,
    .mx-xl-n3 {
        margin-left: -1rem !important;
    }
    .m-xl-n4 {
        margin: -1.5rem !important;
    }
    .mt-xl-n4,
    .my-xl-n4 {
        margin-top: -1.5rem !important;
    }
    .mr-xl-n4,
    .mx-xl-n4 {
        margin-right: -1.5rem !important;
    }
    .mb-xl-n4,
    .my-xl-n4 {
        margin-bottom: -1.5rem !important;
    }
    .ml-xl-n4,
    .mx-xl-n4 {
        margin-left: -1.5rem !important;
    }
    .m-xl-n5 {
        margin: -3rem !important;
    }
    .mt-xl-n5,
    .my-xl-n5 {
        margin-top: -3rem !important;
    }
    .mr-xl-n5,
    .mx-xl-n5 {
        margin-right: -3rem !important;
    }
    .mb-xl-n5,
    .my-xl-n5 {
        margin-bottom: -3rem !important;
    }
    .ml-xl-n5,
    .mx-xl-n5 {
        margin-left: -3rem !important;
    }
    .m-xl-auto {
        margin: auto !important;
    }
    .mt-xl-auto,
    .my-xl-auto {
        margin-top: auto !important;
    }
    .mr-xl-auto,
    .mx-xl-auto {
        margin-right: auto !important;
    }
    .mb-xl-auto,
    .my-xl-auto {
        margin-bottom: auto !important;
    }
    .ml-xl-auto,
    .mx-xl-auto {
        margin-left: auto !important;
    }
}

.text-monospace {
    font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono",
        "Courier New", monospace !important;
}

.text-justify {
    text-align: justify !important;
}

.text-wrap {
    white-space: normal !important;
}

.text-nowrap {
    white-space: nowrap !important;
}

.text-truncate {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

.text-left {
    text-align: left !important;
}

.text-right {
    text-align: right !important;
}

.text-center {
    text-align: center !important;
}

@media (min-width: 576px) {
    .text-sm-left {
        text-align: left !important;
    }
    .text-sm-right {
        text-align: right !important;
    }
    .text-sm-center {
        text-align: center !important;
    }
}

@media (min-width: 768px) {
    .text-md-left {
        text-align: left !important;
    }
    .text-md-right {
        text-align: right !important;
    }
    .text-md-center {
        text-align: center !important;
    }
}

@media (min-width: 992px) {
    .text-lg-left {
        text-align: left !important;
    }
    .text-lg-right {
        text-align: right !important;
    }
    .text-lg-center {
        text-align: center !important;
    }
}

@media (min-width: 1200px) {
    .text-xl-left {
        text-align: left !important;
    }
    .text-xl-right {
        text-align: right !important;
    }
    .text-xl-center {
        text-align: center !important;
    }
}

.text-lowercase {
    text-transform: lowercase !important;
}

.text-uppercase {
    text-transform: uppercase !important;
}

.text-capitalize {
    text-transform: capitalize !important;
}

.font-weight-light {
    font-weight: 300 !important;
}

.font-weight-lighter {
    font-weight: lighter !important;
}

.font-weight-normal {
    font-weight: 400 !important;
}

.font-weight-bold {
    font-weight: 700 !important;
}

.font-weight-bolder {
    font-weight: bolder !important;
}

.font-italic {
    font-style: italic !important;
}

.text-white {
    color: #fff !important;
}

.text-primary {
    color: ##ffffff !important;
}

a.text-primary:hover,
a.text-primary:focus {
    color: #ba6600 !important;
}

.text-secondary {
    color: #ba3833 !important;
}

a.text-secondary:hover,
a.text-secondary:focus {
    color: #7e2623 !important;
}

.text-success {
    color: #28a745 !important;
}

a.text-success:hover,
a.text-success:focus {
    color: #19692c !important;
}

.text-info {
    color: #17a2b8 !important;
}

a.text-info:hover,
a.text-info:focus {
    color: #0f6674 !important;
}

.text-warning {
    color: #ffffff !important;
}

a.text-warning:hover,
a.text-warning:focus {
    color: #ba8b00 !important;
}

.text-danger {
    color: #dc3545 !important;
}

a.text-danger:hover,
a.text-danger:focus {
    color: #a71d2a !important;
}

.text-light {
    color: #f8f9fa !important;
}

a.text-light:hover,
a.text-light:focus {
    color: #cbd3da !important;
}

.text-dark {
    color: #343a40 !important;
}

a.text-dark:hover,
a.text-dark:focus {
    color: #121416 !important;
}

.text-body {
    color: #212529 !important;
}

.text-muted {
    color: #6c757d !important;
}

.text-black-50 {
    color: rgba(0, 0, 0, 0.5) !important;
}

.text-white-50 {
    color: rgba(255, 255, 255, 0.5) !important;
}

.text-hide {
    font: 0/0 a;
    color: transparent;
    text-shadow: none;
    background-color: transparent;
    border: 0;
}

.text-decoration-none {
    text-decoration: none !important;
}

.text-break {
    word-break: break-word !important;
    overflow-wrap: break-word !important;
}

.text-reset {
    color: inherit !important;
}

.visible {
    visibility: visible !important;
}

.invisible {
    visibility: hidden !important;
}

@media print {
    *,
    *::before,
    *::after {
        text-shadow: none !important;
        box-shadow: none !important;
    }
    a:not(.btn) {
        text-decoration: underline;
    }
    abbr[title]::after {
        content: " (" attr(title) ")";
    }
    pre {
        white-space: pre-wrap !important;
    }
    pre,
    blockquote {
        border: 1px solid #adb5bd;
        page-break-inside: avoid;
    }
    thead {
        display: table-header-group;
    }
    tr,
    img {
        page-break-inside: avoid;
    }
    p,
    h2,
    h3 {
        orphans: 3;
        widows: 3;
    }
    h2,
    h3 {
        page-break-after: avoid;
    }
    @page {
        size: a3;
    }
    body {
        min-width: 992px !important;
    }
    .containerv {
        min-width: 992px !important;
    }
    .navbarv {
        display: none;
    }
    .badge {
        border: 1px solid #000;
    }
    .table {
        border-collapse: collapse !important;
    }
    .table td,
    .table th {
        background-color: #fff !important;
    }
    .table-bordered th,
    .table-bordered td {
        border: 1px solid #dee2e6 !important;
    }
    .table-dark {
        color: inherit;
    }
    .table-dark th,
    .table-dark td,
    .table-dark thead th,
    .table-dark tbody + tbody {
        border-color: #dee2e6;
    }
    .table .thead-dark th {
        color: inherit;
        border-color: #dee2e6;
    }
}

:root {
    --primary: ##ffffff;
    --secondary: #ba3833;
    --title-color: #090909;
    --text-color: #5a5a5a;
    --light-bg-color: #f8f9fa;
    --card-curve: 6px;
    --card-box-shadow: 0px 9px 24px 5px rgba(0, 0, 0, 0.04);
}

html {
    scroll-behavior: smooth;
}

.noscroll {
    overflow: hidden;
    height: 100vh;
}

ul,
ol {
    padding: 0;
    margin: 0;
}

li {
    list-style-type: none;
}

body,
html {
    margin: 0;
    padding: 0;
    font-family: "Open Sans", sans-serif;
}

textarea {
    font-family: "Open Sans", sans-serif;
}

* {
    box-sizing: border-box;
}

.containerv {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}

@media (min-width: 576px) {
    .containerv {
        max-width: 100%;
        padding-right: 30px;
        padding-left: 30px;
        margin-right: auto;
        margin-left: auto;
    }
}

@media (min-width: 768px) {
    .containerv {
        max-width: 100%;
        padding-right: 25px;
        padding-left: 25px;
        margin-right: auto;
        margin-left: auto;
    }
}

@media (min-width: 992px) {
    .containerv {
        max-width: 100%;
        padding-right: 25px;
        padding-left: 25px;
        margin-right: auto;
        margin-left: auto;
    }
}

@media (min-width: 1200px) {
    .containerv {
        max-width: 100%;
        padding-right: 25px;
        padding-left: 25px;
        margin-right: auto;
        margin-left: auto;
    }
}

@media (min-width: 1280px) {
    .containerv {
        max-width: 1200px;
    }
}

.clear {
    clear: both;
}

.img-block {
    display: block;
}

.d-grid {
    display: grid;
}

.d-flex {
    display: flex;
    display: -webkit-flex;
}

.text-center {
    text-align: center;
}

.text-left {
    text-align: left;
}

.text-right {
    text-align: right;
}

button,
select {
    outline: none;
    -moz-appearance: none;
    appearance: none;
    -webkit-appearance: none;
}

button,
.btn,
select {
    cursor: pointer;
    font-family: "Open Sans", sans-serif;
}

a,
a:hover {
    text-decoration: none;
}

iframe {
    border: none;
    width: 1000px;
    height: 500px;
    margin: 0 auto;
    background-color: #777;
    display:block;
}

ul {
    margin: 0;
    padding: 0;
}

h1,
h2,
h3,
h4,
h5,
h6 {
    margin: 0;
    padding: 0;
    font-family: "Poppins", serif;
}

p {
    margin: 0;
    padding: 0;
    color: var(--text-color);
}

.p-relative {
    position: relative;
}

.p-absolute {
    position: absolute;
}

.p-fixed {
    position: fixed;
}

.p-sticky {
    position: -webkit-sticky;
    position: sticky;
}

/*-- page-loading-icon --*/
.no-js #loader {
    display: none;
}

.js #loader {
    display: block;
    position: absolute;
    left: 100px;
    top: 0;
}

.se-pre-con {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: url(../images/loader.gif) center no-repeat #fff;
}

/*--// page-loading-icon --*/
a.brand-logo {
    color: var(--title-color);
    font-size: 42px;
    font-family: "Poppins", serif;
}

a.brand-logo img {
    vertical-align: baseline;
}

.header-section p {
    max-width: 750px;
    margin: 0 auto;
}

.header-section h3 {
    color: var(--title-color);
    font-size: 35px;
    line-height: 0px;
    font-weight: 500;
}

.header-section p {
    color: var(--text-color);
    font-size: 22px;
    line-height: 34px;
    font-weight: 600;
    margin-left: auto;
    margin-right: auto;
}

@media (max-width: 800px) {
    .header-section h3 {
        font-size: 40px;
        line-height: 50px;
    }
}

@media (max-width: 667px) {
    .header-section h3 {
        font-size: 32px;
        line-height: 42px;
    }
    .header-section p {
        font-size: 18px;
        line-height: 30px;
    }
}

.theme-button {
    transition: 0.3s ease-out;
    display: inline-block;
    line-height: 32px;
    font-weight: 700;
    font-size: 12px;
    margin: 3px;
    padding: 0px 20px;
    text-transform: uppercase;
}

@media screen and (max-width: 384px) {
    .theme-button {
        line-height: 44px;
        padding: 0px 20px;
    }
}

.rounded-circle {
    border-radius: 50%;
}

.w3l-header .d-grid {
    display: grid;
}

.w3l-header button.navbarv-toggler .icon-close {
    display: block;
}

.w3l-header button.navbarv-toggler .icon-expand {
    display: none;
}

.w3l-header button.navbarv-toggler.collapsed .icon-close {
    display: none;
}

.w3l-header button.navbarv-toggler.collapsed .icon-expand {
    display: block;
}

.w3l-header .grid-columns-top-3 {
    grid-template-columns: 1fr auto auto;
    align-items: center;
    grid-gap: 30px;
}

.w3l-header .grid-columns-auto {
    grid-auto-flow: column;
    align-items: center;
}

.w3l-header .grid-columns-auto-end {
    grid-auto-flow: column;
    justify-content: space-between;
    align-items: end;
    min-height: 400px;
}

.w3l-header .grid-columns-3 {
    grid-template-columns: 1fr auto 1fr;
}

.w3l-header .align-right,
.w3l-header .menu-overlay-left {
    text-align: right;
}

.w3l-header .top-header {
    padding: 5px 0;
    box-sizing: border-box;
    border-bottom: 1px solid #e7e7e7;
}

.w3l-header .main-header {
    box-sizing: border-box;
    background: #000;
}

.w3l-header .accounts ul li a {
    font-style: normal;
    font-weight: normal;
    font-size: 15px;
    text-align: right;
    color: #000000;
    background: #f5f5f5;
    padding: 8px 15px;
    border-radius: 4px;
    transition: 0.3s ease;
    display: block;
}

.w3l-header .accounts ul li a.active-button {
    background: var(--primary);
    color: #fff;
}

.w3l-header .accounts ul li a:hover {
    opacity: 0.8;
}

.w3l-header .accounts ul li {
    display: inline-block;
    margin-right: 10px;
}

.w3l-header .accounts ul li:last-child {
    margin-right: 0px;
}

.w3l-header a.login {
    font-size: 16px;
    color: var(--light-bg-color);
}

.w3l-header a.login:hover {
    text-decoration: underline;
}

.w3l-header a.actionbg {
    display: inline-block;
    font-size: 16px;
    line-height: 50px;
    padding: 0 20px;
    height: 50px;
    text-align: center;
    color: #000;
    border-radius: 0;
    font-weight: 600;
}

.w3l-header .search form {
    position: relative;
}

.w3l-header .search form input {
    width: 300px;
    outline: none;
    font-size: 15px;
    color: var(--title-color);
    height: 40px;
    text-align: left;
    -webkit-appearance: none;
    background: #ffffff;
    padding-left: 15px;
    border: 1px solid rgba(31, 94, 180, 0.22);
    border-radius: 4px;
    padding-right: 45px;
}

.w3l-header .search form button {
    outline: none;
    font-size: 15px;
    padding: 0px 15px;
    color: var(--title-color);
    height: 35px;
    text-align: left;
    -webkit-appearance: none;
    background: #ffffff;
    padding-left: 15px;
    border: none;
    border-radius: 4px;
    position: absolute;
    right: 2px;
    top: 2.5px;
}

.w3l-header .search form button span {
    font-size: 15px;
    color: var(--text-color);
}

.w3l-header .side-search form {
    position: relative;
}

.w3l-header .side-search form input {
    outline: none;
    font-size: 15px;
    color: var(--title-color);
    height: 40px;
    text-align: left;
    -webkit-appearance: none;
    background: #ffffff;
    padding-left: 15px;
    border: 1px solid rgba(31, 94, 180, 0.22);
    border-radius: 4px;
    padding-right: 45px;
    width: 100%;
}

.w3l-header .side-search form button {
    outline: none;
    font-size: 15px;
    padding: 0px 15px;
    color: var(--title-color);
    height: 35px;
    text-align: left;
    -webkit-appearance: none;
    background: #ffffff;
    padding-left: 15px;
    border: none;
    border-radius: 4px;
    position: absolute;
    right: 2px;
    top: 2.5px;
}

.w3l-header .side-search form button span {
    font-size: 15px;
    color: var(--text-color);
}

.w3l-header .quick-links ul {
    display: flex;
    align-items: center;
}

.w3l-header .quick-links ul li {
    display: flex;
    margin-right: 50px;
    align-items: center;
}

.w3l-header .quick-links ul li,
.w3l-header .quick-links ul li a {
    font-size: 14px;
    color: #e2e2e2;
}

.w3l-header .quick-links ul li span {
    font-size: 18px;
    color: var(--primary);
    margin-right: 5px;
    opacity: 0.8;
}

.w3l-header .right-grid {
    grid-auto-flow: column;
    align-items: center;
    grid-template-columns: 1fr auto;
}

.w3l-header i.fa.fa-bars {
    font-size: 20px;
    color: #000000;
    background: #fff;
    text-align: center;
}

.w3l-header h3.side-title {
    font-size: 19px;
    color: var(--title-color);
    font-weight: bold;
    text-transform: uppercase;
    margin-bottom: 12px;
    border-bottom: 1px solid #e6e6e6;
    padding-bottom: 8px;
    display: inline-block;
}

.w3l-header .gap-top {
    margin-top: 4rem;
}

.w3l-header .quick-contact ul li {
    display: flex;
    align-items: center;
    margin: 1rem 0;
}

.w3l-header .quick-contact ul li,
.w3l-header .quick-contact ul li a {
    font-size: 18px;
    color: #666;
}

.w3l-header .quick-contact ul li span {
    font-size: 24px;
    color: var(--primary);
    margin-right: 15px;
    width: 20px;
    text-align: center;
    opacity: 0.75;
}

.w3l-header .quick-links-side ul li {
    margin: 10px 0;
}

.w3l-header .quick-links-side ul li a {
    font-size: 16px;
    color: var(--title-color);
}

.w3l-header .follow-us ul li {
    display: inline-block;
    width: 50px;
    height: 50px;
    background: #eee;
    text-align: center;
    line-height: 50px;
    border-radius: 50%;
    margin-right: 15px;
}

.w3l-header .follow-us ul li a {
    display: block;
}

.w3l-header .follow-us ul li a:hover {
    opacity: 0.8;
}

.w3l-header .follow-us ul li a span {
    color: #fff;
    font-size: 20px;
    line-height: 50px;
    display: block;
    border-radius: 50%;
}

.w3l-header .follow-us ul li a span.fa-facebook {
    background: #3b5998;
}

.w3l-header .follow-us ul li a span.fa-twitter {
    background: #1da1f2;
}

.w3l-header .follow-us ul li a span.fa-google-plus {
    background: #dd4b39;
}

.w3l-header .follow-us ul li a span.fa-instagram {
    background: #c13584;
}

.w3l-header .overlay-menuv {
    overflow-y: scroll;
}

.w3l-header .overlay-menuv::-webkit-scrollbar {
    width: 3px;
}

.w3l-header .overlay-menuv::-webkit-scrollbar-track {
    box-shadow: inset 0 0 5px #ffffff;
    border-radius: 5px;
}

.w3l-header .overlay-menuv::-webkit-scrollbar-thumb {
    background: #999;
}

.w3l-header .overlay-menuv-hny {
    position: relative;
}

.w3l-header .menuopen {
    cursor: pointer;
}

.w3l-header .side-menu-hny:hover {
    opacity: 0.9;
}

.w3l-header .overlay-menuv-hny input[type="checkbox"] {
    display: none;
}

.w3l-header .side-menu-hny label.menuclose {
    text-transform: uppercase;
    text-align: center;
}

.w3l-header .side-menu-hny label.menuclose:hover {
    cursor: pointer;
}

.w3l-header .overlay-menuv {
    position: fixed;
    max-width: 350px;
    width: 350px;
    height: 100%;
    top: 0;
    right: 0;
    background: white;
    z-index: 999;
}

.w3l-header .overlay-menuv label.menuclose {
    width: 28px;
    height: 28px;
    position: absolute;
    right: 20px;
    top: 65px;
    z-index: 100;
    cursor: pointer;
    z-index: 999;
}

.w3l-header .side-menu-hny ~ .overlay-menuv-hugeinc {
    opacity: 0;
    visibility: hidden;
}

.w3l-header #op:checked ~ .overlay-menuv-hugeinc {
    opacity: 1;
    visibility: visible;
    padding: 0 2rem 1rem;
    box-shadow: 0 15px 40px -5px rgba(0, 0, 0, 0.1);
}

.w3l-header .overlay-menuv-hny span.fa-times {
    color: red;
    font-size: 15px;
}

.w3l-header .slider-text-w3ls h4 {
    font-size: 35px;
    line-height: 40px;
    color: var(--white-color);
    margin-bottom: 20px;
}

.w3l-header .slider-text-w3ls span {
    font-style: normal;
    font-weight: normal;
    font-size: 12px;
    text-align: center;
    color: #ffffff;
    background: var(--primary);
    padding: 8px 10px;
    margin-bottom: 30px;
    display: inline-block;
    text-transform: uppercase;
}

.w3l-header .slider-text-w3ls p {
    font-style: normal;
    font-weight: normal;
    font-size: 17px;
    line-height: 25px;
    color: #e8e8e8;
    max-width: 600px;
    margin-bottom: 25px;
}

.w3l-header a.action {
    font-size: 17px;
    line-height: 25px;
    color: #fff;
    font-weight: 600;
}

.w3l-header a.action:hover {
    text-decoration: underline;
}

.w3l-header .slider-num h4 {
    font-style: normal;
    font-weight: normal;
    font-size: 25px;
    line-height: 35px;
    color: #fff;
    font-weight: 600;
}

.w3l-header .slider-num h4 span {
    font-style: normal;
    font-weight: normal;
    font-size: 15px;
    line-height: 20px;
    color: #e8e8e8;
}

.w3l-header .slider-num p {
    font-style: normal;
    font-weight: normal;
    font-size: 17px;
    line-height: 25px;
    text-align: right;
    color: #ffffff;
}

@media (max-width: 1080px) {
    .w3l-header .grid-columns-auto-end {
        min-height: 350px;
    }
}

@media (max-width: 900px) {
    .w3l-header .quick-links ul li {
        margin-right: 20px;
    }
}

@media (max-width: 736px) {
    .w3l-header .grid-columns-auto-end {
        min-height: 300px;
    }
}

@media (max-width: 668px) {
    .w3l-header .button.align-right {
        display: none;
    }
}

@media (max-width: 600px) {
    .w3l-header .search form input {
        width: 200px;
    }
}

@media (max-width: 500px) {
    .w3l-header .accounts {
        order: 1;
    }
    .w3l-header .menu-overlay-left {
        order: 2;
    }
    .w3l-header .grid-columns-top-3 {
        grid-template-columns: auto 1fr;
        grid-gap: 10px;
    }
    .w3l-header .search form input {
        width: 100%;
    }
    .w3l-header .search form {
        display: none;
    }
    .w3l-header li.mobile-none {
        display: none !important;
    }
}

.w3l-header .navbarv-expand-xl .navbarv-navv .dropdown-menu {
    transform: translateX(-50px);
}

.w3l-header .navbarv-expand-xl .navbarv-navv .dropdown-menu:before {
    content: "";
    width: 10px;
    height: 10px;
    background: #fff;
    border: 1px #d5d5d5ee solid;
    display: block;
    border-right: none;
    border-bottom: none;
    transform: translateX(-50%) rotateZ(45deg);
    position: absolute;
    top: -6px;
    left: 49%;
    z-index: 1001;
}

.w3l-header .dropdown-item {
    color: #848484;
    font-size: 16px;
    font-weight: 700;
}

.w3l-header .dropdown-item.active {
    color: var(--primary);
    background-color: transparent;
}

.w3l-header .dropdown-item:hover,
.w3l-header .dropdown-item:focus {
    color: var(--primary);
    text-decoration: none;
    background-color: transparent;
}

.w3l-header .navbarv-light .navbarv-brand {
    color: var(--title-color);
    font-size: 42px;
    font-family: "Poppins", serif;
}

.w3l-header a.navbarv-brand img {
    vertical-align: baseline;
}

.w3l-header li.navv-item {
    margin: 0px 6px;
}

.w3l-header .navbarv-light .navbarv-navv .navv-link {
    color: #848484;
    font-size: 14px;
    font-weight: 700;
    text-transform: uppercase;
}

.w3l-header .navbarv-light .navbarv-navv .show > .navv-link,
.w3l-header .navbarv-light .navbarv-navv .active > .navv-link,
.w3l-header .navbarv-light .navbarv-navv .navv-link.show,
.w3l-header .navbarv-light .navbarv-navv .navv-link.active {
    color: var(--primary);
}

.w3l-header .navbarv-light .navbarv-navv .navv-link:hover,
.w3l-header .navbarv-light .navbarv-navv .navv-link:focus {
    color: var(--primary);
}

.w3l-header .dropdown-toggle::after {
    margin-left: 0.1em;
    border-top: 0.3em solid;
    border-right: 0.2em solid transparent;
    border-left: 0.2em solid transparent;
    vertical-align: middle;
}

@media (max-width: 1200px) {
    .w3l-header .navbarv-light .navbarv-toggler-icon {
        background-image: none;
        color: #fff;
        font-size: 20px;
        padding-top: 5px;
    }
    .w3l-header .navbarv-toggler {
        padding: 6px 10px;
        font-size: 16px;
        background-color: var(--secondary);
        border: none;
    }
}

@media (max-width: 991px) {
    .w3l-header .navbarv-collapse {
        background: rgba(0, 0, 0, 0.8);
        padding: 10px;
        max-height: calc(100vh - 73px);
        overflow-y: auto;
        border-radius: var(--card-curve);
    }
    .w3l-header li.navv-item {
        margin: 0px 0px;
    }
    .w3l-header .navbarv-navv .navv-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem;
    }
    .w3l-header .form-inline {
        margin: 0.5rem;
    }
}

@media (max-width: 1199px) {
    .w3l-header .navbarv-expand-xl .navbarv-navv .dropdown-menu {
        transform: translateX(0px);
    }
    .w3l-header .navbarv-expand-xl .navbarv-navv .dropdown-menu:before {
        left: 24px;
    }
}

.w3l-main-banner h3.banner-text {
    font-weight: 700;
    font-size: 50px;
    line-height: 75px;
    color: var(--title-color);
}

.w3l-main-banner .banner-info p {
    font-size: 18px;
    color: var(--text-color);
    display: inline-block;
    line-height: 28px;
    max-width: 650px;
}

.w3l-main-banner .banner-slider {
    position: relative;
    z-index: 1;
}

.w3l-main-banner .companies-wrapper {
    background: rgba(254, 146, 64, 0.05);
}

.w3l-main-banner .banner-view {
    background: url(../images/banner.png) no-repeat right;
    background-size: contain;
    min-height: 700px;
    position: relative;
    z-index: 0;
    display: grid;
    align-items: center;
}

.w3l-main-banner .banner-view:before {
    content: "";
    position: absolute;
    top: 0;
    min-height: 100%;
    left: 0;
    right: 0;
    z-index: -1;
}

@media (max-width: 1280px) {
    .w3l-main-banner .banner-view {
        min-height: 650px;
    }
}

@media (max-width: 992px) {
    .w3l-main-banner h3.gallery4-head {
        font-size: 30px;
        line-height: 37px;
    }
    .w3l-main-banner h3.banner-text {
        font-size: 45px;
        line-height: 58px;
    }
    .w3l-main-banner .banner-top-inner-page {
        min-height: 180px;
    }
}

@media (max-width: 991px) {
    .w3l-main-banner .banner-view {
        min-height: 600px;
    }
}

@media (max-width: 900px) {
    .w3l-main-banner h3.banner-text {
        font-size: 40px;
        line-height: 55px;
    }
    .w3l-main-banner .banner-top-inner-page {
        min-height: 150px;
    }
}

@media (max-width: 768px) {
    .w3l-main-banner .banner-view:before {
        background: rgba(255, 255, 255, 0.58);
        margin-left: -25px;
        margin-right: -25px;
    }
}

@media (max-width: 600px) {
    .w3l-main-banner h3.gallery4-head {
        margin-bottom: 20px;
    }
    .w3l-main-banner .banner-view {
        min-height: 550px;
    }
}

@media (max-width: 576px) {
    .w3l-main-banner .banner-view:before {
        background: rgba(255, 255, 255, 0.58);
        margin-left: -15px;
        margin-right: -15px;
    }
}

@media (max-width: 569px) {
    .w3l-main-banner h3.gallery4-head {
        font-size: 26px;
        line-height: 34px;
    }
    .w3l-main-banner h3.banner-text {
        font-size: 32px;
        line-height: 40px;
    }
    .w3l-main-banner .banner-view {
        min-height: 420px;
    }
    .w3l-main-banner .banner-top-inner-page {
        min-height: 120px;
    }
}

@media (max-width: 500px) {
    .w3l-main-banner .banner-info p {
        font-size: 16px;
        line-height: 24px;
    }
    .w3l-main-banner .banner-view {
        min-height: 340px;
    }
}

@media (max-width: 440px) {
    .w3l-main-banner h3.banner-text {
        font-size: 26px;
        line-height: 32px;
    }
}

@media (max-width: 380px) {
    .w3l-main-banner .banner-view {
        min-height: 320px;
    }
}

.w3l-index5 .new-block {
    display: grid;
    align-items: center;
    padding: 2rem 0;
}

.w3l-index5 .list-single-view {
    max-width: 800px;
    margin: 0 auto;
}

.w3l-index5 .list-single-view .grids5-info {
    display: grid;
    grid-template-columns: 50% 50%;
}

.w3l-index5 .list-single-view .grids5-info h4 {
    font-size: 24px;
    line-height: 32px;
    color: var(--title-color);
    display: block;
    font-weight: 600;
}

.w3l-index5 .list-single-view .blog-info {
    padding: 30px;
    border-top-right-radius: 6px;
    border-bottom-right-radius: 6px;
}

.w3l-index5 .list-single-view .grids5-info p {
    margin-top: 15px;
    line-height: 25px;
    color: var(--text-color);
}

.w3l-index5 .list-single-view p.date {
    margin-bottom: 10px;
    margin-top: 0;
    font-size: 14px;
    color: var(--primary);
    font-weight: 600;
}

.w3l-index5 .list-single-view img.news-image {
    border-top-left-radius: 6px;
    border-bottom-left-radius: 6px;
}

@media all and (max-width: 991px) {
    .w3l-index5 .list-single-view .grids5-info {
        grid-template-columns: 100%;
    }
    .w3l-index5 .list-single-view img.news-image,
    .w3l-index5 .list-single-view a.zoom {
        border-top-left-radius: 6px;
        border-top-right-radius: 6px;
        border-bottom-left-radius: 0px;
    }
}

@media all and (max-width: 736px) {
    .w3l-index5 .list-single-view .blog-info {
        padding: 15px;
    }
}

.w3l-index5 .grids5-info {
    border-radius: var(--card-curve);
    transition: 0.3s ease-in;
    display: block;
    height: 100%;
    background: #fff;
    border: 1px solid #eeeeee;
}

.w3l-index5 a.zoom {
    overflow: hidden;
    border-top-left-radius: var(--card-curve);
    border-bottom-left-radius: var(--card-curve);
}

.w3l-index5 a.zoom img {
    transition: 0.3s ease-in-out;
}

.w3l-index5 a.zoom img:hover {
    overflow: hidden;
    transform: scale(1.1);
    transition: 0.3s ease-in-out;
}

.w3l-index5 .blog-info {
    background: #fff;
    padding: 30px 20px;
    border-bottom-left-radius: 6px;
    border-bottom-right-radius: 6px;
}

@media all and (max-width: 1280px) {
    .w3l-index5 .d-grid {
        grid-gap: 15px;
    }
}

@media all and (max-width: 1080px) {
    .w3l-index5 .d-grid {
        grid-template-columns: 1fr 1fr;
    }
}

@media all and (max-width: 991px) {
    .w3l-index5 .list-single-view {
        max-width: 600px;
        margin: 0 auto;
    }
}

@media all and (max-width: 800px) {
    .w3l-index5 .d-grid {
        grid-gap: 30px;
    }
}

@media all and (max-width: 768px) {
    .w3l-index5 .grids5-info h4 {
        font-size: 20px;
        line-height: 25px;
    }
}

@media all and (max-width: 668px) {
    .w3l-index5 .d-grid {
        grid-template-columns: 1fr;
    }
}

@media all and (max-width: 568px) {
    .w3l-index5 .d-grid {
        grid-template-columns: 1fr;
    }
    .w3l-index5 .grids5-info p {
        margin-top: 12px;
    }
}

@media all and (max-width: 414px) {
    .w3l-index5 .grids5-info h4 {
        font-size: 23px;
    }
}

@media all and (max-width: 384px) {
    .w3l-index5 .grids5-info h4 {
        font-size: 22px;
    }
}

/*-- stats --*/
.w3l-stats {
    background: url(../images/stat.jpg) no-repeat center;
    background-size: cover;
    position: relative;
    z-index: 1;
    background-attachment: fixed;
}

.w3l-stats:before {
    position: absolute;
    content: "";
    background: rgba(0, 0, 0, 0.6);
    top: 0px;
    left: 0px;
    bottom: 0px;
    right: 0px;
    z-index: -1;
}

.stats_info p {
    font-size: 50px;
    line-height: 60px;
    font-weight: 700;
    color: #fff;
    margin-top: 20px;
    margin-bottom: 0;
}

.stats_info h4 {
    font-size: 18px;
    line-height: 24px;
    text-transform: capitalize;
    color: #eee;
    margin-top: 10px;
}

.stats_info span.fa {
    font-size: 2.5em;
    color: var(--primary);
    margin: 0;
}

.stats_bottom_grid_left img {
    margin: 0 auto;
}

.stats_info {
    text-align: center;
    padding: 0;
    border-top: none;
    border-bottom: none;
}

.stats_info:nth-child(3) {
    border-right: 0px;
}

.stats_info:nth-child(2) {
    border-left: 0px;
    border-right: 0px;
}

@media (max-width: 992px) {
    .stats_info p {
        font-size: 40px;
        line-height: 50px;
    }
    .stats_info h4 {
        font-size: 16px;
    }
}

@media (max-width: 737px) {
    .stats_info {
        padding: 0 5px !important;
    }
    .stats_info h4 {
        font-size: 17px;
    }
}

@media (max-width: 415px) {
    .stats_info span.fa {
        font-size: 2em;
    }
}

/*--//stats--*/
/**
 * Owl Carousel v2.3.4
 * Copyright 2013-2018 David Deutsch
 * Licensed under: SEE LICENSE IN https://github.com/OwlCarousel2/OwlCarousel2/blob/master/LICENSE
 */
.owl-carousel,
.owl-carousel .owl-item {
    -webkit-tap-highlight-color: transparent;
    position: relative;
}

.owl-carousel {
    display: none;
    width: 100%;
    z-index: 1;
}

.owl-carousel .owl-stage {
    position: relative;
    touch-action: manipulation;
    -moz-backface-visibility: hidden;
}

.owl-carousel .owl-stage:after {
    content: ".";
    display: block;
    clear: both;
    visibility: hidden;
    line-height: 0;
    height: 0;
}

.owl-carousel .owl-stage-outer {
    position: relative;
    overflow: hidden;
    -webkit-transform: translate3d(0, 0, 0);
}

.owl-carousel .owl-item,
.owl-carousel .owl-wrapper {
    -webkit-backface-visibility: hidden;
    -webkit-transform: translate3d(0, 0, 0);
}

.owl-carousel .owl-item {
    min-height: 1px;
    float: left;
    -webkit-backface-visibility: hidden;
    -webkit-touch-callout: none;
}

.owl-carousel .owl-dots.disabled,
.owl-carousel .owl-navv.disabled {
    display: block;
}

.no-js .owl-carousel,
.owl-carousel.owl-loaded {
    display: block;
}

.owl-carousel .owl-dot,
.owl-carousel .owl-navv .owl-next,
.owl-carousel .owl-navv .owl-prev {
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

.owl-carousel.owl-loading {
    opacity: 0;
    display: block;
}

.owl-carousel.owl-hidden {
    opacity: 0;
}

.owl-carousel.owl-refresh .owl-item {
    visibility: hidden;
}

.owl-carousel.owl-drag .owl-item {
    touch-action: pan-y;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

.owl-carousel.owl-grab {
    cursor: move;
    cursor: -webkit-grab;
    cursor: grab;
}

.owl-carousel.owl-rtl {
    direction: rtl;
}

.owl-carousel.owl-rtl .owl-item {
    float: right;
}

.owl-carousel .animated {
    -webkit-animation-duration: 1s;
    animation-duration: 1s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both;
}

.owl-carousel .owl-animated-in {
    z-index: 0;
}

.owl-carousel .owl-animated-out {
    z-index: 1;
}

.owl-carousel .fadeOut {
    -webkit-animation-name: fadeOut;
    animation-name: fadeOut;
}

@-webkit-keyframes fadeOut {
    0% {
        opacity: 1;
    }
    100% {
        opacity: 0;
    }
}

@keyframes fadeOut {
    0% {
        opacity: 1;
    }
    100% {
        opacity: 0;
    }
}

.owl-height {
    transition: height 0.5s ease-in-out;
}

.owl-carousel .owl-item .owl-lazy {
    opacity: 0;
    transition: opacity 0.4s ease;
}

.owl-carousel .owl-item .owl-lazy:not([src]),
.owl-carousel .owl-item .owl-lazy[src^=""] {
    max-height: 0;
}

.owl-carousel .owl-item img.owl-lazy {
    transform-style: preserve-3d;
}

.owl-carousel .owl-video-wrapper {
    position: relative;
    height: 100%;
    background: #000;
}

.owl-carousel .owl-video-play-icon {
    position: absolute;
    height: 80px;
    width: 80px;
    left: 50%;
    top: 50%;
    margin-left: -40px;
    margin-top: -40px;
    background: url(owl.video.play.png) no-repeat;
    cursor: pointer;
    z-index: 1;
    -webkit-backface-visibility: hidden;
    transition: transform 0.1s ease;
}

.owl-carousel .owl-video-play-icon:hover {
    transform: scale(1.3, 1.3);
}

.owl-carousel .owl-video-playing .owl-video-play-icon,
.owl-carousel .owl-video-playing .owl-video-tn {
    display: none;
}

.owl-carousel .owl-video-tn {
    opacity: 0;
    height: 100%;
    background-position: center center;
    background-repeat: no-repeat;
    background-size: contain;
    transition: opacity 0.4s ease;
}

.owl-carousel .owl-video-frame {
    position: relative;
    z-index: 1;
    height: 100%;
    width: 100%;
}

/**
 * Owl Carousel v2.3.4
 * Copyright 2013-2018 David Deutsch
 * Licensed under: SEE LICENSE IN https://github.com/OwlCarousel2/OwlCarousel2/blob/master/LICENSE
 */
.owl-theme .owl-dots,
.owl-theme .owl-navv {
    text-align: center;
    -webkit-tap-highlight-color: transparent;
}

.owl-dots {
    margin-top: 20px;
}

.owl-one.owl-theme .owl-navv [class*="owl-prev"],
.owl-one.owl-theme .owl-navv [class*="owl-next"] {
    color: var(--title-color);
    margin: 0px;
    background: #fff;
    display: inline-block;
    cursor: pointer;
    height: 50px;
    width: 50px;
    line-height: 50px;
    border-radius: var(--card-curve);
    padding: 0;
    transition: 0.3s ease-in;
    border: 1px solid var(--light-bg-color);
    box-shadow: -1px 2px 12px -9px rgba(0, 0, 0, 0.41);
    background-color: white;
}

.owl-theme .owl-navv [class*="owl-"]:hover {
    opacity: 1;
    text-decoration: none;
    outline: none;
    box-shadow: -1px 2px 22px -9px rgba(0, 0, 0, 0.41);
    transition: 0.3s ease-in;
    color: var(--secondary);
}

.owl-theme .owl-navv [class*="owl-"]:focus,
.owl-theme:focus,
.owl-dots:focus,
.owl-dot:focus {
    outline: none;
    box-shadow: none;
}

.owl-theme .owl-navv .disabled {
    opacity: 0.5;
    cursor: default;
}

.owl-theme .owl-navv.disabled + .owl-dots {
    margin-top: 30px;
}

.owl-theme .owl-dots .owl-dot {
    display: inline-block;
    zoom: 1;
    border: none;
    background: transparent;
    padding: 0;
    display: none;
}

.owl-theme .owl-dots .owl-dot span {
    width: 10px;
    height: 10px;
    margin: 5px 3px;
    background: var(--light-bg-color);
    display: block;
    -webkit-backface-visibility: visible;
    transition: opacity 0.2s ease;
    border-radius: 30px;
    position: relative;
    border: 2px solid #6b757d;
}

button.owl-next,
button.owl-prev {
    position: absolute;
    bottom: 42%;
}

button.owl-prev {
    left: 0px;
}

button.owl-next {
    right: 0px;
}

.owl-theme .owl-dots .owl-dot.active span,
.owl-theme .owl-dots .owl-dot:hover span {
    background: var(--text-color);
}

.owl-two.owl-theme .owl-navv [class*="owl-prev"],
.owl-two.owl-theme .owl-navv [class*="owl-next"] {
    color: var(--primary);
    margin: 0px;
    background: #fff;
    display: inline-block;
    cursor: pointer;
    height: 40px;
    width: 40px;
    line-height: 40px;
    border-radius: var(--card-curve);
    padding: 0;
    transition: 0.3s ease-in;
    border: 2px solid var(--primary);
    background-color: white;
}

.owl-two button.owl-prev {
    left: 37%;
}

.owl-two button.owl-next {
    right: 37%;
}

.owl-two button.owl-next,
.owl-two button.owl-prev {
    bottom: -70px;
}

.w3l-testimonials .testimonials {
    background-color: var(--light-bg-color);
}

.w3l-testimonials .slider-info {
    max-width: 95%;
    margin: 0 auto;
    border-radius: var(--card-curve);
    border: 1px solid #eee;
    display: grid;
    grid-template-columns: 0.5fr 1fr;
    align-items: center;
    background-color: #fff;
}

.w3l-testimonials img.testimonial-img {
    border-top-left-radius: var(--card-curve);
    border-bottom-left-radius: var(--card-curve);
}

.w3l-testimonials .message {
    padding: 2rem;
    position: relative;
}

.w3l-testimonials .message span {
    font-size: 50px;
    color: var(--title-color);
    opacity: 0.09;
    position: absolute;
    top: 5px;
    left: 0;
    right: 0;
    padding-left: 2rem;
}

.w3l-testimonials .message p {
    font-size: 24px;
    line-height: 33px;
    color: var(--title-color);
}

.w3l-testimonials .name h4 {
    font-size: 18px;
    color: var(--secondary);
    font-weight: 600;
    text-transform: uppercase;
}

.w3l-testimonials .name p {
    font-size: 16px;
    color: var(--text-color);
}

@media (max-width: 992px) {
    .w3l-testimonials .slider-info {
        grid-template-columns: 1fr;
    }
    .w3l-testimonials .message {
        margin-top: 1rem;
        padding-bottom: 0;
    }
    .w3l-testimonials .slider-info {
        padding: 4rem;
    }
    .w3l-testimonials img.testimonial-img {
        border-radius: var(--card-curve);
    }
    .w3l-testimonials .img-circle {
        width: 180px;
        height: 180px;
        display: inline-block;
        overflow: hidden;
        border-radius: 50%;
        margin: 0 auto;
    }
    .w3l-testimonials .img-circle img {
        width: 100%;
        min-height: 100%;
        -o-object-fit: cover;
        object-fit: cover;
        -o-object-position: center;
        object-position: center;
    }
}

@media (max-width: 900px) {
    .w3l-testimonials .slider-info {
        padding: 2rem;
    }
    .w3l-testimonials img.testimonial-img {
        border-radius: var(--card-curve);
    }
}

@media (max-width: 480px) {
    .w3l-testimonials .slider-info {
        padding: 15px;
    }
    .w3l-testimonials .message p {
        font-size: 16px;
        line-height: 28px;
        margin-top: 15px;
    }
}

.w3l-index-block4 .feature-16-main {
    background: var(--light-bg-color);
}

.w3l-index-block4 .features-grids {
    max-width: 850px;
    margin-left: auto;
    margin-right: auto;
}

.w3l-index-block4 .feature-16-gd h4 {
    font-size: 25px;
    line-height: 30px;
    color: var(--title-color);
    font-weight: 700;
}

.w3l-index-block4 .icon {
    background: rgba(168, 54, 49, 0.04);
    padding: 2rem;
    display: inline-block;
    border-radius: 50%;
}

.w3l-index-block4 .icon span {
    font-size: 55px;
    color: var(--secondary);
}

.w3l-index-block4 .feature-16-gd-info p {
    margin: 0px 0px 20px;
    font-style: normal;
    font-size: 16px;
    line-height: 28px;
    color: var(--text-color);
}

.w3l-index-block4 .feature-16-gd-info ul li {
    margin: 10px 0 0px;
    font-size: 16px;
    line-height: 26px;
    color: var(--text-color);
    padding-left: 20px;
    position: relative;
}

.w3l-index-block4 .feature-16-gd-info ul li:before {
    content: "";
    width: 6px;
    height: 6px;
    background-color: #fff;
    border-radius: 100px;
    position: absolute;
    top: 11px;
    left: 0;
    border: 1px solid #f00;
}

.w3l-index-block4 .feature-16-gd {
    padding: 2rem;
    background-color: #fff;
    border: 1px solid #eeeeee;
    border-radius: var(--card-curve);
}

@media screen and (max-width: 1290px) {
    .w3l-index-block4 .feature-16-inf {
        padding: 3em 3em;
    }
}

@media screen and (max-width: 1080px) {
    .w3l-index-block4 .feature-16-inf {
        padding: 3em 2em;
    }
    .w3l-index-block4 .feature-16-gd-info p {
        margin: 0px 0 30px;
        padding-right: 0px;
    }
}

@media screen and (max-width: 801px) {
    .w3l-index-block4 .feature-16-gd-info p {
        margin: 0px 0 30px;
        padding-right: 0px;
    }
}

@media screen and (max-width: 640px) {
    .w3l-index-block4 .feature-16-main h3 a {
        font-size: 20px;
    }
}

@media screen and (max-width: 420px) {
    .w3l-index-block4 .feature-16-gd h4 {
        font-size: 22px;
    }
}

@media screen and (max-width: 384px) {
    .w3l-index-block4 .feature-16-gd h4 {
        font-size: 20px;
    }
}

.w3l-get-started .new-block {
    background-size: cover;
    background-image: linear-gradient(to right, #000000, rgba(0, 0, 0, 0.08)),
        url(../images/g2.jpg);
    background-repeat: no-repeat, no-repeat, no-repeat;
    background-position: center;
    background-attachment: fixed;
    display: grid;
    align-items: center;
    padding: 6rem 0;
}

.w3l-get-started .middle-section {
    max-width: 580px;
}

.w3l-get-started .middle-section h2 {
    color: #ffffff;
    font-size: 36px;
    line-height: 48px;
    text-transform: uppercase;
    font-weight: 600;
}

.w3l-get-started .link-list-menu p {
    font-size: 18px;
    color: #eee;
    line-height: 28px;
    padding-top: 25px;
}

.w3l-get-started .btn-more {
    font-size: 16px;
    display: inline-block;
    font-weight: bold;
    transition: 0.3s ease-in-out;
    padding: 15px 30px;
}

@media (max-width: 1080px) {
    .w3l-get-started .link-list-menu p {
        font-size: 23px;
        line-height: 32px;
    }
    .w3l-get-started .middle-section h2 {
        font-size: 45px;
        line-height: 55px;
    }
    .w3l-get-started .link-list-menu p {
        font-size: 20px;
        line-height: 30px;
    }
}

@media (max-width: 800px) {
    .w3l-get-started .middle-section h2 {
        font-size: 50px;
    }
    .w3l-get-started .middle-section a {
        margin-top: 40px;
    }
    .w3l-get-started .middle-section h2 {
        font-size: 40px;
        line-height: 50px;
    }
    .w3l-get-started .link-list-menu p {
        font-size: 20px;
        line-height: 32px;
    }
}

@media (max-width: 667px) {
    .w3l-get-started .link-list-menu {
        max-width: 523px;
    }
    .w3l-get-started .link-list-menu p {
        padding-top: 19px;
    }
    .w3l-get-started .middle-section a {
        margin-top: 30px;
    }
    .w3l-get-started .middle-section h2 {
        font-size: 35px;
        line-height: 45px;
    }
}

@media (max-width: 640px) {
    .w3l-get-started .link-list-menu p {
        font-size: 23px;
    }
}

@media (max-width: 600px) {
    .w3l-get-started .middle-section h2 {
        font-size: 38px;
    }
    .w3l-get-started .link-list-menu p {
        padding-top: 13px;
    }
}

@media (max-width: 480px) {
    .w3l-get-started .middle-section h2 {
        font-size: 34px;
        line-height: 42px;
    }
    .w3l-get-started .link-list-menu p {
        font-size: 19px;
    }
}

@media (max-width: 440px) {
    .w3l-get-started .middle-section h2 {
        font-size: 29px;
    }
    .w3l-get-started .middle-section h2 {
        font-size: 30px;
        line-height: 40px;
    }
}

@media (max-width: 384px) {
    .w3l-get-started .link-list-menu p {
        font-size: 18px;
    }
    .w3l-get-started .middle-section a {
        margin-top: 25px;
    }
}

@media (max-width: 320px) {
    .w3l-get-started .link-list-menu {
        width: 281px;
    }
    .w3l-get-started .link-list-menu p {
        font-size: 20px;
    }
    .w3l-get-started .middle-section h2 {
        font-size: 33px;
    }
}

.w3l-faq-block .list-group-item.active {
    background: transparent;
    color: var(--primary);
    font-weight: 600;
    border: none;
    font-size: 26px;
    line-height: 36.4px;
    transition: 0.3s ease-in;
}

.w3l-faq-block .list-group-item + .list-group-item.active {
    margin-top: 0px;
    border-top-width: 0px;
}

.w3l-faq-block .list-group-item-action:hover,
.w3l-faq-block .list-group-item-action:focus {
    color: var(--primary);
    background-color: #fff;
    transition: 0.3s ease-in;
}

.w3l-faq-block .list-group-item + .list-group-item,
.w3l-faq-block .list-group-item {
    border: none;
    font-size: 26px;
    line-height: 36.4px;
    font-weight: 600;
    transition: 0.3s ease-in;
    padding-left: 0;
}

.w3l-faq-block .list-group {
    position: -webkit-sticky;
    position: sticky;
    top: 20px;
}

.w3l-faq-block .w3l-faq .transition,
.w3l-faq-block .w3l-faq p,
.w3l-faq-block .w3l-faq ul li i:before,
.w3l-faq-block .w3l-faq ul li i:after {
    transition: all 0.25s ease-in-out;
}

.w3l-faq-block .w3l-faq .flipIn,
.w3l-faq-block .w3l-faq h1,
.w3l-faq-block .w3l-faq ul li {
    -webkit-animation: flipdown 0.5s ease both;
    animation: flipdown 0.5s ease both;
}

.w3l-faq-block .w3l-faq .no-select,
.w3l-faq-block .w3l-faq h2 {
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

.w3l-faq-block .w3l-faq h2 {
    font-size: 24px;
    line-height: 34px;
    font-weight: normal;
    display: block;
    margin: 0;
    cursor: pointer;
    color: var(--title-color);
}

.w3l-faq-block .w3l-faq p {
    color: var(--text-color);
    font-size: 18px;
    line-height: 32px;
    position: relative;
    overflow: hidden;
    max-height: 800px;
    opacity: 1;
    transform: translate(0, 0);
    margin-top: 14px;
    z-index: 2;
}

.w3l-faq-block .w3l-faq ul {
    list-style: none;
    padding: 0;
    max-width: 750px;
    margin: 0 auto;
}

.w3l-faq-block .w3l-faq ul li {
    position: relative;
    padding: 20px 50px 20px 25px;
    border: 1px solid #e0e0e0;
    margin: 0 0 20px 0;
    border-radius: var(--card-curve);
}

.w3l-faq-block .w3l-faq ul li:nth-of-type(1) {
    -webkit-animation-delay: 0.5s;
    animation-delay: 0.5s;
}

.w3l-faq-block .w3l-faq ul li:nth-of-type(2) {
    -webkit-animation-delay: 0.75s;
    animation-delay: 0.75s;
}

.w3l-faq-block .w3l-faq ul li:nth-of-type(3) {
    -webkit-animation-delay: 1s;
    animation-delay: 1s;
}

.w3l-faq-block .w3l-faq ul li:nth-of-type(4) {
    -webkit-animation-delay: 1.25s;
    animation-delay: 1.25s;
}

.w3l-faq-block .w3l-faq ul li:nth-of-type(5) {
    -webkit-animation-delay: 1.5s;
    animation-delay: 1.5s;
}

.w3l-faq-block .w3l-faq ul li:nth-of-type(6) {
    -webkit-animation-delay: 1.75s;
    animation-delay: 1.75s;
}

.w3l-faq-block .w3l-faq ul li i {
    position: absolute;
    transform: translate(-6px, 0);
    margin-top: 16px;
    right: 25px;
    top: 16px;
}

.w3l-faq-block .w3l-faq ul li i:before,
.w3l-faq-block .w3l-faq ul li i:after {
    content: "";
    position: absolute;
    background-color: var(--title-color);
    width: 3px;
    height: 9px;
}

.w3l-faq-block .w3l-faq ul li i:before {
    transform: translate(-2px, 0) rotate(45deg);
}

.w3l-faq-block .w3l-faq ul li i:after {
    transform: translate(2px, 0) rotate(-45deg);
}

.w3l-faq-block .w3l-faq ul li input[type="checkbox"] {
    position: absolute;
    cursor: pointer;
    width: 100%;
    height: 100%;
    z-index: 1;
    opacity: 0;
    top: 0;
    left: 0;
    -webkit-appearance: none;
}

.w3l-faq-block .w3l-faq ul li input[type="checkbox"]:checked ~ p {
    margin-top: 0;
    max-height: 0;
    opacity: 0;
    transform: translate(0, 50%);
}

.w3l-faq-block .w3l-faq ul li input[type="checkbox"]:checked ~ i:before {
    transform: translate(2px, 0) rotate(45deg);
}

.w3l-faq-block .w3l-faq ul li input[type="checkbox"]:checked ~ i:after {
    transform: translate(-2px, 0) rotate(-45deg);
}

@media screen and (max-width: 480px) {
    .w3l-faq-block .w3l-faq h2 {
        font-size: 18px;
        line-height: 30px;
    }
}

.w3l-subscribe .subscription-grids.row {
    align-items: center;
    background: var(--light-bg-color);
}

.w3l-subscribe .subscription-left {
    background: url(../images/g3.jpg) no-repeat center;
    background-size: cover;
    min-height: 45em;
    position: relative;
}

.w3l-subscribe .form-right-inf input[type="email"] {
    -webkit-appearance: none;
    outline: none;
    padding: 17px 20px;
    -webkit-appearance: none;
    border-radius: 0;
    color: #000;
    width: 100%;
    font-size: 16px;
    line-height: 26px;
    margin-bottom: 15px;
    border-radius: var(--card-curve);
    border: 1px solid var(--text-color);
    background: #fff;
}

.w3l-subscribe .form-right-inf input[type="email"]:focus {
    border: 1px solid var(--secondary);
}

.w3l-subscribe .forms-gds button.btn {
    cursor: pointer;
    border-radius: var(--card-curve);
    width: 100%;
    padding-top: 3px;
    padding-bottom: 3px;
}

@media (max-width: 1080px) {
    .w3l-subscribe .subscription-left {
        min-height: 36em;
    }
}

@media (max-width: 480px) {
    .w3l-subscribe .subscription-left {
        min-height: 17em;
    }
}

.w3l-footer-29-main #footers14-block {
    background-color: #000;
}

.w3l-footer-29-main .copyright p {
    font-style: normal;
    font-weight: normal;
    font-size: 15px;
    line-height: 24px;
    color: var(--text-color);
    padding: 10px 0;
}

.w3l-footer-29-main .copyright a {
    font-style: normal;
    font-weight: normal;
    font-size: 15px;
    line-height: 20px;
    color: #fff;
}

.w3l-footer-29-main .copyright a:hover {
    text-decoration: underline;
}

.w3l-footer-29-main .social a span {
    font-size: 16px;
    color: #fff;
    padding: 10px;
    transition: 0.3s ease;
}

.w3l-footer-29-main .social a span:hover {
    color: var(--primary);
    transition: 0.3s ease;
}

.w3l-footer-29-main #movetop {
    display: none;
    position: fixed;
    bottom: 15px;
    right: 15px;
    z-index: 99;
    font-size: 16px;
    border: none;
    outline: none;
    cursor: pointer;
    color: #fff;
    width: 35px;
    height: 35px;
    background: #333;
    padding: 0;
    line-height: 35px;
    border-radius: 50%;
    transition: 0.5s ease-out;
}

.w3l-footer-29-main #movetop:hover {
    background: var(--primary);
    transform: translate3d(0, -5px, 0);
    -webkit-transform: translate3d(0, -5px, 0);
    transition: 0.5s ease-out;
}

@media all and (max-width: 736px) {
    .w3l-footer-29-main .copyright {
        order: 2;
    }
}

@media all and (max-width: 667px) {
    .w3l-footer-29-main ul.footer14-navv li {
        margin: 10px 20px 10px 0px;
    }
}

@media all and (max-width: 440px) {
    .w3l-footer-29-main ul.footer14-navv,
    .w3l-footer-29-main .footer14-app {
        margin-top: 2rem;
    }
}

.w3l-footer-29-main a.footer-logo {
    color: #ffffff;
    display: inline-block;
    font-size: 42px;
    font-family: "Poppins", serif;
}

.w3l-footer-29-main a.footer-logo img {
    vertical-align: baseline;
}

.w3l-footer-29-main option {
    background: #ffffff;
    color: var(--text-color);
}

.w3l-footer-29-main a.action img {
    margin-left: 4px;
}

.w3l-footer-29-main .footer-29 {
    background: #090909;
}

.w3l-footer-29-main .footer-list-29 .properties a {
    margin-bottom: 10px;
    transition: 0.3s ease-in;
}

.w3l-footer-29-main .footer-list-29 .properties a p:hover {
    color: var(--primary);
    transition: 0.3s ease-in;
}

.w3l-footer-29-main .footer-list-29 a p {
    color: #c1c1c1;
    font-size: 16px;
    line-height: 25px;
}

.w3l-footer-29-main h6.footer-title-29 {
    color: var(--primary);
    font-size: 22px;
    line-height: 25px;
    text-transform: capitalize;
    margin-bottom: 25px;
    font-weight: 600;
}

.w3l-footer-29-main .footer-list-29 ul li,
.w3l-footer-29-main
    .midd-footer-29:nth-child(1)
    .footer-list-29
    ul
    li:last-child {
    list-style: none;
    margin-bottom: 10px;
}

.w3l-footer-29-main .footer-list-29 ul li:last-child {
    margin-bottom: 0px;
}

.w3l-footer-29-main .footer-list-29 ul li a {
    font-weight: normal;
    font-size: 16px;
    color: #c1c1c1;
    transition: 0.3s ease-in;
}

.w3l-footer-29-main .footer-list-29 p {
    font-weight: normal;
    font-size: 20px;
    color: #d2d2d2;
}

.w3l-footer-29-main .footer-list-29 ul li a:hover {
    color: #fff;
    transition: 0.3s ease-in;
}

.w3l-footer-29-main ul.list-btm-29,
.w3l-footer-29-main p.right-side-con {
    text-align: right;
}

.w3l-footer-29-main .list-btm-29 li {
    list-style-type: none;
    display: inline-block;
}

.w3l-footer-29-main ul.list-btm-29 li:nth-child(2) {
    margin: 0 15px;
}

.w3l-footer-29-main .list-btm-29 li a {
    font-weight: normal;
    font-size: 16px;
    line-height: 25px;
    color: var(--text-color);
}

.w3l-footer-29-main .list-btm-29 li a:hover {
    color: var(--primary);
}

.w3l-footer-29-main .bottom-source {
    margin-top: 60px;
}

.w3l-footer-29-main .main-social-footer-29 {
    margin-top: 20px;
    margin-bottom: 15px;
}

.w3l-footer-29-main .twitter-feed {
    grid-template-columns: 0.33fr 1fr;
    grid-gap: 10px;
}

@media (max-width: 1080px) {
    .w3l-footer-29-main .midd-footer-29 {
        margin-top: 6em;
    }
}

@media (max-width: 1024px) {
    .w3l-footer-29-main .copy-footer-29 {
        text-align: center;
    }
    .w3l-footer-29-main ul.list-btm-29 {
        text-align: center;
        margin-top: 10px;
    }
}

@media (max-width: 667px) {
    .w3l-footer-29-main .main-social-footer-29 a {
        margin-right: 5px;
    }
    .w3l-footer-29-main ul.list-btm-29 li:nth-child(2) {
        margin: 0 18px;
    }
    .w3l-footer-29-main .midd-footer-29 {
        margin-top: 5em;
        padding-bottom: 1.5em;
        margin-bottom: 1.5em;
    }
    .w3l-footer-29-main ul.list-btm-29 li:nth-child(2) {
        margin: 0 12px;
    }
    .w3l-footer-29-main h6.footer-title-29 {
        margin-bottom: 15px;
    }
}

@media (max-width: 600px) {
    .w3l-footer-29-main .midd-footer-29,
    .w3l-footer-29-main ul.list-btm-29 {
        text-align: center;
    }
}

@media (max-width: 384px) {
    .w3l-footer-29-main .midd-footer-29 {
        margin-top: 4em;
    }
    .w3l-footer-29-main .bottom-source {
        margin-top: 40px;
    }
}

.w3l-skill-breadcrum .breadcrum {
    background: var(--light-bg-color);
}

.w3l-skill-breadcrum .breadcrum p {
    font-size: 16px;
    color: var(--text-color);
    padding: 1rem 0;
}

.w3l-skill-breadcrum .breadcrum p a {
    font-size: 16px;
    color: var(--primary);
}

.w3l-skill-breadcrum .breadcrum p a:hover {
    text-decoration: underline;
    color: var(--secondary);
}

.w3l-about1 .d-grid {
    display: grid;
}

.w3l-about1 .column span {
    color: var(--primary);
    font-size: 35px;
    display: block;
    margin-bottom: 20px;
}

.w3l-about1 .cwp23-title h3 {
    max-width: 555px;
    font-size: 35px;
    line-height: 40px;
    color: var(--title-color);
    font-weight: 600;
    margin-bottom: 40px;
}

.w3l-about1 .cwp23-text-cols {
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-gap: 30px;
}

.w3l-about1 .cwp23-text-cols a {
    margin-bottom: 10px;
    font-size: 20px;
    line-height: 25px;
    color: var(--title-color);
    display: inline-block;
    font-weight: bold;
    transition: 0.3s ease-in;
}

.w3l-about1 .cwp23-text-cols a:hover {
    color: var(--secondary);
    transition: 0.3s ease-in;
}

.w3l-about1 .cwp23-text-cols p {
    font-style: normal;
    font-weight: normal;
    font-size: 16px;
    line-height: 24px;
}

@media all and (max-width: 900px) {
    .w3l-about1 .wrapper-right {
        max-width: 95%;
    }
    .w3l-about1 .cwp23-text-cols {
        grid-gap: 30px;
    }
}

@media all and (max-width: 768px) {
    .w3l-about1 .cwp23-title h3 {
        font-size: 30px;
        line-height: 35px;
        margin-bottom: 40px;
    }
    .w3l-about1 .wrapper-right {
        max-width: 100%;
        padding: 0 15px 0 0;
    }
    .w3l-about1 .cwp23-title p {
        margin-top: 15px;
        margin-bottom: 35px;
    }
}

@media all and (max-width: 440px) {
    .w3l-about1 .cwp23-title h3 {
        margin-bottom: 30px;
    }
    .w3l-about1 .cwp23-text-cols {
        grid-gap: 25px;
    }
}

@media all and (max-width: 384px) {
    .w3l-about1 .cwp23-title h3 {
        font-size: 28px;
        line-height: 33px;
    }
}

@media all and (max-width: 320px) {
    .w3l-about1 .cwp23-text-cols {
        grid-template-columns: 1fr;
    }
}

.w3l-courses a.reviews {
    font-size: 14px;
    color: var(--text-color);
    transition: 0.3s ease-in;
}

.w3l-courses a.reviews:hover {
    color: var(--primary);
    transition: 0.3s ease-in;
    text-decoration: underline;
}

.w3l-courses a.zoom {
    overflow: hidden;
    border-top-left-radius: 6px;
    border-top-right-radius: 6px;
}

.w3l-courses .card {
    border-radius: var(--card-curve);
}

.w3l-courses a.zoom img {
    transition: 0.3s ease-in-out;
}

.w3l-courses a.zoom img:hover {
    overflow: hidden;
    transform: scale(1.1);
    transition: 0.3s ease-in-out;
}

.w3l-courses .author {
    padding: 15px 1.25rem;
    position: relative;
    position: absolute;
    width: 100%;
    bottom: 0;
    background: linear-gradient(to top, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0));
    border-bottom: 3px solid var(--primary);
}

.w3l-courses .course-details {
    position: relative;
}

.w3l-courses a.course-desc {
    display: block;
    color: var(--text-color);
    font-size: 18px;
    line-height: 25.2px;
}

.w3l-courses .author-image {
    width: 60px;
    height: 60px;
    display: inline-block;
    overflow: hidden;
    border-radius: 50%;
    border: 2px solid #fff;
    position: absolute;
    right: 1.25rem;
    top: -31px;
}

.w3l-courses .course-title a {
    color: #fff;
    font-size: 20px;
    font-weight: 600;
}

.w3l-courses .author-image img {
    width: 100%;
    min-height: 100%;
    -o-object-fit: cover;
    object-fit: cover;
    -o-object-position: center;
    object-position: center;
}

.w3l-courses .price-review p {
    font-weight: 700;
    font-size: 24px;
    color: var(--title-color);
}

.w3l-courses .course-price-view {
    background: var(--light-bg-color);
}

.w3l-courses ul.blog-list li {
    list-style-type: none;
    display: inline-block;
    margin-right: 15px;
}

.w3l-courses ul.blog-list a {
    margin: 0;
    font-size: 14px;
    color: var(--text-color);
    line-height: 25px;
}

.w3l-courses ul.blog-list span.fa {
    color: var(--text-color);
}

.w3l-intro .new-block {
    background-size: cover;
    background-image: linear-gradient(
            to right,
            rgba(0, 0, 0, 0.57),
            rgba(0, 0, 0, 0.33)
        ),
        url(../images/g3.jpg);
    background-repeat: no-repeat, no-repeat, no-repeat;
    background-position: center;
    background-attachment: fixed;
    min-height: calc(100vh - 0px);
    display: grid;
    align-items: center;
    padding: 2rem 0;
}

.w3l-intro .middle-section {
    max-width: 850px;
    margin: 0 auto;
}

.w3l-intro .middle-section h2 {
    color: #ffffff;
    font-size: 55px;
    line-height: 65px;
    font-weight: 700;
}

@media (max-width: 992px) {
    .w3l-intro .middle-section h2 {
        font-size: 45px;
        line-height: 55px;
    }
}

@media (max-width: 800px) {
    .w3l-intro .middle-section a {
        margin-top: 40px;
    }
    .w3l-intro .middle-section h2 {
        font-size: 40px;
        line-height: 50px;
    }
}

@media (max-width: 667px) {
    .w3l-intro .middle-section a {
        margin-top: 30px;
    }
    .w3l-intro .middle-section h2 {
        font-size: 35px;
        line-height: 42px;
    }
}

@media (max-width: 480px) {
    .w3l-intro .middle-section h2 {
        font-size: 32px;
        line-height: 40px;
    }
}

@media (max-width: 440px) {
    .w3l-intro .middle-section h2 {
        font-size: 30px;
        line-height: 38px;
    }
}

@media (max-width: 384px) {
    .w3l-intro .middle-section a {
        margin-top: 25px;
    }
}

/* team */
.w3l-team {
    /*-- /team --*/
}
.w3l-team .box16 {
    text-align: center;
    color: #fff;
    position: relative;
}
.w3l-team .box16 a {
    display: block;
}
.w3l-team .box16 .box-content,
.w3l-team .box16:after {
    width: 100%;
    position: absolute;
    left: 0;
    border-radius: var(--card-curve);
}
.w3l-team .box16:after {
    content: "";
    height: 100%;
    background: rgba(0, 0, 0, 0.1);
    top: 0;
    transition: all 0.5s ease 0s;
}
.w3l-team .box16 .post,
.w3l-team .box16 .title {
    transform: translateY(145px);
    transition: all 0.4s cubic-bezier(0.13, 0.62, 0.81, 0.91) 0s;
}
.w3l-team .box16:hover:after {
    background: rgba(0, 0, 0, 0.6);
}
.w3l-team .box16 img {
    width: 100%;
    height: auto;
    border-radius: var(--card-curve);
}
.w3l-team .box16 .box-content {
    padding: 20px;
    margin-bottom: 20px;
    bottom: 0;
    z-index: 1;
}
.w3l-team .box16 .title a {
    font-size: 25px;
    font-weight: bold;
    text-transform: capitalize;
    color: #fff;
}
.w3l-team .box16 .post {
    display: block;
    padding: 0 0 8px 0;
    font-size: 15px;
}
.w3l-team .box16 .social li a span {
    font-size: 20px;
    color: #fff;
    line-height: 40px;
}
.w3l-team .box16:hover .post,
.w3l-team .box16:hover .title {
    transform: translateY(0);
}
.w3l-team .box16 .social {
    list-style: none;
    padding: 0 0 5px;
    margin: 40px 0 25px;
    opacity: 0;
    position: relative;
    transform: perspective(500px) rotateX(-90deg) rotateY(0) rotateZ(0);
    transition: all 0.6s cubic-bezier(0, 0, 0.58, 1) 0s;
}
.w3l-team .box16:hover .social {
    opacity: 1;
    transform: perspective(500px) rotateX(0) rotateY(0) rotateZ(0);
}
.w3l-team .box16 .social:before {
    content: "";
    width: 50px;
    height: 2px;
    background: #fff;
    margin: 0 auto;
    position: absolute;
    top: -23px;
    left: 0;
    right: 0;
}
.w3l-team .box16 .social li {
    display: inline-block;
}
.w3l-team .box16 .social li a {
    display: block;
    width: 40px;
    height: 40px;
    line-height: 40px;
    margin-right: 10px;
    transition: all 0.3s ease 0s;
    border-radius: 50%;
}
.w3l-team .box16 .social li a.facebook {
    background: #3b5998;
}
.w3l-team .box16 .social li a.twitter {
    background: #1da1f2;
}
.w3l-team .box17 .icon li,
.w3l-team .box17 .icon li a {
    display: inline-block;
}
.w3l-team .box16 .social li:last-child a {
    margin-right: 0;
}
@media only screen and (max-width: 990px) {
    .w3l-team .box16 {
        margin-bottom: 30px;
    }
}

.w3l-quote {
    text-align: center;
    background: var(--light-bg-color);
}

.w3l-quote p {
    color: var(--text-color);
    font-size: 18px;
    line-height: 26px;
    margin: 0.5em 0 2em;
}

.w3l-quote h3 {
    color: var(--title-color);
    font-size: 2.5em;
    font-weight: 600;
}

@media (max-width: 737px) {
    .w3l-quote h3 {
        font-size: 2em;
    }
}

@media (max-width: 415px) {
    .w3l-quote h3 {
        font-size: 1.8em;
    }
}

.w3l-services1 .aboutgrids p {
    font-style: normal;
    font-weight: normal;
    font-size: 16px;
    line-height: 28px;
    color: var(--text-color);
    margin: 20px 0;
}

.w3l-services1 .aboutgrids h4 {
    font-size: 40px;
    color: var(--title-color);
    line-height: 52px;
}

.w3l-services1 .bottomgrid1 span {
    font-size: 32px;
    color: #fff;
}

.w3l-services1 .bottomgrid1 {
    padding: 1.5rem;
    transition: 0.3s ease-in;
    border-radius: var(--card-curve);
}

.w3l-services1 .bottomgrid1:hover {
    background-color: #fff;
    transition: 0.3s ease-in;
}

.w3l-services1 .bottomgrid1:hover span.fa {
    color: var(--primary);
}

.w3l-services1 .bottomgrid1:hover a.service-title {
    color: var(--title-color);
}

.w3l-services1 .bottomgrid1:hover p.service-text {
    color: var(--text-color);
}

.w3l-services1 ul.services-list {
    margin-bottom: 30px;
}

.w3l-services1 ul.services-list li {
    margin-bottom: 10px;
    color: var(--title-color);
    font-size: 18px;
    list-style: inside;
    font-weight: 400;
    list-style-type: none;
    position: relative;
    padding-left: 15px;
}

.w3l-services1 ul.services-list li:before {
    content: "";
    width: 6px;
    height: 6px;
    background-color: #fff;
    border-radius: 100px;
    position: absolute;
    top: 11px;
    left: 0;
    border: 1px solid var(--secondary);
}

.w3l-services1 .bottomgrids p {
    font-style: normal;
    font-weight: normal;
    font-size: 16px;
    line-height: 26px;
    color: rgba(255, 255, 255, 0.72);
}

.w3l-services1 .bottomgrids h4 {
    margin: 20px 0 15px 0;
}

.w3l-services1 .bottomgrids h4 a {
    font-size: 24px;
    text-transform: capitalize;
    color: #fff;
    font-weight: 600;
}

.w3l-services1 .aboutbottom {
    background-size: cover;
    background-image: linear-gradient(
            to right,
            rgba(0, 0, 0, 0.72),
            rgba(0, 0, 0, 0.58)
        ),
        url(../images/g4.jpg);
    background-repeat: no-repeat, no-repeat, no-repeat;
    background-position: center;
    background-attachment: fixed;
}

@media (max-width: 768px) {
    .w3l-services1 .aboutgrids h4 {
        font-size: 40px;
        line-height: 50px;
    }
}

@media (max-width: 600px) {
    .w3l-services1 .aboutgrids h4 {
        font-size: 35px;
        line-height: 45px;
    }
}

@media (max-width: 500px) {
    .w3l-services1 .aboutgrids h4 {
        font-size: 30px;
        line-height: 40px;
    }
}

.w3l-services2 .feature-16-gd {
    padding: 2rem;
    background-color: #fff;
    border: 1px solid #eeeeee;
    border-radius: var(--card-curve);
    background: var(--light-bg-color);
    transition: 0.3s ease-in;
}

.w3l-services2 .feature-16-gd:hover {
    background: #fff;
    transition: 0.3s ease-in;
}

.w3l-services2 .feature-16-gd h4 a {
    font-size: 25px;
    line-height: 30px;
    color: var(--title-color);
    font-weight: 600;
    transition: 0.3s ease-in;
}

.w3l-services2 .feature-16-gd h4 a:hover {
    color: var(--primary);
    transition: 0.3s ease-in;
}

.w3l-services2 .featured-service {
    margin-top: 30px;
}

.w3l-services2 .icon {
    background: rgba(254, 146, 64, 0.08);
    width: 80px;
    height: 80px;
    line-height: 80px;
    text-align: center;
    display: inline-block;
    border-radius: 50%;
}

.w3l-services2 .icon span {
    font-size: 35px;
    color: var(--primary);
    line-height: 80px;
}

.w3l-services2 .feature-16-gd-info p {
    margin: 0px 0px 20px;
    font-style: normal;
    font-size: 16px;
    line-height: 28px;
    color: var(--text-color);
}

@media screen and (max-width: 1290px) {
    .w3l-services2 .feature-16-inf {
        padding: 3em 3em;
    }
}

@media screen and (max-width: 1080px) {
    .w3l-services2 .feature-16-inf {
        padding: 3em 2em;
    }
    .w3l-services2 .feature-16-gd-info p {
        margin: 0px 0 30px;
        padding-right: 0px;
    }
}

@media screen and (max-width: 801px) {
    .w3l-services2 .feature-16-gd-info p {
        margin: 0px 0 30px;
        padding-right: 0px;
    }
}

@media screen and (max-width: 640px) {
    .w3l-services2 .feature-16-main h3 a {
        font-size: 20px;
    }
}

@media screen and (max-width: 420px) {
    .w3l-services2 .feature-16-gd h4 {
        font-size: 22px;
    }
}

@media screen and (max-width: 384px) {
    .w3l-services2 .feature-16-gd h4 {
        font-size: 20px;
    }
}

.w3l-contacts-12 {
    position: relative;
}

.w3l-contacts-12 {
    /*--//responsive--*/
}
.w3l-contacts-12 .main-images a {
    display: inline-block;
}
.w3l-contacts-12 .contacts12-main {
    margin: auto;
    max-width: 700px;
    text-align: center;
}
.w3l-contacts-12 .contact-head {
    color: var(--heading);
    line-height: 50px;
    font-size: 45px;
}
.w3l-contacts-12 input.contact-input,
.w3l-contacts-12 textarea {
    outline: none;
    padding: 17px 20px;
    -webkit-appearance: none;
    border-radius: 0;
    color: #000;
    width: 100%;
    font-size: 16px;
    line-height: 26px;
    margin-bottom: 15px;
    border-radius: var(--card-curve);
    border: 1px solid var(--text-color);
    background: #fff;
}
.w3l-contacts-12 input.contact-input:focus,
.w3l-contacts-12 textarea:focus {
    border: 1px solid var(--secondary);
}
.w3l-contacts-12 textarea {
    height: 180px;
    resize: none;
}
.w3l-contacts-12 button.btn {
    padding: 0px 50px;
}
@media (max-width: 768px) {
    .w3l-contacts-12 textarea {
        height: 150px;
    }
}
.w3l-contacts-12 .contant11-top-bg {
    background: var(--light-bg-color);
}
.w3l-contacts-12 .map iframe {
    width: 100%;
    height: 400px;
    display: block;
}
.w3l-contacts-12 .contact-info h4 {
    font-size: 16px;
    color: var(--text-color);
    margin: 0px 0 10px 0;
}
.w3l-contacts-12 .icon {
    width: 60px;
    height: 60px;
    text-align: center;
    border-radius: 50%;
    line-height: 54px;
    border: 3px solid var(--light-bg-color);
}
.w3l-contacts-12 .contact-info-left {
    grid-template-columns: 1fr 1fr 1fr;
    grid-gap: 50px;
}
.w3l-contacts-12 .contact-info {
    box-shadow: var(--card-box-shadow);
    padding: 2rem;
    background: #fff;
    border-radius: var(--card-curve);
    display: grid;
    grid-template-columns: auto 1fr;
    grid-gap: 20px;
}
.w3l-contacts-12 .contact p {
    font-size: 20px;
    color: var(--title-color);
    line-height: 28px;
    font-weight: 600;
}
.w3l-contacts-12 .contact a {
    display: block;
    color: var(--title-color);
    transition: 0.3s ease-in;
}
.w3l-contacts-12 .contact a:hover {
    display: block;
    color: var(--secondary);
    text-decoration: underline;
    transition: 0.3s ease-in;
}
.w3l-contacts-12 .contact {
    grid-template-columns: 1fr;
}
.w3l-contacts-12 .contact span.fa {
    font-size: 20px;
    color: var(--primary);
}
@media (max-width: 1024px) {
    .w3l-contacts-12 .contact-info-left {
        grid-gap: 40px;
    }
}
@media (max-width: 991px) {
    .w3l-contacts-12 .contact-info-left {
        grid-template-columns: 1fr;
    }
}
@media (max-width: 900px) {
    .w3l-contacts-12 .contact p {
        font-size: 17px;
    }
}
@media (max-width: 800px) {
    .w3l-contacts-12 .contact a {
        font-size: 16px;
    }
    .w3l-contacts-12 .contact {
        grid-template-columns: 1fr;
    }
}
@media (max-width: 767px) {
    .w3l-contacts-12 .map {
        float: none;
        width: 100%;
        text-align: left;
    }
    .w3l-contacts-12 iframe {
        height: 280px;
    }
}
@media (max-width: 375px) {
    .w3l-contacts-12 .contact p {
        font-size: 15px;
    }
}

.w3l-login .w3l-form-36-mian {
    padding: 30px 0px;
    background: url(../images/login-bg.jpg) no-repeat 0px 0px;
    background-size: cover;
    min-height: 100vh;
    display: grid;
    align-items: center;
}

.w3l-login .form-inner-cont {
    max-width: 400px;
    margin: 20px auto;
    padding: 2rem 3rem;
    border-radius: var(--card-curve);
    box-shadow: var(--card-box-shadow);
    background: #fff;
}

.w3l-login .form-inner-cont h3 {
    font-size: 30px;
    line-height: 40px;
    color: var(--title-color);
    text-align: center;
    margin-bottom: 5px;
    font-weight: 600;
}

.w3l-login .form-inner-cont h6 {
    font-size: 15px;
    color: var(--text-color);
    text-align: center;
    margin-bottom: 20px;
}

.w3l-login .form-input input[type="email"],
.w3l-login .form-input input[type="password"],
.w3l-login .form-input input[type="text"] {
    background: #fff;
    border: none;
    outline: none;
    width: 90%;
    font-size: 16px;
    padding: 14px 15px;
    color: var(--title-color);
    -webkit-appearance: none;
    border: 1px solid #eee;
    border-radius: 4px;
}

.w3l-login .form-input input[type="email"]:focus,
.w3l-login .form-input input[type="password"]:focus,
.w3l-login .form-input input[type="text"]:focus {
    background: #fff;
    color: var(--title-color);
    border: 1px solid var(--primary);
    border-radius: 4px;
}

.w3l-login .form-input {
    margin: 10px 0 10px 0;
    background: rgba(249, 250, 255, 0.09);
    display: grid;
    align-items: center;
    border: 1px solid #dcdcdc;
    border-radius: 4px;
}

.w3l-login .checkbox {
    width: 16px;
    height: 16px;
    color: #f5f9fc;
    background: #304659;
    float: left;
}

.w3l-login p.remember {
    line-height: 20px;
    color: var(--text-color);
    font-size: 13px;
}

.w3l-login .new-signup a {
    font-size: 15px;
    margin-top: 30px;
    display: block;
    color: var(--text-color);
    text-align: center;
}

.w3l-login .new-signup a:hover {
    text-decoration: underline;
}

.w3l-login .social-icons {
    display: grid;
    grid-gap: 10px;
    align-items: center;
}

.w3l-login .continue {
    position: relative;
    border-top: 1px solid #eee;
    margin: 20px 0;
}

.w3l-login button.btn {
    opacity: 0.8;
    width: 100%;
}

.w3l-login button.btn:hover {
    opacity: 1;
}

.w3l-login p.signup {
    color: var(--text-color);
    font-size: 15px;
    display: block;
    margin-top: 20px;
    padding-top: 20px;
    text-align: center;
    border-top: 1px solid #dcdcdc;
}

.w3l-login p.signup a {
    font-weight: bold;
    color: var(--primary);
}

.w3l-login p.signup a:hover {
    text-decoration: underline;
}

.w3l-login .check-remaind input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
    height: 0;
    width: 0;
}

.w3l-login .check-remaind {
    display: block;
    position: relative;
    padding-left: 25px;
    cursor: pointer;
    margin: 20px 0px 0 0;
    font-size: 20px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

.w3l-login .check-remaind input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
    height: 0;
    width: 0;
}

.w3l-login .checkmark {
    position: absolute;
    top: 0px;
    left: 0;
    height: 18px;
    width: 18px;
    background-color: #e1e9f0;
}

.w3l-login .ccheck-remaind:hover input ~ .checkmark {
    background-color: var(--primary);
}

.w3l-login .check-remaind input:checked ~ .checkmark {
    background-color: var(--primary);
}

.w3l-login .checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

.w3l-login .check-remaind input:checked ~ .checkmark:after {
    display: block;
}

.w3l-login .check-remaind .checkmark:after {
    left: 6px;
    top: 3px;
    width: 4px;
    height: 8px;
    border: solid white;
    border-width: 0 2px 2px 0;
    transform: rotate(45deg);
}

@media (max-width: 1080px) {
    .w3l-login .w3l-form-36-mian {
        padding: 20px 0px;
    }
}

@media (max-width: 414px) {
    .w3l-login .form-inner-cont h3 {
        font-size: 32px;
    }
}

.w3l-offered-courses .item {
    margin-top: 30px;
}

.w3l-offered-courses a.reviews {
    font-size: 14px;
    color: var(--text-color);
    transition: 0.3s ease-in;
}

.w3l-offered-courses a.reviews:hover {
    color: var(--primary);
    transition: 0.3s ease-in;
    text-decoration: underline;
}

.w3l-offered-courses a.zoom {
    overflow: hidden;
    border-top-left-radius: 6px;
    border-top-right-radius: 6px;
}

.w3l-offered-courses .card {
    border-radius: var(--card-curve);
}

.w3l-offered-courses a.zoom img {
    transition: 0.3s ease-in-out;
}

.w3l-offered-courses a.zoom img:hover {
    overflow: hidden;
    transform: scale(1.1);
    transition: 0.3s ease-in-out;
}

.w3l-offered-courses .author {
    padding: 15px 1.25rem;
    position: relative;
    position: absolute;
    width: 100%;
    bottom: 0;
    background: linear-gradient(to top, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0));
    border-bottom: 3px solid var(--primary);
}

.w3l-offered-courses .course-details {
    position: relative;
}

.w3l-offered-courses a.course-desc {
    display: block;
    color: var(--text-color);
    font-size: 18px;
    line-height: 25.2px;
}

.w3l-offered-courses a.course-title:hover {
    color: var(--primary);
    transition: 0.3s ease-in-out;
}

.w3l-offered-courses .author-image {
    width: 60px;
    height: 60px;
    display: inline-block;
    overflow: hidden;
    border-radius: 50%;
    border: 2px solid #fff;
    position: absolute;
    right: 1.25rem;
    top: -31px;
}

.w3l-offered-courses .course-title a {
    color: #fff;
    font-size: 25px;
    font-weight: 700;
}

.w3l-offered-courses .author-image img {
    width: 100%;
    min-height: 100%;
    -o-object-fit: cover;
    object-fit: cover;
    -o-object-position: center;
    object-position: center;
}

.w3l-offered-courses .price-review p {
    font-weight: 700;
    font-size: 24px;
    color: var(--title-color);
}

.w3l-offered-courses .course-price-view {
    background: var(--light-bg-color);
}

.w3l-offered-courses ul.blog-list li {
    list-style-type: none;
    display: inline-block;
    margin-right: 15px;
}

.w3l-offered-courses ul.blog-list a {
    margin: 0;
    font-size: 14px;
    color: var(--text-color);
    line-height: 25px;
}

.w3l-offered-courses ul.blog-list span.fa {
    color: var(--text-color);
}

.w3l-offered-courses a.page-link.active,
.w3l-offered-courses li.page-item a:hover {
    color: var(--primary);
    border: 1px solid var(--primary);
    transition: 0.3s ease-in;
}

.w3l-offered-courses .page-link {
    color: var(--text-color);
    background-color: #fff;
    border: 1px solid var(--light-bg-color);
    margin: 0 5px;
    border-radius: 50%;
    font-weight: 700;
    transition: 0.3s ease-in;
}

.w3l-blog h3.blog-grids {
    font-size: 32px;
    color: var(--title-color);
}

.w3l-blog .list-single-view .grids5-info {
    display: grid;
    grid-template-columns: 50% 50%;
}

.w3l-blog .list-single-view a.zoom {
    border-top-left-radius: var(--card-curve);
    border-bottom-left-radius: var(--card-curve);
}

.w3l-blog .list-single-view .grids5-info h4 a {
    font-size: 26px;
    line-height: 35px;
    color: var(--title-color);
    display: block;
    font-weight: 600;
}

.w3l-blog .list-single-view .grids5-info h4 a:hover {
    color: var(--primary);
}

.w3l-blog .list-single-view .blog-info {
    padding: 30px;
    border-top-right-radius: 6px;
    border-bottom-right-radius: 6px;
}

.w3l-blog .list-single-view .grids5-info p {
    margin-top: 15px;
    line-height: 25px;
}

.w3l-blog .list-single-view p.date {
    margin-top: 10px;
    font-size: 14px;
    color: #949494;
}

.w3l-blog .list-single-view img.news-image {
    border-top-left-radius: 6px;
    border-bottom-left-radius: 6px;
}

@media all and (max-width: 991px) {
    .w3l-blog .list-single-view .grids5-info {
        grid-template-columns: 100%;
    }
    .w3l-blog .list-single-view img.news-image,
    .w3l-blog .list-single-view a.zoom {
        border-top-left-radius: 6px;
        border-top-right-radius: 6px;
        border-bottom-left-radius: 0px;
    }
}

@media all and (max-width: 736px) {
    .w3l-blog .list-single-view .blog-info {
        padding: 15px;
    }
}

.w3l-blog .list-view .grids5-info {
    display: grid;
    grid-template-columns: 40% 60%;
}

.w3l-blog .list-view a.zoom {
    border-top-left-radius: var(--card-curve);
    border-bottom-left-radius: var(--card-curve);
}

.w3l-blog .list-view .grids5-info h4 a {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    font-size: 22px;
    line-height: 27px;
    color: var(--title-color);
    display: block;
    font-weight: 600;
}

.w3l-blog .list-view .grids5-info h4 a:hover {
    color: var(--primary);
}

.w3l-blog .list-view .blog-info {
    padding: 20px 20px;
    border-top-right-radius: 6px;
    border-bottom-right-radius: 6px;
}

.w3l-blog .list-view .grids5-info p {
    margin-top: 10px;
    line-height: 23px;
}

.w3l-blog .list-view p.blog-text {
    height: 50px;
    overflow: hidden;
}

.w3l-blog .list-view p.date {
    margin-top: 2px;
    font-size: 14px;
    color: #949494;
}

.w3l-blog .list-view img.news-image {
    border-top-left-radius: 6px;
    border-bottom-left-radius: 6px;
}

@media all and (max-width: 1199px) {
    .w3l-blog .list-view .grids5-info {
        grid-template-columns: 50% 50%;
    }
}

@media all and (max-width: 568px) {
    .w3l-blog .list-view .grids5-info {
        grid-template-columns: 100%;
    }
    .w3l-blog .list-view img.news-image,
    .w3l-blog .list-view a.zoom {
        border-top-left-radius: 6px;
        border-top-right-radius: 6px;
        border-bottom-left-radius: 0px;
    }
}

.w3l-blog #grids5-block {
    background: var(--light-bg-color);
}

.w3l-blog .grids5-info {
    border-radius: var(--card-curve);
    transition: 0.3s ease-in;
    display: block;
    height: 100%;
    background: #fff;
    box-shadow: var(--card-box-shadow);
}

.w3l-blog a.zoom {
    overflow: hidden;
}

.w3l-blog a.zoom img {
    transition: 0.3s ease-in-out;
}

.w3l-blog a.zoom img:hover {
    overflow: hidden;
    transform: scale(1.1);
    transition: 0.3s ease-in-out;
}

.w3l-blog .blog-info {
    background: #fff;
    padding: 30px 20px;
    border-bottom-left-radius: 6px;
    border-bottom-right-radius: 6px;
}

.w3l-blog .grid-view img.news-image {
    border-top-left-radius: 6px;
    border-top-right-radius: 6px;
}

.w3l-blog .grid-view a.zoom {
    border-top-left-radius: var(--card-curve);
    border-top-right-radius: var(--card-curve);
}

.w3l-blog .grid-view .grids5-info h4 a {
    font-size: 22px;
    line-height: 27px;
    color: var(--title-color);
    display: block;
    font-weight: 600;
}

.w3l-blog .grid-view .grids5-info h4 a:hover {
    color: var(--primary);
}

.w3l-blog .grid-view .grids5-info p {
    font-size: 16px;
    line-height: 25px;
    color: var(--text-color);
    margin-top: 15px;
}

.w3l-blog .grid-view p.date {
    font-size: 14px;
    margin-top: 8px;
    color: #949494;
}

.w3l-blog .grid-view .grids5-info img {
    width: 100%;
    display: block;
}

.w3l-blog a.btn-news {
    padding: 0;
    color: var(--secondary);
    transition: 0.3s ease-in-out;
    border-radius: 0;
    position: relative;
    display: inline-block;
}

.w3l-blog a.btn-news span {
    font-size: 60%;
    vertical-align: middle;
    padding-left: 0px;
    position: absolute;
    right: -13px;
    top: 8px;
    transition: 0.3s ease-in;
}

.w3l-blog a.btn-news:hover {
    transition: 0.3s ease-in-out;
    color: var(--primary);
}

.w3l-blog a.btn-news:hover span.fa {
    right: -16px;
    transition: 0.3s ease-in;
}

.w3l-blog .grids5-info:hover a.btn-news span.fa {
    right: -16px;
    transition: 0.3s ease-in;
}

@media all and (max-width: 1280px) {
    .w3l-blog .d-grid {
        grid-gap: 15px;
    }
}

@media all and (max-width: 1080px) {
    .w3l-blog .d-grid {
        grid-template-columns: 1fr 1fr;
    }
}

@media all and (max-width: 800px) {
    .w3l-blog .d-grid {
        grid-gap: 30px;
    }
}

@media all and (max-width: 768px) {
    .w3l-blog .grids5-info h4 a {
        font-size: 20px;
        line-height: 25px;
    }
}

@media all and (max-width: 668px) {
    .w3l-blog .d-grid {
        grid-template-columns: 1fr;
    }
}

@media all and (max-width: 568px) {
    .w3l-blog .d-grid {
        grid-template-columns: 1fr;
    }
    .w3l-blog .grids5-info p {
        margin-top: 12px;
    }
}

@media all and (max-width: 414px) {
    .w3l-blog .grids5-info h4 a {
        font-size: 23px;
    }
}

@media all and (max-width: 384px) {
    .w3l-blog .grids5-info h4 a {
        font-size: 22px;
    }
}

.w3l-blog .page-link {
    color: var(--text-color);
    background-color: #fff;
    border: 1px solid var(--light-bg-color);
    margin: 0 5px;
    border-radius: var(--card-curve);
    box-shadow: var(--card-box-shadow);
}

.w3l-blog a.page-link.active,
.w3l-blog li.page-item a:hover {
    color: var(--primary);
    border: 1px solid var(--primary);
}

.w3l-blog-single {
    /* text-style-17 */
    /* //text-style-17 */
    /*--/content-5--*/
    /* /text-styles-31*/
    /* //text-styles-31*/
}
.w3l-blog-single .gallery-img {
    max-width: 870px;
    margin: 0 auto;
}
.w3l-blog-single .gallery-img .blog-single-header-section h3 {
    font-weight: 600;
    font-size: 45px;
    line-height: 1;
    color: var(--title-color);
}
.w3l-blog-single .gallery-img .blog-single-header-section p {
    font-size: 14px;
    line-height: 24px;
    color: var(--text-color);
    font-weight: 600;
}
.w3l-blog-single .gallery-img .blog-single-header-section p a {
    color: var(--secondary);
}
.w3l-blog-single .gallery-img .blog-single-header-section p a:hover {
    text-decoration: underline;
}
@media screen and (max-width: 1024px) {
    .w3l-blog-single .gallery-img .blog-single-header-section h3 {
        font-size: 40px;
    }
}
@media screen and (max-width: 667px) {
    .w3l-blog-single .gallery-img .blog-single-header-section h3 {
        font-size: 35px;
    }
}
.w3l-blog-single .w3l-text-style-17 .text-style-17-top_sur {
    display: grid;
    grid-template-columns: 2.5fr 1fr;
}
.w3l-blog-single .w3l-text-style-17 .text-style-17_sur h5 {
    font-size: 25px;
    line-height: 30px;
    color: var(--title-color);
}
.w3l-blog-single .w3l-text-style-17 .text-style-17_sur p {
    margin: 20px 0;
    max-width: 570px;
    font-style: normal;
    font-size: 16px;
    line-height: 28px;
    color: var(--text-color);
}
.w3l-blog-single .w3l-text-style-17 .text-style-17_sur span {
    font-size: 15px;
    line-height: 22px;
    color: var(--text-color);
    font-weight: 700;
    margin: 20px 0;
    display: block;
    max-width: 170px;
}
.w3l-blog-single .w3l-text-style-17 .text-style-17-tp {
    max-width: 870px;
    margin: 0 auto;
}
@media screen and (max-width: 1024px) {
    .w3l-blog-single .w3l-text-style-17 .text-style-17-top_sur {
        grid-gap: 30px;
    }
}
@media screen and (max-width: 992px) {
    .w3l-blog-single .w3l-text-style-17 .text-style-17-top_sur {
        grid-template-columns: 1fr;
        grid-gap: 0px;
    }
    .w3l-blog-single .w3l-text-style-17 .text-style-17_sur span {
        margin: 0;
        max-width: 570px;
    }
}
.w3l-blog-single .w3l-content-5 .content-5-align {
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-column-gap: 30px;
    max-width: 870px;
    margin: 0 auto;
}
.w3l-blog-single .w3l-content-5 .content-left h3 {
    font-size: 30px;
    line-height: 35px;
    color: var(--title-color);
    margin-bottom: 25px;
}
.w3l-blog-single .w3l-content-5 .content-left img {
    width: 100%;
}
.w3l-blog-single .w3l-content-5 .content-right p {
    font-style: normal;
    font-size: 16px;
    line-height: 28px;
    color: var(--text-color);
}
.w3l-blog-single .w3l-content-5 p.para-content {
    margin: 30px 0;
}
@media (max-width: 800px) {
    .w3l-blog-single .w3l-content-5 .content-5-align {
        grid-template-columns: 1fr;
        grid-row-gap: 2.5rem;
    }
}
@media (max-width: 384px) {
    .w3l-blog-single .w3l-content-5 .content-left h3 {
        font-size: 38px;
        line-height: 46px;
    }
    .w3l-blog-single .w3l-content-5 .content-5-align {
        grid-template-columns: 1fr;
        grid-row-gap: 2.3rem;
    }
}
@media (max-width: 384px) and (max-width: 375px) {
    .w3l-blog-single .w3l-content-5 .content-left h3 {
        font-size: 35px;
    }
}
@media (max-width: 384px) and (max-width: 320px) {
    .w3l-blog-single .w3l-content-5 .content-left h3 {
        font-size: 31px;
        line-height: 40px;
    }
}
.w3l-blog-single .w3l-content-3 blockquote {
    max-width: 680px;
    margin: 0 auto;
    border-left: 3px solid #eee;
    padding-left: 45px;
}
.w3l-blog-single .w3l-content-3 blockquote q {
    color: var(--title-color);
    font-size: 24px;
    line-height: 36px;
    font-weight: 600;
}
.w3l-blog-single .w3l-content-3 .middle-section {
    max-width: 870px;
    margin: 0 auto;
}
.w3l-blog-single .w3l-content-3 .middle-section h2 {
    font-size: 40px;
    color: var(--title-color);
    line-height: 50px;
}
.w3l-blog-single .w3l-content-3 .two-columns {
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-gap: 30px;
}
.w3l-blog-single .w3l-content-3 .three-grids-columns p {
    padding-top: 20px;
    font-style: normal;
    padding-bottom: 10px;
    font-size: 16px;
    line-height: 28px;
    color: var(--text-color);
}
@media (max-width: 1280px) {
    .w3l-blog-single .w3l-content-3 .three-grids-columns p {
        padding-top: 30px;
    }
}
@media (max-width: 900px) {
    .w3l-blog-single .w3l-content-3 .middle-section h2 {
        font-size: 38px;
    }
    .w3l-blog-single .w3l-content-3 .three-grids-columns p {
        padding-top: 21px;
    }
}
@media (max-width: 768px) {
    .w3l-blog-single .w3l-content-3 .three-grids-columns p {
        padding-top: 16px;
    }
}
@media (max-width: 480px) {
    .w3l-blog-single .w3l-content-3 .middle-section h2 {
        font-size: 35px;
        line-height: 34px;
    }
    .w3l-blog-single .w3l-content-3 .two-columns {
        grid-template-columns: 1fr;
        grid-gap: 20px;
    }
    .w3l-blog-single .w3l-content-3 p.spacing-none {
        padding: 0px;
    }
}
@media (max-width: 414px) {
    .w3l-blog-single .w3l-content-3 .middle-section h2 {
        font-size: 33px;
    }
}
.w3l-blog-single .w3l-text-18 .new-posts {
    background: var(--light-bg-color);
    border-radius: var(--card-curve);
}
.w3l-blog-single .w3l-text-18 .new-posts a {
    color: var(--title-color);
    font-size: 20px;
    padding: 1rem;
    font-weight: 600;
    transition: 0.3s ease-in;
}
.w3l-blog-single .w3l-text-18 .new-posts a:hover {
    color: var(--secondary);
    transition: 0.3s ease-in;
}
.w3l-blog-single .w3l-text-18 .text-18-content {
    max-width: 870px;
    margin: 0 auto;
}
.w3l-blog-single .w3l-text-18 ul.text-links li a {
    font-weight: 600;
    font-size: 18px;
    line-height: 28px;
    color: var(--secondary);
}
.w3l-blog-single .w3l-text-18 ul.text-links li a:hover {
    text-decoration: underline;
}
.w3l-blog-single .w3l-text-18 ul.text-links {
    margin-top: 20px;
}
.w3l-blog-single .w3l-text-18 ul.text-links li {
    font-style: normal;
    list-style-type: disc;
    list-style-position: inside;
    font-size: 16px;
    line-height: 28px;
    margin: 8px 0;
}
.w3l-blog-single .w3l-text-18 h4.text-title {
    font-size: 22px;
    line-height: 25px;
    color: var(--title-color);
}
.w3l-blog-single .w3l-text-18 ul.share-post {
    padding: 1.5rem 0;
}
.w3l-blog-single .w3l-text-18 ul.share-post li.share-text {
    margin-left: 0;
    color: #000000;
    font-size: 16px;
    font-weight: bold;
}
.w3l-blog-single .w3l-text-18 ul.share-post li {
    display: inline-block;
    margin: 0px 5px;
    text-align: center;
    line-height: 30px;
    border-radius: 4px;
}
.w3l-blog-single .w3l-text-18 ul.share-post li.facebook {
    background: #3a5998;
    color: #fff;
    width: 30px;
    height: 30px;
}
.w3l-blog-single .w3l-text-18 ul.share-post li.twitter {
    background: #55acee;
    width: 30px;
    height: 30px;
    color: #fff;
}
.w3l-blog-single .w3l-text-18 ul.share-post li.google {
    background: #dc4e41;
    width: 30px;
    height: 30px;
    color: #fff;
}
.w3l-blog-single .w3l-text-18 ul.share-post li a span.fa {
    color: #fff;
    font-size: 13px;
    line-height: 30px;
}
.w3l-blog-single .w3l-text-styles-31 .text-styles-top-31 {
    max-width: 870px;
    margin: 0 auto;
}
.w3l-blog-single .w3l-text-styles-31 .text-styles-31_sur h3 {
    font-size: 40px;
    line-height: 50px;
    color: var(--title-color);
}
@media (max-width: 900px) {
    .w3l-blog-single .w3l-text-styles-31 .text-styles-31_sur h3 {
        font-size: 36px;
        line-height: 41px;
    }
}
@media (max-width: 440px) {
    .w3l-blog-single .w3l-text-styles-31 .text-styles-31_sur h3 {
        font-size: 32px;
        line-height: 37px;
    }
}
@media (max-width: 320px) {
    .w3l-blog-single .w3l-text-styles-31 .text-styles-31_sur h3 {
        font-size: 28px;
        line-height: 33px;
    }
}
.w3l-blog-single .w3l-text-styles-31 .media {
    display: grid;
    grid-template-columns: auto 1fr;
    grid-gap: 20px;
    padding: 1.5em;
    background: var(--light-bg-color);
    border-radius: var(--card-curve);
}
.w3l-blog-single .w3l-text-styles-31 .img-circle {
    width: 100px;
}
.w3l-blog-single .w3l-text-styles-31 .img-circle-sm {
    width: 65px;
    height: 65px;
}
.w3l-blog-single .w3l-text-styles-31 .img-circle img {
    min-height: 100%;
    -o-object-fit: cover;
    object-fit: cover;
    -o-object-position: center;
    object-position: center;
    border-radius: var(--card-curve);
}
.w3l-blog-single .w3l-text-styles-31 .media-body {
    color: var(--text-color);
    font-size: 15px;
    line-height: 23px;
}
.w3l-blog-single .w3l-text-styles-31 a.name {
    color: var(--title-color);
    font-size: 20px;
    font-weight: 600;
}
.w3l-blog-single .w3l-text-styles-31 ul.time-rply li {
    display: inline-block;
    color: var(--text-color);
    font-size: 13px;
}
.w3l-blog-single .w3l-text-styles-31 ul.time-rply li a {
    color: var(--secondary);
    font-weight: 700;
}
.w3l-blog-single .w3l-forms-29 .grid-col-2 {
    grid-template-columns: 1fr 1fr;
}
.w3l-blog-single .w3l-forms-29 .grid-col-3 {
    grid-template-columns: 1fr 1fr 1fr;
}
.w3l-blog-single .w3l-forms-29 .grid-col-4 {
    grid-template-columns: 1fr 1fr 1fr 1fr;
}
.w3l-blog-single .w3l-forms-29 .align-items-center {
    align-items: center;
}
.w3l-blog-single .w3l-forms-29 .content-29-form {
    max-width: 870px;
    margin: 0 auto;
}
.w3l-blog-single .w3l-forms-29 h3.title-cont-foem29 {
    font-size: 40px;
    line-height: 50px;
    color: var(--title-color);
    margin-bottom: 20px;
}
.w3l-blog-single .w3l-forms-29 form.forms-29-form {
    max-width: 550px;
}
.w3l-blog-single .w3l-forms-29 form.forms-29-form input,
.w3l-blog-single .w3l-forms-29 form.forms-29-form textarea {
    outline: none;
    padding: 12px 15px;
    -webkit-appearance: none;
    color: #000;
    width: 100%;
    font-size: 16px;
    line-height: 26px;
    margin-bottom: 15px;
    border-radius: var(--card-curve);
    border: 1px solid #eee;
    background: var(--light-bg-color);
}
.w3l-blog-single .w3l-forms-29 form.forms-29-form input:focus,
.w3l-blog-single .w3l-forms-29 form.forms-29-form textarea:focus {
    border: 1px solid var(--text-color);
    background: #fff;
}
.w3l-blog-single .w3l-forms-29 form.forms-29-form textarea {
    padding: 15px 15px;
    height: 150px;
}
.w3l-blog-single .w3l-forms-29 button.actionbg {
    width: 100%;
    margin-top: 20px;
}
@media (max-width: 991px) {
    .w3l-blog-single .w3l-forms-29 h3.title-cont-foem29 {
        font-size: 40px;
        line-height: 45px;
    }
}
@media (max-width: 480px) {
    .w3l-blog-single .w3l-forms-29 h3.title-cont-foem29 {
        font-size: 35px;
        line-height: 40px;
    }
    .w3l-blog-single .w3l-forms-29 .form-29 {
        padding: 40px 0 50px;
    }
}

.w3l-gallery img.insta-pic {
    border-radius: var(--card-curve);
}

.w3l-gallery a.follow-insta-button {
    margin: 0 auto;
    font-weight: bold;
    transition: 0.3s ease-in;
    border: 1px solid #eee;
    box-shadow: var(--card-box-shadow);
    border-radius: var(--card-curve);
}

.w3l-gallery .js-img-viwer {
    position: relative;
    border: 8px solid #fff;
}

.w3l-gallery .js-img-viwer:hover .content-overlay {
    opacity: 1;
}

.w3l-gallery .js-img-viwer .content-overlay {
    background: rgba(0, 0, 0, 0.5);
    position: absolute;
    height: 100%;
    width: 100%;
    left: 0;
    top: 0;
    bottom: 0;
    right: 0;
    opacity: 0;
    transition: all 0.4s ease-in-out 0s;
    border-radius: 4px;
}

.w3l-gallery .content-details {
    position: absolute;
    text-align: center;
    padding-left: 1em;
    padding-right: 1em;
    width: 100%;
    top: 50%;
    left: 50%;
    opacity: 0;
    transform: translate(-50%, -50%);
    transition: all 0.3s ease-in-out 0s;
}

.w3l-gallery .js-img-viwer:hover .content-details {
    top: 50%;
    left: 50%;
    opacity: 1;
}

.w3l-gallery .content-details h4 {
    color: #fff;
    font-size: 24px;
    font-weight: 600;
}

.w3l-gallery .content-details p {
    color: #fff;
    font-size: 16px;
    margin-top: 8px;
}

.w3l-gallery .fadeIn-bottom {
    top: 80%;
}

.w3l-gallery .fadeIn-top {
    top: 20%;
}

.w3l-gallery .fadeIn-left {
    left: 20%;
}

.w3l-gallery .fadeIn-right {
    left: 80%;
}

@-webkit-keyframes smartphoto {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

@keyframes smartphoto {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

@-webkit-keyframes smartphoto-img-wrap {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

@keyframes smartphoto-img-wrap {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

@-webkit-keyframes smartphoto-inner {
    from {
        transform: translate(0, 100px);
    }
    to {
        transform: translate(0, 0);
    }
}

@keyframes smartphoto-inner {
    from {
        transform: translate(0, 100px);
    }
    to {
        transform: translate(0, 0);
    }
}

@-webkit-keyframes smartphoto-loader {
    0% {
        opacity: 0.4;
        transform: rotate(0deg);
    }
    50% {
        opacity: 1;
        transform: rotate(180deg);
    }
    100% {
        opacity: 0.4;
        transform: rotate(360deg);
    }
}

@keyframes smartphoto-loader {
    0% {
        opacity: 0.4;
        transform: rotate(0deg);
    }
    50% {
        opacity: 1;
        transform: rotate(180deg);
    }
    100% {
        opacity: 0.4;
        transform: rotate(360deg);
    }
}

@-webkit-keyframes smartphoto-appear {
    0% {
        display: none;
        opacity: 0;
    }
    1% {
        display: block;
        opacity: 0;
    }
    100% {
        display: block;
        opacity: 1;
    }
}

@keyframes smartphoto-appear {
    0% {
        display: none;
        opacity: 0;
    }
    1% {
        display: block;
        opacity: 0;
    }
    100% {
        display: block;
        opacity: 1;
    }
}

@-webkit-keyframes smartphoto-hide {
    0% {
        display: block;
        opacity: 1;
    }
    99% {
        display: block;
        opacity: 0;
    }
    100% {
        display: none;
        opacity: 0;
    }
}

@keyframes smartphoto-hide {
    0% {
        display: block;
        opacity: 1;
    }
    99% {
        display: block;
        opacity: 0;
    }
    100% {
        display: none;
        opacity: 0;
    }
}

.smartphoto {
    position: fixed;
    z-index: 100;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
    background-color: #000;
    opacity: 1;
    font-family: sans-serif;
    cursor: pointer;
    transition: opacity 0.3s ease-out;
    transition: all 0.3s ease-out;
    -webkit-animation-name: smartphoto;
    animation-name: smartphoto;
    -webkit-animation-duration: 0.3s;
    animation-duration: 0.3s;
    -webkit-animation-timing-function: ease-out;
    animation-timing-function: ease-out;
}

.smartphoto[aria-hidden="true"] {
    display: none;
}

.smartphoto-close {
    opacity: 0;
}

.smartphoto-count {
    display: inline-block;
    color: #fff;
    font-size: 16px;
}

.smartphoto-header {
    display: block;
    box-sizing: border-box;
    position: fixed;
    z-index: 102;
    top: 0;
    left: 0;
    width: 100%;
    height: 50px;
    padding: 15px;
    background-color: rgba(0, 0, 0, 0.2);
}

.smartphoto-content {
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

.smartphoto-dismiss {
    display: block;
    position: absolute;
    top: 15px;
    right: 10px;
    width: 20px;
    height: 20px;
    padding: 0;
    border: none;
    background-color: transparent;
    background-image: url(data:image/svg+xml;base64,PHN2ZyBpZD0i44Os44Kk44Ok44O8XzEiIGRhdGEtbmFtZT0i44Os44Kk44Ok44O8IDEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmlld0JveD0iMCAwIDI4MzQuNjUgMjgzNC42NSIgZmlsbD0iI0ZGRiI+PHRpdGxlPmljb248L3RpdGxlPjxwYXRoIGQ9Ik0xNTc2LjQyLDE0MDYuNzYsMjc4NCwxOTkuMTlhNTYuODYsNTYuODYsMCwwLDAsMC04MC4xOGwtNzguOTItNzguOTJhNTYuODYsNTYuODYsMCwwLDAtODAuMTgsMEwxNDE3LjMyLDEyNDcuNjYsMjA5Ljc1LDQwLjA5YTU2Ljg2LDU2Ljg2LDAsMCwwLTgwLjE4LDBMNTAuNjUsMTE5YTU2Ljg2LDU2Ljg2LDAsMCwwLDAsODAuMThMMTI1OC4yMywxNDA2Ljc2LDUwLjY1LDI2MTQuMzRhNTYuODYsNTYuODYsMCwwLDAsMCw4MC4xOGw3OC45Miw3OC45MmE1Ni44Niw1Ni44NiwwLDAsMCw4MC4xOCwwTDE0MTcuMzIsMTU2NS44NiwyNjI0LjksMjc3My40NGE1Ni44Niw1Ni44NiwwLDAsMCw4MC4xOCwwbDc4LjkyLTc4LjkyYTU2Ljg2LDU2Ljg2LDAsMCwwLDAtODAuMThaIi8+PC9zdmc+);
    text-shadow: 0 1px 0 #fff;
    color: #fff;
    font-size: 30px;
    text-decoration: none;
    cursor: pointer;
    line-height: 1;
}

.smartphoto-body {
    position: relative;
    z-index: 102;
    width: 100%;
    height: 100%;
    margin: 0 auto;
}

.smartphoto-inner {
    position: relative;
    width: 100%;
    height: 100%;
    vertical-align: top;
}

.smartphoto-img {
    display: none;
    max-width: none;
    width: auto;
    height: auto;
    cursor: zoom-in;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    transition: transform 0.3s ease-out;
    -webkit-user-drag: none;
}

.smartphoto-img.active {
    display: block;
}

.smartphoto-img-onmove {
    cursor: grab;
    cursor: -webkit-grab;
    transition: none;
}

.smartphoto-img-elasticmove {
    transition: transform 0.3s ease-out;
}

.smartphoto-img-wrap {
    display: inline-block;
    opacity: 1;
    transition: opacity 0.3s ease-out;
    -webkit-animation-name: smartphoto-img-wrap;
    animation-name: smartphoto-img-wrap;
    -webkit-animation-duration: 0.3s;
    animation-duration: 0.3s;
    -webkit-animation-timing-function: ease-out;
    animation-timing-function: ease-out;
}

.smartphoto-img-left {
    transform: translateX(150%) !important;
}

.smartphoto-img-right {
    transform: translateX(-150%) !important;
}

.smartphoto-arrows {
    list-style-type: none;
    margin: 0;
    padding: 0;
    position: relative;
    z-index: 1002;
    top: 50%;
    left: 0;
    opacity: 1;
    -webkit-animation-name: smartphoto-appear;
    animation-name: smartphoto-appear;
    -webkit-animation-duration: 0.3s;
    animation-duration: 0.3s;
    -webkit-animation-timing-function: ease-out;
    animation-timing-function: ease-out;
}

.smartphoto-arrows[aria-hidden="true"] {
    -webkit-animation-name: smartphoto-hide;
    animation-name: smartphoto-hide;
    display: none;
}

.smartphoto-arrows li {
    display: block;
    position: absolute;
    top: 50%;
    width: 30px;
    height: 30px;
    margin-top: -20px;
    box-sizing: content-box;
    -webkit-animation-duration: 0.3s;
    animation-duration: 0.3s;
    -webkit-animation-timing-function: ease-out;
    animation-timing-function: ease-out;
    -webkit-animation-name: smartphoto-appear;
    animation-name: smartphoto-appear;
}

.smartphoto-arrows li:focus {
    outline: none;
}

.smartphoto-arrows [aria-hidden="true"] {
    -webkit-animation-name: smartphoto-hide;
    animation-name: smartphoto-hide;
    display: none;
}

.smartphoto-arrows a {
    display: block;
    width: 100%;
    height: 100%;
    text-decoration: none;
}

.smartphoto-arrow-right {
    right: 0;
    padding: 15px;
    background-color: rgba(0, 0, 0, 0.5);
}

.smartphoto-arrow-right a {
    background-image: url(data:image/svg+xml;base64,PHN2ZyBpZD0i44Os44Kk44Ok44O8XzEiIGRhdGEtbmFtZT0i44Os44Kk44Ok44O8IDEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmlld0JveD0iMCAwIDI4MzQuNjUgMjgzNC42NSIgZmlsbD0iI0ZGRiAiPjx0aXRsZT5pY29uPC90aXRsZT48cGF0aCBkPSJNMTgzNy44OCwxNDE3LjMyLDY0My41OSwyMjNhNzIuMjEsNzIuMjEsMCwwLDEsMC0xMDEuODJMNzQzLjgyLDIxYTcyLjIxLDcyLjIxLDAsMCwxLDEwMS44MiwwTDIwOTAuODMsMTI2Ni4xOWwxMDAuMjMsMTAwLjIzYTcyLjIxLDcyLjIxLDAsMCwxLDAsMTAxLjgyTDg0NS42NCwyODEzLjY1YTcyLjIxLDcyLjIxLDAsMCwxLTEwMS44MiwwTDY0My41OSwyNzEzLjQyYTcyLjIxLDcyLjIxLDAsMCwxLDAtMTAxLjgyWiIvPjwvc3ZnPg==);
}

.smartphoto-arrow-left {
    left: 0;
    padding: 5px 0;
    background-color: rgba(0, 0, 0, 0.5);
}

.smartphoto-arrow-left a {
    background-image: url(data:image/svg+xml;base64,PHN2ZyBpZD0i44Os44Kk44Ok44O8XzEiIGRhdGEtbmFtZT0i44Os44Kk44Ok44O8IDEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmlld0JveD0iMCAwIDI4MzQuNjUgMjgzNC42NSIgZmlsbD0iI0ZGRiI+PHRpdGxlPmljb248L3RpdGxlPjxwYXRoIGQ9Ik05OTYuNzcsMTQxNy4zMiwyMTkxLjA2LDIyM2E3Mi4yMSw3Mi4yMSwwLDAsMCwwLTEwMS44MkwyMDkwLjgzLDIxQTcyLjIxLDcyLjIxLDAsMCwwLDE5ODksMjFMNzQzLjgyLDEyNjYuMTksNjQzLjU5LDEzNjYuNDJhNzIuMjEsNzIuMjEsMCwwLDAsMCwxMDEuODJMMTk4OSwyODEzLjY1YTcyLjIxLDcyLjIxLDAsMCwwLDEwMS44MiwwbDEwMC4yMy0xMDAuMjNhNzIuMjEsNzIuMjEsMCwwLDAsMC0xMDEuODJaIi8+PC9zdmc+);
}

.smartPhotoArrowHideIcon {
    display: none;
}

.smartphoto-navv {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    opacity: 1;
    -webkit-animation-name: smartphoto-appear;
    animation-name: smartphoto-appear;
    -webkit-animation-duration: 0.3s;
    animation-duration: 0.3s;
    -webkit-animation-timing-function: ease-out;
    animation-timing-function: ease-out;
}

.smartphoto-navv[aria-hidden="true"] {
    -webkit-animation-name: smartphoto-hide;
    animation-name: smartphoto-hide;
    display: none;
}

.smartphoto-navv ul {
    display: block;
    overflow-x: auto;
    list-style: none;
    margin: 0;
    padding: 0;
    text-align: center;
    white-space: nowrap;
    -webkit-overflow-scrolling: touch;
}

.smartphoto-navv li {
    display: inline-block;
    overflow: hidden;
    width: 50px;
    height: 50px;
}

.smartphoto-navv a {
    display: block;
    width: 100%;
    height: 100%;
    background-color: #fff;
    background-position: center center;
    background-size: cover;
    opacity: 0.5;
}

.smartphoto-navv a:focus {
    opacity: 0.8;
}

.smartphoto-navv a.current {
    opacity: 1;
}

.smartphoto-navv img {
    width: auto;
    height: 100%;
}

.smartphoto-list {
    list-style-type: none;
    position: absolute;
    z-index: 101;
    top: 0;
    left: 0;
    margin: 0;
    padding: 0;
    white-space: nowrap;
}

.smartphoto-list li {
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    transition: all 0.3s ease-out;
}

.smartphoto-list li:focus {
    outline: none;
}

.smartphoto-list-onmove {
    transition: all 0.3s ease-out;
}

.smartphoto-caption {
    overflow: hidden;
    box-sizing: border-box;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 50px;
    padding: 0 50px;
    color: #fff;
    font-size: 12px;
    text-align: center;
    line-height: 50px;
    white-space: nowrap;
    text-overflow: ellipsis;
}

.smartphoto-caption:focus {
    outline: none;
}

.smartphoto-loader-wrap {
    display: block;
    position: relative;
    z-index: 103;
    width: 0;
    height: 0;
    transform: translate(50vw, 50vh);
}

.smartphoto-loader {
    position: absolute;
    z-index: 101;
    top: 0;
    left: 0;
    width: 30px;
    height: 30px;
    margin-top: -25px;
    margin-left: -25px;
    border: 8px solid #17cddd;
    border-right-color: transparent;
    border-radius: 50%;
    -webkit-animation: smartphoto-loader 0.5s infinite linear;
    animation: smartphoto-loader 0.5s infinite linear;
}

.smartphoto-img-clone {
    position: fixed;
    z-index: 100;
    top: 0;
    left: 0;
    transition: all 0.3s ease-out;
}

.smartphoto-sr-only {
    overflow: hidden;
    position: absolute;
    width: 1px;
    height: 1px;
    margin: -1px;
    padding: 0;
    border: 0;
    clip: rect(0, 0, 0, 0);
}

.details_card {
    width: 700px;
    height: 400px;
    box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.2);
    border-radius: 8px;
    padding: 10px;
    background-color: #fff;
}

/*
  Order Summary Card
  */
.summary_card {
    background-color: #fff;
    width: 350px;
    height: 500px;
    box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.2);
    border-radius: 8px;
    padding: 10px;
}

/*
  Order Card Item Card
  */
.card_item {
    display: flex;
    position: relative;
    margin: 10px 0;
}
.close-btn {
    position: absolute;
    right: 10px;
    top: 5px;
}

.card_item .product_img img {
    height: 80px;
    margin-right: 20px;
    width: 70px;
    border-radius: 5px;
}

.product_info h1 {
    font-size: 20px;
    color: #1e212d;
    margin: 5px 0;
}

.product_info p {
    color: #a1a1a1;
    font-size: 14px;
}
.product_rate_info {
    display: flex;
    margin: 5px 0;
    align-items: center;
    justify-content: space-between;
}

/*
  cart item + & -
  */
.pqt {
    font-size: 20px;
    line-height: 30px;
    width: 30px;
    text-align: center;
}

.pqt-plus,
.pqt-minus {
    background: #fcfcfc;
    border: none;
    font-size: 20px;
    height: 100%;
    padding: 0 15px;
}
.pqt-plus:hover,
.pqt-minus:hover {
    background: #53b5aa;
    color: #fff;
    cursor: pointer;
}

.pqt-plus {
    line-height: 30px;
}

.pqt-minus {
    line-height: 30px;
}
/*
  Order price & total
  */
.order_price,
.order_service,
.order_total {
    display: flex;

    justify-content: space-between;
    padding: 10px;
}
.order_price p,
.order_service p {
    color: #a1a1a1;
}

.order_total p {
    font-weight: 600;
}

/*
  Payment Information all input
  */

input {
    outline: 0;
    background: #f2f2f2;
    border-radius: 4px;
    width: 100%;
    border: 0;
    caret-color: #4f5d7e;
    margin: 10px 15px;
    padding: 15px 20px;
    box-sizing: border-box;
    font-size: 14px;
}


.first_lastName,
.shipping_card,
.address {
    display: flex;
    justify-content: space-between;
    margin: 10px 0;
}

.new_card {
    width: 100%;
    height: 100px;
    border: 2px solid #53b5aa;
    padding: 10px;
    margin: 10px;
    border-radius: 10px;
}

.add_savedcard {
    width: 100%;
    height: 100px;
    border: 2px solid #a1a1a1;
    padding: 10px;
    margin: 10px;
    border-radius: 10px;
}
/*
  Procced Payment button
  */
.proced_payment a {
    width: 500px;
    height: 500px;
    border: 2px solid #f5f5f5;
    background-color: #53b5aa;
    color: #000;
    margin-left: 100px;
    cursor: pointer;
    text-decoration: none;
}

.checkbox-custom {
    opacity: 0;
    position: absolute;
  }
  .checkbox-custom,
  .checkbox-custom-label {
    display: inline-block;
    vertical-align: middle;
    margin: 5px;
    cursor: pointer;
  }
  .checkbox-custom + .checkbox-custom-label:before {
    content: '';
    display: inline-block;
    background: #fff;
    border-radius: 5px;
    border: 2px solid #ddd;
    vertical-align: middle;
    width: 25px;
    height: 25px;
    padding: 2px;
    margin-right: 10px;
    text-align: center;
  }
  .checkbox-custom:checked + .checkbox-custom-label:before {
    width: 5px;
    height: 5px;
    border: solid blue;
    border-width: 0 3px 3px 0;
    transform: rotate(45deg);
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    border-radius: 0px;
    margin: 0px 15px 5px 5px;
  }

/*# sourceMappingURL=style-liberty.css.map */

/* The containerv radio */
.containervradio {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 22px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
  }
  
  /* Hide the browser's default radio button */
  .containervradio input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
  }
  
  /* Create a custom radio button */
  .checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
    border-radius: 50%;
  }
  
  /* On mouse-over, add a grey background color */
  .containervradio:hover input ~ .checkmark {
    background-color: #ccc;
  }
  
  /* When the radio button is checked, add a blue background */
  .containervradio input:checked ~ .checkmark {
    background-color: #2196F3;
  }
  
  /* Create the indicator (the dot/circle - hidden when not checked) */
  .checkmark:after {
    content: "";
    position: absolute;
    display: none;
  }
  
  /* Show the indicator (dot/circle) when checked */
  .containervradio input:checked ~ .checkmark:after {
    display: block;
  }
  
  /* Style the indicator (dot/circle) */
  .containervradio .checkmark:after {
       top: 9px;
      left: 9px;
      width: 8px;
      height: 8px;
      border-radius: 50%;
      background: white;
  }

  .containervframe {
    position: relative;
    display:inline-block;
    width: 100%;
    overflow: hidden;
    padding-top: 50.25%; /* 16:9 Aspect Ratio */
  }
  
  .responsive-iframe {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    width: 100%;
    height: 100%;
    border: none;
  }

  .wrapper { 
    border : 2px solid rgb(255, 255, 255); 
    overflow:hidden;
  }
  
  .wrapper div {
     min-height: 200px;
     padding: 10px;
  }
  #one {
    background-color: rgb(255, 255, 255);
    float:left; 
    margin-right:20px;
    width:500px;
    border-right:2px solid rgb(255, 255, 255);
  }
  #two { 
    background-color: white;
    overflow:hidden;
    margin:1px;
    border:1px dashed rgb(255, 255, 255);
    min-height:170px;
  }
  
  @media screen and (max-width: 400px) {
     #one { 
      float: none;
      margin-right:0;
      width:auto;
      border:0;
      border-bottom:2px solid rgb(255, 255, 255);    
    }
  }
</style>


