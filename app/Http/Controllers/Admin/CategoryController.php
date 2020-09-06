<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use App\Http\Requests\CategoryRequest;
use App\Category;
use Alert;
use DB;
use Response;

class CategoryController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cats=Category::orderby('id','desc')->simplePaginate(10);
        $count=Category::count();
        $father_count=Category::where('cat_id','-')->count();
        $count_=$count-$father_count;
        $category=['-'=>'نام دسته مادر را انتخاب کنید']+Category::all()->where('cat_id','-')->pluck('name','id')->toArray();
        return View('admin.category.index',['category'=>$category,'cats'=>$cats,'count'=>$count,'father_count'=>$father_count,'count_'=>$count_]);
    }
    public function create()
    {
        //
    }
    public function store(CategoryRequest $request)
    {
        $category= new Category($request->all());
        if($category->save())
        {
            alert()->success('ثبت با موفقیت انجام شد', 'ثبت شد!');
            return redirect()->back();
        }
        else
        {
            alert()->error('خطایی رخ داده و ثبت انجام نشد!', 'خطا!')->autoclose(3500);
            return redirect()->back();
        }
    }
    public function show()
    {
    }

    public function edit($id)
    {
        $record=Category::find($id);
        $category=['-'=>'نام دسته مادر را انتخاب کنید']+Category::all()->where('cat_id','-')->pluck('name','id')->toArray();
        return view('admin.category.edit',['record'=>$record,'category'=>$category]);
    }

    public function update(Request $request, $id)
    {
        $category=Category::find($id);
        if($category->update($request->all()))
        {
            alert()->success('ویرایش با موفقیت انجام شد', 'ویرایش شد!');
            return redirect('admin/category');

        }
        else
        {
            alert()->error('خطایی رخ داد و ویرایش انجام نشد!', 'خطا!')->autoclose(3500);
            return redirect('admin/category');
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
        $destroy=Category::findorFail($id);
        $categories=Category::where('cat_id',$id)->get();
        foreach ($categories as  $category)
        {
                $category->cat_id="-";
                $category->update();

        }
        $destroy->products()->detach();
        $destroy->delete();
        alert()->success('حذف با موفقیت انجام شد، تمام زیردسته ها به دسته مادر تبدیل شدند!', 'حذف!')->autoclose(3500);
        return redirect()->back();
    }
}