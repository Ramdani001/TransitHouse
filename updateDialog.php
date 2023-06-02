
<!-- Modal -->
<div class="modal fade" id="infoModal" tabindex="-1" aria-labelledby="infoModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="infoModalLabel">Informasi Unit</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="update.php" method="POST" enctype="multipart/form-data">
            <!-- Image Unit -->

            <div class="d-flex align-items-end">
                <img src="" class="" alt="Foto Rumah" id="fotoUnit" name="gambarLama" width="200">
                <div class="input-group mx-1 h-25">
                    <input id="image" name="gambar" type="file" class="form-control" id="inputGroupFile02">
                </div>
            </div>

            <div class="d-flex">
              <div class="mb-2 w-100">
                <label for="Type">Id_Zone</label>
                <input type="text" class=" form-control" name="Id_Zone" id="Id_Zone" readonly></input>
              </div>

              <div class="mb-2 w-100 mx-1">
                <label for="Status">Nama Zona</label>
                <input type="text" class=" form-control" name="Nama_Zone" id="Nama_Zone"></input>
              </div>
              
            </div>

            <div class="d-flex">
              <div class="mb-2 w-100">
                <label for="Type">Tipe Rumah</label>
                <input type="text" class=" form-control" name="Type" id="Type"></input>
              </div>

              <div class="mb-2 w-100 mx-1">
                <label for="Status">Status Unit</label>
                <input type="text" class=" form-control" name="Status" id="Status" placeholder="Status"></input>
              </div>
              
            </div>
            
            <div class="d-flex">
              <div class="mb-2 w-100">
                <label for="Type">Kamar Tidur</label>
                <input type="text" class=" form-control" name="Kamar_Tidur" id="Kamar_Tidur" placeholder="Type Unit"></input>
              </div>

              <div class="mb-2 w-100 mx-1">
                <label for="Toilet">Toilet</label>
                <input type="text" class=" form-control" name="Toilet" id="Toilet"></input>
              </div>

            </div>

            <div class="d-flex">
              <div class="mb-2 w-100">
                <label for="Luas_Bangunan">Luas Bangunan</label>
                <input type="text" class=" form-control" name="Luas_Bangunan" id="Luas_Bangunan" placeholder="Luas Bangunan"></input>
              </div>

              <div class="mb-2 mx-1 w-100">
                <label for="Luas Tanah">Luas Tanah</label>
                <input type="text" class=" form-control" name="Luas_Tanah" id="Luas_Tanah" placeholder="Luas Tanah"></input>
              </div>
            </div>

            <div class="d-flex">
                <div class="w-100">
                  <label for="Coordinates1">Longtitude</label>
                  <h2 type="text" class="form-control" id="Coordinates1"> </h2>
                </div>
                <div class="w-100">
                  <label for="Coordinates2">Latitude</label>
                  <h2 type="text" class="form-control  mx-1" id="Coordinates2"> </h2>
                </div>
            </div>
            <button type="submit" name="btnUpdate" class="btn btn-primary w-100 mt-1 mb-2">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>