<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

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