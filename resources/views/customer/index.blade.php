@extends('app')

@section('title','Services')

@section('content')
<h1>Customer</h1>

<a href="/customer/create"> Add New Customer </a>
<a href="/customer/?active=1"> Active Customer </a>
<a href="/customer/?active=0"> Inactive Customer </a>

@error('name') 
   <p style="color:red"> {{ $message }} </p>
@enderror
    @forelse ($customers as $customer)
        <P>
            <a href="/customer/{{$customer->id}}">
                <strong>
                    {{ $customer->id.":".$customer->name}}
                </strong>
            </a>
            ({{ $customer->email }})</P>  
    @empty
        <P>No customer to show.</P>        
    @endforelse
    
@endsection