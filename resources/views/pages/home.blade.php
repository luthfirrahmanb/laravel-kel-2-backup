@extends('layouts.default')
@section('content')
    <div class="jumbotron">
            <h1>Schedule It!</h1>      
            <p>Every Short-Term Human needs</p>
    </div>

    <h2>Our Technologies: </h2>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
              <li data-target="#myCarousel" data-slide-to="3"></li>
              <li data-target="#myCarousel" data-slide-to="4"></li>
              <li data-target="#myCarousel" data-slide-to="5"></li>
              <li data-target="#myCarousel" data-slide-to="6"></li>
            </ol>
        
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="/img/heroku.png" alt="heroku" style="width:40%;margin-left: 25em">
              </div>
        
              <div class="item">
                <img src="/img/github.png" alt="github" style="width:40%;margin-left: 25em">
              </div>
            
              <div class="item">
                <img src="/img/git.png" alt="git" style="width:20%;margin-left: 34em">
              </div>

                <div class="item">
                    <img src="/img/react.png" alt="react" style="width:30%;margin-left: 29em">
                </div>

                <div class="item">
                    <img src="/img/redux.png" alt="redux" style="width:40%;margin-left: 25em">
                </div>
                <div class="item">
                    <img src="/img/firebase.png" alt="firebase" style="width:30%;margin-left: 30em">
                </div>
                <div class="item">
                    <img src="/img/antd.png" alt="antd" style="width:20%;margin-left: 34em">
                </div>
                
            </div>
        
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
    </div>
@stop