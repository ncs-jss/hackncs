<!DOCTYPE html>
<html lang="en" style='height:100%'>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>NCS | Nibble Computer Society</title>
        <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
        <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="{{URL::asset('css/flexslider.css')}}" rel="stylesheet" >
        <link href="{{URL::asset('css/styles.css')}}" rel="stylesheet">
        <link href="{{URL::asset('css/queries.css')}}" rel="stylesheet">
        <link href="{{URL::asset('css/animate.css')}}" rel="stylesheet">
    </head>
    <body id="top" style='height:100%'>
        <header id="home">
        </header>
        <section class="register">
            <a  class="btn btn-default" href="/hackncs/">
             Go back to homepage</a>
            <div class="container">

                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <h1 style="text-align: center;" class="js-success">Event Details For Zealicon</h1>
                       
                        <form  method="post" action = "zealicon_event" >

                               <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                     <div class ="error"> 
                                @if($errors->has())
                <p>  {{$errors->first('event_name',':message')}} </p>
                <p>  {{$errors->first('winner',':message')}} </p>
                <p>  {{$errors->first('runner1',':message')}} </p>
                <p>  {{$errors->first('runner2',':message')}} </p>
                 
                  @endif</div>

                            <label>Event Name</label>
                            <input type="text" name="event_name" placeholder="Event Name" id="event_name" required>
                            
                            <label>Number of Winners</label>
                            <input type="number" name="winner" placeholder="Winners" required id="winnwrs" maxlength="3">
                            
                            <label>Number of 1st Runner-Ups</label>
                            <input type="number" name="runner1" placeholder="1st Runner Ups" id="runner1" required maxlength="3">
                            
                            <label>Number of 2nd Runner-Ups</label>
                            <input type="number" name="runner2" placeholder="2nd Runner Ups" id="runner2" required maxlength="3">
                            
                            <button type="submit" name="submit">Submit Details</button>
                           </form>



                    </div>
                </div>
            </div>
        </secti

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                    </div>
                    <div class="col-md-6 credit">
                        <p>Designed &amp; Developed by <a href="https://www.facebook.com/nibblecomputersociety" target="_blank">Nibble Computer Society</a></p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{URL::asset('js/waypoints.min.js')}}"></script>
        <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
        <script src="{{URL::asset('js/scripts.js')}}"></script>
        <script src="{{URL::asset('js/jquery.flexslider.js')}}"></script>
        <script src="{{URL::asset('js/modernizr.js')}}"></script>
    </body>
</html>