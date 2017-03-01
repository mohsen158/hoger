@extends('layouts.app2')
@section('content')


    <div class="two column stackable ui grid">

    </div>

    <div class="">


        <div class="ui segment" style="direction: rtl;font-family: KoodakBold;">

            <div class="ui  card fluid">
                <div class="content">

                    <div style="font-family: KoodakBold" class="header">{{$food->name}}</div>
                    <div id="like" class="description">
                        <p>{{$food->detail}}</p>

                    </div>

                </div>

                <div class="extra content">
    <span class="left floated like">
            <div class="ui heart rating"></div>

      خوش مزع بود D:
    </span>


                    <span class="right floated star">
                   {{$like}} بار خوشمزه بوده
                </div>
            </div>

            <div class="ui comments">
                <h3 style="font-family: KoodakBold" class="ui dividing header">نظر</h3>

                <form class="ui reply form" action="/addcomment" method="post">
                    <div class="field">
                        {{csrf_field()}}
                        <textarea name="comment"></textarea>
                    </div>
                    <button class="ui blue labeled submit icon button" type="submit">
                        <i class="icon edit"></i> ارسال
                    </button>
                </form>
            </div>
        </div>
    </div>







    <form id="form1" action="/like/{{$food->id}}/{{$food->id}}" method="post">
        {{csrf_field()}}
    </form>

    <form id="form0" action="/dislike/{{$food->id}}/{{$food->id}}" method="post">
        {{csrf_field()}}
    </form>

    {{$like}}

    <script src="{{asset('js/app.js')}}"></script>
    <script>

        var like = {{$like}};
        if (like != 0) {
            like = 1
        }
        $('.ui.rating')
            .rating({
                initialRating: like,
                maxRating: 1
            })
        ;
        $('.ui.rating')
            .rating('setting', 'onRate', function (value) {
                if (value == 1) {

                    document.getElementById("form1").submit();
                }
                else {
                    document.getElementById("form0").submit();
                }
            });
    </script>





@endsection
