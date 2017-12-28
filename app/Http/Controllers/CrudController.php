<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

interface CrudController
{
    //
//    public function index();
    public function create();
    public function show($id);
    public function edit($id);
    public function destroy($id);
//    public function store(FormRequest $request);
    public function update(Request $request,$id);

}
