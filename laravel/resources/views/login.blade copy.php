@include('common.header')
<div class="nyanya wrapper login-title">
    <h1 class="sub-title">ログイン画面</h1>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST"action="/login">
        @csrf
        <div>
            <label for="email" class="login-form">メールアドレス</label>
            <input name="email" type="email" value="{{old('email')}}" class="c-form-text"/>
        </div>
        <div>
            <label for="password" class="login-form">パスワード</label>
            <input name="password" type="password" class="c-form-text" class="c-form-text"/>
        </div>
        <div class="form-group">
            <label for="g-recaptcha-response">reCAPTCHA</label>
            <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_SITE_KEY') }}"></div>
        </div>        
        <div>
            <button type="submit" >送信</button>
        </div>
    </form>
</div>
@include('common.footer')