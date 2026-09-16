<script setup>
import { useRouter, useRoute } from 'vue-router'

const router = useRouter()
const route = useRoute()

const menuItems = [
  {
    name: 'Dashboard',
    icon: '📊',
    path: '/admin'
  },
  {
    name: 'Produk',
    icon: '🛒',
    path: '/admin/produk'
  },
  {
    name: 'Penjualan',
    icon: '🧾',
    path: '/admin/penjualan'
  },
  {
    name: 'Pelanggan',
    icon: '👥',
    path: '/admin/pelanggan'
  },
  {
    name: 'Kategori',
    icon: '📦',
    path: '/admin/kategori'
  },
  {
    name: 'Laporan',
    icon: '📈',
    path: '/admin/laporan'
  }
]

const isActive = (path) => {
  return route.path === path
}

const logout = () => {
  const yakin = confirm('Yakin ingin keluar dari halaman admin?')

  if (!yakin) {
    return
  }

  router.push('/login')
}
</script>

<template>
  <aside class="sidebar">
    <div class="sidebar-brand">
      <div class="brand-icon">
        🏪
      </div>

      <div>
        <h1>WARUNGKU</h1>
        <span>Admin Panel</span>
      </div>
    </div>

    <div class="sidebar-menu">
      <p class="menu-title">
        MENU UTAMA
      </p>

      <nav>
        <button
          v-for="item in menuItems"
          :key="item.path"
          class="menu-item"
          :class="{ active: isActive(item.path) }"
          @click="router.push(item.path)"
        >
          <span class="menu-icon">
            {{ item.icon }}
          </span>

          <span>
            {{ item.name }}
          </span>
        </button>
      </nav>
    </div>

    <div class="sidebar-bottom">
      <button class="menu-item settings-button">
        <span class="menu-icon">
          ⚙️
        </span>

        <span>
          Pengaturan
        </span>
      </button>

      <button
        class="logout-button"
        @click="logout"
      >
        <span>
          🚪
        </span>

        <span>
          Keluar
        </span>
      </button>
    </div>
  </aside>
</template>