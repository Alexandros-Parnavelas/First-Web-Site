<!DOCTYPE html>
<html>


<!-- for rate-->
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Font Awesome Icon Library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



<style>
    /*table, th, td ,*/ 
	div{
        border: none;
        border-collapse: collapse;
        background-color: transparent;
    }

    table, th, td, div {
        background-color: white;
        border: 1px solid black;
        width: 1200px;
    }

    th, td {
        padding: 5px;
    }

    body {
        background-image: url('fifa.jpg');
        background-image: no-repeat;
        background-attachment: fixed;
        background-size:  100%;
    }

    .button {
        background-color: black; /* Green */
        border: none;
        color: white;
        padding: 15px 32px;
        text-align:;
        text-decoration: none;
        display: inline-block;
        font-size: 20px;
        font-family: 'Comic Sans MS';
        margin: 4px 2px;
        cursor: pointer;
        -webkit-transition-duration: 0.4s; /* Safari */
        transition-duration: 0.4s;
	
    }

    .button{
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
    }

        .button:hover {
            box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
        }

    p {
        background-color: #4CAF50; /* Green */
        width: 15%;
        box-sizing: border-box;
        border: 2px solid pink;
        border-radius: 4px;
        font-size: 16px;
        background-color: black;
        background-position: 10px 10px;
        background-repeat: no-repeat;
        padding: 12px 20px 12px 40px;
    }

        p:focus{
            border: 3px solid #555;
        }
			
	.div1{background-color: transparent;
			border:none;}
</style>
</head>
<body>
	  
    <!-- create button -->
    <button class="button" type="button" onclick="loadDoc()" onclick="loadDoc3()">Video Games</button><br>
	<button class="button" type="button" onclick="loadDoc1()">About Us</button><br>
	<button class="button" type="button" onclick="loadDoc3()">Rate</button><br>
    <button class="button" type="button" onclick="loadDoc2()"> Cart</button>
	
	
    <br><br>
    <p>Genre: <input id="g_enres" type="text" placeholder="Genre" /> </p>


    <!-- create demo -->
    <br><br>

    <table id="demo">   </table>  
    <div   id="demo1">   </div>
    <div   id="demo2"> </div> 
	<div   id="demo3"> </div>



    <!--clock-->
    <div class="div1" style="text-align:center;padding:1em 0;">
        <h3>
            <a style="text-decoration:none;" href="https://www.zeitverschiebung.net/en/city/735927">
                <span style="color:gray;">Current local time in</span><br />Kastoriá, Greece
            </a>
        </h3> <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=en&size=medium&timezone=Europe%2FAthens" width="100%" height="115" frameborder="0" seamless></iframe>
    </div>


     <!--RSS NEWS-->
