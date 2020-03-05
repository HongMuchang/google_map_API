<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <title>GoogleMapの使い方</title>

    <script src="http://maps.google.com/maps/api/js?key={APIのキーを入力}"></script>

    <style>
    html {
        height: 100%;
    }

    body {
        height: 100%;
    }

    #map {
        height: 500px;
        width: 800px;
    }
    </style>
</head>

<body>
    <div id="map"></div>

    <script>
    //google mapの河内長尾
    var MyLatLng = new google.maps.LatLng(3 ep4 .4605176, 135.5693555);
    var Options = {
        zoom: 15, //地図の縮尺値
        center: MyLatLng, //地図の中心座標
        mapTypeId: "roadmap" //地図の種類
    };
    var map = new google.maps.Map(document.getElementById("map"), Options);
    </script>

    <!--マップにピン-->
    <script>
    function initMap() {
        var myLatLng = {
            lat: 34.4605176,
            lng: 135.5693555
        };

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 14,
            center: myLatLng
        });

        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map
        });
    }
    initMap();
    </script>

</body>

</html>