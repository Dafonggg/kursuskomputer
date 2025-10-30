@include('layouts.header')

  <div class="main-banner" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-carousel owl-banner">
            <div class="item item-1">
              <div class="header-text">
                <span class="category">Our Courses</span>
                <h2>With Scholar Teachers, Everything Is Easier</h2>
                <p>Scholar is free CSS template designed by TemplateMo for online educational related websites. This layout is based on the famous Bootstrap v5.3.0 framework.</p>
                <div class="buttons">
                  <div class="main-button">
                    <a href="#">Request Demo</a>
                  </div>
                  <div class="icon-button">
                    <a href="#"><i class="fa fa-play"></i> What's Scholar?</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="item item-2">
              <div class="header-text">
                <span class="category">Best Result</span>
                <h2>Get the best result out of your effort</h2>
                <p>You are allowed to use this template for any educational or commercial purpose. You are not allowed to re-distribute the template ZIP file on any other website.</p>
                <div class="buttons">
                  <div class="main-button">
                    <a href="#">Request Demo</a>
                  </div>
                  <div class="icon-button">
                    <a href="#"><i class="fa fa-play"></i> What's the best result?</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="item item-3">
              <div class="header-text">
                <span class="category">Online Learning</span>
                <h2>Online Learning helps you save the time</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temporious incididunt ut labore et dolore magna aliqua suspendisse.</p>
                <div class="buttons">
                  <div class="main-button">
                    <a href="#">Request Demo</a>
                  </div>
                  <div class="icon-button">
                    <a href="#"><i class="fa fa-play"></i> What's Online Course?</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="services section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="service-item">
            <div class="icon">
              <img src="{{ asset('images/service-01.png') }}" alt="online degrees">
            </div>
            <div class="main-content">
              <h4>Microsoft Office</h4>
              <p>Tingkatkan keterampilan Anda dalam menggunakan Microsoft Word, Excel, dan PowerPoint.
              Pelajari cara mengelola data, membuat laporan profesional, dan presentasi menarik dengan mudah.</p>
              <div class="main-button">
                <a href="#">Read More</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="service-item">
            <div class="icon">
              <img src="{{ asset('images/service-02.png') }}" alt="short courses">
            </div>
            <div class="main-content">
              <h4>Adobe Photoshop</h4>
              <p>Kuasai teknik dasar hingga lanjutan dalam pengeditan foto dan desain grafis menggunakan Adobe Photoshop.
              Ciptakan karya visual yang menarik dan profesional untuk kebutuhan pribadi maupun bisnis.</p>
              <div class="main-button">
                <a href="#">Read More</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="service-item">
            <div class="icon">
              <img src="{{ asset('images/service-03.png') }}" alt="web experts">
            </div>
            <div class="main-content">
              <h4>CorelDraw</h4>
              <p>YPelajari desain vektor dan pembuatan logo menggunakan CorelDRAW.
              Kursus ini membantu Anda memahami cara membuat desain kreatif dengan efisien dan presisi tinggi.</p>
              <div class="main-button">
                <a href="#">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section about-us">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-1">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Dari mana kita mulai belajar?
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                Kami akan mulai dari pengenalan dasar komputer, lalu lanjut ke materi kursus pilihan kamu — Word, Excel, Photoshop, atau CorelDRAW.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Bagaimana cara belajar di Kursus Ryan Komputer?
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                Belajar bisa secara online melalui video tutorial praktis, atau offline dengan modul pembelajaran yang bisa kamu pelajari di tempat.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Kenapa Kursus Ryan Komputer yang terbaik?
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                Karena kami fokus pada praktik langsung dan pembelajaran yang mudah dipahami. Setelah selesai, kamu siap kerja atau buka jasa desain dan administrasi sendiri
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                Apakah ada dukungan setelah kursus selesai?
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                Tentu! Peserta tetap bisa mengakses video tutorial dan modul kapan saja, serta mendapatkan sertifikat resmi sebagai bukti kelulusan.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 align-self-center">
          <div class="section-heading">
            <h6>Tentang Kami</h6>
            <h2>Apa yang menjadikan kami Kursus Ryan Komputer terbaik?</h2>
            <p>Kursus Ryan Komputer siap bantu kamu kuasai Word, Excel, Photoshop, dan CorelDRAW dengan cara yang mudah dan fleksibel.
              Belajar bisa online lewat video tutorial atau offline dengan modul lengkap.
              Setelah selesai, kamu akan mendapat sertifikat resmi sebagai bukti keahlianmu.</p>
            <div class="main-button">
              <a href="#">Pelajari Lebih Lanjut</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="section courses" id="courses" >
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section-heading">
            <h6>DAFTAR KURSUS</h6>
            <h2>DAFTAR KURSUS</h2>
          </div>
        </div>
      </div>
      <ul class="event_filter">
        <li>
          <a class="is_active" href="#!" data-filter="*">SEMUA</a>
        </li>
        <li>
          <a href="#!" data-filter=".word">Word</a>
        </li>
        <li>
          <a href="#!" data-filter=".excel">Excel</a>
        </li>
        <li>
          <a href="#!" data-filter=".photoshop">Photoshop</a>
        </li>
        <li>
          <a href="#!" data-filter=".coreldraw">CorelDraw</a>
        </li>
        <li>
          <a href="#!" data-filter=".paket">PaketMicrosoftOffice</a>
        </li>
      </ul>
      <div class="row event_box">
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 paket">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="{{ asset('images/msp1.png') }}" alt=""></a>
              <span class="category">Microsoft Office</span>
              <span class="price"><h6><em>$</em>500</h6></span>
            </div>
            <div class="down-content">
              <span class="author">Adrian Tung</span>
              <h4>Office 365</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 word">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="{{ asset('images/wordp2.png') }}" alt=""></a>
              <span class="category">Word</span>
              <span class="price"><h6><em>$</em>340</h6></span>
            </div>
            <div class="down-content">
              <span class="author">Adrian Tung</span>
              <h4>Learn Word</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 excel">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="{{ asset('images/excelp.png') }}" alt=""></a>
              <span class="category">Excel</span>
              <span class="price"><h6><em>$</em>340</h6></span>
            </div>
            <div class="down-content">
              <span class="author">Adrian Tung</span>
              <h4>Learn Excel</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 photoshop">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="{{ asset('images/psp.png') }}" alt=""></a>
              <span class="category">Photoshop</span>
              <span class="price"><h6><em>$</em>340</h6></span>
            </div>
            <div class="down-content">
              <span class="author">Adrian Tung</span>
              <h4>Learn Photoshop</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 coreldraw">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="{{ asset('images/coreldrawp.png') }}" alt=""></a>
              <span class="category">Corel Draw</span>
              <span class="price"><h6><em>$</em>340</h6></span>
            </div>
            <div class="down-content">
              <span class="author">Adrian Tung</span>
              <h4>Learn CorelDraw</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 word">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="{{ asset('images/wordp2.png') }}" alt=""></a>
              <span class="category">Word</span>
              <span class="price"><h6><em>$</em>340</h6></span>
            </div>
            <div class="down-content">
              <span class="author">Adrian Tung</span>
              <h4>Learn Word</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="section fun-facts">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="wrapper">
            <div class="row">
              <div class="col-lg-3 col-md-6">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="150" data-speed="1000"></h2>
                   <p class="count-text ">Happy Students</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="804" data-speed="1000"></h2>
                  <p class="count-text ">Course Hours</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="50" data-speed="1000"></h2>
                  <p class="count-text ">Employed Students</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="counter end">
                  <h2 class="timer count-title count-number" data-to="15" data-speed="1000"></h2>
                  <p class="count-text ">Years Experience</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="team section" id="team">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="team-member">
            <div class="main-content">
              <img src="{{ asset('images/member-01.jpg') }}" alt="">
              <span class="category">UX Teacher</span>
              <h4>Sophia Rose</h4>
              <ul class="social-icons">
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="team-member">
            <div class="main-content">
              <img src="{{ asset('images/member-02.jpg') }}" alt="">
              <span class="category">Graphic Teacher</span>
              <h4>Cindy Walker</h4>
              <ul class="social-icons">
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="team-member">
            <div class="main-content">
              <img src="{{ asset('images/member-03.jpg') }}" alt="">
              <span class="category">Full Stack Master</span>
              <h4>David Hutson</h4>
              <ul class="social-icons">
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="team-member">
            <div class="main-content">
              <img src="{{ asset('images/member-04.jpg') }}" alt="">
              <span class="category">Digital Animator</span>
              <h4>Stella Blair</h4>
              <ul class="social-icons">
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> 

  <div class="section testimonials">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="owl-carousel owl-testimonials">
            <div class="item">
              <p>“Please tell your friends or collegues about TemplateMo website. Anyone can access the website to download free templates. Thank you for visiting.”</p>
              <div class="author">
                <img src="{{ asset('images/testimonial-author.jpg') }}" alt="">
                <span class="category">Full Stack Master</span>
                <h4>Claude David</h4>
              </div>
            </div>
            <div class="item">
              <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravid.”</p>
              <div class="author">
                <img src="{{ asset('images/testimonial-author.jpg') }}" alt="">
                <span class="category">UI Expert</span>
                <h4>Thomas Jefferson</h4>
              </div>
            </div>
            <div class="item">
              <p>“Scholar is free website template provided by TemplateMo for educational related websites. This CSS layout is based on Bootstrap v5.3.0 framework.”</p>
              <div class="author">
                <img src="{{ asset('images/testimonial-author.jpg') }}" alt="">
                <span class="category">Digital Animator</span>
                <h4>Stella Blair</h4>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 align-self-center">
          <div class="section-heading">
            <h6>TESTIMONIALS</h6>
            <h2>What they say about us?</h2>
            <p>You can search free CSS templates on Google using different keywords such as templatemo portfolio, templatemo gallery, templatemo blue color, etc.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="katalog-aksesoris" id="katalog-aksesoris" >
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section-heading">
            <h6>Katalog Aksesoris</h6>
            <h2>Katalog Aksesoris</h2>
          </div>
        </div>
      </div>
      <ul class="event_filter">
        <li>
          <a class="is_active" href="#!" data-filter="*">SEMUA</a>
        </li>
        <li>
          <a href="#!" data-filter=".mouse">Mouse</a>
        </li>
        <li>
          <a href="#!" data-filter=".keyboard">Keyboard</a>
        </li>
        <li>
          <a href="#!" data-filter=".headset">Headset</a>
        </li>
        <li>
          <a href="#!" data-filter=".mousepad">Mouse Pad</a>
        </li>
        <li>
          <a href="#!" data-filter=".webcam">Webcam</a>
        </li>
      </ul>
      <div class="row event_box">
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 mouse">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="{{ asset('images/contoh.jpg') }}" alt=""></a>
              <span class="category">Mouse</span>
              <span class="price" style="font-size: 12px;">Tersedia</span>
            </div>
            <div class="down-content">
              <span class="author">Logitech</span>
              <h4>Mouse Wireless</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 keyboard">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="{{ asset('images/contoh.jpg') }}" alt=""></a>
              <span class="category">Keyboard</span>
              <span class="price" style="font-size: 12px;">Tersedia</span>
            </div>
            <div class="down-content">
              <span class="author">Razer</span>
              <h4>Keyboard Mechanical</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 headset">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="{{ asset('images/contoh.jpg') }}" alt=""></a>
              <span class="category">Headset</span>
              <span class="price" style="font-size: 12px;">Habis</span>
            </div>
            <div class="down-content">
              <span class="author">HyperX</span>
              <h4>Headset Gaming</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 mousepad">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="{{ asset('images/contoh.jpg') }}" alt=""></a>
              <span class="category">Mouse Pad</span>
              <span class="price" style="font-size: 12px;">Tersedia</span>
            </div>
            <div class="down-content">
              <span class="author">SteelSeries</span>
              <h4>Mouse Pad Gaming</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 webcam">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="{{ asset('images/contoh.jpg') }}" alt=""></a>
              <span class="category">Webcam</span>
              <span class="price" style="font-size: 12px;">Tersedia</span>
            </div>
            <div class="down-content">
              <span class="author">Logitech</span>
              <h4>Webcam HD</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 mouse">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="{{ asset('images/contoh.jpg') }}" alt=""></a>
              <span class="category">Mouse</span>
              <span class="price" style="font-size: 12px;">Habis</span>
            </div>
            <div class="down-content">
              <span class="author">Razer</span>
              <h4>Mouse Gaming</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 keyboard">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="{{ asset('images/contoh.jpg') }}" alt=""></a>
              <span class="category">Keyboard</span>
              <span class="price" style="font-size: 12px;">Tersedia</span>
            </div>
            <div class="down-content">
              <span class="author">Corsair</span>
              <h4>Keyboard RGB</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 headset">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="{{ asset('images/contoh.jpg') }}" alt=""></a>
              <span class="category">Headset</span>
              <span class="price" style="font-size: 12px;">Tersedia</span>
            </div>
            <div class="down-content">
              <span class="author">SteelSeries</span>
              <h4>Headset Wireless</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 webcam">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="{{ asset('images/contoh.jpg') }}" alt=""></a>
              <span class="category">Webcam</span>
              <span class="price" style="font-size: 12px;">Habis</span>
            </div>
            <div class="down-content">
              <span class="author">Logitech</span>
              <h4>Webcam 4K</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="contact-us section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-6  align-self-center">
          <div class="section-heading">
            <h6>Contact Us</h6>
            <h2>Feel free to contact us anytime</h2>
            <p>Thank you for choosing our templates. We provide you best CSS templates at absolutely 100% free of charge. You may support us by sharing our website to your friends.</p>
            <div class="special-offer">
              <span class="offer">off<br><em>50%</em></span>
              <h6>Valide: <em>24 April 2036</em></h6>
              <h4>Special Offer <em>50%</em> OFF!</h4>
              <a href="#"><i class="fa fa-angle-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="contact-us-content">
            <form id="contact-form" action="" method="post">
              <div class="row">
                <div class="col-lg-12">
                  <fieldset>
                    <input type="name" name="name" id="name" placeholder="Your Name..." autocomplete="on" required>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your E-mail..." required="">
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <textarea name="message" id="message" placeholder="Your Message"></textarea>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="orange-button">Send Message Now</button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

@include('layouts.footer')