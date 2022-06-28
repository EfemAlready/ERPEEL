@extends('adminpages.side')
@section('admin_assets')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        @include('include.nav')
        <div class="container-fluid py-4">
            {{-- Row --}}
            <div class="row">
               
                
                <div class="col-5">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6 style="font-weight: 700">Team Members</h6>
                            <hr>
                        </div>
                        <div class="card-body" style="margin-bottom: -5vh;margin-top:-5vh">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <th>
                                            Name
                                        </th>
                                        <th>
                                            Position
                                        </th>
                                    </thead>    


                                    <tbody>
                                    @foreach ($team_members as $t)
                                    <tr>
                                        <td>{{ $t->user->name }}</td>
                                        <td>{{ $t->user->position }}</td>
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
