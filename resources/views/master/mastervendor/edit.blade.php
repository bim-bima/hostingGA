 @extends('layouts.main')
 @section('content')
<div class="card shadow mb-4" data-aos="fade-up" data-aos-delay="50">
  <div class="card-header py-3 px-sm-3 px-2">
    <h6 class="m-0 font-weight-bold text-primary" data-aos="fade-right" data-aos-delay="100">Edit Vendor</h6>
  </div>
  <div class="card-body px-sm-3 px-2">
    <form action="{{ route('master_vendor.update',$vendor->id) }}" method="POST" enctype="multipart/form-data" class="col-lg-6 px-0">
      @csrf
      @method('put')
      <div class="mb-sm-2 mb-3">
        <label for="mv_nama_vendor" class="form-label">Nama Vendor</label>
        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="mv_nama_vendor" value="{{ $vendor->mv_nama_vendor }}" required>
        @error('nama')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div>
        <label for="mv_lokasi" class="form-label">Lokasi Vendor</label>
        <input type="text" class="mb-1 form-control @error('lokasi') is-invalid @enderror" name="mv_lokasi" value="{{ $vendor->mv_lokasi }}" required>
        @error('lokasi')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <button class="btn btn-info mt-3 mb-1 mr-1">
        <i class="fa fa-angle-left"></i>
        <a href="{{ route('master_vendor.index') }}" class="text-white text-decoration-none">Kembali</a>
      </button>
      <button type="submit" class="btn btn-success mt-3 mb-1">
        <i class="fa fa-edit"></i>
        Edit
      </button>
    </form>
  </div>
</div>
@endsection

