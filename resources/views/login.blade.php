@extends('master')
@section("content")

<section class="vh-100">
  <div class="container-fluid custom-login">

    <div class="row d-flex justify-content-center align-items-center h-100">

    <!-- images -->
        <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
        class="img-fluid" alt="Sample image">
        </div>

        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form>

    <!-- Email input -->
        <div class="form-outline mb-4">
            <input type="email" id="form3Example3" class="form-control form-control-lg"
            placeholder="Enter a valid email address" />
        </div>

    <!-- Password input -->
        <div class="form-outline mb-3">
            <input type="password" id="form3Example4" class="form-control form-control-lg"
            placeholder="Enter password" />
        </div>

    <!-- Register -->
        <div class="text-center text-lg-start mt-4 pt-2">
            <button type="button" class="btn btn-primary btn-lg"
            style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#!"
                class="link-danger">Register</a></p>
        </div>

        </form>
    </div>
    </div>
    </div>

</section>

@endsection