@extends('layouts.app')
@section('content')

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
                <form method="post" >
                        @csrf
                        <div class="row mb-3">
                        <div class="col-md-6 mt-3">
                                <label for="">Form Date</label>
                                <input type="date" name="form_date" placeholder="Enter First Name" class="form-control"
                                    id="" value="{{$wfh->form_date}}">
                            </div>


                            <div class="col-md-6 mt-3">
                                <label for="">To Date</label>
                                <input type="date" name="to_date" placeholder="Enter Last Name" class="form-control"
                                    id="" value="{{$wfh->to_date}}">
                            </div>

                            <div class="col-md-6 mt-3">
                                <label for="">WFH(Day)</label>
                                <input type="text" name="day" placeholder="Enter Day" class="form-control" 
                                    id="" value="{{$wfh->day}}">
                            </div>

                            <div class="col-md-6 mt-3">
                                <label for="">Day Type</label>
                                <select class="form-select" name="day_type" aria-label="Default select example">
                        
                                    <option value="full_day" <?php echo $wfh->day_type == 'full_day' ?'selected':''?>>Full Day</option>
                                    <option value="1St-thalf" <?php echo $wfh->day_type == '1St-thalf' ?'selected':''?>>1St half Day</option>
                                    <option value="2St-thalf" <?php echo $wfh->day_type == '2St-thalf' ?'selected':''?>>2St half Day</option>
                                </select>
                            </div>
                            <div class="col-md-12 mt-3">
                                <label for="">Reason</label>
                                <textarea cols="" rows="3" class="form-control" name="reason">{{$wfh->reason}}</textarea>
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