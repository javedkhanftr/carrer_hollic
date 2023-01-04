<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="preview">
                    <div class="d-flex flex-column align-items-center mb-5">
                        <img src="https://careerhollic.com/recruitment/storage/icon/6317055e9f918." alt="" class="candidate-viewable-icon img-fluid">
                    </div>
                    <div class="text-center mb-5">
                        <h1 class="mb-4" style="font-size: 50px; font-weight: 700; letter-spacing: 1px; color: rgb(49, 49, 49);">
                            {{$data_basic->job_post_settings->content->title}}
                        </h1>
                        <p class="mb-4"
                            style="font-size: 30px; font-weight: 300; letter-spacing: 1px; color: rgb(175, 177, 182);">

                        </p>
                    </div>
                    <div class="editor-body">
                        @foreach($data_basic->job_post_settings->content->bodySection as $item)
                        <div class="mb-5">
                            <h5 style="font-size: 27px; font-weight: 600; letter-spacing: 0px; color: rgb(49, 49, 49);">
                                {{$item->headings}}
                            </h5>
                            <p style="font-size: 19px; font-weight: 300; letter-spacing: 0px; color: rgb(49, 49, 49);">
                                {{$item->description}}
                            </p>
                        </div>
                        @endforeach
                    </div>
                    <div class="mb-5">
                        <h5 style="font-size: 27px; font-weight: 600; letter-spacing: 0px; color: rgb(49, 49, 49);">
                            Job Openings
                        </h5>
                        <hr>
                        <div class="job-openings">
                        <div class="row">
                                @foreach($jobpost as $post)
                                <div class="col-12 mb-primary col-md-6 col-xl-4 mt-3">
                                    <div class="job-card">
                                        @inject('jobsData', 'App\Http\Controllers\MasterController')
                                        <a href="{{url('dashboard/preview/'.$post->slug.'/display')}}"
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
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <img src="https://careerhollic.com/recruitment/storage/logo/6317055e836fd." alt=""
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
    background-color: rgba(68,102,242,.1);
    border-left: 3px solid #4466f2;
    border-radius: 0.25rem;
    height: 100%;
    padding: 2rem;
}
    </style>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>
</html>