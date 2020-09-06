<?php

namespace App\Http\Controllers\admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\File;

class UserController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=user::find(1);
        return View('admin.user.index',compact('user'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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
        $user=user::find(1);
        return View('admin.user.edit',['record'=>$user]);
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
        $this->validate($request,[
            'password'=>'required|confirmed|min:6',
            'email'=>'required|email'
        ]);
        $user=user::find(1);
        $img="hi";
        if ($request->hasFile('img'))
        {
            $file= $request->file('img');
            $extension = $file->getClientOriginalExtension();
            $fileName ='admin_'.'time_'.time().'_'.str_random(3).'.'.$extension;
            $destinationPath = 'images/user'.'/';
            $file->move($destinationPath, $fileName);
            $path = public_path().'images/user/'.$user->img;
            File::delete($path);
            $img=$fileName;
        }
        $password=bcrypt($request->password);
        if($user->update(['img'=>$img,'name'=>$request->name,'email'=>$request->email,'password'=>$password]))
        {
            alert()->success('ویرایش با موفقیت انجام شد', 'ویرایش شد!');
            return redirect('admin/user');
        }
        else
        {
            alert()->error('خطایی رخ داده و ویرایش انجام نشد!', 'خطا!')->autoclose(3500);
            return redirect('admin/user');
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
        //
    }
}
