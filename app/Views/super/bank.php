 <?php $alert = session()->getFlashdata('alert'); ?>
 <main class="main">
     <div class="main-content page-users">
         <div class="page-users users-lab">
             <div class="users-lab-hero mb-3">
                 <div>
                     <h1 class="page-title mb-1">Bancos</h1>
                     <p class="users-page-subtitle">Contas de bancos para uso dos Administradores.</p>
                 </div>
                 <div class="page-header-actions">
                     <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addUserModal">
                         <i class="bi bi-plus-lg me-1"></i> Novo banco
                     </button>
                 </div>
             </div>
             <?php if (isset($alert) && in_array($alert['class'], ['success', 'primary'])) { ?>
                 <div class="alert alert-<?= esc($alert['class']) ?>" role="alert">
                     <?= esc($alert['message']) ?>
                 </div>
             <?php } ?>
             <div class="row g-3">
                 <div class="col-xl-12">
                     <div class="card users-list-card">
                         <div class="table-responsive users-table-wrap">
                             <table class="table table-hover align-middle mb-0">
                                 <thead>
                                     <tr>
                                         <th>Banco</th>
                                         <th>Status</th>
                                         <th class="users-th-actions">Actions</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php if (isset($bank)) { ?>
                                         <?php foreach ($bank as $bank_item) { ?>
                                             <tr>
                                                 <td>
                                                     <div class="users-user">
                                                         <div class="users-avatar-wrap"><img src="<?= esc(api_asset($bank_item['bank_logo'])) ?>" alt="" class="users-avatar"></div>
                                                         <div class="users-user-info"><?= esc($bank_item['bank_name']) ?></div>
                                                     </div>
                                                 </td>
                                                 <td><span class="users-status <?php if ($bank_item['bank_status']) {
                                                                                    echo "active";
                                                                                } else {
                                                                                    echo "inactive";
                                                                                } ?>"><span class="users-status-dot">

                                                                                </span> <?php if ($bank_item['bank_status']) {
                                                                                            echo "Ativo";
                                                                                        } else {
                                                                                            echo "Inativo";
                                                                                        } ?></span></td>
                                                 <td>
                                                     <div class="users-actions">
                                                        <button data-bs-toggle="modal" title="Editar" data-bs-target="#updateUserModal" 
                                                                data-id="<?= esc($bank_item['bank_id']) ?>"
                                                                data-name="<?= esc($bank_item['bank_name']) ?>"
                                                                data-status="<?= esc($bank_item['bank_status'] ? '1' : '0') ?>">
                                                            <i class="bi bi-pencil"></i>
                                                        </button>
                                                        <a href="<?= base_url('bank/remove/'.esc($bank_item['bank_id'])) ?>" class="users-action-btn" title="Remover"><i class="bi bi-trash" onclick="return confirm('Confirma a remoção do banco?');"></i></a>
                                                     </div>
                                                 </td>
                                             </tr>
                                         <?php } ?>
                                     <?php } ?>

                                 </tbody>
                             </table>
                         </div>
                     </div>
                 </div>
             </div>

             <div class="modal fade" id="addUserModal" tabindex="-1" data-reopen="<?= isset($alert) && $alert['class'] === 'danger' ? 'true' : 'false' ?>">
                 <div class="modal-dialog">
                     <div class="modal-content">
                         <div class="modal-header">
                             <h5 class="modal-title">Novo banco</h5>
                             <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                         </div>
                         <div class="modal-body">
                             <form class="fauth-form" id="bankForm" method="post" action="<?= base_url('bank/create') ?>" enctype="multipart/form-data" novalidate>
                                 <?php if (isset($alert) && $alert['class'] === 'danger') { ?>
                                     <div class="alert alert-<?= esc($alert['class']) ?>" role="alert">
                                         <?= esc($alert['message']) ?>
                                     </div>
                                 <?php } ?>
                                 <div class="row g-3">
                                     <div class="col-sm-12">
                                         <label for="bank_name" class="form-label">Nome</label>
                                         <input type="text" class="form-control" id="bank_name" name="bank_name" placeholder="Nome" required>
                                     </div>
                                     <div class="col-sm-12">
                                         <label for="bank_logo" class="form-label">Logo</label>
                                         <input class="form-control" type="file" id="bank_logo" name="bank_logo">
                                     </div>
                                 </div>
                             </form>
                         </div>
                         <div class="modal-footer">
                             <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                             <button type="submit" form="bankForm" class="btn btn-primary">Salvar</button>
                         </div>
                     </div>
                 </div>
             </div>

             <div class="modal fade" id="updateUserModal" tabindex="-1">
                 <div class="modal-dialog">
                     <div class="modal-content">
                         <div class="modal-header">
                             <h5 class="modal-title">Editar banco</h5>
                             <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                         </div>
                         <div class="modal-body">
                             <form class="fauth-form" id="updateBankForm" method="post" action="<?= base_url('bank/update') ?>" enctype="multipart/form-data" novalidate>
                                 <?php if (isset($alert) && $alert['class'] === 'danger') { ?>
                                     <div class="alert alert-<?= esc($alert['class']) ?>" role="alert">
                                         <?= esc($alert['message']) ?>
                                     </div>
                                 <?php } ?>
                                 <input type="hidden" name="edit_bank_id" id="edit_bank_id">
                                 <div class="row g-3">
                                     <div class="col-sm-12">
                                         <label for="edit_bank_name" class="form-label">Nome</label>
                                         <input type="text" class="form-control" id="edit_bank_name" name="edit_bank_name" placeholder="Nome" required>
                                     </div>
                                     <div class="col-sm-12">
                                         <label for="edit_bank_logo" class="form-label">Logo</label>
                                         <input class="form-control" type="file" id="edit_bank_logo" name="edit_bank_logo">
                                     </div>
                                 </div>
                             </form>
                         </div>
                         <div class="modal-footer">
                             <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                             <button type="submit" form="updateBankForm" class="btn btn-primary">Salvar</button>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>