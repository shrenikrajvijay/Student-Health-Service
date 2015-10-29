<!DOCTYPE html>
<?php
include('db_connect.php');
?>
<html>
  <head>
    <!-- This page is copyright Elated Communications Ltd. (www.elated.com) -->
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
		<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
		<script type="text/javascript" src="jquery-ui-timepicker-addon.js"></script>
    <title>Search Appointment</title>

    <style type="text/css">
      body { font-size: 80%; font-family: 'Lucida Grande', Verdana, Arial, Sans-Serif; }
      ul#tabs { list-style-type: none; margin: 30px 0 0 0; padding: 0 0 0.3em 0; }
      ul#tabs li { display: inline; }
      ul#tabs li a { color: #42454a; background-color: #dedbde; border: 1px solid #c9c3ba; border-bottom: none; padding: 0.3em; text-decoration: none; }
      ul#tabs li a:hover { background-color: #f1f0ee; }
      ul#tabs li a.selected { color: #000; background-color: #f1f0ee; font-weight: bold; padding: 0.7em 0.3em 0.38em 0.3em; }
      div.tabContent { border: 1px solid #c9c3ba; padding: 0.5em; background-color: #f1f0ee; }
      div.tabContent.hide { display: none; }
    </style>

    <script type="text/javascript">
      $(function(){
      GetAppointment();

    });

    function GetAppointment()
    {

      var today = new Date();
      var dd = today.getDate();
      var mm = today.getMonth()+1; 

    var yyyy = today.getFullYear();

    var today = yyyy+"-"+mm+"-"+dd;



        $.ajax({type:"post",url:"parthfile_appointmentList_php.php",data:{GetAppointment:1,frmDate:today,toDate:today}}).done(
        function(msg){

          //alert(msg);
          document.getElementById("AppToday").innerHTML=msg;

        
        });
    }
    function GetAppointment7()
    {

      var today = new Date();
      var tom= new Date();
      tom.setDate(today.getDate()+7);
      var dd = today.getDate();
      var mm = today.getMonth()+1; 

    var yyyy = today.getFullYear();
    var today = yyyy+"-"+mm+"-"+dd;
    

    

    dd = tom.getDate();
    mm = tom.getMonth()+1; 

    yyyy = tom.getFullYear();
   var tom = yyyy+"-"+mm+"-"+dd;



        $.ajax({type:"post",url:"parthfile_appointmentList_php.php",data:{GetAppointment:1,frmDate:today,toDate:tom}}).done(
        function(msg){

          //alert(msg);
          document.getElementById("App7").innerHTML=msg;

        
        });
    }
    function GetAppointment30()
    {

      var today = new Date();
      var tom= new Date();
      tom.setDate(today.getDate()+30);
      var dd = today.getDate();
      var mm = today.getMonth()+1; 

    var yyyy = today.getFullYear();
    var today = yyyy+"-"+mm+"-"+dd;
    

    

    dd = tom.getDate();
    mm = tom.getMonth()+1; 

    yyyy = tom.getFullYear();
   var tom = yyyy+"-"+mm+"-"+dd;



        $.ajax({type:"post",url:"parthfile_appointmentList_php.php",data:{GetAppointment:1,frmDate:today,toDate:tom}}).done(
        function(msg){

          //alert(msg);
          document.getElementById("App30").innerHTML=msg;

        
        });
    }
    
    function GetAppointmentOther()
    {
    	
    	
    	
    }
    </script>




    <script type="text/javascript">
    //<![CDATA[




    var tabLinks = new Array();
    var contentDivs = new Array();

    function init() {

      // Grab the tab links and content divs from the page
      var tabListItems = document.getElementById('tabs').childNodes;
      for ( var i = 0; i < tabListItems.length; i++ ) {
        if ( tabListItems[i].nodeName == "LI" ) {
          var tabLink = getFirstChildWithTagName( tabListItems[i], 'A' );
          var id = getHash( tabLink.getAttribute('href') );
          tabLinks[id] = tabLink;
          contentDivs[id] = document.getElementById( id );
        }
      }

      // Assign onclick events to the tab links, and
      // highlight the first tab
      var i = 0;

      for ( var id in tabLinks ) {
        tabLinks[id].onclick = showTab;
        tabLinks[id].onfocus = function() { this.blur() };
        if ( i == 0 ) tabLinks[id].className = 'selected';
        i++;
      }

      // Hide all content divs except the first
      var i = 0;

      for ( var id in contentDivs ) {
        if ( i != 0 ) contentDivs[id].className = 'tabContent hide';
        i++;
      }
    }

    function showTab() {
      var selectedId = getHash( this.getAttribute('href') );

      // Highlight the selected tab, and dim all others.
      // Also show the selected content div, and hide all others.
      for ( var id in contentDivs ) {
        if ( id == selectedId ) {
          tabLinks[id].className = 'selected';
          contentDivs[id].className = 'tabContent';
        } else {
          tabLinks[id].className = '';
          contentDivs[id].className = 'tabContent hide';
        }
      }

      // Stop the browser following the link
      return false;
    }

    function getFirstChildWithTagName( element, tagName ) {
      for ( var i = 0; i < element.childNodes.length; i++ ) {
        if ( element.childNodes[i].nodeName == tagName ) return element.childNodes[i];
      }
    }

    function getHash( url ) {
      var hashPos = url.lastIndexOf ( '#' );
      return url.substring( hashPos + 1 );
    }
    
    function SearchButtonClicked()
    {
    	
    	if(document.getElementById("rbId").checked ==true)
    	{
    		document.getElementById("txtName").disabled=true;
    		document.getElementById("txtID").disabled=false; 
    	}
    	else 
    	{
    		document.getElementById("txtName").disabled=false;
    		document.getElementById("txtID").disabled=true;
    	}
    }
    function SearchByDates()
    {
    	
    	if(document.getElementById("chkDateSearch").checked ==true)
    	{
    		document.getElementById("datepicFrom").disabled=false;
    		document.getElementById("datepicTo").disabled=false; 
    	}
    	else 
    	{
    		document.getElementById("datepicFrom").disabled=true;
    		document.getElementById("datepicTo").disabled=true;
    	}
    }
    
    function CancelAppointment(id)
    {
    	
    	if(confirm("Are sure to cancel the appointment?")==false)
    	{
    		return;
    	}
    	//alert("Hi");
    	$.ajax({type:"post",url:"parthfile_appointmentList_php.php",data:{CancelAppointment:1,Appid:id}}).done(
        function(msg){
			OnSubmit();
        	//alert(msg);
        	//document.getElementById("othrResult").innerHTML=msg;

        
        });	
    }
    
    function OnSubmit()
    {
    	if(document.getElementById("rbId").checked ==true)
    	{
    		var sid=document.getElementById("txtID").value;
    		if(document.getElementById("chkDateSearch").checked ==true)
    		{
    			var fromDate=document.getElementById("datepicFrom").value;
    			var toDate=document.getElementById("datepicTo").value;
    			//alert(sid+"-"+fromDate+"-"+toDate);
    			
    			$.ajax({type:"post",url:"parthfile_appointmentList_php.php",data:{GetAppointmentByIDDate:1,sid:sid,frmDate:fromDate,toDate:toDate}}).done(
        		function(msg){

          				//alert(msg);
          				document.getElementById("othrResult").innerHTML=msg;

        
        			});
    			
    			
    		}
    		else
    		{
    			    $.ajax({type:"post",url:"parthfile_appointmentList_php.php",data:{GetAppointmentByID:1,sid:sid}}).done(
        		function(msg){

          				//alert(msg);
          				document.getElementById("othrResult").innerHTML=msg;

        
        			});	
    		}
    	}	
    	else
    	{
    		var sName=document.getElementById("txtName").value;
    		if(document.getElementById("chkDateSearch").checked ==true)
    		{
    			var fromDate=document.getElementById("datepicFrom").value;
    			var toDate=document.getElementById("datepicTo").value;
    			//alert(sid+"-"+fromDate+"-"+toDate);
    			
    			$.ajax({type:"post",url:"parthfile_appointmentList_php.php",data:{GetAppointmentByNameDate:1,sName:sName,frmDate:fromDate,toDate:toDate}}).done(
        		function(msg){

          				//alert(msg);
          				document.getElementById("othrResult").innerHTML=msg;

        
        			});	
    			
    		}
    		else
    		{
    			$.ajax({type:"post",url:"parthfile_appointmentList_php.php",data:{GetAppointmentByName:1,sName:sName}}).done(
        		function(msg){

          				//alert(msg);
          				document.getElementById("othrResult").innerHTML=msg;

        
        			});
    		}
    		
    	}
    }


    //]]>
    </script>
  </head>
  <body onload="init()">
    <h1>Search Appointment</h1>

    <ul id="tabs">
      <li><a href="#AppToday" >Today</a></li>
      <li  onclick="GetAppointment7();"><a href="#App7" >Next 7 days</a></li>
      <li onclick="GetAppointment30();"><a href="#App30">In a month</a></li>
      <li onclick="GetAppointmentOther();"><a href="#othr">Other</a></li>
    </ul>

    <div class="tabContent" id="AppToday" onactivate="GetAppointment();" >
      
      
    </div>

    <div class="tabContent" id="App7">
      
      
    </div>

    <div class="tabContent" id="App30">
      
    </div>
    <div class="tabContent" id="othr">
      <table>
      	<tr>
      		<td>
      			<input type="radio" name="SearchBy" id="rbId" onchange="SearchButtonClicked();" value="SearchByID" checked="true">Search By Student ID</input>
				
      			
      		</td>
      		<td>
      			<input type="radio" name="SearchBy" id="rbName" onchange="SearchButtonClicked();" value="SearchByName">Search By Student Name</input>
      		</td>
      		
      	</tr>
      	<tr>
      		<td>
      			Student ID:
      		</td>
      		<td>
      			<input type='text' id="txtID" name='name5' />
      		</td>
      	</tr>
      	<tr>
      		<td>
      			Student Name:
      		</td>
      		<td>
      			<input type='text' id="txtName" name='name5' disabled="true" />
      		</td>
      	</tr>
      	<tr>
      		<td>
      			<input type="checkbox" id="chkDateSearch" name="Dates" onclick="SearchByDates();" value="SearchByDate">Seach By Dates</input>
      			
      		</td>
      		
      	</tr>
      	<tr>
      		<td>
      			From Date:
      		</td>
      		<td>
      			<input type='date' name='name3' id='datepicFrom' disabled="true"  />
      			
      		</td>
      	</tr>
      	<tr>
      		<td>
      			To Date:
      		</td>
      		<td>
      			<input type='date' name='name3' id='datepicTo' disabled="true" />
      		</td>
      	</tr>
      	<tr>
      		<td>
      			<input type='submit' name='Submit' value='Search' onclick="OnSubmit();" />
      		</td>
      	</tr>
      	
      	
      </table>
      
      <div id="othrResult">
      	
      	
      </div>
      
      
    </div>
      


  </body>
</html>
