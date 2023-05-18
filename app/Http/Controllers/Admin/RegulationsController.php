<?php

namespace App\Http\Controllers\Admin;

use App\Models\Regulations;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegulationFormRequest;

class RegulationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regulations = Regulations::paginate(10);
        return view('admin.regulations.index', compact('regulations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.violations.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegulationFormRequest $request)
    {
        $validatedData = $request->validated();

        $request->violations()->create([
            'name' => $validatedData['regulation_name'],
            'description' => $validatedData['description']
        ]);
        return redirect('admin/violations')->with('message', 'New Violations has been created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $categories_id)
    {
        $regulations = Regulations::all();

        return view('admin.violations.show', compact('regulations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

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
