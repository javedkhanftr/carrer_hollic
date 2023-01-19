@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="white_card card_height_100 mb_30">
                <div class="white_card_header">
                    <div class="box_header m-0">
                        <div class="main-title">
                            <h3 class="m-0">Mange Users</h3>
                        </div>
                    </div>
                </div>
                <div class="white_card_body">
                    <div class="card-body">
                        <form method="post">
                            @csrf

                            <div class="row mb-3">
                                <div class="col-md-12 mt-3">
                                    <label for="">Select User</label>
                                    <select class="js-example-basic-multiple form-control" name="users[]" multiple="multiple">

                                        @foreach($user as $item)
                                        <option value="{{$item->id}}">{{$item->first_name.' '.$item->last_name}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            
                                <div class="col-md-12 mt-3">
                                    <label for="">Permison</label>
                                    <select name="permision" id="" class="form-control ">
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>



                                <div class="col-md-2 mt-3">
                                    <label for="" class="text-light">h</label>
                                    <input type="submit" width="100px" class="btn btn-primary  form-control"
                                        value="Submit">
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
<!-- Styles -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" />
<link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
<!-- Or for RTL support -->
<link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.rtl.min.css" />

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.full.min.js"></script>
<script>
$(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
</script>