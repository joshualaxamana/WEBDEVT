<!DOCTYPE html>
<html>
<head>
    <title>Create Order</title>
</head>
<body>
<h1>Create Order</h1>
    @if(session()->has('msg'))
    <fieldset>
        {{ session() ->get('msg') }}
    </fieldset>
    @endif
    <form method="post" action="/orders">
        {{ csrf_field() }}
        Order number: <input type="text" name="order_no" /><br/>
        Customer name: <input type="text" name="customer_name" /><br/>
        Order date: <input type="date" name="order_date" /><br/>
        TIN #: <input type="text" name="tin_no" /><br/>
        <button type="submit">Add Order</button>
    </form>
</body>
</html>