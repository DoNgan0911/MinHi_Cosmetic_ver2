@extends('admin.layouts.master')
@section('content')
    <section class="section">
      <div class="section-header">
        <h1>Đánh giá sản phẩm</h1>
        {{-- <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
          <div class="breadcrumb-item"><a href="#">Components</a></div>
          <div class="breadcrumb-item">Table</div>
        </div> --}}
      </div>

      <div class="section-body">
        <div class="row">
          <div class="col-12 ">
            <div class="card">
              <div class="card-header">
                <h4>Tất cả đánh giá</h4>
              </div>
              <div class="card-body">
                {{-- sử dụng DataTables để render bảng dữ liệu --}}
                {{$dataTable->table()}}
              </div>
              
            </div>
          </div>
        </div>
    
      </div>
    </section>

@endsection
{{-- đẩy" nội dung vào một "stack" có tên là 'scripts' bên trang master --}}
@push('scripts')
{{ $dataTable->scripts(attributes: ['type' => 'module']) }}
<script>
    $(document).ready(function(){
        $('body').on('click', '.change-status', function(){
            let isChecked = $(this).is(':checked');
            
            let id = $(this).data('id');
            console.log(id);
            $.ajax({
                url: "{{ route('admin.review.change-status') }}",
                method: 'PUT',
                data: {
                    status: isChecked,
                    id: id
                },
                success: function(data){
                  
                    toastr.success(data.message);
                },
                error: function(xhr, status, error){
                    console.log(error);
                }
            })
        })
    })
</script>
@endpush
