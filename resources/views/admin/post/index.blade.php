@extends('layouts.master')

@section('content')
  <section class="section">
          <div class="section-header">
            <h1>Quản Lý Bài Viết</h1>
            <div class="section-header-button">
              <a href="{{route('admin.post.create')}}" class="btn btn-success">Thêm Mới Bài Viết</a>
            </div>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="{{route('admin.post.index')}}">Dashboard</a></div>
              <div class="breadcrumb-item">Tất Cả Bài Viết</div>
            </div>
          </div>
          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Tất Cả Bài Viết</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <thead>
                          <tr>
                            <th>Id</th>
                            <th>Tiêu Đề</th>
                            <th>Danh Mục</th>
                            <th>Trạng Thái</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @if (isset($posts))
                              @foreach($posts as $post)
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->id }}</td>
                                <td>
                                  <div>
                                    <a href="#" class="btn btn-primary">Sửa</a>
                                    <a href="#" class="btn btn-danger">Xóa</a>
                                  </div>
                                </td>
                              @endforeach
                            @endif    
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
@stop