import { createRouter, createWebHistory } from 'vue-router'

// Layout
import AdminLayout from '../layouts/AdminLayout.vue'

// Admin Pages
import Dashboard from '../views/admin/Dashboard.vue'
import Produk from '../views/admin/Produk.vue'
import Penjualan from '../views/admin/Penjualan.vue'
import Pelanggan from '../views/admin/Pelanggan.vue'
import Kategori from '../views/admin/Kategori.vue'
import Laporan from '../views/admin/Laporan.vue'
import Pengaturan from '../views/admin/Pengaturan.vue'

// Auth Pages
import Login from '../views/auth/Login.vue'
import Register from '../views/auth/Register.vue'


const routes = [

  // =========================
  // HOME
  // =========================

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

      // Dashboard
      {
        path: '',
        name: 'admin-dashboard',
        component: Dashboard
      },

      // Produk
      {
        path: 'produk',
        name: 'admin-produk',
        component: Produk
      },

      // Penjualan
      {
        path: 'penjualan',
        name: 'admin-penjualan',
        component: Penjualan
      },

      // Pelanggan
      {
        path: 'pelanggan',
        name: 'admin-pelanggan',
        component: Pelanggan
      },

      // Kategori
      {
        path: 'kategori',
        name: 'admin-kategori',
        component: Kategori
      },

      // Laporan
      {
        path: 'laporan',
        name: 'admin-laporan',
        component: Laporan
      },
      {
        path: 'pengaturan',
        name: 'admin-pengaturan',
        component: Pengaturan
      }
    ]
  },



  // =========================
  // DASHBOARD REDIRECT
  // =========================

  {
    path: '/dashboard',
    redirect: '/admin'
  }

]


// =========================
// CREATE ROUTER
// =========================

const router = createRouter({
  history: createWebHistory(),
  routes
})


export default router