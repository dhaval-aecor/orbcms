<header class="main-header header-style-one">
      <!-- Header Top -->
      <!-- <div class="header-top header-top-one">
        <div class="auto-container">
          <div class="inner clearfix">
            <div class="top-left clearfix">
              <div class="top-text edit" field="contiqu_top_header_text" rel="global">
                    <p>Independent IT services to the association industry.</p>
              </div>
            </div>

            <div class="top-right clearfix">
              <div class="info">
                <ul class="clearfix">
                  <li class="phone edit" field="contiqu_top_header_phone" rel="global">
                    <a href="tel:0401724083"><span class="icon sl-icon-call-in"></span>
                      <strong>04017 24083</strong></a>
                  </li>
                  <li class="email edit" field="contiqu_top_header_email" rel="global">
                    <a href="mailto:info@aotiqu.com.au"><span
                        class="icon sl-icon-envelope-open"></span><strong>info@aotiqu.com.au</strong></a>
                  </li>
                  <li class="signin edit" field="contiqu_top_header_login_url" rel="global">
                    <a href="<?=config('app.login_url')?>">Login</a>
                  </li>
                  <li class="signup edit" field="contiqu_top_header_register_url" rel="global">
                    <a href="<?=config('app.reg_url')?>">Create Account</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div> -->

      <!-- Header Upper -->
      <div class="header-upper">
        <div class="auto-container">
          <div class="inner-container clearfix">
            <!--Logo-->
            <div class="logo-box">
              <div class="logo">
                <module type="logo" class="logo" id="header-logo" data-alt-logo="false"/>
              </div>
            </div>
            <div class="right-nav clearfix">
              <div class="nav-outer clearfix">
                <!--Mobile Navigation Toggler-->
                <div class="mobile-nav-toggler">
                  <span class="icon flaticon-menu-1"></span>
                </div>

                <!-- Main Menu -->
                <nav class="menu-overlay main-menu navbar-expand-md navbar-light">
                  <div class="menu collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                    <div class="mw-module-container-center">
                        <module  type="menu" name="header_menu" id="header_menu" template="navbar"/>
                    </div>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--End Header Upper-->

      <!-- Sticky Header  -->
      <div class="sticky-header">
        <div class="auto-container clearfix">
          <!--Logo-->
          <div class="logo pull-left">
            <module type="logo" class="" id="header-logo" data-alt-logo="false"/>
          </div>
          <!--Right Col-->
          <div class="pull-right">
            <!-- Main Menu -->
            <nav class="main-menu clearfix">
              <!--Keep This Empty / Menu will come through Javascript-->
            </nav>
            <!-- Main Menu End-->
          </div>
        </div>
      </div>
      <!-- End Sticky Menu -->

      <!-- Mobile Menu  -->
      <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn">
          <span class="icon flaticon-targeting-cross"></span>
        </div>

        <nav class="menu-box">
          <div class="nav-logo">
            <module type="logo" class="logo" id="header-logo" data-alt-logo="false"/>
          </div>
          <div class="menu-outer">
            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
          </div>
          <!--Social Links-->
          <div class="social-links">
            <ul class="clearfix">
              <li>
                <a href="#"><span class="fab fa-twitter"></span></a>
              </li>
              <li>
                <a href="#"><span class="fab fa-facebook-square"></span></a>
              </li>
              <li>
                <a href="#"><span class="fab fa-pinterest-p"></span></a>
              </li>
              <li>
                <a href="#"><span class="fab fa-instagram"></span></a>
              </li>
              <li>
                <a href="#"><span class="fab fa-youtube"></span></a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
      <!-- End Mobile Menu -->
    </header>
