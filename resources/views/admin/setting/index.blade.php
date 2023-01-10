@extends('layouts.app')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="{{asset('https://code.jquery.com/jquery-3.6.1.min.js')}}"></script>
<style>
.alltab ul li {
    padding-top: 20px;

}

.alltab ul li a {
    text-decoration: none;
    color: black;
    font-size: 20px;
}

.card {
    border: 0 !important;
    box-shadow: 0 0 10px rgba(0, 0, 0, .05);
    height: 100%
}

.card1 {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    max-width: 300px;
    margin: auto;
    text-align: center;
    font-family: arial;
    border-left: 10px solid #46c35f;
    z-index: 1;
    position: fixed;
    top: 70;
    right: 0;
}

.mess {
    border: none;
    outline: 0;
    display: inline-block;
    color: white;
    background-color: #000;
    text-align: center;
    cursor: pointer;
    width: 100%;
    font-size: 10px;
    padding: 15px;
    padding-left: 40px;
    padding-right: 40px;
}

.allcolorprimary {
    background-color: #f4f6fd !important;
}

tbody tr td {
    height: 75px;
    align-items: center;
    /* display: flex; */
}

.displaynone {
    display: none !important;
}
.white_card_body  ul li a{
    padding: 10px;
    font-size:15px;
}
</style>
<div class="row">
<div class="col-xl-12">
                            <div class="white_card card_height_100 mb_30">
                                <div class="white_card_header">
                                    <div class="row align-items-center">
                                        <div class="col-lg-12">
                                            <div class="main-title">
                                                <h3 class="m-0">Job Settings</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="white_card_body ">
                                    <ul class="nav custom_bootstrap_nav">
                                    <li class="nav-item  active">
                                        <a class="nav-item ml-3" id="application-tab" data-toggle="tab"
                                            href="#application" role="tab" aria-controls="application"
                                            aria-selected="true">Application form</a>
                                    </li>

                                    <li class="nav-item ml-3">
                                        <a class="" id="hiring-tab" data-toggle="tab" href="#hiring" role="tab"
                                            aria-controls="hiring" aria-selected="false">Hiring Stage</a>
                                    </li>

                                    <li class="nav-item ml-3">
                                        <a class="" id="event-tab" data-toggle="tab" href="#event" role="tab"
                                            aria-controls="event" aria-selected="false">Event type </a>
                                    </li>
                                    <li class="nav-item ml-3">
                                        <a class="" id="job-tab" data-toggle="tab" href="#job" role="tab"
                                            aria-controls="job" aria-selected="false">Job type</a>
                                    </li>
                                    <li class="nav-item ml-3">
                                        <a class="" id="department1-tab" data-toggle="tab" href="#department1"
                                            role="tab" aria-controls="department1" aria-selected="false">Department</a>
                                    </li>
                                    <li class="nav-item ml-3">
                                        <a class="" id="location-tab" data-toggle="tab" href="#location" role="tab"
                                            aria-controls="location" aria-selected="false">Location</a>
                                    </li>
                                    </ul>
                                </div>
                                <div class="container">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade active show " id="application" role="tabpanel" aria-labelledby="application-tab">
                                        <div class="d-flex justify-content-between">
                                            <h5 class="d-flex align-items-center text-capitalize mb-0 title tab-content-header">
                                                Application form</h5>
                                            <!-- <div class="d-flex align-items-center mb-0"></div> -->
                                            <hr>

                                        </div>
                                        <div class="p-primary" id="Application-0">
                                            <div class="rounded border mb-5 mt-5">
                                                <div class="bg-off-light d-flex align-items-center p-4 allcolorprimary">
                                                    <div>
                                                        <label
                                                            class="custom-control d-inline border-switch mb-0 mr-3 disabled form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked disabled>
                                                            <span class="border-switch-control-indicator"></span>
                                                        </label>
                                                    </div>
                                                    <h6 class="mb-0">
                                                        <label class="mb-0">
                                                            Basic Information
                                                        </label>
                                                    </h6>
                                                </div>
                                                <div class="p-4">
                                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                                        <div class="d-inline-flex align-items-center">
                                                            <div
                                                                class="width-30 height-30 text-white rounded d-inline-flex align-items-center justify-content-center allcolorprimary bg-primary mr-2">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                    stroke-width="2" stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                    class="feather feather-user size-16">
                                                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                                    <circle cx="12" cy="7" r="4"></circle>
                                                                </svg>
                                                            </div>
                                                            <p class="text-muted mb-0">
                                                                First Name<sup>*</sup>
                                                                ,

                                                                Last Name<sup>*</sup>
                                                                ,

                                                                Email<sup>*</sup>
                                                                ,

                                                                Gender<sup>*</sup>
                                                                ,

                                                                Date of birth
                                                                <!---->

                                                            </p>
                                                        </div> <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                            class="text-muted default-base-color width-30 height-30 rounded d-inline-flex align-items-center justify-content-center badge text-primary"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-eye size-14">
                                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                                <circle cx="12" cy="12" r="3"></circle>
                                                            </svg></a>
                                                    </div>
                                                </div>
                                            </div>
                                            @foreach(($data_basic) as $item)
                                            <div class="rounded border mb-5">
                                                <div class="bg-off-light d-flex align-items-center justify-content-between p-4 allcolorprimary">
                                                    <div class="d-flex align-items-center ">
                                                        <div>
                                                            <label class="custom-control d-inline border-switch mb-0 mr-3 form-check form-switch">
                                                                @if($item->isVisible == 'true')
                                                                    <input type="checkbox" name="section_isVisible" id="section_isVisible" class="form-check-input" value="true" checked>
                                                                @else
                                                                    <input type="checkbox" name="section_isVisible" id="section_isVisible" class="form-check-input" value="true" >
                                                                @endif
                                                                <span class="border-switch-control-indicator"></span>
                                                            </label>
                                                        </div>
                                                        <h6 class="mb-0">
                                                            <label class="mb-0">{{$item->title}}</label>
                                                        </h6>
                                                    </div>
                                                </div>
                                                <div class="p-4">
                                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                                        <div class="d-inline-flex align-items-center">
                                                            <div class="width-30 height-30 text-white rounded d-inline-flex align-items-center justify-content-center mr-2 bg-primary">
                                                                <i class="fa fa-{{$item->icon}} bg-primary p-1"></i>
                                                                
                                                            </div>
                                                            <p class="text-muted mb-0">
                                                                @foreach($item->fields as $data)

                                                                {{$data->name}}<sup>*</sup>,
                                                                @endforeach
                                                            </p>
                                                        </div> 
                                                        <button  class="btn btn-sm btn-primary editapplicatopnData" data-name="{{$item->title}}">
                                                            <i class="fa fa-edit"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                            <button type="button"
                                                class="btn primary-text-color d-inline-flex align-items-center px-0 mb-primary"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-plus size-14 mr-2">
                                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                                </svg>
                                                Add more section
                                            </button>
                                            <div class="d-flex justify-content-start align-items-center"><a href="#"
                                                    class="btn btn-success d-inline-flex align-items-center justify-content-center"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-save size-17 mr-2">
                                                        <path
                                                            d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z">
                                                        </path>
                                                        <polyline points="17 21 17 13 7 13 7 21"></polyline>
                                                        <polyline points="7 3 7 8 15 8"></polyline>
                                                    </svg>
                                                    Save changes
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                <div class="tab-pane fade" id="hiring" role="tabpanel" aria-labelledby="hiring-tab">
                                    <div id="hiring-1" class="tab-pane fade active show">
                                        <div class="d-flex justify-content-between">
                                            <h5
                                                class="d-flex align-items-center text-capitalize mb-0 title tab-content-header">
                                                Hiring Stage</h5>
                                            <div class="d-flex align-items-center mb-0">
                                                <button class="btn btn-primary mr-primary" data-bs-toggle="modal"
                                                    data-bs-target="#addstage">Add hiring stage</button>
                                            </div>
                                        </div>
                                        <div class="content py-primary mt-5">
                                            <div>
                                                <div>
                                                    <div class="datatable">
                                                        <div
                                                            class="table-responsive custom-scrollbar table-responsive py-primary">
                                                            <table class="table table-lg">
                                                                <thead>
                                                                    <tr>
                                                                        <th track-by="0" class="datatable-th pt-0">
                                                                            <span class="font-size-default">
                                                                                <span>Name</span>
                                                                            </span>
                                                                        </th>
                                                                        <th track-by="1"
                                                                            class="datatable-th pt-0 text-right">
                                                                            <span class="font-size-default">Actions</span>
                                                                        </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach($stage as $item)
                                                                    <tr>
                                                                        <td data-title="Name" class="datatable-td">
                                                                            <span>
                                                                                <span
                                                                                    class="text-capitalize">{{$item->name}}</span>
                                                                            </span>
                                                                        </td>
                                                                        <td data-title="Actions" class="datatable-td text-md-right">
                                                                        <button type="button" data-toggle="tooltip" data-placement="top" title="" class="btn btn-sm btn-primary editstage" data-id="{{$item->id}}" data-original-title="Edit">
                                                                            <i class="fa fa-edit "></i>
                                                                        </button>
                                                                        <button type="button" data-toggle="tooltip" data-placement="top" title="" class="btn btn-sm btn-danger deletestage" data-id="{{$item->id}}" data-original-title="Delete">
                                                                            <i class="fa fa-trash"></i>
                                                                        </button>
                                                                        
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
                                </div>
                                <div class="tab-pane fade" id="event" role="tabpanel" aria-labelledby="event-tab">
                                    <div id="Event-2" class="tab-pane fade active show">
                                        <div class="d-flex justify-content-between">
                                            <h5
                                                class="d-flex align-items-center text-capitalize mb-0 title tab-content-header">
                                                Event type</h5>
                                            <div class="d-flex align-items-center mb-0">
                                                <button class="btn btn-primary mr-primary" data-bs-toggle="modal"
                                                    data-bs-target="#addeventtype">Add event type</button>
                                            </div>
                                        </div>
                                        <div class="content py-primary mt-5">
                                            <div>
                                                <div>
                                                    <div class="datatable">
                                                        <div
                                                            class="table-responsive custom-scrollbar table-view-responsive py-primary">
                                                            <table class="table mb-0">
                                                                <thead>
                                                                    <tr>
                                                                        <th track-by="0" class="datatable-th pt-0">
                                                                            <span class="font-size-default">
                                                                                <span>Name</span>
                                                                            </span>
                                                                        </th>
                                                                        <th track-by="1"
                                                                            class="datatable-th pt-0 text-right">
                                                                            <span class="font-size-default">Actions</span>
                                                                        </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach($eventtype as $item)
                                                                    <tr>
                                                                        <td data-title="Name" class="datatable-td">
                                                                            <span class="">{{$item->name}}</span>
                                                                        </td>
                                                                        <td data-title="Actions" class="datatable-td text-md-right">
                                                                        <button type="button" data-toggle="tooltip" data-placement="top" title="" class="btn btn-sm btn-primary editeventtype" data-id="{{$item->id}}" data-original-title="Edit">
                                                                            <i class="fa fa-edit "></i>
                                                                        </button>
                                                                        <button type="button" data-toggle="tooltip" data-placement="top" title="" class="btn btn-sm btn-danger deleteeventtype" data-id="{{$item->id}}" data-original-title="Delete">
                                                                            <i class="fa fa-trash"></i>
                                                                        </button>
                                                                        
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
                                </div>
                                <div class="tab-pane fade" id="job" role="tabpanel" aria-labelledby="job-tab">
                                    <div id="Job-3" class="tab-pane fade active show">
                                        <div class="d-flex justify-content-between">
                                            <h5
                                                class="d-flex align-items-center text-capitalize mb-0 title tab-content-header">
                                                Job type</h5>
                                            <div class="d-flex align-items-center mb-0">
                                                <button class="btn btn-primary mr-primary" data-bs-toggle="modal"
                                                    data-bs-target="#addjobtype">Add job type</button>
                                            </div>
                                        </div>
                                        <div class="content py-primary mt-5">
                                            <div>
                                                <div>
                                                    <div class="datatable">
                                                        <div
                                                            class="table-responsive custom-scrollbar table-view-responsive py-primary">
                                                            <table class="table mb-0">
                                                                <thead>
                                                                    <tr>
                                                                        <th track-by="0" class="datatable-th pt-0">
                                                                            <span class="font-size-default">
                                                                                <span>Name</span>
                                                                            </span>
                                                                        </th>
                                                                        <th track-by="1" class="datatable-th pt-0">
                                                                            <span class="font-size-default">
                                                                                <span>Brief</span>
                                                                            </span>
                                                                        </th>
                                                                        <th track-by="2"
                                                                            class="datatable-th pt-0 text-right">
                                                                            <span class="font-size-default">Actions</span>
                                                                        </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach($jobtype as $item)
                                                                    <tr>
                                                                        <td data-title="Name" class="datatable-td">
                                                                            <span class="">{{$item->name}}</span>
                                                                        </td>
                                                                        <td data-title="Brief" class="datatable-td">
                                                                            <span class="">{{$item->brief}}</span>
                                                                        </td>
                                                                        <td data-title="Actions" class="datatable-td text-md-right">
                                                                        <button type="button" data-toggle="tooltip" data-placement="top" title="" class="btn btn-sm btn-primary editjobtype" data-id="{{$item->id}}" data-original-title="Edit">
                                                                            <i class="fa fa-edit "></i>
                                                                        </button>
                                                                        <button type="button" data-toggle="tooltip" data-placement="top" title="" class="btn btn-sm btn-danger deletejobtype" data-id="{{$item->id}}" data-original-title="Delete">
                                                                            <i class="fa fa-trash"></i>
                                                                        </button>
                                                                            
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
                                </div>
                                <div class="tab-pane fade" id="department1" role="tabpanel"
                                    aria-labelledby="department1-tab">
                                    <div id="Department-4" class="tab-pane fade  show">
                                        <div class="d-flex justify-content-between">
                                            <h5
                                                class="d-flex align-items-center text-capitalize mb-0 title tab-content-header">
                                                Department</h5>
                                            <div class="d-flex align-items-center mb-0">
                                                <button class="btn btn-primary mr-primary" data-bs-toggle="modal"
                                                    data-bs-target="#adddepartment"> Add department </button>
                                            </div>
                                        </div>
                                        <div class="content py-primary mt-5">
                                            <div>
                                                <div>
                                                    <div class="datatable">
                                                        <div
                                                            class="table-responsive custom-scrollbar table-view-responsive py-primary">
                                                            <table class="table mb-0">
                                                                <thead>
                                                                    <tr>
                                                                        <th track-by="0" class="datatable-th pt-0">
                                                                            <span class="font-size-default">
                                                                                <span>Name</span>
                                                                            </span>
                                                                        </th>
                                                                        <th track-by="1"
                                                                            class="datatable-th pt-0 text-right">
                                                                            <span class="font-size-default">Actions</span>
                                                                        </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach($department as $item)
                                                                    <tr>
                                                                        <td data-title="Name" class="datatable-td">
                                                                            <span class="">{{$item->name}}</span>
                                                                        </td>
                                                                        <td data-title="Actions" class="datatable-td text-md-right">
                                                                        <button type="button" data-toggle="tooltip" data-placement="top" title="" class="btn btn-sm btn-primary editdepartment" data-id="{{$item->id}}" data-original-title="Edit">
                                                                            <i class="fa fa-edit "></i>
                                                                        </button>
                                                                        <button type="button" data-toggle="tooltip" data-placement="top" title="" class="btn btn-sm btn-danger deletedepartment" data-id="{{$item->id}}" data-original-title="Delete">
                                                                            <i class="fa fa-trash"></i>
                                                                        </button>
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
                                </div>
                                <div class="tab-pane fade" id="location" role="tabpanel" aria-labelledby="location-tab">
                                    <div id="Location-5" class="tab-pane fade active show">
                                        <div class="d-flex justify-content-between">
                                            <h5
                                                class="d-flex align-items-center text-capitalize mb-0 title tab-content-header">
                                                Location</h5>
                                            <div class="d-flex align-items-center mb-0">
                                                <button class="btn btn-primary mr-primary" data-bs-toggle="modal"
                                                    data-bs-target="#addlocation"> Add location</button>
                                            </div>
                                        </div>
                                        <div class="content py-primary mt-5">
                                            <div>
                                                <div>
                                                    <div class="datatable">
                                                        <div
                                                            class="table-responsive custom-scrollbar table-view-responsive py-primary">
                                                            <table class="table mb-0">
                                                                <thead>
                                                                    <tr>
                                                                        <th track-by="0" class="datatable-th pt-0">
                                                                            <span class="font-size-default">
                                                                                <span>Address</span>
                                                                            </span>
                                                                        </th>
                                                                        <th track-by="1"
                                                                            class="datatable-th pt-0 text-right">
                                                                            <span class="font-size-default">
                                                                                Actions
                                                                            </span>
                                                                        </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach($company_location as $item)
                                                                    <tr>

                                                                        <td data-title="Address" class="datatable-td">
                                                                            <span class="">{{$item->address}}</span>
                                                                        </td>
                                                                        <td data-title="Actions" class="datatable-td text-md-right">
                                                                            <button type="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" class='getlocation btn btn-sm btn-primary' data-id="{{$item->id}}">
                                                                                <i class="fa fa-edit"></i>
                                                                            </button>
                                                                            <button type="button" data-toggle="tooltip" data-placement="top" title="" class="btn btn-sm btn-danger deletelocation" data-original-title="Delete" data-id="{{$item->id}}">
                                                                                <i class="fa fa-trash"></i>
                                                                            </button>
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
                                </div>
                            </div>
                                </div>
                             
                            </div>
                        </div>
