<div class="d-sm-flex align-items-center justify-content-between mt-4">
    <h1 class="h3 mb-0 text-gray-800">Médicaments</h1>
    <button class="btn btn-primary btn-sm add-medicament-btn" data-bs-toggle="modal" data-bs-target="#formModal">
        <i class="fas fa-plus me-1"></i> Ajouter un médicament
    </button>
</div>


<!-- Liste des Médicaments -->
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">Liste des médicaments</h6>
        <div class="dropdown">
            <button aria-label="Ouvrir le menu" class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button"
                id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-cog"></i>
            </button>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item export-excel" href="#"><i class="fas fa-file-excel me-2"></i>Exporter en
                        Excel</a></li>
                <li><a class="dropdown-item export-pdf" href="#"><i class="fas fa-file-pdf me-2"></i>Exporter en PDF</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="medicamentsTable" class="table table-striped table-bordered" style="width:100%">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Désignation</th>
                        <th>Description</th>
                        <th>Prix (FCFA)</th>
                        <th>Date d'ajout</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Les données seront chargées dynamiquement -->
                </tbody>
            </table>
        </div>
    </div>
</div>




<!-- Form Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title">Ajouter un médicament</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form name="form_edit" method="POST" action="#">
                    <p>
                        <label class="form-label fw-bold">
                            Entrez l'intitulé
                        </label>
                        <input type="text" name="intitule" id="intitule" required class="form-control" />
                    </p>

                    <p>
                        <label class="form-label fw-bold">
                            Description
                        </label>
                        <input type="text" name="intitule" id="intitule" required class="form-control" />
                    </p>

                    <p class="text-right">
                        <input type="reset" class="btn btn-danger" value="Effacer" data-bs-dismiss="modal" />
                        <input type="submit" class="btn btn-success" value="Enregistrer" />
                    </p>
                </form>
            </div>
            <div class="modal-footer">
                
            </div>
        </div>
    </div>
</div>