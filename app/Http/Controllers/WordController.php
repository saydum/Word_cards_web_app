<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Example;
use App\Models\Word;
use Illuminate\Http\Request;

class WordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Card $card)
    {

        return view('web.words.index',
            [
                'words' => Card::find($card->id)->words,
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create(Card $card)
    {
        return view('web.words.add',
            [
                'card_id' => $card->id
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        Word::create($request->all());
        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Word  $word
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Word $word)
    {
        return view('web.words.show',
            [
                'word' => $word,
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Word  $word
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Word $word)
    {
        return view('web.words.edit',
            [
                'word' => $word,
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Word  $word
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Word $word)
    {
        Example::create([
            'text' => $request->input('text'),
            'word_id' => $word->id,
        ]);
        $word->update($request->all());
        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Word  $word
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Word $word): \Illuminate\Http\RedirectResponse
    {
        $word->delete();
        return redirect()->route('index');
    }
}
