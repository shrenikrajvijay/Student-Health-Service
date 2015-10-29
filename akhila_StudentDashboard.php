<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Student Dashboard</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#tabs" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
    $( "#tabs li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );
  });
  </script>
  <style>
  .ui-tabs-vertical { width: 55em; }
  .ui-tabs-vertical .ui-tabs-nav { padding: .2em .1em .2em .2em; float: left; width: 12em; }
  .ui-tabs-vertical .ui-tabs-nav li { clear: left; width: 100%; border-bottom-width: 1px !important; border-right-width: 0 !important; margin: 0 -1px .2em 0; }
  .ui-tabs-vertical .ui-tabs-nav li a { display:block; }
  .ui-tabs-vertical .ui-tabs-nav li.ui-tabs-active { padding-bottom: 0; padding-right: .1em; border-right-width: 1px; border-right-width: 1px; }
  .ui-tabs-vertical .ui-tabs-panel { padding: 1em; float: right; width: 40em;}
  </style>
</head>
<body>
 
<div id="tabs">
  <ul>
    <li><a href="#tabs-1">Appointment List</a></li>
    <li><a href="#tabs-2">Create Event</a></li>
    <li><a href="#tabs-3">Admin Management</a></li>
    <li><a href="#tabs-3">Email Format</a></li>
    
  </ul>
  <div id="tabs-1">
    <h2>Appointment List</h2>
 <p><?php include ('config/setup.php'); ?></p> 
  </div>
  <div id="tabs-1">
    <h2>Create Event </h2>
 <p><?php include ('config/setup.php'); ?></p> 
  </div>
  <div id="tabs-1">
    <h2>Admin Management</h2>
 <p><?php include ('config/setup.php'); ?></p> 
  </div>
  <div id="tabs-1">
    <h2>Email Format</h2>
 <p><?php include ('config/setup.php'); ?></p> 
  </div>
</div>
 
 
</body>
</html>