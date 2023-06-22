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
 
    <!-- hero start -->
    <section class="hero bg_img" data-background="image/blackrock.jpeg">
      <div class="container">
        <div class="row">
          <div class="col-xl-5 col-lg-8">
            <div class="hero__content">
              <h2 class="hero__title"><span class="text-white font-weight-normal">This is the Best and Secured Investment Platform</span> <b class="base--color">Come and Earn more with BlackRock</b></h2>
              <!--<p class="text-white f-size-18 mt-3">Your investment is secured with us - We guarantee return on your investment and immediate payout once your investment reaches maturity date</p>-->
              <a href="{{ route('signup') }}" class="cmn-btn text-uppercase font-weight-600 mt-4">Sign Up</a>
                <a href="{{ route('login') }}" class="cmn-btn text-uppercase font-weight-600 mt-4">Login</a>            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- hero end --><div id="coinmarketcap-widget-marquee" coins="1,1027,825" currency="USD" theme="light" transparent="false" show-symbol-logo="true"></div>
    
    <section class="pt-120 pb-120 overlay--radial bg_img "data-background="assets/images/bg/bg-7.jpg">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <div class="section-header">
              <h2 class="section-title"><span class="font-weight-normal">BlackRock</span> <b class="base--color">Statistics</b></h2>
              
            </div>
          </div>
        </div><!-- row end -->
        <div class="row justify-content-center mb-none-30">
          <div class="col-xl-4 col-md-6 mb-30">
            <div class="choose-card border-radius--5">
              <div class="mb-3 text-center">
                <div class="choose-card__icon d-inline m-0">
                  <i style="font-size: 30px" class="fa-solid fa-user"></i>
                  <br>
                </div>

                <h3 class="base--color">Total Registered <br/>Members</h3>
              <br>
                <h2 class="text-white">8884</h2>
              
              </div>
             
            </div><!-- choose-card end -->
          </div>
          
          <div class="col-xl-4 col-md-6 mb-30">
            <div class="choose-card border-radius--5">
              <div class="mb-3 text-center">
                <div class="choose-card__icon d-inline m-0">
                  <i class="fa-light fa-money-bill"></i>
                </div>

                <h3 class="base--color">Total Deposits<br> For Today</h3>
              <br>
                <h2 class="text-white">969995</h2>
              
              </div>
             
            </div><!-- choose-card end -->
          </div>
        
          <div class="col-xl-4 col-md-6 mb-30">
            <div class="choose-card border-radius--5">
              <div class="mb-3 text-center">
                <div class="choose-card__icon d-inline m-0">
                  <i class="fa-solid fa-money-bill"></i>
                </div>

                <h3 class="base--color">Total Withdrawals <br/> For Today</h3>
              <br>
                <h2 class="text-white">123046</h2>
              
              </div>
             
            </div><!-- choose-card end -->
          </div>
        

        </div>
      </div>
    </section>
    <!-- choose us section end  -->
    <!-- about section start -->
    <section class="about-section pt-120 pb-120 bg_img" data-background="image/blackrock1.jpeg">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-6">
            <div class="about-content">
              <h2 class="section-title mb-3"><span class="font-weight-normal">About</span> <b class="base--color">Us</b></h2>
              <p>BlackRock, Inc. is an American multi-national investment company based in New York City. Founded in 1988, initially as an enterprise risk management and fixed income institutional asset manager, BlackRock is the world's largest asset manager, with US$8.59 trillion in assets under management as of December 31, 2022.</p>
              <p class="mt-4">BlackRock is one of the world's leading providers of investment, advisory and risk management solutions. We are a fiduciary to our clients. We're investing for the future on behalf of our clients, inspiring our employees, and supporting our local communities.</p>
              
            </div><!-- about-content end -->
          </div>
        </div>
      </div>
    </section>



    <!-- package section start -->
    <section class="pt-120 pb-120 bg_img" id="packages" data-background="assets/images/office.jpg">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <div class="section-header">
              <h2 class="section-title"><span class="font-weight-normal">Investment</span> <b class="base--color">Plans</b></h2>
              <p>To make a solid investment, you have to know where you are investing. Find a plan which is best for you.</p>
            </div>
          </div>
        </div><!-- row end -->
   </div>
       
         
        <div class="row mt-50">
          <div class="col-lg-12 text-center">
            <a href="{{ route('login') }}" class="cmn-btn">Get Started</a>
          </div>
        </div>
      
    </section>
    <!-- package section end  -->

    <!-- choose us section start -->
    <section class="pt-120 pb-120 overlay--radial bg_img" data-background="assets/images/bg/bg-3.jpg">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <div class="section-header">
              <h2 class="section-title"><span class="font-weight-normal">Why Choose</span> <b class="base--color">BlackRock</b></h2>
              <p>Our goal is to provide our investors with a reliable source of high income, while minimizing any possible risks and offering a high-quality service.</p>
            </div>
          </div>
        </div><!-- row end -->
        <div class="row justify-content-center mb-none-30">
          <div class="col-xl-4 col-md-6 mb-30">
            <div class="choose-card border-radius--5">
              <div class="choose-card__header mb-3">
                <div class="choose-card__icon">
                  <i class="fa-solid fa-building"></i>
                </div>
                <h4 class="choose-card__title base--color">Legal Company</h4>
              </div>
              <p>Our company conducts absolutely legal activities in the legal field. We are certified to operate investment business, we are legal and safe.</p>
            </div><!-- choose-card end -->
          </div>
          <div class="col-xl-4 col-md-6 mb-30">
            <div class="choose-card border-radius--5">
              <div class="choose-card__header mb-3">
                <div class="choose-card__icon">
                  <i class="fa-solid fa-lock"></i>
                </div>
                <h4 class="choose-card__title base--color">High reliability</h4>
              </div>
              <p>We are trusted by a huge number of people. We are working hard constantly to improve the level of our security system and minimize possible risks.</p>
            </div><!-- choose-card end -->
          </div>
          <div class="col-xl-4 col-md-6 mb-30">
            <div class="choose-card border-radius--5">
              <div class="choose-card__header mb-3">
                <div class="choose-card__icon">
                  <i class="fa-solid fa-building-columns"></i>
                </div>
                <h4 class="choose-card__title base--color">Anonymity</h4>
              </div>
              <p>Anonymity and using cryptocurrency as a payment instrument. In the era of electronic money – this is one of the most convenient ways of cooperation.</p>
            </div><!-- choose-card end -->
          </div>
          <div class="col-xl-4 col-md-6 mb-30">
            <div class="choose-card border-radius--5">
              <div class="choose-card__header mb-3">
                <div class="choose-card__icon">
                  <i class="fa-solid fa-truck-fast"></i>
                </div>
                <h4 class="choose-card__title base--color">Quick Withdrawal</h4>
              </div>
              <p>Our all retreats are treated spontaneously once requested. There are high maximum limits. The minimum withdrawal amount is only $10.</p>
            </div><!-- choose-card end -->
          </div>
          <div class="col-xl-4 col-md-6 mb-30">
            <div class="choose-card border-radius--5">
              <div class="choose-card__header mb-3">
                <div class="choose-card__icon">
                  <i class="fa-solid fa-person"></i>
                </div>
                <h4 class="choose-card__title base--color">Referral Program</h4>
              </div>
              <p>We are offering a certain level of referral income through our referral program. you can increase your income by simply refer a few people.</p>
            </div><!-- choose-card end -->
          </div>
          <div class="col-xl-4 col-md-6 mb-30">
            <div class="choose-card border-radius--5">
              <div class="choose-card__header mb-3">
                <div class="choose-card__icon">
                  <i class="fa-solid fa-headset"></i>
                </div>
                <h4 class="choose-card__title base--color">24/7 Support</h4>
              </div>
              <p>We provide 24/7 customer support through e-mail and telegram. Our support representatives are periodically available to elucidate any difficulty..</p>
            </div><!-- choose-card end -->
          </div>
          <div class="col-xl-4 col-md-6 mb-30">
            <div class="choose-card border-radius--5">
              <div class="choose-card__header mb-3">
                <div class="choose-card__icon">
                  <i class="fa-solid fa-server"></i>
                </div>
                <h4 class="choose-card__title base--color">Dedicated Server</h4>
              </div>
              <p>We are using a dedicated server for the website which allows us exclusive use of the resources of the entire server.</p>
            </div><!-- choose-card end -->
          </div>
          <div class="col-xl-4 col-md-6 mb-30">
            <div class="choose-card border-radius--5">
              <div class="choose-card__header mb-3">
                <div class="choose-card__icon">
                  <i class="fab fa-expeditedssl"></i>
                </div>
                <h4 class="choose-card__title base--color">SSL Secured</h4>
              </div>
              <p>Comodo Essential-SSL Security encryption confirms that the presented content is genuine and legitimate.</p>
            </div><!-- choose-card end -->
          </div>
          <div class="col-xl-4 col-md-6 mb-30">
            <div class="choose-card border-radius--5">
              <div class="choose-card__header mb-3">
                <div class="choose-card__icon">
                  <i class="fa-sharp fa-solid fa-shield-halved"></i>
                </div>
                <h4 class="choose-card__title base--color">DDOS Protection</h4>
              </div>
              <p>We are using one of the most experienced, professional, and trusted DDoS Protection and mitigation provider.</p>
            </div><!-- choose-card end -->
          </div>
        </div>
      </div>
    </section>
    <!-- choose us section end  -->

    <!-- how work section start -->
    <section class="pt-120 pb-120 bg_img" data-background="assets/images/bg/bg-5.jpg">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <div class="section-header">
              <h2 class="section-title"><span class="font-weight-normal">How</span> <b class="base--color">BlackRock</b> <span class="font-weight-normal">Works</span></h2>
              <p>Get involved in our tremendous platform and Invest. We will utilize your money and give you profit in your wallet automatically.</p>
            </div>
          </div>
        </div><!-- row end -->
        <div class="row justify-content-center mb-none-30">
          <div class="col-lg-4 col-md-6 work-item mb-30">
            <div class="work-card text-center">
              <div class="work-card__icon">
                <i class="fa-sharp fa-solid fa-users"></i>
                <span class="step-number">01</span>
              </div>
              <div class="work-card__content">
                <h4 class="base--color mb-3">Create Account</h4>
              </div>
            </div><!-- work-card end -->
          </div>
          <div class="col-lg-4 col-md-6 work-item mb-30">
            <div class="work-card text-center">
              <div class="work-card__icon">
                <i class="fa-solid fa-coins"></i>
                <span class="step-number">02</span>
              </div>
              <div class="work-card__content">
                <h4 class="base--color mb-3">Invest To Plan</h4>
              </div>
            </div><!-- work-card end -->
          </div>
          <div class="col-lg-4 col-md-6 work-item mb-30">
            <div class="work-card text-center">
              <div class="work-card__icon">
                <i class="fa-solid fa-wallet"></i>
                <span class="step-number">03</span>
              </div>
              <div class="work-card__content">
                <h4 class="base--color mb-3">Get Profit</h4>
              </div>
            </div><!-- work-card end -->
          </div>
        </div>
      </div>
    </section>
    <!-- how work section end  -->

    
   

 <!-- about section start --
 <section class="about-section pt-120 pb-120 bg_img" data-background="assets/images/bg/bg-1.jpg">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="about-content">
              <h2 class="section-title mb-3"><span class="font-weight-normal">Audio Visual </span> <b class="base--color"> Excerpt</b></h2>
              <video class="video-fluid z-depth-1 w-100" autoplay loop controls muted>
              <source src="assets/images/vid.mp4" class="w-100"type="video/mp4" />
              </video></div><!-- about-content end --
          </div>
        </div>
      </div>
    </section>
    <!-- about section end -->
    <div class="container">
 
