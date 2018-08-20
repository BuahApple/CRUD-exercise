@extends('layouts.app')

@section('content')

<div class="container">
	<div class="container">
	create.blade.php
	<h2>Input Barang</h2>
	<form action="{{url('crud_pemasukans')}}" method="post">
	@include('crud_pemasukans/create');
	</form>
	<h2>Tabel Barang</h2>
	<form action="" method="post">
	@include('crud_pemasukans/create');
	</form>
	</div>
</div>



@endsection