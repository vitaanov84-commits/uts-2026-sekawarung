<template>
  <div class="login-page">
    <div class="login-card">

      <!-- Gambar Warung -->
      <div class="warung-logo">
        <img src="../assets/warung.png" alt="Seka Warung" />
      </div>

      <!-- Judul -->
      <div class="header">
        <h1>Seka Warung</h1>
        <p>Selamat datang kembali!</p>
      </div>

      <!-- Form Login -->
      <form @submit.prevent="login">

        <!-- Email -->
        <div class="form-group">
          <label for="email">Email</label>
          <input
            id="email"
            v-model="email"
            type="email"
            placeholder="Masukkan email"
            required
          />
        </div>

        <!-- Password -->
        <div class="form-group">
          <label for="password">Password</label>
          <input
            id="password"
            v-model="password"
            type="password"
            placeholder="Masukkan password"
            required
          />
        </div>

        <!-- Lupa Password -->
        <div class="forgot-password">
          <a href="#">Lupa password?</a>
        </div>

        <!-- Tombol Login -->
        <button type="submit" :disabled="loading">
          {{ loading ? 'Memproses...' : 'Login' }}
        </button>

      </form>

      <!-- Register -->
      <div class="register">
        <span>Belum punya akun?</span>
        <a href="#">Daftar sekarang</a>
      </div>

    </div>
  </div>
</template>

<script>
export default {
  name: "Login",

  data() {
    return {
      email: "",
      password: "",
      loading: false
    };
  },

  methods: {
    async login() {
      const email = this.email.trim();
      const password = this.password.trim();

      if (!email || !password) {
        alert("Email dan password harus diisi!");
        return;
      }

      this.loading = true;

      try {
        // TODO: ganti dengan API call sungguhan, contoh:
        // const res = await axios.post('/api/login', { email, password })

        // Simulasi delay & sukses login
        await new Promise(resolve => setTimeout(resolve, 500));

        // Simpan status login (ganti sesuai kebutuhan: token, user data, dll)
        localStorage.setItem('isLoggedIn', 'true');
        localStorage.setItem('userEmail', email);

        // Pindah halaman SETELAH status login tersimpan
        await this.$router.push('/dashboard');

      } catch (error) {
        console.error('Login gagal:', error);
        alert('Login gagal, coba lagi.');
      } finally {
        this.loading = false;
      }
    }
  }
};
</script>

<style scoped>
* {
  box-sizing: border-box;
}

.login-page {
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  background: #f2f8f3;
  padding: 30px;
}

.login-card {
  width: 430px;
  background: #ffffff;
  padding: 35px 45px;
  border-radius: 22px;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
  text-align: center;
}

.warung-logo {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-bottom: 5px;
}

.warung-logo img {
  width: 170px;
  height: 130px;
  object-fit: contain;
}

.header {
  margin-bottom: 30px;
}

.header h1 {
  margin: 0;
  font-size: 32px;
  font-weight: 700;
  color: #b44f8f;
}

.header p {
  margin-top: 8px;
  font-size: 17px;
  color: #777777;
}

form {
  text-align: left;
}

.form-group {
  margin-bottom: 20px;
}

.form-group label {
  display: block;
  margin-bottom: 8px;
  font-size: 16px;
  font-weight: 600;
  color: #222222;
}

.form-group input {
  width: 100%;
  padding: 14px 16px;
  border: 1px solid #dddddd;
  border-radius: 10px;
  font-size: 15px;
  outline: none;
  transition: 0.2s;
}

.form-group input:focus {
  border-color: #b44f8f;
  box-shadow: 0 0 0 3px rgba(180, 79, 143, 0.1);
}

.forgot-password {
  text-align: right;
  margin-top: -5px;
  margin-bottom: 22px;
}

.forgot-password a {
  color: #000000;
  font-size: 14px;
  text-decoration: none;
}

.forgot-password a:hover {
  text-decoration: underline;
}

button {
  width: 100%;
  padding: 14px;
  border: none;
  border-radius: 10px;
  background: #b44f8f;
  color: #ffffff;
  font-size: 17px;
  font-weight: bold;
  cursor: pointer;
  transition: 0.2s;
}

button:hover {
  background: #943b73;
  transform: translateY(-1px);
}

button:disabled {
  background: #cccccc;
  cursor: not-allowed;
  transform: none;
}

.register {
  margin-top: 25px;
  font-size: 14px;
  color: #777777;
}

.register a {
  margin-left: 5px;
  color: #1d1c1c;
  font-weight: bold;
  text-decoration: none;
}

.register a:hover {
  text-decoration: underline;
}

@media (max-width: 500px) {
  .login-page {
    padding: 20px;
  }

  .login-card {
    width: 100%;
    padding: 30px 25px;
  }

  .warung-logo img {
    width: 150px;
    height: 115px;
  }

  .header h1 {
    font-size: 28px;
  }
}
</style>