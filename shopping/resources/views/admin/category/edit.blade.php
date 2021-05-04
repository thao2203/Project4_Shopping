<!-- resources/views/child.blade.php -->
<!--Gọi đến view này load toàn bộ file layouts.admin -> load hết header footer siderbar và đưa content vào -->
@extends('layouts.admin')

@section('title')
<title>Chỉnh sửa danh mục</title>
@endsection

@section('content')

<div class="content-wrapper">

  @include('partials.content-header', ['name' => 'danh mục', 'key' => 'Sửa'])

  <div class="content">
    <div class="container-fluid">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Cập nhật danh mục</h3>
        </div>
        <div class="card-body">
          <form role="form" action="{{ route('categories.update',['id' => $category->id]) }}" method="post">
            @csrf
            <div class="card-body" style="padding: 0px;">
              <div class="form-group">
                <label>Tên danh mục</label>
                <input type="text" name="name" class="form-control" placeholder="Nhập tên danh mục" value="{{ $category -> name }}">
              </div>
              <div class="form-group">
                <label>Danh mục gốc</label>
                <select class="form-control" name="parentId">
                  <option value="0">Chọn danh mục gốc</option>
                  {!! $htmlOption !!}
                </select>
              </div>
            </div>
            <div>
              <button type="submit" class="btn btn-primary">Cập nhật danh mục</button>
              <a href="{{ route('categories.index') }}" class="btn btn-default">Quay lại</a>
            </div>
          </form>
          @if (session('status'))
          <p class="text-warning" style="margin:0px;padding:0px">
            {{ session('status') }}
          </p>
          @endif
        </div>
        <!-- /.card-body -->
      </div>
    </div><!-- /.container-fluid -->
  </div>
</div>
@endsection