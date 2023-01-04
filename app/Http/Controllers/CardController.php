<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\User;
use function auth;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {
        return view('web.cards.index',
            [
                'cards' => User::find(auth()->id())->cards,
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('web.cards.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        Card::create([
            'name' => $request->input('name'),
            'user_id' => $request->input('user_id'),
            'finish' => $request->input('finish'),
        ]);

        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  Card  $card
     * @return Application|Factory|View
     */
    public function show(Request $request, Card $card)
    {
        $inputGetCountWords = $request->input('getCountWords');

        $getCountWords = ((!$inputGetCountWords) ? 15 : $request->input('getCountWords'));

        return view('web.words.index',
            [
                'words' => $card->words()->take($getCountWords)->get(),
                'cardId' => $card->id,
                'countWords' => $card->words()->count(),
                'getCountWords' => $getCountWords,
                'counter' => 1,
                'finish' => $card->finish,
                'progress' => $card->words()->where('status', '=', '1')->count(),
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Card  $card
     * @return Application|Factory|View
     */
    public function edit(Card $card)
    {
        return view('web.cards.edit',
            [
                'card' => $card,
                'cardId' => $card->id,
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  Card  $card
     * @return RedirectResponse
     */
    public function update(Request $request, Card $card)
    {
        $card->update($request->all());

        return redirect()->route('cards.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Card  $card
     * @return RedirectResponse
     */
    public function destroy(Card $card): RedirectResponse
    {
        $card->delete();

        return redirect()->route('cards.index');
    }
}
