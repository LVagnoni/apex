<?php
  include("../../header.php");
  include ('connect.php');
  ?>
  
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML lang=en-US><HEAD><TITLE>apexart :: New York City Fellowship Application Form</TITLE>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">

<script>
function toggle() {
 if( document.getElementById("hidethis").style.display=='none' ){
   document.getElementById("hidethis").style.display = 'table'; // set to the html tag you are hiding by its id
 }else{
   document.getElementById("hidethis").style.display = 'none';
 }
}
</script>

  <script type="text/javascript">
function checkWordCount(){
    s = document.getElementById("wordcount").value;
    s = s.replace(/(^\s*)|(\s*$)/gi,"");
    s = s.replace(/[ ]{2,}/gi," ");
    s = s.replace(/\n /,"\n");
    if (s.split(' ').length <= 198) {
        alert("Not enough words in the required fields.");
return false;
    }
}
</script>


<body>
<form action="formscript.php" method="post" >

  <style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{font-family:Helvetica, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:grey;}
.tg th{font-family:Helvetica, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:grey;}
.tg .tg-c3ow{border-color:inherit;text-align:center;vertical-align:top}
.tg .tg-us36{border-color:inherit;vertical-align:top}
@media screen and (max-width: 767px) {.tg {width: auto !important;}.tg col {width: auto !important;}.tg-wrap {overflow-x: auto;-webkit-overflow-scrolling: touch;}}
textarea {width: 98%; height: 98%; border:none;}
   </style>

