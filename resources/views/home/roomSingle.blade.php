@extends('home/layouts')

@section('content')

  <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_3.jpg');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 pt-5 text-center">
          <p class="breadcrumbs"><span class="me-2"><a href="index-2.html">Home <i class="fa fa-chevron-right"></i></a></span> <span class="me-2"><a href="blog.html">Blog <i class="fa fa-chevron-right"></i></a></span> <span>Room Single <i class="fa fa-chevron-right"></i></span></p>
          <h1 class="mb-0 bread">Room Details</h1>
        </div>
      </div>
    </div>
  </section>
  <section class="ftco-section ftco-room-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 blog-single">
          <div class="carousel-room">
            <div class="item">
              <div class="room-detail img" style="background-image: url(images/room-1.jpg)">
              </div>
            </div>
            <div class="item">
              <div class="room-detail img" style="background-image: url(images/room-1.jpg)">
              </div>
            </div>
            <div class="item">
              <div class="room-detail img" style="background-image: url(images/room-1.jpg)">
              </div>
            </div><div class="item">
              <div class="room-detail img" style="background-image: url(images/room-1.jpg)">
              </div>
            </div>
          </div>
          <h2>Luxury Room</h2>
          <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
          <div class="d-md-flex mt-5 mb-5">
            <ul class="list">
              <li><span>Max:</span> 3 Persons</li>
              <li><span>Size:</span> 45 m2</li>
            </ul>
            <ul class="list ms-md-5">
              <li><span>View:</span> Sea View</li>
              <li><span>Bed:</span> 1</li>
            </ul>
          </div>
          <div class="properties-single mb-5 mt-4">
            <h4 class="mb-4">Review &amp; Ratings</h4>
            <div class="row">
              <div class="col-md-6">
                <form method="post" class="star-rating">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">
                      <p class="rate"><span><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 10K+ Ratings</span></p>
                    </label>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">
                      <p class="rate"><span><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i> 6k+ Ratings</span></p>
                    </label>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">
                      <p class="rate"><span><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i> 0 Ratings</span></p>
                    </label>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">
                      <p class="rate"><span><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i> 0 Ratings</span></p>
                    </label>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">
                      <p class="rate"><span><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i> 0 Ratings</span></p>
                    </label>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="row justify-content-center mb-5">
            <div class="col-md-12 heading-section" data-aos="fade-up" data-aos-duration="1000">
              <h2>Related Rooms</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 d-flex align-items-stretch" data-aos="flip-left" data-aos-delay="200" data-aos-duration="1000">
              <div class="room-wrap">
                <a href="#" class="img img-room" style="background-image: url(images/room-2.jpg);">
                </a>
                <div class="text p-5 text-center">
                  <h3><a href="#">Family Room</a></h3>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <p class="mb-0 mt-2"><span class="me-3 price">$450 <small>/ night</small></span><a href="#" class="btn-custom">Book Now</a></p>
                </div>
              </div>
            </div>
            <div class="col-md-6 d-flex align-items-stretch" data-aos="flip-left" data-aos-delay="300" data-aos-duration="1000">
              <div class="room-wrap d-md-flex flex-md-column-reverse">
                <a href="#" class="img img-room" style="background-image: url(images/room-3.jpg);">
                </a>
                <div class="text p-5 text-center">
                  <h3><a href="#">Deluxe Room</a></h3>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <p class="mb-0 mt-2"><span class="me-3 price">$450 <small>/ night</small></span><a href="#" class="btn-custom">Book Now</a></p>
                </div>
              </div>
            </div>
          </div>
        </div> 
        <div class="col-lg-4 sidebar ps-md-4">
          <div class="sidebar-box bg-light rounded">
            <form action="#" class="search-form">
              <div class="form-group">
                <span class="icon fa fa-search"></span>
                <input type="text" class="form-control" placeholder="Search...">
              </div>
            </form>
          </div>
          <div class="sidebar-box">
            <h3>Hotel Services</h3>
            <div class="d-md-flex">
              <ul class="categories me-md-4">
                <li><a href="#">Free Wifi</a></li>
                <li><a href="#">Easy Booking</a></li>
                <li><a href="#">Restaurant</a></li>
                <li><a href="#">Swimming Pool</a></li>
              </ul>
              <ul class="categories ms-md-4">
                <li><a href="#">Beauty &amp; Health</a></li>
                <li><a href="#">60" Flatscreen TV</a></li>
                <li><a href="#">Cold Aircondition</a></li>
                <li><a href="#">Help &amp; Support</a></li>
              </ul>
            </div>
          </div>
          <div class="sidebar-box">
            <h3>Recent Blog</h3>
            <div class="block-21 mb-4 d-flex">
              <a class="blog-img me-4" style="background-image: url(images/image_1.jpg);"></a>
              <div class="text">
                <h3 class="heading"><a href="#">Far far away, behind the word mountains</a></h3>
                <div class="meta">
                  <div><a href="#"><span class="fa fa-calendar"></span> December 24, 2020</a></div>
                  <div><a href="#"><span class="fa fa-user"></span> Admin</a></div>
                  <div><a href="#"><span class="fa fa-comment"></span> 19</a></div>
                </div>
              </div>
            </div>
            <div class="block-21 mb-4 d-flex">
              <a class="blog-img me-4" style="background-image: url(images/image_2.jpg);"></a>
              <div class="text">
                <h3 class="heading"><a href="#">Far far away, behind the word mountains</a></h3>
                <div class="meta">
                  <div><a href="#"><span class="fa fa-calendar"></span> December 24, 2020</a></div>
                  <div><a href="#"><span class="fa fa-user"></span> Admin</a></div>
                  <div><a href="#"><span class="fa fa-comment"></span> 19</a></div>
                </div>
              </div>
            </div>
            <div class="block-21 mb-4 d-flex">
              <a class="blog-img me-4" style="background-image: url(images/image_3.jpg);"></a>
              <div class="text">
                <h3 class="heading"><a href="#">Far far away, behind the word mountains</a></h3>
                <div class="meta">
                  <div><a href="#"><span class="fa fa-calendar"></span> December 24, 2020</a></div>
                  <div><a href="#"><span class="fa fa-user"></span> Admin</a></div>
                  <div><a href="#"><span class="fa fa-comment"></span> 19</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="sidebar-box">
            <h3>Tag Cloud</h3>
            <div class="tagcloud">
              <a href="#" class="tag-cloud-link">hotel</a>
              <a href="#" class="tag-cloud-link">pool</a>
              <a href="#" class="tag-cloud-link">tv</a>
              <a href="#" class="tag-cloud-link">aircon</a>
              <a href="#" class="tag-cloud-link">relax</a>
              <a href="#" class="tag-cloud-link">cozzy</a>
              <a href="#" class="tag-cloud-link">room</a>
              <a href="#" class="tag-cloud-link">resto</a>
              <a href="#" class="tag-cloud-link">bar</a>
            </div>
          </div>
          <div class="sidebar-box">
            <h3>Paragraph</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
          </div>
        </div>
      </div>
    </div>
  </section> 
    
@endsection