@extends('section.index')

@section('title')
BlackRock - #1 Investment Platform
@endsection


@section('content')

  <div class="prelgoader">
      <div class="preloader-container">
        <span class="animated-preloader"></span>
      </div>
    </div>

  <div class="page-wrapper">

  @include('partials.navbar')
  <section class="inner-hero bg_img" data-background="{{ asset('image/blackrock.jpeg') }}">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2 class="page-title">Contact Us</h2>
            <ul class="page-breadcrumb">
              <li><a href="{{ route('index') }}">Home</a></li>
              <li>Contact Us</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
  
    <!-- contact section start -->
    <section class="pt-120 pb-120">
      <div class="container">
        <div class="contact-wrapper">
          <div class="row">
            <div class="col-lg-4 contact-thumb bg_img" data-background="image/blackrock.jpeg"></div>
            <div class="col-lg-8 contact-form-wrapper">
                              <h2 class="font-weight-bold">Contact.</h2>
              <h2 class="font-weight-bold">Get in touch.</h2>
              <span>Leave us a message</span>
              <form class="contact-form mt-4" action="" id="contactForm" method="post">
                <div class="form-row">
                  <div class="form-group col-lg-6">
                    <input type="text" name="name" placeholder="Full Name" class="form-control" required>
                  </div>
                  <div class="form-group col-lg-6">
                    <input type="email" name="email" placeholder="Email Address" class="form-control"  required>
                  </div>
                  <div class="form-group col-lg-12">
                    <textarea class="form-control" name="message" placeholder="Message"  required></textarea>
                  </div>
                  <div class="col-lg-12">
                    <input type="submit" id="messageBtn" class="cmn-btn border-0" name="send_message" value="Send Message"/>
                  </div>
                </div>
              </form>
             
             <br>
             <p><b class="base--color">Address:</b>
                  1401 New York Ave NW, Washington, DC 20005, United States</p>

             
             
             <p><b class="base--color">Email:</b> <a href="mailto:admin@etradesinvestment.com">admin@etradesinvestment.com</a> 
             </p> 
            </div>
            
          </div>
        </div><!-- contact-wrapper end -->
      </div>

 <!-- about section start 
    <section class="about-section pt-120 pb-120 bg_img" data-background="assets/images/bg/bg-1.jpg">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="about-content">
              <h2 class="section-title mb-3"><span class="font-weight-normal">Legal</span> <b class="base--color"> Document</b></h2>
              <img src="assets/images/certificate.jpg"/>
            </div><!-- about-content end -->
          </div>
        </div>
      </div>
    </section>
    <!-- about section end -->
    <div class="container">
 
</div>
      
    </section>
    <!-- contact section end -->
    


    <div class="container">
 
</div>
          </div>
        </div>
      </div>
    </div>
    <!-- dashboard section end -->


  @include('partials.footer')
  @include('partials.whatsapp')

  <script type="text/javascript">
    function googleTranslateElementInit() {
    new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
    }
    </script>
    

  
    </div> <!-- page-wrapper end -->



@endsection
