<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\Comment;

class LaravelCrud extends Controller
{

    function comment(Request $request){

        $request->validate([
            'name' => 'required',
            'author' => 'required',
            'text' => 'required',
        ]);

        $comment = new Comment();
        $comment->name = $request->input('name');
        $comment->author = $request->input('id');
        $comment->text = $request->input('text');
        $comment->save();

        return redirect('article'.$request->id);
    }

    function showArticle() {
        $article = DB::table('articles')->get();

        return view('index', ['articles' => $article]);
    }

    function showOneArticle($id) {
        $oneArticle = DB::table('articles')->where('id', $id)->get();
        $comment = DB::table('comments')->where('author', $id)->get();

        return view('article1', ['articles' => $oneArticle], ['comments' => $comment]);
    }

    function edit($id){
        $row = DB::table('users')
            ->where('id', $id)
            ->first();
        $data = [
            'Info' => $row,
        ];

        return view('edit', $data);
    }

    function delete($id){
        $delete = DB::table('users')
            ->where('id', $id)
            ->delete();
        return redirect('/');
    }

    function update(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email'
        ]);

        $updating = DB::table('users')
            ->where('id', $request->input('cid'))
            ->update([
                'name'=>$request->input('name'),
                'email'=>$request->input('email')
            ]);
        return redirect('/');
    }

}
