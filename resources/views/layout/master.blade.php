<!DOCTYPE html>
<html lang="pt"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/midia/imgs/logo.ico">

    <title>Melhor idade S&A - @yield('title')</title>

    <!-- Bootstrap core CSS -->
    @section('styles_scripts')
    {!! Html::style('midia/bootstrap/dist/css/bootstrap.min.css') !!}
    {!! Html::style('midia/css/ie10-viewport-bug-workaround.css') !!}
    {!! Html::style('midia/css/carousel.css') !!}
    @show
    
    
    @section('suporte_scripts')
    <!--[if lt IE 9]>
    {!! HTML::script('midia/js/ie8-responsive-file-warning.js') !!}    
    <![endif]-->
    {!! HTML::script('midia/js/ie-emulation-modes-warning.js') !!}
    @show

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

              <a class="navbar-brand" href="{{ URL::to('/') }}">
                {{ HTML::image('midia/imgs/logo.jpg', 
                'Melhor Idade S&A',
                ['class' => 'logo']) }}
              </a>
            </div>
            
            @yield('menu')

          </div>
        </nav>

      </div>
    </div>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class=""></li>
        <li class="" data-target="#myCarousel" data-slide-to="1"></li>
        <li class="active" data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item">
          <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Example headline.</h1>
              <p>Note: If you're viewing this page via a <code>file://</code>
 URL, the "next" and "previous" Glyphicon buttons on the left and right 
might not load/display properly due to web browser security rules.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget 
quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor 
id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item active">
          <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget 
quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor 
id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" height="140" width="140">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis 
euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi 
leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo
 cursus magna.</p>
          <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" height="140" width="140">
          <h2>Heading</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor 
ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus 
sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor 
mauris condimentum nibh.</p>
          <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" height="140" width="140">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis 
in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. 
Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh,
 ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor 
fringilla. Vestibulum id ligula porta felis euismod semper. Praesent 
commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, 
tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img data-holder-rendered="true" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNTAwIiBoZWlnaHQ9IjUwMCIgdmlld0JveD0iMCAwIDUwMCA1MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzUwMHg1MDAvYXV0bwpDcmVhdGVkIHdpdGggSG9sZGVyLmpzIDIuNi4wLgpMZWFybiBtb3JlIGF0IGh0dHA6Ly9ob2xkZXJqcy5jb20KKGMpIDIwMTItMjAxNSBJdmFuIE1hbG9waW5za3kgLSBodHRwOi8vaW1za3kuY28KLS0+PGRlZnM+PHN0eWxlIHR5cGU9InRleHQvY3NzIj48IVtDREFUQVsjaG9sZGVyXzE1NmE5MmY0ZDU0IHRleHQgeyBmaWxsOiNBQUFBQUE7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MjVwdCB9IF1dPjwvc3R5bGU+PC9kZWZzPjxnIGlkPSJob2xkZXJfMTU2YTkyZjRkNTQiPjxyZWN0IHdpZHRoPSI1MDAiIGhlaWdodD0iNTAwIiBmaWxsPSIjRUVFRUVFIi8+PGc+PHRleHQgeD0iMTg3IiB5PSIyNjEuMSI+NTAweDUwMDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="500x500">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor 
fringilla. Vestibulum id ligula porta felis euismod semper. Praesent 
commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, 
tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img data-holder-rendered="true" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNTAwIiBoZWlnaHQ9IjUwMCIgdmlld0JveD0iMCAwIDUwMCA1MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzUwMHg1MDAvYXV0bwpDcmVhdGVkIHdpdGggSG9sZGVyLmpzIDIuNi4wLgpMZWFybiBtb3JlIGF0IGh0dHA6Ly9ob2xkZXJqcy5jb20KKGMpIDIwMTItMjAxNSBJdmFuIE1hbG9waW5za3kgLSBodHRwOi8vaW1za3kuY28KLS0+PGRlZnM+PHN0eWxlIHR5cGU9InRleHQvY3NzIj48IVtDREFUQVsjaG9sZGVyXzE1NmE5MmYzNDQ4IHRleHQgeyBmaWxsOiNBQUFBQUE7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MjVwdCB9IF1dPjwvc3R5bGU+PC9kZWZzPjxnIGlkPSJob2xkZXJfMTU2YTkyZjM0NDgiPjxyZWN0IHdpZHRoPSI1MDAiIGhlaWdodD0iNTAwIiBmaWxsPSIjRUVFRUVFIi8+PGc+PHRleHQgeD0iMTg3IiB5PSIyNjEuMSI+NTAweDUwMDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="500x500">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor 
fringilla. Vestibulum id ligula porta felis euismod semper. Praesent 
commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, 
tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img data-holder-rendered="true" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNTAwIiBoZWlnaHQ9IjUwMCIgdmlld0JveD0iMCAwIDUwMCA1MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzUwMHg1MDAvYXV0bwpDcmVhdGVkIHdpdGggSG9sZGVyLmpzIDIuNi4wLgpMZWFybiBtb3JlIGF0IGh0dHA6Ly9ob2xkZXJqcy5jb20KKGMpIDIwMTItMjAxNSBJdmFuIE1hbG9waW5za3kgLSBodHRwOi8vaW1za3kuY28KLS0+PGRlZnM+PHN0eWxlIHR5cGU9InRleHQvY3NzIj48IVtDREFUQVsjaG9sZGVyXzE1NmE5MmVmN2E0IHRleHQgeyBmaWxsOiNBQUFBQUE7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MjVwdCB9IF1dPjwvc3R5bGU+PC9kZWZzPjxnIGlkPSJob2xkZXJfMTU2YTkyZWY3YTQiPjxyZWN0IHdpZHRoPSI1MDAiIGhlaWdodD0iNTAwIiBmaWxsPSIjRUVFRUVFIi8+PGc+PHRleHQgeD0iMTg3IiB5PSIyNjEuMSI+NTAweDUwMDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="500x500">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->

      @yield('conteudo')
      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>© 2016 Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->

    @section('scripts')
    {!! HTML::script('midia/jquery/dist/jquery.min.js') !!}
    {!! HTML::script('midia/bootstrap/dist/js/bootstrap.min.js') !!}
    {!! HTML::script('midia/js/holder.js') !!}
    {!! HTML::script('midia/js/ie10-viewport-bug-workaround.js') !!}
    @show
 

<svg style="display: none; visibility: hidden; position: absolute; top: -100%; left: -100%;" preserveAspectRatio="none" viewBox="0 0 500 500" height="500" width="500"><defs><style type="text/css"></style></defs><text style="font-weight:bold;font-size:25pt;font-family:Arial, Helvetica, Open Sans, sans-serif" y="25" x="0">500x500</text></svg></body></html>