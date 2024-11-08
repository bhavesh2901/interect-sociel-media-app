<div class='center-content'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <div class='all-border'>

      <div class='shows-location'>

        <div class='location-text'>

          <span class='location'>Admin <i class="fa">&#xf101; </i> Dashboard</span>

        </div>

      </div>

      <section>
   <div class='site-info' >

          <div class='all-quick-info'>

            <div class='info-icon'><i class="fa">&#xf0c0;</i></div>

            <div class='text-right'>
              <div class='info-numbers'><span><?php print_r(count($user)); ?></span></div>
              <div>Users</div>
            </div>

            <div class='info-box-footer'>

              <a href='#' class='user-href'><span class="pull-left">View Details</span>

                <span class='pull-right'><i class="fa fa-arrow-circle-right"></i></span></a>

            </div>

          </div>

          <div style='background: #f0ad4e; border-color: #f0ad4e;' class='all-quick-info'>

            <div class='info-icon'> <i class="fa">&#xf132;</i></div>

            <div class='text-right'>
              <div class='info-numbers'><span><?php print_r(count($admin)); ?></span></div>
              <div>Total Admins!</div>
            </div>

            <div class='info-box-footer'>

              <a href='#' class='user-href' style='color: #f0ad4e;'><span class="pull-left"><button style="border:none; background-color:white;color:orange;" name="admins">View Details</button></span>

                <span class='pull-right'><i class="fa fa-arrow-circle-right"></i></span></a>

            </div>

          </div>

          <div style='background: #5cb85c; border-color: #5cb85c;' class='all-quick-info'>

            <div class='info-icon'> <i class="fa fa-envelope"></i></div>

            <div class='text-right'>
              <div class='info-numbers'><span><?php print_r(count($msg));  ?></span></div>
              <div>Total Messages!</div>
            </div>

            <div class='info-box-footer'>

              <a href='#' class='user-href' style='color: #5cb85c;'><span class="pull-left"><button style="border:none;background-color:white;color:green;" name="allmsg">View Details</button></span>

                <span class='pull-right'><i class="fa fa-arrow-circle-right"></i></span></a>

            </div>

          </div>

          <div style='background: #ff5256; border-color: #ff5256;' class='all-quick-info'>

            <div class='info-icon'><i class="fa">&#xf05e;</i></div>

            <div class='text-right'>
              <div class='info-numbers'><span><?php print_r(count(deluser())); ?></span></div>
              <div>Banned Users!</div>
            </div>

            <div class='info-box-footer'>

              <a href='#' class='user-href' style='color: #ff5256;'><span class="pull-left"></span>

                <span class='pull-right'><i class="fa fa-arrow-circle-right"></i></span></a>

            </div>

          </div>

        </div>
    
     

    

        

        <div class=''>

        </div>

      </section>

    </div>

  </div>