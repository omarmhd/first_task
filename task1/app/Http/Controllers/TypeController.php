<?php

namespace App\Http\Controllers;

use App\Type;
use Illuminate\Http\Request;
use   Illuminate\Support\Facades\Validator;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

 return view('task1')->with('key',Type::get());

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

$validation =validator::make ($request->all(),['drive'=>'required'],['driver.required'=>'error in embty ']);
if($validation->fails())
return redirect()->back()->withErrors($validation->errors())->withInput($request->all());


$type=new Type();
if ($request->Radios=="لتر")
$type->Quantity=$request->Radios." " .$request->Quantity;

if ($request->Radios=="مبلغ")
$type->Quantity=$request->Radios." " .$request->Quantity;

$type->type=$request->type;
$type->date=date("y-m-d");
$type->driver=$request->drive;
$type->stutas="تم الاستلام";
$type->save();
return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function show(Type $type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function edit(Type $type)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
       $typeid= Type::find($id);
        if($request->stutas=="ايقاف"){
            // dd($typeid->stutas);
            $typeid->stutas='تم الايقاف';
            $typeid->save();


    }
return redirect('/');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function destroy(Type $type)
    {
        //
    }
}
