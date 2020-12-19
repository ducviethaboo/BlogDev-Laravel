@extends('user.core.master')
@section('content')
<div class="container">
    <h2 style="text-align: center">Bài viết mới</h2>
        <div class="row">
            <form action="{{route('home.addPost')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1">Tiêu đề</label>
                    <input name="title" type="text" class="form-control" >
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Nội dung</label>
                    <br>
                    <textarea name="content" id="" cols="105" rows="10"></textarea>
                </div>
                <div>
                    <input style="border-radius: 10px" type="submit" class="btn btn-primary" value="Đăng bài">
                </div>
            </form>
        </div>
</div>
@endsection
