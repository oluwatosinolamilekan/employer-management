@extends('layouts.master')

@section('content')

<main id="content">

        <!-- Article -->
        <div class="container py-6">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h1>Why clean design creates better experiences</h1>
                    <hr class="border-1 border-light my-4 ml-0 text-left w-15" role="presentation">
                    <div class="d-flex align-items-center mb-3">
                        {{-- <img src="assets/img/tim-schoch.jpg" class="avatar avatar-sm mr-3" alt="Tim Schoch"> --}}
                        <div class="font-italic text-light">by <a href="#">Tim Schoch</a></div>
                        <div class="text-secondary ml-auto">5 days ago | 5 min read</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white text-black">
            <div class="container py-2">
                <div class="bg-white mt-n6 px-3 px-lg-0">
                    <div class="row justify-content-center py-4 py-lg-5">
                        <div class="col-md-10 col-lg-8">
                            <p>This is a sample intro paragraph and can be used to introduce readers to your article. Proin sodales quam nec ante sollicitudin lacinia. Ut egestas bibendum tempor.</p>
                            <h2>Use negative space</h2>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint <a href="#">occaecat cupidatat</a> non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <figure class="figure mt-2">
                                {{-- <img src="assets/img/paper.jpg" class="img-fluid" alt="Person writing on white printer paper in front of silver iMac"> --}}
                                <figcaption class="figure-caption p-2 text-center">This is a caption</figcaption>
                            </figure>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <blockquote class="blockquote my-4">
                                <p class="font-italic">Lorem ipsum dolor sit amet, consectetur adipiscing elit integer posuere erat a ante.</p>
                                <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                            </blockquote>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                            <hr class="my-4">
                            <h3 class="sr-only">Tags</h3>
                            <a href="#" class="btn btn-sm btn-outline-dark mr-2 mb-3">Design</a>
                            <a href="#" class="btn btn-sm btn-outline-dark mb-3">Minimalism</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection