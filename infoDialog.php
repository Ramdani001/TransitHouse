
<!-- Modal -->
<div class="modal fade" id="infoModal" tabindex="-1" aria-labelledby="infoModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="infoModalLabel">Informasi Unit</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="">
            <!-- Image Unit -->
            <div class="d-flex justify-content-center">
              <img src="" class="" alt="Foto Rumah" id="fotoUnit" width="200">
            </div>

            <div class="d-flex">
              <div class="mb-2 w-100">
                <label for="Type">Tipe Rumah</label>
                <input type="text" class=" form-control" id="Type" readonly></input>
              </div>

              <div class="mb-2 w-100 mx-1">
                <label for="Status">Status Unit</label>
                <input type="text" class=" form-control" id="Status" placeholder="Status" readonly></input>
              </div>
              
            </div>
            
            <div class="d-flex">
              <div class="mb-2 w-100">
                <label for="Type">Kamar Tidur</label>
                <input type="text" class=" form-control" id="Kamar_Tidur" placeholder="Type Unit" readonly></input>
              </div>

              <div class="mb-2 w-100 mx-1">
                <label for="Toilet">Toilet</label>
                <input type="text" class=" form-control" id="Toilet" readonly></input>
              </div>

            </div>

            <div class="d-flex">
              <div class="mb-2 w-100">
                <label for="Luas_Bangunan">Luas Bangunan</label>
                <input type="text" class=" form-control" id="Luas_Bangunan" placeholder="Luas Bangunan" readonly></input>
              </div>

              <div class="mb-2 mx-1 w-100">
                <label for="Luas Tanah">Luas Tanah</label>
                <input type="text" class=" form-control" id="Luas_Tanah" placeholder="" readonly></input>
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
        </form>
      </div>
    </div>
  </div>
</div>