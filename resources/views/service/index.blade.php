@extends('app')

@section('title','Services')

@section('content')
<h1>Welcome to Laravel 6 from Service</h1>

<form action="/service" method="POST">
    <input type="text" name="name" autocomplete="off">

    @csrf

    <button> Add service </button>
</form>
@error('name') 
   <p style="color:red"> {{ $message }} </p>
@enderror
<ul>
    @forelse ($services as $service)
        <li>{{ $service->id.":".$service->name."  time : ".$service->created_at }}</li>  
    @empty
        <li>No Service Available</li>        
    @endforelse
</ul>
    
@endsection