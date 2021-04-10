<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Category;
use Auth;
use Illuminate\Support\Carbon;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function AllCat()
    {
      return view('admin.category.index');
    }

    public function AddCat(Request $request)
    {
        $validatedData = $request->validate([
            'category_name' => 'required|unique:posts|max:255',
        ],
        [
            'category_name.requried'=>'Please input category name',
            'category_name.max'=>'Category name must be less than 255',
        ]   );

      Category::insert([
            'category_name'=>$request->category_name,
            'user_id'=>Auth::user()->id,
            'created_at'=>Carboon::now()
        ]);
      /*$category=new Category;
        $category->category_name=$request->category_name;
        $category->user_id=Auth::user()->id;
        $category->save();*/
        return redirect()->back()->with('succsess','Category inserted successful');
        }    


    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
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
        //
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
}