<div class="tg-wrap"><table class="tg" align="center" style="undefined;table-layout: fixed; width: 700px">
<colgroup>
<col style="width: 168px">
<col style="width: 328px">
<col style="width: 150px">
</colgroup>
  <tr>
    <th class="tg-c3ow" colspan="3"><strong>apexart</strong> New York City Fellowship Application Form</th>
        </tr>
        <tr>
          <td class="tg-c3ow" colspan="3">Please complete all form fields and press the Submit button. </td>
        </tr>
        <tr>
          <td class="tg-us36">Name of recommender:</td>
          <td class="tg-us36" colspan="2"><input required style="width: 334px;" type="text" name="recommender"></td>
        </tr>
        <tr>
          <td class="tg-us36" colspan="3">What is your relationship to the recommender? (i.e. teacher, friend)</td>
        </tr>
        <tr>
          <td class="tg-us36" style="height: 100px;" colspan="3"><textarea name="relationship" required></textarea></td>
        </tr>
        <tr>
          <td class="tg-us36" colspan="3">How long have you known him/her?</td>
        </tr>
        <tr>
          <td class="tg-us36" style="height: 100px;" colspan="3"><textarea name="relationshipl" required></textarea></td>
        </tr>
        <tr>
          <td class="tg-us36">First name:</td>
          <td class="tg-us36" colspan="2"><input required style="width: 334px;" type="text" name="first"></td>
        </tr>
        <tr>
          <td class="tg-us36">Last name:</td>
          <td class="tg-us36" colspan="2"><input required style="width: 334px;" type="text" name="last"></td>
        </tr>
        <tr>
          <td class="tg-us36">Address:</td>
          <td class="tg-us36" colspan="2"><input required style="width: 334px;" type="text" name="address"></td>
        </tr>
        <tr>
          <td class="tg-us36">Phone:</td>
          <td class="tg-us36" colspan="2"><input required style="width: 334px;" type="text" name="phone"></td>
        </tr>
        <tr>
          <td class="tg-us36">Email:</td>
          <td class="tg-us36" colspan="2"><input required style="width: 334px;" type="text" name="email"></td></td>
        </tr>
        <tr>
          <td class="tg-us36">Birthdate:</td>
          <td class="tg-us36" colspan="2"><input required style="width: 334px;" type="text" name="birth"></td>
        </tr>
        <tr>
          <td class="tg-us36">Citizenship:</td>
          <td class="tg-us36" colspan="2"><input required style="width: 334px;" type="text" name="citizen"></td>
        </tr>
        <tr>
          <td class="tg-us36">Country of Residence:</td>
          <td class="tg-us36" colspan="2"><input required style="width: 334px;" type="text" name="residence"></td>
        </tr>
        <tr>
          <td class="tg-us36" colspan="3">What languages do you speak?</td>
        </tr>
        <tr>
          <td class="tg-us36" style="height: 100px;" colspan="3"><textarea name="language" required></textarea></td>
        </tr>
        <tr>
          <td class="tg-us36" colspan="3">Emergency Contact:</td>
        </tr>
        <tr>
          <td class="tg-us36">Name:</td>
          <td class="tg-us36" colspan="2"><input required style="width: 334px;" type="text" name="ername"></td>
        </tr>
        <tr>
          <td class="tg-us36">Phone:</td>
          <td class="tg-us36" colspan="2"><input required style="width: 334px;" type="text" name="erphone"></td>
        </tr>
        <tr>
          <td class="tg-us36">Email:</td>
          <td class="tg-us36" colspan="2"><input required style="width: 334px;" type="text" name="eremail"></td>
        </tr>
        <tr>
          <td class="tg-us36">Relationship:</td>
          <td class="tg-us36" colspan="2"><input required style="width: 334px;" type="text" name="errel"></td>
        </tr>
        <tr>
          <td class="tg-us36" colspan="3">Please list the destinations and reasons for your travel over the past five years, beginning with the most recent including residencies/workshops/seminars you’ve participated in
          </td>
        </tr>
          <tr>
            <td class="tg-us36">Destination:</td>
            <td class="tg-us36" colspan="2"><input style="width: 334px;" type="text" name="dest1"></td>
          </tr>
          <tr>
            <td class="tg-us36">Date of Travel:</td>
            <td class="tg-us36" colspan="2"><input style="width: 334px;" type="text" name="date1"></td>
          </tr>
          <tr>
            <td class="tg-us36">Reason for Travel:</td>
            <td class="tg-us36" colspan="2"><input style="width: 334px;" type="text" name="reason1"></td>
          </tr>
          <tr>
            <td class="tg-us36">Takeaway of Travel:</td>
            <td class="tg-us36" colspan="2"><input style="width: 334px;" type="text" name="take1"></td>
          </tr>
          <tr>
            <td class="tg-us36">Travel Sponsor:</td>
            <td class="tg-us36" colspan="2"><input style="width: 334px;" type="text" name="sponsor1"></td>
          </tr>
          <tr>
            <td class="tg-us36">Destination:</td>
            <td class="tg-us36" colspan="2"><input style="width: 334px;" type="text" name="dest2"></td>
          </tr>
          <tr>
            <td class="tg-us36">Date of Travel:</td>
            <td class="tg-us36" colspan="2"><input style="width: 334px;" type="text" name="date2"></td>
          </tr>
          <tr>
            <td class="tg-us36">Reason for Travel:</td>
            <td class="tg-us36" colspan="2"><input style="width: 334px;" type="text" name="reason2"></td>
          </tr>
          <tr>
            <td class="tg-us36">Takeaway of Travel:</td>
            <td class="tg-us36" colspan="2"><input style="width: 334px;" type="text" name="take2"></td>
          </tr>
          <tr >
            <td class="tg-us36">Travel Sponsor:</td>
            <td class="tg-us36" colspan="2"><input style="width: 334px;" type="text" name="sponsor2"></td>
          </tr>
          <tr>
            <td class="tg-us36" colspan="3"><span onClick="toggle();"><strong>+</strong></span></td>
          </tr>
