<?php

$buys =  RatingData::getAll();
$coin = "";

?>
        <!-- Main Content -->

          <div class="row">
          <div class="col-md-12">
          <h1>Calificaciones</h1>
          </div>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <i class="fa fa-star"></i> Calificaciones
                </div>
                <div class="widget-body medium no-padding">

                  <div class="table-responsive">
<?php if(count($buys)>0):?>
                    <table class="table table-bordered">
                    <thead>
                      <th></th>
                      <th>Comentario</th>
                      <th>Cliente</th>
                      <th>Producto</th>
                      <th>Estado</th>
                      <th>Fecha</th>
                      <th></th>
                    </thead>
<?php foreach($buys as $b):
$discount=0;
?>
                        <tr>
                        <td>
                        <center>
                        <input type="hidden" value="<?php echo $b->rating; ?>" disabled class="rating">
                        </center>
                        </td>
                        <td><?php echo $b->comment; ?></td>
                        <td><?php echo $b->getClient()->getFullname(); ?></td>
                        <td><?php echo $b->getProduct()->name; ?></td>
                        <td>
                          <?php if($b->status_id==0):?>
                            <span class="label label-warning">Pendiente</span>
                          <?php elseif($b->status_id==1):?>
                            <span class="label label-success">Aprobado</span>
                          <?php elseif($b->status_id==2):?>
                            <span class="label label-danger">Rechazado</span>
                          <?php endif; ?>
                        </td>
                        <td><?php echo $b->created_at; ?></td>
                        <th>
                            <a href="./?action=ratings&opt=aprove&id=<?php echo $b->id;?>&status=5" class="btn btn-primary btn-xs"><i class="fa fa-check"></i></a>
                            <a href="./?action=ratings&opt=hide&id=<?php echo $b->id;?>&status=3" class="btn btn-danger btn-xs"><i class="fa fa-remove"></i></a>
                        </th>
                        </tr>
<?php endforeach; ?>
                    </table>
<?php else:?>
  <div class="panel-body">
  <h1>No hay calificaciones</h1>
  </div>
<?php endif; ?>
                  </div>
                </div>
              </div>
            </div>

          </div>
