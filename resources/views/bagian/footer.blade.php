<footer class="footer-area">
    <!-- Main Footer Area -->
    <div class="main-footer-area section-padding-100-0 bg-img foo-bg-overlay" style="background-image: url(indexcss/img/bg-img/bg-1.jpg);">
        <div class="container">
            <div class="row">

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="d-flex flex-wrap mb-100">
                        <div class="footer-widget">
                            <div class="widget-title">
                                <a href="#"><img src="/indexcss/img/core-img/DBB.png" alt=""></a>
                            </div>
                        </div>
                        <div class="copywrite-text">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>
                                    document.write(new Date().getFullYear());
                                </script> Duta Bina Bhuana
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="footer-widget mb-100">
                        <div class="widget-title">
                            <h6>Contact Us</h6>
                        </div>

                        <!-- Single Contact Area -->
                        <div class="single-contact-area mb-30">
                            <p>Address:</p>
                            <span>Yayasan Duta Bina Bhuana Jl. Pandu No.61, Dalung, Kec. Kuta Utara, Kabupaten Badung, Bali 80361</span>
                        </div>

                        <!-- Single Contact Area -->
                        <div class="single-contact-area mb-30">
                            <p>Phone:</p>
                            <span>+62 361-437034<br>+62 361-437035</span>
                        </div>

                        <!-- Single Contact Area -->
                        <div class="single-contact-area mb-30">
                            <p>Chat Or Whatsapp :</p>
                            <span>+62 819 4977 8670</span>
                        </div>

                        <!-- Single Contact Area -->
                        <div class="single-contact-area mb-30">
                            <p>Email:</p>
                            <span>info@dbb-foundation.org</span>
                        </div>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="footer-widget mb-100">
                        <div class="widget-title">
                            <h6>Maps</h6>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15778.956158829944!2d115.1658036!3d-8.6210332!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x39ae533bc0bf1d57!2sYayasan%20Duta%20Bina%20Bhuana!5e0!3m2!1sid!2sid!4v1656221004007!5m2!1sid!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <div class="widget-title">
                                <h6>OUR NEWSLETTER</h6>
                                <form action="{{ route('register') }}" method="post">
                                    {{csrf_field()}}
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" required>
                                    <input type="hidden" class="form-control" id="level" name="level" value="user">
                                    <input type="hidden" class="form-control" id="password" name="password" value="123123">
                                    <button class="btn faith-btn" type="submit">Sign Up</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>