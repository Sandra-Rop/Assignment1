<!DOCTYPE html>
<html>


<head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
}
</style>
</head>
<body>

<h2>Country mix</h2>


<table style="width:100%">
  <tr>
    <th>#</th>
    <th>Name</th>
    <th>Governor</th> 
    <th>Website</th>
  </tr>
  <tr>

?php
/**
  Counties in the Republic of Kenya,Governors and their Political Parties.
*/

$county_data = "1. Mombasa. – Hassan Ali Joho – ODM,
 <tr>
    <th>#1</th>
    <td>Mombasa</td>
    <td>Hassan aLI Joho</td>
    <td>ODM  <img src="https://pbs.twimg.com/profile_images/771644178887421954/wQ7T8qrW_400x400.jpg" alt="ODM orange" style="width:30px;height:30px;"></td>
  </tr>
2. Kwale. – Salim Mvurya – Jubilee,
 <tr>
    <th># 2</th>
    <td>Kwale</td>
    <td>Salim</td>
    <td>Jubilee   <img src="https://www.standardmedia.co.ke/ureport-uploads/File-1495257671.png" alt= "Jubilee" style="width:30px;height:30px;"></td>
  </tr>
3. Kilifi. – Amason Jeffah Kingi – ODM,
 <tr>
    <th># 3</th>
    <td>John</td>
    <td>Doe </td>
    <td>ODM <img src="https://pbs.twimg.com/profile_images/771644178887421954/wQ7T8qrW_400x400.jpg" alt="ODM orange" style="width:30px;height:30px;"></td>
  </tr>
4. Tana River. – Dhadho Godhana – ODM,
 <tr>
    <th># 4</th>
    <td>Tana River</td>
    <td>Dhadho Godhana</td>
    <td>ODM  <img src="https://pbs.twimg.com/profile_images/771644178887421954/wQ7T8qrW_400x400.jpg" alt="ODM orange" style="width:30px;height:30px;"></td>
  </tr>
5. Lamu. – Fahim Yasin Twaha – Jubilee,
 <tr>
    <th>#5 </th>
    <td>Lamu</td>
    <td>Fahim Yasin Twaha</td>
    <td>Jubilee   <img src="https://www.standardmedia.co.ke/ureport-uploads/File-1495257671.png" alt= "Jubilee" style="width:30px;height:30px;"> </td>
  </tr>
6. Taita-Taveta. – Granton Samboja – WDM K,
 <tr>
    <th># 6 </th>
    <td>Taita-Taveta</td>
    <td>Granton Samboja</td>
    <td>WDM K <img src="https://upload.wikimedia.org/wikipedia/commons/e/e0/Wiper_kenya_wdm_logo.png" alt="WDM K LOGO" width="30px" height="30px"></td>
  </tr>
7. Garissa. – Ali Bunow Korane – Jubilee,
 <tr>
    <th># 7 </th>
    <td>Garissa</td>
    <td>Ali Bunow Korane</td>
    <td>Jubilee   <img src="https://www.standardmedia.co.ke/ureport-uploads/File-1495257671.png" alt= "Jubilee" style="width:30px;height:30px;"></td>
  </tr>
8. Wajir. – Mohamed Abdi Mohamud – Jubilee,
 <tr>
    <th># 8 </th>
    <td>Wajir</td>
    <td>Mohamed Abdi Mohamud</td>
    <td>Jubilee   <img src="https://www.standardmedia.co.ke/ureport-uploads/File-1495257671.png" alt= "Jubilee" style="width:30px;height:30px;"> </td>
  </tr>
9. Mandera. – Ali Ibrahim Roba - Jubilee,
 <tr>
    <th># 9 </th>
    <td>Mandera</td>
    <td>Ali Ibrahim Roba</td>
    <td>Jubilee   <img src="https://www.standardmedia.co.ke/ureport-uploads/File-1495257671.png" alt= "Jubilee" style="width:30px;height:30px;"> </td>
  </tr>
