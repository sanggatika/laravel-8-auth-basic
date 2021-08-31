@extends('apps_auth')

{{-- title --}}
@section('title', $titlePage)

{{-- content --}}
@section('content')

<section class="row flexbox-container">
    <div class="col-xl-10 col-11">
        <div class="card bg-authentication mb-0">
            <div class="row m-0">
                <!-- register section left -->
                <div class="col-md-7 col-12 px-0">
                    <div class="card disable-rounded-right mb-0 h-100 d-flex justify-content-center">
                        <div class="card-header pb-0 pt-1">
                            <div class="card-title d-flex justify-content-center">
                                <img class="img-fluid w-25" src="{{ asset('public/images/logo/web_logo.png') }}" alt="branding logo">
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="divider">
                                <div class="divider-text text-uppercase text-muted">
                                    <small>Sign UP</small>
                                </div>
                            </div>
                            <form action="index.html">
                                <div class="form-row">
                                    <div class="form-group col-md-6 mb-50">
                                        <label for="inputfirstname4">first name</label>
                                        <input type="text" class="form-control" id="inputfirstname4" placeholder="First name">
                                    </div>
                                    <div class="form-group col-md-6 mb-50">
                                        <label for="inputlastname4">last name</label>
                                        <input type="text" class="form-control" id="inputlastname4" placeholder="Last name">
                                    </div>
                                </div>
                                <div class="form-group mb-50">
                                    <label class="text-bold-600" for="exampleInputUsername1">username</label>
                                    <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username"></div>
                                <div class="form-group mb-50">
                                    <label class="text-bold-600" for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email address"></div>
                                <div class="form-group mb-2">
                                    <label class="text-bold-600" for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <button type="submit" class="btn btn-primary glow position-relative w-50">SIGN UP<i id="icon-arrow" class="bx bx-right-arrow-alt"></i></button>
                            </form>
                            <hr>
                            <div class="text-center"><small class="mr-25">Already have an account?</small><a href="{{ route('auth.login') }}"><small>Sign in</small> </a></div>
                        </div>
                    </div>
                </div>
                <!-- image section right -->
                <div class="col-md-5 d-md-block d-none text-center align-self-center p-3">
                    <img class="img-fluid" src="{{ asset('public/app-assets/images/pages/register.png') }}" alt="branding logo">
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

{{-- page scripts --}}
@section('page-scripts')
<script src="{{ asset('public/app-assets/js/scripts/pages/faq.js?version=')}}{{uniqid() }}"></script>
@endsection