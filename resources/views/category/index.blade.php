@extends('layout.master')

@section('title', 'List Category')

@section('navbar')
@endsection

@section('content')
<!--PAGE TITLE-->
    <div class="row">
        <div class="span12">
            <div class="page-header">
                <h1>List Category</h1>
            </div>
        </div>
    </div>

<!--READ-->
    <table width="100%" border="1" id="dataTables" style="font-size:80%;">
    <!--Header Table-->
    <tr>
        <th color='black'> Nama </th>
        <th color='black'> Deskripsi </th>
    </tr>
	@foreach($categories as $category)
	    <tr>
	        <td color='black' align='center'>{{$category->name}}</td>
	        <td color='black' align='center'>{{$category->description}}</td>
	        <td><a class="btn" href="{{ URL::to('categories/' . $category->id) }}">Show this Category</a></td>
		    <td><a class="btn" href="{{ URL::to('categories/' . $category->id . '/edit') }}">Edit this Category</a></td>
	    	<td>{{ Form::open(array('url' => 'categories/' . $category->id)) }}
	        	{{ Form::hidden('_method', 'DELETE') }}
	        	{{ Form::submit('Delete this Category', array('class' => 'btn btn-warning')) }}
	    		{{ Form::close() }}	
	    		</td>
	    </tr>
	@endforeach

    </table>

<!--CREATE-->
    <br>
	<a href="{{ URL::to('categories/create') }}" class="btn">Add new Category</a>
@stop

<hr>