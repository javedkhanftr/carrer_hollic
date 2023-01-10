@extends('layouts.app')
@section('content')
<script src="{{asset('https://code.jquery.com/jquery-3.6.1.min.js')}}"></script>
<div class="container">
    <div class="col-lg-12 mt-5">
        <div class="white_card card_height_100 mb_30">
            <div class="white_card_header">
                <div class="box_header m-0">
                    <div class="main-title">
                        <h3 class="m-0">Add WFH</h3>
                    </div>
                </div>
            </div>
            <div class="white_card_body">
                <div class="card-body">
                <form method="post" action="{{route('wfh.store')}}">
                        @csrf
                        <div class="row mb-3">
                        <div class="col-md-6 mt-3">
                                <label for="">Form Date</label>
                                <input type="date" name="form_date" placeholder="Enter First Name" class="form-control"
                                    id="">
                            </div>


                            <div class="col-md-6 mt-3">
                                <label for="">To Date</label>
                                <input type="date" name="to_date" placeholder="Enter Last Name" class="form-control"
                                    id="">
                            </div>

                            <div class="col-md-6 mt-3">
                                <label for="">WFH(Day)</label>
                                <input type="text" name="day" placeholder="Enter Day" class="form-control" value=""
                                    id="">
                            </div>

                            <div class="col-md-6 mt-3">
                                <label for="">Day Type</label>
                                <select class="form-select" name="day_type" aria-label="Default select example">
                                    <option selected>Full Day</option>
                                    <option value="full_day">Full Day</option>
                                    <option value="1St-thalf">1St half Day</option>
                                    <option value="2St-thalf">2St half Day</option>
                                </select>
                            </div>
                            <div class="col-md-12 mt-3">
                                <label for="">Reason</label>
                                <textarea cols="" rows="3" class="form-control" name="reason"></textarea>
                            </div>


                            <div class="col-md-12 mt-3">
                                <button type="submit" width="100px" class="btn btn-primary btn-sm">Save</button>
                            </div>
                        </div>
                       
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
    <
</div>


@endsection