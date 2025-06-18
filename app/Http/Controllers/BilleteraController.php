<?php

namespace App\Http\Controllers;

use App\Models\Billetera;
use App\Http\Requests\StoreBilleteraRequest;
use App\Http\Requests\UpdateBilleteraRequest;
use Inertia\Inertia;

class BilleteraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Billetera/BilleteraDashboard');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBilleteraRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Billetera $billetera)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Billetera $billetera)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBilleteraRequest $request, Billetera $billetera)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Billetera $billetera)
    {
        //
    }
}
