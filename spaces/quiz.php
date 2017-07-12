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
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Asap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
	<style>
	
	}
	div {
		width: 100%;
	}
	img[usemap] {
		border: none;
		height: auto;
		max-width: 100%;
		width: auto;
	}
	
	.hint {
	
	max-width: 600px;	
	margin-right: auto;
	margin-left: auto;
		
	}
	
#trash {
	
	position: absolute;
	top: 46px;
	left: 13px;
	font-weight: bold;
	
}
	area:focus {outline:none; background-color:red;
	
	}
	
	.dropbox {
		
		background: rgba(0,0,0,0.12);
		border: 1px solid #ffffff;
		height: 80px;
		width: 80px;
		color: white;
		margin-top: 36px;
	}

.nxtgly { 

color: lightgreen;
font-size: x-large;
text-shadow: -1px -1px 1px rgba(150, 150, 150, 1);
 
 }
 
 .nxtgly:hover { 

color: #E0FFE6;
font-size: x-large;
text-shadow: -1px -1px 1px rgba(150, 150, 150, 1);
 
 }
 
 .wronggly { 

color: red;
font-size: x-large;
text-shadow: -1px -1px 1px rgba(150, 150, 150, 1);
 
 }
 
 .wronggly:hover { 

color: darkred;
font-size: x-large;
text-shadow: -1px -1px 1px rgba(150, 150, 150, 1);
 
 }
 
 .correct {
	 margin-bottom: -10px;
	 color: rgba(13,209,0,1.00);
	 
 }

.questionbox {
	
	
	
}

@media only screen and (max-width : 480px) {
	
	#trash {
	
	position: absolute;
	top: 38px;
	left: 10px;
	font-weight: bold;
	font-size: 13px;
	
}
	
}

@media only screen and (max-width : 321px) {
	
	#trash {
	
	position: absolute;
	top: 32px;
	left: 7px;
	font-weight: bold;
	font-size: 13px;
	
}
	
}

	</style>
</head>
<body>
  
<div class="container-fluid">
  
  <div class="row">
 <img src="imgs/header/Palace-maroonish.png" class="img-responsive top">
  <div class="col-xs-6 col-md-6" style="padding: 0">
  <a href="https://idea.org.uk/">
  <img src="imgs/header/garter.png" width="70" height="60" alt="" style="float:left; display: block"/> 
   </a></div>
  <div class="col-xs-6 col-md-6 text-right">
  
    <img src="imgs/header/iDEA-turq.png" width="74" height="85" alt="Logo"/> </div>
  
  </div>
  </div>
  
