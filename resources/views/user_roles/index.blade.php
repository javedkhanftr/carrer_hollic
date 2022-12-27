@extends('layouts.app')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}" />

<style>
.nav li a {
    text-decoration: none;
    color: black;
}

a:hover {
    color: #007bff !important;
}

.active1 {
    color: #007bff !important;
}

.card {
    box-shadow: 0 0 10px rgba(0, 0, 0, .05);
    border: 0 !important;
}

.avatars-w-50 {
    position: relative;
}

.avatars-w-50 .no-img {
    align-items: center;
    background-color: black;
    color: white;
    display: flex;
    font-size: 14px;
    justify-content: center;
    height: 45px;
    width: 45px;
}

.badge-sm {
    font-size: 11px;
    padding: .45rem 1rem;
}

.allbtn span {
    line-height: 1.8;
    width: 74px;
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

.displaynone {
    display: none !important;
}
</style>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script>
$(document).ready(function() {
    let test =
        " @if(session()->has('message'))<div class='card1'><p style='margin-top: 0; margin-bottom: 0rem;'> <font class='mess'>{{session('message')}} {{session()->forget('message')}}</font></p></div> @endif ";
    $('#showmessage').html(test);
    setTimeout(function() {
        $('#showmessage').addClass('displaynone');
    }, 2000);
});
</script>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-9"></div>
        <div class="col-md-3 text-end  " id="showmessage">


        </div>
        <div class="col-md-12 ">
            <div class="row ">
                <div class="col-md-9">
                    <h5 class="ml-3">Users & Roles</h5>
                </div>
                <div class="col-md-3 text-end">
                    <button type="button" data-toggle="modal" class="btn btn-success btn-with-shadow mr-2"
                        data-toggle="modal" data-target="#exampleModalinvite">
                        Invite User
                    </button>
                    <button type="button" data-toggle="modal" class="btn btn-primary btn-with-shadow">
                        Add Role
                    </button>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h5> Users</h5>
                                        </div>
                                        <div class="col-md-9">

                                            <span class="form-control-feedback">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-search">
                                                    <circle cx="11" cy="11" r="8"></circle>
                                                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                                </svg>
                                            </span>
                                            <input type="text" placeholder="Search" id="search"
                                                class="form-control form-control1 filter">


                                        </div>

                                    </div>
                                    <hr style="height:0.1px;" class="mt-5">
                                </div>
                                <div class="col-md-12 mt-4">
                                    <ul class="nav mt-2 mb-4 ml-3" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="active active1" id="home-tab" data-toggle="tab" href="#home"
                                                role="tab" aria-controls="home" aria-selected="true">All User</a>
                                        </li>

                                        <li class="nav-item ml-3">
                                            <a class="" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                                aria-controls="profile" aria-selected="false">Active</a>
                                        </li>

                                        <li class="nav-item ml-3">
                                            <a class="" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                                                aria-controls="contact" aria-selected="false">InActive</a>
                                        </li>
                                        <li class="nav-item ml-3">
                                            <a class="" id="invite-tab" data-toggle="tab" href="#contact" role="tab"
                                                aria-controls="contact" aria-selected="false">Invited</a>
                                        </li>
                                    </ul>


                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                            <div class="col-md-12">
                                                <div class="row mt-5 alluserData">
                                                    <div class="col-md-12  table-responsive">
                                                        <table class="table " id="table">
                                                            <tbody>
                                                                @foreach($userRole as $role)
                                                                <tr>
                                                                    <td>
                                                                        <div class="avatars-w-50">
                                                                            <div class="no-img rounded-circle">
                                                                                {{$role->first_name[0].$role->last_name[0]}}
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div>
                                                                            <font style="font-size:15px; color:black;">
                                                                                {{$role->first_name}}
                                                                                {{$role->last_name}}</font><br>
                                                                            <font class="text-secondary"
                                                                                style="font-size:12px;">
                                                                                {{$role->email}}
                                                                            </font>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <span class="allbtn">
                                                                            @if($role->status_id == 1)
                                                                            <span
                                                                                class="badge badge-sm badge-pill badge-success">Active</span>
                                                                            @else
                                                                            <span
                                                                                class="badge badge-sm badge-pill badge-danger">Inactive</span>
                                                                            @endif

                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span>
                                                                            <div
                                                                                class="dropdown options-dropdown d-inline-block">
                                                                                <button type="button"
                                                                                    data-toggle="dropdown"
                                                                                    title="Actions"
                                                                                    class="btn-option btn"
                                                                                    aria-expanded="false">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="24" height="24"
                                                                                        viewBox="0 0 24 24" fill="none"
                                                                                        stroke="currentColor"
                                                                                        stroke-width="2"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        class="feather feather-more-vertical">
                                                                                        <circle cx="12" cy="12" r="1">
                                                                                        </circle>
                                                                                        <circle cx="12" cy="5" r="1">
                                                                                        </circle>
                                                                                        <circle cx="12" cy="19" r="1">
                                                                                        </circle>
                                                                                    </svg>
                                                                                </button>
                                                                                <div class="dropdown-menu dropdown-menu-right py-2 mt-1"
                                                                                    style="">
                                                                                    <button data-id="{{$role->id}}"
                                                                                        class="dropdown-item px-4 py-2 idget">
                                                                                        Edit
                                                                                    </button>
                                                                                    <span data-id="{{$role->id}}"
                                                                                        class="deleteuser dropdown-item px-4 py-2 "
                                                                                        clbuttonss="dropdown-item px-4 py-2">
                                                                                        Delete
                                                                                    </span>
                                                                                    @if($role->status_id == 1)
                                                                                    <a href="{{url('user/status_change/'.$role->id)}}"
                                                                                        class="dropdown-item px-4 py-2">
                                                                                        De-activate
                                                                                    </a>
                                                                                    @else
                                                                                    <a href="{{url('user/status_change/'.$role->id)}}"
                                                                                        class="dropdown-item px-4 py-2">
                                                                                        Active
                                                                                    </a>
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                        </span>

                                                                    </td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <hr style="height:0.1px;">




                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="profile" role="tabpanel"aria-labelledby="profile-tab">
                                        <div class="col-md-12">
                                            <div class="row mt-5 alluserData">
                                                <div class="col-md-12  table-responsive">
                                                    <table class="table " id="table">
                                                        <tbody>
                                                            @foreach($userRole as $role)
                                                                @if($role->status_id == 1)
                                                                <tr>
                                                                    <td>
                                                                        <div class="avatars-w-50">
                                                                            <div class="no-img rounded-circle">
                                                                                {{$role->first_name[0].$role->last_name[0]}}
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div>
                                                                            <font style="font-size:15px; color:black;">
                                                                                {{$role->first_name}}
                                                                                {{$role->last_name}}</font><br>
                                                                            <font class="text-secondary"
                                                                                style="font-size:12px;">
                                                                                {{$role->email}}
                                                                            </font>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <span class="allbtn">
                                                                            @if($role->status_id == 1)
                                                                            <span
                                                                                class="badge badge-sm badge-pill badge-success">Active</span>
                                                                            @else
                                                                            <span
                                                                                class="badge badge-sm badge-pill badge-danger">Inactive</span>
                                                                            @endif

                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span>
                                                                            <div
                                                                                class="dropdown options-dropdown d-inline-block">
                                                                                <button type="button"
                                                                                    data-toggle="dropdown"
                                                                                    title="Actions"
                                                                                    class="btn-option btn"
                                                                                    aria-expanded="false">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="24" height="24"
                                                                                        viewBox="0 0 24 24" fill="none"
                                                                                        stroke="currentColor"
                                                                                        stroke-width="2"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        class="feather feather-more-vertical">
                                                                                        <circle cx="12" cy="12" r="1">
                                                                                        </circle>
                                                                                        <circle cx="12" cy="5" r="1">
                                                                                        </circle>
                                                                                        <circle cx="12" cy="19" r="1">
                                                                                        </circle>
                                                                                    </svg>
                                                                                </button>
                                                                                <div class="dropdown-menu dropdown-menu-right py-2 mt-1"
                                                                                    style="">
                                                                                    <button data-id="{{$role->id}}"
                                                                                        class="dropdown-item px-4 py-2 idget">
                                                                                        Edit
                                                                                    </button>
                                                                                    <span data-id="{{$role->id}}"
                                                                                        class="deleteuser dropdown-item px-4 py-2 "
                                                                                        clbuttonss="dropdown-item px-4 py-2">
                                                                                        Delete
                                                                                    </span>
                                                                                    @if($role->status_id == 1)
                                                                                    <a href="{{url('user/status_change/'.$role->id)}}"
                                                                                        class="dropdown-item px-4 py-2">
                                                                                        De-activate
                                                                                    </a>
                                                                                    @else
                                                                                    <a href="{{url('user/status_change/'.$role->id)}}"
                                                                                        class="dropdown-item px-4 py-2">
                                                                                        Active
                                                                                    </a>
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                        </span>

                                                                    </td>
                                                                </tr>
                                                                @endif
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="tab-pane fade" id="contact" role="tabpanel"aria-labelledby="contact-tab">
                                        <div class="col-md-12">
                                            <div class="row mt-5 alluserData">
                                                <div class="col-md-12  table-responsive">
                                                    <table class="table " id="table">
                                                        <tbody>
                                                            @foreach($userRole as $role)
                                                            @if($role->status_id == 2)
                                                            <tr>
                                                                <td>
                                                                    <div class="avatars-w-50">
                                                                        <div class="no-img rounded-circle">
                                                                            {{$role->first_name[0].$role->last_name[0]}}
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div>
                                                                        <font style="font-size:15px; color:black;">
                                                                            {{$role->first_name}}
                                                                            {{$role->last_name}}</font><br>
                                                                        <font class="text-secondary"
                                                                            style="font-size:12px;">
                                                                            {{$role->email}}
                                                                        </font>
                                                                    </div>
                                                                </td>
                                                                <td class="text-center">
                                                                    <span class="allbtn">
                                                                        @if($role->status_id == 1)
                                                                        <span
                                                                            class="badge badge-sm badge-pill badge-success">Active</span>
                                                                        @else
                                                                        <span
                                                                            class="badge badge-sm badge-pill badge-danger">Inactive</span>
                                                                        @endif

                                                                    </span>
                                                                </td>
                                                                <td>
                                                                    <span>
                                                                        <div
                                                                            class="dropdown options-dropdown d-inline-block">
                                                                            <button type="button"
                                                                                data-toggle="dropdown"
                                                                                title="Actions"
                                                                                class="btn-option btn"
                                                                                aria-expanded="false">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    stroke="currentColor"
                                                                                    stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    class="feather feather-more-vertical">
                                                                                    <circle cx="12" cy="12" r="1">
                                                                                    </circle>
                                                                                    <circle cx="12" cy="5" r="1">
                                                                                    </circle>
                                                                                    <circle cx="12" cy="19" r="1">
                                                                                    </circle>
                                                                                </svg>
                                                                            </button>
                                                                            <div class="dropdown-menu dropdown-menu-right py-2 mt-1"
                                                                                style="">
                                                                                <button data-id="{{$role->id}}"
                                                                                    class="dropdown-item px-4 py-2 idget">
                                                                                    Edit
                                                                                </button>
                                                                                <span data-id="{{$role->id}}"
                                                                                    class="deleteuser dropdown-item px-4 py-2 "
                                                                                    clbuttonss="dropdown-item px-4 py-2">
                                                                                    Delete
                                                                                </span>
                                                                                @if($role->status_id == 1)
                                                                                <a href="{{url('user/status_change/'.$role->id)}}"
                                                                                    class="dropdown-item px-4 py-2">
                                                                                    De-activate
                                                                                </a>
                                                                                @else
                                                                                <a href="{{url('user/status_change/'.$role->id)}}"
                                                                                    class="dropdown-item px-4 py-2">
                                                                                    Active
                                                                                </a>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                    </span>

                                                                </td>
                                                            </tr>
                                                            @endif
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="tab-pane fade" id="invite" role="tabpanel" aria-labelledby="contact-tab">
                                        <div class="col-md-12">
                                            <div class="row mt-5 alluserData">
                                                <div class="col-md-12  table-responsive">
                                                    <table class="table " id="table">
                                                        <tbody>
                                                            @foreach($userRole as $role)
                                                            @if($role->status_id == 3)
                                                            <tr>
                                                                <td>
                                                                    <div class="avatars-w-50">
                                                                        <div class="no-img rounded-circle">
                                                                            {{$role->first_name[0].$role->last_name[0]}}
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div>
                                                                        <font style="font-size:15px; color:black;">
                                                                            {{$role->first_name}}
                                                                            {{$role->last_name}}</font><br>
                                                                        <font class="text-secondary"
                                                                            style="font-size:12px;">
                                                                            {{$role->email}}
                                                                        </font>
                                                                    </div>
                                                                </td>
                                                                <td class="text-center">
                                                                    <span class="allbtn">
                                                                        @if($role->status_id == 1)
                                                                        <span
                                                                            class="badge badge-sm badge-pill badge-success">Active</span>
                                                                        @else
                                                                        <span
                                                                            class="badge badge-sm badge-pill badge-danger">Inactive</span>
                                                                        @endif

                                                                    </span>
                                                                </td>
                                                                <td>
                                                                    <span>
                                                                        <div
                                                                            class="dropdown options-dropdown d-inline-block">
                                                                            <button type="button"
                                                                                data-toggle="dropdown"
                                                                                title="Actions"
                                                                                class="btn-option btn"
                                                                                aria-expanded="false">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    stroke="currentColor"
                                                                                    stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    class="feather feather-more-vertical">
                                                                                    <circle cx="12" cy="12" r="1">
                                                                                    </circle>
                                                                                    <circle cx="12" cy="5" r="1">
                                                                                    </circle>
                                                                                    <circle cx="12" cy="19" r="1">
                                                                                    </circle>
                                                                                </svg>
                                                                            </button>
                                                                            <div class="dropdown-menu dropdown-menu-right py-2 mt-1"
                                                                                style="">
                                                                                <button data-id="{{$role->id}}"
                                                                                    class="dropdown-item px-4 py-2 idget">
                                                                                    Edit
                                                                                </button>
                                                                                <span data-id="{{$role->id}}"
                                                                                    class="deleteuser dropdown-item px-4 py-2 "
                                                                                    clbuttonss="dropdown-item px-4 py-2">
                                                                                    Delete
                                                                                </span>
                                                                                @if($role->status_id == 1)
                                                                                <a href="{{url('user/status_change/'.$role->id)}}"
                                                                                    class="dropdown-item px-4 py-2">
                                                                                    De-activate
                                                                                </a>
                                                                                @else
                                                                                <a href="{{url('user/status_change/'.$role->id)}}"
                                                                                    class="dropdown-item px-4 py-2">
                                                                                    Active
                                                                                </a>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                    </span>

                                                                </td>
                                                            </tr>
                                                            @endif
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <hr style="height:0.1px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5> Roles</h5>
                                    </div>
                                    <div class="col-md-6">

                                        <span class="form-control-feedback">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-search">
                                                <circle cx="11" cy="11" r="8"></circle>
                                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                            </svg>
                                        </span>
                                        <input type="text" placeholder="Search" id="rolesserch"
                                            class="form-control form-control1">


                                    </div>

                                </div>
                                <hr style="height:0.1px;" class="mt-5">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="table-responsive custom-scrollbar table-view-responsive py-primary">
                                            <table class="table mb-0" id="rolestable">
                                                <thead>
                                                    <tr>
                                                        <th track-by="0" class="datatable-th pt-0">
                                                            <span class="font-size-default">
                                                                <span> Role name </span>
                                                            </span>
                                                        </th>
                                                        <th track-by="1" class="datatable-th pt-0">
                                                            <span class="font-size-default">
                                                                <span>Permission</span>
                                                            </span>
                                                        </th>
                                                        <th track-by="2" class="datatable-th pt-0">
                                                            <span class="font-size-default">
                                                                <span>Users</span>
                                                            </span>
                                                        </th>
                                                        <th track-by="3" class="datatable-th pt-0 text-right">
                                                            <span class="font-size-default">Action</span>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    @foreach($user_role as $role)
                                                    <tr>
                                                        <td data-title="Role name" class="datatable-td">
                                                            <span class="">{{$role->name}}</span>
                                                        </td>
                                                        <td data-title="Permission" class="datatable-td">
                                                            <span>
                                                                @if($role->is_admin == 0)
                                                                    <span>
                                                                        <button class="btn btn-sm btn-primary rounded-pill px-3 py-1">Manage</button>
                                                                    </span>
                                                                @endif
                                                                
                                                            </span>
                                                        </td>
                                                        <td data-title="Users" class="datatable-td">
                                                            <span class="w-100">
                                                                @inject('roles','App\Http\Controllers\MasterController')
                                                                <div avatars-group-class="avatars-group-w-50"
                                                                    name="groupOfUsers2" table-id="roles-table">
                                                                    <div class="avatar-group avatars-group-w-50" style="display: flex;">
                                                                        @foreach($roles::getuserrole($role->id) as $item)
                                                                        <div class="avatars-w-50 " style="margin-left: -15px;">
                                                                            <div class="no-img rounded-circle allfirstlastname">
                                                                                {{$item->first_name[0].$item->last_name[0]}}
                                                                            </div>
                                                                        </div>
                                                                        @endforeach
                                                                    </div>
                                                            </span>
                                                        </td>
                                                        <td data-title="Action" class="datatable-td text-md-right">
                                                            <span>
                                                                <div class="dropdown options-dropdown d-inline-block">
                                                                    <button type="button" data-toggle="dropdown"
                                                                        title="Actions" class="btn-option btn">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none" stroke="currentColor"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-more-vertical">
                                                                            <circle cx="12" cy="12" r="1"></circle>
                                                                            <circle cx="12" cy="5" r="1"></circle>
                                                                            <circle cx="12" cy="19" r="1"></circle>
                                                                        </svg>
                                                                    </button>
                                                                    <div
                                                                        class="dropdown-menu dropdown-menu-right py-2 mt-1">
                                                                        <a href="#" class="dropdown-item px-4 py-2">
                                                                            Manage Users
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </span>
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

<!-- module -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit User
                </h5>

            </div>

            <form method="post" action="{{url('user_edit')}}">
                @csrf
                <input type="hidden" name="id" class="id">
                <div class="row">
                    <div class="col-md-3 text-center mt-4">
                        <label for="recipient-name" class="col-form-label">First Name:</label>

                    </div>
                    <div class="col-md-8 mt-4">
                        <input type="text" name="first_name" class="form-control first_name" id="recipient-name">

                    </div>
                    <div class="col-md-3 text-center mt-4">
                        <label for="recipient-name" class=" col-form-label ">Last Name:</label>

                    </div>
                    <div class="col-md-8 mt-4">
                        <input type="text" class="form-control last_name" name="last_name" id="recipient-name">

                    </div>
                </div>
                <!-- <div class="form-group px-3">
                    <label for="recipient-name" class="col-form-label">First Name:</label>
                    <input type="text" name="first_name" class="form-control first_name" id="recipient-name">
                </div>
                <div class="form-group px-3">
                    <label for="recipient-name" name="last_name" class=" col-form-label ">Last Name:</label>
                    <input type="text" class="form-control last_name" id="recipient-name">

                </div> -->


                <div class="modal-footer mt-5 mb-2">
                    <button type="button" class="btn btn-secondary cancelmodel">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>

        </div>
    </div>
</div>


<!-- invite module -->

<div class="modal fade" id="exampleModalinvite" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Invite User
                </h5>

            </div>

            <form method="post" action="">
                @csrf
                <input type="hidden" name="id" class="id">
                <div class="row">
                    <div class="col-md-3 text-center mt-4">
                        <label for="recipient-name" class="col-form-label">Email:</label>

                    </div>
                    <div class="col-md-8 mt-4">
                        <input type="email" name="email" class="form-control " placeholder="Enter Email" id="recipient-name">

                    </div>
                    <div class="col-md-3 text-center mt-4">
                        <label>Role</label>
                    
                    </div>
                    <div class="col-md-8 mt-4">
                     <select class="form-control select2">
                            <!-- <option>Select</option> -->
                            <option>App Admin </option>
                            <option>Vendor</option>
                            <option>Recruiter</option>
                           
                        </select>
                    </div>
                    <!-- <div class="col-md-3 text-center mt-4">
                        <label for="recipient-name" class=" col-form-label ">Role:</label>

                    </div>
                    <div class="col-md-8 mt-4">
                        <input type="text" class="form-control last_name" name="last_name" id="recipient-name">

                    </div> -->
                </div>
                <!-- <div class="form-group px-3">
                    <label for="recipient-name" class="col-form-label">First Name:</label>
                    <input type="text" name="first_name" class="form-control first_name" id="recipient-name">
                </div>
                <div class="form-group px-3">
                    <label for="recipient-name" name="last_name" class=" col-form-label ">Last Name:</label>
                    <input type="text" class="form-control last_name" id="recipient-name">

                </div> -->


                <div class="modal-footer mt-5 mb-2">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>

        </div>
    </div>
</div>



@endsection
<style>
.form-control1 {
    background-color: var(--base-color);
    border-radius: 20px !important;
    padding: .5rem 1rem .5rem 2.2rem !important;
}

.form-control-feedback {
    color: #898989;
    display: block;
    padding: 8 0 0 0.6rem;
    pointer-events: none;
    position: absolute;
}
.avatars-w-50 .no-img{
    cursor: pointer;
}
.allfirstlastname:hover{
    z-index: 1;
    padding:10px;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<!-- sweet alert -->
<script src="{{asset('//cdn.jsdelivr.net/npm/sweetalert2@11')}}"></script>
<script src="{{asset('sweetalert2.all.min.js')}}"></script>
<script src="{{asset('sweetalert2.min.js')}}"></script>

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

<link rel="stylesheet" href="{{asset('sweetalert2.min.css')}}">
<script type="text/javascript">
$('.select2').select2();


$(document).ready(function() {
    $(".cancelmodel").click(function() {
        $(".first_name").val("");
        $(".last_name").val("");
        $(".id").val("");
        $("#exampleModal").modal("hide");

    });

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(".idget").click(function() {
        let id = $(this).attr("data-id");

        $.ajax({
            type: 'POST',
            url: "{{ url('/user-roleedit/') }}",
            data: {
                id: id
            },
            success: function(data) {
                let firstname = data.user.first_name;
                let lastname = data.user.last_name;

                // console.log(lastname);

                $(".first_name").val(firstname);
                $(".last_name").val(lastname);
                $(".id").val(id);
                $("#exampleModal").modal("show");


            }
        });


    });
    $('.deleteuser').click(function() {
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
                        window.location.href = "user/delete/" + id;
                    }, 1000);

            }

        });
    })
    $('#search').keyup(function() {
        search_table($(this).val());
    });

    function search_table(value) {
        $('#table tbody tr').each(function() {
            var found = 'false';
            $(this).each(function() {
                if ($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0) {
                    found = 'true';
                }
            });
            if (found == 'true') {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    }

    $('#rolesserch').keyup(function() {
        search_table1($(this).val());
    });

    function search_table1(value) {
        $('#rolestable tbody tr').each(function() {
            var found = 'false';
            $(this).each(function() {
                if ($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0) {
                    found = 'true';
                }
            });
            if (found == 'true') {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    }
})
</script>