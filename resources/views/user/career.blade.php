<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Career Hollic</title>
    <link rel="icon" class="rounded" width="100%" href="{{asset('img/favicon1.jpg')}}" type="image/jpg">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="preview">
                    <div class="d-flex flex-column align-items-center mb-3">
                        <img width="15%" src="{{asset('img/careerhollic.png')}}" alt=""
                            class="candidate-viewable-icon img-fluid">
                    </div>
                    <div class="text-center mb-3">
                        <h1 class="mb-3"
                            style="font-size: 20px; font-weight: 700; letter-spacing: 1px; color: rgb(49, 49, 49);">
                            {{$data_basic->job_post_settings->content->title}}
                        </h1>
                        <p class="mb-3"
                            style="font-size: 15px !important; font-weight: 300; letter-spacing: 1px; color: rgb(175, 177, 182);">

                        </p>
                        <hr>
                    </div>
                    <div class="editor-body">
                        <div class="row">
                            @foreach($data_basic->job_post_settings->content->bodySection as $item)
                            <div class="col-md-6">
                                <div class="card shadow">
                                    <div class="card-body ">
                                        <div class="mt-3 mb-3">
                                            <h5
                                                style="font-size: 20px; font-weight: 600; letter-spacing: 0px; color: rgb(49, 49, 49);">
                                                {{$item->headings}}
                                            </h5>
                                            <hr>
                                            <p
                                                style="font-size: 15px; font-weight: 300; letter-spacing: 0px; color: rgb(49, 49, 49);font-family: emoji;">
                                                {{$item->description}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="card mt-5 shadow">
                        <div class="card-body">
                            <div class="mb-3 mt-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5
                                            style="font-size: 27px; font-weight: 600; letter-spacing: 0px; color: rgb(49, 49, 49);">
                                            Job Openings
                                        </h5>
                                    </div>
                                    <div class="col-md-6">
                                        <form method="post" action="{{ url('user/career') }}">
                                            @csrf


                                            <div class="row">
                                                <div class="col-sm-9 col-md-9 col-lg-9 col-xl-9">

                                                    <input type="text" name="search" class="form-control"
                                                        value="{{$search}}" placeholder="Enter  Name">
                                                </div>
                                                <div class="col-sm-1 col-md-1 col-lg-1 col-xl-1">
                                                    <input type="submit" class="btn btn-primary" name="submit">
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>

                                <hr>
                                <div class="job-openings">
                                    <div class="container">
                                        <div class="row">
                                            @inject('jobsData', 'App\Http\Controllers\MasterController')
                                            @foreach($jobpost as $post)
                                            <div class="col-lg-4 mt-3">
                                                <div class="card1 card-margin bg-light">
                                                    <div class="card-header no-border">
                                                        <h5 class="card-title mt-2"> <a
                                                                href="{{url('admin/dashboard/preview/'.$post->slug.'/display')}}"
                                                                class="text-size-18">{{$post['name']}}</a></h5>
                                                    </div>
                                                    <div class="card-body pt-0">
                                                        <div class="widget-49">
                                                            <div class="row">
                                                                <div class="col-md-6 mt-3">
                                                                    <div class="widget-49-title-wrapper">
                                                                        <div class="widget-49-date-primary">
                                                                            <span class="widget-49-date-day"><i
                                                                                    class="fa fa-user"></i></span>

                                                                        </div>
                                                                        <div class="widget-49-meeting-info">
                                                                            <span
                                                                                class="widget-49-pro-title">{{ $jobsData::getJobType($post->job_type_id) }}</span>
                                                                            <!-- <span class="widget-49-meeting-time"></span> -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 mt-3">
                                                                    <div class="widget-49-title-wrapper ">
                                                                        <div class="widget-49-date-primary">
                                                                            <span class="widget-49-date-day"><i
                                                                                    class="fa fa-map-marker  text-primary"
                                                                                    aria-hidden="true"></i></span>

                                                                        </div>
                                                                        <div class="widget-49-meeting-info">
                                                                            <span
                                                                                class="widget-49-pro-title">{{ $jobsData::getLoation($post->company_location_id) }}</span>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 mt-3">
                                                                    <div class="widget-49-title-wrapper">
                                                                        <div class="widget-49-date-primary">
                                                                            <span class="widget-49-date-day"><i
                                                                                    class="fa fa-inr"
                                                                                    aria-hidden="true"></i></span>

                                                                        </div>
                                                                        <div class="widget-49-meeting-info">
                                                                            <span
                                                                                class="widget-49-pro-title">{{ $post->salary }}</span>
                                                                            <!-- <span class="widget-49-meeting-time"></span> -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 mt-3">
                                                                    <div class="widget-49-title-wrapper ">
                                                                        <div class="widget-49-date-primary">
                                                                            <span class="widget-49-date-day"><i
                                                                                    class="fa fa-users"
                                                                                    aria-hidden="true"></i></span>

                                                                        </div>
                                                                        <div class="widget-49-meeting-info">
                                                                            <span
                                                                                class="widget-49-pro-title">{{ $post->vacancy_count }}</span>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>



                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <section>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
                                                <div class="mt-4">
                                                    {!! $jobpost->links() !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <img src="{{asset('img/careerhollic.png')}}" alt=""
                            class="candidate-viewable-logo img-fluid d-block mx-auto" width="20%">
                    </div>
                    <div class="text-center py-4">
                        Copyright @ 2021 by Career Hollic
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
    .job-card {
        background-color: rgba(68, 102, 242, .1);
        border-left: 3px solid #4466f2;
        border-radius: 0.25rem;
        height: 100%;
        padding: 2rem;
    }

    card-margin {
        margin-bottom: 1.875rem;
    }

    .card1 {
        border: 0;
        box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
        -webkit-box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
        -moz-box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
        -ms-box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
    }

    .card1 {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #ffffff;
        background-clip: border-box;
        border: 1px solid #e6e4e9;
        border-radius: 8px;
    }

    .card1 .card-header.no-border {
        border: 0;
    }

    .card1 .card-header {
        background: none;
        padding: 0 0.9375rem;
        font-weight: 500;
        display: flex;
        align-items: center;
        min-height: 50px;
    }

    .card-header:first-child {
        border-radius: calc(8px - 1px) calc(8px - 1px) 0 0;
    }

    .widget-49 .widget-49-title-wrapper {
        display: flex;
        align-items: center;
    }

    .widget-49 .widget-49-title-wrapper .widget-49-date-primary {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        background-color: #edf1fc;
        width: 2rem;
        height: 2rem;
        border-radius: 50%;
    }

    .widget-49 .widget-49-title-wrapper .widget-49-date-primary .widget-49-date-day {
        color: #4e73e5;
        font-weight: 500;
        font-size: 1.5rem;
        line-height: 1;
    }

    .widget-49 .widget-49-title-wrapper .widget-49-date-primary .widget-49-date-month {
        color: #4e73e5;
        line-height: 1;
        font-size: 1rem;
        text-transform: uppercase;
    }

    .widget-49 .widget-49-title-wrapper .widget-49-date-secondary {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        background-color: #fcfcfd;
        width: 4rem;
        height: 4rem;
        border-radius: 50%;
    }

    .widget-49 .widget-49-title-wrapper .widget-49-date-secondary .widget-49-date-day {
        color: #dde1e9;
        font-weight: 500;
        font-size: 1.5rem;
        line-height: 1;
    }

    .widget-49 .widget-49-title-wrapper .widget-49-date-secondary .widget-49-date-month {
        color: #dde1e9;
        line-height: 1;
        font-size: 1rem;
        text-transform: uppercase;
    }

    .widget-49 .widget-49-title-wrapper .widget-49-date-success {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        background-color: #e8faf8;
        width: 4rem;
        height: 4rem;
        border-radius: 50%;
    }

    .widget-49 .widget-49-title-wrapper .widget-49-date-success .widget-49-date-day {
        color: #17d1bd;
        font-weight: 500;
        font-size: 1.5rem;
        line-height: 1;
    }

    .widget-49 .widget-49-title-wrapper .widget-49-date-success .widget-49-date-month {
        color: #17d1bd;
        line-height: 1;
        font-size: 1rem;
        text-transform: uppercase;
    }

    .widget-49 .widget-49-title-wrapper .widget-49-date-info {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        background-color: #ebf7ff;
        width: 4rem;
        height: 4rem;
        border-radius: 50%;
    }

    .widget-49 .widget-49-title-wrapper .widget-49-date-info .widget-49-date-day {
        color: #36afff;
        font-weight: 500;
        font-size: 1.5rem;
        line-height: 1;
    }

    .widget-49 .widget-49-title-wrapper .widget-49-date-info .widget-49-date-month {
        color: #36afff;
        line-height: 1;
        font-size: 1rem;
        text-transform: uppercase;
    }

    .widget-49 .widget-49-title-wrapper .widget-49-date-warning {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        background-color: floralwhite;
        width: 4rem;
        height: 4rem;
        border-radius: 50%;
    }

    .widget-49 .widget-49-title-wrapper .widget-49-date-warning .widget-49-date-day {
        color: #FFC868;
        font-weight: 500;
        font-size: 1.5rem;
        line-height: 1;
    }

    .widget-49 .widget-49-title-wrapper .widget-49-date-warning .widget-49-date-month {
        color: #FFC868;
        line-height: 1;
        font-size: 1rem;
        text-transform: uppercase;
    }

    .widget-49 .widget-49-title-wrapper .widget-49-date-danger {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        background-color: #feeeef;
        width: 4rem;
        height: 4rem;
        border-radius: 50%;
    }

    .widget-49 .widget-49-title-wrapper .widget-49-date-danger .widget-49-date-day {
        color: #F95062;
        font-weight: 500;
        font-size: 1.5rem;
        line-height: 1;
    }

    .widget-49 .widget-49-title-wrapper .widget-49-date-danger .widget-49-date-month {
        color: #F95062;
        line-height: 1;
        font-size: 1rem;
        text-transform: uppercase;
    }

    .widget-49 .widget-49-title-wrapper .widget-49-date-light {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        background-color: #fefeff;
        width: 4rem;
        height: 4rem;
        border-radius: 50%;
    }

    .widget-49 .widget-49-title-wrapper .widget-49-date-light .widget-49-date-day {
        color: #f7f9fa;
        font-weight: 500;
        font-size: 1.5rem;
        line-height: 1;
    }

    .widget-49 .widget-49-title-wrapper .widget-49-date-light .widget-49-date-month {
        color: #f7f9fa;
        line-height: 1;
        font-size: 1rem;
        text-transform: uppercase;
    }

    .widget-49 .widget-49-title-wrapper .widget-49-date-dark {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        background-color: #ebedee;
        width: 4rem;
        height: 4rem;
        border-radius: 50%;
    }

    .widget-49 .widget-49-title-wrapper .widget-49-date-dark .widget-49-date-day {
        color: #394856;
        font-weight: 500;
        font-size: 1.5rem;
        line-height: 1;
    }

    .widget-49 .widget-49-title-wrapper .widget-49-date-dark .widget-49-date-month {
        color: #394856;
        line-height: 1;
        font-size: 1rem;
        text-transform: uppercase;
    }

    .widget-49 .widget-49-title-wrapper .widget-49-date-base {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        background-color: #f0fafb;
        width: 4rem;
        height: 4rem;
        border-radius: 50%;
    }

    .widget-49 .widget-49-title-wrapper .widget-49-date-base .widget-49-date-day {
        color: #68CBD7;
        font-weight: 500;
        font-size: 1.5rem;
        line-height: 1;
    }

    .widget-49 .widget-49-title-wrapper .widget-49-date-base .widget-49-date-month {
        color: #68CBD7;
        line-height: 1;
        font-size: 1rem;
        text-transform: uppercase;
    }

    .widget-49 .widget-49-title-wrapper .widget-49-meeting-info {
        display: flex;
        flex-direction: column;
        margin-left: 1rem;
    }

    .widget-49 .widget-49-title-wrapper .widget-49-meeting-info .widget-49-pro-title {
        color: #3c4142;
        font-size: 14px;
    }

    .widget-49 .widget-49-title-wrapper .widget-49-meeting-info .widget-49-meeting-time {
        color: #B1BAC5;
        font-size: 13px;
    }

    .widget-49 .widget-49-meeting-points {
        font-weight: 400;
        font-size: 13px;
        margin-top: .5rem;
    }

    .widget-49 .widget-49-meeting-points .widget-49-meeting-item {
        display: list-item;
        color: #727686;
    }

    .widget-49 .widget-49-meeting-points .widget-49-meeting-item span {
        margin-left: .5rem;
    }

    .widget-49 .widget-49-meeting-action {
        text-align: right;
    }

    .widget-49 .widget-49-meeting-action a {
        text-transform: uppercase;
    }
    </style>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
</script>

</html>