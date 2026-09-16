<template>
  <div class="pelanggan-page">

    <!-- HEADER -->
    <div class="page-header">
      <div>
        <span class="page-label">DATA PELANGGAN</span>
        <h1>Pelanggan</h1>
        <p>Kelola data pelanggan Seka Warung dengan mudah.</p>
      </div>

      <button class="btn-tambah">
        + Tambah Pelanggan
      </button>
    </div>


    <!-- RINGKASAN -->
    <div class="summary">

      <div class="summary-card">
        <div class="summary-icon">👥</div>
        <div>
          <span>Total Pelanggan</span>
          <strong>214</strong>
        </div>
      </div>

      <div class="summary-card">
        <div class="summary-icon">✓</div>
        <div>
          <span>Pelanggan Aktif</span>
          <strong>198</strong>
        </div>
      </div>

      <div class="summary-card">
        <div class="summary-icon">+</div>
        <div>
          <span>Pelanggan Baru</span>
          <strong>15</strong>
        </div>
      </div>

    </div>


    <!-- DATA PELANGGAN -->
    <div class="customer-card">

      <div class="card-header">

        <div>
          <h2>Daftar Pelanggan</h2>
          <p>Data pelanggan yang terdaftar di Seka Warung.</p>
        </div>

        <div class="search-box">
          <span>⌕</span>

          <input
            type="text"
            placeholder="Cari pelanggan..."
          />
        </div>

      </div>


      <!-- TABLE -->
      <div class="table-wrapper">

        <table>

          <thead>
            <tr>
              <th>No</th>
              <th>Nama Pelanggan</th>
              <th>Email</th>
              <th>No. Telepon</th>
              <th>Total Transaksi</th>
              <th>Status</th>
              <th>Aksi</th>
            </tr>
          </thead>

          <tbody>

            <tr>
              <td>1</td>

              <td>
                <strong>Andi Saputra</strong>
              </td>

              <td>andi@email.com</td>

              <td>0812-3456-7890</td>

              <td>24 transaksi</td>

              <td>
                <span class="status aktif">
                  Aktif
                </span>
              </td>

              <td>
                <button class="btn-detail">
                  Detail
                </button>

                <button class="btn-hapus">
                  Hapus
                </button>
              </td>
            </tr>


            <tr>
              <td>2</td>

              <td>
                <strong>Siti Rahma</strong>
              </td>

              <td>siti@email.com</td>

              <td>0813-4567-8901</td>

              <td>18 transaksi</td>

              <td>
                <span class="status aktif">
                  Aktif
                </span>
              </td>

              <td>
                <button class="btn-detail">
                  Detail
                </button>

                <button class="btn-hapus">
                  Hapus
                </button>
              </td>
            </tr>


            <tr>
              <td>3</td>

              <td>
                <strong>Rizky Maulana</strong>
              </td>

              <td>rizky@email.com</td>

              <td>0821-5678-9012</td>

              <td>12 transaksi</td>

              <td>
                <span class="status aktif">
                  Aktif
                </span>
              </td>

              <td>
                <button class="btn-detail">
                  Detail
                </button>

                <button class="btn-hapus">
                  Hapus
                </button>
              </td>
            </tr>


            <tr>
              <td>4</td>

              <td>
                <strong>Dewi Lestari</strong>
              </td>

              <td>dewi@email.com</td>

              <td>0857-1234-5678</td>

              <td>8 transaksi</td>

              <td>
                <span class="status aktif">
                  Aktif
                </span>
              </td>

              <td>
                <button class="btn-detail">
                  Detail
                </button>

                <button class="btn-hapus">
                  Hapus
                </button>
              </td>
            </tr>


            <tr>
              <td>5</td>

              <td>
                <strong>Fajar Ramadhan</strong>
              </td>

              <td>fajar@email.com</td>

              <td>0895-2345-6789</td>

              <td>5 transaksi</td>

              <td>
                <span class="status nonaktif">
                  Tidak Aktif
                </span>
              </td>

              <td>
                <button class="btn-detail">
                  Detail
                </button>

                <button class="btn-hapus">
                  Hapus
                </button>
              </td>
            </tr>

          </tbody>

        </table>

      </div>

    </div>

  </div>
</template>


<style scoped>

* {
  box-sizing: border-box;
}


/* =========================
   PAGE
========================= */

.pelanggan-page {
  width: 100%;
  color: #302b29;
}


/* =========================
   HEADER
========================= */

.page-header {
  display: flex;
  align-items: center;
  justify-content: space-between;

  margin-bottom: 28px;
}

