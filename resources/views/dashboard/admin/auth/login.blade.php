
@extends('dashboard.admin.layout_auth')
    @section('title')خوش امدید@endsection
    @section('description')جهت دسترسی به پنل مدیریت وارد شوید@endsection
    @section('items_filter')
    <form class="form-horizontal" action="{{route('admin.login')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="username">نام کاربری</label>
            <input type="text" class="form-control" id="username" name="email" placeholder="نام کاربری را وارد کنید">
        </div>

        <div class="form-group">
            <label for="userpassword">رمز عبور</label>
            <input type="password" class="form-control" name="password" id="userpassword" placeholder="رمز عبور را وارد کنید">
        </div>

        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="customControlInline" name="remember">
            <label class="custom-control-label" for="customControlInline">به خاطر سپاری</label>
        </div>

        <div class="mt-3">
            <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">ورود</button>
        </div>
    </form>
    @endsection
