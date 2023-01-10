@extends('layouts.app')
@section('content')




<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-5">
            <div class="white_card card_height_100 mb_30">
                <div class="white_card_header">
                    <div class="box_header m-0">
                        <div class="main-title">
                            <h3 class="m-0">Add Condiate</h3>
                        </div>
                    </div>
                </div>
                <div class="white_card_body">
                    <div class="card-body">
                        <form method="post" >
                            @csrf
                            <div class="row mb-3">

                                <div class="col-md-6 mt-3">
                                    <label for="">Event Name</label>
                                    <input type="text" name="event_name" placeholder="Enter Event Name" class="form-control" id="" value="{{$event->event_name}}">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="">Event Start Date</label>
                                    <input type="date" name="event_start" placeholder="Enter Event Name" class="form-control" id="" value="{{$event->event_start}}">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="">Event End Date</label>
                                    <input type="date" name="event_end" placeholder="Enter Event Name" class="form-control" id="" value="{{$event->event_end}}">
                                </div>
                                <div class="col-md-12 mt-3">
                                   <input type="submit" value="submit" class="btn btn-sm btn-primary">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


@endsection