<?php namespace Dracsa\Repositories;

abstract class BaseRepo {

    protected $model;

    public function __construct()
    {
        $this->model = $this->getModel();
    }

    abstract public function getModel();

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function all()
    {
        return $this->model->all();
    }

    public function getList()
    {
        return $this->model->lists('name', 'id');
    }

}