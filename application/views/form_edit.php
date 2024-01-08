<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Edit Post</title>
</head>

<body>
  <h1>Edit Artikel</h1>

  <form method="POST">
    <div>
      <label>Judul</label>
      <input type="text" name="title" value="<?= $blog['title']; ?>">
    </div>

    <div>
      <label>URL</label>
      <input type="text" name="url" value="<?= $blog['url']; ?>">
    </div>

    <div>
      <label>Konten</label>
      <textarea name="content" id="" cols="30" rows="10">
        <?= $blog['content']; ?>
      </textarea>
    </div>

    <button type="submit">Simpan Artikel</button>
  </form>
</body>

</html>