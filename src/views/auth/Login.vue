<script setup>
import { ref } from 'vue'
import { useRouter } from 'vue-router'

const router = useRouter()

const email = ref('')
const password = ref('')
const showPassword = ref(false)
const rememberMe = ref(false)
const errorMessage = ref('')
const loading = ref(false)

const login = async () => {
  errorMessage.value = ''

  if (!email.value || !password.value) {
    errorMessage.value = 'Email dan password wajib diisi.'
    return
  }

  loading.value = true

  // Simulasi proses login
  setTimeout(() => {
    const adminEmail = 'admin@warungku.com'
    const adminPassword = 'admin123'

    if (
      email.value === adminEmail &&
      password.value === adminPassword
    ) {
      const adminData = {
        id: 1,
        name: 'Administrator',
        email: adminEmail,
        role: 'admin'
      }

      // Simpan data login
      localStorage.setItem('isLoggedIn', 'true')
      localStorage.setItem('user', JSON.stringify(adminData))

      if (rememberMe.value) {
        localStorage.setItem('rememberMe', 'true')
      } else {
        localStorage.removeItem('rememberMe')
      }

      router.push('/admin')
    } else {
      errorMessage.value = 'Email atau password salah.'
    }

    loading.value = false
  }, 800)
}
</script>

<template>
  <div class="login-page">

    <!-- BAGIAN KIRI -->
    <div class="login-brand">
      <div class="brand-content">

        <div class="brand-logo">
          🏪
        </div>

        <h1>WARUNGKU</h1>

        <p>
          Sistem manajemen warung yang sederhana,
          cepat, dan mudah digunakan.
        </p>

        <div class="brand-features">
          <div class="feature">
            <span>✓</span>
            <p>Kelola produk dengan mudah</p>
          </div>

          <div class="feature">
            <span>✓</span>
            <p>Pantau penjualan warung</p>
          </div>

          <div class="feature">
            <span>✓</span>
            <p>Kelola pelanggan dan kategori</p>
          </div>
        </div>

      </div>
    </div>

    <!-- BAGIAN KANAN -->
    <div class="login-form-container">

      <div class="login-card">

        <div class="login-header">
          <div class="mobile-logo">
            🏪
          </div>

          <h2>Selamat Datang 👋</h2>

          <p>
            Masuk ke panel admin WARUNGKU
          </p>
        </div>

        <!-- ERROR -->
        <div
          v-if="errorMessage"
          class="error-message"
        >
          <span>⚠️</span>
          {{ errorMessage }}
        </div>

        <form @submit.prevent="login">

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
                placeholder="Masukkan password"
                autocomplete="current-password"
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

          <!-- REMEMBER -->
          <div class="login-options">

            <label class="remember">
              <input
                v-model="rememberMe"
                type="checkbox"
              />

              <span>
                Ingat saya
              </span>
            </label>

            <button
              type="button"
              class="forgot-password"
            >
              Lupa password?
            </button>

          </div>

          <!-- LOGIN BUTTON -->
          <button
            type="submit"
            class="login-button"
            :disabled="loading"
          >
            <span v-if="loading">
              Memproses...
            </span>

            <span v-else>
              Masuk ke Dashboard
            </span>
          </button>

        </form>

        <!-- REGISTER -->
        <div class="register-link">
          <span>Belum punya akun?</span>

          <button
            type="button"
            @click="router.push('/register')"
          >
            Daftar sekarang
          </button>
        </div>

        <!-- DEMO ACCOUNT -->
        <div class="demo-account">
          <div class="demo-title">
            🔑 Akun Demo Admin
          </div>

          <div class="demo-item">
            <span>Email</span>
            <strong>admin@warungku.com</strong>
          </div>

          <div class="demo-item">
            <span>Password</span>
            <strong>admin123</strong>
          </div>
        </div>

      </div>

    </div>

  </div>
</template>

