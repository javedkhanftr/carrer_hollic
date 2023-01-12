@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="white_card card_height_100 mb_30">
                <div class="white_card_header">
                    <div class="box_header m-0">
                        <div class="main-title">
                            <h3 class="m-0">Assign Job</h3>
                        </div>
                    </div>
                </div>
                <div class="white_card_body">
                    <div class="card-body">
                        <form method="post" action="{{url('admin/candidates/edit/'.$data->applicant_id)}}">
                            @csrf
                            <input type="hidden" name="job_applicatins_id" value="{{$data->id}}">
                            <div class="row mb-3">

                                <div class="col-md-6 mt-3">
                                    <label for="">Name</label>
                                    <input type="text" name="first_name" placeholder="Enter First Name"
                                        class="form-control" id="" value="{{$data->first_name.' '.$data->last_name}}"
                                        disabled>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="">Job</label>
                                    <select name="job" id="jobpost" class="form-control">
                                        @foreach($jobpost as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>

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

    </div>
</div>
<style>
.select2-container--default .select2-selection--single {

    background-color: #fff;
    border: 1px solid #ced4da !important;
    border-radius: 5px;
    height: 39px !important;
}

.select2-container--default .select2-selection--single .select2-selection__rendered {
    color: #444;
    line-height: 36px !important;
    margin-left: 6px;
}
</style>
@endsection
<script src="{{asset('https://code.jquery.com/jquery-3.6.1.min.js')}}"></script>
<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js')}}"></script>
<link href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css')}}" rel="stylesheet" />
<script>
$(document).ready(function() {
    $('#jobpost').select2();
});
</script>