<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            .grid-area {
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;
            }
            .grid-area-item {
                flex: 1 1 256px;
                padding: 12px;
                cursor: pointer;
            }
            .grid-area-item:hover {
                background-color: #1e7e34;
                color: white;
                border-radius: 16px;
            }
        </style>
    </head>
    <body>
        <h2>Last ten cheques</h2>
     
        <article class="grid-area">
        @foreach ($last_ten_cheques as $key => $cheque)
        <div class="grid-area-item">
            <div style="font-size: 2rem;">
                <strong>Cheque ID:</strong>{{ $cheque->id }}
            </div>
            @foreach($cheque->cheque_order_items as $order_item)
            <div>
                <strong>{{ $order_item->product_option->product->name }} {{ $order_item->product_option->option_name }}</strong><br />
                Price: {{ $order_item->quantity }} x {{ $order_item->product_option->price }}$ = {{ $order_item->quantity * $order_item->product_option->price }}$
            </div>
            @endforeach
        </div>
        @endforeach
        </article>

    </body>
</html>
