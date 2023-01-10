<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
    <title>Document</title>
</head>
<style>
.apply li span {
    color: black !important;
    text-decoration: none !important;
    border: 1px solid black !important;
    padding: 10px;
    margin-right: 10px;
    border-bottom-left-radius: 40px;
    border-bottom-right-radius: 40px;
    border-top-left-radius: 40px;
    border-top-right-radius: 40px;


}

.apply li p font {
    background-color: #4466f2;
    border: 2px solid #4466f2;
    margin-left: 20px;
    padding-bottom: 39px;
}

.complete-icon {
    position: absolute;
    left: 79px;
    top: 83px;
    border: none;
}

.complete-icon2 {
    position: absolute;
    left: 79px;
    top: 179px;
    border: none;
}

.complete-icon3 {
    position: absolute;
    left: 79px;
    top: 275px;
    border: none;
}

.complete-icon4 {
    position: absolute;
    left: 79px;
    top: 370px;
    border: none;
}
.card1 {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    max-width: 300px;
    margin: auto;
    text-align: center;
    font-family: arial;
    border-left: 10px solid #46c35f;
    z-index: 1;
    position: fixed;
    top: 70;
    right: 0;
}
.mess {
    border: none;
    outline: 0;
    display: inline-block;
    color: white;
    background-color: #000;
    text-align: center;
    cursor: pointer;
    width: 100%;
    font-size: 10px;
    padding: 15px;
    padding-left: 40px;
    padding-right: 40px;
}

.displaynone {
    display: none !important;
}
</style>