</div>






    <!-- faq section start -->
    <section class="pt-120 pb-120" id="faqs">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <div class="section-header">
              <h2 class="section-title"><span class="font-weight-normal">Frequently Asked</span> <b class="base--color">Questions</b></h2>
              <p>We answer some of your Frequently Asked Questions regarding our platform. If you have a query that is not answered here, Please contact us.</p>
            </div>
          </div>
        </div><!-- row end -->
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="accordion cmn-accordion" id="accordionExample">

              
            

              <div class="card">
                <div class="card-header" id="headingOne">
                  <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      <i class="fa-solid fa-circle-question"></i>
                      <span>How many percent ROI do I get from my investment deposit</span>
                    </button>
                  </h2>
                </div>
            
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <div class="card-body">
                   All our package have their various percentage of return tag to them on investment </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingTwo">
                  <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      <i class="fa-solid fa-circle-question"></i>
                      <span>How long does it take to cash out my investment earnings</span>
                    </button>
                  </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                  <div class="card-body">
                    All investment plan have a maturity period between 3 months - 12 months depending on the plan
                                    </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingThree">
                  <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      <i class="fa-solid fa-circle-question"></i>
                      <span>I forgot my password, what should I do?</span>
                    </button>
                  </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                  <div class="card-body">
                   Kindly go to the login page and tap on the forgot password link
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingFour">
                  <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                      <i class="fa-solid fa-circle-question"></i>
                      <span>How will I know that the withdrawal has been successful?</span>
                    </button>
                  </h2>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                  <div class="card-body">
                    You will get an automatic notification via mail once we approve your withdrawal and you can equally check your dashboard to monitor payment status of your investment after you have placed withdrawal request.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- faq section end -->


    <section class="pt-120 pb-120 bg_img overlay--radial" data-background="assets/images/bg/bg-7.jpg">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <div class="section-header">
              <h2 class="section-title"><span class="font-weight-normal">What Users Say</span> <b class="base--color">About Us</b></h2>
              <p>Here are reviews from some of our investors so far</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="testimonial-slider">
              <div class="single-slide">
                <div class="testimonial-card">
                  <div class="testimonial-card__content">
                    <p>A very worthwhile platform. Their customer service is always prompt and they always pay within a very shortwhile after placing withdrawal request  </p>
                  </div>
                  <div class="testimonial-card__client">
                    <div class="thumb">
                      <img src="image/investors/investor1.jpg" alt="image">
                    </div>
                    <div class="content">
                      <h6 class="name">Tony Sam</h6>
                      <!--<span class="designation">CEO of fahaddevs</span>-->
                      <div class="ratings">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                      </div>
                    </div>
                  </div>
                </div>
                

              </div>
              
              <div class="single-slide">
                <div class="testimonial-card">
                  <div class="testimonial-card__content">
                    <p>I have been an active investor with BlackRock and I really do hope higher plans are added to the investment plans soon </p>
                  </div>
                  <div class="testimonial-card__client">
                    <div class="thumb">
                      <img src="image/investors/investor2.jpg" alt="image">
                    </div>
                    <div class="content">
                      <h6 class="name">Alina</h6>
                      <!--<span class="designation">CTO of fahaddevs</span>-->
                      <div class="ratings">
