<section id="contact" class="contain ">


    <!--Contact Form -->
    <div class="contact-form">

        <form id="contact-us" method="post" action="php/mail.php">

            <!--Contact Header -->
            <h1 class="contact-us">Kontaktujte nás</h1>
            <!-- Name Input -->
            <input type="text" name="name" id="name" required="required" class="form" placeholder="Meno a priezvisko" />
            <!-- Email Input -->
            <input type="email" name="email" id="email" required="required" class="form" placeholder="E-mail" />
            <!-- Subject Input -->
            <input type="text" name="subject" id="subject" class="form" placeholder="Predmet" />
            <!-- Message Area -->
            <textarea name="message" id="message" class="form textarea"  placeholder="Správa"></textarea>
            <!-- Send Button -->
            <button type="submit" id="submit" name="submit" class="form-btn"><i class="fa fa-envelope"></i></button>

        </form>

    </div><!-- End Contact Form -->

    <!-- Contact Top Icon -->
    <div class="contain-logo contact-logo">
        <i class="fa fa-map-marker "></i>
    </div>

    <!-- Google Map -->
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyD5mdJpIA8w2rQMBYia9A3_sDLkLt4Pt48"></script>
    <div id="map"></div>
    <!-- End Google Map -->

</section><!-- End Contact Section -->