<div id="summary" class="container text-center animated fadeInDown txt2" style="font-size: 15px">

    <h2 class="center-block hvr-wobble-bottom" style="margin-top: 80px !important; margin-bottom: 27px !important; ">QUIZ</h2> 
    
    <!-- WRONG POP UP -->
    
    <div id="wrongpopup" class="row questionbox" hidden>
    
    <div class="col-sm-8 col-sm-offset-2">
    <p> 	Sorry you ran out of lives!</p>
    <div id="wrongreset"> <b> Reset </b> <br>
    <a id="reset" href="quiz.php"> <span style="margin-top: 10px" class="glyphicon glyphicon-refresh wronggly"></span> </a>
    </div>
    </div>
   
    </div>
    
    <!-- QUESTION 1 -->
    
    <div id="q1" class="row questionbox">
    
    <div class="col-sm-8 col-sm-offset-2 whitebgp">
    <p> 	1. Which machine is this describing? "This machine works from 2D and 3D design files and is mainly used for producing large items such as furniture, 3D mock ups of products, large signs, storage units, beds and chairs." <br><div id="h1" class="hint"> Drag & drop your answer using the maker space below. </div>
    <br>
    Question 1/12 </p>
    <div id="cr1" class="correct" hidden> Correct! <br>
    <a id="nx1" href="#"> <span class="glyphicon glyphicon-arrow-right nxtgly"></span> </a>
    </div>
    </div>
    
    <div class="col-sm-2">
    <div id="db1" class="dropbox center-block ui-droppable"><div id="id1" class="ui-droppable">
    <br>
    Drop Answer
    </div></div>
    </div>
    </div>
    
     <!-- QUESTION 2 -->
     
    <div id="q2" class="row questionbox" hidden>
    
    <div class="col-sm-8 col-sm-offset-2 whitebgp">
    <p> 	2. Which machine works from 2D design files and is used for producing items such as small signs, notices, stickers, decals and designs for T-shirts that you can heat print.<br> <div id="h2" class="hint" hidden> <strong style="color: purple"> Hint: </strong> This is a hint. Follow hint. </div> 
   <br>
    Question 2/12 </p>
    <div id="cr2" class="correct" hidden> Correct! <br>
    <a id="nx2" href="#"> <span class="glyphicon glyphicon-arrow-right nxtgly"></span> </a>
    </div>
    </div>
    
    <div class="col-sm-2">
    <div id="db2" class="dropbox center-block ui-droppable"><div id="id2" class="ui-droppable">
    <br>
    Drop Answer</div>
    </div>
    </div>
    </div>
 
      <!-- QUESTION 3 -->
     
    <div id="q3" class="row questionbox" hidden>
    
    <div class="col-sm-8 col-sm-offset-2 whitebgp">
    <p> 	3. Which computer-aided design software would you use to design an electronic toy racing car? <br> <div id="h3" class="hint"> Find the selection of softwares located on the right side of the maker space. </div>
    <br>
    Question 3/12 </p>
    <div id="cr3" class="correct" hidden> Correct! <br>
    <a id="nx3" href="#"> <span class="glyphicon glyphicon-arrow-right nxtgly"></span> </a>
    </div>
    </div>
    
    <div class="col-sm-2">
    <div id="db3" class="dropbox center-block ui-droppable"><div id="id3" class="ui-droppable">
    <br>
    Drop Answer</div>
    </div>
    </div>
    </div>
    
          <!-- QUESTION 4 -->
     
    <div id="q4" class="row questionbox" hidden>
    
    <div class="col-sm-8 col-sm-offset-2 whitebgp">
    <p> 	4. Which machine is this describing? "This machine works from 2D or 3D files and is mainly used in the workshop for the production of circuit boards by milling through a copper coated fibre board."<br> <div id="h4" class="hint" hidden> <strong style="color: purple"> Hint: </strong> This is a hint. Follow hint. </div>   
    <br>
    Question 4/12 </p>
    <div id="cr4" class="correct" hidden> Correct! <br>
    <a id="nx4" href="#"> <span class="glyphicon glyphicon-arrow-right nxtgly"></span> </a>
    </div>
    </div>
    
    <div class="col-sm-2">
    <div id="db4" class="dropbox center-block ui-droppable"><div id="id4" class="ui-droppable">
    <br>
    Drop Answer</div>
    </div>
    </div>
    </div>
    
              <!-- QUESTION 5.1 -->
     
    <div id="q5" class="row questionbox" hidden>
    
    <div class="col-sm-8 col-sm-offset-2 whitebgp">
    <p> 	5a. Which computer-aided design software would you use to design a box-shaped music speaker? <br> <div id="h5" class="hint" hidden> <strong style="color: purple"> Hint: </strong> This is a hint. Follow hint. </div> 
    <br>
    Question 5/12 </p>
    </div>
    
    <div class="col-sm-2">
    <div id="db5" class="dropbox center-block ui-droppable"><div id="id5" class="ui-droppable">
    <br>
    Drop Answer</div>
    </div>
    </div>
    
    </div>
    
                 <!-- QUESTION 5.2 -->
     
    <div id="q52" class="row questionbox" hidden>
    
    <div class="col-sm-8 col-sm-offset-2 whitebgp">
    <p> 5b. Great, you now have the CAD design of your speaker ready, pick the machine you will use to produce the model of your design.<br> <div id="h52" class="hint" hidden> <strong style="color: purple"> Hint: </strong> This is a hint. Follow hint. </div>  
    <br>
    Question 5/12 </p>
    </div>
    <div class="col-sm-2">
    <div id="db52" class="dropbox center-block ui-droppable"><div id="id52" class="ui-droppable">
    <br>
    Drop Answer</div>
    </div>
    </div>
    
    </div>
    
                     <!-- QUESTION 5.3 -->
     
    <div id="q53" class="row questionbox" hidden>
    
    <div class="col-sm-8 col-sm-offset-2 whitebgp">
    <p> 5c. Your speaker will require a plastic cover for the sound system, a volume control knob and buttons. Pick the machine you will use to create these items.<br> <div id="h53" class="hint" hidden> <strong style="color: purple"> Hint: </strong> This is a hint. Follow hint. </div> 
    <br>
    Question 5/12 </p>
    </div>
    <div class="col-sm-2">
    <div id="db53" class="dropbox center-block ui-droppable"><div id="id53" class="ui-droppable">
    <br>
    Drop Answer</div>
    </div>
    </div>
    
    </div>
    
                        <!-- QUESTION 5.4 -->
     
    <div id="q54" class="row questionbox" hidden>
    
    <div class="col-sm-8 col-sm-offset-2 whitebgp">
    <p> 5d. Now it is time to create the sound system for your speaker. What will you need to use to create the sound system?<br> <div id="h54" class="hint" hidden> <strong style="color: purple"> Hint: </strong> This is a hint. Follow hint. </div> 
    <br>
    Question 5/12 </p>
    <div id="cr54" class="correct" hidden> Correct! <br>
    <a id="nx54" href="#"> <span class="glyphicon glyphicon-arrow-right nxtgly"></span> </a>
    </div>
    </div>
    
    <div class="col-sm-2">
    <div id="db54" class="dropbox center-block ui-droppable"><div id="id54" class="ui-droppable">
    <br>
    Drop Answer</div>
    </div>
    </div>
    </div>
    
    <!-- QUESTION 6 -->
    
    <div id="q6" class="row questionbox" hidden>
    
    <div class="col-sm-8 col-sm-offset-2 whitebgp">
    <p> 	6a. Which computer-aided design software would you use to design two walkie talkies?<br> <div id="h6" class="hint" hidden> <strong style="color: purple"> Hint: </strong> This is a hint. Follow hint. </div>  
    <br>
    Question 6/12 </p>
    </div>
    <div class="col-sm-2">
    <div id="db6" class="dropbox center-block ui-droppable"><div id="id6" class="ui-droppable">
    <br>
    Drop Answer</div>
    </div>
    </div>
    
    </div>
    
     <!-- QUESTION 6.2 -->
     
    <div id="q62" class="row questionbox" hidden>
    
    <div class="col-sm-8 col-sm-offset-2 whitebgp">
    <p> 	6b. Great, you now have the CAD design of your two walkie talkies ready, pick the machine you will use to produce the models of your design.<br> <div id="h62" class="hint" hidden> <strong style="color: purple"> Hint: </strong> This is a hint. Follow hint. </div> 
    <br>
    Question 6/12 </p>
    </div>
    <div class="col-sm-2">
    <div id="db62" class="dropbox center-block ui-droppable"><div id="id62" class="ui-droppable">
    <br>
    Drop Answer</div>
    </div>
    </div>
    
    </div>
   
    
    <!-- QUESTION 6.3 -->
    
      <div id="q63" class="row questionbox" hidden>
   
    <div class="col-sm-8 col-sm-offset-2 whitebgp">
    <p> 	6c. You make two walkie talkie models and now you need to create the call function. What will you need to use to create the call function?<br> <div id="h63" class="hint" hidden> <strong style="color: purple"> Hint: </strong> This is a hint. Follow hint. </div> 
    <br>
    Question 6/12 </p>
    <div id="cr63" class="correct" hidden> Correct! <br>
    <a id="nx63" href="#"> <span class="glyphicon glyphicon-arrow-right nxtgly"></span> </a>
    </div>
    </div>
    <div class="col-sm-2">
    <div id="db63" class="dropbox center-block ui-droppable"><div id="id63" class="ui-droppable">
    <br>
    Drop Answer</div>
    </div>
    </div>
    
    </div>
    
     <!-- QUESTION 7.1 -->
     
    <div id="q7" class="row questionbox" hidden>
    
    <div class="col-sm-8 col-sm-offset-2 whitebgp">
    <p> 	7a. You move into a new home and you want to create some decorative furniture. Which computer-aided design software would you use to create a fancy dining table, chairs and cupboards?<br><div id="h7" class="hint" hidden> <strong style="color: purple"> Hint: </strong> This is a hint. Follow hint. </div> 
    <br>
    Question 7/12 </p>
    </div>
    <div class="col-sm-2">
    <div id="db7" class="dropbox center-block ui-droppable"><div id="id7" class="ui-droppable">
    <br>
    Drop Answer</div>
    </div>
    </div>
    </div>
    
    
    <!-- QUESTION 7.2 -->
    
     <div id="q72" class="row questionbox" hidden>
    
    <div class="col-sm-8 col-sm-offset-2 whitebgp">
    <p> 	7b. Now which machine will you use to create your furniture?<br> <div id="h72" class="hint" hidden> <strong style="color: purple"> Hint: </strong> This is a hint. Follow hint. </div> 
    <br>
    Question 7/12 </p>
    <div id="cr72" class="correct" hidden> Correct! <br>
    <a id="nx72" href="#"> <span class="glyphicon glyphicon-arrow-right nxtgly"></span> </a>
    </div>
    </div>
    
    <div class="col-sm-2">
    <div id="db72" class="dropbox center-block ui-droppable"><div id="id72" class="ui-droppable">
    <br>
    Drop Answer</div>
    </div>
    </div>
    
    </div>
    
    <!-- QUESTION 8 --> 
    
    <div id="q8" class="row questionbox" hidden>
    
    <div class="col-sm-8 col-sm-offset-2 whitebgp">
    <p> 	8. Which machine is this describing? "This machine produces plastic models that can be printed with any shape or direction, this allows for complex designs to be made including those with moving parts."<br> <div id="h8" class="hint" hidden> <strong style="color: purple"> Hint: </strong> This is a hint. Follow hint. </div> 
    <br>
    Question 8/12 </p>
    <div id="cr8" class="correct" hidden> Correct! <br>
    <a id="nx8" href="#"> <span class="glyphicon glyphicon-arrow-right nxtgly"></span> </a>
    </div>
    </div>
    <div class="col-sm-2">
    <div id="db8" class="dropbox center-block ui-droppable"><div id="id8" class="ui-droppable">
    <br>
    Drop Answer</div>
    </div>
    </div>
    
    </div>
    
    <!-- QUESTION 9 -->
    
    <div id="q9" class="row questionbox" hidden>
    
    <div class="col-sm-8 col-sm-offset-2 whitebgp">
    <p> 	9. Which machine is this describing? "This machine cuts materials such as acrylic, thin wood, cardboard, paper and cloth. Not only can it cut but it can etch into the materials, which you can use to create personalised messages, patterns and designs."<br> <div id="h9" class="hint" hidden> <strong style="color: purple"> Hint: </strong> This is a hint. Follow hint. </div> 
    <br>
    Question 9/12 </p>
    <div id="cr9" class="correct" hidden> Correct! <br>
    <a id="nx9" href="#"> <span class="glyphicon glyphicon-arrow-right nxtgly"></span> </a>
    </div>
    </div>
    <div class="col-sm-2">
    <div id="db9" class="dropbox center-block ui-droppable"><div id="id9" class="ui-droppable">
    <br>
    Drop Answer</div>
    </div>
    </div>
    
    </div>
    
    <!-- QUESTION 10.1 -->
    
     <div id="q10" class="row questionbox" hidden>
    
    <div class="col-sm-8 col-sm-offset-2 whitebgp">
    <p> 	10a. Which computer-aided design software would you use to create a doll's house?<br> <div id="h10" class="hint" hidden> <strong style="color: purple"> Hint: </strong> This is a hint. Follow hint. </div> 
    <br>
    Question 10/12 </p>
    </div>
    <div class="col-sm-2">
    <div id="db10" class="dropbox center-block ui-droppable"><div id="id10" class="ui-droppable">
    <br>
    Drop Answer</div>
    </div>
    </div>
    
    </div>
    
      <!-- QUESTION 10.2 -->
    
     <div id="q102" class="row questionbox" hidden>
    
    <div class="col-sm-8 col-sm-offset-2 whitebgp">
    <p> 	10b. Now which machine will you use to create your doll's house?<br> <div id="h102" class="hint" hidden> <strong style="color: purple"> Hint: </strong> This is a hint. Follow hint. </div> 
    <br>
    Question 10/12 </p>
    </div>
    <div class="col-sm-2">
    <div id="db102" class="dropbox center-block ui-droppable"><div id="id102" class="ui-droppable">
    <br>
    Drop Answer</div>
    </div>
    </div>
    
    </div>
    
    <!-- QUESTION 10.3 -->
    
         <div id="q103" class="row questionbox" hidden>
    
    <div class="col-sm-8 col-sm-offset-2 whitebgp">
    <p> 	10c. Oh no… you created the doll's house but now you have no characters for it. Which computer-aided design software will be great to use for designing your characters?<br> <div id="h103" class="hint" hidden> <strong style="color: purple"> Hint: </strong> This is a hint. Follow hint. </div> 
    <br>
    Question 10/12 </p>
    </div>
    <div class="col-sm-2">
    <div id="db103" class="dropbox center-block ui-droppable"><div id="id103" class="ui-droppable">
    <br>
    Drop Answer</div>
    </div>
    </div>
    
    </div>
    
        <!-- QUESTION 10.4 -->
    
         <div id="q104" class="row questionbox" hidden>
    
    <div class="col-sm-8 col-sm-offset-2 whitebgp">
    <p> 10d. Now which machine will you use to create the models of your characters?<br> <div id="h104" class="hint" hidden> <strong style="color: purple"> Hint: </strong> This is a hint. Follow hint. </div> 
    <br>
    Question 10/12 </p>
    </div>
    <div class="col-sm-2">
    <div id="db104" class="dropbox center-block ui-droppable"><div id="id104" class="ui-droppable">
    <br>
    Drop Answer</div>
    </div>
    </div>
    
    </div>
    
    <!-- QUESTION 10.5 -->
    
     <div id="q105" class="row questionbox" hidden>
    
    <div class="col-sm-8 col-sm-offset-2 whitebgp">
    <p> 10e. Awesome! Now let's create their clothing. By using your 2D design skills, you create small templates of the clothing that they're going to wear and now you want to produce them. Choose a machine to do so.<br> <div id="h105" class="hint" hidden> <strong style="color: purple"> Hint: </strong> This is a hint. Follow hint. </div> 
    <br>
    Question 10/12 </p>
    <div id="cr105" class="correct" hidden> Correct! <br>
    <a id="nx105" href="#"> <span class="glyphicon glyphicon-arrow-right nxtgly"></span> </a>
    </div>
    </div>
    <div class="col-sm-2">
    <div id="db105" class="dropbox center-block ui-droppable"><div id="id105" class="ui-droppable">
    <br>
    Drop Answer</div>
    </div>
    </div>
    
    </div>
    
        <!-- QUESTION 11.1 -->
    
         <div id="q11" class="row questionbox" hidden>
    
    <div class="col-sm-8 col-sm-offset-2 whitebgp">
    <p> 	11a. Which machine is this describing? "This is used for soldering, programming and testing electronic products. It require the knowledge of at least one programming language."<br> <div id="h11" class="hint" hidden> <strong style="color: purple"> Hint: </strong> This is a hint. Follow hint. </div> 
    <br>
    Question 11/12 </p>
    </div>
    <div class="col-sm-2">
    <div id="db11" class="dropbox center-block ui-droppable"><div id="id11" class="ui-droppable">
    <br>
    Drop Answer</div>
    </div>
    </div>
    
    </div>
    
    <!-- QUESTION 11.2 -->
    
         <div id="q112" class="row questionbox" hidden>
    
    <div class="col-sm-8 col-sm-offset-2 whitebgp">
    <p> 	11b. Great, electronics can be used to create very complex gadgets and products that will require some type of programming.. such as a remote controlled toy helicopter. Which computer-aided design software would you use to design a remote controlled toy helicopter?<br> <div id="h112" class="hint" hidden> <strong style="color: purple"> Hint: </strong> This is a hint. Follow hint. </div> 
    <br>
    Question 11/12 </p>
    </div>
    <div class="col-sm-2">
    <div id="db112" class="dropbox center-block ui-droppable"><div id="id112" class="ui-droppable">
    <br>
    Drop Answer</div>
    </div>
    </div>
    
    </div>
    
    <!-- QUESTION 11.3 -->
   
         <div id="q113" class="row questionbox" hidden>
    
    <div class="col-sm-8 col-sm-offset-2 whitebgp">
    <p> 	11c. Now which machine will you use to create the model of your remote controlled toy helicopter?<br> <div id="h113" class="hint" hidden> <strong style="color: purple"> Hint: </strong> This is a hint. Follow hint. </div> 
    <br>
    Question 11/12 </p>
    </div>
    <div class="col-sm-2">
    <div id="db113" class="dropbox center-block ui-droppable"><div id="id113" class="ui-droppable">
    <br>
    Drop Answer</div>
    </div>
    </div>
    
    </div>
    
      <!-- QUESTION 11.4 -->
   
         <div id="q114" class="row questionbox" hidden>
    
    <div class="col-sm-8 col-sm-offset-2 whitebgp">
    <p> 	11d. Great, we now must use electronics to get our helicopter up and running but oh no.. you've ran out of circuit boards. No problem, you can make one - choose a machine to do so.<br> <div id="h114" class="hint" hidden> <strong style="color: purple"> Hint: </strong> This is a hint. Follow hint. </div> 
    <br>
    Question 11/12 </p>
    <div id="cr114" class="correct" hidden> Correct! <br>
    <a id="nx114" href="#"> <span class="glyphicon glyphicon-arrow-right nxtgly"></span> </a>
    </div>
    </div>
    <div class="col-sm-2">
    <div id="db114" class="dropbox center-block ui-droppable"><div id="id114" class="ui-droppable">
    <br>
    Drop Answer</div>
    </div>
    </div>
    
    </div>
    
    <!-- QUESTION 12.1 -->
   
         <div id="q12" class="row questionbox" hidden>
    
    <div class="col-sm-8 col-sm-offset-2 whitebgp">
    <p> 	12a. You're the new designer in town and you need to create some posters, flyers & business cards. Which computer-aided software would you use to design these products?<br> <div id="h12" class="hint" hidden> <strong style="color: purple"> Hint: </strong> This is a hint. Follow hint. </div> 

    <br>
    Question 12/12 </p>
    </div>
    <div class="col-sm-2">
    <div id="db12" class="dropbox center-block ui-droppable"><div id="id12" class="ui-droppable">
    <br>
    Drop Answer</div>
    </div>
    </div>
    
    </div>
    
    <!-- QUESTION 12.2 -->
    
    <div id="q122" class="row questionbox" hidden>
    
    <div class="col-sm-8 col-sm-offset-2 whitebgp">
    <p> 	12b. Great, you now have the CAD designs of your posters, flyers and business cards ready. To produce these items, will you use the micro mill machine, Vinyl Cutter or CNC router?<br> <div id="h122" class="hint" hidden> <strong style="color: purple"> Hint: </strong> This is a hint. Follow hint. </div>

    <br>
    Question 12/12 </p>
    <div id="cr122" class="correct" hidden> <br> COMPLETE <br>
    <a id="nx122" href="get.php"> <span class="glyphicon glyphicon-arrow-right nxtgly"></span> </a>
    </div><br>
    </div>
    <div class="col-sm-2">
    <div id="db122" class="dropbox center-block ui-droppable"><div id="id122" class="ui-droppable">
    <br>
    Drop Answer</div>
    </div>
    </div>
    
    </div>
    
     </div> <!-- container -->
     
    <!-- SCENE -->
    
