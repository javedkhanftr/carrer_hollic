@extends('layouts.app')
@section('content')
<style>
.fonts {
    font-size: 15px;
}

.rating.list:hover .star {
    color: #fc6510;
}

.default-actions a {
    text-decoration: none;
    color: black;
    padding: 10px;
}

.timelinecss a {
    text-decoration: none;
    color: black;
}

.allbtn a {
    text-decoration: none;
    color: black;
    padding: 10px;
}

.timeline-info p font {
    background-color: #4466f2;
    border: 2px solid #4466f2;
    /* border-radius: 50%; */
    /* flex-shrink: 0; */
    /* height: 12px; */
    margin-right: 10px;
    /* width: 12px; */
    padding-bottom: 15px;

}

.displayNone {
    display: none;

}

.displayNone2 {
    display: none !important;

}

.note-btn {
    color: var(--default-font-color);
}
</style>
<script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js')}}"></script>
<div class="container">
    @inject('condidateData', 'App\Http\Controllers\MasterController')
    <div class="row mt-3 bg-white">
        <div class="col-md-2 mt-3 mb-3">
            <img src="{{asset('img/'.$data->image)}}" alt="">
        </div>

        <div class="col-md-3 mt-5 mb-3">
            <div class="row">
                <div class="col-md-3">
                    Name
                </div>
                <div class="col-md-1">:</div>
                <div class="col-md-6">
                    {{$data->first_name.' '.$data->last_name}}
                </div>
                <div class="col-md-3">
                    Job
                </div>
                <div class="col-md-1">:</div>
                <div class="col-md-6">
                    {{ $condidateData::getnamejobpost($data->job_post_id) }}
                </div>
                <div class="col-md-3">
                Applied
                </div>
                <div class="col-md-1">:</div>
                <div class="col-md-6">
                     {{ $condidateData::getapplydate($data->job_post_id) }}
                </div>
            </div>
         
        </div>
        <div class="col-md-4 mt-5 mb-3">
            <div class="row">
                <div class="col-md-3">
                    Email
                </div>
                <div class="col-md-1">:</div>
                <div class="col-md-8">
                {{$data->email}}
                </div>
                <div class="col-md-3">
                    Mobile Number
                </div>
                <div class="col-md-1">:</div>
                <div class="col-md-8">
                {{$data->mobile_number}}
                </div>
                <div class="col-md-3">
                Gender
                </div>
                <div class="col-md-1">:</div>
                <div class="col-md-8">
                {{$data->gender}}
                </div>
            </div>
         
        </div>
        <div class="col-md-3 mt-5">
            <div class="row">
                <div class="col-md-3">DOB</div>
                <div class="col-md-1">:</div>
                <div class="col-md-8">{{date('d-m-Y', strtotime($data->date_of_birth))}}</div>
            </div>
        </div>
      

    </div>
    <div class="row mt-3 bg-white">
        <div class="col-md-2 mt-4 bg-white timelinecss">
            <a data-toggle="tab" href="#" class="nav-item p-primary text-capitalize active timeline"><svg
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-clock mr-2">
                    <circle cx="12" cy="12" r="10"></circle>
                    <polyline points="12 6 12 12 16 14"></polyline>
                </svg>
                timeline
            </a>
            
        </div>
        <div class="col-md-2 mt-4 bg-white timelinecss">
        <a data-toggle="tab" href="#" class="nav-item p-primary text-capitalize active notestData">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-book-open mr-2">
                            <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                            <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                        </svg>
                        Notes
                    </a>
            
        </div>
        <div class="col-md-2 mt-4 bg-white timelinecss">
        <a data-toggle="tab" href="#" class="nav-item p-primary text-capitalize eventdata">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-calendar mr-2">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                            <line x1="16" y1="2" x2="16" y2="6"></line>
                            <line x1="8" y1="2" x2="8" y2="6"></line>
                            <line x1="3" y1="10" x2="21" y2="10"></line>
                        </svg>events
                    </a>
           
        </div>
        <div class="col-md-2 mt-4 bg-white timelinecss">
        <a data-toggle="tab" href="#" class="nav-item p-primary text-capitalize attachmentsdata">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-file-text mr-2">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                            <polyline points="14 2 14 8 20 8"></polyline>
                            <line x1="16" y1="13" x2="8" y2="13"></line>
                            <line x1="16" y1="17" x2="8" y2="17"></line>
                            <polyline points="10 9 9 9 8 9"></polyline>
                        </svg> attachments
                    </a>
            
        </div>
        <hr class="mt-4">
       
        <div class="col-md-12 bg-white  mb-5">
            <div class="row timelineData">
                <div class="col-md-6 ">
                    <div class="timeline mt-2">
                        <div class="timeline-step">
                            <div class="number"></div>
                            <div class="timeline-info">
                                <p class="time">
                                    <font></font> {{$data->created_at}}
                                </p>
                                <p class="description">
                                    <font></font>
                                    <strong>{{$data->first_name.' '.$data->last_name}}</strong> to
                                    <strong>new</strong>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mt-2">
                        <h4>Questions &amp; Answers</h4>
                    </div>
                    <div class="timeline ">
                        <div id="questions" class="tab-pane fade show active">
                            <div id="accordionExample" class="accordion accordion-question">
                                <hr>
                                <div class="card">
                                    <div class="card-body">
                                    <div class="row">
                                    <div class="col-md-3 mt-3">Phone</div>
                                    <div class="col-md-1 mt-3">:</div>
                                    <div class="col-md-6 mt-3">+91 62898 40436</div>
                                    <div class="col-md-3 mt-3">Address</div>
                                    <div class="col-md-1 mt-3">:</div>
                                    <div class="col-md-6 mt-3">11, Satish chakraborty lane Bally Howrah</div>
                                    <div class="col-md-3 mt-3">Education</div>
                                    <div class="col-md-1 mt-3">:</div>
                                    <div class="col-md-6 mt-3">Isc</div>
                                    <div class="col-md-3 mt-3"> Work experience</div>
                                    <div class="col-md-1 mt-3">:</div>
                                    <div class="col-md-6 mt-3">In teleperformance as customer care executive for voice process in
                                            Flipkart</div>
                                </div>
                                    </div>
                                </div>
                              
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row displayNone2 notest">
            <div class="col-md-12  ">
                <div class="card-body">
                    <!-- <div class="d-flex align-items-center mb-4">
                        <div class="avatars-w-40">
                            <img height='40px' width='40px'
                                src="https://careerhollic.com/recruitment/storage/avatar/63170d73b98da.jpg"
                                alt="Not found" class="rounded-circle avatar-bordered">
                        </div>
                        <div class="ml-3">
                            <h6 class="mb-1"></h6>
                        </div>
                    </div> -->
                    <section class="main_content dashboard_part large_header_bg">


                        <div class="main_content_iner ">
                            <div class="container-fluid p-0 ">
                                <div class="row ">


                                    <div class="col-12">
                                        <div class="white_box mb_30">

                                            <div class="box_header ">
                                                <div class="main-title">
                                                    <h3 class="mb-0">{{$data->first_name.' '.$data->last_name}}</h3>
                                                </div>
                                            </div>
                                            <div id='summernote'></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </section>



                    <div class="d-flex justify-content-end mt-2">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row event displayNone2">
            <div class="col-md-12 ">
                <div class="no-data-found-wrapper text-center p-primary">
                    <img width="20%" src="https://careerhollic.com/recruitment/images/no_data.svg" alt=""
                        class="mb-primary">
                    <p class="mb-0 text-center">Nothing to show here</p>
                    <p class="mb-0 text-center text-secondary font-size-90">This candidate have no event yet</p>
                    <p class="mb-0 text-center text-secondary font-size-90">Thank you</p>
                </div>
            </div>
        </div>
        <div class="row attachments displayNone2">
            <div class="col-md-12 ">
                <div id="attachments" class="tab-pane fade show active">
                    <div class="min-height-200">
                        <div class="default-base-color rounded p-4 mb-primary">
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="mb-0 text-primary">Resume - {{$data->first_name.' '.$data->last_name}}</p>
                                <div class="d-flex justify-content-start"><a href="{{$data->first_name}}"
                                        target="_blank"
                                        class="text-muted default-base-color width-30 height-30 rounded d-inline-flex align-items-center justify-content-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-download size-14">
                                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                            <polyline points="7 10 12 15 17 10"></polyline>
                                            <line x1="12" y1="15" x2="12" y2="3"></line>
                                        </svg></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="CHAT_MESSAGE_POPUPBOX">
    <div class="CHAT_POPUP_HEADER">
        <div class="MSEESAGE_CHATBOX_CLOSE">
            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M7.09939 5.98831L11.772 10.661C12.076 10.965 12.076 11.4564 11.772 11.7603C11.468 12.0643 10.9766 12.0643 10.6726 11.7603L5.99994 7.08762L1.32737 11.7603C1.02329 12.0643 0.532002 12.0643 0.228062 11.7603C-0.0760207 11.4564 -0.0760207 10.965 0.228062 10.661L4.90063 5.98831L0.228062 1.3156C-0.0760207 1.01166 -0.0760207 0.520226 0.228062 0.216286C0.379534 0.0646715 0.578697 -0.0114918 0.777717 -0.0114918C0.976738 -0.0114918 1.17576 0.0646715 1.32737 0.216286L5.99994 4.889L10.6726 0.216286C10.8243 0.0646715 11.0233 -0.0114918 11.2223 -0.0114918C11.4213 -0.0114918 11.6203 0.0646715 11.772 0.216286C12.076 0.520226 12.076 1.01166 11.772 1.3156L7.09939 5.98831Z"
                    fill="white" />
            </svg>
        </div>
        <h3>Chat with us</h3>
        <div class="Chat_Listed_member">
            <ul>
                <li>
                    <a href="#">
                        <div class="member_thumb">
                            <img src="img/staf/1.png" alt="">
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="member_thumb">
                            <img src="img/staf/2.png" alt="">
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="member_thumb">
                            <img src="img/staf/3.png" alt="">
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="member_thumb">
                            <img src="img/staf/4.png" alt="">
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="member_thumb">
                            <img src="img/staf/5.png" alt="">
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="member_thumb">
                            <div class="more_member_count">
                                <span>90+</span>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="CHAT_POPUP_BODY">
        <p class="mesaged_send_date">
            Sunday, 12 January
        </p>
        <div class="CHATING_SENDER">
            <div class="SMS_thumb">
                <img src="img/staf/1.png" alt="">
            </div>
            <div class="SEND_SMS_VIEW">
                <P>Hi! Welcome .
                    How can I help you?</P>
            </div>
        </div>
        <div class="CHATING_SENDER CHATING_RECEIVEr">
            <div class="SEND_SMS_VIEW">
                <P>Hello</P>
            </div>
            <div class="SMS_thumb">
                <img src="img/staf/1.png" alt="">
            </div>
        </div>
    </div>
    <div class="CHAT_POPUP_BOTTOM">
        <div class="chat_input_box d-flex align-items-center">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Write your message"
                    aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn " type="button">

                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M18.7821 3.21895C14.4908 -1.07281 7.50882 -1.07281 3.2183 3.21792C-1.07304 7.50864 -1.07263 14.4908 3.21872 18.7824C7.50882 23.0729 14.4908 23.0729 18.7817 18.7815C23.0726 14.4908 23.0724 7.50906 18.7821 3.21895ZM17.5813 17.5815C13.9525 21.2103 8.04773 21.2108 4.41871 17.5819C0.78907 13.9525 0.789485 8.04714 4.41871 4.41832C8.04752 0.789719 13.9521 0.789304 17.5817 4.41874C21.2105 8.04755 21.2101 13.9529 17.5813 17.5815ZM6.89503 8.02162C6.89503 7.31138 7.47107 6.73534 8.18131 6.73534C8.89135 6.73534 9.46739 7.31117 9.46739 8.02162C9.46739 8.73228 8.89135 9.30811 8.18131 9.30811C7.47107 9.30811 6.89503 8.73228 6.89503 8.02162ZM12.7274 8.02162C12.7274 7.31138 13.3038 6.73534 14.0141 6.73534C14.7241 6.73534 15.3002 7.31117 15.3002 8.02162C15.3002 8.73228 14.7243 9.30811 14.0141 9.30811C13.3038 9.30811 12.7274 8.73228 12.7274 8.02162ZM15.7683 13.2898C14.9712 15.1332 13.1043 16.3243 11.0126 16.3243C8.8758 16.3243 6.99792 15.1272 6.22834 13.2744C6.09642 12.9573 6.24681 12.593 6.56438 12.4611C6.64238 12.4289 6.72328 12.4136 6.80293 12.4136C7.04687 12.4136 7.27836 12.5577 7.37772 12.7973C7.95376 14.1842 9.38048 15.0799 11.0126 15.0799C12.6077 15.0799 14.0261 14.1836 14.626 12.7959C14.7625 12.4804 15.1288 12.335 15.4441 12.4717C15.7594 12.6084 15.9048 12.9745 15.7683 13.2898Z"
                                fill="#707DB7" />
                        </svg>

                    </button>
                    <button class="btn" type="button">

                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11 0.289062C4.92455 0.289062 0 5.08402 0 10.9996C0 16.9152 4.92455 21.7101 11 21.7101C17.0755 21.7101 22 16.9145 22 10.9996C22 5.08472 17.0755 0.289062 11 0.289062ZM11 20.3713C5.68423 20.3713 1.375 16.1755 1.375 10.9996C1.375 5.82371 5.68423 1.62788 11 1.62788C16.3158 1.62788 20.625 5.82371 20.625 10.9996C20.625 16.1755 16.3158 20.3713 11 20.3713ZM15.125 10.3302H11.6875V6.98314C11.6875 6.61363 11.3795 6.31373 11 6.31373C10.6205 6.31373 10.3125 6.61363 10.3125 6.98314V10.3302H6.875C6.4955 10.3302 6.1875 10.6301 6.1875 10.9996C6.1875 11.3691 6.4955 11.669 6.875 11.669H10.3125V15.016C10.3125 15.3855 10.6205 15.6854 11 15.6854C11.3795 15.6854 11.6875 15.3855 11.6875 15.016V11.669H15.125C15.5045 11.669 15.8125 11.3691 15.8125 10.9996C15.8125 10.6301 15.5045 10.3302 15.125 10.3302Z"
                                fill="#707DB7" />
                        </svg>

                        <input type="file">
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<!-- <script src="https://code.jquery.com/jquery-3.6.2.min.js"></script> -->
<script src="{{asset('https://code.jquery.com/jquery-3.6.1.min.js')}}"></script>
<script src="js/custom.js"></script>




