<html>

<head>
<title>add</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
* {
    box-sizing: border-box;
}

body {
    font-family: Arial, Helvetica, sans-serif;
}

.top-right {
    position: absolute;
	font-size:35px;
    top: 150px;
    right: 16px;
	color:white;
}
.top-rightt {
    position: absolute;
	font-size:27px;
    top: 150px;
    right: 16px;
	color:#ffdede;
}

table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
	
}

@font-face {
    font-family: "My Custom Font";
    src: url(JannaLT-Regular_HelpMacNet_.ttf) format("truetype");
}
body { 
    font-family: "My Custom Font";
}

 </style>

<script>

  <!-- *****************************************if and else counter + **************************************************** -->

function clickCounter() {
    if(typeof(Storage) !== "undefined") {
        if (localStorage.clickcount) {
            localStorage.clickcount = Number(localStorage.clickcount)+1;
        } else {
            localStorage.clickcount = 1;
        }
        document.getElementById("bed").innerHTML = "       " + localStorage.clickcount ;
    } else {
        document.getElementById("bed").innerHTML = "Sorry, your browser does not support web storage...";
    }
}
  <!-- *****************************************if and else counter - **************************************************** -->
function clickCounter1() {
    if(typeof(Storage) !== "undefined") {
        if (localStorage.clickcount && document.getElementById("bed").innerHTML != 0 ) {
            localStorage.clickcount = Number(localStorage.clickcount)-1;
        } else {
            localStorage.clickcount = 0;
        }
        document.getElementById("bed").innerHTML = "       " + localStorage.clickcount ;
    } else {
        document.getElementById("bed").innerHTML = "Sorry, your browser does not support web storage...";
    }
}

<!-- ************************************************************************************************* -->
function clickCounter2() {
    if(typeof(Storage) !== "undefined") {
        if (localStorage.clickcount) {
            localStorage.clickcount = Number(localStorage.clickcount)+1;
        } else {
            localStorage.clickcount = 1;
        }
        document.getElementById("result").innerHTML = "       " + localStorage.clickcount ;
    } else {
        document.getElementById("result").innerHTML = "Sorry, your browser does not support web storage...";
    }
}
  <!-- *****************************************if and else counter - **************************************************** -->
function clickCounter3() {
    if(typeof(Storage) !== "undefined") {
        if (localStorage.clickcount && document.getElementById("result").innerHTML != 0 ) {
            localStorage.clickcount = Number(localStorage.clickcount)-1;
        } else {
            localStorage.clickcount = 0;
        }
        document.getElementById("result").innerHTML = "       " + localStorage.clickcount ;
    } else {
        document.getElementById("result").innerHTML = "Sorry, your browser does not support web storage...";
    }
}
</script>

</head>


<body>
  <!--to insert the photo-->
<!--********************************************-->

<div align="center">
<img src="photos\weblogo.png" alt="my picture " width="60px" height="60px">

<img src="photos\homeicon.png" alt="my picture " align="left" width="30px" height="35px">
</div><!--********************************************-->
<div align="center" style="margin-top: 3%">
<img src="photos\v.png" alt="my picture " align="left" width="100%" height="50%">
  <div class="top-right" style="margin-top: -1%; margin-right: 5%"><h1>أهــلا بــك مـجـددا</h1></div>
  <div class="top-rightt" style="margin-top: 9%; margin-right: 6%">المركز السعودي الألماني</div>

</div>
<div align="right" style="margin-top: 25px">
</div>
<form name="myForm"  method="post" action="e-time.php">
<div align="right" style="margin-top: 25px;margin-right: 2%; font-size:25px;">
<span>عدد الأسرة المتوفرة</span>
<button onclick="clickCounter()" type="button" style="padding:6px">+</button>
<span id="bed" style="color: #cc3333">0</span>
<button onclick="clickCounter1()" type="button" style="padding:6px">-</button>
<span> سرير </span>
</div>
<div align="right" style="margin-top: 25px;margin-right: 2%; font-size:25px;">
<span>وقت الانتظار المتوقع</span>
<button onclick="clickCounter2()" type="button" style="padding:6px">+</button>
<span id="result" style="color: #cc3333">0</span>
<button onclick="clickCounter3()" type="button" style="padding:6px">-</button>
<span> دقيقة  </span>
</div>
</form>
<!-- ***********************************************-->
<div align="center">
<h1 style="color: #cc3333">معلومات المرضى</h1>
<div align="center">
<table style="width:100%">
  <tr align="center">
    
	<th style="color: #66cccc">حالة المريض</th>
	<th style="color: #66cccc">رقم الهوية</th>
	<th style="color: #66cccc">اسم المريض</th>
	<th style="color: #66cccc">الرقم</th>
  </tr>
  <tr align="center">
    <td> كسور </td>
    <td> 1234567</td>
    <td> سعاد صالح</td>
	<td> 1 </td>
  </tr>
  <tr align="center">
    <td> حروق درجة أولى </td>
    <td> 1200000</td>
    <td> عادل عمر</td>
	<td> 2 </td>
  </tr>
  <tr align="center">
    <td> لم يحدد </td>
    <td> 1234699</td>
    <td>طارق عبدالله </td>
	<td> 3 </td>
  </tr>
</table>
</div>
</div>
</body>


</html>