10. Marsabit – Mohamud Mohamed Ali – Jubilee,
<tr>
    <th># 10</th>
    <td>Marsabit</td>
    <td>Mohamud Mohamed Ali</td>
    <td>Jubilee   <img src="https://www.standardmedia.co.ke/ureport-uploads/File-1495257671.png" alt= "Jubilee" style="width:30px;height:30px;"> </td>
    
  </tr>
  <tr>
11. Isiolo – Mohamed Abdi Kuti – Independent,
<tr>
    <th># 11</th>
    <td>Isiolo</td>
    <td>Mohamed Abdi Kuti</td>
    <td>Independent</td>
  </tr>
  <tr>
12. Meru – Kiraitu Murungi – Jubilee,
<tr>
    <th># 12</th>
    <td>Meru</td>
    <td>Kiraitu Murungi</td>
    <td>Jubilee   <img src="https://www.standardmedia.co.ke/ureport-uploads/File-1495257671.png" alt= "Jubilee" style="width:30px;height:30px;"> </td>
  </tr>
  <tr>
13. Tharaka Nithi – Onesmus Muthomi Njuki – Jubilee,
<tr>
    <th># 13</th>
    <td>Tharaka Nithi</td>
    <td>Onesmus Muthomi Njuki</td>
    <td>Jubilee  <img src="https://www.standardmedia.co.ke/ureport-uploads/File-1495257671.png" alt= "Jubilee" style="width:30px;height:30px;" ></td>
  </tr>
  <tr>
14. Embu – Martin Nyaga Wambora – Jubilee,
<tr>
    <th># 14</th>
    <td>Embu</td>
    <td> Martin Nyaga Wambora </td>
    <td>Jubilee  <img src="https://www.standardmedia.co.ke/ureport-uploads/File-1495257671.png" alt= "Jubilee" style="width:30px;height:30px;" ></td>
  </tr>
  <tr>
15. Kitui – Charitu Ngilu – Narc Kenya,
<tr>
    <th># 15</th>
    <td>Kitui</td>
    <td>Charitu Ngilu</td>
    <td>Narc Kenya  <img src="https://seeklogo.com/images/N/narc-k-logo-904EA97456-seeklogo.com.png" alt="Narc Kenya Logo" width="30px" height="30px"></td>
  </tr>
  <tr>
16. Machakos – Alfred Mutua – CCM,
<tr>
    <th># 16</th>
    <td>Machakos</td>
    <td>Alfred Mutua</td>
    <td>CCM  <img src="https://www.ccm.co.ke/wp-content/uploads/wp-responsive-video-grid/8PjrdrJdC2Y_big_270_360.png" alt="CCM logo" width="30px" height="30px"></td>
  <tr>
17. Makueni – Kivutha Kibwana – WDM K.,
<tr>
    <th># 17</th>
    <td>Makueni</td>
    <td>Kivutha Kibwana</td>
    <td>WDM K <img src="https://upload.wikimedia.org/wikipedia/commons/e/e0/Wiper_kenya_wdm_logo.png" alt="WDM K LOGO" width="30px" height="30px"></td>
  </tr>
  <tr>
18. Nyandarua – Francis Kimemia – Jubilee,
<tr>
    <th># 18</th>
    <td>Nyandarua</td>
    <td>Francis Kimemia</td>
    <td>Jubilee   <img src="https://www.standardmedia.co.ke/ureport-uploads/File-1495257671.png" alt= "Jubilee" style="width:30px;height:30px;"></td>
  </tr>
  <tr>
19. Nyeri – Mutahi Kahiga – Jubilee,
<tr>
    <th># 19</th>
    <td>Nyeri</td>
    <td>Mutahi Kahiga</td>
    <td>Jubilee    <img src="https://www.standardmedia.co.ke/ureport-uploads/File-1495257671.png" alt= "Jubilee" style="width:30px;height:30px;"></td>
  </tr>
  <tr>
