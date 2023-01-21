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
                                    @if($user_id != '')
                                    @foreach($candidates_list as $candidates)
                                   
                                 
                                    <tr>
                                        <td>
                                            <div class="row">
                                                
                                                <div class="col-md-12  ml-2">
                                                    <a class="text-primary "
                                                        href="{{url('admin/condidate_data/'.$candidates->id)}}"
                                                        data-id="{{$candidates->id}}">{{$candidates->first_name.' '.$candidates->last_name}}<br>
                                                    <font style="font-size:10px;">
                                                            {{$candidates->email}}
                                                    
                                                    </font>
                                                    </a> <br>
                                                    <font style="font-size:10px;">
                                                    {{$candidates->mobile_number}}
                                                    
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
                                                    <span class="badge   text-capitalize bg-success statusChange" data-id="{{$candidates->id}}">Active</span>
                                                    @endif
                                                    @if( $candidates->status_id == '2')
                                                    <span class="badge   text-capitalize bg-danger statusChange"  data-id="{{$candidates->id}}">Inactive</span>
                                                    @endif
                                                    @if( $candidates->status_id == '3')
                                                    <span class="badge   text-capitalize statusChange"  data-id="{{$candidates->id}}"
                                                        style="background-color: #964ed8;">Invited</span>
                                                    @endif
                                                    @if( $candidates->status_id == '4')
                                                    <span class="badge   text-capitalize bg-primary  statusChange"  data-id="{{$candidates->id}}" >New</span>

                                                    @endif
                                                    @if( $candidates->status_id == '5')
                                                    <span class="badge   text-capitalize statusChange"  data-id="{{$candidates->id}}"
                                                        style="background-color: #964ed8;">In
                                                        Progress</span>
                                                    @endif
                                                    @if( $candidates->status_id == '6')
                                                    <span class="badge   text-capitalize bg-success statusChange"  data-id="{{$candidates->id}}">Hired</span>
                                                    @endif
                                                    @if( $candidates->status_id == '8')
                                                    <span class="badge   text-capitalize statusChange"  data-id="{{$candidates->id}}"
                                                        style="background-color: #fc6510;">Draft</span>
                                                    @endif
                                                    @if( $candidates->status_id == '9')
                                                    <span class="badge   text-capitalize bg-success statusChange"  data-id="{{$candidates->id}}">Active</span>
                                                    @endif
                                                    @if( $candidates->status_id == '10')
                                                    <span class="badge   text-capitalize bg-danger statusChange"  data-id="{{$candidates->id}}">Inactive</span>
                                                    @endif
                                                    @if( $candidates->status_id == '11')
                                                    <span class="badge   text-capitalize bg-primary statusChange"  data-id="{{$candidates->id}}">Pending</span>
                                                    @endif
                                                    @if( $candidates->status_id == '12')
                                                    <span class="badge   text-capitalize bg-success statusChange"  data-id="{{$candidates->id}}">Done</span>
                                                    @endif
                                                </div>
                                            </span>
                                        </td>
                                        <td>

                                            {{ $candidates->added_by }}
                                        </td>
                                        <td>
                                            {{ $condidateData::getstage($candidates->current_stage_id) }}
                                        </td>
                                        <td class="allbtn">
                                            <span class="badge  btn-success">{{ $condidateData::getjobapplication($candidates->applicant_id) }}</span>
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
                                   @else
                                   @foreach($candidates_list as $candidates)
                                   
                                    <tr>
                                        <td>
                                            <div class="row">
                                                
                                                <div class="col-md-12  ml-2">
                                                    <a class="text-primary "
                                                        href="{{url('admin/condidate_data/'.$candidates->id)}}"
                                                        data-id="{{$candidates->id}}">{{$candidates->first_name.' '.$candidates->last_name}}<br>
                                                    <font style="font-size:10px;">
                                                            {{$candidates->email}}
                                                    
                                                    </font>
                                                    </a> <br>
                                                    <font style="font-size:10px;">
                                                    {{$candidates->mobile_number}}
                                                    
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
                                                    <span class="badge   text-capitalize bg-success statusChange" data-id="{{$candidates->id}}">Active</span>
                                                    @endif
                                                    @if( $candidates->status_id == '2')
                                                    <span class="badge   text-capitalize bg-danger statusChange"  data-id="{{$candidates->id}}">Inactive</span>
                                                    @endif
                                                    @if( $candidates->status_id == '3')
                                                    <span class="badge   text-capitalize statusChange"  data-id="{{$candidates->id}}"
                                                        style="background-color: #964ed8;">Invited</span>
                                                    @endif
                                                    @if( $candidates->status_id == '4')
                                                    <span class="badge   text-capitalize bg-primary  statusChange"  data-id="{{$candidates->id}}" >New</span>

                                                    @endif
                                                    @if( $candidates->status_id == '5')
                                                    <span class="badge   text-capitalize statusChange"  data-id="{{$candidates->id}}"
                                                        style="background-color: #964ed8;">In
                                                        Progress</span>
                                                    @endif
                                                    @if( $candidates->status_id == '6')
                                                    <span class="badge   text-capitalize bg-success statusChange"  data-id="{{$candidates->id}}">Hired</span>
                                                    @endif
                                                    @if( $candidates->status_id == '8')
                                                    <span class="badge   text-capitalize statusChange"  data-id="{{$candidates->id}}"
                                                        style="background-color: #fc6510;">Draft</span>
                                                    @endif
                                                    @if( $candidates->status_id == '9')
                                                    <span class="badge   text-capitalize bg-success statusChange"  data-id="{{$candidates->id}}">Active</span>
                                                    @endif
                                                    @if( $candidates->status_id == '10')
                                                    <span class="badge   text-capitalize bg-danger statusChange"  data-id="{{$candidates->id}}">Inactive</span>
                                                    @endif
                                                    @if( $candidates->status_id == '11')
                                                    <span class="badge   text-capitalize bg-primary statusChange"  data-id="{{$candidates->id}}">Pending</span>
                                                    @endif
                                                    @if( $candidates->status_id == '12')
                                                    <span class="badge   text-capitalize bg-success statusChange"  data-id="{{$candidates->id}}">Done</span>
                                                    @endif
                                                </div>
                                            </span>
                                        </td>
                                        <td>

                                            {{ $candidates->added_by }}
                                        </td>
                                        <td>
                                            {{ $condidateData::getstage($candidates->current_stage_id) }}
                                        </td>
                                        <td class="allbtn">
                                          
                                        
                                            <span class="badge  btn-success">{{ $condidateData::getjobapplication($candidates->applicant_id) }}</span>
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
                                    @endif
                                 
                                   
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
                    <h5 class="modal-title" id="exampleModalLabel">Change Status</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{url('admin/candidates/change_status')}}" method="post">
                    @csrf
                    <input type="hidden" name="id" class="status_change_id">
                     <div class="modal-body">
                    <div class="row mt-2 mb-2">
                        <div class="col-md-3">
                            <h6 class="mt-2">Status</h6>
                        </div>
                        <div class="col-md-9">
                           <select name="status_id" id="" class="form-control">
                                @foreach($status as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                           </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
                </form>
               
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
    .headerchange{
        z-index: -1 !important;
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
        $('.statusChange').click(function() {
            let id=$(this).attr('data-id');
            
           $('#verifyEmailData').modal('show');
           $('.fade').removeClass('modal-backdrop');
           $('.fade').addClass('modal');
           $('.header_iner').addClass('headerchange');
           $('.status_change_id').val(id);
        });
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