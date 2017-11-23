<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Autor;

class AutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $autors = DB::table('autors')
                ->orderBy('count', 'desc')
                ->get();

        $user = Auth::user()->role;
        
        return view('autors.index' , compact('autors' , 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('autors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

          $autor = Autor::create([
                'name'          => $request['name'],                
                'born_date'     => $request['born_date'], 
                'city'          => $request['city'],
                'bio'           => $request['bio'],
                
            ]);        

            
        return redirect()->route('autors.index')->withSuccess('Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $autor           = Autor::find($id);
        return view('autors.show', compact('autor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $autor = Autor::findOrFail($id);
         return view('autors.edit', compact( 'autor'));
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
        $autor = Autor::findOrFail($id);
        $autor->name           = $request['name'];                
        $autor->born_date      = $request['born_date'];
        $autor->city           = $request['city'];
        $autor->bio            = $request['bio'];
        $autor->save();
        
       
    
                       
        return redirect()->route('autors.index')->withSuccess('Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $autor = Autor::find($id);
       
        $autor->delete();
        return redirect()->route('autors.index')->withSuccess('Deleted !');
    }
}
