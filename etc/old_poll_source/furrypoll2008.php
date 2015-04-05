<html>
  <head>
    <title>Furry Survey v.2.1.3</title>
    <link href="kdcstyles.css" rel="stylesheet" type="text/css">
	<style type="text/css">
	  <!--
	    .n0 {
		background-color:#777777;
		text-align='center';
		    }
	    .n1 {
            background-color:#999999;
	    }
	    .n2 {
		background-color:#c8c8c8;
            vertical-align='top';
	    }
	    a span {display: none; margin: 5px 5px 5px 5px;}
	    a {position: relative;}
	    a:hover span {
  		position: absolute;
  		top: 5px;
  		left: 10px;
  		display: block;
  		background: #fff;
  		border: 1px solid black;
		color: black;
		font-style: italic;
	    }
	  -->
	</style>
  </head>

  <body>

  <p class="mainheader">Furry Survey v.2.1.4</p>
  <p class="navbartext">Looking for the results? Click <a href="ot_furrysurvey.php">here</a> for the absolute latest, or <a href="http://www.furcenter.org/pubs/SF_2008.pdf">here</a> for the formal writeup (though not too formal, I promise)!</p>

  <p><strong>Who am you?</strong></p>

  <p>I am Alex "Klisoura" Osaki, a furry writer, essayist, and researcher. I have a degree in cultural anthropology and enough of a statistics background to both recognise the shortcomings of this survey and consider it valid enough to post anyway. If you have any questions, comments, or suggested improvements you can contact me via AIM at "OSDCC" or by e-mail at <a href="mailto:bce@klisoura.com">bce@klisoura.com</a>.

  <p><strong>What is this?</strong></p>
  
  <p>This survey is designed to collect information on the furry fandom. It is my belief that primary-source data is critical to an informed view of any demographic, ours included. It covers a range of topics from age to sexual orientation to hobbies linked with the fandom. There are thirty-one questions in total; the survey should not take more than a few minutes of your time. Feel free to be forthcoming: the survey is completely anonymous.</p>

  <p>Finally, I would like to ask that if you find this survey useful, valuable, or interesting,<em>please</em> pass it on to your furry friends and community. There are tens of thousands of furries out there; let's see if we can't get them all.</p>
 
  <p>-Alex</p>

  <form enctype="multipart/form-data" action="pollsql.php" method="post">
   <div align="center">
    <div style='width: 80%; border-style: solid; border-color: black; border-width: 1px;'>
     <table width="100%">
      <tr><td colspan="2" align="center">Survey begins below:</td></tr>
      <tr><td height="20" width="50%">&nbsp;</td><td width="50%"></td></tr>
 		 <tr><td colspan='2' align='center'>
		 <?php
			$user="readaccess";
			$password="readpass";
			$database="surv1";
			$link = mysql_connect("mysql.klisoura.com",$user,$password);
			mysql_select_db($database) or die("Unable to select database");
			$sql = "SELECT date FROM furrypoll WHERE entryid='$REMOTE_ADDR'";
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
		 </td></tr>
	       <tr><td class='n2'>Q1. Please enter your age, rounded to the nearest year:</td>
             <td class='n1'>
               <input name='formage' type='text' size='2' value='-1'>
             </td></tr>

	       <tr><td class='n2'>Q2. Please select the option which most closely describes your biological sex:</td>
             <td class='n1'>
               <input name='formsex' type='radio' value='z' checked>Not disclosed<br />
               <input name='formsex' type='radio' value='a'>Male<br />
               <input name='formsex' type='radio' value='b'>Female<br />
               <input name='formsex' type='radio' value='x'>Other<br />
             </td></tr>

	       <tr><td class='n2'>Q3. Please select the option which most closely describes your self-identified gender:</td>
             <td class='n1'>
               <input name='formgender' type='radio' value='z' checked>Not disclosed<br />
               <input name='formgender' type='radio' value='a'>Male<br />
               <input name='formgender' type='radio' value='b'>Female<br />
               <input name='formgender' type='radio' value='x'>Other<br />
             </td></tr>

	       <tr><td class='n2'>Q4. Where do you live?</td>
             <td class='n1'>
               <select name='formlocation'>
		     <option value='us'>United States</option>
		     <option value='ca'>Canada</option>
		     <option value='uk'>United Kingdom</option>
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
		     <option value='de'>Germany</option>
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
		     <option value='zz'>Not disclosed</option>
		   </select>
             </td></tr>

	       <tr><td class='n2'>Q5. Please select the option which most closely describes your spirituality:</td>
             <td class='n1'>
               <input name='formreligion' type='radio' value='z' checked>Not disclosed<br />
               <input name='formreligion' type='radio' value='a'>Christian, Catholic<br />
               <input name='formreligion' type='radio' value='b'>Christian, Protestant<br />
               <input name='formreligion' type='radio' value='c'>Christian, other denomination<br />
               <input name='formreligion' type='radio' value='d'>Muslim<br />
               <input name='formreligion' type='radio' value='e'>Hindu<br />
               <input name='formreligion' type='radio' value='f'>Jewish<br />
               <input name='formreligion' type='radio' value='g'>Pagan<br />
               <input name='formreligion' type='radio' value='h'>Buddhist<br />
               <input name='formreligion' type='radio' value='i'>Agnostic<br />
               <input name='formreligion' type='radio' value='j'>Atheist<br />
               <input name='formreligion' type='radio' value='x'>Other (optionally, provide more information below)<br />
		   <input name='formreligionapp' type='text' size='50'><br />
             </td></tr>

	       <tr><td class='n2'>Q6. Please select the option which most closely describes your ethnicity:</td>
             <td class='n1'>
               <input name='formrace' type='radio' value='z' checked>Not disclosed<br />
               <input name='formrace' type='radio' value='a'>Caucasian, non-Hispanic<br />
               <input name='formrace' type='radio' value='b'>Asian<br />
               <input name='formrace' type='radio' value='c'>African<br />
               <input name='formrace' type='radio' value='d'>Native-American/Pacific Islander<br />
		   <input name='formrace' type='radio' value='e'>Hispanic<br />
               <input name='formrace' type='radio' value='x'>Other (optionally, provide more information below)<br />
		   <input name='formraceapp' type='text' size='50'><br />
             </td></tr>

	       <tr><td class='n2'>Q7. Please select the option which most closely describes your political views (if it's easier, just write in the space provided): <p class='navbartext'><a href=#>Explanation of this question<span>This question asks about your political orientation. Rather than tagging the options with party-centric labels, I've chosen a reasonably well known continuum from liberalism to conservatism. To avoid making the question too complicated, I have limited the options available. If you feel too constrained, feel free to write in a further description.</span></a></p></td>
             <td class='n1'>
               <input name='formpolitics' type='radio' value='z' checked>Not disclosed<br />
               <input name='formpolitics' type='radio' value='a'>Highly liberal<br />
               <input name='formpolitics' type='radio' value='b'>Liberal<br />
               <input name='formpolitics' type='radio' value='c'>Moderate<br />
               <input name='formpolitics' type='radio' value='d'>Conservative<br />
		   <input name='formpolitics' type='radio' value='e'>Highly conservative<br />
               <input name='formpolitics' type='radio' value='x'>Other (optionally, provide more information below)<br />
		   <input name='formpoliticsapp' type='text' size='50'><br />
             </td></tr>

	       <tr><td class='n2'>Q8. Please select the option which most closely describes your occupation (if it's easier, just write in the space provided): <p class='navbartext'><a href=#>Explanation of this question<span>This question asks about your occupation. It may be best to choose the general option that most reflects what you do for a living; if you feel the options are too limited, feel free to write in a further description.</span></a></p></td>
             <td class='n1'>
               <input name='formoccupation' type='radio' value='z' checked>Not disclosed<br />
               <input name='formoccupation' type='radio' value='a'>None<br />
               <input name='formoccupation' type='radio' value='b'>Student<br />
               <input name='formoccupation' type='radio' value='c'>Administrative<br />
               <input name='formoccupation' type='radio' value='d'>Sales/Support<br />
		   <input name='formoccupation' type='radio' value='e'>Technical/IT<br />
		   <input name='formoccupation' type='radio' value='f'>Professional<br />
		   <input name='formoccupation' type='radio' value='g'>Service<br />
		   <input name='formoccupation' type='radio' value='h'>Retired<br />
               <input name='formoccupation' type='radio' value='x'>Other (optionally, provide more information below)<br />
		   <input name='formoccupationapp' type='text' size='50'><br />
             </td></tr>

	       <tr><td class='n2'>Q9. Please select the option which most closely describes your yearly individual income level (if it's easier, just write in the space provided): <p class='navbartext'><a href=#>Explanation of this question<span>Most furries are American and so this question is phrased in terms of American dollars. If you would like to answer it but are not American, you can write in an answer)</span></a></p></td>
             <td class='n1'>
               <input name='formincome' type='radio' value='z' checked>Not disclosed<br />
               <input name='formincome' type='radio' value='a'>&lt;$9,999<br />
               <input name='formincome' type='radio' value='b'>$10,000-$14,999<br />
               <input name='formincome' type='radio' value='c'>$15,000-$24,999<br />
               <input name='formincome' type='radio' value='d'>$25,000-$44,999<br />
		   <input name='formincome' type='radio' value='e'>$45,000-$69,999<br />
		   <input name='formincome' type='radio' value='f'>$70,000-$99,999<br />
		   <input name='formincome' type='radio' value='g'>&gt;$100,000<br />
               <input name='formincome' type='radio' value='x'>Other (optionally, provide more information below)<br />
		   <input name='formincomeapp' type='text' size='50'><br />
             </td></tr>

	       <tr><td class='n2'>Q10. Please select the option which most closely describes your sexual orientation:</td>
             <td class='n1'>
               <input name='formorientation' type='radio' value='z' checked>Not disclosed<br />
               <input name='formorientation' type='radio' value='a'>Heterosexual<br />
               <input name='formorientation' type='radio' value='b'>Homosexual<br />
               <input name='formorientation' type='radio' value='c'>Bisexual<br />
               <input name='formorientation' type='radio' value='d'>Neither<br />
               <input name='formorientation' type='radio' value='x'>Other (optionally, provide more information below)<br />
		   <input name='formorientationapp' type='text' size='50'><br />
             </td></tr>

	       <tr><td class='n2'>Q11. Please select the option which most closely describes your highest level of education: <p class='navbartext'><a href=#>Explanation of this question<span>This question is intended to record your <strong>current highest educational attainment</strong>. If you are a high school graduate with any completed formal education beyond high school (vocational training, associate's degree, university), for instance, you should choose "some college/post high-school". If you are currently in high school, college, or graduate school, choose "Some high school", "Some college", or "Some postcollege", respectively. Feel free to provide further information (I do read all the comments) </span></a></p></td>
             <td class='n1'>
               <input name='formeducationlevel' type='radio' value='z' checked>Not disclosed<br />
               <input name='formeducationlevel' type='radio' value='a'>Some high school<br />
               <input name='formeducationlevel' type='radio' value='b'>High school graduate<br />
               <input name='formeducationlevel' type='radio' value='c'>Some college/post high-school<br />
               <input name='formeducationlevel' type='radio' value='d'>College/post high-school graduate<br />
               <input name='formeducationlevel' type='radio' value='e'>Some postcollege<br />
               <input name='formeducationlevel' type='radio' value='f'>I hold an advanced degree<br />
               <input name='formeducationlevel' type='radio' value='x'>Other<br />
		   (optionally, if you have specialised education--college or post-high school vocational--provide more information below)<br />
		   <input name='formeducationlevelapp' type='text' size='50'><br />
             </td></tr>

	       <tr><td class='n2'>Q12. How long have you considered yourself a furry? (in years, decimal values ok)</td>
             <td class='n1'>
		   <input name='formhowlongfurry' type='text' size='2' value='-1'>
             </td></tr>

	       <tr><td class='n2'>Q13. How many other furries do you know? (decimal values not ok, sorry)<p class='navbartext'><a href=#>Explanation of this question<span>This question asks how many furries you personally know. What this means to you is obviously at your discretion. For most people, it means the furries that they interact with on a one-on-one basis, or at least more intimately than just, for example, posting on the same forum or sharing an online RPG.</span></a></p></td>
             <td class='n1'>
		   <input name='formhowmanyothers' type='text' size='2' value='-1'>
             </td></tr>

	       <tr><td class='n2'>Q14. On the whole, how do you think non-furries respond to furriness?</td>
             <td class='n1'>
               <input name='formreactionpublic' type='radio' value='z' checked>Not disclosed<br />
               <input name='formreactionpublic' type='radio' value='a'>Extremely Positively<br />
               <input name='formreactionpublic' type='radio' value='b'>Positively<br />
               <input name='formreactionpublic' type='radio' value='c'>Ambivalently<br />
               <input name='formreactionpublic' type='radio' value='d'>Negatively<br />
               <input name='formreactionpublic' type='radio' value='e'>Extremely Negatively<br />
               <input name='formreactionpublic' type='radio' value='f'>They have no knowledge<br />
             </td></tr>

	       <tr><td class='n2'>Q15. Do they respond to you, personally, in a significantly different fashion?</td>
             <td class='n1'>
               <input name='formreactionprivate' type='radio' value='z' checked>Not disclosed<br />
               <input name='formreactionprivate' type='radio' value='a'>No<br />
               <input name='formreactionprivate' type='radio' value='b'>Yes, they respond more positively<br />
               <input name='formreactionprivate' type='radio' value='c'>Yes, they respond more negatively<br />
               <input name='formreactionprivate' type='radio' value='d'>They have no knowledge<br />
             </td></tr>

	       <tr><td class='n2'>Q16. On the whole, would you characterise popular perception of furriness as:</td>
             <td class='n1'>
               <input name='formaccuracypublic' type='radio' value='z' checked>Not disclosed<br />
               <input name='formaccuracypublic' type='radio' value='a'>Extremely Accurate<br />
               <input name='formaccuracypublic' type='radio' value='b'>Accurate<br />
               <input name='formaccuracypublic' type='radio' value='c'>Inaccurate<br />
               <input name='formaccuracypublic' type='radio' value='d'>Extremely Inaccurate<br />
               <input name='formaccuracypublic' type='radio' value='e'>They have no knowledge<br />
             </td></tr>

	       <tr><td class='n2'>Q17. Self-identity. Please respond to the following statement: &quot;I am human.&quot;<p class='navbartext'><a href=#>Explanation of this question<span>This question asks you about your self-identity. For many furries, their presence in the fandom does not make them less &quot;human&quot;. For others, they may identify more closely with some other creature. If you do not consider yourself to be anything other than a human being, select &quot;Strongly Agree&quot;</span></a></p></td>
             <td class='n1'>
               <input name='formselfidentity' type='radio' value='z' checked>Not disclosed<br />
               <input name='formselfidentity' type='radio' value='a'>Strongly Agree<br />
               <input name='formselfidentity' type='radio' value='b'>Agree<br />
               <input name='formselfidentity' type='radio' value='c'>Disagree<br />
               <input name='formselfidentity' type='radio' value='d'>Strongly Disagree<br />
               <input name='formselfidentity' type='radio' value='e'>I do not consider myself human<br />
             </td></tr>

	       <tr><td class='n2'>Q18. To what degree does sex play a part in your furry life?</td>
             <td class='n1'>
               <input name='formsexpersonal' type='radio' value='a'>An extremely large degree<br />
               <input name='formsexpersonal' type='radio' value='b'>A large degree<br />
               <input name='formsexpersonal' type='radio' value='c'>A medium degree<br />
               <input name='formsexpersonal' type='radio' value='d'>A small degree<br />
               <input name='formsexpersonal' type='radio' value='e'>An extremely small degree<br />
               <input name='formsexpersonal' type='radio' value='x' checked>No position<br />
             </td></tr>	
	
	       <tr><td class='n2'>Q19. To what degree do you think sex plays a part in the lives of other furries?</td>
             <td class='n1'>
               <input name='formsexothers' type='radio' value='a'>An extremely large degree<br />
               <input name='formsexothers' type='radio' value='b'>A large degree<br />
               <input name='formsexothers' type='radio' value='c'>A medium degree<br />
               <input name='formsexothers' type='radio' value='d'>A small degree<br />
               <input name='formsexothers' type='radio' value='e'>An extremely small degree<br />
               <input name='formsexothers' type='radio' value='z' checked>No position<br />
             </td></tr>		

	       <tr><td class='n2'>Q20. To what degree do you think the public assumes sex is important to furries?</td>
             <td class='n1'>
               <input name='formsexpublic' type='radio' value='a'>An extremely large degree<br />
               <input name='formsexpublic' type='radio' value='b'>A large degree<br />
               <input name='formsexpublic' type='radio' value='c'>A medium degree<br />
               <input name='formsexpublic' type='radio' value='d'>A small degree<br />
               <input name='formsexpublic' type='radio' value='e'>An extremely small degree<br />
               <input name='formsexpublic' type='radio' value='z' checked>No position<br />
             </td></tr>		

	       <tr><td class='n2'>Q21. How important do you think conventions are to the furry fandom?</td>
             <td class='n1'>
               <input name='formimportantconventions' type='radio' value='a'>Extremely important<br />
               <input name='formimportantconventions' type='radio' value='b'>Important<br />
               <input name='formimportantconventions' type='radio' value='c'>Moderately important<br />
               <input name='formimportantconventions' type='radio' value='d'>Unimportant<br />
               <input name='formimportantconventions' type='radio' value='e'>Extremely unimportant<br />
               <input name='formimportantconventions' type='radio' value='z' checked>No position<br />
             </td></tr>		

	       <tr><td class='n2'>Q22. How important do you think visual art is to the furry fandom?</td>
             <td class='n1'>
               <input name='formimportantgraphicart' type='radio' value='a'>Extremely important<br />
               <input name='formimportantgraphicart' type='radio' value='b'>Important<br />
               <input name='formimportantgraphicart' type='radio' value='c'>Moderately important<br />
               <input name='formimportantgraphicart' type='radio' value='d'>Unimportant<br />
               <input name='formimportantgraphicart' type='radio' value='e'>Extremely unimportant<br />
               <input name='formimportantgraphicart' type='radio' value='z' checked>No position<br />
             </td></tr>	

	       <tr><td class='n2'>Q23. How important do you think music is to the furry fandom?</td>
             <td class='n1'>
               <input name='formimportantmusic' type='radio' value='a'>Extremely important<br />
               <input name='formimportantmusic' type='radio' value='b'>Important<br />
               <input name='formimportantmusic' type='radio' value='c'>Moderately important<br />
               <input name='formimportantmusic' type='radio' value='d'>Unimportant<br />
               <input name='formimportantmusic' type='radio' value='e'>Extremely unimportant<br />
               <input name='formimportantmusic' type='radio' value='z' checked>No position<br />
             </td></tr>	

	       <tr><td class='n2'>Q24. How important do you think literature is to the furry fandom?</td>
             <td class='n1'>
               <input name='formimportantliterature' type='radio' value='a'>Extremely important<br />
               <input name='formimportantliterature' type='radio' value='b'>Important<br />
               <input name='formimportantliterature' type='radio' value='c'>Moderately important<br />
               <input name='formimportantliterature' type='radio' value='d'>Unimportant<br />
               <input name='formimportantliterature' type='radio' value='e'>Extremely unimportant<br />
               <input name='formimportantliterature' type='radio' value='z' checked>No position<br />
             </td></tr>	

	       <tr><td class='n2'>Q25. How important do you think online communities are to the furry fandom?</td>
             <td class='n1'>
               <input name='formimportantonlinecommunities' type='radio' value='a'>Extremely important<br />
               <input name='formimportantonlinecommunities' type='radio' value='b'>Important<br />
               <input name='formimportantonlinecommunities' type='radio' value='c'>Moderately important<br />
               <input name='formimportantonlinecommunities' type='radio' value='d'>Unimportant<br />
               <input name='formimportantonlinecommunities' type='radio' value='e'>Extremely unimportant<br />
               <input name='formimportantonlinecommunities' type='radio' value='z' checked>No position<br />
             </td></tr>	

		 <tr><td class='n2'>Q26. Would you describe yourself as? (check all that apply)</td>
             <td class='n1'>
               <input name='formisartistgraphic' type='checkbox'>An artist (visual)?<br />
               <input name='formisartistmusical' type='checkbox'>An artist (musical)?<br />
               <input name='formisartistperformance' type='checkbox'>An artist (performance)?<br />
               <input name='formisauthor' type='checkbox'>An author?<br />
               <input name='formiszoophile' type='checkbox'>A &quot;zoophile&quot;?<br />
               <input name='formisplushophile' type='checkbox'>A &quot;plushophile&quot;?<br />
               <input name='formisfursuiter' type='checkbox'>A &quot;fursuiter&quot;?<br />
               <input name='formisconman' type='checkbox'>A convention goer?<br />
               <input name='formisactiveonline' type='checkbox'>Active in online communities?<br />
               <input name='formisrpger' type='checkbox'>A fan of RPGs?<br />
               <input name='formisskiffyfan' type='checkbox'>A fan of science-fiction?<br />
               <input name='formisaniman' type='checkbox'>A fan of anime?<br />
               <input name='formisscitechman' type='checkbox'>A fan of science and technology/computers?<br />
               <input name='formispolyglot' type='checkbox'>Fluent in one or more languages besides your primary one?<br />
               <input name='formisanimalrightsadvocate' type='checkbox'>An advocate of animal rights?<br />
               <input name='formisvegetarian' type='checkbox'>A vegetarian?<br />
             </td></tr>	

	       <tr><td class='n2'>Q27. Do you belong to any furry websites? <p class='navbartext'><a href=#>Explanation of this question<span>URLs are not necessary and if the sites are fairly well known abbreviations are fine (e.g. "FA" is acceptable unless it means something other than FurAffinity)</span></a></p></td>
             <td class='n1'>
               <input name='formwebsites' type='radio' value='z' checked>Not disclosed<br />
               <input name='formwebsites' type='radio' value='a'>Yes (if so, please specify which ones below)<br />
               <input name='formwebsites' type='radio' value='b'>No<br />
		   <input name='formwebsitesapp' type='text' size='50'><br />
             </td></tr>

	       <tr><td class='n2'>Q28. Regardless of your answer to Question 26, please rate your general response to conventions</td>
             <td class='n1'>
               <input name='formresponsecons' type='radio' value='a'>Extremely Positive<br />
               <input name='formresponsecons' type='radio' value='b'>Positive<br />
               <input name='formresponsecons' type='radio' value='c'>Ambivalent<br />
               <input name='formresponsecons' type='radio' value='d'>Negative<br />
               <input name='formresponsecons' type='radio' value='e'>Extremely Negative<br />
               <input name='formresponsecons' type='radio' value='z' checked>No position<br />
             </td></tr>		
	       <tr><td class='n2'>Q29. Regardless of your answer to Question 26, please rate your general response to plushophiles</td>
             <td class='n1'>
               <input name='formresponseplushophiles' type='radio' value='a'>Extremely Positive<br />
               <input name='formresponseplushophiles' type='radio' value='b'>Positive<br />
               <input name='formresponseplushophiles' type='radio' value='c'>Ambivalent<br />
               <input name='formresponseplushophiles' type='radio' value='d'>Negative<br />
               <input name='formresponseplushophiles' type='radio' value='e'>Extremely Negative<br />
               <input name='formresponseplushophiles' type='radio' value='z' checked>No position<br />
             </td></tr>		
	       <tr><td class='n2'>Q30. Regardless of your answer to Question 26, please rate your general response to fursuiters</td>
             <td class='n1'>
               <input name='formresponsefursuiters' type='radio' value='a'>Extremely Positive<br />
               <input name='formresponsefursuiters' type='radio' value='b'>Positive<br />
               <input name='formresponsefursuiters' type='radio' value='c'>Ambivalent<br />
               <input name='formresponsefursuiters' type='radio' value='d'>Negative<br />
               <input name='formresponsefursuiters' type='radio' value='e'>Extremely Negative<br />
               <input name='formresponsefursuiters' type='radio' value='z' checked>No position<br />
             </td></tr>		
	       <tr><td class='n2'>Q31. Regardless of your answer to Question 26, please rate your general response to zoophiles</td>
             <td class='n1'>
               <input name='formresponsezoophiles' type='radio' value='a'>Extremely Positive<br />
               <input name='formresponsezoophiles' type='radio' value='b'>Positive<br />
               <input name='formresponsezoophiles' type='radio' value='c'>Ambivalent<br />
               <input name='formresponsezoophiles' type='radio' value='d'>Negative<br />
               <input name='formresponsezoophiles' type='radio' value='e'>Extremely Negative<br />
               <input name='formresponsezoophiles' type='radio' value='z' checked>No position<br />
             </td></tr>

	       <tr><td class='n2'>Q32. Optionally, if you identify with a particular animal, which one is it?</td>
             <td class='n1'>
		   <input name='formwhatanimal' type='text' size='50' value='No answer given'>
             </td></tr>

	       <tr><td class='n2'>Q33. Optionally, if you answered the above question, why do you identify with said animal?</td>
             <td class='n1'>
		   <input name='formwhywhatanimal' type='text' size='50' value='No answer given'>
             </td></tr>

	       <tr><td class='n2'>Please add any comments or other notes here.</td>
             <td class='n1'>
               <textarea name='formadditionaldata' cols='50' rows='10'></textarea><br />
             </td></tr>	

		 <tr><td colspan='2' class='n2'>Please review the survey to ensure that the answers provided are accurate. When you are satisfied that this is so, click below to submit your survey.</td></tr>
		 <tr><td colspan='2' class='n1' align='center'><input type='submit' value='Click once to submit'></td></tr>
     </table>
    </div>
   </div>
  </form>
</html>