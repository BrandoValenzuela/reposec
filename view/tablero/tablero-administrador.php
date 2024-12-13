<div class="main-content container mt-4">
    <div class="row">
        <div class="col">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="periodos" data-bs-toggle="tab" data-bs-target="#periodos-pane" type="button" role="tab" aria-controls="periodos-pane" aria-selected="true">Periodos</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="docentes-tab" data-bs-toggle="tab" data-bs-target="#docentes-tab-pane" type="button" role="tab" aria-controls="docentes-tab-pane" aria-selected="false">Docentes</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="reportes-tab" data-bs-toggle="tab" data-bs-target="#reportes-tab-pane" type="button" role="tab" aria-controls="reportes-tab-pane" aria-selected="false">Reportes</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="periodos-pane" role="tabpanel" aria-labelledby="periodos" tabindex="0">...</div>
                <div class="tab-pane fade p-4" id="docentes-tab-pane" role="tabpanel" aria-labelledby="docentes-tab" tabindex="0">
                    <!-- Tabla de Carga de Trabajo -->
                     <h3>Carga de trabajo</h3>
                    <table class="table table-striped table-sm">
                        <thead class="table-dark">
                            <tr>
                                <th>#</th>
                                <th>Materia</th>
                                <th>Docente</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                        <?php $i=1; foreach ($listaMaterias as $materia): ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $materia->Nombre." ".$materia->Apellidos; ?></td>
                                <td><?= $materia->NombreMateria; ?></td>
                            </tr>
                        <?php $i++; endforeach;?>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="reportes-tab-pane" role="tabpanel" aria-labelledby="reportes-tab" tabindex="0">...</div>
            </div>
        </div>
    </div>
</div>