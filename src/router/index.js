import { createRouter, createWebHistory } from 'vue-router'

import AdminLayout from '../layouts/AdminLayout.vue'

import Dashboard from '../views/admin/Dashboard.vue'
import Login from '../views/auth/Login.vue'
import Register from '../views/auth/Register.vue'

const routes = [
  {
    path: '/',
    redirect: '/login'
  },

  // =========================
  // AUTH
  // =========================

  {
    path: '/login',
    name: 'login',
    component: Login
  },

  {
    path: '/register',
    name: 'register',
    component: Register
  },

  // =========================
  // ADMIN
  // =========================

  {
    path: '/admin',
    component: AdminLayout,

    children: [
      {
        path: '',
        name: 'admin-dashboard',
        component: Dashboard
      },

      {
        path: 'produk',
        name: 'admin-produk',
        component: {
          template: `
            <div style="padding: 30px">
              <h1>Produk</h1>
              <p>Halaman produk akan kita buat berikutnya.</p>
            </div>
          `
        }
      },

      {
        path: 'penjualan',
        name: 'admin-penjualan',
        component: {
          template: `
            <div style="padding: 30px">
              <h1>Penjualan</h1>
              <p>Halaman penjualan akan kita buat berikutnya.</p>
            </div>
          `
        }
      },

      {
        path: 'pelanggan',
        name: 'admin-pelanggan',
        component: {
          template: `
            <div style="padding: 30px">
              <h1>Pelanggan</h1>
              <p>Halaman pelanggan akan kita buat berikutnya.</p>
            </div>
          `
        }
      },

      {
        path: 'kategori',
        name: 'admin-kategori',
        component: {
          template: `
            <div style="padding: 30px">
              <h1>Kategori</h1>
              <p>Halaman kategori akan kita buat berikutnya.</p>
            </div>
          `
        }
      },

      {
        path: 'laporan',
        name: 'admin-laporan',
        component: {
          template: `
            <div style="padding: 30px">
              <h1>Laporan</h1>
              <p>Halaman laporan akan kita buat berikutnya.</p>
            </div>
          `
        }
      }
    ]
  }
]

const router = createRouter({
  history: createWebHistory(),
  routes
})

export default router