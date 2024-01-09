<?php $this->load->view('partials/header.php') ?>

<!-- Page Header-->
<header class="masthead" style="background-image: url('<?= base_url(); ?>assets/assets/img/home-bg.jpg')">
  <div class="container position-relative px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
      <div class="col-md-10 col-lg-8 col-xl-7">
        <div class="site-heading">
          <h1>Tambah Artikel</h1>
        </div>
      </div>
    </div>
  </div>
</header>

<div class="container mb-5">
  <div class="row">
    <div class="col-md-8 mx-auto">

      <h1>Edit Artikel</h1>

      <form method="POST">
        <div class="mb-3">
          <label class="form-label">Judul</label>
          <input class="form-control" type="text" name="title" value="<?= $blog['title']; ?>">
        </div>

        <div class="mb-3">
          <label class="form-label">URL</label>
          <input class="form-control" type="text" name="url" value="<?= $blog['url']; ?>">
        </div>

        <div class="mb-3">
          <label class="form-label">Konten</label>
          <textarea class="form-control" name="content" id="" cols="30" rows="10">
            <?= $blog['content']; ?>
          </textarea>
        </div>

        <button class="btn btn-primary" type="submit">Simpan Artikel</button>
      </form>

    </div>
  </div>
</div>

<?php $this->load->view('partials/footer.php') ?>