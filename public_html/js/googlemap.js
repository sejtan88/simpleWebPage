'use strict';

var gMap = {
    initMap: function () {

        var uluru = {
                lat: 44.982064,
                lng: 20.174343
            },
            map = new google.maps.Map(document.getElementById('map'), {
                zoom: 14,
                center: uluru
            }),
            iconLink = 'http://bojacelektrika.rs/slike/bojaclogoxs.png',
            marker = new google.maps.Marker({
                position: uluru,
                map: map,
                icon: iconLink
            });
    }
};
