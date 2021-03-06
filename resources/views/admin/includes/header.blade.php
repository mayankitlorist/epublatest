<div class="iq-top-navbar">
    <div class="iq-navbar-custom">
      <nav class="navbar navbar-expand-lg navbar-light p-0">
        <div class="iq-navbar-logo d-flex align-items-center justify-content-between">
          <i class="ri-menu-line wrapper-menu"></i>
          <a href="index.html" class="header-logo">
            <img src="{{ asset('/assets/images/logo.png') }}" class="img-fluid rounded-normal" alt="logo">
            <h5 class="logo-title ml-3">Asymmetrical.ai</h5>

          </a>
        </div>
        <div class="iq-search-bar device-search">
          <!-- <form action="#" class="searchbox">
            <a class="search-link" href="#"><i class="ri-search-line"></i></a>
            <input type="text" class="text search-input" placeholder="Search here...">
          </form> -->
        </div>
        <div class="d-flex align-items-center">
          <!--<div class="change-mode">
                        <div class="custom-control custom-switch custom-switch-icon custom-control-inline">
                            <div class="custom-switch-inner">
                                <p class="mb-0"> </p>
                                <input type="checkbox" class="custom-control-input" id="dark-mode" data-active="true">
                                <label class="custom-control-label" for="dark-mode" data-mode="toggle">
                                    <span class="switch-icon-left"><i class="a-left ri-moon-clear-line"></i></span>
                                    <span class="switch-icon-right"><i class="a-right ri-sun-line"></i></span>
                                </label>
                            </div>
                        </div>
                    </div>-->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
            <i class="ri-menu-3-line"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto navbar-list align-items-center">
             
         
              <li class="nav-item nav-icon dropdown caption-content">
                <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img src="{{asset('/assets/images/user/1.png')}}" class="img-fluid rounded" alt="user">
                </a>
                <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <div class="card shadow-none m-0">
                   <a href="{{url('logout')}}" class="btn border">Sign Out</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </div>
  <div class="modal fade" id="new-order" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <div class="popup text-left">
            <h4 class="mb-3">New Order</h4>
            <div class="content create-workform bg-body">
              <div class="pb-3">
                <label class="mb-2">Email</label>
                <input type="text" class="form-control" placeholder="Enter Name or Email">
              </div>
              <div class="col-lg-12 mt-4">
                <div class="d-flex flex-wrap align-items-ceter justify-content-center">
                  <div class="btn btn-primary mr-4" data-dismiss="modal">Cancel</div>
                  <div class="btn btn-outline-primary" data-dismiss="modal">Create</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>