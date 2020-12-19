<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8" >
  <link rel=stylesheet type=text/css href=../bootstrap/css/bootstrap.min.css>
  <link rel=stylesheet type=text/css href=../bootstrap/css/bootstrap.css>
 <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="./css.css">
 <script src="../bootstrap/js/bootstrap.min.js">

</script>

<!-- jQuery library -->
 <script src="../jquery/jquery.js">
</script>
<style>

.image{
padding-left:15PX;
background-color:#f5f5f5
}
div.next{
background-color:#f5f5f5;
}
    .sh{
        height:auto;
    }
   
</style>
<body>
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class=" modal-content ">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h4>Preview:</h4>
    </div>
    <div class=" modal-body " >
    <video id="frame" style="margin:auto" autoplay=1 controls=1 src='' height="40%" width="70%"class=img-responsive allowfullscrees=1></video>
    </div>
    </div>

</div>

<div class="image" >
<?PHP

echo "<h1 >Movies</h1>";
$dir=".";
if(isset($_GET['n']))
{
   $dir="";
   rtrim($_GET['n'],"/");
   $dir=$_GET['n'];
   $j=glob("$dir/*.*");
   echo $j[0];
}
$v= glob("$dir/*.*");
$co=count($v);
for($i=0;$i < $co;$i++)
{
 $k=$v[$i];
 $link=$k;
 $link=str_replace(" ","%20",$link);

 $evt=pathinfo("$k",PATHINFO_EXTENSION);
  $name=basename("$k","$evt");
if($evt=="php" || $evt=="js" ||$evt=="css" ||$evt=="bat")
{

}
else{ if(is_dir($k)){ 
        rtrim($k,'/');
   	echo "<p><a href=index.php?n=".$link.">$name</a> </p>";
    }
   else{
    //echo "<p ><a href='./video.php?video=$k&file=$evt'>$name</a></p>";
	echo "<p ><a onclick=openpreview('$link') >$name</a></p>";
     }

}
// echo "<video  id='j' src='' class='img-thumnail'  autoplay=1 controls='1'  allowfullscreen='true'>  <source src='$k' type=movie/mp4> turn on plugin</video>";
 

}


?>
</div>
<script src="javas.js">



</script>

</body>
</html>