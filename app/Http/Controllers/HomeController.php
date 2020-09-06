<?php

namespace App\Http\Controllers;
use function GuzzleHttp\Promise\queue;
use Illuminate\Http\Request;
use App\product;
use App\category;
use App\company;
use App\comment;
use App\about;
use App\image;
use App\order;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;
//use Sarfraznawaz2005\VisitLog\Facades\VisitLog;

class HomeController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        return View('index.index');
    }

    public  function  product($id)
    {
        $product = product::find($id);
        $product->seen++;
        $product->update();
        return View('index.product_detail',compact('product'));
    }

    public  function  tag($id)
    {
        $products = product::where('tag','LIKE','%'.$id.'%')->paginate(12);
        $asl="tag";
        $tag_value=$id;
        return View('index.list',compact('products','asl','tag_value'));
    }


    public  function  category($id)
    {
        $category = category::find($id);
        $products=$category->products()->paginate(12);
        $asl="category";
        return View('index.list',compact('products','asl','category'));
    }

    public  function  company($id)
    {
        $company = company::find($id);
        $products=$company->products()->paginate(12);
        $asl="company";
        return View('index.list',compact('products','asl','company'));
    }

    public  function  product_all()
    {
        $products = product::orderby('id','desc')->paginate(12);
        $asl="product";
        return View('index.list',compact('products','asl'));
    }

    public  function cart()
    {
        //$products=array();
        $carts=session::get('cart');
        //list($keys, $values) = array_divide($carts);
        //$products=product::find($keys);
        return view('index.cart_shop',compact('carts'));
    }

    public  function  company_all()
    {
        $companies=company::all();
        return View('index.company_all',compact('companies'));
    }

    public  function  comment(Request $request)
    {
        $comment=new comment($request->all());
        if($comment->save())
        {
            return redirect()->back();
        }
    }

    public  function  contact(Request $request)
    {
        $comment=new comment($request->all());
        if($comment->save())
        {
            return redirect()->back();
        }
    }
    /**/
    public  function  about()
    {
        $about=about::whereId(1)->first();
        return view('index.about',compact('about'));
    }
    public  function  callme()
    {
        return view('index.contact');
    }
    public  function  webmap()
    {
        return "this is webmap";
    }

    public  function add(Request $request)
    {
        if(session::has('cart'))
        {
            $cart=session::get('cart');
            if(array_key_exists($request->id_pro,$cart))
            {
                $cart[$request->id_pro]++;
            }
            else
            {
                $cart[$request->id_pro]=1;
            }
            session::put('cart',$cart);
        }
        else
        {
            $cart=array();
            $cart[$request->id_pro]=1;
            session::put('cart',$cart);
        }
        return View('layouts.index.cart');
    }

    public  function compare()
    {
        $products=array();
        $compare=session::get('compare');
        list($keys, $values) = array_divide($compare);
        $products=product::find($keys);
        return view('index.compare_product',compact('products'));
    }

    public  function add_compare(Request $request)
    {
        if(session::has('compare'))
        {
            $compare=session::get('compare');
            if(!array_key_exists($request->id,$compare))
            {
                $compare=array_add($compare,$request->id,$request->id);
            }
            session::put('compare',$compare);
        }
        else
        {
            $compare=array();
            $compare=array_add($compare,$request->id,$request->id);
            session::put('compare',$compare);
        }
        return View('layouts.index.compare');
    }

    public  function del_compare(Request $request)
    {
        $compare=session::get('compare');
        array_forget($compare,$request->id );
        session::put('compare',$compare);
        return View('layouts.index.compare');
    }
/*

    public  function del_compare(Request $request)
    {
        $compare=session::get('compare');
        array_forget($compare,$request->id );
        session::put('compare',$compare);
        return View('layouts.index.compare');
    }

*/
    public  function plus(Request $request)
    {
        $da=0;
        if(session::has('cart'))
        {
            $cart=session::get('cart');
            $cart[$request->id_pro]++;
            session::put('cart',$cart);
            $da=$cart[$request->id_pro];
        }
        return $da;
    }
    public  function min(Request $request)
    {
        if(session::has('cart'))
        {
            $cart=session::get('cart');
            if($cart[$request->id_pro]==1)
            {
                array_forget($cart,$request->id_pro );
            }
            else
            {
                $cart[$request->id_pro]--;
            }
            session::put('cart',$cart);
        }
        return View('layouts.index.cart');
    }
    public  function del_cart(Request $request)
    {
        $cart=session::get('cart');
        array_forget($cart,$request->id_pro );
        session::put('cart',$cart);
        return View('layouts.index.cart');
    }

    public  function  cart_end()
    {
        return View('index.cart_user');
    }

    public  function  cart_end_end(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'address'=>'required|max:255',
        ]);
        $order=new order($request->all());
        $order->save();
        $carts=session::get('cart');
        list($keys, $values) = array_divide($carts);
        $products=product::find($keys);
        $order->products()->sync($products);
        session::put('cart',null);
        session::put('compare',null);
        return redirect('/');
    }
}
/*use Illuminate\Support\Facades\File;*/