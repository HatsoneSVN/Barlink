<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TokenAuthController extends Controller
{
    public function logout(Request $request)
    {
        $user             = \Auth::user();
        
        // emitimos evento de deslogado
        event(new \Illuminate\Auth\Events\Logout($user));
 
        try
        {
            $token = JWTAuth::getToken();
 
            JWTAuth::invalidate($token);
 
            return response()->success(['user' => $user]);
 
        } catch (Exception $e) {
            return response()->error('error_on_login_out', $e->getStatusCode());
        }
    }
}
