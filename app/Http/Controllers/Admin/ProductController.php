<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\product;
use App\Company;
use App\Category;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\File;
use App\image;
use DB;
use App\price;

class ProductController extends AdminController
{
    /** Display a listing of the resource.** @return \Illuminate\Http\Response*/
    public function index()
    {
        $products=product::orderby('id','desc')->paginate(12);
        return View('admin.product.index-pro',['products'=>$products]);
    }
    /*** Show the form for creating a new resource.* @return \Illuminate\Http\Response*/
    public function create()
    {
        $categories=Category::all();
        $companies=Company::all();
        return View('admin.product.create-pro',['companies'=>$companies,'categories'=>$categories]);
    }

    /*** @param ProductRequest $request*/
    public function store(ProductRequest $request)
    {
        $product=new product($request->all());
        $true='false';
        if($product->save())
        {
            $true='true';
        }
        /* upload image rename image save image*/
        if ($request->hasFile('img'))
        {
            $files = $request->file('img');
            foreach($files as $file)
            {
                $extension = $file->getClientOriginalExtension();
                $fileName ='product_'.'time_'.time().'_'.str_random(3).'.'.$extension;
                $destinationPath = 'images/product'.'/';
                if($file->move($destinationPath, $fileName))
                {
                    $product->images()->create([
                        'img'=>$fileName,
                        'product_id'=>$product->id,
                        'title'=>$product->name,
                    ]);
                }
            }
        }
        /* upload image rename image save image*/
        /*category*/
        $product->categories()->sync($request->category);
        /*category*/
        /*price*/
        $product->prices()->create([
            'price'=>$request->price,
            'product_id'=>$product->id,
        ]);
        /*price*/
        if($true=='true')
        {
            alert()->success('ثبت با موفقیت انجام شد', 'ثبت شد!');
            return redirect('admin/product');
        }
        else
        {
            alert()->error('خطایی رخ داده و ثبت انجام نشد!', 'خطا!')->autoclose(3500);
            return redirect('admin/product');
        }
    }
    /** * Display the specified resource.** @param  \App\Product  $product* @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product=product::find($id);
        return View('admin.product.show-pro',compact('product'));
    }
    /*** Show the form for editing the specified resource.* @param  \App\Product  $product* @return \Illuminate\Http\Response*/
    public function edit($id)
    {
        $categories=Category::all()->pluck('name','id');
        $companies=Company::all()->pluck('name','id');
        $record=product::find($id);
        return View('admin.product.edit-pro',['companies'=>$companies,'categories'=>$categories,'record'=>$record]);
    }
    /*** Update the specified resource in storage. ** @param ProductRequest|Request $request * @param  \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product=product::find($id);
        /*delete photo*/
        if($request->img_del)
        {
            $images=$request->img_del;
            foreach ($images as $img)
            {
                $path = public_path().'/product/'.$img;
                File::delete($path);
                $temp=image::where('img',$img);
                $temp->delete();
            }
        }
        /*delete photo*/
        /* save new photo */
        if($request->img)
        {
            $files = $request->file('img');
            foreach($files as $file)
            {
                $extension = $file->getClientOriginalExtension();
                $fileName ='product_'.'time_'.time().'_'.str_random(3).'.'.$extension;
                $destinationPath = 'images/product'.'/';
                if($file->move($destinationPath, $fileName))
                {
                    $product->images()->create([
                        'img'=>$fileName,
                        'product_id'=>$product->id,
                        'title'=>$product->name,
                    ]);
                }
            }
        }
        /* save new photo */
        /*price*/
        $price=new price();
        $price->price=$request->price;
        $product->prices()->save($price);
        //$user->business()->save($business);
        /*price*/
        $product->categories()->sync($request->category);
        $product->company()->associate($request->company_id);
        if($product->update($request->all()))
        {
            alert()->success('ویرایش با موفقیت انجام شد', 'ویرایش شد!');
            return redirect('admin/product');
        }
        else
        {
            alert()->error('خطایی رخ داده و ویرایش انجام نشد!', 'خطا!')->autoclose(3500);
            return redirect('admin/product');
        }

    }

    /*** Remove the specified resource from storage.
     *  * @param  \App\Product  $product
     * @return \Illuminate\Http\Response  */
    public function destroy($id)
    {
        $destroy=product::findorFail($id);
        $images=$destroy->images;
        if($images)
        {
            foreach ($images as $image)
            {
                $path = public_path() . '/images/product/' . $image->img;
                File::delete($path);
            }
        }
        $destroy->images()->delete();
        $destroy->categories()->detach();
        $destroy->prices()->delete();
        $destroy->comments()->delete();
        $destroy->delete();
        alert()->error( 'حذف شد!')->autoclose(1500);
        return redirect()->back();
    }
}
