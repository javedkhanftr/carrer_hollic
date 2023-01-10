@extends('layouts.app')
@section('content')

<div class="col-lg-12">
    <div class="white_card card_height_100 mb_30">
        <div class="white_card_header">
            <div class="box_header m-0">
                <div class="main-title">
                    <h3 class="m-0">User Update</h3>
                </div>
            </div>
        </div>
        <div class="white_card_body">
            <div class="card-body">
                <form method="post">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-12 mt-3">
                            <label class="form-label" for="inputEmail4">First Name</label>
                            <input type="text" name="first_name" class="form-control" id="inputEmail4" placeholder="Enter First Name"  value="{{$user->first_name}}">
                        </div>
                        <div class=" col-md-12 mt-3">
                            <label class="form-label" for="">Last Name</label>
                            <input type="text" name="last_name" class="form-control" id="" placeholder="Enter Last Name" value="{{$user->last_name}}">
                        </div>
                    </div>


                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection