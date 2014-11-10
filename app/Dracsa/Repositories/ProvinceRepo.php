<?php namespace Dracsa\Repositories;

use Dracsa\Entities\Province;

class ProvinceRepo extends BaseRepo {

    public function getModel()
    {
        return new Province;
    }

    public function getList()
    {
        return Province::lists('name', 'id');
    }

} 