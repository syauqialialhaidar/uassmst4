@extends('app')

@section('content')
    <div class="container mt-4">
        <div class="card mx-auto" style="max-width: 600px;">
            <div class="card-header bg-primary text-white">
                <h3 class="text-center mb-4">Login</h3>
            </div>
            <div class="card-body">
                @if(session('error'))
                    <div class="alert alert-danger" role="alert">
                        <i class="bi bi-exclamation-triangle-fill"></i> {{ session('error') }}
                    </div>
                @endif

                <form action="{{ route('login.submit') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" id="password" name="password" class="form-control" required>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
                <div class="text-center">
                    
                    <a href="{{ route('daftarakun') }}" class="btn btn-link"><span>Belum punya akun? </span></a>
                    <a href="{{ route('lupapass') }}" class="btn btn-link"><span>Lupa Password</span></a>
                </div>
            </div>
        </div>
    </div>
@endsection
