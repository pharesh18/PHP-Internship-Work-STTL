@extends('layout')

@section('main-content')
    <div class="content container shadow p-5 rounded">
        <form method="post" action="{{ url('/') }}/register" id="registerForm">
            @csrf
            <h2 class="form-data-title">Player Details</h2>
            <hr>
            <div class="row">
                <div class="col-lg-3 col-md-4 mb-4">
                    <label>First Name</label><span class="text-danger ps-1">*</span>
                    <input type="text" name="firstName" class="form-control" placeholder="">
                    <span class="text-danger">
                        @error('firstName')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="col-lg-3 col-md-4 mb-4">
                    <label>Father/Husband Name</label><span class="text-danger ps-1">*</span>
                    <input type="text" name="middleName" class="form-control" placeholder="">
                    <span class="text-danger">
                        @error('middleName')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="col-lg-3 col-md-4 mb-4">
                    <label>Last Name</label><span class="text-danger ps-1">*</span>
                    <input type="text" name="lastName" class="form-control" placeholder="">
                    <span class="text-danger">
                        @error('lastName')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="col-lg-3 col-md-4 mb-4">
                    <label>Age Group</label><span class="text-danger ps-1">*</span>
                    <select class="form-select" name="ageGroup">
                        <option selected disabled value="">Select</option>
                        <option value="9-11">9-11</option>
                        <option value="11-14">11-14</option>
                        <option value="14-17">14-17</option>
                        <option value="Above 17">Above 17</option>
                    </select>
                    <span class="text-danger">
                        @error('ageGroup')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="col-lg-3 col-md-4 mb-4">
                    <label>Select Gender</label><span class="text-danger ps-1">*</span><br>
                    <input class="form-check-input" value="Male" type="radio" name="gender">&nbsp;
                    <span>Male</span>&nbsp;&nbsp;
                    <input class="form-check-input" type="radio" value="Female" name="gender">&nbsp;
                    <span>Female</span>
                    <span class="text-danger">
                        @error('gender')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="col-lg-3 col-md-4 mb-4">
                    <label>Date of Birth(DD-MM-YYYY)</label><span class="text-danger ps-1">*</span>
                    <input type="date" name="dob" class="form-control" placeholder="">
                    <span class="text-danger">
                        @error('dob')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="col-lg-3 col-md-4 mb-4">
                    <label>Sports Name</label><span class="text-danger ps-1">*</span>
                    <select class="form-select" name="sportsName">
                        <option selected disabled value="">Select</option>
                        <option value="Cricket">Cricket</option>
                        <option value="Kabaddi">Kabaddi</option>
                        <option value="Kho-Kho">Kho-Kho</option>
                        <option value="Football">Football</option>
                    </select>
                    <span class="text-danger">
                        @error('sportsName')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="col-lg-3 col-md-4 mb-4">
                    <label>Mobile Number</label><span class="text-danger ps-1">*</span>
                    <input type="text" name="mobileNumber" class="form-control" placeholder="">
                    <span class="text-danger">
                        @error('mobileNumber')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="col-lg-3 col-md-4 mb-4">
                    <label>Email</label><span class="text-danger ps-1">*</span>
                    <input type="email" name="email" class="form-control" placeholder="">
                    <span class="text-danger">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="col-lg-3 col-md-4 mb-4">
                    <label>Password</label><span class="text-danger ps-1">*</span>
                    <input type="password" name="password" class="form-control" placeholder="">
                    <span class="text-danger">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>

            <div class="agree">
                <input type="checkbox" name="terms" value="">
                <label for="">I accept</label>
                <span class="text-danger">
                    @error('terms')
                        {{ $message }}
                    @enderror
                </span>
            </div><br>
            <hr>

            <div class="submit-cont">
                <button type="submit" class="btn text-white" style="background-color: #ee9f27">
                    Submit
                </button>
            </div>
        </form>
    </div>
@endsection
