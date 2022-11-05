<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Title -->
  <title>Item table</title>

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Favicon -->
  <link rel="shortcut icon" href="../../favicon.ico">

  <!-- Google Fonts -->
  <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="../../assets/vendor/font-awesome/css/fontawesome-all.min.css">
  <link rel="stylesheet" href="../../assets/vendor/animate.css/animate.min.css">
  <link rel="stylesheet" href="../../assets/vendor/hs-megamenu/src/hs.megamenu.css">
  <link rel="stylesheet" href="../../assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
  <link rel="stylesheet" href="../../assets/vendor/flatpickr/dist/flatpickr.min.css">
  <link rel="stylesheet" href="../../assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css">

  <!-- CSS Front Template -->
  <link rel="stylesheet" href="../../assets/css/theme.css">
  <link rel="stylesheet" href="../../assets/css/project.css">
</head>
<body class="u-custombox-no-scroll">

<?php include ('header.php');?>


  <!-- ========== MAIN ========== -->
  <main id="content" role="main">
    
    <!-- Breadcrumb Section >
    <div class="bg-light top"-->
    
      <div class="container space-0">
        <div class="row">
            <div class="col-12">

                <h2>RESPONSIVE ITEM TABLE</h2><hr>
            </div>
        </div>
        <div class="card">
          <div class="card-header py-4 px-0 mx-4">
            <!-- Activity Menu -->
            <div class="row justify-content-sm-between align-items-sm-center">
              <div class="col-md-5 col-lg-4 mb-2 mb-md-0">
                <!-- Datepicker -->
                <div id="datepickerWrapper" class="js-focus-state u-datepicker w-auto input-group input-group-sm">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <span class="fas fa-calendar"></span>
                    </span>
                  </div>
                  <input type="text" class="js-range-datepicker form-control bg-white rounded-right"
                         data-rp-wrapper="#datepickerWrapper"
                         data-rp-type="range"
                         data-rp-date-format="d M Y"
                         data-rp-default-date='["05 Jul 2018", "19 Jul 2018"]'
                         data-rp-is-disable-future-dates="true">
                </div>
                <!-- End Datepicker -->
              </div>

              <div class="col-md-6">
                <div class="d-flex">
                  <!-- Search -->
                  <div class="js-focus-state input-group input-group-sm">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="searchActivities">
                        <span class="fas fa-search"></span>
                      </span>
                    </div>
                    <input id="datatableSearch" type="email" class="form-control" placeholder="Search activities" aria-label="Search activities" aria-describedby="searchActivities">
                  </div>
                  <!-- End Search -->
                </div>
              </div>
            </div>
            <!-- End Activity Menu -->
          </div>
     

          <div class="card-body p-4">
            <!-- Activity Table -->
            <div class="table-responsive-md u-datatable">
              <table class="js-datatable table table-borderless u-datatable__striped u-datatable__content u-datatable__trigger mb-5"
                     data-dt-info="#datatableInfo"
                     data-dt-search="#datatableSearch"
                     data-dt-entries="#datatableEntries"
                     data-dt-page-length="12"
                     data-dt-is-responsive="false"
                     data-dt-is-show-paging="true"
                     data-dt-details-invoker=".js-datatabale-details"
                     data-dt-select-all-control="#invoiceToggleAllCheckbox"

                     data-dt-pagination="datatablePagination"
                     data-dt-pagination-classes="pagination mb-0"
                     data-dt-pagination-items-classes="page-item"
                     data-dt-pagination-links-classes="page-link"

                     data-dt-pagination-next-classes="page-item"
                     data-dt-pagination-next-link-classes="page-link"
                     data-dt-pagination-next-link-markup='<span aria-hidden="true">&raquo;</span>'

                     data-dt-pagination-prev-classes="page-item"
                     data-dt-pagination-prev-link-classes="page-link"
                     data-dt-pagination-prev-link-markup='<span aria-hidden="true">&laquo;</span>'>
                     <thead>
                      <tr class="text-uppercase font-size-1">
                        
                        <th scope="col" class="font-weight-medium">
                          <div class="d-flex justify-content-between align-items-center">
                            It.code
                            <div class="ml-2">
                              <span class="fas fa-angle-up u-datatable__thead-icon"></span>
                              <span class="fas fa-angle-down u-datatable__thead-icon"></span>
                            </div>
                          </div>
                        </th>
                        <th scope="col" class="font-weight-medium">
                          <div class="d-flex justify-content-between align-items-center">
                            Name
                            <div class="ml-2">
                              <span class="fas fa-angle-up u-datatable__thead-icon"></span>
                              <span class="fas fa-angle-down u-datatable__thead-icon"></span>
                            </div>
                          </div>
                        </th>
                        <th scope="col" class="font-weight-medium">
                          <div class="d-flex justify-content-between align-items-center">
                            Price
                            <div class="ml-2">
                              <span class="fas fa-angle-up u-datatable__thead-icon"></span>
                              <span class="fas fa-angle-down u-datatable__thead-icon"></span>
                            </div>
                          </div>
                        </th>
                        <th scope="col" class="font-weight-medium">
                          <div class="d-flex justify-content-between align-items-center">
                            Recieved Date
                            <div class="ml-2">
                              <span class="fas fa-angle-up u-datatable__thead-icon"></span>
                              <span class="fas fa-angle-down u-datatable__thead-icon"></span>
                            </div>
                          </div>
                        </th>
                        <th scope="col" class="font-weight-medium">
                          <div class="d-flex justify-content-between align-items-center">
                            Quantity
                            <div class="ml-2">
                              <span class="fas fa-angle-up u-datatable__thead-icon"></span>
                              <span class="fas fa-angle-down u-datatable__thead-icon"></span>
                            </div>
                          </div>
                        </th>
                        <th scope="col" class="font-weight-medium">
                          <div class="d-flex justify-content-between align-items-center">
                            Description
                            <div class="ml-2">
                              <span class="fas fa-angle-up u-datatable__thead-icon"></span>
                              <span class="fas fa-angle-down u-datatable__thead-icon"></span>
                            </div>
                          </div>
                        </th>
                        <th scope="col" class="font-weight-medium">
                          <div class="d-flex justify-content-between align-items-center">
                            Image
                            <div class="ml-2">
                              <span class="fas fa-angle-up u-datatable__thead-icon"></span>
                              <span class="fas fa-angle-down u-datatable__thead-icon"></span>
                            </div>
                          </div>
                        </th>
                        <th scope="col" class="font-weight-medium">
                          <div class="d-flex justify-content-between align-items-center">
                            Status
                            <div class="ml-2">
                              <span class="fas fa-angle-up u-datatable__thead-icon"></span>
                              <span class="fas fa-angle-down u-datatable__thead-icon"></span>
                            </div>
                          </div>
                        </th>
                        <th scope="col" class="font-weight-medium">
                          <div class="d-flex justify-content-between align-items-center">
                            Action
                            <div class="ml-2">
                              <span class="fas fa-angle-up u-datatable__thead-icon"></span>
                              <span class="fas fa-angle-down u-datatable__thead-icon"></span>
                            </div>
                          </div>
                        </th>
                      </tr>
                    </thead>
                <tbody class="font-size-1">
                   
                  
                </tbody>
              </table>
            </div>
            <!-- End Activity Table -->

            <!-- Pagination -->
            <div class="d-flex align-items-center">
              <nav id="datatablePagination" aria-label="Activity pagination"></nav>

              <small id="datatableInfo" class="text-secondary ml-auto"></small>
            </div>
            <!-- End Pagination -->
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
    <!-- End Content Section -->
  </main>
  <!-- ========== END MAIN ========== -->

  <?php include ('footer.php');?>


  <!-- Go to Top -->
  <a class="js-go-to u-go-to" href="#"
    data-position='{"bottom": 15, "right": 15 }'
    data-type="fixed"
    data-offset-top="400"
    data-compensation="#header"
    data-show-effect="slideInUp"
    data-hide-effect="slideOutDown">
    <span class="fas fa-arrow-up u-go-to__inner"></span>
  </a>
  <!-- End Go to Top -->

  <!-- JS Global Compulsory -->
  <script src="../../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../../assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
  <script src="../../assets/vendor/popper.js/dist/umd/popper.min.js"></script>
  <script src="../../assets/vendor/bootstrap/bootstrap.min.js"></script>

  <!-- JS Implementing Plugins -->
  <script src="../../assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
  <script src="../../assets/vendor/svg-injector/dist/svg-injector.min.js"></script>
  <script src="../../assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="../../assets/vendor/datatables/media/js/jquery.dataTables.min.js"></script>
  <script src="../../assets/vendor/flatpickr/dist/flatpickr.min.js"></script>
  <script src="../../assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>

  <!-- JS Front -->
  <script src="../../assets/js/hs.core.js"></script>
  <script src="../../assets/js/components/hs.header.js"></script>
  <script src="../../assets/js/components/hs.unfold.js"></script>
  <script src="../../assets/js/components/hs.malihu-scrollbar.js"></script>
  <script src="../../assets/js/components/hs.focus-state.js"></script>
  <script src="../../assets/js/components/hs.range-datepicker.js"></script>
  <script src="../../assets/js/components/hs.selectpicker.js"></script>
  <script src="../../assets/js/components/hs.datatables.js"></script>
  <script src="../../assets/js/components/hs.svg-injector.js"></script>
  <script src="../../assets/js/components/hs.go-to.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(window).on('load', function () {
      // initialization of HSMegaMenu component
      $('.js-mega-menu').HSMegaMenu({
        event: 'hover',
        pageContainer: $('.container'),
        breakpoint: 767.98,
        hideTimeOut: 0
      });

      // initialization of HSMegaMenu component
      $('.js-breadcrumb-menu').HSMegaMenu({
        event: 'hover',
        pageContainer: $('.container'),
        breakpoint: 991.98,
        hideTimeOut: 0
      });

      // initialization of svg injector module
      $.HSCore.components.HSSVGIngector.init('.js-svg-injector');
    });

    $(document).on('ready', function () {
      // initialization of header
      $.HSCore.components.HSHeader.init($('#header'));

      // initialization of unfold component
      $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
        afterOpen: function () {
          $(this).find('input[type="search"]').focus();
        }
      });

      // initialization of malihu scrollbar
      $.HSCore.components.HSMalihuScrollBar.init($('.js-scrollbar'));

      // initialization of forms
      $.HSCore.components.HSFocusState.init();

      // initialization of range datepicker
      $.HSCore.components.HSRangeDatepicker.init('.js-range-datepicker');

      // initialization of datatables
      $.HSCore.components.HSDatatables.init('.js-datatable');

      // initialization of select picker
      $.HSCore.components.HSSelectPicker.init('.js-select');

      // initialization of go to
      $.HSCore.components.HSGoTo.init('.js-go-to');
    });
  </script>
</body>
</html>