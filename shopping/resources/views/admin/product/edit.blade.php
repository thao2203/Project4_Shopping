<!-- resources/views/child.blade.php -->
<!--Gọi đến view này load toàn bộ file layouts.admin -> load hết header footer siderbar và đưa content vào -->
@extends('layouts.admin')

@section('title')
<title>Sửa sản phẩm</title>
@endsection

@section('css')
<link href="{{ asset('vendors/select2/select2.min.css') }}" rel="stylesheet" />
<link href="{{ asset('admins/product/add/add.css') }}" rel="stylesheet" />

@endsection

@section('content')

<div class="content-wrapper">

    @include('partials.content-header', ['name' => 'sản phẩm', 'key' => 'Sửa'])

    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Sửa sản phẩm</h3>
                </div>
                <div class="card-body">
                    <form role="form" action="{{ route('product.update', ['id' => $product->id])  }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Tên sản phẩm</label>
                            <input type="text" class="form-control" value="{{ $product -> name }}" name='name' placeholder="Nhập tên sản phẩm">
                        </div>
                        <div class="form-group">
                            <label>Giá sản phẩm</label>
                            <input type="text" class="form-control" value="{{ $product->price }}" name='price' placeholder="Nhập giá sản phẩm">
                        </div>
                        <div class="form-group">
                            <label>Ảnh đại diện</label>
                            <p><img src="{{url('/images/'.$product->feature_image_path)}}" style="width:100px;height:150px" alt=""></p>
                            <input type="file" value="{{ $product->feature_image_path }}"  class="form-control-file" name='feature_image_path'>
                        </div>
                        <div class="form-group">
                            <label>Chọn loại sản phẩm</label>
                            <select class="form-control" name="category_id">
                                <option value="0">Chọn loại sản phẩm gốc</option>
                                {!! $htmlOption !!}
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Chọn nhà cung cấp</label>
                            <select class="form-control" name="supplier_id">
                            <option value="0">Chọn nhà cung cấp</option>
                                {!! $htmlSupplier !!}
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Nhập nội dung</label>
              <textarea class="textarea" name="content" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $product -> content }}</textarea>
          
                            <!-- <textarea name="content" class="form-control tinymce_editor_init" ></textarea> -->
                        </div>
                        <div class="form-group">
                            <label>Nhập số lượng</label>
                            <input type="text" class="form-control" name='quantity' value="{{ $product -> quantity }}" placeholder="Nhập số lượng sản phẩm"></input>
                        </div>
                        <button type="submit" class="btn btn-primary">Hoàn thành</button>
                    </form>
                    @if (session('status'))
                    <p class="text-warning" style="margin:0px;padding:0px">
                        {{ session('status') }}
                    </p>
                    @endif
                </div>

            </div>
        </div>
    </div>

</div>
@endsection

@section('js')
<script src="{{ asset('vendors/select2/select2.min.js') }}"></script>
<script src="{{ asset('admins/product/add/add.js') }}"></script>
@endsection