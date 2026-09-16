<template>
  <div class="laporan-page">

    <!-- HEADER -->
    <div class="page-header">
      <div>
        <span class="page-label">LAPORAN WARUNG</span>
        <h1>Laporan</h1>
        <p>Melihat ringkasan penjualan Seka Warung.</p>
      </div>

      <button class="btn-cetak" @click="cetakLaporan">
        Cetak Laporan
      </button>
    </div>


    <!-- FILTER -->
    <div class="filter-card">

      <div class="filter-item">
        <label>Periode</label>

        <select v-model="periode">
          <option value="hari">Hari Ini</option>
          <option value="minggu">Minggu Ini</option>
          <option value="bulan">Bulan Ini</option>
        </select>
      </div>


      <div class="filter-item">
        <label>Tanggal</label>

        <input
          type="date"
          v-model="tanggal"
        />
      </div>


      <button class="btn-tampilkan" @click="tampilkanLaporan">
        Tampilkan
      </button>

    </div>


    <!-- SUMMARY -->
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
        <div class="summary-icon">P</div>

        <div>
          <span>Produk Terjual</span>
          <strong>726</strong>
        </div>
      </div>

    </div>


    <!-- LAPORAN PENJUALAN -->
    <div class="report-card">

      <div class="card-header">
        <div>
          <h2>Ringkasan Penjualan</h2>
          <p>Data penjualan berdasarkan periode yang dipilih.</p>
        </div>
      </div>


      <div class="table-wrapper">

        <table>

          <thead>
            <tr>
              <th>No</th>
              <th>Tanggal</th>
              <th>Jumlah Transaksi</th>
              <th>Produk Terjual</th>
              <th>Total Penjualan</th>
            </tr>
          </thead>


          <tbody>

            <tr>
              <td>1</td>
              <td>16 Sep 2026</td>
              <td>24 transaksi</td>
              <td>52 produk</td>
              <td>
                <strong>Rp 850.000</strong>
              </td>
            </tr>


            <tr>
              <td>2</td>
              <td>15 Sep 2026</td>
              <td>31 transaksi</td>
              <td>68 produk</td>
              <td>
                <strong>Rp 1.125.000</strong>
              </td>
            </tr>


            <tr>
              <td>3</td>
              <td>14 Sep 2026</td>
              <td>27 transaksi</td>
              <td>61 produk</td>
              <td>
                <strong>Rp 975.000</strong>
              </td>
            </tr>


            <tr>
              <td>4</td>
              <td>13 Sep 2026</td>
              <td>22 transaksi</td>
              <td>48 produk</td>
              <td>
                <strong>Rp 780.000</strong>
              </td>
            </tr>


            <tr>
              <td>5</td>
              <td>12 Sep 2026</td>
              <td>29 transaksi</td>
              <td>64 produk</td>
              <td>
                <strong>Rp 1.040.000</strong>
              </td>
            </tr>

          </tbody>

        </table>

      </div>

    </div>


    <!-- PRODUK TERLARIS -->
    <div class="report-card">

      <div class="card-header">
        <div>
          <h2>Produk Terlaris</h2>
          <p>Produk dengan jumlah penjualan terbanyak.</p>
        </div>
      </div>


      <div class="product-list">

        <div class="product-item">
          <div class="product-number">01</div>

          <div class="product-info">
            <strong>Keripik Singkong</strong>
            <span>Snack</span>
          </div>

          <div class="product-total">
            128 terjual
          </div>
        </div>


        <div class="product-item">
          <div class="product-number">02</div>

          <div class="product-info">
            <strong>Makaroni Pedas</strong>
            <span>Snack</span>
          </div>

          <div class="product-total">
            96 terjual
          </div>
        </div>


        <div class="product-item">
          <div class="product-number">03</div>

          <div class="product-info">
            <strong>Teh Botol</strong>
            <span>Minuman</span>
          </div>

          <div class="product-total">
            85 terjual
          </div>
        </div>

      </div>

    </div>

  </div>
</template>


<script setup>
import { ref } from 'vue'

const periode = ref('bulan')
const tanggal = ref('')

