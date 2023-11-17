<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <!--
    =========================================================
    * ArchitectUI HTML Theme Dashboard - v1.0.0
    =========================================================
    * Product Page: https://dashboardpack.com
    * Copyright 2019 DashboardPack (https://dashboardpack.com)
    * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
    =========================================================
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
    -->

<link href="./main.css" rel="stylesheet">
<style>
.app-page-title{ padding:25px !important; margin:-50px -30px 20px}
fieldset{border:1px solid #ccc; padding:5px!important; }
legend{ width:auto !important; padding:5px; margin:5px; border:1px solid #ccc; background:#f5f5f5}
</style>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script > 
var jq = $.noConflict();
   jq( function() {
     jq( "#date_b" ).datepicker({
      changeMonth: true,
      changeYear: true,
	  yearRange: '1950:2013'
    });
  } );
  
  var jq1 = $.noConflict();
   jq1( function() {
     jq1( "#h_date" ).datepicker({
      changeMonth: true,
      changeYear: true,
	  yearRange: '1950:2013'
    });
  } );
</script >

<script src="http://cdn.ckeditor.com/4.5.9/full/ckeditor.js"></script >

		
  <link rel="stylesheet"
href="datatable/jquery.dataTables.min.css" />     
<link rel="stylesheet" 

href="datatable/buttons.dataTables.min.css" />     
<Script src="datatable/jquery-1.12.3.js" 

type="text/javascript"></Script>     
<Script src="datatable/jquery.dataTables.min.js" 
type="text/javascript"></Script>     
<Script src="datatable/dataTables.buttons.min.js" 
type="text/javascript"></Script>     
<Script src="datatable/jszip.min.js" 
type="text/javascript"></Script>     
<Script src="datatable/buttons.html5.min.js" 
type="text/javascript"></Script>



</head>