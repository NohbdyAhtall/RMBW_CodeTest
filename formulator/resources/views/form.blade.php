@extends ('layouts.master')

@section('form')
<form>
  
  <!-- Customer Information -->
  <hr>

  <label for="customerInfo"><h3>Customer Information</h3></label>
  <div class="form-group">
    <input type="text" class="form-control" id="custFirstName" placeholder="First Name">
  </div>

  <div class="form-group">
    <input type="text" class="form-control" id="custLastName" placeholder="Last Name">
  </div>

  <div class="form-group">
    <input type="text" class="form-control" id="custAddress1" placeholder="Address 1">
  </div>

  <div class="form-group">
    <input type="text" class="form-control" id="custAddress2" placeholder="Address 2">
  </div>

  <div class="form-group">
    <div class="row">
      <div class="col-sm-3">
        <input type="text" class="form-control" id="custCity" placeholder="City">
      </div>
      <div class="col-sm-1" style="min-width: 76px;">
        <input type="text" class="form-control" id="custState" placeholder="State">
      </div>
      <div class="col-sm-2">
        <input type="text" class="form-control" id="custZip" placeholder="Zip">
      </div>
    </div>
  </div>

  <div class="form-group">
    <input type="text" class="form-control" id="custPhone" placeholder="Contact Phone">
  </div>
  <div class="form-group">
    <input type="email" class="form-control" id="custEmail" placeholder="Email Address">
  </div>


  <!-- Company Information -->
  <hr>

  <label for="customerInfo"><h3>Company Information</h3></label>
  <div class="form-group">
    <input type="text" class="form-control" id="compName" placeholder="Company Name">
  </div>

  <div class="form-group">
    <input type="text" class="form-control" id="compAddress" placeholder="Company Address">
  </div>

  <div class="form-group">
    <div class="row">
      <div class="col-sm-4">
        <input type="text" class="form-control" id="compCity" placeholder="City">
      </div>
      <div class="col-sm-1" style="min-width: 76px;">
        <input type="text" class="form-control" id="compState" placeholder="State">
      </div>
      <div class="col-sm-2">
        <input type="text" class="form-control" id="compZip" placeholder="Zip">
      </div>
    </div>
  </div>

  <div class="form-group">
    <input type="text" class="form-control" id="compPhone" placeholder="Contact Phone">
  </div>

  <div class="form-group">
    <label for="compInvoicePDF">Invoice File</label>
    <input type="file" id="compInvoicePDF">
    <p class="help-block"><i>Note: Only PDF files are allowed.</i></p>
  </div>

  <!-- Form Submission -->
  <button type="submit" class="btn btn-primary">Submit</button>

</form>
<hr>
@endsection

@section ('adminLink')
<h4>
	<a href="/admin">Administrative Control Panel</a>
</h4>
@endsection