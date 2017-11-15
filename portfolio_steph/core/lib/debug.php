<div class="row">
  <div class="col-sm-4">
    <!-- info server -->
    <h2>SERVER</h2>
    <?php var_dump($_SERVER);?>
  </div>
  <div class="col-sm-4">
    <!-- info constantes -->
    <h2>CONSTANTES</h2>
    <?php var_dump(get_defined_constants());?>
  </div>
  <div class="col-sm-4">
    <!-- info session -->
    <h2>SESSION</h2>
    <?php var_dump($_SESSION);?>
  </div>
</div>
