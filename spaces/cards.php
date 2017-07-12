<!DOCTYPE html>

<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<title>Maker Spaces Badge</title>
    <link rel="icon" href="imgs/favicon/favicon.png" type="image/gif">
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, target-densitydpi=160dpi, initial-scale=1">
	<script src="imgs/2d3dcad/startttaskbackgrounds/March.png"></script>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">
    <link href="css/hover.css" rel="stylesheet" type="text/css">
     <link href="css/style.css" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Asap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
	<style>
	

	div {
		width: 100%;
	}
	img[usemap] {
		border: none;
		height: auto;
		max-width: 100%;
		width: auto;
	}
	

	area:focus {outline:none; background-color:red;
	
	}
	
  #dropone {
  width: 130px;
  height: 61px;
  border: 1px solid #B8B8B8;
  border-radius: 100px;
  color: black;
  margin: 0 auto;
  border-style: dashed;
  background: rgba(225,225,225,0.46);
}

.drago {
  width: 130px;
  height: 61px;
  padding: 20px;
  text-align: center;
  display: block;
  margin: 0 auto;
  margin-bottom: 10px;
  background: white;
  color: black;
  font-size: 15px;
  text-transform: uppercase;
  border-radius: 100px;
  border: none;
}

.background {
	
	background-image: url(imgs/2d3dcad/startttaskbackgrounds/December.svg); 
	background-repeat: repeat; 
	background-size: cover;
	background-position: center;
	background-attachment: fixed !important;
	
	
	
}

@media only screen and (min-width: 481px) and (max-width : 992px) {
	
	.background {
	
	background-image: url(imgs/2d3dcad/startttaskbackgrounds/December.svg); 
	background-repeat: repeat; 
	background-size: cover;
	background-position: center;
	background-attachment: scroll !important;
	
	
	
}
}

@media only screen and (max-width : 480px) {

.background {
	
	background-image: url(imgs/2d3dcad/startttaskbackgrounds/December.svg); 
	background-repeat: repeat; 
	background-size: contain;
	background-position: center;
	background-attachment: scroll !important;
	
	
	
}

}
	</style>
</head>
<body style="background: rgba(100, 222, 255, 0.03)">
<div class="background">
  
<div class="container-fluid">
  
  <div class="row">

  <div class="col-xs-6 col-md-6" style="padding: 0">
  <a href="https://idea.org.uk/">
  <img src="imgs/header/garter.png" width="70" height="60" alt="" style="float:left; display: block"/> 
   </a></div>
  <div class="col-xs-6 col-md-6 text-right">
  
    <img src="imgs/header/iDEA-turq.png" width="74" height="85" alt="Logo"/> </div>
  
  </div>
  </div>
  
<div id="summary" class="container-fluid text-center animated fadeIn"><img src="imgs/task0/dec.png" width="50px" style="margin:10px; margin-top: -20px"/><br>
    <h4 class="text-center blackbbgr hvr-wobble-bottom" style="margin-top: 25px !important; margin-bottom: 27px !important; padding-left: 20px; padding-right: 20px; max-width: 571px">It is the week before Christmas and you want to design & make special Christmas cards for your friends, family and neighbours! <br><br> 
  Which software would be the best to use for designing your card? <br> <br> Drag & drop your answer below.</h4> 
    
     </div>
    
     <br>
    
     <div id="cards" class="container counter-fluid animated bounceIn text-center">
     <div class="row">
     <div class="col-md-4">
     <img src="imgs/cards/card1.jpg" class="text-center img-thumbnail img-rounded" style="margin:5px; margin-bottom: 40px" width="300px" alt="2D Design">
     
     </div>
     <div class="col-md-4">
     <img src="imgs/cards/card2.jpg" class="text-center img-thumbnail img-rounded" style="margin:5px; margin-right:-2px; margin-top: -10px; margin-bottom: 40px" width="245px" alt="3D Design">
     
     </div>
     <div class="col-md-4">
     <img src="imgs/cards/card3.jpg" class="text-center img-thumbnail img-rounded" style="margin:5px" width="280px" alt="2D Design">
     
     </div>
     </div>
     
     </div>
     
     <!-- Drag and Drop -->
     
    
     
     
     <div class="container center-block"> 
     <div id="dropCountainer" style="margin-top:20px;">
     <div class="row"> 
     <div class="col-sm-4 col-sm-offset-4">
     <div id="dropone" class="ui-droppable">
     <div id="dropwrong" class="text-center ui-droppable txt" style="padding-top:16px; padding-bottom:10px">
     DROP HERE</div>
     
     </div></div></div></div>
     
     </div>
     
      <div id="dragCountainer" style="width: 75%; display: block; margin: 0 auto; max-height: 200px">
     <div class="row">
     <div class="col-sm-6">
     <p class="drago ui-draggable txt" id="dragone" style="position:relative; margin-top:10px"> 2D DESIGN   
     </p>
     </div>
     
     <div class="col-sm-6">
     <p class="drago ui-draggable txt" id="dragtwo" style="position:relative; margin-top:10px"> 3D DESIGN </p>
     
     </div>
     </div>
     </div>
     <br>
     <div class="container">
   <div id="alertsuccess" class="alert alert-success alert-dismissable animated fadeIn fade in text-center" role="alert" style="display: none">
    <strong>Correct!</strong> Cards are very simple to design and as they're so thin there is no real benefit in producing them in 3D. Cards can be designed using only one plane. 
  </div>
  <div id="alertdanger" class="alert alert-danger alert-dismissable animated fadeIn fade in text-center" role="alert" style="display: none">
    <p> <strong>Incorrect!</strong> There is no need to produce cards in 3D, as they're thin and simple to design you only need one plane to produce them. <br> <br> <a href="cards.php" <button class="close" style="float: none; font-size: medium">Reset </button> </a> </p>
  </div>
  </div>

