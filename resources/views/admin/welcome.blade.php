@extends('layouts.app')
@section('content')
<script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js')}}"></script>

<div class="container-fluid">
    <div class="row">
        <!-- jobs part start  -->
        <div class="col-md-12">

            <div class="row">
                <div class="col-md-10">
                    <!-- <h3>Dashboard</h3> -->
                </div>
              
                <!-- <div class="col-md-8 mt-3">
                    <select name="" class="form-control" style="width:30%;" id="">
                        <option value="2">Draft Jobs</option>
                        <option value="1">Active Jobs</option>
                        <option value="0">inactive Jobs</option>
                    </select>
                </div>
                <div class="col-md-4 mt-3">
                    <div class="search">
                        <i class="fa fa-search"></i>
                        <input type="text" class="form-control" placeholder="Search" id="search">
                    </div>
                </div> -->
                @inject('jobsData', 'App\Http\Controllers\MasterController')
                <div class="white_card card_height_100 mb_30">
                    <div class="white_card_body mt-5">
                        <div class="QA_section">
                            <div class="white_box_tittle list_header">
                                <h4>Table</h4>
                                <div class="box_right d-flex lms_block">
                                    <div class="serach_field_2">
                                        <div class="search_inner">
                                            <form Active="#">
                                                <div class="search_field">
                                                    <input type="text" placeholder="Search content here...">
                                                </div>
                                                <button type="submit"> <i class="ti-search"></i> </button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="add_button ms-2">
                                        <a href="{{url('admin/dashboard/job_post/create')}}"  class="btn_1">Add New</a>
                                    </div>
                                </div>
                            </div>
                            <div class="QA_table mb_30">

                                <table class="table lms_table_active ">
                                    <thead>
                                        <tr>

                                            <th scope="col">S.No.</th>
                                            <th scope="col">Job Title</th>
                                            <th scope="col"> Last submission date</th>
                                            <th scope="col">Job Type</th>
                                            <th scope="col">Job Location</th>
                                            <th scope="col">Department</th>
                                            <th scope="col">Salary</th>
                                            <th scope="col">vacancy</th>
                                            <th scope="col">Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $i=1;
                                        @endphp
                                        @foreach($job_posts as $job)
                                        <tr>
                                            <td>{{$i++;}}</td>
                                            <td>{{$job->name}}</td>
                                            <td>{{$job->last_submission_date->format('d-m-Y')}}</td>
                                            <td>{{ $jobsData::getJobType($job->job_type_id) }}</td>
                                            <td>{{ $jobsData::getLoation($job->company_location_id) }}</td>
                                            <td>{{ $jobsData::getDepartment($job->department_id) }}</td>
                                            <td>{{$job->salary }}</td>
                                            <td>{{$job->vacancy_count }}</td>
                                            <td>
                                                <div class="col-md-2 text-end">
                                                    <div class="three-dots" id="dropdownMenuButton1"
                                                        data-bs-toggle="dropdown" aria-expanded="false"></div>
                                                    <div class="dropdown">
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                        <li><a class="dropdown-item"
                                                                    href="{{url('admin/dashboard/job_post/overview/'.$job->id)}}">Overview</a>
                                                            </li>
                                                            <li><a class="dropdown-item"
                                                                    href="{{url('admin/dashboard/preview/'.$job->slug.'/display')}}">Preview</a>
                                                            </li>
                                                            <li><a class="dropdown-item"
                                                                    href="{{url('admin/dashboard/job_post/edit/'.$job->id)}}">Edit</a>
                                                            </li>
                                                            <li><a class="dropdown-item"
                                                                    href="{{url('admin/dashboard/job_post/edit_data/'.$job->id)}}">Edit
                                                                    job post</a></li>
                                                            <li><a class="dropdown-item" href="">Setting</a></li>
                                                            <li><button class="dropdown-item sharalink"
                                                                    data-slug="{{$job->slug}}">Sharable Link</button>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item"
                                                                    href="{{url('admin/dashboard/job_post/status/'.$job->id)}}">
                                                                    @if($job->status_id == 1)
                                                                    Deactivate
                                                                    @else
                                                                    Active
                                                                    @endif
                                                                </a>
                                                            </li>
                                                            <li><a class="dropdown-item"
                                                                    href="{{url('admin/dashboard/job_post/delete/'.$job->id)}}">Delete</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>

                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
             



            </div>
        </div>
        <!-- jobs part end  -->


