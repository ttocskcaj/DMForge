<form class="Form" role="form" method="POST" action="{{ url('/login') }}">
    {{ csrf_field() }}

    <div class="Row">
        <div class="Form__group">
            <input id="email" placeholder="Email Address" type="email"
                   class="Form__input{{ $errors->has('email') ? ' Form__input--has-error' : '' }}"
                   name="email" value="{{ old('email') }}">

            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="Row">
        <div class="Form__group">
            <input id="password" placeholder="Password" type="password"
                   class="Form__input{{ $errors->has('email') ? ' Form__input--has-error' : '' }}"
                   name="password">

            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
    </div>


    <div class="Row">
        <div class="Form__group Form__group--half">
            <span class="Form__checkbox">
                <label>
                    <input type="checkbox" name="remember"> Remember Me
                </label>
            </span>
        </div>
        <div class="Form__group Form__group--half">
            <a class="Link--tiny TextRight" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
        </div>
    </div>
    <div class="Spacer--50"></div>
    <div class="Row Row--centered">
        <button type="submit" class="Button Button--go" style="text-align: center">
            <i class="icon-sign-in"></i> Login
        </button>
    </div>


</form>