20. Kirinyaga. – Ann Waiguru – Jubilee,
<tr>
    <th># 20</th>
    <td>Kirinyaga</td>
    <td>Ann Waiguru</td>
    <td>Jubilee    <img src="https://www.standardmedia.co.ke/ureport-uploads/File-1495257671.png" alt= "Jubilee" style="width:30px;height:30px;"></td>
  </tr>
  <tr>
21. Murang’a – Mwangi wa iria – Jubilee,
<tr>
    <th># 21 </th>
    <td>Murang’a</td>
    <td>Mwangi wa iria</td>
    <td>Jubilee    <img src="https://www.standardmedia.co.ke/ureport-uploads/File-1495257671.png" alt= "Jubilee" style="width:30px;height:30px;"></td>
  </tr>
  <tr>
22. Kiambu. – Ferdinand Waititu Babayao – Jubilee,
<tr>
    <th># 22 </th>
    <td>Kiambu</td>
    <td>Ferdinand Waititu Babayao</td>
    <td>Jubilee    <img src="https://www.standardmedia.co.ke/ureport-uploads/File-1495257671.png" alt= "Jubilee" style="width:30px;height:30px;"></td>
  </tr>
  <tr>
23. Turkana. – Josphat Nanok – ODM,
<tr>
    <th># 23 </th>
    <td>Turkana</td>
    <td>Josphat Nano</td>
    <td>ODM  <img src="https://pbs.twimg.com/profile_images/771644178887421954/wQ7T8qrW_400x400.jpg" alt="ODM orange" style="width:30px;height:30px;"></td>
  </tr>
  <tr>
24. West Pokot. – John Krop Lonyang’apuo. – KANU,
<tr>
    <th># 24</th>
    <td>West Pokot</td>
    <td>John Krop Lonyang’apuo</td>
    <td>KANU <img src="https://lh3.googleusercontent.com/proxy/4riCxI78uegXd2NNEPWO2V9ntjtLQDde2feAHKohuRIcaOGCDhN7Mc3cWttCCFSJLp1L0Icaarje2hvTNTw3Ns9CaDk" alt="KANU logo" width="30px" height="30px"></td>
  </tr>
  <tr>
25. Samburu. – Moses Kasainie Lenolkulal – Jubilee,
<tr>
    <th># 25</th>
    <td>Samburu</td>
    <td>Moses Kasainie Lenolkula</td>
    <td>Jubilee    <img src="https://www.standardmedia.co.ke/ureport-uploads/File-1495257671.png" alt= "Jubilee" style="width:30px;height:30px;"></td>
  </tr>
  <tr>
26. Trans-Nzoia. – Patrick Khaemba – FORD Kenya,
<tr>
    <th># 26</th>
    <td>Trans-Nzoia</td>
    <td>Patrick Khaemba</td>
    <td>FORD Kenya   <img src="https://lh3.googleusercontent.com/proxy/4riCxI78uegXd2NNEPWO2V9ntjtLQDde2feAHKohuRIcaOGCDhN7Mc3cWttCCFSJLp1L0Icaarje2hvTNTw3Ns9CaDk" alt="FORD logo" width="30px" height="30px"></td>
  </tr>
  <tr>
27. Uasin gishu. – Jackson Mandago – Jubilee,
<tr>
    <th># 27 </th>
    <td>Uasin gishu</td>
    <td>Jackson Mandago</td>
    <td>Jubilee    <img src="https://www.standardmedia.co.ke/ureport-uploads/File-1495257671.png" alt= "Jubilee" style="width:30px;height:30px;"></td>
  </tr>
  <tr>
28. Elgeyo Marakwet. – Alex Tanui Tolgas – Jubilee,
<tr>
    <th># 28 </th>
    <td>Elgeyo Marakwet</td>
    <td>Alex Tanui Tolgas</td>
    <td>Jubilee    <img src="https://www.standardmedia.co.ke/ureport-uploads/File-1495257671.png" alt= "Jubilee" style="width:30px;height:30px;"></td>
  </tr>
  <tr>
