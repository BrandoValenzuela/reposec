<div class="row mx-2">
    <div class="col-12">
        <h3 class="p-2">Mis clases impartidas</h3>
    </div>
    <hr>
    <?php $i=1; foreach ($listaMaterias as $materia): ?>
        <div class="col-md-4 mb-2">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title"><?= $materia->NombreMateria; ?>
                    </h5>
                </div>
                <div class="card-body">
                    <h5 class="card-text"><?= $materia->NombreSalon; ?></h5>
                </div>
                <div class="card-body text-end">
                    <a href="#" class="btn  btn-link">Nuevo reporte</a>
                    <a href="?c=Salon&idSalon=<?= $materia->IdSalon; ?>&materia=<?= $materia->NombreMateria;?>" class="btn btn-primary">Ver Alumnos</a>
                </div>
            </div>
        </div>
    <?php $i++; endforeach;?>
</div>