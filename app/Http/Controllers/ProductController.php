<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $products = [
        ['description'=>'March 17, 2022', 'image'=>'R-Manmaru', 'slug' => 'manmaru', 'name' => 'Manmaru', 'status'=>'R', 'price'=>'10'],
        ['description'=>'March 31, 2019', 'image'=>'R-KunikidaHanamaru', 'slug' => 'kunikida-hanamaru', 'name' => 'Kunikida Hanamaru', 'status'=>'R', 'price'=>'8'],
        ['description'=>'Feb. 28, 2015', 'image'=>'SR-KotoriMinami', 'slug' => 'kotori-minami', 'name' => 'Kotori Minami', 'status'=>'SR', 'price'=>'22'],
        ['description'=>'Sept. 5, 2021', 'image'=>'SSR-NicoYazawa', 'slug' => 'nico-yazawa', 'name' => 'Nico Yazawa', 'status'=>'SSR', 'price'=>'28'],
        ['description'=>'April 15, 2020', 'image'=>'SR-Muse', 'slug' => 'muse', 'name' => "µ's", 'status'=>'SR', 'price'=>'25'],
        ['description'=>'Jan. 19, 2019', 'image'=>'SR-DiaKurosawa', 'slug' => 'dia-kurosawa', 'name' => 'Dia Kurosawa', 'status'=>'SR', 'price'=>'20'],
        ['description'=>'Oct. 5, 2018', 'image'=>'SSR-MakiNishikino', 'slug' => 'maki-nishikino', 'name' => 'Maki Nishikino', 'status'=>'SSR', 'price'=>'30'],
        ['description'=>'March 31, 2019', 'image'=>'R-YouWatanabe', 'slug' => 'you-watanabe', 'name' => 'You Watanabe', 'status'=>'R', 'price'=>'5'],
        ['description'=>'Nov. 25, 2019', 'image'=>'SSR-NozomiTojo', 'slug' => 'nozomi-tojo', 'name' => 'Nozomi Tojo', 'status'=>'SSR', 'price'=>'28']
    ];

    public function index(){
        return view('/products', [
            'products'=> $this->products,
            'title' =>'Home',
            'description' => 'Love Live School Idol Festival'
        ]);
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
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($slug){
        $card = [];
        foreach($this->products as $p){
            if($p['slug'] === $slug){
                $card = $p;
            }
        }
        return view('product', ['product' => $card]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
