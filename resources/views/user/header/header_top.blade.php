
<body>
    <div class="header_top">
        <div class="container">
             <div class="cssmenu">
                <ul>
                        @if(Auth::check())
                            <li><a href="">Hello: {{Auth::user()->name}}</a></li>
                            <li><a href="{{route('user.logout')}}"><b>Đăng xuất</b></a></li>
                        @else
                            <li class="active"><a href="{{route('user.login')}}">My Account</a></li>
                        @endif
                </ul>
             </div>
        </div>
    </div>
    <div class="header_bottom men_border">
            <div class="container">
                <div class="col-xs-8 header-bottom-left">
                    <div class="col-xs-2 logo">
                        <h1><a href="{{route('user.index')}}"><span>PHONE</span>SHOP</a></h1>
                    </div>
                    <div class="col-xs-6 menu">
                        <ul class="megamenu skyblue">

                          <li class="active grid"><a class="color1" href="{{route('user.smartphone')}}">Smartphone</a><div class="megapanel">


                            <div class="row">
                                <div class="col1">
                                    <div class="h_nav">
                                        <ul>

                                        </ul>
                                    </div>
                                </div>
                                <div class="col1">
                                    <div class="h_nav">
                                        <ul>
                                            <li><a href="men.html">Shirts</a></li>
                                            <li><a href="men.html">Shoes, Boots & Trainers</a></li>
                                            <li><a href="men.html">Shorts</a></li>
                                            <li><a href="men.html">Suits & Blazers</a></li>
                                            <li><a href="men.html">Sunglasses</a></li>
                                            <li><a href="men.html">Sweatpants</a></li>
                                            <li><a href="men.html">Swimwear</a></li>
                                            <li><a href="men.html">Trousers & Chinos</a></li>
                                            <li><a href="men.html">T-Shirts</a></li>
                                            <li><a href="men.html">Underwear & Socks</a></li>
                                            <li><a href="men.html">Vests</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col1">
                                    <div class="h_nav">
                                        <h4>Popular Brands</h4>
                                        <ul>
                                            <li><a href="men.html">Levis</a></li>
                                            <li><a href="men.html">Persol</a></li>
                                            <li><a href="men.html">Nike</a></li>
                                            <li><a href="men.html">Edwin</a></li>
                                            <li><a href="men.html">New Balance</a></li>
                                            <li><a href="men.html">Jack & Jones</a></li>
                                            <li><a href="men.html">Paul Smith</a></li>
                                            <li><a href="men.html">Ray-Ban</a></li>
                                            <li><a href="men.html">Wood Wood</a></li>
                                        </ul>
                                    </div>
                                </div>
                              </div>
                            </div>
                        </li>

                        <li class="grid"><a class="color2" href="{{route('user.laptop')}}">Laptop</a>

                          <div class="megapanel">
                            <div class="row">
                                <div class="col1">
                                    <div class="h_nav">
                                        <ul>
                                            <li><a href="men.html">Accessories</a></li>
                                            <li><a href="men.html">Bags</a></li>
                                            <li><a href="men.html">Caps & Hats</a></li>
                                            <li><a href="men.html">Hoodies & Sweatshirts</a></li>
                                            <li><a href="men.html">Jackets & Coats</a></li>
                                            <li><a href="men.html">Jeans</a></li>
                                            <li><a href="men.html">Jewellery</a></li>
                                            <li><a href="men.html">Jumpers & Cardigans</a></li>
                                            <li><a href="men.html">Leather Jackets</a></li>
                                            <li><a href="men.html">Long Sleeve T-Shirts</a></li>
                                            <li><a href="men.html">Loungewear</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col1">
                                    <div class="h_nav">
                                        <ul>
                                            <li><a href="men.html">Shirts</a></li>
                                            <li><a href="men.html">Shoes, Boots & Trainers</a></li>
                                            <li><a href="men.html">Shorts</a></li>
                                            <li><a href="men.html">Suits & Blazers</a></li>
                                            <li><a href="men.html">Sunglasses</a></li>
                                            <li><a href="men.html">Sweatpants</a></li>
                                            <li><a href="men.html">Swimwear</a></li>
                                            <li><a href="men.html">Trousers & Chinos</a></li>
                                            <li><a href="men.html">T-Shirts</a></li>
                                            <li><a href="men.html">Underwear & Socks</a></li>
                                            <li><a href="men.html">Vests</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col1">
                                    <div class="h_nav">
                                        <h4>Popular Brands</h4>
                                        <ul>
                                            <li><a href="men.html">Levis</a></li>
                                            <li><a href="men.html">Persol</a></li>
                                            <li><a href="men.html">Nike</a></li>
                                            <li><a href="men.html">Edwin</a></li>
                                            <li><a href="men.html">New Balance</a></li>
                                            <li><a href="men.html">Jack & Jones</a></li>
                                            <li><a href="men.html">Paul Smith</a></li>
                                            <li><a href="men.html">Ray-Ban</a></li>
                                            <li><a href="men.html">Wood Wood</a></li>
                                        </ul>
                                    </div>
                                </div>
                              </div>
                            </div>
                    </li>
                  </ul>
                </div>
            </div>
            <div class="col-xs-4 header-bottom-right">
                <form role="search" method="get" id="searchform" action="{{route('user.pages.timkiem')}}">
                <div class="form-group">
                    <input type="text" class="form-control" style="width:60%" name="key" class="textbox" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
                </div>
                    <button type="submit" style="margin-top:-10px;margin-left:190px " class="btn btn-primary"><i class="fa fa-search"></i></button>
                    <div id="response"> </div>
                    </form>
               <div class="clearfix"></div>
           </div>
            <div class="clearfix"></div>
         </div>
    </div>
