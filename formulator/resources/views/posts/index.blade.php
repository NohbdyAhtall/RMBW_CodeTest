@extends ('layouts.master')

@section('form')
<form method="POST" action="/posts">

  @csrf
  
  <!-- Customer Information -->
  <hr>

  @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif

  <label for="customerInfo"><h3>Customer Information</h3></label>
  <div class="form-group">
    <input type="text" class="form-control" id="custFirstName" placeholder="First Name" name="custFirstName" required>
  </div>

  <div class="form-group">
    <input type="text" class="form-control" id="custLastName" placeholder="Last Name" name="custLastName" required>
  </div>

  <div class="form-group">
    <input type="text" class="form-control" id="custAddress1" placeholder="Address 1" name="custAddress1" required>
  </div>

  <div class="form-group">
    <input type="text" class="form-control" id="custAddress2" placeholder="Address 2" name="custAddress2" required>
  </div>

  <div class="form-group">
    <div class="row">
      <div class="col-sm-3">
        <input type="text" class="form-control" id="custCity" placeholder="City" name="custCity" required>
      </div>
      <div class="col-sm-1" style="min-width: 76px;">
        <input type="text" class="form-control" id="custState" placeholder="State" name="custState" required>
      </div>
      <div class="col-sm-2">
        <input type="text" class="form-control" id="custZip" placeholder="Zip" name="custZip" required>
      </div>
    </div>
  </div>

  <div class="form-group">
    <input type="text" class="form-control" id="custPhone" placeholder="Contact Phone" name="custPhone" required>
  </div>
  <div class="form-group">
    <input type="email" class="form-control" id="custEmail" placeholder="Email Address" name="custEmail" required>
  </div>


  <!-- Company Information -->
  <hr>

  <label for="customerInfo"><h3>Company Information</h3></label>
  <div class="form-group">
    <input type="text" class="form-control" id="compName" placeholder="Company Name" name="compName" required>
  </div>

  <div class="form-group">
    <input type="text" class="form-control" id="compAddress" placeholder="Company Address" name="compAddress" required>
  </div>

  <div class="form-group">
    <div class="row">
      <div class="col-sm-4">
        <input type="text" class="form-control" id="compCity" placeholder="City" name="compCity" required>
      </div>
      <div class="col-sm-1" style="min-width: 76px;">
        <input type="text" class="form-control" id="compState" placeholder="State" name="compState" required>
      </div>
      <div class="col-sm-2">
        <input type="text" class="form-control" id="compZip" placeholder="Zip" name="compZip" required>
      </div>
    </div>
  </div>

  <div class="form-group">
    <input type="text" class="form-control" id="compPhone" placeholder="Contact Phone" name="compPhone" required>
  </div>

  <div class="form-group">
    <label for="compInvoicePDF">Invoice File</label>
    <!-- Validation  -->
    <input type="file" id="compInvoicePDF" name="compInvoicePDF">
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