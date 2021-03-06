@extends('layouts.app')

@section('content')
  <!-- BEGIN: Content-->
  <div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- register section starts -->
            <section class="row flexbox-container">
                <div class="col-xl-8 col-10">
                    <div class="card bg-authentication mb-0">
                        <div class="row m-0">
                            <!-- register section left -->
                            <div class="col-md-6 col-12 px-0">
                                <div class="card disable-rounded-right mb-0 p-2 h-100 d-flex justify-content-center">
                                    <div class="card-header pb-1">
                                        <div class="card-title">
                                            <h4 class="text-center mb-2">Sign Up</h4>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <p> <small> Please enter your details to sign up and be part of our great community</small>
                                        </p>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <form method="POST" action="{{ route('register') }}">
                                                @csrf
                                                <div class="form-row">
                                                    <div class="form-group col-md-6 mb-50">
                                                        <label for="firstname">first name</label>
                                                        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First name">
                                                    </div>
                                                    <div class="form-group col-md-6 mb-50">
                                                        <label for="lastname">last name</label>
                                                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last name">
                                                    </div>
                                                </div>
                                                <div class="form-group mb-50">
                                                    <label class="text-bold-600" for="username">username</label>
                                                    <input type="text" class="form-control" id="username" name="username" placeholder="Username"></div>
                                                <div class="form-group mb-50">
                                                    <label class="text-bold-600" for="email">Email address</label>
                                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email address"></div>
                                                <div class="form-group mb-2">
                                                    <label class="text-bold-600" for="password">Password</label>
                                                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
                                                </div>
                                                <div class="form-group mb-2">
                                                    <label class="text-bold-600" for="password_confirmation">Confirm Password</label>
                                                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Password">
                                                </div>
                                                <button type="submit" class="btn btn-primary glow position-relative w-100">SIGN UP<i id="icon-arrow" class="bx bx-right-arrow-alt"></i></button>
                                            </form>
                                            <hr>
                                            <div class="text-center"><small class="mr-25">Already have an account?</small><a href="auth-login.html"><small>Sign in</small> </a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- image section right -->
                            <div class="col-md-6 d-md-block d-none text-center align-self-center p-3">
                                <img class="img-fluid" src="../../../app-assets/images/pages/register.png" alt="branding logo">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- register section endss -->
        </div>
    </div>
</div>
<!-- END: Content-->
@endsection
