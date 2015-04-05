<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2 Final//EN">
<html>
  <head>
    <title>Furry Survey v.6.0.4</title>
    <link href="kdcstyles.css" rel="stylesheet" type="text/css">
	<style type="text/css">
	  .polltable {
    	    margin: 10px;
	    border: 1px solid black;
	  }

	  .striplink a:link, .striplink a:active, .striplink a:visited {
	    font-size: 9pt;
	    font-style: normal;
	    font-decoration: none;
	    color: blue;
	  }

	  .striplink a:hover {
	    font-size: 9pt;
	    font-style: normal;
	    font-decoration: none;
	    font-weight: bold;
	    color: blue;
	  }

	  .dqlt,.fqlt,.sqlt,.aqlt,.oqlt,.bqlt {
	    font-weight: bold;
	    padding: 2px;
	    width: 256px;
	    font-size: 10pt;
	    border: 3px solid white;
	    vertical-align: top;
	  }
	  .dqrt,.fqrt,.sqrt,.aqrt,.oqrt,.bqrt {
	    padding: 2px;
	    width: 650px;
	    font-size: 12pt;
	    border: 3px solid white;
	    vertical-align: top;
	  }
	  .dqlt div,.fqlt div,.sqlt div,.aqlt div,.oqlt div,.bqlt div  {
	    font-weight: normal;
	    position: relative;
	    left: 32px;
	    top: -15px;
	    width: 85%;
	    font-style: italic;
	    font-size: 10pt;
	  }

	  .dqlt {
	    background-color: #B5D6FE;
	  }
	  .dqrt {
	    background-color: #91C1FE;
	  }

	  .fqlt {
	    background-color: #BCFD93;
	  }
	  .fqrt {
	    background-color: #98D376;
	  }

	  .sqlt {
	    background-color: #FFBFBC;
	  }
	  .sqrt {
	    background-color: #CB7F7E;
	  }

	  .aqlt {
	    background-color: #FDF4AB;
	  }
	  .aqrt {
	    background-color: #FDEE72;
	  }

	  .oqlt {
	    background-color: #FBBCFC;
	  }
	  .oqrt {
	    background-color: #B96FB5;
	  }

	  .bqlt {
	    background-color: #DDDDDD;
	  }
	  .bqrt {
	    background-color: #B3B3B3;
	  }

	  .fqscale #fqscalekey td {
	    font-family: "Courier New";
	    width: 24px;
	    height: 24px;
	    text-align: center;
	    vertical-align: center;
	    border: 1px solid black;
  	    background-color: #BCFD93;
	  }

	  .fqscale #fqscaleopt td {
	    font-family: "Courier New";
	    width: 24px;
	    height: 24px;
	    text-align: center;
	    vertical-align: center;
	    border: 1px solid black;
  	    background-color: #BCFD93;
	  }

	  .sqscale #sqscalekey td {
	    font-family: "Courier New";
	    width: 24px;
	    height: 24px;
	    text-align: center;
	    vertical-align: center;
	    border: 1px solid black;
  	    background-color: #FFBFBC;
	  }

	  .sqscale #sqscaleopt td {
	    font-family: "Courier New";
	    width: 24px;
	    height: 24px;
	    text-align: center;
	    vertical-align: center;
	    border: 1px solid black;
  	    background-color: #FFBFBC;
	  }

	  .oqscale #oqscalekey td {
	    font-family: "Courier New";
	    width: 24px;
	    height: 24px;
	    text-align: center;
	    vertical-align: center;
	    border: 1px solid black;
  	    background-color: #FBBCFC;
	  }

	  .oqscale #oqscaleopt td {
	    font-family: "Courier New";
	    width: 24px;
	    height: 24px;
	    text-align: center;
	    vertical-align: center;
	    border: 1px solid black;
  	    background-color: #FBBCFC;
	  }
	  
	  .mqscale #mqscalekey td {
	    font-family: "Courier New";
	    width: 24px;
	    height: 24px;
	    text-align: center;
	    vertical-align: center;
	    border: 1px solid black;
  	    background-color: #FFCC99;
	  }

	  .mqscale #mqscaleopt td {
	    font-family: "Courier New";
	    width: 24px;
	    height: 24px;
	    text-align: center;
	    vertical-align: center;
	    border: 1px solid black;
  	    background-color: #FF9999;
	  }
	  
	  .activitychart #squares {
	    border: 1px solid black;
  	    background-color: #FDF4AB;
	    text-align: center;
	    vertical-align: center;
	    font-size: 8pt;
	    width: 48px;
	  }

	  .activitychart td {
	    border: 1px solid black;
  	    background-color: #FDF4AB;
	    text-align: right;
	    font-size: 10pt;
	  }
	  .tc1 {
	    width: 20px;
	    height: 20px;
	    text-align: center;
	    background-color: #999;
	  }
	  .tc2 {
	    width: 20px;
  	    height: 20px;
	    text-align: center;
	    background-color: #CCC;
	  }
	  .tc3 {
	    width: 20px;
  	    height: 20px;
	    text-align: center;
	    background-color: #333;
	    color: white;
	    padding-top: 5px;
	  }
	</style>
  </head>

  <body>

  <div style="margin: 10px;">

  <img src="/images/frclogosm.png" title="Furry Research" alt="Furry Research" style="position: absolute; left:10px; top:30px; display:float;">

  <p><span style="font-size: 200%; font-weight: bold; margin-left: 70px;">Furry Survey v 6.0.4</span> <br /><div style="font-size: 70%; position: absolute; left: 92px; top: 44px; font-weight:none; display: block;">Alex Osaki; <a href="mailto:bce@klisoura.com" title="bce@klisoura.com">bce@klisoura.com</a><br />Current version date: 22 January, 2012<br />Total questions: 32 + 6</div>
  </p>
  <div style="display: block; height:24px;"></div>

  <p>Welcome to the Furry Survey, new and improved for 2012! This version shares general commonality with last year's version, with the addition of a second optional section intended to provide some limited psychographic information. If you have questions before taking the survey, please feel free to avail yourself of the following links:</p>

  <div style="margin-left: 20px; font-size: 80%;">
    <a href="furrypollfaq.php" title="Frequently Asked Questions about the Furry Survey">Frequently Asked Questions</a><br />
    <a href="furrypollexp.php" title="Explanation on potentially confusing questions in the Furry Survey">Explanation of Questions</a><br />
    <!-- <a href="ot_furrysurvey.php" title="Live results">Live survey results</a> -->
  </div>

  <p>A writeup on the survey last year is available at <a href="http://www.klisoura.com/fs2011v.html">http://www.klisoura.com/fs2011v.html</a>; I will provide a similar resource for the current year as soon as the results are large enough to warrant it. This survey will run from today, 22 January until the end of the year or the end of the world, whichever comes first.  The questions begin below. All of them are optional, so although the survey is completely anonymous, and I would prefer you to complete all of them, this is not required.</p>

  <div style="border: 1px solid black; margin-left: 10px; margin-right: 10px; padding-left: 10px; padding-right: 10px;"><p>NOTES FOR FURRY SURVEY 6:</P>

  <p>This survey is mostly identical to the one last year (on purpose, since the goal of running it multiple times is to track year-on-year changes). Here is a list of all the changes:
    <ul>
      <li>Added a "genderqueer" option to the gender self-identity question.</li>
      <li>Added a section for people to provide additional information about their gender.</li>
      <li>Added the most popular write-in votes for websites.</li>
      <li>Added the most popular write-in votes for conventions.</li>
    </ul>
  </p>
  </div>

  <div style="border: 1px solid black; margin-left: 10px; margin-right: 10px; margin-top: 16px; margin-bottom: 16px; padding-left: 10px; padding-right: 10px; padding-top: 10px; padding-bottom: 10px; background-color: #ccc;">Other note: <br /><br />The raw data from the survey will be made public for other researchers (in particular, because people keep asking me questions -- mostly unique -- that require several hours of work on my part). <em>All identifying information will be removed</em> (any text-based responses, unique identifying strings, etc). <em>Only</em> objective information will be recorded. If you have concerns about this, please register them with me at my <a href="mailto:bce@klisoura.com">e-mail address</a>, <em>bce@klisoura.com</em>. There has been some clamour for me to make the data available, and I want to do so, but I'm also sensitive to any potential concerns.</div>



  <div style="width: 100%; background-color: #CCC; font-family: 'Courier New'; text-align: center; ">Begin survey below</div>

  <form enctype="multipart/form-data" action="pollsql2012.php" method="post">
		 <?php
			$user="readaccess";
			$password="readpass";
			$database="surv1";
			$link = mysql_connect("mysql.klisoura.com",$user,$password);
			mysql_select_db($database) or die("Unable to select database");
			$sql = "SELECT date FROM furrypoll2012 WHERE entryip='".$_SERVER['REMOTE_ADDR']."'";
			$result = mysql_query($sql,$link) or die("Unable to select: ".mysql_error());
			$result = mysql_fetch_array($result);
			$numpositiveresults = (count($result)-1);
			if($numpositiveresults>0) {
			  echo "<span style='color:#FF0000; text-align:center;'<strong>Warning!</strong><br />It looks like you may have already submitted a survey. If you resubmit now, your previous entry will be overwritten. If you have already submitted a survey and wish to replace your previous entry, please continue as normal. If you believe you have received this message in error--for instance, if multiple people in the same household are submitting a response--please check 'OVERRIDE WARNING' below to submit another response:</span><br /><br />

			  <input name='warningoverride' type='checkbox'>OVERRIDE WARNING<br />
			    
			  ";
			} 
			mysql_close($link);
			

		 ?>
  <div align="center">

  <?php
	echo "<input type=\"hidden\" name=\"form_referrer\" value=\"". $_SERVER["HTTP_REFERER"] ."\">\n";
      echo "<input type=\"hidden\" name=\"form_starttime\" value=\"". time() ."\">\n";
  ?>

  <table class="polltable">
 		 <tr><td colspan='2' align='center'>

    <tr>
	<td class="dqlt">Q1. <div>Please enter your birth month and year:<p class="striplink"><a href="/furrypollexp.php#Q1" Title="Explanation of Question">Explanation of Question</p></div></td>
	<td class="dqrt">
	  <select name="form_birthmonth">
	    <option value="nul"></option>
	    <option value=".04167">January</option>
	    <option value=".125">February</option>
	    <option value=".20833">March</option>
	    <option value=".29167">April</option>
	    <option value=".375">May</option>
	    <option value=".45833">June</option>
	    <option value=".54167">July</option>
	    <option value=".625">August</option>
	    <option value=".70833">September</option>
	    <option value=".79167">October</option>
	    <option value=".875">November</option>
	    <option value=".95833">December</option>
	  </select>

	  <select name="form_birthyear" style="width:56px;">
	    <option value="0000"></option>
	    <?php
		$endyear = 1900;
		for($startyear=2005;$startyear>=$endyear;$startyear--){
		  echo "	    <option value=\"$startyear\">$startyear</option>\n";
		}
	    ?>
	  </select>
	</td>
    </tr>

    <tr>
	<td class="dqlt">Q2. <div>What is your biological sex?<p class="striplink"><a href="/furrypollexp.php#Q2" Title="Explanation of Question">Explanation of Question</p></div></td>
	<td class="dqrt">
	  <input name="form_biosex" type="radio" value="a">Male<br />
	  <input name="form_biosex" type="radio" value="b">Female<br />
	  <input name="form_biosex" type="radio" value="c">Other
	</td>
    </tr>

    <tr>
	<td class="dqlt">Q3. <div>What is your self-identified gender?<p class="striplink"><a href="/furrypollexp.php#Q3" Title="Explanation of Question">Explanation of Question</p></div></td>
	<td class="dqrt">
	  <input name="form_gender" type="radio" value="a">Male, completely<br />
	  <input name="form_gender" type="radio" value="b">Male, predominantly<br />
	  <input name="form_gender" type="radio" value="c">Equal parts male and female<br />
	  <input name="form_gender" type="radio" value="d">Female, predominantly<br />
	  <input name="form_gender" type="radio" value="e">Female, completely<br />
	  <input name="form_gender" type="radio" value="f">Genderqueer<br />
	  <input name="form_gender" type="radio" value="x">Other (Optionally: <input name="form_genderext" type="text" size="36">)
	</td>
    </tr>

    <tr>
	<td class="dqlt">Q4. <div>What is your sexual orientation?<p class="striplink"><a href="/furrypollexp.php#Q4" Title="Explanation of Question">Explanation of Question</p></div></td>
	<td class="dqrt">
	  <input name="form_orientation" type="radio" value="0">Completely heterosexual<br />
	  <input name="form_orientation" type="radio" value="1">Mostly heterosexual<br />
	  <input name="form_orientation" type="radio" value="2">Bisexual leaning heterosexual<br />
	  <input name="form_orientation" type="radio" value="3">Bisexual<br />
	  <input name="form_orientation" type="radio" value="4">Bisexual leaning homosexual<br />
	  <input name="form_orientation" type="radio" value="5">Mostly homosexual<br />
	  <input name="form_orientation" type="radio" value="6">Completely homosexual<hr />
	  <input name="form_orientation" type="radio" value="7">Pansexual<sup><a href="/furrypollexp.php#Q4a">[?]</a></sup>
	  <input name="form_orientation" type="radio" value="8">Asexual<sup><a href="/furrypollexp.php#Q4b">[?]</a></sup>
	</td>
    </tr>

    <tr>
	<td class="dqlt">Q5. <div>Where do you live?<p class="striplink"><a href="/furrypollexp.php#Q5" Title="Explanation of Question">Explanation of Question</p></div></td>
	<td class="dqrt">
               <select name='form_location'>
		     <option value='zz'></option>
		     <option value='us'>United States</option>
		     <option value='ca'>Canada</option>
		     <option value='uk'>United Kingdom</option>
		     <option value='de'>Germany</option>
		     <option value='au'>Australia</option>
		     <option value='af'>Afghanistan</option>
		     <option value='ax'>Åland Islands</option>
		     <option value='al'>Albania</option>
		     <option value='dz'>Algeria</option>
		     <option value='as'>American Samoa</option>
		     <option value='ad'>Andorra</option>
		     <option value='ao'>Angola</option>
		     <option value='ai'>Anguilla</option>
		     <option value='aq'>Antarctica</option>
		     <option value='ag'>Antigua and Barbuda</option>
		     <option value='ar'>Argentina</option>
		     <option value='am'>Armenia</option>
		     <option value='aw'>Aruba</option>
		     <option value='at'>Austria</option>
		     <option value='az'>Azerbaijan</option>
		     <option value='bs'>Bahamas</option>
		     <option value='bh'>Bahrain</option>
		     <option value='bd'>Bangladesh</option>
		     <option value='bb'>Barbados</option>
		     <option value='by'>Belarus</option>
		     <option value='be'>Belgium</option>
		     <option value='bz'>Belize</option>
		     <option value='bj'>Benin</option>
		     <option value='bm'>Bermuda</option>
		     <option value='bt'>Bhutan</option>
		     <option value='bo'>Bolivia</option>
		     <option value='ba'>Bosnia and Herzegovina</option>
		     <option value='bw'>Botswana</option>
		     <option value='bv'>Bouvet Island</option>
		     <option value='br'>Brazil</option>
		     <option value='io'>British Indian Ocean Territory</option>
		     <option value='bn'>Brunei Darussalam</option>
		     <option value='bg'>Bulgaria</option>
		     <option value='bf'>Burkina Faso</option>
		     <option value='bi'>Burundi</option>
		     <option value='kh'>Cambodia</option>
		     <option value='cm'>Cameroon</option>
		     <option value='cv'>Cape Verde</option>
		     <option value='ky'>Cayman Islands</option>
		     <option value='cf'>Central African Republic</option>
		     <option value='td'>Chad</option>
		     <option value='cl'>Chile</option>
		     <option value='cn'>China</option>
		     <option value='cx'>Christmas Island</option>
		     <option value='cc'>Cocos (Keeling) Islands</option>
		     <option value='co'>Colombia</option>
		     <option value='km'>Comoros</option>
		     <option value='cg'>Congo</option>
		     <option value='cd'>Congo, The Democratic Republic of The</option>
		     <option value='ck'>Cook Islands</option>
		     <option value='cr'>Costa Rica</option>
		     <option value='ci'>Cote D'ivoire</option>
		     <option value='hr'>Croatia</option>
		     <option value='cu'>Cuba</option>
		     <option value='cy'>Cyprus</option>
		     <option value='cz'>Czech Republic</option>
		     <option value='dk'>Denmark</option>
		     <option value='dj'>Djibouti</option>
		     <option value='dm'>Dominica</option>
		     <option value='do'>Dominican Republic</option>
		     <option value='ec'>Ecuador</option>
		     <option value='eg'>Egypt</option>
		     <option value='sv'>El Salvador</option>
		     <option value='gq'>Equatorial Guinea</option>
		     <option value='er'>Eritrea</option>
		     <option value='ee'>Estonia</option>
		     <option value='et'>Ethiopia</option>
		     <option value='fk'>Falkland Islands (Malvinas)</option>
		     <option value='fo'>Faroe Islands</option>
		     <option value='fj'>Fiji</option>
		     <option value='fi'>Finland</option>
		     <option value='fr'>France</option>
		     <option value='gf'>French Guiana</option>
		     <option value='pf'>French Polynesia</option>
		     <option value='tf'>French Southern Territories</option>
		     <option value='ga'>Gabon</option>
		     <option value='gm'>Gambia</option>
		     <option value='ge'>Georgia</option>
		     <option value='gh'>Ghana</option>
		     <option value='gi'>Gibraltar</option>
		     <option value='gr'>Greece</option>
		     <option value='gl'>Greenland</option>
		     <option value='gd'>Grenada</option>
		     <option value='gp'>Guadeloupe</option>
		     <option value='gu'>Guam</option>
		     <option value='gt'>Guatemala</option>
		     <option value='gg'>Guernsey</option>
		     <option value='gn'>Guinea</option>
		     <option value='gw'>Guinea-bissau</option>
		     <option value='gy'>Guyana</option>
		     <option value='ht'>Haiti</option>
		     <option value='hm'>Heard Island and Mcdonald Islands</option>
		     <option value='va'>Holy See (Vatican City State)</option>
		     <option value='hn'>Honduras</option>
		     <option value='hk'>Hong Kong</option>
		     <option value='hu'>Hungary</option>
		     <option value='is'>Iceland</option>
		     <option value='in'>India</option>
		     <option value='id'>Indonesia</option>
		     <option value='ir'>Iran, Islamic Republic of</option>
		     <option value='iq'>Iraq</option>
		     <option value='ie'>Ireland</option>
		     <option value='im'>Isle of Man</option>
		     <option value='il'>Israel</option>
		     <option value='it'>Italy</option>
		     <option value='jm'>Jamaica</option>
		     <option value='jp'>Japan</option>
		     <option value='je'>Jersey</option>
		     <option value='jo'>Jordan</option>
		     <option value='kz'>Kazakhstan</option>
		     <option value='ke'>Kenya</option>
		     <option value='ki'>Kiribati</option>
		     <option value='kp'>Korea, Democratic People's Republic of</option>
		     <option value='kr'>Korea, Republic of</option>
		     <option value='kw'>Kuwait</option>
		     <option value='kg'>Kyrgyzstan</option>
		     <option value='la'>Lao People's Democratic Republic</option>
		     <option value='lv'>Latvia</option>
		     <option value='lb'>Lebanon</option>
		     <option value='ls'>Lesotho</option>
		     <option value='lr'>Liberia</option>
		     <option value='ly'>Libyan Arab Jamahiriya</option>
		     <option value='li'>Liechtenstein</option>
		     <option value='lt'>Lithuania</option>
		     <option value='lu'>Luxembourg</option>
		     <option value='mo'>Macao</option>
		     <option value='mk'>Macedonia, The Former Yugoslav Republic of</option>
		     <option value='mg'>Madagascar</option>
		     <option value='mw'>Malawi</option>
		     <option value='my'>Malaysia</option>
		     <option value='mv'>Maldives</option>
		     <option value='ml'>Mali</option>
		     <option value='mt'>Malta</option>
		     <option value='mh'>Marshall Islands</option>
		     <option value='mq'>Martinique</option>
		     <option value='mr'>Mauritania</option>
		     <option value='mu'>Mauritius</option>
		     <option value='yt'>Mayotte</option>
		     <option value='mx'>Mexico</option>
		     <option value='fm'>Micronesia, Federated States of</option>
		     <option value='md'>Moldova, Republic of</option>
		     <option value='mc'>Monaco</option>
		     <option value='mn'>Mongolia</option>
		     <option value='me'>Montenegro</option>
		     <option value='ms'>Montserrat</option>
		     <option value='ma'>Morocco</option>
		     <option value='mz'>Mozambique</option>
		     <option value='mm'>Myanmar</option>
		     <option value='na'>Namibia</option>
		     <option value='nr'>Nauru</option>
		     <option value='np'>Nepal</option>
		     <option value='nl'>Netherlands</option>
		     <option value='an'>Netherlands Antilles</option>
		     <option value='nc'>New Caledonia</option>
		     <option value='nz'>New Zealand</option>
		     <option value='ni'>Nicaragua</option>
		     <option value='ne'>Niger</option>
		     <option value='ng'>Nigeria</option>
		     <option value='nu'>Niue</option>
		     <option value='nf'>Norfolk Island</option>
		     <option value='mp'>Northern Mariana Islands</option>
		     <option value='no'>Norway</option>
		     <option value='om'>Oman</option>
		     <option value='pk'>Pakistan</option>
		     <option value='pw'>Palau</option>
		     <option value='ps'>Palestinian Territory, Occupied</option>
		     <option value='pa'>Panama</option>
		     <option value='pg'>Papua New Guinea</option>
		     <option value='py'>Paraguay</option>
		     <option value='pe'>Peru</option>
		     <option value='ph'>Philippines</option>
		     <option value='pn'>Pitcairn</option>
		     <option value='pl'>Poland</option>
		     <option value='pt'>Portugal</option>
		     <option value='pr'>Puerto Rico</option>
		     <option value='qa'>Qatar</option>
		     <option value='re'>Reunion</option>
		     <option value='ro'>Romania</option>
		     <option value='ru'>Russian Federation</option>
		     <option value='rw'>Rwanda</option>
		     <option value='sh'>Saint Helena</option>
		     <option value='kn'>Saint Kitts and Nevis</option>
		     <option value='lc'>Saint Lucia</option>
		     <option value='pm'>Saint Pierre and Miquelon</option>
		     <option value='vc'>Saint Vincent and The Grenadines</option>
		     <option value='ws'>Samoa</option>
		     <option value='sm'>San Marino</option>
		     <option value='st'>Sao Tome and Principe</option>
		     <option value='sa'>Saudi Arabia</option>
		     <option value='sn'>Senegal</option>
		     <option value='rs'>Serbia</option>
		     <option value='sc'>Seychelles</option>
		     <option value='sl'>Sierra Leone</option>
		     <option value='sg'>Singapore</option>
		     <option value='sk'>Slovakia</option>
		     <option value='si'>Slovenia</option>
		     <option value='sb'>Solomon Islands</option>
		     <option value='so'>Somalia</option>
		     <option value='za'>South Africa</option>
		     <option value='gs'>South Georgia and The South Sandwich Islands</option>
		     <option value='es'>Spain</option>
		     <option value='lk'>Sri Lanka</option>
		     <option value='sd'>Sudan</option>
		     <option value='sr'>Suriname</option>
		     <option value='sj'>Svalbard and Jan Mayen</option>
		     <option value='sz'>Swaziland</option>
		     <option value='se'>Sweden</option>
		     <option value='ch'>Switzerland</option>
		     <option value='sy'>Syrian Arab Republic</option>
		     <option value='tw'>Taiwan, Province of China</option>
		     <option value='tj'>Tajikistan</option>
		     <option value='tz'>Tanzania, United Republic of</option>
		     <option value='th'>Thailand</option>
		     <option value='tl'>Timor-leste</option>
		     <option value='tg'>Togo</option>
		     <option value='tk'>Tokelau</option>
		     <option value='to'>Tonga</option>
		     <option value='tt'>Trinidad and Tobago</option>
		     <option value='tn'>Tunisia</option>
		     <option value='tr'>Turkey</option>
		     <option value='tm'>Turkmenistan</option>
		     <option value='tc'>Turks and Caicos Islands</option>
		     <option value='tv'>Tuvalu</option>
		     <option value='ug'>Uganda</option>
		     <option value='ua'>Ukraine</option>
		     <option value='ae'>United Arab Emirates</option>
		     <option value='um'>United States Minor Outlying Islands</option>
		     <option value='uy'>Uruguay</option>
		     <option value='uz'>Uzbekistan</option>
		     <option value='vu'>Vanuatu</option>
		     <option value='ve'>Venezuela</option>
		     <option value='vn'>Viet Nam</option>
		     <option value='vg'>Virgin Islands, British</option>
		     <option value='vi'>Virgin Islands, U.S.</option>
		     <option value='wf'>Wallis and Futuna</option>
		     <option value='eh'>Western Sahara</option>
		     <option value='ye'>Yemen</option>
		     <option value='zm'>Zambia</option>
		     <option value='zw'>Zimbabwe</option>
		     <option value='xx'>Other</option>
		   </select>

               <select name='form_state'>
		     <option value='zz'></option>
		     <option value='AL'>Alabama</option>
		     <option value='AK'>Alaska</option>
		     <option value='AZ'>Arizona</option>
		     <option value='AR'>Arkansas</option>
		     <option value='CA'>California</option>
		     <option value='CO'>Colorado</option>
		     <option value='CT'>Connecticut</option>
		     <option value='DE'>Delaware</option>
		     <option value='DC'>District of Columbia</option>
		     <option value='FL'>Florida</option>
		     <option value='GA'>Georgia</option>
		     <option value='HI'>Hawaii</option>
		     <option value='ID'>Idaho</option>
		     <option value='IL'>Illinois</option>
		     <option value='IN'>Indiana</option>
		     <option value='IA'>Iowa</option>
		     <option value='KS'>Kansas</option>
		     <option value='KT'>Kentucky</option>
		     <option value='LA'>Louisiana</option>
		     <option value='ME'>Maine</option>
		     <option value='MD'>Maryland</option>
		     <option value='MA'>Massachusetts</option>
		     <option value='MI'>Michigan</option>
		     <option value='MN'>Minnesota</option>
		     <option value='MS'>Mississippi</option>
		     <option value='MO'>Missouri</option>
		     <option value='MT'>Montana</option>
		     <option value='NE'>Nebraska</option>
		     <option value='NV'>Nevada</option>
		     <option value='NH'>New Hampshire</option>
		     <option value='NJ'>New Jersey</option>
		     <option value='NM'>New Mexico</option>
		     <option value='NY'>New York</option>
		     <option value='NC'>North Carolina</option>
		     <option value='ND'>North Dakota</option>
		     <option value='OH'>Ohio</option>
		     <option value='OK'>Oklahoma</option>
		     <option value='OR'>Oregon</option>
		     <option value='PA'>Pennsylvania</option>
		     <option value='RI'>Rhode Island</option>
		     <option value='SC'>South Carolina</option>
		     <option value='SD'>South Dakota</option>
		     <option value='TN'>Tennessee</option>
		     <option value='TX'>Texas</option>
		     <option value='UT'>Utah</option>
		     <option value='VT'>Vermont</option>
		     <option value='VA'>Virginia </option>
		     <option value='WA'>Washington</option>
		     <option value='WV'>West Virginia</option>
		     <option value='WI'>Wisconsin</option>
		     <option value='WY'>Wyoming</option>
		     <option value='AB'>Alberta</option>
		     <option value='BC'>British Columbia</option>
		     <option value='MB'>Manitoba</option>
		     <option value='NB'>New Brunswick</option>
		     <option value='NL'>Newfoundland and Labrador</option>
		     <option value='NT'>Northwest Territories</option>
		     <option value='NS'>Nova Scotia</option>
		     <option value='NU'>Nunavut</option>
		     <option value='ON'>Ontario</option>
		     <option value='PE'>Prince Edward Island</option>
		     <option value='QC'>Quebec</option>
		     <option value='SK'>Saskatchewan</option>
		     <option value='YT'>Yukon</option>
		   </select>
	</td>
    </tr>

    <tr>
	<td class="dqlt">Q6. <div>How large is the town in which you make your permanent residence?<p class="striplink"><a href="/furrypollexp.php#Q6" Title="Explanation of Question">Explanation of Question</p></div></td>
	<td class="dqrt">
	  <select name="form_townsize">
	    <option value="z"></option>
	    <option value="a">&lt;1000</option>
	    <option value="b">1000-4999</option>
	    <option value="c">5000-9999</option>
	    <option value="d">10000-19999</option>
	    <option value="e">20000-49999</option>
	    <option value="f">50000-99999</option>
	    <option value="g">100,000-499,999</option>
	    <option value="h">500,000-999,999</option>
	    <option value="i">&gt;1,000,000</option>
	</td>
    </tr>

    <tr>
	<td class="dqlt">Q7. <div>What is your race? <br /> (check all that apply)<p class="striplink"><a href="/furrypollexp.php#Q7" Title="Explanation of Question">Explanation of Question</p></div></td>
	<td class="dqrt">
	  <input name="form_racewhite" type="checkbox">White<br />
	  <input name="form_raceblack" type="checkbox">Black<br />
	  <input name="form_racehispanic" type="checkbox">Hispanic<br />
	  <input name="form_raceasian" type="checkbox">Asian<br />
	  <input name="form_racenative" type="checkbox">Native-American/Pacific Islander<br />
	  <input name="form_raceother" type="checkbox">Other (Optionally: <input name="form_raceext" type="text" size="36">)
	</td>
    </tr>

    <tr>
	<td class="dqlt">Q8. <div>Please describe your spirituality:<p class="striplink"><a href="/furrypollexp.php#Q8" Title="Explanation of Question">Explanation of Question</p></div></td>
	<td class="dqrt">
	  <input name="form_religion" type="radio" value="a">Christian, Catholic<br />
	  <input name="form_religion" type="radio" value="b">Christian, Protestant<br />
	  <input name="form_religion" type="radio" value="c">Christian, Other<br />
	  <input name="form_religion" type="radio" value="d">Muslim<br />
	  <input name="form_religion" type="radio" value="e">Hindu<br />
	  <input name="form_religion" type="radio" value="f">Jewish<br />
	  <input name="form_religion" type="radio" value="g">Pagan<br />
	  <input name="form_religion" type="radio" value="h">Buddhist<br />
	  <input name="form_religion" type="radio" value="i">Shinto<br />
	  <input name="form_religion" type="radio" value="j">Agnostic<br />
	  <input name="form_religion" type="radio" value="k">Atheist<br />
	  <input name="form_religion" type="radio" value="x">Other (Optionally: <input name="form_religionext" type="text" size="36">)
	</td>
    </tr>

    <tr>
	<td class="dqlt">Q9. <div>Please describe your political views (leave blank if apolitical): <p class="striplink"><a href="/furrypollexp.php#Q9" Title="Explanation of Question">Explanation of Question</p></div></td>
	<td class="dqrt">
	  <table style="border: 1px solid black;">
	    <tr id="oqscaleopt">
		<td style="width:164px; font-size: 10pt; font-family: 'Times New Roman'; text-align:right; border: none;">More economic restrictions (regulated)</td>
		<td><input name="form_economics" type="radio" value="1"></td>
		<td><input name="form_economics" type="radio" value="2"></td>
		<td><input name="form_economics" type="radio" value="3"></td>
		<td><input name="form_economics" type="radio" value="4"></td>
		<td><input name="form_economics" type="radio" value="5"></td>
		<td><input name="form_economics" type="radio" value="6"></td>
		<td><input name="form_economics" type="radio" value="7"></td>
		<td><input name="form_economics" type="radio" value="8"></td>
		<td><input name="form_economics" type="radio" value="9"></td>
		<td><input name="form_economics" type="radio" value="10"></td>
		<td style="width:164px; font-size: 10pt; font-family: 'Times New Roman'; text-align:left; border: none;">Fewer economic restrictions (laissez-faire)</td>
	    </tr>
	    <tr>
	      <td colspan="12" style="text-align:center;">Other: <input name="form_economicsext" type="text" size="36"><hr /></td>
	    </tr>
	    <tr id="oqscaleopt">
		<td style="width:164px; font-size: 10pt; font-family: 'Times New Roman'; text-align:right; border: none;">More social restrictions (authoritarianism)</td>
		<td><input name="form_politics" type="radio" value="1"></td>
		<td><input name="form_politics" type="radio" value="2"></td>
		<td><input name="form_politics" type="radio" value="3"></td>
		<td><input name="form_politics" type="radio" value="4"></td>
		<td><input name="form_politics" type="radio" value="5"></td>
		<td><input name="form_politics" type="radio" value="6"></td>
		<td><input name="form_politics" type="radio" value="7"></td>
		<td><input name="form_politics" type="radio" value="8"></td>
		<td><input name="form_politics" type="radio" value="9"></td>
		<td><input name="form_politics" type="radio" value="10"></td>
		<td style="width:164px; font-size: 10pt; font-family: 'Times New Roman'; text-align:left; border: none;">Fewer social restrictions (anarchism)</td>
	    </tr>
	    <tr>
	      <td colspan="12" style="text-align:center;">Other: <input name="form_politicsext" type="text" size="36"></td>
	    </tr>
	  </table>
	</td>
    </tr>

    <tr>
	<td class="dqlt">Q10. <div>What is your occupation?<p class="striplink"><a href="/furrypollexp.php#Q10" Title="Explanation of Question">Explanation of Question</p></div></td>
	<td class="dqrt">
	  <input name="form_occupation" type="radio" value="a">Student<br />
	  <input name="form_occupation" type="radio" value="b">Administrative<br />
	  <input name="form_occupation" type="radio" value="c">Government/Armed Service<br />
	  <input name="form_occupation" type="radio" value="d">Sales/Support<br />
	  <input name="form_occupation" type="radio" value="e">Technical/IT<br />
	  <input name="form_occupation" type="radio" value="f">Professional<br />
	  <input name="form_occupation" type="radio" value="g">Service<br />
	  <input name="form_occupation" type="radio" value="h">Creative or other within the furry fandom<br />
	  <input name="form_occupation" type="radio" value="i">Retired<br />
	  <input name="form_occupation" type="radio" value="j">Unemployed<br />
	  <input name="form_occupation" type="radio" value="k">None<br />
	  <input name="form_occupation" type="radio" value="x">Other (Optionally: <input name="form_occupationext" type="text" size="36">)
	</td>
    </tr>

    <tr>
	<td class="dqlt">Q11. <div>Please indicate your highest level of education<p class="striplink"><a href="/furrypollexp.php#Q11" Title="Explanation of Question">Explanation of Question</p></div></td>
	<td class="dqrt">
	  <input name="form_education" type="radio" value="a">Some high/secondary school<br />
	  <input name="form_education" type="radio" value="b">High/secondary school (ongoing)<br />
	  <input name="form_education" type="radio" value="c">High/secondary school graduate<br />
	  <input name="form_education" type="radio" value="d">Some college/university<br />
	  <input name="form_education" type="radio" value="e">College/university (ongoing)<br />
	  <input name="form_education" type="radio" value="f">College/university graduate <br /> 
	  <input name="form_education" type="radio" value="g">Some postcollege<br />
	  <input name="form_education" type="radio" value="h">Postcollege (ongoing)<br />
	  <input name="form_education" type="radio" value="i">Advanced degree<br />
	  <input name="form_education" type="radio" value="x">Other (Optionally: <input name="form_educationext" type="text" size="36">)
	</td>
    </tr>

    <tr>
	<td class="dqlt">Q12. <div>What is your current relationship status?<p class="striplink"><a href="/furrypollexp.php#Q12" Title="Explanation of Question">Explanation of Question</p></div></td>
	<td class="dqrt">
	  <input name="form_relationship" type="radio" value="a">Single<br />
	  <input name="form_relationship" type="radio" value="b">Casual relationship<br />
	  <input name="form_relationship" type="radio" value="c">Open relationship<br />
	  <input name="form_relationship" type="radio" value="d">Long-term relationship<br />
	  <input name="form_relationship" type="radio" value="e">Marriage or other permanent commitment<br />
	  <input name="form_relationship" type="radio" value="x">Other (Optionally: <input name="form_relationshipext" type="text" size="36">)<br />
	  <em><input name="form_relationshipisfurry" type="checkbox">Partner(s) is also a furry</em>
	</td>
    </tr>

    <tr>
	<td class="fqlt">Q13. <div>On a scale of 1-10, with 1 being extremely weakly and 10 being extremely strongly, how strongly do you consider yourself a part of the furry fandom?<p class="striplink"><a href="/furrypollexp.php#Q13" Title="Explanation of Question">Explanation of Question</p></div></td>
	<td class="fqrt">
	  <table class="fqscale">
	    <tr id="fqscalekey"><td style="border: 1px solid #98D376; background-color: #98D376;"> </td><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td><td>9</td><td>10</td><td style="border: 1px solid #98D376; background-color: #98D376;"> </td></tr>
	    <tr id="fqscaleopt">
		<td style="width:144px;">EXTREMELY WEAKLY</td>
		<td><input name="form_howmuchfurry" type="radio" value="1"></td>
		<td><input name="form_howmuchfurry" type="radio" value="2"></td>
		<td><input name="form_howmuchfurry" type="radio" value="3"></td>
		<td><input name="form_howmuchfurry" type="radio" value="4"></td>
		<td><input name="form_howmuchfurry" type="radio" value="5"></td>
		<td><input name="form_howmuchfurry" type="radio" value="6"></td>
		<td><input name="form_howmuchfurry" type="radio" value="7"></td>
		<td><input name="form_howmuchfurry" type="radio" value="8"></td>
		<td><input name="form_howmuchfurry" type="radio" value="9"></td>
		<td><input name="form_howmuchfurry" type="radio" value="10"></td>
		<td style="width:144px;">EXTREMELY STRONGLY</td>
	    </tr>
	  </table>
	</td>
    </tr>

    <tr>
	<td class="fqlt">Q14. <div>How long, in years, have you known about the furry fandom?<p class="striplink"><a href="/furrypollexp.php#Q14" Title="Explanation of Question">Explanation of Question</p></div></td>
	<td class="fqrt">
	  <input name="form_yearsknownfandom" type="text" size="3" maxlength="3">
	</td>
    </tr>

    <tr>
	<td class="fqlt">Q15. <div>How long, in years, have you considered yourself a furry?<p class="striplink"><a href="/furrypollexp.php#Q15" Title="Explanation of Question">Explanation of Question</p></div></td>
	<td class="fqrt">
	  <input name="form_yearsidentifiedasfurry" type="text" size="3" maxlength="3">
	</td>
    </tr>

    <tr>
	<td class="fqlt">Q16. <div>How many other furries do you know in a more than passing way? <br /><br /><span style="font-size:90%;">(That is--that you would consider friends or acquaintances?</span>)<p class="striplink"><a href="/furrypollexp.php#Q16" Title="Explanation of Question">Explanation of Question</p></div></td>
	<td class="fqrt">
	  <input name="form_numfurriesknown" type="text" size="4" maxlength="4">
	</td>
    </tr>

    <tr>
	<td class="fqlt">Q17. <div>How many other furries have you met in person?<p class="striplink"><a href="/furrypollexp.php#Q17" Title="Explanation of Question">Explanation of Question</p></div></td>
	<td class="fqrt">
	  <input name="form_numfurriesknowninperson" type="text" size="4" maxlength="4">
	</td>
    </tr>

    <tr>
	<td class="fqlt">Q18. <div>Who knows that you are a furry?<p class="striplink"><a href="/furrypollexp.php#Q18" Title="Explanation of Question">Explanation of Question</p></div></td>
	<td class="fqrt">
	  <input name="form_whoknowsnobody" type="checkbox">No-one<br />
	  <input name="form_whoknowsfamily" type="checkbox">Immediate family<br />
	  <input name="form_whoknowssignificantothers" type="checkbox">Significant other<br />
	  <input name="form_whoknowsfurryfriends" type="checkbox">Furry friends or acquaintances<br />
	  <input name="form_whoknowsbestfriends" type="checkbox">Best non-furry friend(s)<br />
	  <input name="form_whoknowscloserfriends" type="checkbox">Closer non-furry friends<br />
	  <input name="form_whoknowsfriends" type="checkbox">Most non-furry friends<br />
	  <input name="form_whoknowscoworkers" type="checkbox">Coworkers<br />
	  <input name="form_whoknowscommonknowledge" type="checkbox">It is common knowledge
	</td>
    </tr>

    <tr>
	<td class="fqlt">Q19. <div>How positively do you think non-furries respond to furriness?<p class="striplink"><a href="/furrypollexp.php#Q19" Title="Explanation of Question">Explanation of Question</p></div></td>
	<td class="fqrt">
	  <input name="form_nonfurryresponse" type="radio" value="a">They have no knowledge<br />
	  <input name="form_nonfurryresponse" type="radio" value="b">Extremely positively<br />
	  <input name="form_nonfurryresponse" type="radio" value="c">Positively<br />
	  <input name="form_nonfurryresponse" type="radio" value="d">Slightly positively<br />
	  <input name="form_nonfurryresponse" type="radio" value="e">Ambivalently<br />
	  <input name="form_nonfurryresponse" type="radio" value="f">Slightly negatively<br />
	  <input name="form_nonfurryresponse" type="radio" value="g">Negatively<br />
	  <input name="form_nonfurryresponse" type="radio" value="h">Extremely negatively
	</td>
    </tr>

    <tr>
	<td class="fqlt">Q20. <div>Do people who know that you are a furry respond to you differently?<p class="striplink"><a href="/furrypollexp.php#Q20" Title="Explanation of Question">Explanation of Question</p></div></td>
	<td class="fqrt">
	  <input name="form_nonfurryresponsepersonal" type="radio" value="a">No<br />
	  <input name="form_nonfurryresponsepersonal" type="radio" value="b">Yes, they respond more positively<br />
	  <input name="form_nonfurryresponsepersonal" type="radio" value="c">Yes, they respond more negatively<br />
	  <input name="form_nonfurryresponsepersonal" type="radio" value="d">The reaction is mixed; some respond more positively and some more negatively<br />
	  <input name="form_nonfurryresponsepersonal" type="radio" value="e">People do not know that I am a furry
	</td>
    </tr>

    <tr>
	<td class="fqlt">Q21. <div>Among people who are aware of the furry fandom, would you characterise their perception as:<p class="striplink"><a href="/furrypollexp.php#Q21" Title="Explanation of Question">Explanation of Question</p></div></td>
	<td class="fqrt">
	  <input name="form_nonfurryaccuracy" type="radio" value="a">Extremely accurate<br />
	  <input name="form_nonfurryaccuracy" type="radio" value="b">Accurate<br />
	  <input name="form_nonfurryaccuracy" type="radio" value="c">Inaccurate<br />
	  <input name="form_nonfurryaccuracy" type="radio" value="d">Extremely inaccurate
	</td>
    </tr>

    <tr>
	<td class="fqlt">Q22. <div>How strongly do you consider yourself human?<p class="striplink"><a href="/furrypollexp.php#Q22" Title="Explanation of Question">Explanation of Question</p></div></td>
	<td class="fqrt">
	  <input name="form_howmuchhuman" type="radio" value="a">I consider myself to be completely human, with no other attributes<br />
	  <input name="form_howmuchhuman" type="radio" value="b">I consider myself to be completely human, though I admire some aspects of other animals<br />
	  <input name="form_howmuchhuman" type="radio" value="c">I consider myself to be mostly human, with some other animal traits mixed in<br />
	  <input name="form_howmuchhuman" type="radio" value="d">I consider myself to be roughly equal parts human and animal<br />
	  <input name="form_howmuchhuman" type="radio" value="e">I consider myself partly human, although animal traits are more common<br />
	  <input name="form_howmuchhuman" type="radio" value="f">I do not consider myself human<br />
	  <input name="form_howmuchhuman" type="radio" value="g">Other (Optionally: <input name="form_howmuchhumanext" type="text" size="36">)
	</td>
    </tr>

    <tr>
	<td class="sqlt">Q23. <div>Do you represent yourself in the fandom as a different gender than your biological sex?<p class="striplink"><a href="/furrypollexp.php#Q23" Title="Explanation of Question">Explanation of Question</p></div></td>
	<td class="sqrt">
	  <input name="form_rpasdifferentgender" type="radio" value="a">No, and I would not do so<br />
	  <input name="form_rpasdifferentgender" type="radio" value="b">No, but I might do so<br />
	  <input name="form_rpasdifferentgender" type="radio" value="c">Yes, occasionally<br />
	  <input name="form_rpasdifferentgender" type="radio" value="d">Yes, regularly<br />
	  <input name="form_rpasdifferentgender" type="radio" value="e">My primary furry persona fits this description
	</td>
    </tr>

    <tr>
	<td class="sqlt">Q24. <div>On a scale of 1-10, how important do you think sex is to the furry fandom?<p class="striplink"><a href="/furrypollexp.php#Q24" Title="Explanation of Question">Explanation of Question</p></div></td>
	<td class="sqrt">
	  <table class="sqscale">
	    <tr id="sqscalekey"><td style="border: 1px solid #CB7F7E; background-color: #CB7F7E;"> </td><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td><td>9</td><td>10</td><td style="border: 1px solid #CB7F7E; background-color: #CB7F7E;"> </td></tr>
	    <tr id="sqscaleopt">
		<td style="width:144px;">EXTREMELY UNIMPORTANT</td>
		<td><input name="form_seximportance" type="radio" value="1"></td>
		<td><input name="form_seximportance" type="radio" value="2"></td>
		<td><input name="form_seximportance" type="radio" value="3"></td>
		<td><input name="form_seximportance" type="radio" value="4"></td>
		<td><input name="form_seximportance" type="radio" value="5"></td>
		<td><input name="form_seximportance" type="radio" value="6"></td>
		<td><input name="form_seximportance" type="radio" value="7"></td>
		<td><input name="form_seximportance" type="radio" value="8"></td>
		<td><input name="form_seximportance" type="radio" value="9"></td>
		<td><input name="form_seximportance" type="radio" value="10"></td>
		<td style="width:144px;">EXTREMELY IMPORTANT</td>
	    </tr>
	  </table>
	</td>
    </tr>

    <tr>
	<td class="sqlt">Q25. <div>On a scale of 1-10, how important is sex to you personally, in the context of the furry fandom?<p class="striplink"><a href="/furrypollexp.php#Q25" Title="Explanation of Question">Explanation of Question</p></div></td>
	<td class="sqrt">
	  <table class="sqscale">
	    <tr id="sqscalekey"><td style="border: 1px solid #CB7F7E; background-color: #CB7F7E;"> </td><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td><td>9</td><td>10</td><td style="border: 1px solid #CB7F7E; background-color: #CB7F7E;"> </td></tr>
	    <tr id="sqscaleopt">
		<td style="width:144px;">EXTREMELY UNIMPORTANT</td>
		<td><input name="form_seximportancepersonal" type="radio" value="1"></td>
		<td><input name="form_seximportancepersonal" type="radio" value="2"></td>
		<td><input name="form_seximportancepersonal" type="radio" value="3"></td>
		<td><input name="form_seximportancepersonal" type="radio" value="4"></td>
		<td><input name="form_seximportancepersonal" type="radio" value="5"></td>
		<td><input name="form_seximportancepersonal" type="radio" value="6"></td>
		<td><input name="form_seximportancepersonal" type="radio" value="7"></td>
		<td><input name="form_seximportancepersonal" type="radio" value="8"></td>
		<td><input name="form_seximportancepersonal" type="radio" value="9"></td>
		<td><input name="form_seximportancepersonal" type="radio" value="10"></td>
		<td style="width:144px;">EXTREMELY IMPORTANT</td>
	    </tr>
	  </table>
	</td>
    </tr>

    <tr>
	<td class="sqlt">Q26. <div>On a scale of 1-10, how important do you believe sex is to other furries?<p class="striplink"><a href="/furrypollexp.php#Q26" Title="Explanation of Question">Explanation of Question</p></div></td>
	<td class="sqrt">
	  <table class="sqscale">
	    <tr id="sqscalekey"><td style="border: 1px solid #CB7F7E; background-color: #CB7F7E;"> </td><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td><td>9</td><td>10</td><td style="border: 1px solid #CB7F7E; background-color: #CB7F7E;"> </td></tr>
	    <tr id="sqscaleopt">
		<td style="width:144px;">EXTREMELY UNIMPORTANT</td>
		<td><input name="form_seximportanceothers" type="radio" value="1"></td>
		<td><input name="form_seximportanceothers" type="radio" value="2"></td>
		<td><input name="form_seximportanceothers" type="radio" value="3"></td>
		<td><input name="form_seximportanceothers" type="radio" value="4"></td>
		<td><input name="form_seximportanceothers" type="radio" value="5"></td>
		<td><input name="form_seximportanceothers" type="radio" value="6"></td>
		<td><input name="form_seximportanceothers" type="radio" value="7"></td>
		<td><input name="form_seximportanceothers" type="radio" value="8"></td>
		<td><input name="form_seximportanceothers" type="radio" value="9"></td>
		<td><input name="form_seximportanceothers" type="radio" value="10"></td>
		<td style="width:144px;">EXTREMELY IMPORTANT</td>
	    </tr>
	  </table>
	</td>
    </tr>

    <tr>
	<td class="sqlt">Q27. <div>On a scale of 1-10, how important do you think the public--among those who are aware of it--believes sex is to the furry fandom?<p class="striplink"><a href="/furrypollexp.php#Q27" Title="Explanation of Question">Explanation of Question</p></div></td>
	<td class="sqrt">
	  <table class="sqscale">
	    <tr id="sqscalekey"><td style="border: 1px solid #CB7F7E; background-color: #CB7F7E;"> </td><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td><td>9</td><td>10</td><td style="border: 1px solid #CB7F7E; background-color: #CB7F7E;"> </td></tr>
	    <tr id="sqscaleopt">
		<td style="width:144px;">EXTREMELY UNIMPORTANT</td>
		<td><input name="form_seximportancepublic" type="radio" value="1"></td>
		<td><input name="form_seximportancepublic" type="radio" value="2"></td>
		<td><input name="form_seximportancepublic" type="radio" value="3"></td>
		<td><input name="form_seximportancepublic" type="radio" value="4"></td>
		<td><input name="form_seximportancepublic" type="radio" value="5"></td>
		<td><input name="form_seximportancepublic" type="radio" value="6"></td>
		<td><input name="form_seximportancepublic" type="radio" value="7"></td>
		<td><input name="form_seximportancepublic" type="radio" value="8"></td>
		<td><input name="form_seximportancepublic" type="radio" value="9"></td>
		<td><input name="form_seximportancepublic" type="radio" value="10"></td>
		<td style="width:144px;">EXTREMELY IMPORTANT</td>
	    </tr>
	  </table>
	</td>
    </tr>

    <tr>
	<td class="aqlt">Q28. <div>Furry activities -- how often do you:<a href="/furrypollexp.php#Q28" Title="Explanation of Question">Explanation of Question</p></div></td>
	<td class="aqrt">
	  <table class="activitychart">
	    <tr id="toprow">
		<td width="200" style="border: 1px solid #FDEE72; background-color: #FDEE72;"> </td>
		<td id="squares">Never
		<td id="squares">Less than once a year</td>
		<td id="squares">Yearly</td>
		<td id="squares">Several times a year</td>
		<td id="squares">Monthly</td>
		<td id="squares">Several times a month</td>
		<td id="squares">Weekly</td>
		<td id="squares">Daily</td>
	    </tr>
	    <tr>
		<td>Chat with other furries online:</td>
		<td id="squares"><input name="form_howoftenchatonline" type="radio" value="1"></td>
		<td id="squares"><input name="form_howoftenchatonline" type="radio" value="2"></td>
		<td id="squares"><input name="form_howoftenchatonline" type="radio" value="3"></td>
		<td id="squares"><input name="form_howoftenchatonline" type="radio" value="4"></td>
		<td id="squares"><input name="form_howoftenchatonline" type="radio" value="5"></td>
		<td id="squares"><input name="form_howoftenchatonline" type="radio" value="6"></td>
		<td id="squares"><input name="form_howoftenchatonline" type="radio" value="7"></td>
		<td id="squares"><input name="form_howoftenchatonline" type="radio" value="8"></td>
	    </tr>
	    <tr>
		<td>Roleplay with other furries:</td>
		<td id="squares"><input name="form_howoftenroleplay" type="radio" value="1"></td>
		<td id="squares"><input name="form_howoftenroleplay" type="radio" value="2"></td>
		<td id="squares"><input name="form_howoftenroleplay" type="radio" value="3"></td>
		<td id="squares"><input name="form_howoftenroleplay" type="radio" value="4"></td>
		<td id="squares"><input name="form_howoftenroleplay" type="radio" value="5"></td>
		<td id="squares"><input name="form_howoftenroleplay" type="radio" value="6"></td>
		<td id="squares"><input name="form_howoftenroleplay" type="radio" value="7"></td>
		<td id="squares"><input name="form_howoftenroleplay" type="radio" value="8"></td>
	    </tr>
	    <tr>
		<td>Attend furry conventions:</td>
		<td id="squares"><input name="form_howoftenattendconventions" type="radio" value="1"></td>
		<td id="squares"><input name="form_howoftenattendconventions" type="radio" value="2"></td>
		<td id="squares"><input name="form_howoftenattendconventions" type="radio" value="3"></td>
		<td id="squares"><input name="form_howoftenattendconventions" type="radio" value="4"></td>
		<td id="squares"><input name="form_howoftenattendconventions" type="radio" value="5"></td>
		<td id="squares"><input name="form_howoftenattendconventions" type="radio" value="6"></td>
		<td id="squares"><input name="form_howoftenattendconventions" type="radio" value="7"></td>
		<td id="squares"><input name="form_howoftenattendconventions" type="radio" value="8"></td>
	    </tr>
	    <tr>
		<td>Attend local meetups:</td>
		<td id="squares"><input name="form_howoftenmeetup" type="radio" value="1"></td>
		<td id="squares"><input name="form_howoftenmeetup" type="radio" value="2"></td>
		<td id="squares"><input name="form_howoftenmeetup" type="radio" value="3"></td>
		<td id="squares"><input name="form_howoftenmeetup" type="radio" value="4"></td>
		<td id="squares"><input name="form_howoftenmeetup" type="radio" value="5"></td>
		<td id="squares"><input name="form_howoftenmeetup" type="radio" value="6"></td>
		<td id="squares"><input name="form_howoftenmeetup" type="radio" value="7"></td>
		<td id="squares"><input name="form_howoftenmeetup" type="radio" value="8"></td>
	    </tr>
	    <tr>
		<td>Visit furry websites:</td>
		<td id="squares"><input name="form_howoftenvisitfurrywebsites" type="radio" value="1"></td>
		<td id="squares"><input name="form_howoftenvisitfurrywebsites" type="radio" value="2"></td>
		<td id="squares"><input name="form_howoftenvisitfurrywebsites" type="radio" value="3"></td>
		<td id="squares"><input name="form_howoftenvisitfurrywebsites" type="radio" value="4"></td>
		<td id="squares"><input name="form_howoftenvisitfurrywebsites" type="radio" value="5"></td>
		<td id="squares"><input name="form_howoftenvisitfurrywebsites" type="radio" value="6"></td>
		<td id="squares"><input name="form_howoftenvisitfurrywebsites" type="radio" value="7"></td>
		<td id="squares"><input name="form_howoftenvisitfurrywebsites" type="radio" value="8"></td>
	    </tr>
	    <tr>
		<td>Participate in furry online communities:</td>
		<td id="squares"><input name="form_howoftenfurryonlinecommunities" type="radio" value="1"></td>
		<td id="squares"><input name="form_howoftenfurryonlinecommunities" type="radio" value="2"></td>
		<td id="squares"><input name="form_howoftenfurryonlinecommunities" type="radio" value="3"></td>
		<td id="squares"><input name="form_howoftenfurryonlinecommunities" type="radio" value="4"></td>
		<td id="squares"><input name="form_howoftenfurryonlinecommunities" type="radio" value="5"></td>
		<td id="squares"><input name="form_howoftenfurryonlinecommunities" type="radio" value="6"></td>
		<td id="squares"><input name="form_howoftenfurryonlinecommunities" type="radio" value="7"></td>
		<td id="squares"><input name="form_howoftenfurryonlinecommunities" type="radio" value="8"></td>
	    </tr>
	    <tr>
		<td>Write furry literature:</td>
		<td id="squares"><input name="form_howoftenwrite" type="radio" value="1"></td>
		<td id="squares"><input name="form_howoftenwrite" type="radio" value="2"></td>
		<td id="squares"><input name="form_howoftenwrite" type="radio" value="3"></td>
		<td id="squares"><input name="form_howoftenwrite" type="radio" value="4"></td>
		<td id="squares"><input name="form_howoftenwrite" type="radio" value="5"></td>
		<td id="squares"><input name="form_howoftenwrite" type="radio" value="6"></td>
		<td id="squares"><input name="form_howoftenwrite" type="radio" value="7"></td>
		<td id="squares"><input name="form_howoftenwrite" type="radio" value="8"></td>
	    </tr>
	    <tr>
		<td>Draw furry artwork:</td>
		<td id="squares"><input name="form_howoftendraw" type="radio" value="1"></td>
		<td id="squares"><input name="form_howoftendraw" type="radio" value="2"></td>
		<td id="squares"><input name="form_howoftendraw" type="radio" value="3"></td>
		<td id="squares"><input name="form_howoftendraw" type="radio" value="4"></td>
		<td id="squares"><input name="form_howoftendraw" type="radio" value="5"></td>
		<td id="squares"><input name="form_howoftendraw" type="radio" value="6"></td>
		<td id="squares"><input name="form_howoftendraw" type="radio" value="7"></td>
		<td id="squares"><input name="form_howoftendraw" type="radio" value="8"></td>
	    </tr>
	  </table>
	</td>
    </tr>

    <tr>
	<td class="aqlt">Q29. <div>Non-furry activities -- how often do you:<p class="striplink"><a href="/furrypollexp.php#Q29" Title="Explanation of Question">Explanation of Question</p></div></td>
	<td class="aqrt">
	  <table class="activitychart">
	    <tr id="toprow">
		<td width="200" style="border: 1px solid #FDEE72; background-color: #FDEE72;"> </td>
		<td id="squares">Never
		<td id="squares">Less than once a year</td>
		<td id="squares">Yearly</td>
		<td id="squares">Several times a year</td>
		<td id="squares">Monthly</td>
		<td id="squares">Several times a month</td>
		<td id="squares">Weekly</td>
		<td id="squares">Daily</td>
	    </tr>
	    <tr>
		<td>Play online games:</td>
		<td id="squares"><input name="form_howoftenplayonlinegames" type="radio" value="1"></td>
		<td id="squares"><input name="form_howoftenplayonlinegames" type="radio" value="2"></td>
		<td id="squares"><input name="form_howoftenplayonlinegames" type="radio" value="3"></td>
		<td id="squares"><input name="form_howoftenplayonlinegames" type="radio" value="4"></td>
		<td id="squares"><input name="form_howoftenplayonlinegames" type="radio" value="5"></td>
		<td id="squares"><input name="form_howoftenplayonlinegames" type="radio" value="6"></td>
		<td id="squares"><input name="form_howoftenplayonlinegames" type="radio" value="7"></td>
		<td id="squares"><input name="form_howoftenplayonlinegames" type="radio" value="8"></td>
	    </tr>
	    <tr>
		<td>Play roleplaying games:</td>
		<td id="squares"><input name="form_howoftenplayroleplayinggames" type="radio" value="1"></td>
		<td id="squares"><input name="form_howoftenplayroleplayinggames" type="radio" value="2"></td>
		<td id="squares"><input name="form_howoftenplayroleplayinggames" type="radio" value="3"></td>
		<td id="squares"><input name="form_howoftenplayroleplayinggames" type="radio" value="4"></td>
		<td id="squares"><input name="form_howoftenplayroleplayinggames" type="radio" value="5"></td>
		<td id="squares"><input name="form_howoftenplayroleplayinggames" type="radio" value="6"></td>
		<td id="squares"><input name="form_howoftenplayroleplayinggames" type="radio" value="7"></td>
		<td id="squares"><input name="form_howoftenplayroleplayinggames" type="radio" value="8"></td>
	    </tr>
	    <tr>
		<td>Attend non-furry conventions:</td>
		<td id="squares"><input name="form_howoftennonfurrycons" type="radio" value="1"></td>
		<td id="squares"><input name="form_howoftennonfurrycons" type="radio" value="2"></td>
		<td id="squares"><input name="form_howoftennonfurrycons" type="radio" value="3"></td>
		<td id="squares"><input name="form_howoftennonfurrycons" type="radio" value="4"></td>
		<td id="squares"><input name="form_howoftennonfurrycons" type="radio" value="5"></td>
		<td id="squares"><input name="form_howoftennonfurrycons" type="radio" value="6"></td>
		<td id="squares"><input name="form_howoftennonfurrycons" type="radio" value="7"></td>
		<td id="squares"><input name="form_howoftennonfurrycons" type="radio" value="8"></td>
	    </tr>
	    <tr>
		<td>Participate in other online communities:</td>
		<td id="squares"><input name="form_howoftenotheronlinecommunitiies" type="radio" value="1"></td>
		<td id="squares"><input name="form_howoftenotheronlinecommunitiies" type="radio" value="2"></td>
		<td id="squares"><input name="form_howoftenotheronlinecommunitiies" type="radio" value="3"></td>
		<td id="squares"><input name="form_howoftenotheronlinecommunitiies" type="radio" value="4"></td>
		<td id="squares"><input name="form_howoftenotheronlinecommunitiies" type="radio" value="5"></td>
		<td id="squares"><input name="form_howoftenotheronlinecommunitiies" type="radio" value="6"></td>
		<td id="squares"><input name="form_howoftenotheronlinecommunitiies" type="radio" value="7"></td>
		<td id="squares"><input name="form_howoftenotheronlinecommunitiies" type="radio" value="8"></td>
	    </tr>
	  </table>
	</td>
    </tr>

    <tr>
	<td class="aqlt">Q30. <div>Would you describe yourself as? (check all that apply)<p class="striplink"><a href="/furrypollexp.php#Q30" Title="Explanation of Question">Explanation of Question</p></div></td>
	<td class="aqrt">
	  <input name="form_isartist" type="checkbox">An artist<br />
	  <input name="form_iswriter" type="checkbox">A writer<br />
	  <input name="form_ismusician" type="checkbox">A musician<br />
	  <input name="form_isconventiongoer" type="checkbox">A regular convention-goer<br />
	  <input name="form_isfursuiter" type="checkbox">A fursuiter<br />
	  <input name="form_isactiveinonlinecommunities" type="checkbox">Active in online communities<br />
	  <input name="form_isfanofrpgs" type="checkbox">A fan of RPGs<br />
	  <input name="form_isfanofscifi" type="checkbox">A fan of science fiction<br />
	  <input name="form_isfanofanime" type="checkbox">A fan of anime<br />
	  <input name="form_isplushophile" type="checkbox">A plushophile<br />
	  <input name="form_iszoophile" type="checkbox">A zoophile<br />
	  <input name="form_ispolyglot" type="checkbox">Fluent in one or more languages besides your primary one<br />
	  <input name="form_isanimalrightsadvocate" type="checkbox">An animal rights advocate<br />
	  <input name="form_isvegetarian" type="checkbox">A vegetarian<br />
	  <input name="form_ispoliticallyactive" type="checkbox">Politically active<br />
	  <input name="form_isotherkin" type="checkbox">Otherkin<br />
	</td>
    </tr>

    <tr>
	<td class="oqlt">Q31. <div>Regardless of your answer to Q30, please describe your general feelings about the following, on a scale of 1-10 <p class="striplink"><a href="/furrypollexp.php#Q31" Title="Explanation of Question">Explanation of Question</p></div></td>
	<td class="oqrt">
	  <table class="oqscale">
	    <tr id="oqscalekey"><td style="width:164px;">EXTREMELY NEGATIVE</td><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td><td>9</td><td>10</td><td style="width:164px;">EXTREMELY POSITIVE</td></tr>
	    <tr id="oqscaleopt">
		<td style="width:164px; font-size: 10pt; font-family: 'Times New Roman'; text-align:right; border: none; background-color: #B96FB5">Furry artwork:</td>
		<td><input name="form_opinionartwork" type="radio" value="1"></td>
		<td><input name="form_opinionartwork" type="radio" value="2"></td>
		<td><input name="form_opinionartwork" type="radio" value="3"></td>
		<td><input name="form_opinionartwork" type="radio" value="4"></td>
		<td><input name="form_opinionartwork" type="radio" value="5"></td>
		<td><input name="form_opinionartwork" type="radio" value="6"></td>
		<td><input name="form_opinionartwork" type="radio" value="7"></td>
		<td><input name="form_opinionartwork" type="radio" value="8"></td>
		<td><input name="form_opinionartwork" type="radio" value="9"></td>
		<td><input name="form_opinionartwork" type="radio" value="10"></td>
		<td style="background-color:#B96FB5;"></td>
	    </tr>

	    <tr id="oqscaleopt">
		<td style="width:164px; font-size: 10pt; font-family: 'Times New Roman'; text-align:right; border: none; background-color: #B96FB5">Furry writing:</td>
		<td><input name="form_opinionwriting" type="radio" value="1"></td>
		<td><input name="form_opinionwriting" type="radio" value="2"></td>
		<td><input name="form_opinionwriting" type="radio" value="3"></td>
		<td><input name="form_opinionwriting" type="radio" value="4"></td>
		<td><input name="form_opinionwriting" type="radio" value="5"></td>
		<td><input name="form_opinionwriting" type="radio" value="6"></td>
		<td><input name="form_opinionwriting" type="radio" value="7"></td>
		<td><input name="form_opinionwriting" type="radio" value="8"></td>
		<td><input name="form_opinionwriting" type="radio" value="9"></td>
		<td><input name="form_opinionwriting" type="radio" value="10"></td>
		<td style="background-color:#B96FB5;"></td>
	    </tr>

	    <tr id="oqscaleopt">
		<td style="width:164px; font-size: 10pt; font-family: 'Times New Roman'; text-align:right; border: none; background-color: #B96FB5">Furry conventions:</td>
		<td><input name="form_opinionconventions" type="radio" value="1"></td>
		<td><input name="form_opinionconventions" type="radio" value="2"></td>
		<td><input name="form_opinionconventions" type="radio" value="3"></td>
		<td><input name="form_opinionconventions" type="radio" value="4"></td>
		<td><input name="form_opinionconventions" type="radio" value="5"></td>
		<td><input name="form_opinionconventions" type="radio" value="6"></td>
		<td><input name="form_opinionconventions" type="radio" value="7"></td>
		<td><input name="form_opinionconventions" type="radio" value="8"></td>
		<td><input name="form_opinionconventions" type="radio" value="9"></td>
		<td><input name="form_opinionconventions" type="radio" value="10"></td>
		<td style="background-color:#B96FB5;"></td>
	    </tr>

	    <tr id="oqscaleopt">
		<td style="width:164px; font-size: 10pt; font-family: 'Times New Roman'; text-align:right; border: none; background-color: #B96FB5">Fursuiting:</td>
		<td><input name="form_opinionfursuiting" type="radio" value="1"></td>
		<td><input name="form_opinionfursuiting" type="radio" value="2"></td>
		<td><input name="form_opinionfursuiting" type="radio" value="3"></td>
		<td><input name="form_opinionfursuiting" type="radio" value="4"></td>
		<td><input name="form_opinionfursuiting" type="radio" value="5"></td>
		<td><input name="form_opinionfursuiting" type="radio" value="6"></td>
		<td><input name="form_opinionfursuiting" type="radio" value="7"></td>
		<td><input name="form_opinionfursuiting" type="radio" value="8"></td>
		<td><input name="form_opinionfursuiting" type="radio" value="9"></td>
		<td><input name="form_opinionfursuiting" type="radio" value="10"></td>
		<td style="background-color:#B96FB5;"></td>
	    </tr>

	    <tr id="oqscaleopt">
		<td style="width:164px; font-size: 10pt; font-family: 'Times New Roman'; text-align:right; border: none; background-color: #B96FB5">Plushophilia:</td>
		<td><input name="form_opinionplushophilia" type="radio" value="1"></td>
		<td><input name="form_opinionplushophilia" type="radio" value="2"></td>
		<td><input name="form_opinionplushophilia" type="radio" value="3"></td>
		<td><input name="form_opinionplushophilia" type="radio" value="4"></td>
		<td><input name="form_opinionplushophilia" type="radio" value="5"></td>
		<td><input name="form_opinionplushophilia" type="radio" value="6"></td>
		<td><input name="form_opinionplushophilia" type="radio" value="7"></td>
		<td><input name="form_opinionplushophilia" type="radio" value="8"></td>
		<td><input name="form_opinionplushophilia" type="radio" value="9"></td>
		<td><input name="form_opinionplushophilia" type="radio" value="10"></td>
		<td style="background-color:#B96FB5;"></td>
	    </tr>

	    <tr id="oqscaleopt">
		<td style="width:164px; font-size: 10pt; font-family: 'Times New Roman'; text-align:right; border: none; background-color: #B96FB5">Zoophilia:</td>
		<td><input name="form_opinionzoophilia" type="radio" value="1"></td>
		<td><input name="form_opinionzoophilia" type="radio" value="2"></td>
		<td><input name="form_opinionzoophilia" type="radio" value="3"></td>
		<td><input name="form_opinionzoophilia" type="radio" value="4"></td>
		<td><input name="form_opinionzoophilia" type="radio" value="5"></td>
		<td><input name="form_opinionzoophilia" type="radio" value="6"></td>
		<td><input name="form_opinionzoophilia" type="radio" value="7"></td>
		<td><input name="form_opinionzoophilia" type="radio" value="8"></td>
		<td><input name="form_opinionzoophilia" type="radio" value="9"></td>
		<td><input name="form_opinionzoophilia" type="radio" value="10"></td>
		<td style="background-color:#B96FB5;"></td>
	    </tr>

	    <tr id="oqscaleopt">
		<td style="width:164px; font-size: 10pt; font-family: 'Times New Roman'; text-align:right; border: none; background-color: #B96FB5">Furry online communities:</td>
		<td><input name="form_opiniononlinecommunities" type="radio" value="1"></td>
		<td><input name="form_opiniononlinecommunities" type="radio" value="2"></td>
		<td><input name="form_opiniononlinecommunities" type="radio" value="3"></td>
		<td><input name="form_opiniononlinecommunities" type="radio" value="4"></td>
		<td><input name="form_opiniononlinecommunities" type="radio" value="5"></td>
		<td><input name="form_opiniononlinecommunities" type="radio" value="6"></td>
		<td><input name="form_opiniononlinecommunities" type="radio" value="7"></td>
		<td><input name="form_opiniononlinecommunities" type="radio" value="8"></td>
		<td><input name="form_opiniononlinecommunities" type="radio" value="9"></td>
		<td><input name="form_opiniononlinecommunities" type="radio" value="10"></td>
		<td style="background-color:#B96FB5;"></td>
	    </tr>
	  </table>
	</td>
    </tr>

    <tr>
	<td class="oqlt">Q32. <div>On a scale of 1-10, how important do you think the following are to the furry fandom? <p class="striplink"><a href="/furrypollexp.php#Q32" Title="Explanation of Question">Explanation of Question</p></div></td>
	<td class="oqrt">
	  <table class="oqscale">
	    <tr id="oqscalekey"><td style="width:164px;">EXTREMELY UNIMPORTANT</td><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td><td>9</td><td>10</td><td style="width:164px;">EXTREMELY IMPORTANT</td></tr>
	    <tr id="oqscaleopt">
		<td style="width:164px; font-size: 10pt; font-family: 'Times New Roman'; text-align:right; border: none; background-color: #B96FB5">Artwork:</td>
		<td><input name="form_importanceartwork" type="radio" value="1"></td>
		<td><input name="form_importanceartwork" type="radio" value="2"></td>
		<td><input name="form_importanceartwork" type="radio" value="3"></td>
		<td><input name="form_importanceartwork" type="radio" value="4"></td>
		<td><input name="form_importanceartwork" type="radio" value="5"></td>
		<td><input name="form_importanceartwork" type="radio" value="6"></td>
		<td><input name="form_importanceartwork" type="radio" value="7"></td>
		<td><input name="form_importanceartwork" type="radio" value="8"></td>
		<td><input name="form_importanceartwork" type="radio" value="9"></td>
		<td><input name="form_importanceartwork" type="radio" value="10"></td>
		<td style="background-color:#B96FB5;"></td>
	    </tr>

	    <tr id="oqscaleopt">
		<td style="width:164px; font-size: 10pt; font-family: 'Times New Roman'; text-align:right; border: none; background-color: #B96FB5">Writing:</td>
		<td><input name="form_importancewriting" type="radio" value="1"></td>
		<td><input name="form_importancewriting" type="radio" value="2"></td>
		<td><input name="form_importancewriting" type="radio" value="3"></td>
		<td><input name="form_importancewriting" type="radio" value="4"></td>
		<td><input name="form_importancewriting" type="radio" value="5"></td>
		<td><input name="form_importancewriting" type="radio" value="6"></td>
		<td><input name="form_importancewriting" type="radio" value="7"></td>
		<td><input name="form_importancewriting" type="radio" value="8"></td>
		<td><input name="form_importancewriting" type="radio" value="9"></td>
		<td><input name="form_importancewriting" type="radio" value="10"></td>
		<td style="background-color:#B96FB5;"></td>
	    </tr>

	    <tr id="oqscaleopt">
		<td style="width:164px; font-size: 10pt; font-family: 'Times New Roman'; text-align:right; border: none; background-color: #B96FB5">Online communities:</td>
		<td><input name="form_importanceonlinecommunities" type="radio" value="1"></td>
		<td><input name="form_importanceonlinecommunities" type="radio" value="2"></td>
		<td><input name="form_importanceonlinecommunities" type="radio" value="3"></td>
		<td><input name="form_importanceonlinecommunities" type="radio" value="4"></td>
		<td><input name="form_importanceonlinecommunities" type="radio" value="5"></td>
		<td><input name="form_importanceonlinecommunities" type="radio" value="6"></td>
		<td><input name="form_importanceonlinecommunities" type="radio" value="7"></td>
		<td><input name="form_importanceonlinecommunities" type="radio" value="8"></td>
		<td><input name="form_importanceonlinecommunities" type="radio" value="9"></td>
		<td><input name="form_importanceonlinecommunities" type="radio" value="10"></td>
		<td style="background-color:#B96FB5;"></td>
	    </tr>

	    <tr id="oqscaleopt">
		<td style="width:164px; font-size: 10pt; font-family: 'Times New Roman'; text-align:right; border: none; background-color: #B96FB5">MUDs and similar RPGs:</td>
		<td><input name="form_importancemuds" type="radio" value="1"></td>
		<td><input name="form_importancemuds" type="radio" value="2"></td>
		<td><input name="form_importancemuds" type="radio" value="3"></td>
		<td><input name="form_importancemuds" type="radio" value="4"></td>
		<td><input name="form_importancemuds" type="radio" value="5"></td>
		<td><input name="form_importancemuds" type="radio" value="6"></td>
		<td><input name="form_importancemuds" type="radio" value="7"></td>
		<td><input name="form_importancemuds" type="radio" value="8"></td>
		<td><input name="form_importancemuds" type="radio" value="9"></td>
		<td><input name="form_importancemuds" type="radio" value="10"></td>
		<td style="background-color:#B96FB5;"></td>
	    </tr>

	    <tr id="oqscaleopt">
		<td style="width:164px; font-size: 10pt; font-family: 'Times New Roman'; text-align:right; border: none; background-color: #B96FB5">Conventions:</td>
		<td><input name="form_importanceconventions" type="radio" value="1"></td>
		<td><input name="form_importanceconventions" type="radio" value="2"></td>
		<td><input name="form_importanceconventions" type="radio" value="3"></td>
		<td><input name="form_importanceconventions" type="radio" value="4"></td>
		<td><input name="form_importanceconventions" type="radio" value="5"></td>
		<td><input name="form_importanceconventions" type="radio" value="6"></td>
		<td><input name="form_importanceconventions" type="radio" value="7"></td>
		<td><input name="form_importanceconventions" type="radio" value="8"></td>
		<td><input name="form_importanceconventions" type="radio" value="9"></td>
		<td><input name="form_importanceconventions" type="radio" value="10"></td>
		<td style="background-color:#B96FB5;"></td>
	    </tr>

	    <tr id="oqscaleopt">
		<td style="width:164px; font-size: 10pt; font-family: 'Times New Roman'; text-align:right; border: none; background-color: #B96FB5">Fursuiting:</td>
		<td><input name="form_importancefursuiting" type="radio" value="1"></td>
		<td><input name="form_importancefursuiting" type="radio" value="2"></td>
		<td><input name="form_importancefursuiting" type="radio" value="3"></td>
		<td><input name="form_importancefursuiting" type="radio" value="4"></td>
		<td><input name="form_importancefursuiting" type="radio" value="5"></td>
		<td><input name="form_importancefursuiting" type="radio" value="6"></td>
		<td><input name="form_importancefursuiting" type="radio" value="7"></td>
		<td><input name="form_importancefursuiting" type="radio" value="8"></td>
		<td><input name="form_importancefursuiting" type="radio" value="9"></td>
		<td><input name="form_importancefursuiting" type="radio" value="10"></td>
		<td style="background-color:#B96FB5;"></td>
	    </tr>
	  </table>
	</td>
    </tr>

    <tr>
	<td class="bqlt">BA1. <div>Which of the following conventions have you attended? (or, for conventions taking place in 2012, which you will attend)</div></td>
	<td class="bqrt">
	  <table style="border:1px solid black;">
	    <tr>
		<td style="width: 200px;"></td>
		<td class="tc3">95</td>
		<td class="tc3">96</td>
		<td class="tc3">97</td>
		<td class="tc3">98</td>
		<td class="tc3">99</td>
		<td class="tc3">00</td>
		<td class="tc3">01</td>
		<td class="tc3">02</td>
		<td class="tc3">03</td>
		<td class="tc3">04</td>
		<td class="tc3">05</td>
		<td class="tc3">06</td>
		<td class="tc3">07</td>
		<td class="tc3">08</td>
		<td class="tc3">09</td>
		<td class="tc3">10</td>
		<td class="tc3">11</td>
		<td class="tc3">12</td>
	    </tr>
	    <tr>
		<td style="width: 200px; text-align: right;">All Fur Fun</td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc1"><input name="form_allfurfun07" type="checkbox"></td>
		<td class="tc1"><input name="form_allfurfun08" type="checkbox"></td>
		<td class="tc1"><input name="form_allfurfun09" type="checkbox"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
	    </tr>
	    <tr>
		<td style="width: 200px; text-align: right;">AnthroCon</td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc1"><input name="form_anthrocon97" type="checkbox"></td>
		<td class="tc1"><input name="form_anthrocon98" type="checkbox"></td>
		<td class="tc1"><input name="form_anthrocon99" type="checkbox"></td>
		<td class="tc1"><input name="form_anthrocon00" type="checkbox"></td>
		<td class="tc1"><input name="form_anthrocon01" type="checkbox"></td>
		<td class="tc1"><input name="form_anthrocon02" type="checkbox"></td>
		<td class="tc1"><input name="form_anthrocon03" type="checkbox"></td>
		<td class="tc1"><input name="form_anthrocon04" type="checkbox"></td>
		<td class="tc1"><input name="form_anthrocon05" type="checkbox"></td>
		<td class="tc1"><input name="form_anthrocon06" type="checkbox"></td>
		<td class="tc1"><input name="form_anthrocon07" type="checkbox"></td>
		<td class="tc1"><input name="form_anthrocon08" type="checkbox"></td>
		<td class="tc1"><input name="form_anthrocon09" type="checkbox"></td>
		<td class="tc1"><input name="form_anthrocon10" type="checkbox"></td>
		<td class="tc1"><input name="form_anthrocon11" type="checkbox"></td>
		<td class="tc1"><input name="form_anthrocon12" type="checkbox"></td>
	    </tr>
	    <tr>
		<td style="width: 200px; text-align: right;">Califur</td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc1"><input name="form_califur04" type="checkbox"></td>
		<td class="tc1"><input name="form_califur05" type="checkbox"></td>
		<td class="tc1"><input name="form_califur06" type="checkbox"></td>
		<td class="tc1"><input name="form_califur07" type="checkbox"></td>
		<td class="tc1"><input name="form_califur08" type="checkbox"></td>
		<td class="tc1"><input name="form_califur09" type="checkbox"></td>
		<td class="tc1"><input name="form_califur10" type="checkbox"></td>
		<td class="tc1"><input name="form_califur11" type="checkbox"></td>
		<td class="tc1"><input name="form_califur12" type="checkbox"></td>
	    </tr>
	    <tr>
		<td style="width: 200px; text-align: right;">Confuzzled</td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc1"><input name="form_confuzzled08" type="checkbox"></td>
		<td class="tc1"><input name="form_confuzzled09" type="checkbox"></td>
		<td class="tc1"><input name="form_confuzzled10" type="checkbox"></td>
		<td class="tc1"><input name="form_confuzzled11" type="checkbox"></td>
		<td class="tc1"><input name="form_confuzzled12" type="checkbox"></td>
	    </tr>
	    <tr>
		<td style="width: 200px; text-align: right;">Eurofurence</td>
		<td class="tc1"><input name="form_eurofurence95" type="checkbox"></td>
		<td class="tc1"><input name="form_eurofurence96" type="checkbox"></td>
		<td class="tc1"><input name="form_eurofurence97" type="checkbox"></td>
		<td class="tc1"><input name="form_eurofurence98" type="checkbox"></td>
		<td class="tc1"><input name="form_eurofurence99" type="checkbox"></td>
		<td class="tc1"><input name="form_eurofurence00" type="checkbox"></td>
		<td class="tc1"><input name="form_eurofurence01" type="checkbox"></td>
		<td class="tc1"><input name="form_eurofurence02" type="checkbox"></td>
		<td class="tc1"><input name="form_eurofurence03" type="checkbox"></td>
		<td class="tc1"><input name="form_eurofurence04" type="checkbox"></td>
		<td class="tc1"><input name="form_eurofurence05" type="checkbox"></td>
		<td class="tc1"><input name="form_eurofurence06" type="checkbox"></td>
		<td class="tc1"><input name="form_eurofurence07" type="checkbox"></td>
		<td class="tc1"><input name="form_eurofurence08" type="checkbox"></td>
		<td class="tc1"><input name="form_eurofurence09" type="checkbox"></td>
		<td class="tc1"><input name="form_eurofurence10" type="checkbox"></td>
		<td class="tc1"><input name="form_eurofurence11" type="checkbox"></td>
		<td class="tc1"><input name="form_eurofurence12" type="checkbox"></td>
	    </tr>
	    <tr>
		<td style="width: 200px; text-align: right;">FA: United</td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc1"><input name="form_faunited07" type="checkbox"></td>
		<td class="tc1"><input name="form_faunited08" type="checkbox"></td>
		<td class="tc1"><input name="form_faunited09" type="checkbox"></td>
		<td class="tc1"><input name="form_faunited10" type="checkbox"></td>
		<td class="tc1"><input name="form_faunited11" type="checkbox"></td>
		<td class="tc1"><input name="form_faunited12" type="checkbox"></td>
	    </tr>
	    <tr>
		<td style="width: 200px; text-align: right;">FurFright</td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc1"><input name="form_furfright03" type="checkbox"></td>
		<td class="tc1"><input name="form_furfright04" type="checkbox"></td>
		<td class="tc1"><input name="form_furfright05" type="checkbox"></td>
		<td class="tc1"><input name="form_furfright06" type="checkbox"></td>
		<td class="tc1"><input name="form_furfright07" type="checkbox"></td>
		<td class="tc1"><input name="form_furfright08" type="checkbox"></td>
		<td class="tc1"><input name="form_furfright09" type="checkbox"></td>
		<td class="tc1"><input name="form_furfright10" type="checkbox"></td>
		<td class="tc1"><input name="form_furfright11" type="checkbox"></td>
		<td class="tc1"><input name="form_furfright12" type="checkbox"></td>
	    </tr>
	    <tr>
		<td style="width: 200px;"></td>
		<td class="tc3">95</td>
		<td class="tc3">96</td>
		<td class="tc3">97</td>
		<td class="tc3">98</td>
		<td class="tc3">99</td>
		<td class="tc3">00</td>
		<td class="tc3">01</td>
		<td class="tc3">02</td>
		<td class="tc3">03</td>
		<td class="tc3">04</td>
		<td class="tc3">05</td>
		<td class="tc3">06</td>
		<td class="tc3">07</td>
		<td class="tc3">08</td>
		<td class="tc3">09</td>
		<td class="tc3">10</td>
		<td class="tc3">11</td>
		<td class="tc3">11</td>
	    </tr>
	    <tr>
		<td style="width: 200px; text-align: right;">Furry Connection North</td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc1"><input name="form_furryconnectionnorth08" type="checkbox"></td>
		<td class="tc1"><input name="form_furryconnectionnorth09" type="checkbox"></td>
		<td class="tc1"><input name="form_furryconnectionnorth10" type="checkbox"></td>
		<td class="tc1"><input name="form_furryconnectionnorth11" type="checkbox"></td>
		<td class="tc1"><input name="form_furryconnectionnorth12" type="checkbox"></td>
	    </tr>
	    <tr>
		<td style="width: 200px; text-align: right;">Furry Fiesta</td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc1"><input name="form_furryfiesta09" type="checkbox"></td>
		<td class="tc1"><input name="form_furryfiesta10" type="checkbox"></td>
		<td class="tc1"><input name="form_furryfiesta11" type="checkbox"></td>
		<td class="tc1"><input name="form_furryfiesta12" type="checkbox"></td>
	    </tr>
	    <tr>
		<td style="width: 200px; text-align: right;">Furry Weekend Atlanta</td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc1"><input name="form_furryweekendatlanta04" type="checkbox"></td>
		<td class="tc1"><input name="form_furryweekendatlanta05" type="checkbox"></td>
		<td class="tc1"><input name="form_furryweekendatlanta06" type="checkbox"></td>
		<td class="tc1"><input name="form_furryweekendatlanta07" type="checkbox"></td>
		<td class="tc1"><input name="form_furryweekendatlanta08" type="checkbox"></td>
		<td class="tc1"><input name="form_furryweekendatlanta09" type="checkbox"></td>
		<td class="tc1"><input name="form_furryweekendatlanta10" type="checkbox"></td>
		<td class="tc1"><input name="form_furryweekendatlanta11" type="checkbox"></td>
		<td class="tc1"><input name="form_furryweekendatlanta12" type="checkbox"></td>
	    </tr>
	    <tr>
		<td style="width: 200px; text-align: right;">Further Confusion</td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc1"><input name="form_furtherconfusion99" type="checkbox"></td>
		<td class="tc1"><input name="form_furtherconfusion00" type="checkbox"></td>
		<td class="tc1"><input name="form_furtherconfusion01" type="checkbox"></td>
		<td class="tc1"><input name="form_furtherconfusion02" type="checkbox"></td>
		<td class="tc1"><input name="form_furtherconfusion03" type="checkbox"></td>
		<td class="tc1"><input name="form_furtherconfusion04" type="checkbox"></td>
		<td class="tc1"><input name="form_furtherconfusion05" type="checkbox"></td>
		<td class="tc1"><input name="form_furtherconfusion06" type="checkbox"></td>
		<td class="tc1"><input name="form_furtherconfusion07" type="checkbox"></td>
		<td class="tc1"><input name="form_furtherconfusion08" type="checkbox"></td>
		<td class="tc1"><input name="form_furtherconfusion09" type="checkbox"></td>
		<td class="tc1"><input name="form_furtherconfusion10" type="checkbox"></td>
		<td class="tc1"><input name="form_furtherconfusion11" type="checkbox"></td>
		<td class="tc1"><input name="form_furtherconfusion12" type="checkbox"></td>
	    </tr>
	    <tr>
		<td style="width: 200px; text-align: right;">IndyFurCon</td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc1"><input name="form_indyfurcon10" type="checkbox"></td>
		<td class="tc1"><input name="form_indyfurcon11" type="checkbox"></td>
		<td class="tc1"><input name="form_indyfurcon12" type="checkbox"></td>
	    </tr>
	    <tr>
		<td style="width: 200px; text-align: right;">Megaplex</td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc1"><input name="form_megaplex02" type="checkbox"></td>
		<td class="tc1"><input name="form_megaplex03" type="checkbox"></td>
		<td class="tc1"><input name="form_megaplex04" type="checkbox"></td>
		<td class="tc1"><input name="form_megaplex05" type="checkbox"></td>
		<td class="tc1"><input name="form_megaplex06" type="checkbox"></td>
		<td class="tc1"><input name="form_megaplex07" type="checkbox"></td>
		<td class="tc1"><input name="form_megaplex08" type="checkbox"></td>
		<td class="tc1"><input name="form_megaplex09" type="checkbox"></td>
		<td class="tc1"><input name="form_megaplex10" type="checkbox"></td>
		<td class="tc1"><input name="form_megaplex11" type="checkbox"></td>
		<td class="tc1"><input name="form_megaplex12" type="checkbox"></td>
	    </tr>
	    <tr>
		<td style="width: 200px; text-align: right;">Mephit Furmeet</td>
		<td class="tc1"><input name="form_mephitfurmeet95" type="checkbox"></td>
		<td class="tc1"><input name="form_mephitfurmeet96" type="checkbox"></td>
		<td class="tc1"><input name="form_mephitfurmeet97" type="checkbox"></td>
		<td class="tc1"><input name="form_mephitfurmeet98" type="checkbox"></td>
		<td class="tc1"><input name="form_mephitfurmeet99" type="checkbox"></td>
		<td class="tc1"><input name="form_mephitfurmeet00" type="checkbox"></td>
		<td class="tc1"><input name="form_mephitfurmeet01" type="checkbox"></td>
		<td class="tc1"><input name="form_mephitfurmeet02" type="checkbox"></td>
		<td class="tc1"><input name="form_mephitfurmeet03" type="checkbox"></td>
		<td class="tc1"><input name="form_mephitfurmeet04" type="checkbox"></td>
		<td class="tc1"><input name="form_mephitfurmeet05" type="checkbox"></td>
		<td class="tc1"><input name="form_mephitfurmeet06" type="checkbox"></td>
		<td class="tc1"><input name="form_mephitfurmeet07" type="checkbox"></td>
		<td class="tc1"><input name="form_mephitfurmeet08" type="checkbox"></td>
		<td class="tc1"><input name="form_mephitfurmeet09" type="checkbox"></td>
		<td class="tc1"><input name="form_mephitfurmeet10" type="checkbox"></td>
		<td class="tc1"><input name="form_mephitfurmeet11" type="checkbox"></td>
		<td class="tc1"><input name="form_mephitfurmeet12" type="checkbox"></td>
	    </tr>
	    <tr>
		<td style="width: 200px; text-align: right;">MiDFur</td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc1"><input name="form_midfur99" type="checkbox"></td>
		<td class="tc1"><input name="form_midfur00" type="checkbox"></td>
		<td class="tc1"><input name="form_midfur01" type="checkbox"></td>
		<td class="tc1"><input name="form_midfur02" type="checkbox"></td>
		<td class="tc1"><input name="form_midfur03" type="checkbox"></td>
		<td class="tc1"><input name="form_midfur04" type="checkbox"></td>
		<td class="tc1"><input name="form_midfur05" type="checkbox"></td>
		<td class="tc1"><input name="form_midfur06" type="checkbox"></td>
		<td class="tc1"><input name="form_midfur07" type="checkbox"></td>
		<td class="tc1"><input name="form_midfur08" type="checkbox"></td>
		<td class="tc1"><input name="form_midfur09" type="checkbox"></td>
		<td class="tc1"><input name="form_midfur10" type="checkbox"></td>
		<td class="tc1"><input name="form_midfur11" type="checkbox"></td>
		<td class="tc1"><input name="form_midfur12" type="checkbox"></td>
	    </tr>
	    <tr>
		<td style="width: 200px;"></td>
		<td class="tc3">95</td>
		<td class="tc3">96</td>
		<td class="tc3">97</td>
		<td class="tc3">98</td>
		<td class="tc3">99</td>
		<td class="tc3">00</td>
		<td class="tc3">01</td>
		<td class="tc3">02</td>
		<td class="tc3">03</td>
		<td class="tc3">04</td>
		<td class="tc3">05</td>
		<td class="tc3">06</td>
		<td class="tc3">07</td>
		<td class="tc3">08</td>
		<td class="tc3">09</td>
		<td class="tc3">10</td>
		<td class="tc3">11</td>
		<td class="tc3">12</td>
	    </tr>
	    <tr>
		<td style="width: 200px; text-align: right;">Midwest FurFest</td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc1"><input name="form_midwestfurfest00" type="checkbox"></td>
		<td class="tc1"><input name="form_midwestfurfest01" type="checkbox"></td>
		<td class="tc1"><input name="form_midwestfurfest02" type="checkbox"></td>
		<td class="tc1"><input name="form_midwestfurfest03" type="checkbox"></td>
		<td class="tc1"><input name="form_midwestfurfest04" type="checkbox"></td>
		<td class="tc1"><input name="form_midwestfurfest05" type="checkbox"></td>
		<td class="tc1"><input name="form_midwestfurfest06" type="checkbox"></td>
		<td class="tc1"><input name="form_midwestfurfest07" type="checkbox"></td>
		<td class="tc1"><input name="form_midwestfurfest08" type="checkbox"></td>
		<td class="tc1"><input name="form_midwestfurfest09" type="checkbox"></td>
		<td class="tc1"><input name="form_midwestfurfest10" type="checkbox"></td>
		<td class="tc1"><input name="form_midwestfurfest11" type="checkbox"></td>
		<td class="tc1"><input name="form_midwestfurfest12" type="checkbox"></td>
	    </tr>
	    <tr>
		<td style="width: 200px; text-align: right;">Morphicon</td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc1"><input name="form_morphicon03" type="checkbox"></td>
		<td class="tc1"><input name="form_morphicon04" type="checkbox"></td>
		<td class="tc1"><input name="form_morphicon05" type="checkbox"></td>
		<td class="tc1"><input name="form_morphicon06" type="checkbox"></td>
		<td class="tc1"><input name="form_morphicon07" type="checkbox"></td>
		<td class="tc1"><input name="form_morphicon08" type="checkbox"></td>
		<td class="tc1"><input name="form_morphicon09" type="checkbox"></td>
		<td class="tc1"><input name="form_morphicon10" type="checkbox"></td>
		<td class="tc1"><input name="form_morphicon11" type="checkbox"></td>
		<td class="tc1"><input name="form_morphicon12" type="checkbox"></td>
	    </tr>
	    <tr>
		<td style="width: 200px; text-align: right;">Oklacon</td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc1"><input name="form_oklacon03" type="checkbox"></td>
		<td class="tc1"><input name="form_oklacon04" type="checkbox"></td>
		<td class="tc1"><input name="form_oklacon05" type="checkbox"></td>
		<td class="tc1"><input name="form_oklacon06" type="checkbox"></td>
		<td class="tc1"><input name="form_oklacon07" type="checkbox"></td>
		<td class="tc1"><input name="form_oklacon08" type="checkbox"></td>
		<td class="tc1"><input name="form_oklacon09" type="checkbox"></td>
		<td class="tc1"><input name="form_oklacon10" type="checkbox"></td>
		<td class="tc1"><input name="form_oklacon11" type="checkbox"></td>
		<td class="tc1"><input name="form_oklacon12" type="checkbox"></td>
	    </tr>
	    <tr>
		<td style="width: 200px; text-align: right;">RBW</td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc1"><input name="form_rbw06" type="checkbox"></td>
		<td class="tc1"><input name="form_rbw07" type="checkbox"></td>
		<td class="tc1"><input name="form_rbw08" type="checkbox"></td>
		<td class="tc1"><input name="form_rbw09" type="checkbox"></td>
		<td class="tc1"><input name="form_rbw10" type="checkbox"></td>
		<td class="tc1"><input name="form_rbw11" type="checkbox"></td>
		<td class="tc1"><input name="form_rbw12" type="checkbox"></td>
	    </tr>
	    <tr>
		<td style="width: 200px; text-align: right;">RainFurrest</td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc1"><input name="form_rainfurrest07" type="checkbox"></td>
		<td class="tc1"><input name="form_rainfurrest08" type="checkbox"></td>
		<td class="tc1"><input name="form_rainfurrest09" type="checkbox"></td>
		<td class="tc1"><input name="form_rainfurrest10" type="checkbox"></td>
		<td class="tc1"><input name="form_rainfurrest11" type="checkbox"></td>
		<td class="tc1"><input name="form_rainfurrest12" type="checkbox"></td>
	    </tr>
	    <tr>
		<td style="width: 200px; text-align: right;">Rocket City FurMeet</td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc1"><input name="form_rocketcityfurmeet03" type="checkbox"></td>
		<td class="tc1"><input name="form_rocketcityfurmeet04" type="checkbox"></td>
		<td class="tc1"><input name="form_rocketcityfurmeet05" type="checkbox"></td>
		<td class="tc1"><input name="form_rocketcityfurmeet06" type="checkbox"></td>
		<td class="tc1"><input name="form_rocketcityfurmeet07" type="checkbox"></td>
		<td class="tc1"><input name="form_rocketcityfurmeet08" type="checkbox"></td>
		<td class="tc1"><input name="form_rocketcityfurmeet09" type="checkbox"></td>
		<td class="tc1"><input name="form_rocketcityfurmeet10" type="checkbox"></td>
		<td class="tc1"><input name="form_rocketcityfurmeet11" type="checkbox"></td>
		<td class="tc1"><input name="form_rocketcityfurmeet12" type="checkbox"></td>
	    </tr>
	    <tr>
		<td style="width: 200px; text-align: right;">Rocky Mountain Fur Con</td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc1"><input name="form_rockymountainfurcon07" type="checkbox"></td>
		<td class="tc1"><input name="form_rockymountainfurcon08" type="checkbox"></td>
		<td class="tc1"><input name="form_rockymountainfurcon09" type="checkbox"></td>
		<td class="tc1"><input name="form_rockymountainfurcon10" type="checkbox"></td>
		<td class="tc1"><input name="form_rockymountainfurcon11" type="checkbox"></td>
		<td class="tc1"><input name="form_rockymountainfurcon12" type="checkbox"></td>
	    </tr>
	    <tr>
		<td style="width: 200px; text-align: right;">IndyFurCon</td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc2"></td>
		<td class="tc1"><input name="form_whatthefur10" type="checkbox"></td>
		<td class="tc1"><input name="form_whatthefur11" type="checkbox"></td>
		<td class="tc1"><input name="form_whatthefur12" type="checkbox"></td>
	    </tr>
	    <tr>
	    <td style="text-align: right;">
	    Other:</td><td colspan="16"> <input name="form_con_ext" type="text" size="36">
	    </td>
	  </tr>
	  </table>
	</td>
    </tr>

    <tr>
	<td class="bqlt">BA2. <div>Which of the following websites do you belong to, participate in, or follow regularly? <br />If you have a membership at one of these websites or check it once a week or more, consider yourself a follower of it.</div></td>
	<td class="bqrt">
	  <input name="form_website_artspots" type="checkbox"> ArtSpots <br />
	  <input name="form_website_deviantart" type="checkbox"> DeviantArt <br />
	  <input name="form_website_e621" type="checkbox"> e621 <br />
	  <input name="form_website_flist" type="checkbox"> F-list <br />
	  <input name="form_website_fchan" type="checkbox"> Fchan <br />
	  <input name="form_website_flayrah" type="checkbox"> Flayrah <br />
	  <input name="form_website_furaffinity" type="checkbox"> FurAffinity <br /> 
	  <input name="form_website_furcadia" type="checkbox"> Furcadia <br />
	  <input name="form_website_furnation" type="checkbox"> FurNation <br />
	  <input name="form_website_furocity" type="checkbox"> Furocity  <br />
	  <input name="form_website_furrag" type="checkbox"> Furrag  <br />
	  <input name="form_website_furry4life" type="checkbox"> Furry 4 Life  <br />
	  <input name="form_website_furryteens" type="checkbox"> Furry Teens  <br />
	  <input name="form_website_furspace" type="checkbox"> Furspace  <br />
	  <input name="form_website_furtopia" type="checkbox"> Furtopia  <br />
	  <input name="form_website_inkbunny" type="checkbox"> Inkbunny  <br />
	  <input name="form_website_pounced" type="checkbox"> Pounced <br />
	  <input name="form_website_sofurry" type="checkbox"> SoFurry <br />
	  <input name="form_website_vcl" type="checkbox"> VCL <br />
	  <input name="form_website_wikifur" type="checkbox"> WikiFur <br />
	  Other: <input name="form_website_ext" type="text" size="36">
	</td>
    </tr>

    <tr>
	<td class="bqlt">BA3. <div>If you identify with a particular animal or have a particular furry persona, what is it?<br /><br />Select multiple options if said animal is a hybrid. <br /><br />If the following choices are insufficient, feel free to write in one. Please provide information <span style="font-style:normal;">only on your primary avatar</span>. If you have multiple avatars, please include additional details in the write-in box provided.<br /><br />Since people keep writing me about it, note that <span style="font-style: normal;">musteloid</span> is a superfamily consisting of the mustelids, the procyonids, the mephitids, and the ailurids. See for instance Ulfur Arnason, Anette, Gullberg, et. al. in "Mitogenomic Analyses of Caniform Relationships" (<span style="font-style: normal;">Molecular Phylogenetics and Evolution 45.3</span>, December 2007) or Jun Sato, Mieczyslaw Wolsan, et. al in "Deciphering and dating the red panda's ancestry and early adaptive radiation of Musteloidea" (<span style="font-style: normal;">Molecular Phylogenetics and Evolution 53.3</span>, December 2009). Take it up with them >:|</div></td>
	<td class="bqrt">
	  <input name="form_animal_wolf" type="checkbox"> Canine, Wolf<br />
	  <input name="form_animal_redfox" type="checkbox"> Canine, Fox, Red<br />
	  <input name="form_animal_greyfox" type="checkbox"> Canine, Fox, Grey<br />
	  <input name="form_animal_arcticfox" type="checkbox"> Canine, Fox, Arctic<br />
	  <input name="form_animal_kitsune" type="checkbox"> Canine, Fox, Kitsune<br />
	  <input name="form_animal_otherfox" type="checkbox"> Canine, Fox, Other/Nonspecific<br />
	  <input name="form_animal_coyote" type="checkbox"> Canine, Coyote<br />
	  <input name="form_animal_jackal" type="checkbox"> Canine, Jackal<br />
	  <input name="form_animal_germanshepherd" type="checkbox"> Canine, Dog, German shepherd<br />
	  <input name="form_animal_husky" type="checkbox"> Canine, Dog, Husky<br />
	  <input name="form_animal_collie" type="checkbox"> Canine, Dog, Collie<br />
	  <input name="form_animal_otherdog" type="checkbox"> Canine, Dog, Other/Nonspecific<br />
	  <input name="form_animal_othercanine" type="checkbox"> Canine, Other/Nonspecific<br />
	  <hr />
	  <input name="form_animal_tiger" type="checkbox"> Feline, Tiger<br />
	  <input name="form_animal_lion" type="checkbox"> Feline, Lion<br />
	  <input name="form_animal_leopard" type="checkbox"> Feline, Leopard<br />
	  <input name="form_animal_snowleopard" type="checkbox"> Feline, Snow leopard<br />
	  <input name="form_animal_panther" type="checkbox"> Feline, Panther<br />
	  <input name="form_animal_cheetah" type="checkbox"> Feline, Cheetah<br />
	  <input name="form_animal_cougar" type="checkbox"> Feline, Cougar<br />
	  <input name="form_animal_domesticcat" type="checkbox"> Feline, Domestic cat<br />
	  <input name="form_animal_otherfeline" type="checkbox"> Feline, Other/Nonspecific<br />
	  <hr />
	  <input name="form_animal_dragon" type="checkbox"> Reptiloid, Dragon<br />
	  <input name="form_animal_lizard" type="checkbox"> Reptiloid, Lizard<br />
	  <input name="form_animal_dinosaur" type="checkbox"> Reptiloid, Dinosaur<br />
	  <input name="form_animal_otherreptile" type="checkbox"> Reptiloid, Other/Nonspecific<br />
	  <hr />
	  <input name="form_animal_raccoon" type="checkbox"> Musteloid, Raccoon<br />
	  <input name="form_animal_skunk" type="checkbox"> Musteloid, Skunk<br />
	  <input name="form_animal_badger" type="checkbox"> Musteloid, Badger<br />
	  <input name="form_animal_riverotter" type="checkbox"> Musteloid, Otter, River<br />
	  <input name="form_animal_seaotter" type="checkbox"> Musteloid, Otter, Sea<br />
	  <input name="form_animal_weasel" type="checkbox"> Musteloid, Weasel<br />
	  <input name="form_animal_othermustelid" type="checkbox"> Musteloid, Other mustelid<br />
	  <input name="form_animal_redpanda" type="checkbox"> Musteloid, Red Panda<br />
	  <input name="form_animal_othermusteloid" type="checkbox"> Musteloid, Other/Nonspecific<br />
	  <hr />
	  <input name="form_animal_horse" type="checkbox"> Ungulate, Horse<br />
	  <input name="form_animal_deer" type="checkbox"> Ungulate, Deer<br />
	  <input name="form_animal_otherungulate" type="checkbox"> Ungulate, Other<br />	  
	  <hr />
	  <input name="form_animal_brownbear" type="checkbox"> Bear, Brown<br />
	  <input name="form_animal_grizzlybear" type="checkbox"> Bear, Grizzly<br />
	  <input name="form_animal_pandabear" type="checkbox"> Bear, Panda<br />
	  <input name="form_animal_polarbear" type="checkbox"> Bear, Polar<br />
	  <input name="form_animal_otherbear" type="checkbox"> Bear, Other/Nonspecific<br />
	  <hr />
	  <input name="form_animal_mouse" type="checkbox"> Rodent, Mouse<br />
	  <input name="form_animal_rat" type="checkbox"> Rodent, Rat<br />
	  <input name="form_animal_squirrel" type="checkbox"> Rodent, Squirrel<br />
	  <input name="form_animal_other" type="checkbox"> Rodent, Other/Nonspecific<br />
	  <hr />
	  <input name="form_animal_raven" type="checkbox"> Bird, Raven/Crow<br />
	  <input name="form_animal_raptor" type="checkbox"> Bird, Bird of Prey<br />
	  <input name="form_animal_otherbird" type="checkbox"> Bird, Other<br />
	  <hr />
	  <input name="form_animal_rabbit" type="checkbox"> Rabbit/Hare<br />
	  <hr />
	  <input name="form_animal_kangaroo" type="checkbox"> Kangaroo<br />
	  <input name="form_animal_koala" type="checkbox"> Koala<br />
	  <input name="form_animal_othermarsupial" type="checkbox"> Other Marsupial<br />
	  <hr />
	  <input name="form_animal_lemur" type="checkbox"> Lemur<br />
	  <input name="form_animal_monkey" type="checkbox"> Monkey<br />
	  <input name="form_animal_otherprimate" type="checkbox"> Other Primate<br />
	  <hr />
	  <input name="form_animal_hyaena" type="checkbox"> Hyena<br />
	  <input name="form_animal_bat" type="checkbox"> Bat<br />
	  <input name="form_animal_griffin" type="checkbox"> Griffin<br />
	  <hr />
	  Other <input name="form_animal_ext" type="text" size="36">
	</td>
    </tr>

    <tr>
	<td class="bqlt">BA4. <div>If you chose an animal above, is there a reason you identify with it?</div></td>
	<td class="bqrt">
	  <textarea wrap=soft name="form_animal_explanation" cols="72" rows="2"></textarea>
	</td>
    </tr>
    
    <tr>
	<td class="bqlt">BA5. <div>Psychographic battery: <br /><br />For the questions on the right, please select how strongly you personally agree with the statement.</div></td>
	<td class="bqrt">
		  <table class="mqscale">
	    	<tr id="mqscalekey"><td style="width: 268px; border: 0px; background-color: #B3B3B3;"><td style="width:110px;">STRONGLY AGREE</td><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td style="width:110px;">STRONGLY DISAGREE</td></tr>
	  <?php
		$q = array();
		$qr = array();
		$q[] = array("Faith and spirituality is a good way of understanding the world","faith_and_spirituality");
		$q[] = array("My friends look to me for advice about movies, music, video games, or pop culture","friends_look_advice");
		$q[] = array("In general, I'd rather make something instead of buying it","make_rather_than_buy");
		$q[] = array("I'm more talented than most people in my peer group","more_talented_than_peers");
		$q[] = array("I value having cutting-edge technology","value_cutting_edge_");
		$q[] = array("I'd rather patronize a small business than a big company","rather_patronize_small_businesses");
		$q[] = array("Creativity is one of my strongest attributes","enjoy_creating_things");
		$q[] = array("Where pop culture is concerned, I'm ahead of the curve","ahead_of_pop_culture");
		$q[] = array("I admit, I have a tendency to overthink things","tendency_to_overthink");
		$q[] = array("Mass media is too 'lowest common denominator' for my tastes","mass_media_lcd");
		$q[] = array("I enjoy being able to lead and influence others","enjoy_leading");
		$q[] = array("I tend to focus on a few specific interests of mine","focus_on_specific_interests");
		$q[] = array("People are too reliant on technology these days","too_reliant_on_tech");
		$q[] = array("Even if technically illegal, file-sharing of copyrighted material isn't that big a deal","filesharing_nbd");
		$q[] = array("It's important for people to be politically active","citizens_politically_active");
		$q[] = array("In general, I want to be considered fashionable","want_to_be_fashionable");
		$q[] = array("It's better to have an exciting life than one where every day is predictable","exciting_rather_than_predictable");
		$q[] = array("I believe in learning for learning's sake -- it doesn't need to have a purpose","learning_for_learnings_sake");
		$q[] = array("I find a sense of routine comforting","routine_is_comforting");
		$q[] = array("Advertising is a useful source of information","advertising_is_useful");
		$q[] = array("What other people think of me is important","other_people_think_important");
		$q[] = array("I like learning about how the universe works","learn_about_universe");
		$q[] = array("When something is confusing, it's better to find a simpler option than to spend time trying to figure it out","find_simpler_option");
		$q[] = array("My decisions are motivated primarily by my moral code","decisions_moral_code");
		$q[] = array("People are more distant from each other these days","people_more_distant");
		$q[] = array("I'm often the first person in my group of friends to try something new","first_to_try_new_things");
		$q[] = array("I consider myself to be an intellectual","consider_intellectual");
		$q[] = array("I have a tendency to buy things on impulse","buy_on_impulse");
		$q[] = array("I find corporations, and corporate products, rather soulless and uninspiring","corporations_soulless");
		$q[] = array("I enjoy traveling and discovering new things and places","enjoy_traveling");
		foreach ($q as $question) {
		  $key = chr(rand(97,122)) . chr(rand(97,122)) . chr(rand(97,122));
		  $qr[] = array($key,$question);
		}
		asort($qr);
	      	  $i = 1;
  	  foreach ($qr as $question) {
  	  	echo "<tr id=\"mqscaleopt\">";
  	  	echo "<td colspan=\"2\" style=\"width:164px; font-size: 10pt; padding: 5px; font-family: 'Times New Roman'; text-align:right; border: none; background-color: #B3B3B3;\">".$question[1][0]."</td>";
  	  	echo "<td><input name=\"form_".$question[1][1]."\" type=\"radio\" value=\"6\"></td>";
  	  	echo "<td><input name=\"form_".$question[1][1]."\" type=\"radio\" value=\"5\"></td>";
  	  	echo "<td><input name=\"form_".$question[1][1]."\" type=\"radio\" value=\"4\"></td>";
  	  	echo "<td><input name=\"form_".$question[1][1]."\" type=\"radio\" value=\"3\"></td>";
  	  	echo "<td><input name=\"form_".$question[1][1]."\" type=\"radio\" value=\"2\"></td>";
  	  	echo "<td><input name=\"form_".$question[1][1]."\" type=\"radio\" value=\"1\"></td><td style=\"background-color:#B3B3B3; border: 0px;\"></td>";
  	  	echo "</tr>";
  	  	
  	  	if($i%5==0) {
  	  		echo "<tr id=\"mqscalekey\"><td style=\"width: 268px; border: 0px; background-color: #B3B3B3;\"><td style=\"width:110px;\">STRONGLY AGREE</td><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td style=\"width:110px;\">STRONGLY DISAGREE</td></tr>";
  	  	}
  	    $i++;
  	  }
	  ?>
	  </table>
	</td>
    </tr>

    <tr>
	<td class="bqlt">BA6. <div>Please add any additional comments here:</div></td>
	<td class="bqrt">
	  <textarea wrap=soft name="form_additionalinformation" cols="72" rows="5"></textarea>
	</td>
    </tr>

    <tr>
	<td class="bqlt">BA7. <div>Microsurveys:</div></td>
	<td class="bqrt">
	  From time to time, I will use single-question or extremely small microsurveys to gather information that was not directly relevant to the survey here (like "do you drive a car?" or "do you own your own website" or something like this). If you are willing to participate in these, enter your email address below and on occasion you will be randomly selected to receive one of these.<br /><br />Your email address will <em>NOT BE STORED WITH THE SURVEY RESULTS</em> and I will be the only one who knows about it. This is, obviously, not obligatory.<br /><br /><input type="text" name="form_email" size="36"> <br /><br />Note that if you completed this survey last year, I have purged your E-mail from my records. If you want to be considered in the future, consider this your chance to re-enlist.
	</td>
    </tr>

  </table>

  <div style="width: 100%; background-color: #CCC; font-family: 'Courier New'; text-align: center; ">End Survey

  <div style="text-align: left">Please review your answers to ensure that they are accurate. When you are satisfied, click below to submit this survey.
	<div align="center"><input type='submit' value='Click once to submit'></div>

  </div>
  </div>

   </div>
  </form>

  </div>
</html>