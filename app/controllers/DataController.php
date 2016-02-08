<?php

class DataController extends BaseController {

  public function getDatatable()
    {
        return Datatable::collection(Product::all(array('id','title')))
        //return Datatable::query(DB::table('products'))
        ->showColumns('id', 'title')
        ->searchColumns('title')
        ->orderColumns('id','title')
        ->make();
    }
}
