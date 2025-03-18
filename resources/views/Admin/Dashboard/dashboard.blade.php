@extends('Admin.layouts.master')

@section('content')
<section class="dashboard">
    <div class="card">
        <h3>محصولات</h3>
        <p>مدیریت تمامی محصولات موجود</p>
        <button>مشاهده و مدیریت محصولات</button>
    </div>
    <div class="card">
        <h3>کاربران</h3>
        <p>مدیریت کاربران سایت</p>
        <button>مشاهده و مدیریت کاربران</button>
    </div>
    <div class="card">
        <h3>دسته‌بندی‌ها</h3>
        <p>مدیریت دسته‌بندی‌های محصولات</p>
        <button>مشاهده و مدیریت دسته‌بندی‌ها</button>
    </div>
    <div class="card">
        <h3>نظرات کاربران</h3>
        <p>مدیریت نظرات ارسال‌شده توسط کاربران</p>
        <button>مشاهده و مدیریت نظرات</button>
    </div>
</section>

@endsection
