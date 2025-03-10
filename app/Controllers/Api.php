<?php
namespace App\Controllers;

class Api extends BaseController
{
    private $model;

    public function __construct()
    {
        $this->model = model('ApiModel');
    }

    public function cAllProduct():string
    {
        $products = $this->model->allProduct();
        $data = [
            "products"=>$products
        ];
        return view('Api/cAllProduct',$data);
    }

    public function cOneProduct(int $id):string
    {
        $product = $this->model->oneProduct($id);
        $data = [
            "product"=>$product
        ];
        return view('Api/cOneProduct',$data);
    }

    public function cInsertProduct():string
    {
        $data = [
            "name" => "Canada Dry",
            "description"=>"du canada Dry",
            "price"=>2.50
        ];
        if($this->model->insertProduct($data)==200)
        {
            return view('success');
        }
        else
        {
            return view('echec');
        }
    }

  public function CUpdateProduct(int $id):string
  {
    $data = [
        "price"=>0.40
    ];
    if($this->model->updateProduct($data,$id)==200)
    {
        return view('success');
    }
    else
    {
        return view('echec');
    }
  } 
  
  public function cDeleteProduct(int $id):string
  {
    if($this->model->deleteProduct($id)==200)
    {
        return view('success');
    }
    else
    {
        return view('echec');
    }
  }

  public function cMeteo():string
  {
    $lat =(float) 43.296482;
    $lon = (float)5.369780;
    $temps = $this->model->meteo($lat,$lon);
    $data = [
        "temps"=>$temps
    ];
    return view('Api/cMeteo',$data);
  }
}