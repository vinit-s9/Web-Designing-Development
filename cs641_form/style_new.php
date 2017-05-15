label{display:inline-block;width:100px;margin-bottom:10px;}

		.form-style-1 {
    margin:10px auto;
    max-width: 400px;
    padding: 20px 12px 10px 20px;
    font: 13px "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}

.form-style-1 label{
    margin:0 0 3px 0;
    padding:0px;
    display:block;
    font-weight: bold;
}
.form-style-1 input[type=text],
.form-style-1 input[type=date],
.form-style-1 input[type=datetime],
.form-style-1 input[type=number],
.form-style-1 input[type=search],
.form-style-1 input[type=time],
.form-style-1 input[type=url],
.form-style-1 input[type=email],
textarea,
select{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    border:1px solid #BEBEBE;
    padding: 7px;
    margin:0px;
    -webkit-transition: all 0.30s ease-in-out;
    -moz-transition: all 0.30s ease-in-out;
    -ms-transition: all 0.30s ease-in-out;
    -o-transition: all 0.30s ease-in-out;
    outline: none; 
}
.form-style-1 input[type=text]:focus,
.form-style-1 input[type=date]:focus,
.form-style-1 input[type=datetime]:focus,
.form-style-1 input[type=number]:focus,
.form-style-1 input[type=search]:focus,
.form-style-1 input[type=time]:focus,
.form-style-1 input[type=url]:focus,
.form-style-1 input[type=email]:focus,
.form-style-1 textarea:focus,
.form-style-1 select:focus{
    -moz-box-shadow: 0 0 8px #88D5E9;
    -webkit-box-shadow: 0 0 8px #88D5E9;
    box-shadow: 0 0 8px #88D5E9;
    border: 1px solid #88D5E9;
}
.form-style-1 .field-divided{
    width: 49%;
}

.form-style-1 .field-long{
    width: 100%;
}
.form-style-1 .field-select{
    width: 100%;
}
.form-style-1 .field-textarea{
    height: 100px;
}
.form-style-1 input[type=submit], .form-style-1 input[type=button]{	
    background: #4B99AD;
    padding: 8px 15px 8px 15px;
    border: none;
    color: #fff;
}
.form-style-1 input[type=submit]:hover, .form-style-1 input[type=button]:hover{
    background: #4691A4;
    box-shadow:none;
    -moz-box-shadow:none;
    -webkit-box-shadow:none;
}
.form-style-1 .required{
    color:red;
}

body {
				background: <?php echo ($_COOKIE["bg"]); ?>;           
				text-align: center;
			    SCROLLBAR-BASE-COLOR: #56997A
				font: 13px "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}


body, td, th {
			 color: #666633;
			 font: 13px "Lucida Sans Unicode", "Lucida Grande", sans-serif;

}

h1,h2,h3,h4,h5 {

			 color: #663300;
			 text-align: center;
			 font: 13px "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}


img { 	
			border-style:
		    dotted;border-color:#663300;
		    border-width:4px;
}

li { 	
			text-align: center;
			font: 13px "Lucida Sans Unicode", "Lucida Grande", sans-serif;
			font-size: 14px;
}


A:visited {
         
			COLOR: #333399
}

A:hover {
	
			COLOR: #ff6600
}

.toptable {

			background-color: #ebebeb;
			width: 340px;
}


/* CONTACT PAGE FONT AND BACKGROUNDS */


.contact-text { 
				
			COLOR: #009900;
			font: 13px "Lucida Sans Unicode", "Lucida Grande", sans-serif;
			font-weight: bold; 
}


.backgrounds { 
            background-image: url("background.jpg");
		    background-repeat: repeat-y;
		    background-position: 0px 0px;
		    background-attachment: fixed;
}


 /*  CONTACT PAGE FORMS */


.shadeform	{ 

            font: 13px "Lucida Sans Unicode", "Lucida Grande", sans-serif;
			background-image: url("shadeform.gif");
			text-align: left;
			WIDTH: 180PX;
			BORDER: #000000 1px solid;
}
.textarea1 { 
			font: 13px "Lucida Sans Unicode", "Lucida Grande", sans-serif;
			background-image: url("shadeform.gif");
			WIDTH: 220PX;
			HEIGHT: 80PX;
			text-align: left;
			BORDER: #000000 1px solid;
}

.textarea { 
			font: 13px "Lucida Sans Unicode", "Lucida Grande", sans-serif;
			background-image: url("shadeform.gif");
			text-align: left;
			WIDTH: 275PX;
			HEIGHT: 135PX;
			BORDER: #000000 1px solid;
}

.dropdown {	
           COLOR: #333333;
		   WIDTH: 180PX;
		   font: 13px "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}



