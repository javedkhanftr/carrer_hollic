@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 mt-3 mb-3">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-center">Add Condiate</h3>
                    <hr>
                    <form method="post" action="{{url('candidates/create')}}">
                        @csrf


                        <div class="row">
                            <div class="col-md-3 mt-4">
                                <h6>First Name</h6>
                            </div>
                            <div class="col-md-9 mt-3">
                                <input type="text" name="first_name" placeholder="Enter First Name" class="form-control"
                                    id="">
                            </div>

                            <div class="col-md-3 mt-4">
                                <h6>Last Name</h6>
                            </div>
                            <div class="col-md-9 mt-3">
                                <input type="text" name="last_name" placeholder="Enter Last Name" class="form-control"
                                    id="">
                            </div>

                            <div class="col-md-3 mt-4">
                                <h6>Email</h6>
                            </div>
                            <div class="col-md-9 mt-3">
                                <input type="Email" name="email" placeholder="Enter Email" class="form-control"
                                    value="{{$email}}" id="">
                            </div>

                            <div class="col-md-3 mt-4">
                                <h6>Gender</h6>
                            </div>
                            <div class="col-md-9 mt-3">
                                <div class="row">
                                    <div class="col-md-4">
                                        <input type="radio" name="gender" id="" value="male">
                                        <span class="outside"><span class="inside"></span></span>
                                        <label for="">Male</label>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="radio" name="gender" id="" value="female">
                                        <label for="">Female</label>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="radio" name="gender" id="" value="other">
                                        <label for="">Other</label>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-3 mt-4">
                                <h6>Date Of Birth</h6>
                            </div>
                            <div class="col-md-9 mt-3">
                                <input type="date" name="last_submission_date" placeholder="" value="09-12-2022"
                                    class="form-control" id="">

                            </div>
                            @inject('jobs', 'App\Http\Controllers\MasterController')
                            <div class="col-md-3 mt-4">

                                <h6>Job Post</h6>
                            </div>
                            <div class="col-md-9 mt-3">
                                <select name="job_post_id" id="" class="form-control">
                                    @foreach($jobs::JobType() as $val)
                                    <option value="{{$val['id']}}">{{$val['name']}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-3 mt-4">
                                <h6>Upload resume</h6>
                            </div>
                            <div class="col-md-9 mt-3">
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
@endsection