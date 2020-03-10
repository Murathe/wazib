@extends('layouts.app')

@section('content')
    <h3 class="page-title">List of Topics</h3>

    <p>
        <a href="{{ route('topics.create') }}" class="btn btn-success">Add New</a>
    </p>

    <div class="panel panel-default">
        <div class="panel-heading">
            Topics List
        </div>

        <div class="panel-body">
            <table class="table table-bordered table-striped {{ count($topics) > 0 ? 'datatable' : '' }} dt-select">
                <thead>
                    <tr>
                        <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        <th>Topic Title</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($topics) > 0)
                        @foreach ($topics as $topic)
                            <tr data-entry-id="{{ $topic->id }}">
                                <td></td>
                                <td>{{ $topic->title }}</td>
                                <td>
                                    <a href="{{ route('topics.show',[$topic->id]) }}" class="btn btn-xs btn-primary">View</a>
                                    <a href="{{ route('topics.edit',[$topic->id]) }}" class="btn btn-xs btn-info">Edit</a>
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("Are_you_sure")."');",
                                        'route' => ['topics.destroy', $topic->id])) !!}
                                    {!! Form::submit(trans('delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="3">No Entries in the Table</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript')
    <script>
        window.route_mass_crud_entries_destroy = '{{ route('topics.mass_destroy') }}';
    </script>
@endsection