</table>
<table class="tg" id="hidethis" style="display:none;" align="center" style="width: 700px">
<colgroup>
<col style="width: 182px">
<col style="width: 368px">
<col style="width: 150px">
</colgroup>
          <tr>
            <td class="tg-us36" colspan="1">Destination:</td>
            <td class="tg-us36" colspan="2"><input style="width: 334px;" type="text" name="dest3"></td>
          </tr>
          <tr>
            <td class="tg-us36" colspan="1">Date of Travel:</td>
            <td class="tg-us36" colspan="2"><input style="width: 334px;" type="text" name="date3"></td>
          </tr>
          <tr>
            <td class="tg-us36" colspan="1">Reason for Travel:</td>
            <td class="tg-us36" colspan="2"><input style="width: 334px;" type="text" name="reason3"></td>
          </tr>
          <tr>
            <td class="tg-us36" colspan="1">Takeaway of Travel:</td>
            <td class="tg-us36" colspan="2"><input style="width: 334px;" type="text" name="take3"></td>
          </tr>
          <tr>
            <td class="tg-us36" colspan="1">Travel Sponsor:</td>
            <td class="tg-us36" colspan="2"><input style="width: 334px;" type="text" name="sponsor3"></td>
          </tr>
          <tr>
            <td class="tg-us36" colspan="1">Destination:</td>
            <td class="tg-us36" colspan="2"><input style="width: 334px;" type="text" name="dest4"></td>
          </tr>
          <tr>
            <td class="tg-us36" colspan="1">Date of Travel:</td>
            <td class="tg-us36" colspan="2"><input style="width: 334px;" type="text" name="date4"></td>
          </tr>
          <tr>
            <td class="tg-us36" colspan="1">Reason for Travel:</td>
            <td class="tg-us36" colspan="2"><input style="width: 334px;" type="text" name="reason4"></td>
          </tr>
          <tr>
            <td class="tg-us36" colspan="1">Takeaway of Travel:</td>
            <td class="tg-us36" colspan="2"><input style="width: 334px;" type="text" name="take4"></td>
          </tr>
          <tr>
            <td class="tg-us36" colspan="1">Travel Sponsor:</td>
            <td class="tg-us36" colspan="2"><input style="width: 334px;" type="text" name="sponsor4"></td>
          </tr>
          <tr>
            <td class="tg-us36" colspan="1">Destination:</td>
            <td class="tg-us36" colspan="2"><input style="width: 334px;" type="text" name="dest5"></td>
          </tr>
          <tr>
            <td class="tg-us36" colspan="1">Date of Travel:</td>
            <td class="tg-us36" colspan="2"><input style="width: 334px;" type="text" name="date5"></td>
          </tr>
          <tr>
            <td class="tg-us36" colspan="1">Reason for Travel:</td>
            <td class="tg-us36" colspan="2"><input style="width: 334px;" type="text" name="reason5"></td>
          </tr>
          <tr>
            <td class="tg-us36" colspan="1">Takeaway of Travel:</td>
            <td class="tg-us36" colspan="2"><input style="width: 334px;" type="text" name="take5"></td>
          </tr>
          <tr>
            <td class="tg-us36" colspan="1">Travel Sponsor:</td>
            <td class="tg-us36" colspan="2"><input style="width: 334px;" type="text" name="sponsor5"></td>
          </tr>
        </table>
        <table class="tg" id="myTable" align="center" style="undefined;table-layout: fixed; width: 700px">
