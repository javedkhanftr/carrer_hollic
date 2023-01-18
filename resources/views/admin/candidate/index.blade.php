@extends('layouts.app')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}" />
<div class="container-fluid">
    <input type="hidden" id="verifyEmail" value="{{$email}}">
    <div class="row mt-2 mb-4">
        <div class="col-lg-12">
            <div class="white_card card_height_100 mb_30">
              
                <div class="white_card_body">
                    <div class="QA_section">
                        <div class="white_box_tittle list_header mt-5">
                            <h4>Candidates</h4>
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
                                    <a href="{{url('admin/candidates/create')}}"  class="btn_1">Add New</a>
                                </div>
                            </div>
                        </div>
                        <div class="QA_table mb_30">

                            <table class="table lms_table_active ">
                                <thead>
                                    <tr>
                                       
                                        <th scope="col">Profile</th>
                                        <th scope="col">Applied Job</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Added By</th>
                                        <th scope="col">Current Stage</th>
                                        <th scope="col">Job Application</th>
                                        <th scope="col" class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @inject('condidateData', 'App\Http\Controllers\MasterController')
                                    @foreach($candidates_list as $candidates)
                                    <tr>
                                        <td>
                                            <div class="row">
                                                
                                                <div class="col-md-12  ml-2">
                                                    <a class="text-primary "
                                                        href="{{url('admin/condidate_data/'.$candidates->id)}}"
                                                        data-id="{{$candidates->id}}">{{$candidates->first_name.' '.$candidates->last_name}}</a><br>
                                                    <font style="font-size:10px;">
                                                            {{$candidates->email}}
                                                        <br>{{$candidates->mobile_number}}
                                                    </font>

                                                </div>
                                            </div>


                                        </td>
                                        <td>{{ $condidateData::getnamejobpost($candidates->job_post_id) }}</td>
                                        <td class="allbtn">
                                            <span>
                                                <div class="d-flex align-items-center" table-id="candidates-table"
                                                    index="2">
                                                    @if( $candidates->status_id == '1')
                                                    <span class="badge   text-capitalize bg-success">Active</span>
                                                    @endif
                                                    @if( $candidates->status_id == '2')
                                                    <span class="badge   text-capitalize bg-danger">Inactive</span>
                                                    @endif
                                                    @if( $candidates->status_id == '3')
                                                    <span class="badge   text-capitalize"
                                                        style="background-color: #964ed8;">Invited</span>
                                                    @endif
                                                    @if( $candidates->status_id == '4')
                                                    <span class="badge   text-capitalize bg-primary">New</span>
                                                    @endif
                                                    @if( $candidates->status_id == '5')
                                                    <span class="badge   text-capitalize"
                                                        style="background-color: #964ed8;">In
                                                        Progress</span>
                                                    @endif
                                                    @if( $candidates->status_id == '6')
                                                    <span class="badge   text-capitalize bg-success">Hired</span>
                                                    @endif
                                                    @if( $candidates->status_id == '8')
                                                    <span class="badge   text-capitalize"
                                                        style="background-color: #fc6510;">Draft</span>
                                                    @endif
                                                    @if( $candidates->status_id == '9')
                                                    <span class="badge   text-capitalize bg-success">Active</span>
                                                    @endif
                                                    @if( $candidates->status_id == '10')
                                                    <span class="badge   text-capitalize bg-danger">Inactive</span>
                                                    @endif
                                                    @if( $candidates->status_id == '11')
                                                    <span class="badge   text-capitalize bg-primary">Pending</span>
                                                    @endif
                                                    @if( $candidates->status_id == '12')
                                                    <span class="badge   text-capitalize bg-success">Done</span>
                                                    @endif
                                                </div>
                                            </span>
                                        </td>
                                        <td>

                                            {{ $condidateData::getaddedby($candidates->job_post_id) }}
                                        </td>
                                        <td>
                                            {{ $condidateData::getstage($candidates->current_stage_id) }}
                                        </td>
                                        <td class="allbtn">
                                            <span class="badge  btn-success">Single</span>
                                        </td>
                                        <td class="allbtn">
                                            <a href="{{url('admin/candidates/edit/'.$candidates->applicant_id)}}"
                                                class="btn btn-sm btn-primary badge  text-capitalize">
                                                edit
                                                <!-- <i class="fa fa-edit"></i> -->
                                            </a>
                                            <a href="{{url('admin/candidates/assign_job/'.$candidates->applicant_id)}}"
                                                class="btn btn-sm btn-success  badge text-capitalize">
                                                Assign
                                                <!-- <i class="fa fa-edit"></i> -->
                                            </a>
                                            <a href="{{url('admin/candidates/delete/'.$candidates->applicant_id)}}"
                                                class="btn btn-sm btn-danger  badge  text-capitalize">
                                                delete
                                                <!-- <i class="fa fa-trash"></i> -->
                                            </a>

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







    <div class="modal fade" id="verifyEmailData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Verify Email</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mt-2 mb-2">
                        <div class="col-md-3">
                            <h6 class="mt-2">Email</h6>
                        </div>
                        <div class="col-md-9">
                            <input type="email" id="email" class="form-control" placeholder="Enter Email">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancle</button>
                    <button type="button" class="btn btn-primary" id="EmailVerifyData">Save</button>
                </div>
            </div>
        </div>
    </div>

    <!-- create Conditate -->
    <div class="modal fade" id="showConditate" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-1">
                            <h5 class="bg-light"
                                style="text-align: center;padding-left: 29px;padding-right: 58px;padding-top: 25px;padding-bottom: 25px;">
                                HS</h5>
                        </div>
                        <div class="col-md-2">
                            <h5 class="modal-title" id="staticBackdropLabel">

                                <p>Hitesh Sharma <br>
                                    <font class="fonts">Email--hitesh1bki@gmail.com</font><br>

                                    <font class="fonts">Customer Care Executive</font> <br>
                                    <font class="fonts">Applied last sunday</font>
                                </p>
                            </h5>
                        </div>
                        <div class="col-md-2">
                            <h5 class="modal-title col222" id="staticBackdropLabel">

                                <font class="fonts">Gender-male</font><br>
                                <font class="fonts">Date of birth/ 22-11-1989</font><br>
                            </h5>
                        </div>
                        <div class="col-md-3"></div>
                        <div class="col-md-4">
                            <div class="text-size-25 d-flex align-items-center justify-content-between"><span>Not
                                    reviewed
                                    yet</span>
                                <ul class="rating list list-unstyled p-0 m-0">
                                    <li class="d-inline-block cursor-pointer star">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
                                            <polygon
                                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                            </polygon>
                                        </svg>
                                    </li>
                                    <li class="d-inline-block cursor-pointer star">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
                                            <polygon
                                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                            </polygon>
                                        </svg>
                                    </li>
                                    <li class="d-inline-block cursor-pointer star">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
                                            <polygon
                                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                            </polygon>
                                        </svg>
                                    </li>
                                    <li class="d-inline-block cursor-pointer star">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
                                            <polygon
                                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                            </polygon>
                                        </svg>
                                    </li>
                                    <li class="d-inline-block cursor-pointer star">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
                                            <polygon
                                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                            </polygon>
                                        </svg>
                                    </li>
                                </ul>
                            </div>

                            <div class="d-flex align-items-center justify-content-between mt-5">
                                <div class="d-flex align-items-center default-actions"><a href="#" data-toggle="tooltip"
                                        data-placement="top" title="" class="action-button"
                                        data-original-title="Disqualify">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-minus-circle size-26">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <line x1="8" y1="12" x2="16" y2="12"></line>
                                        </svg></a> <a href="#" data-toggle="tooltip" data-placement="top" title=""
                                        class="action-button" data-original-title="Compose mail">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-mail size-26">
                                            <path
                                                d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                            </path>
                                            <polyline points="22,6 12,13 2,6"></polyline>
                                        </svg></a> <a href="#" data-toggle="tooltip" data-placement="top" title=""
                                        class="action-button" data-original-title="Create event">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-calendar size-26">
                                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                            <line x1="16" y1="2" x2="16" y2="6"></line>
                                            <line x1="8" y1="2" x2="8" y2="6"></line>
                                            <line x1="3" y1="10" x2="21" y2="10"></line>
                                        </svg></a></div>
                                <div class="d-flex align-items-center justify-content-end">
                                    Stage
                                    <div class="dropdown dropdown-with-animation stage-dropdown ml-2"><button
                                            type="button" data-toggle="dropdown" aria-expanded="false"
                                            class="btn btn-primary dropdown-toggle text-capitalize">
                                            New
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right" style="">
                                            <li><a href="#" class="dropdown-item text-muted disabled">
                                                    Move to stage
                                                </a></li>
                                            <li><a href="#"
                                                    class="dropdown-item text-capitalize d-flex align-items-center justify-content-between"><span>New</span>
                                                    <!---->
                                                </a></li>
                                            <li><a href="#"
                                                    class="dropdown-item text-capitalize d-flex align-items-center justify-content-between text-primary disabled"><span>interview</span>
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-check">
                                                            <polyline points="20 6 9 17 4 12"></polyline>
                                                        </svg></span></a></li>
                                            <li><a href="#"
                                                    class="dropdown-item text-capitalize d-flex align-items-center justify-content-between"><span>negotiation</span>
                                                    <!---->
                                                </a></li>
                                            <li><a href="#"
                                                    class="dropdown-item text-capitalize d-flex align-items-center justify-content-between"><span>shortlist</span>
                                                    <!---->
                                                </a></li>
                                            <li><a href="#"
                                                    class="dropdown-item text-capitalize d-flex align-items-center justify-content-between"><span>task
                                                        phase</span>
                                                    <!---->
                                                </a></li>
                                            <li><a href="#"
                                                    class="dropdown-item text-capitalize d-flex align-items-center justify-content-between"><span>hired</span>
                                                    <!---->
                                                </a></li>
                                            <!---->
                                        </ul>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">

                            <a data-toggle="tab" href="#"
                                class="nav-item p-primary text-capitalize active timeline"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-clock mr-2">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 6 12 12 16 14"></polyline>
                                </svg>
                                timeline
                            </a>

                            <div class="col-md-12 mt-5">
                                <div class="row ">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-3">
                                    </div>
                                    <div class="col-md-2">
                                        <a data-toggle="tab" href="#"
                                            class="nav-item p-primary text-capitalize active notestData"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-book-open mr-2">
                                                <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                                                <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                                            </svg> Notes </a>

                                    </div>
                                    <div class="col-md-2">
                                        <a data-toggle="tab" href="#"
                                            class="nav-item p-primary text-capitalize eventdata"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-calendar mr-2">
                                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                                <line x1="16" y1="2" x2="16" y2="6"></line>
                                                <line x1="8" y1="2" x2="8" y2="6"></line>
                                                <line x1="3" y1="10" x2="21" y2="10"></line>
                                            </svg>events </a>
                                    </div>

                                    <div class="col-md-2">
                                        <a data-toggle="tab" href="#"
                                            class="nav-item p-primary text-capitalize attachmentsdata"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-file-text mr-2">
                                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                </path>
                                                <polyline points="14 2 14 8 20 8"></polyline>
                                                <line x1="16" y1="13" x2="8" y2="13"></line>
                                                <line x1="16" y1="17" x2="8" y2="17"></line>
                                                <polyline points="10 9 9 9 8 9"></polyline>
                                            </svg> attachments </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row timelineData">
                            <div class="col-md-6 ">
                                <div class="timeline mt-5">
                                    <div class="timeline-step">
                                        <div class="number"></div>
                                        <div class="timeline-info">
                                            <p class="time">
                                                20-12-2022 12:59 PM
                                            </p>
                                            <p class="description"><strong>Vijay Meena</strong> moved <strong>Moumita
                                                    Manna</strong> to <strong>new</strong></p>
                                        </div>
                                    </div>
                                    <div class="timeline-step">
                                        <div class="number"></div>
                                        <div class="timeline-info">
                                            <p class="time">
                                                20-12-2022 12:42 PM
                                            </p>
                                            <p class="description"><strong>Vijay Meena</strong> moved <strong>Moumita
                                                    Manna</strong> to <strong>interview</strong></p>
                                        </div>
                                    </div>
                                    <div class="timeline-step">
                                        <div class="number"></div>
                                        <div class="timeline-info">
                                            <p class="time">
                                                20-12-2022 11:21 AM
                                            </p>
                                            <p class="description"><strong>asha bairwa</strong> has added note on
                                                <strong>Moumita Manna</strong>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="timeline-step">
                                        <div class="number"></div>
                                        <div class="timeline-info">
                                            <p class="time">
                                                18-12-2022 5:03 PM
                                            </p>
                                            <p class="description"><strong>Moumita Manna</strong> has applied for the
                                                Job <strong>Customer Care Executive</strong> through online</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-5">
                                    <h4>Questions &amp; Answers</h4>
                                </div>
                                <div class="timeline ">
                                    <div id="questions" class="tab-pane fade show active">
                                        <div id="accordionExample" class="accordion accordion-question">
                                            <div class="card">
                                                <div id="heading-0" class="card-header"><button type="button"
                                                        data-toggle="collapse" data-target="#collapse-answer-0"
                                                        aria-expanded="true" aria-controls="collapse-answer-0"
                                                        class="btn btn-block text-left p-0"><span
                                                            class="d-inline-flex align-items-center"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-help-circle mr-2">
                                                                <circle cx="12" cy="12" r="10"></circle>
                                                                <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                                                <line x1="12" y1="17" x2="12.01" y2="17"></line>
                                                            </svg>
                                                            Phone</span> <svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-chevron-down btn-arrow">
                                                            <polyline points="6 9 12 15 18 9"></polyline>
                                                        </svg></button></div>
                                                <div id="collapse-answer-0" aria-labelledby="collapse-answer-0"
                                                    data-parent="#accordionExample" class="collapse show">
                                                    <div class="card-body">
                                                        +91 62898 40436</div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div id="heading-1" class="card-header"><button type="button"
                                                        data-toggle="collapse" data-target="#collapse-answer-1"
                                                        aria-expanded="false" aria-controls="collapse-answer-1"
                                                        class="btn btn-block text-left p-0 collapsed"><span
                                                            class="d-inline-flex align-items-center"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-help-circle mr-2">
                                                                <circle cx="12" cy="12" r="10"></circle>
                                                                <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                                                <line x1="12" y1="17" x2="12.01" y2="17"></line>
                                                            </svg>
                                                            Address<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-chevron-down btn-arrow">
                                                                <polyline points="6 9 12 15 18 9"></polyline>
                                                            </svg></button></div>
                                                <div id="collapse-answer-1" aria-labelledby="collapse-answer-1"
                                                    data-parent="#accordionExample" class="collapse">
                                                    <div class="card-body">
                                                        11, Satish chakraborty lane Bally Howrah</div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div id="heading-2" class="card-header"><button type="button"
                                                        data-toggle="collapse" data-target="#collapse-answer-2"
                                                        aria-expanded="false" aria-controls="collapse-answer-2"
                                                        class="btn btn-block text-left p-0 collapsed"><span
                                                            class="d-inline-flex align-items-center"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-help-circle mr-2">
                                                                <circle cx="12" cy="12" r="10"></circle>
                                                                <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                                                <line x1="12" y1="17" x2="12.01" y2="17"></line>
                                                            </svg>
                                                            Education <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-chevron-down btn-arrow">
                                                                <polyline points="6 9 12 15 18 9"></polyline>
                                                            </svg></button></div>
                                                <div id="collapse-answer-2" aria-labelledby="collapse-answer-2"
                                                    data-parent="#accordionExample" class="collapse">
                                                    <div class="card-body">
                                                        Isc</div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div id="heading-3" class="card-header"><button type="button"
                                                        data-toggle="collapse" data-target="#collapse-answer-3"
                                                        aria-expanded="false" aria-controls="collapse-answer-3"
                                                        class="btn btn-block text-left p-0 collapsed"><span
                                                            class="d-inline-flex align-items-center"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-help-circle mr-2">
                                                                <circle cx="12" cy="12" r="10"></circle>
                                                                <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                                                <line x1="12" y1="17" x2="12.01" y2="17"></line>
                                                            </svg>
                                                            Work experience<svg xmlns="http://www.w3.org/2000/svg"
                                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-chevron-down btn-arrow">
                                                                <polyline points="6 9 12 15 18 9"></polyline>
                                                            </svg></button></div>
                                                <div id="collapse-answer-3" aria-labelledby="collapse-answer-3"
                                                    data-parent="#accordionExample" class="collapse">
                                                    <div class="card-body">
                                                        In teleperformance as customer care executive for voice process
                                                        in
                                                        Flipkart</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 notest displayNone">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="avatars-w-40"><img
                                                src="https://careerhollic.com/recruitment/storage/avatar/63170d73b98da.jpg"
                                                alt="Not found" class="rounded-circle avatar-bordered"> </div>
                                        <div class="ml-3">
                                            <h6 class="mb-1">Vijay Meena</h6>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="editor">
                                            <div class="note-editor note-frame card">
                                                <div class="note-dropzone">
                                                    <div class="note-dropzone-message"></div>
                                                </div>
                                                <div class="note-toolbar card-header" role="toolbar">
                                                    <div class="note-btn-group btn-group note-style"><button
                                                            type="button"
                                                            class="note-btn btn btn-light btn-sm note-btn-bold"
                                                            tabindex="-1" title="" aria-label="Bold (CTRL+B)"
                                                            data-original-title="Bold (CTRL+B)"><i
                                                                class="note-icon-bold"></i></button><button
                                                            type="button"
                                                            class="note-btn btn btn-light btn-sm note-btn-italic"
                                                            tabindex="-1" title="" aria-label="Italic (CTRL+I)"
                                                            data-original-title="Italic (CTRL+I)"><i
                                                                class="note-icon-italic"></i></button><button
                                                            type="button"
                                                            class="note-btn btn btn-light btn-sm note-btn-underline"
                                                            tabindex="-1" title="" aria-label="Underline (CTRL+U)"
                                                            data-original-title="Underline (CTRL+U)"><i
                                                                class="note-icon-underline"></i></button></div>
                                                    <div class="note-btn-group btn-group note-fontsize">
                                                        <div class="note-btn-group btn-group"><button type="button"
                                                                class="note-btn btn btn-light btn-sm dropdown-toggle"
                                                                tabindex="-1" data-toggle="dropdown" title=""
                                                                aria-label="Font Size"
                                                                data-original-title="Font Size"><span
                                                                    class="note-current-fontsize">13</span></button>
                                                            <div class="note-dropdown-menu dropdown-menu note-check dropdown-fontsize"
                                                                role="list" aria-label="Font Size"><a
                                                                    class="dropdown-item" href="#" data-value="8"
                                                                    role="listitem" aria-label="8"><i
                                                                        class="note-icon-menu-check"></i>
                                                                    8</a><a class="dropdown-item" href="#"
                                                                    data-value="9" role="listitem" aria-label="9"><i
                                                                        class="note-icon-menu-check"></i> 9</a><a
                                                                    class="dropdown-item" href="#" data-value="10"
                                                                    role="listitem" aria-label="10"><i
                                                                        class="note-icon-menu-check"></i> 10</a><a
                                                                    class="dropdown-item" href="#" data-value="11"
                                                                    role="listitem" aria-label="11"><i
                                                                        class="note-icon-menu-check"></i> 11</a><a
                                                                    class="dropdown-item" href="#" data-value="12"
                                                                    role="listitem" aria-label="12"><i
                                                                        class="note-icon-menu-check"></i> 12</a><a
                                                                    class="dropdown-item" href="#" data-value="14"
                                                                    role="listitem" aria-label="14"><i
                                                                        class="note-icon-menu-check"></i> 14</a><a
                                                                    class="dropdown-item" href="#" data-value="18"
                                                                    role="listitem" aria-label="18"><i
                                                                        class="note-icon-menu-check"></i> 18</a><a
                                                                    class="dropdown-item" href="#" data-value="24"
                                                                    role="listitem" aria-label="24"><i
                                                                        class="note-icon-menu-check"></i> 24</a>
                                                                <a class="dropdown-item" href="#" data-value="36"
                                                                    role="listitem" aria-label="36"><i
                                                                        class="note-icon-menu-check"></i> 36</a>
                                                            </div>
                                                        </div>
                                                        <div class="note-btn-group btn-group"><button type="button"
                                                                class="note-btn btn btn-light btn-sm dropdown-toggle"
                                                                tabindex="-1" data-toggle="dropdown" title=""
                                                                aria-label="Line Height"
                                                                data-original-title="Line Height"><i
                                                                    class="note-icon-text-height"></i></button>
                                                            <div class="note-dropdown-menu dropdown-menu note-check dropdown-line-height"
                                                                role="list" aria-label="Line Height"><a
                                                                    class="dropdown-item" href="#" data-value="1.0"
                                                                    role="listitem" aria-label="1.0"><i
                                                                        class="note-icon-menu-check"></i> 1.0</a><a
                                                                    class="dropdown-item" href="#" data-value="1.2"
                                                                    role="listitem" aria-label="1.2"><i
                                                                        class="note-icon-menu-check"></i> 1.2</a><a
                                                                    class="dropdown-item" href="#" data-value="1.4"
                                                                    role="listitem" aria-label="1.4"><i
                                                                        class="note-icon-menu-check"></i> 1.4</a><a
                                                                    class="dropdown-item" href="#" data-value="1.5"
                                                                    role="listitem" aria-label="1.5"><i
                                                                        class="note-icon-menu-check"></i> 1.5</a><a
                                                                    class="dropdown-item" href="#" data-value="1.6"
                                                                    role="listitem" aria-label="1.6"><i
                                                                        class="note-icon-menu-check"></i> 1.6</a><a
                                                                    class="dropdown-item" href="#" data-value="1.8"
                                                                    role="listitem" aria-label="1.8"><i
                                                                        class="note-icon-menu-check"></i> 1.8</a><a
                                                                    class="dropdown-item" href="#" data-value="2.0"
                                                                    role="listitem" aria-label="2.0"><i
                                                                        class="note-icon-menu-check"></i> 2.0</a><a
                                                                    class="dropdown-item" href="#" data-value="3.0"
                                                                    role="listitem" aria-label="3.0"><i
                                                                        class="note-icon-menu-check"></i> 3.0</a></div>
                                                        </div>
                                                        <div class="note-btn-group btn-group note-color note-color-all">
                                                            <button type="button"
                                                                class="note-btn btn btn-light btn-sm note-current-color-button"
                                                                tabindex="-1" title="" aria-label="Recent Color"
                                                                data-original-title="Recent Color"
                                                                data-backcolor="#FFFF00" data-forecolor="#000000"><i
                                                                    class="note-icon-font note-recent-color"
                                                                    style="background-color: rgb(255, 255, 0); color: rgb(0, 0, 0);"></i></button><button
                                                                type="button"
                                                                class="note-btn btn btn-light btn-sm dropdown-toggle"
                                                                tabindex="-1" data-toggle="dropdown" title=""
                                                                aria-label="More Color"
                                                                data-original-title="More Color"></button>
                                                            <div class="note-dropdown-menu dropdown-menu" role="list">
                                                                <div class="note-palette">
                                                                    <div class="note-palette-title">Background Color
                                                                    </div>
                                                                    <div><button type="button"
                                                                            class="note-color-reset btn btn-light btn-default"
                                                                            data-event="backColor"
                                                                            data-value="transparent">Transparent</button>
                                                                    </div>
                                                                    <div class="note-holder" data-event="backColor">
                                                                        <!-- back colors -->
                                                                        <div class="note-color-palette">
                                                                            <div class="note-color-row"><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#000000"
                                                                                    data-event="backColor"
                                                                                    data-value="#000000" title=""
                                                                                    aria-label="Black"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Black"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#424242"
                                                                                    data-event="backColor"
                                                                                    data-value="#424242" title=""
                                                                                    aria-label="Tundora"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Tundora"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#636363"
                                                                                    data-event="backColor"
                                                                                    data-value="#636363" title=""
                                                                                    aria-label="Dove Gray"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Dove Gray"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#9C9C94"
                                                                                    data-event="backColor"
                                                                                    data-value="#9C9C94" title=""
                                                                                    aria-label="Star Dust"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Star Dust"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#CEC6CE"
                                                                                    data-event="backColor"
                                                                                    data-value="#CEC6CE" title=""
                                                                                    aria-label="Pale Slate"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Pale Slate"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#EFEFEF"
                                                                                    data-event="backColor"
                                                                                    data-value="#EFEFEF" title=""
                                                                                    aria-label="Gallery"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Gallery"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#F7F7F7"
                                                                                    data-event="backColor"
                                                                                    data-value="#F7F7F7" title=""
                                                                                    aria-label="Alabaster"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Alabaster"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#FFFFFF"
                                                                                    data-event="backColor"
                                                                                    data-value="#FFFFFF" title=""
                                                                                    aria-label="White"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="White"></button>
                                                                            </div>
                                                                            <div class="note-color-row"><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#FF0000"
                                                                                    data-event="backColor"
                                                                                    data-value="#FF0000" title=""
                                                                                    aria-label="Red"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Red"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#FF9C00"
                                                                                    data-event="backColor"
                                                                                    data-value="#FF9C00" title=""
                                                                                    aria-label="Orange Peel"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Orange Peel"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#FFFF00"
                                                                                    data-event="backColor"
                                                                                    data-value="#FFFF00" title=""
                                                                                    aria-label="Yellow"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Yellow"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#00FF00"
                                                                                    data-event="backColor"
                                                                                    data-value="#00FF00" title=""
                                                                                    aria-label="Green"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Green"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#00FFFF"
                                                                                    data-event="backColor"
                                                                                    data-value="#00FFFF" title=""
                                                                                    aria-label="Cyan"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Cyan"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#0000FF"
                                                                                    data-event="backColor"
                                                                                    data-value="#0000FF" title=""
                                                                                    aria-label="Blue"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Blue"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#9C00FF"
                                                                                    data-event="backColor"
                                                                                    data-value="#9C00FF" title=""
                                                                                    aria-label="Electric Violet"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Electric Violet"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#FF00FF"
                                                                                    data-event="backColor"
                                                                                    data-value="#FF00FF" title=""
                                                                                    aria-label="Magenta"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Magenta"></button>
                                                                            </div>
                                                                            <div class="note-color-row"><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#F7C6CE"
                                                                                    data-event="backColor"
                                                                                    data-value="#F7C6CE" title=""
                                                                                    aria-label="Azalea"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Azalea"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#FFE7CE"
                                                                                    data-event="backColor"
                                                                                    data-value="#FFE7CE" title=""
                                                                                    aria-label="Karry"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Karry"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#FFEFC6"
                                                                                    data-event="backColor"
                                                                                    data-value="#FFEFC6" title=""
                                                                                    aria-label="Egg White"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Egg White"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#D6EFD6"
                                                                                    data-event="backColor"
                                                                                    data-value="#D6EFD6" title=""
                                                                                    aria-label="Zanah"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Zanah"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#CEDEE7"
                                                                                    data-event="backColor"
                                                                                    data-value="#CEDEE7" title=""
                                                                                    aria-label="Botticelli"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Botticelli"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#CEE7F7"
                                                                                    data-event="backColor"
                                                                                    data-value="#CEE7F7" title=""
                                                                                    aria-label="Tropical Blue"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Tropical Blue"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#D6D6E7"
                                                                                    data-event="backColor"
                                                                                    data-value="#D6D6E7" title=""
                                                                                    aria-label="Mischka"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Mischka"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#E7D6DE"
                                                                                    data-event="backColor"
                                                                                    data-value="#E7D6DE" title=""
                                                                                    aria-label="Twilight"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Twilight"></button>
                                                                            </div>
                                                                            <div class="note-color-row"><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#E79C9C"
                                                                                    data-event="backColor"
                                                                                    data-value="#E79C9C" title=""
                                                                                    aria-label="Tonys Pink"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Tonys Pink"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#FFC69C"
                                                                                    data-event="backColor"
                                                                                    data-value="#FFC69C" title=""
                                                                                    aria-label="Peach Orange"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Peach Orange"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#FFE79C"
                                                                                    data-event="backColor"
                                                                                    data-value="#FFE79C" title=""
                                                                                    aria-label="Cream Brulee"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Cream Brulee"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#B5D6A5"
                                                                                    data-event="backColor"
                                                                                    data-value="#B5D6A5" title=""
                                                                                    aria-label="Sprout"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Sprout"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#A5C6CE"
                                                                                    data-event="backColor"
                                                                                    data-value="#A5C6CE" title=""
                                                                                    aria-label="Casper"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Casper"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#9CC6EF"
                                                                                    data-event="backColor"
                                                                                    data-value="#9CC6EF" title=""
                                                                                    aria-label="Perano"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Perano"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#B5A5D6"
                                                                                    data-event="backColor"
                                                                                    data-value="#B5A5D6" title=""
                                                                                    aria-label="Cold Purple"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Cold Purple"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#D6A5BD"
                                                                                    data-event="backColor"
                                                                                    data-value="#D6A5BD" title=""
                                                                                    aria-label="Careys Pink"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Careys Pink"></button>
                                                                            </div>
                                                                            <div class="note-color-row"><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#E76363"
                                                                                    data-event="backColor"
                                                                                    data-value="#E76363" title=""
                                                                                    aria-label="Mandy"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Mandy"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#F7AD6B"
                                                                                    data-event="backColor"
                                                                                    data-value="#F7AD6B" title=""
                                                                                    aria-label="Rajah"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Rajah"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#FFD663"
                                                                                    data-event="backColor"
                                                                                    data-value="#FFD663" title=""
                                                                                    aria-label="Dandelion"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Dandelion"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#94BD7B"
                                                                                    data-event="backColor"
                                                                                    data-value="#94BD7B" title=""
                                                                                    aria-label="Olivine"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Olivine"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#73A5AD"
                                                                                    data-event="backColor"
                                                                                    data-value="#73A5AD" title=""
                                                                                    aria-label="Gulf Stream"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Gulf Stream"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#6BADDE"
                                                                                    data-event="backColor"
                                                                                    data-value="#6BADDE" title=""
                                                                                    aria-label="Viking"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Viking"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#8C7BC6"
                                                                                    data-event="backColor"
                                                                                    data-value="#8C7BC6" title=""
                                                                                    aria-label="Blue Marguerite"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Blue Marguerite"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#C67BA5"
                                                                                    data-event="backColor"
                                                                                    data-value="#C67BA5" title=""
                                                                                    aria-label="Puce"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Puce"></button>
                                                                            </div>
                                                                            <div class="note-color-row"><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#CE0000"
                                                                                    data-event="backColor"
                                                                                    data-value="#CE0000" title=""
                                                                                    aria-label="Guardsman Red"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Guardsman Red"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#E79439"
                                                                                    data-event="backColor"
                                                                                    data-value="#E79439" title=""
                                                                                    aria-label="Fire Bush"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Fire Bush"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#EFC631"
                                                                                    data-event="backColor"
                                                                                    data-value="#EFC631" title=""
                                                                                    aria-label="Golden Dream"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Golden Dream"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#6BA54A"
                                                                                    data-event="backColor"
                                                                                    data-value="#6BA54A" title=""
                                                                                    aria-label="Chelsea Cucumber"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Chelsea Cucumber"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#4A7B8C"
                                                                                    data-event="backColor"
                                                                                    data-value="#4A7B8C" title=""
                                                                                    aria-label="Smalt Blue"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Smalt Blue"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#3984C6"
                                                                                    data-event="backColor"
                                                                                    data-value="#3984C6" title=""
                                                                                    aria-label="Boston Blue"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Boston Blue"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#634AA5"
                                                                                    data-event="backColor"
                                                                                    data-value="#634AA5" title=""
                                                                                    aria-label="Butterfly Bush"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Butterfly Bush"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#A54A7B"
                                                                                    data-event="backColor"
                                                                                    data-value="#A54A7B" title=""
                                                                                    aria-label="Cadillac"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Cadillac"></button>
                                                                            </div>
                                                                            <div class="note-color-row"><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#9C0000"
                                                                                    data-event="backColor"
                                                                                    data-value="#9C0000" title=""
                                                                                    aria-label="Sangria"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Sangria"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#B56308"
                                                                                    data-event="backColor"
                                                                                    data-value="#B56308" title=""
                                                                                    aria-label="Mai Tai"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Mai Tai"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#BD9400"
                                                                                    data-event="backColor"
                                                                                    data-value="#BD9400" title=""
                                                                                    aria-label="Buddha Gold"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Buddha Gold"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#397B21"
                                                                                    data-event="backColor"
                                                                                    data-value="#397B21" title=""
                                                                                    aria-label="Forest Green"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Forest Green"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#104A5A"
                                                                                    data-event="backColor"
                                                                                    data-value="#104A5A" title=""
                                                                                    aria-label="Eden"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Eden"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#085294"
                                                                                    data-event="backColor"
                                                                                    data-value="#085294" title=""
                                                                                    aria-label="Venice Blue"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Venice Blue"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#311873"
                                                                                    data-event="backColor"
                                                                                    data-value="#311873" title=""
                                                                                    aria-label="Meteorite"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Meteorite"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#731842"
                                                                                    data-event="backColor"
                                                                                    data-value="#731842" title=""
                                                                                    aria-label="Claret"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Claret"></button>
                                                                            </div>
                                                                            <div class="note-color-row"><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#630000"
                                                                                    data-event="backColor"
                                                                                    data-value="#630000" title=""
                                                                                    aria-label="Rosewood"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Rosewood"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#7B3900"
                                                                                    data-event="backColor"
                                                                                    data-value="#7B3900" title=""
                                                                                    aria-label="Cinnamon"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Cinnamon"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#846300"
                                                                                    data-event="backColor"
                                                                                    data-value="#846300" title=""
                                                                                    aria-label="Olive"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Olive"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#295218"
                                                                                    data-event="backColor"
                                                                                    data-value="#295218" title=""
                                                                                    aria-label="Parsley"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Parsley"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#083139"
                                                                                    data-event="backColor"
                                                                                    data-value="#083139" title=""
                                                                                    aria-label="Tiber"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Tiber"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#003163"
                                                                                    data-event="backColor"
                                                                                    data-value="#003163" title=""
                                                                                    aria-label="Midnight Blue"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Midnight Blue"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#21104A"
                                                                                    data-event="backColor"
                                                                                    data-value="#21104A" title=""
                                                                                    aria-label="Valentino"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Valentino"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#4A1031"
                                                                                    data-event="backColor"
                                                                                    data-value="#4A1031" title=""
                                                                                    aria-label="Loulou"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Loulou"></button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div><button type="button"
                                                                            class="note-color-select btn btn-light btn-default"
                                                                            data-event="openPalette"
                                                                            data-value="backColorPicker">Select</button><input
                                                                            type="color" id="backColorPicker"
                                                                            class="note-btn note-color-select-btn"
                                                                            value="#FFFF00"
                                                                            data-event="backColorPalette">
                                                                    </div>
                                                                    <div class="note-holder-custom"
                                                                        id="backColorPalette" data-event="backColor">
                                                                        <div class="note-color-palette">
                                                                            <div class="note-color-row"><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#FFFFFF"
                                                                                    data-event="backColor"
                                                                                    data-value="#FFFFFF" title=""
                                                                                    aria-label="#FFFFFF"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="#FFFFFF"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#FFFFFF"
                                                                                    data-event="backColor"
                                                                                    data-value="#FFFFFF" title=""
                                                                                    aria-label="#FFFFFF"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="#FFFFFF"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#FFFFFF"
                                                                                    data-event="backColor"
                                                                                    data-value="#FFFFFF" title=""
                                                                                    aria-label="#FFFFFF"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="#FFFFFF"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#FFFFFF"
                                                                                    data-event="backColor"
                                                                                    data-value="#FFFFFF" title=""
                                                                                    aria-label="#FFFFFF"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="#FFFFFF"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#FFFFFF"
                                                                                    data-event="backColor"
                                                                                    data-value="#FFFFFF" title=""
                                                                                    aria-label="#FFFFFF"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="#FFFFFF"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#FFFFFF"
                                                                                    data-event="backColor"
                                                                                    data-value="#FFFFFF" title=""
                                                                                    aria-label="#FFFFFF"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="#FFFFFF"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#FFFFFF"
                                                                                    data-event="backColor"
                                                                                    data-value="#FFFFFF" title=""
                                                                                    aria-label="#FFFFFF"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="#FFFFFF"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#FFFFFF"
                                                                                    data-event="backColor"
                                                                                    data-value="#FFFFFF" title=""
                                                                                    aria-label="#FFFFFF"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="#FFFFFF"></button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="note-palette">
                                                                    <div class="note-palette-title">Text Color</div>
                                                                    <div><button type="button"
                                                                            class="note-color-reset btn btn-light btn-default"
                                                                            data-event="removeFormat"
                                                                            data-value="foreColor">Reset to
                                                                            default</button></div>
                                                                    <div class="note-holder" data-event="foreColor">
                                                                        <!-- fore colors -->
                                                                        <div class="note-color-palette">
                                                                            <div class="note-color-row"><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#000000"
                                                                                    data-event="foreColor"
                                                                                    data-value="#000000" title=""
                                                                                    aria-label="Black"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Black"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#424242"
                                                                                    data-event="foreColor"
                                                                                    data-value="#424242" title=""
                                                                                    aria-label="Tundora"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Tundora"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#636363"
                                                                                    data-event="foreColor"
                                                                                    data-value="#636363" title=""
                                                                                    aria-label="Dove Gray"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Dove Gray"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#9C9C94"
                                                                                    data-event="foreColor"
                                                                                    data-value="#9C9C94" title=""
                                                                                    aria-label="Star Dust"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Star Dust"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#CEC6CE"
                                                                                    data-event="foreColor"
                                                                                    data-value="#CEC6CE" title=""
                                                                                    aria-label="Pale Slate"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Pale Slate"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#EFEFEF"
                                                                                    data-event="foreColor"
                                                                                    data-value="#EFEFEF" title=""
                                                                                    aria-label="Gallery"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Gallery"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#F7F7F7"
                                                                                    data-event="foreColor"
                                                                                    data-value="#F7F7F7" title=""
                                                                                    aria-label="Alabaster"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Alabaster"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#FFFFFF"
                                                                                    data-event="foreColor"
                                                                                    data-value="#FFFFFF" title=""
                                                                                    aria-label="White"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="White"></button>
                                                                            </div>
                                                                            <div class="note-color-row"><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#FF0000"
                                                                                    data-event="foreColor"
                                                                                    data-value="#FF0000" title=""
                                                                                    aria-label="Red"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Red"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#FF9C00"
                                                                                    data-event="foreColor"
                                                                                    data-value="#FF9C00" title=""
                                                                                    aria-label="Orange Peel"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Orange Peel"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#FFFF00"
                                                                                    data-event="foreColor"
                                                                                    data-value="#FFFF00" title=""
                                                                                    aria-label="Yellow"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Yellow"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#00FF00"
                                                                                    data-event="foreColor"
                                                                                    data-value="#00FF00" title=""
                                                                                    aria-label="Green"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Green"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#00FFFF"
                                                                                    data-event="foreColor"
                                                                                    data-value="#00FFFF" title=""
                                                                                    aria-label="Cyan"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Cyan"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#0000FF"
                                                                                    data-event="foreColor"
                                                                                    data-value="#0000FF" title=""
                                                                                    aria-label="Blue"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Blue"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#9C00FF"
                                                                                    data-event="foreColor"
                                                                                    data-value="#9C00FF" title=""
                                                                                    aria-label="Electric Violet"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Electric Violet"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#FF00FF"
                                                                                    data-event="foreColor"
                                                                                    data-value="#FF00FF" title=""
                                                                                    aria-label="Magenta"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Magenta"></button>
                                                                            </div>
                                                                            <div class="note-color-row"><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#F7C6CE"
                                                                                    data-event="foreColor"
                                                                                    data-value="#F7C6CE" title=""
                                                                                    aria-label="Azalea"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Azalea"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#FFE7CE"
                                                                                    data-event="foreColor"
                                                                                    data-value="#FFE7CE" title=""
                                                                                    aria-label="Karry"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Karry"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#FFEFC6"
                                                                                    data-event="foreColor"
                                                                                    data-value="#FFEFC6" title=""
                                                                                    aria-label="Egg White"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Egg White"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#D6EFD6"
                                                                                    data-event="foreColor"
                                                                                    data-value="#D6EFD6" title=""
                                                                                    aria-label="Zanah"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Zanah"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#CEDEE7"
                                                                                    data-event="foreColor"
                                                                                    data-value="#CEDEE7" title=""
                                                                                    aria-label="Botticelli"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Botticelli"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#CEE7F7"
                                                                                    data-event="foreColor"
                                                                                    data-value="#CEE7F7" title=""
                                                                                    aria-label="Tropical Blue"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Tropical Blue"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#D6D6E7"
                                                                                    data-event="foreColor"
                                                                                    data-value="#D6D6E7" title=""
                                                                                    aria-label="Mischka"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Mischka"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#E7D6DE"
                                                                                    data-event="foreColor"
                                                                                    data-value="#E7D6DE" title=""
                                                                                    aria-label="Twilight"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Twilight"></button>
                                                                            </div>
                                                                            <div class="note-color-row"><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#E79C9C"
                                                                                    data-event="foreColor"
                                                                                    data-value="#E79C9C" title=""
                                                                                    aria-label="Tonys Pink"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Tonys Pink"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#FFC69C"
                                                                                    data-event="foreColor"
                                                                                    data-value="#FFC69C" title=""
                                                                                    aria-label="Peach Orange"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Peach Orange"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#FFE79C"
                                                                                    data-event="foreColor"
                                                                                    data-value="#FFE79C" title=""
                                                                                    aria-label="Cream Brulee"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Cream Brulee"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#B5D6A5"
                                                                                    data-event="foreColor"
                                                                                    data-value="#B5D6A5" title=""
                                                                                    aria-label="Sprout"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Sprout"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#A5C6CE"
                                                                                    data-event="foreColor"
                                                                                    data-value="#A5C6CE" title=""
                                                                                    aria-label="Casper"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Casper"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#9CC6EF"
                                                                                    data-event="foreColor"
                                                                                    data-value="#9CC6EF" title=""
                                                                                    aria-label="Perano"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Perano"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#B5A5D6"
                                                                                    data-event="foreColor"
                                                                                    data-value="#B5A5D6" title=""
                                                                                    aria-label="Cold Purple"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Cold Purple"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#D6A5BD"
                                                                                    data-event="foreColor"
                                                                                    data-value="#D6A5BD" title=""
                                                                                    aria-label="Careys Pink"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Careys Pink"></button>
                                                                            </div>
                                                                            <div class="note-color-row"><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#E76363"
                                                                                    data-event="foreColor"
                                                                                    data-value="#E76363" title=""
                                                                                    aria-label="Mandy"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Mandy"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#F7AD6B"
                                                                                    data-event="foreColor"
                                                                                    data-value="#F7AD6B" title=""
                                                                                    aria-label="Rajah"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Rajah"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#FFD663"
                                                                                    data-event="foreColor"
                                                                                    data-value="#FFD663" title=""
                                                                                    aria-label="Dandelion"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Dandelion"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#94BD7B"
                                                                                    data-event="foreColor"
                                                                                    data-value="#94BD7B" title=""
                                                                                    aria-label="Olivine"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Olivine"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#73A5AD"
                                                                                    data-event="foreColor"
                                                                                    data-value="#73A5AD" title=""
                                                                                    aria-label="Gulf Stream"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Gulf Stream"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#6BADDE"
                                                                                    data-event="foreColor"
                                                                                    data-value="#6BADDE" title=""
                                                                                    aria-label="Viking"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Viking"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#8C7BC6"
                                                                                    data-event="foreColor"
                                                                                    data-value="#8C7BC6" title=""
                                                                                    aria-label="Blue Marguerite"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Blue Marguerite"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#C67BA5"
                                                                                    data-event="foreColor"
                                                                                    data-value="#C67BA5" title=""
                                                                                    aria-label="Puce"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Puce"></button>
                                                                            </div>
                                                                            <div class="note-color-row"><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#CE0000"
                                                                                    data-event="foreColor"
                                                                                    data-value="#CE0000" title=""
                                                                                    aria-label="Guardsman Red"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Guardsman Red"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#E79439"
                                                                                    data-event="foreColor"
                                                                                    data-value="#E79439" title=""
                                                                                    aria-label="Fire Bush"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Fire Bush"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#EFC631"
                                                                                    data-event="foreColor"
                                                                                    data-value="#EFC631" title=""
                                                                                    aria-label="Golden Dream"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Golden Dream"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#6BA54A"
                                                                                    data-event="foreColor"
                                                                                    data-value="#6BA54A" title=""
                                                                                    aria-label="Chelsea Cucumber"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Chelsea Cucumber"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#4A7B8C"
                                                                                    data-event="foreColor"
                                                                                    data-value="#4A7B8C" title=""
                                                                                    aria-label="Smalt Blue"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Smalt Blue"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#3984C6"
                                                                                    data-event="foreColor"
                                                                                    data-value="#3984C6" title=""
                                                                                    aria-label="Boston Blue"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Boston Blue"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#634AA5"
                                                                                    data-event="foreColor"
                                                                                    data-value="#634AA5" title=""
                                                                                    aria-label="Butterfly Bush"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Butterfly Bush"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#A54A7B"
                                                                                    data-event="foreColor"
                                                                                    data-value="#A54A7B" title=""
                                                                                    aria-label="Cadillac"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Cadillac"></button>
                                                                            </div>
                                                                            <div class="note-color-row"><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#9C0000"
                                                                                    data-event="foreColor"
                                                                                    data-value="#9C0000" title=""
                                                                                    aria-label="Sangria"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Sangria"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#B56308"
                                                                                    data-event="foreColor"
                                                                                    data-value="#B56308" title=""
                                                                                    aria-label="Mai Tai"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Mai Tai"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#BD9400"
                                                                                    data-event="foreColor"
                                                                                    data-value="#BD9400" title=""
                                                                                    aria-label="Buddha Gold"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Buddha Gold"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#397B21"
                                                                                    data-event="foreColor"
                                                                                    data-value="#397B21" title=""
                                                                                    aria-label="Forest Green"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Forest Green"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#104A5A"
                                                                                    data-event="foreColor"
                                                                                    data-value="#104A5A" title=""
                                                                                    aria-label="Eden"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Eden"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#085294"
                                                                                    data-event="foreColor"
                                                                                    data-value="#085294" title=""
                                                                                    aria-label="Venice Blue"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Venice Blue"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#311873"
                                                                                    data-event="foreColor"
                                                                                    data-value="#311873" title=""
                                                                                    aria-label="Meteorite"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Meteorite"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#731842"
                                                                                    data-event="foreColor"
                                                                                    data-value="#731842" title=""
                                                                                    aria-label="Claret"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Claret"></button>
                                                                            </div>
                                                                            <div class="note-color-row"><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#630000"
                                                                                    data-event="foreColor"
                                                                                    data-value="#630000" title=""
                                                                                    aria-label="Rosewood"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Rosewood"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#7B3900"
                                                                                    data-event="foreColor"
                                                                                    data-value="#7B3900" title=""
                                                                                    aria-label="Cinnamon"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Cinnamon"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#846300"
                                                                                    data-event="foreColor"
                                                                                    data-value="#846300" title=""
                                                                                    aria-label="Olive"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Olive"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#295218"
                                                                                    data-event="foreColor"
                                                                                    data-value="#295218" title=""
                                                                                    aria-label="Parsley"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Parsley"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#083139"
                                                                                    data-event="foreColor"
                                                                                    data-value="#083139" title=""
                                                                                    aria-label="Tiber"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Tiber"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#003163"
                                                                                    data-event="foreColor"
                                                                                    data-value="#003163" title=""
                                                                                    aria-label="Midnight Blue"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Midnight Blue"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#21104A"
                                                                                    data-event="foreColor"
                                                                                    data-value="#21104A" title=""
                                                                                    aria-label="Valentino"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Valentino"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#4A1031"
                                                                                    data-event="foreColor"
                                                                                    data-value="#4A1031" title=""
                                                                                    aria-label="Loulou"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="Loulou"></button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div><button type="button"
                                                                            class="note-color-select btn btn-light btn-default"
                                                                            data-event="openPalette"
                                                                            data-value="foreColorPicker">Select</button><input
                                                                            type="color" id="foreColorPicker"
                                                                            class="note-btn note-color-select-btn"
                                                                            value="#000000"
                                                                            data-event="foreColorPalette">
                                                                    </div>
                                                                    <div class="note-holder-custom"
                                                                        id="foreColorPalette" data-event="foreColor">
                                                                        <div class="note-color-palette">
                                                                            <div class="note-color-row"><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#FFFFFF"
                                                                                    data-event="foreColor"
                                                                                    data-value="#FFFFFF" title=""
                                                                                    aria-label="#FFFFFF"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="#FFFFFF"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#FFFFFF"
                                                                                    data-event="foreColor"
                                                                                    data-value="#FFFFFF" title=""
                                                                                    aria-label="#FFFFFF"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="#FFFFFF"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#FFFFFF"
                                                                                    data-event="foreColor"
                                                                                    data-value="#FFFFFF" title=""
                                                                                    aria-label="#FFFFFF"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="#FFFFFF"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#FFFFFF"
                                                                                    data-event="foreColor"
                                                                                    data-value="#FFFFFF" title=""
                                                                                    aria-label="#FFFFFF"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="#FFFFFF"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#FFFFFF"
                                                                                    data-event="foreColor"
                                                                                    data-value="#FFFFFF" title=""
                                                                                    aria-label="#FFFFFF"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="#FFFFFF"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#FFFFFF"
                                                                                    data-event="foreColor"
                                                                                    data-value="#FFFFFF" title=""
                                                                                    aria-label="#FFFFFF"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="#FFFFFF"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#FFFFFF"
                                                                                    data-event="foreColor"
                                                                                    data-value="#FFFFFF" title=""
                                                                                    aria-label="#FFFFFF"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="#FFFFFF"></button><button
                                                                                    type="button" class="note-color-btn"
                                                                                    style="background-color:#FFFFFF"
                                                                                    data-event="foreColor"
                                                                                    data-value="#FFFFFF" title=""
                                                                                    aria-label="#FFFFFF"
                                                                                    data-toggle="button" tabindex="-1"
                                                                                    data-original-title="#FFFFFF"></button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="note-btn-group btn-group note-para"><button
                                                            type="button" class="note-btn btn btn-light btn-sm"
                                                            tabindex="-1" title=""
                                                            aria-label="Unordered list (CTRL+SHIFT+NUM7)"
                                                            data-original-title="Unordered list (CTRL+SHIFT+NUM7)"><i
                                                                class="note-icon-unorderedlist"></i></button><button
                                                            type="button" class="note-btn btn btn-light btn-sm"
                                                            tabindex="-1" title=""
                                                            aria-label="Ordered list (CTRL+SHIFT+NUM8)"
                                                            data-original-title="Ordered list (CTRL+SHIFT+NUM8)"><i
                                                                class="note-icon-orderedlist"></i></button>
                                                    </div>
                                                    <div class="note-btn-group btn-group note-insert"><button
                                                            type="button" class="note-btn btn btn-light btn-sm"
                                                            tabindex="-1" title="" aria-label="Picture"
                                                            data-original-title="Picture"><i
                                                                class="note-icon-picture"></i></button><button
                                                            type="button" class="note-btn btn btn-light btn-sm"
                                                            tabindex="-1" title="" aria-label="Link (CTRL+K)"
                                                            data-original-title="Link (CTRL+K)"><i
                                                                class="note-icon-link"></i></button><button
                                                            type="button" class="note-btn btn btn-light btn-sm"
                                                            tabindex="-1" title="" aria-label="Video"
                                                            data-original-title="Video"><i
                                                                class="note-icon-video"></i></button>
                                                    </div>
                                                </div>
                                                <div class="note-editing-area">
                                                    <div class="note-handle">
                                                        <div class="note-control-selection" style="display: none;">
                                                            <div class="note-control-selection-bg"></div>
                                                            <div class="note-control-holder note-control-nw"></div>
                                                            <div class="note-control-holder note-control-ne"></div>
                                                            <div class="note-control-holder note-control-sw"></div>
                                                            <div class="note-control-sizing note-control-se"></div>
                                                            <div class="note-control-selection-info"></div>
                                                        </div>
                                                    </div><textarea class="note-codable"
                                                        aria-multiline="true"></textarea>
                                                    <div class="note-editable card-block" contenteditable="true"
                                                        role="textbox" aria-multiline="true" spellcheck="true"
                                                        autocorrect="true" style="height: 100px;"></div>
                                                </div>
                                                <output class="note-status-output" role="status"
                                                    aria-live="polite"></output>
                                                <div class="note-statusbar" role="status">
                                                    <div class="note-resizebar" aria-label="Resize">
                                                        <div class="note-icon-bar"></div>
                                                        <div class="note-icon-bar"></div>
                                                        <div class="note-icon-bar"></div>
                                                    </div>
                                                </div>
                                                <div class="note-popover popover in note-link-popover bottom"
                                                    style="display: none;">
                                                    <div class="arrow"></div>
                                                    <div class="popover-content note-children-container"><span><a
                                                                target="_blank"></a>&nbsp;</span>
                                                        <div class="note-btn-group btn-group note-link"><button
                                                                type="button" class="note-btn btn btn-light btn-sm"
                                                                tabindex="-1" title="" aria-label="Edit"
                                                                data-original-title="Edit"><i
                                                                    class="note-icon-link"></i></button><button
                                                                type="button" class="note-btn btn btn-light btn-sm"
                                                                tabindex="-1" title="" aria-label="Unlink"
                                                                data-original-title="Unlink"><i
                                                                    class="note-icon-chain-broken"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="note-popover popover in note-image-popover bottom"
                                                    style="display: none;">
                                                    <div class="arrow"></div>
                                                    <div class="popover-content note-children-container">
                                                        <div class="note-btn-group btn-group note-resize"><button
                                                                type="button" class="note-btn btn btn-light btn-sm"
                                                                tabindex="-1" title="" aria-label="Resize full"
                                                                data-original-title="Resize full"><span
                                                                    class="note-fontsize-10">100%</span></button><button
                                                                type="button" class="note-btn btn btn-light btn-sm"
                                                                tabindex="-1" title="" aria-label="Resize half"
                                                                data-original-title="Resize half"><span
                                                                    class="note-fontsize-10">50%</span></button><button
                                                                type="button" class="note-btn btn btn-light btn-sm"
                                                                tabindex="-1" title="" aria-label="Resize quarter"
                                                                data-original-title="Resize quarter"><span
                                                                    class="note-fontsize-10">25%</span></button><button
                                                                type="button" class="note-btn btn btn-light btn-sm"
                                                                tabindex="-1" title="" aria-label="Original size"
                                                                data-original-title="Original size"><i
                                                                    class="note-icon-rollback"></i></button>
                                                        </div>
                                                        <div class="note-btn-group btn-group note-float"><button
                                                                type="button" class="note-btn btn btn-light btn-sm"
                                                                tabindex="-1" title="" aria-label="Float Left"
                                                                data-original-title="Float Left"><i
                                                                    class="note-icon-float-left"></i></button><button
                                                                type="button" class="note-btn btn btn-light btn-sm"
                                                                tabindex="-1" title="" aria-label="Float Right"
                                                                data-original-title="Float Right"><i
                                                                    class="note-icon-float-right"></i></button><button
                                                                type="button" class="note-btn btn btn-light btn-sm"
                                                                tabindex="-1" title="" aria-label="Remove float"
                                                                data-original-title="Remove float"><i
                                                                    class="note-icon-rollback"></i></button>
                                                        </div>
                                                        <div class="note-btn-group btn-group note-remove"><button
                                                                type="button" class="note-btn btn btn-light btn-sm"
                                                                tabindex="-1" title="" aria-label="Remove Image"
                                                                data-original-title="Remove Image"><i
                                                                    class="note-icon-trash"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="note-popover popover in note-table-popover bottom"
                                                    style="display: none;">
                                                    <div class="arrow"></div>
                                                    <div class="popover-content note-children-container">
                                                        <div class="note-btn-group btn-group note-add"><button
                                                                type="button"
                                                                class="note-btn btn btn-light btn-sm btn-md"
                                                                tabindex="-1" title="" aria-label="Add row below"
                                                                data-original-title="Add row below"><i
                                                                    class="note-icon-row-below"></i></button><button
                                                                type="button"
                                                                class="note-btn btn btn-light btn-sm btn-md"
                                                                tabindex="-1" title="" aria-label="Add row above"
                                                                data-original-title="Add row above"><i
                                                                    class="note-icon-row-above"></i></button><button
                                                                type="button"
                                                                class="note-btn btn btn-light btn-sm btn-md"
                                                                tabindex="-1" title="" aria-label="Add column left"
                                                                data-original-title="Add column left"><i
                                                                    class="note-icon-col-before"></i></button><button
                                                                type="button"
                                                                class="note-btn btn btn-light btn-sm btn-md"
                                                                tabindex="-1" title="" aria-label="Add column right"
                                                                data-original-title="Add column right"><i
                                                                    class="note-icon-col-after"></i></button>
                                                        </div>
                                                        <div class="note-btn-group btn-group note-delete">
                                                            <button type="button"
                                                                class="note-btn btn btn-light btn-sm btn-md"
                                                                tabindex="-1" title="" aria-label="Delete row"
                                                                data-original-title="Delete row">
                                                                <i class="note-icon-row-remove"></i>
                                                            </button>
                                                            <button type="button"
                                                                class="note-btn btn btn-light btn-sm btn-md"
                                                                tabindex="-1" title="" aria-label="Delete column"
                                                                data-original-title="Delete column">
                                                                <i class="note-icon-col-remove"></i>
                                                            </button>
                                                            <button type="button"
                                                                class="note-btn btn btn-light btn-sm btn-md"
                                                                tabindex="-1" title="" aria-label="Delete table"
                                                                data-original-title="Delete table">
                                                                <i class="note-icon-trash"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end mt-2">
                                        <button disabled="disabled" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 event displayNone">
                            <div class="no-data-found-wrapper text-center p-primary">
                                <img src="https://careerhollic.com/recruitment/images/no_data.svg" alt=""
                                    class="mb-primary">
                                <p class="mb-0 text-center">Nothing to show here</p>
                                <p class="mb-0 text-center text-secondary font-size-90">This candidate have no event yet
                                </p>
                                <p class="mb-0 text-center text-secondary font-size-90">Thank you</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 attachments displayNone">
                            <div id="attachments" class="tab-pane fade show active">
                                <div class="min-height-200">
                                    <div class="default-base-color rounded p-4 mb-primary">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="mb-0 text-primary">Resume - Moumita Manna</p>
                                            <div class="d-flex justify-content-start"><a
                                                    href="https://careerhollic.com/recruitment/storage/attachments/adobe_scan16-_dec-2022-639efa7bb834e.pdf"
                                                    target="_blank"
                                                    class="text-muted default-base-color width-30 height-30 rounded d-inline-flex align-items-center justify-content-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-download size-14">
                                                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                        <polyline points="7 10 12 15 17 10"></polyline>
                                                        <line x1="12" y1="15" x2="12" y2="3"></line>
                                                    </svg></a>
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

    @endsection

    <style>
    .dataTables_wrapper {
        padding: 30px;
    }

    .allbtn span {
        line-height: 1.8;
        width: 74px;
    }
    .allbtn a {
        line-height: 1.8;
        width: 50px;
    }


    .customized-radio {
        cursor: pointer;
        display: inline-block;
        margin: 0 1rem 0 0;
        padding-left: 30px;
        position: relative;
    }

    .three-dots:after {
        cursor: pointer;
        color: #444;
        content: '\2807';
        font-size: 20px;
        padding: 0 5px;
    }

    .no-img {
        align-items: center;
        background-color: var(--avatar-no-image-bg);
        color: var(--avatar-no-image-font);
        display: flex;
        font-size: 14px;
        justify-content: center;
        height: 50px;
        width: 50px;

    }

    .avatar-shadow {
        box-shadow: -2px 2px 4px 0 rgba(0, 0, 0, .2) !important;
    }

    .rounded-circle {
        border-radius: 50% !important;

    }

    .fonts {
        font-size: 50%;
    }

    .col222 {
        margin-top: 30px;
    }

    .displayNone {
        display: none;

    }

    .displayNone2 {
        display: none !important;

    }
    </style>
    <!-- <script src="{{asset('https://code.jquery.com/jquery-3.6.1.min.js')}}"></script> -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.2.min.js"></script> -->
    <script src="{{asset('https://code.jquery.com/jquery-3.6.1.min.js')}}"></script>

    <script>
    $(document).ready(function() {
        $('.notestData').click(function() {
            $('.timelineData').addClass('displayNone2');
            $('.notest').removeClass('displayNone');
        })
        $('.timeline').click(function() {
            $('.timelineData').removeClass('displayNone2');
            $('.notest').addClass('displayNone');
        })
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.candidatesData').click(function(e) {
            alert('hii');
            e.preventDefault();
            let id = $(this).attr('data-id');
            $.ajax({
                type: 'POST',
                url: "{{ url('/condidate_data/') }}",
                data: {
                    id: id
                },
                success: function(data) {
                    // console.log(data.data);
                    $('#showConditate').modal('show');
                    let app_id = data.data.applicant_id;
                }

            });
        })
    });
    </script>
    <script>
    $(document).ready(function() {
        $('.eventdata').click(function() {
            $('.timelineData').addClass('displayNone2');
            $('.event').removeClass('displayNone');
        })
        $('.timeline').click(function() {
            $('.timelineData').removeClass('displayNone2');
            $('.event').addClass('displayNone');
        })
    });
    </script>
    <script>
    $(document).ready(function() {
        $('.attachmentsdata').click(function() {
            $('.timelineData').addClass('displayNone2');
            $('.attachments').removeClass('displayNone');
        })
        $('.timeline').click(function() {
            $('.timelineData').removeClass('displayNone2');
            $('.attachments').addClass('displayNone');
        })
    });
    </script>