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
                <div class="col-lg-4">
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
                <div class="col-12">

                    <div class="card mb-4" style="">
                        <ul class="nav nav-tabs" id="listteam" role="tablist" style="border:0px solid">
                            @foreach ($teams as $team)
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="{{ $team['Team_Name'] }}-tab" data-bs-toggle="tab"
                                        data-bs-target="#{{ $team['Team_Name'] }}" type="button" role="tab"
                                        aria-controls="{{ $team['Team_Name'] }}"
                                        aria-selected="true">{{ $team['Name_Team'] }}</button>
                                </li>
                            @endforeach

                        </ul>

                    </div>
                </div>
                <div class="tab-content" id="listteamContent">
                    <div class="tab-pane fade show active" id="{{ $team['Team_Name'] }}" role="tabpanel"
                        aria-labelledby="{{ $team['Team_Name'] }}-tab">
                        <div class="row">

                            <!-- List PEMAIN Tiap Team-->
                            <div class="col-12">
                                <div class="card mb-4">
                                    <div class="card-header pb-0">
                                        <h6>Daftar Pemain</h6>
                                    </div>
                                    <div class="card-body px-0 pt-0 pb-2">
                                        <div class="table-responsive p-0">
                                            <table class="table align-items-center mb-0">
                                                <thead>
                                                    <tr>
                                                        <th
                                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                            Name</th>
                                                        <th
                                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                            Position</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    {{-- @foreach ($pemains as $pemain)
                                                                <!-- Dibagian ini jangan lupa cek controller-->
                                                                <tr>

                                                                    <td>
                                                                        <div class="d-flex px-2 py-1">
                                                                            <div>
                                                                                <!-- dibagiaan ini harusnya ada input didatabase-->
                                                                                <img src="../assets/img/team-2.jpg"
                                                                                    class="avatar avatar-sm me-3"
                                                                                    alt="user1">
                                                                            </div>
                                                                            <div
                                                                                class="d-flex flex-column justify-content-center">
                                                                                {{ $pemain['name'] }}
                                                                            </div>

                                                                        </div>

                                                                    </td>
                                                                    <td>{{ $pemain['email'] }}</td>
                                                                    <td>{{ $pemain['position'] }}</td>
                                                                    <td>{{ $pemain['created_at'] }}</td>
                                                                    <td><a href="{{ route('pemaincrud.edit', $pemain->id) }}"
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
                                                                        <form
                                                                            action="{{ route('pemaincrud.destroy', $pemain->id) }}"
                                                                            method="post">
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <button class="btn btn-danger"
                                                                                type="submit">Delete</button>
                                                                        </form>
                                                                    </td>

                                                                </tr>
                                                            @endforeach --}}
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
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
