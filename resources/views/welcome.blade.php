 @extends('layouts.app')

 @section('main')
<!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services section-bg">
      <div class="container">

        <div class="row no-gutters">
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
              <img src="assets/img/permissions/Accredia.jpg" alt="1" class="rounded mx-auto d-block">
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
              <img src="assets/img/permissions/CE.jpg" alt="2" class="rounded mx-auto d-block">
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
              <img src="assets/img/permissions/Ilac-mra.jpg" alt="3" class="rounded mx-auto d-block">
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Featured Services Section -->
  <!-- ======= About Us Section ======= -->
  <section id="about" class="about">
    <div class="container">

      <div class="section-title">
        <h2>About Us</h2>
        <p>A.F.G.C laboratory glass</p>
      </div>

      <div class="row">
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="assets/img/about.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
          <h3>A.F.G.C laboratory glass</h3>
          <p>
          A.F.G.C laboratory glass is an international research center and a specialized analysis laboratory accredited UNI CEI EN ISO/IEC 17025, and provides technical and scientific support to the entire supply chain of glass: producers, manufacturers, users of glass, producers of raw materials, of refractories and of machinery for the glass industry.
More than fifty people, including graduates, engineers and specialised technicians, work in laboratories equipped with the latest generation of scientific instruments, developing applied research projects, providing technical assistance services and carrying out quality control, certification and compliance tests in the various fields of the glass industry: hollow glass, flat glass for the building industry and for transport, household articles, technical glass, glass fibres and artistic glass.

          </p>
        </div>
      </div>

    </div>
  </section><!-- End About Us Section -->
  
  <section id="send-email" class="send-email">
      <div class="section-title">
        <h2>Certificate Validation</h2>
        <p>Certificate Cinfirm</p>
      </div>
    <div class="col-lg-9 mt-5 mt-lg-0 d-flex align-items-stretch mx-auto justify-content-center box-shadow">
          <form action="/send-mail" method="post" role="form" class="email-form">
            @csrf
            <div class="row">
              <div class="form-group mt-3">
                <label for="name">Validate Certificates</label>
                <input type="text" class="form-control" name="certificate" id="certificate" required>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-12 mt-3 mt-md-0">
                <label for="name">Your Email</label>
                <input type="email" class="form-control" name="email" id="email" required>
              </div>
            </div>
            @isset($message)
              @if($success)
                <div class="alert alert-success mt-1" role="alert">
                  {{ $message }}
                </div>
              @else
                <div class="alert alert-danger mt-1" role="alert">
                  {{ $message }}
                </div>
              @endif
            @endisset
            <div class="text-center mt-3"><button type="submit" class="btn btn-success" >Send Certificate</button></div>
          </form>
        </div>
  </section>
  <!-- ======= About Us Section ======= -->
  <section id="service" class="service">
    <div class="container">

      <div class="section-title">
        <h2>Types of Service:</h2>
      </div>

      <div class="row">
        
        <div class="col-lg-12 pt-4 pt-lg-0 order-2 order-lg-1 content d-flex justify-content-center">
          <p>
          In addition to all the analytical activities carried out in its laboratories and on site at the service of the entire industrial chain of glass,
           A.F.G.C laboratory glass can offer also expertise and consultancy services, training courses, and can develop multidisciplinary research projects in partnership with companies (also under NDA), or precompetitive studies in support of European associations and institutions in the sector
           Business Domains:
A.F.G.C laboratory glass can provide scientific support and technical assistance to all the sectors of the glass industry.
Business Domains, Glass Products, Batch and Melting, Flat Glass, Hollow Glass, Tableware, Glass Tube ,Glass Fibres, Glass Frits, Artistic Glass, Special Glass, Raw Materials and Glass Cullet, Environment and Emissions, Energy and Furnaces, Refractory Materials, Ceramic Materials and Glass Ceramics, silver mirror.

          </p>
        </div>
      </div>

    </div>
  </section><!-- End About Us Section -->

  <!-- ======= About Us Section ======= -->
  <section id="Laboratory_Analyses" class="Laboratory_Analyses">
    <div class="container">
    
      <div class="section-title">
        <h2>Laboratory Analyses</h2>
        <p></p>
      </div>

      <div class="row">
        <!-- <div class="col-lg-6 order-1 order-lg-2">
        </div> -->
        <div class="col-lg-12 pt-4 pt-lg-0 order-2 order-lg-1 content">
          <p>
          A.F.G.C laboratory glass is the most complete European laboratory for the analysis of the properties of glass and of all materials related to its production. Its cutting-edge instrumentation and scientific equipment allow A.F.G.C to offer a wide range of analyses, several of which unique in the sector.
