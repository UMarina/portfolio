@extends('layouts.app')
@section('content')
  <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">{{ $about->title }}</h2>
            <hr class="light my-4">
            <p class="text-faded mb-4">{{ $about->description }}</p>
            <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a>
          </div>
        </div>
      </div>
    </section>

    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">At Your Service</h2>
            <hr class="my-4">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          @foreach ($services as $service)
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class=" fa-4x {{$service->icon}} text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">{{ $service->title}}</h3>
              <p class="text-muted mb-0">{{$service->descriptions}}</p>
            </div>
          </div>
        @endforeach
         
        </div>
      </div>
    </section>

    <section class="p-0" id="portfolio">
      <div class="container-fluid p-0">
        <div class="row no-gutters popup-gallery">
         @foreach($portfolios as $portfolio)
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="uploads/portfolio/{{ $portfolio->preview }}">
              <img class="img-fluid" src="uploads/portfolio/{{ $portfolio->preview }}" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    {{ $portfolio->category }}
                  </div>
                  <div class="project-name">
                    {{ $portfolio->title }}
                  </div>
                </div>
              </div>
            </a>
          </div>
          @endforeach
        </div>
      </div>
    </section>

    <section class="bg-dark text-white" id="skills">
      <div class="container text-center">
        <h2 class="mb-4">My skills</h2>
          <div class="row">
          @foreach ($skills as $skill)
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <h3 class="mb-3">{{ $skill->skill}}</h3>
              <div class="progress" style="height: 20px;">
  <div class="progress-bar" role="progressbar" style="width: {{$skill->value}}%" aria-valuenow="{{$skill->value}}" aria-valuemin="0" aria-valuemax="100">{{$skill->value}}%</div>
</div>
            </div>
          </div>
        @endforeach
         
        </div>
      </div>
    </section>

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Let's Get In Touch!</h2>
            <hr class="my-4">
            <p class="mb-5">Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
            <p>{{$setting->tel}}</p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fas fa-at fa-3x mb-3 sr-contact"></i>
            <p>
              <a href="mailto:{{$setting->email}}">{{$setting->email}}</a>
            </p>
          </div>
        </div>
      </div>
    </section>
@endsection