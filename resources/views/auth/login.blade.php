@extends('section.auth')


@section('title')
BlackRock - Sign In
@endsection


@section('content')
	

    <!-- scroll-to-top start -->
    <div class="scroll-to-top">
      <span class="scroll-icon">
        <i class="fa fa-rocket" aria-hidden="true"></i>
      </span>
    </div>
    <!-- scroll-to-top end -->

  <div class="full-wh">
    <!-- STAR ANIMATION -->
    <div class="bg-animation">
      <div id='stars'></div>
      <div id='stars2'></div>
      <div id='stars3'></div>
      <div id='stars4'></div>
    </div><!-- / STAR ANIMATION -->
  </div>
  <div class="page-wrapper">
      <!-- header-section start  -->


    @include('partials.navbar')

        <!-- account section start -->
    <div class="account-section bg_img" data-background="">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-5 col-lg-7">
            <div class="account-card">
              <div class="account-card__header bg_img overlay--one" data-background="">
                <h2 class="section-title">Welcome To <span class="base--color">BlackRock</span></h2>
                <p>Login to continue</p>
              </div>
              <div class="account-card__body">
                <form action="{{ route('authenticate') }}" class="mt-4" method="post">
                  @csrf
                    @if (session('message'))
                      <div class="alert alert-danger">
                        {{ session('message') }}
                      </div>
                    @endif           
                    <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Enter user name" required>
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" type="text" class="form-control" name="password" placeholder="Enter password" required>
                  </div>
                  <div class="form-group d-flex justify-content-center">
                  </div>

                  <div class="mt-3">
                    <button type="submit" class="cmn-btn">Login Now</button>
                  </div>
                  <div class="form-row mt-2">
                    <div class="col-sm-12 text-sm-right">
                      <p class="f-size-14">Haven't an account? <a href="{{ route('signup') }}" class="base--color">Sign Up</a></p>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- account section end -->

    @include('partials.footer')
    @include('partials.whatsapp')
<!-- footer section end -->
</div> <!-- page-wrapper end -->


@endsection