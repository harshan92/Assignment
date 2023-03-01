@extends("layouts.main")

@section("contents")
<div class="row mt-3">
    <div class="col-md-6 offset-md-3 col-sm-12">
        <h4 class="text-center">Login</h4>
        <form>
            
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Please enter email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Please enter password">
            </div>
           
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</div>
@endsection