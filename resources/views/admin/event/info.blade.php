@extends('layouts.app')
@section('content')




<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-5">
            <div class="white_card card_height_100 mb_30">
                <div class="white_card_header">
                    <div class="box_header m-0">
                        <div class="main-title">
                            <h3 class="m-0">Add Event</h3>
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
                                    <input type="text" name="event_name" placeholder="Enter Event Name" class="form-control" id="" >
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="">Event Start Date</label>
                                    <input type="date" name="event_start" placeholder="Enter Event Name" class="form-control" id="" >
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="">Event End Date</label>
                                    <input type="date" name="event_end" placeholder="Enter Event Name" class="form-control" id="" >
                                </div>
                                <div class="col-md-12 mt-3">
                                    <label for="">Event Assign</label>
                                    <select class="js-example-basic-multiple form-control" name="user_id" >

                                        @foreach($user as $item)
                                        <option value="{{$item->id}}">{{$item->first_name.' '.$item->last_name}}
                                        </option>
                                        @endforeach
                                    </select>
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

<style>
    .select2-container--default{
        height:38px !important;
    }
</style>
@endsection
<script src="{{asset('https://code.jquery.com/jquery-3.6.1.min.js')}}"></script>
<!-- Styles -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" />
<link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
<!-- Or for RTL support -->
<link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.rtl.min.css" />

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.full.min.js"></script>
<script>
$(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
</script>