<!-- start sw-rss-feed code --> 
<h4 style="text-align:center"> 
<!-- start sw-rss-feed code --> 
<!-- start sw-rss-feed code --> 
<script type="text/javascript"> 
<!-- 
rssfeed_url = new Array(); 
rssfeed_url[0]="https://www.digitaltrends.com/gaming/";  
rssfeed_frame_width="600"; 
rssfeed_frame_height="100"; 
rssfeed_scroll="on"; 
rssfeed_scroll_step="6"; 
rssfeed_scroll_bar="off"; 
rssfeed_target="_blank"; 
rssfeed_font_size="12"; 
rssfeed_font_face=""; 
rssfeed_border="on"; 
rssfeed_css_url="https://feed.surfing-waves.com/css/style5.css"; 
rssfeed_title="on"; 
rssfeed_title_name=""; 
rssfeed_title_bgcolor="#3366ff"; 
rssfeed_title_color="#fff"; 
rssfeed_title_bgimage=""; 
rssfeed_footer="off"; 
rssfeed_footer_name="rss feed"; 
rssfeed_footer_bgcolor="#fff"; 
rssfeed_footer_color="#333"; 
rssfeed_footer_bgimage=""; 
rssfeed_item_title_length="50"; 
rssfeed_item_title_color="#666"; 
rssfeed_item_bgcolor="#fff"; 
rssfeed_item_bgimage=""; 
rssfeed_item_border_bottom="on"; 
rssfeed_item_source_icon="off"; 
rssfeed_item_date="off"; 
rssfeed_item_description="on"; 
rssfeed_item_description_length="120"; 
rssfeed_item_description_color="#666"; 
rssfeed_item_description_link_color="#333"; 
rssfeed_item_description_tag="off"; 
rssfeed_no_items="0"; 
rssfeed_cache = "5a4a8553d34907724c156d9fd0db610e"; 
//--> 
</script> 
<script type="text/javascript" src="//feed.surfing-waves.com/js/rss-feed.js"></script> 
<!-- The link below helps keep this service FREE, and helps other people find the SW widget. Please be cool and keep it! Thanks. --> 
<h2 style="color:#ccc;font-size:10px; text-align:center; width:600px;">powered by <a href="https://surfing-waves.com" rel="noopener" target="_blank" style="color:#ccc;">Surfing Waves</a>></h2> 
<!-- end sw-rss-feed code -->
</h4>






    <script>


        //Video Games
        function loadDoc() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    myFunction(this);
                }
            };
            xhttp.open("GET", "Videogames.xml", true);
            xhttp.send();
        }
		

        function myFunction(xml) {
            var i, a, g_enre;
             g_enre = document.getElementById("g_enres").value;
            //alert(genre);
            var xmlDoc = xml.responseXML;
            var table = "<tr><th>Genre</th><th>Title</th><th>System_requirements</th><th>Publish_date</th><th>Price</th><th>Rate</th><th>Id</th></tr>";
            var x = xmlDoc.getElementsByTagName("games");
            for (i = 0; i < x.length; i++) {
                a = x[i].getElementsByTagName("genre")[0].childNodes[0].nodeValue;
                if (a.includes(g_enre)) {
                    table += "<tr><td>" +
                        x[i].getElementsByTagName("genre")[0].childNodes[0].nodeValue +
                        "</td><td>" +
                        x[i].getElementsByTagName("title")[0].childNodes[0].nodeValue +
                        "</td><td>" +
                        x[i].getElementsByTagName("system_requirements")[0].childNodes[0].nodeValue +
                        "</td><td>" +
                        x[i].getElementsByTagName("publish_date")[0].childNodes[0].nodeValue +
                        "</td><td>" +
						x[i].getElementsByTagName("price")[0].childNodes[0].nodeValue +
                        "</td><td>" +
						x[i].getElementsByTagName("rate")[0].childNodes[0].nodeValue +
                        "</td><td>" +
                        x[i].getElementsByTagName("id")[0].childNodes[0].nodeValue +
                        "</td></tr>"
                        ;		
                }
				   
            }
            document.getElementById("demo").innerHTML = table;
			document.getElementById("demo1").innerHTML = "";
			document.getElementById("demo2").innerHTML = "";
			document.getElementById("demo3").innerHTML = "";
        }
			
			
			//Rate 
        function loadDoc3() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) 
				{ document.getElementById("demo3").innerHTML = this.responseText; 
				  }
				  	
            };
            xhttp.open("get", "rating_user.html", true);
            xhttp.send();
			
					document.getElementById("demo1").innerHTML = ""; 
					document.getElementById("demo2").innerHTML = ""; 
					document.getElementById("demo").innerHTML = "";
			
        }
			
			
			

          //About Us
        function loadDoc1() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) 
				{ document.getElementById("demo1").innerHTML = this.responseText;  
				  }
				
            };
            xhttp.open("get", "about.html", true);
            xhttp.send();
			
			      document.getElementById("demo2").innerHTML = ""; 
				  document.getElementById("demo").innerHTML = ""; 
			      document.getElementById("demo3").innerHTML = "";
			
        }

            //cart
              function loadDoc2() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) 
				{ document.getElementById("demo2").innerHTML = this.responseText; 
			      
				  }
            };
            xhttp.open("GET", "cart2.html", true);  
            xhttp.send();
			
			document.getElementById("demo1").innerHTML = ""; 
			document.getElementById("demo").innerHTML = "";
			document.getElementById("demo3").innerHTML = "";
        }

     
            function showgames(str) {
                if (str=="") {
                    document.getElementById("txtHint").innerHTML="";
                        return;
                         }
                if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp=new XMLHttpRequest();
                    } else {  // code for IE6, IE5
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                    }
                xmlhttp.onreadystatechange=function() {
                 if (this.readyState==4 && this.status==200) {
                    document.getElementById("txtHint").innerHTML=this.responseText;
                        }
                    }
                xmlhttp.open("GET","getgamestore.php?q="+str,true);
                xmlhttp.send();
                    }


    </script>
    
</body>
</html>