<style scoped>
* {
  box-sizing: border-box;
}

.login-page {
  min-height: 100vh;
  display: flex;
  background: #f5f7fb;
}

/* =========================
   BRAND
========================= */

.login-brand {
  width: 48%;
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 60px;
  background: linear-gradient(
    145deg,
    #ebb8c3,
    #523acd
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
   FORM CONTAINER
========================= */

.login-form-container {
  flex: 1;
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 40px;
}

.login-card {
  width: 100%;
  max-width: 460px;
}

.login-header {
  margin-bottom: 30px;
}

.mobile-logo {
  display: none;
  margin-bottom: 20px;
  font-size: 36px;
}

.login-header h2 {
  margin: 0 0 8px;
  color: #111827;
  font-size: 30px;
  font-weight: 750;
}

.login-header p {
  margin: 0;
  color: #6b7280;
  font-size: 15px;
}

/* =========================
   ERROR
========================= */

.error-message {
  display: flex;
  align-items: center;
  gap: 10px;
  margin-bottom: 20px;
  padding: 13px 15px;
  border: 1px solid #fecaca;
  border-radius: 10px;
  background: #fef2f2;
  color: #dc2626;
  font-size: 14px;
}

/* =========================
   FORM
========================= */

.form-group {
  margin-bottom: 20px;
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
   OPTIONS
========================= */

.login-options {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin: 6px 0 24px;
}

.remember {
  display: flex;
  align-items: center;
  gap: 8px;
  color: #4b5563;
  font-size: 13px;
  cursor: pointer;
}

.remember input {
  width: 15px;
  height: 15px;
  cursor: pointer;
}

.forgot-password {
  padding: 0;
  border: none;
  background: transparent;
  color: #2563eb;
  font-size: 13px;
  cursor: pointer;
}

.forgot-password:hover {
  text-decoration: underline;
}

/* =========================
   LOGIN BUTTON
========================= */

.login-button {
  width: 100%;
  height: 50px;
  border: none;
  border-radius: 10px;
  background: #2563eb;
  color: white;
  font-size: 14px;
  font-weight: 650;
  cursor: pointer;
  transition: 0.2s;
}

.login-button:hover {
  background: #1d4ed8;
  transform: translateY(-1px);
}

.login-button:disabled {
  opacity: 0.7;
  cursor: not-allowed;
  transform: none;
}

/* =========================
   REGISTER
========================= */

.register-link {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 5px;
  margin-top: 24px;
  color: #6b7280;
  font-size: 13px;
}

.register-link button {
  padding: 0;
  border: none;
  background: transparent;
  color: #2563eb;
  font-size: 13px;
  font-weight: 600;
  cursor: pointer;
}

.register-link button:hover {
  text-decoration: underline;
}

/* =========================
   DEMO
========================= */

.demo-account {
  margin-top: 28px;
  padding: 16px;
  border: 1px dashed #bfdbfe;
  border-radius: 10px;
  background: #eff6ff;
}

.demo-title {
  margin-bottom: 12px;
  color: #1e40af;
  font-size: 13px;
  font-weight: 700;
}

.demo-item {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-top: 7px;
  color: #64748b;
  font-size: 12px;
}

.demo-item strong {
  color: #334155;
  font-weight: 600;
}

/* =========================
   RESPONSIVE
========================= */

@media (max-width: 850px) {
  .login-brand {
    display: none;
  }

  .login-form-container {
    min-height: 100vh;
    padding: 30px 20px;
  }

  .mobile-logo {
    display: block;
  }

  .login-header h2 {
    font-size: 26px;
  }
}

@media (max-width: 480px) {
  .login-form-container {
    padding: 24px 16px;
  }

  .login-options {
    align-items: flex-start;
    flex-direction: column;
    gap: 12px;
  }

  .demo-item {
    align-items: flex-start;
    flex-direction: column;
    gap: 3px;
  }
}
</style>