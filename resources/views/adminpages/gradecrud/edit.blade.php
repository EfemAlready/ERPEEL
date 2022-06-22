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
                        <form action="{{ route('gradecrud.update', $grade->id ) }}" role="form text-left" method="POST" id="formeditgrade">
                            
                            @csrf
                            @method('PATCH')
                            <div class="mb-3">
                                <input type="text" class="form-control" name="pace" placeholder="pace" aria-label="Name"
                                    aria-describedby="email-addon" value="{{ $grade->pace }}" required>
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" name="shooting" placeholder="shooting" aria-label="Name"
                                    aria-describedby="email-addon" value="{{ $grade->shooting }}" required>
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" name="passing" placeholder="passing" aria-label="Name"
                                    aria-describedby="email-addon" value="{{ $grade->passing }}" required>
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" name="agility" placeholder="agility" aria-label="Name"
                                    aria-describedby="email-addon" value="{{ $grade->agility }}" required>>
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" name="defending" placeholder="defending" aria-label="Name"
                                    aria-describedby="email-addon" value="{{ $grade->defending }}" required>
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" name="overall" placeholder="pace" aria-label="Name"
                                    aria-describedby="email-addon" value="{{ $grade->overall }}" required>
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
