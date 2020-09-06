<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\ImgModel;
use App\productModel;
use App\Test;
use Illuminate\Support\Facades\Gate;

class TestController extends Controller
{
    public function index()
    {
        $dat=time();
        return View('test',['dat'=>$dat]);
    }
    public function create()
    {
        session::flash('fla','ثبت انجام نشد');
         return redirect('test/');
    }
    public function store(Request $request)
    {
    }

    public function show($id)
    {
      /*
      $value=productModel::find(5)->img()->get()->toArray();
      for ($i = 0; $i < 3; $i++)
             var_dump($value($i));
      */
      //product = test1
      // img = test 25

      //$value=new ImgModel(['title'=>'img777']);
      $value=[new ImgModel(['title'=>'img444']),new ImgModel(['title'=>'img555'])];
      $value2=productModel::find(6);
      $value3=$value2->img()->saveMany($value);
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function indexb()
    {
        /*
        Auth()->logout();
        Auth()->loginUsingId(8);
        return Auth()->user();
        */
        $tests=Test::latest()->get();
        return View('welcome',['tests'=>$tests]);
    }
    public function single(Test $test)
    {
        if(Gate::allows('view',$test))
            return $test;
        /*
        if(Gate::denies('view',$test))
            return $test;
        */
        abort(403,'شرمندتم داداش');
    }


}
