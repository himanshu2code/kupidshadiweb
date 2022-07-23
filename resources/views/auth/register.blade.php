


@extends('layouts.app')
@section('content')




    <div class="container px-4 py-5 mx-auto">
       <div class="card card0">
            <div class="d-flex flex-lg-row flex-column-reverse">
                <div class="card card1">
                    <div class="row justify-content-center my-auto">


                        <form action="{{ route('registernew') }}" method="POST">
                            @csrf
                            @method('POST')
                            {{-- <div class="col-md-8 col-10 my-5"> --}}
                                {{-- <div class="row justify-content-center px-3 mb-3">
                                    <img id="logo" src="https://i.imgur.com/PSXxjNY.png">
                                </div> --}}
                                <h3 class="mb-5 text-center heading">We are ShadiWeb KUPID</h3>

                                {{-- <h6 class="msg-info">Please login to your account</h6> --}}

                                <div class="row">
                                    <div class="col-sm">

                                        <label class="form-control-label text-muted"> <strong> First name </strong></label>
                                        <input type="text" id="fname" name="fname"
                                            class="form-control" required>
                                    </div>
                                    <div class="col-sm">

                                        <label class="form-control-label text-muted"> <strong>Last Name</strong> </label>
                                        <input type="text" id="lname" name="lname"  class="form-control" required>
                                    </div>
                                    <div class="col-sm">
                                        <label class="form-control-label text-muted"> <strong>E-Mail</strong> </label>
                                        <input type="emil" id="email" name="email"  class="form-control" required>
                                    </div>
                                </div> <br>

                                {{-- <div class="form-group">
                                </div> --}}
                                <div class="row">
                                    <div class="col-sm">
                                        <label class="form-control-label text-muted"> <strong>Password</strong> </label>
                                        <input type="password" id="psw" name="password"  class="form-control" required>
                                    </div>
                                    <div class="col-sm form-check form-check-inline">
                                        <label class="form-control-label text-muted">Gender:</label>
                                        {{-- <span> --}}

                                            <label class="form-control-label text-muted" style="margin-top: 3%;"> <strong>Male</strong> </label> <input type="radio" name="gender" value="male">
                                            <label class="form-control-label text-muted" style="margin-top: 3%;"> <strong>Female</strong> </label><input type="radio" name="gender" value="female">
                                        </div>
                                    </div> <br>






                                    <div class="row">
                                        <div class="col-sm">

                                            <label class="form-control-label text-muted">Date Of Birth</label>
                                            <input type="date" id="dob" name="dob"  class="form-control" required>
                                        </div>


                                        <div class="col-sm">
                                            <label class="form-control-label text-muted"> <strong>Annual Income</strong> </label>
                                            <input type="income" id="income" name="income"  class="form-control" required>
                                        </div>
                                        <div class="col-sm">

                                            <label class="form-control-label text-muted"> <strong> Select occupation</strong> </label>
                                            <select id="is_attached_dropdown" name="occupation">
                                                <option value="select">SELECT</option>
                                                <option value="Private job">Private job</option>
                                                <option value="Government job">Government job</option>
                                                <option value="Business">Business</option>
                                            </select>
                                            {{-- <input type="text" name="occupation" list="occupation">
                                            <datalist id="occupation">
                                                <option value="Private job">
                                                <option value="Government job">
                                                <option value="Business">
                                            </datalist> --}}
                                        </div>
                                    </div> <br>
                                    <div class="row">
                                        <div class="col-sm form-check form-check-inline">
                                            <label class="form-control-label text-muted"> <strong>Select Family Type</strong> </label> &nbsp;
                                            <select id="is_attached_dropdown" name="family">
                                                <option value="select">SELECT</option>
                                                <option value="Joint Family">Joint Family</option>
                                                <option value="Nuclear Family">Nuclear Family</option>
                                            </select>
                                            {{-- <input type="text" name="family" list="manglik">
                                            <datalist id="family">
                                                <option value="Joint Family">
                                                <option value="Nuclear Family">
                                                {{-- <option value="Business"> --}}
                                            {{-- </datalist> --}}
                                        </div>
                                        <div class="col-sm">
                                                <label class="form-control-label text-muted"> <strong>Mnaglik ?</strong> </label>
                                                <select id="is_attached_dropdown" name="manglik" style="margin-top: 10%;">
                                                    <option value="select">SELECT</option>
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                </select>
                                            {{-- </div> --}}
                                                {{-- <select name="dog-names" id="dog-names"> --}}



                                                {{-- </select> --}}
                                        </div>
                                    </div> <br>
                                    {{-- CODE FOR PARTNER PREFRENCE --}}
                                    <p>Enter Your Partner Preference</p>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm">
                                            <label class="form-control-label text-muted"> <strong>expected income (per year)</strong> </label>
                                            <input type="range" value="0" max="1000" oninput="num.value = this.value+'k'" name="expincome">
                                            <output id="num">0 k</output>
                                        </div>
                                        <div class="col-sm">
                                            <label class="form-control-label text-muted"> <strong>Select occupation</strong> </label>
                                            <select id="is_attached_dropdown" name="preferoccupation">
                                                <option value="select">SELECT</option>
                                                <option value="Private job">Private job</option>
                                                <option value="Government job">Government job</option>
                                                <option value="Business">Business</option>
                                            </select>
                                        </div>
                                    </div> <br>
                                    <div class="row">
                                        <div class="col-sm">
                                            <label class="form-control-label text-muted"> <strong>Preferred Family Type</strong> </label>
                                            <select id="is_attached_dropdown" name="preferfamily">
                                                <option value="select">SELECT</option>
                                                <option value="Joint Family">Joint Family</option>
                                                <option value="Nuclear Family">Nuclear Family</option>
                                            </select>
                                        </div>
                                        <div class="col-sm">
                                            <label class="form-control-label text-muted"> <strong> Prefer Mnaglik ?</strong> </label>
                                            <select id="is_attached_dropdown" name="prefermanglik" style="margin-top: 10%;">
                                                <option value="select">SELECT</option>
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="row justify-content-center my-3 px-3">
                                        <button class="btn-block btn-color">Register</button>
                                    </div>


                                {{--
                            </div> --}}
                        </form>

                    </div>

                </div>
                <div class="card card2">
                    <div class="my-auto mx-md-5 px-md-5 right">
                        <h3 class="text-white">We are more than just a company</h3>
                        <small class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</small>
                    </div>
                </div>
             </div>
        </div>
    </div>





    @endsection

