<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     protected $appends = [
         'getParentsTree'
     ];

     public static function getParentsTree($category,$title) {

        if($category->parent_id == 0) {

            return $title;

        }

        $parent = Category::find($category->parent_id);
        $title = $parent->title . ' > ' . $title;
        return CategoryController::getParentsTree($parent,$title);


     }

    public function index()
    {
        //
      
        $data= Category::all();
        return view('admin.category.index', [
            'data'=> $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data= Category::all();
        return view('admin.category.create', [
            'data'=> $data
        ]);
     

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function show(Categories $categories,$id)
    {
        
        $data= Category::find($id);
        return view('admin.category.show', [
            'data'=> $data
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function edit(Categories $categories,$id)
    {
        $data= Category::find($id);
        $datalist = Category::all();
        return view('admin.category.edit', [
            'data'=> $data,
            'datalist' => $datalist

        ]);
    }

 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categories $categories,$id)
    {
        $data= Category::find($id);
      
        
        $data->parent_id = 0;
            
       
        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        $data->status = $request->status;
        if($request->file('image')) {
            $data->image=  $request->file('image')->store('images');
        }
       
        
        $data->save();
    
        return redirect('adminpanel/category');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categories $categories,$id)
    {
        $data=Category::find($id);
        Storage::delete($data->image);
        $data->delete();
        return redirect('adminpanel/category');
    }

public function store(Request $request) {

    $data= new Category();
    $data->parent_id =0;
    $data->title = $request->title;
    $data->keywords = $request->keywords;
    $data->description = $request->description;
    $data->status = $request->status;
    if($request->file('image')) {
        $data->image=  $request->file('image')->store('images');
    }
    $data->save();

    return redirect('adminpanel/category');
}

}
