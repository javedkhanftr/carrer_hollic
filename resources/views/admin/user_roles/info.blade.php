@extends('layouts.app')
@section('content')

<div class="col-lg-12 col-sm-12 col-xl-12 col-md-12 mt-4">
    <div class="white_card card_height_100 mb_30">
        <div class="white_card_header">
            <div class="box_header m-0">
                <div class="main-title">
                    <h3 class="m-0">User Create</h3>
                </div>
            </div>
        </div>
        <div class="white_card_body">
            <div class="card-body">
                <form method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-6 mt-3">
                            <label class="form-label" for="inputEmail4">First Name</label>
                            <input type="text" name="first_name" class="form-control" id="inputEmail4" placeholder="Enter First Name" >
                        </div>
                        <div class=" col-md-6 mt-3">
                            <label class="form-label" for="">Last Name</label>
                            <input type="text" name="last_name" class="form-control" id="" placeholder="Enter Last Name" >
                        </div>
                        <div class="col-md-6 mt-3">
                            <label class="form-label" for="inputEmail4">Email </label>
                            <input type="email" name="email" class="form-control" id="" placeholder="Enter Email " >
                        </div>
                        <div class=" col-md-6 mt-3">
                            <label class="form-label" for="">Image</label>
                            <input type="file" name="image" class="form-control" id="" placeholder="Enter Image" >
                        </div>
                        <div class="col-md-6 mt-3">
                            <label class="form-label" for="inputEmail4">Password</label>
                            <input type="password" name="password" class="form-control" id="" placeholder="Enter Password" >
                        </div>
                       
                    </div>


                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection