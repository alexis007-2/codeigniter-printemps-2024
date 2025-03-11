<?php
namespace App\Models;
use CodeIgniter\Model;

class ApiModel extends Model
{
    private $client;

    public function __construct()
    {
        $this->client = service('curlrequest');
    }

    public function allProduct():array
    {
        $products = $this->client->request('GET','https://noframe.dev.accatone.net/api-test/index.php/products',[
            "verify"=>false
        ]);
        $response = $products->getBody();
        $res = json_decode($response);
        return $res;
    }

    public function oneProduct(int $id):object
    {
        $product = $this->client->request('GET','https://noframe.dev.accatone.net/api-test/index.php/products/'.$id,[
            "verify"=>false
        ]);
        $response = $product->getBody();
        $res = json_decode($response);
        return $res;
    }

    public function insertProduct(array $data):int
    {
        $body = json_encode($data);
        $product = $this->client->request('POST','https://noframe.dev.accatone.net/api-test/index.php/products',
        [
            "verify"=>false,
            "body"=>$body
        ]);
        $response = $product->getStatusCode();
        return $response;
    }

    public function updateProduct(array $data,int $id):int
    {
       $body = json_encode($data);
       $product = $this->client->request('PATCH','https://noframe.dev.accatone.net/api-test/index.php/products/'.$id,
       [
            "verify"=>false,
            "body"=>$body
       ]);     
    $response = $product->getStatusCode();
    return $response;
    }

    public function deleteProduct(int $id):int
    {
        $product = $this->client->request('DELETE','https://noframe.dev.accatone.net/api-test/index.php/products/'.$id,
        [
            "verify"=>false
        ]);
        $response = $product->getStatusCode();
        return $response;
    }

    public function meteo(float $lat,float $lon):object
    {
        $request = $this->client->request('GET','https://api.openweathermap.org/data/2.5/weather',[
            "verify"=>false,
            "query"=>[
                "lat"=>$lat,
                "lon"=>$lon,
                "units"=>"metric",
                "lang"=>"fr",
                "appid"=>"xxxxxxxxxxx"
            ]
            ]);
            $response = $request->getBody();
            $res = json_decode($response);
            return $res;
    }

}