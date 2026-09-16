<template>
  <div class="dashboard">

    <!-- HEADER -->
    <header class="dashboard-header">
      <div>
        <span class="eyebrow">DASHBOARD ADMIN</span>
        <h1>Dashboard</h1>
        <p>Kelola dan pantau aktivitas Seka Warung dengan mudah.</p>
      </div>

      <div class="admin-info">
        <div class="admin-avatar">A</div>
        <div>
          <strong>Admin Warung</strong>
          <span>Administrator</span>
        </div>
      </div>
    </header>


    <!-- CONTENT -->
    <main class="dashboard-content">

      <!-- WELCOME -->
      <section class="welcome-card">
        <div>
          <span class="welcome-label">SEKA WARUNG</span>

          <h2>
            Selamat datang kembali, Admin
          </h2>

          <p>
            Pantau penjualan dan kelola data warung dari satu tempat.
          </p>
        </div>

        <div class="welcome-icon">
          🏪
        </div>
      </section>


      <!-- STATISTICS -->
      <section class="stats-grid">

        <div class="stat-card">
          <div class="stat-top">
            <div class="stat-icon">💰</div>
            <span>⋮</span>
          </div>

          <p>Total Penjualan</p>
          <h3>Rp 12.450.000</h3>
          <small>+12,5% dari bulan lalu</small>
        </div>


        <div class="stat-card">
          <div class="stat-top">
            <div class="stat-icon">🧾</div>
            <span>⋮</span>
          </div>

          <p>Total Transaksi</p>
          <h3>348</h3>
          <small>+8,2% dari bulan lalu</small>
        </div>


        <div class="stat-card">
          <div class="stat-top">
            <div class="stat-icon">🛒</div>
            <span>⋮</span>
          </div>

          <p>Total Produk</p>
          <h3>86</h3>
          <small class="warning">12 produk stok menipis</small>
        </div>


        <div class="stat-card">
          <div class="stat-top">
            <div class="stat-icon">👥</div>
            <span>⋮</span>
          </div>

          <p>Pelanggan</p>
          <h3>214</h3>
          <small>+15 pelanggan baru</small>
        </div>

      </section>


      <!-- BOTTOM GRID -->
      <section class="bottom-grid">

        <!-- PENJUALAN -->
        <div class="content-card">

          <div class="card-header">
            <div>
              <h3>Penjualan</h3>
              <p>Ringkasan penjualan bulan ini</p>
            </div>

            <select>
              <option>7 Hari</option>
              <option>30 Hari</option>
              <option>3 Bulan</option>
            </select>
          </div>

          <div class="sales-placeholder">

            <div class="sales-item">
              <span>Senin</span>
              <div class="bar">
                <div class="bar-fill" style="width: 75%"></div>
              </div>
              <strong>Rp 1,2 jt</strong>
            </div>

            <div class="sales-item">
              <span>Selasa</span>
              <div class="bar">
                <div class="bar-fill" style="width: 55%"></div>
              </div>
              <strong>Rp 900 rb</strong>
            </div>

            <div class="sales-item">
              <span>Rabu</span>
              <div class="bar">
                <div class="bar-fill" style="width: 85%"></div>
              </div>
              <strong>Rp 1,4 jt</strong>
            </div>

            <div class="sales-item">
              <span>Kamis</span>
              <div class="bar">
                <div class="bar-fill" style="width: 65%"></div>
              </div>
              <strong>Rp 1,1 jt</strong>
            </div>

          </div>

        </div>


        <!-- AKSI CEPAT -->
        <div class="content-card">

          <div class="card-header">
            <div>
              <h3>Aksi Cepat</h3>
              <p>Kelola warung dengan cepat</p>
            </div>
          </div>

          <div class="quick-actions">

            <router-link to="/admin/produk" class="quick-action">
              <div class="quick-icon">🛒</div>

              <div>
                <strong>Kelola Produk</strong>
                <span>Tambah atau ubah produk</span>
              </div>

              <b>›</b>
            </router-link>


            <router-link to="/admin/penjualan" class="quick-action">
              <div class="quick-icon">🧾</div>

              <div>
                <strong>Catat Penjualan</strong>
                <span>Kelola transaksi penjualan</span>
              </div>

              <b>›</b>
            </router-link>


            <router-link to="/admin/pelanggan" class="quick-action">
              <div class="quick-icon">👥</div>

              <div>
                <strong>Data Pelanggan</strong>
                <span>Lihat data pelanggan</span>
              </div>

              <b>›</b>
            </router-link>

          </div>

        </div>

      </section>

    </main>

  </div>
