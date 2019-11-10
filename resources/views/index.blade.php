@extends('layouts.layout-index')


@section('head')
    @include('shared.heads.head-index')
@endsection

@section('header')
    @include('shared.headers.header-index')
@endsection

@section('footer')
    @include('shared.footers.footer-index')
@endsection



@section('main')
        <style>
        .content{
                display: -ms-flexbox;
                display: -webkit-flex;
                display: flex;
                -webkit-flex-direction: column;
                -ms-flex-direction: column;
                flex-direction: column;
                -webkit-flex-wrap: wrap;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                -webkit-justify-content: center;
                -ms-flex-pack: center;
                justify-content: center;
                -webkit-align-content: center;
                -ms-flex-line-pack: center;
                align-content: center;
                -webkit-align-items: center;
                -ms-flex-align: center;
                align-items: center;
        }
        </style>
        <div class="content" style="width:100vw;height:100vh; background-color:#585757">

            <img    style="z-index:0;position:relative;top:0px;left:0px;width:50vw;height:50vh; object-fit:cover"
                    src="https://scontent.fbog3-1.fna.fbcdn.net/v/t1.0-9/71590314_132345818154711_6597283432689041408_n.png?_nc_cat=108&_nc_oc=AQkiHYYfG6j85E7QcJCptoWnV6Dx1OG4wceiv4TwyytI6ftZG1dCcIUvOnEttSWI-Fk&_nc_ht=scontent.fbog3-1.fna&oh=a74d95a97a18f88f5e4dd05a6590adcd&oe=5E6238E8">

        </div>
@endsection
