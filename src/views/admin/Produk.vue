<template>
  <div class="produk-page">

    <!-- HEADER -->
    <div class="page-header">
      <div>
        <span class="page-label">DATA WARUNG</span>
        <h1>Produk</h1>
        <p>Kelola daftar produk yang tersedia di Seka Warung.</p>
      </div>

      <button class="btn-tambah">
        + Tambah Produk
      </button>
    </div>

    <!-- RINGKASAN -->
    <div class="summary">

      <div class="summary-card">
        <div class="summary-icon">🛒</div>
        <div>
          <span>Total Produk</span>
          <strong>86</strong>
        </div>
      </div>

      <div class="summary-card">
        <div class="summary-icon">📦</div>
        <div>
          <span>Stok Tersedia</span>
          <strong>72</strong>
        </div>
      </div>

      <div class="summary-card">
        <div class="summary-icon">⚠️</div>
        <div>
          <span>Stok Menipis</span>
          <strong>12</strong>
        </div>
      </div>

    </div>

    <!-- TABEL PRODUK -->
    <div class="product-card">

      <div class="card-header">
        <div>
          <h2>Daftar Produk</h2>
          <p>Data produk Seka Warung</p>
        </div>

        <div class="search-box">
          🔍
          <input
            type="text"
            placeholder="Cari produk..."
          />
        </div>
      </div>

      <div class="table-wrapper">
        <table>

          <thead>
            <tr>
              <th>No</th>
              <th>Nama Produk</th>
              <th>Kategori</th>
              <th>Harga</th>
              <th>Stok</th>
              <th>Status</th>
              <th>Aksi</th>
            </tr>
          </thead>

          <tbody>

            <tr>
              <td>1</td>
              <td>
                <strong>Keripik Singkong</strong>
              </td>
              <td>Makanan Ringan</td>
              <td>Rp 8.000</td>
              <td>35</td>
              <td>
                <span class="status tersedia">
                  Tersedia
                </span>
              </td>
              <td>
                <button class="btn-edit">Edit</button>
                <button class="btn-hapus">Hapus</button>
              </td>
            </tr>

            <tr>
              <td>2</td>
              <td>
                <strong>Roti Cokelat</strong>
              </td>
              <td>Makanan</td>
              <td>Rp 6.000</td>
              <td>20</td>
              <td>
                <span class="status tersedia">
                  Tersedia
                </span>
              </td>
              <td>
                <button class="btn-edit">Edit</button>
                <button class="btn-hapus">Hapus</button>
              </td>
            </tr>

            <tr>
              <td>3</td>
              <td>
                <strong>Air Mineral</strong>
              </td>
              <td>Minuman</td>
              <td>Rp 4.000</td>
              <td>8</td>
              <td>
                <span class="status menipis">
                  Stok Menipis
                </span>
              </td>
              <td>
                <button class="btn-edit">Edit</button>
                <button class="btn-hapus">Hapus</button>
              </td>
            </tr>

            <tr>
              <td>4</td>
              <td>
                <strong>Teh Kotak</strong>
              </td>
              <td>Minuman</td>
              <td>Rp 5.000</td>
              <td>15</td>
              <td>
                <span class="status tersedia">
                  Tersedia
                </span>
              </td>
              <td>
                <button class="btn-edit">Edit</button>
                <button class="btn-hapus">Hapus</button>
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

.produk-page {
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

  transition: 0.2s;
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

  font-size: 20px;
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
   PRODUCT CARD
========================= */

.product-card {
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
  display: flex;
  align-items: center;
  gap: 8px;

  width: 220px;

  padding: 9px 12px;

  border: 1px solid #dfd2ca;
  border-radius: 7px;

  background: #fff;
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

.tersedia {
  background: #eee8e1;
  color: #65745e;
}

.menipis {
  background: #f5e4d7;
  color: #b87552;
}


/* =========================
   ACTION
========================= */

.btn-edit,
.btn-hapus {
  border: none;
  background: none;

  margin-right: 8px;

  font-size: 12px;
  font-weight: 600;

  cursor: pointer;
}

.btn-edit {
  color: #c9798e;
}

.btn-hapus {
  color: #a95f5f;
}


/* =========================
   RESPONSIVE
========================= */

@media (max-width: 900px) {

  .summary {
    grid-template-columns: 1fr;
  }

  .page-header {
    align-items: flex-start;
    gap: 15px;
  }

}

@media (max-width: 600px) {

  .page-header {
    flex-direction: column;
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