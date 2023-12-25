
<?php require __DIR__ . '/../layouts/header.php'; ?>


<div class="main container">
<form action="<?php echo constant('URL') ?>/nuevo/store" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre</label>
    <input type="text" class="form-control">
  </div>
  <div class="mb-3">
    <label class="form-label">email</label>
    <input type="email" class="form-control" >
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>


<?php require __DIR__ . '/../layouts/footer.php'; ?>
