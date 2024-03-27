<?php

namespace App\Actions\Orders;

use App\Models\Order;
use Illuminate\Http\Request;

class UpdateOrder
{
    public function handle(Request $request, Order $order)
    {
        return $order->update([
            'warehouse_id' => $request->warehouse,
            'city_id' => $request->city,
            'card_id' => $request->card,
            'status_id' => $request->status,
            'pieces' => $request->pieces
        ]);
    }
}