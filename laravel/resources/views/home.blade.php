@include('common.header')
<div class="nyanya wrapper">
    @auth
    <h3 class="welcome-messeage">ようこそ{{Auth::user()->name}}さん！ intel最高だよな？</h3>
    @endauth
</div>
@include('common.footer')