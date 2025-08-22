@extends('Master')
@section('content')

@push('style')
<style>
.order-page {
    margin-top: 50px;
}

.order-page .card {
    border-radius: 16px;
    box-shadow: 0 5px 30px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease-in-out;
}

.order-page .card:hover {
    transform: translateY(-5px);
}

.order-page .order-btn {
    background: #0d6efd;
    color: #fff;
    padding: 10px 30px;
    border-radius: 50px;
    font-weight: 500;
    transition: all 0.3s ease-in-out;
}

.order-page .order-btn:hover {
    background: #084298;
    transform: scale(1.05);
}

.order-page .form-control {
    border-radius: 12px;
    resize: none;
    min-height: 100px;
}

.order-page .summary-table td {
    padding: 10px 16px;
    font-weight: 500;
}

</style>
@endpush

<div class="container order-page">
    <div class="row g-4">
        <!-- Left: Address and Payment -->
        <div class="col-md-7">
            <div class="card p-4">
                <h4 class="mb-3 text-primary"><i class="bi bi-truck"></i> Delivery Details</h4>

                <form action="/ordernow" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <textarea name="address" id="address" class="form-control" placeholder="Enter full address"></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Payment Method</label><br>
                        <div class="form-check">
                            <input type="radio" name="paymant" id="online" class="form-check-input" value="Online Payment">
                            <label for="online" class="form-check-label">Online Payment</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="paymant" id="emi" class="form-check-input" value="EMI Payment">
                            <label for="emi" class="form-check-label">EMI Payment</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="paymant" id="cod" class="form-check-input" value="Payment on Delivery ">
                            <label for="cod" class="form-check-label">Payment on Delivery</label>
                        </div>
                    </div>

                    <div class="text-end">
                        <button type="submit" class="order-btn"><i class="bi bi-bag-check-fill"></i> Confirm Order</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Right: Order Summary -->
        <div class="col-md-5">
            <div class="card p-4 bg-light">
                <h4 class="text-center mb-3 text-success"><i class="bi bi-receipt"></i> Order Summary</h4>

                <table class="table table-borderless summary-table">
                    <tbody>
                        <tr>
                            <td>Item Price</td>
                            <td class="text-end">{{$total}} Rupees</td>
                        </tr>
                        <tr>
                            <td>Tax</td>
                            <td class="text-end">0 Rupees</td>
                        </tr>
                        <tr>
                            <td>Delivery Charges</td>
                            <td class="text-end">100 Rupees</td>
                        </tr>
                        <tr class="table-success">
                            <td><strong>Total Payable</strong></td>
                            <td class="text-end"><strong>{{$total + 100}} Rupees</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