const tampilkanLaporan = () => {
  alert(`Laporan ${periode.value} ditampilkan.`)
}

const cetakLaporan = () => {
  window.print()
}
</script>


<style scoped>

* {
  box-sizing: border-box;
}


/* =========================
   PAGE
========================= */

.laporan-page {
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

  margin-bottom: 25px;
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

.btn-cetak {
  border: none;

  padding: 11px 18px;

  border-radius: 8px;

  background: #d78b9d;

  color: white;

  font-size: 13px;
  font-weight: 600;

  cursor: pointer;
}

.btn-cetak:hover {
  background: #c9798e;
}


/* =========================
   FILTER
========================= */

.filter-card {
  display: flex;
  align-items: flex-end;

  gap: 15px;

  padding: 20px;

  margin-bottom: 22px;

  background: #fffdfb;

  border: 1px solid #eaded4;

  border-radius: 12px;
}

.filter-item {
  display: flex;
  flex-direction: column;

  gap: 7px;
}

.filter-item label {
  color: #655952;

  font-size: 12px;
  font-weight: 600;
}

.filter-item select,
.filter-item input {
  height: 40px;

  padding: 0 12px;

  border: 1px solid #dfd2ca;

  border-radius: 7px;

  background: white;

  color: #302b29;

  font-size: 13px;

  outline: none;
}

.filter-item select {
  width: 180px;
}

.filter-item input {
  width: 180px;
}

.btn-tampilkan {
  height: 40px;

  padding: 0 18px;

  border: none;

  border-radius: 7px;

  background: #f0e1d7;

  color: #a85f72;

  font-size: 13px;

  font-weight: 600;

  cursor: pointer;
}

.btn-tampilkan:hover {
  background: #ead5ca;
}


/* =========================
   SUMMARY
========================= */

.summary {
  display: grid;

  grid-template-columns: repeat(3, 1fr);

  gap: 18px;

  margin-bottom: 22px;
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

  background: #f5e7dc;

  color: #c9798e;

  font-size: 13px;
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

  font-size: 19px;
}


/* =========================
   REPORT CARD
========================= */

.report-card {
  margin-bottom: 22px;

  background: #fffdfb;

  border: 1px solid #eaded4;

  border-radius: 12px;

  overflow: hidden;
}


/* =========================
   CARD HEADER
========================= */

.card-header {
  padding: 21px 24px;

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
   TABLE
========================= */

.table-wrapper {
  overflow-x: auto;
}

table {
  width: 100%;

  min-width: 700px;

  border-collapse: collapse;
}

thead {
  background: #f5e7dc;
}

th {
  padding: 14px 18px;

  text-align: left;

  color: #655952;

  font-size: 12px;
  font-weight: 700;
}

td {
  padding: 16px 18px;

  border-top: 1px solid #eee4dc;

  color: #6d625b;

  font-size: 13px;
}

td strong {
  color: #302b29;
}


/* =========================
   PRODUCT LIST
========================= */

.product-list {
  padding: 5px 24px;
}

.product-item {
  display: flex;
  align-items: center;

  padding: 16px 0;

  border-bottom: 1px solid #eee4dc;
}

.product-item:last-child {
  border-bottom: none;
}

.product-number {
  width: 42px;

  color: #c9798e;

  font-size: 13px;
  font-weight: 700;
}

.product-info {
  flex: 1;

  display: flex;
  flex-direction: column;

  gap: 4px;
}

.product-info strong {
  color: #302b29;

  font-size: 14px;
}

.product-info span {
  color: #968b84;

  font-size: 11px;
}

.product-total {
  color: #a85f72;

  font-size: 13px;
  font-weight: 600;
}


/* =========================
   RESPONSIVE
========================= */

@media (max-width: 800px) {

  .summary {
    grid-template-columns: 1fr;
  }

  .filter-card {
    align-items: stretch;
    flex-direction: column;
  }

  .filter-item select,
  .filter-item input,
  .btn-tampilkan {
    width: 100%;
  }

}


@media (max-width: 600px) {

  .page-header {
    flex-direction: column;
    align-items: flex-start;

    gap: 15px;
  }

  .btn-cetak {
    width: 100%;
  }

}

</style>