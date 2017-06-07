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
        <th color='black'> Name </th>
        <th color='black'> Description </th>
    </tr>
	@foreach($categories as $category)
	    <tr>
	        <td color='black' align='center'>{{$category->name}}</td>
	        <td color='black' align='center'>{{$category->description}}</td>
	        <td><a class="btn" href="{{ route('categories.show', ['id' => $category->id]) }}">Show this Category</a></td>
		    <td><a class="btn" href="{{ route('categories.edit', ['id' => $category->id]) }}">Edit this Category</a></td>
	    	<td>{{ Form::open(array('url' => 'categories/' . $category->id, 'method' => 'delete')) }}
	        	{{ Form::submit('Delete this Category', array('class' => 'btn btn-warning')) }}
	    		{{ Form::close() }}	
	    		</td>
	    </tr>
	@endforeach
    </table>
    

    <div class = 'pagination' align = 'center'>{{ $categories->links() }}</div>
    <br>
	<a href="{{ route('categories.create') }}" class="btn">Add new Category</a>
    <a href = "{{ route('category.showtrash') }}" class="btn">Trash</a>
@stop

<hr>