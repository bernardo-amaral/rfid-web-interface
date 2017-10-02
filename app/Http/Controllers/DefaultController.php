<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DefaultController extends Controller
{
    /**
     * Index page
     * @return view
     */
    public function checkRfid($rfid)
    {
        $user = \App\User::find(['rfidkey' => $rfid, 'active' => true])->first();
        dd($user);
        return [
            'rfid' => $rfid,
            'access' => true,
        ];
    }

}