<body>


    <div class="container-fluid">
        <div class="row">
        <div class="col-md-9"></div>
        <div class="col-md-3 text-end  " id="showmessage">


        </div>
        </div>
        <div class="row ">
        
            <div class="col-md-3 bg-light p-5" height="auto">
                <ul class="apply mb-4 ml-3 mt-5" style="list-style: none; margin-top:50px;">
                    <li class="">
                        <span class="mr-2">01 </span> Basic Information
                        <p>
                            <font></font>
                            <span class="complete-icon bg-info displaynone">
                                <svg class="text-light " xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                            </span>
                        </p>
                    </li>
                    <li class=" mt-5 ml-3">
                        <span class="mr-2">02 </span> Contact Details
                        <p>
                            <font></font>
                            <span class="complete-icon2 bg-info displaynone">
                                <svg class="text-light " xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                            </span>
                        </p>
                    </li>
                    <li class="mt-5 ml-3">
                        <span class="mr-2">03 </span> Resume
                        <p>
                            <font></font>
                            <span class="complete-icon3 bg-info displaynone">
                                <svg class="text-light " xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                            </span>
                        </p>
                    </li>
                    <li class="mt-5 ml-3">
                        <span class="mr-2">04 </span> Submit Application
                        <p>
                            <!-- <font></font> -->
                            <span class="complete-icon4 bg-info displaynone">
                                <svg class="text-light " xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                            </span>
                        </p>
                    </li>
                </ul>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-4">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active mt-5" id="basicInformaction" role="tabpanel"
                        aria-labelledby="home-tab">
                        <h2>Basic Information</h2>
                        <!-- <form action=""> -->
                        <div class="row">
                            <div class="col-md-12 mt-4">
                                <label for="">First Name</label>
                                <input type="text" name="first_name" id="first_name" class="form-control"
                                    placeholder="First Name" required>
                                <span class="first_name text-danger"></span>
                            </div>
                            <div class="col-md-12 mt-4">
                                <label for="">Last Name</label>
                                <input type="text" name="last_name" id="last_name" class="form-control"
                                    placeholder="Last Name" required>
                                <span class="last_name text-danger"></span>

                            </div>
                            <div class="col-md-12 mt-4">
                                <label for="">Email</label>
                                <input type="text" name="email" id="email" class="form-control" placeholder="Email"
                                    required>
                                <span class="email text-danger"></span>

                            </div>
                            <div class="col-md-12 mt-4">
                                <div class="row ">
                                    <div class="col-12">
                                        <label for="gender">Gender<sup>*</sup></label>
                                        <div>
                                            <div class="app-radio-group">
                                                <label class="customized-radio radio-default custom-radio-default ml-4">
                                                    <input type="radio"
                                                        name="submitData_basic_information[nameGen(field_name)]"
                                                        id="submitData_basic_information[nameGen(field_name)]-0"
                                                        required="required" class="radio-inline" value="male">
                                                    <span class="outside"><span class="inside"></span></span>
                                                    Male
                                                </label>
                                                <label class="customized-radio radio-default custom-radio-default ml-4">
                                                    <input type="radio"
                                                        name="submitData_basic_information[nameGen(field_name)]"
                                                        id="submitData_basic_information[nameGen(field_name)]-1"
                                                        required="required" class="radio-inline" value="female">
                                                    <span class="outside"><span class="inside"></span></span>
                                                    Female
                                                </label>
                                                <label class="customized-radio radio-default custom-radio-default ml-4">
                                                    <input type="radio"
                                                        name="submitData_basic_information[nameGen(field_name)]"
                                                        id="submitData_basic_information[nameGen(field_name)]-2"
                                                        required="required" class="radio-inline" value="other">
                                                    <span class="outside"><span class="inside"></span></span>
                                                    Other
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mt-4">
                                <label for="">DOB</label>
                                <input type="date" name="dob" id="dob" class="form-control" required>
                                <span class="dob text-danger"></span>

                            </div>
                            <div class="col-md-9"></div>
                            <div class="col-md-3 mt-4 ">
                                <button
                                    class="btn btn-sm btn-outline-primary rounded-pill form-control applybutton1">Next
                                    ></button>
                            </div>
                        </div>
                        <!-- </form> -->
                    </div>
                    <div class="tab-pane fade show  mt-5" id="contactDetails" role="tabpanel"
                        aria-labelledby="home-tab">
                        <h2>Contact Details</h2>
                        <!-- <form action=""> -->
                        <div class="row">
                            <div class="col-md-12 mt-4">
                                <label for="">Phone</label>
                                <input type="number" name="number" id="number" class="form-control"
                                    placeholder="Phone Number" required>
                                <span class="number text-danger"></span>

                            </div>
                            <div class="col-md-12 mt-4">
                                <label for="">Address</label>
                                <textarea name="address" id="address" cols="30" rows="3" class="form-control"
                                    placeholder="Address" required></textarea>
                                <span class="address text-danger"></span>

                            </div>
                            <div class="col-md-3 mt-4">
                                <button class="btn btn-sm btn-outline-primary rounded-pill form-control applybutton2">
                                    < Previous </button>
                            </div>
                            <div class="col-md-6"></div>
                            <div class="col-md-3 mt-4 ">
                                <button
                                    class="btn btn-sm btn-outline-primary rounded-pill form-control applybutton3">Next
                                    ></button>
                            </div>
                        </div>
                        <!-- </form> -->
                    </div>
                    <div class="tab-pane fade show  mt-5" id="resumeuplode" role="tabpanel" aria-labelledby="home-tab">
                        <h2>Resume Upload</h2>
                        <!-- <form action=""> -->
                        <div class="row">
                            <div class="col-md-12 mt-4">
                                <label for="">Upload your resume here*</label>
                                <p class="mt-5 text-center">
                                    <label for="attachment">
                                        <a class="" role="button" aria-disabled="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-upload-cloud text-primary">
                                                <polyline points="16 16 12 12 8 16"></polyline>
                                                <line x1="12" y1="12" x2="12" y2="21"></line>
                                                <path d="M20.39 18.39A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.3">
                                                </path>
                                                <polyline points="16 16 12 12 8 16"></polyline>
                                            </svg>
                                        </a>

                                    </label>
                                    <input type="file" name="file[]" accept=".pdf" id="attachment"
                                        style="visibility: hidden; position: absolute;" multiple class="form-control" />

                                </p>
                                <p id="files-area">
                                    <span id="filesList">
                                        <span id="files-names"></span>
                                    </span>
                                </p>

                            </div>
                            <div class="col-md-3 mt-4">
                                <button class="btn btn-sm btn-outline-primary rounded-pill form-control applybutton4">
                                    < Previous </button>
                            </div>
                            <div class="col-md-6"></div>
                            <div class="col-md-3 mt-4 ">
                                <button
                                    class="btn btn-sm btn-outline-primary rounded-pill form-control applybutton5">Next
                                    ></button>
                            </div>
                        </div>
                        <!-- </form> -->
                    </div>
                    <div class="tab-pane fade show  mt-5" id="submitinformaction" role="tabpanel"
                        aria-labelledby="home-tab">
                        <div class="row">
                            <div class="col-md-12">
                                <h4>Submit Application - In progress...</h4>
                                <h5 class="mt-3">Basic Information</h5>
                                <div class="card borderless shadow mt-2">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-3">
                                                First Name
                                            </div>
                                            <div class="col-md-9">
                                                <p class="firstname"></p>
                                            </div>
                                            <div class="col-md-3">
                                                Last Name
                                            </div>
                                            <div class="col-md-9">
                                                <p class="lastname"></p>
                                            </div>
                                            <div class="col-md-3">
                                                Email
                                            </div>
                                            <div class="col-md-9">
                                                <p class="emailData"></p>
                                            </div>
                                            <div class="col-md-3">
                                                Gender
                                            </div>
                                            <div class="col-md-9">
                                                <p class="genderData"></p>
                                            </div>
                                            <div class="col-md-3">
                                                Date of birth
                                            </div>
                                            <div class="col-md-9">
                                                <p class="dobData"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h5 class="mt-3">Others information</h5>
                                <div class="card shadow mt-3">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h6>Phone</h6>
                                                <p class="phoneData"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card shadow mt-3">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h6>Address</h6>
                                                <p class="addressData"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mt-4">
                                <button class="btn btn-sm btn-outline-primary rounded-pill form-control applybutton6">
                                    < Previous </button>
                            </div>
                            <div class="col-md-6"></div>
                            <div class="col-md-3 mt-4 ">
                                <button
                                    class="btn btn-sm btn-outline-primary rounded-pill form-control applybutton7" type="submit">Submit
                                </button>
                            </div>
                        </div>
                        <input type="hidden" name="id" class="id" value="{{$data->id}}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<style>