29. Nandi. – Stephen Sang – Jubilee,
<tr>
    <th># 29</th>
    <td>Nand</td>
    <td>Stephen Sang</td>
    <td>Jubilee    <img src="https://www.standardmedia.co.ke/ureport-uploads/File-1495257671.png" alt= "Jubilee" style="width:30px;height:30px;"></td>
  </tr>
  <tr>
30. Baringo – Stanley K Kipris. – Jubilee,
<tr>
    <th># 30 </th>
    <td>Baringo</td>
    <td>Stanley K Kipris</td>
    <td>Jubilee    <img src="https://www.standardmedia.co.ke/ureport-uploads/File-1495257671.png" alt= "Jubilee" style="width:30px;height:30px;"></td>
  </tr>
  <tr>
31. Laikipia – Ndiritu Muriithi – Independent,
<tr>
    <th># 31</th>
    <td>Laikipia</td>
    <td>Ndiritu Muriithi</td>
    <td>Independent</td>
  </tr>
  <tr>
32. Nakuru. – Lee Kinyanjui – Jubilee,
<tr>
    <th># 32 </th>
    <td>Nakuru</td>
    <td>Lee Kinyanjui</td>
    <td>Jubilee    <img src="https://www.standardmedia.co.ke/ureport-uploads/File-1495257671.png" alt= "Jubilee" style="width:30px;height:30px;"></td>
  </tr>
  <tr>
33. Narok – Samuel Kuntai Ole Tunai – Jubilee,
<tr>
    <th># 33 </th>
    <td>Narok</td>
    <td>Samuel Kuntai Ole Tunai</td>
    <td>Jubilee    <img src="https://www.standardmedia.co.ke/ureport-uploads/File-1495257671.png" alt= "Jubilee" style="width:30px;height:30px;"></td>
  </tr>
  <tr>
34. Kajiado. – Joseph Ole Lenku – Jubilee,
<tr>
    <th># 34</th>
    <td>Kajiado</td>
    <td>Joseph Ole Lenku</td>
    <td>Jubilee   <img src="https://www.standardmedia.co.ke/ureport-uploads/File-1495257671.png" alt= "Jubilee" style="width:30px;height:30px;"></td>
  </tr>
  <tr>
35. Kericho. – Prof.Paul Chepkwony Kiprono – Jubilee,
<tr>
    <th># 35</th>
    <td>Kericho</td>
    <td>Prof.Paul Chepkwony Kiprono</td>
    <td>Jubilee    <img src="https://www.standardmedia.co.ke/ureport-uploads/File-1495257671.png" alt= "Jubilee" style="width:30px;height:30px;"></td>
  </tr>
  <tr>
36. Bomet. – Hillary Barchok – Jubilee,
<tr>
    <th># 36</th>
    <td>Bomet</td>
    <td>Hillary Barchok</td>
    <td>Jubilee  <img src="https://www.standardmedia.co.ke/ureport-uploads/File-1495257671.png" alt= "Jubilee" style="width:30px;height:30px;"></td>
  </tr>
  <tr>
37. Kakamega. – Wyclife Oparanya – ODM,
<tr>
    <th># 37</th>
    <td>Kakamega</td>
    <td>Wyclife Oparanya</td>
    <td>ODM <img src="https://pbs.twimg.com/profile_images/771644178887421954/wQ7T8qrW_400x400.jpg" alt="ODM orange" style="width:30px;height:30px;"></td>
  </tr>
  <tr>
38. Vihiga. – Wilber Ottichilo – ODM,
<tr>
    <th># 38</th>
    <td>Vihiga</td>
    <td>Wilber Ottichilo</td>
    <td>ODM  <img src="https://pbs.twimg.com/profile_images/771644178887421954/wQ7T8qrW_400x400.jpg" alt="ODM orange" style="width:30px;height:30px;"></td>
  </tr>
  <tr>
