<div class="vertical-menu">
        <div data-simplebar class="h-100">
          <div class="user-sidebar text-center " style="background-color: #cc5500;">
            <div class="dropdown">
              <div class="user-img">
                <img
                  src="{{asset ('assetsAdmin/images/users/avatar-7.jpg')}}"
                  alt=""
                  class="rounded-circle"
                />
                <span class="avatar-online bg-success"></span>
              </div>
              <div class="user-info">
                <h5 class="mt-3 font-size-16 text-white">Saman Lama</h5>
                <span class="font-size-13 text-white-50">Man Utd Fan   </span>
              </div>
            </div>
          </div>
          <!--- Sidemenu -->
          <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
              <li class="menu-title">Menu</li>
              <li>
                <a href="/admin" class="waves-effect">
                 <img src="{{asset ('assetsAdmin/images/iconpack/iconspng/dashboard.png')}}" alt="" style="width: 20px">
                  <span class="badge rounded-pill bg-info float-end">3</span>
                  <span> Dashboard</span>
                </a>
              </li>

              <li>
                <a href="{{Route('calendar')}}" class="waves-effect">
                  <img src="{{asset ('assetsAdmin/images/iconpack/iconspng/calendar.png')}}" alt="" style="width: 20px">
                  <span>Calendar</span>
                </a>
              </li>

              <li>
                <a href="{{Route('chat')}}" class="waves-effect">
                  <img src="{{asset ('assetsAdmin/images/iconpack/iconspng/chat.png')}}" alt="" style="width: 20px">
                  <span>Chat</span>
                </a>
              </li>

              <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                 <img src="{{asset ('assetsAdmin/images/iconpack/dripicons/SVG/article.svg')}}" style="width: 19px; margin-bottom: 0px;" alt="">
                  <span>Post</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">                  
                  <li><a href="{{Route('addpost')}}">Add Post</a></li>
                  <li><a href="{{Route('viewpost')}}">View Post</a></li>
                </ul>
              </li>

              <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                  <img src="{{asset ('assetsAdmin/images/iconpack/iconspng/ecommerce.png')}}" alt="" style="width: 20px">
                  <span>Ecommerce</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                  <li><a href="{{Route('products')}}">Products</a></li>
                  <li>
                    <a href="{{Route('productsdetail')}}">Product Detail</a>
                  </li>
                  <li><a href="{{Route('orders')}}">Orders</a></li>
                  <li><a href="{{Route('cart')}}">Cart</a></li>
                  <li><a href="{{Route('checkout')}}">Checkout</a></li>
                  <li><a href="{{Route('shops')}}">Shops</a></li>
                  <li><a href="{{Route('addproduct')}}">Add Product</a></li>
                </ul>
              </li>

              <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
  <img
                      src="{{asset ('assetsAdmin/images/iconpack/dripicons/SVG/user.svg')}}"
                      alt=""
                      style="width: 15px; margin-bottom: 4px"
                  />
                  <span>Users</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                  <li><a href="{{Route('addusers')}}">Add Users</a></li>
                  <li><a href="{{Route('viewusers')}}">View Users</a></li>
                </ul>
              </li>

              <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                   <img src="{{asset ('assetsAdmin/images/iconpack/dripicons/SVG/user-group.svg')}}" style="width: 19px; margin-bottom: 4px;" alt="">
                  <span>Costumers</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                  <li><a href="{{Route('addcostumers')}}">Add Costumers</a></li>
                  <li><a href="{{Route('viewcostumers')}}">View Costumers</a></li>
                </ul>
              </li>

              <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                  <img src="{{asset ('assetsAdmin/images/iconpack/dripicons/SVG/document-new.svg')}}" style="width: 18px; margin-bottom: 4px;" alt="">  
                  <span>Page</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                  <li><a href="{{Route('addpage')}}">Add Page</a></li>
                  <li><a href="{{Route('viewpage')}}">View Page</a></li>
                </ul>
              </li>

              <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                  <img src="{{asset ('assetsAdmin/images/iconpack/iconspng/email.png')}}" alt="" style="width: 20px">
                  <span>Email</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                  <li><a href="{{Route('inbox')}}">Inbox</a></li>
                  <li><a href="{{Route('emailread')}}">Email Read</a></li>
                  <li><a href="{{Route('emailcompose')}}">Email Compose</a></li>
                </ul>
              </li>

            </ul>
          </div>
          <!-- Sidebar -->
        </div>
      </div>
      