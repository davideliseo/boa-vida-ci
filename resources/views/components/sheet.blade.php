<div>
    @foreach ($headers as $key => $value)
        <div class="row row justify-content-center">
            <div class="col-md-6 text-md-right pb-4">
                <strong>{{ $value['displayName'] }}:</strong>
            </div>

            <div class="col-md-6 pb-4">
                {{ $item[$key] }}
            </div>
        </div>
    @endforeach
    <div class="row justify-content-center">
            <div class="col-md-6 text-md-right pr-2 pt-2">
                <a class="btn btn-warning" href="{{ route($table.'.edit', $item) }}">
                    Editar
                </a>
            </div>

            <div class="col-md-6 pt-2">
                <form method="POST" action="{{ route($table.'.destroy', $item) }}">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger"
                        onclick="return confirm('¿Está seguro/a que desea eliminar este ítem?')">
                        Eliminar
                    </button>
                </form>
            </div>
    </div>
</div>
