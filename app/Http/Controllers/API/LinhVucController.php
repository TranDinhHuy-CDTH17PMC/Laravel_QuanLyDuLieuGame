<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\LinhVuc;

class LinhVucController extends Controller
{
   public function index()
   {
       return LinhVuc::all();

       # code...
   }
   public function GetFieldList()
   {
       $fieldList = LinhVuc::all()->random(4);
       $result = [
           'success' => true,
           'data'=>$fieldList,
       ];
       return response()->json($result);
   }
}