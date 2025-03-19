@extends('Auth.layouts.master')

@section('content')

    <div class="container">
        <h1>تایید ایمیل</h1>
        <p>لطفاً کد تایید ارسال‌شده به ایمیل خود را وارد کنید.</p>
        <form action="#" method="post">
            <div class="form-group">
                <label for="verification-code">کد تایید:</label>
                <input type="text" id="verification-code" name="verification-code" required maxlength="6" placeholder="123456">
            </div>
            <button type="submit">تایید</button>
        </form>
        <p>کد را دریافت نکرده‌اید؟ <a href="#">ارسال مجدد کد</a></p>
    </div>


@endsection
