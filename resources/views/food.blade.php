@extends('layouts.app2')
@section('content')

    <div class="">
        <div class="ui segment">
            <div class="ui grid">
                <div class="eight wide column" style="direction: rtl;">
                    <p >hello this is meat</p>
                    <p>hello this is meat hello this is meat hello this is meat</p>
                    <p>hello this is meat hello this is meat</p>
                    <p>hello this is meat hello this is meat hello this is meat hello this is meat hello this is meat</p>
                    <p>hello this is meat</p>
                    <p>hello this is meat  hello this is meat hello this is meat hello this is meat</p>
                </div>
                <div class="eight wide column">
                    <div class="ui netboard ad" style="">
                        <img src="../foodpic/this.jpg" style="border: 3px; max-width: 100%; max-height: 100%;" alt="">
                    </div>
                </div>
                <div class="four wide column">sfsfasfsf</div>
                <div class="four wide column">sdfafd</div>
                <div class="four wide column">sfsafasfas</div>
                <div class="four wide column"></div>
                <div class="four wide column"></div>
                <div class="four wide column"></div>
            </div>


            <div class="ui comments">
                <h3 class="ui dividing header">Comments</h3>
                <div class="comment">
                    <a class="avatar">
                        <img src="/images/avatar/small/matt.jpg">
                    </a>
                    <div class="content">
                        <a class="author">Matt</a>
                        <div class="metadata">
                            <span class="date">Today at 5:42PM</span>
                        </div>
                        <div class="text">
                            How artistic!
                        </div>
                        <div class="actions">
                            <a class="reply">Reply</a>
                        </div>
                    </div>
                </div>
                <div class="comment">
                    <a class="avatar">
                        <img src="/images/avatar/small/elliot.jpg">
                    </a>
                    <div class="content">
                        <a class="author">Elliot Fu</a>
                        <div class="metadata">
                            <span class="date">Yesterday at 12:30AM</span>
                        </div>
                        <div class="text">
                            <p>This has been very useful for my research. Thanks as well!</p>
                        </div>
                        <div class="actions">
                            <a class="reply">Reply</a>
                        </div>
                    </div>
                    <div class="comments">
                        <div class="comment">
                            <a class="avatar">
                                <img src="/images/avatar/small/jenny.jpg">
                            </a>
                            <div class="content">
                                <a class="author">Jenny Hess</a>
                                <div class="metadata">
                                    <span class="date">Just now</span>
                                </div>
                                <div class="text">
                                    Elliot you are always so right :)
                                </div>
                                <div class="actions">
                                    <a class="reply">Reply</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="comment">
                    <a class="avatar">
                        <img src="/images/avatar/small/joe.jpg">
                    </a>
                    <div class="content">
                        <a class="author">Joe Henderson</a>
                        <div class="metadata">
                            <span class="date">5 days ago</span>
                        </div>
                        <div class="text">
                            Dude, this is awesome. Thanks so much
                        </div>
                        <div class="actions">
                            <a class="reply">Reply</a>
                        </div>
                    </div>
                </div>
                <form class="ui reply form">
                    <div class="field">
                        <textarea></textarea>
                    </div>
                    <div class="ui blue labeled submit icon button">
                        <i class="icon edit"></i> Add Reply
                    </div>
                </form>
            </div>
        </div>
    </div>


























    <div class="ui container grid" style="">
        <div class="centered column" style="width: 80%; background: #f9f9f9;">
            <?php $i = 0?>
            <div class="ui grid" style="margin: 10px;">

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
            </div>

        </div>
    </div>


@endsection