</div>
<div class="main-panel">
        <div class="row">
            <div class="col-md-9"></div>
            <div class="col-md-3 text-end  " id="showmessage"></div>
        </div>
    <div class="content-wrapper">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb p-0 d-flex align-items-center     bg-light">
                <li class="breadcrumb-item page-header d-flex align-items-center">
                    <h4 class="mb-0 pt-3 pb-3 ml-3">Job settings</h4>
                </li>
            </ol>
        </nav>
        <div class="row mb-5">
            <div class="col-md-3">
                <dic class="card" height="100%">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 text-center text-primary">
                                <h1>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-settings">'
                                        <circle cx="12" cy="12" r="3"></circle>
                                        <path
                                            d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                        </path>
                                    </svg>

                                </h1>
                            </div>
                            <div class="col-md-12 alltab">
                                <ul class="nav mt-2 mb-4 ml-3" id="myTab" role="tablist" style="display: block;">
                                    <li class="nav-item  active">
                                        <a class="nav-item ml-3" id="application-tab" data-toggle="tab"
                                            href="#application" role="tab" aria-controls="application"
                                            aria-selected="true">Application form</a>
                                    </li>

                                    <li class="nav-item ml-3">
                                        <a class="" id="hiring-tab" data-toggle="tab" href="#hiring" role="tab"
                                            aria-controls="hiring" aria-selected="false">Hiring Stage</a>
                                    </li>

                                    <li class="nav-item ml-3">
                                        <a class="" id="event-tab" data-toggle="tab" href="#event" role="tab"
                                            aria-controls="event" aria-selected="false">Event type </a>
                                    </li>
                                    <li class="nav-item ml-3">
                                        <a class="" id="job-tab" data-toggle="tab" href="#job" role="tab"
                                            aria-controls="job" aria-selected="false">Job type</a>
                                    </li>
                                    <li class="nav-item ml-3">
                                        <a class="" id="department1-tab" data-toggle="tab" href="#department1"
                                            role="tab" aria-controls="department1" aria-selected="false">Department</a>
                                    </li>
                                    <li class="nav-item ml-3">
                                        <a class="" id="location-tab" data-toggle="tab" href="#location" role="tab"
                                            aria-controls="location" aria-selected="false">Location</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </dic>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- apllictaion modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Basic Information</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
           <div class="modal-body custom-scrollbar">
                <form data-url="" class="mb-0">
                    <div class="mb-4">  
                        <div class="note  p-4" style="background-color:rgba(255,204,23,0.09);">
                            <p class="m-1">View only: You can not modify basic information setting.</p>    
                        </div>
                    </div>
                    <div class="table-responsive mb-2">
                        <table class="table table-fixed">
                            <thead>
                                <tr>
                                    <th class="w-50">Fields</th>
                                    <th>Type</th>
                                    <th>Require an answer</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="w-50">
                                        <div class="d-inline-flex align-items-center ml-4">
                                            <div>
                                                <label class="custom-control form-check form-switch d-inline border-switch mb-0 mr-3 disabled">
                                                    <input type="checkbox" name="field_show" id="field-name-0" disabled="disabled" class="form-check-input "checked value="true"> 
                                                    <span class="border-switch-control-indicator"></span>
                                                </label>
                                            </div> 
                                            <label for="field-name-0" class="mb-0">
                                                First Name
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="mb-0 text-capitalize">
                                            Text
                                        </p>
                                    </td>
                                    <td>
                                        <div>
                                            <div class="customized-checkbox checkbox-default">
                                                <input type="checkbox" name="field_require" id="field-require-0" disabled="disabled" value="true" checked> 
                                                <label for="field-require-0" class="">
                                                    True
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="w-50">
                                        <div class="d-inline-flex align-items-center ml-4">
                                            <div>
                                                <label class="custom-control form-check form-switch d-inline border-switch mb-0 mr-3 disabled">
                                                    <input type="checkbox" name="field_show" id="field-name-1" disabled="disabled" class="form-check-input " value="true" checked> 
                                                    <span class="border-switch-control-indicator"></span>
                                                </label>
                                            </div> 
                                            <label for="field-name-1" class="mb-0">Last Name</label>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="mb-0 text-capitalize">Text</p>
                                    </td>
                                    <td>
                                        <div>
                                            <div class="customized-checkbox checkbox-default">
                                                <input type="checkbox" name="field_require" id="field-require-1" disabled="disabled" value="true" checked> 
                                                <label for="field-require-1" class="">True</label>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="w-50">
                                        <div class="d-inline-flex align-items-center ml-4">
                                            <div>
                                                <label class="custom-control form-check form-switch d-inline border-switch mb-0 mr-3 disabled">
                                                    <input type="checkbox" name="field_show" id="field-name-2" disabled="disabled" class="form-check-input " value="true" checked> 
                                                    <span class="border-switch-control-indicator"></span>
                                                </label>
                                            </div> 
                                            <label for="field-name-2" class="mb-0">Email</label>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="mb-0 text-capitalize">Email</p>
                                    </td>
                                    <td>
                                        <div>
                                            <div class="customized-checkbox checkbox-default">
                                                <input type="checkbox" name="field_require" id="field-require-2" disabled="disabled" value="true" checked> 
                                                <label for="field-require-2" class="">True</label>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="w-50">
                                        <div class="d-inline-flex align-items-center ml-4">
                                            <div>
                                                <label class="custom-control form-check form-switch d-inline border-switch mb-0 mr-3 disabled">
                                                    <input type="checkbox" name="field_show" id="field-name-3" disabled="disabled" class="form-check-input " value="true" checked> 
                                                    <span class="border-switch-control-indicator"></span>
                                                </label>
                                            </div> 
                                            <label for="field-name-3" class="mb-0">Gender</label>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="mb-0 text-capitalize">Radio</p>
                                    </td>
                                    <td>
                                        <div>
                                            <div class="customized-checkbox checkbox-default">
                                                <input type="checkbox" name="field_require" id="field-require-3" disabled="disabled" value="true" checked> 
                                                <label for="field-require-3" class="">True</label>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="w-50">
                                        <div class="d-inline-flex align-items-center ml-4">
                                            <div>
                                                <label class="custom-control form-check form-switch d-inline border-switch mb-0 mr-3 disabled">
                                                    <input type="checkbox" name="field_show" id="field-name-4" disabled="disabled" class="form-check-input "value="true" checked> 
                                                        <span class="border-switch-control-indicator"></span>
                                                    </label>
                                            </div> 
                                            <label for="field-name-4" class="mb-0">Date of birth</label>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="mb-0 text-capitalize">Date</p>
                                    </td>
                                    <td>
                                        <div>
                                            <div class="customized-checkbox checkbox-default">
                                                <input type="checkbox" name="field_require" id="field-require-4" disabled="disabled"value="false" > 
                                                <label for="field-require-4" class="">False</label>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
    </div>
  </div>
