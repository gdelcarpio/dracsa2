<?php namespace Dracsa\Repositories;

use Dracsa\Entities\Usertype;

class UsertypeRepo extends BaseRepo {

    public function getModel()
    {
        return new Usertype;
    }

} 