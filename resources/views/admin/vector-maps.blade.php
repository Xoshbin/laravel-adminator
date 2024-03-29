@extends('admin.layouts.admin')

@section('content')
<main class='main-content bgc-grey-100'>
  <div id='mainContent'>
    <div class="container-fluid">
      <h4 class="c-grey-900 mT-10 mB-30">Vector Maps</h4>
      <div class="row">
        <div class="col-md-12">
          <div class="bgc-white bd bdrs-3 p-20 mB-20">
            <h6 class="c-grey-900 mB-20">Jquery Vector Maps</h6>
            <div id="world-map-marker"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection
