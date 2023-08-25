<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscription;

class SubscriptionController extends Controller
{
    public function setSubscription(Request $request){
        $newSub = new Subscription();

        $newSub->userId = $request->userId;
        $newSub->websiteId = $request->websiteId;

        $newSub->save();
    }
}
