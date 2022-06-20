@extends('adminpages.side')
@section('admin_assets')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        @include('include.nav')
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">

                    <div class="card mb-4" style="">
                        <ul class="nav nav-tabs" id="management" role="tablist" style="border:0px solid">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="teamm-tab" data-bs-toggle="tab" data-bs-target="#teamm"
                                    type="button" role="tab" aria-controls="teamm" aria-selected="true">Team
                                    Management</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="staff-tab" data-bs-toggle="tab" data-bs-target="#staff"
                                    type="button" role="tab" aria-controls="staff" aria-selected="false">Staff
                                    Management</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="documents-tab" data-bs-toggle="tab"
                                    data-bs-target="#documents" type="button" role="tab" aria-controls="documents"
                                    aria-selected="false">Documents</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pb-tab" data-bs-toggle="tab" data-bs-target="#pb"
                                    type="button" role="tab" aria-controls="pb" aria-selected="false">Pricing &
                                    Billing</button>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="tab-content" id="managementContent">
                <div class="tab-pane fade show active" id="teamm" role="tabpanel" aria-labelledby="teamm-tab">
                    <div class="row">

                        <div class="col-lg-6">
                            <div class="card z-index-2 mb-4">
                                <div class="card-header pb-0">
                                    <h6>Game Performance</h6>

                                </div>
                                <div class="card-body p-4">
                                    <div class="container">
                                        <canvas id="myline" height="145"></canvas>
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
                                    <div class="">

                                        <canvas id="myChart" width="300" height="300"></canvas>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card z-index-2 mb-4">
                                <div class="card-header pb-0">
                                    <h6>Highest Rank</h6>

                                </div>
                                <div class="card-body px-0 pt-0 pb-2">
                                    <div class="table-responsive p-0    " style="overflow-y:scroll; height:35vh;">
                                        <table class="table align-items-center mb-0">
                                            {{-- <thead>
                                                <tr>
                                                    <th
                                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        Name</th>
                                                    <th
                                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                        Email</th>
                                                    <th
                                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                        Role</th>
                                                    <th
                                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                        Employed</th>

                                                </tr>
                                            </thead> --}}
                                            <tbody style="">

                                                @foreach ($pemains as $pemain)
                                                    <!-- Dibagian ini jangan lupa cek controller-->
                                                    <tr>

                                                        <td>
                                                            <div class="d-flex px-2 py-1 ">
                                                                <div>
                                                                    <!-- dibagiaan ini harusnya ada input didatabase-->
                                                                    <img src="../assets/img/team-2.jpg"
                                                                        class="avatar avatar-sm me-3" alt="user1">
                                                                </div>
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <h6 class="mb-0 text-sm">{{ $pemain['name'] }}</h6>
                                                                    <p class="text-xs text-secondary mb-0">GoalKeeper</p>
                                                                </div>

                                                            </div>

                                                        </td>


                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PEMAIN-->
                        <div class="col-12">

                            <div class="card mb-4" style="">
                                <ul class="nav nav-tabs" id="listpemain" role="tablist" style="border:0px solid">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="wholeteam-tab" data-bs-toggle="tab"
                                            data-bs-target="#wholeteam" type="button" role="tab" aria-controls="wholeteam"
                                            aria-selected="true">Whole Team</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="gk-tab" data-bs-toggle="tab" data-bs-target="#gk"
                                            type="button" role="tab" aria-controls="gk" aria-selected="false">GoalKeeper
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="midfielder-tab" data-bs-toggle="tab"
                                            data-bs-target="#midfielder" type="button" role="tab" aria-controls="midfielder"
                                            aria-selected="false">Midfielder</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="defender-tab" data-bs-toggle="tab"
                                            data-bs-target="#defender" type="button" role="tab" aria-controls="defender"
                                            aria-selected="false">Defender</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="striker-tab" data-bs-toggle="tab"
                                            data-bs-target="#striker" type="button" role="tab" aria-controls="striker"
                                            aria-selected="false">Striker</button>
                                    </li>
                                </ul>

                            </div>
                        </div>
                        <div class="tab-content" id="listpemainContent">
                            <div class="tab-pane fade show active" id="wholeteam" role="tabpanel"
                                aria-labelledby="wholeteam-tab">
                                <div class="row">

                                    <!-- PEMAIN Baru-->
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
                                                                    Email</th>
                                                                <th
                                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                                    Role</th>
                                                                <th
                                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                                    Employed</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($pemains as $pemain)
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
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="gk" role="tabpanel" aria-labelledby="gk-tab">
                                <!-- PEMAIN GOALKEEPER-->
                                <div class="col-12">
                                    <div class="card mb-4">
                                        <div class="card-header pb-0">
                                            <h6>Daftar Pemain GoalKeeper</h6>
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
                                                                Email</th>
                                                            <th
                                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                                Position</th>
                                                            <th
                                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                                Employed</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($pemainsGK as $pemainGK)
                                                            <!-- Dibagian ini jangan lupa cek controller-->
                                                            <tr>

                                                                <td>
                                                                    <div class="d-flex px-2 py-1">
                                                                        <div>
                                                                            <!-- dibagiaan ini harusnya ada input didatabase-->
                                                                            <img src="../assets/img/team-2.jpg"
                                                                                class="avatar avatar-sm me-3" alt="user1">
                                                                        </div>
                                                                        <div
                                                                            class="d-flex flex-column justify-content-center">
                                                                            {{ $pemainGK['name'] }}
                                                                        </div>

                                                                    </div>

                                                                </td>
                                                                <td>{{ $pemainGK['email'] }}</td>
                                                                <td>{{ $pemainGK['position'] }}</td>
                                                                <td>{{ $pemainGK['created_at'] }}</td>
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
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="midfielder" role="tabpanel" aria-labelledby="midfielder-tab">
                                <!-- PEMAIN MIDFIELDER-->
                                <div class="col-12">
                                    <div class="card mb-4">
                                        <div class="card-header pb-0">
                                            <h6>Daftar Pemain Midfielder</h6>
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
                                                                Email</th>
                                                            <th
                                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                                Position</th>
                                                            <th
                                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                                Employed</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($pemainsMID as $pemainMID)
                                                            <!-- Dibagian ini jangan lupa cek controller-->
                                                            <tr>

                                                                <td>
                                                                    <div class="d-flex px-2 py-1">
                                                                        <div>
                                                                            <!-- dibagiaan ini harusnya ada input didatabase-->
                                                                            <img src="../assets/img/team-2.jpg"
                                                                                class="avatar avatar-sm me-3" alt="user1">
                                                                        </div>
                                                                        <div
                                                                            class="d-flex flex-column justify-content-center">
                                                                            {{ $pemainMID['name'] }}
                                                                        </div>

                                                                    </div>

                                                                </td>
                                                                <td>{{ $pemainMID['email'] }}</td>
                                                                <td>{{ $pemainMID['position'] }}</td>
                                                                <td>{{ $pemainMID['created_at'] }}</td>
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
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="defender" role="tabpanel" aria-labelledby="defender-tab">
                                <!-- PEMAIN MIDFIELDER-->
                                <!-- PEMAIN BACK-->
                                <div class="col-12">
                                    <div class="card mb-4">
                                        <div class="card-header pb-0">
                                            <h6>Daftar Pemain Back</h6>
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
                                                                Email</th>
                                                            <th
                                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                                Position</th>
                                                            <th
                                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                                Employed</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($pemainsBACK as $pemainBACK)
                                                            <!-- Dibagian ini jangan lupa cek controller-->
                                                            <tr>

                                                                <td>
                                                                    <div class="d-flex px-2 py-1">
                                                                        <div>
                                                                            <!-- dibagiaan ini harusnya ada input didatabase-->
                                                                            <img src="../assets/img/team-2.jpg"
                                                                                class="avatar avatar-sm me-3" alt="user1">
                                                                        </div>
                                                                        <div
                                                                            class="d-flex flex-column justify-content-center">
                                                                            {{ $pemainBACK['name'] }}
                                                                        </div>

                                                                    </div>

                                                                </td>
                                                                <td>{{ $pemainBACK['email'] }}</td>
                                                                <td>{{ $pemainBACK['position'] }}</td>
                                                                <td>{{ $pemainBACK['created_at'] }}</td>
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
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="striker" role="tabpanel" aria-labelledby="striker-tab">
                                <div class="col-12">
                                    <div class="card mb-4">
                                        <div class="card-header pb-0">
                                            <h6>Daftar Pemain Back</h6>
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
                                                                Email</th>
                                                            <th
                                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                                Position</th>
                                                            <th
                                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                                Employed</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($pemainsST as $pemainST)
                                                            <!-- Dibagian ini jangan lupa cek controller-->
                                                            <tr>

                                                                <td>
                                                                    <div class="d-flex px-2 py-1">
                                                                        <div>
                                                                            <!-- dibagiaan ini harusnya ada input didatabase-->
                                                                            <img src="../assets/img/team-2.jpg"
                                                                                class="avatar avatar-sm me-3" alt="user1">
                                                                        </div>
                                                                        <div
                                                                            class="d-flex flex-column justify-content-center">
                                                                            {{ $pemainST['name'] }}
                                                                        </div>

                                                                    </div>

                                                                </td>
                                                                <td>{{ $pemainST['email'] }}</td>
                                                                <td>{{ $pemainST['position'] }}</td>
                                                                <td>{{ $pemainST['created_at'] }}</td>
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
                                                        @endforeach
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
                <div class="tab-pane fade" id="staff" role="tabpanel" aria-labelledby="staff-tab">
                    <div class="row">
                        <!--PELATIH-->
                        <div class="col-12">
                            <div class="card mb-4">
                                <div class="card-header pb-0">
                                    <h6>Pelatih</h6>
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
                                                        Email</th>
                                                    <th
                                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                        Role</th><!-- Nanti ganti jadi jabatan-->
                                                    <th
                                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                        Employed</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($pelatihs as $pelatih)
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
                                                                    {{ $pelatih['name'] }}
                                                                </div>

                                                            </div>

                                                        </td>
                                                        <td>{{ $pelatih['email'] }}</td>
                                                        <td>{{ $pelatih['role'] }}</td>
                                                        <td>{{ $pelatih['created_at'] }}</td>
                                                        <td><a href="{{ route('pelatihcrud.edit', $pelatih->id) }}"
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
                                                                action="{{ route('pelatihcrud.destroy', $pelatih->id) }}"
                                                                method="post">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-danger"
                                                                    type="submit">Delete</button>
                                                            </form>
                                                        </td>

                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!--ASISTEN PELATIH-->
                        <div class="col-12">
                            <div class="card mb-4">
                                <div class="card-header pb-0">
                                    <h6>Daftar Asisten Pelatih</h6>
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
                                                        Email</th>
                                                    <th
                                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                        Role</th>
                                                    <th
                                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                        Employed</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($aspels as $aspel)
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
                                                                    {{ $aspel['name'] }}
                                                                </div>

                                                            </div>

                                                        </td>
                                                        <td>{{ $aspel['email'] }}</td>
                                                        <td>{{ $aspel['role'] }}</td>
                                                        <td>{{ $aspel['created_at'] }}</td>
                                                        <td><a href="{{ route('pelatihcrud.edit', $pelatih->id) }}"
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
                                                                action="{{ route('pelatihcrud.destroy', $pelatih->id) }}"
                                                                method="post">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-danger"
                                                                    type="submit">Delete</button>
                                                            </form>
                                                        </td>

                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="documents" role="tabpanel" aria-labelledby="documents-tab">...</div>
                <div class="tab-pane fade" id="pb" role="tabpanel" aria-labelledby="pb-tab">List Yang Blom Bayar</div>
            </div>

        </div>





        </div>
        @include('include.plugin')
    </main>
@endsection
