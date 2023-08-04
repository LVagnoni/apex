<?php
	include("../../headerc.php");
	include ('connect.php');
	?>
	
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML lang=en-US><HEAD><TITLE>apexart :: Open Call Brochure Survey</TITLE>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-9ZR7Z9GRJQ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-9ZR7Z9GRJQ');
</script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="icon" href="https://www.apexart.org/favicon.png" type="image/x-icon" />	

<body>
<form action="formscript.php" method="post" >
	<table width="950" align="center" bgcolor="#FFFFFF" >

<tr valign="top"> 
          <td>&nbsp;</td>
          <td colspan="3" class="standardText"> 		          
            <style>
* {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  padding: 20px 15%;
  color: white;
  background-color: black;
}
form header {
  margin: 0 0 20px 0; 
}
form header div {
  font-size: 90%;
  color: #999;
}
form header h2 {
  margin: 0 0 5px 0;
}
form > div {
  clear: both;
  overflow: hidden;
  padding: 1px;
  margin: 0 0 10px 0;
}
form > div > fieldset > div > div {
  margin: 0 0 5px 0;
}
form > div > label,
legend {
  width: 25%;
  float: left;
  padding-right: 10px;
}
form > div > div,
form > div > fieldset > div {
  width: 75%;
  float: right;
}
form > div > fieldset label {
  font-size: 90%;
}
fieldset {
  border: 0;
  padding: 0;
}

input[type=text],
input[type=email],
input[type=url],
input[type=password],
textarea {
  width: 100%;
  border-top: 1px solid #ccc;
  border-left: 1px solid #ccc;
  border-right: 1px solid #eee;
  border-bottom: 1px solid #eee;
}
input[type=text],
input[type=email],
input[type=url],
input[type=password] {
  width: 50%;
}
input[type=text]:focus,
input[type=email]:focus,
input[type=url]:focus,
input[type=password]:focus,
textarea:focus {
  outline: 0;
  border-color: #4697e4;
}

@media (max-width: 600px) {
  form > div {
    margin: 0 0 15px 0; 
  }
  form > div > label,
  legend {
    width: 100%;
    float: none;
    margin: 0 0 5px 0;
  }
  form > div > div,
  form > div > fieldset > div {
    width: 100%;
    float: none;
  }
  input[type=text],
  input[type=email],
  input[type=url],
  input[type=password],
  textarea,
  select {
    width: 100%; 
  }
}
@media (min-width: 1200px) {
  form > div > label,
  legend {
    text-align: right;
  }
}

