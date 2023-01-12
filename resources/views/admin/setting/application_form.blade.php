@extends('layouts.app')
@section('content')


<div class="col-lg-12">
    <div class="white_card card_height_100 mb_30">
        <div class="white_card_header">
            <div class="box_header m-0">
                <div class="main-title">
                    <h3 class="m-0">Create New Job</h3>
                </div>
            </div>
        </div>
        <div class="white_card_body">
            <div class="card-body">
                <form action="" method="post">
                    @csrf
                    <div class="row mb-3">
                        <div class="mb-4">
                            <div class="note  p-4" style="background-color:rgba(255,204,23,0.09);">
                                <p class="m-1">View only: You can not modify basic information setting.</p>
                            </div>
                        </div>
                        <div class="table-responsive mb-2">
                            <table class="table table-fixed">
                                <thead>
                                    <tr>
                                        <th class="">Fields</th>
                                        <th>Type</th>
                                        <th>Require an answer</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="">
                                            <div class="d-inline-flex align-items-center ">
                                                <div>
                                                    <!-- <label
                                                        class="custom-control form-check form-switch d-inline border-switch mb-0 mr-3 disabled">
                                                        <input type="checkbox" name="field_show" id="field-name-0"
                                                            disabled="disabled" class="form-check-input " checked
                                                            value="true">
                                                        <span class="border-switch-control-indicator"></span>
                                                    </label> -->
                                                </div>
                                                <label for="field-name-0" class="mb-0">
                                                    First Name
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-capitalize">
                                                Text
                                            </p>
                                        </td>
                                        <td>
                                            <div>
                                                <div class="customized-checkbox checkbox-default">
                                                    <input type="checkbox" name="field_require" id="field-require-0"
                                                        disabled="disabled" value="true" checked>
                                                    <label for="field-require-0" class="">
                                                        True
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w-50">
                                            <div class="d-inline-flex align-items-center ml-4">
                                                <div>
                                                    <!-- <label
                                                        class="custom-control form-check form-switch d-inline border-switch mb-0 mr-3 disabled">
                                                        <input type="checkbox" name="field_show" id="field-name-1"
                                                            disabled="disabled" class="form-check-input " value="true"
                                                            checked>
                                                        <span class="border-switch-control-indicator"></span>
                                                    </label> -->
                                                </div>
                                                <label for="field-name-1" class="mb-0">Last Name</label>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-capitalize">Text</p>
                                        </td>
                                        <td>
                                            <div>
                                                <div class="customized-checkbox checkbox-default">
                                                    <input type="checkbox" name="field_require" id="field-require-1"
                                                        disabled="disabled" value="true" checked>
                                                    <label for="field-require-1" class="">True</label>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w-50">
                                            <div class="d-inline-flex align-items-center ml-4">
                                                <div>
                                                    <!-- <label
                                                        class="custom-control form-check form-switch d-inline border-switch mb-0 mr-3 disabled">
                                                        <input type="checkbox" name="field_show" id="field-name-2"
                                                            disabled="disabled" class="form-check-input " value="true"
                                                            checked>
                                                        <span class="border-switch-control-indicator"></span>
                                                    </label> -->
                                                </div>
                                                <label for="field-name-2" class="mb-0">Email</label>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-capitalize">Email</p>
                                        </td>
                                        <td>
                                            <div>
                                                <div class="customized-checkbox checkbox-default">
                                                    <input type="checkbox" name="field_require" id="field-require-2"
                                                        disabled="disabled" value="true" checked>
                                                    <label for="field-require-2" class="">True</label>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w-50">
                                            <div class="d-inline-flex align-items-center ml-4">
                                                <div>
                                                    <!-- <label
                                                        class="custom-control form-check form-switch d-inline border-switch mb-0 mr-3 disabled">
                                                        <input type="checkbox" name="field_show" id="field-name-3"
                                                            disabled="disabled" class="form-check-input " value="true"
                                                            checked>
                                                        <span class="border-switch-control-indicator"></span>
                                                    </label> -->
                                                </div>
                                                <label for="field-name-3" class="mb-0">Gender</label>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-capitalize">Radio</p>
                                        </td>
                                        <td>
                                            <div>
                                                <div class="customized-checkbox checkbox-default">
                                                    <input type="checkbox" name="field_require" id="field-require-3"
                                                        disabled="disabled" value="true" checked>
                                                    <label for="field-require-3" class="">True</label>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w-50">
                                            <div class="d-inline-flex align-items-center ml-4">
                                                <div>
                                                    <!-- <label
                                                        class="custom-control form-check form-switch d-inline border-switch mb-0 mr-3 disabled">
                                                        <input type="checkbox" name="field_show" id="field-name-4"
                                                            disabled="disabled" class="form-check-input " value="true"
                                                            checked>
                                                        <span class="border-switch-control-indicator"></span>
                                                    </label> -->
                                                </div>
                                                <label for="field-name-4" class="mb-0">Date of birth</label>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-capitalize">Date</p>
                                        </td>
                                        <td>
                                            <div>
                                                <div class="customized-checkbox checkbox-default">
                                                    <input type="checkbox" name="field_require" id="field-require-4"
                                                        disabled="disabled" value="false">
                                                    <label for="field-require-4" class="">False</label>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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