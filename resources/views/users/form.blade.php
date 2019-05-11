@extends('layouts.app')
@section('content')
    <form method="POST" action="{{route('data.store')}}" class="form">
        @csrf

        {{-- EDUCATIONAL INFORMATION --}}
        <div class="card card-body">
            <h4 class="text-primary"><i class="fas fa-book"></i><b> Educational Information</b></h4>
            <br>

            <div class="form-group">
                <label class="form-label"><i class="fas text-success fa-star-of-life"></i> Admission Level</label>
                <br>
                <div class="custom-control custom-radio">
                    <input type="radio" id="11" name="admission_level" value="11" checked class="custom-control-input">
                    <label class="custom-control-label" for="11">Grade 11</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="12" name="admission_level" value="12" class="custom-control-input">
                    <label class="custom-control-label" for="12">Grade 12</label>
                </div>
            </div>

            <div class="form-group">
                <label class="form-label"><i class="fas text-success fa-star-of-life"></i> Previous School</label>
                <br>
                <div class="custom-control custom-radio">
                    <input type="radio" id="dmajmnhs" name="previous_school" value="dmajmnhs" checked class="custom-control-input">
                    <label class="custom-control-label" for="dmajmnhs">Don Manuel A. Javellana Memorial National High School</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="anhs" name="previous_school" value="anhs" class="custom-control-input">
                    <label class="custom-control-label" for="anhs">Alejal National High School</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="cnhs" name="previous_school" value="cnhs" class="custom-control-input">
                    <label class="custom-control-label" for="cnhs">Carmen National High School</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="pnhs" name="previous_school" value="pnhs" class="custom-control-input">
                    <label class="custom-control-label" for="pnhs">Panabo National High School</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="aofnhs" name="previous_school" value="aofnhs" class="custom-control-input">
                    <label class="custom-control-label" for="aofnhs">A.O Floirendo National High School</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="snhs" name="previous_school" value="snhs" class="custom-control-input">
                    <label class="custom-control-label" for="snhs">Sindaton National High School</label>
                </div>
                <hr>
                <div class="custom-control custom-radio">
                    <input type="radio" id="mcpi" name="previous_school" value="mcpi" class="custom-control-input">
                    <label class="custom-control-label" for="mcpi">Maryknoll College of Panabo</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="fali" name="previous_school" value="fali" class="custom-control-input">
                    <label class="custom-control-label" for="fali">Francisco Adlaon Learning Institute</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="faith" name="previous_school" value="faith" class="custom-control-input">
                    <label class="custom-control-label" for="faith">Panabo Faith Mission Academy</label>
                </div>
                <hr>
                <div class="custom-control custom-radio">
                    <input type="radio" id="other" name="previous_school" value="other" class="custom-control-input">
                    <label class="custom-control-label" for="other">Other</label>
                </div>
            </div>

            <div class="form-group">
                <label class="form-label"><i class="fas text-success fa-star-of-life"></i> Learning Reference Number</label>
                <input required type="number" name="lrn" class="form-control">
            </div>

        </div>

        <br><br>
        {{-- BIODATA --}}
        <div class="card card-body">
            <h4 class="text-primary"><i class="fas fa-user-alt"></i> <b>Biodata</b></h4>
            <br>

            <div class="row">
                <div class="col-lg-3">
                    <div class="form-group">
                        <label class="form-label"><i class="fas text-success fa-star-of-life"></i> First Name</label>
                        <input placeholder="e.g. John" type="text" name='first_name' required class="form-control">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                        <label class="form-label">Middle Name <small class="text-muted">(optional)</small></label>
                        <input placeholder="e.g. Macapagal" type="text" name='middle_name' class="form-control">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                        <label class="form-label"><i class="fas text-success fa-star-of-life"></i> Last Name</label>
                        <input placeholder="e.g. Dela Cruz" type="text" name='last_name' required class="form-control">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                        <label class="form-label">Suffix <small class="text-muted">(optional)</small></label>
                        <input placeholder="e.g. Jr." type="text" name='suffix' class="form-control">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-label"><i class="fas text-success fa-star-of-life"></i> Gender</label>
                        <br>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="male" name="gender" value="male" checked class="custom-control-input">
                                    <label class="custom-control-label" for="male">Male</label>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="female" name="gender" value="female" class="custom-control-input">
                                    <label class="custom-control-label" for="female">Female</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-label"><i class="fas text-success fa-star-of-life"></i> Status</label>
                        <input placeholder='e.g Single' type="text" name="status" required class="form-control">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-label"><i class="fas text-success fa-star-of-life"></i> Citizenship</label>
                        <input placeholder='e.g. Filipino' type="text" name="citizenship" required class="form-control">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-label"><i class="fas text-success fa-star-of-life"></i> Birthplace</label>
                        <input placeholder="e.g. Carmen, Davao del Norte" type="text" name="birthplace" required class="form-control">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-label"><i class="fas text-success fa-star-of-life"></i> Religion</label>
                        <input placeholder="e.g. Roman Catholic" type="text" name="religion" required class="form-control">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-label"><i class="fas text-success fa-star-of-life"></i> Birth Date</label>
                        <input type="date" name="birthdate" required class="form-control">
                    </div>
                </div>
            </div>
        </div>

        <br>
        <br>
        {{-- ADDRESS --}}
        <div class="card card-body">
            <h4 class="text-primary"><i class="fas fa-map-marked"></i> <b>Address</b></h4>
            <br>

            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-label"><i class="fas text-success fa-star-of-life"></i> Barangay</label>
                        <input placeholder="e.g. New Camiling" type="text" name="barangay" required  class="form-control">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-label"><i class="fas text-success fa-star-of-life"></i> Province</label>
                        <input placeholder="e.g. Davao del Norte" type="text" name="province" required class="form-control">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-label"><i class="fas text-success fa-star-of-life"></i> City</label>
                        <input placeholder="e.g. Davao" type="text" name="city" required class="form-control">
                    </div>
                </div>
            </div>
        </div>

        <br>
        <br>
        {{-- CONTACT INFORMATION --}}
        <div class="card card-body">
            <h4 class="text-primary"><i class="fas fa-phone"></i> <b>Contact Information</b></h4>
            <br>

            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-label">Telephone Number <small class="text-muted">(optional)</small></label>
                        <input type="text" name="telephone_number" class="form-control">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-label"><i class="fas text-success fa-star-of-life"></i> Cellphone Number</label>
                        <input type="text" name="cellphone_number" required class="form-control">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-label">Email <small class="text-muted">(optional)</small></label>
                        <input type="email" name="email" class="form-control">
                    </div>
                </div>
            </div>
        </div>

        <br>
        <br>
        {{-- Parent and Guardian's Information --}}
        <div class="card card-body">
            <h4 class="text-primary"><i class="fas fa-user-shield"></i> <b>Parent and Guardian's Information</b></h4>
            <br>

            <h5><b>Father</b></h5>
            <br>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-label">Father's First Name</label>
                        <input type="text" name="father_first_name" class="form-control">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-label">Father's Last Name</label>
                        <input type="text" name="father_last_name" class="form-control">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-label">Father's Mobile Number</label>
                        <input type="text" name="father_mobile_number" class="form-control">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-label">Father's Occupation</label>
                        <input type="text" name="father_occupation" class="form-control">
                    </div>
                </div>
            </div>

            <hr>

            <h5><b>Mother</b></h5>
            <br>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-label">Mother's First Name</label>
                        <input type="text" name="mother_first_name" class="form-control">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-label">Mother's Last Name</label>
                        <input type="text" name="mother_last_name" class="form-control">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-label">Mother's Mobile Number</label>
                        <input type="text" name="mother_mobile_number" class="form-control">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-label">Mother's Occupation</label>
                        <input type="text" name="mother_occupation" class="form-control">
                    </div>
                </div>
            </div>

            <hr>

            <h5><b>Guardian</b></h5>
            <br>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-label">Guardian's First Name</label>
                        <input type="text" name="guardian_first_name" class="form-control">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-label">Guardian's Last Name</label>
                        <input type="text" name="guardian_last_name" class="form-control">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-label">Guardian's Mobile Number</label>
                        <input type="text" name="guardian_mobile_number" class="form-control">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-label">Guardian's Occupation</label>
                        <input type="text" name="guardian_occupation" class="form-control">
                    </div>
                </div>
            </div>
        </div>
        <br>
        <button class="form-control btn btn-primary btn-lg">VALIDATE DATA</button>
    </form>





    {{-- BRIEFING MODAL --}}

    <!-- Modal -->
    <div class="modal fade" id="briefing_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle"><img style="width:30px" src="{{asset('assets/images/dmaj_logo.png')}}" alt=""> <b>Welcome!</b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="d-flex align-items-center flex-column justify-content-center modal-body">

                    <img style="width:150px" src="{{asset('assets/images/dmaj_logo.png')}}" alt="">
                    <p class="text-center mt-2 mb-1"><b>Don Manuel A. Javellana Memorial National High School</b></p>
                    <small>Homeland Subd., Brgy. DAPCO, Panabo City</small>
                    <br>
                    <p><b>Instructions:</b></p>
                    <ul>
                        <li><small class="text-muted">All fields with ' <span class="text-success"><i class="fas fa-star-of-life"></i></span> ' icon are required.</small></li>
                        <li><small class="text-muted">Some fields are optional but you are encouraged to fill out every field possible.</small></li>
                        <li><small class="text-muted">Fill out the form honestly and as accurate as possible since they will serve as school records.</small></li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn w-100 btn-primary" data-dismiss="modal">Proceed to Form</button>
                </div>
            </div>
        </div>
    </div>
    {{-- Modal Script --}}
    <script src="{{asset('js/users/briefing_modal.js')}}"></script>
@endsection