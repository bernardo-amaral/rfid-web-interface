@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

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
                                        <span class="badge badge-success">Active</span>
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-danger btn-sm" role="button">Disable</a>
                                    </td>
                                </tr>
                            @endforeach
                                {{--  <tr>
                                    <td>Bernardo Amaral</td>
                                    <td>02 29 85 59</td>
                                    <td>
                                        <span class="badge badge-success">Active</span>
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-danger btn-sm" role="button">Disable</a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>John Doe</td>
                                    <td>67 12 34 89</td>
                                    <td>
                                        <span class="badge badge-danger">Inactive</span>
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-success btn-sm" role="button">Enable</a>
                                    </td>
                                </tr>  --}}

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
@endsection
