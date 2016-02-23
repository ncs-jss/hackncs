<!DOCTYPE html>
<html lang="en" style='height:100%'>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>NCS | Nibble Computer Society</title>
        <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="../css/flexslider.css" rel="stylesheet" >
        <link href="../css/styles.css" rel="stylesheet">
        <link href="../css/queries.css" rel="stylesheet">
        <link href="../css/animate.css" rel="stylesheet">
    </head>
    <body id="top" style='height:100%'>
        <header id="home">
        </header>
        <section class="register">
            <a  class="btn btn-default" href="../">
             Go back to homepage</a>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <h1 style="text-align: center;" class="js-success">FEEDBACK FORM</h1>
                        <form id="myform" method="post">
                            {{csrf_field()}}
                            <label>Name</label>
                            <input type="text" name="name" placeholder="Name" required>
                            <label>Admission Number</label>
                            <input type="text" name="admission_number" placeholder="Admission Number" required>
                            <label>E-Mail Address</label>
                            <input type="email" name="email" placeholder="E-Mail" required>
                            <label>Feedback</label>
                            <input type="text" name="feedback" placeholder="Write your feedback here..." required>
                            <label>Lab</label>
                            <input type="text" name="lab" placeholder="Lab Number" required>
                            <button type="submit" name="submit">Submit</button>
                            <small class="js-response" style ='display:block;color: red;'></small> 
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
        <script>
        $(document).ready(function(){

              $('button').on('click',function(event){
                  event.preventDefault();
                  $('.js-response').html('');
                  $.post('feedback.php',$('form').serialize(),function(response){
                  
                    console.log(response);
                   if(response == 'full'){
                   $('.js-success').html('<p style="margin:36% auto; font-size:1.2em; line-height:1.5em;">We are full at the moment and cannot take any more entries. Sorry!! :(</p>');
                            
                            $('form').addClass('hidden');
                   }else{
                      
                       if(response){
                            $('.js-success').html('<p style="margin:36% auto; font-size:1.2em; line-height:1.5em;">Thank you for your feedback! See you soon :) </p>');
                            
                            $('form').addClass('hidden');
                       }
                       else
                            $('.js-response').html('Oops! Try again');
                            }
                              
                  })

              })



       });
        </script>
        <script src="../js/waypoints.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/scripts.js"></script>
        <script src="../js/jquery.flexslider.js"></script>
        <script src="../js/modernizr.js"></script>
    </body>
</html>