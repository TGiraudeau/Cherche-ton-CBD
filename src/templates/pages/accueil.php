
    

<?php

$page_title =" Accueil - CTCBD.com";

ob_start()
?>
<div id="accueil_body1">
<div id="accueil_title">
        <h1> Cherche ta Frapp... Ton CBD | Accueil </h1>
    </div>
</div>

<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
     integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
     crossorigin=""></script>

<script type="module" src="../../assets/js/accueil/accueil.js"></script>

<div id="map"></div>



<?php
$page_content = ob_get_clean();



?>




</body>
</html>

