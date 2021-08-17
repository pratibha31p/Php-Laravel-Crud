@extends('admin.layout.layout')

@section('content')
<div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Add Product</h2>
          
            <div class="clearfix"></div>
          </div>
<div class="x_content">
    <br />
    <form id="demo-form2" enctype="multipart/form-data" action="{{ route('admin.product.store') }}" method="POST" data-parsley-validate class="form-horizontal form-label-left">
@csrf
  
     <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Product ID<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" id="first-name" required="required" name="product_id" class="form-control col-md-7 col-xs-12">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Product Name<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" id="first-name" required="required" name="name" class="form-control col-md-7 col-xs-12">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Product Price<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" id="first-name" required="required" name="price" class="form-control col-md-7 col-xs-12">
        </div>
      </div>
       <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Quantity<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" id="first-name" required="required" name="quantity" class="form-control col-md-7 col-xs-12">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Expiry date<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="date" id="first-name" required="required" name="expirydate" class="form-control col-md-7 col-xs-12">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Image<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="file" id="first-name" required="required" name="image" class="form-control col-md-7 col-xs-12">
        </div>
      </div>
     
      <div class="ln_solid"></div>
      <div class="form-group">
        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
        
        
          <input type="submit" class="btn btn-success" value="Submit">
        </div>
      </div>

    </form>
  </div>
</div>
</div>
</div>



@endsection