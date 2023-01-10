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

                                </div>
                            </div>
                            <div class="QA_table mb_30">

                                <table class="table lms_table_active ">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Event Name</th>
                                            <th>Event Start</th>
                                            <th>Event End</th>
                                            <th>Assign User</th>
                                            <!-- <th>Status</th> -->
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $i=1;
                                        @endphp
                                        @foreach($events as $value)
                                        <tr>
                                            <td>{{ $i++}}</td>
                                            <td>{{ $value->event_name}}</td>
                                            <td>{{ $value->event_start}}</td>

                                            <td>{{ $value->event_end}}</td>
                                            <td>
                                                @if($value->user_id != '0')
                                                    <span class="btn btn-sm btn-success" style="    width: 112px; border-radius: 15%;">Assigned</span>
                                                @else
                                                <input type="hidden" name="id" class="id" value="{{$value->id}}">
                                                <select name="user_id" class="user_id" id=""
                                                    style="     padding-left: 15px;width: 112px; height: 31px; border: none; background: blue; color: whitesmoke; border-radius: 15%;">
                                                    <option selected disabled>Assign User</option>
                                                    @foreach($user as $item)
                                                    <option value="{{$item->id}}">
                                                        {{$item->first_name.' '.$item->last_name}}</option>
                                                    @endforeach
                                                </select>
                                                @endif

                                            </td>
                                            <!-- <td>

                                            </td> -->
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
    $('.user_id').change(function() {
        let user_id = $(this).val();
        let id=$(this).siblings().val();
        $.ajax({
            url: SITEURL + "/assign",
            data: {
                id:id,
                user_id: user_id,
            },
            type: "POST",
            success: function(data) {
            //  console.log(data);
            location.reload();
            }
        });
    });
})
</script>