<?php if ($footer == 'true'): ?>
    <div class="theme-separator"></div>
    <footer class="main-footer">
      <div class="top-pattern-layer-dark"></div>

      <!--Widgets Section-->
      <div class="widgets-section">
        <div class="auto-container">
          <div class="row clearfix">
            <!--Column-->
            <div class="column col-xl-3 col-lg-12 col-md-12 col-sm-12 edit nodrop safe-mode" field="contiqu_footer_about_info" rel="global">
              <div class="footer-widget about-widget">
                <div class="logo">
                  <a href="#"><img src="<?php print template_url(); ?>theme/assets/images/contiqu-logo.png" alt="" /></a>
                </div>
                <div class="text">
                  COTIQU Pty Ltd <br />
                  Level 3, 33-35 Atchison St <br />
                  St Leonards NSW 2065
                </div>
                <div class="info">
                  <ul>
                    <li>
                      Postal<br />
                      PO Box 576<br />
                      Crows Nest NSW 1585<br /><br />
                    </li>
                    <li>
                      Call us
                      <a href="tel:0401724083"><strong>0401 724 083</strong></a>
                    </li>
                    <li>
                      <a href="mailto:info@cotiqu.com.au">info@cotiqu.com.au</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <!--Column-->
            <div class="column col-xl-9 col-lg-12 col-md-12 col-sm-12 ft-footer" style="height: 100%;">
              <div class="footer-widget links-widget">
                <div class="widget-content">
                  <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <div class="row clearfix">
                        <div class="column col-lg-4 col-md-4 col-sm-12">
                          <div class="widget-title edit">
                            <h4>Links</h4>
                          </div>
                          <module type="menu" template="simple" id="footer_links" data-ul_class="links" name="footer_links"/>
                        </div>
                        <div class="column col-lg-8 col-md-4 col-sm-12">
                          <div class="widget-title edit">
                            <h4>Services</h4>
                          </div>
                          <module type="menu" template="simple" id="service_links" data-class="links" name="service_links"/>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="main-it-service-footer">
                <div class="it-service-footer edit" field="contiqu_service_footer_text" rel="global">
                  <h4>Independent IT services to the association industry.</h4>
                  <p>Specialists in<strong><a> Association Management Systems</a></strong></p>
                </div>
              </div>
              <div class="main-linkedin-icon edit" field="contiqu_footer_social_link" rel="global">
                <div class="linkedin-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"/></svg>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Footer Bottom -->
      <div class="footer-bottom">
        <div class="auto-container">
          <div class="inner main-copyright">
            <div class="copyright edit" field="contiqu_footer_copyright" rel="global">
              © 2022 <strong>COTIQU</strong> All rights reserved.
            </div>
          </div>

        </div>
      </div>
    </footer>
<?php endif; ?>

</div>

<button id="to-top" class="btn" style="display: block;"></button>

<?php include('footer_cart.php'); ?>


<script>
    mw.lib.require('slick');
</script>
<script>

    $(document).ready(function () {


        $('.navigation .menu .list.menu-root').collapseNav({
            responsive: 1,
            mobile_break: 992,
            more_text: '<?php _ejs("More"); ?>',
            li_class: 'has-sub-menu dropdown'
        });


        if ($(window).width() <= 991) {
            $('.navigation .menu .list.menu-root .has-sub-menu a.dropdown-toggle').attr('href', 'javascript:;');
            $('.navigation .menu .list.menu-root .has-sub-menu').on('click', function (e) {
                // e.preventDefault();
            })
        }
        var dropdownElementList = [].slice.call(document.querySelectorAll('.dropdown-toggle'))
        var dropdownList = dropdownElementList.map(function (dropdownToggleEl) {
            return new bootstrap.Dropdown(dropdownToggleEl)
        })
    });
</script>

<script src="<?php print template_url(); ?>assets/js/main.js"></script>
<!--
 -->
<!-- <script src="<?php print template_url(); ?>theme/assets/js/jquery.js"></script> -->
<script src="<?php print template_url(); ?>theme/assets/js/popper.min.js"></script>
<script src="<?php print template_url(); ?>theme/assets/js/bootstrap.min.js"></script>
<script src="<?php print template_url(); ?>theme/assets/js/jquery-ui.js"></script>
<script src="<?php print template_url(); ?>theme/assets/js/jquery.fancybox.js"></script>
<script src="<?php print template_url(); ?>theme/assets/js/owl.js"></script>
<script src="<?php print template_url(); ?>theme/assets/js/scrollbar.js"></script>
<script src="<?php print template_url(); ?>theme/assets/js/validate.js"></script>
<script src="<?php print template_url(); ?>theme/assets/js/appear.js"></script>
<script src="<?php print template_url(); ?>theme/assets/js/wow.js"></script>


<script src="<?php print template_url(); ?>theme/assets/js/custom-script.js"></script>
</body>
</html>
