@extends ('layoutku.app')

@section('content')
<!-- START: dashboard crypto -->
<div class="cui-crypto">
  <div class="cui-crypto-list-mobile">
    <div class="cui-utils-title mb-3">
      <strong>Markets</strong>
    </div>
    <select class="custom-select">
      <option value="BTC">BTC (Bitcoin)</option>
      <option value="SNT">SNT (Status Network Token)</option>
      <option value="RADS">RADS (Radium)</option>
      <option value="MEME">MEME (Memetic)</option>
      <option value="XMR">XMR (Monero)</option>
      <option value="GLD">GLD (GoldCoin)</option>
      <option value="NEO">NEO (Neo)</option>
      <option value="BTG">BTG (Bitcoin Gold)</option>
      <option value="XRP">XRP (Ripple)</option>
      <option value="ZEC">ZEC (ZCash)</option>
      <option value="ZCL">ZCL (ZClassic)</option>
    </select>
  </div>
  <div class="cui-crypto-list">
    <div class="cui-utils-title mb-3">
      <strong>Markets</strong>
    </div>
    <a href="javascript: void(0);" class="cui-crypto-list-item cui-crypto-list-item-current">
      <span class="cui-crypto-list-percents">
        <span>11.7%</span>
        0.00016985
      </span>
      <span class="cui-crypto-list-currency">
        <span>BTC</span>
        97.20
      </span>
    </a>
    <a href="javascript: void(0);" class="cui-crypto-list-item cui-crypto-list-item-negative">
      <span class="cui-crypto-list-percents">
        <span>-2.3%</span>
        0.00016985
      </span>
      <span class="cui-crypto-list-currency">
        <span>SNT</span>
        44.90
      </span>
    </a>
    <a href="javascript: void(0);" class="cui-crypto-list-item">
      <span class="cui-crypto-list-percents">
        <span>7.2%</span>
        0.00016985
      </span>
      <span class="cui-crypto-list-currency">
        <span>RADS</span>
        32.78
      </span>
    </a>
    <a href="javascript: void(0);" class="cui-crypto-list-item cui-crypto-list-item-negative">
      <span class="cui-crypto-list-percents">
        <span>-11.7%</span>
        0.00016985
      </span>
      <span class="cui-crypto-list-currency">
        <span>MEME</span>
        12.25
      </span>
    </a>
    <a href="javascript: void(0);" class="cui-crypto-list-item">
      <span class="cui-crypto-list-percents">
        <span>67.5%</span>
        0.00016985
      </span>
      <span class="cui-crypto-list-currency">
        <span>XMR</span>
        8.26
      </span>
    </a>
    <a href="javascript: void(0);" class="cui-crypto-list-item cui-crypto-list-item-negative">
      <span class="cui-crypto-list-percents">
        <span>-22.9%</span>
        0.00016985
      </span>
      <span class="cui-crypto-list-currency">
        <span>GLD</span>
        5.20
      </span>
    </a>
    <a href="javascript: void(0);" class="cui-crypto-list-item cui-crypto-list-item-negative">
      <span class="cui-crypto-list-percents">
        <span>-12.3%</span>
        0.00016985
      </span>
      <span class="cui-crypto-list-currency">
        <span>NEO</span>
        3.20
      </span>
    </a>
    <a href="javascript: void(0);" class="cui-crypto-list-item">
      <span class="cui-crypto-list-percents">
        <span>+4.3%</span>
        0.00036234
      </span>
      <span class="cui-crypto-list-currency">
        <span>BTG</span>
        5.64
      </span>
    </a>
    <a href="javascript: void(0);" class="cui-crypto-list-item cui-crypto-list-item-negative">
      <span class="cui-crypto-list-percents">
        <span>-4.2%</span>
        0.00035685
      </span>
      <span class="cui-crypto-list-currency">
        <span>XRP</span>
        6.36
      </span>
    </a>
    <a href="javascript: void(0);" class="cui-crypto-list-item cui-crypto-list-item-negative">
      <span class="cui-crypto-list-percents">
        <span>-1.7%</span>
        0.00000985
      </span>
      <span class="cui-crypto-list-currency">
        <span>ZEC</span>
        6.35
      </span>
    </a>
    <a href="javascript: void(0);" class="cui-crypto-list-item cui-crypto-list-item-negative">
      <span class="cui-crypto-list-percents">
        <span>-2.8%</span>
        0.00000152
      </span>
      <span class="cui-crypto-list-currency">
        <span>ZCL</span>
        1.03
      </span>
    </a>
  </div>
  <div class="cui-crypto-content">
    <div class="cui-utils-title mb-3">
      <strong>Bittrex Live Market</strong>
    </div>
    <div class="card">
      <div class="card-body">
        <div id="cryptoChart" class="height-600"></div>
      </div>
    </div>
    <div class="cui-utils-title mb-3">
      <strong>Order Book</strong>
    </div>
    <div class="card">
      <div class="card-body">
        <div class="cui-crypto-order">
          <div class="cui-crypto-order-left">
            <div class="cui-crypto-table text-nowrap">
              <div class="table-responsive">
                <table class="table table-hover">
                  <tr>
                    <td>SUM</td>
                    <td>Total</td>
                    <td>Size</td>
                    <td>BID</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>3.3187</td>
                    <td>3.0801</td>
                    <td>479.021</td>
                    <td class="text-success">0.00643000</td>
                    <td>
                      <a href="javascript: void(0);">SELL</a>
                    </td>
                  </tr>
                  <tr>
                    <td>2.3187</td>
                    <td>3.3536</td>
                    <td>236.021</td>
                    <td class="text-success">0.00267789</td>
                    <td>
                      <a href="javascript: void(0);">SELL</a>
                    </td>
                  </tr>
                  <tr>
                    <td>3.3187</td>
                    <td>3.3267</td>
                    <td>236.021</td>
                    <td class="text-success">0.00643670</td>
                    <td>
                      <a href="javascript: void(0);">SELL</a>
                    </td>
                  </tr>
                  <tr>
                    <td>4.3187</td>
                    <td>3.24727</td>
                    <td>637.021</td>
                    <td class="text-success">0.00267000</td>
                    <td>
                      <a href="javascript: void(0);">SELL</a>
                    </td>
                  </tr>
                  <tr>
                    <td>5.3187</td>
                    <td>3.272</td>
                    <td>15.021</td>
                    <td class="text-success">0.00333000</td>
                    <td>
                      <a href="javascript: void(0);">SELL</a>
                    </td>
                  </tr>
                  <tr>
                    <td>6.3187</td>
                    <td>3.2727</td>
                    <td>62.021</td>
                    <td class="text-success">0.00643667</td>
                    <td>
                      <a href="javascript: void(0);">SELL</a>
                    </td>
                  </tr>
                  <tr>
                    <td>7.3187</td>
                    <td>3.4778</td>
                    <td>23.021</td>
                    <td class="text-success">0.00647873</td>
                    <td>
                      <a href="javascript: void(0);">SELL</a>
                    </td>
                  </tr>
                  <tr>
                    <td>5.3187</td>
                    <td>3.8549</td>
                    <td>2356.021</td>
                    <td class="text-success">0.00643478</td>
                    <td>
                      <a href="javascript: void(0);">SELL</a>
                    </td>
                  </tr>
                  <tr>
                    <td>9.3187</td>
                    <td>3.35738</td>
                    <td>125.021</td>
                    <td class="text-success">0.00477000</td>
                    <td>
                      <a href="javascript: void(0);">SELL</a>
                    </td>
                  </tr>
                  <tr>
                    <td>10.3187</td>
                    <td>3.37</td>
                    <td>234.021</td>
                    <td class="text-success">0.00236000</td>
                    <td>
                      <a href="javascript: void(0);">SELL</a>
                    </td>
                  </tr>
                </table>
              </div>
              <div class="cui-crypto-order-pagination">
                <ul class="pagination mb-0">
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li class="page-item active"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="cui-crypto-order-middle">
            <div class="cui-crypto-form">
              <form>
                <div class="form-group">
                  <div class="w-100 btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="w-50 btn btn-outline-primary btn-sm active">
                      <input type="radio" name="options" id="option1" checked />
                      BUY
                    </label>
                    <label class="w-50 btn btn-outline-primary btn-sm">
                      <input type="radio" name="options" id="option2" /> SELL
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label for="orderType" class="cui-crypto-form-label">Order type</label>
                  <select class="custom-select" id="orderType">
                    <option value="1">Limit (Default)</option>
                    <option value="2">Conditional</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="orderQuantity" class="cui-crypto-form-label">QUANTITY (BTC)</label>
                  <input
                    id="orderQuantity"
                    type="text"
                    class="form-control"
                    placeholder="Quantity"
                    value="0.00000000"
                  />
                </div>
                <div class="form-group">
                  <label for="orderBid" class="cui-crypto-form-label">BID PRICE</label>
                  <input
                    id="orderBid"
                    type="text"
                    class="form-control"
                    placeholder="BID Price"
                    value="0.00645198"
                  />
                </div>
                <div class="form-group">
                  <label for="orderTotal" class="cui-crypto-form-label">TOTAL</label>
                  <input
                    id="orderTotal"
                    type="text"
                    class="form-control"
                    placeholder="Total"
                    value="0.00000000"
                  />
                </div>
                <div class="form-group">
                  <label for="orderTime" class="cui-crypto-form-label">TIME IN FORCE</label>
                  <select class="custom-select" id="orderTime">
                    <option value="1">Good 'Til Canceled (Default)</option>
                    <option value="2">Immediate or Cancel</option>
                  </select>
                </div>
                <div class="form-group">
                  <a href="javascript: void(0);" class="w-100 btn btn-success text-uppercase"
                    >Buy btc</a
                  >
                </div>
              </form>
            </div>
            <div class="my-3 text-center">
              <div>
                <strong>Available Balance</strong>
              </div>
              <div>12.92520000 BTC</div>
              <div>1450.00 USD</div>
              <div>
                <a
                  href="javascript: void(0);"
                  class="cui-utils-link-blue cui-utils-link-underlined"
                >
                  <strong>Max Buy</strong>
                </a>
              </div>
            </div>
          </div>
          <div class="cui-crypto-order-right">
            <div class="cui-crypto-table text-nowrap">
              <div class="table-responsive">
                <table class="table table-hover">
                  <tr>
                    <td></td>
                    <td>ASK</td>
                    <td>Size</td>
                    <td>Total</td>
                    <td>SUM</td>
                  </tr>
                  <tr>
                    <td>
                      <a href="javascript: void(0);">BUY</a>
                    </td>
                    <td class="text-danger">0.00643000</td>
                    <td>479.021</td>
                    <td>3.0801</td>
                    <td>3.3187</td>
                  </tr>
                  <tr>
                    <td>
                      <a href="javascript: void(0);">BUY</a>
                    </td>
                    <td class="text-danger">0.00267789</td>
                    <td>236.021</td>
                    <td>3.3536</td>
                    <td>2.3187</td>
                  </tr>
                  <tr>
                    <td>
                      <a href="javascript: void(0);">BUY</a>
                    </td>
                    <td class="text-danger">0.00643670</td>
                    <td>236.021</td>
                    <td>3.3267</td>
                    <td>3.3187</td>
                  </tr>
                  <tr>
                    <td>
                      <a href="javascript: void(0);">BUY</a>
                    </td>
                    <td class="text-danger">0.00267000</td>
                    <td>637.021</td>
                    <td>3.24727</td>
                    <td>4.3187</td>
                  </tr>
                  <tr>
                    <td>
                      <a href="javascript: void(0);">BUY</a>
                    </td>
                    <td class="text-danger">0.00333000</td>
                    <td>15.021</td>
                    <td>3.272</td>
                    <td>5.3187</td>
                  </tr>
                  <tr>
                    <td>
                      <a href="javascript: void(0);">BUY</a>
                    </td>
                    <td class="text-danger">0.00643667</td>
                    <td>62.021</td>
                    <td>3.2727</td>
                    <td>6.3187</td>
                  </tr>
                  <tr>
                    <td>
                      <a href="javascript: void(0);">BUY</a>
                    </td>
                    <td class="text-danger">0.00647873</td>
                    <td>23.021</td>
                    <td>3.4778</td>
                    <td>7.3187</td>
                  </tr>
                  <tr>
                    <td>
                      <a href="javascript: void(0);">BUY</a>
                    </td>
                    <td class="text-danger">0.00643478</td>
                    <td>2356.021</td>
                    <td>3.8549</td>
                    <td>5.3187</td>
                  </tr>
                  <tr>
                    <td>
                      <a href="javascript: void(0);">BUY</a>
                    </td>
                    <td class="text-danger">0.00477000</td>
                    <td>125.021</td>
                    <td>3.35738</td>
                    <td>9.3187</td>
                  </tr>
                  <tr>
                    <td>
                      <a href="javascript: void(0);">BUY</a>
                    </td>
                    <td class="text-danger">0.00236000</td>
                    <td>234.021</td>
                    <td>3.37</td>
                    <td>10.3187</td>
                  </tr>
                </table>
              </div>
              <div class="cui-crypto-order-pagination">
                <ul class="pagination">
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li class="page-item active"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="cui-utils-title mb-3">
      <strong>Market History</strong>
    </div>
    <div class="card">
      <div class="card-body">
        <div class="cui-crypto-table text-nowrap text-left">
          <div class="table-responsive">
            <table class="table table-hover">
              <tr>
                <td>Date</td>
                <td>BUY/SELL</td>
                <td>BID/ASK</td>
                <td>Units Total</td>
                <td>Total Cost</td>
              </tr>
              <tr>
                <td>20:11:25</td>
                <td class="text-danger">SELL</td>
                <td>6709.00000000</td>
                <td>0.00050000</td>
                <td>3.35510106</td>
              </tr>
              <tr>
                <td>20:26:52</td>
                <td class="text-success">BUY</td>
                <td>6709.00000000</td>
                <td>7.00050000</td>
                <td>32.35510106</td>
              </tr>
              <tr>
                <td>20:31:12</td>
                <td class="text-success">BUY</td>
                <td>6709.00000000</td>
                <td>0.00050000</td>
                <td>3.35510106</td>
              </tr>
              <tr>
                <td>20:41:15</td>
                <td class="text-danger">SELL</td>
                <td>6809.00000000</td>
                <td>2.00050000</td>
                <td>12.35510106</td>
              </tr>
              <tr>
                <td>20:47:25</td>
                <td class="text-danger">SELL</td>
                <td>6709.00000000</td>
                <td>0.00050000</td>
                <td>3.35510106</td>
              </tr>
              <tr>
                <td>20:56:25</td>
                <td class="text-danger">SELL</td>
                <td>6709.00000000</td>
                <td>0.00050000</td>
                <td>3.35510106</td>
              </tr>
            </table>
          </div>
          <div class="cui-crypto-order-pagination">
            <ul class="pagination mb-0">
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                  <span class="sr-only">Next</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="cui-utils-title mb-3">
      <strong>My Open Orders</strong>
    </div>
    <div class="card">
      <div class="card-body">
        <div class="cui-crypto-table text-left text-nowrap">
          <div class="table-responsive">
            <table class="table table-hover">
              <tr>
                <td>Order Date</td>
                <td>Open Date</td>
                <td>Type</td>
                <td>BID/ASK</td>
                <td>Filled</td>
                <td>Units Total</td>
                <td>Actual Rate</td>
                <td>Est. Total</td>
              </tr>
              <tr>
                <td>2018/05/27 20:55:39</td>
                <td>2018/05/27 20:55:39</td>
                <td class="text-danger">SELL</td>
                <td>7319.44600000</td>
                <td>0.26510202</td>
                <td>0.26510202</td>
                <td>7325.77049148</td>
                <td>1937.22136398</td>
              </tr>
              <tr>
                <td>2018/05/24 09:28:04</td>
                <td>2018/05/24 09:27:11</td>
                <td class="text-success">BUY</td>
                <td>7660.00000000</td>
                <td>0.29959731</td>
                <td>0.29959731</td>
                <td>7660.00000000</td>
                <td>-2300.65268307</td>
              </tr>
              <tr>
                <td>2018/05/18 20:21:08</td>
                <td>2018/05/18 20:21:08</td>
                <td class="text-danger">SELL</td>
                <td>8121.00000001</td>
                <td>0.28400674</td>
                <td>0.28400674</td>
                <td>8121.00000000</td>
                <td>2300.65268871</td>
              </tr>
            </table>
          </div>
          <div class="cui-crypto-order-pagination">
            <ul class="pagination mb-0">
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                  <span class="sr-only">Next</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="cui-utils-title mb-3">
      <strong>My Order History</strong>
    </div>
    <div class="card">
      <div class="card-body">
        <div class="cui-crypto-table text-left text-nowrap">
          <div class="table-responsive">
            <table class="table table-hover">
              <tr>
                <td>Order Date</td>
                <td>Open Date</td>
                <td>Type</td>
                <td>BID/ASK</td>
                <td>Filled</td>
                <td>Units Total</td>
                <td>Actual Rate</td>
                <td>Est. Total</td>
              </tr>
              <tr>
                <td>2018/05/27 20:55:39</td>
                <td>2018/05/27 20:55:39</td>
                <td class="text-danger">SELL</td>
                <td>7319.44600000</td>
                <td>0.26510202</td>
                <td>0.26510202</td>
                <td>7325.77049148</td>
                <td>1937.22136398</td>
              </tr>
              <tr>
                <td>2018/05/24 09:28:04</td>
                <td>2018/05/24 09:27:11</td>
                <td class="text-success">BUY</td>
                <td>7660.00000000</td>
                <td>0.29959731</td>
                <td>0.29959731</td>
                <td>7660.00000000</td>
                <td>-2300.65268307</td>
              </tr>
              <tr>
                <td>2018/05/18 20:21:08</td>
                <td>2018/05/18 20:21:08</td>
                <td class="text-danger">SELL</td>
                <td>8121.00000001</td>
                <td>0.28400674</td>
                <td>0.28400674</td>
                <td>8121.00000000</td>
                <td>2300.65268871</td>
              </tr>
            </table>
          </div>
          <div class="cui-crypto-order-pagination">
            <ul class="pagination mb-0">
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                  <span class="sr-only">Next</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END: dashboard crypto -->

