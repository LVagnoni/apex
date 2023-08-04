<?php
  include("../../header.php");
  include ('connect.php');
  ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML lang=en-US><HEAD>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css">
<script>
$(function() {
  $( "#datepicker" ).datepicker();
});
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
    <th class="tg-c3ow" colspan="3"><strong>apexart New York City Fellowship Application Form</strong></th>
  </tr>
  <tr>
    <td class="tg-c3ow" colspan="3">Please complete the form fields and press the Submit button.</td>
  </tr>
  <tr>
    <td class="tg-us36">Name of recommender:</td>
    <td class="tg-us36" colspan="2"><input style="width: 334px;" type="text" name="recommender"></td>
  </tr>
  <tr>
    <td class="tg-us36" colspan="3">What is your relationship to the recommender and how long have you known him/her?</td>
  </tr>
  <tr>
    <td class="tg-us36" style="height: 100px;" colspan="3"><textarea name="relationship"></textarea></td>
  </tr>
  <tr>
    <td class="tg-us36">First name:</td>
    <td class="tg-us36" colspan="2"><input style="width: 334px;" type="text" name="first"></td>
  </tr>
  <tr>
    <td class="tg-us36">Last name:</td>
    <td class="tg-us36" colspan="2"><input style="width: 334px;" type="text" name="last"></td>
  </tr>
  <tr>
    <td class="tg-us36">Address:</td>
    <td class="tg-us36" colspan="2"><input style="width: 334px;" type="text" name="address"></td>
  </tr>
  <tr>
    <td class="tg-us36">Phone:</td>
    <td class="tg-us36" colspan="2"><input style="width: 334px;" type="text" name="phone"></td>
  </tr>
  <tr>
    <td class="tg-us36">Email:</td>
    <td class="tg-us36" colspan="2"><input style="width: 334px;" type="text" name="email"></td>
  </tr>
  <tr>
    <td class="tg-us36">Birthdate:</td>
    <td class="tg-us36" colspan="2"><input style="width: 334px;" type="text" id="datepicker" name="birth"></td>
  </tr>
  <tr>
    <td class="tg-us36">Citizenship:</td>
    <td class="tg-us36" colspan="2"><input style="width: 334px;" type="text" name="citizen"></td>
  </tr>
  <tr>
    <td class="tg-us36">Country of Residence:</td>
    <td class="tg-us36" colspan="2"><input style="width: 334px;" type="text" name="residence"></td>
  </tr>
  <tr>
    <td class="tg-us36">Country of Birth:</td>
    <td class="tg-us36" colspan="2"><input style="width: 334px;" type="text" name="country"></td>
  </tr>
  <tr>
    <td class="tg-us36">Languages:</td>
    <td class="tg-us36"><input style="width: 334px;" type="text" name="language"></td>
    <td class="tg-us36"><select labelID="fluency" name="fluency" value="fluency">
                              <option value="None">Select Fluency Level:</option>
                              <option value="Fluent">Fluent</option>
                              <option value="Intermediate">Intermediate</option>
                              <option value="Beginner">Beginner</option>
                            </datalist></td>
  </tr>
  <tr>
    <td class="tg-us36"></td>
    <td class="tg-us36"><input style="width: 334px;" type="text" name="language2"></td>
    <td class="tg-us36"><select labelID="fluency" name="fluency2" value="fluency2">
                              <option value="None">Select Fluency Level:</option>
                              <option value="Fluent">Fluent</option>
                              <option value="Intermediate">Intermediate</option>
                              <option value="Beginner">Beginner</option>
                            </datalist></td>
  </tr>
  <tr>
    <td class="tg-us36"></td>
    <td class="tg-us36"><input style="width: 334px;" type="text" name="language3"></td>
    <td class="tg-us36"><select labelID="fluency3" name="fluency3" value="fluency3">
                              <option value="None">Select Fluency Level:</option>
                              <option value="Fluent">Fluent</option>
                              <option value="Intermediate">Intermediate</option>
                              <option value="Beginner">Beginner</option>
                            </datalist></td>
  </tr>
  <tr>
    <td class="tg-us36"></td>
    <td class="tg-us36"><input style="width: 334px;" type="text" name="language4"></td>
    <td class="tg-us36"><select labelID="fluency4" name="fluency4" value="fluency4">
                              <option value="None">Select Fluency Level:</option>
                              <option value="Fluent">Fluent</option>
                              <option value="Intermediate">Intermediate</option>
                              <option value="Beginner">Beginner</option>
                            </datalist></td>
  </tr>
  <tr>
    <td class="tg-us36"></td>
    <td class="tg-us36"><input style="width: 334px;" type="text" name="language5"></td>
    <td class="tg-us36"><select labelID="fluency5" name="fluency5" value="fluency5">
                              <option value="None">Select Fluency Level:</option>
                              <option value="Fluent">Fluent</option>
                              <option value="Intermediate">Intermediate</option>
                              <option value="Beginner">Beginner</option>
                            </datalist></td>
  </tr>
  <tr>
    <td class="tg-us36" colspan="3">Emergency Contact:</td>
  </tr>
  <tr>
    <td class="tg-us36">Name:</td>
    <td class="tg-us36" colspan="2"><input style="width: 334px;" type="text" name="ername"></td>
  </tr>
  <tr>
    <td class="tg-us36">Phone:</td>
    <td class="tg-us36" colspan="2"><input style="width: 334px;" type="text" name="erphone"></td>
  </tr>
  <tr>
    <td class="tg-us36">Email:</td>
    <td class="tg-us36" colspan="2"><input style="width: 334px;" type="text" name="eremail"></td>
  </tr>
  <tr>
    <td class="tg-us36">Relationship:</td>
    <td class="tg-us36" colspan="2"><input style="width: 334px;" type="text" name="errel"></td>
  </tr>
  <tr>
    <td class="tg-us36" colspan="3">Please list the destinations and reasons for your travel over the past five years, beginning with the most recent:</td>
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
    <td class="tg-us36">Destination:</td>
    <td class="tg-us36" colspan="2"><input style="width: 334px;" type="text" name="dest2"></td>
  </tr>
  <tr>
    <td class="tg-us36">Date of Travel:</td>
    <td class="tg-us36" colspan="2"><input style="width: 334px;" type="text" name="date2"></td>
  </tr>
  <tr>
    <td class="tg-us36">Destination:</td>
    <td class="tg-us36" colspan="2"><input style="width: 334px;" type="text" name="dest3"></td>
  </tr>
  <tr>
    <td class="tg-us36">Date of Travel:</td>
    <td class="tg-us36" colspan="2"><input style="width: 334px;" type="text" name="date3"></td>
  </tr>
  <tr>
    <td class="tg-us36">Destination:</td>
    <td class="tg-us36" colspan="2"><input style="width: 334px;" type="text" name="dest4"></td>
  </tr>
  <tr>
    <td class="tg-us36">Date of Travel:</td>
    <td class="tg-us36" colspan="2"><input style="width: 334px;" ype="text" name="date4"></td>
  </tr>
  <tr>
    <td class="tg-us36">Destination:</td>
    <td class="tg-us36" colspan="2"><input style="width: 334px;" type="text" name="dest5"></td>
  </tr>
  <tr>
    <td class="tg-us36">Date of Travel:</td>
    <td class="tg-us36" colspan="2"><input style="width: 334px;" type="text" name="date5"></td>
  </tr>
  <tr>
    <td class="tg-us36">Destination:</td>
    <td class="tg-us36" colspan="2"><input style="width: 334px;" type="text" name="dest6"></td>
  </tr>
  <tr>
    <td class="tg-us36">Date of Travel:</td>
    <td class="tg-us36" colspan="2"><input style="width: 334px;" type="text" name="date6"></td>
  </tr>
  <tr>
    <td class="tg-us36">Destination:</td>
    <td class="tg-us36" colspan="2"><input style="width: 334px;" type="text" name="dest7"></td>
  </tr>
  <tr>
    <td class="tg-us36">Date of Travel:</td>
    <td class="tg-us36" colspan="2"><input style="width: 334px;" type="text" name="date7"></td>
  </tr>
  <tr>
    <td class="tg-us36">Destination:</td>
    <td class="tg-us36" colspan="2"><input style="width: 334px;" type="text" name="dest8"></td>
  </tr>
  <tr>
    <td class="tg-us36">Date of Travel:</td>
    <td class="tg-us36" colspan="2"><input style="width: 334px;" type="text" name="date8"></td>
  </tr>
  <tr>
    <td class="tg-us36">Destination:</td>
    <td class="tg-us36" colspan="2"><input style="width: 334px;" type="text" name="dest9"></td>
  </tr>
  <tr>
    <td class="tg-us36">Date of Travel:</td>
    <td class="tg-us36" colspan="2"><input style="width: 334px;" type="text" name="date9"></td>
  </tr>
  <tr>
    <td class="tg-us36">Destination:</td>
    <td class="tg-us36" colspan="2"><input style="width: 334px;" type="text" name="dest10"></td>
  </tr>
  <tr>
    <td class="tg-us36">Date of Travel:</td>
    <td class="tg-us36" colspan="2"><input style="width: 334px;" type="text" name="date10"></td>
  </tr>
  <tr>
    <td class="tg-us36" colspan="3">List any additional countries you have visited as an adult:</td>
  </tr>
  <tr>
    <td class="tg-us36">Country list:</td>
    <td class="tg-us36" colspan="2"><input style="width: 334px;" type="text" name="gentrav"></td>
  </tr>
  <tr>
    <td class="tg-us36" colspan="3">Please list the residencies/workshops/seminars you’ve participated in over the past five years, beginning with the most recent:</td>
  </tr>
  <tr>
    <td class="tg-us36">Residency:</td>
    <td class="tg-us36" colspan="2"><input style="width: 334px;" type="text" name="res1"></td>
  </tr>
  <tr>
    <td class="tg-us36">Dates:</td>
    <td class="tg-us36" colspan="2"><input style="width: 334px;" type="text" name="resdate1"></td>
  </tr>
  <tr>
    <td class="tg-us36">Residency:</td>
    <td class="tg-us36" colspan="2"><input style="width: 334px;" type="text" name="res2"></td>
  </tr>
  <tr>
    <td class="tg-us36">Dates:</td>
    <td class="tg-us36" colspan="2"><input style="width: 334px;" type="text" name="resdate2"></td>
  </tr>
  <tr>
    <td class="tg-us36">Residency:</td>
    <td class="tg-us36" colspan="2"><input style="width: 334px;" type="text" name="res3"></td>
  </tr>
  <tr>
    <td class="tg-us36">Dates:</td>
    <td class="tg-us36" colspan="2"><input style="width: 334px;" type="text" name="resdate3"></td>
  </tr>
  <tr>
    <td class="tg-us36">Residency:</td>
    <td class="tg-us36" colspan="2"><input style="width: 334px;" type="text" name="res4"></td>
  </tr>
  <tr>
    <td class="tg-us36">Dates:</td>
    <td class="tg-us36" colspan="2"><input style="width: 334px;" type="text" name="resdate4"></td>
  </tr>
  <tr>
    <td class="tg-us36">Residency:</td>
    <td class="tg-us36" colspan="2"><input style="width: 334px;" type="text" name="res5"></td>
  </tr>
  <tr>
    <td class="tg-us36">Dates:</td>
    <td class="tg-us36" colspan="2"><input style="width: 334px;" type="text" name="resdate5"></td>
  </tr>
  <tr>
    <td class="tg-us36" colspan="3">Have you ever travelled to New York City?</td>
  </tr>
  <tr>
    <td class="tg-us36" style="height: 100px;" colspan="3"><textarea name="nyc"></textarea></td>
  </tr>
  <tr>
    <td class="tg-us36" colspan="3">This is not a "working" Fellowship. It is not about networking or career development but rather personal development. It is a cultural and experiential immersion program that is intended to be part of a creative catalytic process including many diverse activities programmed by apexart staff. The activities are not elective and you are expected not to make artwork or engage in outside work during the program but rather to concentrate on new experiences.</td>
  </tr>
  <tr>
    <td class="tg-us36" colspan="3"><input type="checkbox" name="understand" value="YES"> I agree</td>
  </tr>
  <tr>
    <td class="tg-us36" colspan="3">After you have looked at the description of the fellowship and associated materials on our website www.apexart.org, tell us why you would you be a good fit for an apexart NYC Fellowship?</td>
  </tr>
  <tr>
    <td class="tg-us36" style="height: 100px;" colspan="3"><textarea name="benefit"></textarea></td>
  </tr>
  <tr>
    <td class="tg-us36" colspan="3">What do you hope to gain from the experience?</td>
  </tr>
  <tr>
    <td class="tg-us36" style="height: 100px;" colspan="3"><textarea name="gain"></textarea></td>
  </tr>
  <tr>
    <td class="tg-us36" colspan="3">The Fellowship Program is a very active one, with 3-4 activities a day, and often requiring a lot of walking, traveling alone at night, using public transportation, and participating in a range of physical and social activities. The assigned activities are mandatory. When necessary, we work with Fellows to find alternatives in the event of physical limitations, but the program still remains physically demanding. Are you able to maintain moderate to high levels of physical activity (walking, standing, climbing, navigating, and other activities) for 30 days? If not, please let us know if you would require activity modifications.</td>
  </tr>
  <tr>
    <td class="tg-us36" style="height: 100px;" colspan="3"><textarea name="medical"></textarea></td>
  </tr>
  <tr>
    <td class="tg-us36" colspan="3">Do you have any medical conditions apexart should be aware of?</td>
  </tr>
  <tr>
    <td class="tg-us36" style="height: 100px;" colspan="3"><textarea name="conditions"></textarea></td>
  </tr>
  <tr>
    <td class="tg-us36" colspan="3">Please describe your primary means of support and indicate whether you will be able to arrange time away for a one month program.</td>
  </tr>
  <tr>
    <td class="tg-us36" style="height: 100px;" colspan="3"><textarea name="support"></textarea></td>
  </tr>
  <tr>
    <td class="tg-us36" colspan="3">If you have any questions about what is expected of Fellows in our program, or about our Fellowship Program more broadly, please list them here. We will be happy to answer them.</td>
  </tr>
  <tr>
    <td class="tg-us36" style="height: 100px;" colspan="3"><textarea name="questions"></textarea></td>
  </tr>
  <tr>
    <td class="tg-us36" colspan="3"><input type="submit" value="SUBMIT"></td>
  </tr>
  <tr>
    <td class="tg-us36" colspan="3">Thank you for applying for the apexart New York City Fellowship.</td>
  </tr>
  <tr>
    <td class="tg-us36" colspan="3">Please note that more deserving candidates are recommended than apexart can accommodate. We will contact you with further details regarding your application status.<br><br><br><br><br><br><br><br><br><br></td>
  </tr>
  
</table></div></form>