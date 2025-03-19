@extends('Auth.layouts.master')

@section('content')
<div class="container">
    <h1>ثبت نام</h1>
    <form action="#" method="post">
        <div class="form-group">
            <label for="username">نام کاربری:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="email">ایمیل:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">رمز عبور:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group">
            <label for="confirm-password">تکرار رمز عبور:</label>
            <input type="password" id="confirm-password" name="confirm-password" required>
        </div>
        <button type="submit">ثبت نام</button>
    </form>
    <p>قبلاً حساب کاربری دارید؟ <a href="">ورود</a></p>
</div>

@endsection
