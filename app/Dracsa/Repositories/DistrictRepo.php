<?php namespace Dracsa\Repositories;

use Dracsa\Entities\District;

class DistrictRepo extends BaseRepo {

    public function getModel()
    {
        return new District;
    }

    public function getList()
    {
        return District::lists('name', 'id');
    }

} 