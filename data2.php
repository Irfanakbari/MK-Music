<?php
require 'vendor/autoload.php';


\EasyRdf\RdfNamespace::set('dbp', 'http://dbpedia.org/property/');
\EasyRdf\RdfNamespace::set('dc', 'http://purl.org/dc/elements/1.1/');
\EasyRdf\RdfNamespace::set('foaf', 'http://xmlns.com/foaf/0.1/');

$endpoint = new \EasyRdf\Sparql\Client('https://api.triplydb.com/datasets/IrfanAkbariHabibi/kerenkali/services/kerenkali/sparql');

$query = "prefix dbp:  <http://dbpedia.org/property/> 
prefix dc:   <http://purl.org/dc/elements/1.1/>
prefix foaf: <http://xmlns.com/foaf/0.1/> 

SELECT ?name ?birthDate ?birthPlace
WHERE
{
	?data dbp:name ?name.
  	?data dc:birthDate ?birthDate.
  	?data dc:birthPlace ?birthPlace
} LIMIT 10";

$result = $endpoint->query($query);

$data = array();
foreach ($result as $row) {
	$nama = $row->name->getValue();
	$tanggal = $row->birthDate->getValue();
	$tempat = $row->birthPlace->getValue();

	array_push(
		$data,
		array(
			'name' => $nama,
			'date' => $tanggal,
			'place' => $tempat
		)
	);
}
$out = json_encode($data);
header('Content-Type: application/json');
// return $data;
echo $out;
