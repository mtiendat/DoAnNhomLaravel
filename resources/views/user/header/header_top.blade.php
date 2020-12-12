
<body>
    <div class="header_top">
        <div class="container">
            <div class="one-fifth column row_1">
                <span class="selection-box"><select class="domains valid" name="domains">
                   <option>English</option>

                </select></span>
             </div>
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
                        <h1><a href="{{route('user.index')}}"><span>Buy</span>shop</a></h1>
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
                    <li><a class="color4" href="{{route('user.about')}}">About</a></li>
                    <li><a class="color6" href="contact.html">Support</a></li>
                  </ul>
                </div>
            </div>
            <div class="col-xs-4 header-bottom-right">
               <div class="box_1-cart">
                 <div class="box_11"><a href="{{route('user.checkout')}}">
                  <h4><p>Cart: <span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</p><img src="images/bag.png" alt=""/><div class="clearfix"> </div></h4>
                  </a></div>
                  <p class="empty"><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
                  <div class="clearfix"> </div>
                </div>
                <form role="search" method="get" id="searchform" action="{{route('user.pages.timkiem')}}">
                    <input type="text" name="key" class="textbox" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
                    <button type="submit"><i class="fa fa-search"></i></button>
                    <div id="response"> </div>
                    </form>
               <div class="clearfix"></div>
           </div>
            <div class="clearfix"></div>
         </div>
    </div>
