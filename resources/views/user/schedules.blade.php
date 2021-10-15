@extends('layouts.app')

@section('content')

{{-- Schedule section --}}
<div class="section-schedules">
    <div class="container section-schedules">
      <div class="row">
        <div class="col-md-6 d-flex justify-content-lg-between">
          <h3 class="text-schedules-section text-uppercase">Schedules</h3>
        </div>
        <div class="col-md-6 d-flex justify-content-lg-end align-content-end">
          <a href="/" class="button-view-more-schedule-H text-uppercase text-schedules-section mt-3"><i class="fa fa-home"></i> Home</a>
        </div>
      </div>
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
      </div>
      <div class="py-3"></div>
    </div>
  </div>
  {{-- End Schedule section --}}

@endsection