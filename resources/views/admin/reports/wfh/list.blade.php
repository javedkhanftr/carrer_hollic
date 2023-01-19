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
                                <h4>Work Home List</h4>
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
                                        <a href="{{url('admin/wfh/add')}}" class="btn_1">Add
                                            New</a>
                                    </div>
                                </div>
                            </div>
                            <div class="QA_table mb_30">

                                <table class="table lms_table_active ">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Date</th>
                                            <th>Day Type</th>
                                            <th>Reason</th>
                                            <th>Approval Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $i=1;
                                        @endphp
                                        @foreach($wfhDataGet as $value)
                                        <tr>
                                            <td>{{ $i++}}</td>
                                            <td>{{ $value->form_date}}</td>
                                            <td>{{ $value->day_type}}</td>
                                            <td>{{ $value->reason}}</td>
                                            <td>
                                                @if($value->status_approval == 2)
                                                <select name="status_approval" id="" class="btn btn-sm btn-success status_approval" data-id="{{$value->id}}">
                                                    <option value="" selected disabled>Pending</option>
                                                    <option value="1">Accept</option>
                                                    <option value="0">Reject</option>
                                                </select>
                                                @elseif($value->status_approval == 1)
                                                        <span class="btn btn-sm btn-primary" style="width: 90px;">Accept</span>
                                                @else
                                                 <span class="btn btn-sm btn-danger" style="width: 90px;">Reject</span>
                                                    
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{url('admin/wfh/edit/'.$value->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                                <button data-id="{{$value->id}}" class="btn btn-sm btn-danger deleteData"><i
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
                    window.location.href="delete/"+id;
                   }, 1500);
                    
                } else {
                    swal("Your imaginary file is safe!");
                }
            });
    });
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.status_approval').change(function(){
        let status_approval=$(this).val();
        let id=$(this).attr('data-id');
     
    let SITEURL = "{{url('admin/wfh')}}";
        // alert(user_id)
        $.ajax({
            url: SITEURL + "/change_status/",
            data: {
                id:id,
                status_approval: status_approval,
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