39. Bungoma. – Wyclife Wafula Wangamiti – ODM,
<tr>
    
    <th># 39 </th>
    <td>Bungoma</td>
    <td>Wyclife Wafula Wangamiti</td>
    <td>ODM  <img src="https://pbs.twimg.com/profile_images/771644178887421954/wQ7T8qrW_400x400.jpg" alt="ODM orange" style="width:30px;height:30px;"></td>
  </tr>
  <tr>
40. Busia. – Sospeter Ojaamong – ODM,
<tr>
    <th># 40 </th>
    <td>Busia</td>
    <td>Sospeter Ojaamong</td>
    <td>ODM  <img src="https://pbs.twimg.com/profile_images/771644178887421954/wQ7T8qrW_400x400.jpg" alt="ODM orange" style="width:30px;height:30px;"></td>
  </tr>
  <tr>
41. Siaya. – Cornel Rasanga. – ODM,
<tr>
    <th># 41</th>
    <td>Siaya</td>
    <td>Cornel Rasanga</td>
    <td>ODM  <img src="https://pbs.twimg.com/profile_images/771644178887421954/wQ7T8qrW_400x400.jpg" alt="ODM orange" style="width:30px;height:30px;"></td>
  </tr>
  <tr>
42. Kisumu. – Peter Anyang Nyong’o. – ODM,
<tr>
    <th># 42 </th>
    <td>Kisumu</td>
    <td>Peter Anyang Nyong’o</td>
    <td>ODM   <img src="https://pbs.twimg.com/profile_images/771644178887421954/wQ7T8qrW_400x400.jpg" alt="ODM orange" style="width:30px;height:30px;"></td>
  </tr>
  <tr>
43. Homabay. – Cyprian Awiti – ODM,
<tr>
    <th># 43</th>
    <td>Homabay</td>
    <td>Cyprian Awiti</td>
    <td>ODM  <img src="https://pbs.twimg.com/profile_images/771644178887421954/wQ7T8qrW_400x400.jpg" alt="ODM orange" style="width:30px;height:30px;"></td>
  </tr>
  <tr>
44. Migori. – Zachary Okoth Obado – ODM,
<tr>
    <th># 44</th>
    <td>Migori</td>
    <td>Zachary Okoth Obado</td>
    <td>ODM  <img src="https://pbs.twimg.com/profile_images/771644178887421954/wQ7T8qrW_400x400.jpg" alt="ODM orange" style="width:30px;height:30px;"></td>
  </tr>
  <tr>
45. Kisii. – James Ongware – ODM,
<tr>
    <th># 45 </th>
    <td>Kisii</td>
    <td>James Ongware</td>
    <td> ODM  <img src="https://pbs.twimg.com/profile_images/771644178887421954/wQ7T8qrW_400x400.jpg" alt="ODM orange" style="width:30px;height:30px;"></td>
  </tr>
  <tr>
46. Nyamira. – John Nyangarama Obiena - ODM,
<tr>
    <th># 46 </th>
    <td>Nyamira</td>
    <td>John Nyangarama Obiena</td>
    <td> ODM  <img src="https://pbs.twimg.com/profile_images/771644178887421954/wQ7T8qrW_400x400.jpg" alt="ODM orange" style="width:30px;height:30px;"></td>
  </tr>
  <tr>
47. Nairobi. – Mike Sonko Mbuvi Kioko – Jubilee";
<tr>
    <th># 47</th>
    <td>Nairobi</td>
    <td>Mike Sonko Mbuvi Kioko</td>
    <td>Jubilee   <img src="https://www.standardmedia.co.ke/ureport-uploads/File-1495257671.png" alt= "Jubilee" style="width:30px;height:30px;"></td>
  </tr>
    

/**
 You should not modify anything above this line
*/

// @TODO : Your code starts here

?>





</body>
</html>



