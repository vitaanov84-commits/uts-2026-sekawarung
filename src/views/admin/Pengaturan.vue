<template>
  <div class="pengaturan-page">

    <!-- HEADER -->
    <div class="page-header">
      <div>
        <span class="page-label">KONFIGURASI SISTEM</span>
        <h1>Pengaturan</h1>
        <p>Kelola informasi dan pengaturan Seka Warung.</p>
      </div>
    </div>


    <!-- PROFIL TOKO -->
    <div class="setting-card">

      <div class="card-header">
        <div>
          <h2>Informasi Warung</h2>
          <p>Atur informasi dasar Seka Warung.</p>
        </div>
      </div>

      <div class="form-content">

        <div class="form-group">
          <label>Nama Warung</label>
          <input
            v-model="form.namaWarung"
            type="text"
            placeholder="Masukkan nama warung"
          />
        </div>

        <div class="form-group">
          <label>Email</label>
          <input
            v-model="form.email"
            type="email"
            placeholder="Masukkan email"
          />
        </div>

        <div class="form-group">
          <label>No. Telepon</label>
          <input
            v-model="form.telepon"
            type="text"
            placeholder="Masukkan nomor telepon"
          />
        </div>

        <div class="form-group full">
          <label>Alamat</label>
          <textarea
            v-model="form.alamat"
            rows="4"
            placeholder="Masukkan alamat warung"
          ></textarea>
        </div>

      </div>

      <div class="card-footer">
        <button class="btn-simpan" @click="simpanPengaturan">
          Simpan Perubahan
        </button>
      </div>

    </div>


    <!-- AKUN ADMIN -->
    <div class="setting-card">

      <div class="card-header">
        <div>
          <h2>Akun Administrator</h2>
          <p>Informasi akun yang digunakan untuk mengelola sistem.</p>
        </div>
      </div>

      <div class="form-content">

        <div class="form-group">
          <label>Nama Admin</label>
          <input
            v-model="form.namaAdmin"
            type="text"
            placeholder="Masukkan nama admin"
          />
        </div>

        <div class="form-group">
          <label>Email Admin</label>
          <input
            v-model="form.emailAdmin"
            type="email"
            placeholder="Masukkan email admin"
          />
        </div>

      </div>

      <div class="card-footer">
        <button class="btn-simpan" @click="simpanAkun">
          Simpan Akun
        </button>
      </div>

    </div>


    <!-- KEAMANAN -->
    <div class="setting-card">

      <div class="card-header">
        <div>
          <h2>Keamanan</h2>
          <p>Kelola keamanan akun administrator.</p>
        </div>
      </div>

      <div class="security-item">

        <div>
          <strong>Password</strong>
          <p>
            Gunakan password yang kuat untuk menjaga keamanan akun.
          </p>
        </div>

        <button class="btn-outline" @click="ubahPassword">
          Ubah Password
        </button>

      </div>

    </div>


    <!-- TAMPILAN -->
    <div class="setting-card">

      <div class="card-header">
        <div>
          <h2>Tampilan</h2>
          <p>Pengaturan tampilan aplikasi.</p>
        </div>
      </div>

      <div class="security-item">

        <div>
          <strong>Tema Aplikasi</strong>
          <p>
            Gunakan tema cream dan dusty pink Seka Warung.
          </p>
        </div>

        <span class="theme-badge">
          Cream & Pink
        </span>

      </div>

    </div>

  </div>
</template>


<script setup>
import { reactive } from 'vue'

const form = reactive({
  namaWarung: 'Seka Warung',
  email: 'sekawarung@gmail.com',
  telepon: '0812-3456-7890',
  alamat: 'Bandung, Jawa Barat',

  namaAdmin: 'Admin Warung',
  emailAdmin: 'admin@sekawarung.com'
})


const simpanPengaturan = () => {
  alert('Pengaturan warung berhasil disimpan.')
}


const simpanAkun = () => {
  alert('Informasi akun berhasil disimpan.')
}


const ubahPassword = () => {
  alert('Fitur ubah password akan dibuat berikutnya.')
}
</script>


<style scoped>

* {
  box-sizing: border-box;
}


/* =========================
   PAGE
========================= */

.pengaturan-page {
  width: 100%;
  color: #302b29;
}


/* =========================
   HEADER
========================= */

.page-header {
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
   CARD
========================= */

.setting-card {
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
  font-weight: 700;
}

.card-header p {
  margin: 5px 0 0;

  color: #968b84;

  font-size: 12px;
}


/* =========================
   FORM
========================= */

.form-content {
  display: grid;

  grid-template-columns: 1fr 1fr;

  gap: 20px;

  padding: 24px;
}

.form-group {
  display: flex;

  flex-direction: column;

  gap: 7px;
}

.form-group.full {
  grid-column: 1 / -1;
}

.form-group label {
  color: #554b46;

  font-size: 13px;

  font-weight: 600;
}

.form-group input,
.form-group textarea {
  width: 100%;

  padding: 11px 13px;

  border: 1px solid #dfd2ca;

  border-radius: 7px;

  background: #ffffff;

  color: #302b29;

  font-family: inherit;

  font-size: 13px;

  outline: none;

  transition: border-color 0.2s;
}

.form-group input {
  height: 42px;
}

.form-group textarea {
  resize: vertical;
}

.form-group input:focus,
.form-group textarea:focus {
  border-color: #d78b9d;
}

.form-group input::placeholder,
.form-group textarea::placeholder {
  color: #aaa09a;
}


/* =========================
   FOOTER
========================= */

.card-footer {
  display: flex;

  justify-content: flex-end;

  padding: 16px 24px;

  background: #fcf8f5;

  border-top: 1px solid #eaded4;
}


/* =========================
   BUTTON
========================= */

.btn-simpan {
  border: none;

  padding: 10px 18px;

  border-radius: 7px;

  background: #d78b9d;

  color: #ffffff;

  font-size: 13px;

  font-weight: 600;

  cursor: pointer;
}

.btn-simpan:hover {
  background: #c9798e;
}


/* =========================
   SECURITY
========================= */

.security-item {
  display: flex;

  align-items: center;

  justify-content: space-between;

  gap: 20px;

  padding: 22px 24px;
}

.security-item strong {
  color: #302b29;

  font-size: 14px;
}

.security-item p {
  margin: 5px 0 0;

  color: #968b84;

  font-size: 12px;

  line-height: 1.5;
}


/* =========================
   OUTLINE BUTTON
========================= */

.btn-outline {
  padding: 9px 15px;

  border: 1px solid #d78b9d;

  border-radius: 7px;

  background: transparent;

  color: #b9657d;

  font-size: 12px;

  font-weight: 600;

  cursor: pointer;
}

.btn-outline:hover {
  background: #f7e9ed;
}


/* =========================
   THEME BADGE
========================= */

.theme-badge {
  padding: 7px 12px;

  border-radius: 20px;

  background: #f3e5e9;

  color: #b9657d;

  font-size: 11px;

  font-weight: 600;
}


/* =========================
   RESPONSIVE
========================= */

@media (max-width: 700px) {

  .form-content {
    grid-template-columns: 1fr;
  }

  .form-group.full {
    grid-column: auto;
  }

  .security-item {
    align-items: flex-start;

    flex-direction: column;
  }

  .btn-outline {
    width: 100%;
  }

  .card-footer {
    justify-content: stretch;
  }

  .btn-simpan {
    width: 100%;
  }

}

</style>