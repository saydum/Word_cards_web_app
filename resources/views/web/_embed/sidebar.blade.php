@if(isset($card))
<div class="col-md-2">
    <h4 class="text-muted">Карточки</h4>
    <nav class="navbar bg-white ">
        <ul class="list-group">
            @foreach(\App\Models\Card::where('user_id', '=', auth()->id())->get() as $card)

                    <li class="list-group-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('cards.show', $card->id) }}">
                            {{ $card->name }}
                        </a>
                    </li>
            @endforeach
        </ul>
    </nav>
</div>
@endif
