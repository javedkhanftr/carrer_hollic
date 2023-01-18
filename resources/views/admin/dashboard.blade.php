@extends('layouts.app')
@section('content')
<style>
#sidebar_menu li a {
    text-decoration: none !important;
}
</style>
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet"
    href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css')}}" />
<link rel="stylesheet"
    href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css')}}" />
<link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css')}}" />
<div class="row">
    <div class="col-10">
        <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
            <div class="page_title_left d-flex align-items-center">
                <h3 class="f_s_25 f_w_700 dark_text mr_30">Dashboard</h3>

            </div>

        </div>
    </div>
    <div class="col-2 text-end">

        <form method="POST" action="{{ route('attendance') }}">
            {{ csrf_field() }}
            @if(!empty($attendance))

            @if($attendance->checkout != null)
            <button type="submit" name="checkin" value="1" class="btn btn-primary checkinData" data-id="1">Check
                In</button>
            @else
            <button type="submit" name="checkout" value="2" class="btn btn-primary checkinData" data-id="1">Check
                out</button>

            @endif

            @endif

            @if(empty($attendance))
            <button type="submit" name="checkin" value="1" class="btn btn-primary checkinData" data-id="1">Check
                In</button>
            @endif




        </form>
    </div>
</div>
<div class="row ">

    <div class="col-xl-12 ">
        <div class="white_card card_height_100 mb_30 user_crm_wrapper">
            <div class="row">
                <div class="col-lg-3">
                    <div class="single_crm">
                        <div class="crm_head bg-primary d-flex align-items-center justify-content-between">
                            <div class="thumb">
                                <img src="{{asset('img/crm/businessman.svg')}}" alt="">
                            </div>
                            <i class="fas fa-ellipsis-h f_s_11 white_text"></i>
                        </div>
                        <div class="crm_body">
                            <h4>{{ $user->count() }}</h4>
                            <p>Total User</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="single_crm ">
                        <div class="crm_head bg-warning crm_bg_1 d-flex align-items-center justify-content-between">
                            <div class="thumb">
                                <img src="{{asset('img/crm/customer.svg')}}" alt="">
                            </div>
                            <i class="fas fa-ellipsis-h f_s_11 white_text"></i>
                        </div>
                        <div class="crm_body">
                            <h4>{{$applicant->count()}}</h4>
                            <p>Total Condidate</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="single_crm">
                        <div class="crm_head bg-success crm_bg_2 d-flex align-items-center justify-content-between">
                            <div class="thumb">
                                <img src="{{asset('img/crm/infographic.svg')}}" alt="">
                            </div>
                            <i class="fas fa-ellipsis-h f_s_11 white_text"></i>
                        </div>
                        <div class="crm_body">
                            <h4>{{$job_posts->count()}}</h4>
                            <p>Total Jobs</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="single_crm">
                        <div class="crm_head bg-danger crm_bg_3 d-flex align-items-center justify-content-between">
                            <div class="thumb">
                                <img class="text-light" src="{{asset('img/menu-icon/3.svg')}}" alt="">
                            </div>
                            <i class="fas fa-ellipsis-h f_s_11 white_text"></i>
                        </div>
                        <div class="crm_body">
                            <h4>{{$events->count()}}</h4>
                            <p>Total Events</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="col-md-8 mt-2" height="auto">
        <div class="card">
            <div class="card-body">
                table
            </div>
        </div>



    </div>
    <div class="col-md-4 mt-2" height="auto">
        <!-- <h3>your to-dos</h3> -->
        <div class="card" >
            <div class="card-body">
                <div class="row text-center mb-5">


                    <div class="col-md-12 mt-2">
                        
                        <h4>Best Employee in this Month</h4>
                        <hr>
                        <div class="row mt-5">
                            <div class="col-md-12 text-center">
                                <!-- <h3 class="mt-1">{{$user_data->first_name.' '.$user_data->last_name}}</h3> -->
                                <div class="card shadow border-less" style="    border-top-left-radius: 80%;
    border-top-right-radius: 80%;
    border-bottom-left-radius: 80%;
    border-bottom-right-radius: 80%;
    height: 200px;
    width: 200px;
    margin-left: 70;">
                                    <div class="card-body">
                                        <img src="{{asset('img/'.$user_data->image)}}" class="mt-5" alt="">
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-md-1"></div>
                            <div class="col-md-5">
                                <select name="user_id" class="user_id" id=""
                                    style="width: 159px; height: 50px; padding-left: 10px; border: none; background: #f3f6f9;border-radius: 15%">
                                    <option selected disabled>Select Employee</option>
                                    @foreach($user as $item)
                                    <option value="{{$item->id}}">{{$item->first_name.' '.$item->last_name}}</option>
                                    @endforeach
                                </select>
                            </div> -->

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div><!-- Button trigger modal -->



