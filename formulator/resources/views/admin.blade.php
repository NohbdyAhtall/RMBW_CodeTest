@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Admin Panel</div>

          <div class="card-body">
            @if (session('status'))
              <div class="alert alert-success">
                {{ session('status') }}
              </div>
            @endif

           You are logged in!
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  @foreach($posts as $post)
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">ID: {{ $post->id }}}
          	<h3><strong>Customer Information</strong></h3>
          	<div class="col-sm-8">
          		<label><strong>First Name: </strong></label>
          		{{ $post->custFirstName }}
          	</div>
          	<div class="col-sm-8">
          		<label><strong>Last Name: </strong></label>
          		{{ $post->custLastName }}
          	</div>
          	<div class="col-sm-8">
          		<label><strong>Address 1: </strong></label>
          		{{ $post->custAddress1 }}
          	</div>
          	<div class="col-sm-8">
          		<label><strong>Address 2: </strong></label>
          		{{ $post->custAddress2 }}
          	</div>
          	<div class="col-sm-8">
          		<label><strong>City: </strong></label>
          		{{ $post->custCity }}
          	</div>
          	<div class="col-sm-8">
          		<label><strong>State: </strong></label>
          		{{ $post->custState }}
          	</div>
          	<div class="col-sm-8">
          		<label><strong>ZIP: </strong></label>
          		{{ $post->custZip }}
          	</div>
          	<div class="col-sm-8">
          		<label><strong>Phone: </strong></label>
          		{{ $post->custPhone }}
          	</div>
          	<div class="col-sm-8">
          		<label><strong>Email: </strong></label>
          		{{ $post->custEmail }}
          	</div>
            </br>
            <h3><strong>Company Information</strong></h3>
          	<div class="col-sm-8">
          		<label><strong>Company Name: </strong></label>
          		{{ $post->compName }}
          	</div>
          	<div class="col-sm-8">
          		<label><strong>Address: </strong></label>
          		{{ $post->compAddress }}
          	</div>
          	<div class="col-sm-8">
          		<label><strong>City: </strong></label>
          		{{ $post->compCity }}
          	</div>
          	<div class="col-sm-8">
          		<label><strong>State: </strong></label>
          		{{ $post->compState }}
          	</div>
          	<div class="col-sm-8">
          		<label><strong>ZIP: </strong></label>
          		{{ $post->compZip }}
          	</div>
          	<div class="col-sm-8">
          		<label><strong>Phone: </strong></label>
          		{{ $post->compPhone }}
          	</div>
          	<div class="col-sm-8">
          		<label><strong>Invoice(PDF): </strong></label>
          		<a href="{{ url($post->compInvoicePDF) }}">{{ url($post->compInvoicePDF) }}</a>
          	</div>
          	<div class="col-sm-8">
          		<label><strong>Created at: </strong></label>
          		{{ $post->created_at }}
          	</div>
          	<div class="col-sm-8">
          		<label><strong>Updated at: </strong></label>
          		{{ $post->updated_at }}
          	</div>
          </div>
        </div>
      </div>
    </div>
  @endforeach
</div>

@endsection
