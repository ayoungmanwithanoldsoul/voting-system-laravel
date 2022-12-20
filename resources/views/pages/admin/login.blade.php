@extends('layouts.layout')

@section('title')
    Admin: Login
@endsection

@section('script')
function noString(str) {
    return /^[0-9]+$/.test(str);
  }
function assessId () {
    var idObj = document.getElementById('number');
    var idStr = idObj.value;
    if (!noString(idStr)) {
        idObj.style = "border:3px solid red";
    } else {
        idObj.style = "border:3px solid green";
    }
}
@endsection

@section('body')

<div class="vh-100" style="background-color: #508bfc;">
    <div class="container py-5 h-100">
        <form action="{{ route('adminlogin') }}" method="POST">
            @csrf
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-3 text-center">

                            <h3 class="mb-5">Admin Log in</h3>

                            <div class="form-outline mb-4">
                                <input type="text" name="username" onkeyup="assessId();" id="username"
                                    class="form-control form-control-lg" placeholder="Enter Username" required />
                            </div>

                            <div class="form-outline mb-4">
                                <input type="password" id="password" name="password"
                                    class="form-control form-control-lg" placeholder="Enter Password" required />
                            </div>

                            <!-- Department -->
                            <div class="form-outline mb-4">
                                <select name="department" id="department" class="form-control form-control-lg w-100"
                                    required>
                                    <option value="" disabled selected>Select Department</option>
                                    <option value="Elementary">Elementary Department</option>
                                    <option value="Junior">Junior High School Department</option>
                                    <option value="Senior">Senior High School Department</option>
                                </select>
                            </div>

                            <button class="btn btn-primary btn-lg btn-block w-100" type="submit">Login</button>

                            <hr class="my-4">


                            <div class="row mb-3">
                            <a href="{{ route('adminregister') }}">
                                <button class="btn btn-lg btn-block btn-primary w-100" 
                                style="background-color: #dd4b39;" type="button">
                                    Register Another Admin
                                </button>
                            </a>
                            </div>

                            <div class="row">
                            <a href="{{ route('login') }}">
                                <button class="btn btn-lg btn-block btn-primary w-100" 
                                style="background-color: #279b0a;" type="button">
                                    User Log In
                                </button>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>  
@endsection