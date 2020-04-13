@extends("layout/admin") 
@section('content')
<div class="page-header">
   <div class="page-header-content">
       <div >
           <h4 class="">
               <i class="icon-home position-left"></i>
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
               <a href="">Input Menu</a>
               </li>
               <li class="active"></li>
           </ul>
       </div>
   </div>
   <!-- /header content -->
</div>
<div class="container-fluid">
<h3 class="page-title">Input Menu</h3>
    <div id="toastr-demo" class="panel">
    <form action="{{(isset($menu))?route('menu.update',$menu->id_menu):route('menu.store')}}" method="POST">
        @csrf
        @if(isset($menu))?@method('PUT')@endif

        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">

                    <!-- Horizontal form -->
                        <div class="card-body">
                            <form action="#">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label" required="required">Nama menu</label>
                                    <div class="col-lg-12">
                                    <input type="text"  value="{{(isset($menu))?$menu->nama:old('nama')}}" name="nama" class="form-control">
                                    @error('nama')<small style="color:red">{{$message}}</small>@enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label" required="required">Stok</label>
                                    <div class="col-lg-12">
                                    <input type="text"  value="{{(isset($stok))?$menu->stok:old('stok')}}" name="stok" class="form-control">
                                    @error('stok')<small style="color:red">{{$message}}</small>@enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label" required="required">Status</label>
                                    <div class="col-lg-9">
                                        <select name="status" class="form-control">
                                            <option value="ada">Ada</option>
                                            <option value="habis">Habis</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label " required="required">Harga</label>
                                    <div class="col-lg-12">
                                        <input type="text" alue="{{(isset($menu))?$menu->harga:old('harga')}}"  name="harga" class="form-control">
                                        @error('harga')<small style="color:red">{{$message}}</small>@enderror
                                    </div>
                                </div>

                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">SIMPAN <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /horizotal form -->
                </div>
            </div>
    </form>
                </div>
            </div> 
        </div>
    </div>
@endsection