@extends('section.users')

@section('title')
  BlackRock || Investment Plan
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
    <section class="inner-hero bg_img" data-background="{{ asset('image/blackrock.jpeg') }}">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2 class="page-title">Investment Plan</h2>
            <ul class="page-breadcrumb">
              <li><a href="{{ route('index') }}">Home</a></li>
              <li>Investment Plan</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- inner hero end -->
    <section class="pt-60 pb-120">
      <div class="container">
        <div class="row mb-none-30 justify-content-center">
          <div class="col-lg-3 mb-30">
            <div class="package-card text-center bg_img" data-background="">
              <h4 class="package-card__title base--color mb-2">Starter plan</h4>

              <ul class="package-card__features mt-4">
                <li>Return 10000USD</li>

                <li>
                  Every Day
                </li>
                <li>For 2 Day </li>
                <li>
                  Total 20000USD

                  + <span class="badge badge-success">Capital</span>
                </li>
              </ul>
              <div class="package-card__range mt-5 base--color"> $100 - $400
              </div>
              <a href="{{ route('confirmdeposits') }}" class="cmn-btn btn-md mt-4 investButton">Invest Now</a>
            </div><!-- package-card end -->
          </div>
          <div class="col-lg-3 mb-30">
            <div class="package-card text-center bg_img" data-background="">
              <h4 class="package-card__title base--color mb-2">Pro plan</h4>

              <ul class="package-card__features mt-4">
                <li>Return 50000USD</li>

                <li>
                  Every Day
                </li>
                <li>For 3 Day </li>
                <li>
                  Total 150000USD

                  + <span class="badge badge-success">Capital</span>
                </li>
              </ul>
              <div class="package-card__range mt-5 base--color"> $500 - $1000
              </div>
              <a href="{{ route('confirmdeposits') }}" class="cmn-btn btn-md mt-4 investButton">Invest Now</a>
            </div><!-- package-card end -->
          </div>
          <div class="col-lg-3 mb-30">
            <div class="package-card text-center bg_img" data-background="">
              <h4 class="package-card__title base--color mb-2">HIGH RANK PLAN</h4>

              <ul class="package-card__features mt-4">
                <li>Return 100000USD</li>

                <li>
                  Every Day
                </li>
                <li>For 7 Day </li>
                <li>
                  Total 700000USD

                  + <span class="badge badge-success">Capital</span>
                </li>
              </ul>
              <div class="package-card__range mt-5 base--color"> $2000 - $10000
              </div>
              <a href="{{ route('confirmdeposits') }}" class="cmn-btn btn-md mt-4 investButton">Invest Now</a>
            </div><!-- package-card end -->
          </div>
        </div>
      </div>
    </section>


    <!-- Modal -->
    <div class="modal fade" id="depoModal" tabindex="-1" role="dialog" aria-hidden="true">

      <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-bg">
          <div class="modal-header">
            <strong class="modal-title text-white" id="ModalLabel">
              Confirm to invest on <span class="planName"></span>
            </strong>
            <a href="javascript:void(0)" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </a>
          </div>
          <form action="" method="post" class="register">
            <div class="modal-body">
              <div class="form-group">
                <h6 class="text-center investAmountRenge"></h6>
                <p class="text-center mt-1 interestDetails"></p>
                <p class="text-center interestValidaty"></p>

                <div class="form-group ">
                  <strong class="text-white mb-2 d-block">Select wallet</strong>
                  <select class="form-control" name="wallet_type">
                    <option value="deposit_wallet">Deposit Wallet - $10</option>
                    <option value="interest_wallet">Interest Wallet -$0</option>
                    <option value="checkout">Checkout</option>
                  </select>
                </div>
                <input type="hidden" name="plan_id" class="plan_id">

                <div class="form-group">
                  <strong class="text-white mb-2 d-block">Invest Amount</strong>
                  <input type="text" class="form-control fixedAmount" id="fixedAmount" name="amount" value="" onkeyup="this.value = this.value.replace (/^\.|[^\d\.]/g, '')" autocomplete="off">
                </div>
              </div>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
              <button type="submit" class="btn cmn-btn">Yes</button>
            </div>

          </form>
        </div>
      </div>
    </div>
    @include('partials/footer')
    @include('partials/whatsapp')

  </div>


@endsection