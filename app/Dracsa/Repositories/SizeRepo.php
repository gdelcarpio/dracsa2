<?php namespace Dracsa\Repositories;

use Dracsa\Entities\Size;

class SizeRepo extends BaseRepo {

    public function getModel()
    {
        return new Size;
    }

    public function getList()
    {
        return Size::lists('name', 'id');
    }

} 