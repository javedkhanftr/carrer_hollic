@extends('layouts.app')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="main_content_iner ">
    <div class="container-fluid p-0">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="white_card card_height_100 mb_30">

                    <div class="white_card_body">
                        <div class="QA_section">
                            <div class="white_box_tittle list_header mt-5">
                                <h4>Event List</h4>
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
                                        <a href="{{url('admin/event/create')}}" class="btn_1">Add New</a>
                                    </div>

                                </div>
                            </div>
                            <div class="QA_table mb_30">

                                <table class="table lms_table_active ">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Event Name</th>
                                            <th>User</th>
                                            <th>Event Start</th>
                                            <th>Event End</th>
                                            <th>Status</th>
                                            <th>
                                            @if(empty($user[0]->permision == '1'))
                                            Best Employee
                                            @endif
                                            </th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @inject('jobsData', 'App\Http\Controllers\MasterController')
                                        @php
                                        $i=1;
                                        @endphp
                                        @foreach($events as $value)
                                        <tr>
                                            <td>{{ $i++}}</td>
                                            <td>{{ $value->event_name}}</td>
                                            <td>{{ $jobsData::getusername($value->user_id) }}</td>
                                            <td>{{ $value->event_start}}</td>

                                            <td>{{ $value->event_end}}</td>
                                            <td>
                                                @if($value->status == '0')
                                                <select name="status" id=""
                                                    class="btn btn-sm btn-success status_approval" data-id="{{$value->id}}" style="width: 102px;">
                                                    <option value="" selected disabled>Pending</option>
                                                    <option value="1">Accept</option>
                                                </select>
                                                @elseif($value->status == '1')
                                                <select name="status" id="" style="width: 102px;"
                                                    class="btn btn-sm btn-primary status_approval" data-id="{{$value->id}}">
                                                    <option value="" selected disabled>Accept</option>
                                                    <option value="2">Complate</option>
                                                </select>
                                                @else
                                                <span class="btn btn-sm btn-info text-light" style="width: 102px;">Complated</span>
                                                @endif

                                            </td>
                                            <td>
                                            @if(empty($user[0]->permision == '1'))
                                                <select name="user_id" id="" class="form-control btn btn-secondary addbestemployee" data-id="{{$value->user_id}}">
                                                    <option value="1">Yes</option>
                                                    <option value="0" selected>No</option>
                                                </select>
                                            @endif
                                           </td>
                                           
                                            <td>
                                                <a href="{{url('admin/event/edit/'.$value->id)}}"
                                                    class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                                <button data-id="{{$value->id}}"
                                                    class="btn btn-sm btn-danger deleteData"><i
                                                        class="fa fa-trash"></i></button>
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






@endsection
<script src="{{asset('https://code.jquery.com/jquery-3.6.3.min.js')}}"></script>
<script src="{{asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')}}"></script>
<script>
$(document).ready(function() {
    
    $('.deleteData').click(function() {
        let id = $(this).attr('data-id');
        

        swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this imaginary file!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    swal("Poof! Your imaginary file has been deleted!", {
                        icon: "success",
                    });
                    setTimeout(() => {
                        window.location.href = "event/delete/" + id;
                    }, 1500);

                } else {
                    swal("Your imaginary file is safe!");
                }
            });
    });
    var SITEURL = "{{ url('/admin/event/') }}";
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.addbestemployee').change(function(){
        let user_id = $(this).attr('data-id');
        let val=$(this).val();
      
      if (val == '1') {
      
        $.ajax({
            url: SITEURL + "/best_employee",
            data: {
                user_id: user_id,
                val:val,
            },
            type: "POST",
            success: function(data) {
                //  console.log(data);
                location.reload();
            }
        });
      }
      
    })
    $('.user_id').change(function() {
        let user_id = $(this).val();
        let id = $(this).siblings().val();
        $.ajax({
            url: SITEURL + "/assign",
            data: {
                id: id,
                user_id: user_id,
            },
            type: "POST",
            success: function(data) {
                //  console.log(data);
                location.reload();
            }
        });
    });

    $('.status_approval').change(function() {
        let status = $(this).val();
        let id = $(this).attr('data-id');
        let SITEURL = "{{url('admin/event')}}";
        // alert(user_id)
        $.ajax({
            url: SITEURL + "/change_status/",
            data: {
                id: id,
                status: status,
            },
            type: "POST",
            success: function(data) {
                // console.log(data);
                location.reload();
            }
        });

    })
})
</script>