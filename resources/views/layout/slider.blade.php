<div class="iq-sidebar  sidebar-default ">
  <div class="iq-sidebar-logo d-flex align-items-center justify-content-between">
    <a href="" class="header-logo">
      <img src="{{url('/images/bookinglogo.png')}}" width="100px" height="50px" class="img-fluid rounded-normal light-logo" alt="logo">
      <h5 class="logo-title light-logo ml-3"></h5>
    </a>
    <div class="iq-menu-bt-sidebar ml-0">
      <i class="las la-bars wrapper-menu"></i>
    </div>
  </div>
  <div class="data-scrollbar" data-scroll="1">
    <nav class="iq-sidebar-menu">
      <ul id="iq-sidebar-toggle" class="iq-menu">
        <li class="active">
          <a href="{{url('admin')}}" class="collapsed" >
            <!-- <svg class="svg-icon" id="p-dash1" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
              <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
              <line x1="12" y1="22.08" x2="12" y2="12"></line>
            </svg> -->
            <img src="https://img.icons8.com/ios/50/000000/dashboard.png" style="width:25px; height:25px"/>
            <span class="ml-4">Dashboard</span>
          </a>
        </li>
        <li class=" ">
          <a href="#category" class="collapsed" data-toggle="collapse" aria-expanded="false">
            <!-- <svg class="svg-icon" id="p-dash3" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect>
              <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
            </svg> -->
            <img src="https://img.icons8.com/ios/50/000000/category.png" style="width:25px; height:25px">
            <span class="ml-4">Books Categories</span>
            <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <polyline points="10 15 15 20 20 15"></polyline>
              <path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
            </svg>
          </a>
          <ul id="category" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
            <li class="">
              {{-- <a href="page-list-category.html"> --}}
                
                <a href="{{url('admin/bookCategory')}}">
                <i class="las la-minus"></i><span>List Book Category</span>
              </a>
            </li>
            <li class="">
              {{-- <a href="page-add-category.html"> --}}
                <a href="{{url('admin/addCategory')}}">
                <i class="las la-minus"></i><span>Add Book Category</span>
              </a>
            </li>
          </ul>
        </li>
        <li class=" ">
          <a href="#product" class="collapsed" data-toggle="collapse" aria-expanded="false">
            <!-- <svg class="svg-icon" id="p-dash2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="9" cy="21" r="1"></circle>
              <circle cx="20" cy="21" r="1"></circle>
              <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
            </svg> -->
            <img src="https://img.icons8.com/ios/50/000000/book.png" style="width:25px; height:25px">
            <span class="ml-4">Books</span>
            <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <polyline points="10 15 15 20 20 15"></polyline>
              <path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
            </svg>
          </a>
          <ul id="product" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
            <li class="">
              {{-- <a href="page-list-product.html"> --}}
              <a href="{{url('admin/book')}}">
                <i class="las la-minus"></i><span>List Books</span>
              </a>
            </li>
            <li class="">
              {{-- <a href="page-add-product.html"> --}}
                 <a href="{{url('admin/addBook')}}"> 
                <i class="las la-minus"></i><span>Add Books</span>
              </a>
            </li>
          </ul>
        </li>
        <li class=" ">
          <a href="#school" class="collapsed" data-toggle="collapse" aria-expanded="false">
            <!-- <svg class="svg-icon" id="p-dash2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="9" cy="21" r="1"></circle>
              <circle cx="20" cy="21" r="1"></circle>
              <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
            </svg> -->
            <img src="https://img.icons8.com/ios/50/000000/school.png" style="width:25px; height:25px">
            <span class="ml-4">School</span>
            <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <polyline points="10 15 15 20 20 15"></polyline>
              <path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
            </svg>
          </a>
          <ul id="school" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
            <li class="">
              {{-- <a href="page-list-product.html"> --}}
              <a href="{{url('admin/school')}}">
                <i class="las la-minus"></i><span>List School</span>
              </a>
            </li>
            <li class="">
              {{-- <a href="page-add-product.html"> --}}
                 <a href="{{url('admin/addSchool')}}"> 
                <i class="las la-minus"></i><span>Add School</span>
              </a>
            </li>
          </ul>
        </li>
        <li class=" ">
          <a href="#user" class="collapsed" data-toggle="collapse" aria-expanded="false">
            <!-- <svg class="svg-icon" id="p-dash2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="9" cy="21" r="1"></circle>
              <circle cx="20" cy="21" r="1"></circle>
              <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
            </svg> -->
            <img src="https://img.icons8.com/ios/50/000000/user--v1.png" style="width:25px; height:25px"/>
            <span class="ml-4">User</span>
            <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <polyline points="10 15 15 20 20 15"></polyline>
              <path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
            </svg>
          </a>
          <ul id="user" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
            <li class="">
              {{-- <a href="page-list-product.html"> --}}
              <a href="{{url('admin/teachers')}}">
                <i class="las la-minus"></i><span>Teacher</span>
              </a>
            </li>
            <li class="">
              {{-- <a href="page-add-product.html"> --}}
                 <a href="{{url('admin/students')}}"> 
                <i class="las la-minus"></i><span>Student</span>
              </a>
            </li>
          </ul>
        </li>
      
      </ul>
    </nav>
    <div class="p-3"></div>
  </div>
</div>