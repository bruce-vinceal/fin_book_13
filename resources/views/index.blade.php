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
            <div class="col-lg-7 align-self-center text">
                <h1>Manage your financials <br>in just a click!</h1>
                <p>Automate your income and expenses today.</p>
                <a class="btn btn-outline-success" id="signup-btn" href="signup" role="button">become a member</a>
            </div>
            <div class="col-lg-5 align-self-center img"><img class="laptop" src="/img/asset.png" alt="laptop"></div>
        </div>
    </div>
</section>
<section class="about-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center img"><img class="savings" src="/img/savings.png" alt="savings"></div>
            <div class="col-lg-6 align-self-center about">
                    <h6>Our Service</h6>
                    <h2>What is finote?</h2>
                    <p class="caption">Finote is an automated financial notebook that manages a user's financials.</p>
                    <p class="sub">Finote allows the users to write down the expenses everyday such as meal, snacks, jeepney fare, fuels etc. They can also encode the income received such as salary or allowances.</p>
            <div>
    </div>
</section>
<section class="feature-sec">
    <div class="container ">
        <div class="row">
            <div class="col-lg-12 d-flex align-items-center flex-column">
                <div class="feature text-center mb-5">
                    <h6>Our Feature</h6>
                    <h2>What Finote Offers</h2>
                    <p class="caption">By solely focusing on writing the income and expenses, the user will be aware where their money goes and can easily identify which part of the spending need to be cut.</p>
                </div>
            </div>
        </div>
        <div class="row">
                <div class="col-lg-4 d-flex align-items-center flex-column">
                    <div class="card" style="width: 18rem;">
                        <span class="feature-icon"><i class="fad fa-layer-group"></i></span>
                        <h6 class="card-title">Category Management</h6>
                            <div class="card-body my-2">
                                <p class="card-text">Allows users to create an expense <br>or an income category.</p>
                            </div>
                        </div>
                </div>
                <div class="col-lg-4 d-flex align-items-center flex-column">
                    <div class="card" style="width: 18rem;">
                        <span class="feature-icon"><i class="fad fa-table"></i></span>
                        <h6 class="card-title">Ledger</h6>
                        <div class="card-body my-2">
                            <p class="card-text">Shows the list of all expenses <br>and income in a table.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex align-items-center flex-column">
                    <div class="card" style="width: 18rem;">
                        <span class="feature-icon"><i class="fad fa-chart-pie-alt"></i></span>
                        <h6 class="card-title">Monthly Report</h6>
                        <div class="card-body my-2">
                            <p class="card-text">Shows the summary of all income <br>and expenses within the month.</p>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</section>
<section class="user-sec">
        <div class="container">
        <div class="row">
            <div class="col-lg-12 d-flex align-items-center flex-column">
                <div class="user text-center mb-5">
                    <h6>Become A Member</h6>
                    <h2>Getting Started With Finote</h2>
                    <p class="caption">Start to managing your money. It’s fun, easy, and takes only a few minutes!</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 d-flex align-items-center flex-column">
                <div class="card" id="user-card" style="width: 18rem;">
                <span class="user-icon"><i class="fad fa-user-circle"></i></span>
                <h6 class="card-title">Create Account</h6>
                    <div class="card-body my-2">
                        <p class="card-text">Create an account and logged in.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex align-items-center flex-column">
                <div class="card" id="user-card" style="width: 18rem;">
                    <span class="user-icon"><i class="fad fa-layer-plus"></i></span>
                    <h6 class="card-title">Create Category</h6>
                    <div class="card-body my-2">
                        <p class="card-text">Create a category <br>for your expense or income.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex align-items-center flex-column">
                <div class="card" id="user-card" style="width: 18rem;">
                    <span class="user-icon"><i class="fad fa-tasks"></i></span>
                    <h6 class="card-title">List All Finances</h6>
                    <div class="card-body my-2">
                        <p class="card-text">Write down your expenses everyday <br>as well as your income recieved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="team-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 d-flex align-items-center flex-column">
                <div class="team text-center mb-5">
                    <h6>Behind Finote</h6>
                    <h2>Meet Our Team</h2>
                    <p class="caption">Our experts in the field of web development can always help you with any of your questions!</p>
                </div>
            </div>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="team-body text-center">
                        <img class="mb-3" src="/img/me.png" width="95px">
                        <p class="team-text">Our customers and users are our top priority. Our product is designed in a way that is much simpler and easier for them to interact with. It is designed to produce more efficient way of financing your expenses and income.</p>
                        <h6 class="team-name">Bruce Alturas</h6>
                        <h6 class="team-pos">Font-End Developer</h6>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="team-body text-center">
                        <img class="mb-3" src="/img/amigo.png" width="95px">
                        <p class="team-text">There are times when certain features and functionalities affect the site performance. Which is why this is built with various tools that help boost the web app performance. This allows our team and our product to bring extraordinary functionalities that stays on top of the technology needs.</p>
                        <h6 class="team-name">Euniel Jamero</h6>
                        <h6 class="team-pos">Back-End Developer</h6>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="team-body text-center">
                        <img class="mb-3" src="/img/sir.png" width="95px">
                        <p class="team-text">We cook up new products. You never really know if people will love them as much as you do.” “If you are not embarrassed by the first version of your product, you've launched too late.” “Make every detail perfect and limit the number details to perfect.”</p>
                        <h6 class="team-name">John Pleños</h6>
                        <h6 class="team-pos">Project Manager</h6>
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
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="contact text-center mb-5">
                    <h6>Contact Us</h6>
                    <h2>Let's Collaborate<h2>
                    <p class="caption">Need something built for your financial?</br>Talk to us about it.</p>
                    <div class="form">
                        <form id="contact-form">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Email Address</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Your Ideas</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="text-right">
                                <button type="submit" id="contact-btn" class="btn btn-outline-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span class="footer-copyright">Copyright <i class="far fa-copyright"></i> Finote 2020</span>
          </div>
        </div>
</footer>
@endsection