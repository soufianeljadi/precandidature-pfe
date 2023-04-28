<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
  <title>ESTFBS - Incscription en licences professionnelles </title>

  <!-- Favicon -->
  <link rel="icon" href="{{ asset('assets/img/estfbs-ico.png') }}" type="image/x-icon">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">

  <!-- Fontawesome CSS -->
  <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
  <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

  <!-- Select2 CSS -->
  <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

  <!-- Aos CSS -->
  <link rel="stylesheet" href="assets/plugins/aos/aos.css">

  <!-- Slick Slider CSS -->
  <link rel="stylesheet" href="assets/plugins/slick/slick.css">
  <link rel="stylesheet" href="assets/plugins/slick/slick-theme.css">

  <!-- Main CSS -->
  <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

  <!-- Main Wrapper -->
  <div class="main-wrapper">

    <!-- Header -->
    @include('layouts.frontend.header')
    <!-- /Header -->

    <!-- Home Banner -->
    <section class="section section-search-eight">
      <div class="container">
        <div class="banner-wrapper-eight m-auto text-center">
          <div id="accueil" class="banner-header aos" data-aos="fade-up">
            <h1>Portail de pré-candidature en ligne aux formations<span> <br> licences professionnelles <br> </span>
              2023-2024</h1>
            <p>Bienvenue sur le Portail de pré-candidature en ligne aux formations licences professionnelles de L'école
              Supérieure de Technologie – Fkih Ben Salah.
            </p>
          </div>

          <!-- Search -->
          {{-- <div class="search-box-eight aos" data-aos="fade-up">
            <form action="search.html">
              <div class="form-search">
                <div class="form-inner">
                  <div class="form-group search-location-eight">
                    <i class="material-icons">my_location</i>
                    <select class="form-control select">
                      <option>Location</option>
                      <option>Japan</option>
                      <option>France</option>
                    </select>
                  </div>
                  <div class="form-group search-info-eight">
                    <i class="material-icons">location_city</i>
                    <input type="text" class="form-control"
                      placeholder="Search School, Online educational centers, etc">
                  </div>
                  <button type="submit" class="btn search-btn-eight mt-0">Search <i
                      class="fas fa-long-arrow-alt-right"></i></button>
                </div>
              </div>
            </form>
          </div> --}}
          <!-- /Search -->
          <div class="row  aos" data-aos="fade-up">
            <div class="statistics-list-eight">
              {{-- <div class="statistics-icon-eight">
                <i class="fas fa-history"></i>
              </div> --}}
              <div class="statistics-content-eight">
                {{-- <span>120+</span> --}}
                <h3>La plateforme de pré-candidature aux formations licences professionnelles permet aux
                  candidats de postuler
                  aux formations licences professionnelles accréditées dans établissements relevant de L'école
                  Supérieure de Technologie – Fkih Ben Salah en ligne.</h3>
              </div>
            </div>

          </div>

          <a href="#" class="go-down-lin" style="color: #FE9445"><i class="fas fa-arrow-down"></i></a>
        </div>
      </div>
    </section>
    <!-- /Home Banner -->

    <!-- Work Flow -->
    <section class="section how-it-works-section">
      <div class="container">
        <div id="procedure" class="section-header-eight text-center aos" data-aos="fade-up">
          <span>ESTFBS</span>
          <h2>Comment ça fonctionne ?</h2>
          <p class="sub-title">plateforme de pré-candidature aux formations licences professionnelles</p>
          <div class="sec-dots">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
        <div class="row justify-content-center feature-list">
          <div class="col-12 col-md-4 col-lg-3 aos" data-aos="fade-up">
            <div class="feature-grid text-center top-box">
              <div class="feature-header-eight">
                <div class="feature-icon-eight">
                  <span class="circle bg-green"><i class="fas fa-sign-in-alt"></i></span>
                </div>
                <div class="feature-cont">
                  <div class="feature-text-eight">La plateforme</div>
                </div>
              </div>
              <p>La plateforme de pré- candidature aux formations licence professionnelle permet aux candidats de
                postuler aux
                formations licences professionnelles accréditées dans L'école Supérieure de Technologie – Fkih Ben Salah
                exclustvement en ligne.</p>
              <span class="text-green">01</span>
            </div>
          </div>
          <div class="col-12 col-md-4 col-lg-3 offset-lg-1 aos" data-aos="fade-up">
            <div class="feature-grid text-center">
              <div class="feature-header-eight">
                <div class="feature-icon-eight">
                  <span class="circle bg-blue"><i class="fas fa-file-upload"></i></span>
                </div>
                <div class="feature-cont">
                  <div class="feature-text-eight">Les Informations personnelles</div>
                </div>
              </div>
              <p>Informations personnelles Avant de postuler å une formation licence professionnelle, le candidat est
                invité å saisir
                informations personnelles, charger sa photo didentité, son CV et sa Carte Nationale dldentité
                Electronique (Scannée recto- verso).</p>
              <span class="text-blue">02</span>
            </div>
          </div>
          <div class="col-12 col-md-4 col-lg-3 offset-lg-1 aos" data-aos="fade-up">
            <div class="feature-grid text-center top-box">
              <div class="feature-header-eight">
                <div class="feature-icon-eight">
                  <span class="circle bg-orange"><i class="fas fa-globe-africa"></i></span>
                </div>
                <div class="feature-cont">
                  <div class="feature-text-eight">Diplomes étrangers</div>
                </div>
              </div>
              <p>Diplomes étrangers Pour les diplomes étrangers le candidat doit charger l'attestation d'équivalence en
                format JPEG - PDF publiée au bulletin offciel.</p>
              <span class="text-orange">03</span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Work Flow -->

    <!-- Popular Mendors -->
    {{-- <section class="section popular-mendors">
      <div class="mendor-title">
        <div class="section-header-eight text-center">
          <div class="container aos" data-aos="fade-up">
            <span>Mentoring Goals</span>
            <h2 class="text-white">Popular Mentors</h2>
            <p class="sub-title text-white"> Choose your most popular leaning mentors, it will help you to achieve your
              professional goals..</p>
            <div class="sec-dots">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>
        </div>
      </div>
      <div class="mendor-list">
        <div class="container aos" data-aos="fade-up">
          <div class="mendor-slider slick">

            <!-- Mentor Item -->
            <div class="mendor-box">
              <div class="mendor-img">
                <a href="profile.html">
                  <img class="img-fluid" alt="" src="assets/img/mendor/mendor-01.jpg">
                </a>
                <div class="mendor-country"><i class="fas fa-map-marker-alt"></i> Paris, France</div>
              </div>
              <div class="mendor-content">
                <h3 class="title"><a href="profile.html">Donna Yancey</a></h3>
                <div class="mendor-course">
                  Digital Marketer
                </div>
                <div class="mendor-price-list">
                  <div class="mendor-price">$100 <span>/ hr</span></div>
                  <div class="mendor-rating">
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star"></i>
                  </div>
                </div>
              </div>
            </div>
            <!-- /Mentor Item -->

            <!-- Mentor Item -->
            <div class="mendor-box">
              <div class="mendor-img">
                <a href="profile.html">
                  <img class="img-fluid" alt="" src="assets/img/mendor/mendor-02.jpg">
                </a>
                <div class="mendor-country"><i class="fas fa-map-marker-alt"></i> Paris, France</div>
              </div>
              <div class="mendor-content">
                <h3 class="title"><a href="profile.html">James Amen</a></h3>
                <div class="mendor-course">
                  UNIX, Calculus, Trigonometry
                </div>
                <div class="mendor-price-list">
                  <div class="mendor-price">$500 <span>/ hr</span></div>
                  <div class="mendor-rating">
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star"></i>
                  </div>
                </div>
              </div>
            </div>
            <!-- /Mentor Item -->

            <!-- Mentor Item -->
            <div class="mendor-box">
              <div class="mendor-img">
                <a href="profile.html">
                  <img class="img-fluid" alt="" src="assets/img/mendor/mendor-03.jpg">
                </a>
                <div class="mendor-country"><i class="fas fa-map-marker-alt"></i> Paris, France</div>
              </div>
              <div class="mendor-content">
                <h3 class="title"><a href="profile.html">Marvin Downey</a></h3>
                <div class="mendor-course">
                  ASP.NET,Computer Gaming
                </div>
                <div class="mendor-price-list">
                  <div class="mendor-price">$400 <span>/ hr</span></div>
                  <div class="mendor-rating">
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star"></i>
                  </div>
                </div>
              </div>
            </div>
            <!-- /Mentor Item -->

            <!-- Mentor Item -->
            <div class="mendor-box">
              <div class="mendor-img">
                <a href="profile.html">
                  <img class="img-fluid" alt="" src="assets/img/mendor/mendor-04.jpg">
                </a>
                <div class="mendor-country"><i class="fas fa-map-marker-alt"></i> Paris, France</div>
              </div>
              <div class="mendor-content">
                <h3 class="title"><a href="profile.html">Betty Hairston</a></h3>
                <div class="mendor-course">
                  Computer Programming
                </div>
                <div class="mendor-price-list">
                  <div class="mendor-price">$300 <span>/ hr</span></div>
                  <div class="mendor-rating">
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star"></i>
                  </div>
                </div>
              </div>
            </div>
            <!-- /Mentor Item -->

            <!-- Mentor Item -->
            <div class="mendor-box">
              <div class="mendor-img">
                <a href="profile.html">
                  <img class="img-fluid" alt="" src="assets/img/mendor/mendor-03.jpg">
                </a>
                <div class="mendor-country"><i class="fas fa-map-marker-alt"></i> Paris, France</div>
              </div>
              <div class="mendor-content">
                <h3 class="title"><a href="profile.html">Jose Anderson</a></h3>
                <div class="mendor-course">
                  Digital Marketer
                </div>
                <div class="mendor-price-list">
                  <div class="mendor-price">$400 <span>/ hr</span></div>
                  <div class="mendor-rating">
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star"></i>
                  </div>
                </div>
              </div>
            </div>
            <!-- /Mentor Item -->

          </div>
        </div>
      </div>
    </section> --}}
    <!-- /Popular Mendors -->

    <!-- Path section start -->
    {{-- <section class="section path-section-eight">
      <div class="section-header-eight text-center aos" data-aos="fade-up">
        <div class="container">
          <span>Choose the</span>
          <h2>Different All Learning Paths</h2>
          <p class="sub-title">Are you looking to join online institutions? Now it's very simple, Sign up with
            mentoring</p>
          <div class="sec-dots">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
      <div class="course-sec">
        <div class="container">
          <div class="row">
            <!-- Course Item -->
            <div class="col-12 col-md-6 col-lg-3 aos" data-aos="fade-up">
              <div class="course-item">
                <a href="search.html" class="course-img">
                  <div class="image-col-merge">
                    <img src="assets/img/course/course-01.jpg" alt="learn">
                    <div class="course-text">
                      <h5>Digital Marketer</h5>
                      <div class="d-flex justify-content-between">
                        <p>400 Mentors</p>
                        <p>10 Courses</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <!-- /Course Item -->

            <!-- Course Item -->
            <div class="col-12 col-md-6 col-lg-3 aos" data-aos="fade-up">
              <div class="course-item">
                <a href="search.html" class="course-img">
                  <div class="image-col-merge">
                    <img src="assets/img/course/course-02.jpg" alt="learn">
                    <div class="course-text">
                      <h5>Ui designer</h5>
                      <div class="d-flex justify-content-between">
                        <p>300 Mentors</p>
                        <p>12 Courses</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <!-- /Course Item -->

            <!-- Course Item -->
            <div class="col-12 col-md-6 col-lg-3 aos" data-aos="fade-up">
              <div class="course-item">
                <a href="search.html" class="course-img">
                  <div class="image-col-merge">
                    <img src="assets/img/course/course-03.jpg" alt="learn">
                    <div class="course-text">
                      <h5>IT Security</h5>
                      <div class="d-flex justify-content-between">
                        <p>200 Mentors</p>
                        <p>20 Courses</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <!-- /Course Item -->

            <!-- Course Item -->
            <div class="col-12 col-md-6 col-lg-3 aos" data-aos="fade-up">
              <div class="course-item">
                <a href="search.html" class="course-img">
                  <div class="image-col-merge">
                    <img src="assets/img/course/course-04.jpg" alt="learn">
                    <div class="course-text">
                      <h5>Front-End Developer</h5>
                      <div class="d-flex justify-content-between">
                        <p>100 Mentors</p>
                        <p>11 Courses</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <!-- /Course Item -->

            <!-- Course Item -->
            <div class="col-12 col-md-6 col-lg-3 aos" data-aos="fade-up">
              <div class="course-item">
                <a href="search.html" class="course-img">
                  <div class="image-col-merge">
                    <img src="assets/img/course/course-05.jpg" alt="learn">
                    <div class="course-text">
                      <h5>Web Developer</h5>
                      <div class="d-flex justify-content-between">
                        <p>500 Mentors</p>
                        <p>30 Courses</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <!-- /Course Item -->

            <!-- Course Item -->
            <div class="col-12 col-md-6 col-lg-3 aos" data-aos="fade-up">
              <div class="course-item">
                <a href="search.html" class="course-img">
                  <div class="image-col-merge">
                    <img src="assets/img/course/course-06.jpg" alt="learn">
                    <div class="course-text">
                      <h5>Administrator</h5>
                      <div class="d-flex justify-content-between">
                        <p>200 Mentors</p>
                        <p>10 Courses</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <!-- /Course Item -->

            <!-- Course Item -->
            <div class="col-12 col-md-6 col-lg-3 aos" data-aos="fade-up">
              <div class="course-item">
                <a href="search.html" class="course-img">
                  <div class="image-col-merge">
                    <img src="assets/img/course/course-07.jpg" alt="learn">
                    <div class="course-text">
                      <h5>Project Manager</h5>
                      <div class="d-flex justify-content-between">
                        <p>600 Mentors</p>
                        <p>40 Courses</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <!-- /Course Item -->

            <!-- Course Item -->
            <div class="col-12 col-md-6 col-lg-3 aos" data-aos="fade-up">
              <div class="course-item">
                <a href="search.html" class="course-img">
                  <div class="image-col-merge">
                    <img src="assets/img/course/course-08.jpg" alt="learn">
                    <div class="course-text">
                      <h5>PHP Developer</h5>
                      <div class="d-flex justify-content-between">
                        <p>400 Mentors</p>
                        <p>10 Courses</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <!-- /Course Item -->

          </div>
          <div class="view-all text-center aos" data-aos="fade-up">
            <a href="search.html" class="btn btn-primary btn-view">View All</a>
          </div>
        </div>
      </div>
    </section> --}}
    <!-- Path section end -->

    <!-- Profile Section -->
    {{-- <section class="section profile-section">
      <div class="section-header-eight text-center aos" data-aos="fade-up">
        <div class="container">
          <span>MOST VIEWED</span>
          <h2>Featured Profile of this week</h2>
          <p class="sub-title">Are you looking to join online institutions? Now it's very simple, Sign up with
            mentoring</p>
          <div class="sec-dots">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <!-- Profile Item -->
          <div class="col-12 col-md-6 col-lg-3 aos" data-aos="fade-up">
            <div class="profile-list">
              <div class="profile-detail">
                <div class="profile-img-eight">
                  <img class="img-fluid" alt="" src="assets/img/mendor/mendor-01.jpg">
                </div>
                <div class="profile-content">
                  <h4>Donna Yancey</h4>
                  <p>UNIX, Calculus, Trigonometry</p>
                </div>
              </div>
              <div class="profile-rating">
                <div class="mendor-rating">
                  <i class="fas fa-star filled"></i>
                  <i class="fas fa-star filled"></i>
                  <i class="fas fa-star filled"></i>
                  <i class="fas fa-star filled"></i>
                  <i class="fas fa-star"></i>
                </div>
                <div class="price-box">$500 <span>/ hr</span></div>
              </div>
            </div>
          </div>
          <!-- /Profile Item -->

          <!-- Profile Item -->
          <div class="col-12 col-md-6 col-lg-3 aos" data-aos="fade-up">
            <div class="profile-list">
              <div class="profile-detail">
                <div class="profile-img-eight">
                  <img class="img-fluid" alt="" src="assets/img/mendor/mendor-02.jpg">
                </div>
                <div class="profile-content">
                  <h4>Betty Hairston</h4>
                  <p>Computer Programming</p>
                </div>
              </div>
              <div class="profile-rating">
                <div class="mendor-rating">
                  <i class="fas fa-star filled"></i>
                  <i class="fas fa-star filled"></i>
                  <i class="fas fa-star filled"></i>
                  <i class="fas fa-star filled"></i>
                  <i class="fas fa-star"></i>
                </div>
                <div class="price-box">$200 <span>/ hr</span></div>
              </div>
            </div>
          </div>
          <!-- /Profile Item -->

          <!-- Profile Item -->
          <div class="col-12 col-md-6 col-lg-3 aos" data-aos="fade-up">
            <div class="profile-list">
              <div class="profile-detail">
                <div class="profile-img-eight">
                  <img class="img-fluid" alt="" src="assets/img/mendor/mendor-03.jpg">
                </div>
                <div class="profile-content">
                  <h4>Jose Anderson</h4>
                  <p>ASP.NET,Computer Gaming</p>
                </div>
              </div>
              <div class="profile-rating">
                <div class="mendor-rating">
                  <i class="fas fa-star filled"></i>
                  <i class="fas fa-star filled"></i>
                  <i class="fas fa-star filled"></i>
                  <i class="fas fa-star filled"></i>
                  <i class="fas fa-star"></i>
                </div>
                <div class="price-box">$300 <span>/ hr</span></div>
              </div>
            </div>
          </div>
          <!-- /Profile Item -->

          <!-- Profile Item -->
          <div class="col-12 col-md-6 col-lg-3 aos" data-aos="fade-up">
            <div class="profile-list">
              <div class="profile-detail">
                <div class="profile-img-eight">
                  <img class="img-fluid" alt="" src="assets/img/mendor/mendor-04.jpg">
                </div>
                <div class="profile-content">
                  <h4>James Amen</h4>
                  <p>Digital Marketer</p>
                </div>
              </div>
              <div class="profile-rating">
                <div class="mendor-rating">
                  <i class="fas fa-star filled"></i>
                  <i class="fas fa-star filled"></i>
                  <i class="fas fa-star filled"></i>
                  <i class="fas fa-star filled"></i>
                  <i class="fas fa-star"></i>
                </div>
                <div class="price-box">$400 <span>/ hr</span></div>
              </div>
            </div>
          </div>
          <!-- /Profile Item -->
        </div>
      </div>
    </section> --}}
    <!-- /Profile Section -->

    <!-- Statistics Section -->
    {{-- <section class="section statistics-section-eight">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-4 aos" data-aos="fade-up">
            <div class="statistics-list-eight">
              <div class="statistics-icon-eight">
                <i class="fas fa-street-view"></i>
              </div>
              <div class="statistics-content-eight">
                <span>500+</span>
                <h3>Happy Clients</h3>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4 aos" data-aos="fade-up">
            <div class="statistics-list-eight">
              <div class="statistics-icon-eight">
                <i class="fas fa-history"></i>
              </div>
              <div class="statistics-content-eight">
                <span>120+</span>
                <h3>Online Appointments</h3>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4 aos" data-aos="fade-up">
            <div class="statistics-list-eight">
              <div class="statistics-icon-eight">
                <i class="fas fa-user-check"></i>
              </div>
              <div class="statistics-content-eight">
                <span>100%</span>
                <h3>Job Satisfaction</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> --}}
    <!-- /Statistics Section -->

    <!-- Blog Section -->
    {{-- <section class="section section-blogs-eight">
      <div class="container">

        <!-- Section Header -->
        <div class="section-header-eight text-center aos" data-aos="fade-up">
          <span>LATEST</span>
          <h2>Blogs & News</h2>
          <p class="sub-title">Are you looking to join online institutions? Now it's very simple, Sign up with
            mentoring</p>
          <div class="sec-dots">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
        <!-- /Section Header -->

        <div class="row blog-grid-row justify-content-center">
          <div class="col-md-6 col-lg-4 col-sm-12 aos" data-aos="fade-up">

            <!-- Blog Post -->
            <div class="blog-card">
              <div class="blog-card-image">
                <a href="blog-details.html"><img class="img-fluid" src="assets/img/blog/blog-01.jpg"
                    alt="Post Image"></a>
              </div>
              <div class="blog-card-content">
                <div class="blog-month">04 <span>Dec</span></div>
                <ul class="meta-item-eight">
                  <li>
                    <div class="post-author-eight">
                      <a href="blog-details.html"><span>Tyrone Roberts</span></a>
                    </div>
                  </li>
                </ul>
                <h3 class="blog-title-eight"><a href="blog-details.html">What is Lorem Ipsum? Lorem Ipsum is
                    simply</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
                <a href="blog-details.html" class="read">Read more</a>
              </div>
            </div>
            <!-- /Blog Post -->

          </div>

          <div class="col-md-6 col-lg-4 col-sm-12 aos" data-aos="fade-up">

            <!-- Blog Post -->
            <div class="blog-card">
              <div class="blog-card-image">
                <a href="blog-details.html"><img class="img-fluid" src="assets/img/blog/blog-16.jpg"
                    alt="Post Image"></a>
              </div>
              <div class="blog-card-content">
                <div class="blog-month">05 <span>Jan</span></div>
                <ul class="meta-item-eight">
                  <li>
                    <div class="post-author-eight">
                      <a href="blog-details.html"><span>Brittany Garcia</span></a>
                    </div>
                  </li>
                </ul>
                <h3 class="blog-title-eight"><a href="blog-details.html">Contrary to popular belief, Lorem Ipsum
                    is</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
                <a href="blog-details.html" class="read">Read more</a>
              </div>
            </div>
            <!-- /Blog Post -->

          </div>

          <div class="col-md-6 col-lg-4 col-sm-12 aos" data-aos="fade-up">

            <!-- Blog Post -->
            <div class="blog-card">
              <div class="blog-card-image">
                <a href="blog-details.html"><img class="img-fluid" src="assets/img/blog/blog-17.jpg"
                    alt="Post Image"></a>
              </div>
              <div class="blog-card-content">
                <div class="blog-month">06 <span>May</span></div>
                <ul class="meta-item-eight">
                  <li>
                    <div class="post-author-eight">
                      <a href="blog-details.html"><span>Allen Davis</span></a>
                    </div>
                  </li>
                </ul>
                <h3 class="blog-title-eight"><a href="blog-details.html">The standard chunk of Lorem Ipsum used</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
                <a href="blog-details.html" class="read">Read more</a>
              </div>
            </div>
            <!-- /Blog Post -->

          </div>
        </div>
        <div class="view-all text-center aos" data-aos="fade-up">
          <a href="blog-list.html" class="btn btn-primary btn-view">View All</a>
        </div>
      </div>
    </section> --}}
    <!-- /Blog Section -->

    <!-- Footer -->
    @include('layouts.frontend.footer')
    <!-- /Footer -->

  </div>
  <!-- /Main Wrapper -->

  <!-- jQuery -->
  <script src="assets/js/jquery-3.6.0.min.js"></script>

  <!-- Bootstrap Bundle JS -->
  <script src="assets/js/bootstrap.bundle.min.js"></script>

  <!-- Select2 JS -->
  <script src="assets/plugins/select2/js/select2.min.js"></script>

  <!-- Slick Slider JS -->
  <script src="assets/plugins/slick/slick.js"></script>

  <!-- Aos JS -->
  <script src="assets/plugins/aos/aos.js"></script>

  <!-- Custom JS -->
  <script src="assets/js/script.js"></script>

</body>

</html>