</div>
@endsection
<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js')}}"></script>
<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js')}}"></script>
<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js')}}"></script>
<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js')}}"></script>
<script>
$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    let SITEURL1 = "{{url('admin/')}}";
    $('.user_id').change(function() {
        let user_id = $(this).val();
        // alert(user_id)
        $.ajax({
            url: SITEURL1 + "/best_employee/",
            data: {
                user_id: user_id,
            },
            type: "POST",
            success: function(data) {
                location.reload();
            }
        });
    });
    var hours = 0;
    var mins = 0;
    var seconds = 0;
    let val = $('.checkinData').val();
    // alert(val)
    if (val == '2') {
        startTimer();
    }

    function startTimer() {
        setTimeout(function() {
            seconds++;
            if (seconds > 59) {
                seconds = 0;
                mins++;
                if (mins > 59) {
                    mins = 0;
                    hours++;
                    if (hours < 10) {
                        $("#hours").text('0' + hours + ':')
                    } else $("#hours").text(hours + ':');
                }

                if (mins < 10) {
                    $("#mins").text('0' + mins + ':');
                } else $("#mins").text(mins + ':');
            }
            if (seconds < 10) {
                $("#seconds").text('0' + seconds);
            } else {
                $("#seconds").text(seconds);
            }


            startTimer();
        }, 1000);
    }
    var SITEURL = "{{ url('/') }}";

    var calendar = $('#full_calendar_events').fullCalendar({
        editable: true,
        editable: true,
        events: SITEURL + "/calendar-event",
        displayEventTime: true,
        eventRender: function(event, element, view) {
            if (event.allDay === 'true') {
                event.allDay = true;
            } else {
                event.allDay = false;
            }
        },
        selectable: true,
        selectHelper: true,
        select: function(event_start, event_end, allDay) {
            var event_name = prompt('Event Name:');
            if (event_name) {
                var event_start = $.fullCalendar.formatDate(event_start, "Y-MM-DD HH:mm:ss");
                var event_end = $.fullCalendar.formatDate(event_end, "Y-MM-DD HH:mm:ss");
                $.ajax({
                    url: SITEURL + "/calendar-crud-ajax",
                    data: {
                        event_name: event_name,
                        event_start: event_start,
                        event_end: event_end,
                        type: 'create'
                    },
                    type: "POST",
                    success: function(data) {
                        displayMessage("Event created.");
                        calendar.fullCalendar('renderEvent', {
                            id: data.id,
                            title: event_name,
                            start: event_start,
                            end: event_end,
                            allDay: allDay
                        }, true);
                        calendar.fullCalendar('unselect');
                    }
                });
            }
        },
        eventDrop: function(event, delta) {
            var event_start = $.fullCalendar.formatDate(event.start, "Y-MM-DD");
            var event_end = $.fullCalendar.formatDate(event.end, "Y-MM-DD");
            $.ajax({
                url: SITEURL + '/calendar-crud-ajax',
                data: {
                    title: event.event_name,
                    start: event_start,
                    end: event_end,
                    id: event.id,
                    type: 'edit'
                },
                type: "POST",
                success: function(response) {
                    displayMessage("Event updated");
                }
            });
        },
        eventClick: function(event) {
            var eventDelete = confirm("Are you sure?");
            if (eventDelete) {
                $.ajax({
                    type: "POST",
                    url: SITEURL + '/calendar-crud-ajax',
                    data: {
                        id: event.id,
                        type: 'delete'
                    },
                    success: function(response) {
                        calendar.fullCalendar('removeEvents', event.id);
                        displayMessage("Event removed");
                    }
                });
            }
        }
    });
});

function displayMessage(message) {
    toastr.success(message, 'Event');
}
</script>