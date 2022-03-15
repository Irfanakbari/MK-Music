<?php
require 'vendor/autoload.php';

$foaf = new \EasyRdf\Graph("http://localhost/tubesmusik/Data/BestMusic.rdf");
$foaf->load();

$data = array();

foreach ($foaf->allOfType('foaf:musik') as $person) {
    $name = $person->get('foaf:namaBand');
    $vokalis = $person->get('foaf:vokalis');
    $judul = $person->get('foaf:judulLagu');
    $yt = $person->get('foaf:yt');
    $mp3 = $person->get('foaf:mp3');
    $cover = $person->get('foaf:cover');

    array_push(
        $data,
        array(
            'name' => $name->getValue(),
            'vokalis' => $vokalis->getValue(),
            'judul' => $judul->getValue(),
            'yt' => $yt->getValue(),
            'mp3' => $mp3->getValue(),
            'cover' => $cover->getValue()

        )
    );
}
$fix = json_encode($data);
return $fix;
