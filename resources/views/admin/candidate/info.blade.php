@extends('layouts.app')
@section('content')
<script src="{{asset('https://code.jquery.com/jquery-3.6.1.min.js')}}"></script>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
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
                        <form method="post" action="{{url('admin/candidates/create')}}">
                            @csrf
                            <div class="row mb-3">
                                
                                <div class="col-md-6 mt-3">
                                    <label for="">First Name</label>
                                    <input type="text" name="first_name" placeholder="Enter First Name"
                                        class="form-control" id="">
                                </div>

                              
                                <div class="col-md-6 mt-3">
                                    <label for="">Last Name</label>
                                    <input type="text" name="last_name" placeholder="Enter Last Name"
                                        class="form-control" id="">
                                </div>

                               
                                <div class="col-md-6 mt-3">
                                    <label for="">Email</label>
                                    <input type="Email" name="email" placeholder="Enter Email" class="form-control"
                                        value="{{$email}}" id="">
                                </div>

                               
                                <div class="col-md-6 mt-3">
                                    <label for="">Gender</label>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <input type="radio" name="gender" id="" value="male">
                                            <span class="outside"><span class="inside"></span></span>
                                            <label for="">Male</label>
                                        </div>
                                        <div class="col-md-2">
                                            <input type="radio" name="gender" id="" value="female">
                                            <label for="">Female</label>
                                        </div>
                                        <div class="col-md-2">
                                            <input type="radio" name="gender" id="" value="other">
                                            <label for="">Other</label>
                                        </div>
                                    </div>

                                </div>

                             
                                <div class="col-md-6 mt-3">
                                    <label for="">Date Of Birth</label>
                                    <input type="date" name="last_submission_date" placeholder="" value="09-12-2022"
                                        class="form-control" id="">

                                </div>
                                @inject('jobs', 'App\Http\Controllers\MasterController')
                              
                                <div class="col-md-6 mt-3">
                                    <label for="">Job Post</label>
                                    <select name="job_post_id" id="" class="form-control">
                                        @foreach($jobs::JobType() as $val)
                                        <option value="{{$val['id']}}">{{$val['name']}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                
                                <div class="col-md-12 mt-3">
                                    <label for="">Upload resume</label>
                                    <input type="file" placeholder="Job Post" class="form-control">
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
@endsection