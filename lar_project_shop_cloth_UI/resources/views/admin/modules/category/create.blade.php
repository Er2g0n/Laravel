@extends('admin.master')

@section('module', 'Category')
@section('action', 'Create')


@section('content')
    <form method="post" action="{{ route('admin.category.store') }}">
        @csrf

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Category Create</h3>

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
                <div class="form-group">
                    <label>Category Parent</label>
                    <select class="form-control" name="parent_id">
                        <option value="0">-------- Root ----------</option>
                        @php
                            recursiveCategory ($categories, old('parent_id', 0));
                        @endphp
                    </select>
                </div>
                <div class="form-group">
                    <label>Category Name</label>
                    <input type="text" class="form-control" placeholder="Enter Category Name" name="name"
                        value="{{ old('name') }}">{{-- sử dụng phương thức old để giữ giá trị cũ --}}
                </div>

                <div class="form-group">
                    <label>Status</label>
                    <select class="form-control" name="status">
                        <option value="1" {{ old('status') == 1 ? 'selected' : '' }}>Show</option>
                        <option value="2" {{ old('status') == 2 ? 'selected' : '' }}>Hidden</option>
                        {{-- nếu chọn slected là 1 rồi thì chọn cái mình selected(1), còn ngược lại là chuỗi rỗng  --}}
                    </select>
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </div>

        <!-- /.card -->
    </form>


@endsection
