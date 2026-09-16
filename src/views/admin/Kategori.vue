<template>
  <div class="kategori-page">

    <!-- HEADER -->
    <div class="page-header">
      <div>
        <span class="page-label">MANAJEMEN PRODUK</span>
        <h1>Kategori Produk</h1>
        <p>Kelola kategori produk yang tersedia di Seka Warung.</p>
      </div>

      <button class="btn-tambah" @click="tambahKategori">
        + Tambah Kategori
      </button>
    </div>


    <!-- CONTENT -->
    <div class="kategori-card">

      <div class="card-header">
        <div>
          <h2>Daftar Kategori</h2>
          <p>Daftar kategori produk Seka Warung.</p>
        </div>

        <input
          v-model="search"
          type="text"
          placeholder="Cari kategori..."
          class="search-input"
        />
      </div>


      <!-- TABLE -->
      <div class="table-wrapper">

        <table>

          <thead>
            <tr>
              <th>No</th>
              <th>Nama Kategori</th>
              <th>Jumlah Produk</th>
              <th>Keterangan</th>
              <th>Status</th>
              <th>Aksi</th>
            </tr>
          </thead>


          <tbody>

            <tr
              v-for="(kategori, index) in kategoriFiltered"
              :key="kategori.id"
            >

              <td>
                {{ index + 1 }}
              </td>

              <td>
                <strong>{{ kategori.nama }}</strong>
              </td>

              <td>
                {{ kategori.jumlah }} produk
              </td>

              <td>
                {{ kategori.keterangan }}
              </td>

              <td>
                <span
                  class="status"
                  :class="kategori.status === 'Aktif'
                    ? 'aktif'
                    : 'nonaktif'"
                >
                  {{ kategori.status }}
                </span>
              </td>

              <td>
                <button
                  class="btn-edit"
                  @click="editKategori(kategori)"
                >
                  Edit
                </button>

                <button
                  class="btn-hapus"
                  @click="hapusKategori(kategori.id)"
                >
                  Hapus
                </button>
              </td>

            </tr>


            <tr v-if="kategoriFiltered.length === 0">
              <td colspan="6" class="kosong">
                Kategori tidak ditemukan.
              </td>
            </tr>

          </tbody>

        </table>

      </div>

    </div>

  </div>
</template>


<script setup>
import { ref, computed } from 'vue'

const search = ref('')

const kategori = ref([
  {
    id: 1,
    nama: 'Makanan',
    jumlah: 12,
    keterangan: 'Produk makanan',
    status: 'Aktif'
  },
  {
    id: 2,
    nama: 'Minuman',
    jumlah: 10,
    keterangan: 'Produk minuman',
    status: 'Aktif'
  },
  {
    id: 3,
    nama: 'Snack',
    jumlah: 15,
    keterangan: 'Makanan ringan',
    status: 'Aktif'
  },
  {
    id: 4,
    nama: 'Sembako',
    jumlah: 8,
    keterangan: 'Kebutuhan sehari-hari',
    status: 'Aktif'
  }
])


const kategoriFiltered = computed(() => {
  return kategori.value.filter(item =>
    item.nama
      .toLowerCase()
      .includes(search.value.toLowerCase())
  )
})


const tambahKategori = () => {
  alert('Form tambah kategori akan dibuat berikutnya.')
}


const editKategori = (item) => {
  alert(`Edit kategori: ${item.nama}`)
}


const hapusKategori = (id) => {

  const yakin = confirm(
    'Yakin ingin menghapus kategori ini?'
  )

  if (yakin) {
    kategori.value = kategori.value.filter(
      item => item.id !== id
    )
  }

}
</script>


<style scoped>

* {
  box-sizing: border-box;
}


/* =========================
   PAGE
========================= */

.kategori-page {
  width: 100%;
  color: #302b29;
}


/* =========================
   HEADER
========================= */

.page-header {
  display: flex;
  align-items: center;
  justify-content: space-between;

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
   BUTTON TAMBAH
========================= */

.btn-tambah {
  border: none;

  padding: 12px 20px;

  border-radius: 8px;

  background: #d78b9d;

  color: white;

  font-size: 14px;
  font-weight: 600;

  cursor: pointer;
}

.btn-tambah:hover {
  background: #c9798e;
}


/* =========================
   CARD
========================= */

.kategori-card {
  background: #fffdfb;

  border: 1px solid #eaded4;

  border-radius: 12px;

  overflow: hidden;
}


/* =========================
   CARD HEADER
========================= */

.card-header {
  display: flex;

  align-items: center;
  justify-content: space-between;

  padding: 22px 24px;

  border-bottom: 1px solid #eaded4;
}

.card-header h2 {
  margin: 0;

  color: #302b29;

  font-size: 18px;
}

.card-header p {
  margin: 5px 0 0;

  color: #968b84;

  font-size: 12px;
}


/* =========================
   SEARCH
========================= */

.search-input {
  width: 220px;

  height: 40px;

  padding: 0 13px;

  border: 1px solid #dfd2ca;

  border-radius: 7px;

  outline: none;

  background: #ffffff;

  color: #302b29;

  font-size: 13px;
}

.search-input:focus {
  border-color: #d78b9d;
}

.search-input::placeholder {
  color: #aaa09a;
}


/* =========================
   TABLE
========================= */

.table-wrapper {
  width: 100%;

  overflow-x: auto;
}

table {
  width: 100%;

  min-width: 750px;

  border-collapse: collapse;
}

thead {
  background: #f5e7dc;
}

th {
  padding: 15px 18px;

  text-align: left;

  color: #655952;

  font-size: 12px;

  font-weight: 700;
}

td {
  padding: 16px 18px;

  border-top: 1px solid #eee4dc;

  color: #6d625b;

  font-size: 13px;
}

td strong {
  color: #302b29;

  font-weight: 600;
}


/* =========================
   STATUS
========================= */

.status {
  display: inline-block;

  padding: 5px 10px;

  border-radius: 20px;

  font-size: 11px;

  font-weight: 600;
}

.aktif {
  background: #f3e5e9;

  color: #b9657d;
}

.nonaktif {
  background: #f2e4df;

  color: #a96355;
}


/* =========================
   ACTION
========================= */

.btn-edit,
.btn-hapus {
  border: none;

  padding: 7px 11px;

  border-radius: 6px;

  font-size: 12px;

  cursor: pointer;
}

.btn-edit {
  margin-right: 6px;

  background: #f3e5e9;

  color: #b9657d;
}

.btn-hapus {
  background: #f5e5e1;

  color: #a96355;
}

.btn-edit:hover,
.btn-hapus:hover {
  opacity: 0.8;
}


/* =========================
   EMPTY
========================= */

.kosong {
  padding: 40px;

  text-align: center;

  color: #968b84;
}


/* =========================
   RESPONSIVE
========================= */

@media (max-width: 700px) {

  .page-header {
    flex-direction: column;

    align-items: flex-start;

    gap: 15px;
  }

  .btn-tambah {
    width: 100%;
  }

  .card-header {
    flex-direction: column;

    align-items: flex-start;

    gap: 15px;
  }

  .search-input {
    width: 100%;
  }

}

</style>