</div>


       

<!-- Add Location Modal -->
<div class="modal fade" id="addlocation" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header mt-1 mb-2">
                <h5 class="modal-title " id="exampleModalLabel">Add location</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{url('job-setting/add_location')}}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 mb-4 mt-2">
                            <label for="">Address</label>
                            <input type="text" name="address" class="form-control" placeholder="Enter Address" id="">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- edit Location Modal -->
<div class="modal fade" id="editlocation" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header mt-1 mb-2">
                <h5 class="modal-title " id="exampleModalLabel">Edit location</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{url('job-setting/edit_location')}}" method="post">
                @csrf
                <input type="hidden" name="address_id" class="address_id">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 mb-4 mt-2">
                            <label for="">Address</label>
                            <input type="text" name="address" class="form-control address" placeholder="Enter Address"
                                id="">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Add department modal-->
<div class="modal fade" id="adddepartment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header mt-1 mb-2">
                <h5 class="modal-title " id="exampleModalLabel">Add Department</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{url('job-setting/add_department')}}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 mb-4 mt-2">
                            <label for="">Name</label>
                            <input type="text" name="department_name" class="form-control" placeholder="Enter Name"
                                id="">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- edit department Modal -->
<div class="modal fade" id="editdepartment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header mt-1 mb-2">
                <h5 class="modal-title " id="exampleModalLabel">Edit Department</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{url('job-setting/edit_department')}}" method="post">
                @csrf
                <input type="hidden" name="department_id" class="department_id">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 mb-4 mt-2">
                            <label for="">Name</label>
                            <input type="text" name="department_name" class="form-control department"
                                placeholder="Enter Name" id="">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Add jobtype modal-->
