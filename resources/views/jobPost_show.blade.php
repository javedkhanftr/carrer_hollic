@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-2"></div>
            <div class="col-md-8 mb-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="text-center">Create New Job</h4>
                        <hr>
                    <form action="" method="post">
                @csrf
           
                
                    <div class="row">
                        <div class="col-md-3 mt-4">
                            <h6>Job title</h6>
                        </div>
                        <div class="col-md-9 mt-3">
                            <input type="text" name="name" placeholder="Enter Title" class="form-control" id="">
                        </div>

                        <div class="col-md-3 mt-4">
                            <h6>Job type</h6>
                        </div>
                        <div class="col-md-9 mt-3">
                            <select class="form-control job_type"  name="job_type_id" id="job_type">
                                @foreach($Job_type as $Jobtype)
								    <option value="{{$Jobtype->id}}">{{$Jobtype->name}}</option>
                                @endforeach
							</select>
                        </div>

                        <div class="col-md-3 mt-4">
                            <h6>Department</h6>
                        </div>
                        <div class="col-md-9 mt-3">
                            <select class="form-control department"  name="department_id" id="department">
                                @foreach($department as $departments)
								    <option value="{{$departments->id}}">{{$departments->name}}</option>
                                @endforeach
							</select>
                        </div>

                        <div class="col-md-3 mt-4">
                            <h6>Location</h6>
                        </div>
                        <div class="col-md-9 mt-3">
                            <select class="form-control Company_location"  name="company_location_id" id="Company_location">
                                @foreach($Company_location as $cl)
								    <option value="{{$cl->id}}">{{$cl->address}}</option>
                                @endforeach
							</select>
                        </div>

                        <div class="col-md-3 mt-4">
                            <h6>Number of Vacancy</h6>
                        </div>
                        <div class="col-md-9 mt-3">
                            <input type="text" name="vacancy_count" placeholder="Enter Number of Vacancy" class="form-control" id="">
                        </div>

                        <div class="col-md-3 mt-4">
                            <h6>Salary</h6>
                        </div>
                        <div class="col-md-9 mt-3">
                            <input type="text" name="salary" placeholder="Enter Salary" class="form-control" id="">
                        </div>

                        <div class="col-md-3 mt-4">
                            <h6>Last submission</h6>
                        </div>
                        <div class="col-md-9 mt-3">
                            <input type="date" name="last_submission_date" placeholder="" class="form-control" id="">

                        </div>
                        <div class="col-md-3 mt-4">
                            <h6>Description</h6>
                        </div>
                        <div class="col-md-9 mt-3">
                            <textarea name="description" id="" cols="30" rows="3" class="form-control"
                                placeholder="Enter Description"></textarea>
                        </div>
                        <div class="col-md-12 mt-3">
                            <button type="submit" class="btn btn-primary btn-sm">Save</button>
                        </div>
                    </div>
 
                
         
            </form>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
@endsection
<style>
    


.select2-container--default .select2-selection--single {

    background-color: #fff;
    border: 1px solid #ced4da !important;
    border-radius: 5px;
    height: 39px !important;
}
.select2-container--default .select2-selection--single .select2-selection__rendered {
  color: #444;
  line-height: 36px !important;
  margin-left: 6px;
}
</style>