<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1" />

<link href='http://fonts.googleapis.com/css?family=Raleway:500' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Nunito' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Cantarell:700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Inconsolata' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Slabo" rel="stylesheet">
<!-- @font-face { font-family: Delicious; src: url('Delicious-Roman.otf'); } --> 


	<title><?php wp_title('&laquo;', true, 'right'); bloginfo('name'); ?></title>
	<?php $theme_url = get_template_directory_uri();?>
        <?php wp_head();?> 
	 
</head>


<body <?php body_class(); ?> >

<div id="header">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"></a>
    </div>

<!-- style="background-color:#fced4c"  typical yellow color -->

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div style="background-color:aliceblue" class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a style="font-family: 'Titillium Web', sans-serif;font-size:15px" href="http://www.beautifulwork.org/"> <span style="font-weight:700;font-size:15px" aria-hidden="true"></span><b>B</b></a></li>
        <li><a style="font-family: 'Titillium Web', sans-serif;font-size:14px" href="http://www.beautifulwork.org/web/beautifulwork-project-about.php"><span  style="font-weight:700;font-size:15px" class="glyphicon  glyphicon-heart-empty" aria-hidden="true"></span> ABOUT</a></li>
        <li class="dropdown">
          <a style="font-family: 'Titillium Web', sans-serif;font-size:14px" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span style="font-weight:700;font-size:17px" class="glyphicon  glyphicon-education" aria-hidden="true"></span> ACADEMIC<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="http://www.beautifulwork.org/code">DEBIAN GNU AND LINUX</a></li>
            <li><a href="http://www.beautifulwork.org/sorting">ALGORITHM</a></li>
            <li><a href="http://www.beautifulwork.org/lib">LIBRARY</a></li>
            <li><a href="http://www.beautifulwork.org/data">PROGRAMMING LANGUAGES</a></li>
            <!-- <li><a href="http://www.beautifulwork.org/ui">USER INTERFACE</a></li> -->
            <!-- <li role="separator" class="divider"></li> -->
            <li><a href="http://www.beautifulwork.org/reader">READER</a></li>
          </ul>
        </li>
      </ul>
  <!--  <form  class="navbar-form navbar-left" role="search">  
         <div class="form-group">
         <input type="text" class="form-control" placeholder="Search"> 

          <?php get_search_form(true); ?> 

         </div>
        <button type="submit" class="btn btn-default">Submit</button>
         </form> -->
      <ul class="nav navbar-nav navbar-left">
        <li><a style="font-family: 'Titillium Web', sans-serif;font-size:14px" href="http://www.beautifulwork.org/web/beautifulwork-project-contribute.php"><span style="font-weight:700;font-size:17px"  class="glyphicon  glyphicon-plane" aria-hidden="tr\
ue"></span> CONTRIBUTE</a></li>
        <li class="dropdown">
          <a style="font-family: 'Titillium Web', sans-serif;font-size:14px" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span style="font-weight:700;font-size:15px" class="glyphicon  glyphicon-book" aria-hidden="true"></span> DESIGN <span class="caret"></span></a>
          <ul class="dropdown-menu">
                <li><a href="http://www.beautifulwork.org/plan">DESIGN DOCUMENTS</a></li>
    <!--        <li role="separator" class="divider"></li> -->
    
          </ul>
        </li>
<li><a style="font-family: 'Titillium Web', sans-serif;font-size:14px" href="http://www.beautifulwork.org/web/beautifulwork-project-download.php"><span style="font-weight:700;font-size:15px" class="glyphicon  glyphicon-download" aria-hidden="tr\
ue"></span> DOWNLOAD</a></li>
      </ul>
<ul class="nav navbar-nav navbar-right">
  <li><button  type="button" class="btn btn-default navbar-btn">CONTACT</button> </li>
  <li>&nbsp;&nbsp;</li>
<!--  <li><img height="30" width="30"  src="../../../files/logo/bwlogo.png"></img> </li> -->
</ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

</div>
