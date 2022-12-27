@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 mt-3 mb-3">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-center">Update Condiate</h3>
                    <hr>
                    <form method="post">
                        @csrf
                        <input type="hidden" name="job_applicatins_id" value="{{$data->id}}">
                        <div class="row">
                            <div class="col-md-3 mt-4">
                                <h6>First Name</h6>
                            </div>
                            <div class="col-md-9 mt-3">
                                <input type="text" name="first_name" placeholder="Enter First Name" class="form-control"
                                    id="" value="{{$data->first_name}}">
                            </div>

                            <div class="col-md-3 mt-4">
                                <h6>Last Name</h6>
                            </div>
                            <div class="col-md-9 mt-3">
                                <input type="text" name="last_name" placeholder="Enter Last Name" class="form-control"
                                    id=""  value="{{$data->last_name}}">
                            </div>

                            <div class="col-md-3 mt-4">
                                <h6>Email</h6>
                            </div>
                            <div class="col-md-9 mt-3">
                                <input type="Email" name="email" placeholder="Enter Email" class="form-control" 
                                    id=""  value="{{$data->email}}">
                            </div>

                            <div class="col-md-3 mt-4">
                                <h6>Gender</h6>
                            </div>
                            <div class="col-md-9 mt-3">
                                <div class="row text-center">
                                    <div class="col-md-3">
                                        <input type="radio" name="gender" id="" value="male" <?php echo $data->gender == 'male' ? 'checked':''?>>
                                        <span class="outside"><span class="inside"></span></span>
                                        <label for="">Male</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="radio" name="gender" id="" value="female" <?php echo $data->gender == 'female' ? 'checked':''?>>
                                        <label for="">Female</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="radio" name="gender" id="" value="other" <?php echo $data->gender == 'other' ? 'checked':''?>>
                                        <label for="">Other</label>
                                    </div>
                                    <div class="col-md-3"></div>
                                </div>

                            </div>

                            <div class="col-md-3 mt-4">
                                <h6>Date Of Birth</h6>
                            </div>
                            <div class="col-md-9 mt-3">
                                <input type="date" name="last_submission_date" placeholder=""
                                    class="form-control" id=""  value="{{$data->date_of_birth}}">

                            </div>
                            @inject('jobs', 'App\Http\Controllers\MasterController')
                            <div class="col-md-3 mt-4">

                                <h6>Job Post</h6>
                            </div>
                            <div class="col-md-9 mt-3">
                                <select name="job_post_id" id="" class="form-control">
                                    @foreach($jobs::JobType() as $val)
                                    <option value="{{$val['id']}}" <?php echo $data->job_post_id == $val['id']?'selected':''?>>{{$val['name']}}</option>
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
                                <button type="submit" width="100px" class="btn btn-primary btn-sm">Update</button>
                            </div>
                        </div>



                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection