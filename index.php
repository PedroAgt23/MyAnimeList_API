<?php
$nameOfAnime = $_POST["nameOfAnime"];
$url =  "https://api.jikan.moe/v3/search/anime?q=$nameOfAnime&limit=16";
$getUrl = file_get_contents($url);
$data = json_decode($getUrl);
$results = $data->results;

foreach ($results as $anime) {
    echo "<table><tr><td><img src='$anime->image_url'></td><td><h2>$anime->title<h2></h2></td><td>$anime->synopsis</td></table>";
}

?>
<head>
    <title>SuiSan</title>
</head>
<body>
<section>

</section>
</body>