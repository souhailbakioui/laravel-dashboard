<aside class="left-sidebar bg-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
      <!-- Aplication Brand -->
      <div class="app-brand">
        <a href="{{Route('login')}}">
          <svg
            class="brand-icon"
            xmlns="http://www.w3.org/2000/svg"
            preserveAspectRatio="xMidYMid"
            width="30"
            height="33"
            viewBox="0 0 30 33"
          >
            <g fill="none" fill-rule="evenodd">
              <path
                class="logo-fill-blue"
                fill="#7DBCFF"
                d="M0 4v25l8 4V0zM22 4v25l8 4V0z"
              />
              <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
            </g>
          </svg>
          <span class="brand-name">Dashboard</span>
        </a>
      </div>
      <!-- begin sidebar scrollbar -->
      <div class="sidebar-scrollbar">

        <!-- sidebar menu -->
        <ul class="nav sidebar-inner" id="sidebar-menu">



            <li  class="has-sub active expand" >
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard"
                aria-expanded="false" aria-controls="dashboard">
                <i class="mdi mdi-view-dashboard-outline"></i>
                <span class="nav-text">Dashboard</span> <b class="caret"></b>
              </a>
              <ul  class="collapse"  id="dashboard"
                data-parent="#sidebar-menu">
                <div class="sub-menu">












                      <li  class="active" >
                        <a class="sidenav-item-link" href="{{Route('Brand.index')}}">
                          <span class="nav-text">Home Brands</span>

                        </a>
                      </li>






                      <li >
                        <a class="sidenav-item-link" href="{{Route('Category.index')}}">
                          <span class="nav-text">Home Categories</span>



                        </a>
                      </li>




                </div>
              </ul>
            </li>





            <li  class="has-sub" >
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#ui-elements"
                aria-expanded="false" aria-controls="ui-elements">
                <i class="mdi mdi-folder-multiple-outline"></i>
                <span class="nav-text">CONTACT</span> <b class="caret"></b>
              </a>
              <ul  class="collapse"  id="ui-elements"
                data-parent="#sidebar-menu">
                <div class="sub-menu">


                  <li >
                    <a class="sidenav-item-link" href="{{Route('Contact.index')}}">
                      <span class="nav-text">Contact Profail</span>
                    </a>
                  </li>
                  <li >
                    <a class="sidenav-item-link" href="{{Route('ContactForm.index')}}">
                      <span class="nav-text">Contact Message</span>
                    </a>
                  </li>


                </div>
              </ul>
            </li>





            <li  class="has-sub" >
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#charts"
                aria-expanded="false" aria-controls="charts">
                <i class="mdi mdi-chart-pie"></i>
                <span class="nav-text">Portofolio</span> <span class="badge badge-success">new</span> <b class="caret"></b>
              </a>
              <ul  class="collapse"  id="charts"
                data-parent="#sidebar-menu">
                <div class="sub-menu">



                      <li >
                        <a class="sidenav-item-link" href="{{Route('Multipic.index')}}">
                          <span class="nav-text">Portofolio Pictures</span>

                        </a>
                      </li>




                </div>
              </ul>
            </li>





            <li  class="has-sub" >
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#pages"
                aria-expanded="false" aria-controls="pages">
                <i class="mdi mdi-image-filter-none"></i>
                <span class="nav-text">Slider</span> <b class="caret"></b>
              </a>
              <ul  class="collapse"  id="pages"
                data-parent="#sidebar-menu">
                <div class="sub-menu">



                      <li >
                        <a class="sidenav-item-link" href="{{Route('slider')}}">
                          <span class="nav-text">Slider Pictures</span>

                        </a>
                      </li>













                </div>
              </ul>
            </li>





            <li  class="has-sub" >
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#documentation"
                aria-expanded="false" aria-controls="documentation">
                <i class="mdi mdi-book-open-page-variant"></i>
                <span class="nav-text">About</span> <b class="caret"></b>
              </a>
              <ul  class="collapse"  id="documentation"
                data-parent="#sidebar-menu">
                <div class="sub-menu">

                  <li >
                    <a class="sidenav-item-link" href="{{Route('About.index')}}">
                      <span class="nav-text">About Info</span>

                    </a>
                  </li>

                </div>


        </ul>

      </div>

      <hr class="separator" />


    </div>
  </aside>
