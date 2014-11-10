<?php namespace Dracsa\Managers;

class ProductimageManager extends BaseManager {

    public function getRules()
    {
        $rules = [
            'color_id' => 'required',
            'product_id' => 'required',
            'path' => 'required|image'

        ];

        return $rules;
    }

    public function prepareData($data)
    {
     
            // $data['path'] = $data['color_id'].'-'.$data['product_id'].'.png';
            $data['path'] = time().'.jpg';
             return $data;
    }


} 