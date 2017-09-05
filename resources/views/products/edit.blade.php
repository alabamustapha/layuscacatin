@extends('layouts.admin')

@section('content')

    <div class="panel panel-primary">
        <div class="panel panel-heading">
            <div class="panel-title"> Edit Products </div>
        </div>

        <div class="panel-body">
            
      		<div class="row">
      			<div class="col-lg-8">

      				  <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/products/' . $product->id ) }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-3 control-label">Product title</label>

                            <div class="col-md-8">
                                <input id="title" type="text" class="form-control" name="title" value="{{ $product->title }}" required>

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('sku') ? ' has-error' : '' }}">
                            <label for="sku" class="col-md-3 control-label">Product SKU</label>

                            <div class="col-md-8">
                                <input id="sku" type="text" class="form-control" name="sku" value="{{ $product->SKU }}" >

                                @if ($errors->has('sku'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sku') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-3 control-label">Product Description</label>

                            <div class="col-md-8">
                                <textarea class="form-control" id="description" name="description" required> {{ old('description') ? old('description') : $product->description }}</textarea>

                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                            <label for="price" class="col-md-3 control-label">Price</label>

                            <div class="col-md-8">
                                <input id="price" type="text" class="form-control" name="price" value="{{ old('price') ? old('price') : $product->price }}" >

                                @if ($errors->has('price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
              
                       

                        <div class="form-group">
                            <label for="status" class="col-md-3 control-label">Status</label>

                            <div class="col-md-8">
                                <select class="form-control" name="status" required>
                                    <option></option>
                                    <option value="new" {{ $product->status == 'new' ? 'selected' : ''}}>New</option>
                                    <option value="on_sale" {{ $product->status == 'on_sale' ? 'selected' : ''}}>On Sale</option>
                                    <option value="out_of_stock" {{ $product->status == 'out_of_stock' ? 'selected' : ''}}>Out of stock</option>
                                    <option value="discontinued" {{ $product->status == 'discontinued' ? 'selected' : ''}}>Discontinued</option>
                                </select>

                                @if ($errors->has('status'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('status') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="thumbnail" class="col-md-3 control-label">Thumbnail</label>

                            <div class="col-md-8">
                                <input type="file" name="thumbnail" class="form-control" value="">

                                @if ($errors->has('thumbnail'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('thumbnail') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-3">
                                <button type="submit" class="btn btn-primary btn-block">
                                    Update
                                </button>
                            </div>
                        </div>
                    </form>

        
      			</div>

      			<div class="col-lg-4">

      				<img src="{{ asset('storage/' . $product->thumbnail) }}" width="200px" class="img-responsive">

      				
      			</div>
      		</div> 
          
        </div>
    </div>

@endsection