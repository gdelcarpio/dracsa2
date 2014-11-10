<?php namespace Dracsa\Repositories;

use Dracsa\Entities\User;

class UserRepo extends BaseRepo {

    public function getModel()
    {
        return new User;
    }

    // public function findLatest($take = 10)
    // {
    //     return User::with([
    //         'users' => function ($q) use ($take) {
    //                 $q->take($take);
    //                 $q->orderBy('created_at', 'DESC');
    //             },
    //         'users.user'
    //     ])->get();
    // }

    public function newUser()
    {
        $user = new User();
        $user->usertype_id = '2';
        return $user;
    }

    public function findUser($id)
    {
        return User::with(['usertypes'])->where('id', '=', $id)->get();
    }

} 