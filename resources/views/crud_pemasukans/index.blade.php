@extends('layouts.app')

@section('content')
<div class="container">
	<div class="container">
	       @if ($errors->any())
	      <div class="alert alert-danger">
	          <ul>
	              @foreach ($errors->all() as $error)
	                  <li>{{ $error }}</li>
	              @endforeach
	          </ul>
	      </div><br />
	      @endif
	      @if (\Session::has('success'))
	      <div class="alert alert-success">
	          <p>{{ \Session::get('success') }}</p>
	      </div><br />
	      @endif
	    <div class="title m-b-md">
	                <h1>Table Barang</h1>
	                <table class="table" align="center">
	                    <thead>
	                        <tr>
	                            <th scope="col">#ID</th>
	                            <th scope="col">Jenis Barang</th>
	                            <th scope="col">Nama Barang</th>
	                            <th scope="col">Kode Barang</th>
	                            <th scope="col">Merk Barang</th>
	                            <th scope="col">Jumlah Barang</th>
	                            <th scope="col" colspan="2">Aksi</th>
	                        </tr>
	                    </thead>
	                    <tbody>
	                    @foreach($crud_pemasukan as $value)
	                        <tr>
	                            <th scope="row">{{ $value['id'] }}</th>
	                            <td>{{ $value['jenis_barang'] }}</td>
	                            <td>{{ $value['nama_barang'] }}</td>
	                            <td>{{ $value['kode_barang'] }}</td>
	                            <td>{{ $value['merk_barang'] }}</td>
	                            <td>{{ $value['jml_barang'] }}</td>
	                            <td>
	                            	<a href="{{ action('crudController@edit', $value['id']) }}" class="btn btn-warning">Edit</a>
	                            </td>
	                            <td>
	                            	<form action="{{ action('crudController@destroy', $value['id']) }}" method="post">
										{{csrf_field()}}
										<Input name="_method" type="hidden" value="DELETE">
										<button class="btn btn-danger" type="submit">Delete</button>	                            		
	                            	</form>
	                            </td>
	                        </tr>
	                    @endforeach
	                        
	                    </tbody>
	                </table>
	                <div class="row">
                            <div class="col-sm">
                                <div class="form-group col-sm">
                                    <a href="/create" class="btn btn-success">Input Barang</a><br  />
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-group col-sm">
                                   <a href="/" class="btn btn-success">Kembali</a><br  />
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-group col-sm">
                                   
                                </div>
                            </div>
                        </div>
	                
	                
	            </div>
</div>
@endsection