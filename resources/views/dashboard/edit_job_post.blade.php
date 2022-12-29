@extends('layouts.app')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}" />
<div class="toast bg-success text-light" role="alert" aria-live="assertive" aria-atomic="true">

    <div class="toast-body">
        Careeer Page Upadeted Successfully
    </div>
</div>
<section>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">

        <div class="container-fluid">

            <!-- <a class="navbar-brand" href="#">Navbar</a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item active">
                        <a href="#" class="nav-link ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-monitor size-20 mr-2">
                                <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                                <line x1="8" y1="21" x2="16" y2="21"></line>
                                <line x1="12" y1="17" x2="12" y2="21"></line>
                            </svg>
                            Desktop
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-smartphone size-20 mr-2">
                                <rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect>
                                <line x1="12" y1="18" x2="12.01" y2="18"></line>
                            </svg>
                            Mobile
                        </a>
                    </li>
                </ul>
                <form class="d-flex">

                    <ul id="navbarToggle" class="nav nav-right collapse navbar-collapse">
                        <li class="nav-item mr-md-1">
                            <a href="#" class="nav-link change-toggler text-dark">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-maximize-2 size-20 mr-2 mr-md-0">
                                    <polyline points="15 3 21 3 21 9"></polyline>
                                    <polyline points="9 21 3 21 3 15"></polyline>
                                    <line x1="21" y1="3" x2="14" y2="10"></line>
                                    <line x1="3" y1="21" x2="10" y2="14"></line>
                                </svg>
                                <span class="d-md-none">Toggle editor</span>
                            </a>
                        </li>
                        <li class="nav-item mr-md-2">
                            <a href="#" class="nav-link view-section text-dark">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-eye size-20 mr-2 mr-md-0">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                    <circle cx="12" cy="12" r="3"></circle>
                                </svg>
                                <span class="d-md-none">View job</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link btn btn-primary btn-sm saveallData">
                                Save changes
                            </a>
                        </li>
                    </ul>

                </form>

            </div>

        </div>

    </nav>

