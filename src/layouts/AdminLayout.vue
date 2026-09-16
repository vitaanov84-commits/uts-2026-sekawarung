<script setup>
import AdminSidebar from '../components/AdminSidebar.vue'
</script>

<template>
  <div class="admin-layout">

    <!-- SIDEBAR -->
    <AdminSidebar />

    <!-- MAIN -->
    <main class="admin-main">

      <!-- TOPBAR -->
      <header class="topbar">

        <div class="topbar-left">
          <h2>Dashboard</h2>
          <p>Kelola penjualan warung dengan mudah.</p>
        </div>

        <div class="admin-profile">
          <div class="profile-avatar">
            A
          </div>

          <div class="profile-info">
            <strong>Admin Warung</strong>
            <span>Administrator</span>
          </div>
        </div>

      </header>

      <!-- HALAMAN -->
      <section class="dashboard-content">
        <router-view />
      </section>

    </main>

  </div>
</template>

<style scoped>

* {
  box-sizing: border-box;
}

.admin-layout {
  min-height: 100vh;
  display: flex;
  background: #faf7f3;
  color: #302b28;
  font-family: Arial, Helvetica, sans-serif;
}

/* =========================
   MAIN
========================= */

.admin-main {
  flex: 1;
  min-width: 0;
  min-height: 100vh;
  margin-left: 250px;
  background: #faf7f3;
}

/* =========================
   TOPBAR
========================= */

.topbar {
  height: 82px;
  display: flex;
  align-items: center;
  justify-content: space-between;

  padding: 0 34px;

  background: #fffdfb;
  border-bottom: 1px solid #eadfd8;
}

.topbar-left h2 {
  margin: 0;
  color: #302b28;
  font-size: 23px;
  font-weight: 700;
}

.topbar-left p {
  margin: 6px 0 0;
  color: #81766f;
  font-size: 13px;
}

/* =========================
   PROFILE
========================= */

.admin-profile {
  display: flex;
  align-items: center;
  gap: 12px;
}

.profile-avatar {
  width: 42px;
  height: 42px;

  display: flex;
  align-items: center;
  justify-content: center;

  border-radius: 50%;

  background: #d98a9d;
  color: #ffffff;

  font-size: 15px;
  font-weight: 700;
}

.profile-info {
  display: flex;
  flex-direction: column;
  gap: 3px;
}

.profile-info strong {
  color: #302b28;
  font-size: 13px;
  font-weight: 700;
}

.profile-info span {
  color: #8c817a;
  font-size: 11px;
}

/* =========================
   CONTENT
========================= */

.dashboard-content {
  min-height: calc(100vh - 82px);
  padding: 30px 34px;
  background: #faf7f3;
}

/* =========================
   RESPONSIVE
========================= */

@media (max-width: 900px) {

  .admin-main {
    margin-left: 0;
  }

  .topbar {
    padding: 0 22px;
  }

  .dashboard-content {
    padding: 24px 22px;
  }
}

@media (max-width: 600px) {

  .topbar {
    height: auto;
    min-height: 76px;
    padding: 16px;
  }

  .topbar-left h2 {
    font-size: 18px;
  }

  .topbar-left p {
    font-size: 11px;
  }

  .profile-info {
    display: none;
  }

  .profile-avatar {
    width: 38px;
    height: 38px;
  }

  .dashboard-content {
    padding: 20px 16px;
  }
}

</style>