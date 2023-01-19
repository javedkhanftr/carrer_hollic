@extends('layouts.app')
@section('content')
<link rel="stylesheet"
    href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">
<meta name="csrf-token" content="{{ csrf_token() }}" />
<div class="toast bg-success text-light" role="alert" aria-live="assertive" aria-atomic="true">

    <div class="toast-body">
        Careeer Page Upadeted Successfully
    </div>
</div>
<section>


</section>
<section>
    <div class="row">
        <input type="hidden" name="id" class="id" value="{{$jobpost->id}}">
        <div class="col-md-12 ">
            <div class=" card mt-3 shadow p-3 mb-5 bg-body rounded">
                @inject('jobsData', 'App\Http\Controllers\MasterController')
                <section>
                    <div class="container">
                        <div class=" ">
                            <div class="">
                                <div class="row mt-2 mb-2">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-10">
                                        <div class="editor-content">
                                            <div class="preview-content">
                                                <div class="preview">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div
                                                                class="d-flex flex-column align-items-center mb-2 text-end">
                                                                <img width="20%" src="{{asset('img/careerhollic.png')}}"
                                                                    alt="" class="candidate-viewable-icon img-fluid">
                                                            </div>
                                                            <div class="text-center mb-2">
                                                                <h1 class="mb-2 headingmain"
                                                                    style="font-size: 50px; font-weight: 700; letter-spacing: 1px; color: rgb(49, 49, 49);">
                                                                    {{$jobpost->name}}
                                                                </h1>
                                                                <div class="addheading displayNone">

                                                                    <div class="input-group mb-2">
                                                                        <input type="text"
                                                                            class="form-control addmainheading"
                                                                            value="{{$jobpost->name}}">
                                                                        <div class="input-group-append">
                                                                            <span
                                                                                class="input-group-text headingaddmain">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    stroke="currentColor"
                                                                                    stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    class="feather feather-save">
                                                                                    <path
                                                                                        d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z">
                                                                                    </path>
                                                                                    <polyline
                                                                                        points="17 21 17 13 7 13 7 21">
                                                                                    </polyline>
                                                                                    <polyline points="7 3 7 8 15 8">
                                                                                    </polyline>
                                                                                </svg>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <p class="mb-2 adddetaismain"
                                                                    style="font-size: 30px; font-weight: 300; letter-spacing: 1px; color: rgb(175, 177, 182);">
                                                                    {{$data->content->details}}
                                                                </p>
                                                                <div class="adddetailsall displayNone">

                                                                    <div class="input-group mb-2">
                                                                        <input type="text"
                                                                            class="form-control adddeatils"
                                                                            value="{{$data->content->details}}">
                                                                        <div class="input-group-append">
                                                                            <span
                                                                                class="input-group-text adddeatilsallmain">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    stroke="currentColor"
                                                                                    stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    class="feather feather-save">
                                                                                    <path
                                                                                        d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z">
                                                                                    </path>
                                                                                    <polyline
                                                                                        points="17 21 17 13 7 13 7 21">
                                                                                    </polyline>
                                                                                    <polyline points="7 3 7 8 15 8">
                                                                                    </polyline>
                                                                                </svg>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <p class="mt-2 getvacancy"
                                                                    style="font-size: 20px; font-weight: 300; letter-spacing: 1px; color: rgb(55, 88, 179);">
                                                                    Vacancy - <font class="countvacancy">
                                                                        {{$jobpost->vacancy_count}}</font>
                                                                </p>
                                                                <div class="adddallVacancy displayNone">

                                                                    <div class="input-group mb-2">
                                                                        <input type="text"
                                                                            class="form-control addvacancy"
                                                                            value="{{$jobpost->vacancy_count}}">
                                                                        <div class="input-group-append">
                                                                            <span
                                                                                class="input-group-text addcountvacancy">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    stroke="currentColor"
                                                                                    stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    class="feather feather-save">
                                                                                    <path
                                                                                        d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z">
                                                                                    </path>
                                                                                    <polyline
                                                                                        points="17 21 17 13 7 13 7 21">
                                                                                    </polyline>
                                                                                    <polyline points="7 3 7 8 15 8">
                                                                                    </polyline>
                                                                                </svg>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 text-end">
                                                        <a href="{{url('admin/dashboard/job_post/'.$jobpost->slug.'/applyjob')}}"
                                                                            class="btn btn-sm btn-outline-primary "
                                                                            style="border-radius: 1.0rem;">Apply now</a>
                                                        </div>
                                                    </div>

                                                    <div class="editor-body">
                                                        <div class="row">
                                                            <div class="col-md-9"></div>
                                                            <div class="col-md-3">
                                                                <div class="editor-group-action mb-2 d-flex">

                                                                    <button type="button"
                                                                        class="btn  text-primary editbodySection">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none" stroke="currentColor"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-edit">
                                                                            <path
                                                                                d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
                                                                            </path>
                                                                            <path
                                                                                d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z">
                                                                            </path>
                                                                        </svg>
                                                                    </button>
                                                                    <button type="button"
                                                                        class="btn  text-primary savebodySection">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none" stroke="currentColor"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-check">
                                                                            <polyline points="20 6 9 17 4 12">
                                                                            </polyline>
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @foreach($data->content->bodySection as $item)
                                                        <div class="allbodysection">

                                                            <div class="databody">
                                                                <div class="card shadow mt-4">
                                                                    <div class="card-body">
                                                                        <div class="mb-5 ">
                                                                            <h5 class="desctitle"
                                                                                style="font-size: 27px; font-weight: 600; letter-spacing: 0px; color: rgb(49, 49, 49);">
                                                                                {{$item->headings}}
                                                                                <hr>
                                                                            </h5>
                                                                            <p class="descdesc"
                                                                                style="font-family: emoji; font-size: 19px; font-weight: 300; letter-spacing: 0px; color: rgb(49, 49, 49);">
                                                                                {{$item->description}}
                                                                            </p>
                                                                            <hr>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="headingsdescription displayNone">
                                                                <div class="card shadow mt-4">
                                                                    <div class="card-body">
                                                                        <div class="mb-5 ">
                                                                            <div class="row">
                                                                                <div class="col-md-12 mb-3">
                                                                                    <input type="text" name=""
                                                                                        value="{{$item->headings}}"
                                                                                        class="form-control addheadingsbody"
                                                                                        id="">
                                                                                </div>
                                                                                <!-- <div class="col-md-1 mb-3">
                                                                                    <span
                                                                                        class="btn btn-sm btn-success"><i
                                                                                            class="fa fa-trash"></i></span>
                                                                                </div> -->
                                                                                <hr>
                                                                                <div class="col-md-12 ">
                                                                                    <textarea name="" id="" cols="30"
                                                                                        rows="10"
                                                                                        class="form-control adddescriptionbody"> {{$item->description}}</textarea>
                                                                                    <hr>
                                                                                </div>
                                                                            </div>



                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        @endforeach
                                                    </div>

                                                    <div class="text-center py-4">
                                                        <button class="btn  btn-primary  saveallData">Submit</button>
                                                    </div>
                                                    <div class="text-center py-4">
                                                        Copyright @ 2021 by Career Hollic
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
            </div>
        </div>

    </div>
