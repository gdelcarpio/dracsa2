<?php namespace Dracsa\Managers;

class ProductManager extends BaseManager {

    public function getRules()
    {
        $rules = [
            'name' => 'required',
            'description' => 'required',
            'guarantee' => 'required',
            'brand_id' => 'required',
            'genre_id' => 'required'
        ];

        return $rules;
    }

    // public function prepareData($data)
    // {
    //     if ( ! isset ($data['visible']))
    //     {
    //         $data['visible'] = 0;
    //     }


    //     return $data;
    // }


} 