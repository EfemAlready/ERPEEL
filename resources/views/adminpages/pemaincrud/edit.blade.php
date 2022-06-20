@extends('adminpages.side')
@section('admin_assets')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        @include('include.nav')
        <div class="container-fluid py-4">
            <div class="col-lg-12">
                <div class="card z-index-2">
                    <div class="card-header pb-0">
                        <h6>Tambah Pemain</h6>

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
                        <form action="{{ route('pemaincrud.update', $pemain->id ) }}" role="form text-left" method="POST" id="formeditpemain">
                            
                            @csrf
                            @method('PATCH')
                            <div class="mb-3">
                                <input type="text" class="form-control" name="name" placeholder="Name" aria-label="Name"
                                    aria-describedby="email-addon" value="{{ $pemain->name }}" required>
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" name="email" placeholder="Email"
                                    aria-label="Email" aria-describedby="email-addon" value="{{ $pemain->email }}" required>
                            </div>
                            <div class="input-group mb-3">

                                <select class="form-select" id="position" name="position" placeholder="position"
                                    aria-label="position" aria-describedby="email-addon" form="formeditpemain" >
                                    
                                    <option value="GK" {{$pemain->position == 'GK' ? 'selected' : '' }}>Goalkeeper (GK)</option>
                                    <option value="RB" {{$pemain->position == 'RB' ? 'selected' : '' }}>Right Fullback (RB)</option>
                                    <option value="LB" {{$pemain->position == 'LB' ? 'selected' : '' }}>Left Fullback (LB)</option>
                                    <option value="CB" {{$pemain->position == 'CB' ? 'selected' : '' }}>Center Back (CB)</option>
                                    <option value="RM" {{$pemain->position == 'RM' ? 'selected' : '' }}>Right Midfielder (RM)</option>
                                    <option value="LM" {{$pemain->position == 'LM' ? 'selected' : '' }}>Left Midfielder (LM)</option>
                                    <option value="CM" {{$pemain->position == 'CM' ? 'selected' : '' }}>Center Midfielder (CM)</option>
                                    <option value="ST" {{$pemain->position == 'ST' ? 'selected' : '' }}>Striker (ST)</option>


                                </select>
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" name="password" placeholder="Password"
                                    aria-label="Password" aria-describedby="password-addon">
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
