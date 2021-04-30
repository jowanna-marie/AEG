<?php

namespace App\Http\Controllers;

use App\Models\SgeType;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SgeTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        return view('sge.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        SgeType::create($request->all());
        return redirect()->route('sgetype');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SgeType  $sgeType
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sge_type = SgeType::findOrFail($id);
        return view('sge.show', compact('sge_type'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SgeType  $sgeType
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sge_type = SgeType::findOrFail($id);
        return view('sge.edit', compact('sge_type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SgeType  $sgeType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $sgeType = SgeType::findOrFail($id);
        $sgeType->fill($request->all())->save();
        return redirect()->route('sgetype');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SgeType  $sgeType
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sgeType = SgeType::findOrFail($id);
        $sgeType->delete();
        return back();
    }
}
