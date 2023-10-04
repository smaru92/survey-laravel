<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {       
        $services = \App\Service::all();

        return view('service.index', compact('services'));
    }

    public function store()
    {   
        //예외처리 : name
        //required : 공백 불가
        //min x : 최소 x 자이상
        //max x : 최대 x 자이하
        //그외 조건은 laravel doc 참조
        $data = request()->validate([
            'name' => 'required|min:5',
        ]);

        \App\Service::create($data);
        //경로는 무조건 \(역슬래시)

        return redirect()->back();

        //dd(request('name'));
        //dd() : 모든 작업을 중단하고 파라미터 정보를 화면에 표시
    }
}
