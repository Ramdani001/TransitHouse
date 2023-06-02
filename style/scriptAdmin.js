var map = L.map('map').setView([-0.000800,0.001607], 18.5);

function getColor(d) {
    return d == 'Jalan' ? "grey" :
           d == 'Industri' ? "grey" :
           d == 'Security' ? 'black' :
           d == 'Pusat Info' ? 'sky' :
           d == 'Mushola' ? 'grey' :
           d == 'Gazebo' ? 'red' :
           d == 'Taman' ? 'green' :
           d == 'Taman b' ? 'grey' :
           d == 'Unit A' ? 'yellow' :
           d == 'Unit B' ? 'Blue' :
           d == 'Unit C' ? 'yellow' :
           d == 'Terjual' ? 'purple' :
           "white";
}

function getColorStatus(d) {
    return d == 'Terjual' ? "red" :
           "orange";
}

function RegionStyle(feature){
    return{
        fillColor: getColor(feature.properties.Type),
        weight: 2,
        opacity: 1,
        color: 'white',
        fillOpacity: 0.7
    }
}

function RegionStyleByStatus(feature){
    return{
        fillColor: getColorStatus(feature.properties.Status),
        weight: 2,
        opacity: 1,
        color: 'white',
        fillOpacity: 0.7
    }
}

L.geoJson(Region, {style: RegionStyle}).addTo(map);
// L.geoJson(Region, {style: RegionStyleByStatus}).addTo(map);

console.log(Region, {style: RegionStyle});

// Pointer
const features = Pointer.features;

features.forEach((feature) => {
    const geometry = feature.geometry;

    if(geometry.type == "Point") {
        const coordinates = geometry.coordinates;

        const marker = L.marker([coordinates[1], coordinates[0]]);

        marker.on('click', function() {
            const properties = feature.properties;

            document.getElementById('Coordinates1').textContent = coordinates[1];
            document.getElementById('Coordinates2').textContent = coordinates[0];

            localStorage.setItem('Id_Pointer', properties.Id_Pointer);

            // Show Modal Informasi Unit
            $('#infoModal').modal('show');
        })

        marker.addTo(map);
    }
});

// Search data by data json on Server Database
$('#infoModal').on('show.bs.modal', function() {
    var myData = localStorage.getItem('Id_Pointer');

    $.ajax({
        url: 'search.php',
        method: 'POST',
        data: { searchData: myData },
        success: function(response) {
            var responseArray = JSON.parse(response);
            
            console.log(responseArray);

            // Insert Data Response on Server to Html
            $('#Id_Zone').val(responseArray[0].Id_Zone);
            $('#Nama_Zone').val(responseArray[0].Nama_Zone);
            $('#Type').val(responseArray[0].Type);
            $('#Toilet').val(responseArray[0].Toilet);
            $('#Kamar_Tidur').val(responseArray[0].Kamar_Tidur);
            $('#Status').val(responseArray[0].Status);
            $('#Luas_Bangunan').val(responseArray[0].Luas_Bangunan);
            $('#Luas_Tanah').val(responseArray[0].Luas_Tanah);

            var src = 'assets/img/unit/';

            $('#fotoUnit').attr('src', src +responseArray[0].Image)

        },
        error: function(error){
            console.error('Error : ', error);
        }
    });

});