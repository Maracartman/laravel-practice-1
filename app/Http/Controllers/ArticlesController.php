<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Http\Requests\ArticleRequest;
use App\User;
use Illuminate\Http\Request;

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

        return view('admin.articles.create', [
            'users' => $users,
            'categories' => $categories
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
        return view('admin.articles.edit')->with('article', $article);
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
    }

    public function store(ArticleRequest $request)
    {
        // TODO: Implement store() method.
        $article = new Article($request->all());
        $article->save();
        flash('Exito al guardar el artículo.')->success();
        return redirect()->route('articles.index');
    }
}
