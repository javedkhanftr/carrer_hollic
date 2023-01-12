@extends('layouts.app')
@section('content')


<div class="col-lg-12">
    <div class="white_card card_height_100 mb_30">
        <div class="white_card_header">
            <div class="box_header m-0">
                <div class="main-title">
                    <h3 class="m-0">{{$key}}</h3>
                </div>
            </div>
        </div>
        <div class="white_card_body">
            <div class="card-body">
                <form action="" method="post">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="mb-2">
                                <div class="note ">
                                    <p class="m-1">Select what should be included or required in the apply form.</p>
                                </div>
                            </div>
                            <div class="table-responsive mb-2">
                                <table class="table table-fixed applicaton_add_data ">
                                    <thead>
                                        <tr class="">
                                            <th class="w-50">Fields</th>
                                            <th>Type</th>
                                            <th>Require an answer</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data_basic as $item)
                                        @if($item->key == $key)
                                        @foreach($item->fields as $val)
                                        <tr>
                                            <td>{{$val->name}}</td>
                                            <td>{{$val->type}}</td>
                                            <td class="test">
                                                @if($val->require == 'true')
                                                <input type='checkbox' checked class='changerequire' value='true'>
                                                <font class='true_false_change'>True</font>
                                                @else
                                                <input type='checkbox' class='changerequire' value='false'>
                                                <font class='true_false_change'>False</font>
                                                @endif
                                            </td>
                                            <td>
                                                <button class="btn btn-sm badge btn-primary "><i
                                                        class="fa fa-edit"></i></button>
                                                <button class="btn btn-sm badge btn-danger"><i
                                                        class="fa fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <button type="button"
                                class="btn primary-text-color d-inline-flex align-items-center px-0 text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-plus size-14 mr-2">
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                </svg>
                                Add more fields
                            </button>
                            
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