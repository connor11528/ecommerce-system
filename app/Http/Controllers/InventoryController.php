<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InventoryController extends Controller
{
    const PAGINATION_COUNT = 25;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        // total inventory count
        $totalInventory = Inventory::query()
            ->join('products', 'products.id', '=', 'inventories.product_id')
            ->where('products.admin_id', $user->id)
            ->sum('inventories.quantity');

        // Product Name, sku, quantity, color, size, price and cost
        $inventories = Inventory::query()
            ->join('products', 'products.id', '=', 'inventories.product_id')
            ->where('products.admin_id', $user->id)
            ->select([
                'products.product_name',
                'inventories.sku',
                'inventories.quantity',
                'inventories.color',
                'inventories.size',
                'inventories.price_cents',
                'inventories.cost_cents'
            ])
            ->orderBy('products.product_name')
            ->paginate(self::PAGINATION_COUNT);

        return view('dashboard', compact('inventories', 'totalInventory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function show(Inventory $inventory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function edit(Inventory $inventory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inventory $inventory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inventory $inventory)
    {
        //
    }
}
