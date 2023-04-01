@extends('master')
@section('content')

<div class="container mt-10 customer-login">
    <div class="row p-2">
        <div class="col-md-4"></div>
        <div class="col-md-4 col-sm-offset-4">
            <form>
                <div class="form-group mt-4">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group mt-4">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary mt-4">Submit</button>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>

</div>

@endsection