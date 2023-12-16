@extends('admin.master')

@section('module', 'Category')
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
                        <th>Name Category</th>
                        <th>Parent</th>
                        <th>Status</th>
                        <th>Created At</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $loop->iteration }}</td> {{-- sử dụng loop, ko nên làm theo cách $category->id, bởi khi xóa nó sẽ ko theo thứ tự --}}
                            <td>{{ $category->name }}</td>
                            {{-- Cách dễ --}}
                            {{-- <td>
                        @if ($category->status == 1)
                            <span class="right badge badge-success">Show</span>
                        @else
                        <span class="right badge badge-dark">Hidden</span>

                        @endif
                    </td> --}}
                            {{-- Cách pro --}}
                            <td>
                                @php
                                // Nếu danh mục bằng không thì mình mới truy vấn dữ liệu
                                    if($category->parent_id != 0){
                                        $parent_category = DB::table('categories')->select('name', 'parent_id')->where('id', $category->parent_id)->first();
                                        echo $parent_category->name;

                                    }
                                @endphp
                            </td>
                            <td><span
                                    class="right badge badge-{{ $category->status == 1 ? 'success' : 'dark' }}">{{ $category->status == 1 ? 'Show' : 'Hidden' }}</span>
                            </td>
                            {{-- Nếu là = 1 thì màu xanh success, nếu không thì là đen hidden --}}
                            <td>{{ date('d/m/y -H:m:i', strtotime($category->created_at)) }}</td> {{-- định dạng lại theo năm tháng ngày --}}
                            <td><a href="{{ route('admin.category.edit', ['id' => $category->id]) }}">Edit</a></td>
                            {{-- nhập theo route bên web --}}
                            <td><a onClick="return confirmDelete('category')"
                                    href="{{ route('admin.category.destroy', ['id' => $category->id]) }}">Delete</a></td>
                        </tr>
                    @endforeach

                </tbody>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Category Nam</th>
                        <th>Parent</th>
                        <th>Status</th>
                        <th>Created At</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <!-- /.card -->


@endsection
