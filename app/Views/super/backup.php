<!-- Main Content -->
<main class="main">
    <div class="main-content page-dashboard">
        <div class="page-dashboard nd-dashboard">
            <section class="nd-topbar">
                <div>
                    <h1 class="nd-title">Backup</h1>
                </div>
            </section>

            <section class="row g-3 mb-3">
                <div class="col-xl-12">
                    <div class="card mb-3">
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table align-middle mb-0 nd-transaction-table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Arquivo</th>
                                            <th>Tamanho</th>
                                            <th>Trigger</th>
                                            <th>Data</th>
                                            <th>Status</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(isset($backup)) { ?>
                                            <?php foreach($backup as $bkp_item) { ?>
                                                <tr>
                                                    <td><?= $bkp_item['backup_id']; ?></td>
                                                    <td><?= $bkp_item['backup_file']; ?></td>
                                                    <td><?= $bkp_item['backup_size']; ?></td>
                                                    <td><?= $bkp_item['backup_trigger']; ?></td>
                                                    <td><?= date('d/m/Y', strtotime($bkp_item['backup_created_at'])) ?></td>
                                                    <td>
                                                        <?php 
                                                            if($bkp_item['backup_status'] == "success"){
                                                                $badge = "success";
                                                            } else {
                                                                $badge = "danger";
                                                            }
                                                        ?>
                                                        <span class="badge bg-<?= $badge ?>-light text-<?= $badge ?>">
                                                            <?= $bkp_item['backup_status']; ?>
                                                        </span>
                                                    </td>                                            
                                                    <td>Ações</td>
                                                </tr>
                                            <?php } ?>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>