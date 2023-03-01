@extends('layouts.main')

@section('contents')
    <div class="row mt-3">
        <div class="col-md-6 offset-md-3 col-sm-12">
            <h4 class="text-center">Registration</h4>
            <form method="POST" action="register_process">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Please enter name" />
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Contact No</label>
                    <input type="text" class="form-control" id="name" placeholder="Please enter contact number" />
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Please enter email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Please enter password">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Please enter confirm password">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Agree with Term and conditions</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
