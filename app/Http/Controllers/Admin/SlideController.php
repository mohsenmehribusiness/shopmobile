<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\product;
use App\slide;
use Illuminate\Support\Facades\File;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders=slide::OrderBy('id','desc')->paginate(9);
        return view('admin.slider.index',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products=product::all()->pluck('name','id');
        return view('admin.slider.create',compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slide=new slide();
        $tags = explode("-", $request->name_id);
        if ($request->hasFile('img'))
        {
            $file= $request->file('img');
            $extension = $file->getClientOriginalExtension();
            $fileName ='slide_'.'time_'.time().'_'.str_random(3).'.'.$extension;
            $destinationPath = 'images/slider'.'/';
            $file->move($destinationPath, $fileName);
            $slide->img=$fileName;
        }
        $slide->name=$tags[0];
        $slide->product_id=$tags[1];
        if($slide->save())
        {
            alert()->success('ثبت با موفقیت انجام شد', 'ثبت شد!');
            return redirect('admin/slide');
        }
        else
        {
            alert()->error('خطایی رخ داده و ثبت انجام نشد!', 'خطا!')->autoclose(3500);
            return redirect('admin/slide');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products=product::all()->pluck('name','id');
        $slide=slide::find($id);
        return View('admin.slider.edit',['record'=>$slide,'products'=>$products]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $slide=slide::find($id);
        $tags = explode("-", $request->name_id);
        $img="hi";
        if ($request->hasFile('img'))
        {
            $file= $request->file('img');
            $extension = $file->getClientOriginalExtension();
            $fileName ='slide_'.'time_'.time().'_'.str_random(3).'.'.$extension;
            $destinationPath = 'images/slider'.'/';
            $file->move($destinationPath, $fileName);
            $path = public_path().'images/slider/'.$slide->img;
            File::delete($path);
            $img=$fileName;
        }
        $slide->name=$tags[0];
        $slide->product_id=$tags[1];
        if($slide->update(['name'=>$tags[0],'img'=>$img,'product_id'=>$tags[1]]))
        {
            alert()->success('ویرایش با موفقیت انجام شد', 'ویرایش شد!');
            return redirect('admin/slide');
        }
        else
        {
            alert()->error('خطایی رخ داده و ویرایش انجام نشد!', 'خطا!')->autoclose(3500);
            return redirect('admin/slide');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy=slide::findorFail($id);
        $path = public_path() . '/images/slider/' . $destroy->img;
        File::delete($path);
        $destroy->delete();
        alert()->error( 'حذف شد!')->autoclose(1500);
        return redirect()->back();
    }
}
