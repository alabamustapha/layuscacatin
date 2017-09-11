@if(Session::has('message'))
    <div class="alert alert-warning">
        {{Session::get('message')}}
    </div>
    @elseif(Session::has('warning'))
    <div class="alert alert-warning">
    	{{ Session::get('warning') }}
    </div>
    @elseif(Session::has('danger'))
    <div class="alert alert-danger">
    	{{ Session::get('danger') }}
    </div> 
@endif