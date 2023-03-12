<?= $this->extend("layout/template") ?>
<?= $this->section("content") ?>
<h4><?= $title ?></h4>
<div class="card mb-3" style="max-width: 540px;">
    <div class="row no-gutters">
        <div class="col-md-4">
            <img src="/img/<?= $film['picture']; ?>" class="card-img" width="60" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title"><?= $film['title']; ?></h5>
                <p class="card-text"><?= $film['producer']; ?></p>
                <p class="card-text"><small class="text-muted"><?= $film['studio']; ?></small></p>
                <div class="mt-8 pt-5">
                    <a href="" class="btn btn-warning">Edit</a>
                    <a href="" class="btn btn-danger">Delete</a>
                </div>
                <a href="/comics" class="d-block mt-2">Back to list</a>
            </div>
        </div>
    </div>
</div>
<?= $this->endsection() ?>