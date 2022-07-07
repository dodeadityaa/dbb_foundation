<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Contact</title>

    <!-- Favicon -->
    @include('bagian.icon')

    <!-- Stylesheet -->
    <link rel="stylesheet" href="/indexcss/css/style.css">

</head>

<body>
    <!-- ##### Search Wrapper Start ##### -->
    <div class="search-wrapper d-flex align-items-center justify-content-center bg-img foo-bg-overlay" style="background-image: url(/indexcss/img/bg-img/bg-2.jpg);">
        <div class="close--icon">
            <i class="fa fa-times"></i>
        </div>
    </div>
    <!-- ##### Search Wrapper End ##### -->

    <!-- ##### Preloader ##### -->
    @include('bagian.loading')

    <!-- ##### Header Area Start ##### -->
    @include('bagian.menu')
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img" style="background-image: url(/indexcss/img/bg-img/bg-7.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 col-md-6">
                    <div class="breadcumb-text">
                        <h5>Say hello</h5>
                        <h2>Contact</h2>
                        <p>If you have any questions about Duta Bina Bhuana, please contact us below. We would love to hear your questions,feedback and suggestions</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->


    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-info-area">
                        <div class="row">
                            <!-- Contact Information -->
                            <div class="col-12 col-lg-6">
                                <div class="contact-information">
                                    <h5>Contact us</h5>
                                    <!-- Single Contact Area -->
                                    <div class="single-contact-area mb-30">
                                        <p>Address:</p>
                                        <span><a href="https://goo.gl/maps/7Q9Bx3g9e3LPsp5s9" class="fa fa-map-pin"> &nbsp;Yayasan Duta Bina Bhuana Jl. Pandu No.61, Dalung, Kec. Kuta Utara, Kabupaten Badung, Bali 80361 </a></span>
                                    </div>

                                    <!-- Single Contact Area -->
                                    <div class="single-contact-area mb-30">
                                        <p>Phone:</p>
                                        <span><a href="tel://62361437034" class="fa fa-phone"> &nbsp;+62 361-437034</a> <br><a class="fa fa-phone" href="tel://62361437035"> &nbsp;+62 361-437035</a></span>
                                    </div>

                                    <!-- Single Contact Area -->
                                    <div class="single-contact-area mb-30">
                                        <p>Chat or Whatsapp:</p>
                                        <span><a class="fa fa-whatsapp" href="https://api.whatsapp.com/send?phone=6281949778670"> &nbsp;+6281949778670</a></span>
                                    </div>

                                    <!-- Single Contact Area -->
                                    <div class="single-contact-area mb-30">
                                        <p>Email:</p>
                                        <span> <a class="fa fa-envelope-o" href="mailto:info@dbb-foundation.org?"> &nbsp;info@dbb-foundation.org</a></span>
                                    </div>
                                    <!-- Single Contact Area -->
                                    <div class="single-contact-area mb-30">
                                        <p>Open:</p>
                                        <span> <a class="fa fa-calendar" href=""> &nbsp;Monday-friday 08:00 am-05:00 pm</a></span>
                                    </div>
                                    <!-- Single Contact Area -->
                                    <div class="single-contact-area mb-30">
                                        <p>No SK :</p>
                                        <span> <a class="fa fa-gavel" href=""> &nbsp;AHU-11 145.50.10.2014</a></span>
                                    </div>
                                    <!-- Single Contact Area -->
                                    <div class="single-contact-area mb-30">
                                        <p>Reg No :</p>
                                        <span> <a class="fa fa-certificate" href=""> &nbsp;060.1/2642.IV/BPMP/2016</a></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Contact Form Area -->
                            <div class="col-12 col-lg-6">
                                <div class="contact-form-area">
                                    <h5>Send us a message</h5>
                                    @if(session('message'))
                                    <div class="alert alert-success" role="alert">
                                        Email Terkirim
                                    </div>
                                    @endif
                                    <form action="{{ route('contact.store') }}" method="post">
                                        {{csrf_field()}}
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                                        @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <input type="email" class="form-control" id="email" name="email" placeholder="E-mail">
                                        @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <textarea name="message" class="form-control" id="message" name="message" cols="30" rows="10" placeholder="Message"></textarea>
                                        @error('message')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <button class="btn faith-btn" type="submit">Contact Us</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->

    <!-- ##### Google Maps ##### -->
    <section class="faith-about-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-content">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### About Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    @include('bagian.footer')
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="/indexcss/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="/indexcss/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="/indexcss/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="/indexcss/js/plugins/plugins.js"></script>
    <script src="/indexcss/js/plugins/audioplayer.js"></script>
    <!-- Active js -->
    <script src="/indexcss/js/active.js"></script>
</body>

</html>