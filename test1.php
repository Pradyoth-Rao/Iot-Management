<html>
<title> Display data </title>
<style type = "text/css">
	body{
  margin: 0px;
  padding: 0px;
  background: #e74c3c;
  font-family: 'Lato', sans-serif;
}

h1{
  margin: 2em 0px;
  padding: 0px;
  color: #fff;
  text-align: center;
  font-weight: 100;
  font-size: 50px;
}

nav{
  width: 750px;
  margin: 1em auto;
}

ul{
  margin: 0px;
  padding: 0px;
  list-style: none;
}

ul.dropdown{ 
  position: relative; 
  width: 100%; 
}

ul.dropdown li{ 
  font-weight: bold; 
  float: left; 
  width: 180px; 
  position: relative;
  background: #ecf0f1;
}

ul.dropdown a:hover{ 
  color: #000; 
}

ul.dropdown li a { 
  display: block; 
  padding: 20px 8px;
  color: #34495e; 
  position: relative; 
  z-index: 2000; 
  text-align: center;
  text-decoration: none;
  font-weight: 300;
}

ul.dropdown li a:hover,
ul.dropdown li a.hover{ 
  background: #3498db;
  position: relative;
  color: #fff;
}


ul.dropdown ul{ 
 display: none;
 position: absolute; 
  top: 0; 
  left: 0; 
  width: 180px; 
  z-index: 1000;
}

ul.dropdown ul li { 
  font-weight: normal; 
  background: #f6f6f6; 
  color: #000; 
  border-bottom: 1px solid #ccc; 
}
ul.dropdown ul li a{ 
  display: block; 
  color: #34495e !important;
  background: #eee !important;
} 

ul.dropdown ul li a:hover{
  display: block; 
  background: #3498db !important;
  color: #fff !important;
} 

.drop > a{
  position: relative;
}

.drop > a:after{
  content:"";
  position: absolute;
  right: 10px;
  top: 40%;
  border-left: 5px solid transparent;
  border-top: 5px solid #333;
  border-right: 5px solid transparent;
  z-index: 999;
}

.drop > a:hover:after{
  content:"";
   border-left: 5px solid transparent;
  border-top: 5px solid #fff;
  border-right: 5px solid transparent;
}
</style>
<script type ="text/javascript">
var maxHeight = 400;

$(function(){

    $(".dropdown > li").hover(function() {
    
         var $container = $(this),
             $list = $container.find("ul"),
             $anchor = $container.find("a"),
             height = $list.height() * 1.1,       // make sure there is enough room at the bottom
             multiplier = height / maxHeight;     // needs to move faster if list is taller
        
        // need to save height here so it can revert on mouseout            
        $container.data("origHeight", $container.height());
        
        // so it can retain it's rollover color all the while the dropdown is open
        $anchor.addClass("hover");
        
        // make sure dropdown appears directly below parent list item    
        $list
            .show()
            .css({
                paddingTop: $container.data("origHeight")
            });
        
        // don't do any animation if list shorter than max
        if (multiplier > 1) {
            $container
                .css({
                    height: maxHeight,
                    overflow: "hidden"
                })
                .mousemove(function(e) {
                    var offset = $container.offset();
                    var relativeY = ((e.pageY - offset.top) * multiplier) - ($container.data("origHeight") * multiplier);
                    if (relativeY > $container.data("origHeight")) {
                        $list.css("top", -relativeY + $container.data("origHeight"));
                    };
                });
        }
        
    }, function() {
    
        var $el = $(this);
        
        // put things back to normal
        $el
            .height($(this).data("origHeight"))
            .find("ul")
            .css({ top: 0 })
            .hide()
            .end()
            .find("a")
            .removeClass("hover");
    
    });  
    
});
</script>
</head>
<body>
<?php

if (isset($_POST['submit'])){

include('con.php');
$sql="SELECT * FROM Login WHERE id='$_POST[id]' AND password='$_POST[password]'";
$res = mysqli_query($dbcon, $sql) or die('error');
if(mysqli_num_rows($res)==1)
{
	if($_POST["Select"]=="Student")
	{
		echo"<h1>WELCOME STUDENTS</h1>";
		echo"<nav>";
		echo"<ul class=dropdown>";
        	echo"<li class=drop><a href=test1.php>Choose an option</a>";
        	echo"<ul class=sub_menu>";
		echo"<li><a href=disp.php>Display Devices</a></li>";
		echo"<li><a href=display_student.php>Display Students</a></li>";
		echo"<li><a href=display_ta.php>Display TA</a></li>";
		echo "<li class=n3><a href='device_control.php'> Switch ON Devices</a></li>";
		echo "<li class=n3><a href='device_off.php'> Switch OFF Devices</a></li></ul>";	
		echo"</ul></li></ul>";
		echo"</nav>"; 
	}
else if($_POST["Select"]=="Faculty")
	{
	echo "<h2>WELCOME  FACULTY</h2>";
	echo "<ul class=navigation>";
  	echo "<a class=main >SELECT AN OPTION</a>";
  	echo "<li class=n1><a href='disp.php'> Display Devices</a></li>";
  	echo "<li class=n2><a href='disp_faculty.php'> Display Faculty</a></li>";
	echo "<li class=n3><a href='display_student.php'> Display Student</a></li>";
	echo "<li class=n3><a href='display_ta.php'> Display TA</a></li>";
	echo "<li class=n3><a href='insert_ta.php'> Insert TA</a></li>";
	echo "<li class=n3><a href='device_control.php'> Switch ON Devices</a></li>";
	echo "<li class=n3><a href='device_off.php'> Switch OFF Devices</a></li></ul>";		
	}
	else if($_POST["Select"]=="Admin")
	{
	echo "<h2>WELCOME  ADMIN</h2>";
	echo "<ul class=navigation>";
  	echo "<a class=main >SELECT AN OPTION</a>";
  	echo "<li class=n1><a href='disp.php'> Display Devices</a></li>";
  	echo "<li class=n2><a href='disp_faculty.php'> Display Faculty</a></li>";
	echo "<li class=n3><a href='display_student.php'> Display Student</a></li>";
	echo "<li class=n3><a href='display_ta.php'> Display TA</a></li>";
	echo "<li class=n3><a href='insertform.php'> Insert Device</a></li>";
	echo "<li class=n3><a href='insert_faculty.php'> Insert Faculty</a></li>";
	echo "<li class=n3><a href='insert_maintain.php'> Insert Maintain Staff</a></li>";
	echo "<li class=n3><a href='device_control.php'> Switch ON Devices</a></li>";
	echo "<li class=n3><a href='device_off.php'> Switch OFF Devices</a></li></ul>";		
	}	
	else
	{
	echo "<h2>WELCOME  STAFF</h2>";
	echo "<ul class=navigation>";
  	echo "<a class=main >SELECT AN OPTION</a>";
	echo "<li class=n1><a href='insert_maintain.php'> Insert Maint. Staff</a></li>";
  	echo "<li class=n2><a href='display_maintain_staff.php'> Display Maint. Staff</a></li></ul>";
	}
}
else
{
	  echo "<span style='color:#AFA;text-align:center;'>Request has been sent. Please wait for my reply!</span>";
}
mysqli_close($dbcon);
}
?>
</body>
</html>
	



	
