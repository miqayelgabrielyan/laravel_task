<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Website;
use App\Mail\MailNotify;
use Illuminate\Support\Facades\Mail;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Notifications\SendMailNotification;
use App\Http\Controllers\MailController;

class PostController extends Controller
{

    public function setPost(Request $request){
        $newPost = new Post();

        $newPost->websiteId = $request->websiteId;
        $newPost->postTitle = $request->postTitle;
        $newPost->postContent = $request->postContent;

        $newPost->save();
        $website = Website::get()->firstWhere('websiteId', '=', $newPost->websiteId);

        MailController::sendMailNotification(WebsiteController::getFollowers($request->websiteId), $website, $newPost);

        return 200;
    }


}
