@extends('adminpages.side')
@section('admin_assets')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        @include('include.nav')
        <div class="container-fluid py-4">
            <div class="col-lg-12">
                <div class="card z-index-2">
                    <div class="card-header pb-0">
                        <h6>Tambah pelatih</h6>

                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div><br />
                        @endif
                        <form action="{{ route('pelatihcrud.store') }}" role="form text-left" method="POST" id="formpelatih">
                            @csrf
                            <div class="mb-3">
                                <input type="text" class="form-control" name="name" placeholder="Name" aria-label="Name"
                                    aria-describedby="email-addon" required>
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" name="email" placeholder="Email"
                                    aria-label="Email" aria-describedby="email-addon" required>
                            </div>
                            <div class="input-group mb-3">

                                <select class="form-select" id="position" name="position" placeholder="position"
                                    aria-label="position" aria-describedby="email-addon" form="formpelatih">
                                    <option selected>Choose Position...</option>
                                    <option value="GK">Goalkeeper (GK)</option>
                                    <option value="RB">Right Fullback (RB)</option>
                                    <option value="LB">Left Fullback (LB)</option>
                                    <option value="CB">Center Back (CB)</option>
                                    <option value="RM">Right Midfielder (RM)</option>
                                    <option value="LM">Left Midfielder (LM)</option>
                                    <option value="CM">Center Midfielder (CM)</option>
                                    <option value="ST">Striker (ST)</option>


                                </select>
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" name="password" placeholder="Password"
                                    aria-label="Password" aria-describedby="password-addon" required>
                            </div>

                            <div class="text-center">
                                <input type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>





        </div>
        @include('include.plugin')
    </main>
@endsection
