@include('common.header')
<div class="nyanya wrapper login-title">
@if ($errors->any())
<div>
	<ul>
		@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif
<h2 class="sub-title">会員登録</h2>
<form method="post" action="{{route('register')}}" class="form">
	@csrf
	<p class="login-form">お名前</p>
	<input type="text" name="name" class="c-form-text"><br>
    <p class="login-form">メールアドレス</p>
	<input type="text" name="email" class="c-form-text"><br>
	<p class="login-form">パスワード</p>
	<input type="password" name="password" class="c-form-text"><br>
	<p class="login-form">パスワード再入力</p>
	<input type="password" name="password_confirmation" class="c-form-text"><br>
	<div class="g-recaptcha" data-sitekey="6Le7kEcmAAAAAOvVJP9ZqKTSIr2Z6IvMfXtLthu4"></div>
	<button type="submit">登録</button>
</form>
</div>
@include('common.footer')