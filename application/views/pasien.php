<div class="card">
  <div class="card-body">
    <div class="d-flex justify-content-between">
      <h5 class="card--title">
        Data Pasien
      </h5>
      <button
        class="btn btn-success"
        data-bs-toggle="modal"
        data-bs-target="#modal-tambah-pasien"
      >Tambah</button>
      <!-- Modal tambah -->
      <div class="modal fade" id="modal-tambah-pasien" tabindex="-1" aria-labelledby="modal-tambah-pasien" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modal-tambah-pasien">Tambah Pasien</h5>
            </div>
            <div class="modal-body">
              <label>ID Pasien</label>
              <input type="text" class="form-control">
              <br>
              <label>Nama Pasien</label>
              <input type="text" class="form-control">
              <br>
              <label>Alamat</label>
              <input type="text" class="form-control">
              <br>
              <label>Gender</label>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  Laki-laki
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                  Perempuan
                </label>
              </div>
              <br>
              <label>Tanggal lahir</label>
              <input type="date" class="form-control">
              <br>
              <label>No Telpon</label>
              <input type="number" class="form-control">
              <br>
              <label>Tipe Pembayaran</label> <br>
              <select class="form-select" aria-label="Default select example">
                <option value="1">Perusahaan</option>
                <option value="2">Pribadi</option>
              </select>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <br>

    <div class="table-responsive">
      <input type="text" class="form-control" placeholder="Search" style="width: 200px;">
      <br>
      <table class="table table-bordered border-info">
        <thead>
          <tr>
            <th scope="col">ID Pasien</th>
            <th scope="col">ID Perusahaan</th>
            <th scope="col">Nama Pasien</th>
            <th scope="col">Alamat</th>
            <th scope="col">Gender</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Nomor Telepon</th>
            <th scope="col">Tipe Pembayaran</th>
            <th scope="col" width="150">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              123
            </td>
            <td>456DAD</td>
            <td>Budi Agung</td>
            <td>Cileungsi Bogor</td>
            <td>Pria</td>
            <td>13 Oktober 1945</td>
            <td>6361736173</td>
            <td>Mandiri</td>
            <td>
              <button class="btn btn-outline-danger btn-sm">Hapus</button>
              <button class="btn btn-outline-success btn-sm">Edit</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>