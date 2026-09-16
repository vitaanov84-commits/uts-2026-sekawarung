<template>
  <div class="penjualan-page">

    <!-- HEADER -->
    <div class="page-header">
      <div>
        <span class="page-label">TRANSAKSI WARUNG</span>
        <h1>Penjualan</h1>
        <p>Catat dan pantau transaksi penjualan Seka Warung.</p>
      </div>

      <button class="btn-tambah">
        + Transaksi Baru
      </button>
    </div>


    <!-- RINGKASAN -->
    <div class="summary">

      <div class="summary-card">
        <div class="summary-icon">Rp</div>

        <div>
          <span>Total Penjualan</span>
          <strong>Rp 12.450.000</strong>
        </div>
      </div>


      <div class="summary-card">
        <div class="summary-icon">#</div>

        <div>
          <span>Total Transaksi</span>
          <strong>348</strong>
        </div>
      </div>


      <div class="summary-card">
        <div class="summary-icon">✓</div>

        <div>
          <span>Transaksi Hari Ini</span>
          <strong>24</strong>
        </div>
      </div>

    </div>


    <!-- DATA TRANSAKSI -->
    <div class="transaction-card">

      <div class="card-header">

        <div>
          <h2>Riwayat Penjualan</h2>
          <p>Daftar transaksi penjualan terbaru.</p>
        </div>

        <div class="filter-box">
          <select>
            <option>Semua Transaksi</option>
            <option>Hari Ini</option>
            <option>Minggu Ini</option>
            <option>Bulan Ini</option>
          </select>
        </div>

      </div>


      <!-- TABLE -->
      <div class="table-wrapper">

        <table>

          <thead>
            <tr>
              <th>No</th>
              <th>ID Transaksi</th>
              <th>Tanggal</th>
              <th>Pelanggan</th>
              <th>Total</th>
              <th>Status</th>
              <th>Aksi</th>
            </tr>
          </thead>


          <tbody>

            <tr>
              <td>1</td>

              <td>
                <strong>#TRX001</strong>
              </td>

              <td>16 Sep 2026</td>

              <td>Umum</td>

              <td>
                <strong>Rp 45.000</strong>
              </td>

              <td>
                <span class="status selesai">
                  Selesai
                </span>
              </td>

              <td>
                <button class="btn-detail">
                  Detail
                </button>
              </td>
            </tr>


            <tr>
              <td>2</td>

              <td>
                <strong>#TRX002</strong>
              </td>

              <td>16 Sep 2026</td>

              <td>Umum</td>

              <td>
                <strong>Rp 72.000</strong>
              </td>

              <td>
                <span class="status selesai">
                  Selesai
                </span>
              </td>

              <td>
                <button class="btn-detail">
                  Detail
                </button>
              </td>
            </tr>


            <tr>
              <td>3</td>

              <td>
                <strong>#TRX003</strong>
              </td>

              <td>16 Sep 2026</td>

              <td>Umum</td>

              <td>
                <strong>Rp 28.000</strong>
              </td>

              <td>
                <span class="status selesai">
                  Selesai
                </span>
              </td>

              <td>
                <button class="btn-detail">
                  Detail
                </button>
              </td>
            </tr>


            <tr>
              <td>4</td>

              <td>
                <strong>#TRX004</strong>
              </td>

              <td>15 Sep 2026</td>

              <td>Umum</td>

              <td>
                <strong>Rp 95.000</strong>
              </td>

              <td>
                <span class="status selesai">
                  Selesai
                </span>
              </td>

              <td>
                <button class="btn-detail">
                  Detail
                </button>
              </td>
            </tr>


            <tr>
              <td>5</td>

              <td>
                <strong>#TRX005</strong>
              </td>

              <td>15 Sep 2026</td>

              <td>Umum</td>

              <td>
                <strong>Rp 36.000</strong>
              </td>

              <td>
                <span class="status selesai">
                  Selesai
                </span>
              </td>

              <td>
                <button class="btn-detail">
                  Detail
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

.penjualan-page {
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
   BUTTON
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

  font-size: 14px;
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

  font-size: 18px;
}


/* =========================
   CARD
========================= */

.transaction-card {
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
   FILTER
========================= */

.filter-box select {
  padding: 9px 12px;

  border: 1px solid #dfd2ca;

  border-radius: 7px;

  background: #fff;

  color: #655b55;

  font-size: 13px;

  outline: none;

  cursor: pointer;
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

.selesai {
  background: #eee8e1;

  color: #65745e;
}


/* =========================
   DETAIL
========================= */

.btn-detail {
  border: none;

  padding: 6px 10px;

  background: transparent;

  color: #c9798e;

  font-size: 12px;
  font-weight: 600;

  cursor: pointer;
}

.btn-detail:hover {
  text-decoration: underline;
}


/* =========================
   RESPONSIVE
========================= */

@media (max-width: 900px) {

  .summary {
    grid-template-columns: 1fr;
  }

}

@media (max-width: 600px) {

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

}

</style>