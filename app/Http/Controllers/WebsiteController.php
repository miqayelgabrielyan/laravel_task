<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Website;
use App\Http\Controllers\UserController;
use App\Models\User;
class WebsiteController extends Controller
{

    public static function getFollowers($websiteId){
        $followers = User::join('subscriptions', 'users.userId', '=', 'subscriptions.userId')->where('subscriptions.websiteId', '=', $websiteId)
            ->get();
        return $followers;
    }

    public function setWebsite(Request $request){
        $website = new Website();

        $website->websiteName = $request->websiteName;

        $website->save();
    }


}