<i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>                      </div>
                    </div>
                  </div>
                </div>
                
              </div>
              <div class="single-slide">
                <div class="testimonial-card">
                  <div class="testimonial-card__content">
                    <p>Been an investor for quite some time now, I have actually received all my returns as promised & I have also referred my friends already</p>
                  </div>
                  <div class="testimonial-card__client">
                    <div class="thumb">
                      <img src="image/investors/investor3.jpg" alt="image">
                    </div>
                    <div class="content">
                      <h6 class="name">James Tadon</h6>
                      <!--<span class="designation">COO of fahaddevs</span>-->
                      <div class="ratings">
<i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>                        <i class="las la-star-alt"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section class="d-flex align-items-center justify-content-center video flex-column">
      <h4>Watch Video</h4>
      <a href="{{ asset('video/video.mp4') }}" class="play-video">Play video</a>
    </section>


    <!-- cta section start -->
    <section class="pb-120">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-8">
            <div class="cta-wrapper bg_img border-radius--10 text-center" data-background="assets/images/bg/bg-8.jpg">
              <h2 class="title mb-3">Get Started Today With Us</h2>
              <p>BlackRock is a Revolutionary Money Earning Platform from your Comfort! Invest with Apex Pro Today and Make Fast Money. Not only we guarantee the fastest and the most exciting returns on your investments, but we also guarantee the security of your investment.</p>
              <a href="{{ route('signup') }}" class="cmn-btn mt-4">Join Us</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- cta section end -->

    <style>
    
    #investment {
    font-weight: bold;
    color: #fff;
    background-color: #333;
    padding: 10px;
    bottom:80px;
    left:0;
    font-size:85%;
    position:fixed;
    width:300px;
    box-shadow:0 0 8px grey;
    z-index:10;
    }
    
    </style>
    
    <p id="investment" class="border rounded" style="display:none"></p>
    
    <script>  
    let investments = [
    { name: 'Aarav', amount: 500 },
    { name: 'Arjun', amount: 1000 },
    { name: 'Daksh', amount: 750 },
    { name: 'Dhruv', amount: 250 },
    { name: 'Ananya', amount: 1500 },
    { name: 'Ayaan', amount: 1250 },
    { name: 'Moon', amount: 300 },
    { name: 'Aditya', amount: 1350 },
    { name: 'Anika', amount: 2300 },
    { name: 'Darsh', amount: 620 }, 
    { name: 'Ishan', amount: 50 },
    { name: 'Arthav', amount: 1000 },
    { name: 'Arya', amount: 870 },
    { name: 'Aditi', amount: 280 },
    { name: 'Aarush', amount: 150 },
    { name: 'Jambudvipa', amount: 600 },
    { name: 'Aryavarta', amount: 2800 },
    { name: 'Hindustan', amount: 800 },
    { name: 'Bharat', amount: 745 },
    { name: 'Darsh', amount: 3000 },
    { name: 'Aadi', amount: 90},
    { name: 'Dev', amount: 435 },
    { name: 'Kabir', amount: 291},
    { name: 'Abhay', amount: 975},
    { name: 'Advik', amount: 1230 },
    { name: 'Arun', amount: 400 },
    { name: 'Ganesha', amount: 550 }
    ];
    
    // Get the div element to display the investment
    let investmentDiv = document.getElementById('investment');
    
    // Define a function to update the investment div
    function updateInvestment() {
    // Get the name and amount of the first object in the array
    let name = investments[0].name;
    let amount = investments[0].amount;
    let array=["an investment", "a withdrawal"] ;
   
    var rand=array[Math.floor(Math.random() * array.length)];
    // i update the information with the one I pick from the div 
    // I used innerHTML or textContent to manipulate my html
    investmentDiv.textContent = `${name} made ${rand} of $${amount} on BlackRock`;
    
    investments.shift();
    
    investments.push({ name, amount });
    
    
    setTimeout(function() {
    investmentDiv.style.display = 'none';
    }, 3000);
    } 
   
   setTimeout(function() {
   investmentDiv.style.display
   }, 5000);
    
    setInterval(function() {
    
    investmentDiv.style.display = 'inline-block';
    updateInvestment();
    }, 7000);
    
    
    
      </script>
  
  @include('partials.footer')
  @include('partials.whatsapp')

   <!-- footer section start -->
  <script type="text/javascript">
    function googleTranslateElementInit() {
    new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
    }
    </script>

    
@endsection