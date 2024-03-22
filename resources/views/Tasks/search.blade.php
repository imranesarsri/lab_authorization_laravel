@foreach ($Tasks as $Task)
    <div>
        <tr>
            <td>{{ $Task->name }}</td>
            <td>{{ $Task->project->name }}</td>
            <td>{{ Str::limit($Task->description, 60) }}</td>
            <td class="d-flex">
                <a href="{{ route('tasks.show', $Task->id) }}" class="btn btn-sm btn-default">
                    <i class="fa-solid fa-eye"></i>
                </a>
                @can('update', $Task)
                    <a href="{{ route('tasks.edit', $Task->id) }}" class="btn btn-sm btn-default mx-2">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                @endcan
                @can('delete', $Task)
                    <form action="{{ route('tasks.destroy', $Task->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-sm btn-danger">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </form>
                @endcan
            </td>
        </tr>
    </div>
@endforeach
