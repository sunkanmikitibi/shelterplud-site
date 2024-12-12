<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment</title>
</head>

<body>
    <h1>Start Payment</h1>

    @if (session()->has('error'))
        {{ session()->get('error') }}
    @endif
    <form action="{{ route('pay.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-controller" id="">
        </div>
        <div class="form-group">
            <label>Amount</label>
            <input type="number" name="amount" class="form-control" required>
        </div>
        <div class="form-control">
            <button type="submit" class="btn btn-md btn-primary">Make Payment</button>
        </div>
    </form>
</body>

</html>
