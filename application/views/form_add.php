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

      <h1>Tambah Artikel</h1>

      <?= form_open_multipart() ?>
        <div class="mb-3">
          <label class="form-label">Judul</label>
          <?= form_input('title', null, 'class="form-control"'); ?>
        </div>

        <div class="mb-3">
          <label class="form-label">URL</label>
          <?= form_input('url', null, 'class="form-control"'); ?>
        </div>

        <div class="mb-3">
          <label class="form-label">Konten</label>
          <?= form_textarea('content', null, 'class="form-control"'); ?>
        </div>

        <div class="mb-3">
          <label class="form-label">Cover</label>
          <?= form_upload('cover', null, 'class="form-control"'); ?>
        </div>

        <button class="btn btn-primary" type="submit">Simpan Artikel</button>
      <?= form_close(); ?>

    </div>
  </div>
</div>

<?php $this->load->view('partials/footer.php') ?>