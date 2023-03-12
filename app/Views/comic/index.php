<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<h1 class="mt-6">List Film</h1>
<a href="/comics/create" class="btn btn-primary mb-3">Add Film</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Pict</th>
            <th scope="col">Title</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($film as $f) : ?>
            <tr class="align">
                <th scope="row" class="align-middle"><?= $f['id'] ?></th>
                <td><img src="/img/<?= $f['picture'] ?>" alt="" class="rounded-sm"></td>
                <td class="align-middle"><?= $f['title'] ?></td>
                <td class="align-middle"><a href="/comics/<?= $f['slug'] ?>" class="btn btn-success">Detail</a></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
<?= $this->endsection(); ?>