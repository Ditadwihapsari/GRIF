@extends('template.template')

@section('isi')
<div class="payment">
  <h3>Payment Confirmation</h3>
    <div class="row">
      <h5>Total fee</h5>
<div class="col-md-6 col-sm-6 wrap-a">
            <strong><p>Guide Service</p></strong>
            <p>IDR 150.000 x 4 Days</p>
</div>
<div class="col-md-6 col-sm-6 wrap-a">
            <p>IDR 600.000</p>
</div>

<div class="row">
  <div class="col-md-6 col-sm-6 wrap-a">
            <strong><p>Convenience Fee</p></strong>
  </div>
  <div class="col-md-6 col-sm-6 wrap-a">
            <p>IDR 277</p>
  </div>
</div>

<div class="row">
  <div class="col-md-6 col-sm-6 wrap-a">
    <strong><p>Total</p></strong>
  </div>
  <div class="col-md-6 col-sm-6 wrap-a">
    <p>IDR 600.277</p>
  </div>

</div>
    </div>
<div class="confim-invoice">
      <a href="#" class="btn btn-green center" data-toggle="modal" data-target="#myModal"> Confirm</a>
</div>
</div>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">success</h4>
      </div>
      <div class="modal-body">
        <p>your request has been processed</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

@endsection
