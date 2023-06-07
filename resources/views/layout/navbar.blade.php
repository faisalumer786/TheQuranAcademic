<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="{{url('/')}}"><img  src="assets/img/pics/logo.png" alt=""></a></h1>
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="active" href="{{url('/')}}">Home</a></li>
          <li><a href="{{url('aboutus')}}">About Us</a></li>
         
          <li class="dropdown"><a href="#"><span>Courses</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
            <li><a href="{{url('religious-courses')}}">Religious Courses</a></li>
            <!-- <li class="dropdown"><a href="#"><span>Complementry Courses</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                    <li><a href="{{url('redhat')}}">Islamic Supplications</a></li>
                    <li><a href="{{url('ec_council')}}">Islamic Studies</a></li>
                    <li><a href="{{url('comp_tia')}}">Pryaer Lesson</a></li>
                </ul>
              </li> -->
            <li><a href="{{url('academic-courses')}}">Academic Courses</a></li>

              <!-- <li class="dropdown"><a href="#"><span>Regular Courses</span> <i class="bi bi-chevron-down"></i></a>
                      <ul>
                        <li><a href="{{url('redhat')}}">Quran Qaida</a></li>
                        <li><a href="{{url('ec_council')}}">The Quran Reading</a></li>
                        <li><a href="{{url('comp_tia')}}">The Quran Memorization</a></li>
                        <li><a href="{{url('certnexus')}}">Learn Ten Qirat</a></li>
                        <li><a href="{{url('microsoft')}}">Lehjazah</a></li>
                        <li><a href="{{url('cisco')}}">Complete Tefsir</a></li>
                        <li><a href="{{url('ibm_qrader')}}">Arabic & English Spoken Language</a></li>
                        <li><a href="{{url('isc')}}">Derse Nizami(Alim Course)</a></li>
                        <li><a href="{{url('isaca')}}">Seerat Prophit Muhammad</a></li>
                        <li><a href="{{url('amazon')}}">New Converted Muslims Basic Education(Free of Cost)</a></li>
                    </ul>
                </li> -->
              
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Registration</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <li><a href="{{url('religious/create')}}">Register For Religious Courses</a></li>
                <li><a href="{{url('academic/create')}}">Register For Academic Courses</a></li>
              </ul>
          </li>
            <!-- </ul> -->
          </li>
          <li><a href="{{url('contact')}}">Contact Us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="{{url('course')}}" class="get-started-btn">Apply Now</a>

    </div>
  </header>