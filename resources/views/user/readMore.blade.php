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
<style>
     .card2 {
        background: #FFFFFF;
        border:none;
        box-shadow: 0px 0px 20px rgba(1, 123, 199, 0.17);
    }

    .findimagjob {
        background: rgba(185, 187, 193, 0.25);
        border-radius: 6px;
    }

    .namedata {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 500;
        font-size: 25px;
        line-height: 38px;
        text-decoration: none;
        color: #000000;
    }
</style>
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
            <div class="col-md-6 mt-3 ">
                <div class="card card2 ">
                    <div class="card-body">
                        <div class="row mt-4 mb-4">
                            <div class="col-md-2">
                                <img width="100px" class="findimagjob" src="{{asset('img/Group 6@2x.png')}}" alt="">
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-12">
                                        <a href="{{url('admin/dashboard/preview/'.$item->slug.'/display')}}"
                                            class="namedata">{{$item['name']}}</a>
                                    </div>
                                    <div class="col-md-12">
                                        <img src="{{asset('img/Vector.png')}}" alt="">
                                        <font class="ml-4" style="margin-left:10px;">careerhollic@gmail.com
                                        </font>
                                    </div>
                                    <div class="col-md-12">
                                        <img src="{{asset('img/Vector_sallary.png')}}" alt="">
                                        <font style="margin-left:10px;"> <i class="fa fa-inr" aria-hidden="true"></i>
                                            {{$item->salary}}</font>
                                    </div>
                                    <div class="col-md-12">
                                        <img src="{{asset('img/Vector_location.png')}}" alt="">
                                        <font class="ml-3" style="margin-left:15px;">
                                            {{ $jobsData::getLoation($item->company_location_id) }}</font>
                                    </div>
                                    <div class="col-md-12">
                                        <img src="{{asset('img/Vector_clander.png')}}" alt="">
                                        <font class="ml-3" style="margin-left:10px;">
                                            {{ $jobsData::getdate($item->last_submission_date) }} Ago</font>
                                    </div>
                                </div>

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