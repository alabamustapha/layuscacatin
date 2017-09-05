@extends('layouts.admin')

@section('content')

    <div class="panel panel-primary">
        <div class="panel panel-heading">
            <div class="panel-title"> Products </div>
        </div>

        <div class="panel-body">
            
            <div class="row">
                
                <div class="col-md-3">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add-product-modal">
                  Add Product
                </button>

                </div>
            </div>
            
            <!-- Modal -->
            <div class="modal fade" id="add-product-modal" tabindex="-1" role="dialog" aria-labelledby="add-product-modal-label" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="add-product-modal-label">Add New Product</h4>
                  </div>
                  <div class="modal-body">
                    
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/products') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-4 control-label">Product title</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" required>

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('sku') ? ' has-error' : '' }}">
                            <label for="sku" class="col-md-4 control-label">Product SKU</label>

                            <div class="col-md-6">
                                <input id="sku" type="text" class="form-control" name="sku" value="{{ old('sku') }}" >

                                @if ($errors->has('sku'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sku') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-4 control-label">Product Description</label>

                            <div class="col-md-6">
                                <textarea class="form-control" id="description" name="description" required></textarea>

                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                            <label for="price" class="col-md-4 control-label">Price</label>

                            <div class="col-md-6">
                                <input id="price" type="text" class="form-control" name="price" value="{{ old('price') }}" >

                                @if ($errors->has('price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
              
                       

                        <div class="form-group">
                            <label for="status" class="col-md-4 control-label">Status</label>

                            <div class="col-md-6">
                                <select class="form-control" name="status" required>
                                    <option></option>
                                    <option value="new">New</option>
                                    <option value="on_sale">On Sale</option>
                                    <option value="out_of_stock">Out of stock</option>
                                    <option value="off">Discontinued</option>
                                </select>

                                @if ($errors->has('status'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('status') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="thumbnail" class="col-md-4 control-label">Thumbnail</label>

                            <div class="col-md-6">
                                <input type="file" name="thumbnail" class="form-control" >

                                @if ($errors->has('thumbnail'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('thumbnail') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>


                  </div>
                  
                </div>
              </div>
            </div>

            <table class="table table-bordered table-hover table-striped table-responsive">
              <thead>
                <th>S/N</th>
                <th>Thumbnail</th>
                <th>Title</th>
                <th>Description</th>
                <th>Price</th>
                <th>Category</th>
                <th>Status</th>
                <th>Action</th>
              </thead>
              <tbody>
                @foreach($products as $product)
                  <tr>
                    <td>{{ $product->id }}</td>
                    <td><img src="{{ asset('storage/' . $product->thumbnail) }}" title="{{ $product->thumbnail }}" width="50px"></td>
                    <td>{{ $product->title }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->cagetory }}</td>
                    <td>{{ $product->status  }}</td>                        
                    <td>        
                        <a class=" btn btn-danger" 
                                    onclick="event.preventDefault();
                                             document.getElementById('delete-product' + <?php echo json_encode($product->id)?>).submit();">
                                    Delete
                                </a>

                            <form id="delete-product{{ $product->id }}" action="{{ url('/products/' . $product->id . '/delete') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                }
                            </form> 
                            <a href="{{ url('admin/products/' . $product->id . '/edit') }}" class="btn btn-primary">Edit</a>
                    </td>
              </tr>
                @endforeach
              </tbody>
              <tfoot>
                <th>S/N</th>
                <th>Thumbnail</th>
                <th>Title</th>
                <th>Description</th>
                <th>Price</th>
                <th>Category</th>
                <th>Status</th>
                <th>Action</th>
              </tfoot>
          </table>

          {{ $products->links() }}
          
          </div>
    </div>

@endsection