@extends('layouts.app')
@section('content')
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

        <div class="col-md-12 ">
            <div class=" card mt-3 shadow p-3 mb-5 bg-body rounded">
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
                                                        <img width="20%" src="{{asset('img/careerhollic.png')}}" alt=""
                                                            class="candidate-viewable-icon img-fluid">
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
                                                        <div class="card shadow mt-4">
                                                            <div class="card-body">
                                                                <div class="mb-5 ">
                                                                    <h5
                                                                        style="font-size: 27px; font-weight: 600; letter-spacing: 0px; color: rgb(49, 49, 49);">
                                                                        {{$item->headings}}
<hr>
                                                                    </h5>
                                                                    <p style="font-family: emoji; font-size: 19px; font-weight: 300; letter-spacing: 0px; color: rgb(49, 49, 49);">
                                                                        {{$item->description}}
                                                                    </p>
                                                                    <hr>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                    <div class="apply-wrapper mb-5">
                                                        <div class="card shadow mt-5"
                                                            style="background-color:#eef2ff; border:none;border-radius: 1.0rem;">
                                                            <div class="card-body">
                                                                <div class="row ">
                                                                    <div class="col-md-10">
                                                                        <h4>Apply for the post Back office</h4>
                                                                    </div>
                                                                    <div class="col-md-2 text-center">
                                                                        <a href="{{url('admin/dashboard/job_post/'.$jobpost->slug.'/applyjob')}}"
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