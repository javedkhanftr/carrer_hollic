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
<link rel="stylesheet"
    href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">
<script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('https://code.jquery.com/jquery-3.6.1.min.js')}}"></script>
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
        <div class="col-md-3 text-end  " id="showmessage"></div>
        <div class="main_content_iner ">
            <div class="container-fluid p-0">
                <div class="row justify-content-center">

                    <div class="col-lg-12">
                        <div class="white_card card_height_100 mb_30">
                            <div class="white_card_body">
                                <div class="QA_section">
                                    <div class="white_box_tittle list_header mt-5">
                                        <h4>Role
                                            <!-- & Permissions -->
                                        </h4>
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
                                            @foreach($user as $item)
                                                @if($item->permision == '1')
                                                <div class="add_button ms-2">
                                                <a href="{{url('admin/role/create')}}" class="btn_1">Add
                                                    New</a>
                                            </div>
                                                @endif
                                            @endforeach
                                           

                                        </div>
                                    </div>
                                    <div class="QA_table mb_30">

                                        <table class="table lms_table_active ">
                                            <thead>
                                                <tr>
                                                    <th track-by="0" class="datatable-th pt-0">
                                                        <span class="font-size-default">
                                                            <span> Role name </span>
                                                        </span>
                                                    </th>
                                                    <!-- <th track-by="1" class="datatable-th pt-0">
                                                        <span class="font-size-default">
                                                            <span>Permission</span>
                                                        </span>
                                                    </th> -->
                                                    <th track-by="2" class="datatable-th pt-0">
                                                        <span class="font-size-default">
                                                            <span>Users</span>
                                                        </span>
                                                    </th>
                                                    @foreach($user as $item)
                                                @if($item->permision == '1')
                                               <th track-by="3" class="datatable-th pt-0 text-right">
                                                        <span class="font-size-default">Action</span>
                                                    </th>
                                                @endif
                                            @endforeach
                                                   
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach($user_role as $role)
                                                <tr>
                                                    <td data-title="Role name" class="datatable-td">
                                                        <span class="">{{$role->name}}</span>
                                                    </td>
                                                    <!-- <td data-title="Permission" class="datatable-td">
                                                        <span>
                                                            @if($role->is_admin == 0)
                                                            <span>
                                                                <button
                                                                    class="btn btn-sm btn-primary rounded-pill px-3 py-1"
                                                                    data-toggle="modal"
                                                                    data-target="#exampleModaladdrolemange">Manage</button>
                                                            </span>
                                                            @endif

                                                        </span>
                                                    </td> -->
                                                    <td data-title="Users" class="datatable-td">
                                                        <span class="w-100">
                                                            @inject('roles','App\Http\Controllers\MasterController')
                                                            <div avatars-group-class="avatars-group-w-50"
                                                                name="groupOfUsers2" table-id="roles-table">
                                                                <div class="avatar-group avatars-group-w-50"
                                                                    style="display: flex;">
                                                                    @foreach($roles::getuserrole($role->id) as $item)
                                                                    <div class="avatars-w-50 "
                                                                        style="margin-left: -15px;">
                                                                        <div
                                                                            class="no-img rounded-circle allfirstlastname">
                                                                            {{$item->first_name[0].$item->last_name[0]}}
                                                                        </div>
                                                                    </div>
                                                                    @endforeach
                                                                </div>
                                                        </span>
                                                    </td>
                                                    <td>
                                                    @foreach($user as $item)
                                                @if($item->permision == '1')
                                                 <a href="{{url('admin/role/edit/'.$role->id)}}" class="btn btn-sm btn-primary text-light"><i
                                                                class="fa fa-edit"></i></a>
                                                        <a href="{{url('admin/user-role/deleteData/'.$role->id)}}"
                                                            class="btn btn-sm btn-danger text-light"><i
                                                                class="fa fa-trash"></i></a>
                                                        <a href="{{url('admin/role/manage_role/'.$role->id)}}"
                                                            class=" btn btn-sm btn-info text-light mangeuser"><i
                                                                class="fa fa-user"></i></a>
                                                @endif
                                            @endforeach
                                                       


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






