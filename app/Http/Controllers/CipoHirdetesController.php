<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\CipoHirdetes;
use App\Http\Requests\StoreCipohirdetesRequest;
use App\Http\Requests\UpdateCipHirdetesRequest;

class CipoHirdetesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $m = CipoHirdetes::all();
        return view('cipohirdetes.index',['adat' => $m]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cipohirdetes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCipohirdetesRequest $request)
    {
        $s = $request->validated();
        CipoHirdetes::create($s);
        $this->create();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $m = CipoHirdetes::findOrFail($id);
        return view('cipohirdetes.show',['adat' => $m]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $m = CipoHirdetes::findOrFail($id);
        return view('cipohirdetes.edit',['adat' => $m]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCipHirdetesRequest $request, $id)
    {
        $m = CipoHirdetes::findOrFail($id);
        $d = $request->validated();
        $m->update($d);
        $this->show($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $m = CipoHirdetes::findOrFail($id);
        $m->delete();
        $this->index();
    }
}
