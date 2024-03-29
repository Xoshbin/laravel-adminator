@extends('admin.layouts.admin')

@section('content')
<main class='main-content bgc-grey-100'>
  <div id='mainContent'>
    <div class="row gap-20 masonry pos-r">
      <div class="masonry-sizer col-md-6 pos-a"></div>
      <div class="masonry-item col-md-6">
        <div class="bgc-white p-20 bd">
          <h6 class="c-grey-900">Line Chart</h6>
          <div class="mT-30">
            <canvas id="line-chart" height="220"></canvas>
          </div>
        </div>
      </div>
      <div class="masonry-item col-md-6">
        <div class="bgc-white p-20 bd">
          <h6 class="c-grey-900">Area Chart</h6>
          <div class="mT-30">
            <canvas id="area-chart" height="220"></canvas>
          </div>
        </div>
      </div>
      <div class="masonry-item col-md-6">
        <div class="bgc-white p-20 bd">
          <h6 class="c-grey-900">Scatter Chart</h6>
          <div class="mT-30">
            <canvas id="scatter-chart" height="220"></canvas>
          </div>
        </div>
      </div>
      <div class="masonry-item col-md-6">
        <div class="bgc-white p-20 bd">
          <h6 class="c-grey-900">Bar Chart</h6>
          <div class="mT-30">
            <canvas id="bar-chart" height="220"></canvas>
          </div>
        </div>
      </div>
      <div class="masonry-item col-md-6">
        <div class="bgc-white p-20 bd">
          <h6 class="c-grey-900">jQuery Sparkline</h6>
          <div class="mT-30">
            <div class="peers ai-c jc-sb fxw-nw bdB pY-15">
              <div class="peer">
                <span>Spark Line</span>
              </div>
              <div class="peer">
                <span class="sparkline">&nbsp;</span>
              </div>
            </div>
            <div class="peers ai-c jc-sb fxw-nw bdB pY-15">
              <div class="peer">
                <span>Spark Bar</span>
              </div>
              <div class="peer">
                <span class="sparkbar">&nbsp;</span>
              </div>
            </div>
            <div class="peers ai-c jc-sb fxw-nw bdB pY-15">
              <div class="peer">
                <span>Spark Tristate</span>
              </div>
              <div class="peer">
                <span class="sparktri">&nbsp;</span>
              </div>
            </div>
            <div class="peers ai-c jc-sb fxw-nw bdB pY-15">
              <div class="peer">
                <span>Spark Discrete</span>
              </div>
              <div class="peer">
                <span class="sparkdisc">&nbsp;</span>
              </div>
            </div>
            <div class="peers ai-c jc-sb fxw-nw bdB pY-15">
              <div class="peer">
                <span>Spark Bullet</span>
              </div>
              <div class="peer">
                <span class="sparkbull">&nbsp;</span>
              </div>
            </div>
            <div class="peers ai-c jc-sb fxw-nw pT-15">
              <div class="peer">
                <span>Spark Box</span>
              </div>
              <div class="peer">
                <span class="sparkbox">&nbsp;</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="masonry-item col-md-6">
        <div class="bgc-white p-20 bd">
          <h6 class="c-grey-900">Easy Pie Charts</h6>
          <div class="mT-30">
            <div class="peers mT-20 fxw-nw@lg+ jc-sb ta-c gap-10">
              <div class="peer">
                <div class="easy-pie-chart" data-size='80' data-percent="75" data-bar-color='#f44336'>
                  <span></span>
                </div>
                <h6 class="fsz-sm">New Users</h6>
              </div>
              <div class="peer">
                <div class="easy-pie-chart" data-size='80' data-percent="50" data-bar-color='#2196f3'>
                  <span></span>
                </div>
                <h6 class="fsz-sm">New Purchases</h6>
              </div>
              <div class="peer">
                <div class="easy-pie-chart" data-size='80' data-percent="65" data-bar-color='#f44336'>
                  <span></span>
                </div>
                <h6 class="fsz-sm">New Customers</h6>
              </div>
              <div class="peer">
                <div class="easy-pie-chart" data-size='80' data-percent="90" data-bar-color='#ff9800'>
                  <span></span>
                </div>
                <h6 class="fsz-sm">Bounce Rate</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection
