@extends('adminpages.side')
@section('admin_assets')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        @include('include.nav')
        <div class="container-fluid py-4">
            <div class="row"> <!--PELATIH-->
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
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
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
                                                <td class="align-middle">
                                                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                                        data-toggle="tooltip" data-original-title="Edit user">
                                                        See Details
                                                    </a>
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
            <div class="row"><!--ASISTEN PELATIH-->
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
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
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
                                                <td class="align-middle">
                                                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                                        data-toggle="tooltip" data-original-title="Edit user">
                                                        See Details
                                                    </a>
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
            <div class="row"><!-- PEMAIN-->
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
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
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
                                                                class="avatar avatar-sm me-3" alt="user1">
                                                        </div>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            {{ $pemain['name'] }}
                                                        </div>

                                                    </div>

                                                </td>
                                                <td>{{ $pemain['email'] }}</td>
                                                <td>{{ $pemain['role'] }}</td>
                                                <td>{{ $pemain['created_at'] }}</td>
                                                <td class="align-middle">
                                                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                                        data-toggle="tooltip" data-original-title="Edit user">
                                                        See Details
                                                    </a>
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
        @include('include.plugin')
    </main>
@endsection
