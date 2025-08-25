# Guide Book Project Magang BKPSDM

## **Langkah-langkah Git**

### 1. **Clone repository**
```bash
git clone nama-repository
```
Jangan lupa bikin branch di remote 

### 2. **Buat branch baru di local**
```bash
git branch nama-branch-baru
```

### 3. **Pindah branch baru di local**
```bash
git chekout nama-branch baru
```

---

## **Cara Sync**

### 1. **Team update kode local**
```bash
git checkout main
git pull origin main
```

### 2. **Merge ke branch masing-masing**
```bash
git checkout branch-kamu
git merge main
```

---

## **Langkah Setelah `git clone` Proyek Laravel**

### 1. **Masuk ke direktori project**

```bash
cd nama-folder-project
```

---

### 2. **Install dependencies dengan Composer**

```bash
composer install
```

Ini akan meng-install semua library yang dibutuhkan Laravel dari file `composer.json`.

---

### 3. **Buat file `.env`**

```bash
cp .env.example .env
```

`.env` berisi konfigurasi penting seperti nama database, user, password, app key, dll.

---

### 4. **Generate Application Key**

```bash
php artisan key:generate
```

Laravel membutuhkan app key untuk enkripsi data seperti sesi, password, dsb.

---

### 5. 🛠️ **Sesuaikan konfigurasi database di `.env`**

Edit file `.env`, dan sesuaikan:

```env
DB_DATABASE=nama_database
DB_USERNAME=root
DB_PASSWORD=
```

Edit APP_URL di `.env` dan sesuaikan:
```env
APP_URL=path_kamu
```

Lalu **buat database-nya** secara manual di phpMyAdmin atau lewat terminal.

---

### 6. **Jalankan migrasi (jika ada migrasi database)**

```bash
php artisan migrate
```

Jika ada data awal, jalankan juga:

```bash
php artisan db:seed
```

---

### 7. **Jalankan server lokal**

```bash
php artisan serve
```

Lalu buka di browser:

```
http://localhost:8000
```

---

