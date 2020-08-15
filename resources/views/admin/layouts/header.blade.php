<nav class="pcoded-navbar menupos-fixed menu-light">
    <div class="navbar-wrapper ">
        <div class="navbar-brand header-logo">
            <a href="index.html" class="b-brand">
                <div class="b-bg">
                    E
                </div>
                <span class="b-title">Blog</span>
            </a>
            <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
        </div>
        <div class="navbar-content scroll-div ps">
            <ul class="nav pcoded-inner-navbar ">
                <li class="nav-item pcoded-menu-caption">
                    <label>Navigation</label>
                </li>  
                <li data-username="dashboard default ecommerce sales Helpdesk ticket CRM analytics crypto project" class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Posts</span></a>
                    <ul class="pcoded-submenu" style="display: none;">
                        <li class=""><a href="{{route('post.index')}} " class="">All Posts</a></li>
                        <li class=""><a href="{{route('post.create')}} " class="">Create Post</a></li>
                        
                    </ul>
                </li> 
                <li data-username="dashboard default ecommerce sales Helpdesk ticket CRM analytics crypto project" class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Categories</span></a>
                    <ul class="pcoded-submenu" style="display: none;">
                        <li class=""><a href="{{route('category.index')}} " class="">All Categories</a></li>
                        
                    </ul>
                </li>
                <li data-username="dashboard default ecommerce sales Helpdesk ticket CRM analytics crypto project" class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Tags</span></a>
                    <ul class="pcoded-submenu" style="display: none;">
                        <li class=""><a href="{{route('tag.index')}} " class="">All Tags</a></li>
                        
                    </ul>
                </li>
                <li data-username="dashboard default ecommerce sales Helpdesk ticket CRM analytics crypto project" class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Profile</span></a>
                    <ul class="pcoded-submenu" style="display: none;">
                        <li class=""><a href="{{route('main.profile.edit')}} " class="">Edit Profile</a></li>
                        
                    </ul>
                </li>
                <li data-username="dashboard default ecommerce sales Helpdesk ticket CRM analytics crypto project" class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Meta</span></a>
                    <ul class="pcoded-submenu" style="display: none;">
                        <li class=""><a href="{{route('meta.index')}} " class="">Meta</a></li>
                        
                    </ul>
                </li> 
                <li data-username="dashboard default ecommerce sales Helpdesk ticket CRM analytics crypto project" class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Sliders</span></a>
                    <ul class="pcoded-submenu" style="display: none;">
                        <li class=""><a href="{{route('slider.index')}} " class="">Sliders</a></li>
                        
                    </ul>
                </li>
            </ul>
            
        </div>
    </nav>
    <header class="navbar pcoded-header navbar-expand-lg navbar-light headerpos-fixed">
        <div class="m-header">
            <a class="mobile-menu" id="mobile-collapse1" href="#!"><span></span></a>
            <a href="index.html" class="b-brand">
                <div class="b-bg">
                    E
                </div>
                <span class="b-title">Elite Able</span>
            </a>
        </div>
        <a class="mobile-menu" id="mobile-header" href="#!">
            <i class="feather icon-more-horizontal"></i>
        </a>
        <div class="collapse navbar-collapse">
            <a href="#!" class="mob-toggler"></a>
            <ul class="navbar-nav mr-auto">
                <li>
                    <div class="page-header"><div class="page-header">
                        <div class="page-block">
                            <div class="row align-items-center">
                                <div class="col-md-12">
                                    <div class="page-header-title">
                                        <h5>Home</h5>
                                    </div>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                        <li class="breadcrumb-item"><a href="#!">Analytics Dashboard</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
             <li>
                    @auth
                    <a href="{{route('admin.logout')}}"><button type="submit"  class="btn btn-info">Logout</button> </a>
                    @endauth
                </li>
            <li class="nav-item">
                <div class="main-search">
                    <div class="input-group">
                        <input type="text" id="m-search" class="form-control" placeholder="Search . . .">
                        <a href="#!" class="input-group-append search-close">
                            <i class="feather icon-x input-group-text"></i>
                        </a>
                        <span class="input-group-append search-btn btn btn-primary">
                            <i class="feather icon-search input-group-text"></i>
                        </span>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</header>