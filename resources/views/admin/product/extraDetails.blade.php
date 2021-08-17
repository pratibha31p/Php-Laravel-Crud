@extends('admin.layout.layout')

@section('content')
<div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Prooduct details</h2>
          
            <div class="clearfix"></div>
          </div>
<div class="x_content">
    <br />
    <form id="demo-form2" enctype="multipart/form-data" action="{{ route('admin.product.extraDetailsStore',$id) }}" method="POST" data-parsley-validate class="form-horizontal form-label-left">
@csrf
  

<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Title<span class="required">*</span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <input type="text" value="{{ @$product->ProductDetail->title }}" id="first-name" required="required" name="title" class="form-control col-md-7 col-xs-12">
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Total Items<span class="required">*</span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <input type="text" value="{{ @$product->ProductDetail->total_items }}" id="first-name" required="required" name="total_items" class="form-control col-md-7 col-xs-12">
  </div>
</div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Description<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <textarea name="description" class="form-control col-md-7 col-xs-12" id="" cols="30" rows="5">{{ @$product->ProductDetail->description }}</textarea>
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