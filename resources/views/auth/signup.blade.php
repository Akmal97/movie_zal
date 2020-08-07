@extends('templates.default')

@section('content')
    <p>РЕГИСТРАЦИЯ mthfck</p>
    <div class="row">
    	<div class="col-lg-4 mx-auto">   	
		    <form method="POST" action="{{ route('auth.signup') }}" novalidate> 
		    	@csrf
			  <div class="form-group">
			    <label for="email">Email</label>
			    <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="email" placeholder="Вводи в меня">
			  </div>
			  <div class="form-group">
			    <label for="username">Login</label>
			    <input type="text" class="form-control" name="username" id="username" placeholder="Вводи в меня">
			  </div>
			  <div class="form-group">
			    <label for="password">Password</label>
			    <input type="password" class="form-control" name="password" id="password" placeholder="Вводи в меня полностью">
			  </div>
			  <button type="submit" class="btn btn-primary">Жмакай сюда</button>
			</form>
		</div>
	</div>
@endsection