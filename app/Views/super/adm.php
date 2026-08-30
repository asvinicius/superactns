 <main class="main">
   <div class="main-content page-users">
     <div class="page-users users-lab">
       <div class="users-lab-hero mb-3">
         <div>
           <h1 class="page-title mb-1">Administradores</h1>
           <p class="users-page-subtitle">Gerenciamento de administradores do sistema.</p>
         </div>
         <div class="page-header-actions">
           <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addUserModal">
             <i class="bi bi-plus-lg me-1"></i> Novo usuário
           </button>
         </div>
       </div>
        <?php if (isset($alert) && in_array($alert['class'], ['success', 'primary'])) { ?>
          <div class="alert alert-<?= esc($alert['class']) ?>" role="alert">
            <?= esc($alert['message']) ?>
          </div>
        <?php } ?>
       <div class="row g-3">
         <div class="col-xl-8">
           <div class="card users-list-card">
             <div class="table-responsive users-table-wrap">
                <table class="table table-hover align-middle mb-0">
                  <?php if (isset($adms) && $adms == true) { ?>
                    <thead>
                      <tr>
                        <th>Usuário</th> <!-- Imagem generica, status (bolinha verde ou cinza), nome, login -->
                        <th>Criação</th>
                        <th>Atualização</th>
                        <th>Ultima atividade</th>
                        <th class="users-th-actions">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($adms as $adm_item) { ?>
                        <?php if ($adm_item['adm_status']) { ?>
                          <?php $admstatus = "online" ?>
                        <?php } else { ?>
                          <?php $admstatus = "offline" ?>
                        <?php } ?>
                        <tr>
                          <td>
                            <div class="users-user">
                                <div class="users-avatar-wrap"><img src="assets/img/avatars/avatar-1.webp" alt="" class="users-avatar">
                                  <span class="users-avatar-status <?= esc($admstatus) ?>" title="Ativo"></span>
                                </div>
                              <div class="users-user-info"><a href="users-view.html" class="users-user-name"><?= esc($adm_item['adm_name']) ?></a>
                                <span class="users-user-email"><?= esc($adm_item['adm_login']) ?></span>
                              </div>
                            </div>
                          </td>
                          <td class="users-meta"><?= esc(date('d/m/y', strtotime($adm_item['adm_created_at']))) ?></td>
                          <td class="users-meta"><?= esc(isset($adm_item['adm_updated_at']) ? date('d/m/y', strtotime($adm_item['adm_updeated_at'])) : '—') ?></td>
                          <td class="users-meta"><?= esc(isset($adm_item['adm_last_login']) ? date('d/m/y', strtotime($adm_item['adm_last_login'])) : '—') ?></td>
                          <td>
                            <div class="users-actions">
                              <a href="users-view.html" class="users-action-btn" title="View"><i class="bi bi-eye"></i></a>
                              <a href="users-edit.html" class="users-action-btn" title="Edit"><i class="bi bi-pencil"></i></a>
                              <a href="users-edit.html" class="users-action-btn" title="Edit"><i class="bi bi-trash"></i></a>
                            </div>
                          </td>
                        </tr>
                      <?php } ?>
                    </tbody>
                  <?php } else { ?>
                    <thead>
                      <tr>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <h4>Nenhum administrador registrado</h4>
                        </td>
                      </tr>
                    </tbody>
                  <?php } ?>
                </table>
             </div>
           </div>
        </div>
        <div class="col-xl-4">
            <div class="card users-lab-card">
              <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">Bancos</h5>
                <a href="<?= base_url('bank') ?>" class="users-lab-link">Gerenciar</a>
              </div>
              <div class="card-body">
                <?php if (isset($bank)) { ?>
                  <?php foreach ($bank as $bank_item) { ?>
                    <div class="users-lab-recent-item">
                      <img src="<?= esc(api_asset($bank_item['bank_logo'])) ?>" alt="">
                      <div>
                        <strong><?= esc($bank_item['bank_name']) ?></strong>
                        <span>
                          <?php if ($bank_item['bank_status']) { ?>
                              Ativo
                          <?php } else { ?>
                              Inativo
                          <?php } ?>
                        </span>
                      </div>
                    </div>
                  <?php } ?>
                <?php } else { ?>
                  <h5>Nenhum banco registrado</h5>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="addUserModal" tabindex="-1" data-reopen="<?= isset($alert) && $alert['class'] === 'danger' ? 'true' : 'false' ?>">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Novo administrador</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>
            <div class="modal-body">
              <form class="fauth-form" id="admForm" method="post" action="<?= base_url('adm/create') ?>">
                <?php if (isset($alert) && $alert['class'] === 'danger') { ?>
                  <div class="alert alert-<?= esc($alert['class']) ?>" role="alert">
                    <?= esc($alert['message']) ?>
                  </div>
                <?php } ?>
                <div class="row g-3">
                  <div class="col-sm-12">
                    <label for="adm_name" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="adm_name" name="adm_name" placeholder="Nome" minlength="3" required>
                  </div>
                  <div class="col-sm-12">
                    <label for="adm_login" class="form-label">Login</label>
                    <input type="text" class="form-control" id="adm_login" name="adm_login" placeholder="Login" minlength="3" required>
                  </div>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="submit" form="admForm" class="btn btn-primary">Salvar</button>
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>