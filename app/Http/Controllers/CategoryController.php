<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
  
    public function index()
    {
         $categories = Category::latest()->paginate(5);
        return view('categories.index',compact('categories'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('categories.create');

    }
    public function store(Request $request)
    {
        $this->validate($request, [
                'ca_name' => 'required',
                'ca_note' => 'required',
        ]);
        Category::create($request->all());
        return redirect()->route('categories.index')
                         ->with('success','Category create successfully');
    }
    public function show($ca_id)
    {
        $category = Category::find($ca_id);
        return view('categories.show',compact('category'));
    }
     public function edit($ca_id)
    {
        $category = Category::find($ca_id);
        return view('categories.edit',compact('category'));
    }
    public function update(Request $request, $ca_id)
    {
       $this->validate($request, [
            'ca_name' => 'required',
            'ca_note' => 'required',
        ]);
        Category::find($ca_id)->update($request->all());
        return redirect()->route('categories.index')
                        ->with('success','Article updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($ca_id)
    {
        Category::find($ca_id)->delete();
        return redirect()->route('categories.index')
                        ->with('success','Article deleted successfully');
    }
}
