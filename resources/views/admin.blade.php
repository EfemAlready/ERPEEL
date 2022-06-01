@extends('layouts.adminside')
@section('admin_assets')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        @include('include.nav')
        <div class="container-fluid py-4">
            {{-- Row Kepala Pelatih --}}
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
                <div class="col-5">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6 style="font-weight: 700">Main Stats</h6>
                        </div>
                        <div class="card-body" style="margin-bottom: -5vh">
                            <div class="row d-flex justify-content-center mb-3">
                              <div class="col" style="margin-left: 6vh">
                               <h6 style="color: grey">Games</h6>
                      
                              </div>
                              <div class="col" style="margin-left: 20px; margin-right:20px">
                               <h6 style="color: grey">Minutes</h6>
                               
                              </div>
                              <div class="col" style="">
                               <h6 style="color: grey">Sessions</h6>
                               
                              </div>
                                
                            </div>
                            <div class="row d-flex justify-content-center mb-3">
                              <div class="col d-flex justify-content-center">
                               <h4>22</h4>
                                
                              </div>
                              <div class="col d-flex justify-content-center">
                               <h4>22</h4>
                               
                              </div>
                              <div class="col d-flex justify-content-center">
                                
                               <h4>22</h4>
                               
                              </div>
                                
                            </div>
                            <div class="row d-flex justify-content-center mb-2" >
                              <div class="col d-flex justify-content-center" >
                               <h6 style="color: grey">30</h6>
                                
                              </div>
                              <div class="col d-flex justify-content-center">
                               <h6 style="color: grey">2345</h6>
                               
                              </div>
                              <div class="col d-flex justify-content-center">
                                
                               <h6 style="color: grey">80</h6>
                               
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
            <div class="overflow-hidden position-relative border-radius-lg bg-cover" style="background-image: url('../assets/img/ivancik.jpg');">
              <span class="mask bg-gradient-dark"></span>
              <div class="card-body position-relative z-index-1 d-flex flex-column h-100" style="padding-bottom:85px">
                <h5 class="text-white font-weight-bolder mb-4 pt-2">Confused with all of this?</h5>
                <p class="text-white">Kita sebagai manusia tentu saja akan lupa mengenai sesuatu dan juga tidak memahami sesuatu jika tidak diajarkan. So get some help below</p>
                <a class="text-white text-sm font-weight-bold mb-0 icon-move-right mt-auto" href="javascript:;">
                  Read More
                  <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
          
        </div>
        <div class="col-lg-7">
          <div class="card z-index-2">
            <div class="card-header pb-0">
              <h6>Game Performance</h6>
              
            </div>
            <div class="card-body p-3">
              <div class="chart">
                <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="card z-index-2">
            <div class="card-header pb-0">
              <h6>Tambah Asisten Pelatih</h6>
              
            </div>
            <div class="card-body">
                <form action="{{url('/addaspel') }}" role="form text-left" method="POST">
                  @csrf
                  <div class="mb-3">
                    <input type="text" class="form-control" name="name" placeholder="Name" aria-label="Name" aria-describedby="email-addon" required>
                  </div>
                  <div class="mb-3">
                    <input type="email" class="form-control" name="email" placeholder="Email" aria-label="Email" aria-describedby="email-addon" required>
                  </div>
                  <div class="mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Password" aria-label="Password" aria-describedby="password-addon" required>
                  </div>
                  
                  <div class="text-center">
                    <input type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">
                  </div>
                </form>
              </div>
          </div>
        </div>
            </div>
            {{-- End Kepala Pelatih --}}

        </div>
        
    </main>
   @include('include.plugin')
@endsection
