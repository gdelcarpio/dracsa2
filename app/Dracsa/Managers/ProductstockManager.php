<?php namespace Dracsa\Managers;

class ProductstockManager extends BaseManager {

    public function getRules()
    {
        $rules = [
            'price' => 'required|digits_between:0,9999',
            'sku' => 'required',
            'stock' => 'required|integer|max:9999',
            'visible'   => 'in:1,0',
            'offering_price' => 'required',
            'starting_offer' => 'required|date',
            'ending_offer' => 'required|date',
            'product_id' => 'required',
            'color_id' => 'required',
            'size_id' => 'required'

        ];

        return $rules;
    }

    public function prepareData($data)
    {
        if ( ! isset ($data['visible']))
        {
            $data['visible'] = 0;
        }
        return $data;
    }


} 