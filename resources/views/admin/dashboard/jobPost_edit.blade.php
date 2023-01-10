@extends('layouts.app')
@section('content')
<script src="{{asset('https://code.jquery.com/jquery-3.6.1.min.js')}}"></script>

<div class="col-lg-12">
    <div class="white_card card_height_100 mb_30">
        <div class="white_card_header">
            <div class="box_header m-0">
                <div class="main-title">
                    <h3 class="m-0">Upadte New Job</h3>
                </div>
            </div>
        </div>
        <div class="white_card_body">
            <div class="card-body">
            <form action="{{url('admin/dashboard/job_post/update/'.$jobpost->id)}}" method="post">
                        @csrf
                    <div class="row mb-3">
                    <div class="col-md-6 mt-3">
                                <label for="">Job title</label>
                                <input type="text" name="name" placeholder="Enter Title" class="form-control" id=""
                                    value="{{$jobpost->name}}">
                            </div>


                            <div class="col-md-6 mt-3">
                                <label for="">Job type</label>
                                <select class="form-control job_type" name="job_type_id" id="job_type">
                                    @foreach($Job_type as $Jobtype)
                                    <option value="{{$Jobtype->id}}"
                                        <?php echo $jobpost->job_type_id == $Jobtype->id?"selected":""?>>
                                        {{$Jobtype->name}}</option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="col-md-6 mt-3">
                                <label for="">Department</label>
                                <select class="form-control department" name="department_id" id="department">
                                    @foreach($department as $departments)
                                    <option value="{{$departments->id}}"
                                        <?php echo $jobpost->job_type_id == $departments->id?"selected":""?>>
                                        {{$departments->name}}</option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="col-md-6 mt-3">
                                <label for="">Location</label>
                                <select class="form-control Company_location" name="company_location_id"
                                    id="Company_location">
                                    @foreach($Company_location as $cl)
                                    <option value="{{$cl->id}}"
                                        <?php echo $jobpost->job_type_id == $cl->id?"selected":""?>>{{$cl->address}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="col-md-6 mt-3">
                                <label for="">Number of Vacancy</label>
                                <input type="text" name="vacancy_count" placeholder="Enter Number of Vacancy"
                                    value="{{$jobpost->vacancy_count}}" class="form-control" id="">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Feature Job</label>
                                <select name="featured_job" id="" class="form-control">
                                    <option selected disabled>Select Feature Job</option>
                                    <option value="yes" <?php echo $jobpost->featured_job == 'yes'?'selected':'';?>>Yes
                                    </option>
                                    <option value="no" <?php echo $jobpost->featured_job == 'no'?'selected':'';?>>No
                                    </option>
                                </select>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Salary</label>
                                <input type="text" name="salary" placeholder="Enter Salary" value="{{$jobpost->salary}}"
                                    class="form-control" id="">
                            </div>


                            <div class="col-md-6 mt-3">
                                <label for="">Last submission</label>
                                <input type="date" name="last_submission_date"
                                    value="{{$jobpost->last_submission_date->format('Y-m-d')}}" placeholder=""
                                    class="form-control" id="">

                            </div>

                            <div class="col-md-12 mt-3">
                                <label for="">Description</label>
                                <textarea name="description" id="" cols="30" rows="3" class="form-control"
                                    placeholder="Enter Description">{{$jobpost->description}}</textarea>
                            </div>
                            <div class="col-md-12 mt-3">
                                <button type="submit" class="btn btn-primary btn-sm">Save</button>
                            </div>
                    </div>


                </form>
            </div>
        </div>
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