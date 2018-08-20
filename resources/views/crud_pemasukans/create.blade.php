@extends('layouts.app')

@section('content')
<div class="container">
    <div class="container">
          <h2>Input Barang</h2><br  />
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
          <form method="post" action="{{url('crud_pemasukans')}}">
          {{csrf_field()}}
            <div class="row">
                            <div class="col-sm">
                                <div class="form-group col-sm">
                                    <label for="jenis_barang">Jenis Barang:</label>
                                    <select class="form-control" name="jenis_barang">
                                        <option value=""></option>
                                        <option value="Makanan">Makanan</option>
                                        <option value="Minuman">Minuman</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-group col-sm">
                                    <label for="nama_barang">Nama Barang:</label>
                                    <input type="text" class="form-control" name="nama_barang">
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-group col-sm">
                                </div>
                            </div>
                        </div>
            <div class="row">
                            <div class="col-sm">
                                <div class="form-group col-sm">
                                    <label for="kode_barang">Kode Barang:</label>
                                    <input type="text" class="form-control" name="kode_barang">
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-group col-sm">
                                    <label for="merk_barang">Merk Barang:</label>
                                    <input type="text" class="form-control" name="merk_barang">
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-group col-sm">
                                    <label for="jml">Jumlah Barang:</label>
                                    <input type="number" class="form-control" name="jml_barang">
                                </div>
                            </div>
                        </div>
            <div class="row">
                <div class="col-sm">
                    <div class="form-group col-sm">
                        <button type="submit" class="btn btn-success" style="margin-left:38px">Simpan</button>
                        <a href="/crud_pemasukans" class="btn btn-success">Kembali</a>
                    </div>
                </div>
            </div>
          </form>
        </div>
</div>

@endsection