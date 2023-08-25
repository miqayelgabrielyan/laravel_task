<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function setUser(Request $request){
        $newUser = new User();

        $newUser->userName = $request->userName;
        $newUser->email = $request->email;
        $newUser->password = $request->password;
        $newUser->save();

        return redirect('admin');

    }

    public static function getFollowers($websiteId){
        $followers = User::join('subscriptions', 'users.userId', '=', 'subscriptions.userId')->where('subscriptions.websiteId', '=', $websiteId)
            ->get();
        return $followers;
    }
}
