<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Project;

class BController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


  
     public function __construct(){         
         $this->middleware('auth')->except('index', 'show');
         
     }

    public function index()
    {

        

        return view('b', [

            'posteo' => Project::latest()->paginate()

        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('random.create', [
            'project' => new Project
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {

            $fields = request()->validate([
                'title'=> 'required',
                'url'=> 'required',
                'description'=> 'required'
            ]);

            Project::create($fields);

        return redirect()->route('random.index')->with('status', 'Hilo creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Project $hilo)
    {
       // return $id;

        return view('random.show', [
            'project' => $hilo
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $hilo)
    {
        return view ('random.edit', [
            'project' => $hilo
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Project $hilo)
    {
        $hilo->update([
            'title'=>request('title'),
            'url'=>request('url'),
            'description'=>request('description')
        ]);

        return redirect()->route('random.show', $hilo)->with('status', 'Hilo actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $hilo)
    {
        $hilo->delete();

        return redirect()->route('random.index', $hilo)->with('Hilo eliminado correctamente');
    }
}
