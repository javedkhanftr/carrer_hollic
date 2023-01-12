@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="white_card card_height_100 mb_30">
                <div class="white_card_header">
                    <div class="box_header m-0">
                        <div class="main-title">
                            <h3 class="m-0">Add Role</h3>
                        </div>
                    </div>
                </div>
                <div class="white_card_body">
                    <div class="card-body">
                        <form method="post">
                            @csrf
                            
                            <div class="row mb-3">

                                <div class="col-md-6 mt-3">
                                    <label for="">Name</label>
                                    <input type="text" name="role" value="{{$role->name}}" class="form-control " placeholder="Enter Role Name" id="recipient-name">
                                </div>
                               



                                <div class="col-md-2 mt-3">
                                    <label for="" class="text-light">h</label>
                                    <input type="submit" width="100px" class="btn btn-primary  form-control" value="Submit">
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
<script src="{{asset('https://code.jquery.com/jquery-3.6.1.min.js')}}"></script>
