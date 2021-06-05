<div class="table-responsive">
    <table class="table" id="todos-table">
        <thead>
            <tr>
                <th style="cursor: pointer;">
                    Title
                    <i class="fas fa-arrow-up"></i>
                    <i class="fas fa-arrow-down"></i>
                </th>
                <th style="cursor: pointer;">
                    Status
                    <i class="fas fa-arrow-up"></i>
                    <i class="fas fa-arrow-down"></i>
                </th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($todos as $todo)
            <tr>
                <td>{{ $todo->title }}</td>
                <td>{{ $todo->status_name }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['todos.destroy', $todo->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('todos.show', [$todo->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('todos.edit', [$todo->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
