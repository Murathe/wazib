@extends('layouts.app')

@section('content')
    <h3 class="page-title">Questions</h3>
    
    <div class="panel panel-default">
        <div class="panel-heading">
            View
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr><th>Topic</th>
                    <td>{{ $question->topic->title or '' }}</td></tr><tr><th>Text</th>
                    <td>{!! $question->question_text !!}</td></tr><tr><th>Code Snippet</th>
                    <td>{!! $question->code_snippet !!}</td></tr><tr><th>Answer Explanation</th>
                    <td>{!! $question->answer_explanation !!}</td></tr><tr><th>More Info Link</th>
                    <td>{{ $question->more_info_link }}</td></tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('questions.index') }}" class="btn btn-default">Back to List</a>
        </div>
    </div>
@stop