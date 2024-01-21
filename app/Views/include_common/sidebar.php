<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.html">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item nav-category">REGISTER BUSINESS</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-floor-plan"></i>
              <span class="menu-title">Register Business</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url() . 'user_form'; ?>">Add Business</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Show Business List</a></li>
                <!-- <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li> -->
              </ul>
            </div>
          </li>
          <li class="nav-item nav-category">USER MANAGEMENT</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="menu-icon mdi mdi-card-text-outline"></i>
              <span class="menu-title">User Management</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Create License</a></li>
                <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Add Roles</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url() . 'user_form1'; ?>">Add Users</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item nav-category">MODULES</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Modules</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">Add Modules</a></li>
              </ul>
            </div>
          </li>
          </li>
 
          <li class="nav-item nav-category">APPOINTMENTS</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
              <i class="menu-icon mdi mdi-layers-outline"></i>
              <span class="menu-title">Appointments</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="icons">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/icons/mdi.html">Add Appointments</a></li>
              </ul>
            </div>
          </li> 
          </li>

          <li class="nav-item nav-category">DOCTORS</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-account-circle-outline"></i>
              <span class="menu-title">Doctors</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
              <li class="nav-item"><a class="nav-link" href="<?php echo base_url() . 'doctors_form'; ?>">Add Doctors</a></li>
              <li class="nav-item"><a class="nav-link" href="<?php echo base_url() . 'doctors_table'; ?>">Show Doctors</a></li>
              <li class="nav-item"><a class="nav-link" href="<?php echo base_url() . 'doctors_fee'; ?>">Doctors Fee</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item nav-category">LABORATORY SERVICES</li>
          <li class="nav-item">
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="menu-icon mdi mdi-chart-line"></i>
              <span class="menu-title">Laboratory Services</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/charts/chartjs.html">Manage laboratory </a></li>
              </ul>
            </div>
          </li>
          </li>
         
          <li class="nav-item nav-category">CONFIGURATION</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Configuration</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">Configure Hospital</a></li>
              </ul>
            </div>
          </li>
          </li>



          <li class="nav-item nav-category">REPORTS</li>
          <li class="nav-item">
            <a class="nav-link" >
              <i class="menu-icon mdi mdi-file-document"></i>
              <span class="menu-title">Reports</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">Add Reports</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>