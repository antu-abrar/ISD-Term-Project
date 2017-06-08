<!DOCTYPE html>
<html>
<head>
<title>Booking System</title>
<style>
* {box-sizing:border-box;}
ul {list-style-type: none;}
body {font-family: Verdana,sans-serif;}

.month {
    padding: 70px 25px;
    width: 100%;
    background: #1abc9c;
}

.month ul {
    margin: 0;
    padding: 0;
}

.month ul li {
    color: white;
    font-size: 20px;
    text-transform: uppercase;
    letter-spacing: 3px;
}

.month .prev {
    float: left;
    padding-top: 10px;
}

.month .next {
    float: right;
    padding-top: 10px;
}

.weekdays {
    margin: 0;
    padding: 10px 0;
    background-color: #ddd;
}

.weekdays li {
    display: inline-block;
    width: 13.6%;
    color: #666;
    text-align: center;
}

.days {
    padding: 10px 0;
    background: #eee;
    margin: 0;
}

.days li {
    list-style-type: none;
    display: inline-block;
    width: 13.6%;
    text-align: center;
    margin-bottom: 5px;
    font-size:12px;
    color: #777;
}

.days li .active {
    padding: 5px;
    background: #1abc9c;
    color: white !important;
}

.days li .booked {
    padding: 5px;
    background: #DC143C;
    color: white !important;
}

.days li .bookedP {
    padding: 5px;
    background: #FFA500;
    color: white !important;
}

.days li .bookedS {
    padding: 5px;
    padding-left: 8px;
    padding-right: 8px;
    background: #DC143C;
    color: white !important;
}

/* Add media queries for smaller screens */
@media screen and (max-width:720px) {
    .weekdays li, .days li {width: 13.1%;}
}

@media screen and (max-width: 420px) {
    .weekdays li, .days li {width: 12.5%;}
    .days li .active {padding: 2px;}
}

@media screen and (max-width: 290px) {
    .weekdays li, .days li {width: 12.2%;}
}
</style>
</head>
<body>

<h1>CSS Calendar</h1>

<div class="month">      
  <ul>
    <li class="prev">&#10094;</li>
    <li class="next">&#10095;</li>
    <li style="text-align:center">
      August<br>
      <span style="font-size:18px">2016</span>
    </li>
  </ul>
</div>

<ul class="weekdays">
  <li>Mo</li>
  <li>Tu</li>
  <li>We</li>
  <li>Th</li>
  <li>Fr</li>
  <li>Sa</li>
  <li>Su</li>
</ul>


<ul class="days"> 
<?php 
  $nextPage = "nextpage.html";
  for($i=0 ; $i<10;$i++){
     echo '<li><a href="'.$nextPage.'" title="Booked" style="text-decoration: none;"><span class="bookedS">'.$i.'</span></a></li>' ;
  }
  for($i=10 ; $i<=31;$i++){
    if($i== 13 or $i == 15 or $i == 19 or $i == 20 ){
       echo '<li><a href="'.$nextPage.'" title="Avaiable in evening" style="text-decoration: none;"><span class="bookedP">'.$i.'</span></a></li>' ;
    }elseif($i== 16 or $i == 21 or $i == 25){
       echo '<li><a href="'.$nextPage.'" title="Avaiable in day" style="text-decoration: none;"><span class="bookedP">'.$i.'</span></a></li>' ;
    }else{
       echo '<li><a href="'.$nextPage.'" title="Avaiable" style="text-decoration: none;"><span class="active">'.$i.'</span></a></li>';
    }
  }
?>
</ul>

</body>
</html>