#files-area {
    width: 30%;
    margin: 0 auto;
}

.file-block {
    border-radius: 10px;
    background-color: rgba(144, 163, 203, 0.2);
    margin: 5px;
    color: initial;
    display: inline-flex;

    &>span.name {
        padding-right: 10px;
        width: max-content;
        display: inline-flex;
    }
}

.file-delete {
    display: flex;
    width: 24px;
    color: initial;
    background-color: #6eb4ff00;
    font-size: large;
    justify-content: center;
    margin-right: 3px;
    cursor: pointer;

    &:hover {
        background-color: rgba(144, 163, 203, 0.2);
        border-radius: 10px;
    }

    &>span {
        transform: rotate(45deg);
    }
}
</style>

</html>
<!-- <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script> -->
<script src="{{asset('https://code.jquery.com/jquery-3.6.1.min.js')}}"></script>
<script>
$(document).ready(function() {
    const dt = new DataTransfer(); // Permet de manipuler les fichiers de l'input file

    $("#attachment").on('change', function(e) {
        for (var i = 0; i < this.files.length; i++) {
            let fileBloc = $('<span/>', {
                    class: 'file-block'
                }),
                fileName = $('<span/>', {
                    class: 'name',
                    text: this.files.item(i).name
                });
            fileBloc.append('<span class="file-delete"><span>+</span></span>')
                .append(fileName);
            $("#filesList > #files-names").append(fileBloc);
        };
        // Ajout des fichiers dans l'objet DataTransfer
        for (let file of this.files) {
            dt.items.add(file);
        }
        // Mise à jour des fichiers de l'input file après ajout
        this.files = dt.files;

        // EventListener pour le bouton de suppression créé
        $('span.file-delete').click(function() {
            let name = $(this).next('span.name').text();
            // Supprimer l'affichage du nom de fichier
            $(this).parent().remove();
            for (let i = 0; i < dt.items.length; i++) {
                // Correspondance du fichier et du nom
                if (name === dt.items[i].getAsFile().name) {
                    // Suppression du fichier dans l'objet DataTransfer
                    dt.items.remove(i);
                    continue;
                }
            }
            // Mise à jour des fichiers de l'input file après suppression
            document.getElementById('attachment').files = dt.files;
        });
    });
    $('.applybutton1').click(function() {
        let first_name = $('#first_name').val();
        let last_name = $('#last_name').val();
        let email = $('#email').val();
        let dob = $('#dob').val();
        let error = [];
        if (first_name == '') {
            $('.first_name').html('First Name Is Required');
            error.push('1');
        }
        if (last_name == '') {
            $('.last_name').html('Last Name Is Required');
            error.push('1');

        }
        if (email == '') {
            $('.email').html('Email Is Required');
            error.push('1');

        }
        if (dob == '') {
            $('.dob').html('DOB Is Required');
            error.push('1');

        }
        if (error != '') {
            return false;
        }
        $('#basicInformaction').removeClass('active');
        $('#contactDetails').addClass('active');
        $('.complete-icon').removeClass('displaynone');
        return false;
    });
    $('.applybutton2').click(function() {

        $('#basicInformaction').addClass('active');
        $('#contactDetails').removeClass('active');
        return false;

    });
    $('.applybutton3').click(function() {
        let number = $('#number').val();
        let address = $('#address').val();
        let error = [];
        if (number == '') {
            $('.number').html('Number Is Required');
            error.push('1');

        }
        if (address == '') {
            $('.address').html('Address Is Required');
            error.push('1');

        }
        if (error != '') {
            return false;
        }
        $('#basicInformaction').removeClass('active');
        $('#contactDetails').removeClass('active');
        $('#resumeuplode').addClass('active');
        $('.complete-icon2').removeClass('displaynone');
        return false;

    });
    $('.applybutton4').click(function() {
        $('#resumeuplode').removeClass('active');
        $('#contactDetails').addClass('active');
        $('#basicInformaction').removeClass('active');
        $('#submitinformaction').removeClass('active');

        return false;
    });
    $('.applybutton5').click(function() {
        let first_name = $('#first_name').val();
        let last_name = $('#last_name').val();
        let gender = $('.radio-inline').val();
        let email = $('#email').val();
        let dob = $('#dob').val();
        let number = $('#number').val();
        let address = $('#address').val();
        $('.firstname').html(first_name);
        $('.lastname').html(last_name);
        $('.emailData').html(email);
        $('.genderData').html(gender);
        $('.dobData').html(dob);
        $('.phoneData').html(number);
        $('.addressData').html(address);

        $('#resumeuplode').removeClass('active');
        $('#contactDetails').removeClass('active');
        $('#basicInformaction').removeClass('active');
        $('#submitinformaction').addClass('active');
        $('.complete-icon3').removeClass('displaynone');

    });
    $('.applybutton6').click(function() {
        $('#resumeuplode').addClass('active');
        $('#contactDetails').removeClass('active');
        $('#basicInformaction').removeClass('active');
        $('#submitinformaction').removeClass('active');

        return false;
    });
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.applybutton7').click(function() {
        let first_name = $('#first_name').val();
        let last_name = $('#last_name').val();
        let gender = $('.radio-inline').val();
        let email = $('#email').val();
        let dob = $('#dob').val();
        let number = $('#number').val();
        let address = $('#address').val();
        let id = $('.id').val();
     
        $.ajax({
            url: '{{url("dashboard/job_post/applyData")}}',
            type: 'POST',
            data: {
                id: id,
                first_name: first_name,
                last_name: last_name,
                gender: gender,
                email: email,
                dob: dob,
                number: number,
                address: address,

            },
            success: function(data) {
                console.log(data);
                let test =" @if(session()->has('message'))<div class='card1'><p style='margin-top: 0; margin-bottom: 0rem;'> <font class='mess'>{{session('message')}} {{session()->forget('message')}}</font></p></div> @endif ";
    $('#showmessage').html(test);
    setTimeout(function() {
        $('#showmessage').addClass('displaynone');
    }, 2000);
            }
        });
        $('.complete-icon4').removeClass('displaynone');
        $('.applybutton6').addClass('displaynone');
        $('.applybutton7').addClass('disabled');


    });

})
</script>>