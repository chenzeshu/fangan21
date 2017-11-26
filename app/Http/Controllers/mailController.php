<?php

namespace App\Http\Controllers;

use App\Mail\PlayerUnknown;
use App\Models\Price;
use App\Models\Qer;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class mailController extends Controller
{
    /**
     * $number offsetNumber
     */
    public function send($number)
    {
       $users = Qer::offset($number)->limit(200)->get();

       foreach ($users as $user){
           $job = new \App\Jobs\mail($user);
           $this->dispatch($job);
       }
        echo "success";
    }


    public function show()
    {
        $data = Price::orderBy('day')->get();
        return view('view.mail.hi', compact('data'));
    }

    public function test()
    {
        $users = User::all();
        foreach ($users as $user){
            Mail::to($user)->send(new PlayerUnknown());
        }
        echo "success";
    }
}
