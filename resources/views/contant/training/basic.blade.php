@extends('layout.app')
@section('contant')
<div class="text-center">
      <h2 class=" text-decoration-underline text-success" style="font-weight: 700; margin-top:100px;">Basic Certifications </h2>
</div>
<section id="popular-courses" class="courses">
    <div class="container" data-aos="fade-up">
        <div class="row" data-aos="zoom-in" data-aos-delay="100">

            <div class="col-lg-4 col-md-6 d-flex mb-4 mt-4 align-items-stretch">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="{{asset('assets/img/freelancing.jpg')}}" alt="Avatar" style="width:300px;height:300px;">
                            <h4>Freelancing</h4> 
                        </div>
                        <div class="flip-card-back">
                            <h4 class="mt-5">Freelancing</h4> 
                            <h4 class="" style="font-weight:200">Duration: 2 Months</h4>
                            <h4 class="" style="font-weight:200">Fee: 25000</h4>
                            <button type="button" class="btn btn-light mt-5">Apply Now</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex mb-4 mt-4 align-items-stretch">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="{{asset('assets/img/python.jpeg')}}" alt="Avatar" style="width:300px;height:300px;">
                            <h4>Python</h4> 
                        </div>
                        <div class="flip-card-back">
                            <h4 class="mt-5">Python</h4> 
                            <h4 class="" style="font-weight:200">Duration: 2 Months</h4>
                            <h4 class="" style="font-weight:200">Fee: 37000</h4>
                            <button type="button" class="btn btn-light mt-5">Apply Now</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex mb-4 mt-4 align-items-stretch">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="{{asset('assets/img/web.jpeg')}}" alt="Avatar" style="width:300px;height:300px;">
                            <h4>Web Development</h4> 
                        </div>
                        <div class="flip-card-back">
                            <h4 class="mt-5">Web Development</h4> 
                            <h4 class="" style="font-weight:200">Duration: 2 Months</h4>
                            <h4 class="" style="font-weight:200">Fee: 25000</h4>
                            <button type="button" class="btn btn-light mt-5">Apply Now</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex mb-4 mt-4 align-items-stretch">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="{{asset('assets/img/WordPress-Design-Considerations.jpg')}}" alt="Avatar" style="width:300px;height:300px;">
                            <h4 class="mb-3">WordPress</h4> 
                        </div>
                        <div class="flip-card-back">
                            <h4 class="mt-5">WordPress</h4> 
                            <h4 class="" style="font-weight:200">Duration: 2 Months</h4>
                            <h4 class="" style="font-weight:200">Fee: 25000</h4>
                            <button type="button" class="btn btn-light mt-5">Apply Now</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex mb-4 mt-4 align-items-stretch">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="{{asset('assets/img/WhatsApp-Image-2022-12-16-at-1.15.56-PM.jpeg')}}" alt="Avatar" style="width:300px;height:300px;">
                            <h4 class="mb-3">Graphics Designing</h4> 
                        </div>
                        <div class="flip-card-back">
                            <h4 class="mt-5">Graphics Designing</h4> 
                            <h4 class="" style="font-weight:200">Duration: 2 Months</h4>
                            <h4 class="" style="font-weight:200">Fee: 25000</h4>
                            <button type="button" class="btn btn-light mt-5">Apply Now</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex mb-4 mt-4 align-items-stretch">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="{{asset('assets/img/WhatsApp-Image-2022-12-16-at-1.15.56-PM-2.jpeg')}}" alt="Avatar" style="width:300px;height:300px;">
                            <h4 class="mb-3">Video Editing</h4> 
                        </div>
                        <div class="flip-card-back">
                            <h4 class="mt-5">Video Editing</h4> 
                            <h4 class="" style="font-weight:200">Duration: 2 Months</h4>
                            <h4 class="" style="font-weight:200">Fee: 25000</h4>
                            <button type="button" class="btn btn-light mt-5">Apply Now</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex mb-4 mt-4 align-items-stretch">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="{{asset('assets/img/WhatsApp-Image-2022-12-16-at-1.15.55-PM-2.jpeg')}}" alt="Avatar" style="width:300px;height:300px;">
                            <h4 class="mb-3">Web Designing</h4> 
                        </div>
                        <div class="flip-card-back">
                            <h4 class="mt-5">Web Designing</h4> 
                            <h4 class="" style="font-weight:200">Duration: 2 Months</h4>
                            <h4 class="" style="font-weight:200">Fee: 25000</h4>
                            <button type="button" class="btn btn-light mt-5">Apply Now</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex mb-4 mt-4 align-items-stretch">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="{{asset('assets/img/WhatsApp-Image-2022-12-16-at-4.21.32-PM.jpeg')}}" alt="Avatar" style="width:300px;height:300px;">
                            <h4 class="mb-3">Spoken English</h4> 
                        </div>
                        <div class="flip-card-back">
                            <h4 class="mt-5">Spoken English</h4> 
                            <h4 class="" style="font-weight:200">Duration: 2 Months</h4>
                            <h4 class="" style="font-weight:200">Fee: 25000</h4>
                            <button type="button" class="btn btn-light mt-5">Apply Now</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex mb-4 mt-4 align-items-stretch">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="{{asset('assets/img/WhatsApp-Image-2022-12-16-at-4.21.21-PM.jpeg')}}" alt="Avatar" style="width:300px;height:300px;">
                            <h4 class="mb-3">App Development</h4> 
                        </div>
                        <div class="flip-card-back">
                            <h4 class="mt-5">App Development</h4> 
                            <h4 class="" style="font-weight:200">Duration: 2 Months</h4>
                            <h4 class="" style="font-weight:200">Fee: 25000</h4>
                            <button type="button" class="btn btn-light mt-5">Apply Now</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex mb-4 mt-4 align-items-stretch">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="{{asset('assets/img/WhatsApp-Image-2022-12-16-at-1.15.56-PM-5.jpeg')}}" alt="Avatar" style="width:300px;height:300px;">
                            <h4 class="mb-3"> (CIT)</h4> 
                        </div>
                        <div class="flip-card-back">
                            <h4 class="mt-5">Certified Information Technology (CIT)</h4> 
                            <h4 class="" style="font-weight:200">Duration: 2 Months</h4>
                            <h4 class="" style="font-weight:200">Fee: 25000</h4>
                            <button type="button" class="btn btn-light mt-5">Apply Now</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex mb-4 mt-4 align-items-stretch">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="{{asset('assets/img/WhatsApp-Image-2022-12-16-at-1.15.55-PM-1.jpeg')}}" alt="Avatar" style="width:300px;height:300px;">
                            <h4 class="mb-3"> (SEO)</h4> 
                        </div>
                        <div class="flip-card-back">
                            <h4 class="mt-5">Search Engin Optimization (SEO)</h4> 
                            <h4 class="" style="font-weight:200">Duration: 2 Months</h4>
                            <h4 class="" style="font-weight:200">Fee: 25000</h4>
                            <button type="button" class="btn btn-light mt-5">Apply Now</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex mb-4 mt-4 align-items-stretch">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="{{asset('assets/img/WhatsApp-Image-2022-12-16-at-1.15.55-PM.jpeg')}}" alt="Avatar" style="width:300px;height:300px;">
                            <h4 class="mb-3">Social Media Marketing</h4> 
                        </div>
                        <div class="flip-card-back">
                            <h4 class="mt-5">Social Media Marketing</h4> 
                            <h4 class="" style="font-weight:200">Duration: 2 Months</h4>
                            <h4 class="" style="font-weight:200">Fee: 25000</h4>
                            <button type="button" class="btn btn-light mt-5">Apply Now</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex mb-4 mt-4 align-items-stretch">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="{{asset('assets/img/c-course.png')}}" alt="Avatar" style="width:300px;height:300px;">
                            <h4 class="mb-3">C++ Course</h4> 
                        </div>
                        <div class="flip-card-back">
                            <h4 class="mt-5">C++ Course</h4> 
                            <h4 class="" style="font-weight:200">Duration: 2 Months</h4>
                            <h4 class="" style="font-weight:200">Fee: 25000</h4>
                            <button type="button" class="btn btn-light mt-5">Apply Now</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex mb-4 mt-4 align-items-stretch">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="{{asset('assets/img/amazonfba.png')}}" alt="Avatar" style="width:300px;height:300px;">
                            <h4 class="mb-3">Amazon FBA</h4> 
                        </div>
                        <div class="flip-card-back">
                            <h4 class="mt-5">Amazon FBA</h4> 
                            <h4 class="" style="font-weight:200">Duration: 2 Months</h4>
                            <h4 class="" style="font-weight:200">Fee: 37000</h4>
                            <button type="button" class="btn btn-light mt-5">Apply Now</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex mb-4 mt-4 align-items-stretch">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="{{asset('assets/img/young-brunette-business-lady-is-analyzing-diagrammes-working-laptop.jpg')}}" alt="Avatar" style="width:300px;height:300px;">
                            <h4 class="mb-3">Amazon Virtual Assistant</h4> 
                        </div>
                        <div class="flip-card-back">
                            <h4 class="mt-5">Amazon Virtual Assistant</h4> 
                            <h4 class="" style="font-weight:200">Duration: 2 Months</h4>
                            <h4 class="" style="font-weight:200">Fee: 37000</h4>
                            <button type="button" class="btn btn-light mt-5">Apply Now</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex mb-4 mt-4 align-items-stretch">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="{{asset('assets/img/turned-gray-laptop-computer.jpg')}}" alt="Avatar" style="width:300px;height:300px;">
                            <h4 class="mb-3">Java Course</h4> 
                        </div>
                        <div class="flip-card-back">
                            <h4 class="mt-5">Java Course</h4> 
                            <h4 class="" style="font-weight:200">Duration: 2 Months</h4>
                            <h4 class="" style="font-weight:200">Fee: 25000</h4>
                            <button type="button" class="btn btn-light mt-5">Apply Now</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex mb-4 mt-4 align-items-stretch">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="{{asset('assets/img/digital-marketing-with-icons-business-people.jpg')}}" alt="Avatar" style="width:300px;height:300px;">
                            <h4 class="mb-3">Digital Marketing</h4> 
                        </div>
                        <div class="flip-card-back">
                            <h4 class="mt-5">Digital Marketing</h4> 
                            <h4 class="" style="font-weight:200">Duration: 2 Months</h4>
                            <h4 class="" style="font-weight:200">Fee: 37000</h4>
                            <button type="button" class="btn btn-light mt-5">Apply Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection