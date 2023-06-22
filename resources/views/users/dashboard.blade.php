@extends('section.users')

@section('title')
  BlackRock || Dashboard
@endsection

@section('content')


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
    <!-- inner hero start -->
    <section class="inner-hero bg_img" data-background="{{ asset('image/blackrock.jpeg') }}">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2 class="page-title">Dashboard</h2>
            <ul class="page-breadcrumb">
              <li><a href="{{ route('index') }}">Home</a></li>
              <li>Dashboard</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- inner hero end -->
    <div class="pt-120 pb-120">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12 pl-lg-5 mt-lg-0 mt-5">
            <div class="row mb-none-30">
              <div class="col-md-12 mb-4">
                <label>Email</label>
                <div class="input-group">
                  <input type="text" name="text" class="form-control" id="referralURL" value="{{ auth()->user()->email }}" readonly>
                  <div class="input-group-append">
                    <span class="input-group-text copytext copyBoard" id="copyBoard"> <i class="fa fa-mail"></i> </span>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="d-widget d-flex flex-wrap">
                  <div class="col-8">
                    <span class="caption">Deposit Wallet Balance</span>
                    <h4 class="currency-amount"><span>$</span> {{ $balance }} </h4>
                  </div>
                  <div class="col-4">
                    <div class="icon ml-auto">
                      <i class="fa-solid fa-dollar-sign"></i>
                    </div>
                  </div>
                </div><!-- d-widget-two end -->
              </div>
            </div><!-- row end -->
            <div class="row mt-50">
              <div class="col-lg-12">
                <div class="table-responsive--md">
                  <table class="table style--two">
                    <thead>
                      <tr>
                        <th></th>
                        <th>Method of Payment</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Details</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td data-label=""></td>
                        <td data-label="Method of Payment"><span class="text-primary">Sign Up Bonus</span></td>

                        <td data-label="Amount">
                          <span class="text-success">+ $10</span>
                        </td>
                        <td data-label="Status">
                          <span class="badge badge-info">Deposit Wallet</span>
                        </td>
                        <td data-label="Details">You have got Sign Up Bonus</td>
                        <td data-label=""><span></span></td>
                      </tr>
                      @if($transcations)
                        @foreach($transcations as $transcation)
                        <tr>
                          <td data-label=""></td>
                          <td data-label="Transaction ID"><span class="text-primary">{{ $transcation->method }}</span></td>

                          <td data-label="Amount">
                            <span class="text-success">+ <span>$</span> {{ $transcation->amount }}</span>
                          </td>
                          <td data-label="Status">
                            @if($transcation->status == 'Cancelled')
                              <span class="badge badge-danger">{{ $transcation->status }}</span>
                            @elseif($transcation->status == 'Completed')
                              <span class="badge badge-success">{{ $transcation->status }}</span>  
                            @else
                              <span class="badge badge-info">{{ $transcation->status }}</span>
                            @endif
                          </td>
                          <td data-label="Details">{{ $transcation->details }}</td>
                          <td data-label=""><span> <span></span></span></td>
                        </tr>
                        @endforeach
                      @endif
                    </tbody>
                  </table>

                  @if(auth()->user()->typeofuser == 'admin')
                    <header>
                      <h2>Admin PANEL</h2>
                    </header>
                    <div class="py-4 mt-3 text-center">
                        <table class="table table-striped" style="color: #fff">
                        <header>
                          <h3>All transcations</h3>
                        </header>
                        <thead>
                              <tr>
                                <th scope="col">Method</th>
                                <th scope="col">Details</th>
                                <th scope="col">Status</th>
                                <th scope="col">Amount</th>
                                <th scope="col">File</th>
                                <th scope="col">Action</th>
                              </tr>
                          </thead>
                        <tbody>
                          @if($datas)
                            @foreach($datas as $transcation)
                              <tr scope="row">
                                <td scope="col">{{ $transcation->method }}</td>
                                <td scope="col">{{ $transcation->details }}</td>
                                <td scope="col">  
                                  @if($transcation->status == 'Completed')
                                    <span class="badge badge-success">{{ $transcation->status }}</span>
                                  @else
                                    <span class="badge badge-danger">{{ $transcation->status }}</span>
                                  @endif
                                </td>
                                <td scope="col">{{ $transcation->amount }}</td>
                              <td>
                                <a href="{{ asset('uploads') }}/{{ $transcation->filename }}" target="__parent" class="badge badge-info">View File</a>
                              </td>
                              <td>
                                <form action="/complete/payment/{{ $transcation->amount }}/user_id/{{ $transcation->user->id }}/{{ $transcation->id }}" method="post">
                                  @csrf
                                  @method('PUT')
                                  <button class="badge badge-info border" type="submit">Complete Payment</button>
                                </form>
                              </td>
                              </tr>
                            @endforeach
                          @endif
                        </tbody>
                    </table>

                    </div>

                  <div class="py-4">
                <table class="table" style="color: #fff">
                  <header class="text-center">
                    <h3>Users Table</h3>
                  </header>

                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Username</th>
                      <th scope="col">Email</th>
                      <th scope="col">Country</th>
                      <th scope="col">Role</th>
                      <th scope="col">*</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if($users)
                      @foreach($users as $user)
                        <tr>
                          <th scope="row">{{ $user->id }}</th>
                          <td>{{ $user->username }}</td>
                          <td>{{ $user->email }}</td>
                          <td>{{ $user->country }}</td>
                          <td>{{ $user->typeofuser }}</td>
                          <td>
                            <form action='/admin/{{ $user->id }}/deactivate' method="post" class="d-inline">
                                @csrf
                                @method('PUT')
                                <button class="link-opacity-100 bg-dark border">{{ $user->status }}</button>
                              </form>
                          </td>
                        </tr>
                      @endforeach
                    @endif
                  </tbody>
                </table>
                  </div>

                <form action="{{ route('account') }}" method="post" class="d-flex flex-column">
                  @csrf
                  <header>Account details</header>
                  <textarea style="background-color: transparent;color: #fff;" name='account' placeholder="PLEASE FILL BANK NAME, BANK ACCOUNT NUMBER, BRANCH CODE, ACCOUNT TYPE, CURRENT ACCOUNT NOTE">{{ $account->account }}</textarea>
                  <button class="mt-2 mb-4" type="submit" class="btn btn-info">Submit</button>
                </form>

                  @endif


                </div>
              </div>
            </div>
            <div class="tradingview-widget-container">
              <div class="tradingview-widget-container__widget"></div>
              <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-hotlists.js" async>
                {
                  "colorTheme": "dark",
                  "dateRange": "12M",
                  "exchange": "US",
                  "showChart": true,
                  "locale": "en",
                  "largeChartUrl": "",
                  "isTransparent": false,
                  "showSymbolLogo": false,
                  "showFloatingTooltip": false,
                  "width": "350",
                  "height": "600",
                  "plotLineColorGrowing": "rgba(41, 98, 255, 1)",
                  "plotLineColorFalling": "rgba(41, 98, 255, 1)",
                  "gridLineColor": "rgba(240, 243, 250, 0)",
                  "scaleFontColor": "rgba(106, 109, 120, 1)",
                  "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",
                  "belowLineFillColorFalling": "rgba(41, 98, 255, 0.12)",
                  "belowLineFillColorGrowingBottom": "rgba(41, 98, 255, 0)",
                  "belowLineFillColorFallingBottom": "rgba(41, 98, 255, 0)",
                  "symbolActiveColor": "rgba(41, 98, 255, 0.12)"
                }
              </script>
            </div>
            <!-- TradingView Widget END -->
          </div>
        </div>
      </div>
    </div>


  @include('partials.footer')
  @include('partials.whatsapp')

  </div> <!-- page-wrapper end -->
@endsection
