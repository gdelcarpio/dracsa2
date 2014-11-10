<?php namespace Dracsa\Repositories;

use Dracsa\Entities\Color;

class ColorRepo extends BaseRepo {

    public function getModel()
    {
        return new Color;
    }

    public function getList()
    {
        return Color::lists('name', 'id');
    }

} 