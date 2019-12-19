<div class="row">
    <div class="input-field">
        <input id="password-confirm" type="password" name="password_confirmation" class="validate {{ $errors->has('password-confirm') ? ' invalid' : '' }}" required>
        <label id="password-confirm" for="password-confirm" data-error="{{ $errors->has('password-confirm') ? $errors->first('password-confirm') : null }}" >Confirmação de senha</label>
    </div>
</div>


<style>
    #password-confirm {
        font-size: 2.00rem;
    }
</style>