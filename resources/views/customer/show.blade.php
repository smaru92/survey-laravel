<h1> Customer Details </h1>
<div>
<strong>Name</strong>
<p> {{$customer->name}} </p>
</div>
<div>
<strong>Email</strong>
<p> {{$customer->email}} </p></div>

<div> 
    <button>
        <a href="/customer/{{ $customer->id }}/edit"> 
            edit customer 
        </a>
    </button>    
    <form action="/customer/{{ $customer->id }}" method="POST">
        @method('DELETE')
        @csrf

        <button>Delete Customer</button>
    </form>
</div>