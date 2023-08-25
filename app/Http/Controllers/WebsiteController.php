<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Website;
class WebsiteController extends Controller
{
    public function getWebsites(){
        $websites = Website::get();
        return view('home', ['websites' => $websites]);
    }

    public function setWebsite(Request $request){
        $website = new Website();

        $website->websiteName = $request->websiteName;

        $website->save();
        return redirect('admin');
    }

}
