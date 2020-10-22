<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>laravel Stripe Payment</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"/>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <style>
        .container {
            padding: 0.5%;
        }
    </style>
</head>
<body>
    <div class="container" id="app">
        <navbar-component></navbar-component>
    </div>
    <div class="container">
        <h2 style="margin-top: 12px; text-align: center" class="alert alert-success">Please pay for your purchases</h2><br>

        <div class="row">
            <div class="col-md-12">
                <pre id="token_response"></pre>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <button class="btn btn-success btn-block" onclick="pay({{$getSum}})">{{$getSum}}</button>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://checkout.stripe.com/checkout.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });

        function pay(amount) {
            var handler = StripeCheckout.configure({
                key: 'pk_test_51HeGLeIxQtOPGUEeUXgoNw4EELu4HPG3XCxLfkjEDguUCrq7GxPL9A0ucALSPs7yvTdAwCRrdIg6xR26VibUtk0B00WFCPfF5x',
                locale: 'auto',
                token: function (token) {
                    console.log('Token Created!!');
                    console.log(token)
                    $('#token_response').html(JSON.stringify(token));

                    $.ajax({
                        url: '{{ url("stripe") }}',
                        method: 'post',
                        data: {tokenId: token.id},
                        success: (response) => {
                            console.log(response);
                        },

                        error: (error) => {
                            console.log(error);
                            alert('Oops! Something went wrong')
                        }
                    })
                }
            });

            handler.open({
                name: 'Demo Site',
                description: '2 widgets',
                amount: amount * 100
            });
        }
    </script>
</body>
</html>
