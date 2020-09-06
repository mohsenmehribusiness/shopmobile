<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\comment;
use Illuminate\Support\Facades\Session;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     * state : for confirm comment admin
     * state1 : comment or sendpersonal ??!! state1=comment
     */
    public function index()
    {
        $comments=comment::where('state1','1')->where('state','0')->paginate(8);
        return view('admin.comment.index',compact('comments'));
    }

    public function sendweb()
    {
        $comments=comment::where('state1','0')->paginate(5);
        return view('admin.comment.index',compact('comments'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $comment=comment::find($id);
        $comment->state="1";
        $comment->update();
        return view('admin.comment.response',compact('comment'));
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
        $comment=new comment($request->all());
        if($comment->save())
        {
            alert()->success('پاسخ شما ثبت و نمایش داده خواهد شد', 'ثبت شد!');
            return redirect('admin/comments');
        }
        else
        {
            alert()->error('خطایی رخ داده و پاسخ ثبت نشد!', 'خطا!')->autoclose(3500);
            return redirect('admin/comments');
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

    public function add(Request $request)
    {
        $comment=comment::findorfail($request->id);
        $comment->state="1";
        $comment->update();
    }
    public function del(Request $request)
    {
        $comment=comment::find($request->id);
        $comment->delete();
    }
}
