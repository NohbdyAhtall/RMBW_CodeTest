@extends ('layouts.master')

@section('form')
<form method="POST" action="/posts">
 <div class="container">
  @csrf
  
  <!-- Validation Error -->
  

  @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif
  <!-- Customer Information -->
  <hr>
  <h3>Customer Information</h3>
  <div class="form-group">
    <div class="row">
      <div class="col-sm-5">
        <label for="custFirstName">First Name:</label>
        <input type="text" class="form-control" id="custFirstName" name="custFirstName" required autofocus>
      </div>
    <div class="col-sm-6">
      <label for="custLastName">Last Name:</label>
      <input type="text" class="form-control" id="custLastName" name="custLastName" required>
    </div>
    </div>
  </div>
  <div class="form-group">
    <label for="custAddress1">Address 1:</label>
    <input type="text" class="form-control" id="custAddress1" name="custAddress1" required>
  </div>

  <div class="form-group">
    <label for="custAddress2">Address 2:</label>
    <input type="text" class="form-control" id="custAddress2" name="custAddress2" required>
  </div>

  <div class="form-group">
    <div class="row">
      <div class="col-sm-3">
        <label for="custCity">City:</label>
        <input type="text" class="form-control" id="custCity" name="custCity" required>
      </div>
      <div class="col-sm-1" style="min-width: 76px;">
        <label for="custState">State:</label>
        <input type="text" class="form-control" id="custState" name="custState" maxlength="2" required>
      </div>
      <div class="col-sm-2">
        <label for="custZip">ZIP:</label>
        <input type="text" class="form-control" id="custZip" name="custZip" maxlength="5" required>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label for="custPhone">Phone Number:</label>
    <input type="tel" class="form-control" id="custPhone" name="custPhone" required>
  </div>
  <div class="form-group">
    <label for="custEmail">Email:</label>
    <input type="email" class="form-control" id="custEmail" name="custEmail" required>
  </div>


  <!-- Company Information -->
  <hr>

  <h3>Company Information</h3>
  <div class="form-group">
    <label for="compName">Company Name:</label>
    <input type="text" class="form-control" id="compName" name="compName" required>
  </div>

  <div class="form-group">
    <label for="compAddress">Address:</label>
    <input type="text" class="form-control" id="compAddress" name="compAddress" required>
  </div>

  <div class="form-group">
    <div class="row">
      <div class="col-sm-4">
        <label for="compCity">City:</label>
        <input type="text" class="form-control" id="compCity" name="compCity" required>
      </div>
      <div class="col-sm-1" style="min-width: 76px;">
        <label for="compState">State:</label>
        <input type="text" class="form-control" id="compState" name="compState" required>
      </div>
      <div class="col-sm-2">
        <label for="compZip">ZIP:</label>
        <input type="text" class="form-control" id="compZip" name="compZip" required>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label for="compPhone">Phone Number:</label>
    <input type="tel" class="form-control" id="compPhone" name="compPhone" required>
  </div>

  <div class="form-group">
    <label for="compInvoicePDF">Invoice File</label>
    <!-- Validation  -->
    <input type="file" id="compInvoicePDF" name="compInvoicePDF" accept=".pdf" required>
    <p class="help-block"><i>Note: Only PDF files are allowed.</i></p>
  </div>

  <!-- Form Submission -->
  <button type="submit" class="btn btn-primary">Submit</button>
 </div>
</form>
<hr>
@endsection

@section ('adminLink')
<h4>
  <a href="/admin">Administrative Control Panel</a>
</h4>
@endsection