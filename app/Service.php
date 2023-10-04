<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
  /* 
    Model 기본 메서드 목록
    public function index()  {      } 인덱스페이지
    public function create()  {      } insert
    public function store(Request $request)   {      } insert
    public function show($id) {      } 1개의 데이터 select
    public function edit($id) {      } update
    public function update(Request $request, $id) {      } update
    public function destroy($id) {      } delete 
    */

   // protected $fillable = ['name'];
    //fillable : 화이트리스트
    //해당 이름의 데이터들만 받아들인다.
   protected $guarded = [];
   //guarded : 블랙리스트
   //해당 이름의 데이터 이외의 데이터들만 받아들인다.

}
