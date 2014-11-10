<?php namespace Dracsa\Repositories;

use Dracsa\Entities\Genre;
use Dracsa\Entities\Product;

class GenreRepo extends BaseRepo {

    public function getModel()
    {
        return new Genre;
    }

    public function getList()
    {
        return Genre::lists('name', 'id');
    }

} 