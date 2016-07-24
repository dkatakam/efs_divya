@extends('app')
@section('content')
    <h1>Mutualfunds </h1>
    <div class="container">
        <table class="table table-striped table-bordered table-hover">
            <tbody>
            <tr class="bg-info">
            <tr>
                <td>Mutualfund Symbol</td>
                <td><?php echo ($mutualfund['symbol']); ?></td>
            </tr>
            <tr>
                <td>Mutualfund Name</td>
                <td><?php echo ($mutualfund['name']); ?></td>
            </tr>
            <tr>
                <td>Number of Mutualfunds</td>
                <td><?php echo ($mutualfund['mutualfunds']); ?></td>
            </tr>
            <tr>
                <td>Acquired Price </td>
                <td><?php echo ($mutualfund['acquired_price']); ?></td>
            </tr>
            <tr>
                <td>Acquired Date</td>
                <td><?php echo ($mutualfund['acquired_date']); ?></td>
            </tr>
            </tbody>
        </table>
    </div>
@stop
