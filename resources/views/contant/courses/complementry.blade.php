<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>The Quran Tutors</title>
</head>
<body>
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
            <div class="position-relative m-3 d-flex justify-content-center">
                <img src="{{asset('assets/img/pics/logo.png')}}" class="" alt="Image 1" style="width:220px;">
                <!-- <img src="https://lms.mrglobaltech.com/assets/img/logo/MOITT_Logo.svg.png" class="position-absolute top-0 end-0" alt="Image 2" style="width:180px"> -->
            </div>
          <div class="card-body p-4 p-md-5">
            <h3 class="text-center m-3">Registration For Religious Courses</h3>

            @if ($errors->any())
              <div class="alert alert-danger">
                  <strong>Whoops!</strong> There were some problems with your input.<br><br>
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
            @endif
            <form action="{{ route('religious.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" name="name" class="form-control form-control-lg"/>
                    <label class="form-label" for="name">{{ __('Name') }}</label>
                      @error('name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                      @enderror
                  </div>

                </div>

                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="email" name="email" class="form-control form-control-lg" placeholder="example@gmail.com" />
                    <label class="form-label" for="email">Email</label>
                    @error('email')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                  </div>

                  </div>
              </div>


              <div class="row">
                <div class="col-md-6 mb-4 d-flex align-items-center">

                  <div class="form-outline datepicker w-100">
                    <input type="date" name="date_of_birth" class="form-control form-control-lg" />
                    <label for="date_of_birth" class="form-label">Date of Birth</label>
                    @error('date_of_birth')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                      @enderror
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <h6 class="mb-2 pb-1">Gender: </h6>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="gender"
                      value="male" checked />
                    <label class="form-check-label" for="gender">Female</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="gender"
                      value="male" />
                    <label class="form-check-label" for="gender">Male</label>
                  </div>

                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4">
                <div class="form-outline">
                    <input type="text" name="course" class="form-control form-control-lg"/>
                    <label class="form-label" for="course">{{ __('Course Name') }}</label>
                      @error('course')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                      @enderror
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" name="contact" class="form-control form-control-lg" placeholder="051 0000000" />
                    <label class="form-label" for="contact">Contact</label>
                    @error('contact')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                  </div>

                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4">

                <div class="form-outline">
                    <input type="text" name="country" class="form-control form-control-lg"/>
                    <label class="form-label" for="country">Country</label>
                    @error('country')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" name="city" class="form-control form-control-lg" />
                    <label class="form-label" for="city">City</label>
                    @error('city')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                  </div>

                </div>
              </div>
              <div class="col-md-6 mb-4">
              <div class="form-outline">
                <div class="mt-4 pt-2">
                    <input class="btn btn-outline-primary btn-lg" type="submit" value="Submit" />
                    <a href="{{url('/')}}"><button type="button" class="btn btn-outline-secondary btn-lg">Back</button></a>
                </div>
              </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>