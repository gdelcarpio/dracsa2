<?php namespace Dracsa\Repositories;

use Dracsa\Entities\Department;

class DepartmentRepo extends BaseRepo {

    public function getModel()
    {
        return new Department;
    }

    public function getList()
    {
        return Department::lists('name', 'id');
    }

} 