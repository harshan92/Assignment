@extends("layouts.main")
@section('metas')
<meta http-equiv="cache-control" content="private, max-age=0, no-cache">
<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="expires" content="0">
@endsection
@section("contents")
<div class="row mt-3">
    <div class="col-md-6 offset-md-3 col-sm-12">
        <h4 class="text-center">Login</h4>
        @if (Session::has('message'))
                <div class="row">
                    <div class="col-md-12">

                        <div class="alert alert-danger">{{ Session::get('message') }}</div>

                    </div>
                </div>
            @endif
        <form method="POST" action="login_process">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" name="email" class="form-control " id="email" placeholder="Please enter email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Please enter password">
            </div>
           
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</div>
@endsection