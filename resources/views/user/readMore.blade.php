<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Read More</title>
</head>

<body>
    <div class="container">
        <div class="row mt-4 mb-3">
            <div class="col-md-6">
                <img style="display:block;margin-left: auto;margin-right: auto;width: 30%;"
                    src="{{asset('img/careerhollic.png')}}" alt="" srcset="">
            </div>
            <div class="col-md-6 mt-3 text-center">
                <a href="{{url('user/career')}}"
                    style="display:block;margin-left: auto;margin-right: auto; margin-bottom:5px;width: 100px;"
                    class="btn btn-primary ">Find Jobs</a>
                <a style="margin-left: auto;margin-right: auto;" href="{{url('login')}}" class="btn btn-primary ">Staff
                    Login</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row ">
        @inject('jobsData', 'App\Http\Controllers\MasterController')
        @foreach($jobpost as $item)
                <div class="col-md-6 mt-3  ">
                    <div class="card shadow-lg p-2 mb-4 bg-body rounded ">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-5">
                                    <img width="70%" class="rounded" src="{{asset('img/Group 6@2x.png')}}" alt="">
                                </div>
                                <div class="col-md-6">
                                    <p>{{$item->name}} </p>
                                    <p><i class="fa fa-envelope-o text-primary " aria-hidden="true"></i>
                                        <font class="ml-4" style="margin-left:10px;">careerhollic@gmail.com</font>
                                    </p>
                                    <p><i class="fa fa-money ml-3 text-primary" aria-hidden="true"></i>
                                        <font style="margin-left:10px;">   <i class="fa fa-inr" aria-hidden="true"></i>  {{$item->salary}}</font>
                                    </p>
                                    <p><i class="fa fa-map-marker text-primary " aria-hidden="true"></i>
                                        <font class="ml-3" style="margin-left:15px;">{{ $jobsData::getLoation($item->company_location_id) }}</font>
                                    </p>
                                    <p><i class="fa fa-calendar  text-primary" aria-hidden="true"></i>
                                        <font class="ml-3" style="margin-left:10px;">{{ $jobsData::getdate($item->last_submission_date) }} Ago</font>
                                    </p>
                                </div>
                                <div class="col-md-1">
                                    <img src="{{asset('img/hart.png')}}" alt="" srcset="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

        </div>
    </div>
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