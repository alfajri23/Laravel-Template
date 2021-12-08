@extends('index')
@section('content')
	<div class="container">
		<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Tambah
</button>
		<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Nama</th>
		      <th scope="col">Keterangan</th>
		      <th scope="col">Aksi</th>
		    </tr>
		  </thead>
		  <tbody>
		  	@foreach($data as $dt)
		    <tr>
		      <th scope="row">1</th>
		      
		      <td>{{$dt['nama']}}</td>
		      <td>{{$dt['keterangan']}}</td>
		      <td>
		      	<a href="{{route('barangEdit',$dt['id'])}}" class="btn btn-primary btn-sm">Edit</a>
<a href="{{route('barangDelete',$dt['id'])}}" class="btn btn-secondary btn-sm">Hapus</a>
		      </td>
		    </tr>
		    @endforeach
		  </tbody>
		</table>
	</div>

	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title">Modal title</h5>
	        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	      </div>
	      <div class="modal-body">
	        <form action="{{route('barangStore')}}" method="POST">
	        	@csrf
			  <div class="mb-3">
			    <label for="exampleInputEmail1" class="form-label">Nama</label>
			    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
			    
			  </div>
			  <div class="mb-3">
			    <label for="exampleInputPassword1" class="form-label">Keterangan</label>
			    <input type="text" name="keterangan" class="form-control" id="exampleInputPassword1">
			  </div>
			  
			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>
	      </div>
	    </div>
	  </div>
	</div>

	

@endsection