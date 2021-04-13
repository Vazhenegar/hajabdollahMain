<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\LocaleContent;
use App\Models\Product;
use App\Models\ProductCatalog;
use Illuminate\Http\Request;

class ProductCatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product_ptypes = LocaleContent::where(['section' => 'ptype', 'locale' => 'fa', 'element_title' => 'ptype'])->pluck('element_content', 'element_id');
        $product_categories = LocaleContent::where(['section' => 'category', 'locale' => 'fa', 'element_title' => 'category'])->pluck('element_content', 'element_id');
        return view('PageElements.Dashboard.Setting.Catalog', compact('product_ptypes', 'product_categories'));
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $P_Catalog = ProductCatalog::firstWhere('product_id', $request->input('product'));
        if ($P_Catalog) {
            //admin wants to update an existing catalog
            $this->update($request, $P_Catalog);

        } else {
            //create new catalog
            if ($request->hasFile('catalog_images')) {
                $Catalog = new ProductCatalog;

                $uploaded = $request->file('catalog_images');
                $filename = time() . '.' . $uploaded->getClientOriginalExtension();  //timestamps.extension
                $uploaded->storeAs('public\Main\Products\ptype' . $request->input('ptype') . '\cat' . $request->input('category') . '\products\product' . $request->input('product') . '\p_catalog\\', $filename);
            }
            $Catalog->product_id = $request->input('product');
            $Catalog->catalog_images = $filename;
            $Catalog->save();
        }
        return redirect('/Catalog');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\ProductCatalog $productCatalog
     * @return \Illuminate\Http\Response
     */
    public function show($productCatalog)
    {
        $SelectedProduct = Product::find($productCatalog);
        $P_Cat = $SelectedProduct->cat_id;
        $P_Ptype = Category::where('id', $P_Cat)->value('ptype_id');
        $SelectedProductCatalogs = ProductCatalog::where('product_id', $productCatalog)->first();
        $Catalog = [];
        if ($SelectedProductCatalogs) {
            $Catalog['id'] = $SelectedProductCatalogs->id;
            $Catalog['catalog'] = asset('storage/Main/Products/ptype' . $P_Ptype . '/cat' . $P_Cat . '/products/product' . $SelectedProduct->id . '/p_catalog/' . $SelectedProductCatalogs->catalog_images);

        }
        return $Catalog;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\ProductCatalog $productCatalog
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductCatalog $productCatalog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ProductCatalog $productCatalog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductCatalog $productCatalog)
    {
        $catalogPath = 'Main\Products\ptype' . $request->input('ptype') . '\cat' . $request->input('category') . '\products\product' . $request->input('product') . '\p_catalog\\';
        $oldCatalogName = $productCatalog->catalog_images;

        if ($request->hasFile('catalog_images')) {

            $uploaded = $request->file('catalog_images');
            $filename = time() . '.' . $uploaded->getClientOriginalExtension();  //timestamps.extension
            unlink('storage\\' . $catalogPath . $oldCatalogName);
            $uploaded->storeAs('public\\'. $catalogPath , $filename);

        }
        $productCatalog->catalog_images = $filename;

        $productCatalog->update();
        return redirect('/Catalog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\ProductCatalog $productCatalog
     * @return \Illuminate\Http\Response
     */
    public function destroy($productCatalog)
    {
        $SelectedProduct = ProductCatalog::where('product_id', $productCatalog)->first();
        if ($SelectedProduct) {
            $ProductCatalogs = unserialize($SelectedProduct->catalog_images);
            $ProductCatalogsFolder = 'storage/Main/Products/' . $productCatalog . '/catalogs/';


            foreach ($ProductCatalogs as $item) {
                $this->ProductCatalogRemove($productCatalog, $item);
            }
            rmdir($ProductCatalogsFolder); //delete folder
            $SelectedProduct->delete();
        }
        return true;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $ProductId
     * @param $catalogImage
     * @return \Illuminate\Http\Response
     */
    public function ProductCatalogRemove($ProductId, $catalogImage)
    {
        $SelectedCatalog = ProductCatalog::where('product_id', $ProductId)->first();
        $CatalogProductCategory=Product::where('id',$ProductId)->value('cat_id');
        $CatalogProductPtype=Category::where('id',$CatalogProductCategory)->value('ptype_id');
        $catalogPath = 'Main\Products\ptype' . $CatalogProductPtype . '\cat' . $CatalogProductCategory . '\products\product' . $ProductId . '\p_catalog\\';
        unlink('storage\\'. $catalogPath . $catalogImage); //delete file
        rmdir('storage\\'. $catalogPath); //delete folder
        $SelectedCatalog->delete(); //remove record from db
        return back();
    }
}
