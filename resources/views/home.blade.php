@extends('layouts.general')

@section('container')
    <div class="Row">
        <div class="ColumnNewsFeed" id="news-feed">
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
            </ul>
        </div>
        <div class="ColumnSideBar" id="side-bar">
            <div class="SidebarModule">
                <div class="Module__heading">
                    <span class="Module__title">My Projects</span>
                </div>
                <div class="Module__body">
                    <ul>
                        <li><a href="#">Project Name</a></li>
                        <li><a href="#">NewProject</a></li>
                    </ul>
                </div>
            </div>
            <div class="SidebarModule">
                <div class="Module__heading">
                    <span class="Module__title">Group Projects</span>
                </div>
                <div class="Module__body">
                    <ul>
                        <li><a href="#">Project Name</a></li>
                        <li><a href="#">NewProject</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
