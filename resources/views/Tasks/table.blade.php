<div class="card-body table-responsive p-0">
    <table class="table table-striped text-nowrap table-tasks">
        <thead>
            <tr>
                <th>Tâche</th>
                <th>Projet</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>

            @if ($Tasks->isEmpty())
                <tr>
                    <td colspan="4" class="text-center">
                        <img style="width: 40%;" src="{{ asset('images/emptyResult.png') }}" alt="Empty Result">
                    </td>
                </tr>
            @else
                @include('Tasks.search')
            @endif
        </tbody>
        <input type="hidden" id='page' value="1">
    </table>


    <div class="row justify-content-between p-2">
        <div class="col-6 align-self-end">
            <button type="button" class="btn btn-default btn-sm">
                <i class="fa-solid fa-file-arrow-down"></i>
                IMPORTER
            </button>
            <a href="{{ route('Tasks.export') }}" class="btn btn-default btn-sm mt-0 mx-2">
                <i class="fa-solid fa-file-export"></i>
                EXPORTER
            </a>
        </div>
        <div class="col-6">
            <ul class="pagination  m-0 float-right">
                <div class="">
                    {{ $Tasks->links() }}
                </div>
            </ul>
        </div>
    </div>
</div>
