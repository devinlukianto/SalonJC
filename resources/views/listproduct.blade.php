@extends('layout.master')

@section('title', 'List Product')

@section('navbar')
@endsection

@section('content')
<!--PAGE TITLE-->
    <div class="row">
        <div class="span12">
            <div class="page-header">
                <h1>List Product</h1>
            </div>
        </div>
    </div>

<!--READ-->
    <table width="100%" border="1" id="dataTables" style="font-size:80%;">
    <!--Header Table-->
    <tr>
        <th color='black'> ID </th>
        <th color='black'> Nama </th>
        <th color='black'> Harga </th>
        <th color='black'> Stok </th>
    </tr>
    <tr>
        <td color='black' align='center'> Roti </td>
        <td color='black' align='center'> 2000 </td>
        <td color='black' align='center'> deskripsi </td>
    </tr>
    </table>

<!--CREATE-->
    <br>
    <a href="{{route('addproduct')}}"><button> ADD PRODUCT </button></a>

@stop
