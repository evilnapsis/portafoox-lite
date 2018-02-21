        <!-- Main Content -->

          <div class="row">
            <div class="col-md-12">
  <!-- Button trigger modal -->

  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Agregar Imagen</h4>
        </div>
        <div class="modal-body">
<form class="form-horizontal" enctype="multipart/form-data" role="form" method="post" action="index.php?action=prodimgs&opt=add">
<input type="hidden" name="product_id" value="<?php echo $_GET["product_id"];?>">
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Imagen</label>
    <div class="col-lg-10">
      <input type="file"  required  name="src">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Titulo</label>
    <div class="col-lg-10">
      <input type="text" required class="form-control" name="title" placeholder="Titulo de la Imagen">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Descripcion</label>
    <div class="col-lg-10">
      <textarea class="form-control" name="description" placeholder="Descripcion de la Imagen"></textarea>
    </div>
  </div>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-block btn-primary">Agregar Imagen</button>
    </div>
  </div>
</form>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
            <h1>Imagenes</h1>
                  <a  data-toggle="modal" href="#myModal" class=" btn btn-default">Agregar Imagen</a>

            </div>
            </div>
<br>
          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <i class="fa fa-th-list"></i> Imagenes
                </div>
                <div class="widget-body medium no-padding">
<?php
$images = ProductImageData::getAllByProductId($_GET["product_id"]);
 if(count($images)>0):?>
                  <div class="table-responsive">
                    <table class="table table-bordered">
                    <thead>
                    <th></th>
                      <th>Titulo</th>
                      <th>Descripcion</th>
                      <th></th>
                    </thead>
                      <tbody>

<?php foreach($images as $cat):?>
                        <tr>
                        <td style="width:30px;">
                        <img src="storage/products/<?php echo $cat->product_id;?>/<?php echo $cat->src;?>" style='width:480px;'>
                        </td>
                        <td><?php echo $cat->title; ?>
                        <td><?php echo $cat->description; ?>




                        </td>
                        <td style="width:90px;">
                        <a data-toggle="modal" href="#myModal-<?php echo $cat->id;?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a> 
  <!-- Button trigger modal -->

  <!-- Modal -->
  <div class="modal fade" id="myModal-<?php echo $cat->id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Editar Imagen</h4>
        </div>
        <div class="modal-body">
<form class="form-horizontal" role="form" method="post" action="index.php?action=prodimgs&opt=upd">
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Titulo</label>
    <div class="col-lg-10">
      <input type="text" required class="form-control" name="title" value="<?php echo $cat->title;?>" placeholder="Titulo de la Imagen">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Descripcion</label>
    <div class="col-lg-10">
      <textarea class="form-control" name="description" placeholder="Descripcion de la Imagen"><?php echo $cat->description;?></textarea>
    </div>
  </div>


  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
    <input type="hidden" name="product_id" value="<?php echo $cat->product_id; ?>">
    <input type="hidden" name="id" value="<?php echo $cat->id; ?>">
      <button type="submit" class="btn btn-block btn-success">Actualizar Imagen</button>
    </div>
  </div>
</form>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

                        <a href="index.php?action=prodimgs&opt=del&id=<?php echo $cat->id; ?>&product_id=<?php echo $cat->product_id; ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a> 
                        </td>
                        </tr>
<?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                <?php else:?>
                  <div class="panel-body">
                  <p class="alert alert-warning">No hay Imagenes</p>
                  </div>
 <?php endif; ?>
                </div>
              </div>
            </div>

          </div>
