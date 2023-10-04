<h1> Add New Customer</h1>

<form action="/customer/{{$customer->id}}" method="post">
    @method('PATCH')
    @include('customer.form')

    <button> Save customer </button>
</form>