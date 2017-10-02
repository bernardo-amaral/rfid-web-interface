@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <form action="/admin/user/save" method="post" autocomplete="off">

                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" placeholder="User Name" autocomplete="off">
                    <small id="nameHelp" class="form-text text-muted">Complete Name</small>
                </div>

                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" autocomplete="off">
                    <small id="emailHelp" class="form-text text-muted">Email address</small>
                </div>

                <div class="form-group">
                    <label for="rfid">RFID ID</label>
                    <input type="text" class="form-control" id="rfid" name="rfid" aria-describedby="rfidHelp" placeholder="Enter rfid" autocomplete="off">
                    <small id="rfidHelp" class="form-text text-muted">RFID</small>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" autocomplete="off">
                </div>

                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" name="active" value="1" class="form-check-input" autocomplete="off">Active
                    </label>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>


        </div>
    </div>
</div>
@endsection
