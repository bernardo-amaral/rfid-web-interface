<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DefaultController extends Controller
{
    /**
     * Check RFID BY ID
     * @return JSON
     */
    public function checkRfid($rfid)
    {
        $reply = [
            'rfid' => $rfid,
            'access' => false,
        ];
        $user = \App\User::find(['rfidkey' => $rfid, 'active' => true])->first();
        if ($user) {
            $reply = [
                'rfid' => $rfid,
                'username' => $user->name,
                'access' => true,
            ];
        }
        return $reply;
    }

}