@extends('layouts.app')

@section('contentdashboard')

<!-- Masthead modal-->
<div class="modal fade" id="masthead-data-content">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">masthead data content</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('dashboard.text.update', ['parent_id' => 2, 'children_id' => 1]) }}" method="post">
                @csrf
                @method('put')
                <input id="body-masthead" type="hidden" name="value" value="{{ $errors->has('data_2_1') ? old('value') : $masthead_content }}">
                <trix-editor input="body-masthead"></trix-editor>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button></form>
            </div>
        </div>
    </div>
</div>


<!-- Section scroll modal-->
<div class="modal fade" id="section-scroll">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Section Content scroll</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('dashboard.img.update', ['parent_id' => 3, 'children_id' => 1]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                <div class="form-group">
                    <label class="form-label" for="section-img-scroll">Image</label>
                    <input class="form-control " type="file" name="image" id="section-img-scroll" value="" onchange="imagePreview(this)">
                    <img class="img-fluid" src="{{ $errors->has('img_3_1') ? old('image') : asset('assets' . '/' . $section_img_scroll ) }}">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button></form>
            </div>
        </div>
    </div>
</div>

<!-- Content section one modal-->
<div class="modal fade" id="content-section-one">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Section Content one</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('dashboard.text.update', ['parent_id' => 4, 'children_id' => 1]) }}" method="post">
                    @csrf
                    @method('put')
                <input id="body-content-one" type="hidden" name="value" value="{{ $errors->has('data_4_1') ? old('value') : $section_content_one }}">
                <trix-editor input="body-content-one"></trix-editor>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button></form>
            </div>
        </div>
    </div>
</div>

<!-- Content img two modal-->
<div class="modal fade" id="img-section-two">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Section Img two</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('dashboard.img.update', ['parent_id' => 5, 'children_id' => 1]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                <div class="form-group">
                    <label class="form-label" for="section-img-two">Image</label>
                    <input class="form-control " type="file" name="image" id="section-img-two" value="" onchange="imagePreview(this)">
                    <img class="img-fluid" src="{{ $errors->has('img_5_1') ? old('image') : asset('assets' . '/' . $section_img_two) }}">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button></form>
            </div>
        </div>
    </div>
</div>

<!-- Content section two modal-->
<div class="modal fade" id="content-section-two">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Section Content two</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('dashboard.text.update', ['parent_id' => 5, 'children_id' => 2]) }}" method="post">
                    @csrf
                    @method('put')
                <input id="body-content-two" type="hidden" name="value" value="{{ $errors->has('data_5_2') ? old('value') : $section_content_two }}">
                <trix-editor input="body-content-two"></trix-editor>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button></form>
            </div>
        </div>
    </div>
</div>

<!-- Content section three modal-->
<div class="modal fade" id="content-section-three">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Section Content three</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('dashboard.text.update', ['parent_id' => 6, 'children_id' => 1]) }}" method="post">
                    @csrf
                    @method('put')
                <input id="body-content-three" type="hidden" name="value" value="{{ $errors->has('data_6_1') ? old('value') : $section_content_three }}">
                <trix-editor input="body-content-three"></trix-editor>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button></form>
            </div>
        </div>
    </div>
</div>

<!-- Content section four modal-->
<div class="modal fade" id="content-section-four">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Section Content four</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('dashboard.text.update', ['parent_id' => 7, 'children_id' => 1]) }}" method="post">
                    @csrf
                    @method('put')
                <input id="body-content-four" type="hidden" name="value" value="{{ $errors->has('data_7_1') ? old('value') : $section_content_four }}">
                <trix-editor input="body-content-four"></trix-editor>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button></form>
            </div>
        </div>
    </div>
</div>

<!-- footer modal-->
<div class="modal fade" id="footer-link">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Footer link</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('footer.update') }}" method="post">
                @csrf

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-text"><i class="fa fa-globe fa-solid fa-2xl"></i></div>
                    <input class="form-control" name="web" type="text" value="">
                </div>
                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-text"><i class="fa fa-brands fa-square-facebook fa-solid fa-2xl"></i></div>
                    <input class="form-control" name="facebook" type="text" value="">
                </div>
                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-text"><i class="fa fa-brands fa-square-instagram fa-solid fa-2xl"></i></div>
                    <input class="form-control" name="instagram" id="ig" type="text" value="">
                </div>
                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-text"><i class="fa fa-brands fa-square-twitter fa-solid fa-2xl"></i></div>
                    <input class="form-control" name="twitter" type="text" value="">
                </div>
                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-text"><i class="fa fa-brands fa-tiktok fa-solid fa-2xl"></i></div>
                    <input class="form-control" name="tiktok" type="text" value="">
                </div>
                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-text"><i class="fa fa-brands fa-square-youtube fa-solid fa-2xl"></i></div>
                    <input class="form-control" name="youtube" type="text" value="">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button></form>
            </div>
        </div>
    </div>
</div>

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

    <div class="container-fluid row">
        <div class="col-lg-12 text-center">
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#masthead-data-content">
                Change data masthead
            </button>
        </div>
    </div>
