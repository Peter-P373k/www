<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <meta name="author" content="Shahrukh Khan">
    <meta name="description" content="Login System with Google using OAuth PHP and MySQL">
    <meta name="keywords" content="php,mysql,google,oauth,social logins">
    <meta name="title" content="Login System with Google using OAuth PHP and MySQL">

    <title><?php echo PROJECT_NAME; ?></title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap-social.css" rel="stylesheet">
    <link href="bootstrap/css/font-awesome.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <link href="https://code.jquery.com/ui/1.12.1/themes/blitzer/jquery-ui.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="bootstrap/html5shiv.js"></script>
      <script src="bootstrap/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  </head>
  <body>
    <div class="navbar navbar-default navbar-static-top" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://www.p373kbtc.org" target="_blank"><span class="glyphicon glyphicon-home"></span> P373K IEP tracker</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
         <!-- <ul class="nav navbar-nav">
            <li><a href="GetDataClass.php" target="targetframe">Look Up Class Data</a></li>            
            <li><a href="GetDataTeacher.php" target="targetframe">Print out teacher List</a></li>
            <li><a href="GetDataStudent.php" target="targetframe">Look Up Students</a></li>
             <li><a href="InsertClassInfo_advanced.html" target="targetframe">Insert New Class</a></li>
             <li><a href="InsertStudentInfo_advanced.html" target="targetframe">Student Data Entry</a></li>
          </ul> -->
          <ul class="nav navbar-nav">
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Insert Data<span class="caret"></span></a>
             <ul class="dropdown-menu">
               <li><a href="InsertClassInfo_advanced.html" target="targetframe">Insert New Class</a></li>
               <li><a href="InsertStudentInfo_advanced.html" target="targetframe">Student Data Entry</a></li>
               <li><a href="InsertSubjectInfo_advanced.html" target="targetframe">Subject Data Entry</a></li>
              </ul>
            </li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Get  Data<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="GetDataClass.php" target="targetframe">Look Up Class Data</a></li>            
                  <li><a href="GetDataTeacher.php" target="targetframe">Print out teacher List</a></li>
                  <li><a href="GetDataStudent.php" target="targetframe">Look Up Students</a></li>
                  <li><a href="GetDataSubjects.php" target="targetframe">Look Up Subjects Data</a></li> 
                </ul>
            </li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Search Database<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="SearchTeacher.html" target="targetframe">Search Teachers</a></li>        
                  <li><a href="SearchClass.html" target="targetframe">Search Classes</a></li>
                  <li><a href="SearchStudent.html" target="targetframe">Search Students</a></li>
                  <li><a href="SearchSubjects.html" target="targetframe">Search Subjects</a></li> 
                </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container mainbody">
      <div class="page-header">
        <h1><?php echo PROJECT_NAME; include ('TeacherDropMenu.php');?></h1>
      </div>
      <div class="clearfix"></div>