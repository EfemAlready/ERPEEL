@extends('adminpages.side')
@section('admin_assets')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        @include('include.nav')
        <div class="container-fluid py-4">
            {{-- Row --}}
            <div class="row">
                <div class="col-4">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6 style="font-weight: 700">Profile</h6>
                        </div>
                        <div class="card-body" style="margin-bottom: -5vh">
                            <div class="row">
                                <div class="col">
                                    <img src="../assets/img/team-4.jpg" alt="user1" style="width:150px;">
                                </div>
                                <div class="col">

                                    <div class="row mb-3 mt-">Nama : Rafi Rahadian</div>
                                    <div class="row mb-3 mt-">Umur : 20</div>
                                    <div class="row mb-3 mt-">Posisi : Goal Keeper</div>

                                </div>

                            </div>



                        </div>
                        <div class="card-footer">
                            <div class="d-flex justify-content-end"><a href="">Edit Profile</a></div>

                        </div>
                    </div>
                </div>
                <div class="col-8">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6 style="font-weight: 700">Grading Stats</h6>
                        </div>
                        <div class="card-body" style="margin-bottom: -5vh">
                            <div class="row d-flex justify-content-center mb-3">
                                <div class="col" style="margin-left: 6vh">
                                    <h6 style="color: grey">Pace</h6>

                                </div>
                                <div class="col" style="margin-left: 20px; margin-right:20px">
                                    <h6 style="color: grey">Shooting</h6>

                                </div>
                                <div class="col" style="">
                                    <h6 style="color: grey">Passing</h6>

                                </div>
                                <div class="col" style="">
                                    <h6 style="color: grey">Agility</h6>

                                </div>
                                <div class="col" style="">
                                    <h6 style="color: grey">Defending</h6>

                                </div>
                                <div class="col" style="">
                                    <h6 style="color: grey">Overall </h6>

                                </div>

                            </div>
                            <div class="row d-flex justify-content-center mb-3">
                                <div class="col d-flex justify-content-center">
                                    <h4>90</h4>

                                </div>
                                <div class="col d-flex justify-content-center">
                                    <h4>90</h4>

                                </div>
                                <div class="col d-flex justify-content-center">

                                    <h4>90</h4>

                                </div>
                                <div class="col d-flex justify-content-center">
                                    <h4>22</h4>

                                </div>
                                <div class="col d-flex justify-content-center">
                                    <h4>90</h4>

                                </div>
                                <div class="col d-flex justify-content-center">
                                    <h4>90</h4>

                                </div>

                            </div>


                        </div>
                        <div class="card-footer">
                            <div class="d-flex justify-content-end"><a href="">More Info</a></div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="overflow-hidden position-relative border-radius-lg bg-cover"
                            style="background-image: url('../assets/img/ivancik.jpg');">
                            <span class="mask bg-gradient-dark"></span>
                            <div class="card-body position-relative z-index-1 d-flex flex-column h-100"
                                style="padding-bottom:85px">
                                <h5 class="text-white font-weight-bolder mb-4 pt-2">Confused with all of this?</h5>
                                <p class="text-white">Kita sebagai manusia tentu saja akan lupa mengenai sesuatu dan
                                    juga tidak memahami sesuatu jika tidak diajarkan. So get some help below</p>
                                <a class="text-white text-sm font-weight-bold mb-0 icon-move-right mt-auto"
                                    href="javascript:;">
                                    Read More
                                    <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-8">
                    <div class="card z-index-2 mb-4">
                        <div class="card-header pb-0">
                            <h6>Game Performance</h6>

                        </div>
                        <div class="card-body p-3">
                            <div class="">
                                <canvas id="myline" height="87"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            {{-- End Row --}}




        </div>
        @include('include.plugin')
    </main>
@endsection
