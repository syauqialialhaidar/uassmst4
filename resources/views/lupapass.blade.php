@extends('app')

@section('content')
    <div class="container mt-4">
        <div class="card mx-auto" style="max-width: 600px;">
            <div class="card-header bg-primary text-white">
                <h3 class="text-center mb-4">Reset Password</h3>
            </div>
            <div class="card-body">
                @if(session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <form action="{{ route('password.email') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}" required>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary">Send Password Reset Link</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
