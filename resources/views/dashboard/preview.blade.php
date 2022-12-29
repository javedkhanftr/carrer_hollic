<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

    <title>Preview</title>
</head>

<body>
    @inject('jobsData', 'App\Http\Controllers\MasterController')
    <section>
        <div class="container">
            <div class="card bg-light">
                <div class="card-body">
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
                                            <div class="card " style="background-color:#eef2ff; border:none;border-radius: 1.0rem;">
                                                <div class="card-body">
                                                    <div class="row ">
                                                        <div class="col-md-10">
                                                            <h4>Apply for the post Back office</h4>
                                                        </div>
                                                        <div class="col-md-2 text-center">
                                                            <a href="" class="btn btn-sm btn-outline-primary " style="border-radius: 1.0rem;">Apply now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center py-4">
                                            <img width="30%" src="https://careerhollic.com/recruitment/storage/logo/6317055e836fd."
                                                alt="" class="candidate-viewable-logo img-fluid d-block mx-auto">
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
</body>

</html>