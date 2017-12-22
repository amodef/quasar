{{ csrf_field() }}

<div class="form-group">
    <label for="name" class="form-control-label">Name</label>
    <input id="name" type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" value="{{ isset($organisation) ? $organisation->name : old('name') }}" autofocus>

    @if ($errors->has('name'))
        <div class="form-control-feedback text-danger">{{ $errors->first('name') }}</div>
    @endif
</div>

<div class="form-group">
    <label for="street" class="form-control-label">Address</label>
    <input id="street" type="text" class="form-control  {{ $errors->has('street') ? 'is-invalid' : '' }}" name="street" value="{{ old('street') }}">

    @if ($errors->has('street'))
        <div class="form-control-feedback text-danger">{{ $errors->first('street') }}</div>
    @endif
</div>

<div class="form-group">
    <label for="postcode" class="form-control-label">Postcode</label>
    <input id="postcode" type="text" class="form-control  {{ $errors->has('postcode') ? 'is-invalid' : '' }}" name="postcode" value="{{ old('postcode') }}">

    @if ($errors->has('postcode'))
        <div class="form-control-feedback text-danger">{{ $errors->first('postcode') }}</div>
    @endif
</div>

<div class="form-group">
    <label for="city" class="form-control-label">City</label>
    <input id="city" type="text" class="form-control  {{ $errors->has('city') ? 'is-invalid' : '' }}" name="city" value="{{ old('city') }}">

    @if ($errors->has('city'))
        <div class="form-control-feedback text-danger">{{ $errors->first('city') }}</div>
    @endif
</div>

<div class="form-group">
    <label for="country">Country</label>
    <select id="country" class="form-control {{ $errors->has('country') ? 'is-invalid' : '' }}" name="country">
        <option>Luxembourg</option>
        <option>Belgium</option>
        <option>Germany</option>
        <option>France</option>
        <option disabled>──────────</option>
        @foreach ($countries as $country)
            <option>
                {{ $country['name'] }}
            </option>
        @endforeach
    </select>
    @if ($errors->has('country'))
        <div class="form-control-feedback text-danger">{{ $errors->first('country') }}</div>
    @endif
</div>