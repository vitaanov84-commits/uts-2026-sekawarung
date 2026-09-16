<script setup>
import { ref } from 'vue'

const stats = ref([
  {
    title: 'Total Penjualan',
    value: 'Rp 12.450.000',
    description: '+12,5% dari bulan lalu',
    icon: '💰',
    type: 'income'
  },
  {
    title: 'Total Transaksi',
    value: '348',
    description: '+8,2% dari bulan lalu',
    icon: '🧾',
    type: 'transaction'
  },
  {
    title: 'Total Produk',
    value: '86',
    description: '12 produk stok menipis',
    icon: '🛒',
    type: 'product'
  },
  {
    title: 'Pelanggan',
    value: '214',
    description: '+15 pelanggan baru',
    icon: '👥',
    type: 'customer'
  }
])

const recentSales = ref([
  {
    id: '#TRX-001',
    customer: 'Budi Santoso',
    date: '15 Sep 2026, 08:32',
    total: 'Rp 125.000',
    status: 'Selesai'
  },
  {
    id: '#TRX-002',
    customer: 'Siti Aminah',
    date: '15 Sep 2026, 08:15',
    total: 'Rp 87.500',
    status: 'Selesai'
  },
  {
    id: '#TRX-003',
    customer: 'Andi Pratama',
    date: '15 Sep 2026, 07:48',
    total: 'Rp 215.000',
    status: 'Diproses'
  },
  {
    id: '#TRX-004',
    customer: 'Dewi Lestari',
    date: '14 Sep 2026, 19:21',
    total: 'Rp 64.000',
    status: 'Selesai'
  },
  {
    id: '#TRX-005',
    customer: 'Rizky Maulana',
    date: '14 Sep 2026, 18:43',
    total: 'Rp 153.500',
    status: 'Selesai'
  }
])
</script>

<template>
  <div class="dashboard">

    <!-- WELCOME -->
    <section class="welcome-card">
      <div>
        <span class="welcome-label">
          DASHBOARD ADMIN
        </span>

        <h1>
          Selamat datang kembali, Admin! 👋
        </h1>

        <p>
          Pantau penjualan dan kelola warung kamu dari satu tempat.
        </p>
      </div>

      <div class="welcome-icon">
        🏪
      </div>
    </section>

    <!-- STATISTICS -->
    <section class="stats-grid">

      <div
        v-for="stat in stats"
        :key="stat.title"
        class="stat-card"
      >
        <div class="stat-header">
          <div class="stat-icon">
            {{ stat.icon }}
          </div>

          <span class="stat-menu">
            ⋮
          </span>
        </div>

        <p class="stat-title">
          {{ stat.title }}
        </p>

        <h2>
          {{ stat.value }}
        </h2>

        <span
          class="stat-description"
          :class="{
            warning: stat.type === 'product'
          }"
        >
          {{ stat.description }}
        </span>
      </div>

    </section>

    <!-- CONTENT GRID -->
    <section class="dashboard-grid">

      <!-- SALES -->
      <div class="dashboard-card sales-card">

        <div class="card-header">
          <div>
            <h3>
              Penjualan
            </h3>

            <p>
              Ringkasan penjualan bulan ini
            </p>
          </div>

          <select>
            <option>
              7 Hari
            </option>

            <option>
              30 Hari
            </option>

            <option>
              Tahun Ini
            </option>
          </select>
        </div>

        <div class="sales-summary">
          <strong>
            Rp 4.280.000
          </strong>

          <span>
            ↑ 18,4%
          </span>
        </div>

        <div class="chart">

          <div class="chart-grid">
            <span>4 jt</span>
            <span>3 jt</span>
            <span>2 jt</span>
            <span>1 jt</span>
            <span>0</span>
          </div>

          <div class="chart-bars">

            <div class="bar-column">
              <div class="bar" style="height: 45%"></div>
              <span>Sen</span>
            </div>

            <div class="bar-column">
              <div class="bar" style="height: 62%"></div>
              <span>Sel</span>
            </div>

            <div class="bar-column">
              <div class="bar" style="height: 51%"></div>
              <span>Rab</span>
            </div>

            <div class="bar-column">
              <div class="bar" style="height: 78%"></div>
              <span>Kam</span>
            </div>

            <div class="bar-column">
              <div class="bar" style="height: 68%"></div>
              <span>Jum</span>
            </div>

            <div class="bar-column">
              <div class="bar" style="height: 90%"></div>
              <span>Sab</span>
            </div>

            <div class="bar-column">
              <div class="bar" style="height: 72%"></div>
              <span>Min</span>
            </div>

          </div>

        </div>
      </div>

      <!-- QUICK ACTION -->
      <div class="dashboard-card quick-card">

        <div class="card-header">
          <div>
            <h3>
              Aksi Cepat
            </h3>

            <p>
              Kelola warung dengan cepat
            </p>
          </div>
        </div>

        <div class="quick-actions">

          <button class="quick-action">
            <span>➕</span>

            <div>
              <strong>
                Tambah Produk
              </strong>

              <small>
                Tambahkan produk baru
              </small>
            </div>

            <b>›</b>
          </button>

          <button class="quick-action">
            <span>🧾</span>

            <div>
              <strong>
                Penjualan Baru
              </strong>

              <small>
                Buat transaksi penjualan
              </small>
            </div>

            <b>›</b>
          </button>

          <button class="quick-action">
            <span>📊</span>

            <div>
              <strong>
                Lihat Laporan
              </strong>

              <small>
                Cek laporan penjualan
              </small>
            </div>

            <b>›</b>
          </button>

        </div>
      </div>

    </section>

    <!-- RECENT SALES -->
    <section class="dashboard-card recent-card">

      <div class="card-header">

        <div>
          <h3>
            Penjualan Terbaru
          </h3>

          <p>
            Transaksi yang baru saja masuk
          </p>
        </div>

        <button class="view-all">
          Lihat Semua →
        </button>

      </div>

      <div class="table-wrapper">

        <table>

          <thead>
            <tr>
              <th>
                ID TRANSAKSI
              </th>

              <th>
                PELANGGAN
              </th>

              <th>
                TANGGAL
              </th>

              <th>
                TOTAL
              </th>

              <th>
                STATUS
              </th>
            </tr>
          </thead>

          <tbody>

            <tr
              v-for="sale in recentSales"
              :key="sale.id"
            >
              <td>
                <strong>
                  {{ sale.id }}
                </strong>
              </td>

              <td>
                <div class="customer">
                  <div class="customer-avatar">
                    {{ sale.customer.charAt(0) }}
                  </div>

                  <span>
                    {{ sale.customer }}
                  </span>
                </div>
              </td>

              <td>
                {{ sale.date }}
              </td>

              <td>
                <strong>
                  {{ sale.total }}
                </strong>
              </td>

              <td>
                <span
                  class="status"
                  :class="sale.status === 'Selesai'
                    ? 'success'
                    : 'process'"
                >
                  {{ sale.status }}
                </span>
              </td>
            </tr>

          </tbody>

        </table>

      </div>
    </section>

  </div>
</template>