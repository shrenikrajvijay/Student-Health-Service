 
<?php
include('db_connect.php');
?>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Admin Information</title>
        <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript">
            $(function(){
                getInfo();
            })
            function getInfo()
                {
                    $.ajax({type: "POST",url: "adminForm.php",data: { AtPageLoad:'1'}}).done(
                    function( msg ) 
                    {
                                document.getElementById("adminForm").innerHTML = msg ;
                    });
                }
        </script>
        <script type="text/javascript">

        function updateAdminInfo(){
           
           var AdminName= document.getElementById('aname').value;
          
            var AdminPass=document.getElementById('apass').value;
            // alert(AdminPass);
            var AdminAdd1= document.getElementById('aadd1').value;
            // alert(AdminAdd1);
            var AdminAdd2=document.getElementById('aadd2').value;
            // alert(AdminAdd2);
            var AdminCity=document.getElementById('acity').value;
            // alert(AdminCity);
            var AdminState=document.getElementById('astate').value;
            // alert(AdminState);
            var AdminZip=document.getElementById('azip').value;
            // alert(AdminZip);
           var AdminEmail= document.getElementById('aemail').value;
           // alert(AdminEmail);
            var AdminPhone=document.getElementById('aphone').value;
            // alert(AdminPhone);
            var AdminNote=document.getElementById('anote').value;
            // alert(AdminNote);
            var AdminDOB=document.getElementById('adob').value;
            // alert(AdminDOB);

             $.ajax({type: "POST",url: "adminForm.php",data: { updateAdminInfo:1,adname:AdminName,adpass:AdminPass,adadd1:AdminAdd1,adadd2:AdminAdd2, adcity:AdminCity, adstate:AdminState,adzip:AdminZip, ademail:AdminEmail, adphone:AdminPhone,adnote:AdminNote,  addob:AdminDOB}}).done(
                    function( msg ) 
                    {
                        alert(msg);
    //                                document.getElementById("adminForm").innerHTML = msg ;
                    });
        }
        </script>
       
    </head>
    <body onload="getInfo();">

        <div   id="adminForm">
            
        </div>

        
    </body>
</html>
