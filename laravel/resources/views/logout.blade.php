@php
 $title = 'ログアウト';
@endphp
@include("common.header")
<div class="nyanya wrapper login-title">
    <h1>ログアウトしますか？</h1>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">ログアウト</button>
    </form>
</div>
@include("common.footer")