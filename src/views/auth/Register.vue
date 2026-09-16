<script setup>
import { ref } from 'vue'
import { useRouter } from 'vue-router'

const router = useRouter()

const name = ref('')
const email = ref('')
const password = ref('')
const confirmPassword = ref('')
const showPassword = ref(false)
const showConfirmPassword = ref(false)

const errorMessage = ref('')
const successMessage = ref('')
const loading = ref(false)

const register = () => {
  errorMessage.value = ''
  successMessage.value = ''

  if (!name.value || !email.value || !password.value || !confirmPassword.value) {
    errorMessage.value = 'Semua field wajib diisi.'
    return
  }

  if (password.value.length < 6) {
    errorMessage.value = 'Password minimal 6 karakter.'
    return
  }

  if (password.value !== confirmPassword.value) {
    errorMessage.value = 'Konfirmasi password tidak cocok.'
    return
  }

  loading.value = true

  // Simulasi proses register
  setTimeout(() => {
    const userData = {
      id: Date.now(),
      name: name.value,
      email: email.value,
      role: 'admin'
    }

    // Simpan data user simulasi
    localStorage.setItem('user', JSON.stringify(userData))
    localStorage.setItem('isLoggedIn', 'true')

    loading.value = false
    successMessage.value = 'Pendaftaran berhasil! Mengarahkan ke dashboard...'

    setTimeout(() => {
      router.push('/admin')
    }, 1000)
  }, 800)
}
</script>

<template>
  <div class="register-page">

    <!-- BAGIAN KIRI -->
    <div class="register-brand">
      <div class="brand-content">

        <div class="brand-logo">
          🏪
        </div>

        <h1>WARUNGKU</h1>

        <p>
          Kelola warung dengan lebih mudah,
          sederhana, dan terorganisir.
        </p>

        <div class="brand-features">

          <div class="feature">
            <span>✓</span>
            <p>Kelola produk warung</p>
          </div>

          <div class="feature">
            <span>✓</span>
            <p>Catat transaksi penjualan</p>
          </div>

          <div class="feature">
            <span>✓</span>
            <p>Pantau perkembangan warung</p>
          </div>

        </div>

      </div>
    </div>

    <!-- BAGIAN KANAN -->
    <div class="register-form-container">

      <div class="register-card">

        <div class="register-header">

          <div class="mobile-logo">
            🏪
          </div>

          <h2>Buat Akun 👋</h2>

          <p>
            Daftarkan akun untuk mengakses WARUNGKU
          </p>

        </div>

        <!-- ERROR -->
        <div
          v-if="errorMessage"
          class="message error-message"
        >
          <span>⚠️</span>
          {{ errorMessage }}
        </div>

        <!-- SUCCESS -->
        <div
          v-if="successMessage"
          class="message success-message"
        >
          <span>✓</span>
          {{ successMessage }}
        </div>

        <form @submit.prevent="register">

          <!-- NAMA -->
          <div class="form-group">

            <label for="name">
              Nama
            </label>

            <div class="input-wrapper">

              <span class="input-icon">
                👤
              </span>

              <input
                id="name"
                v-model="name"
                type="text"
                placeholder="Masukkan nama"
                autocomplete="name"
              />

            </div>

          </div>

          <!-- EMAIL -->
          <div class="form-group">

            <label for="email">
              Email
            </label>

            <div class="input-wrapper">

              <span class="input-icon">
                ✉️
              </span>

              <input
                id="email"
                v-model="email"
                type="email"
                placeholder="Masukkan email"
                autocomplete="email"
              />

            </div>

          </div>

          <!-- PASSWORD -->
          <div class="form-group">

            <label for="password">
              Password
            </label>

            <div class="input-wrapper">

              <span class="input-icon">
                🔒
              </span>

              <input
                id="password"
                v-model="password"
                :type="showPassword ? 'text' : 'password'"
                placeholder="Minimal 6 karakter"
                autocomplete="new-password"
              />

              <button
                type="button"
                class="password-toggle"
                @click="showPassword = !showPassword"
              >
                {{ showPassword ? '🙈' : '👁️' }}
              </button>

            </div>

          </div>

          <!-- KONFIRMASI PASSWORD -->
          <div class="form-group">

            <label for="confirmPassword">
              Konfirmasi Password
            </label>

            <div class="input-wrapper">

              <span class="input-icon">
                🔐
              </span>

              <input
                id="confirmPassword"
                v-model="confirmPassword"
                :type="showConfirmPassword ? 'text' : 'password'"
                placeholder="Ulangi password"
                autocomplete="new-password"
              />

              <button
                type="button"
                class="password-toggle"
                @click="showConfirmPassword = !showConfirmPassword"
              >
                {{ showConfirmPassword ? '🙈' : '👁️' }}
              </button>

            </div>

          </div>

          <!-- REGISTER BUTTON -->
          <button
            type="submit"
            class="register-button"
            :disabled="loading"
          >
            <span v-if="loading">
              Membuat akun...
            </span>

            <span v-else>
              Buat Akun
            </span>
          </button>

        </form>

        <!-- LOGIN -->
        <div class="login-link">

          <span>
            Sudah punya akun?
          </span>

          <button
            type="button"
            @click="router.push('/login')"
          >
            Login sekarang
          </button>

        </div>

      </div>

    </div>

  </div>
