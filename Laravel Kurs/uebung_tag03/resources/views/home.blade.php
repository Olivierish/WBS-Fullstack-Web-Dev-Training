@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="row">
            <h1 class="h1 display-1">Olivier <span class="text-warning">Ishimwe.</span></h1>
            <h2 class="h2 display-3"><span class="text-warning">Web </span>Designer.</h2>
        </div>
        <div class="row">
        <div class="col-sm-6">
            <div class="card bg-dark text-light my-2 border-secondary border-opacity-25">
            <div class="card-body">
                <h5 class="card-title">Welcome to my Portfolio</h5>
                <p class="card-text">I'm a Web Designer,
                                        <br>Creating Stunning and Functional Websites. I am a passionate and creative web designer with expertise in crafting visually appealing and user-friendly websites.</p>
                <a href="about" class="btn btn-warning">About me</a>
            </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card bg-dark text-light  my-2 border-secondary border-opacity-25">
            <div class="card-body">
                <h5 class="card-title">Clients</h5>
                <p class="card-text"> With 3 years of experience, I have worked with clients from various industries, helping them establish a strong online presence. My goal is to bring ideas to life and deliver exceptional designs that not only meet clients' expectations but also exceed them. </p>
                <a href="portfolio" class="btn btn-warning">My portfolio</a>
            </div>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="card bg-dark text-light  my-2 border-secondary border-opacity-25">
            <div class="card-body">
                <h5 class="card-title">Services I Offer</h5>
                <p class="card-text">Custom Website Design, Responsive Development, User Interface (UI) Design, Website Maintenance, E-commerce Solutions, SEO Optimization. <br>Let's collaborate and turn your vision into a captivating online experience.</p>
                <a href="portfolio" class="btn btn-warning">Services</a>
            </div>
            </div>
        </div>
        </div>

        </div>
    </div>
</div>
@endsection