<div class="modal fade" id="exampleModaladdrole" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Role
                </h5>

            </div>

            <form method="post" action="{{url('user-role/create')}}">
                @csrf
                <input type="hidden" name="id" class="id">
                <div class="row">
                    <div class="col-md-1"></div>

                    <div class="col-md-10 mt-4">
                        <label for="recipient-name" class="col-form-label">Role Name</label>
                        <input type="text" name="role" class="form-control " placeholder="Enter Role Name"
                            id="recipient-name">

                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-1"></div>
                    <div class="col-md-10 mt-3">
                        <div class="form-group mb-0"><label>Permission</label>
                            <div id="accordionExample" class="accordion">
                                <div class="card shadow">
                                    <div class="card-header border-0">
                                        <div data-toggle="collapse" data-target="#job_post" aria-expanded="false"
                                            aria-controls="permission"
                                            class="custom-checkbox-default d-block position-relative text-capitalize collapsible-link py-2 cursor-pointer">
                                            <div class="customized-checkbox checkbox-default"><input type="checkbox"
                                                    name="single-checkbox-job_post" id="single-checkbox-job_post"
                                                    value="job_post"> <label for="single-checkbox-job_post"
                                                    class="mb-0">
                                                    Job post
                                                </label></div>
                                        </div>
                                    </div>
                                    <div id="job_post" data-parent="#accordionExample" class="collapse ">
                                        <div class="card-body p-primary">
                                            <div>
                                                <div class="app-checkbox-group">
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-1" placeholder=""
                                                            value="1"> <label for="checkedPermissions[permission]-1"
                                                            class="">
                                                            Can view job list
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-2" placeholder=""
                                                            value="2"> <label for="checkedPermissions[permission]-2"
                                                            class="">
                                                            Can create new job
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-3" placeholder=""
                                                            value="3"> <label for="checkedPermissions[permission]-3"
                                                            class="">
                                                            Can edit job
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-4" placeholder=""
                                                            value="4"> <label for="checkedPermissions[permission]-4"
                                                            class="">
                                                            Can delete job
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-5" placeholder=""
                                                            value="5"> <label for="checkedPermissions[permission]-5"
                                                            class="">
                                                            Can view job overview
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-6" placeholder=""
                                                            value="6"> <label for="checkedPermissions[permission]-6"
                                                            class="">
                                                            Can view candidate list from job overview
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-7" placeholder=""
                                                            value="7"> <label for="checkedPermissions[permission]-7"
                                                            class="">
                                                            Can generate sharable link for job post
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-8" placeholder=""
                                                            value="8"> <label for="checkedPermissions[permission]-8"
                                                            class="">
                                                            Can view job post setting
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-9" placeholder=""
                                                            value="9"> <label for="checkedPermissions[permission]-9"
                                                            class="">
                                                            Can edit job post setting
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-10" placeholder=""
                                                            value="10"> <label for="checkedPermissions[permission]-10"
                                                            class="">
                                                            Can manage job post application form
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-11" placeholder=""
                                                            value="11"> <label for="checkedPermissions[permission]-11"
                                                            class="">
                                                            Can change job post status (Activate/Deactivate/Publish)
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-12" placeholder=""
                                                            value="12"> <label for="checkedPermissions[permission]-12"
                                                            class="">
                                                            Can view specific job stage
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-13" placeholder=""
                                                            value="13"> <label for="checkedPermissions[permission]-13"
                                                            class="">
                                                            Can create specific job stage
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-14" placeholder=""
                                                            value="14"> <label for="checkedPermissions[permission]-14"
                                                            class="">
                                                            Can update specific job stage
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-15" placeholder=""
                                                            value="15"> <label for="checkedPermissions[permission]-15"
                                                            class="">
                                                            Can delete specific job stage
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-16" placeholder=""
                                                            value="16"> <label for="checkedPermissions[permission]-16"
                                                            class="">
                                                            Can view hiring team
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-17" placeholder=""
                                                            value="17"> <label for="checkedPermissions[permission]-17"
                                                            class="">
                                                            Can assign team member
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-18" placeholder=""
                                                            value="18"> <label for="checkedPermissions[permission]-18"
                                                            class="">
                                                            Can delete hiring team
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-19" placeholder=""
                                                            value="19"> <label for="checkedPermissions[permission]-19"
                                                            class="">
                                                            Can manage job post sharable thumbnail
                                                        </label></div>
                                                </div>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card shadow">
                                    <div class="card-header border-0">
                                        <div data-toggle="collapse" data-target="#candidates" aria-expanded="false"
                                            aria-controls="permission"
                                            class="custom-checkbox-default d-block position-relative text-capitalize collapsible-link py-2 cursor-pointer">
                                            <div class="customized-checkbox checkbox-default"><input type="checkbox"
                                                    name="single-checkbox-candidates" id="single-checkbox-candidates"
                                                    value="candidates"> <label for="single-checkbox-candidates"
                                                    class="mb-0">
                                                    Candidates
                                                </label></div>
                                        </div>
                                    </div>
                                    <div id="candidates" data-parent="#accordionExample" class="collapse ">
                                        <div class="card-body p-primary">
                                            <div>
                                                <div class="app-checkbox-group">
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-20" placeholder=""
                                                            value="20"> <label for="checkedPermissions[permission]-20"
                                                            class="">
                                                            Can view details about candidate application of a job
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-21" placeholder=""
                                                            value="21"> <label for="checkedPermissions[permission]-21"
                                                            class="">
                                                            Can create candidate
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-22" placeholder=""
                                                            value="22"> <label for="checkedPermissions[permission]-22"
                                                            class="">
                                                            Can update candidate
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-23" placeholder=""
                                                            value="23"> <label for="checkedPermissions[permission]-23"
                                                            class="">
                                                            Can view candidate
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-24" placeholder=""
                                                            value="24"> <label for="checkedPermissions[permission]-24"
                                                            class="">
                                                            Can delete candidate
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-25" placeholder=""
                                                            value="25"> <label for="checkedPermissions[permission]-25"
                                                            class="">
                                                            Can assign candidate to job
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-26" placeholder=""
                                                            value="26"> <label for="checkedPermissions[permission]-26"
                                                            class="">
                                                            Can unassigned candidate from job
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-27" placeholder=""
                                                            value="27"> <label for="checkedPermissions[permission]-27"
                                                            class="">
                                                            Can view job candidate timeline
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-28" placeholder=""
                                                            value="28"> <label for="checkedPermissions[permission]-28"
                                                            class="">
                                                            Can view candidate details
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-29" placeholder=""
                                                            value="29"> <label for="checkedPermissions[permission]-29"
                                                            class="">
                                                            Can change stage job candidate
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-30" placeholder=""
                                                            value="30"> <label for="checkedPermissions[permission]-30"
                                                            class="">
                                                            Can change review job candidate
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-31" placeholder=""
                                                            value="31"> <label for="checkedPermissions[permission]-31"
                                                            class="">
                                                            Can send email to candidate
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-32" placeholder=""
                                                            value="32"> <label for="checkedPermissions[permission]-32"
                                                            class="">
                                                            Can disqualify job candidate
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-33" placeholder=""
                                                            value="33"> <label for="checkedPermissions[permission]-33"
                                                            class="">
                                                            Can view note by recruiters
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-34" placeholder=""
                                                            value="34"> <label for="checkedPermissions[permission]-34"
                                                            class="">
                                                            Can view events for job candidate
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-35" placeholder=""
                                                            value="35"> <label for="checkedPermissions[permission]-35"
                                                            class="">
                                                            Can view event
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-36" placeholder=""
                                                            value="36"> <label for="checkedPermissions[permission]-36"
                                                            class="">
                                                            Can create event
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-37" placeholder=""
                                                            value="37"> <label for="checkedPermissions[permission]-37"
                                                            class="">
                                                            Can update event
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-38" placeholder=""
                                                            value="38"> <label for="checkedPermissions[permission]-38"
                                                            class="">
                                                            Can delete event
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-39" placeholder=""
                                                            value="39"> <label for="checkedPermissions[permission]-39"
                                                            class="">
                                                            Can view note
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-40" placeholder=""
                                                            value="40"> <label for="checkedPermissions[permission]-40"
                                                            class="">
                                                            Can create note
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-41" placeholder=""
                                                            value="41"> <label for="checkedPermissions[permission]-41"
                                                            class="">
                                                            Can update note
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-42" placeholder=""
                                                            value="42"> <label for="checkedPermissions[permission]-42"
                                                            class="">
                                                            Can delete note
                                                        </label></div>
                                                </div>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card shadow">
                                    <div class="card-header border-0">
                                        <div data-toggle="collapse" data-target="#career_page" aria-expanded="false"
                                            aria-controls="permission"
                                            class="custom-checkbox-default d-block position-relative text-capitalize collapsible-link py-2 cursor-pointer">
                                            <div class="customized-checkbox checkbox-default"><input type="checkbox"
                                                    name="single-checkbox-career_page" id="single-checkbox-career_page"
                                                    value="career_page"> <label for="single-checkbox-career_page"
                                                    class="mb-0">
                                                    Career page
                                                </label></div>
                                        </div>
                                    </div>
                                    <div id="career_page" data-parent="#accordionExample" class="collapse ">
                                        <div class="card-body p-primary">
                                            <div>
                                                <div class="app-checkbox-group">
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-43" placeholder=""
                                                            value="43"> <label for="checkedPermissions[permission]-43"
                                                            class="">
                                                            Can view career page
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-44" placeholder=""
                                                            value="44"> <label for="checkedPermissions[permission]-44"
                                                            class="">
                                                            Can update career page
                                                        </label></div>
                                                </div>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card shadow">
                                    <div class="card-header border-0">
                                        <div data-toggle="collapse" data-target="#job_settings" aria-expanded="false"
                                            aria-controls="permission"
                                            class="custom-checkbox-default d-block position-relative text-capitalize collapsible-link py-2 cursor-pointer">
                                            <div class="customized-checkbox checkbox-default"><input type="checkbox"
                                                    name="single-checkbox-job_settings"
                                                    id="single-checkbox-job_settings" value="job_settings"> <label
                                                    for="single-checkbox-job_settings" class="mb-0">
                                                    Job settings
                                                </label></div>
                                        </div>
                                    </div>
                                    <div id="job_settings" data-parent="#accordionExample" class="collapse ">
                                        <div class="card-body p-primary">
                                            <div>
                                                <div class="app-checkbox-group">
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-45" placeholder=""
                                                            value="45"> <label for="checkedPermissions[permission]-45"
                                                            class="">
                                                            Can view job settings
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-46" placeholder=""
                                                            value="46"> <label for="checkedPermissions[permission]-46"
                                                            class="">
                                                            Can manage global application form
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-47" placeholder=""
                                                            value="47"> <label for="checkedPermissions[permission]-47"
                                                            class="">
                                                            Can view event type
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-48" placeholder=""
                                                            value="48"> <label for="checkedPermissions[permission]-48"
                                                            class="">
                                                            Can create event type
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-49" placeholder=""
                                                            value="49"> <label for="checkedPermissions[permission]-49"
                                                            class="">
                                                            Can update event type
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-50" placeholder=""
                                                            value="50"> <label for="checkedPermissions[permission]-50"
                                                            class="">
                                                            Can delete event type
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-51" placeholder=""
                                                            value="51"> <label for="checkedPermissions[permission]-51"
                                                            class="">
                                                            Can view job type
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-52" placeholder=""
                                                            value="52"> <label for="checkedPermissions[permission]-52"
                                                            class="">
                                                            Can create job type
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-53" placeholder=""
                                                            value="53"> <label for="checkedPermissions[permission]-53"
                                                            class="">
                                                            Can update job type
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-54" placeholder=""
                                                            value="54"> <label for="checkedPermissions[permission]-54"
                                                            class="">
                                                            Can delete job type
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-55" placeholder=""
                                                            value="55"> <label for="checkedPermissions[permission]-55"
                                                            class="">
                                                            Can view company location
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-56" placeholder=""
                                                            value="56"> <label for="checkedPermissions[permission]-56"
                                                            class="">
                                                            Can create company location
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-57" placeholder=""
                                                            value="57"> <label for="checkedPermissions[permission]-57"
                                                            class="">
                                                            Can update company location
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-58" placeholder=""
                                                            value="58"> <label for="checkedPermissions[permission]-58"
                                                            class="">
                                                            Can delete company location
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-59" placeholder=""
                                                            value="59"> <label for="checkedPermissions[permission]-59"
                                                            class="">
                                                            Can view department
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-60" placeholder=""
                                                            value="60"> <label for="checkedPermissions[permission]-60"
                                                            class="">
                                                            Can create department
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-61" placeholder=""
                                                            value="61"> <label for="checkedPermissions[permission]-61"
                                                            class="">
                                                            Can update department
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-62" placeholder=""
                                                            value="62"> <label for="checkedPermissions[permission]-62"
                                                            class="">
                                                            Can delete department
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-63" placeholder=""
                                                            value="63"> <label for="checkedPermissions[permission]-63"
                                                            class="">
                                                            Can view stage
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-64" placeholder=""
                                                            value="64"> <label for="checkedPermissions[permission]-64"
                                                            class="">
                                                            Can create stage
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-65" placeholder=""
                                                            value="65"> <label for="checkedPermissions[permission]-65"
                                                            class="">
                                                            Can update stage
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-66" placeholder=""
                                                            value="66"> <label for="checkedPermissions[permission]-66"
                                                            class="">
                                                            Can delete stage
                                                        </label></div>
                                                </div>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card shadow">
                                    <div class="card-header border-0">
                                        <div data-toggle="collapse" data-target="#app_settings" aria-expanded="false"
                                            aria-controls="permission"
                                            class="custom-checkbox-default d-block position-relative text-capitalize collapsible-link py-2 cursor-pointer">
                                            <div class="customized-checkbox checkbox-default"><input type="checkbox"
                                                    name="single-checkbox-app_settings"
                                                    id="single-checkbox-app_settings" value="app_settings"> <label
                                                    for="single-checkbox-app_settings" class="mb-0">
                                                    App Settings
                                                </label></div>
                                        </div>
                                    </div>
                                    <div id="app_settings" data-parent="#accordionExample" class="collapse ">
                                        <div class="card-body p-primary">
                                            <div>
                                                <div class="app-checkbox-group">
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-67" placeholder=""
                                                            value="67"> <label for="checkedPermissions[permission]-67"
                                                            class="">
                                                            Can view list of setting
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-68" placeholder=""
                                                            value="68"> <label for="checkedPermissions[permission]-68"
                                                            class="">
                                                            Can update setting
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-69" placeholder=""
                                                            value="69"> <label for="checkedPermissions[permission]-69"
                                                            class="">
                                                            Can view email settings
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-70" placeholder=""
                                                            value="70"> <label for="checkedPermissions[permission]-70"
                                                            class="">
                                                            Can update email settings
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-71" placeholder=""
                                                            value="71"> <label for="checkedPermissions[permission]-71"
                                                            class="">
                                                            Can view notification settings
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-72" placeholder=""
                                                            value="72"> <label for="checkedPermissions[permission]-72"
                                                            class="">
                                                            Can update notification settings
                                                        </label></div>
                                                </div>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card shadow">
                                    <div class="card-header border-0">
                                        <div data-toggle="collapse" data-target="#users" aria-expanded="false"
                                            aria-controls="permission"
                                            class="custom-checkbox-default d-block position-relative text-capitalize collapsible-link py-2 cursor-pointer">
                                            <div class="customized-checkbox checkbox-default"><input type="checkbox"
                                                    name="single-checkbox-users" id="single-checkbox-users"
                                                    value="users"> <label for="single-checkbox-users" class="mb-0">
                                                    Users
                                                </label></div>
                                        </div>
                                    </div>
                                    <div id="users" data-parent="#accordionExample" class="collapse ">
                                        <div class="card-body p-primary">
                                            <div>
                                                <div class="app-checkbox-group">
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-73" placeholder=""
                                                            value="73"> <label for="checkedPermissions[permission]-73"
                                                            class="">
                                                            Can view list of user
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-74" placeholder=""
                                                            value="74"> <label for="checkedPermissions[permission]-74"
                                                            class="">
                                                            Can create an user
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-75" placeholder=""
                                                            value="75"> <label for="checkedPermissions[permission]-75"
                                                            class="">
                                                            Can update an user
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-76" placeholder=""
                                                            value="76"> <label for="checkedPermissions[permission]-76"
                                                            class="">
                                                            Can delete an user
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-77" placeholder=""
                                                            value="77"> <label for="checkedPermissions[permission]-77"
                                                            class="">
                                                            Can invite user
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-78" placeholder=""
                                                            value="78"> <label for="checkedPermissions[permission]-78"
                                                            class="">
                                                            Can cancel user invitation
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-79" placeholder=""
                                                            value="79"> <label for="checkedPermissions[permission]-79"
                                                            class="">
                                                            Can attach roles to users
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-80" placeholder=""
                                                            value="80"> <label for="checkedPermissions[permission]-80"
                                                            class="">
                                                            Can detach roles from users
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-81" placeholder=""
                                                            value="81"> <label for="checkedPermissions[permission]-81"
                                                            class="">
                                                            Can change own settings
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-82" placeholder=""
                                                            value="82"> <label for="checkedPermissions[permission]-82"
                                                            class="">
                                                            Can view settings list
                                                        </label></div>
                                                </div>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card shadow">
                                    <div class="card-header border-0">
                                        <div data-toggle="collapse" data-target="#roles" aria-expanded="false"
                                            aria-controls="permission"
                                            class="custom-checkbox-default d-block position-relative text-capitalize collapsible-link py-2 cursor-pointer">
                                            <div class="customized-checkbox checkbox-default"><input type="checkbox"
                                                    name="single-checkbox-roles" id="single-checkbox-roles"
                                                    value="roles"> <label for="single-checkbox-roles" class="mb-0">
                                                    Roles
                                                </label></div>
                                        </div>
                                    </div>
                                    <div id="roles" data-parent="#accordionExample" class="collapse ">
                                        <div class="card-body p-primary">
                                            <div>
                                                <div class="app-checkbox-group">
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-83" placeholder=""
                                                            value="83"> <label for="checkedPermissions[permission]-83"
                                                            class="">
                                                            Can view list of role
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-84" placeholder=""
                                                            value="84"> <label for="checkedPermissions[permission]-84"
                                                            class="">
                                                            Can create role
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-85" placeholder=""
                                                            value="85"> <label for="checkedPermissions[permission]-85"
                                                            class="">
                                                            Can update role
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-86" placeholder=""
                                                            value="86"> <label for="checkedPermissions[permission]-86"
                                                            class="">
                                                            Can delete role
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-87" placeholder=""
                                                            value="87"> <label for="checkedPermissions[permission]-87"
                                                            class="">
                                                            Can attach user to role
                                                        </label></div>
                                                </div>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card shadow">
                                    <div class="card-header border-0">
                                        <div data-toggle="collapse" data-target="#permissions" aria-expanded="false"
                                            aria-controls="permission"
                                            class="custom-checkbox-default d-block position-relative text-capitalize collapsible-link py-2 cursor-pointer">
                                            <div class="customized-checkbox checkbox-default"><input type="checkbox"
                                                    name="single-checkbox-permissions" id="single-checkbox-permissions"
                                                    value="permissions"> <label for="single-checkbox-permissions"
                                                    class="mb-0">
                                                    Permissions
                                                </label></div>
                                        </div>
                                    </div>
                                    <div id="permissions" data-parent="#accordionExample" class="collapse ">
                                        <div class="card-body p-primary">
                                            <div>
                                                <div class="app-checkbox-group">
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-88" placeholder=""
                                                            value="88"> <label for="checkedPermissions[permission]-88"
                                                            class="">
                                                            Can attach permissions to role
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-89" placeholder=""
                                                            value="89"> <label for="checkedPermissions[permission]-89"
                                                            class="">
                                                            Can detach permissions from role
                                                        </label></div>
                                                </div>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card shadow">
                                    <div class="card-header border-0">
                                        <div data-toggle="collapse" data-target="#templates" aria-expanded="false"
                                            aria-controls="permission"
                                            class="custom-checkbox-default d-block position-relative text-capitalize collapsible-link py-2 cursor-pointer">
                                            <div class="customized-checkbox checkbox-default"><input type="checkbox"
                                                    name="single-checkbox-templates" id="single-checkbox-templates"
                                                    value="templates"> <label for="single-checkbox-templates"
                                                    class="mb-0">
                                                    Templates
                                                </label></div>
                                        </div>
                                    </div>
                                    <div id="templates" data-parent="#accordionExample" class="collapse ">
                                        <div class="card-body p-primary">
                                            <div>
                                                <div class="app-checkbox-group">
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-90" placeholder=""
                                                            value="90"> <label for="checkedPermissions[permission]-90"
                                                            class="">
                                                            Can view notification templates
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-91" placeholder=""
                                                            value="91"> <label for="checkedPermissions[permission]-91"
                                                            class="">
                                                            Can create notification templates
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-92" placeholder=""
                                                            value="92"> <label for="checkedPermissions[permission]-92"
                                                            class="">
                                                            Can update notification templates
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-93" placeholder=""
                                                            value="93"> <label for="checkedPermissions[permission]-93"
                                                            class="">
                                                            Can delete notification templates
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-94" placeholder=""
                                                            value="94"> <label for="checkedPermissions[permission]-94"
                                                            class="">
                                                            Can view templates
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-95" placeholder=""
                                                            value="95"> <label for="checkedPermissions[permission]-95"
                                                            class="">
                                                            Can update templates
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-96" placeholder=""
                                                            value="96"> <label for="checkedPermissions[permission]-96"
                                                            class="">
                                                            Can delete templates
                                                        </label></div>
                                                </div>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>


                <div class="modal-footer mt-5 mb-2">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>

        </div>
    </div>
