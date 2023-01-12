@extends('layouts.app')
@section('content')


<div class="col-lg-12">
    <div class="white_card card_height_100 mb_30">
        <div class="white_card_header">
            <div class="box_header m-0">
                <div class="main-title">
                    <h3 class="m-0">Add Job Type</h3>
                </div>
            </div>
        </div>
        <div class="white_card_body">
            <div class="card-body">
                <form action="{{url('admin/job-setting/add_jobtype')}}" method="post">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-6 mb-4 mt-2">
                            <label for="">Name</label>
                            <input type="text" name="jobtype_name" class="form-control" placeholder="Enter Name" id="">
                        </div>
                        <div class="col-md-6 mb-4 mt-2">
                            <label for="">Brief</label>
                            <input type="text" name="jobtype_brief" class="form-control" placeholder="Enter Brief"
                                id="">
                        </div>
                        <div class="col-md-12">
                            <label for="" class="text-white">qw</label>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>
</div>
@endsection
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
<script src="{{asset('https://code.jquery.com/jquery-3.6.1.min.js')}}"></script>
<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js')}}"></script>
<link href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css')}}" rel="stylesheet" />
<script>
$(document).ready(function() {
    $('#job_type').select2();
    $('#department').select2();
    $('#Company_location').select2();
});
</script>