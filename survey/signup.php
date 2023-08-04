<?php
include('../headerc.php');

?>
<?php

if (isset($_POST['submit'])) {

  $url = 'https://www.google.com/recaptcha/api/siteverify';
  $privatekey = "6LdlLEYUAAAAAOiTGspwSW0oluGx04BCvphBhTkU";

  $response = file_get_contents($url."?secret=".$privatekey."&response=".$_POST['g-recaptcha-response']."&remoteip=".$_SERVER['REMOTE_ADDR']);
}

?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="icon" href="favicon.ico" type="image/ico" />

<link rel="stylesheet" type="text/css" href="https://apexart.org/css/slide.css" />

<style>
.boxy{
	border-radius: 8px; 
-moz-border-radius: 8px; 
-webkit-border-radius: 8px; 
border: 2px solid #000000;
color:#FFFFFF;
background:#000000; 
font-family: Arial, Helvetica, Geneva, sans-serif;
font-size: 16px;
width: 220px;
height: 30px;
line-height: 30px;
}
</style>


<style text="text/css">
    .eemStyleSFBody
    {
        margin: 0;
        padding: 0;
    }
    .eemStyleSFMainOuter
    {
        color: #000000;
        background-color: #FFFBF7;
        width: 400px;
        margin: 0 auto;
    }
    .eemStyleSFForm
    {
        line-height: 1.3;
        font-family: verdana;
        font-size: 12px;
        width: 450px;
    }
    .eemStyleSFTitleOuter
    {
        font-weight: normal;
        border-bottom-color: #bfbfbf;
        padding: 20px 0 7px;
        background-color: #FFFBF7;
        margin: 0 30px 20px;
        font-size: 28px;
        border-bottom-style: solid;
        border-bottom-width: 1px;
        font-family: Verdana,Geneva,sans-serif;
        color: #bfbfbf;
    }
    .eemStyleSFTitle
    {
        color: #bfbfbf;
    }
    .eemStyleSFLogoDisplay
    {
        display: block;
        float: left;
    }
    .eemStyleSFLogoOuter
    {
    }
    .eemCompanyNameAddress
    {
        padding-left: 15px;
        float: left;
    }
    .eemStyleSFLogoInner
    {
        text-align: center;
    }
    .eemStyleSFCompletion
    {
        padding: 10px 0;
        margin: 0 30px;
        display: none;
    }
    .eemStyleSFCompletionIcon
    {
        display: none;
    }
    .eemStyleSFAjaxWaitIcon
    {
        display: none;
    }
    .eemStyleSFSectionContent
    {
        margin: 0 30px;
        padding-bottom: 15px;
    }
    .eemStyleSFSectionHeading
    {
        font-weight: bold;
        margin-bottom: 15px;
    }
    .eemRadioInput
    {
        padding: 0;
        height: 13px;
        width: 13px;
        .vertical-align: bottom;
        vertical-align: top;
        margin: 0;
    }
    .eemStyleSFReq
    {
        color: #ff0000;
        font-size: 11px;
    }
    .eemStyleSFError
    {
        color: #ff0000;
        display: none;
        font-size: 11px;
    }
    .eemStyleSFErrorIcon
    {
        display: none;
    }
    .eemStyleSFEmail
    {
        margin: 15px 0;
    }
    .eemStyleSFEmail label
    {
        display: block;
        margin-bottom: 3px;
    }
    .eemStyleSFEmailPrefs
    {
        margin-bottom: 15px;
    }
    .eemStyleSFEmailPrefs .eemStyleSFText
    {
        padding-bottom: 3px;
    }
    .eemStyleSFInterestGroup
    {
        margin-bottom: 15px;
    }
    .eemStyleSFFormInput
    {
        margin-bottom: 15px;
    }
    .eemStyleSFButton
    {
        margin-bottom: 5px;
    }
    .eemStyleSFFormInput a
    {
        font-size: 11px;
    }
    .eemStyleSFBottom
    {
        height: 25px;
        background-color: #f5f5f5;
    }
    .eemStyleSFTextFields
    {
        margin-bottom: 15px;
    }
    .eemStyleSFTextFields label
    {
        display: block;
        margin-bottom: 3px;
    }
    .eemStyleSFFormError
    {
        margin: 0 15px;
    }
    .SFmulti-checkbox
    {
        margin-bottom: 5px;
    }
    .SFmulti-checkbox label
    {
        display: inline-block;
    }
    .eemStyleSFFooterOuter
    {
        padding: 15px 30px;
        zoom: 1;
        background-color: #bfbfbf;
        overflow: hidden;
    }
    .eemStyleSFFooterText
    {
        color: #FFFFFF;
    }
    .eemStyleSFHintText
    {
        color: #999999;
    }
    input:invalid
    {
        -webkit-box-shadow: none;
        box-shadow: none;
        -moz-box-shadow: none;
    }
