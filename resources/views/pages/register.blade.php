@extends('layouts.main')
@section('metas')
    <meta http-equiv="cache-control" content="private, max-age=0, no-cache">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="expires" content="0">
@endsection
@section('contents')
    <div class="row mt-3">
        <div class="col-md-6 offset-md-3 col-sm-12">
            <h4 class="text-center">Registration</h4>
            @if (Session::has('message'))
                <div class="row">
                    <div class="col-md-12">

                        <div class="alert alert-success">{{ Session::get('message') }}</div>

                    </div>
                </div>
            @endif
            <form method="POST" action="register_process">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        id="name" placeholder="Please enter name" aria-describedby="validationNameFeedback" />
                    @error('name')
                        <div id="validationNameFeedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="contact_no" class="form-label">Contact No</label>
                    <input type="text" class="form-control @error('contact_no') is-invalid @enderror" name="contact_no"
                        id="contact_no" placeholder="Please enter contact number"
                        aria-describedby="validationContactFeedback" />
                    @error('contact_no')
                        <div id="validationContactFeedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control @error('address') is-invalid @enderror" name="address"
                        id="address" placeholder="Please enter contact number"
                        aria-describedby="validationAddressFeedback" />
                    @error('address')
                        <div id="validationAddressFeedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" name="email"
                        id="email" placeholder="Please enter email" aria-describedby="validationEmailFeedback">
                    @error('email')
                        <div id="validationEmailFeedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                        id="password" placeholder="Please enter password" aria-describedby="validationPasswordFeedback">
                    @error('password')
                        <div id="validationPasswordFeedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password_confirm" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control @error('password_confirm') is-invalid @enderror"
                        id="password_confirm" name="password_confirm" placeholder="Please enter confirm password"
                        aria-describedby="validationPasswordConfirmFeedback">
                    @error('password_confirm')
                        <div id="validationPasswordConfirmFeedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
