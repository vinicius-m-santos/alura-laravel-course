<x-layout title="Séries">

    <a href="{{route('series.create')}}" class="btn btn-dark mb-2">Adicionar</a>

    @isset($mensagemSucesso)
    <div class="alert alert-success">
        {{ $mensagemSucesso}}
    </div>
    @endisset

    <ul class="list-group">
        @foreach($series as $serie)
            <li class="list-group-item d-flex justify-content-between align-items-center" id="{{$serie->id}}">
                <a href="{{ route('seasons.index', $serie->id) }}" style="color: #000;text-decoration: none;text-transform: capitalize;border-bottom: 2px dotted #000;">
                    {{ $serie->nome }}
                </a>
                <span class="d-flex">
                    <a href="{{route('series.edit', $serie->id)}}" class="btn btn-primary btn-sm me-2">E</a>

                    <form action="{{route('series.destroy', $serie->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">X</button>
                    </form>
                </span>
            </li>
        @endforeach
    </ul>
    
</x-layout>