<div id="production" class="row animated fadeIn" style="margin: 0">

<div class="col-md-10 col-md-offset-1" style="padding: 1px"> <div id="lives" style="display:block; margin-left:7px"> 
 Lives: <b id="lifecounter">7</b></div><span id="trash" class="glyphicon glyphicon-trash"></span>

	<img src="imgs/production/quizscene/FLfullq.png" id="fls" style="align-self:center" width="1024" height="768" usemap="#fl" alt="">
	
    <map name="fl">
    
     <area shape="circle" id="cncrouterq" class="ui-draggable" coords="215,579,73" onMouseover="pictureChange1()" onMouseout="pictureChangeBack1()">   
      
      <area shape="circle" id="lasercutterq" class="ui-draggable" coords="428,476,48" onMouseover="pictureChange2()" onMouseout="pictureChangeBack2()">  
      
      
        <area shape="circle" id="3dprinterq" class="ui-draggable" coords="324,382,46" onMouseover="pictureChange3()" onMouseout="pictureChangeBack3()">
              
         <area shape="circle" id="micromillq" class="ui-draggable" coords="404,660,47" onMouseover="pictureChange4()" onMouseout="pictureChangeBack4()">
               
         <area shape="circle" id="vinylcutterq" class="ui-draggable" coords="48,507,47" onMouseover="pictureChange5()" onMouseout="pictureChangeBack5()">   
        
          
        <area shape="circle" id="electronicsq" class="ui-draggable" coords="169,380,47" onMouseover="pictureChange6()" onMouseout="pictureChangeBack6()">
        
        <area shape="circle" id="2dq" class="ui-draggable" coords="712,500,46" onMouseover="pictureChange7()" onMouseout="pictureChangeBack7()">
        
        <area shape="circle" id="3dq" class="ui-draggable" coords="786,601,46" onMouseover="pictureChange8()" onMouseout="pictureChangeBack8()">
        
        <area shape="circle" id="bothq" class="ui-draggable" coords="865,693,46" onMouseover="pictureChange9()" onMouseout="pictureChangeBack9()">
        
 
        	
    </map>
  </div>
</div>
<br>
<br>



<div class="container-fluid text-center animated fadeInDown">


  <p class="text-info">&nbsp; </p>
    <p class="text-info">&nbsp;</p>
  
    <p class="text-info" style="margin-bottom: 60px">Quiz</p>
    
    
    
    
  </div>
  
  
    <div class="progress" style="margin: 0">
<div class="progress-bar progress-bar-info progress-bar-striped active hvr-grow" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%"> Progress&nbsp;90% 
  </div>
  </div>  
  
 
<div class="container-fluid">
  <div class="row">
    <div class="text-center col-md-12">
     <br><br>
      <h4 class="ft text-muted">The Duke Of York Inspiring Digital Enterprise Award </h4>
      <p>Copyright &copy; 2017 &middot; All Rights Reserved &middot; <a href="https://idea.org.uk/">iDEA</a></p>
    </div>
  </div> 
  </div>
  

<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/jquery.rwdImageMaps.min.js"></script>
<script src="js/jquery-ui.minupdate.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/mobile.js"></script>