<!-- Modal -->
<div class="modal fade" id="sharemodel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Shareable Link</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <p>Use this link to share this job with someone outside of application. Anyone with this link
                            can apply to this job.</p>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-10">
                                        <p class="sharelinkdata"></p>
                                    </div>
                                    <div class="col-md-2">
                                        <button class="btn btn-sm btn-primary copylinkdata">Copy</button>
                                        <button class="btn  btn-primary displaynone copyedData"><i
                                                class="fa fa-check-circle" aria-hidden="true"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Modal -->
<!-- <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Create New Job</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{url('job_post/create')}}" method="post">
                @csrf
             <div class="modal-body">
                
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
                    </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Cancle</button>
                <button type="submit" class="btn btn-primary btn-sm">Save</button>
            </div>
            </form>
        </div>
    </div>
</div> -->
@endsection
<!-- <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script> -->
<script src="{{asset('https://code.jquery.com/jquery-3.6.1.min.js')}}"></script>
<script src="{{asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')}}"></script>
<script>
$(document).ready(function() {

    $('.sharalink').click(function() {
        let slug = $(this).attr('data-slug');

        let str = window.location;
        let url = str + '/preview/' + slug + '/display';
        $('.sharelinkdata').html(url);
        $('#sharemodel').modal('show');

    });
    $('.copylinkdata').click(function() {
        let data = $('.sharelinkdata').text();
        navigator.clipboard.writeText(data)
        $('.copylinkdata').addClass('displaynone');
        $('.copyedData').removeClass('displaynone');
        // alert(data);
    })
})
</script>

<style>
.displaynone {
    display: none !important;
}

.select2 .selection .select2-selection--single {
    width: 567px;
    height: 38px;
    border: 1px solid #d2d2e5;
}

.relative svg {
    width: 5%;
}

.justify-between div p {
    margin-top: 20px;
    margin-left: 4px;

}

div.scrollmenu {
    /* background-color: #333; */
    overflow: auto;
    white-space: nowrap;
}

div.scrollmenu .card {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px;
    text-decoration: none;
}

.scrollmenu .card {
    align-items: center;
    border-radius: 0.25rem;
    display: inline-flex;
    flex-shrink: 0;
    justify-content: center;
    padding: 0.5rem;
    margin-top: 20px;
    margin-bottom: 20px;
    width: 200px;

}


.card .bgColor {
    background-color: #e6f3fc;
}

.card .bgColor1 {
    background-color: #e5e9eb;
}

.card .bgColor2 {
    background-color: #fae4d8;
}

.textSize1 {
    font-size: 15px;
}

.textSize {
    font-size: 10px;
}

.hiddenData {
    visibility: hidden;
}

.search input {

    height: 40px;
    text-indent: 25px;
    width: 80%;
    border: 2px solid #d6d4d4;
}


.search input:focus {

    box-shadow: none;
    border: 2px solid blue;


}

.search .fa-search {

    position: absolute;
    top: 12px;
    left: 25px;

}

.search1 input {

    height: 40px;
    text-indent: 25px;
    border: 2px solid #d6d4d4;
}


.search1 input:focus {

    box-shadow: none;
    border: 2px solid blue;


}

.search1 .fa-plus {

    position: absolute;
    top: 12px;
    left: 90%;

}

.three-dots:after {
    cursor: pointer;
    color: #444;
    content: '\2807';
    font-size: 20px;
    padding: 0 5px;
}
</style>