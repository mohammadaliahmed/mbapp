<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
class UserController extends Controller
{
    //

    public function User(Request $request)
    {
        return response()->json([
            'code' => Response::HTTP_OK, 'message' => "false", 'user' => $request->user()
        ], Response::HTTP_OK);
    }
}
