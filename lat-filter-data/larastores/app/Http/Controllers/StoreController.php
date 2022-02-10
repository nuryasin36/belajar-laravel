<?php

namespace App\Http\Controllers;

use App\Models\Store;
use App\Models\City;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index(Request $request)
    {
        $stores = Store::with(['city']);

        if ($request->get('city')) {
            $city = $request->city;
            $stores->whereHas(
                'city',
                function ($query) use ($city) {
                    $query->where('name', 'LIKE', "%{$city}%");
                }
            );
        } else {
        }

        if ($request->get('keyword')) {
            $stores->search($request->keyword);
        }

        return view('index', [
            'stores' => $stores->paginate(5)->withQueryString(),
            'cities' => City::all()
        ]);
    }
}
