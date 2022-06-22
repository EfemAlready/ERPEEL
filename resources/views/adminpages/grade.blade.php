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
                            <h6>Team Playstyle Level</h6>

                        </div>
                        <div class="card-body p-4">
                            <div class=""><h1>{{$avgovrs}}</h1>
                                
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
                            <h6 style="font-weight: 700">Training List</h6>
                            <hr>
                        </div>
                        <div class="card-body" style="margin-bottom: -5vh;margin-top:-5vh">
                            <div class="table-responsive p-0">
                                            <table class="table align-items-center mb-0">
                                                <thead>
                                                    <tr>
                                                        <th
                                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                            user id</th>
                                                        <th
                                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                            pace</th>
                                                        <th
                                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                            shooting</th>
                                                        <th
                                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                            passing</th>
                                                        <th
                                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                            agility</th>
                                                        <th
                                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                            defending</th>
                                                        <th
                                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                            overall</th>
                                                        <th
                                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                            Date</th>

                                                    </tr>
                                                </thead>
                                                {{-- BIKIN FK EVENT DI TABLE GRADE LALU --}}
                                                <tbody>
                                                    @foreach ($grades as $grade)
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
                                                                        {{ $grade->name }}
                                                                    </div>

                                                                </div>

                                                            </td>
                                                            <td>{{ $grade->pace }}</td>
                                                            <td>{{ $grade->shooting }}</td>
                                                            <td>{{ $grade->passing }}</td>
                                                            <td>{{ $grade->agility }}</td>
                                                            <td>{{ $grade->defending }}</td>
                                                            <td>{{ $grade->overall }}</td>
                                                            <td>{{ $grade->title }}</td>
                                                            {{-- <td><a href="{{ route('pemaincrud.edit', $pemain->id) }}"
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
                                                            </td> --}}

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


        </div>





        </div>
        @include('include.plugin')
    </main>
@endsection
