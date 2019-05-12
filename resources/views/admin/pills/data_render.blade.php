<div class="accordion" id="accordionExample">
    @foreach($data as $datum)

        <div class="card datum">
            <div class="card-header" data-toggle="collapse" data-target="#data_{{$datum->id}}" aria-expanded="true" aria-controls="{{$datum->id}}">
                <p class="text-primary">
                    <i class="fas fa-user"></i><b> {{$datum->first_name}} {{$datum->middle_name}} {{$datum->last_name}} {{$datum->suffix}}</b>
                </p>
            </div>

            <div id="data_{{$datum->id}}" class="collapse" data-parent="#accordionExample">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">


                            <div class="card mb-3 card-body">
                                <h5 class="text-primary"><i class="fas fa-book"></i> <b>Educational Information</b></h5>
                                <br>
                                <p>LRN: <b>{{$datum->lrn}}</b></p>
                                <p>Admission Level: <b>Grade {{$datum->admission_level}}</b></p>
                                <p>Previous School: <b>{{strtoupper($datum->previous_school)}}</b></p>
                            </div>

                            <div class="card mb-3 card-body">
                                <h5 class="text-primary"><i class="fas fa-user"></i> <b>Biodata</b></h5>
                                <br>
                                <p>Name: <b>{{$datum->first_name}} {{$datum->middle_name}} {{$datum->last_name}} {{$datum->suffix}}</b></p>
                                <p>Gender: <b>{{$datum->gender}}</b></p>
                                <p>Social Assistance Program: <b>{{$datum->social_assistance}}</b></p>
                                <p>Citizenship: <b>{{$datum->citizenship}}</b></p>
                                <p>Birthplace: <b>{{$datum->birthplace}}</b></p>
                                <p>Religion: <b>{{$datum->religion}}</b></p>
                                <p>Birth Date: <small class="text-muted">(Month-Day-Year)</small> <b>{{$datum->birth_month}}-{{$datum->birth_day}}-{{$datum->birth_year}}</b></p>
                            </div>

                            <div class="card mb-3 card-body">
                                <h5 class="text-primary"><i class="fas fa-map-marked"></i> <b>Address</b></h5>
                                <br>
                                <p>Barangay: <b>{{$datum->barangay}}</b></p>
                                <p>Province: <b>{{$datum->province}}</b></p>
                                <p>City: <b>{{$datum->city}}</b></p>
                            </div>

                        </div>
                        <div class="col-lg-6">

                            <div class="card card-body mb-3">
                                <h5 class="text-primary"><i class="fas fa-user-shield"></i> <b>Parent and Guardian's Information</b></h5>
                                <br>
                                <h5>Father</h5>
                                <br>
                                <p>First Name: <b>{{$datum->father_first_name}}</b></p>
                                <p>Last Name: <b>{{$datum->father_last_name}}</b></p>
                                <p>Mobile Number: <b>{{$datum->father_mobile_number}}</b></p>
                                <hr>
                                <h5>Mother</h5>
                                <br>
                                <p>First Name: <b>{{$datum->mother_first_name}}</b></p>
                                <p>Last Name: <b>{{$datum->mother_last_name}}</b></p>
                                <p>Mobile Number: <b>{{$datum->mother_mobile_number}}</b></p>
                                <hr>
                                <h5>Guardian</h5>
                                <br>
                                <p>First Name: <b>{{$datum->guardian_first_name}}</b></p>
                                <p>Last Name: <b>{{$datum->guardian_last_name}}</b></p>
                                <p>Mobile Number: <b>{{$datum->guardian_mobile_number}}</b></p>

                            </div>

                            <div class="card card-body mb-3">
                                <h5 class="text-primary"><i class="fas fa-phone"></i> <b>Contact Information</b></h5>
                                <br>
                                <p>Telephone: <b>{{$datum->telephone_number}}</b></p>
                                <p>Cellphone: <b>{{$datum->cellphone_number}}</b></p>
                                <p>Email: <b>{{$datum->email}}</b></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
<br>
{{$data->links()}}