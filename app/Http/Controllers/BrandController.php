<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Manual;

class BrandController extends Controller
{
    public function show($brand_id, $brand_slug)
    {
        $brand = Brand::findOrFail($brand_id);
        $manuals = Manual::where('brand_id', $brand_id)->get();
        $topManuals = Manual::where('brand_id', $brand_id)->orderBy('views', 'desc')->take(5)->get();

        // Increment the views column for each manual
        foreach ($manuals as $manual) {
            $manual->increment('views');
        }

        return view('pages.manual_list', [
            "brand" => $brand,
            "manuals" => $manuals,
            "topManuals" => $topManuals
        ]);
    }
}