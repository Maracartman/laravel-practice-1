<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\UserRequest;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class CategoriesController extends Controller implements CrudController
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //
    public function index()
    {
        // TODO: Implement index() method.
        $categories = Category::orderBy('id', 'ASC')->paginate(5);
        return view('admin.categories.index')->with('categories', $categories);
    }

    public function create()
    {
        // TODO: Implement create() method.
        return view('admin.categories.create');
    }

    public function show($id)
    {
        // TODO: Implement show() method.
    }

    public function edit($id)
    {
        // TODO: Implement edit() method.
        $category = Category::find($id);
        return view('admin.categories.edit')->with('category', $category);
    }

    public function destroy($id)
    {
        // TODO: Implement destroy() method.
        $category = Category::find($id);
        $category->delete();
        flash('Categoría ' . $category->name . ' eliminada exitosamente.')->error();
        return redirect()->route('categories.index');
    }

    public function store(CategoryRequest $request)
    {
        // TODO: Implement store() method.
        $category = new Category($request->all());
        $category->save();
        flash('Exito al guardar la categoría.')->success();
        return redirect()->route('categories.index');
    }

    public function update(Request $request, $id)
    {
        // TODO: Implement update() method.
        $category = Category::find($id);
//        user->fill($request->all());
        $category->name = $request->name;
        $category->save();
        flash('Exito al actualizar la categoría.')->success();
        return redirect()->route('categories.index');
    }
}
