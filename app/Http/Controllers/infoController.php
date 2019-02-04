<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\QQ;
use App\Invitation_code;
use function PHPSTORM_META\type;

class infoController extends Controller
{
    public function store(Request $request)
    {
        //用户注册过，显示邀请码
        $user = User::where('qq', $request->qq)->first();
        if (isset($user)) {
            return back()->with('success', $user->invitation_code);
        }

        $this->validate($request, [
            'qq' => 'required|exists:qqs',
            'email' => 'required|unique:users|email',
            'tel' => 'required|unique:users|regex:/^\d{11}$/'
        ]);

        $user = User::where('qq', $request->qq)->first();

        if (Invitation_code::first() == true) {

            //获取一条邀请码
            $code = Invitation_code::first();
            //存储数据
            $user = new User;
            $user->qq = $request->qq;
            $user->email = $request->email;
            $user->tel = $request->tel;
            $user->invitation_code = $code->invitation_code;
            $user->save();
            //删除用过的邀请码
            $code->delete();
            return back()->with('success', $code->invitation_code);
        } else {
            return back()->withErrors(['邀请码用完了']);
        }

    }
}
