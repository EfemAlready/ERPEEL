@extends('adminpages.side')
@section('admin_assets')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        @include('include.nav')
        <div class="container-fluid py-4">
            {{-- Row --}}
            <div class="row">
                <div class="col-8">
                    <div class="card mb-4" style="height: 65vh;">
                        <div class="card-header pb-0">
                            <h6 style="font-weight: 700">Formation: 4-4-2</h6>
                            <h6 style="font-weight: 700">Overall Team : {{ $avgovrs }}</h6>
                        </div>
                        <div class="card-body" style="margin-bottom: -5vh" style="">
                            <style>
                                img {
                                    position:
                                }

                                .imgA1 {
                                    position: absolute;
                                    z-index: 1;
                                }

                                .imgCF {
                                    position: relative;
                                    left: 300px;
                                    top: -169px;
                                    z-index: 3;
                                    height: 30px;
                                }

                                .imgCF2 {
                                    position: relative;
                                    left: 300px;
                                    top: -169px;
                                    z-index: 3;
                                    height: 30px;
                                }

                                .imgLMF {
                                    position: relative;
                                    left: 291px;
                                    top: 78px;
                                    z-index: 5;
                                    height: 30px;
                                }

                                .imgCMF {
                                    position: relative;
                                    left: 291px;
                                    top: 78px;
                                    z-index: 6;
                                    height: 30px;
                                }

                                .imgCMF2 {
                                    position: relative;
                                    left: 291px;
                                    top: 78px;
                                    z-index: 7;
                                    height: 30px;
                                }

                                .imgRMF {
                                    position: relative;
                                    left: 291px;
                                    top: 78px;
                                    z-index: 9;
                                    height: 30px;
                                }

                                .imgLB {
                                    position: relative;
                                    left: 291px;
                                    top: 78px;
                                    z-index: 9;
                                    height: 30px;
                                }

                                .imgCB {
                                    position: relative;
                                    left: 291px;
                                    top: 78px;
                                    z-index: 10;
                                    height: 30px;
                                }

                                .imgCB2 {
                                    position: relative;
                                    left: 291px;
                                    top: 78px;
                                    z-index: 11;
                                    height: 30px;
                                }

                                .imgRB {
                                    position: relative;
                                    left: 291px;
                                    top: 78px;
                                    z-index: 12;
                                    height: 30px;
                                }

                                .imgGK {
                                    position: relative;
                                    left: 291px;
                                    top: 78px;
                                    z-index: 13;
                                    height: 30px;
                                }
                            </style>
                            <img class="imgA1" src="assets/img/field-01.png" alt="" height="400px">
                            {{-- <img class="imgB1" src="assets/img/tshirt.png" alt="" height=""> --}}
                            <img class="imgCF" src="assets/img/tshirt.png" alt="" height="">
                            <img class="imgCF2" src="assets/img/tshirt.png" alt="" height="">
                            <img class="imgLMF" src="assets/img/tshirt.png" alt="" height="">
                            <img class="imgCMF" src="assets/img/tshirt.png" alt="" height="">
                            <img class="imgCMF2" src="assets/img/tshirt.png" alt="" height="">
                            <img class="imgLB" src="assets/img/tshirt.png" alt="" height="">
                            <img class="imgCB" src="assets/img/tshirt.png" alt="" height="">
                            <img class="imgCB2" src="assets/img/tshirt.png" alt="" height="">
                            <img class="imgRB" src="assets/img/tshirt.png" alt="" height="">
                            <img class="imgGK" src="assets/img/tshirt.png" alt="" height="">

                        </div>
                        <div class="card-footer">
                            <div class="d-flex justify-content-end"><a href="">Edit team</a></div>

                        </div>
                    </div>
                </div>
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
                                    {{-- BIKIN FK EVENT DI TABLE GRADE LALU --}}
                                    <tbody>
                                        @foreach ($teams as $team)
                                            <!-- Dibagian ini jangan lupa cek controller-->
                                            <tr>

                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div>
                                                            <!-- dibagiaan ini harusnya ada input didatabase-->
                                                            <img src="../assets/img/team-2.jpg"
                                                                class="avatar avatar-sm me-3" alt="user1">
                                                        </div>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            {{ $team['Name_Team'] }}
                                                        </div>

                                                    </div>

                                                </td>

                                                <td><a href="{{ route('teamcrud.edit', $team->id) }}"
                                                        class="btn btn-primary">Edit</a></td>

                                                <td>
                                                    @if ($errors->any())
                                                        <div class="alert alert-danger">
                                                            <ul>
                                                                @foreach ($errors->all() as $error)
                                                                    <li>{{ $error }}</li>
                                                                @endforeach
                                                            </ul>
                                                        </div><br />
                                                    @endif
                                                    <form action="{{ route('teamcrud.destroy', $team->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger" type="submit">Delete</button>
                                                    </form>
                                                </td>

                                            </tr>
                                        @endforeach
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
