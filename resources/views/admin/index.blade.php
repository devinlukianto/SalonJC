<?php $nav_home='active';?>

@extends('layout.master')

@if (Auth::check())

    @section('title', 'ADMIN HOME')

    @section('content')
        <div class="row feature-box">
            <div class="span12 cnt-title">
                <h1>Administrator Page</h1>       
            </div>

            <div class="span4">
                <a href="{{ route('news.index') }}">
                    <h3>Manage News</h3>
                </a>
            </div>

            <div class="span4">
                <a href="{{ route('brands.index') }}">
                    <h3>Manage Brand</h3>
                </a>
            </div>

            <div class="span4">
                <a href="{{ route('categories.index') }}">
                    <h3>Manage Category</h3>
                </a>
            </div>
        </div>
    @endsection

@else

    @section('title', 'Redirecting...')

    @section('content')
        <div class="row feature-box">
            <div class="span12 cnt-title">
                <h1>Access Denied</h1>
                <span>You must log in as admin to see this page</span>
            </div>
        </div>
    @endsection

@endif