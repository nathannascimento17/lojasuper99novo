<div class="row">
    <div class="input-field">
        <input id="email" type="email" name="email" value="{{ old('email') }}" class="validate {{ $errors->has('email') ? ' invalid' : '' }}" required autofocus>
        <label id="email" for="email" data-error="{{ $errors->has('email') ? $errors->first('email') : null }}">E-mail</label>
    </div>
</div>


<style>
    #email {
        font-size: 2.00rem;
    }
</style>