<form class="Form" role="form" method="POST" action="{{ url('/register') }}" autocomplete="off">
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
            <input id="username" placeholder="Username" type="text"
                   class="Form__input{{ $errors->has('username') ? ' Form__input--has-error' : '' }}"
                   name="username" value="{{ old('username') }}">
            @if ($errors->has('username'))
                <span class="help-block">
                    <strong>{{ $errors->first('username') }}</strong>
                </span>
            @endif
        </div>
    </div>


    <div class="Row">
        <div class="Form__group Form__group--half">
            <input id="password" placeholder="Password" type="password"
                   class="Form__input{{ $errors->has('password') ? ' Form__input--has-error' : '' }}"
                   name="password">

            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>

        <div class="Form__group Form__group--half">
            <input id="password_confirmation" placeholder="Confirm Password" type="password"
                   class="Form__input{{ $errors->has('password_confirmation') ? ' Form__input--has-error' : '' }}"
                   name="password_confirmation">

            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="Spacer--50"></div>

    <div class="Row Row--centered">
        <button type="submit" class="Button Button--go" style="text-align: center">
            <i class="icon-key"></i> Register
        </button>
    </div>


</form>