<div class="modal fade" id="addjobtype" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header mt-1 mb-2">
                <h5 class="modal-title " id="exampleModalLabel">Add Job Type</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{url('job-setting/add_jobtype')}}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 mb-4 mt-2">
                            <label for="">Name</label>
                            <input type="text" name="jobtype_name" class="form-control" placeholder="Enter Name" id="">
                        </div>
                        <div class="col-md-12 mb-4 mt-2">
                            <label for="">Brief</label>
                            <input type="text" name="jobtype_brief" class="form-control" placeholder="Enter Brief"
                                id="">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- edit jobtype Modal -->
<div class="modal fade" id="editjobtype" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header mt-1 mb-2">
                <h5 class="modal-title " id="exampleModalLabel">Edit jobtype</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{url('job-setting/edit_jobtype')}}" method="post">
                @csrf
                <input type="hidden" name="jobtype_id" class="jobtype_id">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 mb-4 mt-2">
                            <label for="">Name</label>
                            <input type="text" name="jobtype_name" class="form-control jobtype" placeholder="Enter Name"
                                id="">
                        </div>
                        <div class="col-md-12 mb-4 mt-2">
                            <label for="">Brief</label>
                            <input type="text" name="jobtype_brief" class="form-control jobtype_brief"
                                placeholder="Enter Brief" id="">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Add eventtype modal-->
