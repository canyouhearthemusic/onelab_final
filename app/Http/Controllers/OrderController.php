<?php

namespace App\Http\Controllers;

use App\Actions\Orders\UpdateOrder;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Card;
use App\Models\City;
use App\Models\Order;
use App\Models\Status;
use App\Models\Warehouse;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $orders = Order::select(
            'orders.*',
            'warehouses.name as warehouse_name',
            'cities.name as city_name',
            'cards.name as card_name',
            'statuses.name as status_name'
        )
            ->leftJoin('warehouses', 'orders.warehouse_id', '=', 'warehouses.id')
            ->leftJoin('cities', 'orders.city_id', '=', 'cities.id')
            ->leftJoin('cards', 'orders.card_id', '=', 'cards.id')
            ->leftJoin('statuses', 'orders.status_id', '=', 'statuses.id');

        return view('orders.index', [
            'orders' => $orders->paginate()->withQueryString()
        ]);
    }

    public function show(Order $order)
    {
        return view('orders.show', [
            'order' => $order->load(['card:id,name', 'city:id,name', 'status:id,name', 'warehouse:id,name']),
            'warehouses' => Warehouse::select(['id', 'name'])->get(),
            'cities' => City::select(['id', 'name'])->get(),
            'cards' => Card::select(['id', 'name'])->get(),
            'statuses' => Status::all()
        ]);
    }

    public function update(Order $order, UpdateOrderRequest $request, UpdateOrder $action)
    {
        return $action->handle($request, $order)
            ? to_route('admin.orders.index')->with(['success' => 'Order has been successfully updated.'])
            : to_route('admin.orders.index')->with(['error' => 'Order has not been updated.']);
    }
}
