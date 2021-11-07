<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{

    /**
     * @param string $userId
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(string $userId)
    {
        return response()->json(User::where('uuid', $userId)->first());
    }

    /**
     * @param string $userId
     * @param string $name
     * @param string $email
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(string $userId, string $name, string $email)
    {
        if(!$user = User::find($userId)) {
            $user = new User();
            $user->uuid = $userId;
        }

        $user->name = $name;
        $user->email = $email;

        $user->save();

        return $this->show($userId);
    }
}
