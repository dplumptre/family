@inject('request', 'Illuminate\Http\Request')
<ul class="js-nav-main-header nav-main-header pull-right">
    <li class="text-right hidden-md hidden-lg">
        <!-- Toggle class helper (for main header navigation in small screens), functionality initialized in App() -> uiToggleClass() -->
        <button class="btn btn-link text-white" data-toggle="class-toggle" data-target=".js-nav-main-header" data-class="nav-main-header-o" type="button">
            <i class="fa fa-times"></i>
        </button>
    </li>
    <li>
        <a class="{{current_link('home', $request->path())}}" href="{{route('home')}}">Home</a>
    </li>

    <li>
        <a class="{{current_link('about', $request->path())}}" href="{{route('about')}}">About</a>
    </li>
    <li>
        <a class="{{current_link('news', $request->path())}}" href="{{route('news')}}">News</a>
    </li>
    <li>
        <a class="{{current_link('faq', $request->path())}}" href="{{route('faq')}}">Faq</a>
    </li>
    <li>
        <a class="{{current_link('contact', $request->path())}}" href="{{route('contact')}}">Contact</a>
    </li>

    <li>
        <a class="nav-submenu" href="javascript:void(0)">Account</a>
        <ul>
            <li>
                <a href="{{route('user.register')}}">Register</a>
            </li>
            <li>
                <a href="{{route('user.login')}}">Login</a>
            </li>
        </ul>
    </li>

</ul>

<ul class="nav-header pull-left">
    <li class="header-content">
        <a class="h5" href="index.html">
            <img src="/assets/img/logo.png" alt="Family Life Club logo" style="width: 200px;">
        </a>
    </li>
</ul>