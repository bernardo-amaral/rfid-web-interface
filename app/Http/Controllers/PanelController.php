<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PanelController extends Controller
{
    /**
     * Index page
     * @return view
     */
    public function index(Request $request)
    {
        $data = $request->all();
        $users = \App\User::all();
        return view('panel.index', compact('users'));
    }

    /**
     * User Add page
     * @return view
     */
    public function addUser(Request $request)
    {
        $data = $request->all();
        return view('panel.user-add');
    }
    /**
     * User Add page
     * @return view
     */
    public function saveUser(Request $request)
    {
        $data = $request->all();
        dd($data);
        $user = new \App\User();
        $user->name = $data['name'];
        $user->password = Hash::make($data['password']);
        $user->email = $data['email'];
        $user->active = $data['active'];
        $user->rfidkey = $data['rfid'];
        $user->save();
        return redirect()->route('userList');
    }


    /**
     * EnableUser
     * @return response
     */
    public function enableUser($id)
    {
        $user = \App\User::find($id);
        $user->active = true;
        $user->save();
        return redirect()->route('userList');
    }

    /**
     * DisableUser
     * @return response
     */
    public function disableUser($id)
    {
        $user = \App\User::find($id);
        $user->active = false;
        $user->save();
        return redirect()->route('userList');
    }

}