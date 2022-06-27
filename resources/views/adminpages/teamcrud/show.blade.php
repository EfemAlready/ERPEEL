@extends('adminpages.side')
@section('admin_assets')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        @include('include.nav')
        <div class="container-fluid py-4">
            {{-- Row --}}
            <div class="row">
               
                <div class="col-lg-3">
                    <div class="card z-index-2">
                        <div class="card-header pb-0">
                            <h6>Tambah Team</h6>

                        </div>
                        <div class="card-body">
                            <form action="{{ url('/addteam') }}" role="form text-left" method="POST" id="">
                                @csrf
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="Name_Team" placeholder="Team Name"
                                        aria-label="Name" aria-describedby="email-addon" required>
                                </div>


                                <div class="text-center">
                                    <input type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
                <div class="col-5">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6 style="font-weight: 700">Grades</h6>
                            <hr>
                        </div>
                        <div class="card-body" style="margin-bottom: -5vh;margin-top:-5vh">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Team Name</th>

                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                       
                                    </tbody>
                                </table>
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
