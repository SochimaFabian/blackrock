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
    <section class="inner-hero bg_img" data-background="image/blackrock.jpeg">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2 class="page-title">About BlackRock</h2>
            <ul class="page-breadcrumb">
              <li><a href="index.html">Home</a></li>
              <li>About BlackRock</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    
  <section class="about-section pt-120 pb-120 bg_img" data-background="">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-6">
            <div class="about-content">
              <h2 class="section-title mb-3"><span class="font-weight-normal">About</span> <b class="base--color">BlackRock</b></h2>
              <p>We are a crypto and forex based company engaged in several investment activities, which are related to trading on financial markets and cryptocurrency exchanges performed by qualified professional traders.</p>
              <p class="mt-4">Our goal is to provide our investors with a reliable source of high income, while minimizing any possible risks and offering a high-quality service, allowing us to automate and simplify the relations between the investors and the trustees. We work towards increasing your profit margin by profitable investment. We look forward to you being part of our community.</p>
              
            </div><!-- about-content end -->
          </div>
        </div>
      </div>
    </section>
    <!-- about section end -->
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
    
    <script type="text/javascript" src="../translate.google.com/translate_a/elementa0d8.js?cb=googleTranslateElementInit"></script>
  
    </div> <!-- page-wrapper end -->


@endsection