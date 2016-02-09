<?php

class DataController extends BaseController {
  //para la primera ruta que es /producto
  public function getProducto()
    {
      $products=Product::paginate(10);
      return View::make('index')->with('products',$products);
    }


    public function getAjax()
      {
        $products=Product::paginate(10);
      	return View::make('index')->with('products',$products)->render();
      }


    public function getProducto2()
      {

        return View::make('index2');
      }




  public function getDatatable()
    {
        //return Datatable::collection(Product::all(array('id','title')))
        return Datatable::query(DB::table('products'))
        ->showColumns('id', 'title')
        ->searchColumns('')
        ->orderColumns('id','title')
        ->make();
    }
}