<!-- START: page scripts -->
<script>
  ;(function($) {
    'use strict'
    var cryptoChart = cryptoChart || {}

    ;(function() {
      'use strict'
      cryptoChart.data = {
        twtr: { name: 'Twitter, Inc. (TWTR)' },
        fb: { name: 'Facebook, Inc. (FB)' },
      }

      cryptoChart.data.twtr.ohlc = mapToStructure([
        ['2013-11-07T00:00:00.000Z', 45.1, 50.09, 44, 44.9, 117701600],
        ['2013-11-08T00:00:00.000Z', 45.93, 46.94, 40.69, 41.65, 27925300],
        ['2013-11-11T00:00:00.000Z', 40.5, 43, 39.4, 42.9, 16113900],
        ['2013-11-12T00:00:00.000Z', 43.66, 43.78, 41.83, 41.9, 6316700],
        ['2013-11-13T00:00:00.000Z', 41.03, 42.87, 40.76, 42.6, 8688300],
        ['2013-11-14T00:00:00.000Z', 42.34, 45.67, 42.24, 44.69, 11099400],
        ['2013-11-15T00:00:00.000Z', 45.25, 45.27, 43.43, 43.98, 8010600],
        ['2013-11-18T00:00:00.000Z', 43.5, 43.95, 40.85, 41.14, 12810600],
        ['2013-11-19T00:00:00.000Z', 41.39, 41.9, 40, 41.75, 7436600],
        ['2013-11-20T00:00:00.000Z', 41.4, 41.75, 40.51, 41.05, 5767300],
        ['2013-11-21T00:00:00.000Z', 41.25, 42.49, 40.37, 42.06, 8324700],
        ['2013-11-22T00:00:00.000Z', 41.81, 42.28, 40.97, 41, 6185200],
        ['2013-11-25T00:00:00.000Z', 41.08, 41.14, 38.8, 39.06, 14333300],
        ['2013-11-26T00:00:00.000Z', 39.16, 40.55, 38.92, 40.18, 9828400],
        ['2013-11-27T00:00:00.000Z', 40.47, 41.4, 40.35, 40.9, 5536300],
        ['2013-11-29T00:00:00.000Z', 41.4, 41.58, 40.9, 41.57, 4107000],
        ['2013-12-02T00:00:00.000Z', 41.79, 42, 40.4, 40.78, 6424300],
        ['2013-12-03T00:00:00.000Z', 40.69, 41.6, 40.54, 41.37, 5771000],
        ['2013-12-04T00:00:00.000Z', 41.27, 43.92, 41.27, 43.69, 11014900],
        ['2013-12-05T00:00:00.000Z', 43.45, 46.35, 42.83, 45.62, 11729400],
        ['2013-12-06T00:00:00.000Z', 45.75, 45.8, 44.54, 44.95, 6230000],
        ['2013-12-09T00:00:00.000Z', 45.59, 49.84, 45.02, 49.14, 17366600],
        ['2013-12-10T00:00:00.000Z', 48.9, 52.58, 48.7, 51.99, 25792000],
        ['2013-12-11T00:00:00.000Z', 52.4, 53.87, 51, 52.34, 26631500],
        ['2013-12-12T00:00:00.000Z', 52.2, 55.87, 50.69, 55.33, 23446900],
        ['2013-12-13T00:00:00.000Z', 56.2, 59.41, 55.45, 59, 38979600],
        ['2013-12-16T00:00:00.000Z', 57.86, 60.24, 55.76, 56.61, 39310800],
        ['2013-12-17T00:00:00.000Z', 56.97, 57.38, 54.62, 56.45, 22115200],
        ['2013-12-18T00:00:00.000Z', 57, 57, 54.23, 55.51, 16659800],
        ['2013-12-19T00:00:00.000Z', 55.08, 57.75, 55, 57.49, 13152500],
        ['2013-12-20T00:00:00.000Z', 58.51, 60.25, 58.01, 60.01, 26207400],
        ['2013-12-23T00:00:00.000Z', 59.85, 64.99, 59.7, 64.54, 22163800],
        ['2013-12-24T00:00:00.000Z', 66.34, 70.87, 65.56, 69.96, 35802700],
        ['2013-12-26T00:00:00.000Z', 72.88, 74.73, 69.13, 73.31, 82761100],
        ['2013-12-27T00:00:00.000Z', 70.1, 71.25, 63.69, 63.75, 60418700],
        ['2013-12-30T00:00:00.000Z', 60.27, 63.71, 58.57, 60.51, 55538300],
        ['2013-12-31T00:00:00.000Z', 62.36, 65.22, 61.65, 63.65, 27814600],
        ['2014-01-02T00:00:00.000Z', 65, 67.5, 64.4, 67.5, 29246400],
        ['2014-01-03T00:00:00.000Z', 69, 70.43, 68.43, 69, 33207200],
        ['2014-01-06T00:00:00.000Z', 64.83, 66.87, 63.5, 66.29, 27243700],
        ['2014-01-07T00:00:00.000Z', 67.67, 67.73, 61.39, 61.46, 31748400],
        ['2014-01-08T00:00:00.000Z', 58.71, 61.26, 57.92, 59.29, 27263200],
        ['2014-01-09T00:00:00.000Z', 59.54, 60.81, 55.59, 57.05, 31092100],
        ['2014-01-10T00:00:00.000Z', 57.5, 58.76, 55.87, 57, 22375900],
        ['2014-01-13T00:00:00.000Z', 59.98, 60.38, 57.29, 57.82, 20978100],
        ['2014-01-14T00:00:00.000Z', 58.88, 59.02, 57.36, 58.21, 14778000],
        ['2014-01-15T00:00:00.000Z', 59.11, 61.75, 58.32, 61.57, 21537300],
        ['2014-01-16T00:00:00.000Z', 61.45, 62.4, 60.46, 60.57, 16589400],
        ['2014-01-17T00:00:00.000Z', 63.6, 64.69, 61.59, 62.2, 28391100],
        ['2014-01-21T00:00:00.000Z', 63.33, 63.44, 61.5, 62.53, 13733200],
        ['2014-01-22T00:00:00.000Z', 63.11, 63.8, 61.76, 62.44, 12039000],
        ['2014-01-23T00:00:00.000Z', 61.45, 62.81, 60.88, 62.8, 10183700],
        ['2014-01-24T00:00:00.000Z', 62.17, 63.62, 61.3, 61.74, 12942200],
        ['2014-01-27T00:00:00.000Z', 61.77, 61.77, 56.1, 57.91, 18982700],
        ['2014-01-28T00:00:00.000Z', 57.44, 60.85, 57.35, 60.44, 9346800],
        ['2014-01-29T00:00:00.000Z', 59.62, 60.95, 58.6, 59.45, 9140000],
        ['2014-01-30T00:00:00.000Z', 63.98, 65.24, 62.8, 63.47, 17424300],
        ['2014-01-31T00:00:00.000Z', 63.39, 65.37, 62.65, 64.5, 15498800],
        ['2014-02-03T00:00:00.000Z', 65.92, 66.48, 64.21, 65.25, 17890300],
        ['2014-02-04T00:00:00.000Z', 66.25, 66.37, 64.5, 66.32, 13017400],
        ['2014-02-05T00:00:00.000Z', 67.16, 67.24, 64.8, 65.97, 31504900],
        ['2014-02-06T00:00:00.000Z', 50.61, 53.9, 49.99, 50.03, 64856500],
        ['2014-02-07T00:00:00.000Z', 51.23, 54.92, 50.75, 54.35, 32204400],
        ['2014-02-10T00:00:00.000Z', 54.5, 54.59, 52.34, 52.92, 15857400],
        ['2014-02-11T00:00:00.000Z', 53.2, 54.4, 53.1, 54, 13162900],
        ['2014-02-12T00:00:00.000Z', 55.05, 57, 54.76, 56.85, 20040400],
        ['2014-02-13T00:00:00.000Z', 56.07, 58.98, 55.46, 56.47, 26009500],
        ['2014-02-14T00:00:00.000Z', 57.02, 57.86, 56.7, 57.44, 12512400],
        ['2014-02-18T00:00:00.000Z', 57.88, 58.64, 56.77, 58.18, 10719500],
        ['2014-02-19T00:00:00.000Z', 58.47, 58.95, 54.62, 55.5, 25772100],
        ['2014-02-20T00:00:00.000Z', 55.82, 57.08, 54.65, 56.63, 12097500],
        ['2014-02-21T00:00:00.000Z', 57.1, 57.2, 55.7, 55.92, 7714300],
        ['2014-02-24T00:00:00.000Z', 56.03, 56.49, 55.3, 55.78, 8451200],
        ['2014-02-25T00:00:00.000Z', 55.89, 55.95, 54.5, 54.96, 9288500],
        ['2014-02-26T00:00:00.000Z', 55, 56.99, 54.9, 55.87, 12116000],
        ['2014-02-27T00:00:00.000Z', 56.34, 56.69, 55.4, 55.77, 6537700],
        ['2014-02-28T00:00:00.000Z', 55.93, 56, 54.13, 54.91, 8137200],
        ['2014-03-03T00:00:00.000Z', 53.89, 54.4, 52.9, 53.71, 9602300],
        ['2014-03-04T00:00:00.000Z', 54.25, 55.28, 54.12, 54.28, 6706300],
        ['2014-03-05T00:00:00.000Z', 54.53, 55.03, 53.75, 54.38, 5672000],
        ['2014-03-06T00:00:00.000Z', 54.91, 56.09, 54.7, 54.83, 9005700],
        ['2014-03-07T00:00:00.000Z', 55.18, 55.2, 53.31, 53.53, 7311500],
        ['2014-03-10T00:00:00.000Z', 54.09, 54.59, 53.38, 53.88, 5759600],
        ['2014-03-11T00:00:00.000Z', 54.16, 55.84, 53.8, 54.02, 11762600],
        ['2014-03-12T00:00:00.000Z', 54.25, 55.3, 53.88, 54.5, 5818400],
        ['2014-03-13T00:00:00.000Z', 54.9, 55.45, 53.2, 53.57, 7671500],
        ['2014-03-14T00:00:00.000Z', 53.4, 53.91, 51.8, 51.92, 9570400],
        ['2014-03-17T00:00:00.000Z', 52.08, 52.49, 51.35, 52.05, 6600900],
        ['2014-03-18T00:00:00.000Z', 52.03, 52.21, 50.29, 51.13, 12228900],
        ['2014-03-19T00:00:00.000Z', 50.8, 51.98, 50.71, 51.24, 7624200],
        ['2014-03-20T00:00:00.000Z', 51, 51.66, 49.64, 50.12, 10086200],
        ['2014-03-21T00:00:00.000Z', 50.24, 50.92, 49.51, 50.92, 11801400],
        ['2014-03-24T00:00:00.000Z', 50.69, 50.94, 47.77, 48.77, 12325700],
        ['2014-03-25T00:00:00.000Z', 49.35, 49.7, 47.58, 47.88, 8225600],
        ['2014-03-26T00:00:00.000Z', 48.06, 48.3, 44.25, 44.43, 16079700],
        ['2014-03-27T00:00:00.000Z', 45.09, 46.4, 43.31, 46.32, 15507600],
        ['2014-03-28T00:00:00.000Z', 46.65, 47.34, 45.7, 47.3, 9610500],
        ['2014-03-31T00:00:00.000Z', 47.55, 47.75, 46.43, 46.67, 5794500],
        ['2014-04-01T00:00:00.000Z', 46.71, 47.59, 46.18, 46.98, 6916100],
        ['2014-04-02T00:00:00.000Z', 47.4, 47.44, 45.51, 45.73, 7911300],
        ['2014-04-03T00:00:00.000Z', 45.48, 45.61, 43.38, 44.05, 11175800],
        ['2014-04-04T00:00:00.000Z', 44.2, 44.87, 42.37, 43.14, 13824400],
        ['2014-04-07T00:00:00.000Z', 42.87, 44.6, 42.26, 42.45, 12053000],
        ['2014-04-08T00:00:00.000Z', 43.42, 43.42, 41.55, 41.78, 14514500],
        ['2014-04-09T00:00:00.000Z', 42.23, 43.06, 41.77, 42.49, 14330700],
        ['2014-04-10T00:00:00.000Z', 42.85, 43.25, 40.93, 41.34, 10720900],
        ['2014-04-11T00:00:00.000Z', 40.79, 41.1, 39.68, 40.05, 9999700],
        ['2014-04-14T00:00:00.000Z', 41.4, 41.95, 40.12, 40.87, 10414200],
        ['2014-04-15T00:00:00.000Z', 41.28, 45.55, 40.76, 45.52, 24285100],
        ['2014-04-16T00:00:00.000Z', 45.42, 45.56, 43.54, 44.42, 13919600],
        ['2014-04-17T00:00:00.000Z', 44.66, 46.55, 43.91, 45.01, 12304400],
        ['2014-04-21T00:00:00.000Z', 44.96, 46.3, 44.64, 46.13, 6921200],
        ['2014-04-22T00:00:00.000Z', 46.23, 47.09, 45.8, 46.02, 6996900],
        ['2014-04-23T00:00:00.000Z', 45.88, 46.17, 44.87, 45.95, 7340200],
        ['2014-04-24T00:00:00.000Z', 46.71, 46.79, 43.63, 44.82, 11011700],
        ['2014-04-25T00:00:00.000Z', 44.29, 44.44, 41.31, 41.61, 13712400],
        ['2014-04-28T00:00:00.000Z', 41.76, 42.35, 39.3, 40.73, 14358900],
        ['2014-04-29T00:00:00.000Z', 40.53, 43.97, 40.17, 42.62, 28127700],
        ['2014-04-30T00:00:00.000Z', 37.66, 38.98, 37.24, 38.97, 38397900],
        ['2014-05-01T00:00:00.000Z', 39.01, 40.77, 38.97, 39.09, 15759800],
        ['2014-05-02T00:00:00.000Z', 39.2, 39.86, 38.7, 39.02, 12729500],
        ['2014-05-05T00:00:00.000Z', 38.52, 39.6, 38.05, 38.75, 10405200],
        ['2014-05-06T00:00:00.000Z', 35.61, 36.1, 31.72, 31.85, 134710000],
        ['2014-05-07T00:00:00.000Z', 31.97, 32, 29.51, 30.66, 68876300],
        ['2014-05-08T00:00:00.000Z', 31.48, 32.98, 31.13, 31.96, 51282800],
        ['2014-05-09T00:00:00.000Z', 32.23, 33.11, 31.75, 32.05, 31888800],
        ['2014-05-12T00:00:00.000Z', 33.08, 34.1, 32.4, 33.94, 34712700],
        ['2014-05-13T00:00:00.000Z', 33.84, 34.06, 32.89, 33.39, 24676800],
        ['2014-05-14T00:00:00.000Z', 33.35, 33.83, 32.62, 32.85, 20029400],
        ['2014-05-15T00:00:00.000Z', 33.02, 33.29, 32.16, 32.77, 22030500],
        ['2014-05-16T00:00:00.000Z', 32.95, 33.21, 32.02, 32.26, 21391400],
        ['2014-05-19T00:00:00.000Z', 32.05, 32.44, 31.64, 32.07, 15952800],
        ['2014-05-20T00:00:00.000Z', 32, 32.39, 31.52, 31.77, 16580500],
        ['2014-05-21T00:00:00.000Z', 31.85, 31.95, 31.15, 31.75, 15562600],
        ['2014-05-22T00:00:00.000Z', 31.33, 32.25, 30.52, 31.52, 35566200],
        ['2014-05-23T00:00:00.000Z', 31.51, 31.68, 30.45, 30.5, 27448000],
        ['2014-05-27T00:00:00.000Z', 30.94, 31.2, 30.38, 30.51, 25240100],
        ['2014-05-28T00:00:00.000Z', 31.5, 33.84, 31.09, 33.77, 60302800],
        ['2014-05-29T00:00:00.000Z', 34.67, 35.14, 33.88, 34, 54016300],
        ['2014-05-30T00:00:00.000Z', 33.73, 33.86, 32.11, 32.44, 40566000],
        ['2014-06-02T00:00:00.000Z', 32.89, 33.2, 31.62, 31.75, 31154200],
        ['2014-06-03T00:00:00.000Z', 31.73, 32.69, 31.65, 32.58, 19948800],
        ['2014-06-04T00:00:00.000Z', 32.49, 33.32, 31.85, 32.9, 24863000],
        ['2014-06-05T00:00:00.000Z', 33.67, 34.89, 33.11, 33.89, 40904900],
        ['2014-06-06T00:00:00.000Z', 34.14, 34.41, 33.22, 33.33, 23353200],
        ['2014-06-09T00:00:00.000Z', 33.24, 34.55, 33.09, 34.47, 23397200],
        ['2014-06-10T00:00:00.000Z', 34.73, 35.5, 34.66, 35.37, 36503400],
        ['2014-06-11T00:00:00.000Z', 35.07, 35.97, 34.93, 35.54, 30021300],
        ['2014-06-12T00:00:00.000Z', 35.06, 37.27, 35.06, 36.79, 58146100],
        ['2014-06-13T00:00:00.000Z', 36.85, 37.25, 35.9, 36.9, 29129900],
        ['2014-06-16T00:00:00.000Z', 36.7, 38.17, 36.44, 38.02, 29889300],
        ['2014-06-17T00:00:00.000Z', 38.03, 38.55, 37.3, 38.02, 30321500],
        ['2014-06-18T00:00:00.000Z', 38.16, 38.83, 37.75, 38.74, 23707500],
        ['2014-06-19T00:00:00.000Z', 38.73, 39.3, 38.32, 38.9, 24648300],
        ['2014-06-20T00:00:00.000Z', 38.82, 39.24, 37.77, 39.24, 41501100],
        ['2014-06-23T00:00:00.000Z', 39.07, 39.58, 38.73, 39.52, 22591300],
        ['2014-06-24T00:00:00.000Z', 39.44, 39.64, 38.26, 38.48, 24477900],
        ['2014-06-25T00:00:00.000Z', 38.24, 39.59, 38.01, 39.46, 25457200],
        ['2014-06-26T00:00:00.000Z', 40.05, 42, 39.81, 41.44, 45348500],
        ['2014-06-27T00:00:00.000Z', 40.7, 41.15, 40.11, 40.93, 48253400],
        ['2014-06-30T00:00:00.000Z', 40.81, 41.34, 40.35, 40.97, 22783000],
        ['2014-07-01T00:00:00.000Z', 42.06, 42.95, 41.91, 42.05, 36019300],
        ['2014-07-02T00:00:00.000Z', 42.83, 42.83, 41.42, 41.77, 24377500],
        ['2014-07-03T00:00:00.000Z', 41.94, 42, 40.83, 41.33, 15795100],
        ['2014-07-07T00:00:00.000Z', 41.08, 41.45, 40.14, 40.23, 21454500],
        ['2014-07-08T00:00:00.000Z', 39.96, 40.04, 36.84, 37.41, 49952000],
        ['2014-07-09T00:00:00.000Z', 37.82, 38.35, 37.35, 38.06, 26838300],
        ['2014-07-10T00:00:00.000Z', 36.49, 38.1, 36.11, 37.84, 26549700],
        ['2014-07-11T00:00:00.000Z', 38.15, 38.79, 38, 38.33, 21084800],
        ['2014-07-14T00:00:00.000Z', 38.57, 39.38, 38.2, 38.31, 19705000],
        ['2014-07-15T00:00:00.000Z', 38.59, 38.99, 37.62, 37.88, 24630600],
        ['2014-07-16T00:00:00.000Z', 38.31, 38.52, 37.1, 37.43, 19726500],
        ['2014-07-17T00:00:00.000Z', 36.8, 37.17, 36.38, 36.87, 22631500],
        ['2014-07-18T00:00:00.000Z', 36.81, 37.08, 35.95, 37.05, 26435500],
        ['2014-07-21T00:00:00.000Z', 37.23, 38.29, 36.85, 38.05, 19685400],
        ['2014-07-22T00:00:00.000Z', 38.31, 38.6, 37.45, 37.65, 16837800],
        ['2014-07-23T00:00:00.000Z', 37.65, 38.19, 37.56, 37.75, 13220700],
        ['2014-07-24T00:00:00.000Z', 38.71, 39, 37.85, 38.71, 22105600],
        ['2014-07-25T00:00:00.000Z', 38.2, 38.8, 38.02, 38.16, 15980800],
        ['2014-07-28T00:00:00.000Z', 38.3, 38.44, 37.56, 37.93, 16781700],
        ['2014-07-29T00:00:00.000Z', 38.11, 38.92, 37.99, 38.59, 65338000],
        ['2014-07-30T00:00:00.000Z', 47.01, 48, 45.65, 46.3, 116195900],
        ['2014-07-31T00:00:00.000Z', 44.62, 45.84, 44.3, 45.19, 47170200],
        ['2014-08-01T00:00:00.000Z', 45.01, 45.54, 43.81, 44.13, 37194800],
        ['2014-08-04T00:00:00.000Z', 43.7, 44.53, 43.44, 43.47, 22425000],
        ['2014-08-05T00:00:00.000Z', 43.25, 44.48, 43.02, 43.83, 26404100],
        ['2014-08-06T00:00:00.000Z', 43.39, 44.04, 42.75, 43.46, 20355300],
        ['2014-08-07T00:00:00.000Z', 43.37, 44.37, 42.89, 43, 25389100],
        ['2014-08-08T00:00:00.000Z', 43.02, 43.36, 42.51, 43.13, 14967900],
        ['2014-08-11T00:00:00.000Z', 43.48, 43.6, 42.71, 43.27, 18420300],
        ['2014-08-12T00:00:00.000Z', 44.38, 44.72, 43.61, 43.81, 29582300],
        ['2014-08-13T00:00:00.000Z', 44.12, 44.34, 43.62, 44.15, 16148000],
        ['2014-08-14T00:00:00.000Z', 44.4, 45.34, 44.04, 45.33, 23598000],
        ['2014-08-15T00:00:00.000Z', 45.47, 45.5, 44.44, 44.76, 17776700],
        ['2014-08-18T00:00:00.000Z', 45.06, 45.33, 44.77, 45.12, 14814000],
        ['2014-08-19T00:00:00.000Z', 45.24, 45.45, 45.03, 45.09, 11873100],
        ['2014-08-20T00:00:00.000Z', 44.93, 45.21, 44.76, 45.06, 10367200],
        ['2014-08-21T00:00:00.000Z', 45.29, 45.35, 44.84, 45.11, 10598300],
        ['2014-08-22T00:00:00.000Z', 45.04, 46.14, 44.8, 45.98, 19411300],
        ['2014-08-25T00:00:00.000Z', 46.22, 46.36, 45.7, 46.1, 17548000],
        ['2014-08-26T00:00:00.000Z', 46.1, 48.2, 46.04, 48.17, 27573100],
        ['2014-08-27T00:00:00.000Z', 48.24, 48.46, 47.18, 48.06, 26110800],
        ['2014-08-28T00:00:00.000Z', 47.98, 49.88, 47.86, 49.43, 35030200],
        ['2014-08-29T00:00:00.000Z', 49.89, 50.35, 49.13, 49.75, 31912200],
        ['2014-09-02T00:00:00.000Z', 50.02, 51.34, 49.9, 51.02, 28192200],
        ['2014-09-03T00:00:00.000Z', 51.83, 51.85, 49.05, 49.33, 34366600],
        ['2014-09-04T00:00:00.000Z', 49.69, 50.86, 49.22, 50.24, 24393700],
      ])

      cryptoChart.data.twtr.preroll = 33

      cryptoChart.data.fb.ohlc = mapToStructure([
        ['2013-06-03T00:00:00.000Z', 24.27, 24.32, 23.71, 23.85, 35733800],
        ['2013-06-04T00:00:00.000Z', 23.89, 23.93, 23.32, 23.52, 34760800],
        ['2013-06-05T00:00:00.000Z', 23.35, 23.71, 22.79, 22.9, 53819700],
        ['2013-06-06T00:00:00.000Z', 22.99, 23.09, 22.67, 22.97, 31260700],
        ['2013-06-07T00:00:00.000Z', 23.03, 23.4, 22.86, 23.29, 38699200],
        ['2013-06-10T00:00:00.000Z', 24.06, 24.6, 23.99, 24.33, 58393000],
        ['2013-06-11T00:00:00.000Z', 24.03, 24.35, 24, 24.03, 29885900],
        ['2013-06-12T00:00:00.000Z', 24.16, 24.26, 23.58, 23.77, 26445800],
        ['2013-06-13T00:00:00.000Z', 23.72, 23.83, 23.27, 23.73, 31189300],
        ['2013-06-14T00:00:00.000Z', 23.56, 23.89, 23.26, 23.63, 30677100],
        ['2013-06-17T00:00:00.000Z', 23.91, 24.25, 23.75, 24.02, 33664500],
        ['2013-06-18T00:00:00.000Z', 24.09, 24.69, 24.08, 24.21, 36709100],
        ['2013-06-19T00:00:00.000Z', 24.2, 25.19, 24.1, 24.31, 31790600],
        ['2013-06-20T00:00:00.000Z', 24.28, 24.75, 23.65, 23.9, 42765600],
        ['2013-06-21T00:00:00.000Z', 24.59, 24.7, 24.05, 24.53, 45833900],
        ['2013-06-24T00:00:00.000Z', 23.95, 24.11, 23.38, 23.94, 40626000],
        ['2013-06-25T00:00:00.000Z', 24.14, 24.43, 24.04, 24.25, 24713200],
        ['2013-06-26T00:00:00.000Z', 24.51, 24.65, 23.99, 24.16, 29890300],
        ['2013-06-27T00:00:00.000Z', 24.24, 24.84, 24.21, 24.66, 34694100],
        ['2013-06-28T00:00:00.000Z', 24.68, 24.98, 24.42, 24.88, 96778900],
        ['2013-07-01T00:00:00.000Z', 24.97, 25.06, 24.62, 24.81, 20582200],
        ['2013-07-02T00:00:00.000Z', 24.7, 24.77, 24.3, 24.41, 18394100],
        ['2013-07-03T00:00:00.000Z', 24.22, 24.71, 24.15, 24.52, 10404400],
        ['2013-07-05T00:00:00.000Z', 24.65, 24.66, 24.2, 24.37, 20229500],
        ['2013-07-08T00:00:00.000Z', 24.47, 25.04, 24.42, 24.71, 27064600],
        ['2013-07-09T00:00:00.000Z', 25.07, 25.49, 25.03, 25.48, 30387900],
        ['2013-07-10T00:00:00.000Z', 25.58, 25.83, 25.47, 25.8, 26721800],
        ['2013-07-11T00:00:00.000Z', 25.96, 26, 25.45, 25.81, 26777400],
        ['2013-07-12T00:00:00.000Z', 25.74, 25.93, 25.55, 25.91, 16537900],
        ['2013-07-15T00:00:00.000Z', 25.93, 26.43, 25.65, 26.28, 24234000],
        ['2013-07-16T00:00:00.000Z', 26.39, 26.75, 26.01, 26.32, 30817600],
        ['2013-07-17T00:00:00.000Z', 26.37, 26.78, 26.3, 26.65, 21518500],
        ['2013-07-18T00:00:00.000Z', 26.75, 26.77, 26.12, 26.18, 24806900],
        ['2013-07-19T00:00:00.000Z', 25.82, 26.11, 25.6, 25.88, 46539700],
        ['2013-07-22T00:00:00.000Z', 25.99, 26.13, 25.72, 26.05, 27526300],
        ['2013-07-23T00:00:00.000Z', 26.1, 26.3, 25.97, 26.13, 28221600],
        ['2013-07-24T00:00:00.000Z', 26.32, 26.53, 26.05, 26.51, 82635600],
        ['2013-07-25T00:00:00.000Z', 33.54, 34.88, 32.75, 34.36, 365457900],
        ['2013-07-26T00:00:00.000Z', 33.77, 34.73, 33.56, 34.01, 136028900],
        ['2013-07-29T00:00:00.000Z', 34.07, 35.63, 34.01, 35.43, 124718800],
        ['2013-07-30T00:00:00.000Z', 35.65, 37.96, 35.32, 37.63, 173582800],
        ['2013-07-31T00:00:00.000Z', 37.96, 38.31, 36.33, 36.8, 154828700],
        ['2013-08-01T00:00:00.000Z', 37.3, 38.29, 36.92, 37.49, 106066500],
        ['2013-08-02T00:00:00.000Z', 37.66, 38.49, 37.5, 38.05, 73058500],
        ['2013-08-05T00:00:00.000Z', 38.43, 39.32, 38.25, 39.19, 79994800],
        ['2013-08-06T00:00:00.000Z', 39.11, 39.25, 37.94, 38.55, 63950800],
        ['2013-08-07T00:00:00.000Z', 38.61, 38.94, 37.7, 38.87, 68854800],
        ['2013-08-08T00:00:00.000Z', 39.13, 39.19, 38.43, 38.54, 41301000],
        ['2013-08-09T00:00:00.000Z', 38.59, 38.74, 38.01, 38.5, 43532300],
        ['2013-08-12T00:00:00.000Z', 38.2, 38.5, 38.1, 38.22, 31161000],
        ['2013-08-13T00:00:00.000Z', 38.24, 38.32, 36.77, 37.02, 65379200],
        ['2013-08-14T00:00:00.000Z', 36.83, 37.55, 36.62, 36.65, 48423900],
        ['2013-08-15T00:00:00.000Z', 36.36, 37.07, 36.02, 36.56, 56521100],
        ['2013-08-16T00:00:00.000Z', 36.97, 37.49, 36.9, 37.08, 45840800],
        ['2013-08-19T00:00:00.000Z', 37.43, 38.28, 37.14, 37.81, 57609600],
        ['2013-08-20T00:00:00.000Z', 38.35, 38.58, 37.69, 38.41, 57995200],
        ['2013-08-21T00:00:00.000Z', 38.38, 38.85, 38.15, 38.32, 46116900],
        ['2013-08-22T00:00:00.000Z', 38.37, 38.75, 38.34, 38.55, 21931200],
        ['2013-08-23T00:00:00.000Z', 39, 40.63, 38.93, 40.55, 86442300],
        ['2013-08-26T00:00:00.000Z', 40.9, 41.94, 40.62, 41.34, 94162400],
        ['2013-08-27T00:00:00.000Z', 40.68, 41.2, 39.42, 39.64, 72695100],
        ['2013-08-28T00:00:00.000Z', 39.96, 40.85, 39.88, 40.55, 57918200],
        ['2013-08-29T00:00:00.000Z', 40.89, 41.78, 40.8, 41.28, 58303400],
        ['2013-08-30T00:00:00.000Z', 42.02, 42.26, 41.06, 41.29, 67735100],
        ['2013-09-03T00:00:00.000Z', 41.84, 42.16, 41.51, 41.87, 48774900],
        ['2013-09-04T00:00:00.000Z', 42.01, 42.17, 41.44, 41.78, 42581900],
        ['2013-09-05T00:00:00.000Z', 41.79, 42.77, 41.77, 42.66, 50035400],
        ['2013-09-06T00:00:00.000Z', 43.09, 44.61, 42.4, 43.95, 117535700],
        ['2013-09-09T00:00:00.000Z', 44.36, 44.79, 43.7, 44.04, 75794700],
        ['2013-09-10T00:00:00.000Z', 44.24, 44.26, 43.23, 43.6, 54540300],
        ['2013-09-11T00:00:00.000Z', 43.39, 45.09, 43.11, 45.04, 72328300],
        ['2013-09-12T00:00:00.000Z', 45.53, 45.62, 44.65, 44.75, 68072300],
        ['2013-09-13T00:00:00.000Z', 45.04, 45.08, 43.93, 44.31, 52765300],
        ['2013-09-16T00:00:00.000Z', 44.85, 44.94, 42.43, 42.51, 70424200],
        ['2013-09-17T00:00:00.000Z', 42.5, 45.44, 42.43, 45.07, 91934600],
        ['2013-09-18T00:00:00.000Z', 44.84, 45.47, 44.4, 45.23, 79317000],
        ['2013-09-19T00:00:00.000Z', 45.51, 46.05, 45.23, 45.98, 63972400],
        ['2013-09-20T00:00:00.000Z', 46.32, 47.6, 45.74, 47.49, 115508400],
        ['2013-09-23T00:00:00.000Z', 47.28, 47.55, 46.29, 47.19, 75177000],
        ['2013-09-24T00:00:00.000Z', 48.51, 49.66, 48.16, 48.45, 136716100],
        ['2013-09-25T00:00:00.000Z', 49.23, 49.54, 48.46, 49.46, 87879700],
        ['2013-09-26T00:00:00.000Z', 50.01, 50.6, 49.5, 50.39, 98220100],
        ['2013-09-27T00:00:00.000Z', 50.29, 51.28, 49.86, 51.24, 81410500],
        ['2013-09-30T00:00:00.000Z', 50.14, 51.6, 49.8, 50.23, 100095000],
        ['2013-10-01T00:00:00.000Z', 49.97, 51.03, 49.45, 50.42, 98114000],
        ['2013-10-02T00:00:00.000Z', 50.13, 51.1, 49.95, 50.28, 62834000],
        ['2013-10-03T00:00:00.000Z', 50.47, 50.72, 49.06, 49.18, 82045000],
        ['2013-10-04T00:00:00.000Z', 49.77, 51.16, 49.57, 51.04, 74447000],
        ['2013-10-07T00:00:00.000Z', 50.73, 51.29, 50.4, 50.52, 57204000],
        ['2013-10-08T00:00:00.000Z', 50.6, 50.6, 47.08, 47.14, 136081000],
        ['2013-10-09T00:00:00.000Z', 47.38, 47.84, 45.26, 46.77, 147297000],
        ['2013-10-10T00:00:00.000Z', 47.87, 49.68, 47.83, 49.05, 99774000],
        ['2013-10-11T00:00:00.000Z', 49.18, 49.87, 48.79, 49.11, 58428000],
        ['2013-10-14T00:00:00.000Z', 48.31, 49.63, 47.91, 49.51, 68781000],
        ['2013-10-15T00:00:00.000Z', 49.99, 51, 49.18, 49.5, 81167000],
        ['2013-10-16T00:00:00.000Z', 50.04, 51.24, 49.9, 51.14, 64678000],
        ['2013-10-17T00:00:00.000Z', 51.12, 52.22, 50.95, 52.21, 71522000],
        ['2013-10-18T00:00:00.000Z', 54.18, 54.83, 53.6, 54.22, 88260000],
        ['2013-10-21T00:00:00.000Z', 54.68, 54.81, 53.51, 53.85, 58235000],
        ['2013-10-22T00:00:00.000Z', 54.33, 54.76, 52.2, 52.68, 83204000],
        ['2013-10-23T00:00:00.000Z', 51.75, 52.25, 51.13, 51.9, 57207000],
        ['2013-10-24T00:00:00.000Z', 52.38, 52.84, 51.59, 52.45, 46775000],
        ['2013-10-25T00:00:00.000Z', 53.18, 53.24, 51.88, 51.95, 45085000],
        ['2013-10-28T00:00:00.000Z', 51.54, 51.7, 49.61, 50.23, 73472000],
        ['2013-10-29T00:00:00.000Z', 50.73, 50.79, 49.25, 49.4, 102143000],
        ['2013-10-30T00:00:00.000Z', 50, 50.21, 48.75, 49.01, 127073000],
        ['2013-10-31T00:00:00.000Z', 47.16, 52, 46.5, 50.21, 248809000],
        ['2013-11-01T00:00:00.000Z', 50.85, 52.09, 49.72, 49.75, 95033000],
        ['2013-11-04T00:00:00.000Z', 49.37, 49.75, 48.02, 48.22, 80371000],
        ['2013-11-05T00:00:00.000Z', 47.79, 50.18, 47.51, 50.11, 76835000],
        ['2013-11-06T00:00:00.000Z', 50.26, 50.45, 48.71, 49.12, 67889000],
        ['2013-11-07T00:00:00.000Z', 49.24, 49.87, 47.3, 47.56, 97128000],
        ['2013-11-08T00:00:00.000Z', 47.81, 48.65, 47.25, 47.53, 70731000],
        ['2013-11-11T00:00:00.000Z', 47.04, 47.53, 45.73, 46.2, 80910000],
        ['2013-11-12T00:00:00.000Z', 46, 47.37, 45.83, 46.61, 68196000],
        ['2013-11-13T00:00:00.000Z', 46.23, 48.74, 46.06, 48.71, 79245000],
        ['2013-11-14T00:00:00.000Z', 48.7, 49.57, 48.03, 48.99, 75117000],
        ['2013-11-15T00:00:00.000Z', 49.11, 49.48, 48.71, 49.01, 42453000],
        ['2013-11-18T00:00:00.000Z', 48.47, 48.84, 45.8, 45.83, 85910000],
        ['2013-11-19T00:00:00.000Z', 46.26, 47, 45.72, 46.36, 75602000],
        ['2013-11-20T00:00:00.000Z', 46.61, 47.55, 46.31, 46.43, 53933000],
        ['2013-11-21T00:00:00.000Z', 46.99, 47.46, 46.69, 46.7, 34886000],
        ['2013-11-22T00:00:00.000Z', 47.04, 47.27, 45.96, 46.23, 40545000],
        ['2013-11-25T00:00:00.000Z', 46.36, 46.65, 44.04, 44.82, 82565000],
        ['2013-11-26T00:00:00.000Z', 44.66, 46.17, 43.55, 45.89, 82016000],
        ['2013-11-27T00:00:00.000Z', 45.97, 46.67, 45.53, 46.49, 44993000],
        ['2013-11-29T00:00:00.000Z', 46.75, 47.21, 46.5, 47.01, 22953900],
        ['2013-12-02T00:00:00.000Z', 46.9, 47.54, 46.26, 47.06, 50774000],
        ['2013-12-03T00:00:00.000Z', 46.75, 47.2, 46.29, 46.73, 32086000],
        ['2013-12-04T00:00:00.000Z', 46.46, 48.77, 46.26, 48.62, 60890000],
        ['2013-12-05T00:00:00.000Z', 48.15, 48.7, 47.87, 48.34, 43855000],
        ['2013-12-06T00:00:00.000Z', 48.98, 49.39, 47.71, 47.94, 42938000],
        ['2013-12-09T00:00:00.000Z', 48.09, 48.97, 47.74, 48.84, 36056000],
        ['2013-12-10T00:00:00.000Z', 48.64, 50.77, 48.54, 50.25, 68479000],
        ['2013-12-11T00:00:00.000Z', 50.55, 50.77, 49.01, 49.38, 65776000],
        ['2013-12-12T00:00:00.000Z', 51.05, 52.07, 50.66, 51.83, 92723000],
        ['2013-12-13T00:00:00.000Z', 51.66, 53.5, 51.34, 53.32, 82641000],
        ['2013-12-16T00:00:00.000Z', 53.25, 54.5, 52.91, 53.81, 85119000],
        ['2013-12-17T00:00:00.000Z', 54.76, 55.18, 54.24, 54.86, 78751000],
        ['2013-12-18T00:00:00.000Z', 54.86, 55.89, 53.75, 55.57, 76003000],
        ['2013-12-19T00:00:00.000Z', 54.33, 55.19, 53.95, 55.05, 89753200],
        ['2013-12-20T00:00:00.000Z', 54.93, 55.15, 54.23, 55.12, 239824000],
        ['2013-12-23T00:00:00.000Z', 55.5, 58.32, 55.45, 57.77, 98297000],
        ['2013-12-24T00:00:00.000Z', 58.27, 58.58, 56.91, 57.96, 46617800],
        ['2013-12-26T00:00:00.000Z', 58.32, 58.38, 57.37, 57.73, 55101000],
        ['2013-12-27T00:00:00.000Z', 57.48, 57.68, 55.25, 55.44, 60466000],
        ['2013-12-30T00:00:00.000Z', 54.93, 55.18, 53.43, 53.71, 68307000],
        ['2013-12-31T00:00:00.000Z', 54.12, 54.86, 53.91, 54.65, 43076200],
        ['2014-01-02T00:00:00.000Z', 54.83, 55.22, 54.19, 54.71, 43195500],
        ['2014-01-03T00:00:00.000Z', 55.02, 55.65, 54.53, 54.56, 38246200],
        ['2014-01-06T00:00:00.000Z', 54.42, 57.26, 54.05, 57.2, 68852600],
        ['2014-01-07T00:00:00.000Z', 57.7, 58.55, 57.22, 57.92, 77207400],
        ['2014-01-08T00:00:00.000Z', 57.6, 58.41, 57.23, 58.23, 56682400],
        ['2014-01-09T00:00:00.000Z', 58.65, 58.96, 56.65, 57.22, 92253300],
        ['2014-01-10T00:00:00.000Z', 57.13, 58.3, 57.06, 57.94, 42449500],
        ['2014-01-13T00:00:00.000Z', 57.91, 58.25, 55.38, 55.91, 63010900],
        ['2014-01-14T00:00:00.000Z', 56.46, 57.78, 56.1, 57.74, 37503600],
        ['2014-01-15T00:00:00.000Z', 57.98, 58.57, 57.27, 57.6, 33663400],
        ['2014-01-16T00:00:00.000Z', 57.26, 58.02, 56.83, 57.19, 34541800],
        ['2014-01-17T00:00:00.000Z', 57.3, 57.82, 56.07, 56.3, 40849200],
        ['2014-01-21T00:00:00.000Z', 56.6, 58.58, 56.5, 58.51, 48669200],
        ['2014-01-22T00:00:00.000Z', 58.85, 59.31, 57.1, 57.51, 61352900],
        ['2014-01-23T00:00:00.000Z', 56.37, 56.68, 55.69, 56.63, 47951800],
        ['2014-01-24T00:00:00.000Z', 56.15, 56.42, 54.4, 54.45, 55200700],
        ['2014-01-27T00:00:00.000Z', 54.73, 54.94, 51.85, 53.55, 73924100],
        ['2014-01-28T00:00:00.000Z', 54.02, 55.28, 54, 55.14, 48191200],
        ['2014-01-29T00:00:00.000Z', 54.61, 54.95, 53.19, 53.53, 92995600],
        ['2014-01-30T00:00:00.000Z', 62.12, 62.5, 60.46, 61.08, 150178900],
        ['2014-01-31T00:00:00.000Z', 60.47, 63.37, 60.17, 62.57, 87794600],
        ['2014-02-03T00:00:00.000Z', 63.03, 63.77, 60.7, 61.48, 74866600],
        ['2014-02-04T00:00:00.000Z', 62.05, 63.14, 61.82, 62.75, 45985500],
        ['2014-02-05T00:00:00.000Z', 62.74, 63.16, 61.27, 62.19, 51685100],
        ['2014-02-06T00:00:00.000Z', 61.46, 62.78, 61.46, 62.16, 42086500],
        ['2014-02-07T00:00:00.000Z', 62.27, 64.57, 62.22, 64.32, 60704300],
        ['2014-02-10T00:00:00.000Z', 64.3, 64.49, 63.47, 63.55, 43666100],
        ['2014-02-11T00:00:00.000Z', 63.75, 65, 63.35, 64.85, 45675600],
        ['2014-02-12T00:00:00.000Z', 64.92, 65.06, 64.05, 64.45, 47282100],
        ['2014-02-13T00:00:00.000Z', 64.18, 67.33, 64.05, 67.33, 61911700],
        ['2014-02-14T00:00:00.000Z', 67.5, 67.58, 66.72, 67.09, 36694900],
        ['2014-02-18T00:00:00.000Z', 66.94, 67.54, 66.07, 67.3, 43809900],
        ['2014-02-19T00:00:00.000Z', 67.05, 69.08, 67, 68.06, 62087100],
        ['2014-02-20T00:00:00.000Z', 67.73, 70.11, 65.73, 69.63, 130928900],
        ['2014-02-21T00:00:00.000Z', 69.69, 69.96, 68.45, 68.59, 70932400],
        ['2014-02-24T00:00:00.000Z', 68.74, 71.44, 68.54, 70.78, 76620300],
        ['2014-02-25T00:00:00.000Z', 70.95, 71, 69.45, 69.85, 52077000],
        ['2014-02-26T00:00:00.000Z', 70.19, 71.22, 68.85, 69.26, 55322700],
        ['2014-02-27T00:00:00.000Z', 69.34, 70.01, 68.87, 68.94, 41653700],
        ['2014-02-28T00:00:00.000Z', 69.47, 69.88, 67.38, 68.46, 66783700],
        ['2014-03-03T00:00:00.000Z', 66.96, 68.05, 66.51, 67.41, 56824100],
        ['2014-03-04T00:00:00.000Z', 68.66, 68.9, 67.62, 68.8, 42013500],
        ['2014-03-05T00:00:00.000Z', 69.69, 71.97, 69.62, 71.57, 74567700],
        ['2014-03-06T00:00:00.000Z', 71.88, 71.89, 70.25, 70.84, 46026500],
        ['2014-03-07T00:00:00.000Z', 71.08, 71.18, 69.47, 69.8, 38927000],
        ['2014-03-10T00:00:00.000Z', 70.77, 72.15, 70.51, 72.03, 59871600],
        ['2014-03-11T00:00:00.000Z', 72.5, 72.59, 69.96, 70.1, 59408300],
        ['2014-03-12T00:00:00.000Z', 69.86, 71.35, 69, 70.88, 46340500],
        ['2014-03-13T00:00:00.000Z', 71.29, 71.35, 68.15, 68.83, 57091000],
        ['2014-03-14T00:00:00.000Z', 68.49, 69.43, 67.46, 67.72, 48227000],
        ['2014-03-17T00:00:00.000Z', 68.18, 68.95, 66.62, 68.74, 52197000],
        ['2014-03-18T00:00:00.000Z', 68.76, 69.6, 68.3, 69.19, 40827000],
        ['2014-03-19T00:00:00.000Z', 69.17, 69.29, 67.47, 68.24, 43981000],
        ['2014-03-20T00:00:00.000Z', 68.01, 68.23, 66.82, 66.97, 44439000],
        ['2014-03-21T00:00:00.000Z', 67.53, 67.92, 66.18, 67.24, 59999900],
        ['2014-03-24T00:00:00.000Z', 67.19, 67.36, 63.36, 64.1, 85696000],
        ['2014-03-25T00:00:00.000Z', 64.89, 66.19, 63.78, 64.89, 68786000],
        ['2014-03-26T00:00:00.000Z', 64.74, 64.95, 60.37, 60.39, 97503900],
        ['2014-03-27T00:00:00.000Z', 60.51, 61.9, 57.98, 60.97, 112650000],
        ['2014-03-28T00:00:00.000Z', 61.34, 61.95, 59.34, 60.01, 67052000],
        ['2014-03-31T00:00:00.000Z', 60.78, 61.52, 59.87, 60.24, 53011000],
        ['2014-04-01T00:00:00.000Z', 60.46, 62.66, 60.24, 62.62, 59291000],
        ['2014-04-02T00:00:00.000Z', 63.21, 63.91, 62.21, 62.72, 66277000],
        ['2014-04-03T00:00:00.000Z', 62.55, 63.17, 59.13, 59.49, 83859000],
        ['2014-04-04T00:00:00.000Z', 59.94, 60.2, 56.32, 56.75, 125214400],
        ['2014-04-07T00:00:00.000Z', 55.9, 58, 55.44, 56.95, 108488000],
        ['2014-04-08T00:00:00.000Z', 57.68, 58.71, 57.17, 58.19, 78836000],
        ['2014-04-09T00:00:00.000Z', 59.63, 62.46, 59.19, 62.41, 100215000],
        ['2014-04-10T00:00:00.000Z', 63.08, 63.18, 58.68, 59.16, 114988000],
        ['2014-04-11T00:00:00.000Z', 57.6, 60.31, 57.31, 58.53, 91452000],
        ['2014-04-14T00:00:00.000Z', 60.09, 60.45, 57.78, 58.89, 72325000],
        ['2014-04-15T00:00:00.000Z', 59.29, 59.68, 55.88, 59.09, 108623000],
        ['2014-04-16T00:00:00.000Z', 59.79, 60.19, 57.74, 59.72, 78774000],
        ['2014-04-17T00:00:00.000Z', 59.3, 60.58, 58.72, 58.94, 88040000],
        ['2014-04-21T00:00:00.000Z', 59.46, 61.24, 59.15, 61.24, 60364000],
        ['2014-04-22T00:00:00.000Z', 62.65, 63.44, 62.22, 63.03, 60631000],
        ['2014-04-23T00:00:00.000Z', 63.45, 63.48, 61.26, 61.36, 96565000],
        ['2014-04-24T00:00:00.000Z', 63.6, 63.65, 59.77, 60.87, 138769000],
        ['2014-04-25T00:00:00.000Z', 59.97, 60.01, 57.57, 57.71, 92502000],
        ['2014-04-28T00:00:00.000Z', 58.05, 58.31, 54.66, 56.14, 107758000],
        ['2014-04-29T00:00:00.000Z', 56.09, 58.28, 55.84, 58.15, 75557000],
        ['2014-04-30T00:00:00.000Z', 57.58, 59.85, 57.16, 59.78, 76093000],
        ['2014-05-01T00:00:00.000Z', 60.43, 62.28, 60.21, 61.15, 82429000],
        ['2014-05-02T00:00:00.000Z', 61.3, 61.89, 60.18, 60.46, 54189000],
        ['2014-05-05T00:00:00.000Z', 59.67, 61.35, 59.18, 61.22, 46057000],
        ['2014-05-06T00:00:00.000Z', 60.98, 61.15, 58.49, 58.53, 55901000],
        ['2014-05-07T00:00:00.000Z', 58.77, 59.3, 56.26, 57.39, 78587000],
        ['2014-05-08T00:00:00.000Z', 57.23, 58.82, 56.5, 56.76, 61251000],
        ['2014-05-09T00:00:00.000Z', 56.85, 57.65, 56.38, 57.24, 52584000],
        ['2014-05-12T00:00:00.000Z', 57.98, 59.9, 57.98, 59.83, 48575000],
        ['2014-05-13T00:00:00.000Z', 59.66, 60.89, 59.51, 59.83, 48525000],
        ['2014-05-14T00:00:00.000Z', 59.53, 60.45, 58.95, 59.23, 47429000],
        ['2014-05-15T00:00:00.000Z', 59.26, 59.38, 57.52, 57.92, 56814000],
        ['2014-05-16T00:00:00.000Z', 58.31, 58.45, 57.31, 58.02, 47933000],
        ['2014-05-19T00:00:00.000Z', 57.89, 59.56, 57.57, 59.21, 43034000],
        ['2014-05-20T00:00:00.000Z', 59.5, 60.19, 58.18, 58.56, 53931000],
        ['2014-05-21T00:00:00.000Z', 58.56, 60.5, 58.25, 60.49, 58992000],
        ['2014-05-22T00:00:00.000Z', 60.94, 61.48, 60.4, 60.52, 54200000],
        ['2014-05-23T00:00:00.000Z', 60.41, 61.45, 60.15, 61.35, 38294000],
        ['2014-05-27T00:00:00.000Z', 61.62, 63.51, 61.57, 63.48, 55682000],
        ['2014-05-28T00:00:00.000Z', 63.39, 64.14, 62.62, 63.51, 47795000],
        ['2014-05-29T00:00:00.000Z', 63.84, 64.3, 63.51, 63.83, 42700000],
        ['2014-05-30T00:00:00.000Z', 63.95, 64.17, 62.56, 63.3, 45253500],
        ['2014-06-02T00:00:00.000Z', 63.23, 63.59, 62.05, 63.08, 35947400],
        ['2014-06-03T00:00:00.000Z', 62.62, 63.42, 62.32, 62.87, 32217000],
        ['2014-06-04T00:00:00.000Z', 62.45, 63.59, 62.07, 63.34, 36514000],
        ['2014-06-05T00:00:00.000Z', 63.66, 64.36, 62.82, 63.19, 47352000],
        ['2014-06-06T00:00:00.000Z', 63.37, 63.48, 62.15, 62.5, 42442000],
        ['2014-06-09T00:00:00.000Z', 62.4, 63.34, 61.79, 62.88, 37617000],
        ['2014-06-10T00:00:00.000Z', 63.53, 65.82, 63.5, 65.77, 69206900],
        ['2014-06-11T00:00:00.000Z', 65.32, 65.8, 64.9, 65.78, 44242000],
        ['2014-06-12T00:00:00.000Z', 65.85, 66.47, 64.06, 64.29, 55730000],
        ['2014-06-13T00:00:00.000Z', 64.7, 64.97, 63.83, 64.5, 29419000],
        ['2014-06-16T00:00:00.000Z', 64.16, 64.88, 63.75, 64.19, 31046000],
        ['2014-06-17T00:00:00.000Z', 64.1, 64.88, 63.93, 64.4, 27715000],
        ['2014-06-18T00:00:00.000Z', 64.49, 65.75, 64.05, 65.6, 35570000],
        ['2014-06-19T00:00:00.000Z', 65.46, 65.58, 64.21, 64.34, 34245000],
        ['2014-06-20T00:00:00.000Z', 64.46, 64.81, 63.35, 64.5, 46466000],
        ['2014-06-23T00:00:00.000Z', 64.32, 65.66, 64.22, 65.37, 34560000],
        ['2014-06-24T00:00:00.000Z', 65.36, 67.17, 65.27, 65.72, 57335000],
        ['2014-06-25T00:00:00.000Z', 65.58, 67.48, 65.57, 67.44, 44308000],
        ['2014-06-26T00:00:00.000Z', 68, 68, 66.9, 67.13, 47714000],
        ['2014-06-27T00:00:00.000Z', 67.31, 67.7, 66.84, 67.6, 46461000],
        ['2014-06-30T00:00:00.000Z', 67.46, 67.92, 67.13, 67.29, 27202000],
        ['2014-07-01T00:00:00.000Z', 67.58, 68.44, 67.39, 68.06, 33243000],
        ['2014-07-02T00:00:00.000Z', 68.04, 68.3, 65.79, 66.45, 41895000],
        ['2014-07-03T00:00:00.000Z', 66.86, 67, 65.76, 66.29, 25203200],
        ['2014-07-07T00:00:00.000Z', 66.3, 66.57, 65.12, 65.29, 28745000],
        ['2014-07-08T00:00:00.000Z', 65.06, 65.56, 62.21, 62.76, 68926000],
        ['2014-07-09T00:00:00.000Z', 63.41, 65.12, 63.15, 64.97, 51432000],
        ['2014-07-10T00:00:00.000Z', 63.31, 65.34, 63.05, 64.87, 44422000],
        ['2014-07-11T00:00:00.000Z', 65.28, 66.59, 64.79, 66.34, 39212000],
        ['2014-07-14T00:00:00.000Z', 67.13, 68.17, 66.9, 67.9, 38537000],
        ['2014-07-15T00:00:00.000Z', 67.96, 68.09, 66.26, 67.17, 44213200],
        ['2014-07-16T00:00:00.000Z', 67.54, 67.94, 67.07, 67.66, 29594000],
        ['2014-07-17T00:00:00.000Z', 67.03, 67.85, 66.04, 66.41, 38188000],
        ['2014-07-18T00:00:00.000Z', 66.8, 68.46, 66.16, 68.42, 42456000],
        ['2014-07-21T00:00:00.000Z', 68.81, 69.96, 68.5, 69.4, 49539000],
        ['2014-07-22T00:00:00.000Z', 69.76, 69.77, 68.61, 69.27, 40398000],
        ['2014-07-23T00:00:00.000Z', 69.74, 71.33, 69.61, 71.29, 78435000],
        ['2014-07-24T00:00:00.000Z', 75.96, 76.74, 74.51, 74.98, 124168000],
        ['2014-07-25T00:00:00.000Z', 74.99, 75.67, 74.66, 75.19, 45917000],
        ['2014-07-28T00:00:00.000Z', 75.17, 75.5, 73.85, 74.92, 41725000],
        ['2014-07-29T00:00:00.000Z', 74.72, 74.92, 73.42, 73.71, 41324000],
        ['2014-07-30T00:00:00.000Z', 74.21, 75.19, 74.13, 74.68, 36853000],
        ['2014-07-31T00:00:00.000Z', 74, 74.17, 72.44, 72.65, 43992000],
        ['2014-08-01T00:00:00.000Z', 72.22, 73.22, 71.55, 72.36, 43535000],
        ['2014-08-04T00:00:00.000Z', 72.36, 73.88, 72.36, 73.51, 30777000],
        ['2014-08-05T00:00:00.000Z', 73.2, 73.59, 72.18, 72.69, 34986000],
        ['2014-08-06T00:00:00.000Z', 72.02, 73.72, 71.79, 72.47, 30986000],
        ['2014-08-07T00:00:00.000Z', 73, 74, 72.7, 73.17, 38141000],
        ['2014-08-08T00:00:00.000Z', 73.4, 73.43, 72.56, 73.06, 27202000],
        ['2014-08-11T00:00:00.000Z', 73.46, 73.91, 73.06, 73.44, 24591000],
        ['2014-08-12T00:00:00.000Z', 73.09, 73.33, 72.22, 72.83, 27419000],
        ['2014-08-13T00:00:00.000Z', 73.12, 74.25, 73.05, 73.77, 29198500],
        ['2014-08-14T00:00:00.000Z', 73.97, 74.38, 73.69, 74.3, 22182800],
        ['2014-08-15T00:00:00.000Z', 74.32, 74.65, 73, 73.63, 38846600],
        ['2014-08-18T00:00:00.000Z', 74, 74.72, 73.96, 74.59, 23913200],
        ['2014-08-19T00:00:00.000Z', 74.81, 75.58, 74.51, 75.29, 26618600],
        ['2014-08-20T00:00:00.000Z', 74.97, 75.18, 74.62, 74.81, 22878000],
        ['2014-08-21T00:00:00.000Z', 74.92, 75.19, 74.41, 74.57, 20075900],
        ['2014-08-22T00:00:00.000Z', 74.34, 74.73, 73.57, 74.57, 20874600],
        ['2014-08-25T00:00:00.000Z', 74.94, 75.28, 74.79, 75.02, 19691100],
        ['2014-08-26T00:00:00.000Z', 75, 75.99, 74.73, 75.96, 23886100],
        ['2014-08-27T00:00:00.000Z', 75.27, 75.49, 74.46, 74.63, 36238700],
        ['2014-08-28T00:00:00.000Z', 74, 74.43, 73.73, 73.86, 21922800],
        ['2014-08-29T00:00:00.000Z', 74.3, 74.82, 74.01, 74.82, 26224300],
        ['2014-09-02T00:00:00.000Z', 75.01, 76.7, 74.82, 76.68, 34785800],
        ['2014-09-03T00:00:00.000Z', 77.14, 77.48, 75.6, 75.83, 32330200],
        ['2014-09-04T00:00:00.000Z', 75.89, 76.93, 75.53, 75.95, 26625500],
      ])

      cryptoChart.data.fb.preroll = 133

      cryptoChart.data.array = [cryptoChart.data.twtr, cryptoChart.data.fb]

      function mapToStructure(data) {
        return data
          .map(function(d) {
            return {
              date: new Date(d[0]),
              open: +d[1],
              high: +d[2],
              low: +d[3],
              close: +d[4],
              volume: +d[5],
            }
          })
          .sort(function(a, b) {
            return d3.ascending(a.date, b.date)
          })
      }
    })()

    var cryptoChart = cryptoChart || {}

    cryptoChart.bigchart = (function(d3, techan) {
      'use strict'

      function BigChart(stock) {
        var dim = {
          width: null,
          height: null,
          margin: { top: 25, right: 50, bottom: 25, left: 50 },
          plot: { width: null, height: null },
          ohlc: { height: null },
          indicator: { height: null, padding: null, top: null, bottom: null },
        }

        var data = stock.ohlc,
          x = techan.scale.financetime(),
          y = d3.scaleLinear(),
          yPercent = y.copy(),
          indicatorTop = d3.scaleLinear(),
          yVolume = d3.scaleLinear(),
          candlestick = techan.plot
            .candlestick()
            .xScale(x)
            .yScale(y),
          sma0 = techan.plot
            .sma()
            .xScale(x)
            .yScale(y),
          sma1 = techan.plot
            .sma()
            .xScale(x)
            .yScale(y),
          ema2 = techan.plot
            .ema()
            .xScale(x)
            .yScale(y),
          volume = techan.plot
            .volume()
            .accessor(candlestick.accessor())
            .xScale(x)
            .yScale(yVolume),
          xAxis = d3.axisBottom(x),
          xAxisTop = d3.axisTop(x),
          timeAnnotation = techan.plot
            .axisannotation()
            .orient('bottom')
            .axis(xAxis)
            .format(d3.timeFormat('%Y-%m-%d'))
            .width(65),
          timeAnnotationTop = techan.plot
            .axisannotation()
            .orient('top')
            .axis(xAxisTop)
            .format(d3.timeFormat('%Y-%m-%d'))
            .width(65),
          yAxis = d3.axisRight(y),
          ohlcAnnotation = techan.plot
            .axisannotation()
            .orient('right')
            .axis(yAxis)
            .format(d3.format(',.2f')),
          closeAnnotation = techan.plot
            .axisannotation()
            .orient('right')
            .accessor(candlestick.accessor())
            .axis(yAxis)
            .format(d3.format(',.2f')),
          percentAxis = d3.axisLeft(yPercent).tickFormat(d3.format('+.1%')),
          percentAnnotation = techan.plot
            .axisannotation()
            .orient('left')
            .axis(percentAxis),
          volumeAxis = d3
            .axisRight(yVolume)
            .ticks(3)
            .tickFormat(d3.format(',.3s')),
          volumeAnnotation = techan.plot
            .axisannotation()
            .orient('right')
            .axis(volumeAxis)
            .width(35),
          macdScale = d3.scaleLinear(),
          rsiScale = d3.scaleLinear(),
          macd = techan.plot
            .macd()
            .xScale(x)
            .yScale(macdScale),
          macdAxis = d3.axisRight(macdScale).ticks(3),
          macdAnnotation = techan.plot
            .axisannotation()
            .orient('right')
            .axis(macdAxis)
            .format(d3.format(',.2s')),
          macdAxisLeft = d3.axisLeft(macdScale).ticks(3),
          macdAnnotationLeft = techan.plot
            .axisannotation()
            .orient('left')
            .axis(macdAxisLeft)
            .format(d3.format(',.2s')),
          rsi = techan.plot
            .rsi()
            .xScale(x)
            .yScale(rsiScale),
          rsiAxis = d3.axisRight(rsiScale).ticks(3),
          rsiAnnotation = techan.plot
            .axisannotation()
            .orient('right')
            .axis(rsiAxis)
            .format(d3.format(',.2s')),
          rsiAxisLeft = d3.axisLeft(rsiScale).ticks(3),
          rsiAnnotationLeft = techan.plot
            .axisannotation()
            .orient('left')
            .axis(rsiAxisLeft)
            .format(d3.format(',.2s')),
          ohlcCrosshair = techan.plot
            .crosshair()
            .xScale(x)
            .yScale(y)
            .xAnnotation([timeAnnotation, timeAnnotationTop])
            .yAnnotation([ohlcAnnotation, percentAnnotation, volumeAnnotation]),
          macdCrosshair = techan.plot
            .crosshair()
            .xScale(x)
            .yScale(macdScale)
            .xAnnotation([timeAnnotation, timeAnnotationTop])
            .yAnnotation([macdAnnotation, macdAnnotationLeft]),
          rsiCrosshair = techan.plot
            .crosshair()
            .xScale(x)
            .yScale(rsiScale)
            .xAnnotation([timeAnnotation, timeAnnotationTop])
            .yAnnotation([rsiAnnotation, rsiAnnotationLeft])

        function bigchart(selection) {
          var svg = selection.append('svg'),
            defs = svg.append('defs')

          defs
            .append('clipPath')
            .attr('id', 'ohlcClip')
            .append('rect')
            .attr('x', 0)
            .attr('y', 0)

          defs
            .append('clipPath')
            .attr('id', 'supstanceClip')
            .append('rect')
            .attr('x', -dim.margin.left)
            .attr('y', 0)

          defs
            .selectAll('.indicatorClip')
            .data([0, 1])
            .enter()
            .append('clipPath')
            .attr('id', function(d, i) {
              return 'indicatorClip-' + i
            })
            .attr('class', 'indicatorClip')
            .append('rect')
            .attr('x', 0)

          svg
            .append('text')
            .attr('class', 'version')
            .style('text-anchor', 'end')
            .text('TechanJS v' + techan.version + ', D3 v' + d3.version)

          svg = svg
            .append('g')
            .attr('class', 'chart')
            .attr('transform', 'translate(' + dim.margin.left + ',' + dim.margin.top + ')')

          svg
            .append('text')
            .attr('class', 'symbol')
            .attr('x', 5)
            .attr('y', 15)
            .text(stock.name)

          svg.append('g').attr('class', 'x axis bottom')

          svg.append('g').attr('class', 'x axis top')

          var ohlcSelection = svg
            .append('g')
            .attr('class', 'ohlc')
            .attr('transform', 'translate(0,0)')

          ohlcSelection.append('g').attr('class', 'y axis')

          ohlcSelection.append('g').attr('class', 'closeValue annotation up')

          ohlcSelection
            .append('g')
            .attr('class', 'volume')
            .attr('clip-path', 'url(#ohlcClip)')

          ohlcSelection
            .append('g')
            .attr('class', 'candlestick')
            .attr('clip-path', 'url(#ohlcClip)')

          ohlcSelection
            .append('g')
            .attr('class', 'indicator sma ma-0')
            .attr('clip-path', 'url(#ohlcClip)')

          ohlcSelection
            .append('g')
            .attr('class', 'indicator sma ma-1')
            .attr('clip-path', 'url(#ohlcClip)')

          ohlcSelection
            .append('g')
            .attr('class', 'indicator ema ma-2')
            .attr('clip-path', 'url(#ohlcClip)')

          ohlcSelection.append('g').attr('class', 'percent axis')

          ohlcSelection.append('g').attr('class', 'volume axis')

          var indicatorSelection = svg
            .selectAll('svg > g.indicator')
            .data(['macd', 'rsi'])
            .enter()
            .append('g')
            .attr('class', function(d) {
              return d + ' indicator'
            })

          indicatorSelection.append('g').attr('class', 'axis right')

          indicatorSelection.append('g').attr('class', 'axis left')

          indicatorSelection
            .append('g')
            .attr('class', 'indicator-plot')
            .attr('clip-path', function(d, i) {
              return 'url(#indicatorClip-' + i + ')'
            })

          svg.append('g').attr('class', 'crosshair ohlc')

          svg.append('g').attr('class', 'crosshair macd')

          svg.append('g').attr('class', 'crosshair rsi')

          var accessor = candlestick.accessor(),
            indicatorPreRoll = stock.preroll,
            postRollData = data.slice(indicatorPreRoll) // Don't show where indicators don't have data

          x.domain(techan.scale.plot.time(data).domain())
          y.domain(techan.scale.plot.ohlc(postRollData).domain())
          yPercent.domain(techan.scale.plot.percent(y, accessor(data[indicatorPreRoll])).domain())
          yVolume.domain(techan.scale.plot.volume(postRollData).domain())

          var macdData = techan.indicator.macd()(data)
          macdScale.domain(techan.scale.plot.macd(macdData).domain())
          var rsiData = techan.indicator.rsi()(data)
          rsiScale.domain(techan.scale.plot.rsi(rsiData).domain())

          x.zoomable().domain([indicatorPreRoll, data.length]) // Zoom in a little to hide indicator preroll
          resize(selection)

          svg
            .select('g.candlestick')
            .datum(data)
            .call(candlestick)
          svg
            .select('g.closeValue.annotation')
            .datum([data[data.length - 1]])
            .call(closeAnnotation)
          svg
            .select('g.volume')
            .datum(data)
            .call(volume)
          svg
            .select('g.sma.ma-0')
            .datum(techan.indicator.sma().period(10)(data))
            .call(sma0)
          svg
            .select('g.sma.ma-1')
            .datum(techan.indicator.sma().period(20)(data))
            .call(sma1)
          svg
            .select('g.ema.ma-2')
            .datum(techan.indicator.ema().period(50)(data))
            .call(ema2)
          svg
            .select('g.macd .indicator-plot')
            .datum(macdData)
            .call(macd)
          svg
            .select('g.rsi .indicator-plot')
            .datum(rsiData)
            .call(rsi)

          svg.select('g.crosshair.ohlc').call(ohlcCrosshair)
          svg.select('g.crosshair.macd').call(macdCrosshair)
          svg.select('g.crosshair.rsi').call(rsiCrosshair)

          selection.call(draw)
        }

        bigchart.resize = function(selection) {
          selection.call(resize).call(draw)
        }

        function resize(selection) {
          dim.width = selection.node().clientWidth
          dim.height = selection.node().clientHeight
          dim.plot.width = dim.width - dim.margin.left - dim.margin.right
          dim.plot.height = dim.height - dim.margin.top - dim.margin.bottom
          dim.ohlc.height = dim.plot.height * 0.67777777
          dim.indicator.height = dim.plot.height * 0.144444
          dim.indicator.padding = dim.plot.height * 0.01111111111
          dim.indicator.top = dim.ohlc.height + dim.indicator.padding
          dim.indicator.bottom = dim.indicator.top + dim.indicator.height + dim.indicator.padding

          var xRange = [0, dim.plot.width],
            yRange = [dim.ohlc.height, 0],
            ohlcVerticalTicks = Math.min(10, Math.round(dim.height / 70)),
            xTicks = Math.min(10, Math.round(dim.width / 130))

          indicatorTop.range([dim.indicator.top, dim.indicator.bottom])
          x.range(xRange)
          xAxis.ticks(xTicks)
          xAxisTop.ticks(xTicks)
          y.range(yRange)
          yAxis.ticks(ohlcVerticalTicks)
          yPercent.range(y.range())
          percentAxis.ticks(ohlcVerticalTicks)
          yVolume.range([yRange[0], yRange[0] - 0.2 * yRange[0]])
          volumeAxis.ticks(Math.min(3, Math.round(dim.height / 150)))
          timeAnnotation.translate([0, dim.plot.height])
          ohlcAnnotation.translate([xRange[1], 0])
          closeAnnotation.translate([xRange[1], 0])
          macdScale.range([indicatorTop(0) + dim.indicator.height, indicatorTop(0)])
          rsiScale.range([indicatorTop(1) + dim.indicator.height, indicatorTop(1)])
          macdAnnotation.translate([xRange[1], 0])
          rsiAnnotation.translate([xRange[1], 0])
          ohlcCrosshair.verticalWireRange([0, dim.plot.height])
          macdCrosshair.verticalWireRange([0, dim.plot.height])
          rsiCrosshair.verticalWireRange([0, dim.plot.height])

          selection
            .select('svg')
            .attr('width', dim.width)
            .attr('height', dim.height)

          selection
            .select('text.version')
            .attr('x', dim.width - 5)
            .attr('y', dim.height)

          selection
            .selectAll('defs #ohlcClip > rect')
            .attr('width', dim.plot.width)
            .attr('height', dim.ohlc.height)

          selection
            .selectAll('defs #supstanceClip > rect')
            .attr('width', dim.width)
            .attr('height', dim.ohlc.height)

          selection
            .selectAll('defs .indicatorClip > rect')
            .attr('y', function(d, i) {
              return indicatorTop(i)
            })
            .attr('width', dim.plot.width)
            .attr('height', dim.indicator.height)

          selection
            .select('g.x.axis.bottom')
            .attr('transform', 'translate(0,' + dim.plot.height + ')')

          selection.select('g.ohlc g.y.axis').attr('transform', 'translate(' + xRange[1] + ',0)')

          selection
            .selectAll('g.indicator g.axis.right')
            .attr('transform', 'translate(' + xRange[1] + ',0)')
          selection
            .selectAll('g.indicator g.axis.left')
            .attr('transform', 'translate(' + xRange[0] + ',0)')
        }

        function draw(selection) {
          var svg = selection.select('svg')
          svg.select('g.x.axis.bottom').call(xAxis)
          svg.select('g.x.axis.top').call(xAxisTop)
          svg.select('g.ohlc .axis').call(yAxis)
          svg.select('g.volume.axis').call(volumeAxis)
          svg.select('g.percent.axis').call(percentAxis)
          svg.select('g.macd .axis.right').call(macdAxis)
          svg.select('g.rsi .axis.right').call(rsiAxis)
          svg.select('g.macd .axis.left').call(macdAxisLeft)
          svg.select('g.rsi .axis.left').call(rsiAxisLeft)

          // We know the data does not change, a simple refresh that does not perform data joins will suffice.
          svg.select('g.candlestick').call(candlestick.refresh)
          svg.select('g.closeValue.annotation').call(closeAnnotation.refresh)
          svg.select('g.volume').call(volume.refresh)
          svg.select('g .sma.ma-0').call(sma0.refresh)
          svg.select('g .sma.ma-1').call(sma1.refresh)
          svg.select('g .ema.ma-2').call(ema2.refresh)
          svg.select('g.macd .indicator-plot').call(macd.refresh)
          svg.select('g.rsi .indicator-plot').call(rsi.refresh)
          svg.select('g.crosshair.ohlc').call(ohlcCrosshair.refresh)
          svg.select('g.crosshair.macd').call(macdCrosshair.refresh)
          svg.select('g.crosshair.rsi').call(rsiCrosshair.refresh)
        }

        return bigchart
      }

      return BigChart(cryptoChart.data.array[Math.round(Math.random())])
    })(d3, techan)
    ;(function(window, d3, cryptoChart) {
      d3.select('div#cryptoChart').call(cryptoChart.bigchart)
      window.onresize = function() {
        d3.select('div#cryptoChart').call(cryptoChart.bigchart.resize)
      }
    })(window, d3, cryptoChart)
  })(jQuery)
</script>
<!-- END: page scripts -->

@endsection