</template>

<style scoped>
* {
  box-sizing: border-box;
}

.register-page {
  min-height: 100vh;
  display: flex;
  background: #737373;
}

/* =========================
   BRAND
========================= */

.register-brand {
  width: 48%;
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 60px;
  background: linear-gradient(
    145deg,
    #faa3ea,
     #1a151889,
  );
  color: white;
}

.brand-content {
  width: 100%;
  max-width: 480px;
}

.brand-logo {
  width: 72px;
  height: 72px;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 28px;
  border-radius: 20px;
  background: rgba(255, 255, 255, 0.1);
  font-size: 36px;
}

.brand-content h1 {
  margin: 0 0 16px;
  font-size: 42px;
  font-weight: 800;
  letter-spacing: -1px;
}

.brand-content > p {
  max-width: 420px;
  margin: 0;
  color: #d1d5db;
  font-size: 17px;
  line-height: 1.7;
}

.brand-features {
  margin-top: 48px;
  display: flex;
  flex-direction: column;
  gap: 20px;
}

.feature {
  display: flex;
  align-items: center;
  gap: 14px;
}

.feature span {
  width: 30px;
  height: 30px;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 50%;
  background: #2563eb;
  font-size: 14px;
}

.feature p {
  margin: 0;
  color: #e5e7eb;
  font-size: 15px;
}

/* =========================
   FORM
========================= */

.register-form-container {
  flex: 1;
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 40px;
}

.register-card {
  width: 100%;
  max-width: 460px;
}

.register-header {
  margin-bottom: 28px;
}

.mobile-logo {
  display: none;
  margin-bottom: 20px;
  font-size: 36px;
}

.register-header h2 {
  margin: 0 0 8px;
  color: #111827;
  font-size: 30px;
  font-weight: 750;
}

.register-header p {
  margin: 0;
  color: #6b7280;
  font-size: 15px;
}

/* =========================
   MESSAGE
========================= */

.message {
  display: flex;
  align-items: center;
  gap: 10px;
  margin-bottom: 20px;
  padding: 13px 15px;
  border-radius: 10px;
  font-size: 14px;
}

.error-message {
  border: 1px solid #fecaca;
  background: #fef2f2;
  color: #dc2626;
}

.success-message {
  border: 1px solid #bbf7d0;
  background: #f0fdf4;
  color: #15803d;
}

/* =========================
   FORM GROUP
========================= */

.form-group {
  margin-bottom: 17px;
}

.form-group label {
  display: block;
  margin-bottom: 8px;
  color: #374151;
  font-size: 14px;
  font-weight: 600;
}

.input-wrapper {
  position: relative;
}

.input-icon {
  position: absolute;
  top: 50%;
  left: 15px;
  transform: translateY(-50%);
  font-size: 16px;
}

.input-wrapper input {
  width: 100%;
  height: 50px;
  padding: 0 48px;
  border: 1px solid #d1d5db;
  border-radius: 10px;
  outline: none;
  background: white;
  color: #111827;
  font-size: 14px;
  transition: 0.2s;
}

.input-wrapper input:focus {
  border-color: #2563eb;
  box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
}

.password-toggle {
  position: absolute;
  top: 50%;
  right: 14px;
  padding: 4px;
  border: none;
  transform: translateY(-50%);
  background: transparent;
  cursor: pointer;
  font-size: 16px;
}

/* =========================
   BUTTON
========================= */

.register-button {
  width: 100%;
  height: 50px;
  margin-top: 5px;
  border: none;
  border-radius: 10px;
  background: #2563eb;
  color: white;
  font-size: 14px;
  font-weight: 650;
  cursor: pointer;
  transition: 0.2s;
}

.register-button:hover {
  background: #1d4ed8;
  transform: translateY(-1px);
}

.register-button:disabled {
  opacity: 0.7;
  cursor: not-allowed;
  transform: none;
}

/* =========================
   LOGIN LINK
========================= */

.login-link {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 5px;
  margin-top: 22px;
  color: #6b7280;
  font-size: 13px;
}

.login-link button {
  padding: 0;
  border: none;
  background: transparent;
  color: #2563eb;
  font-size: 13px;
  font-weight: 600;
  cursor: pointer;
}

.login-link button:hover {
  text-decoration: underline;
}

/* =========================
   RESPONSIVE
========================= */

@media (max-width: 850px) {
  .register-brand {
    display: none;
  }

  .register-form-container {
    min-height: 100vh;
    padding: 30px 20px;
  }

  .mobile-logo {
    display: block;
  }

  .register-header h2 {
    font-size: 26px;
  }
}

@media (max-width: 480px) {
  .register-form-container {
    padding: 24px 16px;
  }
}
</style>