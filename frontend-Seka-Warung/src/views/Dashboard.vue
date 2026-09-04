<template>
  <div class="dashboard-container">
    <!-- Sidebar Navigation -->
    <aside class="sidebar">
      <div class="brand">
        <img src="../assets/warung.png" alt="Seka Warung" class="brand-logo" />
        <h2>Seka Warung</h2>
      </div>
      <nav class="menu">
        <a href="#" class="menu-item active">📊 Dashboard</a>
        <a href="#" class="menu-item">🛒 Kasir / POS</a>
        <a href="#" class="menu-item">📦 Stok Barang</a>
        <a href="#" class="menu-item">📈 Laporan Penjualan</a>
        <a href="#" class="menu-item">⚙️ Pengaturan</a>
      </nav>
      <button @click="handleLogout" class="logout-btn">🚪 Keluar</button>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
      <!-- Header -->
      <header class="header">
        <div class="header-title">
          <h1>Dashboard Penjualan</h1>
          <p>Selamat datang kembali, Kasir Seka Warung!</p>
        </div>
        <div class="user-profile">
          <span class="user-name">Admin Warung</span>
        </div>
      </header>

      <!-- Stat Cards -->
      <section class="stats-grid">
        <div class="card stat-card">
          <div class="stat-icon green">💰</div>
          <div class="stat-info">
            <h4>Omset Hari Ini</h4>
            <p class="stat-value">Rp 1.450.000</p>
          </div>
        </div>
        <div class="card stat-card">
          <div class="stat-icon blue">🛍️</div>
          <div class="stat-info">
            <h4>Total Transaksi</h4>
            <p class="stat-value">38 Pesanan</p>
          </div>
        </div>
        <div class="card stat-card">
          <div class="stat-icon orange">🍲</div>
          <div class="stat-icon-text">Menu Terlaris</div>
          <div class="stat-info">
            <h4>Nasi Goreng Spesial</h4>
            <p class="stat-value">42 Porsi Terjual</p>
          </div>
        </div>
        <div class="card stat-card">
          <div class="stat-icon red">⚠️</div>
          <div class="stat-info">
            <h4>Stok Menipis</h4>
            <p class="stat-value alert">3 Bahan Baku</p>
          </div>
        </div>
      </section>

      <!-- Tabel Transaksi Terbaru -->
      <section class="card table-section">
        <h3>Transaksi Terbaru</h3>
        <table class="data-table">
          <thead>
            <tr>
              <th>ID Transaksi</th>
              <th>Waktu</th>
              <th>Menu / Items</th>
              <th>Total Pembayaran</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="item in recentTransactions" :key="item.id">
              <td>#{{ item.id }}</td>
              <td>{{ item.time }}</td>
              <td>{{ item.items }}</td>
              <td>Rp {{ item.total.toLocaleString('id-ID') }}</td>
              <td>
                <span :class="['status-badge', item.status.toLowerCase()]">
                  {{ item.status }}
                </span>
              </td>
            </tr>
          </tbody>
        </table>
      </section>
    </main>
  </div>
</template>

<script>
export default {
  name: 'DashboardView',
  data() {
    return {
      recentTransactions: [
        { id: 'TRX-101', time: '13:45', items: '2x Nasi Goreng, 2x Es Teh', total: 45000, status: 'Selesai' },
        { id: 'TRX-102', time: '13:30', items: '1x Ayam Bakar + Nasi', total: 25000, status: 'Selesai' },
        { id: 'TRX-103', time: '13:15', items: '3x Mie Goreng, 3x Jeruk Hangat', total: 60000, status: 'Selesai' },
        { id: 'TRX-104', time: '12:50', items: '1x Es Kopi Susu', total: 15000, status: 'Proses' },
      ]
    }
  },
  methods: {
    handleLogout() {
      if (confirm('Apakah Anda yakin ingin keluar?')) {
        localStorage.removeItem('token');
        this.$router.push('/login');
      }
    }
  }
}
</script>

<style scoped>
.dashboard-container {
  display: flex;
  min-height: 100vh;
  background-color: #f8f9fa;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

/* Sidebar Styling */
.sidebar {
  width: 240px;
  background-color: #b44f8f; /* Warna tema Seka Warung */
  color: white;
  padding: 20px;
  display: flex;
  flex-direction: column;
}

.brand {
  display: flex;
  align-items: center;
  gap: 10px;
  margin-bottom: 30px;
}

.brand-logo {
  width: 40px;
  height: 40px;
  border-radius: 50%;
}

.brand h2 {
  font-size: 18px;
  margin: 0;
}

.menu {
  display: flex;
  flex-direction: column;
  gap: 10px;
  flex: 1;
}

.menu-item {
  color: #e0d0d6;
  text-decoration: none;
  padding: 12px 15px;
  border-radius: 8px;
  transition: 0.2s;
}

.menu-item:hover, .menu-item.active {
  background-color: #f2bdcc;
  color: white;
  font-weight: bold;
}

.logout-btn {
  background: #c9302c;
  color: white;
  border: none;
  padding: 10px;
  border-radius: 8px;
  cursor: pointer;
  font-weight: bold;
}

/* Main Content Styling */
.main-content {
  flex: 1;
  padding: 30px;
}

.header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 25px;
}

.header-title h1 {
  margin: 0;
  font-size: 24px;
  color: #333;
}

.header-title p {
  margin: 5px 0 0;
  color: #666;
}

/* Cards & Grid */
.stats-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
  gap: 20px;
  margin-bottom: 30px;
}

.card {
  background: white;
  padding: 20px;
  border-radius: 12px;
  box-shadow: 0 4px 10px rgba(0,0,0,0.03);
}

.stat-card {
  display: flex;
  align-items: center;
  gap: 15px;
}

.stat-icon {
  width: 50px;
  height: 50px;
  border-radius: 10px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 24px;
}

.stat-icon.green { background: #e8f5e9; }
.stat-icon.blue { background: #e3f2fd; }
.stat-icon.orange { background: #fff3e0; }
.stat-icon.red { background: #ffebee; }

.stat-info h4 {
  margin: 0 0 5px;
  font-size: 13px;
  color: #777;
}

.stat-value {
  margin: 0;
  font-size: 18px;
  font-weight: bold;
  color: #2c3e50;
}

.stat-value.alert {
  color: #e74c3c;
}

/* Table Styling */
.table-section h3 {
  margin-top: 0;
  margin-bottom: 15px;
  color: #333;
}

.data-table {
  width: 100%;
  border-collapse: collapse;
}

.data-table th, .data-table td {
  padding: 12px 15px;
  text-align: left;
  border-bottom: 1px solid #eee;
}

.data-table th {
  background-color: #f8f9fa;
  color: #555;
  font-size: 14px;
}

.status-badge {
  padding: 4px 10px;
  border-radius: 12px;
  font-size: 12px;
  font-weight: bold;
}

.status-badge.selesai {
  background: #e8f5e9;
  color: #2e7d32;
}

.status-badge.proses {
  background: #fff8e1;
  color: #f57f17;
}
</style>