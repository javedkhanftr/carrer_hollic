@extends('layouts.app')
@section('content')

<div class="container-fluid">
    <div class="row">
        <!-- jobs part start  -->
        <div class="col-md-8">

            <div class="row">
                <div class="col-md-9">
                    <h3>Dashboard</h3>
                </div>
                <div class="col-md-3">
                    <a href="{{url('job_post/create')}}" class="btn btn-sm btn-success "><i class="fa fa-plus"></i>
                        Create new job</a>
                </div>
                <div class="col-md-8 mt-3">
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
                </div>
                @foreach($job_posts as $job)
                <div>
                    @if($job->status_id == 9)
                    <div class="col-md-12 mt-2 ">
                        <div class="card" style="width:94%;">
                            <div class="card-body">
                                <div class="row ">
                                    <div class="col-md-12" id="table">

                                        <h6 class="text-dark">{{$job->name}}</h6>

                                    </div>
                                    <div class="col-md-10 textSize1">
                                        <p><img width="3%" class="mb-1"
                                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTeP6yFfPwCEiawAI_GuX4xLgiAzbZ3he7LiA&usqp=CAU"
                                                alt=""> Last submission date :
                                            {{$job->last_submission_date->format('d-m-Y')}}</p>
                                    </div>
                                    <div class="col-md-2 text-end">
                                        <div class="three-dots" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                            aria-expanded="false"></div>
                                        <div class="dropdown">
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item" href="#">Preview</a></li>
                                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                                <li><a class="dropdown-item" href="#">Edit job post</a></li>
                                                <li><a class="dropdown-item" href="#">Setting</a></li>
                                                <li><a class="dropdown-item" href="#">Sharable Link</a></li>
                                                <li><a class="dropdown-item" href="#">Deactivate</a></li>
                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        @inject('jobsData', 'App\Http\Controllers\MasterController')

                                        <p class="textSize">
                                            <img width="3%" class="mb-1"
                                                src="https://cdn0.iconfinder.com/data/icons/set-ui-app-android/32/9-512.png"
                                                alt=""> {{ $jobsData::getJobType($job->job_type_id) }}
                                            <img width="3%"
                                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLygrP1X3aXYsENigwZrRyJghoDP7LYW3opDx039b-2w&s"
                                                alt="">{{ $jobsData::getLoation($job->company_location_id) }}
                                            <img width="5%"
                                                src="https://www.creativefabrica.com/wp-content/uploads/2019/02/Home-Icon-by-arus-2.jpg"
                                                alt="">{{ $jobsData::getDepartment($job->department_id) }}
                                            <img width="2%" src="{{asset('career_img/doller.png')}}"
                                                alt="">{{$job->salary }}
                                            <img width="2%" class="mb-1 ml-1 mr-1"
                                                src="{{asset('career_img/user.png')}}" alt="">{{$job->vacancy_count }}

                                        </p>
                                    </div>
                                    <hr style="width:97%;height:10%;">
                                    <div class="col-md-12" style="font-size:100px;">

                                        <div class="scrollmenu">
                                            <div class="card bgColor">
                                                <h6 class="text-dark mt-3">0</h6>
                                                <h6 class="text-dark">New</h6>
                                            </div>
                                            <div class="card bgColor1">
                                                <h6 class="text-dark mt-3">0</h6>
                                                <h6 class="text-dark">Didn't Pick Up The Call</h6>
                                            </div>
                                            <div class="card bgColor">
                                                <h6 class="text-dark mt-3">0</h6>
                                                <h6 class="text-dark">Interview</h6>
                                            </div>
                                            <div class="card bgColor2">
                                                <h6 class="text-dark mt-3">0</h6>
                                                <h6 class="text-dark">Not Relevent</h6>
                                            </div>
                                            <div class="card bgColor">
                                                <h6 class="text-dark mt-3">0</h6>
                                                <h6 class="text-dark">Reject</h6>
                                            </div>
                                            <div class="card bgColor">
                                                <h6 class="text-dark mt-3">0</h6>
                                                <h6 class="text-dark">Shortlist</h6>
                                            </div>
                                            <div class="card bgColor1">
                                                <h6 class="text-dark mt-3">0</h6>
                                                <h6 class="text-dark">Hired</h6>
                                            </div>
                                            <div class="card bgColor">
                                                <h6 class="text-dark mt-3">0</h6>
                                                <h6 class="text-dark">Disqualified</h6>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="btn btn-outline-primary btn-sm mt-3">Overview</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
                <div>
                    @if($job->status_id == 1)
                    <div class="col-md-12 mt-2 ">
                        <div class="card" style="width:94%;">
                            <div class="card-body">
                                <div class="row ">
                                    <div class="col-md-12" id="table">

                                        <h6 class="text-dark">{{$job->name}}</h6>

                                    </div>
                                    <div class="col-md-10 textSize1">
                                        <p><img width="3%" class="mb-1"
                                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTeP6yFfPwCEiawAI_GuX4xLgiAzbZ3he7LiA&usqp=CAU"
                                                alt=""> Last submission date :
                                            {{$job->last_submission_date->format('d-m-Y')}}</p>
                                    </div>
                                    <div class="col-md-2 text-end">
                                        <div class="three-dots" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                            aria-expanded="false"></div>
                                        <div class="dropdown">
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item" href="#">Preview</a></li>
                                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                                <li><a class="dropdown-item" href="#">Edit job post</a></li>
                                                <li><a class="dropdown-item" href="#">Setting</a></li>
                                                <li><a class="dropdown-item" href="#">Sharable Link</a></li>
                                                <li><a class="dropdown-item" href="#">Deactivate</a></li>
                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        @inject('jobsData', 'App\Http\Controllers\MasterController')

                                        <p class="textSize">
                                            <img width="3%" class="mb-1"
                                                src="https://cdn0.iconfinder.com/data/icons/set-ui-app-android/32/9-512.png"
                                                alt=""> {{ $jobsData::getJobType($job->job_type_id) }}
                                            <img width="3%"
                                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLygrP1X3aXYsENigwZrRyJghoDP7LYW3opDx039b-2w&s"
                                                alt="">{{ $jobsData::getLoation($job->company_location_id) }}
                                            <img width="5%"
                                                src="https://www.creativefabrica.com/wp-content/uploads/2019/02/Home-Icon-by-arus-2.jpg"
                                                alt="">{{ $jobsData::getDepartment($job->department_id) }}
                                            <img width="2%" src="{{asset('career_img/doller.png')}}"
                                                alt="">{{$job->salary }}
                                            <img width="2%" class="mb-1 ml-1 mr-1"
                                                src="{{asset('career_img/user.png')}}" alt="">{{$job->vacancy_count }}

                                        </p>
                                    </div>
                                    <hr style="width:97%;height:10%;">
                                    <div class="col-md-12" style="font-size:100px;">

                                        <div class="scrollmenu">
                                            <div class="card bgColor">
                                                <h6 class="text-dark mt-3">0</h6>
                                                <h6 class="text-dark">New</h6>
                                            </div>
                                            <div class="card bgColor1">
                                                <h6 class="text-dark mt-3">0</h6>
                                                <h6 class="text-dark">Didn't Pick Up The Call</h6>
                                            </div>
                                            <div class="card bgColor">
                                                <h6 class="text-dark mt-3">0</h6>
                                                <h6 class="text-dark">Interview</h6>
                                            </div>
                                            <div class="card bgColor2">
                                                <h6 class="text-dark mt-3">0</h6>
                                                <h6 class="text-dark">Not Relevent</h6>
                                            </div>
                                            <div class="card bgColor">
                                                <h6 class="text-dark mt-3">0</h6>
                                                <h6 class="text-dark">Reject</h6>
                                            </div>
                                            <div class="card bgColor">
                                                <h6 class="text-dark mt-3">0</h6>
                                                <h6 class="text-dark">Shortlist</h6>
                                            </div>
                                            <div class="card bgColor1">
                                                <h6 class="text-dark mt-3">0</h6>
                                                <h6 class="text-dark">Hired</h6>
                                            </div>
                                            <div class="card bgColor">
                                                <h6 class="text-dark mt-3">0</h6>
                                                <h6 class="text-dark">Disqualified</h6>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="btn btn-outline-primary btn-sm mt-3">Overview</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
                <div>
                    @if($job->status_id == 1)
                    <div class="col-md-12 mt-2 ">
                        <div class="card" style="width:94%;">
                            <div class="card-body">
                                <div class="row ">
                                    <div class="col-md-12" id="table">

                                        <h6 class="text-dark">{{$job->name}}</h6>

                                    </div>
                                    <div class="col-md-10 textSize1">
                                        <p><img width="3%" class="mb-1"
                                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTeP6yFfPwCEiawAI_GuX4xLgiAzbZ3he7LiA&usqp=CAU"
                                                alt=""> Last submission date :
                                            {{$job->last_submission_date->format('d-m-Y')}}</p>
                                    </div>
                                    <div class="col-md-2 text-end">
                                        <div class="three-dots" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                            aria-expanded="false"></div>
                                        <div class="dropdown">
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item" href="#">Preview</a></li>
                                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                                <li><a class="dropdown-item" href="#">Edit job post</a></li>
                                                <li><a class="dropdown-item" href="#">Setting</a></li>
                                                <li><a class="dropdown-item" href="#">Sharable Link</a></li>
                                                <li><a class="dropdown-item" href="#">Deactivate</a></li>
                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        @inject('jobsData', 'App\Http\Controllers\MasterController')

                                        <p class="textSize">
                                            <img width="3%" class="mb-1"
                                                src="https://cdn0.iconfinder.com/data/icons/set-ui-app-android/32/9-512.png"
                                                alt=""> {{ $jobsData::getJobType($job->job_type_id) }}
                                            <img width="3%"
                                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLygrP1X3aXYsENigwZrRyJghoDP7LYW3opDx039b-2w&s"
                                                alt="">{{ $jobsData::getLoation($job->company_location_id) }}
                                            <img width="5%"
                                                src="https://www.creativefabrica.com/wp-content/uploads/2019/02/Home-Icon-by-arus-2.jpg"
                                                alt="">{{ $jobsData::getDepartment($job->department_id) }}
                                            <img width="2%" src="{{asset('career_img/doller.png')}}"
                                                alt="">{{$job->salary }}
                                            <img width="2%" class="mb-1 ml-1 mr-1"
                                                src="{{asset('career_img/user.png')}}" alt="">{{$job->vacancy_count }}

                                        </p>
                                    </div>
                                    <hr style="width:97%;height:10%;">
                                    <div class="col-md-12" style="font-size:100px;">

                                        <div class="scrollmenu">
                                            <div class="card bgColor">
                                                <h6 class="text-dark mt-3">0</h6>
                                                <h6 class="text-dark">New</h6>
                                            </div>
                                            <div class="card bgColor1">
                                                <h6 class="text-dark mt-3">0</h6>
                                                <h6 class="text-dark">Didn't Pick Up The Call</h6>
                                            </div>
                                            <div class="card bgColor">
                                                <h6 class="text-dark mt-3">0</h6>
                                                <h6 class="text-dark">Interview</h6>
                                            </div>
                                            <div class="card bgColor2">
                                                <h6 class="text-dark mt-3">0</h6>
                                                <h6 class="text-dark">Not Relevent</h6>
                                            </div>
                                            <div class="card bgColor">
                                                <h6 class="text-dark mt-3">0</h6>
                                                <h6 class="text-dark">Reject</h6>
                                            </div>
                                            <div class="card bgColor">
                                                <h6 class="text-dark mt-3">0</h6>
                                                <h6 class="text-dark">Shortlist</h6>
                                            </div>
                                            <div class="card bgColor1">
                                                <h6 class="text-dark mt-3">0</h6>
                                                <h6 class="text-dark">Hired</h6>
                                            </div>
                                            <div class="card bgColor">
                                                <h6 class="text-dark mt-3">0</h6>
                                                <h6 class="text-dark">Disqualified</h6>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="btn btn-outline-primary btn-sm mt-3">Overview</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
                @endforeach
                <div class="d-flex justify-content-center mt-4 mb-4 ml-3">
                    {!! $job_posts->links() !!}
                </div>

            </div>
        </div>
        <!-- jobs part end  -->

        <!-- events part start  -->
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-12">
                    <h3>your events</h3>
                    <div class="card">
                        <div class="card-body">
                            <div class="row text-center mt-5 mb-5">
                                <div class="col-md-12 ">
                                    <img width="50px" src="{{asset('career_img/celebration.svg')}}" alt="">

                                </div>
                                <div class="col-md-12">
                                    <h6>You have no pending events!</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 mt-2">
                    <h3>your to-dos</h3>
                    <div class="card">
                        <div class="card-body">
                            <div class="row text-center mb-5">
                                <div class="col-md-12">
                                    <div class="search1">
                                        <i class="fa fa-plus"></i>
                                        <input type="text" class="form-control" placeholder="Add a to-do">
                                    </div>
                                </div>

                                <div class="col-md-12 mt-5">
                                    <img width="50px" src="{{asset('career_img/celebration.svg')}}" alt="">

                                </div>
                                <div class="col-md-12">
                                    <h6>Chill out! You have no pending todos.</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- events part end  -->
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

<style>
.select2 .selection .select2-selection--single {
    width: 567px;
    height: 38px;
    border: 1px solid #d2d2e5;
}
.relative svg{
    width: 5%;
}
.justify-between div p{
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