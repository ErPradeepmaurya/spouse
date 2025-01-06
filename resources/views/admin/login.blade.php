{{-- <!DOCTYPE html>
<html>

<head>
    <title>Admin Login</title>
</head>
    <body>
        <h1>Admin Login</h1>
        <form method="POST" action="{{ route('admin.login') }}">
            @csrf
            <div>
                <label>Enter Email:</label>
                <input type="email" name="email" required>
            </div>
            <div>
                <label>Password:</label>
                <input type="password" name="password" required>
            </div>
            <div>
                <button type="submit">Login</button>
            </div>
        </form>
        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </body>
</html> --}}




@include('admin.partials.headerLink')

<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="rhs p-5 shadow rounded bg-white">
        <div class="form-tit text-center mb-4">
            <h1 class="fw-bold">Sign in to Spouse4ever</h1>
        </div>
        <div class="form-login">
            <form method="POST" action="{{ route('admin.login') }}">
                @csrf
                <div class="form-group mb-3">
                    <label class="lb">Email:</label>
                    <input type="email" class="form-control" @required(true) id="email" placeholder="Enter email"
                        name="email">
                </div>
                <div class="form-group mb-3">
                    <label class="lb">Password:</label>
                    <input type="password" class="form-control" @required(true) id="pwd"
                        placeholder="Enter password" name="password">
                </div>
                <div class="form-group form-check mb-3">
                    <label class="form-check-label">
                        <input class="form-check-input" @required(true) type="checkbox" name="agree"> Remember
                        me
                    </label>
                </div>
                <button type="submit" class="btn btn-primary w-100">Sign in</button>
            </form>
            <div class="mt-2">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif  
            </div>
            @if ($errors->any())
                <div class="text-danger fw-bold text-center mt-2">
                    @foreach ($errors->all() as $error)
                        {{ $error }}
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</div>
