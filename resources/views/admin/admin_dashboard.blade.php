@extends('layouts.admin_layout.admin_layout')
@section('content')

    <div class="mid-box">
        <h2>Admin</h2>
        <h3>Panel</h3>
    </div>
    <div class="dashboard-box">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button class="pimp-btn2"><a href="{{ url('admin/eventPage') }}"><i>Edit EVENT</i></a></button>
    </div>

@endsection
