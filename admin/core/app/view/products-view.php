        <!-- Main Content -->

          <div class="row">
            <div class="col-md-12">
  <!-- Button trigger modal -->


            <h2>Proyectos</h2>
                  <a  href="index.php?view=newproduct" class="btn btn-default">Agregar Proyecto</a>
                  <br><br>
            </div>
            </div>

          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <i class="fa fa-th-list"></i> Proyectos
                </div>
                <div class="widget-body medium no-padding">
<?php
$categories = ProductData::getAll();
 if(count($categories)>0):?>
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <tbody>
<thead>
  <th>Codigo</th>
  <th>Nombre</th>
  <th>Categoria</th>
  <th>Visible</th>
  <th>Destacado</th>
  <th></th>
</thead>
<?php foreach($categories as $cat):?>
                        <tr>
                        <td><?php echo $cat->code; ?></td>
                        <td><?php echo $cat->name; ?></td>
                        <td><?php echo CategoryData::getById($cat->category_id)->name; ?></td>
                        <td style="width:90px;"><center><?php if($cat->is_public):?><i class="fa fa-check"></i><?php else: ?><i class="fa fa-remove"></i><?php endif; ?></center> </td>
                        <td style="width:90px;"><center><?php if($cat->is_featured):?><i class="fa fa-check"></i><?php else: ?><i class="fa fa-remove"></i><?php endif; ?></center> </td>
                        <td style="width:185px;">
                        <a href="../index.php?view=producto&product_id=<?php echo $cat->id; ?>" target="_blank" class="btn btn-default btn-xs"><i class="fa fa-link"></i></a> 
                        <a href="index.php?view=editproduct&product_id=<?php echo $cat->id; ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a> 
                        <a href="index.php?action=delproduct&product_id=<?php echo $cat->id; ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a> 
                        </td>
                        </tr>
<?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
<?php else:?>
  <div class="panel-body">
  <p class="alert alert-warning">No hay Proyectos, puedes empezar agregando tu lista de Proyectos.</p>
  </div>
 <?php endif; ?>

                </div>
              </div>
            </div>

          </div>