</section>
<section>
    <div class="row">
        <div class="col-md-9 ">
            <div class=" card mt-3 shadow-sm p-3 mb-5 bg-body rounded">
                @inject('jobsData', 'App\Http\Controllers\MasterController')
                <section>
                    <div class="container">
                        <div class=" ">
                            <div class="">
                                <div class="row mt-5 mb-5">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-10">
                                        <div class="editor-content">
                                            <div class="preview-content">
                                                <div class="preview">
                                                    <div class="d-flex flex-column align-items-center mb-5 text-center">
                                                        <img src="https://careerhollic.com/recruitment/storage/icon/6317055e9f918."
                                                            alt="" class="candidate-viewable-icon img-fluid">
                                                    </div>
                                                    <div class="text-center mb-5">
                                                        <h1 class="mb-4"
                                                            style="font-size: 50px; font-weight: 700; letter-spacing: 1px; color: rgb(49, 49, 49);">
                                                            {{$jobpost->name}}
                                                        </h1>
                                                        <p class="mb-4"
                                                            style="font-size: 30px; font-weight: 300; letter-spacing: 1px; color: rgb(175, 177, 182);">
                                                            {{$jobpost->name}} - Description Here
                                                        </p>
                                                        <p
                                                            style="font-size: 20px; font-weight: 300; letter-spacing: 1px; color: rgb(55, 88, 179);">
                                                            {{ $jobsData::getJobType($jobpost->job_type_id) }} -
                                                            {{ $jobsData::getLoation($jobpost->company_location_id) }}
                                                        </p>
                                                        <p
                                                            style="font-size: 20px; font-weight: 300; letter-spacing: 1px; color: rgb(55, 88, 179);">
                                                            Vacancy - {{$jobpost->vacancy_count}}
                                                        </p>
                                                    </div>
                                                    <div class="editor-body">
                                                        @foreach($jobpost->job_post_settings->content->bodySection as $item)
                                                        <div class="mb-5">
                                                            <h5
                                                                style="font-size: 27px; font-weight: 600; letter-spacing: 0px; color: rgb(49, 49, 49);">
                                                                {{$item->headings}}

                                                            </h5>
                                                            <p
                                                                style="font-size: 19px; font-weight: 300; letter-spacing: 0px; color: rgb(49, 49, 49);">
                                                                {{$item->description}}
                                                            </p>
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                    <div class="apply-wrapper mb-5">
                                                        <div class="card "
                                                            style="background-color:#eef2ff; border:none;border-radius: 1.0rem;">
                                                            <div class="card-body">
                                                                <div class="row ">
                                                                    <div class="col-md-10">
                                                                        <h4>Apply for the post Back office</h4>
                                                                    </div>
                                                                    <div class="col-md-2 text-center">
                                                                        <a href=""
                                                                            class="btn btn-sm btn-outline-primary "
                                                                            style="border-radius: 1.0rem;">Apply now</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="text-center py-4">
                                                        <img width="30%"
                                                            src="https://careerhollic.com/recruitment/storage/logo/6317055e836fd."
                                                            alt=""
                                                            class="candidate-viewable-logo img-fluid d-block mx-auto">
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
        <div class="col-md-3 bg-white">
            <div class="mb-4 container mt-3" id="pageData">
                <h6 class="mb-3">Page styling</h6>
                @foreach($data->pageStyle->defaultView as $val)
                <div id="accordionExample" class="accordion ">
                    <div class="accordion-item">
                        <div id="headingOne" class="accordion-header  bg-light">
                            <button type="button" data-toggle="collapse" data-target="#{{$val->key}}"
                                aria-expanded="true" aria-controls="{{$val->key}}" data-id="name"
                                class="btn btn-block text-left">
                                {{$val->name}}
                            </button>

                        </div>
                        <div id="{{$val->key}}" aria-labelledby="headingOne" data-parent="#accordionExample"
                            class="collapse page">
                            <div class="accordion-content">
                                <div class="container">
                                    <div class="row mb-3">
                                        <div class="col-md-7 mt-3">
                                            <label for="titleFontSize">Font size</label>
                                        </div>
                                        <div class="col-md-5 mt-3">
                                            <input type="hidden" name="" data-id="key" value="{{$val->key}}">
                                            <input type="number" id="titleFontSize" class="form-control"
                                                data-id="fontSize" value="{{$val->fontSize}}">
                                        </div>
                                        <div class="col-md-7 mt-3">
                                            <label for="titleFontWeight"> Font weight</label>
                                        </div>
                                        <div class="col-md-5 mt-3">
                                            <input type="number" id="titleFontWeight" class="form-control"
                                                data-id="fontWeight" value="{{$val->fontWeight}}">
                                        </div>
                                        <div class="col-md-7 mt-3">
                                            <label for="titleLetterSpacing">Letter spacing</label>
                                        </div>
                                        <div class="col-md-5 mt-3">
                                            <input type="number" id="titleLetterSpacing" class="form-control"
                                                data-id="letterSpacing" value="{{$val->letterSpacing}}">
                                        </div>
                                        <div class="col-md-7 mt-3">
                                            <label for="titleColor">Color</label>
                                        </div>
                                        <div class="col-md-5 mt-3">
                                            <input type="color" id="titleColor" class="form-control" data-id="color"
                                                value="{{$val->color}}">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="mb-4 container mt-3">
                <h6 class="mb-3">Page blocks</h6>
                <div class="page-blocks">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 card bg-light ">
                                <div class="mt-2 mb-3 pageBlocks">
                                    <div class="form-check form-switch ml-4 mt-2 mb-2 h6 " id="pageBlocks">

                                        @if($data->pageBlocks->defaultView->header == 'true')
                                        <input class="form-check-input header" type="checkbox"
                                            id="flexSwitchCheckChecked1" checked>
                                        @else
                                        <input class="form-check-input header" type="checkbox"
                                            id="flexSwitchCheckChecked1">
                                        @endif

                                        <label class="form-check-label ml-2 "
                                            for="flexSwitchCheckChecked">Header</label>
                                    </div>
                                    <div class="form-check form-switch  ml-4 mt-2 mb-2 h6">
                                        @if($data->pageBlocks->defaultView->body == 'true')
                                        <input class="form-check-input body1" type="checkbox"
                                            id="flexSwitchCheckChecked2" checked>
                                        @else
                                        <input class="form-check-input body1" type="checkbox"
                                            id="flexSwitchCheckChecked2">
                                        @endif
                                        <label class="form-check-label ml-2" for="flexSwitchCheckChecked">Body</label>
                                    </div>
                                    <div class="form-check form-switch  ml-4 mt-2 mb-2 h6">
                                        @if($data->pageBlocks->defaultView->footer == 'true')
                                        <input class="form-check-input footer1" type="checkbox"
                                            id="flexSwitchCheckChecked3" checked>
                                        @else
                                        <input class="form-check-input footer1" type="checkbox"
                                            id="flexSwitchCheckChecked3">
                                        @endif
                                        <label class="form-check-label ml-2" for="flexSwitchCheckChecked">Footer</label>
                                    </div>
                                    <div class="form-check form-switch  ml-4 mt-2 mb-2 h6">
                                        @if($data->pageBlocks->defaultView->logo == 'true')
                                        <input class="form-check-input logo1" type="checkbox"
                                            id="flexSwitchCheckChecked4" checked>
                                        @else
                                        <input class="form-check-input logo1" type="checkbox"
                                            id="flexSwitchCheckChecked4">
                                        @endif
                                        <label class="form-check-label ml-2" for="flexSwitchCheckChecked">Logo</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
    $('#addSubtile').click(function() {
        $('.subtitleData').addClass('displayNone');
        $('.subtitle').removeClass('displayNone');
    })
    $('.iconData').click(function() {
        let subtitle = $('#subtitle').val();
        // alert()
        if (subtitle == '') {
            $('.subtitleData').removeClass('displayNone');

        } else {
            $('.addInputData').html(subtitle);
            $('.subtitleData').addClass('displayNone');
            $('.subtitle').addClass('displayNone');

        }
    })
    $('.addInputData').click(function() {
        $(this).addClass('displayNone');
        $('.subtitle').removeClass('displayNone');
    })
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.editData').click(function() {
        $('.headingData').addClass('displayNone');
        $('.descriptionBody').addClass('displayNone');
        $('.Addheading').removeClass('displayNone');
        $('.adddescriptionBody').removeClass('displayNone');
        $('.addAllData').removeClass('displayNone');
    });
    $('.savebodyData').click(function() {
        $('.headingData').removeClass('displayNone');
        $('.descriptionBody').removeClass('displayNone');
        $('.Addheading').addClass('displayNone');
        $('.adddescriptionBody').addClass('displayNone');
        $('.addAllData').addClass('displayNone');
        // let bodyarr=[];
        // $('#bodyData .databody').each(function() {
        //     let bodyobj = {};
        //     $(this).find('input,textarea').each(function() {

        //         let val = $(this).val();
        //         let key = $(this).attr('data-id');

        //         bodyobj[key] = val;

        //     })
        //     bodyarr.push(bodyobj);
        // });
        // console.log(bodyarr);
    });

    $(".saveallData").click(function(e) {

        e.preventDefault();
        let bodyarr = [];
        $('#bodyData .databody').each(function() {
            let bodyobj = {};
            $(this).find('h5,p').each(function() {

                let val = $(this).text();
                let key = $(this).attr('data-id');

                bodyobj[key] = val;

            })
            bodyarr.push(bodyobj);
        });
        // console.log(bodyarr);
        // return false;
        let pagearr = [];
        $('#pageData .accordion ').each(function() {
            let pageobj = {};
            $(this).find('button').each(function() {

                let val = $(this).text().trim();
                let key = $(this).attr('data-id');

                pageobj[key] = val;
                //    console.log(pageobj);

            })
            $(this).find('input').each(function() {

                let val = $(this).val();
                let key = $(this).attr('data-id');

                pageobj[key] = val;
                // console.log(pageobj);

            })
            pagearr.push(pageobj);
        });
        let checkbox1 = $('#flexSwitchCheckChecked1');
        let checkbox2 = $('#flexSwitchCheckChecked2');
        let checkbox3 = $('#flexSwitchCheckChecked3');
        let checkbox4 = $('#flexSwitchCheckChecked4');
        let header = checkbox1[0]['checked'];
        let body = checkbox2[0]['checked'];
        let footer = checkbox3[0]['checked'];
        let logo = checkbox4[0]['checked'];
        let title = $('#titleData').text().trim();
        let data = [{
            'job_post_settings': {
                'content': {
                    'title': title,
                    'subtitle': null,
                    'details': "Software",
                    'bodySection': bodyarr,
                },
                'pageStyle': {
                    'defaultView': pagearr,
                    'mobileView': pagearr,
                },
                'pageBlocks': {
                    'defaultView': {
                        header: header,
                        body: body,
                        footer: footer,
                        logo: logo,
                    },
                    'mobileView': {
                        header: header,
                        body: body,
                        footer: footer,
                        logo: logo,
                    },
                },
            },
            'name': title,
            'description': null,
        }];

        // console.log(data);
        // return false;

        $.ajax({
            type: 'POST',
            url: "{{ url('/career_page/update/') }}",
            data: {
                data: data
            },
            success: function(data) {
                // console.log(data.success);
                setTimeout(() => {
                    $('.toast').addClass('tostData');
                    var toastElList = [].slice.call(document.querySelectorAll(
                        '.toast'))
                    var toastList = toastElList.map(function(toastEl) {
                        return new bootstrap.Toast(toastEl)
                    })
                    toastList.forEach(toast => toast.show())
                    setTimeout(() => {
                        window.location.href = "career_page#";
                    }, 1000);
                }, 1000);
            }
        });

    });
})
</script>