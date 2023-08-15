<?php

namespace App\Http\Controllers;

use App\Traits\ipaymu;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    use ipaymu;
    public function index()
    {
         // SAMPLE HIT API iPaymu v2 PHP //
         //Response
         $balance = $this->balance();
            if($balance->Status == 200) {
                return view('pages.admin.dashboard',compact('balance'));
            } else {
                echo "tidak ada koneksi";
            }
            //End Response
    }
}
