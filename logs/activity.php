<?php
session_start();
$activities = [
    ['time' => date('Y-m-d H:i'), 'user' => 'Admin', 'action' => 'Created SEO project'],
    ['time' => date('Y-m-d H:i', time() - 3600), 'user' => 'Client', 'action' => 'Viewed dashboard'],
    ['time' => date('Y-m-d H:i', time() - 7200), 'user' => 'System', 'action' => 'Generated report']
];
?><!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Activity Logs</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-4">
  <div class="card shadow-sm">
    <div class="card-header bg-white"><h1 class="h5 mb-0">Activity Logs</h1></div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-striped align-middle mb-0">
          <thead><tr><th>Time</th><th>User</th><th>Action</th></tr></thead>
          <tbody>
          <?php foreach ($activities as $row): ?>
            <tr>
              <td><?= htmlspecialchars($row['time']) ?></td>
              <td><?= htmlspecialchars($row['user']) ?></td>
              <td><?= htmlspecialchars($row['action']) ?></td>
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
