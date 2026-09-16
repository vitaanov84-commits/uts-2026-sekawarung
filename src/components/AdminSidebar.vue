<template>
  <aside class="sidebar">

    <!-- BRAND -->
    <div class="brand">

      <div class="brand-logo">
        <img src="../assets/logo.png" alt="Seka Warung">
      </div>

      <div>
        <h2>SEKA WARUNG</h2>
        <span>Admin Panel</span>
      </div>

    </div>

    <!-- MENU -->
    <div class="menu-title">
      MENU UTAMA
    </div>

    <nav class="menu">

      <router-link
        to="/admin"
        class="menu-item"
        exact-active-class="active"
      >
        <span class="icon">▦</span>
        <span>Dashboard</span>
      </router-link>

      <router-link
        to="/admin/produk"
        class="menu-item"
      >
        <span class="icon">🛒</span>
        <span>Produk</span>
      </router-link>

      <router-link
        to="/admin/penjualan"
        class="menu-item"
      >
        <span class="icon">▤</span>
        <span>Penjualan</span>
      </router-link>

      <router-link
        to="/admin/pelanggan"
        class="menu-item"
      >
        <span class="icon">♟</span>
        <span>Pelanggan</span>
      </router-link>

      <router-link
        to="/admin/kategori"
        class="menu-item"
      >
        <span class="icon">◈</span>
        <span>Kategori</span>
      </router-link>

      <router-link
        to="/admin/laporan"
        class="menu-item"
      >
        <span class="icon">▥</span>
        <span>Laporan</span>
      </router-link>

    </nav>

    <!-- BOTTOM -->
    <div class="bottom-menu">


      <router-link to="/admin/pengaturan" class="menu-item">
      <span class="icon">⚙</span>
      <span>Pengaturan</span>
      </router-link>


      <router-link to="/login" class="menu-item logout">
        <span class="icon">↪</span>
        <span>Keluar</span>
      </router-link>

    </div>

  </aside>
</template>

<style scoped>

* {
  box-sizing: border-box;
}

/* =========================
   SIDEBAR
========================= */

.sidebar {
  position: fixed;
  left: 0;
  top: 0;

  width: 250px;
  height: 100vh;

  padding: 28px 20px;

  background: #fffdfb;
  border-right: 1px solid #eadfd8;

  font-family: Arial, Helvetica, sans-serif;

  display: flex;
  flex-direction: column;
}

/* =========================
   BRAND
========================= */

.brand {
  display: flex;
  align-items: center;
  gap: 13px;

  padding: 8px 10px 28px;
}

.brand-logo {
  width: 48px;
  height: 48px;

  border-radius: 12px;

  background: #f2e4d7;

  display: flex;
  align-items: center;
  justify-content: center;

  overflow: hidden;
}

.brand-logo img {
  width: 38px;
  height: 38px;
  object-fit: contain;
}

.brand h2 {
  margin: 0;

  color: #302b28;

  font-size: 18px;
  font-weight: 700;
  letter-spacing: 0.5px;
}

.brand span {
  display: block;

  margin-top: 4px;

  color: #8c817a;

  font-size: 12px;
}

/* =========================
   TITLE
========================= */

.menu-title {
  padding: 0 15px;
  margin: 5px 0 12px;

  color: #a08f87;

  font-size: 11px;
  font-weight: 700;

  letter-spacing: 1px;
}

/* =========================
   MENU
========================= */

.menu {
  display: flex;
  flex-direction: column;
  gap: 5px;
}

.menu-item {
  display: flex;
  align-items: center;

  gap: 13px;

  min-height: 45px;

  padding: 11px 14px;

  border-radius: 10px;

  color: #514741;

  text-decoration: none;

  font-size: 14px;
  font-weight: 500;

  transition: 0.2s;
}

.menu-item:hover {
  background: #f8eee8;
  color: #302b28;
}

.menu-item.active {
  background: #f2e4d7;
  color: #b96f83;

  font-weight: 700;
}

.icon {
  width: 23px;

  text-align: center;

  font-size: 17px;
}

/* =========================
   BOTTOM
========================= */

.bottom-menu {
  margin-top: auto;

  display: flex;
  flex-direction: column;

  gap: 5px;
}

.logout {
  color: #b96f83;
}

.logout:hover {
  background: #f8eee8;
  color: #a85f72;
}

/* =========================
   RESPONSIVE
========================= */

@media (max-width: 900px) {

  .sidebar {
    display: none;
  }

}

</style>