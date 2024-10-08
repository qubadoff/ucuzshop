<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class CartController extends Controller
{
    public function index(): View
    {
        $products = Cart::query()->where('user_id', Auth::guard('customer')->user()->id)->get();

        return \view('Frontend.cart.index', compact('products'));
    }

    public function add(Request $request): JsonResponse
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $userID = Auth::guard('customer')->user()->id;

        $product = Product::query()->findOrFail($request->product_id);

        $cartItem = Cart::query()
            ->where('user_id', $userID)
            ->where('product_id', $product->id)
            ->first();

        if ($cartItem) {
            $cartItem->quantity += $request->quantity;
            $cartItem->save();
        } else {
            Cart::query()->create([
                'user_id' => $userID,
                'product_id' => $product->id,
                'quantity' => $request->quantity,
                'price' => $product->price,
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => 'Məhsul səbətə əlavə edildi !',
        ]);
    }

    public function update(Request $request): JsonResponse
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $userID = Auth::guard('customer')->user()->id;

        // Sepetteki öğeyi bul
        $cartItem = Cart::query()
            ->where('user_id', $userID)
            ->where('product_id', $request->product_id)
            ->first();

        if ($cartItem) {
            // Miktarı güncelle
            $cartItem->quantity = $request->quantity;
            $cartItem->save();

            return response()->json([
                'success' => true,
                'message' => 'Miqdar uğurla yeniləndi!',
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Məhsul səbətdə tapılmadı!',
        ]);
    }
}
