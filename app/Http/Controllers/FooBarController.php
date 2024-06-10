<?php

namespace App\Http\Controllers;

use App\Models\Foobar;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class FooBarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('foobars.index', ['foobars' => Foobar::where('user_id', auth()->id())->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('foobars.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        Foobar::create(array_merge($validated, ['user_id' => auth()->id()]));

        return redirect()->route('foobars.index')->with('success', 'Foobar created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Foobar $foobar)
    {
        return view('foobars.show', ['foobar' => $foobar]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Foobar $foobar)
    {
        return view('foobars.edit', ['foobar' => $foobar]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Foobar $foobar)
    {
        if (auth()->id() !== $foobar->user_id) {
            abort(403, 'Unauthorized action.');
        }

        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        $foobar->update($validatedData);

        return redirect()->route('foobars.index')->with('success', 'Foobar updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Foobar $foobar)
    {
        $foobar->delete();

        return redirect()->route('foobars.index')->with('success', 'Foobar deleted successfully!');
    }
}
