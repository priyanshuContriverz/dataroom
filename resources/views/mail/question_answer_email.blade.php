<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>prodata mail</title>
</head>
<body style="background:#f5f5f5; font-family:Verdana, Geneva, sans-serif;">
<div style="margin:0 auto; width:600px; max-width:100%;">
<div style="float:left; width:100%; border:1px solid #dfdfdf; background:#fff; height:auto; box-sizing:border-box; -moz-box-sizing:border-box;">

<table style="border:none;" width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td>
    <span style="float:left; width:100%;">
    <h2 style="float:left; margin:10px 0 10px 10px; padding:0px; width:100%; font-size:20px; 
    font-weight:normal; color:#b8a883;">{{$project}}</h2>
    <p style="float:left; width:100%; margin:10px 0 10px 10px; color:green; font-size:18px;">
        New Question "{{$subject}}"
    </p>

    <hr style="float:left; width:100%; height:5px;
     background:#b8a883; border:none; outline:none;">
    </span>
    </td>
    </tr>
  <tr>
    <td>
    <div style="float:left; width:100%; padding:0px 20px 20px 20px; box-sizing:border-box; -moz-box-sizing:border-box; 
    -webkit-box-sizing:border-box; -ms-box-sizing:border-box; ">
    <h4 style="font-size:15px; padding:0px; color:#000; font-weight:bold;"></h4>

   <p style="font-size:15px; padding:0px; line-height:24px; color:#000;">
    Dear ,{{$email}}</p><br>
   <p>Your answer to the following Q&A question is requested</p>
   <p>Posted By: <span>{{$sender_email}}</span></p>
   <p>Subject: {{$subject}}</p>
   <p>Related to: {{$document_name}}</p>

  <a style="float:left; padding:10px 15px; margin:20px 0 0 0; background:#b56b7a; border:0px; color:#fff; text-decoration:none;" href="{{$QuestionRedirecturl}}">Reply Question</a>

</p>

</div>

</td>
    </tr>
    
 <tr>
 <td>
 <div style="float:left; width:100%; border-top:1px solid #dfdfdf;">
 
 <span style="float:left; margin:10px; 0 10px 10px;">
<img src="{{ url('dist/img/prodats_logo.png') }}" alt="img" border="0" />
 </span>
 
 </div>
 
 </td>
 </tr>   
    
</table>



</div>
</div>

</body>
</html>