@extends('admin.master')

@section('module', 'Product')
@section('action', 'List')

@push('css')
    <link rel="stylesheet" href="{{ asset('administrator/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('administrator/plugins/datatables-responsive/css/responsive.bootstrap4.min.css ') }}">
    <link rel="stylesheet" href="{{ asset('administrator/plugins/datatables-buttons/css/buttons.bootstrap4.min.css ') }}">
@endpush

@push('js')
    <script src="{{ asset('administrator/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('administrator/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('administrator/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('administrator/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('administrator/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('administrator/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('administrator/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('administrator/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('administrator/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('administrator/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('administrator/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('administrator/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
@endpush

@push('handlejs')
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });

        /* tạo chức năng báo có muốn delete hay không, và tạo chữ có muốn delete, sau đó xuống phần nút delete tạo onclic*/
        function confirmDelete(module) {
            return confirm(`Are you sure you want to delete this ${module}?`)
        }
    </script>
@endpush
@section('content')
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Product list</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>

        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Category</th>
                        <th>Status</th>
                        <th>Featured</th>
                        <th>Create At</th>
                        {{-- <th>Images</th> --}}
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $loop->iteration }}</td> {{-- sử dụng loop, ko nên làm theo cách $category->id, bởi khi xóa nó sẽ ko theo thứ tự --}}
                            <td>{{ $product->name }}</td>
                            <td>{{ number_format($product->price, 0, '', '.') }} VND</td>
                            <td>{{ $product->category->name }}</td>
                            <td>
                                <span
                                    class="right badge badge-{{ $product->status == 1 ? 'success' : 'dark' }}">{{ $product->status == 1 ? 'Show' : 'Hidden' }}
                                </span>
                            </td>
                            <td>
                                <span
                                    class="right badge badge-{{ $product->status == 1 ? 'info' : 'danger' }}">{{ $product->status == 1 ? 'Unfeatured' : 'Featured' }}
                                </span>
                            </td>
                            {{-- Nếu là = 1 thì màu xanh success, nếu không thì là đen hidden --}}
                            <td>{{ date('d/m/y -H:m:i', strtotime($product->created_at)) }}</td> {{-- định dạng lại theo năm tháng ngày --}}
                            {{-- <td>{{ route('$product->image') }}</td> --}}
                            <td><a href="{{ route('admin.product.edit', ['id' => $product->id]) }}">Edit</a></td>
                            {{-- nhập theo route bên web --}}
                            <td><a onClick="return confirmDelete('product')"
                                    href="{{ route('admin.product.destroy', ['id' => $product->id]) }}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Category</th>
                        <th>Status</th>
                        <th>Featured</th>
                        <th>Create At</th>
                        {{-- <th>Images</th> --}}

                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <!-- /.card -->


@endsection
