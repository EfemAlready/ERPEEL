@extends('adminpages.side')
@section('admin_assets')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        @include('include.nav')
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-lg-9">
                    <div class="card z-index-2 mb-4">
                        <div class="card-header pb-0">
                            <h6>Team Progress</h6>

                        </div>
                        <div class="card-body p-4">
                            <div class="chart">
                                <canvas id="chart-line" class="chart-canvas"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card z-index-2 mb-4">
                        <div class="card-header pb-0">
                            <h6>Team Skills</h6>

                        </div>
                        <div class="card-body p-3">
                            <div class="chart">

                                <canvas id="myChart" width="300" height="300"></canvas>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6 style="font-weight: 700">Grades</h6>
                            <hr>
                        </div>
                        <div class="card-body" style="margin-bottom: -5vh;margin-top:-5vh">
                            <div class="row">

                                <div class="table-responsive p-0">
                                    <table class="table table-hover text-nowrap">
                                        <thead>
                                            <tr>
                                                <th scope="col">Decul FC</th>
                                                <th scope="col" style="margin-left:-1rem">

                                                    <p style="margin-bottom: -10px; font-weight: 600;color:#00897B">Training
                                                    </p>
                                                    <hr style="width:50%">
                                                    <p
                                                        style="font-size: 16;font-weight:400;margin-bottom: -1px;margin-top:-10px">
                                                        Thu
                                                        23/08/01</p>
                                                </th>
                                                <th scope="col" style="margin-left:-1rem">

                                                    <p style="margin-bottom: -10px; font-weight: 600;color:#00897B">Training
                                                    </p>
                                                    <hr style="width:50%">
                                                    <p
                                                        style="font-size: 16;font-weight:400;margin-bottom: -1px;margin-top:-10px">
                                                        Thu
                                                        23/08/01</p>
                                                </th>
                                                <th scope="col" style="margin-left:-1rem">

                                                    <p style="margin-bottom: -10px; font-weight: 600;color:#00897B">Training
                                                    </p>
                                                    <hr style="width:50%">
                                                    <p
                                                        style="font-size: 16;font-weight:400;margin-bottom: -1px;margin-top:-10px">
                                                        Thu
                                                        23/08/01</p>
                                                </th>
                                                <th scope="col" style="margin-left:-1rem">

                                                    <p style="margin-bottom: -10px; font-weight: 600;color:#00897B">Training
                                                    </p>
                                                    <hr style="width:50%">
                                                    <p
                                                        style="font-size: 16;font-weight:400;margin-bottom: -1px;margin-top:-10px">
                                                        Thu
                                                        23/08/01</p>
                                                </th>
                                                <th scope="col" style="margin-left:-1rem">

                                                    <p style="margin-bottom: -10px; font-weight: 600;color:#00897B">Training
                                                    </p>
                                                    <hr style="width:50%">
                                                    <p
                                                        style="font-size: 16;font-weight:400;margin-bottom: -1px;margin-top:-10px">
                                                        Thu
                                                        23/08/01</p>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row"><i class="fa fa-group"
                                                        style="padding-right:10px"></i>Overall Rating</th>
                                                <td style="padding-left:3vh">
                                                    <div class="row">
                                                        <div class="col">20</div>
                                                        <div class="col dropdown">
                                                            <div class="nav-item dropdown pe-2 d-flex align-items-center">
                                                                <a href="javascript:;" class="nav-link text-body p-0"
                                                                    id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                                    aria-expanded="false">
                                                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                                                </a>
                                                                <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4"
                                                                    aria-labelledby="dropdownMenuButton">
                                                                    <li class="mb-2">
                                                                        <a class="dropdown-item border-radius-md"
                                                                            href="javascript:;">
                                                                            <div class="d-flex py-1">

                                                                                <div
                                                                                    class="d-flex flex-column justify-content-center">
                                                                                    <h6
                                                                                        class="text-sm font-weight-normal mb-1">
                                                                                        Return
                                                                                    </h6>

                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li class="mb">
                                                                        <a class="dropdown-item border-radius-md"
                                                                            href="javascript:;">
                                                                            <div class="d-flex py-1">

                                                                                <div
                                                                                    class="d-flex flex-column justify-content-center">
                                                                                    <h6
                                                                                        class="text-sm font-weight-normal mb-1">
                                                                                        Details
                                                                                    </h6>

                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>


                                            </tr>
                                            <tr>
                                                <th scope="row" style="text-weight:400"><img src="../assets/img/team-2.jpg"
                                                        class="avatar avatar-sm me-3" alt="user1">Ini Nama</th>
                                                <td style="padding-left:3vh">
                                                    <div class="row">
                                                        <div class="col">20</div>
                                                        <div class="col dropdown">
                                                            <div class="nav-item dropdown pe-2 d-flex align-items-center">
                                                                <a href="javascript:;" class="nav-link text-body p-0"
                                                                    id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                                    aria-expanded="false">
                                                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                                                </a>
                                                                <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4"
                                                                    aria-labelledby="dropdownMenuButton">
                                                                    <li class="mb-2">
                                                                        <a class="dropdown-item border-radius-md"
                                                                            href="javascript:;">
                                                                            <div class="d-flex py-1">

                                                                                <div
                                                                                    class="d-flex flex-column justify-content-center">
                                                                                    <h6
                                                                                        class="text-sm font-weight-normal mb-1">
                                                                                        Return
                                                                                    </h6>

                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li class="mb">
                                                                        <a class="dropdown-item border-radius-md"
                                                                            href="javascript:;">
                                                                            <div class="d-flex py-1">

                                                                                <div
                                                                                    class="d-flex flex-column justify-content-center">
                                                                                    <h6
                                                                                        class="text-sm font-weight-normal mb-1">
                                                                                        Details
                                                                                    </h6>

                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>


                                            </tr>


                                        </tbody>
                                    </table>
                                </div>


                            </div>

                        </div>
                        <div class="card-footer">
                            <div class="d-flex justify-content-end"><a href="">Edit team</a></div>

                        </div>
                    </div>
                </div>
            </div>


        </div>





        </div>
        @include('include.plugin')
    </main>
@endsection
