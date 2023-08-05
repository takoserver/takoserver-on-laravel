@php
 $title = 'takoserver ログイン';
@endphp
@include('common.header')
<section>
    <div class="form-box">
        <div class="form-value">
            <form method="POST"action="/login">
                @csrf
                <h2>たこ鯖ログイン</h2>
                @if ($errors->any())
                <div>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="inputbox">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input name="email" type="email" value="{{old('email')}}"/>
                    <label for="">メールアドレス</label>
                </div>
                <div class="inputbox">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input name="password" type="password" />
                    <label for="">パスワード</label>
                </div>
                <div class="forget">
                    <label for=""><input type="checkbox">ログイン情報を保存 <a href="#">パスワードを忘れた</a></label>
                  
                </div>
                <button>送信</button>
                <div class="register">
                    <p>アカウントを持っていませんか？ <a href="./register">新規登録</a></p>
                </div>
            </form>
        </div>
    </div>
</section>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
	
{{--
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
--}}
@include('common.footer')