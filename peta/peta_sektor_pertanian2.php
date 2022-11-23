<?php
  include ('config/config.php');

  $queryapi=mysql_query("SELECT * FROM google_api")or die(mysql_error());
  $api = mysql_fetch_array($queryapi);
?>



        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                Peta Sektor Pertanian Kabupaten Sukabumi
              </div>
              <div class="card-body ">

              <form name="cari" method="GET">
                  <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <input type="text" name="cari_kecamatan" class="form-control" value="<?php echo $_GET['cari_kecamatan']; ?>" placeholder="Silakan Ketikan Nama Kecamatan Disini...!">
                      </div>
                    </div>
                    <div class="col-md-1 px-1">
                      <div class="form-group">
                      <input name="hal" type="hidden" id="hal" value="<? echo $_GET['hal']; ?>" />
                        <button class="btn btn-primary btn-block" type="submit">Cari</button>
                      </div>
                    </div>
                    </div>
              </form> 

                <div id="map3" class="map">
                </div>
              </div>
            </div>
          </div>
        </div>

<script type="text/javascript">
    const map = L.map('map3').setView([-6.9866678,106.2085906], 10);

    const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

    // const marker = L.marker([51.5, -0.09]).addTo(map)
    //     .bindPopup('<b>Hello world!</b><br />I am a popup.').openPopup();

    // const circle = L.circle([51.508, -0.11], {
    //     color: 'red',
    //     fillColor: '#f03',
    //     fillOpacity: 0.5,
    //     radius: 500
    // }).addTo(map).bindPopup('I am a circle.');
    //
    // const polygon = L.polygon([
    //     [51.509, -0.08],
    //     [51.503, -0.06],
    //     [51.51, -0.047]
    // ]).addTo(map).bindPopup('I am a polygon.');
    //
    //
    // const popup = L.popup()
    //     .setLatLng([51.513, -0.09])
    //     .setContent('I am a standalone popup.')
    //     .openOn(map);
    //
    // function onMapClick(e) {
    //     popup
    //         .setLatLng(e.latlng)
    //         .setContent(`You clicked the map at ${e.latlng.toString()}`)
    //         .openOn(map);
    // }
    //
    // map.on('click', onMapClick);
</script>
