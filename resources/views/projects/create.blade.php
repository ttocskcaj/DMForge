@extends('layouts.general')

@section('container')
    <div class="Row">
        <div class="ColumnMain" id="column-main">
            <h2>Create New Project</h2>
            <form role="form" class="Form" method="post" action="{!! route('projects.store') !!}">
                {!! csrf_field() !!}
                <div class="Row">
                    <div class="Form__group">
                        <input id="title" placeholder="Project Name" type="text"
                               class="Form__input{{ $errors->has('title') ? ' Form__input--has-error' : '' }}"
                               name="title" value="{{ old('title') }}">
                        @if ($errors->has('title'))
                            <span class="help-block">
                    <strong>{{ $errors->first('title') }}</strong>
                </span>
                        @endif
                    </div>
                </div>
                <div class="Row">
                    <div class="Form__group">
                        <textarea id="description" placeholder="Description..." type="text"
                                  class="Form__input{{ $errors->has('description') ? ' Form__input--has-error' : '' }}"
                                  name="description">{{ old('description') }}</textarea>
                        @if ($errors->has('description'))
                            <span class="help-block">
                    <strong>{{ $errors->first('description') }}</strong>
                </span>
                        @endif
                    </div>
                </div>
                <div class="Spacer--50"></div>

                <div class="Row Row--right">
                    <button type="submit" class="Button Button--go" style="text-align: center">
                        <i class="icon-plus"></i> Create
                    </button>
                </div>
            </form>
        </div>
        <div class="ColumnSideBar" id="side-bar">
            @include('partials.sidebar-content')
        </div>
    </div>
@endsection
