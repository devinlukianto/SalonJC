@extends('layout.master')

@section('title', 'Detail Brand')

@section('navbar')
@endsection

@section('content')
<!--PAGE TITLE-->
    <div class="row">
        <div class="span12">
            <div class="page-header">
                <h1>Detail Brand</h1>
            </div>
        </div>
    </div>

<!--DETAIL-->
    <!--Tinggal ambil data dari db-->
    @if($brand)
        <h2>{{$brand->name}}</h2>
        <p>Harga: {{$brand->company}}</p>
        <p>Stok saat ini:{{$brand->company_phone}}</p>
        <p>Stok saat ini:{{$brand->company_address}}</p>
        <hr>
        <p>{{$brand->description}}</p>
        <br><hr>
        <a class="btn" href="{{ URL::to('brands') }}">Back to brand index</a>
        <a class="btn" href="{{ URL::to('brands/' . $brand->id . '/edit') }}">Edit this Brand</a>
        {{ Form::open(array('url' => 'brands/' . $brand->id, 'class' => 'pull-right')) }}
            {{ Form::hidden('_method', 'DELETE') }}
            {{ Form::submit('Delete this Brand', array('class' => 'btn btn-warning')) }}
        {{ Form::close() }}
    @endif  
@stop