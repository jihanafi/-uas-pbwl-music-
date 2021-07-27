@extends('layouts.app')

@section('content')

 <div class="container">

 <h3>Tambah Data Artist</h3>
 <form action="{{ url('/artist') }}" method="POST">
 @csrf
 <div class="form-group">
            <label for="">Album ID</label>
            <input type="text" name="album_id" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Nama Album</label>
            <input type="text" name="album_nama" class="form-control">
        </div>
        <div class="form-group">
            <input type="submit" value="SIMPAN" class="btn btn-primary">
        </div>       
    </form>  
</div>  

 @endsection