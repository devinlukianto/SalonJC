<h2>Comment and Testimonials</h2>

<table width="100%" border="1">
    <tr>
        <th><p> Comment </p></th>
        <th><p> Action </p></th>
    </tr>

    @foreach($comment as $key => $value)
        <tr>
            <td><p>{{ $value->content }}</p></td>
            <td>
                <a class="btn btn-success" href="{{ URL::to('comment/' . $value->id . '/edit') }}">Edit</a>
                {{ Form::open(array('url' => 'comment/' . $value->id)) }}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
                {{ Form::close() }}
            </td>
        </tr>
    @endforeach
</table>