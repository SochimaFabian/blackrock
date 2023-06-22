@extends('section.admin')

@section('content')

<div class="wrapper">
  <!-- Navbar -->

  @include('partials.topadminnavbar')
  @include('partials.adminnavbar')

  <div class="content-wrapper">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <header class="text-align">
            <h2 class="text-align">Users Table</h2>
          </header>
        </div>
      </div>
    </section>
  </div>

</div>
@endsection