<div class="col-md-2">
    <h4 class="text-muted">Карточки</h4>
    <nav class="navbar bg-white ">
        <ul class="list-group">
            @foreach(\App\Models\Card::all() as $card)
                @if(isset($card))
                    <li class="list-group-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('cards.show', $card->id) }}">
                            {{ $card->name }}
                        </a>
                    </li>
                @endif
            @endforeach
        </ul>
    </nav>
</div>
