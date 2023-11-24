@extends('layouts.admin_layout.admin_layout')
@section('content')
<div class="container-settings">
<div class="tablecontainer">
    <h3 style="margin-top: 10px"> Events <a href="{{ URL('admin/add-edit-event') }}"
        style="max-width: 150px; float: right; display:inline-block" class="btn btn-block btn-success"> Add Event </a></h3>
    <div class="innerCon">
    <table class="table" id="example">
        <thead>
            <tr>
                <th class="table__heading">Date</th>
                <th class="table__heading">Country</th>
                <th class="table__heading">Place</th>
                <th class="table__heading">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($eventDB as $event)
            <tr class="table__row">
                <td class="table__content" data-heading="name">{{$event['date']}}</td>
                <td class="table__content" data-heading="name">{{$event['country']}}</td>
                <td class="table__content" data-heading="name">{{$event['place']}}</td>
                <td class="table__content" data-heading="action">
                    &nbsp;&nbsp;
                    <a title="Edit" href="{{ url('admin/add-edit-event/'.$event['id']) }}">EDIT</a>
                    &nbsp;&nbsp;
                    <a title="Delete Event" href="javascript:void(0)" class="confirmDelete" record="event" recordid="{{ $event['id'] }}">DELETE</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>
</div>
@endsection