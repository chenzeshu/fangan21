<?php

namespace App\Http\Controllers;

use App\Mail\PlayerUnknown;
use App\Models\Price;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class mailController extends Controller
{
    public function send()
    {
       $users = User::all();

       foreach ($users as $user){
           $job = new \App\Jobs\mail($user);
           $this->dispatch($job);
       }
//        Mail::to($user)->send(new PlayerUnknown());

        echo "success";
    }

    public function show()
    {
        $data = Price::orderBy('day')->get();
        return view('view.mail.hi', compact('data'));
    }
}
