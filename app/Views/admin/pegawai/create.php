<!-- App/Views/post/index.php -->
<h1>Post List</h1>
<a href="<?= site_url('/admin/pegawai/create') ?>">Create Post</a>

<ul>
    <?php foreach ($posts as $post): ?>
        <li>
            <?= $post['id'] ?>
            <a href="<?= site_url('/admin/pegawai/edit' . $post['id']) ?>">Edit</a>
            <a href="<?= site_url('/admin/pegawai/edit' . $post['id']) ?>">Delete</a>
        </li>
    <?php endforeach; ?>
</ul>