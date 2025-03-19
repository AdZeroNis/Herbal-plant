@extends('Auth.layouts.master')

@section('content')
<div class="container">
    <h1>ورود </h1>
    <form action="#" method="post">

        <div class="form-group">
            <label for="email">ایمیل:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">رمز عبور:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit"> ورود</button>
    </form>
    <p> حساب کاربری ندارید؟ <a href="#">ثبت نام</a></p>
</div>

@endsection
