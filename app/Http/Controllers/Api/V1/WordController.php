<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Word;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class WordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|JsonResponse|\Illuminate\Http\Response
     */
    public function index(): JsonResponse
    {
        $words = Word::all()->take(10);
        return response()->json($words, 200);
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
     * @param  \App\Models\Word  $word
     * @return \Illuminate\Http\Response
     */
    public function show(Word $word)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Word  $word
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Word $word)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Word  $word
     * @return \Illuminate\Http\Response
     */
    public function destroy(Word $word)
    {
        //
    }
}
