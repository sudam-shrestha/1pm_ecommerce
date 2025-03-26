<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\EmailNotification;
use App\Models\Admin;
use App\Models\Shop;
use App\Models\ShopProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function home()
    {
        return view('frontend.home');
    }

    public function store_request(Request $request)
    {
        $shop = new Shop();
        $shop->name = $request->name;
        $shop->email = $request->email;
        $shop->password = Hash::make(rand(10000, 99999));
        $shop->save();

        $profile = new ShopProfile();
        $profile->shop_id = $shop->id;
        $profile->shop_name = $request->shop_name;
        $profile->address = $request->address;
        $profile->save();

        Mail::to('sudamshrestha2144@gmail.com')->send(new EmailNotification());

        return redirect()->route('home');
    }
}
