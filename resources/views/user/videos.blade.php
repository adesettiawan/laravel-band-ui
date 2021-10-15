@extends('layouts.app')

@section('content')

{{-- Video section --}}
<div class="section-video">
    <div class="container section-video">
      <div class="row">
        <div class="col-md-6 d-flex justify-content-lg-between">
          <h3 class="text-video-section text-uppercase">Videos</h3>
        </div>
        <div class="col-md-6 d-flex justify-content-lg-end align-content-end">
          <a href="/" class="button-view-more-schedule-H text-uppercase text-schedules-section mt-3"><i class="fa fa-home"></i> Home</a>
        </div>
      </div>
      <div class="row py-5">
        <div class="col-md-6">
          <div class="card">
            <img src="https://images.unsplash.com/photo-1468359601543-843bfaef291a?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=753&q=80" class="card-img-top" height="250" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <img src="https://images.unsplash.com/photo-1496596634762-c92dca7d13a4?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" class="card-img-top" height="250"  alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 mt-4">
          <div class="card">
            <img src="https://images.unsplash.com/photo-1468359601543-843bfaef291a?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=753&q=80" class="card-img-top" height="250" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 mt-4">
          <div class="card">
            <img src="https://images.unsplash.com/photo-1496596634762-c92dca7d13a4?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" class="card-img-top" height="250"  alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="py-3"></div>
    </div>
  </div>
  {{-- End Video section --}}
    
@endsection