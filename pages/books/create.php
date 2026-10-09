<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Buku - Perpustakaan Digital</title>
  <link rel="stylesheet" href="../../styles/books/create.css">
</head>
<body>
  <?php
  require '../../repositories/category-repository.php';
  require '../../repositories/author-repository.php';
  $categories = getCategories();
  $authors = getAuthors();
  ?>
  <div class="app-shell">
    <?php require_once "../../components/admin/sidebar.php"; ?>

    <main class="app-main">
      <?php
      $pageTitle = 'Tambah Buku';
      $pageSubtitle = 'Tambahkan buku baru ke koleksi';
      
      require_once '../../components/admin/topbar.php';
      ?>

      <div class="app-content">
        <!-- Perbaikan: Menambahkan method="POST" dan action ke file pemroses -->
        <form method="POST" action="../../actions/books/store.php">
          <div class="form-card" style="margin-bottom:20px;">
            <div class="form-section-title">Data Buku</div>
            <div class="form-group">
              <label for="title">Judul Buku</label>
              <input type="text" id="title" name="title" placeholder="Contoh: Laskar Pelangi" required>
            </div>
            <div class="form-row">
              <div class="form-group">
                <label for="isbn">ISBN</label>
                <input type="text" id="isbn" name="isbn" placeholder="Contoh: 978-979-1227-78-0">
              </div>
              <div class="form-group">
                <label for="year">Tahun Terbit</label>
                <input type="number" id="year" name="year" placeholder="Contoh: 2005">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group">
                <label for="stock">Jumlah Stok</label>
                <input type="number" id="stock" name="stock" placeholder="Contoh: 10">
              </div>
              <div class="form-group">
                <label for="category_id">Kategori</label>
                <select id="category_id" name="category_id">
                  <option value="">-- Pilih Kategori --</option>
                  <?php foreach ($categories as $category): ?>
                    <!-- Perbaikan: Mengambil ID dan Nama dari array $category -->
                    <?php 
                      $catId = is_array($category) ? ($category['id'] ?? '') : $category;
                      $catName = is_array($category) ? ($category['name'] ?? $category['category_name'] ?? '') : $category;
                    ?>
                    <option value="<?= htmlspecialchars($catId) ?>">
                      <?= htmlspecialchars($catName) ?>
                    </option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="description">Deskripsi</label>
              <textarea id="description" name="description" rows="3" placeholder="Sinopsis singkat buku"></textarea>
            </div>
          </div>

          <div class="form-card">
            <div class="form-section-title">Penulis Buku</div>
            <div class="form-group">
              <label>Pilih Penulis (bisa lebih dari satu)</label>
              <div class="checkbox-grid">
                <?php foreach ($authors as $author): ?>
                  <!-- Perbaikan: Mengambil ID dan Nama dari array $author -->
                  <?php 
                    $authorId = is_array($author) ? ($author['id'] ?? '') : $author;
                    $authorName = is_array($author) ? ($author['name'] ?? '') : $author;
                  ?>
                  <label class="checkbox-item">
                    <input type="checkbox" name="author_ids[]" value="<?= htmlspecialchars($authorId) ?>">
                    <?= htmlspecialchars($authorName) ?>
                  </label>
                <?php endforeach; ?>
              </div>
            </div>

            <div class="form-actions">
              <a href="index.php" class="btn btn-outline">Batal</a>
              <button type="submit" name="tambah_buku" class="btn btn-primary">Simpan Buku</button>
            </div>
          </div>
        </form>
      </div>
    </main>
  </div>
</body>
</html>