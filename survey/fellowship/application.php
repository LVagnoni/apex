<?php
  include("../../header.php");
  include ('connect.php');
  ?>
  
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML lang=en-US><HEAD><TITLE>apexart :: Incoming NYC Fellowship Application Form</TITLE>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="savestorage.js"></script>
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
    if (s.split(' ').length <= 190) {
        alert("Not enough words in the required fields.");
return false;
    }
}
</script>


<body>
<form id="myform" action="formscript.php" method="post" >

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
    <th class="tg-c3ow" colspan="3"><strong>apexart</strong> Incoming NYC Fellowship Application Form</th>
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
          <td class="tg-us36">Preferred Pronouns:</td>
          <td class="tg-us36" colspan="2"><input required style="width: 334px;" type="text" name="pronouns"></td>
        </tr>
        <tr>
          <td class="tg-us36">Citizenship:</td>
          <td class="tg-us36" colspan="2"><input required style="width: 334px;" type="text" name="citizen"></td>
        </tr>
        <tr>
          <td class="tg-us36">Please list the city and country you currently live in:</td>
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
          <td class="tg-us36" colspan="3">Please list the destinations and reasons for your travel over the past five years, beginning with the most recent including residencies/workshops/seminars you’ve participated in.
          </td>
        </tr>
          <tr>
            <td class="tg-us36" style="height: 100px;" colspan="3"><textarea name="dest1"></textarea></td>
          </tr>
</table>
<table class="tg" id="myTable" align="center" style="undefined;table-layout: fixed; width: 700px">
<colgroup>
<col style="width: 168px">
<col style="width: 328px">
<col style="width: 150px">
</colgroup>
          <tr>
            <td class="tg-us36" colspan="3">Please list any additional countries you've been to.</td>
          </tr>
          <tr>
            <td class="tg-us36">Country list:</td>
            <td class="tg-us36" colspan="2"><input style="width: 334px;" type="text" name="gentrav"></td>
          </tr>         
            <tr>
              <td class="tg-us36" colspan="3">What is your availability during the next 12 months? Do you have planned residencies or travel? If so please provide details.</td>
            </tr>
            <tr>
              <td class="tg-us36" style="height: 100px;" colspan="3"><textarea name="planned"></textarea></td>
            </tr>
            <tr>
              <td class="tg-us36" colspan="3">Have you ever traveled to New York City? If so, can you tell us when and whether as a tourist or professional?</td>
            </tr>
            <tr>
              <td class="tg-us36" style="height: 100px;" colspan="3"><textarea name="nyc" required></textarea></td>
            </tr>
            <tr>
              <td class="tg-us36" colspan="3">
                After you have looked at the description of the Fellowship and associated materials on our website <a href="http://apexart.org/" target="_blank">www.apexart.org</a>, tell us why this is a good fit at a good time for you to be an apexart NYC Fellow. (200 words minimum)</td>
            </tr>
            <tr>
              <td class="tg-us36" style="height: 100px;" colspan="3"><textarea name="benefit" required></textarea></td>
            </tr>
            <tr>
              <td class="tg-us36" colspan="3">Is there anything you hope to gain from the experience? (200 words minimum)</td>
            </tr>
            <tr>
              <td class="tg-us36" style="height: 100px;" colspan="3"><textarea name="gain" equired></textarea></td>
            </tr>
            <tr>
              <td class="tg-us36" colspan="3">
                The Fellowship Program is very active, with 3-4 activities per day, often requiring a lot of walking, traveling alone, evening activities, public transportation, and participating in a range of physical and social activities. We expect people to participate in all activities, especially the ones you don’t want to unless there are physical limitations, however the program still remains very active. Please let us know if you have any concerns.</td>
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
              <td class="tg-us36" colspan="3">The expenses and planning associated with the program are significant from our side. We provide airfare, an apartment in midtown New York City, entrance and attendance fees along with very specific and substantial staff support. We ask fellows to be responsible for their own food while they are here. There are good inexpensive markets close to the apartment if you cook. We suggest you bring between 600 and 1000 USD for your food and personal needs. If you have a real and demonstrated inability to have this amount we may be able to assist. Please let us know your thoughts on this.</td>
            </tr>
            <tr>
              <td class="tg-us36" style="height: 100px;" colspan="3"><textarea name="support" required></textarea></td>
            </tr>
            <tr>
              <td class="tg-us36" colspan="3">If you have any questions about what is expected of Fellows in our program, or about our Fellowship Program more broadly, please list them here. We will be happy to answer.</td>
            </tr>
            <tr>
              <td class="tg-us36" style="height: 100px;" colspan="3"><textarea name="question"></textarea></td>
            </tr>
            <tr>
              <td class="tg-us36" colspan="3">An apexart fellowship is a unique program. It is about exploring new things, not about continuing what you are doing. You do not get a studio and we will not be setting up meetings with people to promote your work. It is not an opportunity for networking, career development, focused research, or production of new work, but rather new experiences and personal development that may likely affect the work you do and how you think about it. It is a cultural and experiential immersion program that is intended to be part of a creative catalytic process, and includes many diverse activities programmed by apexart staff. The activities are not elective and we ask you to agree to not make artwork or engage in promotion or production during the month. This may not be the right time for a program such as this if you’re expecting a traditional residency. <br><br>Your thoughts about this?<br>
                </td>
            </tr>
            <tr>
              <td class="tg-us36" style="height: 100px;" colspan="3"><textarea name="understand"></textarea></td>
            </tr>
            <tr>
              <td><input name="submit" type="submit" id="submit" value="SUBMIT"></td>
            </tr>
            <tr>
              <td class="tg-us36" colspan="3">Thank you for applying for the apexart New York City Fellowship.</td>
            </tr>
            <tr>
              <td class="tg-us36" colspan="3">Please note that more deserving candidates are recommended than apexart can accommodate. We will contact you with further details regarding your application status.<br><br><br>
                <br><br><br><br><br><br><br></td>
            </tr>
  
</table></div></form>
<script>
$('#myform').saveStorage();
</script>
</body>
</html>