</div>
<div class="modal fade" id="exampleModaladdrolemange" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Manage Permission
                </h5>

            </div>

            <form method="post" action="{{url('user-role-permission/update')}}">
                @csrf
                <input type="hidden" name="id" class="id">
                <div class="row">

                    <div class="col-md-1"></div>
                    <div class="col-md-10 mt-3">
                        <div class="form-group mb-0"><label>Permission</label>
                            <div id="accordionExample" class="accordion">
                                <div class="card shadow">
                                    <div class="card-header border-0">
                                        <div data-toggle="collapse" data-target="#job_post" aria-expanded="false"
                                            aria-controls="permission"
                                            class="custom-checkbox-default d-block position-relative text-capitalize collapsible-link py-2 cursor-pointer">
                                            <div class="customized-checkbox checkbox-default"><input type="checkbox"
                                                    name="single-checkbox-job_post" id="single-checkbox-job_post"
                                                    value="job_post"> <label for="single-checkbox-job_post"
                                                    class="mb-0">
                                                    Job post
                                                </label></div>
                                        </div>
                                    </div>
                                    <div id="job_post" data-parent="#accordionExample" class="collapse ">
                                        <div class="card-body p-primary">
                                            <div>
                                                <div class="app-checkbox-group">
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-1" placeholder=""
                                                            value="1"> <label for="checkedPermissions[permission]-1"
                                                            class="">
                                                            Can view job list
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-2" placeholder=""
                                                            value="2"> <label for="checkedPermissions[permission]-2"
                                                            class="">
                                                            Can create new job
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-3" placeholder=""
                                                            value="3"> <label for="checkedPermissions[permission]-3"
                                                            class="">
                                                            Can edit job
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-4" placeholder=""
                                                            value="4"> <label for="checkedPermissions[permission]-4"
                                                            class="">
                                                            Can delete job
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-5" placeholder=""
                                                            value="5"> <label for="checkedPermissions[permission]-5"
                                                            class="">
                                                            Can view job overview
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-6" placeholder=""
                                                            value="6"> <label for="checkedPermissions[permission]-6"
                                                            class="">
                                                            Can view candidate list from job overview
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-7" placeholder=""
                                                            value="7"> <label for="checkedPermissions[permission]-7"
                                                            class="">
                                                            Can generate sharable link for job post
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-8" placeholder=""
                                                            value="8"> <label for="checkedPermissions[permission]-8"
                                                            class="">
                                                            Can view job post setting
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-9" placeholder=""
                                                            value="9"> <label for="checkedPermissions[permission]-9"
                                                            class="">
                                                            Can edit job post setting
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-10" placeholder=""
                                                            value="10"> <label for="checkedPermissions[permission]-10"
                                                            class="">
                                                            Can manage job post application form
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-11" placeholder=""
                                                            value="11"> <label for="checkedPermissions[permission]-11"
                                                            class="">
                                                            Can change job post status (Activate/Deactivate/Publish)
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-12" placeholder=""
                                                            value="12"> <label for="checkedPermissions[permission]-12"
                                                            class="">
                                                            Can view specific job stage
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-13" placeholder=""
                                                            value="13"> <label for="checkedPermissions[permission]-13"
                                                            class="">
                                                            Can create specific job stage
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-14" placeholder=""
                                                            value="14"> <label for="checkedPermissions[permission]-14"
                                                            class="">
                                                            Can update specific job stage
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-15" placeholder=""
                                                            value="15"> <label for="checkedPermissions[permission]-15"
                                                            class="">
                                                            Can delete specific job stage
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-16" placeholder=""
                                                            value="16"> <label for="checkedPermissions[permission]-16"
                                                            class="">
                                                            Can view hiring team
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-17" placeholder=""
                                                            value="17"> <label for="checkedPermissions[permission]-17"
                                                            class="">
                                                            Can assign team member
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-18" placeholder=""
                                                            value="18"> <label for="checkedPermissions[permission]-18"
                                                            class="">
                                                            Can delete hiring team
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-19" placeholder=""
                                                            value="19"> <label for="checkedPermissions[permission]-19"
                                                            class="">
                                                            Can manage job post sharable thumbnail
                                                        </label></div>
                                                </div>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card shadow">
                                    <div class="card-header border-0">
                                        <div data-toggle="collapse" data-target="#candidates" aria-expanded="false"
                                            aria-controls="permission"
                                            class="custom-checkbox-default d-block position-relative text-capitalize collapsible-link py-2 cursor-pointer">
                                            <div class="customized-checkbox checkbox-default"><input type="checkbox"
                                                    name="single-checkbox-candidates" id="single-checkbox-candidates"
                                                    value="candidates"> <label for="single-checkbox-candidates"
                                                    class="mb-0">
                                                    Candidates
                                                </label></div>
                                        </div>
                                    </div>
                                    <div id="candidates" data-parent="#accordionExample" class="collapse ">
                                        <div class="card-body p-primary">
                                            <div>
                                                <div class="app-checkbox-group">
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-20" placeholder=""
                                                            value="20"> <label for="checkedPermissions[permission]-20"
                                                            class="">
                                                            Can view details about candidate application of a job
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-21" placeholder=""
                                                            value="21"> <label for="checkedPermissions[permission]-21"
                                                            class="">
                                                            Can create candidate
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-22" placeholder=""
                                                            value="22"> <label for="checkedPermissions[permission]-22"
                                                            class="">
                                                            Can update candidate
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-23" placeholder=""
                                                            value="23"> <label for="checkedPermissions[permission]-23"
                                                            class="">
                                                            Can view candidate
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-24" placeholder=""
                                                            value="24"> <label for="checkedPermissions[permission]-24"
                                                            class="">
                                                            Can delete candidate
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-25" placeholder=""
                                                            value="25"> <label for="checkedPermissions[permission]-25"
                                                            class="">
                                                            Can assign candidate to job
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-26" placeholder=""
                                                            value="26"> <label for="checkedPermissions[permission]-26"
                                                            class="">
                                                            Can unassigned candidate from job
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-27" placeholder=""
                                                            value="27"> <label for="checkedPermissions[permission]-27"
                                                            class="">
                                                            Can view job candidate timeline
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-28" placeholder=""
                                                            value="28"> <label for="checkedPermissions[permission]-28"
                                                            class="">
                                                            Can view candidate details
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-29" placeholder=""
                                                            value="29"> <label for="checkedPermissions[permission]-29"
                                                            class="">
                                                            Can change stage job candidate
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-30" placeholder=""
                                                            value="30"> <label for="checkedPermissions[permission]-30"
                                                            class="">
                                                            Can change review job candidate
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-31" placeholder=""
                                                            value="31"> <label for="checkedPermissions[permission]-31"
                                                            class="">
                                                            Can send email to candidate
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-32" placeholder=""
                                                            value="32"> <label for="checkedPermissions[permission]-32"
                                                            class="">
                                                            Can disqualify job candidate
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-33" placeholder=""
                                                            value="33"> <label for="checkedPermissions[permission]-33"
                                                            class="">
                                                            Can view note by recruiters
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-34" placeholder=""
                                                            value="34"> <label for="checkedPermissions[permission]-34"
                                                            class="">
                                                            Can view events for job candidate
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-35" placeholder=""
                                                            value="35"> <label for="checkedPermissions[permission]-35"
                                                            class="">
                                                            Can view event
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-36" placeholder=""
                                                            value="36"> <label for="checkedPermissions[permission]-36"
                                                            class="">
                                                            Can create event
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-37" placeholder=""
                                                            value="37"> <label for="checkedPermissions[permission]-37"
                                                            class="">
                                                            Can update event
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-38" placeholder=""
                                                            value="38"> <label for="checkedPermissions[permission]-38"
                                                            class="">
                                                            Can delete event
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-39" placeholder=""
                                                            value="39"> <label for="checkedPermissions[permission]-39"
                                                            class="">
                                                            Can view note
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-40" placeholder=""
                                                            value="40"> <label for="checkedPermissions[permission]-40"
                                                            class="">
                                                            Can create note
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-41" placeholder=""
                                                            value="41"> <label for="checkedPermissions[permission]-41"
                                                            class="">
                                                            Can update note
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-42" placeholder=""
                                                            value="42"> <label for="checkedPermissions[permission]-42"
                                                            class="">
                                                            Can delete note
                                                        </label></div>
                                                </div>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card shadow">
                                    <div class="card-header border-0">
                                        <div data-toggle="collapse" data-target="#career_page" aria-expanded="false"
                                            aria-controls="permission"
                                            class="custom-checkbox-default d-block position-relative text-capitalize collapsible-link py-2 cursor-pointer">
                                            <div class="customized-checkbox checkbox-default"><input type="checkbox"
                                                    name="single-checkbox-career_page" id="single-checkbox-career_page"
                                                    value="career_page"> <label for="single-checkbox-career_page"
                                                    class="mb-0">
                                                    Career page
                                                </label></div>
                                        </div>
                                    </div>
                                    <div id="career_page" data-parent="#accordionExample" class="collapse ">
                                        <div class="card-body p-primary">
                                            <div>
                                                <div class="app-checkbox-group">
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-43" placeholder=""
                                                            value="43"> <label for="checkedPermissions[permission]-43"
                                                            class="">
                                                            Can view career page
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-44" placeholder=""
                                                            value="44"> <label for="checkedPermissions[permission]-44"
                                                            class="">
                                                            Can update career page
                                                        </label></div>
                                                </div>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card shadow">
                                    <div class="card-header border-0">
                                        <div data-toggle="collapse" data-target="#job_settings" aria-expanded="false"
                                            aria-controls="permission"
                                            class="custom-checkbox-default d-block position-relative text-capitalize collapsible-link py-2 cursor-pointer">
                                            <div class="customized-checkbox checkbox-default"><input type="checkbox"
                                                    name="single-checkbox-job_settings"
                                                    id="single-checkbox-job_settings" value="job_settings"> <label
                                                    for="single-checkbox-job_settings" class="mb-0">
                                                    Job settings
                                                </label></div>
                                        </div>
                                    </div>
                                    <div id="job_settings" data-parent="#accordionExample" class="collapse ">
                                        <div class="card-body p-primary">
                                            <div>
                                                <div class="app-checkbox-group">
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-45" placeholder=""
                                                            value="45"> <label for="checkedPermissions[permission]-45"
                                                            class="">
                                                            Can view job settings
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-46" placeholder=""
                                                            value="46"> <label for="checkedPermissions[permission]-46"
                                                            class="">
                                                            Can manage global application form
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-47" placeholder=""
                                                            value="47"> <label for="checkedPermissions[permission]-47"
                                                            class="">
                                                            Can view event type
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-48" placeholder=""
                                                            value="48"> <label for="checkedPermissions[permission]-48"
                                                            class="">
                                                            Can create event type
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-49" placeholder=""
                                                            value="49"> <label for="checkedPermissions[permission]-49"
                                                            class="">
                                                            Can update event type
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-50" placeholder=""
                                                            value="50"> <label for="checkedPermissions[permission]-50"
                                                            class="">
                                                            Can delete event type
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-51" placeholder=""
                                                            value="51"> <label for="checkedPermissions[permission]-51"
                                                            class="">
                                                            Can view job type
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-52" placeholder=""
                                                            value="52"> <label for="checkedPermissions[permission]-52"
                                                            class="">
                                                            Can create job type
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-53" placeholder=""
                                                            value="53"> <label for="checkedPermissions[permission]-53"
                                                            class="">
                                                            Can update job type
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-54" placeholder=""
                                                            value="54"> <label for="checkedPermissions[permission]-54"
                                                            class="">
                                                            Can delete job type
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-55" placeholder=""
                                                            value="55"> <label for="checkedPermissions[permission]-55"
                                                            class="">
                                                            Can view company location
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-56" placeholder=""
                                                            value="56"> <label for="checkedPermissions[permission]-56"
                                                            class="">
                                                            Can create company location
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-57" placeholder=""
                                                            value="57"> <label for="checkedPermissions[permission]-57"
                                                            class="">
                                                            Can update company location
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-58" placeholder=""
                                                            value="58"> <label for="checkedPermissions[permission]-58"
                                                            class="">
                                                            Can delete company location
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-59" placeholder=""
                                                            value="59"> <label for="checkedPermissions[permission]-59"
                                                            class="">
                                                            Can view department
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-60" placeholder=""
                                                            value="60"> <label for="checkedPermissions[permission]-60"
                                                            class="">
                                                            Can create department
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-61" placeholder=""
                                                            value="61"> <label for="checkedPermissions[permission]-61"
                                                            class="">
                                                            Can update department
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-62" placeholder=""
                                                            value="62"> <label for="checkedPermissions[permission]-62"
                                                            class="">
                                                            Can delete department
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-63" placeholder=""
                                                            value="63"> <label for="checkedPermissions[permission]-63"
                                                            class="">
                                                            Can view stage
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-64" placeholder=""
                                                            value="64"> <label for="checkedPermissions[permission]-64"
                                                            class="">
                                                            Can create stage
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-65" placeholder=""
                                                            value="65"> <label for="checkedPermissions[permission]-65"
                                                            class="">
                                                            Can update stage
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-66" placeholder=""
                                                            value="66"> <label for="checkedPermissions[permission]-66"
                                                            class="">
                                                            Can delete stage
                                                        </label></div>
                                                </div>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card shadow">
                                    <div class="card-header border-0">
                                        <div data-toggle="collapse" data-target="#app_settings" aria-expanded="false"
                                            aria-controls="permission"
                                            class="custom-checkbox-default d-block position-relative text-capitalize collapsible-link py-2 cursor-pointer">
                                            <div class="customized-checkbox checkbox-default"><input type="checkbox"
                                                    name="single-checkbox-app_settings"
                                                    id="single-checkbox-app_settings" value="app_settings"> <label
                                                    for="single-checkbox-app_settings" class="mb-0">
                                                    App Settings
                                                </label></div>
                                        </div>
                                    </div>
                                    <div id="app_settings" data-parent="#accordionExample" class="collapse ">
                                        <div class="card-body p-primary">
                                            <div>
                                                <div class="app-checkbox-group">
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-67" placeholder=""
                                                            value="67"> <label for="checkedPermissions[permission]-67"
                                                            class="">
                                                            Can view list of setting
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-68" placeholder=""
                                                            value="68"> <label for="checkedPermissions[permission]-68"
                                                            class="">
                                                            Can update setting
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-69" placeholder=""
                                                            value="69"> <label for="checkedPermissions[permission]-69"
                                                            class="">
                                                            Can view email settings
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-70" placeholder=""
                                                            value="70"> <label for="checkedPermissions[permission]-70"
                                                            class="">
                                                            Can update email settings
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-71" placeholder=""
                                                            value="71"> <label for="checkedPermissions[permission]-71"
                                                            class="">
                                                            Can view notification settings
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-72" placeholder=""
                                                            value="72"> <label for="checkedPermissions[permission]-72"
                                                            class="">
                                                            Can update notification settings
                                                        </label></div>
                                                </div>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card shadow">
                                    <div class="card-header border-0">
                                        <div data-toggle="collapse" data-target="#users" aria-expanded="false"
                                            aria-controls="permission"
                                            class="custom-checkbox-default d-block position-relative text-capitalize collapsible-link py-2 cursor-pointer">
                                            <div class="customized-checkbox checkbox-default"><input type="checkbox"
                                                    name="single-checkbox-users" id="single-checkbox-users"
                                                    value="users"> <label for="single-checkbox-users" class="mb-0">
                                                    Users
                                                </label></div>
                                        </div>
                                    </div>
                                    <div id="users" data-parent="#accordionExample" class="collapse ">
                                        <div class="card-body p-primary">
                                            <div>
                                                <div class="app-checkbox-group">
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-73" placeholder=""
                                                            value="73"> <label for="checkedPermissions[permission]-73"
                                                            class="">
                                                            Can view list of user
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-74" placeholder=""
                                                            value="74"> <label for="checkedPermissions[permission]-74"
                                                            class="">
                                                            Can create an user
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-75" placeholder=""
                                                            value="75"> <label for="checkedPermissions[permission]-75"
                                                            class="">
                                                            Can update an user
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-76" placeholder=""
                                                            value="76"> <label for="checkedPermissions[permission]-76"
                                                            class="">
                                                            Can delete an user
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-77" placeholder=""
                                                            value="77"> <label for="checkedPermissions[permission]-77"
                                                            class="">
                                                            Can invite user
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-78" placeholder=""
                                                            value="78"> <label for="checkedPermissions[permission]-78"
                                                            class="">
                                                            Can cancel user invitation
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-79" placeholder=""
                                                            value="79"> <label for="checkedPermissions[permission]-79"
                                                            class="">
                                                            Can attach roles to users
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-80" placeholder=""
                                                            value="80"> <label for="checkedPermissions[permission]-80"
                                                            class="">
                                                            Can detach roles from users
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-81" placeholder=""
                                                            value="81"> <label for="checkedPermissions[permission]-81"
                                                            class="">
                                                            Can change own settings
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-82" placeholder=""
                                                            value="82"> <label for="checkedPermissions[permission]-82"
                                                            class="">
                                                            Can view settings list
                                                        </label></div>
                                                </div>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card shadow">
                                    <div class="card-header border-0">
                                        <div data-toggle="collapse" data-target="#roles" aria-expanded="false"
                                            aria-controls="permission"
                                            class="custom-checkbox-default d-block position-relative text-capitalize collapsible-link py-2 cursor-pointer">
                                            <div class="customized-checkbox checkbox-default"><input type="checkbox"
                                                    name="single-checkbox-roles" id="single-checkbox-roles"
                                                    value="roles"> <label for="single-checkbox-roles" class="mb-0">
                                                    Roles
                                                </label></div>
                                        </div>
                                    </div>
                                    <div id="roles" data-parent="#accordionExample" class="collapse ">
                                        <div class="card-body p-primary">
                                            <div>
                                                <div class="app-checkbox-group">
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-83" placeholder=""
                                                            value="83"> <label for="checkedPermissions[permission]-83"
                                                            class="">
                                                            Can view list of role
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-84" placeholder=""
                                                            value="84"> <label for="checkedPermissions[permission]-84"
                                                            class="">
                                                            Can create role
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-85" placeholder=""
                                                            value="85"> <label for="checkedPermissions[permission]-85"
                                                            class="">
                                                            Can update role
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-86" placeholder=""
                                                            value="86"> <label for="checkedPermissions[permission]-86"
                                                            class="">
                                                            Can delete role
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-87" placeholder=""
                                                            value="87"> <label for="checkedPermissions[permission]-87"
                                                            class="">
                                                            Can attach user to role
                                                        </label></div>
                                                </div>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card shadow">
                                    <div class="card-header border-0">
                                        <div data-toggle="collapse" data-target="#permissions" aria-expanded="false"
                                            aria-controls="permission"
                                            class="custom-checkbox-default d-block position-relative text-capitalize collapsible-link py-2 cursor-pointer">
                                            <div class="customized-checkbox checkbox-default"><input type="checkbox"
                                                    name="single-checkbox-permissions" id="single-checkbox-permissions"
                                                    value="permissions"> <label for="single-checkbox-permissions"
                                                    class="mb-0">
                                                    Permissions
                                                </label></div>
                                        </div>
                                    </div>
                                    <div id="permissions" data-parent="#accordionExample" class="collapse ">
                                        <div class="card-body p-primary">
                                            <div>
                                                <div class="app-checkbox-group">
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-88" placeholder=""
                                                            value="88"> <label for="checkedPermissions[permission]-88"
                                                            class="">
                                                            Can attach permissions to role
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-89" placeholder=""
                                                            value="89"> <label for="checkedPermissions[permission]-89"
                                                            class="">
                                                            Can detach permissions from role
                                                        </label></div>
                                                </div>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card shadow">
                                    <div class="card-header border-0">
                                        <div data-toggle="collapse" data-target="#templates" aria-expanded="false"
                                            aria-controls="permission"
                                            class="custom-checkbox-default d-block position-relative text-capitalize collapsible-link py-2 cursor-pointer">
                                            <div class="customized-checkbox checkbox-default"><input type="checkbox"
                                                    name="single-checkbox-templates" id="single-checkbox-templates"
                                                    value="templates"> <label for="single-checkbox-templates"
                                                    class="mb-0">
                                                    Templates
                                                </label></div>
                                        </div>
                                    </div>
                                    <div id="templates" data-parent="#accordionExample" class="collapse ">
                                        <div class="card-body p-primary">
                                            <div>
                                                <div class="app-checkbox-group">
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-90" placeholder=""
                                                            value="90"> <label for="checkedPermissions[permission]-90"
                                                            class="">
                                                            Can view notification templates
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-91" placeholder=""
                                                            value="91"> <label for="checkedPermissions[permission]-91"
                                                            class="">
                                                            Can create notification templates
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-92" placeholder=""
                                                            value="92"> <label for="checkedPermissions[permission]-92"
                                                            class="">
                                                            Can update notification templates
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-93" placeholder=""
                                                            value="93"> <label for="checkedPermissions[permission]-93"
                                                            class="">
                                                            Can delete notification templates
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-94" placeholder=""
                                                            value="94"> <label for="checkedPermissions[permission]-94"
                                                            class="">
                                                            Can view templates
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-95" placeholder=""
                                                            value="95"> <label for="checkedPermissions[permission]-95"
                                                            class="">
                                                            Can update templates
                                                        </label></div>
                                                    <div class="customized-checkbox checkbox-default"><input
                                                            type="checkbox" name="checkedPermissions[permission]"
                                                            id="checkedPermissions[permission]-96" placeholder=""
                                                            value="96"> <label for="checkedPermissions[permission]-96"
                                                            class="">
                                                            Can delete templates
                                                        </label></div>
                                                </div>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>


                <div class="modal-footer mt-5 mb-2">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>

        </div>
    </div>
