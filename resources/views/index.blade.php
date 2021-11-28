@extends('main')
@section('content')

<h1 class="mt-4">Simple Sidebar</h1>

<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="{{ url('assets/img/food.jpeg') }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Pecel</h5>
        <p class="card-text"><b>Rp</b> 10.000</p>
      </div>
      <div class="card-footer">
          <p>bkhv</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="{{ url('assets/img/index.jpeg') }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Rawon</h5>
        <p class="card-text"><b>Rp</b> 15.000</p>
      </div>
      <div class="card-footer">
          <p>hvjhf</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="{{ url('assets/img/food.jpeg') }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Pecel</h5>
        <p class="card-text"><b>Rp</b> 10.000</p>
      </div>
      <div class="card-footer">
          <p>bkhv</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="{{ url('assets/img/index.jpeg') }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Rawon</h5>
        <p class="card-text"><b>Rp</b> 15.000</p>
      </div>
      <div class="card-footer">
          <p>hvjhf</p>
      </div>
    </div>
  </div>
</div>
@endsection