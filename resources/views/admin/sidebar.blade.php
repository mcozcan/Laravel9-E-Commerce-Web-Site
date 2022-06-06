<div id="wrapper">
    <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
        @include("admin.header")
        <div style="color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px;">
            <a href="/logoutadmin" class="btn btn-danger square-btn-adjust">Logout</a>
        </div>
    </nav>

    <nav class="navbar-default navbar-side col-lg-3" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu" style="margin-bottom: 10px">
            <li>
                    <a  href="/adminpanel"><ion-icon name="home" size="large"></ion-icon>  Home</a>
                </li>
                <li>
                    <a href="adminpanel/category"><ion-icon name="briefcase" size="large"></ion-icon>  Categories<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        
                        <li>
                            <a href="/adminpanel/category"> Category List</a>
                        </li>

                        <li>
                            <a href="/adminpanel/category/create"> Add Category</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="adminpanel/product"><ion-icon name="apps" size="large"></ion-icon>  Products<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="/adminpanel/product"> Product List</a>
                        </li>

                        <li>
                            <a href="/adminpanel/product/create"> Add Product</a>
                        </li>
                    </ul>
                </li>

       
                <li>
                    <a href=""><ion-icon name="albums" size="large"></ion-icon>  Orders<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        
                        <li>
                            <a href="/adminpanel/order/new">New Orders</a>
                        </li>

                        <li>
                            <a href="/adminpanel/order/aprove"> Old Orders</a>
                        </li>

                        <li>
                            <a href="/adminpanel/order/cancel"> Cancel Orders</a>
                        </li>
                    </ul>
                </li>

             


                <li>
                    <a  href="/adminpanel/user"><ion-icon name="person" size="large"></ion-icon>  Users</a>
                </li>

                <li>
                    <a  href="/adminpanel/comment"><ion-icon name="chatbox" size="large"></ion-icon></i>  Comments</a>
                </li>


                <li>
                    <a href="/adminpanel/setting"><ion-icon name="settings" size="large"></ion-icon>  Settings</a>
                </li>
            </ul>
        </div>
    </nav>
</div>