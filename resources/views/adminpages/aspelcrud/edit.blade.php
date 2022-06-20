@extends('adminpages.side')
@section('admin_assets')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        @include('include.nav')
        <div class="container-fluid py-4">
            <div class="col-lg-12">
                <div class="card z-index-2">
                    <div class="card-header pb-0">
                        <h6>Tambah aspel</h6>

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
                        <form action="{{ route('aspelcrud.update', $aspel->id ) }}" role="form text-left" method="POST" id="formeditaspel">
                            
                            @csrf
                            @method('PATCH')
                            <div class="mb-3">
                                <input type="text" class="form-control" name="name" placeholder="Name" aria-label="Name"
                                    aria-describedby="email-addon" value="{{ $aspel->name }}" required>
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" name="email" placeholder="Email"
                                    aria-label="Email" aria-describedby="email-addon" value="{{ $aspel->email }}" required>
                            </div>
                            <div class="input-group mb-3">

                                <select class="form-select" id="position" name="position" placeholder="position"
                                    aria-label="position" aria-describedby="email-addon" form="formeditaspel" >
                                    
                                    <option value="GK" {{$aspel->position == 'GK' ? 'selected' : '' }}>Goalkeeper (GK)</option>
                                    <option value="RB" {{$aspel->position == 'RB' ? 'selected' : '' }}>Right Fullback (RB)</option>
                                    <option value="LB" {{$aspel->position == 'LB' ? 'selected' : '' }}>Left Fullback (LB)</option>
                                    <option value="CB" {{$aspel->position == 'CB' ? 'selected' : '' }}>Center Back (CB)</option>
                                    <option value="RM" {{$aspel->position == 'RM' ? 'selected' : '' }}>Right Midfielder (RM)</option>
                                    <option value="LM" {{$aspel->position == 'LM' ? 'selected' : '' }}>Left Midfielder (LM)</option>
                                    <option value="CM" {{$aspel->position == 'CM' ? 'selected' : '' }}>Center Midfielder (CM)</option>
                                    <option value="ST" {{$aspel->position == 'ST' ? 'selected' : '' }}>Striker (ST)</option>


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
