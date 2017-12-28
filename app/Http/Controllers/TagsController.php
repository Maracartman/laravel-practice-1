<?php

namespace App\Http\Controllers;

use App\Http\Requests\TagRequest;
use App\Tag;
use Illuminate\Http\Request;

class TagsController extends Controller implements CrudController
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index(Request $request)
    {

        // TODO: Implement index() method.
        $tags = Tag::search($request->name)->orderBy('id', 'ASC')->paginate(5);

        return view('admin.tags.index')->with('tags', $tags);
    }

    public function create()
    {
        // TODO: Implement create() method.
        return view('admin.tags.create');
    }

    public function show($id)
    {
        // TODO: Implement show() method.
    }

    public function edit($id)
    {
        // TODO: Implement edit() method.ç
        $tag = Tag::find($id);

        return view('admin.tags.edit')->with('tag',$tag);
    }

    public function destroy($id)
    {
        // TODO: Implement destroy() method.
        $tag = Tag::find($id);
        $tag->delete();
        flash('Tag ' . $tag->name . ' eliminado exitosamente.')->error();
        return redirect()->route('tags.index');
    }

    public function update(Request $request, $id)
    {
        // TODO: Implement update() method.
        // TODO: Implement update() method.
        $tag = Tag::find($id);
        $tag->fill($request->all());
        $tag->save();
        flash('Exito al actualizar el tag.')->success();
        return redirect()->route('tags.index');
    }

    public function store(TagRequest $request)
    {
        // TODO: Implement store() method.
        $tag = new Tag($request->all());
        $tag->save();
        flash('Exito al guardar el tag.')->success();
        return redirect()->route('tags.index');
    }
}
