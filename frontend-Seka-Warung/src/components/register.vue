<template>
  <div class="register-page">
    <div class="register-card">

      <!-- Gambar Warung -->
      <div class="warung-logo">
        <img
          src="../assets/warung.png"
          alt="Seka Warung"
        />
      </div>

      <!-- Judul -->
      <div class="header">
        <h1>Seka Warung</h1>
        <p>Buat akun baru untuk mulai berjualan!</p>
      </div>

      <!-- Form Register -->
      <form @submit.prevent="register">

        <!-- Nama -->
        <div class="form-group">
          <label for="name">Nama Lengkap</label>
          <input
            id="name"
            v-model="name"
            type="text"
            placeholder="Masukkan nama lengkap"
            required
          />
        </div>

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

        <!-- Nomor HP -->
        <div class="form-group">
          <label for="phone">Nomor HP</label>
          <input
            id="phone"
            v-model="phone"
            type="tel"
            placeholder="Masukkan nomor HP"
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

        <!-- Konfirmasi Password -->
        <div class="form-group">
          <label for="confirmPassword">Konfirmasi Password</label>
          <input
            id="confirmPassword"
            v-model="confirmPassword"
            type="password"
            placeholder="Ulangi password"
            required
          />
        </div>

        <!-- Error Message -->
        <p v-if="errorMessage" class="error-message">{{ errorMessage }}</p>

        <!-- Tombol Register -->
        <button type="submit">
          Daftar
        </button>

      </form>

      <!-- Login -->
      <div class="login-link">
        <span>Sudah punya akun?</span>
        <a href="#" @click.prevent="goToLogin">Masuk di sini</a>
      </div>

    </div>
  </div>
</template>

<script>
export default {
  name: "Register",

  data() {
    return {
      name: "",
      email: "",
      phone: "",
      password: "",
      confirmPassword: "",
      errorMessage: ""
    };
  },

  methods: {
    register() {
      this.errorMessage = "";

      const name = this.name.trim();
      const email = this.email.trim();
      const phone = this.phone.trim();
      const password = this.password.trim();
      const confirmPassword = this.confirmPassword.trim();

      if (!name || !email || !phone || !password || !confirmPassword) {
        this.errorMessage = "Semua kolom harus diisi!";
        return;
      }

      if (password !== confirmPassword) {
        this.errorMessage = "Password dan konfirmasi password tidak sama!";
        return;
      }

      if (password.length < 6) {
        this.errorMessage = "Password minimal 6 karakter!";
        return;
      }

      alert("Registrasi berhasil!");
      console.log("Nama:", name);
      console.log("Email:", email);
      console.log("Nomor HP:", phone);

      this.goToLogin();
    },

    goToLogin() {
      this.$router.push("/login");
    }
  }
};
</script>

<style scoped>
* {
  box-sizing: border-box;
}

.register-page {
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  background: #f2f8f3;
  padding: 30px;
}

.register-card {
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

.error-message {
  color: #d9534f;
  font-size: 14px;
  margin: -8px 0 18px 0;
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

.login-link {
  margin-top: 25px;
  font-size: 14px;
  color: #777777;
}

.login-link a {
  margin-left: 5px;
  color: #000000;
  font-weight: bold;
  text-decoration: none;
}

.login-link a:hover {
  text-decoration: underline;
}

@media (max-width: 500px) {
  .register-page {
    padding: 20px;
  }

  .register-card {
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