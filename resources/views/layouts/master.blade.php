
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Goole fonts -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700%7CFira+Sans:300,400,400i,600" rel="stylesheet">
    <!-- Material icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/theme.min.css')}}">
    <title>Employer Management</title>
</head>

<body>
    
    <header class="site-header fixed-top bg-black border-bottom border-dark">
        <a href="#content" class="sr-only sr-only-focusable">Skip to content</a>
        <div class="container">

            <!-- Navbar -->
            <nav class="navbar main-nav navbar-expand-lg navbar-dark" aria-label="Main navigation">
                <a href="index.html" class="navbar-brand d-inline-flex text-uppercase">Focus <i class="material-icons ml-2" aria-hidden="true">donut_large</i></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse text-uppercase" id="navbarContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="pages.html" class="nav-link">Pages</a>
                        </li>
                        <li class="nav-item">
                            <a href="components.html" class="nav-link">Components</a>
                        </li>
                        <li class="nav-item">
                            <a href="style.html" class="nav-link">Style</a>
                        </li>
                        <li class="nav-item">
                            <a href="start.html" class="nav-link">Start</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

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
                <a href="pages.html" class="btn btn-outline-white">View all pages</a>
            </div>
        </div>


        <!-- Call to action -->
        
    </main>
    
    <!-- Footer -->
    <footer class="bg-white text-dark">
        <div class="container pt-6 pb-2">
            <div class="row justify-content-md-between">
                <div class="col-4 col-md-2 mb-4">
                    <h4 class="h6">About</h4>
                    <ul class="nav flex-column">
                        <li class="mb-1"><a href="#" class="text-muted">Team</a></li>
                        <li class="mb-1"><a href="#" class="text-muted">Careers</a></li>
                        <li class="mb-1"><a href="#" class="text-muted">Blog</a></li>
                        <li class="mb-1"><a href="#" class="text-muted">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="col-4 col-md-2 mb-4">
                    <h4 class="h6 mb-3">Services</h4>
                    <ul class="nav flex-column">
                        <li class="mb-1"><a href="#" class="text-muted">Branding</a></li>
                        <li class="mb-1"><a href="#" class="text-muted">Design</a></li>
                        <li class="mb-1"><a href="#" class="text-muted">Photography</a></li>
                        <li class="mb-1"><a href="#" class="text-muted">UX/UI</a></li>
                    </ul>
                </div>
                <div class="col-4 col-md-2 mb-4">
                    <h4 class="h6 mb-3">Social</h4>
                    <ul class="nav flex-column">
                        <li class="mb-1"><a href="#" class="text-muted">Twitter</a></li>
                        <li class="mb-1"><a href="#" class="text-muted">Instagram</a></li>
                        <li class="mb-1"><a href="#" class="text-muted">Dribbble</a></li>
                        <li class="mb-1"><a href="#" class="text-muted">Facebook</a></li>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-4 mb-4">
                    <h3 class="h6 mb-3">Company</h3>
                    <p class="text-muted">Focus is a responsive website theme based on Bootstrap 4. We help you to create a site that your users will love.</p>
                </div>
            </div>
            <hr>
            <p class="small">&copy; Made by 11bits with Bootstrap</p>
        </div>
    </footer>

<script src="{{asset('frontend/js/theme.min.js')}}"></script>
</body>
</html>
