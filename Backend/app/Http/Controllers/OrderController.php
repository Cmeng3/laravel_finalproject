<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('backend.order', compact('orders'));
    }

    public function create()
    {
        return view('order.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'animal_name' => 'required|string|max:255',
            'img' => 'required',
            'description' => 'required|string|max:255',
            'price' => 'required|string|max:255'
        ]);

        $destinationPath = storage_path( 'app/public/thumbnails' );
        $file = $request->img;
        $fileName = time() . '.'.$file->clientExtension();
        $file->move($destinationPath, $fileName);

        $order = new Order;
        $order->animal_name = $request->animal_name;
        $order->img = $fileName;
        $order->description = $request->description;
        $order->price = $request->price;
        $order->save();

        return redirect()->route('order.index')->with('success', 'Order message created successfully.');
    }

    public function edit($id)
    {
        $order = Order::findOrFail($id);
        return view('order.edit', compact('order'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'animal_name' => 'required|string|max:255',
            'img' => 'required',
            'description' => 'required|string|max:255',
            'price' => 'required|string|max:255'
        ]);

        $destinationPath = storage_path( 'app/public/thumbnails' );
        $file = $request->img;
        $fileName = time() . '.'.$file->clientExtension();
        $file->move($destinationPath, $fileName);

        $order = Order::findOrFail($id);
        $order->img = $fileName;
        $order->save();

        return redirect()->route('order.index')->with('success', 'Order message updated successfully.');
    }


    public function destroy($id) {
         // Find the contact by ID and delete it
         $orders = Order::where('id', $id)->firstOrFail();

         // Delete the contact
         $orders->delete();

         // Redirect back with a success message
         return redirect()->route('order.index')->with('success', 'Order deleted successfully');
     }
}