<div class="modal fade" id="addeventtype" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header mt-1 mb-2">
                <h5 class="modal-title " id="exampleModalLabel">Add Event Type</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{url('job-setting/add_eventtype')}}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 mb-4 mt-2">
                            <label for="">Name</label>
                            <input type="text" name="eventtype_name" class="form-control" placeholder="Enter Name"
                                id="">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- edit eventtype Modal -->
<div class="modal fade" id="editeventtype" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header mt-1 mb-2">
                <h5 class="modal-title " id="exampleModalLabel">Edit Event Type</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{url('job-setting/edit_eventtype')}}" method="post">
                @csrf
                <input type="hidden" name="eventtype_id" class="eventtype_id">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 mb-4 mt-2">
                            <label for="">Name</label>
                            <input type="text" name="eventtype_name" class="form-control eventtype"
                                placeholder="Enter Name" id="">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Add stage modal-->
<div class="modal fade" id="addstage" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header mt-1 mb-2">
                <h5 class="modal-title " id="exampleModalLabel">Add Stage</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{url('job-setting/add_stage')}}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 mb-4 mt-2">
                            <label for="">Name</label>
                            <input type="text" name="stage_name" class="form-control" placeholder="Enter Name" id="">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- edit stage Modal -->
<div class="modal fade" id="editstage" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header mt-1 mb-2">
                <h5 class="modal-title " id="exampleModalLabel">Edit Stage</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{url('job-setting/edit_stage')}}" method="post">
                @csrf
                <input type="hidden" name="stage_id" class="stage_id">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 mb-4 mt-2">
                            <label for="">Name</label>
                            <input type="text" name="stage_name" class="form-control stage" placeholder="Enter Name"
                                id="">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="modal fade" id="applysettingmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title application_title" id="exampleModalLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
           <div class="modal-body custom-scrollbar">
                <form data-url="" class="mb-0">
                    <div class="mb-2">  
                        <div class="note ">
                            <p class="m-1">Select what should be included or required in the apply form.</p>    
                        </div>
                    </div>
                    <div class="table-responsive mb-2">
                        <table class="table table-fixed applicaton_add_data ">
                            <thead>
                                <tr class="">
                                    <th class="w-50">Fields</th>
                                    <th>Type</th>
                                    <th>Require an answer</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                    <button type="button" class="btn primary-text-color d-inline-flex align-items-center px-0 text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus size-14 mr-2">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg>
                         Add more fields
                    </button>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
                </form>
            </div>
    </div>
  </div>
