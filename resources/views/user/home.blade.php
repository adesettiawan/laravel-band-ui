@extends('layouts.app')

@section('content')
  {{-- Main section --}}
  <div class="section-main">
    <nav class="container navbar navbar-expand-lg py-3">
        <a class="navbarBrand" href="/">BB&C|</a>
        <button class="navbar-toggler navbar-dark mb-2" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link text-uppercase" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-uppercase" href="#schedules">Schedules</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-uppercase" href="#events">Events</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-uppercase" href="#videos">Videos</a>
            </li>
          </ul>
        </div>
      </nav>
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-text">
                    <h1 class="text-white text-uppercase text-tittle">Heaven's <pre class="text-white text-uppercase textH">DooR</pre></h1>
                    <p class="text-white font-style-landing">Lorem ipsum dolor sit amet, cto magni perferendis iste?</p>
                    <a href="#schedules" class="button-read-more text-uppercase">Read More</a>
                </div>
            </div>
        </div>
    </div>
    {{-- End Main section --}}


    {{-- Schedule section --}}
    <div class="section-schedules" id="schedules">
      <div class="container section-schedules">
        <h3 class="text-schedules-section text-uppercase">Schedules</h3>
        <div class="row py-5">
          <div class="col-md-12 d-flex flex-column justify-content-center align-items-stretch">
            <div class="accordion-list">
              <ul>
                <li>
                  <a data-toggle="collapse" class="collapse" href="#accordion-list-1"><span>01</span> Taman Mini Indonesia Indah <i class="fa fa-chevron-down icon-show"></i><i class="fa fa-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-parent=".accordion-list">
                    <p class="text-accordion">
                      Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti esse, ipsum amet officia soluta accusamus similique ratione expedita eius culpa perspiciatis aperiam aspernatur placeat consequatur ad aut ex accusantium pariatur.
                      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius odit, ratione eaque modi accusamus aliquid nulla, consequuntur cumque molestias et minima neque qui, enim porro sint ea repellat suscipit quod!
                    </p>
                  </div>
                </li>

                <li>
                  <a data-toggle="collapse" href="#accordion-list-2" class="collapsed"><span>02</span> Ancol <i class="fa fa-chevron-down icon-show"></i><i class="fa fa-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-parent=".accordion-list">
                    <p class="text-accordion">
                      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem deleniti doloribus vel magnam illum tenetur porro quibusdam fugit. Provident repudiandae nam quidem doloremque numquam nihil quibusdam totam tenetur exercitationem quos?
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid provident aperiam quis? Esse, natus odio autem dolores ullam nesciunt voluptatibus fugit deserunt quo, tempore praesentium consequatur rerum corporis eveniet distinctio.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-toggle="collapse" href="#accordion-list-3" class="collapsed"><span>03</span> Stadion Gelora Bung Karno<i class="fa fa-chevron-down icon-show"></i><i class="fa fa-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-parent=".accordion-list">
                    <p class="text-accordion">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis sed minima voluptates animi ex. Est, vero ab. Esse culpa exercitationem sed ratione quibusdam, qui perspiciatis ut! Ut temporibus labore aliquam!
                      Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio sit vero aut, fugiat ut possimus velit laudantium quia a. Eveniet dicta molestias quis exercitationem delectus accusamus quisquam corporis iste sequi!
                    </p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <a href="/schedules" class="button-view-more-schedule text-uppercase mt-5 mb-5">View More</a>
        </div>
      </div>
    </div>
    {{-- End Schedule section --}}

    {{-- Event section --}}
    <div class="section-event" id="events">
      <div class="container section-event">
        <h3 class="text-event-section text-uppercase">Events</h3>
        <div class="row py-5">
          <div class="col-md-4">
            <div class="card card-anime">
              <img src="https://images.unsplash.com/photo-1468359601543-843bfaef291a?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=753&q=80" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img src="https://images.unsplash.com/photo-1496596634762-c92dca7d13a4?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
          </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img src="https://images.unsplash.com/photo-1486591978090-58e619d37fe7?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
         
          <a href="/events" class="button-view-more-event text-uppercase mt-5 mb-5">View More</a>
        </div>
      </div>
    </div>
    {{-- End Event section --}}

    {{-- Video section --}}
    <div class="section-video" id="videos">
      <div class="container section-video">
        <h3 class="text-video-section text-uppercase">Videos</h3>
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
         
          <a href="/videos" class="button-view-more-video text-uppercase mt-5 mb-5">View More</a>
        </div>
      </div>
    </div>
    {{-- End Video section --}}

    
@endsection
