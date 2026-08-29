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
                          <td class="users-meta"><?= esc(date('d/m/y', strtotime($adm_item['adm_updeated_at']))) ?></td>
                          <td class="users-meta"><?= esc(date('d/m/y', strtotime($adm_item['adm_last_login']))) ?></td>
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

       <div class="modal fade" id="addUserModal" tabindex="-1">
         <div class="modal-dialog">
           <div class="modal-content">
             <div class="modal-header">
               <h5 class="modal-title">Add New User</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
             </div>
             <div class="modal-body">
               <form>
                 <div class="row g-3">
                   <div class="col-sm-6">
                     <label class="form-label">First Name</label>
                     <input type="text" class="form-control" placeholder="Enter first name">
                   </div>
                   <div class="col-sm-6">
                     <label class="form-label">Last Name</label>
                     <input type="text" class="form-control" placeholder="Enter last name">
                   </div>
                   <div class="col-12">
                     <label class="form-label">Email Address</label>
                     <input type="email" class="form-control" placeholder="Enter email address">
                   </div>
                   <div class="col-12">
                     <label class="form-label">Role</label>
                     <select class="form-select">
                       <option value="">Select role...</option>
                       <option value="admin">Admin</option>
                       <option value="manager">Manager</option>
                       <option value="user">User</option>
                     </select>
                   </div>
                   <div class="col-sm-6">
                     <label class="form-label">Password</label>
                     <input type="password" class="form-control" placeholder="Enter password">
                   </div>
                   <div class="col-sm-6">
                     <label class="form-label">Confirm Password</label>
                     <input type="password" class="form-control" placeholder="Confirm password">
                   </div>
                   <div class="col-12">
                     <div class="form-check">
                       <input class="form-check-input" type="checkbox" id="sendInvite" checked>
                       <label class="form-check-label" for="sendInvite">Send welcome email with login details</label>
                     </div>
                   </div>
                 </div>
               </form>
             </div>
             <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
               <button type="button" class="btn btn-primary">Add User</button>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>