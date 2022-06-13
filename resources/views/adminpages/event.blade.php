@extends('adminpages.side')
@section('admin_assets')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        @include('include.nav')
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-9">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6 style="font-weight: 700">Calendar</h6>
                        </div>
                        <div class="card-body" style="margin-bottom: -5vh">
                            <div id="calendar"></div>

                        </div>
                        <div class=card-footer></div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card mb-4">
                        <div class="card-header pb-0 ">
                            <ul class="nav nav-tabs" id="schedule" role="tablist" style="border:0px solid;">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="training-tab" data-bs-toggle="tab"
                                        data-bs-target="#training" type="button" role="tab" aria-controls="training"
                                        aria-selected="true">
                                        Plan Training </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="match-tab" data-bs-toggle="tab"
                                        data-bs-target="#match" type="button" role="tab" aria-controls="match"
                                        aria-selected="false"> Plan
                                        Match</button>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body" style="margin-bottom: -5vh">
                            <div class="tab-content" id="trainingContent">
                                <div class="tab-pane fade" id="training" role="tabpanel" aria-labelledby="training-tab">
                                    <form action="" method="POST">
                                        @csrf
                                        <label for="" class="col-form-label text-md-start"
                                            style="font-weight: 800;font-size: 13px;">Select Training Type</label>
                                        <div class="input">
                                            <input type="radio" class="btn-check" name="options" id="option1"
                                                autocomplete="off" checked>
                                            <label class="btn btn-secondary" for="option1">Team</label>

                                            <input type="radio" class="btn-check" name="options" id="option2"
                                                autocomplete="off">
                                            <label class="btn btn-secondary" for="option2">Individual</label>
                                        </div>
                                        <label for="" class="col-form-label text-md-start"
                                            style="font-weight: 800;font-size: 13px;">General Information</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="fa-solid fa-futbol"></i></span>
                                            <input type="text" class="form-control" aria-label="" placeholder="Event Name">
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="row">
                                                <div class="col  ">
                                                    <span class="input-group-text"><i
                                                            class="fa-solid fa-calendar-days"></i></span>
                                                    <input type="text" class="form-control" aria-label=""
                                                        placeholder="Date">
                                                </div>
                                                <div class="col  ">
                                                    <span class="input-group-text"><i class="fa-solid fa-clock"></i></span>
                                                    <input type="text" class="form-control" aria-label=""
                                                        placeholder="Time">
                                                </div>

                                            </div>

                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="fa-solid fa-location-dot"></i></span>
                                            <input type="text" class="form-control" aria-label="" placeholder="Location">
                                        </div>
                                        <div class="d-grid gap-2">
                                            <button class="btn btn-primary" type="button">Button</button>
                                            
                                        </div>


                                    </form>
                                </div>
                                <div class="tab-pane fade" id="match" role="tabpanel" aria-labelledby="match-tab">Form untuk matchday</div>
                            </div>

                        </div>
                        <div class="card-footer">
                            {{-- <div class="d-flex justify-content-end"><a href="">Edit team</a></div> --}}

                        </div>
                    </div>

                </div>
            </div>


        </div>





        </div>
        @include('include.plugin')
    </main>
@endsection