</div>
@endsection
<script src="{{asset('https://code.jquery.com/jquery-3.6.1.min.js')}}"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> -->

<script>
$(document).ready(function() {
    $(document).ready(function() {

        let test =
            " @if(session()->has('message'))<div class='card1'><p style='margin-top: 0; margin-bottom: 0rem;'> <font class='mess'>{{session('message')}} {{session()->forget('message')}}</font></p></div> @endif ";
        $('#showmessage').html(test);
        setTimeout(function() {
            $('#showmessage').addClass('displaynone');
        }, 2000);
    });

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(".getlocation").click(function() {
        let id = $(this).attr("data-id");

        $.ajax({
            type: 'POST',
            url: "{{ url('/job-setting/get_location/') }}",
            data: {
                id: id
            },
            success: function(data) {
                // console.log(data);
                let address = data.company_location.address;
                $(".address").val(address);
                $(".address_id").val(id);
                $("#editlocation").modal("show");


            }
        });


    });
    $('.deletelocation').click(function() {
        let id = $(this).attr('data-id');
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    ),
                    setTimeout(() => {
                        window.location.href = "job-setting/delete_location/" + id;
                    }, 1000);

            }

        });
    })

    $(".editdepartment").click(function() {
        let id = $(this).attr("data-id");

        $.ajax({
            type: 'POST',
            url: "{{ url('/job-setting/get_department/') }}",
            data: {
                id: id
            },
            success: function(data) {
                // console.log(data);
                let department = data.department.name;
                $(".department").val(department);
                $(".department_id").val(id);
                $("#editdepartment").modal("show");


            }
        });


    });
    $('.deletedepartment').click(function() {
        let id = $(this).attr('data-id');
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    ),
                    setTimeout(() => {
                        window.location.href = "job-setting/delete_department/" + id;
                    }, 1000);

            }

        });
    })


    $(".editjobtype").click(function() {
        let id = $(this).attr("data-id");
        $.ajax({
            type: 'POST',
            url: "{{ url('/job-setting/get_jobtype/') }}",
            data: {
                id: id
            },
            success: function(data) {
                // console.log(data);
                let jobtype = data.jobtype.name;
                let brief = data.jobtype.brief;
                $(".jobtype").val(jobtype);
                $(".jobtype_brief").val(brief);
                $(".jobtype_id").val(id);
                $("#editjobtype").modal("show");


            }
        });


    });
    $('.deletejobtype').click(function() {
        let id = $(this).attr('data-id');
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    ),
                    setTimeout(() => {
                        window.location.href = "job-setting/delete_jobtype/" + id;
                    }, 1000);

            }

        });
    })


    $(".editeventtype").click(function() {
        let id = $(this).attr("data-id");
        $.ajax({
            type: 'POST',
            url: "{{ url('/job-setting/get_eventtype/') }}",
            data: {
                id: id
            },
            success: function(data) {
                // console.log(data);
                let eventtype = data.eventtype.name;
                $(".eventtype").val(eventtype);
                $(".eventtype_id").val(id);
                $("#editeventtype").modal("show");


            }
        });


    });
    $('.deleteeventtype').click(function() {
        let id = $(this).attr('data-id');
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    ),
                    setTimeout(() => {
                        window.location.href = "job-setting/delete_eventtype/" + id;
                    }, 1000);

            }

        });
    })


    $(".editstage").click(function() {
        let id = $(this).attr("data-id");
        $.ajax({
            type: 'POST',
            url: "{{ url('/job-setting/get_stage/') }}",
            data: {
                id: id
            },
            success: function(data) {
                // console.log(data);
                let stage = data.stage.name;
                $(".stage").val(stage);
                $(".stage_id").val(id);
                $("#editstage").modal("show");


            }
        });


    });
    $('.deletestage').click(function() {
        let id = $(this).attr('data-id');
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    ),
                    setTimeout(() => {
                        window.location.href = "job-setting/delete_stage/" + id;
                    }, 1000);

            }

        });
    });
    $('.editapplicatopnData').click(function(){
        let name=$(this).attr('data-name');
        $.ajax({
            type: 'POST',
            url: "{{ url('/job-setting/get_application/') }}",
            data: {
                name: name
            },
            success: function(data) {
                console.log(data);
                let title=data.title;
                $('.application_title').html(title);
                let arr=[];
                let fields=data.fields;
                fields.forEach(element => {
                    let val='<tr>\n\
                                <td>'+element.name+'</td>\n\
                                <td>'+element.type+'</td>\n\
                                <td class="test">'+(element.require == true ? "<input type='checkbox' checked class='changerequire' value='true'> <font class='true_false_change'>True</font>" : "<input type='checkbox' class='changerequire' value='false'> <font class='true_false_change'>False</font>")+'</td>\n\
                                <td>\n\
                                    <button class="btn btn-sm badge btn-primary "><i class="fa fa-edit"></i></button>\n\
                                    <button class="btn btn-sm badge btn-danger"><i class="fa fa-trash"></i></button>\n\
                                </td>\n\
                            </tr>';
                            arr.push(val);
                    
                });
                $('.applicaton_add_data tbody   ').html(arr);
                $('#applysettingmodal').modal('show');

            }
        });
    });



});
</script>
