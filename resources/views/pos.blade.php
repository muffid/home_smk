<form action="/news" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="title">Judul Berita</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Masukkan judul berita">
    </div>
    <div class="form-group">
      <label for="image">Gambar Berita</label>
      <input type="file" class="form-control" id="image" name="image">
    </div>
    <div class="form-group">
      <label for="content">Isi Berita</label>
      <textarea class="form-control" id="content" name="content" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Kirim</button>
  </form>
  