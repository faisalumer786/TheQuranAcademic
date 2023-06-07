@extends('layout.app')
@section('contant')
<div class="text-center">
      <h2 class=" text-decoration-underline text-success" style="font-weight: 700; margin-top:100px;">Academic Courses Certifications </h2>
</div>
<section id="popular-courses" class="courses">
    <div class="container" data-aos="fade-up">
        <div class="row" data-aos="zoom-in" data-aos-delay="100">

            <div class="col-lg-4 col-md-6 d-flex mb-4 mt-4 align-items-stretch">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="{{asset('assets/img/pics/a1a706333d56ee3224c4f02aa59f4b3b-700.jpg')}}" alt="Avatar" style="width:300px;height:300px;">
                            <h4>Physics </h4> 
                        </div>
                        <div class="flip-card-back">
                            <h4 class="mt-5">Physics </h4> 
                            <p>Physics is the study of the natural world, including matter, energy, motion, and the fundamental laws and principles that govern the universe.</p>
                            <!-- <h4 class="" style="font-weight:200">Duration: 2 Months</h4> -->
                            <h4 class="" style="font-weight:200">Fee: 25000</h4>
                            <button type="button" class="btn btn-light">Apply Now</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex mb-4 mt-4 align-items-stretch">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="{{asset('assets/img/pics/231-2315173_big.jpg')}}" alt="Avatar" style="width:300px;height:300px;">
                            <h4>Chemistry</h4> 
                        </div>
                        <div class="flip-card-back">
                            <h4 class="mt-5">Chemistry</h4> 
                            <p>Chemistry is the scientific study of the properties, composition, and behavior of matter, as well as the changes it undergoes during chemical reactions.</p>
                            <!-- <h4 class="" style="font-weight:200">Duration: 2 Months</h4> -->
                            <h4 class="" style="font-weight:200">Fee: 37000</h4>
                            <button type="button" class="btn btn-light">Apply Now</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex mb-4 mt-4 align-items-stretch">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="{{asset('assets/img/pics/science-concept-biology-hand-drawn-elements-science-concept-biology-white-hand-drawn-elements-brown-113975344.jpg')}}" alt="Avatar" style="width:300px;height:300px;">
                            <h4>Biology </h4> 
                        </div>
                        <div class="flip-card-back">
                            <h4 class="mt-5">Biology </h4> 
                            <p>Biology is the scientific study of living organisms and their interactions with each other and the environment.</p>
                            <!-- <h4 class="" style="font-weight:200">Duration: 2 Months</h4> -->
                            <h4 class="" style="font-weight:200">Fee: 25000</h4>
                            <button type="button" class="btn btn-light">Apply Now</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex mb-4 mt-4 align-items-stretch">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="{{asset('assets/img/pics/113-1130819_mathematics-clipart-math-week-maths-clipart-uk-hd.png')}}" alt="Avatar" style="width:300px;height:300px;">
                            <h4 class="mb-3">Math</h4> 
                        </div>
                        <div class="flip-card-back">
                            <h4 class="mt-5">Math</h4> 
                            <p>Mathematics is the study of numbers, quantities, and shapes, as well as the relationships between them and their applications in various fields.</p>
                            <!-- <h4 class="" style="font-weight:200">Duration: 2 Months</h4> -->
                            <h4 class="" style="font-weight:200">Fee: 25000</h4>
                            <button type="button" class="btn btn-light">Apply Now</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex mb-4 mt-4 align-items-stretch">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="{{asset('assets/img/pics/Arabic Speaking.jpg')}}" alt="Avatar" style="width:300px;height:300px;">
                            <h4 class="mb-3">Arabic </h4> 
                        </div>
                        <div class="flip-card-back">
                            <h4 class="mt-5">Arabic </h4> 
                            <p>An Arabic language course teaches students how to read, write, speak, and understand the Arabic language.</p>
                            <!-- <h4 class="" style="font-weight:200">Duration: 2 Months</h4> -->
                            <h4 class="" style="font-weight:200">Fee: 25000</h4>
                            <button type="button" class="btn btn-light">Apply Now</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex mb-4 mt-4 align-items-stretch">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="{{asset('assets/img/pics/brick-wall-neon-sign-inscription-concept-learning-urdu-145212515.jpg')}}" alt="Avatar" style="width:300px;height:300px;">
                            <h4 class="mb-3">Urdu</h4> 
                        </div>
                        <div class="flip-card-back">
                            <h4 class="mt-5">Urdu</h4> 
                            <p>A Urdu language course teaches students how to read, write, speak, and understand the Urdu language.</p>
                            <!-- <h4 class="" style="font-weight:200">Duration: 2 Months</h4> -->
                            <h4 class="" style="font-weight:200">Fee: 25000</h4>
                            <button type="button" class="btn btn-light">Apply Now</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex mb-4 mt-4 align-items-stretch">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="{{asset('assets/img/pics/Learn-Islamic-Studies-Online-for-kids-and-Adults.png')}}" alt="Avatar" style="width:300px;height:300px;">
                            <h4 class="mb-3">Islamite</h4> 
                        </div>
                        <div class="flip-card-back">
                            <h4 class="mt-5">Islamite</h4> 
                            <p>An Islamic course is an educational program that teaches about the religion of Islam, including its beliefs, practices, history, and culture.</p>
                            <!-- <h4 class="" style="font-weight:200">Duration: 2 Months</h4> -->
                            <h4 class="" style="font-weight:200">Fee: 25000</h4>
                            <button type="button" class="btn btn-light">Apply Now</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex mb-4 mt-4 align-items-stretch">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="{{asset('assets/img/pics/3.jpg')}}" alt="Avatar" style="width:300px;height:300px;">
                            <h4 class="mb-3">Selected Quranic chapters</h4> 
                        </div>
                        <div class="flip-card-back">
                            <h4 class="mt-5">Selected Quranic chapters</h4>
                            <p>Selected Quranic chapters are specific portions of the holy book of Quran that are studied to gain a deeper understanding of Islamic theology, ethics, and spirituality.</p>
                            <!-- <h4 class="" style="font-weight:200">Duration: 2 Months</h4> -->
                            <h4 class="" style="font-weight:200">Fee: 25000</h4>
                            <button type="button" class="btn btn-light">Apply Now</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex mb-4 mt-4 align-items-stretch">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="{{asset('assets/img/pics/360_F_267009504_ugc0p9zMSXC8y8RQJkzP1C7eq3Okuike.jpg')}}" alt="Avatar" style="width:300px;height:300px;">
                            <h4 class="mb-3">Islamite BS MS level</h4> 
                        </div>
                        <div class="flip-card-back">
                            <h4 class="mt-5">Islamite BS MS level</h4> 
                            <p>Islamic Studies at the BS or MS level teaches students about various aspects of Islam to prepare them for careers related to Islamic studies.</p>
                            <!-- <h4 class="" style="font-weight:200">Duration: 2 Months</h4> -->
                            <h4 class="" style="font-weight:200">Fee: 25000</h4>
                            <button type="button" class="btn btn-light">Apply Now</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex mb-4 mt-4 align-items-stretch">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="{{asset('assets/img/pics/arabic_4x.webp')}}" alt="Avatar" style="width:300px;height:300px;">
                            <h4 class="mb-3">Arabic BS MS level</h4> 
                        </div>
                        <div class="flip-card-back">
                            <h4 class="mt-5">Arabic BS MS level</h4> 
                            <p>Arabic at the BS or MS level teaches the Arabic language, literature, culture, and history to prepare students for careers related to Arabic.</p>
                            <!-- <h4 class="" style="font-weight:200">Duration: 2 Months</h4> -->
                            <h4 class="" style="font-weight:200">Fee: 25000</h4>
                            <button type="button" class="btn btn-light">Apply Now</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="col-lg-4 col-md-6 d-flex mb-4 mt-4 align-items-stretch">
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
            </div> -->
        </div>
    </div>
</section>
@endsection