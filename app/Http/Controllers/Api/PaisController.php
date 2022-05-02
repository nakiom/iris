<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PaisResource;
use App\Models\Pais;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PaisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $paises = Pais::query()
            ->with('provincias')
            ->where('nombre','like','%'.$request->search.'%')
            ->orderBy('nombre')
            // ->applySorts($request->sort)
            // ->paginate($request->per_page ?: 5)
            // ->onEachSide(0);
            ->get();

        return PaisResource::collection($paises)
            ->response()
            ->setStatusCode(Response::HTTP_OK);
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
     * @param  int  $pais
     * @return \Illuminate\Http\Response
     */
    public function show( Pais $pais)
    {
        // return new PaisResource($pais->load('provincias.distritos.localidades.calles'));
        return (new PaisResource($pais))
            ->response()
            ->setStatusCode(Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $pais
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  Pais $pais)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $pais
     * @return \Illuminate\Http\Response
     */
    public function destroy( Pais $pais)
    {
        //
    }
}
