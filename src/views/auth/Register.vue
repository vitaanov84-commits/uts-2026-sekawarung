<template>
  <div class="register-page">

    <!-- BAGIAN KIRI -->
    <div class="brand-section">

      <div class="brand-content">

        <!-- LOGO -->
        <div class="logo-box">
          <img
            src="../../assets/logo.png"
            alt="Logo Seka Warung"
          />
        </div>

        <!-- NAMA -->
        <h1>Seka Warung</h1>

        <p class="brand-description">
          Sistem manajemen warung yang sederhana,
          praktis, dan terorganisir.
        </p>

        <!-- KEUNGGULAN -->
        <div class="advantages">

          <div class="advantage">
            <span>✓</span>
            <p>Pengelolaan produk lebih mudah</p>
          </div>

          <div class="advantage">
            <span>✓</span>
            <p>Pencatatan transaksi yang terorganisir</p>
          </div>

          <div class="advantage">
            <span>✓</span>
            <p>Pemantauan data warung dengan praktis</p>
          </div>

        </div>

      </div>

    </div>


    <!-- BAGIAN KANAN -->
    <div class="form-section">

      <div class="form-container">

        <!-- JUDUL -->
        <div class="form-header">
          <p class="small-title">REGISTRASI AKUN</p>

          <h2>Buat Akun</h2>

          <p class="subtitle">
            Lengkapi data berikut untuk membuat akun
            Seka Warung.
          </p>
        </div>


        <!-- FORM -->
        <form @submit.prevent="register">

          <!-- NAMA -->
          <div class="form-group">

            <label>Nama Lengkap</label>

            <input
              v-model="name"
              type="text"
              placeholder="Masukkan nama lengkap"
              required
            />

          </div>


          <!-- EMAIL -->
          <div class="form-group">

            <label>Email</label>

            <input
              v-model="email"
              type="email"
              placeholder="Masukkan email"
              required
            />

          </div>


          <!-- PASSWORD -->
          <div class="form-group">

            <label>Password</label>

            <div class="password-wrapper">

              <input
                v-model="password"
                :type="showPassword ? 'text' : 'password'"
                placeholder="Minimal 6 karakter"
                minlength="6"
                required
              />

              <button
                type="button"
                class="show-password"
                @click="showPassword = !showPassword"
              >
                {{ showPassword ? 'Sembunyikan' : 'Lihat' }}
              </button>

            </div>

          </div>


          <!-- KONFIRMASI PASSWORD -->
          <div class="form-group">

            <label>Konfirmasi Password</label>

            <div class="password-wrapper">

              <input
                v-model="passwordConfirmation"
                :type="
                  showPasswordConfirmation
                    ? 'text'
                    : 'password'
                "
                placeholder="Masukkan kembali password"
                required
              />

              <button
                type="button"
                class="show-password"
                @click="
                  showPasswordConfirmation =
                    !showPasswordConfirmation
                "
              >
                {{
                  showPasswordConfirmation
                    ? 'Sembunyikan'
                    : 'Lihat'
                }}
              </button>

            </div>

          </div>


          <!-- PESAN ERROR -->
          <p v-if="errorMessage" class="error-message">
            {{ errorMessage }}
          </p>


          <!-- BUTTON -->
          <button
            type="submit"
            class="register-button"
          >
            Daftar Akun
          </button>

        </form>


        <!-- LOGIN -->
        <div class="login-link">

          <span>Sudah memiliki akun?</span>

          <button
            type="button"
            @click="goToLogin"
          >
            Masuk di sini
          </button>

        </div>

      </div>

    </div>

  </div>
</template>


<script setup>

import { ref } from 'vue'
import { useRouter } from 'vue-router'

const router = useRouter()


// DATA FORM
const name = ref('')
const email = ref('')
const password = ref('')
const passwordConfirmation = ref('')


// TAMPIL PASSWORD
const showPassword = ref(false)
const showPasswordConfirmation = ref(false)


// PESAN ERROR
const errorMessage = ref('')


// REGISTER
const register = () => {

  errorMessage.value = ''

  // Cek password
  if (password.value.length < 6) {

    errorMessage.value =
      'Password minimal 6 karakter.'

    return
  }


  // Cek konfirmasi password
  if (
    password.value !==
    passwordConfirmation.value
  ) {

    errorMessage.value =
      'Konfirmasi password tidak sesuai.'

    return
  }


  // Simpan data sementara
  localStorage.setItem(
    'user',
    JSON.stringify({
      name: name.value,
      email: email.value,
      password: password.value
    })
  )


  alert(
    'Registrasi berhasil! Silakan masuk menggunakan akun yang telah dibuat.'
  )


  // Ke halaman login
  router.push('/login')
}


// KE LOGIN
const goToLogin = () => {

  router.push('/login')

}

</script>


<style scoped>

/* ==============================
   RESET
============================== */

* {
  box-sizing: border-box;
}


/* ==============================
   HALAMAN
============================== */

.register-page {
  min-height: 100vh;
  display: flex;
  background: #fcfaf7;
  font-family:
    Arial,
    Helvetica,
    sans-serif;
  color: #302b28;
}


/* ==============================
   BAGIAN KIRI
============================== */

