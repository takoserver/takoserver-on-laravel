@php
 $title = 'ダッシュボード';
@endphp
@include('common.header')
<div class="nyanya wrapper">
    @auth
    <h3 class="welcome-messeage">ようこそ{{Auth::user()->name}}さん！ intel最高だよな？</h3>
    @endauth
</div>
<div class="nyanya wrapper">
登録されているユーザー一覧
@foreach ($users as $user)
    <p class="welcome-messeage">
    {{$user->name}}
    </p>
@endforeach
</div>
@include('common.footer')