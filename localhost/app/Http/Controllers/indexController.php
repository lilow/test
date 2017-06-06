<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Page;

class IndexController extends Controller {

  public function  view (){
      return $slag;
      $page=page::where("url", $slag)->first();

      return view("view" , ["page" => $page]);
  }
};