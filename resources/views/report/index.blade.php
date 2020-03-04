@extends('layouts.app')

@section('content')
<style>
    .dash-list {
        display: -webkit-box;
        display: flex;
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        flex-flow: row wrap;
        -webkit-box-align: stretch;
        align-items: stretch;
        list-style: none;
        margin-left: 0;
    }

    .dash-item {
        display: -webkit-box;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        flex-direction: column;
        align-content: flex-end;
        -webkit-box-pack: end;
        justify-content: flex-end;
        padding: 1.2rem 1.4rem 1rem;
        background: #fff;
        list-style: none;
        -webkit-transition: all .5s;
        transition: all .5s;
        margin: 0 0 0.8rem;
        position: relative;
        overflow: hidden;
        -webkit-transition: all 0.2s cubic-bezier(0, 0, 0.3, 1);
        transition: all 0.2s cubic-bezier(0, 0, 0.3, 1);
    }

    @media (min-width: 500px) {
        .dash-item {
            flex-basis: 49%;
            margin: 0 2% 0.8rem 0;
        }

        .dash-item:nth-child(2n) {
            margin-right: 0;
        }
    }

    @media (min-width: 800px) {
        .dash-item {
            flex-basis: 28%;
            margin-right: 1.25%;
        }

        .dash-item:nth-child(2n) {
            margin-right: 1.25%;
        }

        .dash-item:nth-child(3n) {
            margin-right: 0;
        }
    }

    .dash-item--published {
        box-shadow: inset 4px 0 0 #3bb275, 0 1px 0 rgba(0, 0, 0, 0.1);
    }

    .dash-item--draft {
        box-shadow: inset 4px 0 0 #92dbb6, 0 1px 0 rgba(0, 0, 0, 0.1);
    }

    .dash-item__header {
        position: relative;
        z-index: 99;
        background: #fff;
        border-bottom: 1px solid #ddd;
    }

    .dash-item__title {
        font-size: 1rem;
        padding: 0 24px 0.5rem 0;
        margin: 0;
    }

    .dash-item__content {
        padding: 1.8rem 0 0.375rem;
        position: relative;
        -webkit-transition: all 0.2s cubic-bezier(0, 0, 0.3, 1);
        transition: all 0.2s cubic-bezier(0, 0, 0.3, 1);
    }

    .dash-item__status {
        font-size: .7rem;
        font-weight: 300;
        text-transform: uppercase;
        color: #888;
        position: absolute;
    }

    .dash-item__nav {
        position: absolute;
        right: 1rem;
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .dash-item__nav__item {
        display: inline-block;
        font-size: 0.85rem;
        margin-bottom: 0;
        padding-bottom: 0;
        margin-right: 10px;
    }

    .dash-item__nav__item:last-of-type {
        margin-right: 0;
    }

    .dash-item__nav--collapsible {
        display: none;
        position: absolute;
        background: #fff;
        bottom: auto;
        right: auto;
        top: 100%;
        margin-top: 0.2rem;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
        -webkit-transition: all 0.2s cubic-bezier(0, 0, 0.3, 1);
        transition: all 0.2s cubic-bezier(0, 0, 0.3, 1);
    }

    .dash-item__nav--collapsible .dash-item__nav__item {
        padding: 0.4rem 0;
    }

    .dash-item__menu-action {
        background: none;
        border: none;
        color: #444;
        padding: 0;
        position: absolute;
        bottom: 0;
        right: 0;
        cursor: pointer;
    }

    .dash-item__menu-action__icon {
        width: 24px;
        height: 24px;
        fill: #444;
        -webkit-transition: all 0.3s cubic-bezier(0, 0, 0.3, 1);
        transition: all 0.3s cubic-bezier(0, 0, 0.3, 1);
    }

    .dash-item__menu-action__icon--bottom {
        position: absolute;
        left: 0;
    }

    .dash-list--focus-one {
        background: #bcd4ce;
    }

    .dash-list--focus-one .dash-item {
        opacity: 0.675;
    }

    .dash-list--focus-one .dash-item--menu-active {
        -webkit-transform: translate3d(0, -3px, 0);
        transform: translate3d(0, -3px, 0);
        box-shadow: inset 4px 0 0 #3bb275, 0 2px 2px rgba(0, 0, 0, 0.2);
        opacity: 1;
    }

    .dash-item--menu-active .dash-item__menu-action__icon--bottom {
        -webkit-transform: translateY(-15.5%);
        transform: translateY(-15.5%);
    }

    .dash-item--menu-active .dash-item__menu-action__icon--top {
        -webkit-transform: rotateX(-180deg) translateY(0px);
        transform: rotateX(-180deg) translateY(0px);
    }

    .dash-item--menu-active .dash-item__nav--collapsible {
        display: block;
        -webkit-animation: slideInTop 0.25s cubic-bezier(0, 0, 0.3, 1) forwards;
        animation: slideInTop 0.25s cubic-bezier(0, 0, 0.3, 1) forwards;
    }

    .dash-item--menu-active .dash-item__content {
        opacity: 0.4;
        -webkit-transform: translate3d(0, 0.675rem, 0);
        transform: translate3d(0, 0.675rem, 0);
    }

    .quiz-results {
        display: -webkit-box;
        display: flex;
        -webkit-box-pack: justify;
        justify-content: space-between;
        list-style: none;
        margin: 0;
        padding: 0;
        text-align: center;
    }

    .quiz-results__item {
        margin: 0 2% 0 0;
        padding: 0;
        color: #454545;
    }

    @media (max-width: 280px) {
        .quiz-results__item {
            width: 100%;
            padding: 0;
            margin-bottom: 0.6rem;
        }
    }

    .quiz-results__number {
        font-size: 1.6rem;
        line-height: 1;
        position: relative;
    }

    .dash-item--draft .quiz-results__number {
        opacity: 0.5;
    }

    .quiz-results__number--average-score {
        color: #319461;
    }

    .quiz-results__number--average-score:after {
        content: '%';
        font-size: .9rem;
        position: absolute;
        top: .3rem;
        right: -0.6rem;
    }

    .quiz-results__label {
        text-transform: uppercase;
        font-size: .7rem;
        font-weight: 300;
        color: #888;
    }

    @-webkit-keyframes slideInTop {
        0% {
            opacity: 0;
            -webkit-transform: translate3d(0, -20px, 0);
            transform: translate3d(0, -20px, 0);
        }

        100% {
            opacity: 1;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
    }

    @keyframes slideInTop {
        0% {
            opacity: 0;
            -webkit-transform: translate3d(0, -20px, 0);
            transform: translate3d(0, -20px, 0);
        }

        100% {
            opacity: 1;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
    }

    .twitter__username-link {
        position: relative;
        top: 2rem;
    }
</style>

<section class="content-header">
    <h1 class="pull-left">Report</h1>
    <h1 class="pull-right">
        <!-- <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px"
            href="{{ route('bookingUsers.create') }}">Add New</a> -->
    </h1>
</section>

<div class="content">
    <div class="clearfix"></div>

    @include('flash::message')

    <div class="clearfix"></div>
    <div class="box box-primary">
        <div class="box-body">
            @include('report.search')


            @include('report.dashboard')


            {{-- @include('report.table') --}}

        </div>
    </div>
    <div class="text-center">

    </div>
</div>

@endsection