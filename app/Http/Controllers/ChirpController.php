<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Gate;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Http\RedirectResponse;
use App\Models\Chirp;
use Illuminate\Http\Request;
//use Illuminate\Http\Response;



class ChirpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response //การแสดงรายการ chirp
    {
        return Inertia::render('Chirps/Index', [
            'chirps' => Chirp::with('user:id,name')->latest()->get(),
        ]);
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
    public function store(Request $request): RedirectResponse  //การบันทึกข้อความ chirp
    {
        $validated = $request->validate([
            'message' => 'required|string|max:255',
        ]);

        $request->user()->chirps()->create($validated);  //insert into table

        return redirect(route('chirps.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Chirp $chirp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Chirp $chirp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Chirp $chirp): RedirectResponse  //การอัพเดตแก้ไขข้อความ chirp
    {
        Gate::authorize('update', $chirp); //เพิ่ม gate

        $validated = $request->validate([
            'message' => 'required|string|max:255',
        ]);

        $chirp->update($validated);

        return redirect(route('chirps.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chirp $chirp): RedirectResponse  //การลบข้อความ chirp
    {
        Gate::authorize('delete', $chirp);

        $chirp->delete();

        return redirect(route('chirps.index'));
    }
}
