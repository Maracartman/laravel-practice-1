<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Http\Requests\ArticleRequest;
use App\Image;
use App\Tag;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticlesController extends Controller
    implements CrudController
{
    //
    public function index()
    {
        // TODO: Implement index() method.
        $articles = Article::orderBy('id', 'ASC')->paginate(5);

        return view('admin.articles.index')->with('articles', $articles);
    }

    public function create()
    {
        // TODO: Implement create() method.

        $users = User::all()->whereNotIn('type', 'admin')->pluck('name','id');
        $categories = Category::all()->pluck('name','id');
        $tags = Tag::orderBy('name','ASC')->get()->pluck('name','id');
        return view('admin.articles.create', [
            'users' => $users,
            'categories' => $categories,
            'tags'=>$tags
        ]);
    }

    public function show($id)
    {
        // TODO: Implement show() method.
    }

    public function edit($id)
    {
        // TODO: Implement edit() method.ç
        $article = Article::find($id);
        $users = User::all()->whereNotIn('type', 'admin')->pluck('name','id');
        $categories = Category::all()->pluck('name','id');
        $tags = Tag::all()->pluck('name','id');
        return view('admin.articles.edit',
            [
                'users' => $users,
                'article' => $article,
                'categories' => $categories,
                'tags' => $tags
            ]);
    }

    public function destroy($id)
    {
        // TODO: Implement destroy() method.
        $article = Article::find($id);
        $article->delete();
        flash('Artículo ' . $article->name . ' eliminado exitosamente.')->error();
        return redirect()->route('articles.index');
    }

    public function update(Request $request, $id)
    {
        // TODO: Implement update() method.
        // TODO: Implement update() method.
        $article = Article::find($id);
        $article->fill($request->all());
        $article->save();

        //Manipulacion de imagen
        if($request->file('image')){
            $file = $request->file('image');
            $fileName = 'img_'.time().'.'.$file->getClientOriginalExtension();
            $path = public_path() .'/images/articles/';
            $file->move($path,$fileName);
            $image = new Image();
            $image->name = $fileName;
            $image->article()->associate($article);
            $image->save();
        }

        $article->tags()->sync($request->tags);

        flash('Exito al actualizar el artículo.')->success();
        return redirect()->route('articles.index');
    }

    public function store(ArticleRequest $request)
    {
        // TODO: Implement store() method.
        $article = new Article($request->all());
        $article->user_id = Auth::id();
        $article->save();

        //Manipulacion de imagen
        if($request->file('image')){
            $file = $request->file('image');
            $fileName = 'img_'.time().'.'.$file->getClientOriginalExtension();
            $path = public_path() .'/images/articles/';
            $file->move($path,$fileName);
            $image = new Image();
            $image->name = $fileName;
            $image->article()->associate($article);
            $image->save();
        }

        $article->tags()->sync($request->tags);


        flash('Exito al guardar el artículo.')->success();
        return redirect()->route('articles.index');
    }
}