</style>

<head>
<title>apexart :: Brochure Mailing List</title>
<script type="text/javascript">

  function checkForm(form)
  {
    ...

    if(!form.captcha.value.match(/^\d{5}$/)) {
      alert('Please enter the CAPTCHA digits in the box provided');
      form.captcha.focus();
      return false;
    }

    ...

    return true;
  }

</script>
</head>

<body>

<table width="1047" border="0" align="center">
  
  <tr>
    
    <td width="997" colspan="3" align="center"><table width="941" border="0" bgcolor="#FFFFFF">
      <tr valign="top">
        <td width="310" style="border: 1px solid #e0e0e0; padding: 15px;">

          <span class="mainText">EMAIL ANNOUNCEMENTS</span><br />
          <span class="standardTextMd"><br />
            </span><span class="standardTextMd">Sign up for our email list; we send weekly emails to announce exhibition openings, talks, performances, open call information, and other programs. <strong>All free and open to the public!</strong></span><br />
         <iframe width="250" height="155" src="https://my.sendinblue.com/users/subscribe/js_id/34g1q/id/1" frameborder="0" scrolling="auto" allowfullscreen style="display: block;margin-left: auto;margin-right: auto;max-width: 150%;"></iframe>
        <td style="border: 1px solid #e0e0e0; padding: 15px;">
        
        
         <table width=591 align="center">
       <td><tr>
         <td width="583" valign="top" class="standardText">
       <form action="https://apexart.org/survey/odb/formscript.php" method="post" onsubmit="return checkForm(this);">        
    <span class="mainText">BROCHURE MAILING LIST</span><br />
    <img src="https://apexart.org/images/tabs/brochures2.jpg" alt="" width="250" height="162" />
          <span class="standardTextMd"><br />
