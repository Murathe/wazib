@extends('layouts.app')

@section('content')
    <h3 class="page-title">Questions</h3>

    <p>
        <a href="{{ route('questions.create') }}" class="btn btn-success">Add New</a>
    </p>

    <div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            List
        </div>

        <div class="panel-body">
            <table class="table table-bordered table-striped {{ count($questions) > 0 ? 'datatable' : '' }} dt-select">
                <thead>
                    <tr>
                        <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        <th>Topic</th>
                        <th>Questions</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($questions) > 0)
                        @foreach ($questions as $question)
                            <tr data-entry-id="{{ $question->id }}">
                                <td></td>
                                <td>{{ $question->topic->title or '' }}</td>
                                <td>{!! $question->question_text !!}</td>
                                <td>
                                    <a href="{{ route('questions.show',[$question->id]) }}" class="btn btn-xs btn-primary">@lang('View')</a>
                                    <a href="{{ route('questions.edit',[$question->id]) }}" class="btn btn-xs btn-info">@lang('Edit')</a>
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("Are_you_sure")."');",
                                        'route' => ['questions.destroy', $question->id])) !!}
                                    {!! Form::submit(trans('Delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="7">No Entries in Table</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
    </div>
@stop

@section('javascript')
    <script>
        window.route_mass_crud_entries_destroy = '{{ route('questions.mass_destroy') }}';
    </script>
@endsection