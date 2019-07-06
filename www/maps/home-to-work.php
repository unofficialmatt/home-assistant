<?php

include "static-map-direction.php";

$origin = "45.291002,-0.868131";
$destination = "44.683159,-0.405704";
$waypoints = array(
    "44.8765065,-0.4444849",
    "44.8843778,-0.1368667"
  );

$map_url = getStaticGmapURLForDirection($origin, $destination, $waypoints);

echo '<img src="'.$map_url.'"/>';