<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(Request $request)
    {
        $customers = Customer::where('active',$request->query('active', 1))->get();
                    //where 절 조건 추가, uri 값읽어오기(값, 없으면 디폴트값)

        return view('customer.index', compact('customers'));
    }

    public function create()
    {
        $customer = new Customer();
        return view('customer.create', compact('customer'));
    }

    public function store()
    {

        $customer = Customer::create($this->validatedData());

        return redirect('/customer/'.$customer->id);
    }

    public function show(Customer $customer)//정보보기
    {   
        //route, controller에서 사용하는 이름이 같으면 자동으로 findOrFail 매치


        //$customer = Customer::findOrFail($customer); //find : 단순 찾기만 없으면 에러, findOrFail : 없으면 에러코드 404 페이지

        return view('customer.show', compact('customer'));
    }

    public function edit(Customer $customer) //수정 페이지 보여주기
    {
        return view('customer.edit', compact('customer'));
    }

    public function update(Customer $customer) //update
    {
        $customer->update($this->validatedData());

        return redirect('/customer');
    }

    public function destroy(Customer $customer) //delete
    {
        $customer->delete();
        return redirect('/customer');
    }
    
    protected function validatedData() //post로 넘어오는 값 유효성 검사
    {
        return request()->validate([
            'name' => 'required',
            'email' => 'required|email'
        ]);
    }
}