Nine exhibitions are presented by apexart annually, each accompanied by <strong>a full color brochure</strong> containing an essay by the curator and reproductions of the works in the show. These brochures are available free of charge.</span><br /><br />


      We will not release your information for <em>any</em> purpose. 
      <br><br>
      
  <div align="left">
    MAILING LIST INFO:
    <br />
    <input type="text" name="firstname" required/>&nbsp;&nbsp;First Name *<br />
    <input type="text" name="lastname" required/>&nbsp;&nbsp;Last Name *<br />
    <input type="text" name="company" />&nbsp;&nbsp;Organization<br />
    <input type="text" name="address" />&nbsp;&nbsp;Street address *<br />
    <input type="text" name="city" />&nbsp;&nbsp;City *<br />
    <input type="text" name="state" />&nbsp;&nbsp;State *<br />
    <input type="text" name="zip" />&nbsp;&nbsp;Zip *<br />
    <select id="country" name="country">
      <OPTION VALUE="">PLEASE SELECT COUNTRY</OPTION>
      <OPTION VALUE="UNITED STATES"  >UNITED STATES</OPTION>
      <OPTION VALUE="CANADA"  >CANADA</OPTION>
      <OPTION VALUE="AFGHANISTAN"  >AFGHANISTAN</OPTION>
      <OPTION VALUE="ALBANIA"  >ALBANIA</OPTION>
      <OPTION VALUE="ALGERIA"  >ALGERIA</OPTION>
      <OPTION VALUE="AMERICAN SAMOA"  >AMERICAN SAMOA</OPTION>
      <OPTION VALUE="ANDORRA"  >ANDORRA</OPTION>
      <OPTION VALUE="ANGOLA"  >ANGOLA</OPTION>
      <OPTION VALUE="ANGUILLA"  >ANGUILLA</OPTION>
      <OPTION VALUE="ANTARCTICA"  >ANTARCTICA</OPTION>
      <OPTION VALUE="ANTIGUA AND BARBUDA"  >ANTIGUA AND BARBUDA</OPTION>
      <OPTION VALUE="ARGENTINA"  >ARGENTINA</OPTION>
      <OPTION VALUE="ARMENIA"  >ARMENIA</OPTION>
      <OPTION VALUE="ARUBA"  >ARUBA</OPTION>
      <OPTION VALUE="AUSTRALIA"  >AUSTRALIA</OPTION>
      <OPTION VALUE="AUSTRIA"  >AUSTRIA</OPTION>
      <OPTION VALUE="AZERBAIJAN"  >AZERBAIJAN</OPTION>
      <OPTION VALUE="BAHAMAS"  >BAHAMAS</OPTION>
      <OPTION VALUE="BAHRAIN"  >BAHRAIN</OPTION>
      <OPTION VALUE="BANGLADESH"  >BANGLADESH</OPTION>
      <OPTION VALUE="BARBADOS"  >BARBADOS</OPTION>
      <OPTION VALUE="BELARUS"  >BELARUS</OPTION>
      <OPTION VALUE="BELGIUM"  >BELGIUM</OPTION>
      <OPTION VALUE="BELIZE"  >BELIZE</OPTION>
      <OPTION VALUE="BENIN"  >BENIN</OPTION>
      <OPTION VALUE="BERMUDA"  >BERMUDA</OPTION>
      <OPTION VALUE="BHUTAN"  >BHUTAN</OPTION>
      <OPTION VALUE="BOLIVIA"  >BOLIVIA</OPTION>
      <OPTION VALUE="BOSNIA AND HERZEGOWINA"  >BOSNIA AND HERZEGOWINA</OPTION>
      <OPTION VALUE="BOTSWANA"  >BOTSWANA</OPTION>
      <OPTION VALUE="BOUVET ISLAND"  >BOUVET ISLAND</OPTION>
      <OPTION VALUE="BRAZIL"  >BRAZIL</OPTION>
      <OPTION VALUE="BRITISH INDIAN OCEAN TERRITORY"  >BRITISH INDIAN OCEAN TERRITORY</OPTION>
      <OPTION VALUE="BRUNEI DARUSSALAM"  >BRUNEI DARUSSALAM</OPTION>
      <OPTION VALUE="BULGARIA"  >BULGARIA</OPTION>
      <OPTION VALUE="BURKINA FASO"  >BURKINA FASO</OPTION>
      <OPTION VALUE="BURUNDI"  >BURUNDI</OPTION>
      <OPTION VALUE="CAMBODIA"  >CAMBODIA</OPTION>
      <OPTION VALUE="CAMEROON"  >CAMEROON</OPTION>
      <OPTION VALUE="CAPE VERDE"  >CAPE VERDE</OPTION>
      <OPTION VALUE="CAYMAN ISLANDS"  >CAYMAN ISLANDS</OPTION>
      <OPTION VALUE="CENTRAL AFRICAN REPUBLIC"  >CENTRAL AFRICAN REPUBLIC</OPTION>
      <OPTION VALUE="CHAD"  >CHAD</OPTION>
      <OPTION VALUE="CHILE"  >CHILE</OPTION>
      <OPTION VALUE="CHINA"  >CHINA</OPTION>
      <OPTION VALUE="CHRISTMAS ISLAND"  >CHRISTMAS ISLAND</OPTION>
      <OPTION VALUE="COCOA (KEELING) ISLANDS"  >COCOA (KEELING) ISLANDS</OPTION>
      <OPTION VALUE="COLOMBIA"  >COLOMBIA</OPTION>
      <OPTION VALUE="COMOROS"  >COMOROS</OPTION>
      <OPTION VALUE="CONGO"  >CONGO</OPTION>
      <OPTION VALUE="COOK ISLANDS"  >COOK ISLANDS</OPTION>
      <OPTION VALUE="COSTA RICA"  >COSTA RICA</OPTION>
      <OPTION VALUE="COTE DIVOIRE"  >COTE DIVOIRE</OPTION>
      <OPTION VALUE="CROATIA (LOCAL NAME: HRVATSKA)"  >CROATIA (LOCAL NAME: HRVATSKA)</OPTION>
      <OPTION VALUE="CUBA"  >CUBA</OPTION>
      <OPTION VALUE="CYPRUS"  >CYPRUS</OPTION>
      <OPTION VALUE="CZECH REPUBLIC"  >CZECH REPUBLIC</OPTION>
      <OPTION VALUE="DENMARK"  >DENMARK</OPTION>
      <OPTION VALUE="DJIBOUTI"  >DJIBOUTI</OPTION>
      <OPTION VALUE="DOMINICA"  >DOMINICA</OPTION>
      <OPTION VALUE="DOMINICAN REPUBLIC"  >DOMINICAN REPUBLIC</OPTION>
      <OPTION VALUE="EAST TIMOR"  >EAST TIMOR</OPTION>
      <OPTION VALUE="ECUADOR"  >ECUADOR</OPTION>
      <OPTION VALUE="EGYPT"  >EGYPT</OPTION>
      <OPTION VALUE="EL SALVADOR"  >EL SALVADOR</OPTION>
      <OPTION VALUE="EQUATORIAL GUINEA"  >EQUATORIAL GUINEA</OPTION>
      <OPTION VALUE="ERITREA"  >ERITREA</OPTION>
      <OPTION VALUE="ESTONIA"  >ESTONIA</OPTION>
      <OPTION VALUE="ETHIOPIA"  >ETHIOPIA</OPTION>
      <OPTION VALUE="FALKLAND ISLANDS (MALVINAS)"  >FALKLAND ISLANDS (MALVINAS)</OPTION>
      <OPTION VALUE="FAROE ISLANDS"  >FAROE ISLANDS</OPTION>
      <OPTION VALUE="FIJI"  >FIJI</OPTION>
      <OPTION VALUE="FINLAND"  >FINLAND</OPTION>
      <OPTION VALUE="FRANCE"  >FRANCE</OPTION>
      <OPTION VALUE="FRANCE, METROPOLITAN"  >FRANCE, METROPOLITAN</OPTION>
      <OPTION VALUE="FRENCH GUIANA"  >FRENCH GUIANA</OPTION>
      <OPTION VALUE="FRENCH POLYNESIA"  >FRENCH POLYNESIA</OPTION>
      <OPTION VALUE="FRENCH SOUTHERN TERRITORIES"  >FRENCH SOUTHERN TERRITORIES</OPTION>
      <OPTION VALUE="GABON"  >GABON</OPTION>
      <OPTION VALUE="GAMBIA"  >GAMBIA</OPTION>
      <OPTION VALUE="GEORGIA"  >GEORGIA</OPTION>
      <OPTION VALUE="GERMANY"  >GERMANY</OPTION>
      <OPTION VALUE="GHANA"  >GHANA</OPTION>
      <OPTION VALUE="GIBRALTAR"  >GIBRALTAR</OPTION>
      <OPTION VALUE="GREECE"  >GREECE</OPTION>
      <OPTION VALUE="GREENLAND"  >GREENLAND</OPTION>
      <OPTION VALUE="GRENADA"  >GRENADA</OPTION>
      <OPTION VALUE="GUADELOUPE"  >GUADELOUPE</OPTION>
      <OPTION VALUE="GUAM"  >GUAM</OPTION>
      <OPTION VALUE="GUATEMALA"  >GUATEMALA</OPTION>
      <OPTION VALUE="GUINEA"  >GUINEA</OPTION>
      <OPTION VALUE="GUINEA-BISSAU"  >GUINEA-BISSAU</OPTION>
      <OPTION VALUE="GUYANA"  >GUYANA</OPTION>
      <OPTION VALUE="HAITI"  >HAITI</OPTION>
      <OPTION VALUE="HEARD AND MC DONALD ISLANDS"  >HEARD AND MC DONALD ISLANDS</OPTION>
      <OPTION VALUE="HONDURAS"  >HONDURAS</OPTION>
      <OPTION VALUE="HONG KONG<"  >HONG KONG</OPTION>
      <OPTION VALUE="HUNGARY"  >HUNGARY</OPTION>
      <OPTION VALUE="ICELAND"  >ICELAND</OPTION>
      <OPTION VALUE="INDIA"  >INDIA</OPTION>
      <OPTION VALUE="INDONESIA"  >INDONESIA</OPTION>
      <OPTION VALUE="IRAN (ISLAMIC REPUBLIC OF)"  >IRAN (ISLAMIC REPUBLIC OF)</OPTION>
      <OPTION VALUE="IRAQ"  >IRAQ</OPTION>
      <OPTION VALUE="IRELAND"  >IRELAND</OPTION>
      <OPTION VALUE="ISRAEL"  >ISRAEL</OPTION>
      <OPTION VALUE="ITALY"  >ITALY</OPTION>
      <OPTION VALUE="JAMAICA"  >JAMAICA</OPTION>
      <OPTION VALUE="JAPAN"  >JAPAN</OPTION>
      <OPTION VALUE="JORDAN"  >JORDAN</OPTION>
      <OPTION VALUE="KAZAKHSTAN"  >KAZAKHSTAN</OPTION>
      <OPTION VALUE="KENYA"  >KENYA</OPTION>
      <OPTION VALUE="KIRIBATI"  >KIRIBATI</OPTION>
      <OPTION VALUE="KOREA, DEMOCRATIC PEOPLES REPUBLIC OF"  >KOREA, DEMOCRATIC PEOPLES REPUBLIC OF</OPTION>
      <OPTION VALUE="KOREA, REPUBLIC OF"  >KOREA, REPUBLIC OF</OPTION>
      <OPTION VALUE="KOSOVO"  >KOSOVO</OPTION>
      <OPTION VALUE="KUWAIT"  >KUWAIT</OPTION>
      <OPTION VALUE="KYRGYZSTAN"  >KYRGYZSTAN</OPTION>
      <OPTION VALUE="LAO PEOPLES DEMOCRATIC REPUBLIC"  >LAO PEOPLES DEMOCRATIC REPUBLIC</OPTION>
      <OPTION VALUE="LATVIA"  >LATVIA</OPTION>
      <OPTION VALUE="LEBANON"  >LEBANON</OPTION>
      <OPTION VALUE="LESOTHO"  >LESOTHO</OPTION>
      <OPTION VALUE="LIBERIA"  >LIBERIA</OPTION>
      <OPTION VALUE="LIBYAN ARAB JAMAHIRIYA"  >LIBYAN ARAB JAMAHIRIYA</OPTION>
      <OPTION VALUE="LIECHTENSTEIN"  >LIECHTENSTEIN</OPTION>
      <OPTION VALUE="LITHUANIA"  >LITHUANIA</OPTION>
      <OPTION VALUE="LUXEMBOURG"  >LUXEMBOURG</OPTION>
      <OPTION VALUE="MACAU"  >MACAU</OPTION>
      <OPTION VALUE="MACEDONIA"  >MACEDONIA</OPTION>
      <OPTION VALUE="MADAGASCAR"  >MADAGASCAR</OPTION>
      <OPTION VALUE="MALAWI"  >MALAWI</OPTION>
      <OPTION VALUE="MALAYSIA"  >MALAYSIA</OPTION>
      <OPTION VALUE="MALDIVES"  >MALDIVES</OPTION>
      <OPTION VALUE="MALI"  >MALI</OPTION>
      <OPTION VALUE="MALTA"  >MALTA</OPTION>
      <OPTION VALUE="MARSHALL ISLANDS"  >MARSHALL ISLANDS</OPTION>
      <OPTION VALUE="MARTINIQUE"  >MARTINIQUE</OPTION>
      <OPTION VALUE="MAURITANIA"  >MAURITANIA</OPTION>
      <OPTION VALUE="MAURITIUS"  >MAURITIUS</OPTION>
      <OPTION VALUE="MAYOTTE"  >MAYOTTE</OPTION>
      <OPTION VALUE="MEXICO"  >MEXICO</OPTION>
      <OPTION VALUE="MICRONESIA, FEDERATED STATES OF"  >MICRONESIA, FEDERATED STATES OF</OPTION>
      <OPTION VALUE="MOLDOVA, REPUBLIC OF"  >MOLDOVA, REPUBLIC OF</OPTION>
      <OPTION VALUE="MONACO"  >MONACO</OPTION>
      <OPTION VALUE="MONGOLIA"  >MONGOLIA</OPTION>
      <OPTION VALUE="MONTENEGRO"  >MONTENEGRO</OPTION>
      <OPTION VALUE="MONTSERRAT"  >MONTSERRAT</OPTION>
      <OPTION VALUE="MOROCCO"  >MOROCCO</OPTION>
      <OPTION VALUE="MOZAMBIQUE"  >MOZAMBIQUE</OPTION>
      <OPTION VALUE="MYANMAR"  >MYANMAR</OPTION>
      <OPTION VALUE="NAMIBIA"  >NAMIBIA</OPTION>
      <OPTION VALUE="NAURU"  >NAURU</OPTION>
      <OPTION VALUE="NEPAL"  >NEPAL</OPTION>
      <OPTION VALUE="NETHERLANDS"  >NETHERLANDS</OPTION>
      <OPTION VALUE="NETHERLANDS ANTILLES"  >NETHERLANDS ANTILLES</OPTION>
      <OPTION VALUE="NEW CALEDONIA"  >NEW CALEDONIA</OPTION>
      <OPTION VALUE="NEW ZEALAND"  >NEW ZEALAND</OPTION>
      <OPTION VALUE="NICARAGUA"  >NICARAGUA</OPTION>
      <OPTION VALUE="NIGER"  >NIGER</OPTION>
      <OPTION VALUE="NIGERIA"  >NIGERIA</OPTION>
      <OPTION VALUE="NIUE"  >NIUE</OPTION>
      <OPTION VALUE="NORFOLK ISLAND"  >NORFOLK ISLAND</OPTION>
      <OPTION VALUE="NORTHERN MARIANA ISLANDS"  >NORTHERN MARIANA ISLANDS</OPTION>
      <OPTION VALUE="NORWAY"  >NORWAY</OPTION>
      <OPTION VALUE="OMAN"  >OMAN</OPTION>
      <OPTION VALUE="PAKISTAN"  >PAKISTAN</OPTION>
      <OPTION VALUE="PALAU"  >PALAU</OPTION>
      <OPTION VALUE="PANAMA"  >PANAMA</OPTION>
      <OPTION VALUE="PAPUA NEW GUINEA"  >PAPUA NEW GUINEA</OPTION>
      <OPTION VALUE="PARAGUAY"  >PARAGUAY</OPTION>
      <OPTION VALUE="PERU"  >PERU</OPTION>
      <OPTION VALUE="PHILIPPINES"  >PHILIPPINES</OPTION>
      <OPTION VALUE="PITCAIRN"  >PITCAIRN</OPTION>
      <OPTION VALUE="POLAND"  >POLAND</OPTION>
      <OPTION VALUE="PORTUGAL"  >PORTUGAL</OPTION>
      <OPTION VALUE="PUERTO RICO"  >PUERTO RICO</OPTION>
      <OPTION VALUE="QATAR"  >QATAR</OPTION>
      <OPTION VALUE="REUNION"  >REUNION</OPTION>
      <OPTION VALUE="ROMANIA"  >ROMANIA</OPTION>
      <OPTION VALUE="RUSSIAN FEDERATION"  >RUSSIAN FEDERATION</OPTION>
      <OPTION VALUE="RWANDA"  >RWANDA</OPTION>
      <OPTION VALUE="SAINT KITTS AND NEVIS"  >SAINT KITTS AND NEVIS</OPTION>
      <OPTION VALUE="SAINT LUCIA"  >SAINT LUCIA</OPTION>
      <OPTION VALUE="SAINT VINCENT AND THE GRENADINES"  >SAINT VINCENT AND THE GRENADINES</OPTION>
      <OPTION VALUE="SAMOA"  >SAMOA</OPTION>
      <OPTION VALUE="SAN MARINO"  >SAN MARINO</OPTION>
      <OPTION VALUE="SAO TOME AND PRINCIPE"  >SAO TOME AND PRINCIPE</OPTION>
      <OPTION VALUE="SAUDI ARABIA"  >SAUDI ARABIA</OPTION>
      <OPTION VALUE="SENEGAL"  >SENEGAL</OPTION>
      <OPTION VALUE="SERBIA"  >SERBIA</OPTION>
      <OPTION VALUE="SEYCHELLES"  >SEYCHELLES</OPTION>
      <OPTION VALUE="SIERRA LEONE"  >SIERRA LEONE</OPTION>
      <OPTION VALUE="SINGAPORE"  >SINGAPORE</OPTION>
      <OPTION VALUE="SLOVAKIA (SLOVAK REPUBLIC)"  >SLOVAKIA (SLOVAK REPUBLIC)</OPTION>
      <OPTION VALUE="SLOVENIA"  >SLOVENIA</OPTION>
      <OPTION VALUE="SOLOMON ISLANDS"  >SOLOMON ISLANDS</OPTION>
      <OPTION VALUE="SOMALIA"  >SOMALIA</OPTION>
      <OPTION VALUE="SOUTH AFRICA"  >SOUTH AFRICA</OPTION>
      <OPTION VALUE="SOUTH GEORGIA"  >SOUTH GEORGIA</OPTION>
      <OPTION VALUE="SPAIN"  >SPAIN</OPTION>
      <OPTION VALUE="SRI LANKA"  >SRI LANKA</OPTION>
      <OPTION VALUE="ST. HELENA"  >ST. HELENA</OPTION>
      <OPTION VALUE="ST. PIERRE AND MIQUELON"  >ST. PIERRE AND MIQUELON</OPTION>
      <OPTION VALUE="SUDAN"  >SUDAN</OPTION>
      <OPTION VALUE="SURINAME"  >SURINAME</OPTION>
      <OPTION VALUE="SVALBARD AND JAN MAYEN ISLANDS"  >SVALBARD AND JAN MAYEN ISLANDS</OPTION>
      <OPTION VALUE="SWAZILAND"  >SWAZILAND</OPTION>
      <OPTION VALUE="SWEDEN"  >SWEDEN</OPTION>
      <OPTION VALUE="SWITZERLAND"  >SWITZERLAND</OPTION>
      <OPTION VALUE="SYRIAN ARAB REPUBLIC"  >SYRIAN ARAB REPUBLIC</OPTION>
      <OPTION VALUE="TAIWAN"  >TAIWAN</OPTION>
      <OPTION VALUE="TAJIKISTAN"  >TAJIKISTAN</OPTION>
      <OPTION VALUE="TANZANIA, UNITED REPUBLIC OF"  >TANZANIA, UNITED REPUBLIC OF</OPTION>
      <OPTION VALUE="THAILAND"  >THAILAND</OPTION>
      <OPTION VALUE="TOGO"  >TOGO</OPTION>
      <OPTION VALUE="TOKELAU"  >TOKELAU</OPTION>
      <OPTION VALUE="TONGA"  >TONGA</OPTION>
      <OPTION VALUE="TRINIDAD AND TOBAGO"  >TRINIDAD AND TOBAGO</OPTION>
      <OPTION VALUE="TUNISIA"  >TUNISIA</OPTION>
      <OPTION VALUE="TURKEY"  >TURKEY</OPTION>
      <OPTION VALUE="TURKMENISTAN"  >TURKMENISTAN</OPTION>
      <OPTION VALUE="TURKS AND CAICOS ISLANDS"  >TURKS AND CAICOS ISLANDS</OPTION>
      <OPTION VALUE="TUVALU"  >TUVALU</OPTION>
      <OPTION VALUE="UGANDA"  >UGANDA</OPTION>
      <OPTION VALUE="UKRAINE"  >UKRAINE</OPTION>
      <OPTION VALUE="UNITED ARAB EMIRATES"  >UNITED ARAB EMIRATES</OPTION>
      <OPTION VALUE="UNITED KINGDOM"  >UNITED KINGDOM</OPTION>
      <OPTION VALUE="UNITED STATES MINOR OUTLYING ISLANDS">UNITED STATES MINOR OUTLYING ISLANDS</OPTION>
      <OPTION VALUE="URUGUAY"  >URUGUAY</OPTION>
      <OPTION VALUE="UZBEKISTAN"  >UZBEKISTAN</OPTION>
      <OPTION VALUE="VANUATU"  >VANUATU</OPTION>
      <OPTION VALUE="VATICAN CITY STATE"  >VATICAN CITY STATE</OPTION>
      <OPTION VALUE="VENEZUELA"  >VENEZUELA</OPTION>
      <OPTION VALUE="VIET NAM"  >VIET NAM</OPTION>
      <OPTION VALUE="VIRGIN ISLANDS (BRITISH)"  >VIRGIN ISLANDS (BRITISH)</OPTION>
      <OPTION VALUE="VIRGIN ISLANDS (U.S.)"  >VIRGIN ISLANDS (U.S.)</OPTION>
      <OPTION VALUE="WALLIS AND FUTUNA ISLANDS"  >WALLIS AND FUTUNA ISLANDS</OPTION>
      <OPTION VALUE="YEMEN"  >YEMEN</OPTION>
      <OPTION VALUE="YUGOSLAVIA"  >YUGOSLAVIA</OPTION>
      <OPTION VALUE="ZAIRE"  >ZAIRE</OPTION>
      <OPTION VALUE="ZAMBIA"  >ZAMBIA</OPTION>
      <OPTION VALUE="ZIMBABWE"  >ZIMBABWE</OPTION>
      </SELECT><br>
    <input type="text" name="phone" />&nbsp;&nbsp;Phone<br />
    <input type="text" name="email" />&nbsp;&nbsp;E-mail <br><br />
    
    
    <table><tr>
      <td colspan="2" valign="top" class="standardTextSm">
        Where did you hear about apexart? *<br />
        <input type="text" name="hear" required style="width:350px;"></textarea><br><br>
        
        <strong>Would you like to be considered to serve as a juror in one of our curatorial open calls?</strong>&nbsp;&nbsp;
        <input type="checkbox" name="juror" value="1" />YES
        <br />
        </td>
      </tr>
      <tr><td width="200" height="27" class="standardText" valign="bottom">
        &nbsp;&nbsp;&nbsp;&nbsp;* Required fields.</td></tr></table>
    </span>
    <br><strong>Enter any comments here:</strong><br />
    <textarea name="gencomments" rows="3" cols="53">(enter comments here)</textarea>
    <br>
    <br />
    
    <img src="captcha.php" width="120" height="30" border="1" alt="CAPTCHA">
<input type="text" size="6" maxlength="5" name="captcha" value=""><br>
<small>No bots! Copy the digits from the image into this box.</small>
<br><br>
<input type="submit" value="Submit" name="submit" id="submit">
    </form>

  </div>
    </div></td>
    </tr>
</table>
        </table></td></tr>
        
        
        </td>
        </tr>
      </table>
   


    </td>
  </tr>
  <tr valign="top">
    <td align="center" valign="top">&nbsp;</td>
    <td colspan="3" align="center" valign="top">&nbsp;</td>
      </tr>
    </table>
    </td>
  </tr>
</table>
    
    <?php
include('../footerc.php');

?>

</body>
</html>