<?php

namespace App\Http\Controllers\admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\auth\password_change_request;
use App\Models\Admin;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class change_password extends Controller
{
    public function index(){
        return view('dashboard.admin.module.setting.config_change-password');
    }
    public function store(password_change_request $request){
        $user=Admin::find($request->user()->id);
         $user->update([
            'password'=>Hash::make($request->new_password)
        ]);
        self::logout($request);
        return back()->with('password_success','زمز عبور شما با موفقیت تغییر کرد');
    }
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return 'test';
    }

}