<script>


	
	
	
	$(document).ready(function() { 
	
	var dropHelp = true;
	
	var incorrectdrop = 7;
	
	var h1 = 0;
	
	var h2 = 0;
	
	var h3 = 0;
	
	var h4 = 0;
	
	var h5 = 0;
	
	var h52 = 0;
	
	var h53 = 0;
	
	var h54 = 0;
	
	var h6 = 0;
	
	var h62 = 0;
	
	var h63 = 0;
	
	var h7 = 0;
	
	var h72 = 0;
	
	var h8 = 0;
	
	var h9 = 0;
	
	var h10 = 0;
	
	var h102 = 0;
	
	var h103 = 0;
	
	var h104 = 0;
	
	var h105 = 0;
	
	var h11 = 0;
	
	var h112 = 0;
	
	var h113 = 0;
	
	var h114 = 0;
	
	var h12 = 0;
	
	var h122 = 0;

	
	$('img[usemap]').rwdImageMaps();
	
	$('div[id^="cr"]').addClass("animated pulse infinite");
	
	
	
	<!-- DRAG -->
	
  $('#lasercutterq').draggable({
  cursor: 'pointer', 
  cursorAt: { top: 50, left: 48 },
  revert: function(is_valid_drop){
                console.log("is_valid_drop = " + is_valid_drop);
                if(!is_valid_drop){
                   console.log("revert triggered");
                    $('#trash').animate({color: '#66ff99'});
                    $('#trash').delay(300).animate({color: 'black'});
                   return true;
                } else {
                   
                }
            },

  
  helper: function(event) {
      return $('<img id="lasercutteri" src="imgs/production/icons/lasercutterin.png" class="text-center" style="width: 100px">');
    }
	 
});

$('#electronicsq').draggable({
  cursor: 'pointer', 
  cursorAt: { top: 50, left: 48 },
  revert: function(is_valid_drop){
                console.log("is_valid_drop = " + is_valid_drop);
                if(!is_valid_drop){
                   console.log("revert triggered");
                    $('#trash').animate({color: '#66ff99'});
                    $('#trash').delay(300).animate({color: 'black'});
                   return true;
                } else {
                   
                }
            },

  
  helper: function(event) {
      return $('<img id="electronicsi" src="imgs/production/icons/electronicsin.png" class="text-center" style="width: 100px">');
    }
	 
});
			
$('#cncrouterq').draggable({
  cursor: 'pointer', 
  cursorAt: { top: 50, left: 48 },
  revert: function(is_valid_drop){
                console.log("is_valid_drop = " + is_valid_drop);
                if(!is_valid_drop){
                   console.log("revert triggered");
                    $('#trash').animate({color: '#66ff99'});
                    $('#trash').delay(300).animate({color: 'black'});
                   return true;
                } else {
                   
                }
            },

  
  helper: function(event) {
      return $('<img id="cncrouteri" src="imgs/production/icons/cncrouterin.png" class="text-center" style="width: 100px">');
    }
	 
});			

$('#micromillq').draggable({
  cursor: 'pointer', 
  cursorAt: { top: 50, left: 48 },
   revert: function(is_valid_drop){
                console.log("is_valid_drop = " + is_valid_drop);
                if(!is_valid_drop){
                   console.log("revert triggered");
                    $('#trash').animate({color: '#66ff99'});
                    $('#trash').delay(300).animate({color: 'black'});
                   return true;
                } else {
                   
                }
            },

  
  helper: function(event) {
      return $('<img id="micromilli" src="imgs/production/icons/micromillin.png" class="text-center" style="width: 100px">');
    }
	 
});
			 
$('#3dprinterq').draggable({
  cursor: 'pointer', 
  cursorAt: { top: 50, left: 48 },
  revert: function(is_valid_drop){
                console.log("is_valid_drop = " + is_valid_drop);
                if(!is_valid_drop){
                   console.log("revert triggered");
                    $('#trash').animate({color: '#66ff99'});
                    $('#trash').delay(300).animate({color: 'black'});
                   return true;
                } else {
                   
                }
            },

  
  helper: function(event) {
      return $('<img id="3dprinteri" src="imgs/production/icons/3dprinterin.png" class="text-center" style="width: 100px">');
    }
	 
});

$('#vinylcutterq').draggable({
  cursor: 'pointer', 
  cursorAt: { top: 50, left: 48 },
 revert: function(is_valid_drop){
                console.log("is_valid_drop = " + is_valid_drop);
                if(!is_valid_drop){
                   console.log("revert triggered");
                    $('#trash').animate({color: '#66ff99'});
                    $('#trash').delay(300).animate({color: 'black'});
                   return true;
                } else {
                   
                }
            },

  
  helper: function(event) {
      return $('<img id="vinylcutteri" src="imgs/production/icons/vinylcutterin.png" class="text-center" style="width: 100px">');
    }
	 
});

  $('#2dq').draggable({
  cursor: 'pointer', 
  cursorAt: { top: 50, left: 48 },
  revert: function(is_valid_drop){
                console.log("is_valid_drop = " + is_valid_drop);
                if(!is_valid_drop){
                   console.log("revert triggered");
                    $('#trash').animate({color: '#66ff99'});
                    $('#trash').delay(300).animate({color: 'black'});
                   return true;
                } else {
                   
                }
            },

  
  helper: function(event) {
      return $('<img id="2di" src="imgs/production/icons/2din.png" class="text-center" style="width: 100px">');
    }
	 
});

  $('#3dq').draggable({
  cursor: 'pointer', 
  cursorAt: { top: 50, left: 48 },
 revert: function(is_valid_drop){
                console.log("is_valid_drop = " + is_valid_drop);
                if(!is_valid_drop){
                   console.log("revert triggered");
                    $('#trash').animate({color: '#66ff99'});
                    $('#trash').delay(300).animate({color: 'black'});
                   return true;
                } else {
                   
                }
            },

  
  helper: function(event) {
      return $('<img id="3di" src="imgs/production/icons/3din.png" class="text-center" style="width: 100px">');
    }
	 
   });
  
  $('#bothq').draggable({
  cursor: 'pointer', 
  cursorAt: { top: 50, left: 48 },
 revert: function(is_valid_drop){
                console.log("is_valid_drop = " + is_valid_drop);
                if(!is_valid_drop){
                   console.log("revert triggered");
                    $('#trash').animate({color: '#66ff99'});
                    $('#trash').delay(300).animate({color: 'black'});
                   return true;
                } else {
                   
                }
            },

  
  helper: function(event) {
      return $('<img id="bothi" src="imgs/production/icons/bothin.png" class="text-center" style="width: 75px">');
    }
	 
   });
   
   
   <!-- DROP TRANSITIONS WRONGS -->
   
   <!-- QUESTION ONE -->
   
   $('#db1').droppable({
  accept: '#cncrouterq',
  tolerance: 'pointer',
  drop: function(event, ui) {
        if(dropHelp){ 
           //clone and remove positioning from the helper element
           var newDiv = $(ui.helper).clone(false)
               .removeClass('ui-draggable-dragging')
               .css({position:'relative', left:-11, top:-68});            
           $(this).append(newDiv);
        
        //drop the draggable source element
        } 
		
		else {
           $(this).append(ui.draggable); } 
		   $('#cr1').fadeIn(300);
	}
	
   });
   
   $('#nx1').click(function(){
	   $('#q1').fadeOut(1000);
	   $('#q2').delay(1000).fadeIn(1000);
	   
   });
   
   $('#id1').droppable({
  accept: '#lasercutterq, #electronicsq, #micromillq, #vinylcutterq, #3dprinterq, #2dq, #3dq, #bothq',
  tolerance: 'pointer',
  drop: function(event){
  incorrectdrop--;
  $('#lifecounter').html(function(i, val) { return +val-1 });
  $('#lifecounter').animate({color: 'red'});
  $('#lifecounter').animate({color: 'black'});
  $('.dropbox').animate({backgroundColor: 'rgba(144,0,2,0.30)'});
  $('.dropbox').animate({backgroundColor: 'rgba(0,0,0,0.12)'});

  if (incorrectdrop === 0){ 
  $('body').addClass('animated shake');
  $('div[id^="q"]').hide();
  $('#wrongpopup').show(); };
  }
 
});

   <!-- QUESTION TWO -->
   
   $('#db2').droppable({
  accept: '#vinylcutterq',
  tolerance: 'pointer',
  drop: function(event, ui) {
        if(dropHelp){ 
           //clone and remove positioning from the helper element
           var newDiv = $(ui.helper).clone(false)
               .removeClass('ui-draggable-dragging')
               .css({position:'relative', left:-11, top:-68});            
           $(this).append(newDiv);
        
        //drop the draggable source element
        } 
		
		else {
           $(this).append(ui.draggable); } 
		   $('#cr2').fadeIn(300);
	}
	
   });
   
   $('#nx2').click(function(){
	   $('#q2').fadeOut(1000);
	   $('#q3').delay(1000).fadeIn(1000);
	   
   });
   
   $('#id2').droppable({
  accept: '#lasercutterq, #cncrouterq, #electronicsq, #micromillq, #3dprinterq, #2dq, #3dq, #bothq',
  tolerance: 'pointer',
  drop: function(event){
  incorrectdrop--;
  $('#lifecounter').html(function(i, val) { return +val-1 });
  $('#lifecounter').animate({color: 'red'});
  $('#lifecounter').animate({color: 'black'});
  $('.dropbox').animate({backgroundColor: 'rgba(144,0,2,0.30)'});
  $('.dropbox').animate({backgroundColor: 'rgba(0,0,0,0.12)'});
  
  if (incorrectdrop === 0){  
  $('div[id^="q"]').hide();
  $('#wrongpopup').show(); };
  
  }
});

   <!-- QUESTION THREE -->
   
   $('#db3').droppable({
  accept: '#3dq',
  tolerance: 'pointer',
  drop: function(event, ui) {
        if(dropHelp){ 
           //clone and remove positioning from the helper element
           var newDiv = $(ui.helper).clone(false)
               .removeClass('ui-draggable-dragging')
               .css({position:'relative', left:-11, top:-68});            
           $(this).append(newDiv);
        
        //drop the draggable source element
        } 
		
		else {
           $(this).append(ui.draggable); } 
		   $('#cr3').fadeIn(300);
	}
	
   });
   
   $('#nx3').click(function(){
	   $('#q3').fadeOut(1000);
	   $('#q4').delay(1000).fadeIn(1000);
	   
   });
   
   $('#id3').droppable({
  accept: '#lasercutterq, #cncrouterq, #electronicsq, #micromillq, #vinylcutterq, #3dprinterq, #2dq, #bothq',
  tolerance: 'pointer',
  drop: function(event){
  incorrectdrop--;
  h3++;
  $('#lifecounter').html(function(i, val) { return +val-1 });
  $('#lifecounter').animate({color: 'red'});
  $('#lifecounter').animate({color: 'black'});
  $('.dropbox').animate({backgroundColor: 'rgba(144,0,2,0.30)'});
  $('.dropbox').animate({backgroundColor: 'rgba(0,0,0,0.12)'});

  if (incorrectdrop === 0){ 
  $('body').addClass('animated shake');  
  $('div[id^="q"]').hide();
  $('#wrongpopup').show(); };
  
   if (h3 === 1){  
  $('#h3').fadeOut(800, function(){ $(this).html('<strong style="color: purple" class="animated"> Hint: </strong> This object needs software and may require more than one plane to design it.').fadeIn(1040); 
  });
    };
  
  if (h3 === 2){  
  $('#h3').fadeOut(800, function(){ $(this).html('<strong style="color: purple" class="animated"> Hint: </strong> Think about the details, will this object require just one plane or multiple planes to design it?').fadeIn(1040); });
  };
  
  }
});

   <!-- QUESTION FOUR -->
   
   $('#db4').droppable({
  accept: '#micromillq',
  tolerance: 'pointer',
  drop: function(event, ui) {
        if(dropHelp){ 
           //clone and remove positioning from the helper element
           var newDiv = $(ui.helper).clone(false)
               .removeClass('ui-draggable-dragging')
               .css({position:'relative', left:-11, top:-68});            
           $(this).append(newDiv);
        
        //drop the draggable source element
        } 
		
		else {
           $(this).append(ui.draggable); } 
		   $('#cr4').fadeIn(300);
	}
	
   });
   
   $('#nx4').click(function(){
	   $('#q4').fadeOut(1000);
	   $('#q5').delay(1000).fadeIn(1000);
	   
   });
   
   $('#id4').droppable({
  accept: '#lasercutterq, #cncrouterq, #electronicsq, #vinylcutterq, #3dprinterq, #2dq, #3dq, #bothq',
  tolerance: 'pointer',
  drop: function(event){
  incorrectdrop--;
  $('#lifecounter').html(function(i, val) { return +val-1 });
  $('#lifecounter').animate({color: 'red'});
  $('#lifecounter').animate({color: 'black'});
  $('.dropbox').animate({backgroundColor: 'rgba(144,0,2,0.30)'});
  $('.dropbox').animate({backgroundColor: 'rgba(0,0,0,0.12)'});

  if (incorrectdrop === 0){ 
  $('body').addClass('animated shake');
  $('div[id^="q"]').hide();
  $('#wrongpopup').show(); };
  }
});

 <!-- QUESTION FIVE -->
   
   $('#db5').droppable({
  accept: '#2dq',
  tolerance: 'pointer',
  drop: function(event, ui) {
        if(dropHelp){ 
           //clone and remove positioning from the helper element
           var newDiv = $(ui.helper).clone(false)
               .removeClass('ui-draggable-dragging')
               .css({position:'relative', left:-10, top:-70});            
           $(this).append(newDiv);
        
        //drop the draggable source element
        } 
		
		else {
           $(this).append(ui.draggable); } 
		   $('#q5').fadeOut(1000);
	       $('#q52').delay(1000).fadeIn(1000);
	}
	
   });
   
  
   
   $('#id5').droppable({
  accept: '#lasercutterq, #cncrouterq, #electronicsq, #micromillq, #vinylcutterq, #3dprinterq, #bothq, #3dq',
  tolerance: 'pointer',
  drop: function(event){
  incorrectdrop--;
  h5++;
  $('#lifecounter').html(function(i, val) { return +val-1 });
  $('#lifecounter').animate({color: 'red'});
  $('#lifecounter').animate({color: 'black'});
  $('.dropbox').animate({backgroundColor: 'rgba(144,0,2,0.30)'});
  $('.dropbox').animate({backgroundColor: 'rgba(0,0,0,0.12)'});

  if (incorrectdrop === 0){
  $('body').addClass('animated shake');
  $('div[id^="q"]').hide();
  $('#wrongpopup').show(); };
  
  if (h5 === 1){  
  $('#h5').fadeOut(800, function(){ $(this).html('<strong style="color: purple" class="animated"> Hint: </strong> Which computer-aided design software will be the best to use for creating a simple box.').fadeIn(1040);
   });
     };
  
  if (h5 === 2){  
  $('#h5').fadeOut(800, function(){ $(this).html('<strong style="color: purple" class="animated"> Hint: </strong> This is a product that has flat sides and very little detail.').fadeIn(1040); 
  });
    };
  
  }
});

 <!-- QUESTION FIVE 2 -->
   
   $('#db52').droppable({
  accept: '#lasercutterq',
  tolerance: 'pointer',
  drop: function(event, ui) {
        if(dropHelp){ 
           //clone and remove positioning from the helper element
           var newDiv = $(ui.helper).clone(false)
               .removeClass('ui-draggable-dragging')
               .css({position:'relative', left:-11, top:-68});            
           $(this).append(newDiv);
        
        //drop the draggable source element
        } 
		
		else {
           $(this).append(ui.draggable); } 
		   $('#q52').fadeOut(1000);
	       $('#q53').delay(1000).fadeIn(1000);
	}
	
   });
   
  
   
   $('#id52').droppable({
  accept: '#cncrouterq, #electronicsq, #micromillq, #vinylcutterq, #3dprinterq, #2dq, #3dq, #bothq',
  tolerance: 'pointer',
  drop: function(event){
  incorrectdrop--;
  h52++;
  $('#lifecounter').html(function(i, val) { return +val-1 });
  $('#lifecounter').animate({color: 'red'});
  $('#lifecounter').animate({color: 'black'});
  $('.dropbox').animate({backgroundColor: 'rgba(144,0,2,0.30)'});
  $('.dropbox').animate({backgroundColor: 'rgba(0,0,0,0.12)'});

  if (incorrectdrop === 0){ 
  $('body').addClass('animated shake');
  $('div[id^="q"]').hide();
  $('#wrongpopup').show(); };
  
    if (h52 === 1){  
  $('#h52').fadeOut(800, function(){ $(this).html('<strong style="color: purple" class="animated"> Hint: </strong> Think about the type of materials that are often used to create speaker boxes.').fadeIn(1040); 
  });
    };
  
  if (h52 === 2){  
  $('#h52').fadeOut(800, function(){ $(this).html('<strong style="color: purple" class="animated"> Hint: </strong> Which machine works from 2D design files.').fadeIn(1040);
  });
    };
  
  }
});

 <!-- QUESTION FIVE 3 -->
   
   $('#db53').droppable({
  accept: '#3dprinterq',
  tolerance: 'pointer',
  drop: function(event, ui) {
        if(dropHelp){ 
           //clone and remove positioning from the helper element
           var newDiv = $(ui.helper).clone(false)
               .removeClass('ui-draggable-dragging')
               .css({position:'relative', left:-11, top:-68});            
           $(this).append(newDiv);
        
        //drop the draggable source element
        } 
		
		else {
           $(this).append(ui.draggable); } 
		   $('#q53').fadeOut(1000);
	       $('#q54').delay(1000).fadeIn(1000);
	}
	
   });
   
  
   
   $('#id53').droppable({
  accept: '#lasercutterq, #cncrouterq, #electronicsq, #micromillq, #vinylcutterq, #2dq, #3dq, #bothq',
  tolerance: 'pointer',
  drop: function(event){
  incorrectdrop--;
  h53++;
  $('#lifecounter').html(function(i, val) { return +val-1 });
  $('#lifecounter').animate({color: 'red'});
  $('#lifecounter').animate({color: 'black'});
  $('.dropbox').animate({backgroundColor: 'rgba(144,0,2,0.30)'});
  $('.dropbox').animate({backgroundColor: 'rgba(0,0,0,0.12)'});

  if (incorrectdrop === 0){ 
  $('body').addClass('animated shake');
  $('div[id^="q"]').hide();
  $('#wrongpopup').show(); };
  
  if (h53 === 1){  
  $('#h53').fadeOut(800, function(){ $(this).html('<strong style="color: purple" class="animated"> Hint: </strong> Which machine produces plastic models.').fadeIn(1040); 
  });
    };
  
  
  }
});

   <!-- QUESTION FIVE 4 -->
   
   $('#db54').droppable({
  accept: '#electronicsq',
  tolerance: 'pointer',
  drop: function(event, ui) {
        if(dropHelp){ 
           //clone and remove positioning from the helper element
           var newDiv = $(ui.helper).clone(false)
               .removeClass('ui-draggable-dragging')
               .css({position:'relative', left:-11, top:-68});            
           $(this).append(newDiv);
        
        //drop the draggable source element
        } 
		
		else {
           $(this).append(ui.draggable); } 
		   $('#cr54').fadeIn(300);
	}
	
   });
   
   $('#nx54').click(function(){
	   $('#q54').fadeOut(1000);
	   $('#q6').delay(1000).fadeIn(1000);
	   
   });
   
   $('#id54').droppable({
  accept: '#lasercutterq, #cncrouterq, #micromillq, #vinylcutterq, #3dprinterq, #2dq, #3dq, #bothq',
  tolerance: 'pointer',
  drop: function(event){
  incorrectdrop--;
  $('#lifecounter').html(function(i, val) { return +val-1 });
  $('#lifecounter').animate({color: 'red'});
  $('#lifecounter').animate({color: 'black'});
  $('.dropbox').animate({backgroundColor: 'rgba(144,0,2,0.30)'});
  $('.dropbox').animate({backgroundColor: 'rgba(0,0,0,0.12)'});

  if (incorrectdrop === 0){ 
  $('body').addClass('animated shake');
  $('div[id^="q"]').hide();
  $('#wrongpopup').show(); };
  }
});

<!-- QUESTION 6 -->
   
   $('#db6').droppable({
  accept: '#3dq',
  tolerance: 'pointer',
  drop: function(event, ui) {
        if(dropHelp){ 
           //clone and remove positioning from the helper element
           var newDiv = $(ui.helper).clone(false)
               .removeClass('ui-draggable-dragging')
               .css({position:'relative', left:-11, top:-68});            
           $(this).append(newDiv);
        
        //drop the draggable source element
        } 
		
		else {
           $(this).append(ui.draggable); } 
		   $('#q6').fadeOut(1000);
	       $('#q62').delay(1000).fadeIn(1000);
	}
	
   });
   
  
   
   $('#id6').droppable({
  accept: '#lasercutterq, #cncrouterq, #electronicsq, #micromillq, #vinylcutterq, #3dprinterq, #2dq, #bothq',
  tolerance: 'pointer',
  drop: function(event){
  incorrectdrop--;
  h6++;
  $('#lifecounter').html(function(i, val) { return +val-1 });
  $('#lifecounter').animate({color: 'red'});
  $('#lifecounter').animate({color: 'black'});
  $('.dropbox').animate({backgroundColor: 'rgba(144,0,2,0.30)'});
  $('.dropbox').animate({backgroundColor: 'rgba(0,0,0,0.12)'});

  if (incorrectdrop === 0){ 
  $('body').addClass('animated shake');
  $('div[id^="q"]').hide();
  $('#wrongpopup').show(); };
  
  if (h6 === 1){  
  $('#h6').fadeOut(800, function(){ $(this).html('<strong style="color: purple" class="animated"> Hint: </strong> This object has lots of very small curves and details. Which design software do you need to use.').fadeIn(1040); 
  });
    };
  
  if (h6 === 2){  
  $('#h6').fadeOut(800, function(){ $(this).html('<strong style="color: purple" class="animated"> Hint: </strong> Think about the details, will this object require just one plane or multiple planes to design it?').fadeIn(1040); 
  });
    };
  
  }
});

<!-- QUESTION 6 TWO -->
   
   $('#db62').droppable({
  accept: '#3dprinterq',
  tolerance: 'pointer',
  drop: function(event, ui) {
        if(dropHelp){ 
           //clone and remove positioning from the helper element
           var newDiv = $(ui.helper).clone(false)
               .removeClass('ui-draggable-dragging')
               .css({position:'relative', left:-11, top:-68});            
           $(this).append(newDiv);
        
        //drop the draggable source element
        } 
		
		else {
           $(this).append(ui.draggable); } 
		   $('#q62').fadeOut(1000);
	       $('#q63').delay(1000).fadeIn(1000);
	}
	
   });
   
  
   
   $('#id62').droppable({
  accept: '#lasercutterq, #cncrouterq, #electronicsq, #vinylcutterq, #2dq, #3dq, #bothq',
  tolerance: 'pointer',
  drop: function(event){
  incorrectdrop--;
  h62++;
  $('#lifecounter').html(function(i, val) { return +val-1 });
  $('#lifecounter').animate({color: 'red'});
  $('#lifecounter').animate({color: 'black'});
  $('.dropbox').animate({backgroundColor: 'rgba(144,0,2,0.30)'});
  $('.dropbox').animate({backgroundColor: 'rgba(0,0,0,0.12)'});

  if (incorrectdrop === 0){ $('body').addClass('animated shake');
  $('div[id^="q"]').hide();
  $('#wrongpopup').show(); };
  
  if (h62 === 1){  
  $('#h62').fadeOut(800, function(){ $(this).html('<strong style="color: purple" class="animated"> Hint: </strong> Which machine produces plastic models.').fadeIn(1040);
   });
     };
  
  if (h62 === 2){  
  $('#h62').fadeOut(800, function(){ $(this).html('<strong style="color: purple" class="animated"> Hint: </strong> Which machine works from 3D design files.').fadeIn(1040);
   });
     };
  
  
  }
});


   <!-- QUESTION SIX 3 -->
   
   $('#db63').droppable({
  accept: '#electronicsq',
  tolerance: 'pointer',
  drop: function(event, ui) {
        if(dropHelp){ 
           //clone and remove positioning from the helper element
           var newDiv = $(ui.helper).clone(false)
               .removeClass('ui-draggable-dragging')
               .css({position:'relative', left:-11, top:-68});            
           $(this).append(newDiv);
        
        //drop the draggable source element
        } 
		
		else {
           $(this).append(ui.draggable); } 
		   $('#cr63').fadeIn(300);
	}
	
   });
   
   $('#nx63').click(function(){
	   $('#q63').fadeOut(1000);
	   $('#q7').delay(1000).fadeIn(1000);
	   
   });
   
   $('#id63').droppable({
  accept: '#lasercutterq, #cncrouterq, #micromillq, #vinylcutterq, #3dprinterq, #2dq, #3dq, #bothq',
  tolerance: 'pointer',
  drop: function(event){
  incorrectdrop--;
  h63++;
  $('#lifecounter').html(function(i, val) { return +val-1 });
  $('#lifecounter').animate({color: 'red'});
  $('#lifecounter').animate({color: 'black'});
  $('.dropbox').animate({backgroundColor: 'rgba(144,0,2,0.30)'});
  $('.dropbox').animate({backgroundColor: 'rgba(0,0,0,0.12)'});

  if (incorrectdrop === 0){ $('body').addClass('animated shake');
  $('div[id^="q"]').hide();
  $('#wrongpopup').show(); };
  
   if (h63 === 1){  
  $('#h63').fadeOut(800, function(){ $(this).html('<strong style="color: purple" class="animated"> Hint: </strong> This product must be programmed.').fadeIn(1040); 
  });
    };
  
  }
});



<!----------------------------------------- CUT -------------------------------------------------->


<!-- QUESTION SEVEN -->
   
   $('#db7').droppable({
  accept: '#bothq',
  tolerance: 'pointer',
  drop: function(event, ui) {
        if(dropHelp){ 
           //clone and remove positioning from the helper element
           var newDiv = $(ui.helper).clone(false)
               .removeClass('ui-draggable-dragging')
               .css({position:'relative', left:-0, top:-55});            
           $(this).append(newDiv);
        
        //drop the draggable source element
        } 
		
		else {
           $(this).append(ui.draggable); } 
		   $('#q7').fadeOut(1000);
	       $('#q72').delay(1000).fadeIn(1000);
	}
	
   });
   
  
   
   $('#id7').droppable({
  accept: '#lasercutterq, #cncrouterq, #electronicsq, #micromillq, #vinylcutterq, #3dprinterq, #2dq, #3dq',
  tolerance: 'pointer',
  drop: function(event){
  incorrectdrop--;
  h7++;
  $('#lifecounter').html(function(i, val) { return +val-1 });
  $('#lifecounter').animate({color: 'red'});
  $('#lifecounter').animate({color: 'black'});
  $('.dropbox').animate({backgroundColor: 'rgba(144,0,2,0.30)'});
  $('.dropbox').animate({backgroundColor: 'rgba(0,0,0,0.12)'});

  if (incorrectdrop === 0){ $('body').addClass('animated shake');
  $('div[id^="q"]').hide();
  $('#wrongpopup').show(); };
  
   if (h7 === 1){  
  $('#h7').fadeOut(800, function(){ $(this).html('<strong style="color: purple" class="animated"> Hint: </strong> These are very large items, think about the machine that might produce these items <i> and </i> the type of design files it works from.').fadeIn(1040); 
  });
    };
  
  if (h7 === 2){  
  $('#h7').fadeOut(800, function(){ $(this).html('<strong style="color: purple" class="animated"> Hint: </strong> Think about the details, some components may be very flat but others may require a little more detail.').fadeIn(1040); 
  });
    };
  
  
  }
});

  <!-- QUESTION SEVEN 2 -->
   
   $('#db72').droppable({
  accept: '#cncrouterq',
  tolerance: 'pointer',
  drop: function(event, ui) {
        if(dropHelp){ 
           //clone and remove positioning from the helper element
           var newDiv = $(ui.helper).clone(false)
               .removeClass('ui-draggable-dragging')
               .css({position:'relative', left:-11, top:-68});            
           $(this).append(newDiv);
        
        //drop the draggable source element
        } 
		
		else {
           $(this).append(ui.draggable); } 
		   $('#cr72').fadeIn(300);
	}
	
   });
   
   $('#nx72').click(function(){
	   $('#q72').fadeOut(1000);
	   $('#q8').delay(1000).fadeIn(1000);
	   
   });
   
   $('#id72').droppable({
  accept: '#lasercutterq, #electronicsq, #micromillq, #vinylcutterq, #3dprinterq, #2dq, #3dq, #bothq',
  tolerance: 'pointer',
  drop: function(event){
  incorrectdrop--;
  h72++;
  $('#lifecounter').html(function(i, val) { return +val-1 });
  $('#lifecounter').animate({color: 'red'});
  $('#lifecounter').animate({color: 'black'});
  $('.dropbox').animate({backgroundColor: 'rgba(144,0,2,0.30)'});
  $('.dropbox').animate({backgroundColor: 'rgba(0,0,0,0.12)'});

  if (incorrectdrop === 0){ $('body').addClass('animated shake');
  $('div[id^="q"]').hide();
  $('#wrongpopup').show(); };
  
  if (h72 === 1){  
  $('#h72').fadeOut(800, function(){ $(this).html('<strong style="color: purple" class="animated"> Hint: </strong> These are very large items.').fadeIn(1040); 
  });
    };
  
  
  }
   });
   
   <!-- QUESTION EIGHT -->
   
   $('#db8').droppable({
  accept: '#3dprinterq',
  tolerance: 'pointer',
  drop: function(event, ui) {
        if(dropHelp){ 
           //clone and remove positioning from the helper element
           var newDiv = $(ui.helper).clone(false)
               .removeClass('ui-draggable-dragging')
               .css({position:'relative', left:-11, top:-68});            
           $(this).append(newDiv);
        
        //drop the draggable source element
        } 
		
		else {
           $(this).append(ui.draggable); } 
		   $('#cr8').fadeIn(300);
	}
	
   });
   
   $('#nx8').click(function(){
	   $('#q8').fadeOut(1000);
	   $('#q9').delay(1000).fadeIn(1000);
	   
   });
   
   $('#id8').droppable({
  accept: '#lasercutterq, #cncrouterq, #electronicsq, #micromillq, #vinylcutterq, #2dq, #3dq, #bothq',
  tolerance: 'pointer',
  drop: function(event){
  incorrectdrop--;
  $('#lifecounter').html(function(i, val) { return +val-1 });
  $('#lifecounter').animate({color: 'red'});
  $('#lifecounter').animate({color: 'black'});
  $('.dropbox').animate({backgroundColor: 'rgba(144,0,2,0.30)'});
  $('.dropbox').animate({backgroundColor: 'rgba(0,0,0,0.12)'});

  if (incorrectdrop === 0){ $('body').addClass('animated shake');
  $('div[id^="q"]').hide();
  $('#wrongpopup').show(); };
  }
   });
   
      <!-- QUESTION NINE -->
   
   $('#db9').droppable({
  accept: '#lasercutterq',
  tolerance: 'pointer',
  drop: function(event, ui) {
        if(dropHelp){ 
           //clone and remove positioning from the helper element
           var newDiv = $(ui.helper).clone(false)
               .removeClass('ui-draggable-dragging')
               .css({position:'relative', left:-11, top:-68});            
           $(this).append(newDiv);
        
        //drop the draggable source element
        } 
		
		else {
           $(this).append(ui.draggable); } 
		   $('#cr9').fadeIn(300);
	}
	
   });
   
   $('#nx9').click(function(){
	   $('#q9').fadeOut(1000);
	   $('#q10').delay(1000).fadeIn(1000);
	   
   });
   
   $('#id9').droppable({
  accept: '#cncrouterq, #electronicsq, #micromillq, #vinylcutterq, #3dprinterq, #2dq, #3dq, #bothq',
  tolerance: 'pointer',
  drop: function(event){
  incorrectdrop--;
  $('#lifecounter').html(function(i, val) { return +val-1 });
  $('#lifecounter').animate({color: 'red'});
  $('#lifecounter').animate({color: 'black'});
  $('.dropbox').animate({backgroundColor: 'rgba(144,0,2,0.30)'});
  $('.dropbox').animate({backgroundColor: 'rgba(0,0,0,0.12)'});

  if (incorrectdrop === 0){ $('body').addClass('animated shake');
  $('div[id^="q"]').hide();
  $('#wrongpopup').show(); };
  }
   });
   
   <!-- QUESTION TEN -->
   
   $('#db10').droppable({
  accept: '#2dq',
  tolerance: 'pointer',
  drop: function(event, ui) {
        if(dropHelp){ 
           //clone and remove positioning from the helper element
           var newDiv = $(ui.helper).clone(false)
               .removeClass('ui-draggable-dragging')
               .css({position:'relative', left:-11, top:-75});            
           $(this).append(newDiv);
        
        //drop the draggable source element
        } 
		
		else {
           $(this).append(ui.draggable); } 
		   $('#q10').fadeOut(1000);
	       $('#q102').delay(1000).fadeIn(1000);
	}
	
   });
   
  
   
   $('#id10').droppable({
  accept: '#lasercutterq, #cncrouterq, #electronicsq, #micromillq, #vinylcutterq, #3dprinterq, #3dq, #bothq',
  tolerance: 'pointer',
  drop: function(event){
  incorrectdrop--;
  h10++;
  $('#lifecounter').html(function(i, val) { return +val-1 });
  $('#lifecounter').animate({color: 'red'});
  $('#lifecounter').animate({color: 'black'});
  $('.dropbox').animate({backgroundColor: 'rgba(144,0,2,0.30)'});
  $('.dropbox').animate({backgroundColor: 'rgba(0,0,0,0.12)'});

  if (incorrectdrop === 0){ $('body').addClass('animated shake');
  $('div[id^="q"]').hide();
  $('#wrongpopup').show(); };
  
   if (h10 === 1){  
  $('#h10').fadeOut(800, function(){ $(this).html('<strong style="color: purple" class="animated"> Hint: </strong> Which computer-aided design software will be the best to use for creating the box-like shape of this product.').fadeIn(1040); 
  });
    };
  
  if (h10 === 2){  
  $('#h10').fadeOut(800, function(){ $(this).html('<strong style="color: purple" class="animated"> Hint: </strong> This is a product that has flat sides and very little detail.').fadeIn(1040); 
  });
    };
  
  
  }
});

<!-- QUESTION TEN 2 -->
   
   $('#db102').droppable({
  accept: '#lasercutterq',
  tolerance: 'pointer',
  drop: function(event, ui) {
        if(dropHelp){ 
           //clone and remove positioning from the helper element
           var newDiv = $(ui.helper).clone(false)
               .removeClass('ui-draggable-dragging')
               .css({position:'relative', left:-11, top:-68});            
           $(this).append(newDiv);
        
        //drop the draggable source element
        } 
		
		else {
           $(this).append(ui.draggable); } 
		   $('#q102').fadeOut(1000);
	       $('#q103').delay(1000).fadeIn(1000);
	}
	
   });
   
  
   
   $('#id102').droppable({
  accept: '#cncrouterq, #electronicsq, #micromillq, #vinylcutterq, #3dprinterq, #2dq, #3dq, #bothq',
  tolerance: 'pointer',
  drop: function(event){
  incorrectdrop--;
  h102++;
  $('#lifecounter').html(function(i, val) { return +val-1 });
  $('#lifecounter').animate({color: 'red'});
  $('#lifecounter').animate({color: 'black'});
  $('.dropbox').animate({backgroundColor: 'rgba(144,0,2,0.30)'});
  $('.dropbox').animate({backgroundColor: 'rgba(0,0,0,0.12)'});

  if (incorrectdrop === 0){ $('body').addClass('animated shake');
  $('div[id^="q"]').hide();
  $('#wrongpopup').show(); };
  
  if (h102 === 1){  
  $('#h102').fadeOut(800, function(){ $(this).html("<strong style='color: purple' class='animated'> Hint: </strong> Think about the scale of this product <i> and </i> the type of materials that are often used to create doll's houses.").fadeIn(1040); 
  });
    };
  
  if (h102 === 2){  
  $('#h102').fadeOut(800, function(){ $(this).html('<strong style="color: purple" class="animated"> Hint: </strong> Which machine works from 2D design files.').fadeIn(1040);
   });
     };
  
  
  }
});

<!-- QUESTION TEN 3 -->
   
   $('#db103').droppable({
  accept: '#3dq',
  tolerance: 'pointer',
  drop: function(event, ui) {
        if(dropHelp){ 
           //clone and remove positioning from the helper element
           var newDiv = $(ui.helper).clone(false)
               .removeClass('ui-draggable-dragging')
               .css({position:'relative', left:-10, top:-72});            
           $(this).append(newDiv);
        
        //drop the draggable source element
        } 
		
		else {
           $(this).append(ui.draggable); } 
		   $('#q103').fadeOut(1000);
	       $('#q104').delay(1000).fadeIn(1000);
	}
	
   });
   
  
   
   $('#id103').droppable({
  accept: '#lasercutterq, #cncrouterq, #electronicsq, #micromillq, #vinylcutterq, #3dprinterq, #2dq, #bothq',
  tolerance: 'pointer',
  drop: function(event){
  incorrectdrop--;
  h103++;
  $('#lifecounter').html(function(i, val) { return +val-1 });
  $('#lifecounter').animate({color: 'red'});
  $('#lifecounter').animate({color: 'black'});
  $('.dropbox').animate({backgroundColor: 'rgba(144,0,2,0.30)'});
  $('.dropbox').animate({backgroundColor: 'rgba(0,0,0,0.12)'});

  if (incorrectdrop === 0){ $('body').addClass('animated shake');
  $('div[id^="q"]').hide();
  $('#wrongpopup').show(); };
  
  if (h103 === 1){  
  $('#h103').fadeOut(800, function(){ $(this).html('<strong style="color: purple" class="animated"> Hint: </strong> Will this product require a lot of detail or very little detail?').fadeIn(1040); 
  });
    };
	
	if (h103 === 2){  
  $('#h103').fadeOut(800, function(){ $(this).html('<strong style="color: purple" class="animated"> Hint: </strong> Think about the machine that might produce this item <i> and </i> the type of design file it works from.').fadeIn(1040);
   });
     };
  
  }
});

<!-- QUESTION TEN 4 -->
   
   $('#db104').droppable({
  accept: '#3dprinterq',
  tolerance: 'pointer',
  drop: function(event, ui) {
        if(dropHelp){ 
           //clone and remove positioning from the helper element
           var newDiv = $(ui.helper).clone(false)
               .removeClass('ui-draggable-dragging')
               .css({position:'relative', left:-11, top:-68});            
           $(this).append(newDiv);
        
        //drop the draggable source element
        } 
		
		else {
           $(this).append(ui.draggable); } 
		   $('#q104').fadeOut(1000);
	       $('#q105').delay(1000).fadeIn(1000);
	}
	
   });
   
  
   
   $('#id104').droppable({
  accept: '#lasercutterq, #cncrouterq, #electronicsq, #micromillq, #vinylcutterq, #2dq, #3dq, #bothq',
  tolerance: 'pointer',
  drop: function(event){
  incorrectdrop--;
  h104++;
  $('#lifecounter').html(function(i, val) { return +val-1 });
  $('#lifecounter').animate({color: 'red'});
  $('#lifecounter').animate({color: 'black'});
  $('.dropbox').animate({backgroundColor: 'rgba(144,0,2,0.30)'});
  $('.dropbox').animate({backgroundColor: 'rgba(0,0,0,0.12)'});

  if (incorrectdrop === 0){ $('body').addClass('animated shake');
  $('div[id^="q"]').hide();
  $('#wrongpopup').show(); };
  
   if (h104 === 1){  
  $('#h104').fadeOut(800, function(){ $(this).html("<strong style='color: purple' class='animated'> Hint: </strong> Which machine produces plastic models and the amount of detail that you'll require for your chosen CAD file-type.").fadeIn(1040); 
  });
    };
  
  if (h104 === 2){  
  $('#h104').fadeOut(800, function(){ $(this).html('<strong style="color: purple" class="animated"> Hint: </strong> Which machine works from 3D design files.').fadeIn(1040); 
  });
    };
  
  }
});

      <!-- QUESTION TEN 5 -->
   
   $('#db105').droppable({
  accept: '#lasercutterq',
  tolerance: 'pointer',
  drop: function(event, ui) {
        if(dropHelp){ 
           //clone and remove positioning from the helper element
           var newDiv = $(ui.helper).clone(false)
               .removeClass('ui-draggable-dragging')
               .css({position:'relative', left:-11, top:-68});            
           $(this).append(newDiv);
        
        //drop the draggable source element
        } 
		
		else {
           $(this).append(ui.draggable); } 
		   $('#cr105').fadeIn(300);
	}
	
   });
   
   $('#nx105').click(function(){
	   $('#q105').fadeOut(1000);
	   $('#q11').delay(1000).fadeIn(1000);
	   
   });
   
   $('#id105').droppable({
  accept: '#cncrouterq, #electronicsq, #micromillq, #3dprinterq, #vinylcutterq, #2dq, #3dq, #bothq',
  tolerance: 'pointer',
  drop: function(event){
  incorrectdrop--;
  h105++;
  $('#lifecounter').html(function(i, val) { return +val-1 });
  $('#lifecounter').animate({color: 'red'});
  $('#lifecounter').animate({color: 'black'});
  $('.dropbox').animate({backgroundColor: 'rgba(144,0,2,0.30)'});
  $('.dropbox').animate({backgroundColor: 'rgba(0,0,0,0.12)'});

  if (incorrectdrop === 0){ $('body').addClass('animated shake');
  $('div[id^="q"]').hide();
  $('#wrongpopup').show(); };
  
  if (h105 === 1){  
  $('#h105').fadeOut(800, function(){ $(this).html('<strong style="color: purple" class="animated"> Hint: </strong> Which machine works with the type of material that this product might be made out of.').fadeIn(1040); 
  });
    };
  
  }
   });

   <!-- QUESTION ELEVEN -->
   
   $('#db11').droppable({
  accept: '#electronicsq',
  tolerance: 'pointer',
  drop: function(event, ui) {
        if(dropHelp){ 
           //clone and remove positioning from the helper element
           var newDiv = $(ui.helper).clone(false)
               .removeClass('ui-draggable-dragging')
               .css({position:'relative', left:-11, top:-68});            
           $(this).append(newDiv);
        
        //drop the draggable source element
        } 
		
		else {
           $(this).append(ui.draggable); } 
		   $('#q11').fadeOut(1000);
	       $('#q112').delay(1000).fadeIn(1000);
	}
	
   });
   
  
   
   $('#id11').droppable({
  accept: '#lasercutterq, #cncrouterq, #micromillq, #vinylcutterq, #3dprinterq, #2dq, #3dq, #bothq',
  tolerance: 'pointer',
  drop: function(event){
  incorrectdrop--;
  $('#lifecounter').html(function(i, val) { return +val-1 });
  $('#lifecounter').animate({color: 'red'});
  $('#lifecounter').animate({color: 'black'});
  $('.dropbox').animate({backgroundColor: 'rgba(144,0,2,0.30)'});
  $('.dropbox').animate({backgroundColor: 'rgba(0,0,0,0.12)'});

  if (incorrectdrop === 0){ $('body').addClass('animated shake');
  $('div[id^="q"]').hide();
  $('#wrongpopup').show(); };
  }
});


   <!-- QUESTION ELEVEN 2 -->
   
   $('#db112').droppable({
  accept: '#3dq',
  tolerance: 'pointer',
  drop: function(event, ui) {
        if(dropHelp){ 
           //clone and remove positioning from the helper element
           var newDiv = $(ui.helper).clone(false)
               .removeClass('ui-draggable-dragging')
               .css({position:'relative', left:-11, top:-72});            
           $(this).append(newDiv);
        
        //drop the draggable source element
        } 
		
		else {
           $(this).append(ui.draggable); } 
		   $('#q112').fadeOut(1000);
	       $('#q113').delay(1000).fadeIn(1000);
	}
	
   });
   
  
   
   $('#id112').droppable({
  accept: '#lasercutterq, #cncrouterq, #electronicsq, #micromillq, #vinylcutterq, #3dprinterq, #2dq, #bothq',
  tolerance: 'pointer',
  drop: function(event){
  incorrectdrop--;
  h112++;
  $('#lifecounter').html(function(i, val) { return +val-1 });
  $('#lifecounter').animate({color: 'red'});
  $('#lifecounter').animate({color: 'black'});
  $('.dropbox').animate({backgroundColor: 'rgba(144,0,2,0.30)'});
  $('.dropbox').animate({backgroundColor: 'rgba(0,0,0,0.12)'});

  if (incorrectdrop === 0){ $('body').addClass('animated shake');
  $('div[id^="q"]').hide();
  $('#wrongpopup').show(); };
  
    if (h112 === 1){  
  $('#h112').fadeOut(800, function(){ $(this).html('<strong style="color: purple" class="animated"> Hint: </strong> This object has lots of curves and very small details. Which design software do you need to use.').fadeIn(1040);
   });
     };
  
  if (h112 === 2){  
  $('#h112').fadeOut(800, function(){ $(this).html('<strong style="color: purple" class="animated"> Hint: </strong> Think about the details, will this object require just one plane or multiple planes to design it?').fadeIn(1040);
   });
     };
  
  }
});

   <!-- QUESTION ELEVEN 3 -->
   
   $('#db113').droppable({
  accept: '#3dprinterq',
  tolerance: 'pointer',
  drop: function(event, ui) {
        if(dropHelp){ 
           //clone and remove positioning from the helper element
           var newDiv = $(ui.helper).clone(false)
               .removeClass('ui-draggable-dragging')
               .css({position:'relative', left:-11, top:-68});            
           $(this).append(newDiv);
        
        //drop the draggable source element
        } 
		
		else {
           $(this).append(ui.draggable); } 
		   $('#q113').fadeOut(1000);
	       $('#q114').delay(1000).fadeIn(1000);
	}
	
   });
   
  
   
   $('#id113').droppable({
  accept: '#cncrouterq, #electronicsq, #micromillq, #vinylcutterq, #lasercutterq, #2dq, #3dq, #bothq',
  tolerance: 'pointer',
  drop: function(event){
  incorrectdrop--;
  h113++;
  $('#lifecounter').html(function(i, val) { return +val-1 });
  $('#lifecounter').animate({color: 'red'});
  $('#lifecounter').animate({color: 'black'});
  $('.dropbox').animate({backgroundColor: 'rgba(144,0,2,0.30)'});
  $('.dropbox').animate({backgroundColor: 'rgba(0,0,0,0.12)'});

  if (incorrectdrop === 0){ $('body').addClass('animated shake');
  $('div[id^="q"]').hide();
  $('#wrongpopup').show(); };
  
     if (h113 === 1){  
  $('#h113').fadeOut(800, function(){ $(this).html('<strong style="color: purple" class="animated"> Hint: </strong> Think about the machine that works with the type material that this product might be made out of.').fadeIn(1040); 
  });
    };
  
  if (h113 === 2){  
  $('#h113').fadeOut(800, function(){ $(this).html('<strong style="color: purple" class="animated"> Hint: </strong> Which computer-aided design software did you use to create your model? You now need to pick the corresponding machine.').fadeIn(1040); 
  });
    };
  
  }
});

     <!-- QUESTION ELEVEN 4 -->
   
   $('#db114').droppable({
  accept: '#micromillq',
  tolerance: 'pointer',
  drop: function(event, ui) {
        if(dropHelp){ 
           //clone and remove positioning from the helper element
           var newDiv = $(ui.helper).clone(false)
               .removeClass('ui-draggable-dragging')
               .css({position:'relative', left:-11, top:-68});            
           $(this).append(newDiv);
        
        //drop the draggable source element
        } 
		
		else {
           $(this).append(ui.draggable); } 
		   $('#cr114').fadeIn(300);
	}
	
   });
   
   $('#nx114').click(function(){
	   $('#q114').fadeOut(1000);
	   $('#q12').delay(1000).fadeIn(1000);
	   
   });
   
   $('#id114').droppable({
  accept: '#lasercutterq, #cncrouterq, #electronicsq, #vinylcutterq, #3dprinterq, #2dq, #3dq, #bothq',
  tolerance: 'pointer',
  drop: function(event){
  incorrectdrop--;
  h114++;
  $('#lifecounter').html(function(i, val) { return +val-1 });
  $('#lifecounter').animate({color: 'red'});
  $('#lifecounter').animate({color: 'black'});
  $('.dropbox').animate({backgroundColor: 'rgba(144,0,2,0.30)'});
  $('.dropbox').animate({backgroundColor: 'rgba(0,0,0,0.12)'});

  if (incorrectdrop === 0){ $('body').addClass('animated shake');
  $('div[id^="q"]').hide();
  $('#wrongpopup').show(); };
  
      if (h114 === 1){  
  $('#h114').fadeOut(800, function(){ $(this).html('<strong style="color: purple" class="animated"> Hint: </strong> Which machine specialises in producing circuit boards').fadeIn(1040); 
  });
    };

  }
   });

 <!-- QUESTION TWELVE -->
   
   $('#db12').droppable({
  accept: '#2dq',
  tolerance: 'pointer',
  drop: function(event, ui) {
        if(dropHelp){ 
           //clone and remove positioning from the helper element
           var newDiv = $(ui.helper).clone(false)
               .removeClass('ui-draggable-dragging')
               .css({position:'relative', left:-11, top:-75});            
           $(this).append(newDiv);
        
        //drop the draggable source element
        } 
		
		else {
           $(this).append(ui.draggable); } 
		   $('#q12').fadeOut(1000);
	       $('#q122').delay(1000).fadeIn(1000);
	}
	
   });
   
  
   
   $('#id12').droppable({
  accept: '#lasercutterq, #cncrouterq, #electronicsq, #micromillq, #vinylcutterq, #3dprinterq, #3dq, #bothq',
  tolerance: 'pointer',
  drop: function(event){
  incorrectdrop--;
  h12++;
  $('#lifecounter').html(function(i, val) { return +val-1 });
  $('#lifecounter').animate({color: 'red'});
  $('#lifecounter').animate({color: 'black'});
  $('.dropbox').animate({backgroundColor: 'rgba(144,0,2,0.30)'});
  $('.dropbox').animate({backgroundColor: 'rgba(0,0,0,0.12)'});

  if (incorrectdrop === 0){ $('body').addClass('animated shake');
  $('div[id^="q"]').hide();
  $('#wrongpopup').show(); };
  
       if (h12 === 1){  
  $('#h12').fadeOut(800, function(){ $(this).html('<strong style="color: purple" class="animated"> Hint: </strong> Using computer-aided design software, will it require multiple planes or just one plane to design these products?').fadeIn(1040); 
  });
    };
  
  if (h12 === 2){  
  $('#h12').fadeOut(800, function(){ $(this).html('<strong style="color: purple" class="animated"> Hint: </strong> Does your product contain details in multiple planes? If not, which type of software should you be using.').fadeIn(1040);
   });
     };
  
  }
});

<!-- QUESTION TWELVE 2 -->

   $('#db122').droppable({
  accept: '#vinylcutterq',
  tolerance: 'pointer',
  drop: function(event, ui) {
        if(dropHelp){ 
           //clone and remove positioning from the helper element
           var newDiv = $(ui.helper).clone(false)
               .removeClass('ui-draggable-dragging')
               .css({position:'relative', left:-11, top:-68});            
           $(this).append(newDiv);
        
        //drop the draggable source element
        } 
		
		else {
           $(this).append(ui.draggable); } 
		   $('#cr122').fadeIn(300);
	}
	
   });
   
   $('#nx122').click(function(){
	   $('#q122').fadeOut(1000);
	   
   });
   
   $('#id122').droppable({
  accept: '#lasercutterq, #cncrouterq, #electronicsq, #micromillq, #3dprinterq, #2dq, #3dq, #bothq',
  tolerance: 'pointer',
  drop: function(event){
  incorrectdrop--;
  h122++;
  $('#lifecounter').html(function(i, val) { return +val-1 });
  $('#lifecounter').animate({color: 'red'});
  $('#lifecounter').animate({color: 'black'});
  $('.dropbox').animate({backgroundColor: 'rgba(144,0,2,0.30)'});
  $('.dropbox').animate({backgroundColor: 'rgba(0,0,0,0.12)'});

  if (incorrectdrop === 0){ $('body').addClass('animated shake');
  $('div[id^="q"]').hide();
  $('#wrongpopup').show(); };
  
    if (h122 === 1){  
  $('#h122').fadeOut(800, function(){ $(this).html('<strong style="color: purple" class="animated"> Hint: </strong> Think about what each machine is used for.').fadeIn(1040); 
  });
    };
  
  }
   });



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


});