.brand-section {
  width: 40%;
  min-height: 100vh;
  background: #f1e3d5;

  display: flex;
  align-items: center;

  padding: 60px 70px;
}


.brand-content {
  max-width: 480px;
}


/* LOGO */

.logo-box {
  width: 105px;
  height: 105px;

  background: #fffaf6;

  border: 1px solid #eadbd0;
  border-radius: 18px;

  display: flex;
  align-items: center;
  justify-content: center;

  margin-bottom: 38px;
}


.logo-box img {
  width: 78px;
  height: 78px;

  object-fit: contain;
}


/* NAMA */

.brand-content h1 {
  margin: 0 0 22px;

  font-size: 45px;
  font-weight: 700;

  letter-spacing: -1px;

  color: #302b28;
}


/* DESKRIPSI */

.brand-description {
  margin: 0;

  max-width: 420px;

  font-size: 18px;
  line-height: 1.7;

  color: #655c57;
}


/* ==============================
   KEUNGGULAN
============================== */

.advantages {
  margin-top: 50px;

  display: flex;
  flex-direction: column;

  gap: 25px;
}


.advantage {
  display: flex;
  align-items: center;

  gap: 17px;
}


.advantage span {
  width: 34px;
  height: 34px;

  flex-shrink: 0;

  border-radius: 50%;

  background: #d8899b;
  color: white;

  display: flex;
  align-items: center;
  justify-content: center;

  font-size: 18px;
  font-weight: bold;
}


.advantage p {
  margin: 0;

  font-size: 16px;
  color: #443d39;
}


/* ==============================
   BAGIAN KANAN
============================== */

.form-section {
  width: 60%;
  min-height: 100vh;

  display: flex;
  justify-content: center;

  padding: 55px 70px;
}


.form-container {
  width: 100%;
  max-width: 650px;
}


/* ==============================
   HEADER
============================== */

.form-header {
  margin-bottom: 42px;
}


.small-title {
  margin: 0 0 12px;

  font-size: 14px;
  font-weight: 700;

  letter-spacing: 2px;

  color: #c8758a;
}


.form-header h2 {
  margin: 0 0 14px;

  font-size: 44px;
  font-weight: 700;

  color: #302b28;
}


.subtitle {
  margin: 0;

  font-size: 17px;
  line-height: 1.6;

  color: #716863;
}


/* ==============================
   FORM
============================== */

.form-group {
  margin-bottom: 25px;
}


.form-group label {
  display: block;

  margin-bottom: 9px;

  font-size: 16px;
  font-weight: 600;

  color: #302b28;
}


.form-group input {
  width: 100%;
  height: 58px;

  padding: 0 18px;

  border: 1px solid #d9cec7;
  border-radius: 10px;

  background: #fffdfb;

  font-size: 16px;
  color: #302b28;

  outline: none;

  transition: 0.2s;
}


.form-group input::placeholder {
  color: #a59b95;
}


.form-group input:focus {
  border-color: #d8899b;

  box-shadow:
    0 0 0 3px
    rgba(216, 137, 155, 0.12);
}


/* ==============================
   PASSWORD
============================== */

.password-wrapper {
  position: relative;
}


.password-wrapper input {
  padding-right: 120px;
}


.show-password {
  position: absolute;

  right: 18px;
  top: 50%;

  transform: translateY(-50%);

  border: none;
  background: transparent;

  color: #b7657b;

  font-size: 14px;
  font-weight: 600;

  cursor: pointer;
}


.show-password:hover {
  color: #965064;
}


/* ==============================
   ERROR
============================== */

.error-message {
  margin: -5px 0 18px;

  font-size: 14px;

  color: #b34d5d;
}


/* ==============================
   BUTTON
============================== */

.register-button {
  width: 100%;
  height: 58px;

  margin-top: 8px;

  border: none;
  border-radius: 10px;

  background: #d8899b;
  color: white;

  font-size: 16px;
  font-weight: 700;

  cursor: pointer;

  transition: 0.2s;
}


.register-button:hover {
  background: #c9788c;
}


.register-button:active {
  transform: translateY(1px);
}


/* ==============================
   LOGIN
============================== */

.login-link {
  margin-top: 25px;

  display: flex;
  justify-content: center;
  align-items: center;

  gap: 6px;

  font-size: 14px;

  color: #716863;
}


.login-link button {
  border: none;
  background: transparent;

  color: #b7657b;

  font-weight: 600;

  cursor: pointer;

  padding: 0;
}


.login-link button:hover {
  text-decoration: underline;
}


/* ==============================
   RESPONSIVE
============================== */

@media (max-width: 900px) {

  .register-page {
    flex-direction: column;
  }

  .brand-section {
    width: 100%;
    min-height: auto;

    padding: 45px 30px;
  }

  .brand-content {
    max-width: 100%;
  }

  .advantages {
    margin-top: 30px;
  }

  .form-section {
    width: 100%;
    padding: 45px 30px;
  }

}


@media (max-width: 500px) {

  .brand-content h1 {
    font-size: 36px;
  }

  .form-header h2 {
    font-size: 36px;
  }

  .form-section {
    padding: 35px 22px;
  }

}

</style>