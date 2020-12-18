<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                @foreach ($encabezados as $key => $value)
                    <th scope="col" class="{{ $value['class'] ?? 'text-center' }}">
                        {{ $value['displayName'] }}
                    </th>
                @endforeach
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($coleccion as $item)
                <tr>
                    @foreach ($encabezados as $key => $value)
                        <td scope="col" class="{{ $value['class'] ?? 'text-center' }}">
                            @if ($loop->first)
                                <a href="{{ route($tabla . '.show', $item) }}">{{ $item[$key] }}</a>
                            @else
                                {{ $item[$key] }}
                            @endif
                        </td>
                    @endforeach

                    <td>
                        <div class="d-flex align-items-center">
                            <div class="pr-2">
                                <a class="btn-v2 btn-deg-orange shadow-sm" href="{{ route($tabla . '.edit', $item) }}">
                                    Editar
                                </a>
                            </div>

                            <form method="POST" action="{{ route($tabla . '.destroy', $item) }}">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn-v2 btn-deg-red shadow-sm"
                                        onclick="return confirm('¿Está seguro/a que desea eliminar este ítem?')">
                                    Eliminar
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>