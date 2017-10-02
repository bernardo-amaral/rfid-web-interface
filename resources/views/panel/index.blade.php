@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="row">
                <div class="col-md-12">
                    <a href="/admin/user/add" class="btn btn-primary btn-sm" style="margin: 10px 0 10px 0" role="button">New user</a>
                <div>
            <div>

            <div class="bs-example" data-example-id="panel-without-body-with-table">
                <div class="panel panel-default">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Card UID</th>
                                    <th>Status</th>
                                    <th width="10%">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->rfidkey }}</td>
                                    <td>
                                        @if ($user->active)
                                            <span class="badge badge-success">Active</span>
                                        @else
                                            <span class="badge badge-danger">Inactive</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($user->active)
                                            <a href="/admin/user/disable/{{$user->id}}" class="btn btn-danger btn-sm" role="button">Disable</a>
                                        @else
                                            <a href="/admin/user/enable/{{$user->id}}" class="btn btn-success btn-sm" role="button">Enable</a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
@endsection
