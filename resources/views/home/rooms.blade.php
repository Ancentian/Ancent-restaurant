@extends('home/layouts')

@section('content')

  <section class="hero-wrap hero-wrap-2" style="background-image: url('../assets/images/bg_3.jpg');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 pt-5 text-center">
          <p class="breadcrumbs"><span class="me-2"><a href="index-2.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Rooms <i class="fa fa-chevron-right"></i></span></p>
          <h1 class="mb-0 bread">Cozzy Rooms</h1>
        </div>
      </div>
    </div>
  </section>
  <section class="ftco-section ftco-no-pb ftco-no-pt ftco-booking">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <form action="#" class="booking-form">
            <div class="row g-0">
              <div class="col-md-6 col-lg form-wrap d-flex py-3 py-lg-5 px-4">
                <div class="form-group ps-4 border-0">
                  <label for="#">Check-In</label>
                  <div class="form-field">
                    <div class="icon"><span class="fa fa-calendar"></span></div>
                    <input type="text" class="form-control arrival_date" placeholder="Check-In Date">
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg form-wrap d-flex py-3 py-lg-5 px-4">
                <div class="form-group ps-4">
                  <label for="#">Check-Out</label>
                  <div class="form-field">
                    <div class="icon"><span class="fa fa-calendar"></span></div>
                    <input type="text" class="form-control departure_date" placeholder="Check-Out Date">
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg form-wrap d-flex py-3 py-lg-5 px-4">
                <div class="form-group ps-4">
                  <label for="#">Rooms</label>
                  <div class="form-field">
                    <div class="select-wrap">
                      <div class="icon"><span class="fa fa-chevron-down"></span></div>
                      <select name="" id="" class="form-control">
                        <option value="">Suite</option>
                        <option value="">Family Room</option>
                        <option value="">Classic Room</option>
                        <option value="">Superior Room</option>
                        <option value="">Luxury Room</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg form-wrap d-flex py-3 py-lg-5 px-4">
                <div class="form-group ps-4">
                  <label for="#">Guests</label>
                  <div class="form-field">
                    <div class="select-wrap">
                      <div class="icon"><span class="fa fa-chevron-down"></span></div>
                      <select name="" id="" class="form-control">
                        <option value="">1 Person</option>
                        <option value="">2 Person</option>
                        <option value="">3 Person</option>
                        <option value="">4 Person</option>
                        <option value="">5 Person</option>
                        <option value="">6-9 Person</option>
                        <option value="">10+ Person</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12 col-lg d-flex">
                <div class="form-group d-flex border-0">
                  <div class="form-field w-100 align-items-center d-flex">
                    <a href="#" type="submit" class="d-flex justify-content-center align-items-center align-self-stretch form-control btn btn-primary py-lg-4 py-xl-0"><span>Check Availability</span></a>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <section class="ftco-section bg-light">
    <div class="container-xl">
      <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="flip-left" data-aos-delay="100" data-aos-duration="1000">
          <div class="room-wrap d-md-flex flex-md-column-reverse">
            <a href="room-single.html" class="img img-room" style="background-image: url(../assets/images/room-1.jpg);">
            </a>
            <div class="text p-5 text-center">
              <h3><a href="room-single.html">Suite Room</a></h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <p class="mb-0 mt-2"><span class="me-3 price">$450 <small>/ night</small></span><a href="#" class="btn-custom">Book Now</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="flip-left" data-aos-delay="200" data-aos-duration="1000">
          <div class="room-wrap">
            <a href="room-single.html" class="img img-room" style="background-image: url(../assets/images/room-2.jpg);">
            </a>
            <div class="text p-5 text-center">
              <h3><a href="room-single.html">Family Room</a></h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <p class="mb-0 mt-2"><span class="me-3 price">$450 <small>/ night</small></span><a href="#" class="btn-custom">Book Now</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="flip-left" data-aos-delay="300" data-aos-duration="1000">
          <div class="room-wrap d-md-flex flex-md-column-reverse">
            <a href="room-single.html" class="img img-room" style="background-image: url(../assets/images/room-3.jpg);">
            </a>
            <div class="text p-5 text-center">
              <h3><a href="room-single.html">Deluxe Room</a></h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <p class="mb-0 mt-2"><span class="me-3 price">$450 <small>/ night</small></span><a href="#" class="btn-custom">Book Now</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="flip-left" data-aos-delay="100" data-aos-duration="1000">
          <div class="room-wrap d-md-flex flex-md-column-reverse">
            <a href="room-single.html" class="img img-room" style="background-image: url(../assets/images/room-4.jpg);">
            </a>
            <div class="text p-5 text-center">
              <h3><a href="room-single.html">Classic Room</a></h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <p class="mb-0 mt-2"><span class="me-3 price">$450 <small>/ night</small></span><a href="#" class="btn-custom">Book Now</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="flip-left" data-aos-delay="200" data-aos-duration="1000">
          <div class="room-wrap">
            <a href="room-single.html" class="img img-room" style="background-image: url(../assets/images/room-5.jpg);">
            </a>
            <div class="text p-5 text-center">
              <h3><a href="room-single.html">Superior Room</a></h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <p class="mb-0 mt-2"><span class="me-3 price">$450 <small>/ night</small></span><a href="#" class="btn-custom">Book Now</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="flip-left" data-aos-delay="300" data-aos-duration="1000">
          <div class="room-wrap d-md-flex flex-md-column-reverse">
            <a href="room-single.html" class="img img-room" style="background-image: url(../assets/images/room-6.jpg);">
            </a>
            <div class="text p-5 text-center">
              <h3><a href="room-single.html">Luxury Room</a></h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <p class="mb-0 mt-2"><span class="me-3 price">$450 <small>/ night</small></span><a href="#" class="btn-custom">Book Now</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col text-center">
          <div class="block-27">
            <ul>
              <li><a href="#">&lt;</a></li>
              <li class="active"><span>1</span></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">&gt;</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <hr>
  <section class="ftco-section">
    <div class="container-xl">
      <div class="row justify-content-center">
        <div class="col-md-8 heading-section text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
          <span class="subheading">Unwind Services</span>
          <h2 class="mb-4">Explore Our Hotel Services</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-3 col-xl-2 text-center d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
          <a href="#" class="services">
            <div class="icon"><span class="flaticon-wifi-signal"></span></div>
            <div class="text">
              <h2>Free Wifi</h2>
            </div>
          </a>
        </div>
        <div class="col-md-3 col-xl-2 text-center d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
          <a href="#" class="services">
            <div class="icon"><span class="flaticon-online-booking"></span></div>
            <div class="text">
              <h2>Easy Booking</h2>
            </div>
          </a>
        </div>
        <div class="col-md-3 col-xl-2 text-center d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
          <a href="#" class="services">
            <div class="icon"><span class="flaticon-cooking"></span></div>
            <div class="text">
              <h2>Restaurant</h2>
            </div>
          </a>
        </div>
        <div class="col-md-3 col-xl-2 text-center d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
          <a href="#" class="services">
            <div class="icon"><span class="flaticon-swimming-pool"></span></div>
            <div class="text">
              <h2>Swimming Pool</h2>
            </div>
          </a>
        </div>
        <div class="col-md-3 col-xl-2 text-center d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
          <a href="#" class="services">
            <div class="icon"><span class="flaticon-cosmetics"></span></div>
            <div class="text">
              <h2>Beauty &amp; Health</h2>
            </div>
          </a>
        </div>
        <div class="col-md-3 col-xl-2 text-center d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
          <a href="#" class="services">
            <div class="icon"><span class="flaticon-reception"></span></div>
            <div class="text">
              <h2>Help &amp; Support</h2>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

    
@endsection