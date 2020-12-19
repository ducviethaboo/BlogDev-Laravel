@extends('user.core.master')
@section('content')
    <div class="content">
        {{--    SlideShow--}}
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="https://toidicodedao.files.wordpress.com/2016/09/2.jpg"
                         alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://toidicodedao.files.wordpress.com/2016/09/4.jpg?w=948&h=534"
                         alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://toidicodedao.files.wordpress.com/2016/09/5.jpg?w=948&h=534"
                         alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://toidicodedao.files.wordpress.com/2016/09/9.jpg?w=948&h=534"
                         alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        {{--    Post--}}
        <br>
        <br>
        <h2 style="text-align: center"> --- Bài viết nổi bật ---</h2>
        <div class="container">
            @foreach($posts as $post)
                <div class="card mt-4" style="border-radius: 10px; background-color: whitesmoke">
                    <div class="card-body">
                        <div class="subject-content">
                            <h2><i>{{$post->title}}</i></h2>
                            <p style="font-weight: 400; font-size: 16px; line-height: 26px; color: #777777">{{$post->content}} </p>
                            <hr>
                            <div class="row">
                                <div class="col-md-6 mt-3">
                                    <h6 style="font-weight: 400; font-size: 16px; line-height: 19px; color: #151b1d">
                                        <i>Người đăng:{{$post->users}}</i></h6>

                                            <p>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                     fill="currentColor" class="bi bi-calendar-check"
                                                     viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                          d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                                                    <path fill-rule="evenodd"
                                                          d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                                </svg>
                                                : <i>{{$post->date}}</i></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
@endsection
