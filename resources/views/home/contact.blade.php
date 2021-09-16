@extends('home/layouts')

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('../assets/images/bg_3.jpg');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 pt-5 text-center">
          <p class="breadcrumbs"><span class="me-2"><a href="index-2.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Contact <i class="fa fa-chevron-right"></i></span></p>
          <h1 class="mb-0 bread">Contact us</h1>

          {{-- Allert Message --}}
          @if($message = Session::get('success'))
          <div class="alert alert-success" role="alert">
            {{ $message }}
          </div>
          @elseif(session()->has('Message'))
          <div class="alert alert-success" role="alert">
            {{ session()->get('Message') }}
          </div>
          @endif
          {{-- End Alert Message --}}

          {{-- Error Message --}}
          @if(count($errors) > 0)
          <div class="alert alert-danger" role="alert">
            <strong>Whoops!</strong> Kindly check Your Inputs
              <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li> 
                @endforeach  
              </ul>
          </div>
          @endif
          {{-- End Error Message --}}
        </div>
      </div>
    </div>
  </section>
  <section class="ftco-section bg-light">
    <div class="container">
      <div class="row no-gutters justify-content-center">
        <div class="col-md-12">
          <div class="wrapper">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="contact-wrap w-100 p-md-5 p-4">
                  <h3>Contact us</h3>
                  <p class="mb-4">We're open for any suggestion or just to have a chat</p>
                  <div class="row mb-4">
                    <div class="col-md-4">
                      <div class="dbox w-100 d-flex align-items-start">
                        <div class="text">
                          <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="dbox w-100 d-flex align-items-start">
                        <div class="text">
                          <p><span>Email:</span> <a href="https://preview.colorlib.com/cdn-cgi/l/email-protection#85ecebe3eac5fceaf0f7f6ecf1e0abe6eae8"><span class="__cf_email__" data-cfemail="d5bcbbb3ba95acbaa0a7a6bca1b0fbb6bab8">[email&#160;protected]</span></a></p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="dbox w-100 d-flex align-items-start">
                        <div class="text">
                          <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <form id="contactForm" action="{{route('storeContact')}}" method="POST" name="contactForm" class="contactForm">
                    @csrf
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <input type="text" class="form-control" name="name" value="{{ old('name') }}" id="name" placeholder="Name">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <input type="email" class="form-control" name="email" value="{{ old('email') }}" id="email" placeholder="Email">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <input type="number" id="phonenumber" class="form-control @error('phonenumber') is-danger @enderror" name="phonenumber" value="{{ old('phonenumber') }}" id="phonenumber" placeholder="Phone Number">
                          <p class="help is-danger" style="color: red;">
                            @error('phonenumber')
                              {{ $errors->first('phonenumber') }}</p>
                            @enderror
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <input type="text" class="form-control" name="subject" value="{{old('subject')}}" id="subject" placeholder="Subject">
                        </div>
                      </div>
                      <div class="col-md-12">
                       <div class="form-group">
                        <textarea name="message" class="form-control" id="message" value="{{ old('message') }}" cols="30" rows="2" placeholder="Create a message here"></textarea>
                      </div>
                    </div>
                    <div class="col-md-12 mt-2">
                      <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-primary">
                        <div class="submitting"></div>
                      </div>
                    </div>
                  </div>
                </form>
                <div class="w-100 social-media mt-5">
                  <h3>Follow us here</h3>
                  <p>
                    <a href="#">Facebook</a>
                    <a href="#">Twitter</a>
                    <a href="#">Instagram</a>
                    <a href="#">Dribbble</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-stretch">
              <div id="map" class="bg-white"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> 
@endsection
  
