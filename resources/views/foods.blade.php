@extends('layouts.app2')
@section('content')

    <div class="ui container grid" style="">
        <div class="centered column" style="width: 80%; background: #f9f9f9;">
            <?php $i = 0?>
                <div class="ui grid" style="margin: 10px;">
                    @foreach($foods as $food)
                        <div class="ui four wide column very relaxed">
                            <div style=" padding: 10px; width: 100%;" class="ui segment">
                                <div class="sides">
                                    <div class="side active" style="padding: 0;">
                                        <div class="ui card">
                                            <div class="image">
                                                <img src="{{ asset('foodpic/'.$food->foodPicName) }}">
                                            </div>
                                            <div class="content">
                                                <a class="header">{{$food->name}}</a>
                                                <div class="meta">
                                                    <span class="date">Joined in 2014</span>
                                                </div>
                                                <div class="description">
                                                    Stevie Feliciano is a library scientist , and writing.
                                                </div>
                                            </div>
                                            <div class="extra content">
                                                <a>
                                                    <i class="checkmark icon"></i>
                                                    <i class="thumbs down icon right floated"></i>
                                                    <i class="thumbs up icon right floated"></i>
                                                    22 Friends
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>


            <div class="ui grid" style="margin: 10px;">
                <div class="ui four wide column very relaxed">
                    <div style=" padding: 10px; width: 100%;" class="ui segment">
                        <div class="sides">
                            <div class="side active" style="padding: 0;">
                                <div class="ui card">
                                    <div class="image">
                                        <img src="{{ asset('foodpic/1486415437photo_2017-01-30_16-43-44.jpg') }}">
                                    </div>
                                    <div class="content">
                                        <a class="header">Stevie Feliciano</a>
                                        <div class="meta">
                                            <span class="date">Joined in 2014</span>
                                        </div>
                                        <div class="description">
                                            Stevie Feliciano is a library scientist , and writing.
                                        </div>
                                    </div>
                                    <div class="extra content">
                                        <a>
                                            <i class="user icon"></i>
                                            22 Friends
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ui four wide column very relaxed">
                    <div style=" padding: 10px; width: 100%;" class="ui segment">
                        <div class="sides">
                            <div class="side active" style="padding: 0;">
                                <div class="ui card">
                                    <div class="image">
                                        <img src="{{ asset('foodpic/1486415437photo_2017-01-30_16-43-44.jpg') }}">
                                    </div>
                                    <div class="content">
                                        <a class="header">Stevie Feliciano</a>
                                        <div class="meta">
                                            <span class="date">Joined in 2014</span>
                                        </div>
                                        <div class="description">
                                            Stevie Feliciano is a library scientist , and writing.
                                        </div>
                                    </div>
                                    <div class="extra content">
                                        <a>
                                            <i class="user icon"></i>
                                            22 Friends
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ui four wide column very relaxed">
                    <div style=" padding: 10px; width: 100%;" class="ui segment">
                        <div class="sides">
                            <div class="side active" style="padding: 0;">
                                <div class="ui card">
                                    <div class="image">
                                        <img src="{{ asset('foodpic/1486415437photo_2017-01-30_16-43-44.jpg') }}">
                                    </div>
                                    <div class="content">
                                        <a class="header">Stevie Feliciano</a>
                                        <div class="meta">
                                            <span class="date">Joined in 2014</span>
                                        </div>
                                        <div class="description">
                                            Stevie Feliciano is a library scientist , and writing.
                                        </div>
                                    </div>
                                    <div class="extra content">
                                        <a>
                                            <i class="user icon"></i>
                                            22 Friends
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ui  four wide column very relaxed">
                    <div style=" padding: 10px;" class="ui segment">
                        <div class="sides">
                            <div class="side active" style="padding: 0;">
                                <div class="ui card">
                                    <div class="image">
                                        <img src="{{ asset('foodpic/1486415437photo_2017-01-30_16-43-44.jpg') }}">
                                    </div>
                                    <div class="content">
                                        <a class="header">Stevie Feliciano</a>
                                        <div class="meta">
                                            <span class="date">Joined in 2014</span>
                                        </div>
                                        <div class="description">
                                            Stevie Feliciano is a library scientist , and writing.
                                        </div>
                                    </div>
                                    <div class="extra content">
                                        <a>
                                            <i class="user icon"></i>
                                            22 Friends
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ui grid" style="margin: 10px;">
                <div class="ui four wide column very relaxed">
                    <div style=" padding: 10px; width: 100%;" class="ui segment">
                        <div class="sides">
                            <div class="side active" style="padding: 0;">
                                <div class="ui card">
                                    <div class="image">
                                        <img src="{{ asset('foodpic/1486415437photo_2017-01-30_16-43-44.jpg') }}">
                                    </div>
                                    <div class="content">
                                        <a class="header">Stevie Feliciano</a>
                                        <div class="meta">
                                            <span class="date">Joined in 2014</span>
                                        </div>
                                        <div class="description">
                                            Stevie Feliciano is a library scientist , and writing.
                                        </div>
                                    </div>
                                    <div class="extra content">
                                        <a>
                                            <i class="user icon"></i>
                                            22 Friends
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ui four wide column very relaxed">
                    <div style=" padding: 10px; width: 100%;" class="ui segment">
                        <div class="sides">
                            <div class="side active" style="padding: 0;">
                                <div class="ui card">
                                    <div class="image">
                                        <img src="{{ asset('foodpic/1486415437photo_2017-01-30_16-43-44.jpg') }}">
                                    </div>
                                    <div class="content">
                                        <a class="header">Stevie Feliciano</a>
                                        <div class="meta">
                                            <span class="date">Joined in 2014</span>
                                        </div>
                                        <div class="description">
                                            Stevie Feliciano is a library scientist , and writing.
                                        </div>
                                    </div>
                                    <div class="extra content">
                                        <a>
                                            <i class="user icon"></i>
                                            22 Friends
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ui four wide column very relaxed">
                    <div style=" padding: 10px; width: 100%;" class="ui segment">
                        <div class="sides">
                            <div class="side active" style="padding: 0;">
                                <div class="ui card">
                                    <div class="image">
                                        <img src="{{ asset('foodpic/1486415437photo_2017-01-30_16-43-44.jpg') }}">
                                    </div>
                                    <div class="content">
                                        <a class="header">Stevie Feliciano</a>
                                        <div class="meta">
                                            <span class="date">Joined in 2014</span>
                                        </div>
                                        <div class="description">
                                            Stevie Feliciano is a library scientist , and writing.
                                        </div>
                                    </div>
                                    <div class="extra content">
                                        <a>
                                            <i class="user icon"></i>
                                            22 Friends
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ui  four wide column very relaxed">
                    <div style=" padding: 10px;" class="ui segment">
                        <div class="sides">
                            <div class="side active" style="padding: 0;">
                                <div class="ui card">
                                    <div class="image">
                                        <img src="{{ asset('foodpic/1486415437photo_2017-01-30_16-43-44.jpg') }}">
                                    </div>
                                    <div class="content">
                                        <a class="header">Stevie Feliciano</a>
                                        <div class="meta">
                                            <span class="date">Joined in 2014</span>
                                        </div>
                                        <div class="description">
                                            Stevie Feliciano is a library scientist , and writing.
                                        </div>
                                    </div>
                                    <div class="extra content">
                                        <a>
                                            <i class="user icon"></i>
                                            22 Friends
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="ui centered column" style="align-content: center">
                    {{$foods->links()}}
                </div>

        </div>
    </div>


@endsection