<div id="next" class="container-fluid text-center animated fadeIn" hidden>
 
    <div class="row">
    <div class="col-sm-8 col-sm-offset-2"><a href="case.php">
    <button type="button" style="margin-top:0px" class="btn btn-info btn-sm hvr-shrink hvr">NEXT</button> </a>
     </div>
     </div>
     </div>
<div class="container-fluid text-center animated fadeInDown">

    <p class="text-info">&nbsp;</p>
    <p class="text-info">&nbsp;</p>
    <p class="text-info">&nbsp;</p>
    <p class="text-info" style="margin-bottom: 60px">2D & 3D CAD</p>
    
    
    
    
  </div>
  
   <div class="progress-bar progress-bar-info progress-bar-striped active hvr-grow" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: 15%"> Progress&nbsp;15% 
  </div>
  
  </div>
  
 
<div class="container-fluid" style="background: rgba(240,240,240,0.33)">
  <div class="row">
    <div class="text-center col-md-12" style="background: rgba(41, 40, 40, 0.9); margin-top: 23px">
     <br><br>
      <h4 class="ft" style="color: rgba(173,173,173,1.00)">The Duke Of York Inspiring Digital Enterprise Award </h4>
      <p class="wtx">Copyright &copy; 2017 &middot; All Rights Reserved &middot; <a href="https://idea.org.uk/">iDEA</a></p>
    </div>
  </div> 
  </div>
  
  
  

<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/jquery.rwdImageMaps.min.js"></script>
<script src="js/mobile.js"></script>

<script>

$(document).ready(function(){

$(function() {
  $('a[href*="#"]:not([href="https://idea.org.uk/"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 800);
        return false;
      }
    }
  });
});

$('#dragone').draggable({
  containment: 'body',
  cursor: 'move',
  revert: 'invalid'
});

$('#dragtwo').draggable({
  containment: 'body',
  cursor: 'move',
  revert: 'invalid'
});

$('#dropone').droppable({
  accept: '#dragone',
  drop: dropEventHandler1,
  tolerance: 'pointer'
});

$('#dropwrong').droppable({
  accept: '#dragtwo',
  drop: dropEventHandler2,
  tolerance: 'pointer'
});


 $("#close1").click(function(){
		 
	$(".alert-success").css("display","none");
	
 });


function dropEventHandler1(event, ui) {
 $(ui.draggable).css({ background: "lightgreen", color: "white"});
 $(ui.draggable).addClass('animated tada');
 $(ui.draggable).detach().css({top: -57,left: -1}).appendTo(this);
  $("#alertsuccess").css("display","block");
 $('#next').show();
$('#dropone, #dropwrong').droppable('disable');		 
	 
		 
	 
	
}

function dropEventHandler2(event, ui) {
 $(ui.draggable).css({ background: "red", color: "white"});
 $(ui.draggable).addClass('animated tada');
 $(ui.draggable).detach().css({top: -47,left: -1}).appendTo(this);
 $("#alertdanger").css("display","block");
 $('#dropwrong, #dropone').droppable('disable');
}

});

	  
</script>


</body>
</html>