input[type=submit] {
    border-radius: 5px;
    border: 0;
    width: 180px;
    height:55px;
    font-family: Tahoma;
    background: #f4f4f4;
    /* Old browsers */
    background: -moz-linear-gradient(top, #f4f4f4 1%, #ededed 100%);
    /* FF3.6+ */
    background: -webkit-gradient(linear, left top, left bottom, color-stop(1%, #f4f4f4), color-stop(100%, #ededed));
    /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(top, #f4f4f4 1%, #ededed 100%);
    /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(top, #f4f4f4 1%, #ededed 100%);
    /* Opera 11.10+ */
    background: -ms-linear-gradient(top, #f4f4f4 1%, #ededed 100%);
    /* IE10+ */
    background: linear-gradient(to bottom, #f4f4f4 1%, #ededed 100%);
    /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f4f4f4', endColorstr='#ededed', GradientType=0);
    /* IE6-9 */
}
</style>

</HEAD>
<form action="#">
  <header>
    <br /><h2>Last apexart exhibition brochure?<br /></h2>

    <p>Since 1995 apexart has been printing and sending exhibition brochures to thousands of people. The brochures were meant to serve as a surrogate of a show, with a curatorial essay and images of the works so that regardless of location people could experience the exhibition. Our international mailing list of opt-in subscribers reached nearly 7,000 people for each exhibition and went to arts institutions and individuals in over 90 countries around the world. We have sent more than 1.25 MILLION brochures in 25 years.</p>

    <p>But times have changed, along with preferred modes of communication, and considerations for the environment and we are asking you to help us decide how to proceed. Many people still love printed materials and retain the brochures while others see them as a demand on the environment.</p>

    <p>Please help decide what to do.<br><br>

      Thank you.<br>

      apexart</p>


  </header>
  <div>
    <label class="desc" id="name" for="name">
      <h3>Name: 

</h3>
    </label>
  
    <div>
      <textarea id="name" name="name" spellcheck="true" rows="2" cols="5" tabindex="4"></textarea>
    </div>
  </div>
  <div>
    <label class="desc" id="email" for="email">
      <h3>Email: 

</h3>
    </label>
  
    <div>
      <textarea id="email" name="email" spellcheck="true" rows="2" cols="5" tabindex="4"></textarea>
    </div>
  </div>
  <div>
    <label class="desc" id="read" for="read">
      <h3>Do you read the mailed apexart brochures?</h3>
    </label>
  
    <div>
      <INPUT TYPE="radio" NAME="read" VALUE="y">Yes &nbsp;&nbsp;
      <INPUT TYPE="radio" NAME="read" VALUE="n">No
    </div>
  </div>
<br />
  <div>
    <label class="desc" id="stop" for="stop">
      <h3>Should we stop printing them and rely on alternative digital methods to distribute their content?</h3>
    </label>
  
    <div>
      <INPUT TYPE="radio" NAME="stop" VALUE="y">Yes &nbsp;&nbsp;
      <INPUT TYPE="radio" NAME="stop" VALUE="n">No
    </div>
  </div>
  <br />
  <div>
    <label class="desc" id="still" for="still">
      <h3>Should we continue to do a small print run of our brochures for you to still receive them in the post free of charge?

</h3>
    </label>
  
    <div>
      <INPUT TYPE="radio" NAME="still" VALUE="y">Yes &nbsp;&nbsp;
      <INPUT TYPE="radio" NAME="still" VALUE="n">No
    </div>
  </div>
<br />
<div>
    <label class="desc" id="contact" for="contact">
      <h3>If you answered yes to the above, please confirm your mailing address(es) so we know where to send the brochures. Please note we do not share your information with anyone.</h3>
    </label>
  
    <div>
      <textarea id="contact" name="contact" spellcheck="true" rows="5" cols="10" tabindex="4"></textarea>
    </div>
  </div>
<br />
<div>
    <label class="desc" id="ca" for="ca">
      <h3>If you were a curator or artist in an apexart exhibition, would it be important to you to have printed brochures sent to people around the world via snail mail?</h3>
    </label>
  
    <div>
      <INPUT TYPE="radio" NAME="ca" VALUE="y">Yes &nbsp;&nbsp;
      <INPUT TYPE="radio" NAME="ca" VALUE="n">No
    </div>
  </div>
  <br />
  <div>
    <label class="desc" id="digital" for="digital">
      <h3>Would you read a digital version of the brochure?</h3>
    </label>
  
    <div>
      <INPUT TYPE="radio" NAME="digital" VALUE="y">Yes &nbsp;&nbsp;
      <INPUT TYPE="radio" NAME="digital" VALUE="n">No
    </div>
  </div>
<br />
  <div>
    <label class="desc" id="signup" for="signup">
      <h3>Want to sign up for them here? We'll use your email address above if so.

</h3>
    </label>
  
    <div>
      <INPUT TYPE="radio" NAME="signup" VALUE="y">Yes &nbsp;&nbsp;
      <INPUT TYPE="radio" NAME="signup" VALUE="n">No
    </div>
  </div>
<br />
  <div>
    <label class="desc" id="thoughts" for="thoughts">
      <h3>Do you have any other thoughts or suggestions about the printed brochures?</h3>
    </label>
  
    <div>
      <textarea id="thoughts" name="thoughts" spellcheck="true" rows="8" cols="30" tabindex="4"></textarea>
    </div>
  </div>
    <br />
  
  
  <div>
    <div>
      <input id="saveForm" name="saveForm" type="submit" value="Submit">
    </div>
  </div>
  
<br /><br />

</form>
                
                
                
          </table>
<br \><br \><br \>

</body>
</html>