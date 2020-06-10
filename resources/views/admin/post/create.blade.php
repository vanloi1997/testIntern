@extends('layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Thêm Mới Bài Viết</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{route('admin.post.index')}}">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{route('admin.post.index')}}">Tất Cả Bài Viết</a></div>
                <div class="breadcrumb-item">Thêm Mới Bài Viết</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
               @include('admin.post.form')
            </div>
        </div>
    </section>
@stop