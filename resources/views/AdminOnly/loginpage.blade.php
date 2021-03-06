<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="<?php echo asset('css/materialize.min.css')?>" type="text/css">

        {{--  Custom CSS for Loading  --}}
        <link rel="stylesheet" href="<?php echo asset('css/loader.css')?>" type="text/css">

        {{--  FONT of the Website  --}}
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

        {{--  Font Awesome for Icons  --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        {{--  Custom CSS designed especially for Home Layout  --}}
        <link rel="stylesheet" href="<?php echo asset('css/adminonly/customlogin.css')?>" type="text/css">
        
        <title>{{config('app.name','PBO Global')}}</title>
    
</head>

<body  >
     <main>
  <div class="section"></div> 
    <center>
     <div class="section"></div>
       <div class="section"></div>
  
        <div class="z-depth-1 white lighten-1 row" style="display: inline-block; padding: 32px 50px 0px 50px; border: 1px solid #EEE;">

          <form class="col s12 l12" method="post">
            <div class='left-align row' >
              <div>
			        <img src="img/pbobig.png" width="68px" height="66px" >
              </div>
     		    </div> 
             <div class='left-align row'> 
              <div ><h5 class="indigo-text text-darken-4 "><b>Sign in,</b></h5></div>
             <div >
                  <b class="indigo-text text-darken-4">to Continue to Admin Page</b>
                  </div>
        </div>
             <div class='left-align row'>
         <div class='input-field col s12 l12'>
                <input class='validate' type='text' name='username' id='username' data-length="10" />
                <label for='username'>Username</label>
              </div>
        </div> 
            <div class='left-align row'>
            <div class='input-field col s12 l12'>
				      <input class='validate' type='password' name='password' id='password' />
                <label for='password'>Password</label>
              </div> 
            </div>

            <br />
            <center>
              <div class='row'>
                <button class="btn waves-effect waves-light" id="btnlogin" type="submit" name="action">Login
                </button>
              </div>
            </center>
          </form>
        </div>
    
    </center>

    <div class="section"></div>
  </main>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>

  </body>

    </hmtl>