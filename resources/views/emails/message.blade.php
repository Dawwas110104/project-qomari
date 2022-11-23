<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>Codebase - Bootstrap 5 Admin Template &amp; UI Framework</title>
    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="assets/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->

    <!-- Codebase framework -->
    <link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
    <!-- END Stylesheets -->
  </head>
  <body>
    <div id="page-container" class="sidebar-o enable-page-overlay side-scroll page-header-modern main-content-boxed">
      <main id="main-container">
        <!-- Page Content -->
        <div class="content">
          <div class="my-5 text-center">
            <h2 class="fw-bold mb-2">Buy/Sell</h2>
            <h3 class="h5 text-muted mb-0">Bitcoin (BTC)</h3>
          </div>
          <div class="row">
            <div class="col-lg-6 offset-lg-3">
              <div class="block block-rounded overflow-hidden">
                <ul class="nav nav-tabs nav-tabs-block nav-justified" role="tablist">
                  <li class="nav-item">
                    <button type="button" class="nav-link active" id="crypto-buy-tab" data-bs-toggle="tab" data-bs-target="#crypto-buy" role="tab" aria-controls="crypto-buy" aria-selected="true">
                      Buy
                    </button>
                  </li>
                  <li class="nav-item">
                    <button type="button" class="nav-link" id="crypto-sell-tab" data-bs-toggle="tab" data-bs-target="#crypto-sell" role="tab" aria-controls="crypto-sell" aria-selected="false">
                      Sell
                    </button>
                  </li>
                </ul>
                <div class="block-content tab-content">
                  <div class="tab-pane active" id="crypto-buy" role="tabpanel" aria-labelledby="crypto-buy-tab" tabindex="0">
                    <form action="be_pages_crypto_buy_sell.html" method="POST" onsubmit="return false;">
                      <div class="mb-4">
                        <label class="form-label" for="crypto-buy-from">Buy From</label>
                        <select class="form-select form-control-lg" id="crypto-buy-from" name="crypto-buy-from" size="3">
                          <option value="1">USD Wallet - $2000</option>
                          <option value="2">EUR Wallet - 0€</option>
                          <option value="3">GBP Wallet - £0</option>
                        </select>
                      </div>
                      <div class="mb-4">
                        <label class="form-label" for="crypto-buy-to">Deposit To</label>
                        <select class="form-select form-control-lg" id="crypto-buy-to" name="crypto-buy-to">
                          <option value="1">Bitcoin Wallet - 0.50 BTC</option>
                        </select>
                      </div>
                      <hr>
                      <div class="row mb-4">
                        <div class="col-12 mb-3">
                          <div class="d-flex justify-content-between align-items-center mb-1">
                            <strong>Total Limit</strong>
                            <div>
                              $1.000,00 USD &bullet; <a href="javascript:void(0)">Increase Limits</a>
                            </div>
                          </div>
                          <div class="progress mb-0" style="height: 5px;">
                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                          </div>
                        </div>
                        <div class="col-6 border-end">
                          <div class="input-group input-group-lg">
                            <input type="text" class="form-control" id="crypto-buy-usd" name="crypto-buy-usd" placeholder="0,00">
                            <span class="input-group-text fw-semibold">USD</span>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="input-group input-group-lg">
                            <input type="text" class="form-control" id="crypto-buy-btc" name="crypto-buy-btc" placeholder="0.00">
                            <span class="input-group-text fw-semibold">BTC</span>
                          </div>
                        </div>
                      </div>
                      <hr>
                      <div class="mb-4 text-center">
                        <div class="btn-group btn-group-sm my-2" role="group" aria-label="Earnings Select Date Group">
                          <input type="radio" class="btn-check" name="crypto-buy-repeat" id="crypto-buy-repeat-daily" autocomplete="off">
                          <label class="btn btn-secondary" for="crypto-buy-repeat-daily">Daily</label>

                          <input type="radio" class="btn-check" name="crypto-buy-repeat" id="crypto-buy-repeat-weekly" autocomplete="off">
                          <label class="btn btn-secondary" for="crypto-buy-repeat-weekly">Weekly</label>

                          <input type="radio" class="btn-check" name="crypto-buy-repeat" id="crypto-buy-repeat-monthly" autocomplete="off">
                          <label class="btn btn-secondary" for="crypto-buy-repeat-monthly">Monthly</label>
                        </div>
                        <div class="fs-sm text-muted">
                          <i class="fa fa-fw fa-redo me-1"></i> Repeat this transaction
                        </div>
                      </div>
                      <div class="mb-4">
                        <button type="submit" class="btn btn-lg w-100 btn-alt-primary">Buy Bitcoin Instantly</button>
                      </div>
                    </form>
                  </div>
                  <div class="tab-pane" id="crypto-sell" role="tabpanel" aria-labelledby="crypto-sell-tab" tabindex="0">
                    <form action="be_pages_crypto_buy_sell.html" method="POST" onsubmit="return false;">
                      <div class="mb-4">
                        <label class="form-label" for="crypto-sell-from">Sell From</label>
                        <select class="form-select form-control-lg" id="crypto-sell-from" name="crypto-sell-from">
                          <option value="1">Bitcoin Wallet - 0.50 BTC</option>
                        </select>
                      </div>
                      <div class="mb-4">
                        <label class="form-label" for="crypto-sell-to">Deposit To</label>
                        <select class="form-select form-control-lg" id="crypto-sell-to" name="crypto-sell-to" size="3">
                          <option value="1">USD Wallet - $2000</option>
                          <option value="2">EUR Wallet - 0€</option>
                          <option value="3">GBP Wallet - £0</option>
                        </select>
                      </div>
                      <hr>
                      <div class="row mb-4">
                        <div class="col-12 mb-3">
                          <div class="d-flex justify-content-between align-items-center mb-1">
                            <strong>Total Limit</strong>
                            <div>
                              $1.000,00 USD &bullet; <a href="javascript:void(0)">Increase Limits</a>
                            </div>
                          </div>
                          <div class="progress mb-0" style="height: 5px;">
                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                          </div>
                        </div>
                        <div class="col-6 border-end">
                          <div class="input-group input-group-lg">
                            <input type="text" class="form-control" id="crypto-sell-btc" name="crypto-sell-btc" placeholder="0.00">
                            <span class="input-group-text fw-semibold">BTC</span>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="input-group input-group-lg">
                            <input type="text" class="form-control" id="crypto-sell-usd" name="crypto-sell-usd" placeholder="0,00">
                            <span class="input-group-text fw-semibold">USD</span>
                          </div>
                        </div>
                      </div>
                      <hr>
                      <div class="row mb-4">
                        <div class="col-12 text-center">
                          <div class="btn-group btn-group-sm my-2" role="group" aria-label="Earnings Select Date Group">
                            <input type="radio" class="btn-check" name="crypto-sell" id="crypto-sell-daily" autocomplete="off">
                            <label class="btn btn-secondary" for="crypto-sell-daily">Daily</label>

                            <input type="radio" class="btn-check" name="crypto-sell" id="crypto-sell-weekly" autocomplete="off">
                            <label class="btn btn-secondary" for="crypto-sell-weekly">Weekly</label>

                            <input type="radio" class="btn-check" name="crypto-sell" id="crypto-sell-monthly" autocomplete="off">
                            <label class="btn btn-secondary" for="crypto-sell-monthly">Monthly</label>
                          </div>
                          <div class="fs-sm text-muted">
                            <i class="fa fa-fw fa-redo me-1"></i> Repeat this transaction
                          </div>
                        </div>
                      </div>
                      <div class="mb-4">
                        <button type="submit" class="btn btn-lg w-100 btn-alt-primary">Sell Bitcoin Instantly</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- END Page Content -->
      </main>
      <!-- END Main Container -->

      <!-- Footer -->
      <footer id="page-footer">
        <div class="content py-3">
          <div class="row fs-sm">
            <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-end">
              Crafted with <i class="fa fa-heart text-danger"></i> by <a class="fw-semibold" href="https://1.envato.market/ydb" target="_blank">pixelcave</a>
            </div>
            <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-start">
              <a class="fw-semibold" href="https://1.envato.market/95j" target="_blank">Codebase 5.3</a> &copy; <span data-toggle="year-copy"></span>
            </div>
          </div>
        </div>
      </footer>
      <!-- END Footer -->
    </div>
    <script src="assets/js/codebase.app.min.js"></script>
  </body>
</html>