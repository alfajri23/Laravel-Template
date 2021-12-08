@extends('index')
@section('content')
	<div class="container">
		<form action="{{route('barangStore')}}" method="POST">
	        	@csrf
	        	<input type="hidden" name="id" value="{{$data['id']}}" >
			  <div class="mb-3">
			    <label for="exampleInputEmail1" class="form-label">Nama</label>
			    <input type="text" name="nama" value="{{$data['nama']}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
			    
			  </div>
			  <div class="mb-3">
			    <label for="exampleInputPassword1" class="form-label">Keterangan</label>
			    <input type="text" name="keterangan" value="{{$data['keterangan']}}" class="form-control" id="exampleInputPassword1">
			  </div>
			  
			  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>

@endsection