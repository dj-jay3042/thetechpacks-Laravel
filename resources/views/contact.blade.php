@extends('master')

@section('contact')
    active
@endsection

@section('main')
<div class="page-title parallax parallax1 position-relative clearfix">
    <div class="section-overlay"></div>
    <div class="container">
        <div class="breadcrumbs position-relative">
            <div class="breadcrumbs-wrap">
                <h1 class="title">Contact Us</h1>
                <ul class="breadcrumbs-inner">
                    <li><a href="/">Home</a></li>
                    <li><a href="/connect">Pages</a></li>
                </ul>
            </div>
        </div>
    </div>
</div><!-- page-title -->
<div class="contact flat-row-half">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="get-in-touch get-in-touch-type1">
                    <div class="text-contact">Don't hesitate to <a href="#">contact us for any information.</a></div>
                    <div class="info-contact">
                        <p>+91 96647 88574</p>
                        <p>info@thetechpacks.com</p>
                        <p>www.thetechpacks.com</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <form id="contactform" action="./contact/contact-process.php" method="post" class="form-leave-comment form-submit">
                    <div class="text-wrap d-md-flex clearfix">
                        <div class="w-left position-relative">
                            <input type="text" name="firstname" id="firstname" value="" class="firstname" placeholder="Name*">
                            <span class="icon-user"></span>
                        </div>
                        <div class="w-right position-relative">
                            <input type="text" name="email" id="email" value="" class="email" placeholder="Email">
                            <span class="fa fa-envelope" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="message-wrap mg-b50">
                        <textarea name="message" id="comment-message" rows="8" placeholder="Message here" required="required"></textarea>
                    </div>
                    <div class="flat-send-message btn-linear hv-linear-gradient text-center">
                        <button name="submit" type="submit" class="submit font-style linear-color border-corner" id="submit">send message now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div><!-- contact -->
<div class="flat-map-type1">
    <div class="container">
        <div class="flat-map"></div>
    </div>
</div><!-- flat-map -->
@endsection