</section>



@endsection
<style>
.toast {
    position: absolute;
    top: 30px;
    right: 380px;
    border-radius: 12px;
    background: #fff;
    padding: 20px 35px 20px 25px;
    box-shadow: 0 6px 20px -5px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    transform: translateX(calc(100% + 30px));
    /* transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.35); */
    /* z-index: 1; */
}

.tostData {
    z-index: 1;
}

.active {
    background-color: var(--icon-hover-bg);
    border-color: #4466f2;
    color: #4466f2;
}

.job-card {
    background-color: rgba(68, 102, 242, .1);
    border-left: 3px solid #4466f2;
    border-radius: .25rem;
    height: 100%;
    padding: 2rem;

}

.displayNone {
    display: none;

}

.iconData {

    position: absolute;
    top: 9px;
    left: 95%;

}
</style>
<script src="{{asset('https://code.jquery.com/jquery-3.6.1.min.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script>
$(document).ready(function() {
    $('.headingmain').click(function() {
        $('.headingmain').addClass('displayNone');
        $('.addheading').removeClass('displayNone');
    });
    $('.headingaddmain').click(function() {
        let val = $('.addmainheading').val();
        $('.headingmain').removeClass('displayNone');
        $('.addheading').addClass('displayNone');
        $('.headingmain').html(val);
    });
    $('.adddetaismain').click(function() {
        $('.adddetaismain').addClass('displayNone');
        $('.adddetailsall').removeClass('displayNone');
    });
    $('.adddeatilsallmain').click(function() {
        let val = $('.adddeatils').val();
        $('.adddetaismain').removeClass('displayNone');
        $('.adddetailsall').addClass('displayNone');
        $('.adddetaismain').html(val);
    });
    $('.getvacancy').click(function() {
        $('.getvacancy').addClass('displayNone');
        $('.adddallVacancy').removeClass('displayNone');
    });
    $('.addcountvacancy').click(function() {
        let val = $('.addvacancy').val();
        $('.getvacancy').removeClass('displayNone');
        $('.adddallVacancy').addClass('displayNone');
        $('.countvacancy').html(val);
    });
    $('.editbodySection').click(function() {
        $('.addbuttondata').removeClass('displayNone');
        $('.headingsdescription').removeClass('displayNone');
        $('.databody').addClass('displayNone');
    });
    $('.savebodySection').click(function() {
        let val1 = $('.addheadingsbody').val();
        let val2 = $('.adddescriptionbody').val();
        $('.addbuttondata').addClass('displayNone');
        $('.headingsdescription').addClass('displayNone');
        $('.databody').removeClass('displayNone');
        $('.desctitle').html(val1);
        $('.descdesc').html(val2);
    });
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".saveallData").click(function(e) {


        e.preventDefault();
        let id = $('.id').val();
        let val1 = $('.desctitle').text().trim();
        let val2 = $('.descdesc').text().trim();
        let vacancy = $('.countvacancy').text().trim();
        let bodyarr = [{
            "headings": val1,
            "description": val2,
        }];

        let title = $('.headingmain').text().trim();
        let details = $('.adddetaismain').text().trim();
        let data = [{
            'content': {
                'title': title,
                'subtitle': null,
                'details': details,
                'bodySection': bodyarr,
            }

        }];


        $.ajax({
            type: 'POST',
            url: "{{ url('admin/career_page/update/') }}",
            data: {
                id: id,
                data: data,
                vacancy: vacancy,
            },
            success: function(data) {
                console.log(data);
                location.reload();

            }
        });

    });
});
</script>