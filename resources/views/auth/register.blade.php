{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

@extends('layout_home.master')
@section('content')
        <div class="page-wrappers login-body full-row bg-gray">
            <div class="login-wrapper">
            	<div class="container">
                	<div class="loginbox">
                        <div class="login-right">
							<div class="login-right-wrap">
								<h1>Registrar</h1>
								<p class="account-subtitle">Acesso ao nosso painel</p>
								<!-- Form -->
                                <form method="POST" enctype="multipart/form-data" action="{{ route('register') }}">
                                    @csrf
									<div class="form-group">
										<input type="text"  name="name" class="form-control" placeholder="Seu Nome">
                                        @error('name')
                                            <span>
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
									</div>
									<div class="form-group">
										<input type="email"  name="email" class="form-control" placeholder="Seu E-mail*">
                                        @error('email')
                                            <span>
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
									</div>
									<div class="form-group">
										<input type="text"  name="phone" class="form-control" placeholder="Seu Telefone*" maxlength="10">
                                        @error('phone')
                                            <span>
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
									</div>
									<div class="form-group">
										<input type="password" name="password"  class="form-control" placeholder="Sua Senha*">
                                        @error('password')
                                            <span>
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
									</div>
                                    <div class="form-group">
										<input type="password" name="password_confirmation"  class="form-control" placeholder="Repita Sua Senha*">
									</div>

									 <div class="form-check-inline">
									  <label class="form-check-label">
										<input type="radio" class="form-check-input" name="role" value="user" checked>Usuario
									  </label>
									</div>
									<div class="form-check-inline">
									  <label class="form-check-label">
										<input type="radio" class="form-check-input" name="role" value="agent">Agente
									  </label>
									</div>
									 

									<div class="form-group">
										<label class="col-form-label"><b>Imagem do Usuário</b></label>
										<input class="form-control" name="image" type="file">
									</div>

									<button class="btn btn-success" name="reg" type="submit">Registrar</button>

								</form>

								<div class="login-or">
									<span class="or-line"></span>
									<span class="span-or">ou</span>
								</div>

								

								<div class="text-center dont-have">Já tem uma conta? <a href="/login">Entrar</a></div>

							</div><!-- FOR MORE PROJECTS visit: codeastro.com -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection