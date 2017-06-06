<h2>Comment and Testimonials</h2>

@if (Auth::check())

<table width="50%" border="1">
    <tr>
        <th width="75%">Comment</th>
        <th width="25%">Action</th>
    </tr>

    @foreach($comment as $key => $value)
        <tr>
            <td>{{ $value->content }}</td>
            <td align="center">
                <br>
                {{ Form::open(array('url' => 'comment/' . $value->id)) }}
                <a class="btn btn-success" href="{{ URL::to('comment/' . $value->id . '/edit') }}">Edit</a>
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
                {{ Form::close() }}
            </td>
        </tr>
    @endforeach
</table>

@else

<table width="40%" border="1">
    <tr>
        <th>Comment</th>
    </tr>

    @foreach($comment as $key => $value)
        <tr>
            <td>{{ $value->content }}</td>
        </tr>
    @endforeach
</table>

@endif