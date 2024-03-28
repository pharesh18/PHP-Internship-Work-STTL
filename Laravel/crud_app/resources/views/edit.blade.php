@extends('layout')

@section('main-content')
    <div class="content container shadow p-5 rounded">
        <form method="post" action="{{ url('/update') }}/{{ $player->id }}">
            @csrf
            <h2 class="form-data-title">Player Details</h2>
            <hr>
            <div class="row">
                <div class="col-lg-3 col-md-4 mb-4">
                    <label>First Name</label><span class="text-danger ps-1">*</span>
                    <input type="text" name="firstName" class="form-control" value="{{ $player->firstName }}"
                        placeholder="">
                    <span class="text-danger">
                        @error('firstName')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="col-lg-3 col-md-4 mb-4">
                    <label>Father/Husband Name</label><span class="text-danger ps-1">*</span>
                    <input type="text" name="middleName" class="form-control" value="{{ $player->middleName }}"
                        placeholder="">
                    <span class="text-danger">
                        @error('middleName')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="col-lg-3 col-md-4 mb-4">
                    <label>Last Name</label><span class="text-danger ps-1">*</span>
                    <input type="text" name="lastName" class="form-control" value="{{ $player->lastName }}"
                        placeholder="">
                    <span class="text-danger">
                        @error('lastName')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="col-lg-3 col-md-4 mb-4">
                    <label>Age Group</label><span class="text-danger ps-1">*</span>
                    <select class="form-select" name="ageGroup">
                        @php
                            $ageGroups = [
                                '9-11' => '9-11',
                                '11-14' => '11-14',
                                '14-17' => '14-17',
                                'Above 17' => 'Above 17',
                            ];
                        @endphp

                        @foreach ($ageGroups as $value => $label)
                            <option value="{{ $value }}" {{ $player['ageGroup'] == $value ? 'selected' : '' }}>
                                {{ $label }}
                            </option>
                        @endforeach
                    </select>
                    <span class="text-danger">
                        @error('ageGroup')
                            {{ $message }}
                        @enderror
                    </span>
                </div>


                <div class="col-lg-3 col-md-4 mb-4">
                    <label>Select Gender</label><span class="text-danger ps-1">*</span><br>
                    <input class="form-check-input" value="Male" {{ $player->gender == 'Male' ? 'checked' : '' }}
                        type="radio" name="gender">&nbsp;
                    <span>Male</span>&nbsp;&nbsp;
                    <input class="form-check-input" type="radio" {{ $player->gender == 'Female' ? 'checked' : '' }}
                        value="Female" name="gender">&nbsp;
                    <span>Female</span>
                    <span class="text-danger">
                        @error('gender')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="col-lg-3 col-md-4 mb-4">
                    <label>Date of Birth(DD-MM-YYYY)</label><span class="text-danger ps-1">*</span>
                    <input type="date" name="dob" class="form-control" value="{{ $player->dob }}" placeholder="">
                    <span class="text-danger">
                        @error('dob')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="col-lg-3 col-md-4 mb-4">
                    <label>Sports Name</label><span class="text-danger ps-1">*</span>
                    <select class="form-select" name="sportsName">
                        @php
                            $ageGroups = [
                                'Cricket' => 'Cricket',
                                'Kabaddi' => 'Kabaddi',
                                'Kho-Kho' => 'Kho-Kho',
                                'Football' => 'Football',
                            ];
                        @endphp

                        @foreach ($ageGroups as $value => $label)
                            <option value="{{ $value }}" {{ $player['sportsName'] == $value ? 'selected' : '' }}>
                                {{ $label }}
                            </option>
                        @endforeach
                    </select>

                    <span class="text-danger">
                        @error('sportsName')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="col-lg-3 col-md-4 mb-4">
                    <label>Mobile Number</label><span class="text-danger ps-1">*</span>
                    <input type="text" name="mobileNumber" value="{{ $player->mobileNumber }}" class="form-control"
                        placeholder="">
                    <span class="text-danger">
                        @error('mobileNumber')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="col-lg-3 col-md-4 mb-4">
                    <label>Email</label><span class="text-danger ps-1">*</span>
                    <input type="email" name="email" class="form-control" value="{{ $player->email }}" placeholder=""
                        disabled readonly>
                    <span class="text-danger">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>
            <hr>

            <div class="submit-cont">
                <button type="submit" class="btn text-white" style="background-color: #ee9f27">
                    Update
                </button>
            </div>
        </form>
    </div>
@endsection
