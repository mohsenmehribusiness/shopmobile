<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Company;
use App\Http\Requests\CompanyRequest;
use Illuminate\Support\Facades\File;

class CompanyController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies=Company::orderby('id','desc')->paginate(12);
        $count=Company::count();
        return View('admin.company.index',['companies'=>$companies,'count'=>$count]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('admin.company.create-company');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompanyRequest $request)
    {
        $company=new company($request->all());
        $fileName=null;
        if ($request->hasFile('logo'))
        {
            $file = $request->file('logo');
            $extension = $file->getClientOriginalExtension();
            $fileName ='company_'.'_time_'.time().'_'.str_random(2).'.'.$extension;
            $destinationPath = 'images/company'.'/';
            $file->move($destinationPath, $fileName);
            $company->logo=$fileName;
        }
        $path = public_path() . '/images/company/' .$fileName;
        $sizes = ["290"];
        $imagePath  = 'images/company'.'/';
        $filename='company_'.'_time_'.time().'_'.str_random(2).'.'.$extension;
        $this->resize($path , $sizes , $imagePath , $filename);
        /* upload image rename image save image*/
        if($company->save())
        {
            alert()->success('ثبت با موفقیت انجام شد', 'ثبت شد!');
            return redirect('admin/company');
        }
        else
        {
            alert()->error('خطایی رخ داده و ثبت انجام نشد!', 'خطا!')->autoclose(3500);
            return redirect('admin/company');
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
        $company=company::find($id);
        return view('admin.company.show-company',['company'=>$company]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company=company::find($id);
        return View('admin.company.edit-company',['record'=>$company]);
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
        $company=company::find($id);
        $fileName=$company->logo;
        if ($request->hasFile('logo'))
        {
            $file = $request->file('logo');
            $extension = $file->getClientOriginalExtension();
            $fileName ='company_'.'_time_'.time().'_'.str_random(2).'.'.$extension;
            $destinationPath = 'images/company'.'/';
            $file->move($destinationPath, $fileName);
            $path = public_path().'images/company/'.$company->logo;
            File::delete($path);
        }
        /* save new photo */
        if($company->update(['name'=>$request->name,'logo'=>$fileName,'description'=>$request->description]))
        {
            alert()->success('ویرایش با موفقیت انجام شد', 'ویرایش شد!');
            return redirect('admin/company');
        }
        else
        {
            alert()->error('خطایی رخ داده و ویرایش انجام نشد!', 'خطا!')->autoclose(3500);
            return redirect('admin/company');
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
        $destroy=company::findorFail($id);
        if($destroy->logo)
        {
            $path = public_path() . '/images/company/' . $destroy->logo;
            File::delete($path);
        }
        $destroy->delete();
        alert()->error( 'حذف شد!')->autoclose(1500);
        return redirect()->back();
    }
}
