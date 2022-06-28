@extends('adminpages.side')
@section('admin_assets')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        @include('include.nav')
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6 style="font-weight: 700">Calendar</h6>
                        </div>
                        <div class="card-body" style="margin-bottom: -5vh">
                            <div id="calendar"></div>

                        </div>
                        <div class=card-footer></div>
                    </div>
                </div>
                <div class="col-9">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6 style="font-weight: 700">File Import</h6>
                        </div>
                        <div class="card-body" style="margin-bottom: -5vh">


                        </div>
                        <div class=card-footer></div>
                    </div>
                </div>
                <div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Event title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <select class="form-select" id="title" name="title" placeholder="title"
                                    aria-label="title" aria-describedby="email-addon" form="formpemain">
                                    <option selected>Choose Session</option>
                                    <option value="Training">Training</option>
                                    <option value="Match">Match</option>
                                </select>

                                <span id="titleError" class="text-danger"></span>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" id="saveBtn" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>






            </div>


        </div>
        </div>
        <script>
            $(document).ready(function() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                var booking = @json($events);
                $('#calendar').fullCalendar({
                    header: {
                        left: 'prev, next today',
                        center: 'title',
                        right: 'month, agendaWeek, agendaDay',
                    },

                    events: booking,
                    selectable: true,
                    contentHeight: 450,
                    selectHelper: true,
                    select: function(start, end, allDays) {
                        $('#bookingModal').modal('toggle');
                        $('#saveBtn').click(function() {
                            var title = $('#title').val();
                            var start_date = moment(start).format('YYYY-MM-DD');
                            var end_date = moment(end).format('YYYY-MM-DD');
                            $.ajax({
                                url: "{{ route('calendar.action') }}",
                                type: "POST",
                                dataType: 'json',
                                data: {
                                    title,
                                    start_date,
                                    end_date
                                },
                                success: function(response) {
                                    $('#bookingModal').modal('hide')
                                    $('#calendar').fullCalendar('renderEvent', {
                                        'title': response.title,
                                        'start': response.start,
                                        'end': response.end,
                                        'color': response.color
                                    });
                                },
                                error: function(error) {
                                    if (error.responseJSON.errors) {
                                        $('#titleError').html(error.responseJSON.errors
                                            .title);
                                    }
                                },
                            });
                        });
                    },
                    editable: true,
                    eventDrop: function(event) {
                        var id = event.id;
                        var start_date = moment(event.start).format('YYYY-MM-DD');
                        var end_date = moment(event.end).format('YYYY-MM-DD');
                        $.ajax({
                            url: "{{ route('calendar.update', '') }}" + '/' + id,
                            type: "PATCH",
                            dataType: 'json',
                            data: {
                                start_date,
                                end_date
                            },
                            success: function(response) {
                                swal("Good job!", "Event Updated!", "success");
                            },
                            error: function(error) {
                                console.log(error)
                            },
                        });
                    },
                    eventClick: function(event) {
                        var id = event.id;
                        if (confirm('Are you sure want to remove it')) {
                            $.ajax({
                                url: "{{ route('calendar.destroy', '') }}" + '/' + id,
                                type: "DELETE",
                                dataType: 'json',
                                success: function(response) {
                                    $('#calendar').fullCalendar('removeEvents', response);
                                    // swal("Good job!", "Event Deleted!", "success");
                                },
                                error: function(error) {
                                    console.log(error)
                                },
                            });
                        }
                    },
                    selectAllow: function(event) {
                        return moment(event.start).utcOffset(false).isSame(moment(event.end).subtract(1,
                            'second').utcOffset(false), 'day');
                    },
                });
                $("#bookingModal").on("hidden.bs.modal", function() {
                    $('#saveBtn').unbind();
                });
                $('.fc-event').css('font-size', '13px');
                // $('.fc-event').css('width', '20px');
                // $('.fc-event').css('border-radius', '50%');
            });
        </script>
        @include('include.plugin')

    </main>
@endsection
