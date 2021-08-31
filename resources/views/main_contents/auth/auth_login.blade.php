@extends('apps_auth')

{{-- title --}}
@section('title', $titlePage)

{{-- content --}}
@section('content')

<section id="auth-login" class="row flexbox-container">
    <div class="col-xl-10 col-11">
        <div class="card bg-authentication mb-0">
            <div class="row m-0">
                <!-- left section-login -->
                <div class="col-md-6 col-12 px-0">
                    <div class="card disable-rounded-right mb-0 h-100 d-flex justify-content-center">
                        <div class="card-header d-flex justify-content-center">
                            <img class="img-fluid w-50" src="{{ asset('public/images/logo/web_logo.png') }}" alt="branding logo">
                        </div>
                        <div class="card-body">
                            <div class="divider">
                                <div class="divider-text text-uppercase text-muted">
                                    <small>Login Page Today</small>
                                </div>
                            </div>
                            <form action="index.html">
                                <div class="form-group mb-50">
                                    <label class="text-bold-600" for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email address"></div>
                                <div class="form-group">
                                    <label class="text-bold-600" for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <div class="form-group d-flex flex-md-row flex-column justify-content-between align-items-center">
                                    <div class="text-left">
                                        <div class="checkbox checkbox-sm">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="checkboxsmall" for="exampleCheck1"><small>Keep me logged
                                                    in</small></label>
                                        </div>
                                    </div>
                                    <div class="text-right"><a href="{{ route('auth.forgot_password') }}" class="card-link"><small>Forgot Password?</small></a></div>
                                </div>
                                <button type="submit" class="btn btn-primary glow w-100 position-relative">Login<i id="icon-arrow" class="bx bx-right-arrow-alt"></i></button>
                            </form>
                            <hr>
                            <div class="text-center"><small class="mr-25">Don't have an account?</small><a href="{{ route('auth.register') }}"><small>Sign up</small></a></div>
                        </div>
                    </div>
                </div>
                <!-- right section image -->
                <div class="col-md-6 d-md-block d-none text-center align-self-center p-3">
                    <img class="img-fluid" src="{{ asset('public/app-assets/images/pages/login.png') }}" alt="branding logo">
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

{{-- page scripts --}}
@section('page-scripts')
<script src="{{ asset('public/app-assets/js/scripts/pages/faq.js?version=')}}{{ uniqid() }}"></script>
@endsection