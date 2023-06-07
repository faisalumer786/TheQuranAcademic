@extends('layout.app')
@section('contant')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
   <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h1>Apply Now</h1>
        <p> </p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        
      <div class="container" data-aos="fade-up">

<div class="row mt-5">

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
        <select id="cars" name="cars" class="form-control" name="subject" id="subject" placeholder="Subject" required>
          <option value=""></option>
          <option value="volvo">Training</option>
          <option value="saab">Bootcamp</option>
          <option value="fiat">Services</option>
        </select>
      </div>




     






      <div class="form-group mt-3">
        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
      </div>
      <div class="my-3">
        <div class="loading">Loading</div>
        <div class="error-message"></div>
        <div class="sent-message">Your message has been sent. Thank you!</div>
      </div>
      <div class="text-center mb-5"><button type="submit">Apply Now</button></div>
    </form>

  </div>

</div>

</div>
    </section><!-- End Contact Section -->

  </main>
@endsection