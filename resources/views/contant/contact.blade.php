@extends('layout.app')
@section('contant')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
    <div class="container">
        <h1>Contact Us</h1>
        <p> </p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        
      <div class="container" data-aos="fade-up">

<div class="row mt-5">

  <div class="col-lg-4">
    <div class="info">
      <div class="address">
        <i class="bi bi-geo-alt"></i>
        <h4>Location:</h4>
        <p>SUITE NO. 3, BLK. NO. 26, PHA, G-7/1, ISB.</p>
      </div>

      <div class="email">
        <i class="bi bi-envelope"></i>
        <h4>Email:</h4>
        <p>info@ecservices.pk</p>
      </div>

      <div class="phone">
        <i class="bi bi-phone"></i>
        <h4>Call:</h4>
        <p>+92-51-8749532</p>
      </div>

    </div>

  </div>

  <div class="col-lg-8 mt-5 mt-lg-0">

    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
      <div class="row">
        <div class="col-md-6 form-group">
          <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
        </div>
        <div class="col-md-6 form-group mt-3 mt-md-0">
          <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
        </div>
      </div>
      <div class="form-group mt-3">
        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
      </div>
      <div class="form-group mt-3">
        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
      </div>
      <div class="my-3">
        <div class="loading">Loading</div>
        <div class="error-message"></div>
        <div class="sent-message">Your message has been sent. Thank you!</div>
      </div>
      <div class="text-center mb-5"><button type="submit">Send Message</button></div>
    </form>

  </div>

</div>

</div>
      <div data-aos="fade-up">
        <iframe style="border:0; width: 100%; height: 400px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3319.344459638801!2d73.06000301454503!3d33.70003464365702!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfbf2006f3c7d7%3A0x468d100d17ebf513!2sEC%20Services%20(Pvt.)%20Limited!5e0!3m2!1sen!2s!4v1676620594448!5m2!1sen!2s" frameborder="0" allowfullscreen></iframe>
      </div>
    </section><!-- End Contact Section -->

  </main>
@endsection