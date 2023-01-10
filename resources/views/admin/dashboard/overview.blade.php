@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">


<div class="container ">
    <dic class="row mt-5">
    <input type="hidden" id="verifyEmail" value="{{$email}}">
        <div class="col-md-10 mb-4">
            <h3>Overview - {{$condidate_data->name}}</h3>
        </div>
        <div class="col-md-2">
            <button href="" class="btn btn-sm btn-primary form-control" data-bs-toggle="modal" data-bs-target="#verifyEmailData">Add Condidate</button>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <nav>
                        <div class=" mb-5">
                            <button class=" p-primary text-capitalize active Overview">
                                <span class="mr-2 ">
                                    <i class="fa fa-th pl-3 pr-3"></i>
                                    Overview
                                </span>
                            </button>
                            <a data-toggle="tab" href="#Candidates" class=" p-primary text-capitalize Candidates">
                                <span class="mr-2"> <i class="fa fa-user pl-3 pr-3"></i> Candidates</span>
                            </a>
                        </div>
                    </nav>
                    <div class="tab-content p-primary">
                        <div id="Overview" class="tab-pane fade show active">
                            <div class="p-primary">
                                <div class="overview-wrapper min-height-400">
                                    <div class="kanban-wrapper custom-scrollbar overflow-auto pb-3">
                                        <div class="table-responsive">
                                            <table class="table borderless">
                                                <tr>
                                                    @foreach($overview as $item)
                                                    <td>
                                                        <div class="kanban-column">
                                                            <div class="d-flex align-items-center kanban-stage-header">
                                                                <span
                                                                    class="width-15 height-15 bg-primary rounded mr-2"></span>
                                                                <h6 class="text-capitalize mb-0">

                                                                    <span
                                                                        class="spanData default-base-color rounded text-secondary px-2 py-1 d-inline-flex align-items-center justify-content-center"></span>
                                                                    <span>{{$item->name}}</span> <span>0</span>
                                                                </h6>
                                                            </div>
                                                            <div class="kanban-draggable-column"></div>
                                                        </div>
                                                    </td>
                                                    @endforeach
                                                </tr>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="Candidates" class="tab-pane fade show ">
                            <div class="table-responsive custom-scrollbar table-view-responsive py-primary">
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th track-by="0" class="datatable-th pt-0">
                                                <span class="font-size-default">
                                                    <span>Profile</span>
                                                </span>
                                            </th>
                                            <th track-by="1" class="datatable-th pt-0">
                                                <span class="font-size-default">
                                                    <span>Status</span>
                                                </span>
                                            </th>
                                            <th track-by="2" class="datatable-th pt-0">
                                                <span class="font-size-default">
                                                    <span>Reviews</span>
                                                </span>
                                            </th>
                                            <th track-by="3" class="datatable-th pt-0">
                                                <span class="font-size-default">
                                                    <span>Current Stage</span>
                                                </span>
                                            </th>
                                            <th track-by="4" class="datatable-th pt-0 text-right">
                                                <span class="font-size-default">Actions</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                    </tbody>
                                </table>
                                <div class="no-data-found-wrapper text-center p-primary">
                                    <img width="20%" src="https://careerhollic.com/recruitment/images/no_data.svg" alt="" class="mb-primary">
                                    <p class="mb-0 text-center">Nothing to show here</p>
                                    <p class="mb-0 text-center text-secondary font-size-90">Please add a new entity or
                                        manage the data table to see the content here</p>
                                    <p class="mb-0 text-center text-secondary font-size-90">Thank you</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </dic>
</div>
<div class="modal fade" id="verifyEmailData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Verify Email</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row mt-2 mb-2">
                    <div class="col-md-3">
                        <h6 class="mt-2">Email</h6>
                    </div>
                    <div class="col-md-9">
                        <input type="email" id="email" class="form-control" placeholder="Enter Email">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancle</button>
                <button type="button" class="btn btn-primary" id="EmailVerifyData">Save</button>
            </div>
        </div>
    </div>
</div>
<style>
.nav a {
    text-decoration: none;
    color: black;
    padding: 30px;
}

.active {
    border-bottom: 1px solid #4466f2;
    color: #4466f2 !important;
}

.spanData {
    height: 15px !important;
    width: 15px !important;
    margin-right: .5rem !important;
    border-radius: .25rem !important;
    background-color: #4466f2 !important;
    font-size: .935rem;

}
.displaynone{
    display: none !important;
}
</style>
@endsection
<script src="{{asset('https://code.jquery.com/jquery-3.6.1.min.js')}}"></script>
<script>
    $(document).ready(function(){
        $('.Overview').click(function(){
            
            $('#Overview').removeClass('displaynone')
            $('#Candidates').addClass('active')
            $('#Candidates').addClass('displaynone')

        })
    })
</script>