</div>
<div class="modal fade" id="mangeuser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Manage Users - App Admin</h5>
                <hr>
            </div>
            <div class="row mt-3 mb-5">
                <div class="col-md-1"></div>
                <div class="col-md-10 addmangeuserData">
                    <table class="table">
                        <tbody>

                        </tbody>
                    </table>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-1"></div>

                <div class="col-md-10 mt-2">

                    <button class="btn btn-sm btn-primary">Add User</button>
                </div>
            </div>



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

.avatars-w-50 .no-img {
    cursor: pointer;
}

.allfirstlastname:hover {
    z-index: 1;
    padding: 10px;
}
</style>
<script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js')}}"></script>

<!-- sweet alert -->
<script src="{{asset('//cdn.jsdelivr.net/npm/sweetalert2@11')}}"></script>
<script src="{{asset('sweetalert2.all.min.js')}}"></script>
<script src="{{asset('sweetalert2.min.js')}}"></script>

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

<link rel="stylesheet" href="{{asset('sweetalert2.min.css')}}">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script type="text/javascript">
// $('.select2').select2();
$(document).ready(function() {
    $('.js-example-basic-single').select2();
});

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
            url: "{{ url('admin/user-roleedit/') }}",
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
    $('.mangeuser').click(function() {
        let id = $(this).attr("data-id");

        $.ajax({
            type: 'POST',
            url: "{{ url('admin/user-role/mange-user') }}",
            data: {
                id: id
            },
            success: function(data) {
                // console.log(data);

                let arr = [];

                data.forEach(element => {
                    // console.log(element);
                    let str = ' <tr><td><span class="w-100"><div avatars-group-class="avatars-group-w-50" name="groupOfUsers2" table-id="roles-table">\n\
                                            <div class="avatar-group avatars-group-w-50" style="display: flex;">\n\
                                                <div class="avatars-w-50 " style="margin-left: -15px;">\n\
                                                    <div class="no-img rounded-circle allfirstlastname">\n\
                                                      ' + element.first_name.charAt(0) + element.last_name.charAt(0) + '  \n\
                                                    </div>\n\
                                                </div>\n\
                                                </div></span></td><td>\n\
                                                ' + element.first_name + element.last_name + '<br>\n\
                                                    <font style="font-size:10px;">' + element.email + '</font>\n\
                                                    </td></tr>';
                    arr.push(str);
                });
                console.log(arr);
                $('.addmangeuserData table tbody').html(arr);
                $('#mangeuser').modal('show');
            }
        });
    })
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