The internationally recognized competence of its technicians and their deep knowledge of the products and production processes is the true added value of A.F.G.C, and represent an internal cultural heritage, developed, cultivated and preserved over more than 20 years of activity in support of the innovation of the glass industry.
The analytical support that A.F.G.C can offer ranges from single tests performed on request, to continuous analysis services for the quality control of raw materials and finished products, performed according to dedicated protocols defined together with the customer.
Depending on the type of analysis and on the customer’s needs, the experimental results can be provided under the form of an official third party certificate, of a technical report, or even by direct updating of  the customer’s informatic database, always in compliance with confidentiality requirements.
•	Laboratory analyses
o	Chemical Analyses
o	Environmental Analyses
o	Glass Defects Analyses
o	Mechanical Tests
o	Thermo Physical Tests
o	Optical Tests
o	Durability Tests

          </p>
        </div>
      </div>

    </div>
  </section><!-- End About Us Section -->
  

  <!-- ======= About Us Section ======= -->
  <section id="Fields_Application" class="Fields_Application">
    <div class="container">
    
      <div class="section-title">
        <h2>Fields of Application</h2>
        <p></p>
      </div> 

      <div class="row">
        <div class="col-lg-6 order-1 order-lg-2">
        </div>
        <div class="col-lg-12 pt-4 pt-lg-0 order-2 order-lg-1 content">
          <p>
          
Thanks to its many excellent properties, glass is a material that finds wide application in many fields; each sector has its own specific characteristics both in terms of production and transformation processes and in terms of the performance required from the finished products.
A.F.G.C laboratory glass is a specialized research Centre that offers its scientific and technological support to innovation in the main sectors of application of glass, and promotes a more conscious use of it.
•	Fields of Application
o	Building and Architecture
o	Food and Beverage
o	Pharmaceutics
o	Flaconnage and Cosmetics
o	Domestic Glass

          </p>
        </div>
      </div>

    </div>
  </section><!-- End About Us Section -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">

      

      <div class="row portfolio-container">

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 1</h4>
              <p>App</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 2</h4>
              <p>App</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 2</h4>
              <p>Card</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 2</h4>
              <p>Web</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 3</h4>
              <p>App</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 1</h4>
              <p>Card</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 3</h4>
              <p>Card</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Portfolio Section -->

  <!-- ======= Team Section ======= -->
  {{-- <section id="team" class="team section-bg">
    <div class="container">

      <div class="section-title">
        <h2>Team</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="member">
            <img src="assets/img/team/team-1.jpg" alt="">
            <h4>Walter White</h4>
            <span>Chief Executive Officer</span>
            <p>
              Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut
            </p>
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="member">
            <img src="assets/img/team/team-2.jpg" alt="">
            <h4>Sarah Jhinson</h4>
            <span>Product Manager</span>
            <p>
              Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
            </p>
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="member">
            <img src="assets/img/team/team-3.jpg" alt="">
            <h4>William Anderson</h4>
            <span>CTO</span>
            <p>
              Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara
            </p>
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section> --}}
  <!-- End Team Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
      </div>

      <div class="row">

        <div class="col-lg-12 d-flex align-items-stretch">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <p>Ltd Box 10,30141 Moreno(VE) Italy</p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>info@afgc-lab.com</p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Call:</h4>
              <p>+ 39 041 5383207 – 538307</p>
            </div>
            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Fax:</h4>
              <p>+ 39 041 5090772</p>
            </div>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d711.400482502811!2d11.33696772925702!3d44.502822798693856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477fd49af9538a4f%3A0xf12ce08d4ee7bcd5!2sVia%20Don%20Giovanni%20Minzoni%2C%2011%2C%2040121%20Bologna%20BO%2C%20Italy!5e0!3m2!1sen!2s!4v1640499738441!5m2!1sen!2s" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>

        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

  @endsection
