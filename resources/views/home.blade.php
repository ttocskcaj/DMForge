@extends('layouts.general')

@section('container')
    <div class="Row">
        <div class="ColumnMain" id="column-main">
            <ul class="NewsFeed">

                <li class="NewsFeed__item NewsFeed__item--edit">
                    <a href="#">ttocskcaj</a> changed a map on <a href="#">Project Name</a>.
                </li>
                <li class="NewsFeed__item NewsFeed__item--new">
                    <a href="#">auser</a> created a new project <a href="#">NewProject</a>
                </li>
                <li class="NewsFeed__item NewsFeed__item--trash">
                    <a href="#">FooBar</a> deleted the project <a href="#">Old Project</a>
                </li>
                @foreach($activities as $activity)
                    @include('stream-laravel::render_activity', array('activity'=>$activity))
                @endforeach
            </ul>
        </div>
        <div class="ColumnSideBar" id="side-bar">
            @include('partials.sidebar-content')
        </div>
    </div>
@endsection
