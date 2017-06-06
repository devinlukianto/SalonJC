@extends('layout.master')

@section('title', 'List brand')

@section('navbar')
@endsection

@section('content')
<!--PAGE TITLE-->
    <div class="row">
        <div class="span12">
            <div class="page-header">
                <h1>List Brand</h1>
            </div>
        </div>
    </div>

<!--READ-->
    <table width="100%" border="1" id="dataTables" style="font-size:80%;">
    <!--Header Table-->
    <tr>
        <th color='black'> Nama </th>
        <th color='black'> Deskripsi </th>
        <th color='black'> Perusahaan </th>
        <th color='black'> No Telp </th>
        <th color='black'> Alamat </th>
        <th color='black' colspan="3"> Action </th>
    </tr>
	@foreach($brands as $brand)
	    <tr>
	        <td color='black' align='center'>{{$brand->name}}</td>
	        <td color='black' align='center'>{{$brand->description}}</td>
	        <td color='black' align='center'>{{$brand->company}}</td>
            <td color='black' align='center'>{{$brand->company_phone}}</td>
	        <td color='black' align='center'>{{$brand->company_address}}</td>
	        <td><a class="btn" href="{{ URL::to('brands/' . $brand->id) }}">Show this Brand</a></td>
		    <td><a class="btn" href="{{ URL::to('brands/' . $brand->id . '/edit') }}">Edit this Brand</a></td>
	    	<td>{{ Form::open(array('url' => 'brands/' . $brand->id)) }}
	        	{{ Form::hidden('_method', 'DELETE') }}
	        	{{ Form::submit('Delete this Brand', array('class' => 'btn btn-warning')) }}
	    		{{ Form::close() }}	
	    		</td>
	    </tr>
	@endforeach

    </table>

<!--CREATE-->
    <br>
	<a href="{{ URL::to('brands/create') }}" class="btn">Add new Brand</a>
@stop

<hr>
	