</header>
<!-- Content section scroll-->
<section id="scroll">
    <div class="container px-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-12 order-lg-2">
                <div class="p-5">
                    <img class="img-fluid" src="{{ asset('assets' . '/' . $section_img_scroll) }}" alt="..." />
                    <div class="text-center">
                        <button type="button" class="btn btn-success " data-bs-toggle="modal" data-bs-target="#section-scroll">
                            Change section scroll image
                        </button>
                    </div>
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
        {{-- <div class="row gx-5 align-items-center">
            <div class="col-lg-6">
                <div class="p-5">
                    <!-- <img class="img-fluid rounded-circle" src="{{ asset('assets') }}/img/02.jpg" alt="..." /> -->
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="p-5">
                    <!-- <h2 class="display-4">We salute you!</h2> -->
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-12 text-center">
            <div class="p-5 text-bold">
                <strong>
                    Koneksi will focus on the following two End of Investment Outcomes : 
                </strong>
            </div>
        </div>
        <div class="row gx-5 align-items-center">
            <div class="col-lg-12">
                <div class="p-5">
                    <p>
                        <ol>
                            <li>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.
                            </li>
                            <li>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.
                            </li>
                        </ol>
                    </p>
                </div>
            </div>
        </div> --}}
        <div class="row gx-5 align-items-center">
            {!! $section_content_one !!}
        </div>
        <div class="row col-lg-12 text-center">
            <button type="button" class="btn btn-success " data-bs-toggle="modal" data-bs-target="#content-section-one">
                Change content section 1
            </button>
        </div>
    </div>
</section>
<!-- Content section 2-->
<section style="background-color: #050142; color: white;">
    <div class="container p-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6">
                <div class="p-5"><img class="img-fluid" src="{{ asset('assets' . '/' . $section_img_two) }}"/></div>
                <div class="text-center">
                    <button type="button" class="btn btn-success " data-bs-toggle="modal" data-bs-target="#img-section-two">
                        Change image section 2
                    </button>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="p-5">
                    {{-- <h2>Australia-Indonesia Partnership Funding</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p> --}}
                    <div class="align-items-start">
                        {!! $section_content_two !!}
                    </div>
                    <a class="btn btn-warning float-start" href="#scroll">Call For Proposal</a>
                </div>
                <div class="text-center">
                    <button type="button" class="btn btn-success " data-bs-toggle="modal" data-bs-target="#content-section-two">
                        Change content section 2
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Content section 3-->
<section>
    <div class="container p-5">
        {{-- <div class="row gx-5 align-items-center">
            <div class="col-lg-12">
                <div class="p-5">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="p-5 text-bold">
                <strong>
                    Koneksi will focus on the following two End of Investment Outcomes : 
                </strong>
            </div>
        </div>
        <div class="row gx-5 align-items-center">
            <div class="col-lg-12">
                <div class="p-5">
                    <p>
                        <ul>
                            <li>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.
                            </li>
                            <li>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.
                            </li>
                        </ul>
                    </p>
                </div>
            </div>
        </div> --}}
        <div class="row gx-5 align-items-center">
            {!! $section_content_three !!}
        </div>
        <div class="row col-lg-12 text-center">
            <button type="button" class="btn btn-success " data-bs-toggle="modal" data-bs-target="#content-section-three">
                Change content section 3
            </button>
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
    <div class="row align-items-center">
        <div class="col-lg-12 text-center">
            <button type="button" class="btn btn-success " data-bs-toggle="modal" data-bs-target="#content-section-four">
                Change content section 4
            </button>
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
        <div class="text-center">
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#footer-link">
                Change link footer
            </button>
        </div>
    </div>
</footer>

@endsection
@section('script')
<script>

function imagePreview(img) {
    const imgPreview = $(img).closest(".form-group").children(".img-fluid");

    imgPreview.css('display', 'block');

    const oFReader = new FileReader();
    oFReader.readAsDataURL(img.files[0]);

    oFReader.onload = function(oFREvent)
    {
        imgPreview.attr('src', oFREvent.target.result);
    }
}

@if ($errors->data_2_1->any())
    var myModal = new bootstrap.Modal(document.getElementById("masthead_data_content"), {});
    document.onreadystatechange = function () {
        myModal.show();
    };
@endif

@if ($errors->img_3_1->any())
    var myModal = new bootstrap.Modal(document.getElementById("section_scroll"), {});
    document.onreadystatechange = function () {
        myModal.show();
    };
@endif

@if ($errors->img_5_1->any())
    var myModal = new bootstrap.Modal(document.getElementById("img_section_two"), {});
    document.onreadystatechange = function () {
        myModal.show();
    };
@endif

@if ($errors->img_4_1->any())
    var myModal = new bootstrap.Modal(document.getElementById("content_section_one"), {});
    document.onreadystatechange = function () {
        myModal.show();
    };
@endif

@if ($errors->img_5_2->any())
    var myModal = new bootstrap.Modal(document.getElementById("content_section_two"), {});
    document.onreadystatechange = function () {
        myModal.show();
    };
@endif

@if ($errors->img_6_1->any())
    var myModal = new bootstrap.Modal(document.getElementById("content_section_three"), {});
    document.onreadystatechange = function () {
        myModal.show();
    };
@endif

@if ($errors->img_7_1->any())
    var myModal = new bootstrap.Modal(document.getElementById("content_section_four"), {});
    document.onreadystatechange = function () {
        myModal.show();
    };
@endif
@if ($errors->any())
    showAlertPopUp("@foreach ($errors as $item) '{{ $item }}<br/>' @endforeach");
@endif



</script>
@endsection