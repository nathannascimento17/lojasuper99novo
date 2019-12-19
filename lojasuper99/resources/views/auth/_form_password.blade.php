<div class="row">
    <div class="input-field">
        <input id="password" type="password" name="password" class="validate {{ $errors->has('password') ? ' invalid' : '' }}" required>
        <label id="password" for="password" data-error="{{ $errors->has('password') ? $errors->first('password') : null }}" >Senha</label>
    </div>
</div>

<style>
    #password{
        font-size: 2.00rem;
    }
</style>