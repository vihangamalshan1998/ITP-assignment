<!DOCTYPE html>
<html lang="en">

<head>
    <title>Administrator | All Trip Details</title>
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
    <link rel="stylesheet" href="../../assets/vendor/summernote/dist/summernote-lite.css">
    <link rel="stylesheet" href="../../assets/vendor/bootstrap-tagsinput/css/bootstrap-tagsinput.css">
    <link rel="stylesheet" href="../../assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="../../assets/vendor/flatpickr/dist/flatpickr.min.css">

    <!-- CSS Front Template -->
    <link rel="stylesheet" href="../../assets/css/theme.css">
    <link rel="stylesheet" href="../../assets/css/myStyle.css">
</head>

<body>
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
                            data-rp-wrapper="#datepickerWrapper" data-rp-type="range" data-rp-date-format="d M Y"
                            data-rp-default-date='["05 Jul 2018", "19 Jul 2018"]'
                            data-rp-is-disable-future-dates="true">
                    </div>
                    <!-- End Datepicker -->
                </div>

                <div class="col-md-6">
                    <div class="d-flex">
                        <div class="mr-2">
                            <!-- Select -->
                            <select id="datatableEntries" class="js-select selectpicker dropdown-select"
                                data-width="fit" data-style="btn-soft-primary btn-sm">
                                <option value="6">6 entries</option>
                                <option value="12" selected>12 entries</option>
                                <option value="18">18 entries</option>
                                <option value="24">24 entries</option>
                            </select>
                            <!-- End Select -->
                        </div>

                        <!-- Search -->
                        <div class="js-focus-state input-group input-group-sm">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="searchActivities">
                                    <span class="fas fa-search"></span>
                                </span>
                            </div>
                            <input id="datatableSearch" type="email" class="form-control"
                                placeholder="Search activities" aria-label="Search activities"
                                aria-describedby="searchActivities">
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
                <table
                    class="js-datatable table table-borderless u-datatable__striped u-datatable__content u-datatable__trigger mb-5"
                    data-dt-info="#datatableInfo" data-dt-search="#datatableSearch" data-dt-entries="#datatableEntries"
                    data-dt-page-length="12" data-dt-is-responsive="false" data-dt-is-show-paging="true"
                    data-dt-details-invoker=".js-datatabale-details"
                    data-dt-select-all-control="#invoiceToggleAllCheckbox" data-dt-pagination="datatablePagination"
                    data-dt-pagination-classes="pagination mb-0" data-dt-pagination-items-classes="page-item"
                    data-dt-pagination-links-classes="page-link" data-dt-pagination-next-classes="page-item"
                    data-dt-pagination-next-link-classes="page-link"
                    data-dt-pagination-next-link-markup='<span aria-hidden="true">??</span>'
                    data-dt-pagination-prev-classes="page-item" data-dt-pagination-prev-link-classes="page-link"
                    data-dt-pagination-prev-link-markup='<span aria-hidden="true">??</span>'>
                    <thead>
                        <tr class="text-uppercase font-size-1">
                            <th scope="col">
                                <div class="custom-control custom-checkbox d-flex align-items-center">
                                    <input type="checkbox" class="custom-control-input" id="invoiceToggleAllCheckbox">
                                    <label class="custom-control-label" for="invoiceToggleAllCheckbox">
                                        <span class="text-hide">Checkbox</span>
                                    </label>
                                </div>
                            </th>
                            <th scope="col" class="font-weight-medium">
                                <div class="d-flex justify-content-between align-items-center">
                                    Order
                                    <div class="ml-2">
                                        <span class="fas fa-angle-up u-datatable__thead-icon"></span>
                                        <span class="fas fa-angle-down u-datatable__thead-icon"></span>
                                    </div>
                                </div>
                            </th>
                            <th scope="col" class="font-weight-medium">
                                <div class="d-flex justify-content-between align-items-center">
                                    Client
                                    <div class="ml-2">
                                        <span class="fas fa-angle-up u-datatable__thead-icon"></span>
                                        <span class="fas fa-angle-down u-datatable__thead-icon"></span>
                                    </div>
                                </div>
                            </th>
                            <th scope="col" class="font-weight-medium">
                                <div class="d-flex justify-content-between align-items-center">
                                    Amount
                                    <div class="ml-2">
                                        <span class="fas fa-angle-up u-datatable__thead-icon"></span>
                                        <span class="fas fa-angle-down u-datatable__thead-icon"></span>
                                    </div>
                                </div>
                            </th>
                            <th scope="col" class="font-weight-medium">
                                <div class="d-flex justify-content-between align-items-center">
                                    Date
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
                        </tr>
                    </thead>
                    <tbody class="font-size-1">
                        <tr class="js-datatabale-details" data-details='
            <div class="border rounded p-5">
              <h4 class="h3">Invoice</h4>

              <div class="row mb-6">
                <div class="col-3">
                  <span class="text-secondary">Date:</span>
                  <span class="font-weight-medium">05 May, 2018</span>
                </div>
                <div class="col-3">
                  <span class="text-secondary">Merchant:</span>
                  <span class="font-weight-medium">Spotify</span>
                </div>
                <div class="col-6">
                  <span class="text-secondary">Authorization code:</span>
                  <span class="font-weight-medium">128746739419</span>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <h5 class="text-dark font-size-1 text-uppercase">Billing address:</h5>
                  <address class="text-secondary">
                    <h6 class="h5 text-dark">Spotify</h6>
                    Flat 60, Ross Green, South Lilyberg, Q7M 8ZV
                  </address>
                </div>

                <div class="col-sm-6">
                  <h5 class="text-dark font-size-1 text-uppercase">Client info:</h5>
                  <ul class="list-unstyled mb-0">
                    <li class="mb-2">
                      <span class="text-secondary">First name:</span>
                      <span class="font-weight-medium">Natalie</span>
                    </li>
                    <li class="mb-2">
                      <span class="text-secondary">Last name:</span>
                      <span class="font-weight-medium">Curtis</span>
                    </li>
                    <li class="mb-2">
                      <span class="text-secondary">Country:</span>
                      <span class="font-weight-medium">England</span>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="row justify-content-end mb-4">
                <div class="col-sm-6">
                  <hr class="my-4">

                  <h5 class="text-dark font-size-1 text-uppercase">Transaction details:</h5>
                  <ul class="list-unstyled mb-0">
                    <li class="d-flex justify-content-between align-items-center mb-2">
                      <span class="text-secondary">Transaction amount</span>
                      <span class="font-weight-medium">$9.00</span>
                    </li>
                    <li class="d-flex justify-content-between align-items-center mb-2">
                      <span class="text-secondary">Fee</span>
                      <span class="font-weight-medium">$0.50</span>
                    </li>
                    <li class="d-flex justify-content-between align-items-center mb-2">
                      <span class="text-secondary">Total amount</span>
                      <span class="text-primary font-weight-medium">$9.37</span>
                    </li>
                  </ul>
                </div>
              </div>

              <ul class="list-inline mb-0">
                <li class="list-inline-item u-ver-divider pr-3 mr-3">
                  <a href="#">
                    <span class="fas fa-file-word text-secondary mr-1"></span>
                    Download invoice
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <span class="fas fa-print text-secondary mr-1"></span>
                    Print details
                  </a>
                </li>
              </ul>
            </div>'>
                            <td class="align-middle">
                                <div class="custom-control custom-checkbox d-flex align-items-center">
                                    <input type="checkbox" class="custom-control-input" id="invoiceCheckbox01">
                                    <label class="custom-control-label" for="invoiceCheckbox01">
                                        <span class="text-hide">Checkbox</span>
                                    </label>
                                </div>
                            </td>
                            <td class="align-middle text-secondary font-weight-normal u-datatable__trigger-icon">FR001
                            </td>
                            <td class="align-middle">
                                <div class="media align-items-center">
                                    <span class="btn btn-sm btn-icon btn-soft-success rounded-circle mr-2">
                                        <span class="btn-icon__inner font-weight-medium">S</span>
                                    </span>
                                    <span>Spotify</span>
                                </div>
                            </td>
                            <td class="align-middle text-primary">$9.00</td>
                            <td class="align-middle text-secondary">05 May</td>
                            <td class="align-middle text-danger">Rejected</td>
                        </tr>

                        <tr class="js-datatabale-details" data-details='
            <div class="border rounded p-5">
              <h4 class="h3">Invoice</h4>

              <div class="row mb-6">
                <div class="col-3">
                  <span class="text-secondary">Date:</span>
                  <span class="font-weight-medium">12 May, 2018</span>
                </div>
                <div class="col-3">
                  <span class="text-secondary">Merchant:</span>
                  <span class="font-weight-medium">Dropbox</span>
                </div>
                <div class="col-6">
                  <span class="text-secondary">Authorization code:</span>
                  <span class="font-weight-medium">901274182319</span>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <h5 class="text-dark font-size-1 text-uppercase">Billing address:</h5>
                  <address class="text-secondary">
                    <h6 class="h5 text-dark">Dropbox</h6>
                    Flat 60, Ross Green, South Lilyberg, Q7M 8ZV
                  </address>
                </div>

                <div class="col-sm-6">
                  <h5 class="text-dark font-size-1 text-uppercase">Client info:</h5>
                  <ul class="list-unstyled mb-0">
                    <li class="mb-2">
                      <span class="text-secondary">First name:</span>
                      <span class="font-weight-medium">Natalie</span>
                    </li>
                    <li class="mb-2">
                      <span class="text-secondary">Last name:</span>
                      <span class="font-weight-medium">Curtis</span>
                    </li>
                    <li class="mb-2">
                      <span class="text-secondary">Country:</span>
                      <span class="font-weight-medium">England</span>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="row justify-content-end mb-4">
                <div class="col-sm-6">
                  <hr class="my-4">

                  <h5 class="text-dark font-size-1 text-uppercase">Transaction details:</h5>
                  <ul class="list-unstyled mb-0">
                    <li class="d-flex justify-content-between align-items-center mb-2">
                      <span class="text-secondary">Transaction amount</span>
                      <span class="font-weight-medium">$257.93</span>
                    </li>
                    <li class="d-flex justify-content-between align-items-center mb-2">
                      <span class="text-secondary">Fee</span>
                      <span class="font-weight-medium">$0.50</span>
                    </li>
                    <li class="d-flex justify-content-between align-items-center mb-2">
                      <span class="text-secondary">Total amount</span>
                      <span class="text-primary font-weight-medium">$257.43</span>
                    </li>
                  </ul>
                </div>
              </div>

              <ul class="list-inline mb-0">
                <li class="list-inline-item u-ver-divider pr-3 mr-3">
                  <a href="#">
                    <span class="fas fa-file-word text-secondary mr-1"></span>
                    Download invoice
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <span class="fas fa-print text-secondary mr-1"></span>
                    Print details
                  </a>
                </li>
              </ul>
            </div>'>
                            <td class="align-middle">
                                <div class="custom-control custom-checkbox d-flex align-items-center">
                                    <input type="checkbox" class="custom-control-input" id="invoiceCheckbox02">
                                    <label class="custom-control-label" for="invoiceCheckbox02">
                                        <span class="text-hide">Checkbox</span>
                                    </label>
                                </div>
                            </td>
                            <td class="align-middle text-secondary font-weight-normal u-datatable__trigger-icon">FR002
                            </td>
                            <td class="align-middle">
                                <div class="media align-items-center">
                                    <span class="btn btn-sm btn-icon btn-soft-primary rounded-circle mr-2">
                                        <span class="btn-icon__inner font-weight-medium">D</span>
                                    </span>
                                    <span>Dropbox</span>
                                </div>
                            </td>
                            <td class="align-middle text-primary">$257.93</td>
                            <td class="align-middle text-secondary">12 May</td>
                            <td class="align-middle text-success">Completed</td>
                        </tr>

                        <tr class="js-datatabale-details" data-details='
            <div class="border rounded p-5">
              <h4 class="h3">Invoice</h4>

              <div class="row mb-6">
                <div class="col-3">
                  <span class="text-secondary">Date:</span>
                  <span class="font-weight-medium">15 May, 2018</span>
                </div>
                <div class="col-3">
                  <span class="text-secondary">Merchant:</span>
                  <span class="font-weight-medium">Google</span>
                </div>
                <div class="col-6">
                  <span class="text-secondary">Authorization code:</span>
                  <span class="font-weight-medium">9241291229</span>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <h5 class="text-dark font-size-1 text-uppercase">Billing address:</h5>
                  <address class="text-secondary">
                    <h6 class="h5 text-dark">Google</h6>
                    Flat 60, Ross Green, South Lilyberg, Q7M 8ZV
                  </address>
                </div>

                <div class="col-sm-6">
                  <h5 class="text-dark font-size-1 text-uppercase">Client info:</h5>
                  <ul class="list-unstyled mb-0">
                    <li class="mb-2">
                      <span class="text-secondary">First name:</span>
                      <span class="font-weight-medium">Natalie</span>
                    </li>
                    <li class="mb-2">
                      <span class="text-secondary">Last name:</span>
                      <span class="font-weight-medium">Curtis</span>
                    </li>
                    <li class="mb-2">
                      <span class="text-secondary">Country:</span>
                      <span class="font-weight-medium">England</span>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="row justify-content-end mb-4">
                <div class="col-sm-6">
                  <hr class="my-4">

                  <h5 class="text-dark font-size-1 text-uppercase">Transaction details:</h5>
                  <ul class="list-unstyled mb-0">
                    <li class="d-flex justify-content-between align-items-center mb-2">
                      <span class="text-secondary">Transaction amount</span>
                      <span class="font-weight-medium">441.49 USD</span>
                    </li>
                    <li class="d-flex justify-content-between align-items-center mb-2">
                      <span class="text-secondary">Fee</span>
                      <span class="font-weight-medium">$0.50</span>
                    </li>
                    <li class="d-flex justify-content-between align-items-center mb-2">
                      <span class="text-secondary">Total amount</span>
                      <span class="text-primary font-weight-medium">441.99 USD</span>
                    </li>
                  </ul>
                </div>
              </div>

              <ul class="list-inline mb-0">
                <li class="list-inline-item u-ver-divider pr-3 mr-3">
                  <a href="#">
                    <span class="fas fa-file-word text-secondary mr-1"></span>
                    Download invoice
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <span class="fas fa-print text-secondary mr-1"></span>
                    Print details
                  </a>
                </li>
              </ul>
            </div>'>
                            <td class="align-middle">
                                <div class="custom-control custom-checkbox d-flex align-items-center">
                                    <input type="checkbox" class="custom-control-input" id="invoiceCheckbox03">
                                    <label class="custom-control-label" for="invoiceCheckbox03">
                                        <span class="text-hide">Checkbox</span>
                                    </label>
                                </div>
                            </td>
                            <td class="align-middle text-secondary font-weight-normal u-datatable__trigger-icon">FR003
                            </td>
                            <td class="align-middle">
                                <div class="media align-items-center">
                                    <span class="btn btn-sm btn-icon btn-soft-danger rounded-circle mr-2">
                                        <span class="btn-icon__inner font-weight-medium">G</span>
                                    </span>
                                    <span>Google</span>
                                </div>
                            </td>
                            <td class="align-middle text-primary">$441.99</td>
                            <td class="align-middle text-secondary">15 May</td>
                            <td class="align-middle text-success">Completed</td>
                        </tr>

                        <tr class="js-datatabale-details" data-details='
            <div class="border rounded p-5">
              <h4 class="h3">Invoice</h4>

              <div class="row mb-6">
                <div class="col-3">
                  <span class="text-secondary">Date:</span>
                  <span class="font-weight-medium">01 Jun, 2018</span>
                </div>
                <div class="col-3">
                  <span class="text-secondary">Merchant:</span>
                  <span class="font-weight-medium">FrontApp</span>
                </div>
                <div class="col-6">
                  <span class="text-secondary">Authorization code:</span>
                  <span class="font-weight-medium">4191239108931</span>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <h5 class="text-dark font-size-1 text-uppercase">Billing address:</h5>
                  <address class="text-secondary">
                    <h6 class="h5 text-dark">FrontApp</h6>
                    Flat 60, Ross Green, South Lilyberg, Q7M 8ZV
                  </address>
                </div>

                <div class="col-sm-6">
                  <h5 class="text-dark font-size-1 text-uppercase">Client info:</h5>
                  <ul class="list-unstyled mb-0">
                    <li class="mb-2">
                      <span class="text-secondary">First name:</span>
                      <span class="font-weight-medium">Natalie</span>
                    </li>
                    <li class="mb-2">
                      <span class="text-secondary">Last name:</span>
                      <span class="font-weight-medium">Curtis</span>
                    </li>
                    <li class="mb-2">
                      <span class="text-secondary">Country:</span>
                      <span class="font-weight-medium">England</span>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="row justify-content-end mb-4">
                <div class="col-sm-6">
                  <hr class="my-4">

                  <h5 class="text-dark font-size-1 text-uppercase">Transaction details:</h5>
                  <ul class="list-unstyled mb-0">
                    <li class="d-flex justify-content-between align-items-center mb-2">
                      <span class="text-secondary">Transaction amount</span>
                      <span class="font-weight-medium">98.50 USD</span>
                    </li>
                    <li class="d-flex justify-content-between align-items-center mb-2">
                      <span class="text-secondary">Fee</span>
                      <span class="font-weight-medium">$0.50</span>
                    </li>
                    <li class="d-flex justify-content-between align-items-center mb-2">
                      <span class="text-secondary">Total amount</span>
                      <span class="text-primary font-weight-medium">99.00 USD</span>
                    </li>
                  </ul>
                </div>
              </div>

              <ul class="list-inline mb-0">
                <li class="list-inline-item u-ver-divider pr-3 mr-3">
                  <a href="#">
                    <span class="fas fa-file-word text-secondary mr-1"></span>
                    Download invoice
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <span class="fas fa-print text-secondary mr-1"></span>
                    Print details
                  </a>
                </li>
              </ul>
            </div>'>
                            <td class="align-middle">
                                <div class="custom-control custom-checkbox d-flex align-items-center">
                                    <input type="checkbox" class="custom-control-input" id="invoiceCheckbox04">
                                    <label class="custom-control-label" for="invoiceCheckbox04">
                                        <span class="text-hide">Checkbox</span>
                                    </label>
                                </div>
                            </td>
                            <td class="align-middle text-secondary font-weight-normal u-datatable__trigger-icon">FR004
                            </td>
                            <td class="align-middle">
                                <div class="media align-items-center">
                                    <span class="btn btn-sm btn-icon btn-soft-primary rounded-circle mr-2">
                                        <span class="btn-icon__inner font-weight-medium">F</span>
                                    </span>
                                    <span>FrontApp</span>
                                </div>
                            </td>
                            <td class="align-middle text-primary">$99.00</td>
                            <td class="align-middle text-secondary">01 Jun</td>
                            <td class="align-middle text-warning">Pending</td>
                        </tr>

                        <tr class="js-datatabale-details" data-details='
            <div class="border rounded p-5">
              <h4 class="h3">Invoice</h4>

              <div class="row mb-6">
                <div class="col-3">
                  <span class="text-secondary">Date:</span>
                  <span class="font-weight-medium">02 Jun, 2018</span>
                </div>
                <div class="col-3">
                  <span class="text-secondary">Merchant:</span>
                  <span class="font-weight-medium">Slack</span>
                </div>
                <div class="col-6">
                  <span class="text-secondary">Authorization code:</span>
                  <span class="font-weight-medium">12901372109401</span>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <h5 class="text-dark font-size-1 text-uppercase">Billing address:</h5>
                  <address class="text-secondary">
                    <h6 class="h5 text-dark">Slack</h6>
                    Flat 60, Ross Green, South Lilyberg, Q7M 8ZV
                  </address>
                </div>

                <div class="col-sm-6">
                  <h5 class="text-dark font-size-1 text-uppercase">Client info:</h5>
                  <ul class="list-unstyled mb-0">
                    <li class="mb-2">
                      <span class="text-secondary">First name:</span>
                      <span class="font-weight-medium">Natalie</span>
                    </li>
                    <li class="mb-2">
                      <span class="text-secondary">Last name:</span>
                      <span class="font-weight-medium">Curtis</span>
                    </li>
                    <li class="mb-2">
                      <span class="text-secondary">Country:</span>
                      <span class="font-weight-medium">England</span>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="row justify-content-end mb-4">
                <div class="col-sm-6">
                  <hr class="my-4">

                  <h5 class="text-dark font-size-1 text-uppercase">Transaction details:</h5>
                  <ul class="list-unstyled mb-0">
                    <li class="d-flex justify-content-between align-items-center mb-2">
                      <span class="text-secondary">Transaction amount</span>
                      <span class="font-weight-medium">14.39 USD</span>
                    </li>
                    <li class="d-flex justify-content-between align-items-center mb-2">
                      <span class="text-secondary">Fee</span>
                      <span class="font-weight-medium">$0.50</span>
                    </li>
                    <li class="d-flex justify-content-between align-items-center mb-2">
                      <span class="text-secondary">Total amount</span>
                      <span class="text-primary font-weight-medium">14.89 USD</span>
                    </li>
                  </ul>
                </div>
              </div>

              <ul class="list-inline mb-0">
                <li class="list-inline-item u-ver-divider pr-3 mr-3">
                  <a href="#">
                    <span class="fas fa-file-word text-secondary mr-1"></span>
                    Download invoice
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <span class="fas fa-print text-secondary mr-1"></span>
                    Print details
                  </a>
                </li>
              </ul>
            </div>'>
                            <td class="align-middle">
                                <div class="custom-control custom-checkbox d-flex align-items-center">
                                    <input type="checkbox" class="custom-control-input" id="invoiceCheckbox05">
                                    <label class="custom-control-label" for="invoiceCheckbox05">
                                        <span class="text-hide">Checkbox</span>
                                    </label>
                                </div>
                            </td>
                            <td class="align-middle text-secondary font-weight-normal u-datatable__trigger-icon">FR005
                            </td>
                            <td class="align-middle">
                                <div class="media align-items-center">
                                    <span class="btn btn-sm btn-icon btn-soft-warning rounded-circle mr-2">
                                        <span class="btn-icon__inner font-weight-medium">S</span>
                                    </span>
                                    <span>Slack</span>
                                </div>
                            </td>
                            <td class="align-middle text-primary">$14.89</td>
                            <td class="align-middle text-secondary">02 Jun</td>
                            <td class="align-middle text-danger">Rejected</td>
                        </tr>

                        <tr class="js-datatabale-details" data-details='
            <div class="border rounded p-5">
              <h4 class="h3">Invoice</h4>

              <div class="row mb-6">
                <div class="col-3">
                  <span class="text-secondary">Date:</span>
                  <span class="font-weight-medium">05 Jun, 2018</span>
                </div>
                <div class="col-3">
                  <span class="text-secondary">Merchant:</span>
                  <span class="font-weight-medium">Spotify</span>
                </div>
                <div class="col-6">
                  <span class="text-secondary">Authorization code:</span>
                  <span class="font-weight-medium">8723903814282</span>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <h5 class="text-dark font-size-1 text-uppercase">Billing address:</h5>
                  <address class="text-secondary">
                    <h6 class="h5 text-dark">Spotify</h6>
                    Flat 60, Ross Green, South Lilyberg, Q7M 8ZV
                  </address>
                </div>

                <div class="col-sm-6">
                  <h5 class="text-dark font-size-1 text-uppercase">Client info:</h5>
                  <ul class="list-unstyled mb-0">
                    <li class="mb-2">
                      <span class="text-secondary">First name:</span>
                      <span class="font-weight-medium">Natalie</span>
                    </li>
                    <li class="mb-2">
                      <span class="text-secondary">Last name:</span>
                      <span class="font-weight-medium">Curtis</span>
                    </li>
                    <li class="mb-2">
                      <span class="text-secondary">Country:</span>
                      <span class="font-weight-medium">England</span>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="row justify-content-end mb-4">
                <div class="col-sm-6">
                  <hr class="my-4">

                  <h5 class="text-dark font-size-1 text-uppercase">Transaction details:</h5>
                  <ul class="list-unstyled mb-0">
                    <li class="d-flex justify-content-between align-items-center mb-2">
                      <span class="text-secondary">Transaction amount</span>
                      <span class="font-weight-medium">8.50 USD</span>
                    </li>
                    <li class="d-flex justify-content-between align-items-center mb-2">
                      <span class="text-secondary">Fee</span>
                      <span class="font-weight-medium">$0.50</span>
                    </li>
                    <li class="d-flex justify-content-between align-items-center mb-2">
                      <span class="text-secondary">Total amount</span>
                      <span class="text-primary font-weight-medium">9.00 USD</span>
                    </li>
                  </ul>
                </div>
              </div>

              <ul class="list-inline mb-0">
                <li class="list-inline-item u-ver-divider pr-3 mr-3">
                  <a href="#">
                    <span class="fas fa-file-word text-secondary mr-1"></span>
                    Download invoice
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <span class="fas fa-print text-secondary mr-1"></span>
                    Print details
                  </a>
                </li>
              </ul>
            </div>'>
                            <td class="align-middle">
                                <div class="custom-control custom-checkbox d-flex align-items-center">
                                    <input type="checkbox" class="custom-control-input" id="invoiceCheckbox06">
                                    <label class="custom-control-label" for="invoiceCheckbox06">
                                        <span class="text-hide">Checkbox</span>
                                    </label>
                                </div>
                            </td>
                            <td class="align-middle text-secondary font-weight-normal u-datatable__trigger-icon">FR006
                            </td>
                            <td class="align-middle">
                                <div class="media align-items-center">
                                    <span class="btn btn-sm btn-icon btn-soft-success rounded-circle mr-2">
                                        <span class="btn-icon__inner font-weight-medium">D</span>
                                    </span>
                                    <span>Spotify</span>
                                </div>
                            </td>
                            <td class="align-middle text-primary">$9.00</td>
                            <td class="align-middle text-secondary">05 Jun</td>
                            <td class="align-middle text-success">Completed</td>
                        </tr>

                        <tr class="js-datatabale-details" data-details='
            <div class="border rounded p-5">
              <h4 class="h3">Invoice</h4>

              <div class="row mb-6">
                <div class="col-3">
                  <span class="text-secondary">Date:</span>
                  <span class="font-weight-medium">15 Jun, 2018</span>
                </div>
                <div class="col-3">
                  <span class="text-secondary">Merchant:</span>
                  <span class="font-weight-medium">Htmlstream</span>
                </div>
                <div class="col-6">
                  <span class="text-secondary">Authorization code:</span>
                  <span class="font-weight-medium">3641438346</span>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <h5 class="text-dark font-size-1 text-uppercase">Billing address:</h5>
                  <address class="text-secondary">
                    <h6 class="h5 text-dark">Htmlstream</h6>
                    Flat 60, Ross Green, South Lilyberg, Q7M 8ZV
                  </address>
                </div>

                <div class="col-sm-6">
                  <h5 class="text-dark font-size-1 text-uppercase">Client info:</h5>
                  <ul class="list-unstyled mb-0">
                    <li class="mb-2">
                      <span class="text-secondary">First name:</span>
                      <span class="font-weight-medium">Natalie</span>
                    </li>
                    <li class="mb-2">
                      <span class="text-secondary">Last name:</span>
                      <span class="font-weight-medium">Curtis</span>
                    </li>
                    <li class="mb-2">
                      <span class="text-secondary">Country:</span>
                      <span class="font-weight-medium">England</span>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="row justify-content-end mb-4">
                <div class="col-sm-6">
                  <hr class="my-4">

                  <h5 class="text-dark font-size-1 text-uppercase">Transaction details:</h5>
                  <ul class="list-unstyled mb-0">
                    <li class="d-flex justify-content-between align-items-center mb-2">
                      <span class="text-secondary">Transaction amount</span>
                      <span class="font-weight-medium">1,578.50 USD</span>
                    </li>
                    <li class="d-flex justify-content-between align-items-center mb-2">
                      <span class="text-secondary">Fee</span>
                      <span class="font-weight-medium">$0.50</span>
                    </li>
                    <li class="d-flex justify-content-between align-items-center mb-2">
                      <span class="text-secondary">Total amount</span>
                      <span class="text-primary font-weight-medium">1,579.00 USD</span>
                    </li>
                  </ul>
                </div>
              </div>

              <ul class="list-inline mb-0">
                <li class="list-inline-item u-ver-divider pr-3 mr-3">
                  <a href="#">
                    <span class="fas fa-file-word text-secondary mr-1"></span>
                    Download invoice
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <span class="fas fa-print text-secondary mr-1"></span>
                    Print details
                  </a>
                </li>
              </ul>
            </div>'>
                            <td class="align-middle">
                                <div class="custom-control custom-checkbox d-flex align-items-center">
                                    <input type="checkbox" class="custom-control-input" id="invoiceCheckbox07">
                                    <label class="custom-control-label" for="invoiceCheckbox07">
                                        <span class="text-hide">Checkbox</span>
                                    </label>
                                </div>
                            </td>
                            <td class="align-middle text-secondary font-weight-normal u-datatable__trigger-icon">FR007
                            </td>
                            <td class="align-middle">
                                <div class="media align-items-center">
                                    <span class="btn btn-sm btn-icon btn-soft-dark rounded-circle mr-2">
                                        <span class="btn-icon__inner font-weight-medium">H</span>
                                    </span>
                                    <span>Htmlstream</span>
                                </div>
                            </td>
                            <td class="align-middle text-primary">$1,579.99</td>
                            <td class="align-middle text-secondary">15 Jun</td>
                            <td class="align-middle text-success">Completed</td>
                        </tr>

                        <tr class="js-datatabale-details" data-details='
            <div class="border rounded p-5">
              <h4 class="h3">Invoice</h4>

              <div class="row mb-6">
                <div class="col-3">
                  <span class="text-secondary">Date:</span>
                  <span class="font-weight-medium">16 Apr, 2018</span>
                </div>
                <div class="col-3">
                  <span class="text-secondary">Merchant:</span>
                  <span class="font-weight-medium">Spotify</span>
                </div>
                <div class="col-6">
                  <span class="text-secondary">Authorization code:</span>
                  <span class="font-weight-medium">56190247092853</span>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <h5 class="text-dark font-size-1 text-uppercase">Billing address:</h5>
                  <address class="text-secondary">
                    <h6 class="h5 text-dark">Spotify</h6>
                    Flat 60, Ross Green, South Lilyberg, Q7M 8ZV
                  </address>
                </div>

                <div class="col-sm-6">
                  <h5 class="text-dark font-size-1 text-uppercase">Client info:</h5>
                  <ul class="list-unstyled mb-0">
                    <li class="mb-2">
                      <span class="text-secondary">First name:</span>
                      <span class="font-weight-medium">Natalie</span>
                    </li>
                    <li class="mb-2">
                      <span class="text-secondary">Last name:</span>
                      <span class="font-weight-medium">Curtis</span>
                    </li>
                    <li class="mb-2">
                      <span class="text-secondary">Country:</span>
                      <span class="font-weight-medium">England</span>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="row justify-content-end mb-4">
                <div class="col-sm-6">
                  <hr class="my-4">

                  <h5 class="text-dark font-size-1 text-uppercase">Transaction details:</h5>
                  <ul class="list-unstyled mb-0">
                    <li class="d-flex justify-content-between align-items-center mb-2">
                      <span class="text-secondary">Transaction amount</span>
                      <span class="font-weight-medium">235.35 USD</span>
                    </li>
                    <li class="d-flex justify-content-between align-items-center mb-2">
                      <span class="text-secondary">Fee</span>
                      <span class="font-weight-medium">$0.50</span>
                    </li>
                    <li class="d-flex justify-content-between align-items-center mb-2">
                      <span class="text-secondary">Total amount</span>
                      <span class="text-primary font-weight-medium">235.85 USD</span>
                    </li>
                  </ul>
                </div>
              </div>

              <ul class="list-inline mb-0">
                <li class="list-inline-item u-ver-divider pr-3 mr-3">
                  <a href="#">
                    <span class="fas fa-file-word text-secondary mr-1"></span>
                    Download invoice
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <span class="fas fa-print text-secondary mr-1"></span>
                    Print details
                  </a>
                </li>
              </ul>
            </div>'>
                            <td class="align-middle">
                                <div class="custom-control custom-checkbox d-flex align-items-center">
                                    <input type="checkbox" class="custom-control-input" id="invoiceCheckbox08">
                                    <label class="custom-control-label" for="invoiceCheckbox08">
                                        <span class="text-hide">Checkbox</span>
                                    </label>
                                </div>
                            </td>
                            <td class="align-middle text-secondary font-weight-normal u-datatable__trigger-icon">FR008
                            </td>
                            <td class="align-middle">
                                <div class="media align-items-center">
                                    <span class="btn btn-sm btn-icon btn-soft-dark rounded-circle mr-2">
                                        <span class="btn-icon__inner font-weight-medium">G</span>
                                    </span>
                                    <span>GitHub</span>
                                </div>
                            </td>
                            <td class="align-middle text-primary">$235.85</td>
                            <td class="align-middle text-secondary">16 Apr</td>
                            <td class="align-middle text-danger">Rejected</td>
                        </tr>

                        <tr class="js-datatabale-details" data-details='
            <div class="border rounded p-5">
              <h4 class="h3">Invoice</h4>

              <div class="row mb-6">
                <div class="col-3">
                  <span class="text-secondary">Date:</span>
                  <span class="font-weight-medium">12 Apr, 2018</span>
                </div>
                <div class="col-3">
                  <span class="text-secondary">Merchant:</span>
                  <span class="font-weight-medium">Dropbox</span>
                </div>
                <div class="col-6">
                  <span class="text-secondary">Authorization code:</span>
                  <span class="font-weight-medium">6172692721903</span>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <h5 class="text-dark font-size-1 text-uppercase">Billing address:</h5>
                  <address class="text-secondary">
                    <h6 class="h5 text-dark">Dropbox</h6>
                    Flat 60, Ross Green, South Lilyberg, Q7M 8ZV
                  </address>
                </div>

                <div class="col-sm-6">
                  <h5 class="text-dark font-size-1 text-uppercase">Client info:</h5>
                  <ul class="list-unstyled mb-0">
                    <li class="mb-2">
                      <span class="text-secondary">First name:</span>
                      <span class="font-weight-medium">Natalie</span>
                    </li>
                    <li class="mb-2">
                      <span class="text-secondary">Last name:</span>
                      <span class="font-weight-medium">Curtis</span>
                    </li>
                    <li class="mb-2">
                      <span class="text-secondary">Country:</span>
                      <span class="font-weight-medium">England</span>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="row justify-content-end mb-4">
                <div class="col-sm-6">
                  <hr class="my-4">

                  <h5 class="text-dark font-size-1 text-uppercase">Transaction details:</h5>
                  <ul class="list-unstyled mb-0">
                    <li class="d-flex justify-content-between align-items-center mb-2">
                      <span class="text-secondary">Transaction amount</span>
                      <span class="font-weight-medium">11.81 USD</span>
                    </li>
                    <li class="d-flex justify-content-between align-items-center mb-2">
                      <span class="text-secondary">Fee</span>
                      <span class="font-weight-medium">$0.50</span>
                    </li>
                    <li class="d-flex justify-content-between align-items-center mb-2">
                      <span class="text-secondary">Total amount</span>
                      <span class="text-primary font-weight-medium">12.31 USD</span>
                    </li>
                  </ul>
                </div>
              </div>

              <ul class="list-inline mb-0">
                <li class="list-inline-item u-ver-divider pr-3 mr-3">
                  <a href="#">
                    <span class="fas fa-file-word text-secondary mr-1"></span>
                    Download invoice
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <span class="fas fa-print text-secondary mr-1"></span>
                    Print details
                  </a>
                </li>
              </ul>
            </div>'>
                            <td class="align-middle">
                                <div class="custom-control custom-checkbox d-flex align-items-center">
                                    <input type="checkbox" class="custom-control-input" id="invoiceCheckbox09">
                                    <label class="custom-control-label" for="invoiceCheckbox09">
                                        <span class="text-hide">Checkbox</span>
                                    </label>
                                </div>
                            </td>
                            <td class="align-middle text-secondary font-weight-normal u-datatable__trigger-icon">FR009
                            </td>
                            <td class="align-middle">
                                <div class="media align-items-center">
                                    <span class="btn btn-sm btn-icon btn-soft-primary rounded-circle mr-2">
                                        <span class="btn-icon__inner font-weight-medium">D</span>
                                    </span>
                                    <span>Dropbox</span>
                                </div>
                            </td>
                            <td class="align-middle text-primary">$12.31</td>
                            <td class="align-middle text-secondary">12 Apr</td>
                            <td class="align-middle text-success">Completed</td>
                        </tr>

                        <tr class="js-datatabale-details" data-details='
            <div class="border rounded p-5">
              <h4 class="h3">Invoice</h4>

              <div class="row mb-6">
                <div class="col-3">
                  <span class="text-secondary">Date:</span>
                  <span class="font-weight-medium">29 Apr, 2018</span>
                </div>
                <div class="col-3">
                  <span class="text-secondary">Merchant:</span>
                  <span class="font-weight-medium">Google</span>
                </div>
                <div class="col-6">
                  <span class="text-secondary">Authorization code:</span>
                  <span class="font-weight-medium">4125235412412</span>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <h5 class="text-dark font-size-1 text-uppercase">Billing address:</h5>
                  <address class="text-secondary">
                    <h6 class="h5 text-dark">Google</h6>
                    Flat 60, Ross Green, South Lilyberg, Q7M 8ZV
                  </address>
                </div>

                <div class="col-sm-6">
                  <h5 class="text-dark font-size-1 text-uppercase">Client info:</h5>
                  <ul class="list-unstyled mb-0">
                    <li class="mb-2">
                      <span class="text-secondary">First name:</span>
                      <span class="font-weight-medium">Natalie</span>
                    </li>
                    <li class="mb-2">
                      <span class="text-secondary">Last name:</span>
                      <span class="font-weight-medium">Curtis</span>
                    </li>
                    <li class="mb-2">
                      <span class="text-secondary">Country:</span>
                      <span class="font-weight-medium">England</span>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="row justify-content-end mb-4">
                <div class="col-sm-6">
                  <hr class="my-4">

                  <h5 class="text-dark font-size-1 text-uppercase">Transaction details:</h5>
                  <ul class="list-unstyled mb-0">
                    <li class="d-flex justify-content-between align-items-center mb-2">
                      <span class="text-secondary">Transaction amount</span>
                      <span class="font-weight-medium">890.50 USD</span>
                    </li>
                    <li class="d-flex justify-content-between align-items-center mb-2">
                      <span class="text-secondary">Fee</span>
                      <span class="font-weight-medium">$0.50</span>
                    </li>
                    <li class="d-flex justify-content-between align-items-center mb-2">
                      <span class="text-secondary">Total amount</span>
                      <span class="text-primary font-weight-medium">891.00 USD</span>
                    </li>
                  </ul>
                </div>
              </div>

              <ul class="list-inline mb-0">
                <li class="list-inline-item u-ver-divider pr-3 mr-3">
                  <a href="#">
                    <span class="fas fa-file-word text-secondary mr-1"></span>
                    Download invoice
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <span class="fas fa-print text-secondary mr-1"></span>
                    Print details
                  </a>
                </li>
              </ul>
            </div>'>
                            <td class="align-middle">
                                <div class="custom-control custom-checkbox d-flex align-items-center">
                                    <input type="checkbox" class="custom-control-input" id="invoiceCheckbox10">
                                    <label class="custom-control-label" for="invoiceCheckbox10">
                                        <span class="text-hide">Checkbox</span>
                                    </label>
                                </div>
                            </td>
                            <td class="align-middle text-secondary font-weight-normal u-datatable__trigger-icon">FR0010
                            </td>
                            <td class="align-middle">
                                <div class="media align-items-center">
                                    <span class="btn btn-sm btn-icon btn-soft-danger rounded-circle mr-2">
                                        <span class="btn-icon__inner font-weight-medium">G</span>
                                    </span>
                                    <span>Google</span>
                                </div>
                            </td>
                            <td class="align-middle text-primary">$891.00</td>
                            <td class="align-middle text-secondary">29 Apr</td>
                            <td class="align-middle text-success">Completed</td>
                        </tr>

                        <tr class="js-datatabale-details" data-details='
            <div class="border rounded p-5">
              <h4 class="h3">Invoice</h4>

              <div class="row mb-6">
                <div class="col-3">
                  <span class="text-secondary">Date:</span>
                  <span class="font-weight-medium">30 Apr, 2018</span>
                </div>
                <div class="col-3">
                  <span class="text-secondary">Merchant:</span>
                  <span class="font-weight-medium">Atlassian</span>
                </div>
                <div class="col-6">
                  <span class="text-secondary">Authorization code:</span>
                  <span class="font-weight-medium">1241262182092</span>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <h5 class="text-dark font-size-1 text-uppercase">Billing address:</h5>
                  <address class="text-secondary">
                    <h6 class="h5 text-dark">Atlassian</h6>
                    Flat 60, Ross Green, South Lilyberg, Q7M 8ZV
                  </address>
                </div>

                <div class="col-sm-6">
                  <h5 class="text-dark font-size-1 text-uppercase">Client info:</h5>
                  <ul class="list-unstyled mb-0">
                    <li class="mb-2">
                      <span class="text-secondary">First name:</span>
                      <span class="font-weight-medium">Natalie</span>
                    </li>
                    <li class="mb-2">
                      <span class="text-secondary">Last name:</span>
                      <span class="font-weight-medium">Curtis</span>
                    </li>
                    <li class="mb-2">
                      <span class="text-secondary">Country:</span>
                      <span class="font-weight-medium">England</span>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="row justify-content-end mb-4">
                <div class="col-sm-6">
                  <hr class="my-4">

                  <h5 class="text-dark font-size-1 text-uppercase">Transaction details:</h5>
                  <ul class="list-unstyled mb-0">
                    <li class="d-flex justify-content-between align-items-center mb-2">
                      <span class="text-secondary">Transaction amount</span>
                      <span class="font-weight-medium">320.59 USD</span>
                    </li>
                    <li class="d-flex justify-content-between align-items-center mb-2">
                      <span class="text-secondary">Fee</span>
                      <span class="font-weight-medium">$0.50</span>
                    </li>
                    <li class="d-flex justify-content-between align-items-center mb-2">
                      <span class="text-secondary">Total amount</span>
                      <span class="text-primary font-weight-medium">321.11 USD</span>
                    </li>
                  </ul>
                </div>
              </div>

              <ul class="list-inline mb-0">
                <li class="list-inline-item u-ver-divider pr-3 mr-3">
                  <a href="#">
                    <span class="fas fa-file-word text-secondary mr-1"></span>
                    Download invoice
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <span class="fas fa-print text-secondary mr-1"></span>
                    Print details
                  </a>
                </li>
              </ul>
            </div>'>
                            <td class="align-middle">
                                <div class="custom-control custom-checkbox d-flex align-items-center">
                                    <input type="checkbox" class="custom-control-input" id="invoiceCheckbox11">
                                    <label class="custom-control-label" for="invoiceCheckbox11">
                                        <span class="text-hide">Checkbox</span>
                                    </label>
                                </div>
                            </td>
                            <td class="align-middle text-secondary font-weight-normal u-datatable__trigger-icon">FR0011
                            </td>
                            <td class="align-middle">
                                <div class="media align-items-center">
                                    <span class="btn btn-sm btn-icon btn-soft-primary rounded-circle mr-2">
                                        <span class="btn-icon__inner font-weight-medium">A</span>
                                    </span>
                                    <span>Atlassian</span>
                                </div>
                            </td>
                            <td class="align-middle text-primary">$321.11</td>
                            <td class="align-middle text-secondary">30 Apr</td>
                            <td class="align-middle text-warning">Pending</td>
                        </tr>

                        <tr class="js-datatabale-details" data-details='
            <div class="border rounded p-5">
              <h4 class="h3">Invoice</h4>

              <div class="row mb-6">
                <div class="col-3">
                  <span class="text-secondary">Date:</span>
                  <span class="font-weight-medium">02 Mar, 2018</span>
                </div>
                <div class="col-3">
                  <span class="text-secondary">Merchant:</span>
                  <span class="font-weight-medium">Slack</span>
                </div>
                <div class="col-6">
                  <span class="text-secondary">Authorization code:</span>
                  <span class="font-weight-medium">7563970127419120</span>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <h5 class="text-dark font-size-1 text-uppercase">Billing address:</h5>
                  <address class="text-secondary">
                    <h6 class="h5 text-dark">Slack</h6>
                    Flat 60, Ross Green, South Lilyberg, Q7M 8ZV
                  </address>
                </div>

                <div class="col-sm-6">
                  <h5 class="text-dark font-size-1 text-uppercase">Client info:</h5>
                  <ul class="list-unstyled mb-0">
                    <li class="mb-2">
                      <span class="text-secondary">First name:</span>
                      <span class="font-weight-medium">Natalie</span>
                    </li>
                    <li class="mb-2">
                      <span class="text-secondary">Last name:</span>
                      <span class="font-weight-medium">Curtis</span>
                    </li>
                    <li class="mb-2">
                      <span class="text-secondary">Country:</span>
                      <span class="font-weight-medium">England</span>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="row justify-content-end mb-4">
                <div class="col-sm-6">
                  <hr class="my-4">

                  <h5 class="text-dark font-size-1 text-uppercase">Transaction details:</h5>
                  <ul class="list-unstyled mb-0">
                    <li class="d-flex justify-content-between align-items-center mb-2">
                      <span class="text-secondary">Transaction amount</span>
                      <span class="font-weight-medium">15.79 USD</span>
                    </li>
                    <li class="d-flex justify-content-between align-items-center mb-2">
                      <span class="text-secondary">Fee</span>
                      <span class="font-weight-medium">$0.50</span>
                    </li>
                    <li class="d-flex justify-content-between align-items-center mb-2">
                      <span class="text-secondary">Total amount</span>
                      <span class="text-primary font-weight-medium">16.29 USD</span>
                    </li>
                  </ul>
                </div>
              </div>

              <ul class="list-inline mb-0">
                <li class="list-inline-item u-ver-divider pr-3 mr-3">
                  <a href="#">
                    <span class="fas fa-file-word text-secondary mr-1"></span>
                    Download invoice
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <span class="fas fa-print text-secondary mr-1"></span>
                    Print details
                  </a>
                </li>
              </ul>
            </div>'>
                            <td class="align-middle">
                                <div class="custom-control custom-checkbox d-flex align-items-center">
                                    <input type="checkbox" class="custom-control-input" id="invoiceCheckbox12">
                                    <label class="custom-control-label" for="invoiceCheckbox12">
                                        <span class="text-hide">Checkbox</span>
                                    </label>
                                </div>
                            </td>
                            <td class="align-middle text-secondary font-weight-normal u-datatable__trigger-icon">FR0012
                            </td>
                            <td class="align-middle">
                                <div class="media align-items-center">
                                    <span class="btn btn-sm btn-icon btn-soft-warning rounded-circle mr-2">
                                        <span class="btn-icon__inner font-weight-medium">S</span>
                                    </span>
                                    <span>Slack</span>
                                </div>
                            </td>
                            <td class="align-middle text-primary">$16.29</td>
                            <td class="align-middle text-secondary">02 Mar</td>
                            <td class="align-middle text-danger">Rejected</td>
                        </tr>

                        <tr class="js-datatabale-details" data-details='
            <div class="border rounded p-5">
              <h4 class="h3">Invoice</h4>

              <div class="row mb-6">
                <div class="col-3">
                  <span class="text-secondary">Date:</span>
                  <span class="font-weight-medium">01 Mar, 2018</span>
                </div>
                <div class="col-3">
                  <span class="text-secondary">Merchant:</span>
                  <span class="font-weight-medium">Spotify</span>
                </div>
                <div class="col-6">
                  <span class="text-secondary">Authorization code:</span>
                  <span class="font-weight-medium">4554212156223</span>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <h5 class="text-dark font-size-1 text-uppercase">Billing address:</h5>
                  <address class="text-secondary">
                    <h6 class="h5 text-dark">Spotify</h6>
                    Flat 60, Ross Green, South Lilyberg, Q7M 8ZV
                  </address>
                </div>

                <div class="col-sm-6">
                  <h5 class="text-dark font-size-1 text-uppercase">Client info:</h5>
                  <ul class="list-unstyled mb-0">
                    <li class="mb-2">
                      <span class="text-secondary">First name:</span>
                      <span class="font-weight-medium">Natalie</span>
                    </li>
                    <li class="mb-2">
                      <span class="text-secondary">Last name:</span>
                      <span class="font-weight-medium">Curtis</span>
                    </li>
                    <li class="mb-2">
                      <span class="text-secondary">Country:</span>
                      <span class="font-weight-medium">England</span>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="row justify-content-end mb-4">
                <div class="col-sm-6">
                  <hr class="my-4">

                  <h5 class="text-dark font-size-1 text-uppercase">Transaction details:</h5>
                  <ul class="list-unstyled mb-0">
                    <li class="d-flex justify-content-between align-items-center mb-2">
                      <span class="text-secondary">Transaction amount</span>
                      <span class="font-weight-medium">3.50 USD</span>
                    </li>
                    <li class="d-flex justify-content-between align-items-center mb-2">
                      <span class="text-secondary">Fee</span>
                      <span class="font-weight-medium">$0.50</span>
                    </li>
                    <li class="d-flex justify-content-between align-items-center mb-2">
                      <span class="text-secondary">Total amount</span>
                      <span class="text-primary font-weight-medium">4.00 USD</span>
                    </li>
                  </ul>
                </div>
              </div>

              <ul class="list-inline mb-0">
                <li class="list-inline-item u-ver-divider pr-3 mr-3">
                  <a href="#">
                    <span class="fas fa-file-word text-secondary mr-1"></span>
                    Download invoice
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <span class="fas fa-print text-secondary mr-1"></span>
                    Print details
                  </a>
                </li>
              </ul>
            </div>'>
                            <td class="align-middle">
                                <div class="custom-control custom-checkbox d-flex align-items-center">
                                    <input type="checkbox" class="custom-control-input" id="invoiceCheckbox13">
                                    <label class="custom-control-label" for="invoiceCheckbox13">
                                        <span class="text-hide">Checkbox</span>
                                    </label>
                                </div>
                            </td>
                            <td class="align-middle text-secondary font-weight-normal u-datatable__trigger-icon">FR0013
                            </td>
                            <td class="align-middle">
                                <div class="media align-items-center">
                                    <span class="btn btn-sm btn-icon btn-soft-success rounded-circle mr-2">
                                        <span class="btn-icon__inner font-weight-medium">D</span>
                                    </span>
                                    <span>Spotify</span>
                                </div>
                            </td>
                            <td class="align-middle text-primary">$4.00</td>
                            <td class="align-middle text-secondary">01 Mar</td>
                            <td class="align-middle text-success">Completed</td>
                        </tr>

                        <tr class="js-datatabale-details" data-details='
            <div class="border rounded p-5">
              <h4 class="h3">Invoice</h4>

              <div class="row mb-6">
                <div class="col-3">
                  <span class="text-secondary">Date:</span>
                  <span class="font-weight-medium">23 Mar, 2018</span>
                </div>
                <div class="col-3">
                  <span class="text-secondary">Merchant:</span>
                  <span class="font-weight-medium">Htmlstream</span>
                </div>
                <div class="col-6">
                  <span class="text-secondary">Authorization code:</span>
                  <span class="font-weight-medium">153464574367</span>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <h5 class="text-dark font-size-1 text-uppercase">Billing address:</h5>
                  <address class="text-secondary">
                    <h6 class="h5 text-dark">Htmlstream</h6>
                    Flat 60, Ross Green, South Lilyberg, Q7M 8ZV
                  </address>
                </div>

                <div class="col-sm-6">
                  <h5 class="text-dark font-size-1 text-uppercase">Client info:</h5>
                  <ul class="list-unstyled mb-0">
                    <li class="mb-2">
                      <span class="text-secondary">First name:</span>
                      <span class="font-weight-medium">Natalie</span>
                    </li>
                    <li class="mb-2">
                      <span class="text-secondary">Last name:</span>
                      <span class="font-weight-medium">Curtis</span>
                    </li>
                    <li class="mb-2">
                      <span class="text-secondary">Country:</span>
                      <span class="font-weight-medium">England</span>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="row justify-content-end mb-4">
                <div class="col-sm-6">
                  <hr class="my-4">

                  <h5 class="text-dark font-size-1 text-uppercase">Transaction details:</h5>
                  <ul class="list-unstyled mb-0">
                    <li class="d-flex justify-content-between align-items-center mb-2">
                      <span class="text-secondary">Transaction amount</span>
                      <span class="font-weight-medium">3,461.50 USD</span>
                    </li>
                    <li class="d-flex justify-content-between align-items-center mb-2">
                      <span class="text-secondary">Fee</span>
                      <span class="font-weight-medium">$0.50</span>
                    </li>
                    <li class="d-flex justify-content-between align-items-center mb-2">
                      <span class="text-secondary">Total amount</span>
                      <span class="text-primary font-weight-medium">3,462.00 USD</span>
                    </li>
                  </ul>
                </div>
              </div>

              <ul class="list-inline mb-0">
                <li class="list-inline-item u-ver-divider pr-3 mr-3">
                  <a href="#">
                    <span class="fas fa-file-word text-secondary mr-1"></span>
                    Download invoice
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <span class="fas fa-print text-secondary mr-1"></span>
                    Print details
                  </a>
                </li>
              </ul>
            </div>'>
                            <td class="align-middle">
                                <div class="custom-control custom-checkbox d-flex align-items-center">
                                    <input type="checkbox" class="custom-control-input" id="invoiceCheckbox14">
                                    <label class="custom-control-label" for="invoiceCheckbox14">
                                        <span class="text-hide">Checkbox</span>
                                    </label>
                                </div>
                            </td>
                            <td class="align-middle text-secondary font-weight-normal u-datatable__trigger-icon">FR0014
                            </td>
                            <td class="align-middle">
                                <div class="media align-items-center">
                                    <span class="btn btn-sm btn-icon btn-soft-dark rounded-circle mr-2">
                                        <span class="btn-icon__inner font-weight-medium">H</span>
                                    </span>
                                    <span>Htmlstream</span>
                                </div>
                            </td>
                            <td class="align-middle text-primary">$3,462.00</td>
                            <td class="align-middle text-secondary">23 Mar</td>
                            <td class="align-middle text-success">Completed</td>
                        </tr>

                        <tr class="js-datatabale-details" data-details='
            <div class="border rounded p-5">
              <h4 class="h3">Invoice</h4>

              <div class="row mb-6">
                <div class="col-3">
                  <span class="text-secondary">Date:</span>
                  <span class="font-weight-medium">27 Mar, 2018</span>
                </div>
                <div class="col-3">
                  <span class="text-secondary">Merchant:</span>
                  <span class="font-weight-medium">Spotify</span>
                </div>
                <div class="col-6">
                  <span class="text-secondary">Authorization code:</span>
                  <span class="font-weight-medium">981473734748</span>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <h5 class="text-dark font-size-1 text-uppercase">Billing address:</h5>
                  <address class="text-secondary">
                    <h6 class="h5 text-dark">Spotify</h6>
                    Flat 60, Ross Green, South Lilyberg, Q7M 8ZV
                  </address>
                </div>

                <div class="col-sm-6">
                  <h5 class="text-dark font-size-1 text-uppercase">Client info:</h5>
                  <ul class="list-unstyled mb-0">
                    <li class="mb-2">
                      <span class="text-secondary">First name:</span>
                      <span class="font-weight-medium">Natalie</span>
                    </li>
                    <li class="mb-2">
                      <span class="text-secondary">Last name:</span>
                      <span class="font-weight-medium">Curtis</span>
                    </li>
                    <li class="mb-2">
                      <span class="text-secondary">Country:</span>
                      <span class="font-weight-medium">England</span>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="row justify-content-end mb-4">
                <div class="col-sm-6">
                  <hr class="my-4">

                  <h5 class="text-dark font-size-1 text-uppercase">Transaction details:</h5>
                  <ul class="list-unstyled mb-0">
                    <li class="d-flex justify-content-between align-items-center mb-2">
                      <span class="text-secondary">Transaction amount</span>
                      <span class="font-weight-medium">8.50 USD</span>
                    </li>
                    <li class="d-flex justify-content-between align-items-center mb-2">
                      <span class="text-secondary">Fee</span>
                      <span class="font-weight-medium">$0.50</span>
                    </li>
                    <li class="d-flex justify-content-between align-items-center mb-2">
                      <span class="text-secondary">Total amount</span>
                      <span class="text-primary font-weight-medium">9.00 USD</span>
                    </li>
                  </ul>
                </div>
              </div>

              <ul class="list-inline mb-0">
                <li class="list-inline-item u-ver-divider pr-3 mr-3">
                  <a href="#">
                    <span class="fas fa-file-word text-secondary mr-1"></span>
                    Download invoice
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <span class="fas fa-print text-secondary mr-1"></span>
                    Print details
                  </a>
                </li>
              </ul>
            </div>'>
                            <td class="align-middle">
                                <div class="custom-control custom-checkbox d-flex align-items-center">
                                    <input type="checkbox" class="custom-control-input" id="invoiceCheckbox15">
                                    <label class="custom-control-label" for="invoiceCheckbox15">
                                        <span class="text-hide">Checkbox</span>
                                    </label>
                                </div>
                            </td>
                            <td class="align-middle text-secondary font-weight-normal u-datatable__trigger-icon">FR0015
                            </td>
                            <td class="align-middle">
                                <div class="media align-items-center">
                                    <span class="btn btn-sm btn-icon btn-soft-success rounded-circle mr-2">
                                        <span class="btn-icon__inner font-weight-medium">S</span>
                                    </span>
                                    <span>Spotify</span>
                                </div>
                            </td>
                            <td class="align-middle text-primary">$9.00</td>
                            <td class="align-middle text-secondary">27 Mar</td>
                            <td class="align-middle text-danger">Rejected</td>
                        </tr>

                        <tr class="js-datatabale-details" data-details='
            <div class="border rounded p-5">
              <h4 class="h3">Invoice</h4>

              <div class="row mb-6">
                <div class="col-3">
                  <span class="text-secondary">Date:</span>
                  <span class="font-weight-medium">04 Feb, 2018</span>
                </div>
                <div class="col-3">
                  <span class="text-secondary">Merchant:</span>
                  <span class="font-weight-medium">Dropbox</span>
                </div>
                <div class="col-6">
                  <span class="text-secondary">Authorization code:</span>
                  <span class="font-weight-medium">2323521524624</span>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <h5 class="text-dark font-size-1 text-uppercase">Billing address:</h5>
                  <address class="text-secondary">
                    <h6 class="h5 text-dark">Dropbox</h6>
                    Flat 60, Ross Green, South Lilyberg, Q7M 8ZV
                  </address>
                </div>

                <div class="col-sm-6">
                  <h5 class="text-dark font-size-1 text-uppercase">Client info:</h5>
                  <ul class="list-unstyled mb-0">
                    <li class="mb-2">
                      <span class="text-secondary">First name:</span>
                      <span class="font-weight-medium">Natalie</span>
                    </li>
                    <li class="mb-2">
                      <span class="text-secondary">Last name:</span>
                      <span class="font-weight-medium">Curtis</span>
                    </li>
                    <li class="mb-2">
                      <span class="text-secondary">Country:</span>
                      <span class="font-weight-medium">England</span>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="row justify-content-end mb-4">
                <div class="col-sm-6">
                  <hr class="my-4">

                  <h5 class="text-dark font-size-1 text-uppercase">Transaction details:</h5>
                  <ul class="list-unstyled mb-0">
                    <li class="d-flex justify-content-between align-items-center mb-2">
                      <span class="text-secondary">Transaction amount</span>
                      <span class="font-weight-medium">196.23 USD</span>
                    </li>
                    <li class="d-flex justify-content-between align-items-center mb-2">
                      <span class="text-secondary">Fee</span>
                      <span class="font-weight-medium">$0.50</span>
                    </li>
                    <li class="d-flex justify-content-between align-items-center mb-2">
                      <span class="text-secondary">Total amount</span>
                      <span class="text-primary font-weight-medium">196.73 USD</span>
                    </li>
                  </ul>
                </div>
              </div>

              <ul class="list-inline mb-0">
                <li class="list-inline-item u-ver-divider pr-3 mr-3">
                  <a href="#">
                    <span class="fas fa-file-word text-secondary mr-1"></span>
                    Download invoice
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <span class="fas fa-print text-secondary mr-1"></span>
                    Print details
                  </a>
                </li>
              </ul>
            </div>'>
                            <td class="align-middle">
                                <div class="custom-control custom-checkbox d-flex align-items-center">
                                    <input type="checkbox" class="custom-control-input" id="invoiceCheckbox16">
                                    <label class="custom-control-label" for="invoiceCheckbox16">
                                        <span class="text-hide">Checkbox</span>
                                    </label>
                                </div>
                            </td>
                            <td class="align-middle text-secondary font-weight-normal u-datatable__trigger-icon">FR0016
                            </td>
                            <td class="align-middle">
                                <div class="media align-items-center">
                                    <span class="btn btn-sm btn-icon btn-soft-primary rounded-circle mr-2">
                                        <span class="btn-icon__inner font-weight-medium">D</span>
                                    </span>
                                    <span>Dropbox</span>
                                </div>
                            </td>
                            <td class="align-middle text-primary">$196.73</td>
                            <td class="align-middle text-secondary">04 Feb</td>
                            <td class="align-middle text-success">Completed</td>
                        </tr>

                        <tr class="js-datatabale-details" data-details='
            <div class="border rounded p-5">
              <h4 class="h3">Invoice</h4>

              <div class="row mb-6">
                <div class="col-3">
                  <span class="text-secondary">Date:</span>
                  <span class="font-weight-medium">18 Feb, 2018</span>
                </div>
                <div class="col-3">
                  <span class="text-secondary">Merchant:</span>
                  <span class="font-weight-medium">Google</span>
                </div>
                <div class="col-6">
                  <span class="text-secondary">Authorization code:</span>
                  <span class="font-weight-medium">89791293819238</span>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <h5 class="text-dark font-size-1 text-uppercase">Billing address:</h5>
                  <address class="text-secondary">
                    <h6 class="h5 text-dark">Google</h6>
                    Flat 60, Ross Green, South Lilyberg, Q7M 8ZV
                  </address>
                </div>

                <div class="col-sm-6">
                  <h5 class="text-dark font-size-1 text-uppercase">Client info:</h5>
                  <ul class="list-unstyled mb-0">
                    <li class="mb-2">
                      <span class="text-secondary">First name:</span>
                      <span class="font-weight-medium">Natalie</span>
                    </li>
                    <li class="mb-2">
                      <span class="text-secondary">Last name:</span>
                      <span class="font-weight-medium">Curtis</span>
                    </li>
                    <li class="mb-2">
                      <span class="text-secondary">Country:</span>
                      <span class="font-weight-medium">England</span>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="row justify-content-end mb-4">
                <div class="col-sm-6">
                  <hr class="my-4">

                  <h5 class="text-dark font-size-1 text-uppercase">Transaction details:</h5>
                  <ul class="list-unstyled mb-0">
                    <li class="d-flex justify-content-between align-items-center mb-2">
                      <span class="text-secondary">Transaction amount</span>
                      <span class="font-weight-medium">235.49 USD</span>
                    </li>
                    <li class="d-flex justify-content-between align-items-center mb-2">
                      <span class="text-secondary">Fee</span>
                      <span class="font-weight-medium">$0.50</span>
                    </li>
                    <li class="d-flex justify-content-between align-items-center mb-2">
                      <span class="text-secondary">Total amount</span>
                      <span class="text-primary font-weight-medium">235.99 USD</span>
                    </li>
                  </ul>
                </div>
              </div>

              <ul class="list-inline mb-0">
                <li class="list-inline-item u-ver-divider pr-3 mr-3">
                  <a href="#">
                    <span class="fas fa-file-word text-secondary mr-1"></span>
                    Download invoice
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <span class="fas fa-print text-secondary mr-1"></span>
                    Print details
                  </a>
                </li>
              </ul>
            </div>'>
                            <td class="align-middle">
                                <div class="custom-control custom-checkbox d-flex align-items-center">
                                    <input type="checkbox" class="custom-control-input" id="invoiceCheckbox17">
                                    <label class="custom-control-label" for="invoiceCheckbox17">
                                        <span class="text-hide">Checkbox</span>
                                    </label>
                                </div>
                            </td>
                            <td class="align-middle text-secondary font-weight-normal u-datatable__trigger-icon">FR0017
                            </td>
                            <td class="align-middle">
                                <div class="media align-items-center">
                                    <span class="btn btn-sm btn-icon btn-soft-danger rounded-circle mr-2">
                                        <span class="btn-icon__inner font-weight-medium">G</span>
                                    </span>
                                    <span>Google</span>
                                </div>
                            </td>
                            <td class="align-middle text-primary">$235.99</td>
                            <td class="align-middle text-secondary">18 Feb</td>
                            <td class="align-middle text-success">Completed</td>
                        </tr>

                        <tr class="js-datatabale-details" data-details='
            <div class="border rounded p-5">
              <h4 class="h3">Invoice</h4>

              <div class="row mb-6">
                <div class="col-3">
                  <span class="text-secondary">Date:</span>
                  <span class="font-weight-medium">21 Feb, 2018</span>
                </div>
                <div class="col-3">
                  <span class="text-secondary">Merchant:</span>
                  <span class="font-weight-medium">FrontApp</span>
                </div>
                <div class="col-6">
                  <span class="text-secondary">Authorization code:</span>
                  <span class="font-weight-medium">412415246235</span>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <h5 class="text-dark font-size-1 text-uppercase">Billing address:</h5>
                  <address class="text-secondary">
                    <h6 class="h5 text-dark">FrontApp</h6>
                    Flat 60, Ross Green, South Lilyberg, Q7M 8ZV
                  </address>
                </div>

                <div class="col-sm-6">
                  <h5 class="text-dark font-size-1 text-uppercase">Client info:</h5>
                  <ul class="list-unstyled mb-0">
                    <li class="mb-2">
                      <span class="text-secondary">First name:</span>
                      <span class="font-weight-medium">Natalie</span>
                    </li>
                    <li class="mb-2">
                      <span class="text-secondary">Last name:</span>
                      <span class="font-weight-medium">Curtis</span>
                    </li>
                    <li class="mb-2">
                      <span class="text-secondary">Country:</span>
                      <span class="font-weight-medium">England</span>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="row justify-content-end mb-4">
                <div class="col-sm-6">
                  <hr class="my-4">

                  <h5 class="text-dark font-size-1 text-uppercase">Transaction details:</h5>
                  <ul class="list-unstyled mb-0">
                    <li class="d-flex justify-content-between align-items-center mb-2">
                      <span class="text-secondary">Transaction amount</span>
                      <span class="font-weight-medium">33.50 USD</span>
                    </li>
                    <li class="d-flex justify-content-between align-items-center mb-2">
                      <span class="text-secondary">Fee</span>
                      <span class="font-weight-medium">$0.50</span>
                    </li>
                    <li class="d-flex justify-content-between align-items-center mb-2">
                      <span class="text-secondary">Total amount</span>
                      <span class="text-primary font-weight-medium">34.00 USD</span>
                    </li>
                  </ul>
                </div>
              </div>

              <ul class="list-inline mb-0">
                <li class="list-inline-item u-ver-divider pr-3 mr-3">
                  <a href="#">
                    <span class="fas fa-file-word text-secondary mr-1"></span>
                    Download invoice
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <span class="fas fa-print text-secondary mr-1"></span>
                    Print details
                  </a>
                </li>
              </ul>
            </div>'>
                            <td class="align-middle">
                                <div class="custom-control custom-checkbox d-flex align-items-center">
                                    <input type="checkbox" class="custom-control-input" id="invoiceCheckbox18">
                                    <label class="custom-control-label" for="invoiceCheckbox18">
                                        <span class="text-hide">Checkbox</span>
                                    </label>
                                </div>
                            </td>
                            <td class="align-middle text-secondary font-weight-normal u-datatable__trigger-icon">FR0018
                            </td>
                            <td class="align-middle">
                                <div class="media align-items-center">
                                    <span class="btn btn-sm btn-icon btn-soft-primary rounded-circle mr-2">
                                        <span class="btn-icon__inner font-weight-medium">F</span>
                                    </span>
                                    <span>FrontApp</span>
                                </div>
                            </td>
                            <td class="align-middle text-primary">$34.00</td>
                            <td class="align-middle text-secondary">21 Feb</td>
                            <td class="align-middle text-warning">Pending</td>
                        </tr>

                        <tr class="js-datatabale-details" data-details='
            <div class="border rounded p-5">
              <h4 class="h3">Invoice</h4>

              <div class="row mb-6">
                <div class="col-3">
                  <span class="text-secondary">Date:</span>
                  <span class="font-weight-medium">28 Feb, 2018</span>
                </div>
                <div class="col-3">
                  <span class="text-secondary">Merchant:</span>
                  <span class="font-weight-medium">S</span>
                </div>
                <div class="col-6">
                  <span class="text-secondary">Authorization code:</span>
                  <span class="font-weight-medium">543653251921</span>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <h5 class="text-dark font-size-1 text-uppercase">Billing address:</h5>
                  <address class="text-secondary">
                    <h6 class="h5 text-dark">S</h6>
                    Flat 60, Ross Green, South Lilyberg, Q7M 8ZV
                  </address>
                </div>

                <div class="col-sm-6">
                  <h5 class="text-dark font-size-1 text-uppercase">Client info:</h5>
                  <ul class="list-unstyled mb-0">
                    <li class="mb-2">
                      <span class="text-secondary">First name:</span>
                      <span class="font-weight-medium">Natalie</span>
                    </li>
                    <li class="mb-2">
                      <span class="text-secondary">Last name:</span>
                      <span class="font-weight-medium">Curtis</span>
                    </li>
                    <li class="mb-2">
                      <span class="text-secondary">Country:</span>
                      <span class="font-weight-medium">England</span>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="row justify-content-end mb-4">
                <div class="col-sm-6">
                  <hr class="my-4">

                  <h5 class="text-dark font-size-1 text-uppercase">Transaction details:</h5>
                  <ul class="list-unstyled mb-0">
                    <li class="d-flex justify-content-between align-items-center mb-2">
                      <span class="text-secondary">Transaction amount</span>
                      <span class="font-weight-medium">72.39 USD</span>
                    </li>
                    <li class="d-flex justify-content-between align-items-center mb-2">
                      <span class="text-secondary">Fee</span>
                      <span class="font-weight-medium">$0.50</span>
                    </li>
                    <li class="d-flex justify-content-between align-items-center mb-2">
                      <span class="text-secondary">Total amount</span>
                      <span class="text-primary font-weight-medium">72.89 USD</span>
                    </li>
                  </ul>
                </div>
              </div>

              <ul class="list-inline mb-0">
                <li class="list-inline-item u-ver-divider pr-3 mr-3">
                  <a href="#">
                    <span class="fas fa-file-word text-secondary mr-1"></span>
                    Download invoice
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <span class="fas fa-print text-secondary mr-1"></span>
                    Print details
                  </a>
                </li>
              </ul>
            </div>'>
                            <td class="align-middle">
                                <div class="custom-control custom-checkbox d-flex align-items-center">
                                    <input type="checkbox" class="custom-control-input" id="invoiceCheckbox19">
                                    <label class="custom-control-label" for="invoiceCheckbox19">
                                        <span class="text-hide">Checkbox</span>
                                    </label>
                                </div>
                            </td>
                            <td class="align-middle text-secondary font-weight-normal u-datatable__trigger-icon">FR0019
                            </td>
                            <td class="align-middle">
                                <div class="media align-items-center">
                                    <span class="btn btn-sm btn-icon btn-soft-warning rounded-circle mr-2">
                                        <span class="btn-icon__inner font-weight-medium">S</span>
                                    </span>
                                    <span>Slack</span>
                                </div>
                            </td>
                            <td class="align-middle text-primary">$72.89</td>
                            <td class="align-middle text-secondary">28 Feb</td>
                            <td class="align-middle text-danger">Rejected</td>
                        </tr>

                        <tr class="js-datatabale-details" data-details='
            <div class="border rounded p-5">
              <h4 class="h3">Invoice</h4>

              <div class="row mb-6">
                <div class="col-3">
                  <span class="text-secondary">Date:</span>
                  <span class="font-weight-medium">05 Jan, 2018</span>
                </div>
                <div class="col-3">
                  <span class="text-secondary">Merchant:</span>
                  <span class="font-weight-medium">Spotify</span>
                </div>
                <div class="col-6">
                  <span class="text-secondary">Authorization code:</span>
                  <span class="font-weight-medium">6878782791820</span>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <h5 class="text-dark font-size-1 text-uppercase">Billing address:</h5>
                  <address class="text-secondary">
                    <h6 class="h5 text-dark">Spotify</h6>
                    Flat 60, Ross Green, South Lilyberg, Q7M 8ZV
                  </address>
                </div>

                <div class="col-sm-6">
                  <h5 class="text-dark font-size-1 text-uppercase">Client info:</h5>
                  <ul class="list-unstyled mb-0">
                    <li class="mb-2">
                      <span class="text-secondary">First name:</span>
                      <span class="font-weight-medium">Natalie</span>
                    </li>
                    <li class="mb-2">
                      <span class="text-secondary">Last name:</span>
                      <span class="font-weight-medium">Curtis</span>
                    </li>
                    <li class="mb-2">
                      <span class="text-secondary">Country:</span>
                      <span class="font-weight-medium">England</span>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="row justify-content-end mb-4">
                <div class="col-sm-6">
                  <hr class="my-4">

                  <h5 class="text-dark font-size-1 text-uppercase">Transaction details:</h5>
                  <ul class="list-unstyled mb-0">
                    <li class="d-flex justify-content-between align-items-center mb-2">
                      <span class="text-secondary">Transaction amount</span>
                      <span class="font-weight-medium">8.50 USD</span>
                    </li>
                    <li class="d-flex justify-content-between align-items-center mb-2">
                      <span class="text-secondary">Fee</span>
                      <span class="font-weight-medium">$0.50</span>
                    </li>
                    <li class="d-flex justify-content-between align-items-center mb-2">
                      <span class="text-secondary">Total amount</span>
                      <span class="text-primary font-weight-medium">9.00 USD</span>
                    </li>
                  </ul>
                </div>
              </div>

              <ul class="list-inline mb-0">
                <li class="list-inline-item u-ver-divider pr-3 mr-3">
                  <a href="#">
                    <span class="fas fa-file-word text-secondary mr-1"></span>
                    Download invoice
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <span class="fas fa-print text-secondary mr-1"></span>
                    Print details
                  </a>
                </li>
              </ul>
            </div>'>
                            <td class="align-middle">
                                <div class="custom-control custom-checkbox d-flex align-items-center">
                                    <input type="checkbox" class="custom-control-input" id="invoiceCheckbox20">
                                    <label class="custom-control-label" for="invoiceCheckbox20">
                                        <span class="text-hide">Checkbox</span>
                                    </label>
                                </div>
                            </td>
                            <td class="align-middle text-secondary font-weight-normal u-datatable__trigger-icon">FR0020
                            </td>
                            <td class="align-middle">
                                <div class="media align-items-center">
                                    <span class="btn btn-sm btn-icon btn-soft-success rounded-circle mr-2">
                                        <span class="btn-icon__inner font-weight-medium">D</span>
                                    </span>
                                    <span>Spotify</span>
                                </div>
                            </td>
                            <td class="align-middle text-primary">$9.00</td>
                            <td class="align-middle text-secondary">05 Jan</td>
                            <td class="align-middle text-success">Completed</td>
                        </tr>

                        <tr class="js-datatabale-details" data-details='
            <div class="border rounded p-5">
              <h4 class="h3">Invoice</h4>

              <div class="row mb-6">
                <div class="col-3">
                  <span class="text-secondary">Date:</span>
                  <span class="font-weight-medium">15 Jan, 2018</span>
                </div>
                <div class="col-3">
                  <span class="text-secondary">Merchant:</span>
                  <span class="font-weight-medium">Htmlstream</span>
                </div>
                <div class="col-6">
                  <span class="text-secondary">Authorization code:</span>
                  <span class="font-weight-medium">0912974318264</span>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <h5 class="text-dark font-size-1 text-uppercase">Billing address:</h5>
                  <address class="text-secondary">
                    <h6 class="h5 text-dark">Htmlstream</h6>
                    Flat 60, Ross Green, South Lilyberg, Q7M 8ZV
                  </address>
                </div>

                <div class="col-sm-6">
                  <h5 class="text-dark font-size-1 text-uppercase">Client info:</h5>
                  <ul class="list-unstyled mb-0">
                    <li class="mb-2">
                      <span class="text-secondary">First name:</span>
                      <span class="font-weight-medium">Natalie</span>
                    </li>
                    <li class="mb-2">
                      <span class="text-secondary">Last name:</span>
                      <span class="font-weight-medium">Curtis</span>
                    </li>
                    <li class="mb-2">
                      <span class="text-secondary">Country:</span>
                      <span class="font-weight-medium">England</span>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="row justify-content-end mb-4">
                <div class="col-sm-6">
                  <hr class="my-4">

                  <h5 class="text-dark font-size-1 text-uppercase">Transaction details:</h5>
                  <ul class="list-unstyled mb-0">
                    <li class="d-flex justify-content-between align-items-center mb-2">
                      <span class="text-secondary">Transaction amount</span>
                      <span class="font-weight-medium">7,484.50 USD</span>
                    </li>
                    <li class="d-flex justify-content-between align-items-center mb-2">
                      <span class="text-secondary">Fee</span>
                      <span class="font-weight-medium">$0.50</span>
                    </li>
                    <li class="d-flex justify-content-between align-items-center mb-2">
                      <span class="text-secondary">Total amount</span>
                      <span class="text-primary font-weight-medium">7,485.00 USD</span>
                    </li>
                  </ul>
                </div>
              </div>

              <ul class="list-inline mb-0">
                <li class="list-inline-item u-ver-divider pr-3 mr-3">
                  <a href="#">
                    <span class="fas fa-file-word text-secondary mr-1"></span>
                    Download invoice
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <span class="fas fa-print text-secondary mr-1"></span>
                    Print details
                  </a>
                </li>
              </ul>
            </div>'>
                            <td class="align-middle">
                                <div class="custom-control custom-checkbox d-flex align-items-center">
                                    <input type="checkbox" class="custom-control-input" id="invoiceCheckbox21">
                                    <label class="custom-control-label" for="invoiceCheckbox21">
                                        <span class="text-hide">Checkbox</span>
                                    </label>
                                </div>
                            </td>
                            <td class="align-middle text-secondary font-weight-normal u-datatable__trigger-icon">FR0021
                            </td>
                            <td class="align-middle">
                                <div class="media align-items-center">
                                    <span class="btn btn-sm btn-icon btn-soft-dark rounded-circle mr-2">
                                        <span class="btn-icon__inner font-weight-medium">H</span>
                                    </span>
                                    <span>Htmlstream</span>
                                </div>
                            </td>
                            <td class="align-middle text-primary">$7,485.00</td>
                            <td class="align-middle text-secondary">15 Jan</td>
                            <td class="align-middle text-success">Completed</td>
                        </tr>

                        <tr class="js-datatabale-details" data-details='
            <div class="border rounded p-5">
              <h4 class="h3">Invoice</h4>

              <div class="row mb-6">
                <div class="col-3">
                  <span class="text-secondary">Date:</span>
                  <span class="font-weight-medium">22 Jan, 2018</span>
                </div>
                <div class="col-3">
                  <span class="text-secondary">Merchant:</span>
                  <span class="font-weight-medium">Slack</span>
                </div>
                <div class="col-6">
                  <span class="text-secondary">Authorization code:</span>
                  <span class="font-weight-medium">1231524674634</span>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <h5 class="text-dark font-size-1 text-uppercase">Billing address:</h5>
                  <address class="text-secondary">
                    <h6 class="h5 text-dark">Slack</h6>
                    Flat 60, Ross Green, South Lilyberg, Q7M 8ZV
                  </address>
                </div>

                <div class="col-sm-6">
                  <h5 class="text-dark font-size-1 text-uppercase">Client info:</h5>
                  <ul class="list-unstyled mb-0">
                    <li class="mb-2">
                      <span class="text-secondary">First name:</span>
                      <span class="font-weight-medium">Natalie</span>
                    </li>
                    <li class="mb-2">
                      <span class="text-secondary">Last name:</span>
                      <span class="font-weight-medium">Curtis</span>
                    </li>
                    <li class="mb-2">
                      <span class="text-secondary">Country:</span>
                      <span class="font-weight-medium">England</span>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="row justify-content-end mb-4">
                <div class="col-sm-6">
                  <hr class="my-4">

                  <h5 class="text-dark font-size-1 text-uppercase">Transaction details:</h5>
                  <ul class="list-unstyled mb-0">
                    <li class="d-flex justify-content-between align-items-center mb-2">
                      <span class="text-secondary">Transaction amount</span>
                      <span class="font-weight-medium">75.50 USD</span>
                    </li>
                    <li class="d-flex justify-content-between align-items-center mb-2">
                      <span class="text-secondary">Fee</span>
                      <span class="font-weight-medium">$0.50</span>
                    </li>
                    <li class="d-flex justify-content-between align-items-center mb-2">
                      <span class="text-secondary">Total amount</span>
                      <span class="text-primary font-weight-medium">76.00 USD</span>
                    </li>
                  </ul>
                </div>
              </div>

              <ul class="list-inline mb-0">
                <li class="list-inline-item u-ver-divider pr-3 mr-3">
                  <a href="#">
                    <span class="fas fa-file-word text-secondary mr-1"></span>
                    Download invoice
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <span class="fas fa-print text-secondary mr-1"></span>
                    Print details
                  </a>
                </li>
              </ul>
            </div>'>
                            <td class="align-middle">
                                <div class="custom-control custom-checkbox d-flex align-items-center">
                                    <input type="checkbox" class="custom-control-input" id="invoiceCheckbox22">
                                    <label class="custom-control-label" for="invoiceCheckbox22">
                                        <span class="text-hide">Checkbox</span>
                                    </label>
                                </div>
                            </td>
                            <td class="align-middle text-secondary font-weight-normal u-datatable__trigger-icon">FR0022
                            </td>
                            <td class="align-middle">
                                <div class="media align-items-center">
                                    <span class="btn btn-sm btn-icon btn-soft-warning rounded-circle mr-2">
                                        <span class="btn-icon__inner font-weight-medium">S</span>
                                    </span>
                                    <span>Slack</span>
                                </div>
                            </td>
                            <td class="align-middle text-primary">$76.00</td>
                            <td class="align-middle text-secondary">22 Jan</td>
                            <td class="align-middle text-danger">Rejected</td>
                        </tr>

                        <tr class="js-datatabale-details" data-details='
            <div class="border rounded p-5">
              <h4 class="h3">Invoice</h4>

              <div class="row mb-6">
                <div class="col-3">
                  <span class="text-secondary">Date:</span>
                  <span class="font-weight-medium">18 Jan, 2018</span>
                </div>
                <div class="col-3">
                  <span class="text-secondary">Merchant:</span>
                  <span class="font-weight-medium">Spotify</span>
                </div>
                <div class="col-6">
                  <span class="text-secondary">Authorization code:</span>
                  <span class="font-weight-medium">4753616512242</span>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <h5 class="text-dark font-size-1 text-uppercase">Billing address:</h5>
                  <address class="text-secondary">
                    <h6 class="h5 text-dark">Spotify</h6>
                    Flat 60, Ross Green, South Lilyberg, Q7M 8ZV
                  </address>
                </div>

                <div class="col-sm-6">
                  <h5 class="text-dark font-size-1 text-uppercase">Client info:</h5>
                  <ul class="list-unstyled mb-0">
                    <li class="mb-2">
                      <span class="text-secondary">First name:</span>
                      <span class="font-weight-medium">Natalie</span>
                    </li>
                    <li class="mb-2">
                      <span class="text-secondary">Last name:</span>
                      <span class="font-weight-medium">Curtis</span>
                    </li>
                    <li class="mb-2">
                      <span class="text-secondary">Country:</span>
                      <span class="font-weight-medium">England</span>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="row justify-content-end mb-4">
                <div class="col-sm-6">
                  <hr class="my-4">

                  <h5 class="text-dark font-size-1 text-uppercase">Transaction details:</h5>
                  <ul class="list-unstyled mb-0">
                    <li class="d-flex justify-content-between align-items-center mb-2">
                      <span class="text-secondary">Transaction amount</span>
                      <span class="font-weight-medium">11.50 USD</span>
                    </li>
                    <li class="d-flex justify-content-between align-items-center mb-2">
                      <span class="text-secondary">Fee</span>
                      <span class="font-weight-medium">$0.50</span>
                    </li>
                    <li class="d-flex justify-content-between align-items-center mb-2">
                      <span class="text-secondary">Total amount</span>
                      <span class="text-primary font-weight-medium">12.00 USD</span>
                    </li>
                  </ul>
                </div>
              </div>

              <ul class="list-inline mb-0">
                <li class="list-inline-item u-ver-divider pr-3 mr-3">
                  <a href="#">
                    <span class="fas fa-file-word text-secondary mr-1"></span>
                    Download invoice
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <span class="fas fa-print text-secondary mr-1"></span>
                    Print details
                  </a>
                </li>
              </ul>
            </div>'>
                            <td class="align-middle">
                                <div class="custom-control custom-checkbox d-flex align-items-center">
                                    <input type="checkbox" class="custom-control-input" id="invoiceCheckbox23">
                                    <label class="custom-control-label" for="invoiceCheckbox23">
                                        <span class="text-hide">Checkbox</span>
                                    </label>
                                </div>
                            </td>
                            <td class="align-middle text-secondary font-weight-normal u-datatable__trigger-icon">FR0023
                            </td>
                            <td class="align-middle">
                                <div class="media align-items-center">
                                    <span class="btn btn-sm btn-icon btn-soft-success rounded-circle mr-2">
                                        <span class="btn-icon__inner font-weight-medium">D</span>
                                    </span>
                                    <span>Spotify</span>
                                </div>
                            </td>
                            <td class="align-middle text-primary">$12.00</td>
                            <td class="align-middle text-secondary">18 Jan</td>
                            <td class="align-middle text-success">Completed</td>
                        </tr>

                        <tr class="js-datatabale-details" data-details='
            <div class="border rounded p-5">
              <h4 class="h3">Invoice</h4>

              <div class="row mb-6">
                <div class="col-3">
                  <span class="text-secondary">Date:</span>
                  <span class="font-weight-medium">30 Jan, 2018</span>
                </div>
                <div class="col-3">
                  <span class="text-secondary">Merchant:</span>
                  <span class="font-weight-medium">Htmlstream</span>
                </div>
                <div class="col-6">
                  <span class="text-secondary">Authorization code:</span>
                  <span class="font-weight-medium">7029841902791230</span>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <h5 class="text-dark font-size-1 text-uppercase">Billing address:</h5>
                  <address class="text-secondary">
                    <h6 class="h5 text-dark">Htmlstream</h6>
                    Flat 60, Ross Green, South Lilyberg, Q7M 8ZV
                  </address>
                </div>

                <div class="col-sm-6">
                  <h5 class="text-dark font-size-1 text-uppercase">Client info:</h5>
                  <ul class="list-unstyled mb-0">
                    <li class="mb-2">
                      <span class="text-secondary">First name:</span>
                      <span class="font-weight-medium">Natalie</span>
                    </li>
                    <li class="mb-2">
                      <span class="text-secondary">Last name:</span>
                      <span class="font-weight-medium">Curtis</span>
                    </li>
                    <li class="mb-2">
                      <span class="text-secondary">Country:</span>
                      <span class="font-weight-medium">England</span>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="row justify-content-end mb-4">
                <div class="col-sm-6">
                  <hr class="my-4">

                  <h5 class="text-dark font-size-1 text-uppercase">Transaction details:</h5>
                  <ul class="list-unstyled mb-0">
                    <li class="d-flex justify-content-between align-items-center mb-2">
                      <span class="text-secondary">Transaction amount</span>
                      <span class="font-weight-medium">86.93 USD</span>
                    </li>
                    <li class="d-flex justify-content-between align-items-center mb-2">
                      <span class="text-secondary">Fee</span>
                      <span class="font-weight-medium">$0.50</span>
                    </li>
                    <li class="d-flex justify-content-between align-items-center mb-2">
                      <span class="text-secondary">Total amount</span>
                      <span class="text-primary font-weight-medium">87.43 USD</span>
                    </li>
                  </ul>
                </div>
              </div>

              <ul class="list-inline mb-0">
                <li class="list-inline-item u-ver-divider pr-3 mr-3">
                  <a href="#">
                    <span class="fas fa-file-word text-secondary mr-1"></span>
                    Download invoice
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <span class="fas fa-print text-secondary mr-1"></span>
                    Print details
                  </a>
                </li>
              </ul>
            </div>'>
                            <td class="align-middle">
                                <div class="custom-control custom-checkbox d-flex align-items-center">
                                    <input type="checkbox" class="custom-control-input" id="invoiceCheckbox24">
                                    <label class="custom-control-label" for="invoiceCheckbox24">
                                        <span class="text-hide">Checkbox</span>
                                    </label>
                                </div>
                            </td>
                            <td class="align-middle text-secondary font-weight-normal u-datatable__trigger-icon">FR0024
                            </td>
                            <td class="align-middle">
                                <div class="media align-items-center">
                                    <span class="btn btn-sm btn-icon btn-soft-dark rounded-circle mr-2">
                                        <span class="btn-icon__inner font-weight-medium">H</span>
                                    </span>
                                    <span>Htmlstream</span>
                                </div>
                            </td>
                            <td class="align-middle text-primary">$87.43</td>
                            <td class="align-middle text-secondary">30 Jan</td>
                            <td class="align-middle text-success">Completed</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- End Activity Table -->

            <!-- Pagination -->
            <div class="d-flex justify-content-between align-items-center">
                <nav id="datatablePagination" aria-label="Activity pagination"></nav>

                <small id="datatableInfo" class="text-secondary"></small>
            </div>
            <!-- End Pagination -->
        </div>
    </div>
</body>
<!-- JS Implementing Plugins -->
<script src="../../assets/vendor/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="../../assets/vendor/flatpickr/dist/flatpickr.min.js"></script>
<script src="../../assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>

<!-- JS Front -->
<script src="../../assets/js/helpers/hs.range-datepicker.js"></script>
<script src="../../assets/js/helpers/hs.datatables.js"></script>
<script src="../../assets/js/helpers/hs.selectpicker.js"></script>
<script src="../../assets/js/components/hs.focus-state.js"></script>

<!-- JS Plugins Init. -->
<script>
$(document).on('ready', function() {
    // initialization of range datepicker
    $.HSCore.components.HSRangeDatepicker.init('.js-range-datepicker');

    // initialization of datatables
    $.HSCore.components.HSDatatables.init('.js-datatable');

    // initialization of select picker
    $.HSCore.components.HSSelectPicker.init('.js-select');

    // initialization of forms
    $.HSCore.components.HSFocusState.init();
});
</script>

</html>
<?php

?>