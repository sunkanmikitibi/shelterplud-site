<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Payment Successful</h1>

    <table>
        <tbody>
            <tr>
                <td>Status</td>
                <td>{{ $data->status }}</td>
            </tr>
            <tr>
                <td>Reference</td>
                <td>{{ $data->reference }}</td>
            </tr>
            <tr>
                <td>Amount Paid</td>
                <td>{{ number_format($data->amount / 100, 2) }}</td>
            </tr>
            <tr>
                <td>Fees:</td>
                <td>{{ number_format($data->fees / 100, 2) }}</td>
            </tr>
            <tr>
                <td>Customer Email:</td>
                <td>{{ $data->customer->email }}</td>
            </tr>
        </tbody>
    </table>


</body>

</html>