<script>
$(document).ready(function() {
    $('.notestData').click(function() {
        // alert('hii')
        $('.timelineData').addClass('displayNone2');
        $('.event').addClass('displayNone2');
        $('.attachments').addClass('displayNone2');
        $('.notest').removeClass('displayNone2');
    });
    $('.timeline').click(function() {
        $('.event').addClass('displayNone2');
        $('.attachments').addClass('displayNone2');
        $('.notest').addClass('displayNone2');
        $('.timelineData').removeClass('displayNone2');
    });
    $('.eventdata').click(function() {
        $('.timelineData').addClass('displayNone2');
        $('.attachments').addClass('displayNone2');
        $('.notest').addClass('displayNone2');
        $('.event').removeClass('displayNone2');
    });
    $('.attachmentsdata').click(function() {
        $('.timelineData').addClass('displayNone2');
        $('.event').addClass('displayNone2');
        $('.notest').addClass('displayNone2');
        $('.attachments').removeClass('displayNone2');
    });
    var Ckeditor = function() {
        // Private functions
        var demos = function() {
            ClassicEditor
                .create(document.querySelector('#kt-ckeditor-1'))
                .then(editor => {
                    console.log(editor);
                })
                .catch(error => {
                    console.error(error);
                });
        }

        return {
            // public functions
            init: function() {
                demos();
            }
        };
    }();

    // Initialization
    jQuery(document).ready(function() {
        Ckeditor.init();
    });
});
</script>