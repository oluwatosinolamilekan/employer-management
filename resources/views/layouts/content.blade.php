@extends('layouts.master')

@section('content')
<main id="content">

    <!-- Hero -->
    <div class="container py-5">
        <h1 class="display-2 pb-2">Create an awesome design portfolio</h1>
        <hr class="border-3 border-white my-4 ml-0 text-left w-25" role="presentation">
        <div class="row">
            <div class="col-lg-8">
                <p class="font-serif lead mb-4 text-secondary">Focus is a clean and elegant Bootstrap theme for designers, architects, photographers and creative people.</p>
            </div>
        </div>
        <a href="https://themes.getbootstrap.com/product/focus/" class="btn btn-primary">Purchase - $39</a>
    </div>

    <!-- Projects -->
    <div class="container py-4">
        <ul class="row list-unstyled">
            <li class="col-md-6 mb-4">
                <a href="portfolio-1.html">
                    <figure class="img-overlay">
                        <img src="{{asset('frontend/img/portfolio-1.jpg')}}" alt="Interior designer" class="img-thumbnail">
                        <div class="img-hover">
                            <span class="img-text">View Page</span>
                        </div>
                    </figure>
                    <div class="h5 font-weight-normal text-center">Architecture</div>
                </a>
            </li>

            <li class="col-md-6 mb-4">
                <a href="portfolio-2.html">
                    <figure class="img-overlay">
                        <img src="{{asset('frontend/img/portfolio-2.jpg')}}" alt="..." class="img-thumbnail">
                        <div class="img-hover">
                            <span class="img-text">View Page</span>
                        </div>
                    </figure>
                    <div class="h5 font-weight-normal text-center">Interior Design</div>
                </a>
            </li>

            <li class="col-md-6 mb-4">
                <a href="portfolio-3.html">
                    <figure class="img-overlay">
                        <img src="{{asset('frontend/img/portfolio-3.jpg')}}" alt="..." class="img-thumbnail">
                        <div class="img-hover">
                            <span class="img-text">View Page</span>
                        </div>
                    </figure>
                    <div class="h5 font-weight-normal text-center">Photography</div>
                </a>
            </li>

            <li class="col-md-6 mb-4">
                <a href="portfolio-4.html">
                    <figure class="img-overlay">
                        <img src="{{asset('frontend/img/portfolio-4.jpg')}}" alt="..." class="img-thumbnail">
                        <div class="img-hover">
                            <span class="img-text">View Page</span>
                        </div>
                    </figure>
                    <div class="h5 font-weight-normal text-center">Web Design</div>
                </a>
            </li>
        </ul>
        <div class="text-center my-5">
            <a href="pages.html" class="btn btn-outline-white">View Companies</a>
        </div>
    </div>

    <!-- Call to action -->
    
</main>
@endsection