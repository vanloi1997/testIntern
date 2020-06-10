<form role="form" action="" method="POST" style="width: 100%" enctype="multipart/form-data">
    @csrf
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Slug</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Blog Category<b class="col-red">(*)</b></label>
                <div class="col-sm-12 col-md-7">
                    <select class="form-control selectric">
                        <option value="">Chọn Danh Mục</option>
                        @foreach($category as $categories)
                            <option value="{{ $categories->id }}">
                                {{ $categories->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                </div>
                <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content Short</label>
                <div class="col-sm-12 col-md-7">
                    <textarea class="form-control" ></textarea>
                </div>
                </div>
                <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content</label>
                <div class="col-sm-12 col-md-7">
                    <textarea class="form-control ckeditor" name="content"></textarea>
                </div>
                </div>
                <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">File</label>
                <div class="col-sm-12 col-md-7">
                    <input type="file" class="form-control">
                </div>
                </div>
                <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Thumb Category</label>
                <div class="col-sm-12 col-md-7">
                    <textarea class="form-control"></textarea>
                </div>
                </div>
                <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Meta title for SEO</label>
                <div class="col-sm-12 col-md-7">
                    <textarea class="form-control"></textarea>
                </div>
                </div>
                <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Meta description for SEO</label>
                <div class="col-sm-12 col-md-7">
                    <textarea class="form-control"></textarea>
                </div>
                </div>
                <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Meta keyword for SEO</label>
                <div class="col-sm-12 col-md-7">
                    <textarea class="form-control"></textarea>
                </div>
                </div>
                <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Time Read</label>
                <div class="col-sm-12 col-md-7">
                    <input type="text" class="form-control">
                </div>
                </div>
                
                <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                <div class="col-sm-12 col-md-7">
                    <button type="submit" class="btn btn-success">{{ isset($post) ? "Cập Nhật" : "Thêm Mới"}}</button>
                </div>
                </div>
            </div>
        </div>
    </div>
</form>