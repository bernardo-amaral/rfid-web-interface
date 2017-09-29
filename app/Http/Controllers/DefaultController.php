<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DefaultController extends Controller
{
    /**
     * Index page
     * @return view
     */
    public function index(Request $request)
    {
        $data = $request->all();

        return [
            'access' => true,
        ];
    }

}