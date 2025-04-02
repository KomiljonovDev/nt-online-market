<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Customer;
use App\Models\Image;
use App\Models\Product;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Volume;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.index', [
            'users' => DB::table('users')->paginate(15)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */

    public function show(Request $request)
    {
        if (!isset($_COOKIE['customer_token'])){
            $uniqueId = uniqid();
            Customer::query()->create([
                'token' => $uniqueId
            ]);
            setcookie('customer_token', $uniqueId, time() + (86400 * 30), "/");
        }
        $categories = $request->input('categories');
        $weights = $request->input('weights');
        $startPrice = $request->input('startPrice');
        $endPrice = $request->input('endPrice');

        $selectedCategories = Category::whereIn('name', (array) $categories)->pluck('id')->toArray();

        // 🔹 Get all child categories recursively
        function getChildCategoryIds($parentIds)
        {
            $childIds = Category::whereIn('parent_id', $parentIds)->pluck('id')->toArray();
            if (!empty($childIds)) {
                return array_merge($childIds, getChildCategoryIds($childIds)); // Recursive call
            }
            return [];
        }

        // Merge selected categories with their children
        $allCategoryIds = array_merge($selectedCategories, getChildCategoryIds($selectedCategories));

        $products = Product::query()
            ->when(!empty($categoryIds), function ($query) use ($allCategoryIds) {
                return $query->whereIn('category_id', $allCategoryIds);
            })
            ->when($weights, function ($query) use ($weights) {
                $productVolumes = Volume::whereIn('name', $weights)->pluck('id');
                return $query->whereIn('volume_id', $productVolumes);
            })
            ->when(isset($startPrice) && isset($endPrice), function ($query) use ($startPrice, $endPrice) {
                return $query->whereBetween('sale_price', [$startPrice, $endPrice]);
            })
            ->when(request()->has('sort'), function ($query) {
                $sortBy = request('sort'); // Get sorting parameter from URL

                switch ($sortBy) {
                    case 'name_asc':
                        $query->orderBy('name', 'asc');
                        break;
                    case 'name_desc':
                        $query->orderBy('name', 'desc');
                        break;
                    case 'price_asc':
                        $query->orderBy('sale_price', 'asc');
                        break;
                    case 'price_desc':
                        $query->orderBy('sale_price', 'desc');
                        break;
                    default:
                        $query->orderBy('id', 'desc'); // Default sorting
                        break;
                }
            })
            ->with('images')
            ->paginate(10);

        $categories = Category::all();
        $parentCategories = Category::whereNull('parent_id')->orderBy('id', 'desc')->limit(4)->with('categories')->get();
        $productsMenu = Category::whereNull('parent_id')->orderBy('id', 'desc')->with('categories')->get();
        $images = Image::paginate(1);
        $weights = Volume::all();

        $minSalePrice = $products->min('price');
        $maxSalePrice = $products->max('price');

        $newArrivalProducts = Product::whereHas('category', function ($query) use ($parentCategories) {
            $query->whereHas('parent', function ($q) use ($parentCategories) {
                $q->whereNotNull('id')->where('name', $parentCategories->name);
            });
        })->orderBy('id', 'desc')->limit(4)->get();


        return view('product-filter', [
            'products' => $products,
            'parentCategories' => $parentCategories,
            'productsMenu' => $productsMenu,
            'categories' => $categories,
            'images'=>$images,
            'weights' => $weights,
            'newArrivalProducts' => $newArrivalProducts,
            'minSalePrice' => $minSalePrice,
            'maxSalePrice' => $maxSalePrice,
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $products)
    {
        //
    }

    public function likeProduct($productId)
    {
        if (Auth::check()) {
            $user = Auth::user();
            $user->likedProducts()->attach($productId);
        } else {
            $likedProducts = Session::get('liked_products', []);
            if (!in_array($productId, $likedProducts)) {
                $likedProducts[] = $productId;
                Session::put('liked_products', $likedProducts);
            }
        }
        return response()->json(['success' => true]); // JavaScript uchun javob
    }
}
