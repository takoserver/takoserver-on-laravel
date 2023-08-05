@php
 $title = 'takoserver 登録';
@endphp
@include('common.header')
<section>
	<div class="form-box">
		<div class="form-value">
			<form method="post" action="{{route('register')}}" class="form">
				@if ($errors->any())
				<div>
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
				@endif
				@csrf
				<h2>新規アカウント</h2>
				<div class="inputbox">
					<ion-icon name="mail-outline"></ion-icon>
					<input type="text" name="name"><br>
					<label for="">ユーザー名</label>
				</div>
				<div class="inputbox">
					<ion-icon name="mail-outline"></ion-icon>
					<input type="text" name="email"><br>
					<label for="">メールアドレス</label>
				</div>
				<div class="inputbox">
					<ion-icon name="lock-closed-outline"></ion-icon>
					<input type="password" name="password"><br>
					<label for="">パスワード</label>
				</div>
				<div class="inputbox">
					<ion-icon name="lock-closed-outline"></ion-icon>
					<input type="password" name="password_confirmation"><br>
					<label for="">パスワード確認</label>
				</div>
				<button>新規登録</button>
				<div class="register">
					<p>アカウントを持っていますか？ <a href="./login">ログイン</a></p>
				</div>
			</form>
		</div>
	</div>
</section>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
{{--
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
--}}
@include('common.footer')