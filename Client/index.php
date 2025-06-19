<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script type="text/javascript">
    window.onload = function () {
      window.setTimeout(
        function () { window.scrollTo(0, 0); },
        10
      );
    };
  </script>

  <title>Journey</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  [
  <link href="../assets/css/style.css" rel="stylesheet">]



  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">Journey.</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li class="dropdown"><a href=""><span>Trips</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">New trip</a></li>
              <li><a href="#">Manage trips</a></li>

            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Stations</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#cities">Cairo</a></li>
              <li><a href="#cities">Alexandria</a></li>
              <li><a href="#cities">Aswan</a></li>
              <li><a href="#cities">Luxor</a></li>
              <li><a href="#cities">Banha</a></li>
              <li><a href="#cities">Tanta</a></li>
              <li><a href="#cities">Suez</a></li>
              <li><a href="#cities">Port said</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#track">Track train</a></li>
          <li><a class="nav-link scrollto" href="#fAQ">FAQ</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li class="dropdown"><a href="log in.html"><svg xmlns="http://www.w3.org/2000/svg" width="21" height="21"
                fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16" id="sign in">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                <path fill-rule="evenodd"
                  d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
              </svg> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="profile.php">Dashboard</a></li>

              <li><a href="../Auth/log in.php">Log in</a></li>
            </ul>
          </li>




        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->




  <!-- ======= Hero Section ======= -->





  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-9 text-center">
          <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

          <!--Card-->
          <div class="card shadow mb-5 bg-white rounded">

            <!--Card-Body-->
            <div class="card-body">

              <!--First Row-->
              <div class="row mb-2 mt-2">

                <label class="radiobtn"><input type="radio" name="gender" value="male">One Way</label>
                <label class="radiobtn"><input type="radio" name="gender" value="male">Round Trip</label>

              </div>


              <!--Second Row-->
              <div class="row">

                <div class="col-sm-6">
                  <select class="browser-default custom-select mb-4" id="select">
                    <option value="" disabled="" selected="">From</option>
                    <option value="1">Cairo</option>
                    <option value="2">Alexandria</option>
                    <option value="3">Aswan</option>
                    <option value="4">Luxor</option>
                    <option value="5">Suez</option>
                    <option value="6">Port said</option>
                  </select>
                </div>

                <div class="col-sm-6">
                  <select class="browser-default custom-select mb-4" id="select">
                    <option value="" disabled="" selected="">To</option>
                    <option value="1">Cairo</option>
                    <option value="2">Alexandria</option>
                    <option value="3">Aswan</option>
                    <option value="4">Luxor</option>
                    <option value="5">Suez</option>
                    <option value="6">Port said</option>
                  </select>
                </div>

              </div>


              <!--Third Row-->
              <div class="row">

                <div class="col-sm-12">
                  <input placeholder="Departing date" type="date" id="date-picker-example"
                    class="form-control datepicker mb-4" style="font-family:Arial, FontAwesome">
                </div>


              </div>


              <!--Fifth Row-->
              <div class="row">

                <div class="col-sm-4">
                  <select class="browser-default custom-select mb-4" id="select">
                    <option value="" disabled="" selected="">Kids (1-17)</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="6">8</option>
                  </select>
                </div>

                <div class="col-sm-4">
                  <select class="browser-default custom-select mb-4" id="select">
                    <option value="" disabled="" selected="">Adults (18-64)</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="6">8</option>
                  </select>
                </div>

                <div class="col-sm-4">
                  <select class="browser-default custom-select mb-4" id="select">
                    <option value="" disabled="" selected="">Seniors (65+)</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="6">8</option>
                  </select>
                </div>




              </div>

              <a href="available trains.php" class="btn btn-primary float-right mt-5">Find Flights</a>
            </div>
          </div>
        </div>
      </div>


      <main id="main">








    </div>
    <div class="swiper-pagination"></div>
    </div>

    </div>
  </section><!-- End Testimonials Section -->

  <!-- ======= cities Section ======= -->
  <section id="cities" class="cities section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Cities</h2>
        <p>From the timeless wonders of the Pyramids to the bustling markets of Cairo, Egypt's cities are a treasure
          trove of ancient history, vibrant culture, and unforgettable experiences waiting to be explored</p>
      </div>
      <br>

      <div class="row">

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
          <div class="member">
            <div class="member-img">
              <img src="../assets/img/img.train/cairo.jpg" class="img-fluid" alt="">

            </div>
            <div class="member-info">
              <h4>Cairo</h4>

            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
          <div class="member">
            <div class="member-img">
              <img src="../assets/img/img.train/Alexandria.jpg" class="img-fluid" alt="">

            </div>
            <div class="member-info">
              <h4>Alexandria</h4>

            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
          <div class="member">
            <div class="member-img">
              <img src="../assets/img/img.train/Aswan.jpg" class="img-fluid" alt="">

            </div>
            <div class="member-info">
              <h4>Aswan</h4>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
          <div class="member">
            <div class="member-img">
              <img src="../assets/img/img.train/luxor.jpg" class="img-fluid" alt="">

            </div>
            <div class="member-info">
              <h4>Luxor</h4>

            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
          <div class="member">
            <div class="member-img">
              <img src="../assets/img/img.train/banha.jpg" class="img-fluid" alt="">
            </div>
            <div class="member-info">
              <h4>Banha</h4>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
          <div class="member">
            <div class="member-img">
              <img src="../assets/img/img.train/tanta.jpg" class="img-fluid" alt="">

            </div>
            <div class="member-info">
              <h4>Tanta</h4>

            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
          <div class="member">
            <div class="member-img">
              <img src="../assets/img/img.train/suez.jpg" class="img-fluid" alt="">

            </div>
            <div class="member-info">
              <h4>Suez</h4>

            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
          <div class="member">
            <div class="member-img">
              <img src="../assets/img/img.train/port said.jpg" class="img-fluid" alt="">

            </div>
            <div class="member-info">
              <h4>Port said</h4>

            </div>
          </div>
        </div>


      </div>

    </div>
  </section>
  <!-- ======= End cities Section ======= -->





  <!-- ======= track Section ======= -->
  <section id="track" class="cta">
    <div class="container" data-aos="zoom-in">
      <div class="text-center">
        <h3>Track train</h3>
        <p> Enter your PNR below</p>
        <nav class="navbar justify-content-center">
          <form class="form-inline" action="/action_page.php">
            <input class="form-control mr-sm-2" type="text" placeholder="PNR">
          </form>
        </nav>
        <a class="cta-btn " href="Track.php">Track</a>
      </div>
    </div>


  </section>


  <!-- End track Section -->




  <!-- ======= Frequently Asked Questions Section ======= -->
  <section id="fAQ" class="faq section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Frequently Asked Questions</h2>
        <p>Leave the fraustration for us!</p>
      </div>

      <div class="faq-list">
        <ul>
          <li data-aos="fade-up">
            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse"
              data-bs-target="#faq-list-1">How do I book a train ticket online? <i
                class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
              <p>
                You can book a train ticket online through the official website of the railway or through a third-party
                online ticketing platform.
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="100">
            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2"
              class="collapsed">What documents do I need to carry while boarding the train? <i
                class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
              <p>
                - You need to carry a printout or a digital copy of your e-ticket along with a valid photo ID proof
                (such as National ID, passport, or driving license) of all passengers.
                The ID proof should match the details provided while booking the ticket.
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="200">
            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3"
              class="collapsed">Can I book train tickets for someone else? <i
                class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
              <p>
                Yes, you can book train tickets for someone else. While booking, you need to enter the passenger details
                correctly, including the name, age, and gender of the actual traveler.
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="300">
            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4"
              class="collapsed">Can I cancel or modify my train ticket?<i class="bx bx-chevron-down icon-show"></i><i
                class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
              <p>
                Yes, you can cancel or modify your train ticket. The cancellation/modification rules and charges vary
                based on the type of ticket and time of cancellation/modification.
                You can cancel or modify your train ticket online through the official website or by visiting the
                railway station.
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="400">
            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5"
              class="collapsed">What is the difference between waiting list (WL), Reservation Against Cancellation
              (RAC), and confirmed ticket? <i class="bx bx-chevron-down icon-show"></i><i
                class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
              <p>
                Waiting List (WL): If all available seats are booked, you may get a waitlisted ticket. You are not
                allowed to board the train with a waitlisted ticket unless it gets confirmed.
                <hr>

                Reservation Against Cancellation (RAC): RAC tickets provide you with a reserved seat, but you may have
                to share it with another passenger.
                <hr>
                Confirmed Ticket: A confirmed ticket means you have a confirmed seat on the train for the specified
                class and date of travel. You are allowed to board the train with a confirmed ticket..
              </p>
            </div>
          </li>

        </ul>
      </div>

    </div>
  </section><!-- End Frequently Asked Questions Section -->



  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Contact</h2>
        <p>We strive to provide excellent customer service and are committed to addressing your inquiries in a timely
          manner. We look forward to hearing from you and assisting you in any way we can.</p>
      </div>


      <div class="row mt-5">

        <div class="col-lg-4">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <p>Cairo,Egypt</p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>help@Journey.com</p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Call:</h4>
              <p>16555</p>
            </div>

          </div>

        </div>

        <div class="col-lg-8 mt-5 mt-lg-0">

          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row gy-2 gx-md-3">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="col-md-6 form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
              <div class="form-group col-12">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group col-12">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3 col-12">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center col-12"><button type="submit">Send Message</button></div>
            </div>
          </form>

        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->


  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Journey.</h3>
            <strong>Phone:</strong> 16555<br>
            <strong>Email:</strong> help@Journey.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Trips</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#cities">Stations</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#track">Track Train</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Team</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> Amr Yasser</a></li>
              <li><i class="bx bx-chevron-right"></i> Mohammed Maged</a></li>
              <li><i class="bx bx-chevron-right"></i> Mohammed Reda</a></li>
              <li><i class="bx bx-chevron-right"></i> Mohammed Mohy</a></li>
              <li><i class="bx bx-chevron-right"></i> Sara Ahmed</a></li>
              <li><i class="bx bx-chevron-right"></i> Sara Abdelmoniem</a></li>
              <li><i class="bx bx-chevron-right"></i> Sara Mamdouh</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Be the first to know about our latest offers and services!</p>
            <form action="" method="post">
              <input type="email" name="email" placeholder="enter your email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Journey.</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/ -->
          Designed by Amr Yasser</a>
        </div>

  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

  </body>

</html>