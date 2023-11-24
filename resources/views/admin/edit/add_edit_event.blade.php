@extends('layouts.admin_layout.admin_layout')
@section('content')
    <div class="container-settings">
        <div class="tablecontainer">
            <!-- Success MSG start -->
            @if (Session::has('success_message'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('success_message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php Session::forget('success_message'); ?>
            @endif
            @if (Session::has('error_message'))
                <div class="alert alert-danger" role="alert">
                    {{ Session::get('error_message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php Session::forget('error_message'); ?>
            @endif
            <!-- Success MSG end -->
            <form name="eventForm" id="EventForm" @if (empty($eventData['id'])) action="{{ url('admin/add-edit-event') }}" @else action="{{ url('admin/add-edit-event/' . $eventData['id']) }}" @endif method="post" enctype="multipart/form-data">@csrf
                <h3>{{ $title }}</h3>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="country">Date</label>
                                <input type="text" class="form-control" name="date" id="date"
                                    placeholder="date... " @if (!empty($eventData['date'])) value="{{ $eventData['date'] }}" @else value="{{ old('date') }}" @endif>
                            </div>
                            <div class="form-group">
                                <label for="country">Country</label>
                                <textarea name="country" id="country" class="form-control" rows="3"
                                    placeholder="country..."
                                    required>@if (!empty($eventData['country'])){{ $eventData['country'] }}@else{{ old('country') }}@endif</textarea>
                            </div>
                            <div class="form-group">
                                <label for="place">Place</label>
                                <textarea name="place" id="place" class="form-control" rows="3"
                                    placeholder="Event Text..."
                                    required>@if (!empty($eventData['place'])){{ $eventData['place'] }}@else{{ old('place') }}@endif</textarea>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection