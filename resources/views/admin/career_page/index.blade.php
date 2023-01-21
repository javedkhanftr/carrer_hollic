@extends('layouts.app')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}" />
<div class="toast bg-success text-light" role="alert" aria-live="assertive" aria-atomic="true">

    <div class="toast-body">
        Careeer Page Upadeted Successfully
    </div>
</div>
<style>
.card1 {
    background: #FFFFFF;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.27);
    border-radius: 10px;

}
</style>
<section>
    <div class="row">
        <div class="col-md-12 ">
            <div class=" card mt-3 shadow-sm p-3 mb-5 bg-body rounded">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5"></div>
                        <div class="col-md-2">

                            <img src="{{asset('img/careerhollic.png')}}" class="img-fluid" alt="logo">

                        </div>
                        <div class="col-md-5"></div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-8">
                                    <div class="text-center mt-5">

                                        <h1 class="mb-4"
                                            style="font-size: 40px; font-weight: 700; letter-spacing: 1px; color: rgb(49, 49, 49);"
                                            id="titleData">{{$data->content->title}}</h1>
                                        @if($data->content->subtitle == null)
                                        <div class="subtitleData">
                                            <p class="mb-4"
                                                style="font-size: 30px; font-weight: 300; letter-spacing: 1px; color: rgb(175, 177, 182);">
                                                <button class="btn btn-primary mb-4 " id="addSubtile">
                                                    Add subtitle
                                                </button>
                                            </p>

                                        </div>
                                        @else

                                        @endif





                                    </div>
                                </div>
                                <div class="col-md-2"></div>
                                <div class="col-md-12 text-center">
                                    <h1 class="addInputData"></h1>
                                </div>
                                <div class="col-md-12">
                                    <div class="subtitle displayNone">
                                        <svg class="iconData" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-save">
                                            <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z">
                                            </path>
                                            <polyline points="17 21 17 13 7 13 7 21"></polyline>
                                            <polyline points="7 3 7 8 15 8"></polyline>
                                        </svg>
                                        <input type="text" name="subtitle" class="form-control" id="subtitle">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-9"></div>
                                <div class="col-md-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="addAllData displayNone">
                                                <button type="button" class="btn text-primary AddBodyData">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-plus">
                                                        <line x1="12" y1="5" x2="12" y2="19"></line>
                                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                                    </svg>
                                                    <section></section>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <button type="button" class="btn editData text-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-edit">
                                                    <path
                                                        d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
                                                    </path>
                                                    <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z">
                                                    </path>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="col-md-4">
                                            <button type="button" class="btn text-primary savebodyData">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-check">
                                                    <polyline points="20 6 9 17 4 12"></polyline>
                                                </svg>
                                            </button>
                                        </div>



                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12" id="bodyData">
                            <div class="row">
                                @foreach($data->content->bodySection as $body)
                                <div class="col-md-6">
                                    <div class="card card1">
                                        <div class="card-body">
                                            <div class="mb-5 databody">
                                                <div class="headingData">
                                                    <h5 style="font-size: 20px; font-weight: 600; letter-spacing: 0px; color: rgb(49, 49, 49);"
                                                        data-id="headings">{{$body->headings}}</h5>
                                                    <hr>
                                                </div>
                                                <div class="Addheading displayNone mt-2">
                                                    <input type="text" name="headings_body" class="form-control"
                                                        value="{{$body->headings}}">
                                                    <hr>
                                                </div>
                                                <div class="descriptionBody">
                                                    <p class="text-dark" data-id="description">{{$body->description}}
                                                    </p>
                                                    <hr>
                                                </div>
                                                <div class="adddescriptionBody displayNone mt-3">
                                                    <textarea name="description_body" id="" cols="30" rows="10"
                                                        class="form-control">{{$body->description}}</textarea>
                                                    <hr>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>


                        </div>


                        <div class="col-md-12">
                            <div class="mb-5 mt-5">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4>
                                            Job Openings
                                        </h4>
                                    </div>
                                    <div class="col-md-6">
                                    <!-- <input id="myInput" class="form-control" type="text" placeholder="Search.."> -->
                                    <form method="post" action="{{ url('admin/career_page/') }}">
    @csrf
    <div class="row">
        <div class="col-md-10">
            <input type="text" name="search" value="{{$search}}" placeholder="Enter First Name" class="form-control">
        </div>
        <div class="col-md-2">
              <input type="submit" class="btn btn-primary" name="submit">
        </div>
    </div>
    
  
</form>
                                    </div>
                                </div>
                                <hr>
                            </div>

                            <div class="row" id="myTable">
                                @foreach($jobpost as $post)
                                <div class="col-12 mb-primary col-md-6 col-xl-4 mt-3">
                                    <div class="job-card">
                                        @inject('jobsData', 'App\Http\Controllers\MasterController')
                                        <a href="https://careerhollic.com/recruitment/public/job-post/a17372e2-c92a-43d4-8dcd-31d9917983ac/display"
                                            class="text-size-18">{{$post['name']}}</a>
                                        <p class="mb-0">{{ $jobsData::getJobType($post->job_type_id) }}</p>
                                        <div class="text-muted text-size-13 d-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-map-pin size-14 mr-2">
                                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                                <circle cx="12" cy="10" r="3"></circle>
                                            </svg>
                                            {{ $jobsData::getLoation($post->company_location_id) }}
                                        </div>
                                    </div>

                                </div>
                                @endforeach

                            </div>
                            <div class="row">
        <div class="col-md-10"></div>
        <div class="col-md-12 mt-5">
            <div class="text-right">
                {{ $jobpost->links() }}
            </div>
        </div>
    </div>



                        </div>
                        <div class="col-md-12">
                         

                            <div class="text-center py-4">
                                Copyright @ 2021 by Career Hollic
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
    $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable .job-card").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
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