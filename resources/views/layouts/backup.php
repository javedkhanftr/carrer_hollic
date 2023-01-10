<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>
    <link rel="stylesheet"
        href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">
    <!-- Custom fonts for this template-->
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="{{asset('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i')}}"
        rel="stylesheet">
    <link href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css')}}" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Custom styles for this template-->
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <!-- <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar"> -->
        <ul class="navbar-nav  sidebar sidebar-dark accordion" style="background-color:black;" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <!-- <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Vijay Meena</div>
            </a> -->
            <a href="https://careerhollic.com/recruitment/" class="navbar-brand brand-logo">
                <img class="img-fluid" src="{{asset('/image/logo.png')}}" alt="logo">
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item ">
                <a class="nav-link" href="{{url('dashboard')}}">
                    <span class="icon-wrapper">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-pie-chart menu-icon">
                            <path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path>
                            <path d="M22 12A10 10 0 0 0 12 2v10z"></path>
                        </svg>
                    </span>
                    <span>Dashboard</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{url('candidates')}}">
                    <span class="icon-wrapper">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-users menu-icon">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </span>
                    <span>Candidates</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{url('career_page')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-layout menu-icon">
                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                        <line x1="3" y1="9" x2="21" y2="9"></line>
                        <line x1="9" y1="21" x2="9" y2="9"></line>
                    </svg>
                    <span>Career Page</span></a>
            </li>
            <li class="nav-item">
                <a href="users-and-roles" class="nav-link">
                    <span class="icon-wrapper">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-user-check menu-icon">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="8.5" cy="7" r="4"></circle>
                            <polyline points="17 11 19 13 23 9"></polyline>
                        </svg>
                    </span> <span class="menu-title">Users &amp; Roles</span>
                </a>
            </li>
            <li class="nav-item">
            <a href="job-setting" class="nav-link">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-settings menu-icon">
                            <circle cx="12" cy="12" r="3"></circle>
                            <path
                                d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                            </path>
                        </svg>Settings
                            </a>
                <!-- <a href="#settings" data-toggle="collapse" aria-expanded="false" aria-controls="settings"
                    class="nav-link">
                    <span class="icon-wrapper">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-settings menu-icon">
                            <circle cx="12" cy="12" r="3"></circle>
                            <path
                                d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                            </path>
                        </svg>
                    </span>
                    <span class="menu-title">Settings</span>
                    <i class="menu-arrow"></i>
                </a> -->
                <!-- <div id="settings" class="collapse">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a href="app-setting" class="nav-link">
                                App Settings
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="job-setting" class="nav-link">
                                Job Settings
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="integrations" class="nav-link">
                                Integrations
                            </a>
                        </li>
                    </ul>
                </div> -->
            </li>
            <li class="nav-item">
                <a href="#report" data-toggle="collapse" aria-expanded="false" aria-controls="report" class="nav-link">
                    <span class="icon-wrapper">
                        <i class="fa fa-info text-white" aria-hidden="true" style="font-size: 1.5rem;"></i>
                    </span>
                    <span class="menu-title">Report</span>
                    <i class="menu-arrow"></i>
                </a>
                <div id="report" class="collapse">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a href="{{url('admin/wfh/list')}}" class="nav-link">
                                WFH List
                            </a>
                        </li>

                    </ul>
                </div>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{url('calendar-event')}}">
                    <i class="fa fa-calendar-o text-light" aria-hidden="true" style="font-size: 1.5rem;"></i>
                    <span>Events</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Nav Item - Pages Collapse Menu -->




            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>



        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">


                    <div class="row" style="margin-left:1100px">
                        <div class="col-md-4">
                            <ul style="list-style-type: none;">
                                <li class="nav-item dropdown no-arrow">
                                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">Vijay Meena</span>
                                        <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                                    </a>
                                    <!-- Dropdown - User Information -->
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                        aria-labelledby="userDropdown">
                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                            data-target="#logoutModal">
                                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Logout
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    @yield('content')


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright @ 2021 by Career Hollic </span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="{{url('signout')}}">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <!-- <script src="{{asset('https://code.jquery.com/jquery-3.6.1.min.js')}}"></script> -->
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('js/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('js/demo/chart-pie-demo.js')}}"></script>
    <script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js')}}"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="{{asset('https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js')}}"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js')}}"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js')}}"></script>
    <link href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css')}}"
        rel="stylesheet" />


    <script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js')}}"></script>
    <!-- <script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js')}}"></script> -->
    <script>
    $(document).ready(function() {
        $('#job_type').select2();
        $('#department').select2();
        $('#Company_location').select2();
    });
    </script>
    <!-- // data table  -->
    <link href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css')}}"
        rel="stylesheet" />
    <link href="{{asset('https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
    <script src="{{asset('https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js')}}"></script>


    <script>
    $(document).ready(function() {

        $('#example').DataTable();
        let email = $('#verifyEmail').val();

        $('#EmailVerifyData').click(function() {
            let em = $('#email').val();
            if (em == email) {
                window.location.href = "candidates/create/";
            } else {
                alert('unauthorized');
                $('#verifyEmailData').modal('hide');
            }
        });
        $('.deleteCondidate').click(function() {
            let id = $(this).attr('data-id');
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        ),
                        setTimeout(() => {
                            window.location.href = "candidates/delete/" + id;
                        }, 1000);

                }

            });

        })
        $('.editCondidate').click(function() {
            let id = $(this).attr('data-id');

        })
    })
    </script>

    <!-- sweet alert -->
    <script src="{{asset('//cdn.jsdelivr.net/npm/sweetalert2@11')}}"></script>
    <script src="{{asset('sweetalert2.all.min.js')}}"></script>
    <script src="{{asset('sweetalert2.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('sweetalert2.min.css')}}">
</body>

</html>