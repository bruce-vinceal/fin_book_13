@extends('layouts.layout')

@section('content')
@include('components.nav')
<section class="hero">
    <!-- @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif -->
        <div class="container">
            <div class="row">
                <div class="col-lg-7 text">
                    <h1>Manage your financials <br>in just a click.</h1>
                    <p>Automate your income and expenses today!</p>
                    <button class="btn btn-outline-success member" type="button">become a member</button>
                </div>
                <div class="col-lg-5 img"><img class="laptop" src="/img/asset.png" alt="laptop"></div>
            </div>
        </div>
</section>
<section class="about-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 img"><img class="savings" src="/img/savings.png" alt="savings"></div>
            <div class="col-lg-6 about">
                    <h6>Our Service</h6>
                    <h2>What is finote?</h2>
                    <p class="caption">Finote is an automated financial notebook that manages a user's financials.</p>
                    <p class="sub">Finote allows the users to write down the expenses everyday such as meal, snacks, jeepney fare, fuels etc. They can also encode the income received such as salary or allowances.</p>
            <div>
    </div>
</section>
<section class="feature-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="feature mb-5">
                    <h6>Our Feature</h6>
                    <h2>What Finote Offers</h2>
                    <p class="caption">By solely focusing on writing the income and expenses, the user will be aware where their money goes and can easily identify which part of the spending need to be cut.</p>
                </div>
            </div>
        </div>
        <div class="row card-row">
            <div class="feature-card d-flex">
                <div class="col-lg-4">
                    <div class="card" style="width: 18rem;">
                        <span class="feature-icon"><i class="fad fa-layer-group"></i></span>
                        <h6 class="card-title">Category Management</h6>
                            <div class="card-body my-2">
                                <p class="card-text">Allows users to create an expense or income category.</p>
                            </div>
                        </div>
                </div>
                <div class="col-lg-4">
                    <div class="card" style="width: 18rem;">
                        <span class="feature-icon"><i class="fad fa-table"></i></span>
                        <h6 class="card-title">Ledger</h6>
                        <div class="card-body my-2">
                            <p class="card-text">Shows the list of all expenses and income in a table.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card" style="width: 18rem;">
                        <span class="feature-icon"><i class="fad fa-chart-pie-alt"></i></span>
                        <h6 class="card-title">Monthly Report</h6>
                        <div class="card-body my-2">
                            <p class="card-text">Shows the summary of all income and expenses within the month.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="user-sec">
        <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="user mb-5">
                    <h6>Become A Member</h6>
                    <h2>Getting Started With Finote</h2>
                    <p class="caption">Start to managing your money. It’s fun, easy, and takes only a few minutes!</p>
                </div>
            </div>
        </div>
        <div class="row card-row">
            <div class="user-card d-flex">
                <div class="col-lg-4">
                    <div class="card" id="user-card" style="width: 18rem;">
                    <span class="user-icon"><i class="fad fa-user-circle"></i></span>
                    <h6 class="card-title">Create Account</h6>
                        <div class="card-body my-2">
                            <p class="card-text">Create an account and logged in.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card" id="user-card" style="width: 18rem;">
                        <span class="user-icon"><i class="fad fa-layer-plus"></i></span>
                        <h6 class="card-title">Create Category</h6>
                        <div class="card-body my-2">
                            <p class="card-text">Create a category for your expense or income.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card" id="user-card" style="width: 18rem;">
                        <span class="user-icon"><i class="fad fa-tasks"></i></span>
                        <h6 class="card-title">List All Finances</h6>
                        <div class="card-body my-2">
                            <p class="card-text">Write down your expenses everyday as well as your income recieved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="team-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="team mb-5">
                    <h6>Behind Finote</h6>
                    <h2>Meet Our Team</h2>
                    <p class="caption">Our experts in the field of finance can always help you with any of your questions!</p>
                </div>
            </div>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="team-body text-center">
                                    <p class="team-text">Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.Nullam id dolorid nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                                    <h6 class="team-name">Bruce Alturas</h6>
                                    <h6 class="team-pos">Font-End Developer</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                       <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="team-body text-center">
                                    <p class="team-text">Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.Nullam id dolorid nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                                    <h6 class="team-name">Euniel Jamero</h6>
                                    <h6 class="team-pos">Back-End Developer</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="team-body text-center">
                                    <p class="team-text">Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.Nullam id dolorid nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                                    <h6 class="team-name">John Pleños</h6>
                                    <h6 class="team-pos">Project Manager</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="previous" aria-hidden="true"><i class="fad fa-angle-left"></i></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="next" aria-hidden="true"><i class="fad fa-angle-right"></i></span>
                    <span class="sr-only">Next</span>
                </a>
        </div>
    </div>
</section>
<section class="contact-sec">
</section>
@endsection