<?php

namespace App\Http\Controllers\Basic;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Basic\Product;


class ProductController extends Controller
{

    public function index(Product $product, Request $request)
    {
        $display = request()->query('display', 10);
        $searchname = request()->query('searchname');
        $searchtype = request()->query('searchtype', 'name');

        $products = $product->where($searchtype, 'like',  '%'.$searchname.'%')->paginate($display);
        return view('basic.product.index', compact('products'), ['display' => $display,
                                                                'searchname' => $searchname,
                                                                'searchtype' => $searchtype]);
    }

    public function create()
    {

        return view('basic.product.create');
    }

    public function store(Product $product)
    {
        $data = $this->validatedData();
        $user_id = auth()->user();
        $data['insert_user_id'] = $user_id->id;
        //dd($data);
        $product->create($data);

        return redirect('/basic/product');        
    }

    protected function validatedData() //post로 넘어오는 값 유효성 검사
    {
        return  request()->validate([
            'lot_num' => 'required',
            'category' => 'required',
            'name' => 'required',
            'price' => 'required|numeric',
            'remark' => 'nullable|max:255',
            'insert_user_id' => 'nullable',
            'update_user_id'=> 'nullable',
        ]);
    }
}
