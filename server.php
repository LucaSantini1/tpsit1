<?php

// Array di comuni italiani con coordinate
$comuni_db = [
    ['name' => 'Alessandria', 'lat' => '44.9128', 'lng' => '8.6140'],
    ['name' => 'Ancona', 'lat' => '43.6158', 'lng' => '13.5188'],
    ['name' => 'Aosta', 'lat' => '45.7394', 'lng' => '7.3150'],
    ['name' => 'Arezzo', 'lat' => '43.4653', 'lng' => '11.8787'],
    ['name' => 'Asti', 'lat' => '44.8971', 'lng' => '8.2035'],
    ['name' => 'Avellino', 'lat' => '40.9156', 'lng' => '14.7797'],
    ['name' => 'Bari', 'lat' => '41.1188', 'lng' => '16.8713'],
    ['name' => 'Belluno', 'lat' => '46.1408', 'lng' => '12.2141'],
    ['name' => 'Benevento', 'lat' => '41.1393', 'lng' => '14.7754'],
    ['name' => 'Bergamo', 'lat' => '45.6983', 'lng' => '9.6864'],
    ['name' => 'Biella', 'lat' => '45.5622', 'lng' => '8.0545'],
    ['name' => 'Bologna', 'lat' => '44.4935', 'lng' => '11.3427'],
    ['name' => 'Bolzano', 'lat' => '46.4983', 'lng' => '11.3548'],
    ['name' => 'Brescia', 'lat' => '45.5384', 'lng' => '10.2116'],
    ['name' => 'Brindisi', 'lat' => '40.6397', 'lng' => '17.9399'],
    ['name' => 'Cagliari', 'lat' => '39.2238', 'lng' => '9.1217'],
    ['name' => 'Campobasso', 'lat' => '41.5639', 'lng' => '14.6583'],
    ['name' => 'Caserta', 'lat' => '41.0569', 'lng' => '14.3344'],
    ['name' => 'Catania', 'lat' => '37.5029', 'lng' => '15.0872'],
    ['name' => 'Catanzaro', 'lat' => '38.8909', 'lng' => '16.5990'],
    ['name' => 'Como', 'lat' => '45.8086', 'lng' => '9.0854'],
    ['name' => 'Cosenza', 'lat' => '39.3034', 'lng' => '16.2538'],
    ['name' => 'Cremona', 'lat' => '45.1328', 'lng' => '10.0269'],
    ['name' => 'Cuneo', 'lat' => '44.3868', 'lng' => '7.5412'],
    ['name' => 'Enna', 'lat' => '37.5670', 'lng' => '14.2764'],
    ['name' => 'Ferrara', 'lat' => '44.8381', 'lng' => '11.6200'],
    ['name' => 'Firenze', 'lat' => '43.7695', 'lng' => '11.2558'],
    ['name' => 'Foggia', 'lat' => '41.4604', 'lng' => '15.5431'],
    ['name' => 'Forlì', 'lat' => '44.2189', 'lng' => '12.0389'],
    ['name' => 'Frosinone', 'lat' => '41.6402', 'lng' => '13.3437'],
    ['name' => 'Genova', 'lat' => '44.4056', 'lng' => '8.9463'],
    ['name' => 'Gorizia', 'lat' => '45.9667', 'lng' => '13.6167'],
    ['name' => 'Grosseto', 'lat' => '42.7614', 'lng' => '11.1122'],
    ['name' => 'Isernia', 'lat' => '41.5939', 'lng' => '14.2189'],
    ['name' => 'L\'Aquila', 'lat' => '42.3506', 'lng' => '13.3958'],
    ['name' => 'La Spezia', 'lat' => '43.5508', 'lng' => '9.8269'],
    ['name' => 'Latina', 'lat' => '41.4653', 'lng' => '12.8687'],
    ['name' => 'Lecce', 'lat' => '40.3569', 'lng' => '18.1746'],
    ['name' => 'Lecco', 'lat' => '45.8576', 'lng' => '9.3957'],
    ['name' => 'Lodi', 'lat' => '45.3123', 'lng' => '9.5032'],
    ['name' => 'Lucca', 'lat' => '43.8425', 'lng' => '10.5048'],
    ['name' => 'Macerata', 'lat' => '43.3001', 'lng' => '13.4518'],
    ['name' => 'Mantova', 'lat' => '45.1556', 'lng' => '10.7972'],
    ['name' => 'Massa', 'lat' => '45.4654', 'lng' => '10.1413'],
    ['name' => 'Matera', 'lat' => '40.6664', 'lng' => '16.5997'],
    ['name' => 'Messina', 'lat' => '38.1938', 'lng' => '15.5540'],
    ['name' => 'Milano', 'lat' => '45.4642', 'lng' => '9.1900'],
    ['name' => 'Modena', 'lat' => '44.6471', 'lng' => '10.9252'],
    ['name' => 'Monza', 'lat' => '45.5806', 'lng' => '9.2725'],
    ['name' => 'Napoli', 'lat' => '40.8518', 'lng' => '14.2681'],
    ['name' => 'Novara', 'lat' => '45.4455', 'lng' => '8.6236'],
    ['name' => 'Oristano', 'lat' => '39.9033', 'lng' => '8.5924'],
    ['name' => 'Padova', 'lat' => '45.4154', 'lng' => '11.8768'],
    ['name' => 'Palermo', 'lat' => '38.1157', 'lng' => '13.3615'],
    ['name' => 'Parma', 'lat' => '44.8015', 'lng' => '10.3279'],
    ['name' => 'Pavia', 'lat' => '45.1851', 'lng' => '9.1581'],
    ['name' => 'Perugia', 'lat' => '43.1122', 'lng' => '12.3888'],
    ['name' => 'Pesaro', 'lat' => '43.9160', 'lng' => '12.9186'],
    ['name' => 'Pescara', 'lat' => '42.4584', 'lng' => '14.2081'],
    ['name' => 'Piacenza', 'lat' => '45.0527', 'lng' => '9.6996'],
    ['name' => 'Pisa', 'lat' => '43.7228', 'lng' => '10.3970'],
    ['name' => 'Pistoia', 'lat' => '43.9375', 'lng' => '10.9147'],
    ['name' => 'Potenza', 'lat' => '40.6021', 'lng' => '15.7942'],
    ['name' => 'Prato', 'lat' => '43.8790', 'lng' => '11.0995'],
    ['name' => 'Ragusa', 'lat' => '36.9239', 'lng' => '14.7282'],
    ['name' => 'Ravenna', 'lat' => '44.4184', 'lng' => '12.1956'],
    ['name' => 'Reggio Calabria', 'lat' => '38.1157', 'lng' => '15.6470'],
    ['name' => 'Reggio Emilia', 'lat' => '44.6989', 'lng' => '10.6308'],
    ['name' => 'Rieti', 'lat' => '42.4081', 'lng' => '12.8660'],
    ['name' => 'Rimini', 'lat' => '44.0571', 'lng' => '12.5671'],
    ['name' => 'Roma', 'lat' => '41.9028', 'lng' => '12.4964'],
    ['name' => 'Rovigo', 'lat' => '45.0736', 'lng' => '11.7845'],
    ['name' => 'Salerno', 'lat' => '40.6819', 'lng' => '14.7671'],
    ['name' => 'San Remo', 'lat' => '43.8241', 'lng' => '7.7604'],
    ['name' => 'Sassari', 'lat' => '40.7268', 'lng' => '8.5603'],
    ['name' => 'Savona', 'lat' => '44.3059', 'lng' => '8.4817'],
    ['name' => 'Siena', 'lat' => '43.3185', 'lng' => '11.3305'],
    ['name' => 'Siracusa', 'lat' => '37.3753', 'lng' => '15.2869'],
    ['name' => 'Sondrio', 'lat' => '46.1697', 'lng' => '10.0840'],
    ['name' => 'Spoleto', 'lat' => '42.7332', 'lng' => '12.7295'],
    ['name' => 'Taranto', 'lat' => '40.4644', 'lng' => '17.2137'],
    ['name' => 'Teramo', 'lat' => '42.6589', 'lng' => '13.7044'],
    ['name' => 'Terni', 'lat' => '42.5656', 'lng' => '12.6413'],
    ['name' => 'Tivoli', 'lat' => '41.9562', 'lng' => '12.7995'],
    ['name' => 'Torino', 'lat' => '45.0705', 'lng' => '7.6868'],
    ['name' => 'Trani', 'lat' => '41.2833', 'lng' => '16.4167'],
    ['name' => 'Trapani', 'lat' => '37.9156', 'lng' => '12.5211'],
    ['name' => 'Trento', 'lat' => '46.0748', 'lng' => '11.1217'],
    ['name' => 'Treviso', 'lat' => '45.6671', 'lng' => '12.2414'],
    ['name' => 'Trieste', 'lat' => '45.6452', 'lng' => '13.7777'],
    ['name' => 'Udine', 'lat' => '46.0603', 'lng' => '13.2305'],
    ['name' => 'Urbino', 'lat' => '43.7276', 'lng' => '12.6349'],
    ['name' => 'Varese', 'lat' => '45.8168', 'lng' => '8.6254'],
    ['name' => 'Venezia', 'lat' => '45.4408', 'lng' => '12.3155'],
    ['name' => 'Vercelli', 'lat' => '45.3141', 'lng' => '8.4247'],
    ['name' => 'Verona', 'lat' => '45.4384', 'lng' => '10.9916'],
    ['name' => 'Viareggio', 'lat' => '43.8643', 'lng' => '10.2523'],
    ['name' => 'Vicenza', 'lat' => '45.5450', 'lng' => '11.5471'],
    ['name' => 'Viterbo', 'lat' => '42.4209', 'lng' => '12.1045'],
    ['name' => 'Volterra', 'lat' => '43.3286', 'lng' => '10.8467'],
];

$q = isset($_GET["stringa"]) ? strtolower($_GET["stringa"]) : "";
$citta = "";              

if (strlen($q) > 0){     
  $risultati = [];
  
  // Filtra i comuni che iniziano con la stringa inserita
  foreach ($comuni_db as $comune) {
    if (strpos(strtolower($comune['name']), $q) === 0) {
      $risultati[] = $comune;
    }
  }
  
  // Ordina alfabeticamente
  usort($risultati, function($a, $b) {
    return strcmp($a['name'], $b['name']);
  });
  
  if (count($risultati) > 0) {
    printf("la select ha individuato %d alternative:<BR>", count($risultati));
    printf("(comune, latitudine, longitudine)<BR><BR>");
    
    foreach ($risultati as $riga) {
      $citta .= htmlspecialchars($riga["name"]) . "," . 
                htmlspecialchars($riga["lat"]) . "," . 
                htmlspecialchars($riga["lng"]) . "<BR>";
    }
  }

  if (strlen($citta) == 0){
    echo "nessun nome trovato!";
  } else {
    echo $citta;
  }
}
?>

