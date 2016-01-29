<!DOCTYPE html>
<html lang="en" style='height:100%'>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>NCS | Nibble Computer Society</title>
        <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
        <link href="{{URL::asset('../css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="{{URL::asset('../css/flexslider.css')}}" rel="stylesheet" >
        <link href="{{URL::asset('../css/styles.css')}}" rel="stylesheet">
        <link href="{{URL::asset('../css/queries.css')}}" rel="stylesheet">
        <link href="{{URL::asset('../css/animate.css')}}" rel="stylesheet">
    </head>
    <body id="top" style='height:100%'>
        <header id="home">
        </header>
        <section class="register" style='height:100%'>
            <a  class="btn btn-default" href="http://www.hackncs.com/">
             Go back to homepage</a>
            <div class="container">

                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <h1 style="text-align: center;" class="js-success">{{$data}}</h1>
                        <h3 style='color:white;'></h3>
                    </div>
                </div>
            </div>

        </section>

        <footer style='position:absolute;width:100%;bottom:0px;'>
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
        <script>
        $(document).ready(function(){

              $('button').on('click',function(event){
                  event.preventDefault();
                  $('.js-response').html('');
                  $.post('register.php',$('form').serialize(),function(response){
                       if(response){
                            $('.js-success').html('<p style="margin:36% auto; font-size:1.2em; line-height:1.5em;">Thank you for registering! See you soon :)</p>');
                            
                            $('form').addClass('hidden');
                       }
                       else
                            $('.js-response').html('Oops! Try again');
                              
                  })

              });



       });
        </script>
        <script src="{{URL::asset('../js/waypoints.min.js')}}"></script>
        <script src="{{URL::asset('../js/bootstrap.min.js')}}"></script>
        <script src="{{URL::asset('../js/scripts.js')}}"></script>
        <script src="{{URL::asset('../js/jquery.flexslider.js')}}"></script>
        <script src="{{URL::asset('../js/modernizr.js')}}"></script>
    </body>
</html>