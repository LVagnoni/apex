<?php
	include ("outbound/connect.php");
	include("../header.php");
	?>
	
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML lang=en-US><HEAD><TITLE>apexart :: Post-Outbound Residency Survey</TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	

<body>
<form action="https://apexart.org/survey/outbound/formscript.php" method="post" >
	<table width="840" align="center">
        <tr valign="top"> 
          <td width="6">&nbsp;</td>
          <td width="840" height="35" colspan="3" class="exhibitionProgram">
              <p class="exhibitionProgram"><strong>apexart</strong> Post-Outbound Residency Evaluation/Survey </p>
		  </td>
        </tr>

<tr valign="top"> 
          <td>&nbsp;</td>
          <td colspan="3" class="standardText"> 		          
            <p>Dear Resident,<br><br>

We hope you are readjusting to life back home after your time with the apexart Outbound Residency Program. We ask all our residents to fill out this survey one month after their return to New York City in order to gauge their impressions of the program after they have had time to reflect on the experience and the effects of participating. We look forward to your input as it will help us improve and develop the program for future residents and to better understand where the residency fits into the career and work of our residents.<br><br> Thank you,<br><strong>apexart </strong>staff<br><br>
</p>
            <p>Fill in the form below and press the Submit button. </p>
            <table class="standardText">
                <tr> 
                  <td width="806" height="30" align="left" valign="top">Full name:
                  <input style="width: 250px;" type="text" name="name"></td>
                </tr>
                <tr> 
                  <td height="30" align="left" valign="top"><br>1. Was the program clearly explained to you before your departure? What were your expectations of the program? 
                  <textarea rows="8" cols="100" name="expectations"></textarea></td>
                </tr>
                <tr> 
                  <td height="30" align="left" valign="top"><br>2. On a scale of 1-5, how closely did the actual program match these expectations? <br>
                  <input type="radio" value="1" name="exp_rate">1&nbsp;
                  <input type="radio" value="2" name="exp_rate">2&nbsp;
                  <input type="radio" value="3" name="exp_rate">3&nbsp;
                  <input type="radio" value="4" name="exp_rate">4&nbsp;
                  <input type="radio" value="5" name="exp_rate">5&nbsp; </td>
                </tr>
                <tr> 
                  <td height="35" align="left" valign="top"><br>3. How did your expectations and the actual residency experience differ?
                  <textarea rows="8" cols="100" name="differ"></textarea></td>
                </tr></table>
                <table>
                <tr> 
                <td align="left" valign="top" colspan="2"><br>4. On a scale of 1-5, how adequate did you find support from <strong>apexart</strong> to be... <br></td></tr>
                  <tr><td width="400">... prior to your departure (visa, plane tickets, etc...)?</td><td>
                  <input type="radio" value="1" name="adequate">1&nbsp;
                  <input type="radio" value="2" name="adequate">2&nbsp;
                  <input type="radio" value="3" name="adequate">3&nbsp;
                  <input type="radio" value="4" name="adequate">4&nbsp;
                  <input type="radio" value="5" name="adequate">5&nbsp;  </td></tr>
                  <tr><td>... in answer to practical, travel, or administrative issues? </td><td>
                  <input type="radio" value="1" name="adequate1">1&nbsp;
                  <input type="radio" value="2" name="adequate1">2&nbsp;
                  <input type="radio" value="3" name="adequate1">3&nbsp;
                  <input type="radio" value="4" name="adequate1">4&nbsp;
                  <input type="radio" value="5" name="adequate1">5&nbsp; </td></tr>
                  <tr><td>... in connecting you with a contact person/host<br>&nbsp;&nbsp;&nbsp;&nbsp;organization?</td><td>
                  <input type="radio" value="1" name="adequate2">1&nbsp;
                  <input type="radio" value="2" name="adequate2">2&nbsp;
                  <input type="radio" value="3" name="adequate2">3&nbsp;
                  <input type="radio" value="4" name="adequate2">4&nbsp;
                  <input type="radio" value="5" name="adequate2">5&nbsp; </td></tr>
                  <tr><td>... in connecting you with interesting people?</td><td> 
                  <input type="radio" value="1" name="adequate3">1&nbsp;
                  <input type="radio" value="2" name="adequate3">2&nbsp;
                  <input type="radio" value="3" name="adequate3">3&nbsp;
                  <input type="radio" value="4" name="adequate3">4&nbsp;
                  <input type="radio" value="5" name="adequate3">5&nbsp; </td></tr>
                  <tr><td>... with support during your residency?</td><td>   
                  <input type="radio" value="1" name="adequate4">1&nbsp;
                  <input type="radio" value="2" name="adequate4">2&nbsp;
                  <input type="radio" value="3" name="adequate4">3&nbsp;
                  <input type="radio" value="4" name="adequate4">4&nbsp;
                  <input type="radio" value="5" name="adequate4">5&nbsp; </td></tr>
                  <tr><td>... upon your return home?</td><td>   
                  <input type="radio" value="1" name="adequate5">1&nbsp;
                  <input type="radio" value="2" name="adequate5">2&nbsp;
                  <input type="radio" value="3" name="adequate5">3&nbsp;
                  <input type="radio" value="4" name="adequate5">4&nbsp;
                  <input type="radio" value="5" name="adequate5">5&nbsp; </td></tr>
                  </table>
               <table class="standardText">
     
     
      <table>
                <tr> 
                <td align="left" valign="top" colspan="2"><br>5. On a scale of 1-5, how adequate did you find your <strong>contact person or host organization</strong> to be...<br></td></tr>
                  <tr><td width="400">... in the first week of your residency?</td><td>
                  <input type="radio" value="1" name="host">1&nbsp;
                  <input type="radio" value="2" name="host">2&nbsp;
                  <input type="radio" value="3" name="host">3&nbsp;
                  <input type="radio" value="4" name="host">4&nbsp;
                  <input type="radio" value="5" name="host">5&nbsp;  </td></tr>
                  <tr><td>... throughout the rest of your residency?</td><td>
                  <input type="radio" value="1" name="host1">1&nbsp;
                  <input type="radio" value="2" name="host1">2&nbsp;
                  <input type="radio" value="3" name="host1">3&nbsp;
                  <input type="radio" value="4" name="host1">4&nbsp;
                  <input type="radio" value="5" name="host1">5&nbsp; </td></tr>
                  <tr><td>... in finding non-arts related activities for you?</td><td>
                  <input type="radio" value="1" name="host2">1&nbsp;
                  <input type="radio" value="2" name="host2">2&nbsp;
                  <input type="radio" value="3" name="host2">3&nbsp;
                  <input type="radio" value="4" name="host2">4&nbsp;
                  <input type="radio" value="5" name="host2">5&nbsp; </td></tr>
                  <tr><td>... in finding arts-related activities for you?</td><td> 
                  <input type="radio" value="1" name="host3">1&nbsp;
                  <input type="radio" value="2" name="host3">2&nbsp;
                  <input type="radio" value="3" name="host3">3&nbsp;
                  <input type="radio" value="4" name="host3">4&nbsp;
                  <input type="radio" value="5" name="host3">5&nbsp; </td></tr>
                  <tr><td>... in answer to practical, travel, or language issues?</td><td>   
                  <input type="radio" value="1" name="host4">1&nbsp;
                  <input type="radio" value="2" name="host4">2&nbsp;
                  <input type="radio" value="3" name="host4">3&nbsp;
                  <input type="radio" value="4" name="host4">4&nbsp;
                  <input type="radio" value="5" name="host4">5&nbsp; </td></tr>
                  <tr><td>... for travels outside the city in which you were based?</td><td>   
                  <input type="radio" value="1" name="host5">1&nbsp;
                  <input type="radio" value="2" name="host5">2&nbsp;
                  <input type="radio" value="3" name="host5">3&nbsp;
                  <input type="radio" value="4" name="host5">4&nbsp;
                  <input type="radio" value="5" name="host5">5&nbsp; </td></tr>
                  <tr><td>... in connecting you with interesting people?</td><td>   
                  <input type="radio" value="1" name="host6">1&nbsp;
                  <input type="radio" value="2" name="host6">2&nbsp;
                  <input type="radio" value="3" name="host6">3&nbsp;
                  <input type="radio" value="4" name="host6">4&nbsp;
                  <input type="radio" value="5" name="host6">5&nbsp; </td></tr>
                    <tr><td>... in preparing to return home?</td><td>   
                  <input type="radio" value="1" name="host7">1&nbsp;
                  <input type="radio" value="2" name="host7">2&nbsp;
                  <input type="radio" value="3" name="host7">3&nbsp;
                  <input type="radio" value="4" name="host7">4&nbsp;
                  <input type="radio" value="5" name="host7">5&nbsp; </td></tr>
                  </table>
               <table class="standardText">
     
                
                
                     <tr> 
                  <td height="30" align="left" valign="top"><br>6. If you have other comments about your contact person or host organization, please elaborate in the space below.
                  <textarea rows="8" cols="100" name="host_comments"></textarea></td>
                </tr>
                 
                 <tr> 
                  <td height="30" align="left" valign="top"><br>7. On a scale of 1-5 how would you rate the daily itinerary?
                  <input type="radio" value="1" name="itinerary">1&nbsp;
                  <input type="radio" value="2" name="itinerary">2&nbsp;
                  <input type="radio" value="3" name="itinerary">3&nbsp;
                  <input type="radio" value="4" name="itinerary">4&nbsp;
                  <input type="radio" value="5" name="itinerary">5&nbsp;</td>
                </tr>
                <tr> 
                  <td height="30" align="left" valign="top"><br>8. Was information about events, institutions, and meetings clearly available to you?
                  <textarea rows="8" cols="100" name="info"></textarea></td>
                </tr>
                <tr> 
                  <td height="30" align="left" valign="top"><br>9. Did you feel that you were asked to attend too many events? To few events?
                  <textarea rows="8" cols="100" name="events"></textarea></td>
                </tr>
                <tr> 
                  <td height="30" align="left" valign="top"><br>10. Did you feel there were too many meetings arranged for you? Too few?
                  <textarea rows="8" cols="100" name="meetings"></textarea></td>
                </tr>
                <tr> 
                  <td height="30" align="left" valign="top"><br>11. Who was the most interesting/beneficial contact you met either arranged by apexart or your host or that you made independently? And briefly, why?  
                  <textarea rows="8" cols="100" name="contact"></textarea></td>
                </tr>
                 <tr> 
                  <td height="30" align="left" valign="top"><br>12. What was the most interesting/beneficial event you attended that was either arranged by apexart or your host or that you participated in independently? And briefly, why?
                  <textarea rows="8" cols="100" name="event"></textarea></td>
                </tr>
                <tr> 
                  <td height="30" align="left" valign="top"><br>13. Were your evenings full enough? Too full?  
                  <textarea rows="8" cols="100" name="evenings"></textarea></td>
                </tr>
                <tr> 
                  <td height="30" align="left" valign="top"><br>14. What percentage of planned events did you manage to attend? 
                  <textarea rows="8" cols="100" name="percentage"></textarea></td>
                </tr>
                <tr> 
                  <td height="30" align="left" valign="top"><br>15. Did you spend more or less money on personal expenses than you imagined?  
                  <textarea rows="8" cols="100" name="money"></textarea></td>
                </tr>
                  <tr> 
                  <td height="30" align="left" valign="top"><br>16. Do you think one month was adequate time to explore a new culture?
                  <textarea rows="8" cols="100" name="month"></textarea></td>
                </tr>
                  <tr> 
                  <td height="30" align="left" valign="top"><br>17. Would you want to spend more/less time traveling outside of the city that you were based in? If so, please explain why.<br>
                  <textarea rows="8" cols="100" name="time"></textarea></td>
                </tr>
                <tr> 
                  <td height="30" align="left" valign="top"><br>18. What would you change about the itinerary?

                  <textarea rows="8" cols="100" name="change"></textarea></td>
                </tr>
                  <tr> 
                  <td height="30" align="left" valign="top"><br>19. Did you find the restriction on producing work during the residency useful or constraining? Please explain.
                  <textarea rows="8" cols="100" name="restriction"></textarea></td>
                </tr>
               
                  <tr> 
                  <td height="30" align="left" valign="top"><br>20. What are your thoughts on the requirement to keep a resident blog?
                  <textarea rows="8" cols="100" name="blog"></textarea></td>
                </tr>
                
                  <tr> 
                  <td height="30" align="left" valign="top"><br>21. Do you think this program is best described as a residency, a fellowship, or some other term?
                  <textarea rows="8" cols="100" name="program"></textarea></td>
                </tr>
                  <tr> 
                  <td height="30" align="left" valign="top"><br>22. What about the program could be improved?
                  <textarea rows="8" cols="100" name="improve"></textarea></td>
                </tr>
                  <tr> 
                  <td height="30" align="left" valign="top"><br>23. What aspects of the program should remain the same?
                  <textarea rows="8" cols="100" name="remain"></textarea></td>
                </tr>
                  <tr> 
                  <td height="30" align="left" valign="top"><br>24. Overall, on a scale of 1-5, how would you rate your apexart residency experience?
                  <input type="radio" value="1" name="scale">1&nbsp;
                  <input type="radio" value="2" name="scale">2&nbsp;
                  <input type="radio" value="3" name="scale">3&nbsp;
                  <input type="radio" value="4" name="scale">4&nbsp;
                  <input type="radio" value="5" name="scale">5&nbsp;</td>
                </tr>
                  <tr> 
                  <td height="30" align="left" valign="top"><br>25. Do you think the residency will have an effect on your work? If yes, please let us know how.
                  <textarea rows="8" cols="100" name="effect"></textarea></td>
                </tr>
                  <tr> 
                  <td height="30" align="left" valign="top"><br>26. Did you come out of this experience more/less confident in your work?
                  <textarea rows="8" cols="100" name="confident"></textarea></td>
                </tr>
                 <tr> 
                  <td height="30" align="left" valign="top"><br>27. Do you think the experiential nature of the residency has affected the way you travel and approach new situations? If yes, please let us know how.
                  <textarea rows="8" cols="100" name="experiential"></textarea></td>
                </tr>
                <tr> 
                  <td height="30" align="left" valign="top"><br>28. Have you participated in other residencies abroad prior to this one? If so, how has this residency affected you in comparison?<br>
                  <textarea rows="8" cols="100" name="residencies"></textarea></td>
                </tr>   
                <tr> 
                  <td height="30" align="left" valign="top"><br>
                  29. What is the main difference between New York and your residency location?
                    <textarea rows="8" cols="100" name="difference"></textarea></td>
                </tr>   
                <tr> 
                  <td height="30" align="left" valign="top"><br>30. What advice do you have for future residents? 
                  <textarea rows="8" cols="100" name="advice"></textarea></td>
                </tr>   
                <tr> 
                  <td height="30" align="left" valign="top"><br>31. If you have any additional comments, thoughts, or questions, please use the space below to tell us. 
                  <textarea rows="8" cols="100" name="comments"></textarea></td>
                </tr>   
          </table>
<br><br>
<input type="submit" value="SUBMIT">
</form>


</body>
</html>