@extends('section.users')

@section('title')
  BlackRock || {{ auth()->user()->username }} || Confirm Your Deposists
@endsection

@section('content')

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
    @include('partials/navbar')
    <section class="inner-hero bg_img" data-background="{{ asset('image/blackrock.jpeg') }}">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2 class="page-title">Deposit Confirm</h2>
            <ul class="page-breadcrumb">
              <li><a href="{{ route('index') }}">Home</a></li>
              <li>Deposit Confirm</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- inner hero end -->
    <section class="cmn-section">
      <div class="container">
        <div class="row mb-60-80 justify-content-center">
          <div class="col-md-8">
            <div class="card">
              <div class="card-body  ">
                  <div class="row">
                    <div class="col-md-12 text-center">
                      <h4 class="text-center mb-4">Please follow the instruction bellow</h4>
                      @isset($account->account)
                        <p class="my-4 text-center">{{ $account->account }}</p>
                      @endisset
                    </div>
                  </div>
                <form action="{{ route('upload') }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                    <label><strong>UPLOAD PAYMENT PROOF <span class="text-danger">*</span> </strong></label>
                    <br>
                  </div>
                  @if (session('success'))
                      <div class="alert alert-success">
                          {{ session('success') }}
                      </div>
                  @endif
                  @error('file')
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      <strong>{{ $message }}</strong>
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div> 
                  @enderror 
                  <div class="mb-3 d-flex flex-column align-items-center">
                    <input class="form-control" type="file" name="file" id="formFile">
                    <input type="number" class="mt-2 form-control" name="amount" id="amount" placeholder="Enter Amount Deposited">
                    <select name="method" class="mt-2">
                      <option value="" selected="" disabled="">Select method of payment</option>
                      <option value="Bitcoin">Bitcoin</option>
                      <option value="Bank Transfer">Bank Transfer</option>
                    </select>
                    <input type="submit" class="btn btn-info w-100 mt-2" value="Pay now">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    @include('partials/footer')
    @include('partials/whatsapp')
  </div> <!-- page-wrapper end -->
@endsection
