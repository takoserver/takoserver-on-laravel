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
<h2 class="sub-title">フォーム</h2>
<form method="post" action="{{ route('post.store') }}" class="form">
	@csrf
	<p class="login-form">件名</p>
	<input type="text" name="title" class="c-form-text"><br>
    <p class="login-form">本文</p>
	<input type="text" name="body" class="c-form-text"><br>
	<button type="submit">送信</button>
</form>
</div>
@include('common.footer')