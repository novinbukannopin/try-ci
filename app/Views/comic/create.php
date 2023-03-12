<?= $this->extend("layout/template") ?>
<?= $this->section("content"); ?>
<h2 class="my-3">Form Add Film</h2>
<form action="/comics/save" method="POST">
    <?= csrf_field() ?>
    <div class="form-group row">
        <label for="title" class="col-sm-2 col-form-label">Title</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="title" placeholder="Title" name="title" autofocus>
        </div>
    </div>
    <div class="form-group row">
        <label for="producer" class="col-sm-2 col-form-label">Producer</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="producer" placeholder="Producer" name="producer">
        </div>
    </div>
    <div class="form-group row">
        <label for="studio" class="col-sm-2 col-form-label">Studio</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="studio" placeholder="Studio" name="studio">
        </div>
    </div>
    <div class="form-group row">
        <label for="picture" class="col-sm-2 col-form-label">Picture</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="picture" placeholder="Picture" name="picture">
        </div>
    </div>

    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Sign in</button>
        </div>
    </div>
</form>
<?= $this->endsection(); ?>