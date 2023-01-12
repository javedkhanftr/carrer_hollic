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
    <style>
        @font-face {
   font-family: 'Poppins';
   src: url(sansation_light.woff);
}
    .fontData {
        font-size: 50px;
        font-weight: 700;
    }

    .shadow-lg {
        box-shadow: 0 0.5rem 1rem rgb(224, 242, 246) !important;
    }

    .container {
        max-width: 1420px;
    }

    .findjobData .card {
        border: none;
    }

    .bgimg1 {
        background-image: url('{{asset("img/backgroung1.png")}}');
        background-repeat: no-repeat;
        background-size: cover;
        height: auto;
    }

    .bgimg2 {
        background-image: url('{{asset("img/Rectangle 5.png")}}');
        height: auto;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .bgimg3 {
        background-image: url('{{asset("img/backgroung1.png")}}');
        height: auto;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .bgimg4 {
        background-image: url('{{asset("img/Rectangle 26.png")}}');
        height: auto;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .bg-primary {
        background-color: #017BC8 !important;
    }

    .card1 {
        background: #FFFFFF;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.27);
        border-radius: 10px;

    }

    .postname {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 500;
        font-size: 25px;
        line-height: 38px;
        text-decoration: none;
        color: #000000;
    }

    .emialdata {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 400;
        font-size: 18px;
        line-height: 27px;

        color: #000000;
    }

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
    .readmorebtn{
        
font-family: 'Poppins';
font-style: normal;
font-weight: 700;
font-size: 20px;
line-height: 38px;
/* identical to box height */


color: #FFFFFF;
    }
    .card3{
        background: #FFFFFF;
box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.27);
border-radius: 10px;
    }
    .card4{
        background: #FFFFFF;
box-shadow: 0px 0px 20px rgba(1, 123, 199, 0.17);
border: none;
    }
    .textall{
        font-family: 'Poppins';
font-style: normal;
font-weight: 500;
font-size: 25px;
line-height: 38px;
/* identical to box height */


color: #113D68;
    }
    .pdata{
        font-family: 'Poppins';
font-style: normal;
font-weight: 400;
font-size: 18px;
line-height: 27px;

color: #565659;
    }
    .secondData{
        font-family: 'Poppins';
font-style: normal;
font-weight: 500;
font-size: 25px;
line-height: 38px;
/* identical to box height */


color: #FFFFFF;
    }
    </style>
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
    <section class="bg-primary bgimg1">
        <div class="container ">
            <div class="row  ">
                <div class="col-sm-12 col-md-12 col-lg-12 mt-5 mb-5">
                    <div class="row mb-4">
                        <div class="col-md-12">
                            <h1 class="text-center text-light fontData ">Featured Job</h1>
                        </div>
                        @inject('jobsData', 'App\Http\Controllers\MasterController')
                        @foreach($jobpost as $item)
                        @if($item->featured_job == 'yes')
                        <div class="col-md-3 mt-3">
                            <div class="card card1">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img width="40%" src="{{asset('img/Group 18.png')}}" alt="">
                                        <img width="90%" class="mt-4" src="{{asset('img/Vector 1.png')}}" alt="">
                                    </div>


                                    <div class="row">
                                        <div class="col-md-12">
                                            <a href="{{url('admin/dashboard/preview/'.$item->slug.'/display')}}" class="postname">{{$item['name']}}</a>
                                        </div>
                                        <div class="col-md-12">
                                        <img src="{{asset('img/Vector.png')}}" alt="">
                                        <font class="emialdata">  careerhollic@gmail.com</font>
                                        </div>
                                        <div class="col-md-12">
                                        <img src="{{asset('img/Vector_location.png')}}" alt="">
                                        <font class="emialdata">  {{ $jobsData::getLoation($item->company_location_id) }}
                                        </font>
                                        </div>
                                        <div class="col-md-12">
                                        <img src="{{asset('img/Vector_clander.png')}}" alt="">
                                        <font class="emialdata">  {{ $jobsData::getdate($item->last_submission_date) }}
                                            Ago</font>
                                        </div>
                                    </div>
                                  
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="bgimg2">
        <div class="container">
            <div class="row findjobData">
                <div class="col-md-12 col-sm-12 col-lg-12 mt-4 mb-4">
                    <div class="row mt-5 mb-5">
                        <div class="col-md-12 ">
                            <h1 class="text-center text-primary fontData h111">Find the right job. Right now.</h1><br>

                        </div>
                        @foreach($jobpost1 as $item)
                        <div class="col-md-6 mt-3 ">
                            <div class="card card2 ">
                                <div class="card-body">
                                    <div class="row mt-4 mb-4">
                                        <div class="col-md-2">
                                            <img width="100px" class="findimagjob" src="{{asset('img/Group 6@2x.png')}}"
                                                alt="">
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
                                                    <font style="margin-left:10px;"> <i class="fa fa-inr"
                                                            aria-hidden="true"></i> {{$item->salary}}</font>
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
                        <div class="col-md-5"></div>
                        <div class="col-md-2 text-center mt-3 ">
                            <a href="{{url('user/readMore')}}" class="btn btn-sm btn-primary form-control mt-4 readmorebtn"><font>READ MORE!</font></a>
                        </div>
                        <div class="col-md-5"></div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-primary bgimg3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-5">
                    <h1 class="text-center text-light fontData h111">OUR SERVICE</h1>
                    <h3 class="text-center text-light"> Offering a wide rang of specialized services.</h3>
                </div>

                <div class="col-md-3 mt-4">
                    <div class="card card3">
                        <div class="card-body">
                            <div class="text-center">
                                <img width="50%" src="{{asset('img/Group10.png')}}" alt="">
                            </div>
                            <div class="text-center mt-4 mb-5">
                                <h6>Manpower Recruitment</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-4">
                    <div class="card card3">
                        <div class="card-body">
                            <div class="text-center">
                                <img width="50%" src="{{asset('img/Admin-Profile-Vector-PNG-Clipart 1.png')}}" alt="">
                            </div>
                            <div class="text-center mt-4 mb-5">
                                <h6>Placement Services</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-4">
                    <div class="card card3">
                        <div class="card-body">
                            <div class="text-center">
                                <img width="50%" src="{{asset('img/humane1.png')}}" alt="">
                            </div>
                            <div class="text-center mt-4 mb-5">
                                <h6>Human Resource Solution</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-4">
                    <div class="card card3">
                        <div class="card-body">
                            <div class="text-center">
                                <img width="50%" src="{{asset('img/hand1.png')}}" alt="">
                            </div>
                            <div class="text-center mt-4 mb-5">
                                <h6>Human Resource Solution</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 mb-5"></div>
            </div>
        </div>

    </section>
    <section class="bgimg4">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-3 mt-3  ">
                    <div class="card card4 ">
                        <div class="card-body">
                            <div class="text-center">
                                <img width="30%" src="{{asset('img/lest.png')}}" alt="">
                            </div>
                            <div class="text-center mb-4">
                                <h1 class="text-primary mt-3">890+</h1>
                                <h6>JOBS AVAILABLE</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <img width="30%" src="{{asset('img/resuma.png')}}" alt="">
                            </div>
                            <div class="text-center mt-3 mb-4">
                                <h1 class="text-primary">3120+</h1>
                                <h6>ACTIVE RESUMES</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <img width="30%" src="{{asset('img/bag.png')}}" alt="">
                            </div>
                            <div class="text-center mt-3 mb-4">
                                <h1 class="text-primary">230+</h1>
                                <h6>EMPLOYERS PROFILES</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <img width="30%" src="{{asset('img/handshake 1.png')}}" alt="">
                            </div>
                            <div class="text-center mt-3 mb-4">
                                <h1 class="text-primary">150+</h1>
                                <h6>POSITIONS MATCHED</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4 mt-3 ">
                <div class="card card4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <img width="91px" class="   rounded-circle " src="{{asset('img/Ellipse 2.png')}}"
                                    alt="">
                            </div>
                            <div class="col-md-8 text-start">
                                <p class="mt-4 "><font class="textall">Emmy Barton </font><br> Jaipur(Rajsthan)</p>
                            </div>
                            <div class="col-12">
                                <p class="pdata">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus eaque veniam
                                    impedit voluptatum eius laudantium labore quasi architecto saepe nesciunt, sed
                                    perferendis molestiae itaque soluta. Porro deleniti dicta minima atque.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4  mt-3 ">
                <div class="card bg-primary  card4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <img width="91px" class="rounded-circle" src="{{asset('img/manlast.png')}}" alt="">
                            </div>
                            <div class="col-md-8 text-start">
                                <p class="mt-4 text-light"><font class="secondData">Rakesh Singh</font> <br> Jaipur(Rajsthan)</p>
                            </div>
                            <div class="col-12">
                                <p class="text-light pdata">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Doloribus eaque veniam impedit voluptatum eius laudantium labore quasi architecto
                                    saepe nesciunt, sed perferendis molestiae itaque soluta. Porro deleniti dicta minima
                                    atque.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-3 ">
                <div class="card   card4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <img width="91px" class="  rounded-circle  " src="{{asset('img/Ellipse 2.png')}}"
                                    alt="">
                            </div>
                            <div class="col-md-8 text-start">
                                <p class="mt-4"><font class="textall">Shivani Sharma </font><br> Jaipur(Rajsthan)</p>
                            </div>
                            <div class="col-12">
                                <p class="pdata">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus eaque veniam
                                    impedit voluptatum eius laudantium labore quasi architecto saepe nesciunt, sed
                                    perferendis molestiae itaque soluta. Porro deleniti dicta minima atque.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="bg-primary">
        <div class="container mt-5 ">
            <div class="row mt-5">
                <div class="col-md-12 mt-5">
                    <div class="row">
                    <div class="col-md-3 mt-5">
                    <div class="ml-3 text-light">
                        <h4>Relation</h4>
                        <h6 class="mt-3">About Career Hollic</h6>
                        <h6>Refund & cancellation Policy</h6>
                        <h6>Terms & Condittion</h6>
                        <h6>Privacy Policy</h6>
                    </div>
                </div>
                <div class="col-md-3 mt-5">
                    <div class=" text-light">
                        <h4>Reviews</h4>
                        <h6 class="mt-3">Google Review</h6>
                        <h6>Website Reviews</h6>
                    </div>
                </div>
                <div class="col-md-3 mt-5">
                    <div class=" text-light">
                        <h4>Policy</h4>
                        <h6 class="mt-3">Assembly Services</h6>
                        <h6>Refund/Exchange</h6>
                        <h6>Privacy Policy</h6>
                        <h6>Terms of services</h6>
                        <h6>Warranty</h6>
                    </div>
                </div>
                <div class="col-md-3 mt-5">
                    <div class=" text-light">
                        <h4>About us</h4>
                        <h6 class="mt-3">Address:2nd Floor,44/07,</h6>
                        <h6>kiran Path,Mansarovar</h6>
                        <h6>Sector 4,Mansarovar,Jaipur,</h6>
                        <h6>Rajsthan 302020</h6><br>
                        <h6>Whatsapp:+91 9588288503</h6>
                        <h6 class="mt-3">Toll Free:+91 8580089718</h6>
                        <h6 class="mt-3">Email: sales@woodsala.com</h6>
                        <img class="mt-4" src="{{asset('img/Group 17.png')}}" alt="" srcset="">
                    </div>
                </div>
                <div class="col-md-12 bg-gradient mt-3">
                    <div class="text-center text-light">
                        <p>DESING BY Magnify-©2022 ALL RIGHTS RESERVED</p>
                    </div>
                </div>
                    </div>
                </div>
            </div>
    </section>

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