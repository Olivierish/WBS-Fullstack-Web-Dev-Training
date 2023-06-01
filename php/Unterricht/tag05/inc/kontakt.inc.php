<h2>Kontakt</h2> 

<div class="row">
<div class="col-12">

<table class="table my-2 table-striped table-danger">
  <tr> <td>Zelle</td> <td>Zelle</td> <td>Zelle</td> </tr>
  <tr> <td>Zelle</td> <td>Zelle</td> <td>Zelle</td> </tr>
  <tr> <td>Zelle</td> <td>Zelle</td> <td>Zelle</td> </tr>
  <tr> <td>Zelle</td> <td>Zelle</td> <td>Zelle</td> </tr>
  <tr> <td>Zelle</td> <td>Zelle</td> <td>Zelle</td> </tr>
</table>
<!--+++++++++++++++++++++++++++++++++++++++++++-->
<table class="table my-2 table-striped table-primary w-50">
  <thead>
    <tr> <th>Name</th> <th>Vorname</th> <th>E-Mail</th> </tr>
  </thead>
  <tbody>
    <tr> <td>Zelle</td> <td>Zelle</td> <td>Zelle</td> </tr>
    <tr> <td>Zelle</td> <td>Zelle</td> <td>Zelle</td> </tr>
    <tr> <td>Zelle</td> <td>Zelle</td> <td>Zelle</td> </tr>
    <tr> <td>Zelle</td> <td>Zelle</td> <td>Zelle</td> </tr>
  </tbody>
</table>
<!--+++++++++++++++++++++++++++++++++++++++++++-->
<table class="table my-2 table-striped table-dark caption-top">
  <caption class="bg-dark bg-opacity-75 text-light text-center fs-2">Liste der Teilnehmer</caption>
  <thead>
    <tr> <th>Name</th> <th>Vorname</th> <th>E-Mail</th> </tr>
  </thead>
  <tbody>
    <tr> <td>Zelle</td> <td>Zelle</td> <td>Zelle</td> </tr>
    <tr> <td>Zelle</td> <td>Zelle</td> <td>Zelle</td> </tr>
    <tr> <td>Zelle</td> <td>Zelle</td> <td>Zelle</td> </tr>
    <tr> <td>Zelle</td> <td>Zelle</td> <td>Zelle</td> </tr>
  </tbody>
</table>
<!--+++++++++++++++++++++++++++++++++++++++++++-->
<table class="table my-2 table-striped table-dark caption-top">
  <caption class="bg-dark bg-opacity-75 text-light text-center fs-2">Liste der Teilnehmer</caption>
  <thead>
    <tr> <th>Name</th> <th>Vorname</th> <th>E-Mail</th> </tr>
  </thead>
  <tbody>
    <tr> <td>Zelle</td> <td>Zelle</td> <td>Zelle</td> </tr>
    <tr> <td>Zelle</td> <td>Zelle</td> <td>Zelle</td> </tr>
    <tr> <td>Zelle</td> <td>Zelle</td> <td>Zelle</td> </tr>
    <tr> <td>Zelle</td> <td>Zelle</td> <td>Zelle</td> </tr>
  </tbody>
</table>
<?php 
  $text = 'Hallo Welt, ich grüße die Welt.';
  var_dump(strpos($text, 'Welt1'));
  echo '<br>-------<br>';

  var_dump(preg_match('/Welt/',$text));
  echo '<br>-------<br>';

  $text = 'Hallo 20Welt20meister Welt';
  var_dump(preg_match('/\dWelt\d/',$text));
  echo '<br>-------<br>';

  $text = '3Bananen';
  var_dump(preg_match('/\dBananen/',$text));
  echo '<br>-------<br>';

  $text = 'dateiName.gif';
  var_dump(preg_match('/\.(jpg|gif|png)/',$text));
  echo '<br>-------<br>';

  $text = 'dateiName.gif';
  var_dump(preg_match('/\.(jpg|gif|png)/',$text));
  echo '<br>-------<br>';

  $sentences = array(
    'Der Black Friday findet am statt.'. date('d/m/Y', mt_rand(1, time())),
    'Die Konferenz beginnt am ' . date('d/m/Y', mt_rand(1, time())) . '.',
    date('d/m/Y', mt_rand(1, time())) . 'Der Geburtstag wird am gefeiert.',
    'Das Konzert findet am ' . date('d/m/Y', mt_rand(1, time())) . ' statt.'
);

$formatSuche = '/(\d{2})\/(\d{2})\/(\d{4})/';

?>
</div>
</div>