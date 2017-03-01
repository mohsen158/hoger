@extends('layouts.app2')
@section('content')

    <script>
        $('.shape').shape();
    </script>
    <div style="direction: rtl" class="ui container">
        <div class="ui two column stackable grid ">
            @foreach($data as $group)
            <div class="column">
                <div class="ui raised segment  ">
                    <div class="ui header">{{$group->id}}</div>
                    <div class="ui vertical fluid menu">
                     @foreach($group->foods as $food)
                        <a href="/foods/{{$food->id}}" class="item">
                            <h4 class="ui header">{{$food->name}}</h4>
                            {{--<p>Check out our new promotions</p>--}}
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
    </div>


@endsection
