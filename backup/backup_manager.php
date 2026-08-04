<?php
session_start();
$backups = [
    ['name' => 'backup-2026-08-04.sql', 'size' => '2.4 MB', 'date' => date('Y-m-d')],
    ['name' => 'backup-2026-08-03.sql', 'size' => '2.1 MB', 'date' => date('Y-m-d', time() - 86400)]
];
?><!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Backup Manager</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-4">
  <div class="card shadow-sm">
    <div class="card-header bg-white d-flex justify-content-between align-items-center">
      <h1 class="h5 mb-0">Backup Manager</h1>
      <button class="btn btn-sm btn-primary">Create Backup</button>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
          <thead><tr><th>File</th><th>Size</th><th>Date</th></tr></thead>
          <tbody>
          <?php foreach ($backups as $row): ?>
            <tr>
              <td><?= htmlspecialchars($row['name']) ?></td>
              <td><?= htmlspecialchars($row['size']) ?></td>
              <td><?= htmlspecialchars($row['date']) ?></td>
            </tr>
          <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</body>
</html>
