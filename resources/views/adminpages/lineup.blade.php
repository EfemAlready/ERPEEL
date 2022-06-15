@extends('adminpages.side')
@section('admin_assets')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        @include('include.nav')
        <div class="container-fluid py-4">
            {{-- Row --}}
            <div class="row">
                <div class="col-3">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6 style="font-weight: 700">Decul FC</h6>
                        </div>
                        <div class="card-body" style="margin-bottom: -5vh">
                            <div class="row">
                                <div class="col">
                                    <img src="/assets/img/7035290-01.png" alt="" style="width:150px;">
                                </div>
                                <div class="col">
                                    <div class="row mb-3 mt-">City : Bandung</div>
                                    <div class="row mb-3">Year : 1944</div>
                                    <div class="row mb-3">Owner : H.Pido</div>
                                </div>

                            </div>

                        </div>
                        <div class="card-footer">
                            <div class="d-flex justify-content-end"><a href="">Edit team</a></div>

                        </div>
                    </div>
                </div>
                
                
                
            </div>
            {{-- End Row --}}
        </div>
        @include('include.plugin')
    </main>
@endsection
