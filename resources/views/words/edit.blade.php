@extends('layout')

@section('content')
<div class="pl-5">
    <h3 style="padding-bottom: 15px">Изменить слово {{ $word->value }}</h3>
    <form action="{{ route('words.update', $word->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-control w-full max-w-xs">
            <label class="label">
                <span class="label-text">Слово</span>
            </label>
            <input type="text" placeholder="слово" name="value" value="{{ $word->value }}" class="input input-bordered input-success w-full max-w-xs" />
        </div>

        <div class="form-control w-full max-w-xs">
            <label class="label">
                <span class="label-text">Транскрипт</span>
            </label>
            <input type="text" placeholder="Транскрипт" name="transcript" value="{{ $word->transcript }}" class="input input-bordered input-success w-full max-w-xs" />
        </div>

        <div class="form-control w-full max-w-xs">
            <label class="label">
                <span class="label-text">Перевод</span>
            </label>
            <input type="text" placeholder="Перевод" name="translate" value="{{ $word->translate  }}" class="input input-bordered input-success w-full max-w-xs" />
        </div>



<div class="flex flex-col pl-20 pt-4">
    <div class="form-control w-52">
        <label class="cursor-pointer label">
            <span class="label-text">Изучен!</span>
            <input name="status" type="checkbox" class="toggle toggle-success" checked {{ ($word->status) ? "checked" : "" }} />

        </label>
    </div>
</div>

@foreach($word->examples as $example)
<div class="flex flex-col pt-4">
    <div class="form-control">
        <label class="cursor-pointer label">

            <textarea class="textarea textarea-success" name="text" rows="4" cols="56" >{{ $example->text }}</textarea>
        </label>
    </div>
</div>
@endforeach

<button class="btn btn-outline mt-4">Изменить</button>

</form>
</div>
@endsection
