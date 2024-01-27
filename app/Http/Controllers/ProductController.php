<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {

        $result = ["name" => 'index', 'payload' => Product::all()];
        return $result;
    }


    public function store(Request $request)
    {

        $fields = $request->validate(
            [
                "pd_name" => "required|string",
                "pd_type" => "required|integer",
                "pd_name" => "required|double",
            ]
        );

        Product::create([
            "product_name" => $fields["pd_name"],
            "product_type" => $fields["pd_type"],
            "price" => $fields["pd_price"],
        ]);

        return "Inserted";
    }
}
