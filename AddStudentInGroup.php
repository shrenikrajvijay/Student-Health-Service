<?php
    //phpinfo();
?>



<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Admin Information</title>
        <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
        <script type="text/javascript">
        var groupid='';
        var global='';
        $(function(){
              //alert("Hi");
                groupid=myfunction();
                //alert(id);
                
            });
        

        function save(){
        $.ajax({type:"post",url:"AddStudentGroup_php.php",data:{Savegroup:1,groupid:groupid,global:global}}).done(
        function(msg){
           alert("Students have been added in the group.");
           window.location.replace("studentsingroup.php");


        });
          

//  if(el.checked){
//  global+=el.value;
//  global+=",";
  
//  }
//  else{
//    var str = el.value+",";
//    //var res = str.replace("Microsoft", "W3Schools");
  
//    global=global.replace(str,"");
//    }


}
        function savethere(id,el){


          // alert(id);
           if(el.checked){
            global+=id;
            global+=",";
            alert(global);
  
             }
            else{
            var str = id+",";
          //var res = str.replace("Microsoft", "W3Schools");
  
          global=global.replace(str,"");
          alert(global);
        }
        }


        function OnSubmit()
      {
      

        if(document.getElementById("rbId").checked==true && document.getElementById("rbName").checked==true && document.getElementById("chkDateSearch").checked ==true)
        {

            var sid=document.getElementById("txtID").value;
            var sName=document.getElementById("txtName").value;
            var fromDate=document.getElementById("datepicFrom").value;
            var toDate=document.getElementById("datepicTo").value;
             $.ajax({type:"post",url:"AddStudentGroup_php.php",data:{GetAppointmentByIDNameDate:1,sid:sid,sName:sName,frmDate:fromDate,toDate:toDate,groupid:groupid}}).done(
                  function(msg){

                  //alert(msg);
                  document.getElementById("othrResult").innerHTML=msg;

        
              });

        }
        else if(document.getElementById("rbId").checked==true && document.getElementById("chkDateSearch").checked ==true)
        {
          var sid=document.getElementById("txtID").value;
            
            var fromDate=document.getElementById("datepicFrom").value;
            var toDate=document.getElementById("datepicTo").value;
            $.ajax({type:"post",url:"AddStudentGroup_php.php",data:{GetAppointmentByIDDate:1,sid:sid,frmDate:fromDate,toDate:toDate,groupid:groupid}}).done(
                  function(msg){

                  //alert(msg);
                  document.getElementById("othrResult").innerHTML=msg;

        
              });

        }
        else if(document.getElementById("rbName").checked==true && document.getElementById("chkDateSearch").checked ==true)
        {

            var sName=document.getElementById("txtName").value;
            var fromDate=document.getElementById("datepicFrom").value;
            var toDate=document.getElementById("datepicTo").value;
            $.ajax({type:"post",url:"AddStudentGroup_php.php",data:{GetAppointmentByNameDate:1,sName:sName,frmDate:fromDate,toDate:toDate,groupid:groupid}}).done(
                  function(msg){

                  //alert(msg);
                  document.getElementById("othrResult").innerHTML=msg;

        
              });
        }
        else if(document.getElementById("rbId").checked==true && document.getElementById("rbName").checked==true)
        {
          var sid=document.getElementById("txtID").value;
            var sName=document.getElementById("txtName").value;

            $.ajax({type:"post",url:"AddStudentGroup_php.php",data:{GetAppointmentByIDName:1,sid:sid,sName:sName,groupid:groupid}}).done(
                  function(msg){

                  //alert(msg);
                  document.getElementById("othrResult").innerHTML=msg;

        
              });
            

        }
        else if(document.getElementById("rbId").checked==true)
        {
            var sid=document.getElementById("txtID").value;
            //alert(sid);

            $.ajax({type:"post",url:"AddStudentGroup_php.php",data:{GetAppointmentByID:1,sid:sid,groupid:groupid}}).done(
                  function(msg){

                  //alert(msg);
                  document.getElementById("othrResult").innerHTML=msg;

        
              });
        }
        else if(document.getElementById("rbName").checked==true)
        {

          
            var sName=document.getElementById("txtName").value;

            $.ajax({type:"post",url:"AddStudentGroup_php.php",data:{GetAppointmentByName:1,sName:sName,groupid:groupid}}).done(
                  function(msg){

                  //alert(msg);
                  document.getElementById("othrResult").innerHTML=msg;

        
              });
        }
        else
        {

            
            var fromDate=document.getElementById("datepicFrom").value;
            var toDate=document.getElementById("datepicTo").value;
            $.ajax({type:"post",url:"AddStudentGroup_php.php",data:{GetAppointmentByDate:1,frmDate:fromDate,toDate:toDate,groupid:groupid}}).done(
                  function(msg){

                  //alert(msg);
                  document.getElementById("othrResult").innerHTML=msg;

        
              });
        }
          
    }
    function SearchIDButtonClicked()
    {
      
      if(document.getElementById("rbId").checked ==true)
      {
        
        document.getElementById("txtID").disabled=false; 
      }
      else 
      {
        
        document.getElementById("txtID").disabled=true;
      }
    }
    function SearchNameButtonClicked()
    {
      
      if(document.getElementById("rbName").checked ==true)
      {
        document.getElementById("txtName").disabled=false;
        
      }
      else 
      {
        document.getElementById("txtName").disabled=true;
        
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



        </script>
        <script type="text/javascript">
          function getQueryStrings() 
            {
          //Holds key:value pairs
          var queryStringColl = null;
            
          //Get querystring from url
          var requestUrl = window.location.search.toString();

          if (requestUrl != '') {
            //window.location.search returns the part of the URL 
            //that follows the ? symbol, including the ? symbol
            requestUrl = requestUrl.substring(1);

            queryStringColl = new Array();

            //Get key:value pairs from querystring
            var kvPairs = requestUrl.split('&');

            for (var i = 0; i < kvPairs.length; i++) {
              var kvPair = kvPairs[i].split('=');
              queryStringColl[kvPair[0]] = kvPair[1];
            }
        }

    return queryStringColl;
}
function myfunction() {
    var queryStringColl = getQueryStrings();

    if (queryStringColl == null) {
        //alert('no querystring found');
        return;
    }

    return queryStringColl['id'];
}

        </script>



    </head>
    <body>
      
    	<table >

        <tr>
          <td>
            Search by DOB/Name
          </td>
        </tr>
        <tr >
          <td colspan="2" >
            <input type="checkbox" name="SearchBy" id="rbId" onchange="SearchIDButtonClicked();" value="SearchByID" >Search By Student ID</input>
        
            
          </td>
          
          
        </tr>
        <tr>
          <td>
            Student ID:
          </td>
          <td>
            <input type='text' id="txtID" name='name5' disabled="true"/>
          </td>
        </tr>
        <tr>
          <td>
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <input type="checkbox" name="SearchBy" id="rbName" onchange="SearchNameButtonClicked();" value="SearchByName">Search By Student Name</input>
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
      			<input type='date' name='name3' id='datepicTo' disabled="true"/>
      		</td>
      	</tr>
        <tr>
          <td>
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
    	
    </body>
</html>