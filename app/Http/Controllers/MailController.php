<?php

namespace App\Http\Controllers;

use App\Mail\MailNotify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public static function sendMailNotification($users, $website, $post){
        foreach ($users as $user){

            $mailData = [
                'website' => $website->websiteName,
                'title' =>$post->postTitle,
                'body' => $post->postContent,
            ];

            Mail::to($user->email)->send(new MailNotify($mailData));
        }
    }
}
