@extends('layout.master')

@section('title', 'List Trash Category')

@section('navbar')
@endsection

@section('content')
<!--PAGE TITLE-->
    <div class="row">
        <div class="span12">
            <div class="page-header">
                <h1>List Trash Category</h1>
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
            <td><a class="btn" href="{{ route('category.restore' , ['id'=>$category->id]) }}">Restore this Category</a></td>
            <td><a class="btn" href="{{ route('category.forcedelete' , ['id' => $category->id]) }}">Delete this Category</a></td>
	@endforeach

    </table>
    

    <div class = 'pagination' align = 'center'>{{ $categories->links() }}</div>

<!--CREATE-->
    <br>
	<a href="{{ route('categories.index') }}" class="btn">back to Category</a>
    <a href = "{{ route('category.restoreall') }}" class="btn">Restore All</a>
@stop

<hr>