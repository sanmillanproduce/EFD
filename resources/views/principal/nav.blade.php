<header id="heade" class="row justify-content-center align-items-center">

    <div id="intro" class="col-lg-12 col-sm-12 Height100 M_p navbar navbar-expand-lg backgroud" style="padding: 1% 0 0 0;">

        <ul class="navbar-nav mr-auto" style="padding: 0%; width: 100%; height: 100%;" >

            <div  class="nav-item col-9 Height100" style="padding: 0;">

                <div class="wrapper">

                    <div class="contain">

                        <div id="noti" href="#Noticias" class="icon-items " >
                            NOTICIAS
                        </div>
                        <a id="expe" href="/filmografia" class="icon-items" style="margin-right: 66px;">
                            FILMOGRAFIA
                        </a>

                        <div class="search-box" style="margin: auto; height: 29px;">
                            <input type="text" class="input">
                        </div>

                        <div id="lup" class="icon-items icon-1">
                            <i class="fas fa-search ico_bus"></i>
                        </div>

                    </div>

                </div>

            </div>

            <div  class="nav-item col-3 Height100" style="padding: 0;">
                <div class="row justify-content-center align-items-center Height100">

                    <div  class="col-3 Height100">
                        <div class="row justify-content-center align-items-center Height100">
                            <a id="map" href="#">
                                <i class="fas fa-map-marker-alt I_m ico_bus"></i>
                            </a>
                        </div>
                    </div>

                    <div  class="col-2 Height100">
                        <div class="row justify-content-center align-items-center Height100">
                            <a id="truck" href="{{ route('cart-show') }}">
                                <i class="fas fa-truck I_m ico_bus"></i>
                            </a>
                            <div class="circle_item">
                            <p>{{ count(session('cart')) }}</p>
                            </div>
                        </div>
                    </div>

                    <div  class="col-3 Height100">
                        <div class="row justify-content-center align-items-center Height100">
                            <a id="use" href="{{ route('login') }}" >
                                <i class="fas fa-user I_m ico_bus" ></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-2 Height100" style="cursor: pointer;">
                        <div class="row justify-content-center align-items-center Height100">
                            <div id="menu_bur" onclick="toggleSidebar()" >
                                <i class="fas fa-bars I_m ico_bus" ></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </ul>

    </div>

</header>
