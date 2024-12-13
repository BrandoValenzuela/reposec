<div class="container mt-4 mb-5">
    <div class="row">
    <h2 class="m-2">Alumnos <?= $salon->NombreSalon. " - ".$nombreMateria; ?></h2>
    <hr>
    <table class="table table-striped table-sm">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Matricula</th>  
                <th></th>  
            </tr>
        </thead>
        <tbody class="table-group-divider">
        <?php $i=1; foreach ($listaAlumnos as $alumno): ?>
            <tr>
                <td class="align-middle"><?= $i; ?></td>
                <td class="align-middle"><?= $alumno->NombreAlumno; ?></td>
                <td class="align-middle"><?= $alumno->Apellidos; ?></td>
                <td class="align-middle"><?= $alumno->Matricula; ?></td>
                <td class="align-middle"><a href="?c=Alumno&idAlumno=<?= $alumno->IdAlumno; ?>" class="btn btn-primary btn-sm">Ver Alumno</a></td>
            </tr>
        <?php $i++; endforeach;?>
        </tbody>
    </table>
    </div>
</div>