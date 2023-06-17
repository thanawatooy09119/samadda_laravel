@extends('layouts\app')
@section('content')

<!-- login.blade.php -->

<form method="POST" action="{{ route('auth.login') }}">
    @csrf

	<div class="col-lg-6 justify-content-center">
		<div>
			<label for="username">Username</label>
			<input class="form-control" id="username" type="text" name="username" required autofocus>
		</div>
	
		<div>
			<label for="password">Password</label>
			<input class="form-control" id="password" type="password" name="password" required>
		</div>
	
		<button type="submit" class="btn btn-primary mt-3">Login</button>
	</div>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</form>


@endsection