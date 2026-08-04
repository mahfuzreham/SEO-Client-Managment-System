<?php
session_start();
$pages = [
    ['page' => '/','clicks' => 120,'impressions' => 3400,'ctr' => '3.5%','position' => 12.4],
    ['page' => '/services','clicks' => 74,'impressions' => 1800,'ctr' => '4.1%','position' => 9.8],
    ['page' => '/contact','clicks' => 21,'impressions' => 620,'ctr' => '3.4%','position' => 14.2],
];
?><!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Search Console Integration</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-4">
  <div class="card shadow-sm">
    <div class="card-header bg-white"><h1 class="h5 mb-0">Google Search Console</h1></div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered align-middle mb-0">
          <thead><tr><th>Page</th><th>Clicks</th><th>Impressions</th><th>CTR</th><th>Avg. Position</th></tr></thead>
          <tbody>
          <?php foreach ($pages as $row): ?>
            <tr>
              <td><?= htmlspecialchars($row['page']) ?></td>
              <td><?= htmlspecialchars((string)$row['clicks']) ?></td>
              <td><?= htmlspecialchars((string)$row['impressions']) ?></td>
              <td><?= htmlspecialchars($row['ctr']) ?></td>
              <td><?= htmlspecialchars((string)$row['position']) ?></td>
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
