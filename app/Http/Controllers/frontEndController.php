<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontEndController extends Controller
{
    public function showIndex(){
        return view('frontEnd.index');
    }

    public function showBuying(){
        return view('frontEnd.buying');
    }

    public function showContacts(){
        return view('frontEnd.contacts');
    }

    public function showFinance(){
        return view('frontEnd.finance');
    }

    public function showRenting(){
        return view('frontEnd.renting');
    }

    public function showSelling(){
        return view('frontEnd.selling');
    }

}
