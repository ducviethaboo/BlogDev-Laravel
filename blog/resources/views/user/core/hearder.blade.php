<style>
    #brand {
        color: orange;
        font-family: Serif;
        font-size: 25px;
    }

    .nav-link {
        margin-left: 25px;
        color: black !important;
    }

    .nav-link {
        width: auto;
        display: inline-block;
        transition-property: transform;
        transition: 0.25s ease;
        color: black !important;

    }

    .nav-link::after {
        content: '';
        border-top: 2px solid orange;
        width: 85%;
        position: absolute;
        display: block;
        transform: rotateY(90deg);
        transition: transform 0.25s linear;
    }

    .nav-link:hover {
        transform: scale(1);
        color: orange !important;
    }

    .nav-link:hover::after {
        transform: rotate(0deg);
    }

    #signin:hover {
        color: orange;
    }

    .navbar {
        box-shadow: 2px 2px 2px 2px whitesmoke;
        background-color: whitesmoke;
    }

</style>
<div class="header">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <a id="brand" class="navbar-brand" href="#"> <i>Diễn đàn DEV</i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Trang chủ<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Chuyện lập trình</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Coding
                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor"
                                 class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                                <path
                                    d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                            </svg>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item nav-link" href="#">Diễn đàn</a>
                            <a class="dropdown-item nav-link" href="#">Clean Code</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <a id="signin" style="display: contents" class="btn" href="{{route('login.page')}}">Đăng nhập</a>
    </nav>
</div>
