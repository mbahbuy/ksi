@extends('layouts.app')

@section('contenthome')

<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom bg-warning">
    <div class="container px-5">
        <!-- <a class="navbar-brand" href="#page-top">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#!">Sign Up</a></li>
                <li class="nav-item"><a class="nav-link" href="#!">Log In</a></li>
            </ul>
        </div> -->
    </div>
</nav>
<header class="d-flex flex-wrap justify-content-center mt-10">
    <img class="img-fluid" src="{{ asset('assets') }}/img/australian.png" width="20%"/>
    <img class="img-fluid" src="{{ asset('assets') }}/img/brin.png" width="20%"/>
    <img class="img-fluid" src="{{ asset('assets') }}/img/kemendikbud.png" width="20%"/>
    <img class="img-fluid" src="{{ asset('assets') }}/img/bapenas.png" width="20%"/>
</header>
<!-- Header-->
<header class="masthead text-white">
    <div class="masthead-content">
        <div class="container">
            {{-- <h2 class="text-start">PRE SOCIALISATION</h2>
            <h4 class="text-start">Australia-Indonesia Partnership Funding</h4>
            <h6 class="text-start">The Knowledge Sector Initiative (KSI) supports Indonesian policymakers to develop more effective development policies through better use of research, data, and analysis. KSI works with research providers and government agencies to strengthen the quality and policy-relevance of research and how it used for policymaking. KSI also works to improve regulations and practices that support quality research and make using evidence in policymaking easier.</h3> --}}
            <div class="align-items-start">
                {!! $masthead_content !!}
            </div>
            <a class="btn btn-primary float-start" href="#scroll">Call For Proposal</a>
        </div>
    </div>
    {{-- <div class="bg-circle-1 bg-circle"></div>
    <div class="bg-circle-2 bg-circle"></div>
    <div class="bg-circle-3 bg-circle"></div>
    <div class="bg-circle-4 bg-circle"></div> --}}
</header>
<!-- Content section scroll-->
<section id="scroll">
    <div class="container px-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-12 order-lg-2">
                <div class="p-5">
                    <img class="img-fluid" src="{{ asset('assets' . '/' . $section_img_scroll) }}" alt="..." />
                </div>
            </div>
            <!-- <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                    <h2 class="display-4">For those about to rock...</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
                </div>
            </div> -->
        </div>
    </div>
</section>
<!-- Content section 1-->
<section>
    <div class="container p-5">
        <div class="row gx-5 align-items-center">
            {!! $section_content_one !!}
        </div>
    </div>
</section>
<!-- Content section 2-->
<section style="background-color: #050142; color: white;">
    <div class="container p-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6">
                <div class="p-5"><img class="img-fluid" src="{{ asset('assets' . '/' . $section_img_two) }}"/></div>
            </div>
            <div class="col-lg-6">
                <div class="p-5">
                    <div class="align-items-start">
                        {!! $section_content_two !!}
                    </div>
                    <a class="btn btn-warning float-start" href="#scroll">Call For Proposal</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Content section 3-->
<section>
    <div class="container p-5">
        <div class="row gx-5 align-items-center">
            {!! $section_content_three !!}
        </div>
    </div>
</section>
<!-- Content section 4-->
<section class="bg-warning">
    <div class="container px-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-12">
                <div class="p-5">
                    {!! $section_content_four !!}
                </div>
                <div class="p-5 text-center">
                    <a class="btn " style="background-color: #050142; color: white;" href="#scroll">Call For Proposal</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Footer-->
<footer class="py-5 bg-light">
    <div class="container px-5">
        <p class="m-0 text-center small">
            <a href="{{ \App\Models\Dashboard::footer_web() ? \App\Models\Dashboard::footer_web() : '#' }}"><i class="fa fa-globe fa-solid fa-2xl"></i></a>
            <a href="{{ \App\Models\Dashboard::footer_facebook() ? \App\Models\Dashboard::footer_facebook() : '#' }}"><i class="fa fa-brands fa-square-facebook fa-solid fa-2xl"></i></a>
            <a href="{{ \App\Models\Dashboard::footer_instagram() ? \App\Models\Dashboard::footer_instagram() : '#' }}"><i class="fa fa-brands fa-square-instagram fa-solid fa-2xl"></i></a>
            <a href="{{ \App\Models\Dashboard::footer_twitter() ? \App\Models\Dashboard::footer_twitter() : '#' }}"><i class="fa fa-brands fa-square-twitter fa-solid fa-2xl"></i></a>
            <a href="{{ \App\Models\Dashboard::footer_tiktok() ? \App\Models\Dashboard::footer_tiktok() : '#' }}"><i class="fa fa-brands fa-tiktok fa-solid fa-2xl"></i></a>
            <a href="{{ \App\Models\Dashboard::footer_youtube() ? \App\Models\Dashboard::footer_youtube() : '#' }}"><i class="fa fa-brands fa-square-youtube fa-solid fa-2xl"></i></a>
        </p>
    </div>
</footer>

@endsection
@section('script')
    
@endsection