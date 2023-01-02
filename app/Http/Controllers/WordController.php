<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Example;
use App\Models\Word;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Card $card)
    {
        $counter = 1;
        $countWords = Word::where('card_id', '=', $card->id)->get();

        return view('web.words.index',
            [
                'words' => $card->words()->get(),
                'cardId' => $card->id,
                'countWords' => $countWords->count(),
                'counter' => $counter,
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
        return view('web.words.add');
    }

    /**
     * Store a newly created resource in storage.
     * @TODO
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        Word::create([
            'value' => $request->input('value'),
            'transcript' => $request->input('transcript'),
            'translate' => $request->input('translate'),
            'card_id' => $request->input('card_id'),
        ]);
        return redirect()->route('cards.show', $request->input('card_id'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Word  $word
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Word $word)
    {
        $example = null;

        foreach ($word->examples as $item) {
            $example = $item->text;
        }
        return view('web.words.show',
            [
                'word' => $word,
                'example' => $example,
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
        Example::where('word_id', '=', $word->id)->update(['text' => $request->input('text')]);
        
        $status = ($request->input('status')) ? 1 : 0;

        $word->update([
            'value' => $request->input('value'),
            'transcript' => $request->input('transcript'),
            'translate' => $request->input('translate'),
            'card_id' => $word->card->id,
            'status' => $status,
        ]);
        return redirect()->route('cards.show', $word->card->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Word  $word
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Word $word): RedirectResponse
    {
        $word->delete();
        return redirect()->route('index');
    }
}
