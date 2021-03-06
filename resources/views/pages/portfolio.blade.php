@extends('layout')
@section('main')
    <section id="blogHeader" class="bg-portfolio-header text-light mt-2 p-2 fade-from-bt-2s" name="Blog Header">
        <div class="container text-center p-3">
            <h1>Our Portfolio</h1>
            <p class="text-start">We have included some of our work we have done previously to showcase some of our ability and customer projects. On each card, you will find a link to either our customers' website where they have graciously provided us permission to use them as reference points, or some of our demo sites.</p>
        </div>
    </section>

    <section style="min-height: 35vh;" class="container-fluid text-dark mt-2 p-2">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card rounded border border-primary shadow fade-from-bt-2s5">
                        <img src="/img/uTM_banner.png" alt="un-Traditional Magick Logo" class="card-img-top">
                        <div class="card-body">
                            <p class="text-primary lead card-text">One of our first customers whom we designed a website as well as a full Engagement and Learning Management System.</p>
                            <p class="text-end card-text"><a class="btn btn-outline-primary" href="https://un-traditionalmagick.com" target="_blank">Check it Out <i class="fas fa-external-link-alt mx-1"></i></a></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card rounded border border-primary shadow fade-from-bt-2s5">
                        <img src="/img/Acolyte-REALMS.png" alt="un-Traditional Magick Logo" class="card-img-top">
                        <div class="card-body">
                            <p class="text-primary lead card-text">Our personal and customized Remote Engagement And Learning Management System</p>
                            <p class="text-end card-text"><a href="/acolyte" class="btn btn-outline-primary" target="_blank">Find Out More</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
