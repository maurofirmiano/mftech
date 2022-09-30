<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="row">
  <div class="col-md-1"></div>
    <div class="col-md-10">
      <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover" >
          <thead align="center">
            <tr>
              <th>Id</th>
              <th>Nome</th>
              <th>Phone</th>
              <th>Email</th>
              <th>Ação</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($registros as $reg):?>
              <tr>
                <td> <?php echo $reg['id'] ?> </td>
                <td> <?php echo $reg['name'] ?> </td>
                <td> <?php echo $reg['phone'] ?> </td>
                <td> <?php echo $reg['email'] ?> </td>
                <td align="center">
                  <button type="button" class="btn btn-warning">
                    <a href="<?= base_url()?>index.php/cadastrocontroller/edit/<?= $reg['id'] ?>"> <i class='bi bi-pen'></i></a>
                  </button>
                  <button class="btn btn-danger">
                    <a href="<?= base_url()?>index.php/cadastrocontroller/delete/<?= $reg['id'] ?>"> <i class='bi bi-trash'></i></a>
                  </button
                </td>
              </tr>

            <?php endforeach ?>
          </tbody>
        </table>
      </div>
    <div class="col-md-1"></div>

</div