.page-label {
  display: block;

  margin-bottom: 7px;

  color: #c9798e;

  font-size: 12px;
  font-weight: 700;
  letter-spacing: 2px;
}

.page-header h1 {
  margin: 0;

  color: #302b29;

  font-size: 30px;
  font-weight: 700;
}

.page-header p {
  margin: 7px 0 0;

  color: #82766f;

  font-size: 14px;
}


/* =========================
   BUTTON TAMBAH
========================= */

.btn-tambah {
  border: none;
  border-radius: 8px;

  padding: 12px 20px;

  background: #d78b9d;
  color: white;

  font-size: 14px;
  font-weight: 600;

  cursor: pointer;
}

.btn-tambah:hover {
  background: #c9798e;
}


/* =========================
   SUMMARY
========================= */

.summary {
  display: grid;

  grid-template-columns: repeat(3, 1fr);

  gap: 18px;

  margin-bottom: 24px;
}

.summary-card {
  display: flex;
  align-items: center;

  gap: 15px;

  padding: 20px;

  background: #fffdfb;

  border: 1px solid #eaded4;

  border-radius: 12px;
}

.summary-icon {
  width: 45px;
  height: 45px;

  display: flex;
  align-items: center;
  justify-content: center;

  border-radius: 10px;

  background: #f4e7dc;

  color: #c9798e;

  font-size: 18px;
  font-weight: 700;
}

.summary-card span {
  display: block;

  margin-bottom: 5px;

  color: #82766f;

  font-size: 12px;
}

.summary-card strong {
  color: #302b29;

  font-size: 21px;
}


/* =========================
   CARD
========================= */

.customer-card {
  background: #fffdfb;

  border: 1px solid #eaded4;

  border-radius: 12px;

  overflow: hidden;
}


/* =========================
   CARD HEADER
========================= */

.card-header {
  display: flex;

  align-items: center;
  justify-content: space-between;

  padding: 22px 24px;

  border-bottom: 1px solid #eaded4;
}

.card-header h2 {
  margin: 0;

  color: #302b29;

  font-size: 18px;
}

.card-header p {
  margin: 5px 0 0;

  color: #968b84;

  font-size: 12px;
}


/* =========================
   SEARCH
========================= */

.search-box {
  width: 220px;

  display: flex;
  align-items: center;

  gap: 8px;

  padding: 9px 12px;

  background: white;

  border: 1px solid #dfd2ca;

  border-radius: 7px;
}

.search-box span {
  color: #c9798e;

  font-size: 18px;
}

.search-box input {
  width: 100%;

  border: none;
  outline: none;

  color: #302b29;

  font-size: 13px;
}

.search-box input::placeholder {
  color: #aaa09a;
}


/* =========================
   TABLE
========================= */

.table-wrapper {
  width: 100%;

  overflow-x: auto;
}

table {
  width: 100%;

  border-collapse: collapse;
}

thead {
  background: #f7eee7;
}

th {
  padding: 14px 18px;

  text-align: left;

  color: #746962;

  font-size: 12px;
  font-weight: 700;
}

td {
  padding: 16px 18px;

  border-top: 1px solid #eee4dd;

  color: #655b55;

  font-size: 13px;
}

td strong {
  color: #302b29;

  font-weight: 600;
}


/* =========================
   STATUS
========================= */

.status {
  display: inline-block;

  padding: 5px 9px;

  border-radius: 5px;

  font-size: 11px;
  font-weight: 600;
}

.aktif {
  background: #eee8e1;
  color: #65745e;
}

.nonaktif {
  background: #f3e3e3;
  color: #a95f5f;
}


/* =========================
   ACTION
========================= */

.btn-detail,
.btn-hapus {
  border: none;

  background: transparent;

  margin-right: 8px;

  font-size: 12px;
  font-weight: 600;

  cursor: pointer;
}

.btn-detail {
  color: #c9798e;
}

.btn-hapus {
  color: #a95f5f;
}

.btn-detail:hover,
.btn-hapus:hover {
  text-decoration: underline;
}


/* =========================
   RESPONSIVE
========================= */

@media (max-width: 1000px) {

  .summary {
    grid-template-columns: 1fr;
  }

}

@media (max-width: 700px) {

  .page-header {
    flex-direction: column;

    align-items: flex-start;

    gap: 15px;
  }

  .btn-tambah {
    width: 100%;
  }

  .card-header {
    flex-direction: column;

    align-items: flex-start;

    gap: 15px;
  }

  .search-box {
    width: 100%;
  }

}

</style>