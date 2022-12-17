<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProfessionalProjectRequest;
use App\Http\Requests\UpdateProfessionalProjectRequest;
use App\Models\ProfessionalProject;
use Illuminate\Http\Response;

class ProfessionalProjectController extends Controller
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
     * @param StoreProfessionalProjectRequest $request
     * @return Response
     */
    public function store(StoreProfessionalProjectRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param ProfessionalProject $professionalProject
     * @return Response
     */
    public function show(ProfessionalProject $professionalProject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param ProfessionalProject $professionalProject
     * @return Response
     */
    public function edit(ProfessionalProject $professionalProject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateProfessionalProjectRequest $request
     * @param ProfessionalProject $professionalProject
     * @return Response
     */
    public function update(UpdateProfessionalProjectRequest $request, ProfessionalProject $professionalProject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param ProfessionalProject $professionalProject
     * @return Response
     */
    public function destroy(ProfessionalProject $professionalProject)
    {
        //
    }
}
