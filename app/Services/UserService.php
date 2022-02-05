<?php

namespace App\Services;


class UserService
{

    public function update($data)
    {
        $user = auth()->user();
        $password = false;

        $password = $data['password'] ?? false;
        if($password){
           $password = bcrypt($data->password);
        }

        if(!$password){
            unset($data['password']);
        }

        $user->update($data);
        return redirect()->route('profile')->with('success', "Profile updated!");
    }

}
