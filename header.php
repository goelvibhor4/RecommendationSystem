      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Menu"></div>
              </div>
            <!--logo start-->
            <a href="dashboard.php" class="logo"><b>Movie Recommendation</b></a>
            <!--logo end-->
           </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile.html"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered"><?php echo $_SESSION["name"] ;?></h5>
              	  	
                  <li class="mt">
                      <a class="active" href="dashboard.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                    <li class="mt">
                     
                       
                    <!--COMPLETED ACTIONS DONUTS CHART-->
            <h3> RECOMMENDATION BASED ON </h3>
                  
                  </li>

  <a  href="actors.php">
                   <li class="mt">
                     
                          <i class="fa fa-dashboard"></i>
                          <span><b>Actor</b></span>
                  </a>
                  </li>

                   <a  href="actress.php">
                  <li class="mt">
                     
                          <i class="fa fa-dashboard"></i>
                          <span><b>Actress</b></span>
                   </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>UI Elements</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="general.html">General</a></li>
                          <li><a  href="buttons.html">Buttons</a></li>
                          <li><a  href="panels.html">Panels</a></li>
                      </ul>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>