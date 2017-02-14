<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
<link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script src="semantic/dist/semantic.min.js"></script>
      <style>
          @import "http://fonts.googleapis.com/css?family=Lato:300";
          .hero {
              position: relative;
              width: 100%;
              height: 110vh;
              color: white;
              text-align: center;
              font-family: Lato, sans-serif;
              font-weight: 300;
              text-shadow: 1px 1px 0 rgba(0, 0, 0, 0.4);
              border-bottom: solid 5px white;
          }
          .hero:before, .hero:after {
              position: absolute;
              display: block;
              top: 50%;
              left: 0;
              right: 0;
              max-width: 600px;
              margin: 0 auto;
          }
          .hero:before {

              font-size: 46px;
              line-height: 60px;
              margin-top: -40px;
          }
          .hero:after {
              font-size: 20px;
              line-height: 30px;
              margin-top: 20px;
          }
          .hero--intro:before {
          }
          .hero--intro:after {
          }
          .hero--intro {
              background: linear-gradient(135deg, #4567b2 20%, #8ab9ff 80%);
          }
          .hero--1 {
              background: linear-gradient(135deg, #76ad39 20%, #cdff8a 80%);
          }
          .hero--2 {
              background: linear-gradient(135deg, #b24592 20%, #f15f79 80%);
          }
          .hero--3 {
              background: linear-gradient(135deg, #432b58 20%, #734b6f 80%);
          }
          .hero--4 {
              background: linear-gradient(135deg, #904e95 20%, #e96450 80%);
          }
          .hero--5 {
              background: linear-gradient(135deg, #ff5f6d 20%, #ffc371 80%);
          }
          .hero--6 {
              background: linear-gradient(135deg, #ff9068 20%, #ff4b1f 80%);
          }
          .hero--7 {
              background: linear-gradient(135deg, #ffa000 20%, #ff5000 80%);
          }
          .hero--8 {
              background: linear-gradient(135deg, #b993d8 20%, #8ca6dc 80%);
          }
          .hero--9 {
              background: linear-gradient(135deg, #3ca55f 20%, #b5ac59 80%);
          }
          .hero--10 {
              background: linear-gradient(135deg, #2a99ef 20%, #52d9e5 80%);
          }
          .hero--11 {
              background: linear-gradient(135deg, #225e9e 20%, #712c69 80%);
          }

      </style>

<style>
        body {
            font-family: 'Tahoma';
        }
    </style>
  </head>


  <body style="background: linear-gradient(135deg, #ffa000 20%, #ff5000 80%);">

  @if( isset($err))
      <div class="ui warning message">
          <i class="close icon"></i>
          <div class="header">
              خطا
          </div>
      </div>
  @endif
<!--
  <div class="ui grid">
      <div class="four column row">
          <div class="left floated column">jjjjjjj</div>
          <div class="right floated column">kkkkkkkk</div>
      </div>
      <div class="row">
          <div class="three wide column"></div>
          <div class="eight wide column"></div>
          <div class="five wide column"></div>
      </div>
  </div>



  <div class="ui grid">
      <div class="eight wide column">,hg,</div>
      <div class="eight wide column right floated">lkhjkl</div>
      <div class="ten wide column">kh</div>
      <div class="six wide column">kjh</div>
      <div class="four wide column">lkj</div>
      <div class="twelve wide column">lj</div>
      <div class="two wide column">kjlkj</div>
      <div class="fourteen wide column">kjhk</div>
      <div class="sixteen wide column">m.m</div>
  </div>

-->

  <div class="ui borderless main menu" style="z-index:-10;  height: 55px;background-color: #f9f9f9;">
      <div class="ui  container" style="width: 937px;">
          <div href="#" class="header item">
              <h3>Hoger</h3>
          </div>
      </div>
  </div>



<style media="screen">
.ui.fixed.sticky + p {
  margin-top: 39px;
}
</style>

      <div class="ui container grid" style="">
          <div class="centered column" style="width: 80%; background: #f9f9f9;">
              <div class="ui grid"  style="margin: 10px;">

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
              <div class="ui grid"  style="margin: 10px;">
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
              <div class="ui grid"  style="margin: 10px;">
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
          </div>
      </div>


<script type="text/javascript">
$('.ui.sticky')
.sticky();

</script>

<script type="text/javascript">
  $('.shape').shape('repaint');
  $('.shape')
  .shape('set next side', '.second.side')
  .shape('flip up')
;
$('.shape').shape();
</script>

  <script src="{{ asset('js/app.js') }}"></script>
  <script src="js/app.js"></script>
  <!--<script src="js/teacher.js"></script>-->
  <script src="js/vendor.js"></script>
  <script src="js/guestexam.js"></script>
</body>
</html>
