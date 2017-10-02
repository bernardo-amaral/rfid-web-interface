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

        $users = []; //App\User::all();

        return view('panel.index', compact('users'));
    }

}