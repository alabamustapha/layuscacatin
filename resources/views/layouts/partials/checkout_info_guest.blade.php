<div class="row">

    <div class="col-sm-6">

        <div class="form-group{{ $errors->has('fullname') ? ' has-error' : '' }}">
            <label for="fullname">Full Name*</label>
            <input id="fullname" type="text" class="form-control" name="fullname" value="{{ old('fullname') }}" required>

            @if ($errors->has('fullname'))
                <span class="help-block">
                    <strong>{{ $errors->first('fullname') }}</strong>
                </span>
            @endif

            
        </div>

    </div>

    <div class="col-sm-6">
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email">Email*</label>
            <input type="email" class="form-control" name="email" value="{{ old('email') }}" required>

            @if ($errors->has('fullname'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif

        </div>
    </div>
</div>
<!-- /.row -->

<div class="row">

    <div class="col-sm-6">
        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
            <label for="phone">Telephone*</label>
            <input type="phone" class="form-control" name="phone" value="{{ old('phone') }}" required>

            @if ($errors->has('phone'))
                <span class="help-block">
                    <strong>{{ $errors->first('phone') }}</strong>
                </span>
            @endif                                              
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group{{ $errors->has('company') ? ' has-error' : '' }}">
            <label for="company">Company</label>
            <input type="text" class="form-control" name="company" value="{{ old('company') }}">

            @if ($errors->has('company'))
                <span class="help-block">
                    <strong>{{ $errors->first('company') }}</strong>
                </span>
            @endif

            
        </div>
    </div>

</div>
<!-- /.row -->

<div class="row">

    <div class="col-sm-6 col-md-3">
        <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
            <label for="country">Country*</label>
            <input type="email" class="form-control" name="country" value="{{ old('country') }}" required>

            @if ($errors->has('country'))
                <span class="help-block">
                    <strong>{{ $errors->first('country') }}</strong>
                </span>
            @endif

            
        </div>
    </div>

    <div class="col-sm-6 col-md-3">
        <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
            <label for="state">State*</label>
            <input type="text" class="form-control" name="state" value="{{ old('state') }}" required>

            @if ($errors->has('state'))
                <span class="help-block">
                    <strong>{{ $errors->first('state') }}</strong>
                </span>
            @endif

            
        </div>
    </div>

    <div class="col-sm-6 col-md-3">
        <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
            <label for="city">City*</label>
            <input type="text" class="form-control" name="city" value="{{ old('city') }}" required>

            @if ($errors->has('city'))
                <span class="help-block">
                    <strong>{{ $errors->first('city') }}</strong>
                </span>
            @endif

            
        </div>
    </div>

    <div class="col-sm-3">
        <div class="form-group{{ $errors->has('street') ? ' has-error' : '' }}">
            <label for="street">Street*</label>
            <input type="text" class="form-control" name="street" value="{{ old('street') }}" required>

            @if ($errors->has('street'))
                <span class="help-block">
                    <strong>{{ $errors->first('street') }}</strong>
                </span>
            @endif

            
        </div>
    </div>

</div>
<!-- /.row -->