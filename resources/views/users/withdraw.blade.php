@extends('section.users')

@section('title')
  BlackRock || {{ auth()->user()->username }} || Withdraw
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


  @include('partials.navbar')
  <!-- header-section end  -->

    
    <!-- inner hero start -->
    <section class="inner-hero bg_img" data-background="{{ asset('image/blackrock.jpeg') }}">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2 class="page-title">Withdraw Money</h2>
            <ul class="page-breadcrumb">
              <li><a href="{{ route('index') }}">Home</a></li>
              <li>Withdraw Money</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- inner hero end -->
    <section class="cmn-section pt-60">
        <div class="container ">
            <div class="col-lg-12 mb-4 p-4 border" style="border-radius: 10px;">
              <form action='{{ route("place_withdraw") }}' method="post">
                @csrf
                <legend align='center'>
                  <h2>Withdraw Funds</h2>
                </legend>
                @if(session('message'))
                  <div class="alert alert-success" role="alert">
                    {{ session('message') }}
                  </div>
                @elseif(session('error'))
                  <div class="alert alert-danger" role="alert">
                    {{ session('error') }}
                  </div>
                @endif
                <div class="mb-3">
                  <label for="account" class="form-label">Account Number or Wallet Address</label>
                  <input required type="text" class="form-control" id="account" placeholder="Enter your account number">
                </div>
                <div class="mb-3">
                  <label for="bank" class="form-label">Bank Account</label>
                  <input required type="text" class="form-control" id="bank" placeholder="Enter the name of your bank">
                  <div class="text-danger fs-1">**Note if payment is been made with bitcoin, please enter bitcoin</div>
                </div>
                <div class="mb-3">
                  <label for="method">Method of Payment</label>
                  <select required="" name="method">
                    <option selected="" disabled="">Select method of payment</option>
                    <option value="bank">Bank Transfer</option>
                    <option value="BTC">Bitcoin</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="amount">Amount to be Withdrawn</label>
                  <input required type="number" class="form-control" name="amount" placeholder="Enter amount your would want to Withdraw">
                </div>
                <div class="mb-3">
                  <button type="submit" class="btn btn-primary">Withdraw</button>
                </div>
              </form>                    
            </div>
                
          </div>
    </section>


    </div>

    

    
  @include('partials.footer')
  @include('partials.whatsapp')
<!-- footer section end -->
  </div>

@endsection