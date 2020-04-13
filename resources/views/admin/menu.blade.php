 @extends("layout/admin") 
 @section('content')
 <div class="page-header">
    <div class="page-header-content">
        <div >
            <h4 class="">
               
                <span class="text-semibold">Daftar Menu</span></h4>
            <a class="heading-elements-toggle">
                <i class="icon-more"></i>
            </a>
        </div>
        <div class="heading-elements">
            <ul class="breadcrumb position-right">
                <li>
                <a href="{{route('menu.index')}}">Home</a>
                </li>
                <li>
                <a href="">Daftar Menu</a>
                </li>
                <li class="active"></li>
            </ul>
        </div>
    </div>
    <!-- /header content -->
</div>
 <div class="container-fluid">
					<h3 class="page-title">Menu Restoran</h3>
					<div id="toastr-demo" class="panel">
					<div class="panel-body">
 							<div class="col-lg-12">


						<dl class="row">
							<dt class="col-sm-3">Nama</dt>
							<dd class="col-sm-3">Gede Edo Quardiana</dd>
						</dl>
						<dl class="row">
							<dt class="col-sm-3">NIM</dt>
							<dd class="col-sm-3">1815051108</dd>
						</dl>
						<dl class="row">
							<dt class="col-sm-3">Prodi</dt>
							<dd class="col-sm-3">Pendidikan teknik Informatika</dd>
						</dl>
						</div>

						<div id="toastr-demo" class="panel">
						<div class="panel-body">
					<br>
							<h4>Studi Kasus</h4>
					
							<dl class="row">
								<dt class="col-sm-3"><b><h4>Judul</h4></b></dt>
								<dd class="col-sm-9"><h5>Sistem memejemen Restoran</h5></dd>
							</dl>
							<dl class="row">
								<dt class="col-sm-3"><b><h4>Penjelasan</h4></b></dt>
								<dd class="col-sm-5">Sistem ini membantu memejemen menu dan pemesanan</dd>
							</dl>
							</div>
					
					</div>	
					<div class="col-lg-12">
					<a href="{{route('menu.create')}}" class="btn btn-primary">Input Barang</a>
					<br>
					<br>
 						<table class="table table-bordered">
 							<thead class="thead-dark">
 								<tr><th>No</th>
								 <th>Nama</th>
								 <th>Stok</th>
								 <th>Harga</th>
								 <th>Status</th>
								 <th>Aksi</th>								
								</tr>
								 
							 </thead>
							 <tbody>
 								@foreach($menu as $in=>$val)
							 <tr><td>{{($in+1)}}</td>
									 <td>{{$val->nama}}</td>
									 <td>{{$val->stok}}</td>
									 <td>{{$val->harga}}</td>
								 <td>{{$val->status}}</td>
							 <td><a href="{{route('menu.edit',$val->id_menu)}}" >Update</a>
							 <form action="{{route('menu.destroy',$val->id_menu)}}" method="POST">
								@csrf
								@method('DELETE')			
								<button type="submit" >Hapus</button>
							</form>
							</td>
									 </tr>
								 @endforeach
							 </tbody>
						 </table>
						 {{$menu->links()}}
					
					</div> 
					</div>
</div>
@endsection