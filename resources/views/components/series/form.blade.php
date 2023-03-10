<form action="{{ $action }}" method="POST">
    @csrf
    @if($update)
        @method('PUT')
    @endisset
    <div class="mb-3">
        <label for="nome" class="form-label">Nome:</label>
        <input  type="text"
                id="nome"
                name="nome"
                class="form-control"
                @isset($nome) value="{{ $nome }}" @endisset>
    </div>
    @if(isset($nome))
        <button type="submit" class="btn btn-primary">Alterar</button>
    @else
        <button type="submit" class="btn btn-primary">Adicionar</button>
    @endif
</form>