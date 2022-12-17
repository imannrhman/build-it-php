<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProfessionalRequest;
use App\Http\Requests\UpdateProfessionalRequest;
use App\Models\Professional;
use Illuminate\Http\Response;

class ProfessionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreProfessionalRequest $request
     * @return Response
     */
    public function store(StoreProfessionalRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Professional $professional
     * @return Response
     */
    public function show(Professional $professional)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Professional $professional
     * @return Response
     */
    public function edit(Professional $professional)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateProfessionalRequest $request
     * @param Professional $professional
     * @return Response
     */
    public function update(UpdateProfessionalRequest $request, Professional $professional)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Professional $professional
     * @return Response
     */
    public function destroy(Professional $professional)
    {
        //
    }
}
