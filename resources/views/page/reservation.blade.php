@extends('layouts.app')
@section('content')
    <header class="row tm-welcome-section">
        <h2 class="col-12 text-center tm-section-title">Make Reservation</h2>
        <p class="col-12 text-center">You may use <a rel="nofollow" href="https://www.ltcclock.com/downloads/simple-contact-form/" target="_blank">Simple Contact Form</a> to send email to your inbox. You can modify and use this template for your website. Header image has a parallax effect. Total 3 HTML pages included in this template.</p>
    </header>

    <div class="tm-container-inner-2 tm-contact-section">
        <div class="row">
            <div class="col-md-6">
                <form method="POST" action="{{route('reserve.process')}}"  class="tm-contact-form">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Name" required="" />
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Email" required="" />
                    </div>
                    <div class="form-group">
                        <input type="number" name="phone" class="form-control" placeholder="phone number" required="" />
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <fieldset>
                            <select value="number-guests" name="guestNumber" id="number-guests">
                                <option value="number-guests">Number Of Guests</option>
                                <option name="1" id="1">1</option>
                                <option name="2" id="2">2</option>
                                <option name="3" id="3">3</option>
                                <option name="4" id="4">4</option>
                                <option name="5" id="5">5</option>
                                <option name="6" id="6">6</option>
                                <option name="7" id="7">7</option>
                                <option name="8" id="8">8</option>
                                <option name="9" id="9">9</option>
                                <option name="10" id="10">10</option>
                                <option name="11" id="11">11</option>
                                <option name="12" id="12">12</option>
                            </select>
                        </fieldset>
                    </div>
                    <div class="col-lg-6">
                        <div id="filterDate2">
                            <div class="input-group date" data-date-format="dd/mm/yyyy">
                                <input  name="date" id="date" type="text" class="form-control" placeholder="dd/mm/yyyy">
                                <div class="input-group-addon" >
                                    <span class="glyphicon glyphicon-th"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea rows="4" cols="20" name="message" class="form-control" placeholder="Message" required=""></textarea>
                    </div>

                    <div class="form-group tm-d-flex">
                        <button type="submit" class="tm-btn tm-btn-success tm-btn-right">
                            Send
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <div class="tm-address-box">
                    <h4 class="tm-info-title tm-text-success">Our Address</h4>
                    <address>
                        180 Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus 10550
                    </address>
                    <a href="tel:080-090-0110" class="tm-contact-link">
                        <i class="fas fa-phone tm-contact-icon"></i>080-090-0110
                    </a>
                    <a href="mailto:info@company.co" class="tm-contact-link">
                        <i class="fas fa-envelope tm-contact-icon"></i>info@company.co
                    </a>
                    <div class="tm-contact-social">
                        <a href="https://fb.com/templatemo" class="tm-social-link"><i class="fab fa-facebook tm-social-icon"></i></a>
                        <a href="#" class="tm-social-link"><i class="fab fa-twitter tm-social-icon"></i></a>
                        <a href="#" class="tm-social-link"><i class="fab fa-instagram tm-social-icon"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- How to change your own map point
        1. Go to Google Maps
        2. Click on your location point
        3. Click "Share" and choose "Embed map" tab
        4. Copy only URL and paste it within the src="" field below
    -->
    <div class="tm-container-inner-2 tm-map-section">
        <div class="row">
            <div class="col-12">
                <div class="tm-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11196.961132529668!2d-43.38581128725845!3d-23.011063013218724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9bdb695cd967b7%3A0x171cdd035a6a9d84!2sAv.%20L%C3%BAcio%20Costa%20-%20Barra%20da%20Tijuca%2C%20Rio%20de%20Janeiro%20-%20RJ%2C%20Brazil!5e0!3m2!1sen!2sth!4v1568649412152!5m2!1sen!2sth" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="tm-container-inner-2 tm-info-section">
        <div class="row">
            <!-- FAQ -->
            <div class="col-12 tm-faq">
                <h2 class="text-center tm-section-title">FAQs</h2>
                <p class="text-center">This section comes with Accordion tabs for different questions and answers about Simple House HTML CSS template. Thank you. #666</p>
                <div class="tm-accordion">
                    <button class="accordion">1. Fusce eu lorem et dui #09C maximus varius?</button>
                    <div class="panel">
                        <p>#666 Duis blandit purus vel nenenatis rutrum. Pellentesque pellentesque tindicunt lorem, ac egestas massa sollicitudin vel. Nam scelerisque vulputate quam mollis pretium. Morbi condimentum volutpat.</p>
                    </div>

                    <button class="accordion">2. Vestibulum #999 ante ipsum primis in faucibus orci?</button>
                    <div class="panel">
                        <p>Mauris euismod odio at commodo rhoncus. Maecenas nec interdum purus, sed auctor est. Sed eleifend urna nec diam consectetur, a aliquet turpis facilisis. Integer est sapien, sagittis vel massa vel, interdum euismod erat. Aenean sollicitudin nisi neque, efficitur posuere urna rutrum porta.</p>
                    </div>

                    <button class="accordion">3. Can I redistribute this template as a ZIP file?</button>
                    <div class="panel">
                        <p>Redistributing this template as a downloadable ZIP file on any template collection site is strictly prohibited. You will need to <a href="https://templatemo.com/contact">contact TemplateMo</a> for additional permissions about our templates. Thank you.</p>
                    </div>

                    <button class="accordion">4. Ut ac erat sit amet neque efficitur faucibus et in lectus?</button>
                    <div class="panel">
                        <p>Vivamus viverra pretium ultricies. Praesent feugiat, sapien vitae blandit efficitur, sem nulla venenatis nunc, vel maximus ligula sem a sem. Pellentesque ligula ex, facilisis ac libero a, blandit ullamcorper enim.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