</template>


<style scoped>

* {
  box-sizing: border-box;
}


/* =========================
   DASHBOARD
========================= */

.dashboard {
  min-height: 100vh;
  background: #faf7f3;
  color: #302b28;
  font-family: Arial, Helvetica, sans-serif;
}


/* =========================
   HEADER
========================= */

.dashboard-header {
  min-height: 105px;
  padding: 25px 40px;

  background: #fffdfb;
  border-bottom: 1px solid #eadfd8;

  display: flex;
  align-items: center;
  justify-content: space-between;
}

.eyebrow {
  display: block;
  margin-bottom: 6px;

  color: #c9788c;
  font-size: 12px;
  font-weight: 700;
  letter-spacing: 2px;
}

.dashboard-header h1 {
  margin: 0;

  font-size: 30px;
  font-weight: 700;

  color: #302b28;
}

.dashboard-header p {
  margin: 6px 0 0;

  color: #81766f;
  font-size: 15px;
}


/* =========================
   ADMIN
========================= */

.admin-info {
  display: flex;
  align-items: center;
  gap: 12px;
}

.admin-avatar {
  width: 45px;
  height: 45px;

  border-radius: 50%;

  background: #d98a9d;
  color: white;

  display: flex;
  align-items: center;
  justify-content: center;

  font-weight: 700;
  font-size: 17px;
}

.admin-info strong {
  display: block;
  color: #302b28;
  font-size: 14px;
}

.admin-info span {
  display: block;
  margin-top: 4px;

  color: #8c817a;
  font-size: 12px;
}


/* =========================
   CONTENT
========================= */

.dashboard-content {
  padding: 32px 40px;
}


/* =========================
   WELCOME
========================= */

.welcome-card {
  min-height: 180px;

  padding: 35px 40px;

  border-radius: 18px;

  background: #f2e4d7;
  border: 1px solid #e7d5c6;

  display: flex;
  align-items: center;
  justify-content: space-between;
}

.welcome-label {
  font-size: 12px;
  font-weight: 700;
  letter-spacing: 2px;

  color: #bd7184;
}

.welcome-card h2 {
  margin: 10px 0 8px;

  font-size: 27px;
  color: #302b28;
}

.welcome-card p {
  margin: 0;

  color: #766a63;
  font-size: 15px;
}

.welcome-icon {
  width: 85px;
  height: 85px;

  border-radius: 50%;

  background: #fff8f3;

  display: flex;
  align-items: center;
  justify-content: center;

  font-size: 40px;
}


/* =========================
   STATISTICS
========================= */

.stats-grid {
  display: grid;

  grid-template-columns: repeat(4, 1fr);

  gap: 20px;

  margin-top: 24px;
}

.stat-card {
  background: #fffdfb;

  border: 1px solid #eadfd8;

  border-radius: 16px;

  padding: 22px;

  transition: 0.2s;
}

.stat-card:hover {
  border-color: #d98a9d;
  transform: translateY(-2px);
}

