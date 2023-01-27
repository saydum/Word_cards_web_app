<?php

namespace App\Http\Controllers;

use App\Models\Example;
use Illuminate\Http\Request;

class ExampleController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        Example::create($request->all());

        return redirect()->route('words.show', $request->input('word_id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Example  $example
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Example $example)
    {
        $example->update($request->all());

        return redirect()->route('example.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Example  $example
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Example $example)
    {
        $example->delete();

        return redirect()->route('example.index');
    }
}
