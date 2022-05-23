@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Make a Payment</div>

                    <div class="card-body">
                        <form action="" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-auto">
                                    <label for="">How Much You Want to Pay</label>
                                    <input type="number" name="value" class="form-control" min="5" step="0.01"
                                        value="{{ mt_rand(500, 100000) / 100 }}" required>
                                </div>
                                <div class="col-auto">
                                    <label for=""> Currency</label>
                                    <br>
                                <select class="custom-select" name="currency" required>

                                    @foreach ($currencies as $currency)
                                        <option value="{{ $currency->iso }}">{{ strtoupper($currency->iso) }}</option>

                                     @endforeach

                                </select>

                                </div>
                            </div>

                            <div class="text-center mt-3">
                                <button type="submit" id="payButton" class="btn btn-primary btn-lg">
                                    Pay
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
