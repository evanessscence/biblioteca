<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Resources\UserResource;
class UserController extends Controller
{
 public function index(Request $request)
    {
        //
         $query = User::query();
        if ($s = $request->query('search')) { 
                $query->where('email', 'like', "%{$s}%");
        }
        return UserResource::collection($query->orderBy('id', 'desc')->paginate(10));
    }
}
