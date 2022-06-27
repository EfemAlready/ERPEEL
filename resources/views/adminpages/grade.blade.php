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
                            <h6>Add Player Grading</h6>
                        </div>
                        <div class="card-body p-4">
                            <div class="">
                                <form action="{{ route('gradecrud.store') }}" role="form text-left" method="POST"
                                    id="formpemain">
                                    @csrf

                                    <div class="input-group mb-3">

                                        <select class="form-select" id="player" name="player" placeholder="Player Name"
                                            aria-label="position" aria-describedby="email-addon" form="formpemain">
                                            <option selected>Choose Player</option>
                                            @foreach ($player as $p)
                                                <option value={{ $p->id }}>{{ $p->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="input-group mb-3">

                                        <select class="form-select" id="player" name="event" placeholder="Event"
                                            aria-label="position" aria-describedby="email-addon" form="formpemain">
                                            <option selected>Choose Session</option>
                                            @foreach ($event as $e)
                                                <option value={{ $e->id }}>{{ $e->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <input type="number" class="form-control" name="pace" placeholder="Pace"
                                            aria-label="Pace" aria-describedby="pace-addon" required>
                                    </div>
                                    <div class="mb-3">
                                        <input type="number" class="form-control" name="shooting" placeholder="Shooting"
                                            aria-label="Pace" aria-describedby="pace-addon" required>
                                    </div>
                                    <div class="mb-3">
                                        <input type="number" class="form-control" name="passing" placeholder="Passing"
                                            aria-label="Pace" aria-describedby="pace-addon" required>
                                    </div>
                                    <div class="mb-3">
                                        <input type="number" class="form-control" name="agility" placeholder="Agility"
                                            aria-label="Pace" aria-describedby="pace-addon" required>
                                    </div>
                                    <div class="mb-3">
                                        <input type="number" class="form-control" name="defending" placeholder="Defending"
                                            aria-label="Pace" aria-describedby="pace-addon" required>
                                    </div>


                                    <div class="text-center">
                                        <input type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">
                                    </div>
                                </form>

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
                    <div class="card z-index-2 mb-4">
                        <div class="card-header pb-0">
                            <h6>Team Grade Overall</h6>

                        </div>
                        <div class="card-body p-4">
                            <div class="">
                                <h1>{{ $avgovrs }}</h1>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6 style="font-weight: 700">Grading List</h6>
                            <hr>
                        </div>
                        <div class="card-body" style="margin-bottom: -5vh;margin-top:-5vh">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Player</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Pace</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Shooting</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Passing</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Agility</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Defending</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Overall</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Session</th>

                                        </tr>
                                    </thead>
                                    {{-- BIKIN FK EVENT DI TABLE GRADE LALU --}}
                                    <tbody>
                                        @foreach ($grades as $grade)
                                            <!-- Dibagian ini jangan lupa cek controller-->
                                            <tr>

                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        {{-- <div>
                                                                        <!-- dibagiaan ini harusnya ada input didatabase-->
                                                                        <img src="../assets/img/team-2.jpg"
                                                                            class="avatar avatar-sm me-3" alt="user1">
                                                                    </div> --}}
                                                        <div class="d-flex flex-column justify-content-center">
                                                            {{ $grade->user->name }}
                                                        </div>

                                                    </div>

                                                </td>
                                                <td>{{ $grade->pace }}</td>
                                                <td>{{ $grade->shooting }}</td>
                                                <td>{{ $grade->passing }}</td>
                                                <td>{{ $grade->agility }}</td>
                                                <td>{{ $grade->defending }}</td>
                                                <td>{{ $grade->overall }}</td>
                                                <td>{{ $grade->event->title }}</td>
                                                {{-- <td>{{ $grade->title }}</td> --}}
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
