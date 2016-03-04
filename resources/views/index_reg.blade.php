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
            <a  class="btn btn-default" href="{{URL::asset('/')}}">
             Go back to homepage</a>
            <div class="container">

                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <h1 style="text-align: center;" class="js-success">REGISTER FOR RECRUITMENTS</h1>
                       
                        <form  method="post" action = "register" >

                               <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                     <div class ="error"> 
                                @if($errors->has())
                <p>  {{$errors->first('name',':message')}} </p>
                <p>  {{$errors->first('mobile',':message')}} </p>
                <p>  {{$errors->first('email',':message')}} </p>
                <p>  {{$errors->first('admission_number',':message')}} </p>
                <p>  {{$errors->first('attend',':message')}} </p>
                <p>  {{$errors->first('choose',':message')}} </p>
                 
                  @endif</div>
                            <label>Name</label>
                            <input type="text" name="name" placeholder="Name" id="name" required>
                            <label>Mobile Number</label>
                            <input type="tel" name="mobile" placeholder="Mobile" required id="mobile" maxlength="10">
                            <label>Admission Number</label>
                            <input type="text" name="admission_number" placeholder="Admission Number" id="admission_number" required>
                            <label>E-Mail Address</label>
                            <input type="email" name="email" placeholder="E-Mail" id="email" required>
                            <label>Are you attending the event?</label>
                            <select name="attend" placeholder="Attend" required>
                                <option value="1" selected>Yes</option>
                                <option value="0">No</option>
                                <option value="2">Not Sure</option>
                            </select>
                            <label>What club are you applying for?</label>
                            <select name="choose" placeholder="What club are you applying for?" id="choose" required>
                                <option value="1" >Programming club</option>
                                <option value="2">Design club</option>
                                <option value="3">Technical club</option>
                                <option value="4">Web club</option>
                            </select>
                            <button type="submit" name="submit">Register</button>
                           </form>



                    </div>
                </div>
            </div>

        </section>

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