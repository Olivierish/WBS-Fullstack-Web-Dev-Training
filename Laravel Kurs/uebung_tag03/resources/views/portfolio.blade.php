@extends('layouts.app')
@section('title','Portfolio - OI Design')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="row">
            <h1 class="h1 display-1"> <span class="text-warning">Portfolio</span></h1>
        </div>
        <div class="row">
            <!-- <div class="col-sm-12"> -->
                <h2>Projects</h2>
                <p>Check out some of my previous projects to see my work in action: </p>
                <div class="col-sm-12">
                    <div class="card bg-dark text-light my-2 border-secondary border-opacity-25">
                        <div class="card-body">
                            <h5 class="card-title">
                            E-Commerce Website for Boutique Clothing Store
                            </h5>
                            <p class="card-text">This project involved creating a fully responsive e-commerce website for a boutique clothing store. The design focused on showcasing the latest fashion trends and providing a seamless shopping experience for customers. Key features included a user-friendly product catalog, secure payment integration, and an intuitive checkout process.</p>
                            <a href="#" class="btn btn-warning">Github</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="card bg-dark text-light my-2 border-secondary border-opacity-25">
                        <div class="card-body">
                            <h5 class="card-title">Corporate Website Redesign for Tech Startup</h5>
                            <p class="card-text">I had the opportunity to revamp the corporate website for a tech startup. The objective was to modernize the design, improve user experience, and highlight the company's innovative solutions. The redesign incorporated a clean and minimalist interface, easy navigation, and interactive elements to engage visitors. The result was a professional and visually appealing website that effectively communicated the brand's message.</p>
                            <a href="#" class="btn btn-warning">Github</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="card bg-dark text-light my-2 border-secondary border-opacity-25">
                        <div class="card-body">
                            <h5 class="card-title">Portfolio Website for Freelance Photographer</h5>
                            <p class="card-text">As a web designer, I collaborated with a freelance photographer to develop a portfolio website that showcased their stunning work. The website featured a visually captivating layout, an immersive photo gallery, and a user-friendly contact form to connect with potential clients. The design aimed to emphasize the photographer's unique style and create a memorable browsing experience for visitors.</p>
                            <a href="#" class="btn btn-warning">Github</a>
                        </div>
                    </div>
                </div>
            <!-- </div> -->
        </div>
        <div class="row">
            <h2 class="mt-5">My Clients</h2>
            <p>Check out some of my clients: </p>
            @foreach($daten AS $client)
                   <ul class ="list-group m-2 ">
                    <li class="list-group-item  bg-dark text-warning border-secondary border-opacity-25 fs-5">{{$client['name']}}</li>
                    <li class="list-group-item  bg-dark text-light border-secondary border-opacity-25"><span class="text-secondary">Project : </span>{{$client['project_name']}}</li>
                    <li class="list-group-item  bg-dark text-light border-secondary border-opacity-25"><span class="text-secondary">Description: </span>{{$client['description']}}</li>
                    </ul>

            @endforeach

        </div>
    </div>
</div>
@endsection
