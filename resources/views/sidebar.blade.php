<div class="flex-none w-65 h-114">
    <ul class="menu bg-base-200 w-50 rounded-box">
        <li class="menu-title">Карточки</li>
        @foreach(\App\Models\Card::all() as $card)
            @if(isset($card))
                <li>
                    <a href="{{ route('cards.show', $card->id) }}">
                    {{ $card->name }}
                    </a>
                </li>
            @endif
        @endforeach
    </ul>
</div>