.stat-top {
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.stat-top > span {
  color: #a99d95;
  font-size: 20px;
}

.stat-icon {
  width: 42px;
  height: 42px;

  border-radius: 10px;

  background: #f6ece7;

  display: flex;
  align-items: center;
  justify-content: center;

  font-size: 19px;
}

.stat-card p {
  margin: 20px 0 7px;

  color: #81766f;

  font-size: 13px;
}

.stat-card h3 {
  margin: 0;

  color: #c9788c;

  font-size: 23px;
}

.stat-card small {
  display: block;

  margin-top: 9px;

  color: #5e9475;

  font-size: 12px;
}

.stat-card small.warning {
  color: #b18452;
}


/* =========================
   BOTTOM GRID
========================= */

.bottom-grid {
  display: grid;

  grid-template-columns: 1.5fr 1fr;

  gap: 24px;

  margin-top: 24px;
}

.content-card {
  background: #fffdfb;

  border: 1px solid #eadfd8;

  border-radius: 16px;

  padding: 25px;
}


/* =========================
   CARD HEADER
========================= */

.card-header {
  display: flex;
  align-items: center;
  justify-content: space-between;

  margin-bottom: 25px;
}

.card-header h3 {
  margin: 0;

  color: #302b28;

  font-size: 18px;
}

.card-header p {
  margin: 6px 0 0;

  color: #8a7e76;

  font-size: 13px;
}

.card-header select {
  padding: 9px 13px;

  border: 1px solid #ddd0c8;

  border-radius: 8px;

  background: white;

  color: #554b46;

  outline: none;
}


/* =========================
   SALES
========================= */

.sales-placeholder {
  display: flex;
  flex-direction: column;

  gap: 18px;
}

.sales-item {
  display: grid;

  grid-template-columns: 60px 1fr 80px;

  align-items: center;

  gap: 12px;

  font-size: 12px;

  color: #766a63;
}

.sales-item strong {
  text-align: right;

  color: #514741;
  font-size: 12px;
}

.bar {
  height: 9px;

  border-radius: 20px;

  background: #f1e8e2;

  overflow: hidden;
}

.bar-fill {
  height: 100%;

  background: #d98a9d;

  border-radius: 20px;
}


/* =========================
   QUICK ACTION
========================= */

.quick-actions {
  display: flex;
  flex-direction: column;

  gap: 12px;
}

.quick-action {
  text-decoration: none;

  display: flex;
  align-items: center;

  gap: 13px;

  padding: 14px;

  border: 1px solid #eee3dc;

  border-radius: 11px;

  background: #fff;

  transition: 0.2s;
}

.quick-action:hover {
  background: #fbf1ec;
  border-color: #d98a9d;
}

.quick-icon {
  width: 40px;
  height: 40px;

  border-radius: 9px;

  background: #f6ece7;

  display: flex;
  align-items: center;
  justify-content: center;

  font-size: 17px;
}

.quick-action div:nth-child(2) {
  flex: 1;
}

.quick-action strong {
  display: block;

  color: #403833;

  font-size: 13px;
}

.quick-action span {
  display: block;

  margin-top: 4px;

  color: #948881;

  font-size: 11px;
}

.quick-action b {
  color: #c9788c;

  font-size: 22px;
}


/* =========================
   RESPONSIVE
========================= */

@media (max-width: 1100px) {

  .stats-grid {
    grid-template-columns: repeat(2, 1fr);
  }

  .bottom-grid {
    grid-template-columns: 1fr;
  }

}


@media (max-width: 700px) {

  .dashboard-header {
    padding: 20px;
  }

  .dashboard-content {
    padding: 20px;
  }

  .admin-info {
    display: none;
  }

  .stats-grid {
    grid-template-columns: 1fr;
  }

  .welcome-card {
    padding: 25px;
  }

  .welcome-icon {
    display: none;
  }

}

/* =========================
   TEMA SEKA WARUNG
========================= */

.dashboard {
  background: #faf7f3 !important;
  color: #302b29;
}

/* Judul */
.dashboard h1,
.dashboard h2,
.dashboard h3 {
  color: #302b29;
}

/* Semua kartu */
.dashboard-card {
  background: #fffdfb !important;
  border: 1px solid #eaded4 !important;
  box-shadow: none !important;
}

/* Banner */
.dashboard-banner,
.welcome-card {
  background: #f4e5d6 !important;
  border: 1px solid #ead5c5 !important;
}

/* Judul pink */
.dashboard .pink,
.dashboard .accent,
.dashboard-card h3 {
  color: #d78b9d;
}

/* Angka statistik */
.stat-value {
  color: #d78b9d !important;
}

/* Icon box */
.stat-icon {
  background: #f4e5d6 !important;
}

/* Tombol utama */
.dashboard button {
  background: #d78b9d;
  border-color: #d78b9d;
}

/* Text */
.dashboard p {
  color: #8a7f78;
}

/* Select */
.dashboard select {
  background: #fffdfb;
  border: 1px solid #dfd1c8;
  color: #302b29;
}
</style>