function pictureChange1()
{
document.getElementById("fls").src="imgs/production/quizscene/FLfullcncrouterq.png";

}

function pictureChangeBack1()
{
document.getElementById("fls").src="imgs/production/quizscene/FLfullq.png";
}

function pictureChange2()
{
document.getElementById("fls").src="imgs/production/quizscene/FLfulllasercutterq.png";

}

function pictureChangeBack2()
{
document.getElementById("fls").src="imgs/production/quizscene/FLfullq.png";
}

function pictureChange3()
{
document.getElementById("fls").src="imgs/production/quizscene/FLfull3dprinterq.png";

}

function pictureChangeBack3()
{
document.getElementById("fls").src="imgs/production/quizscene/FLfullq.png";
}

function pictureChange4()
{
document.getElementById("fls").src="imgs/production/quizscene/FLfullmicromillq.png";

}

function pictureChangeBack4()
{
document.getElementById("fls").src="imgs/production/quizscene/FLfullq.png";
}

 function pictureChange5()
{
document.getElementById("fls").src="imgs/production/quizscene/FLfullvinylcutterq.png";

}

function pictureChangeBack5()
{
document.getElementById("fls").src="imgs/production/quizscene/FLfullq.png";
}

function pictureChange6()
{
document.getElementById("fls").src="imgs/production/quizscene/FLfullelectronicsq.png";

}

function pictureChangeBack6()
{
document.getElementById("fls").src="imgs/production/quizscene/FLfull	q.png";
}

function pictureChange7()
{
document.getElementById("fls").src="imgs/production/quizscene/FLfull2dq.png";

}

function pictureChangeBack7()
{
document.getElementById("fls").src="imgs/production/quizscene/FLfullq.png";
}

function pictureChange8()
{
document.getElementById("fls").src="imgs/production/quizscene/FLfull3dq.png";

}

function pictureChangeBack8()
{
document.getElementById("fls").src="imgs/production/quizscene/FLfullq.png";
}

function pictureChange9()
{
document.getElementById("fls").src="imgs/production/quizscene/FLfullbothq.png";

}

function pictureChangeBack9()
{
document.getElementById("fls").src="imgs/production/quizscene/FLfullq.png";
}

	  
</script>


</body>
</html>