<colgroup>
<col style="width: 168px">
<col style="width: 328px">
<col style="width: 150px">
</colgroup>
          <tr >
            <td class="tg-us36" colspan="3">Please list any additional countries you've been to.</td>
          </tr>
          <tr>
            <td class="tg-us36">Country list:</td>
            <td class="tg-us36" colspan="2"><input style="width: 334px;" type="text" name="gentrav"></td>
          </tr>         
            <tr>
              <td class="tg-us36" colspan="3">Do you have planned residencies or travel during the next 12 months? If so please provide details.</td>
            </tr>
            <tr>
              <td class="tg-us36" style="height: 100px;" colspan="3"><textarea name="planned"></textarea></td>
            </tr>
            <tr>
              <td class="tg-us36" colspan="3">Have you ever traveled to New York City?</td>
            </tr>
            <tr>
              <td class="tg-us36" style="height: 100px;" colspan="3"><textarea name="nyc" required></textarea></td>
            </tr>
            <tr>
              <td class="tg-us36" colspan="3">
                After you have looked at the description of the Fellowship and associated materials on our website <a href="https://apexart.org/" target="_blank">www.apexart.org</a>, and tell us why this is a good time for you to be part of an apexart NYC Fellowship.  (200 words)</td>
            </tr>
            <tr>
              <td class="tg-us36" style="height: 100px;" colspan="3"><textarea name="benefit" id="wordcount" required></textarea></td>
            </tr>
            <tr>
              <td class="tg-us36" colspan="3">What do you hope to gain from the experience? (200 words)</td>
            </tr>
            <tr>
              <td class="tg-us36" style="height: 100px;" colspan="3"><textarea name="gain" id="wordcount" required></textarea></td>
            </tr>
            <tr>
              <td class="tg-us36" colspan="3">
                The Fellowship Program is very active, with 3-4 activities per day, often requiring a lot of walking, traveling alone during the evening, using public transportation, and participating in a range of physical and social activities. The assigned activities are required and when necessary, we work with Fellows to find alternatives in the event of physical limitations, however the program still remains physically demanding. Please let us know if you have any concerns.</td>
            </tr>
            <tr>
              <td class="tg-us36" style="height: 100px;" colspan="3"><textarea name="medical"></textarea></td>
            </tr>
            <tr>
              <td class="tg-us36" colspan="3">Do you have any medical conditions we should be aware of?</td>
            </tr>
            <tr>
              <td class="tg-us36" style="height: 100px;" colspan="3"><textarea name="conditions"></textarea></td>
            </tr>
            <tr>
              <td class="tg-us36" colspan="3">The expenses associated with the program are significant from our side. We provide airfare, an apartment in midtown New York City, entrance and attendance fees along with very specific and substantial staff support. We ask fellows to be responsible for their own food while they are here. There are good inexpensive markets close to the apartment if you cook. If you have a real and substantial demonstrated inability to bring between 600 and 1000 USD for your personal needs we may be able to assist. There must be a demonstrated need such as a dependent family and we will ask personal questions about how you support yourself. Will you be able to bring that amount on your fellowship for your personal needs?</td>
            </tr>
            <tr>
              <td class="tg-us36" style="height: 100px;" colspan="3"><textarea name="support" required></textarea></td>
            </tr>
            <tr>
              <td class="tg-us36" colspan="3">If you have any questions about what is expected of Fellows in our program, or about our Fellowship Program more broadly, please list them here. We will be happy to answer.</td>
            </tr>
            <tr>
              <td class="tg-us36" style="height: 100px;" colspan="3"><textarea name="questions"></textarea></td>
            </tr>
            <tr>
              <td class="tg-us36" colspan="3">An apexart fellowship is a unique program and is not about making work. You do not get a studio and you will not have meetings with people to promote your work. It is not an opportunity for networking, career development, focused research, or production of new work, but rather focuses on new experiences and personal development that will likely affect the work you do. It is a cultural and experiential immersion program that is intended to be part of a creative catalytic process, and includes many diverse activities programmed by apexart staff. The activities are not elective and you are expected not to make artwork or engage in outside work during the program but rather to concentrate on these new experiences. Please click the checkbox to indicate you agree with the text above.<br>
                </td>
            </tr>
            <tr>
              <td class="tg-us36" colspan="3"><input required type="checkbox" name="understand" value="YES"> I agree</td>
            </tr>
            <tr>
              <td><input name="submit" type="submit" id="submit" onclick="return checkWordCount()" value="SUBMIT"></td>
            </tr>
            <tr>
              <td class="tg-us36" colspan="3">Thank you for applying for the apexart New York City Fellowship.</td>
            </tr>
            <tr>
              <td class="tg-us36" colspan="3">Please note that more deserving candidates are recommended than apexart can accommodate. We will contact you with further details regarding your application status.<br><br><br><br><br><br><br><br><br><br></td>
            </tr>
  
</table></div></form>
</body>
</html>