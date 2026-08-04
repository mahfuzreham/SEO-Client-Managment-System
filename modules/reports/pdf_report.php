<?php
session_start();
$report = [
    'client' => 'Demo Client',
    'project' => 'SEO Growth Plan',
    'score' => 78,
    'keywords' => 25,
    'backlinks' => 142,
    'traffic' => '1.8K'
];
?><!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SEO PDF Report</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-white">
<div class="container py-5">
  <h1 class="h3 mb-3">SEO Report</h1>
  <p class="text-muted">Client: <?= htmlspecialchars($report['client']) ?></p>
  <div class="row g-3">
    <div class="col-md-3"><div class="border rounded p-3"><strong>Project</strong><br><?= htmlspecialchars($report['project']) ?></div></div>
    <div class="col-md-3"><div class="border rounded p-3"><strong>Score</strong><br><?= htmlspecialchars((string)$report['score']) ?>%</div></div>
    <div class="col-md-3"><div class="border rounded p-3"><strong>Keywords</strong><br><?= htmlspecialchars((string)$report['keywords']) ?></div></div>
    <div class="col-md-3"><div class="border rounded p-3"><strong>Backlinks</strong><br><?= htmlspecialchars((string)$report['backlinks']) ?></div></div>
  </div>
  <div class="mt-4">
    <p><strong>Organic traffic:</strong> <?= htmlspecialchars($report['traffic']) ?></p>
    <p>This page is ready to be connected with DomPDF or another PDF renderer.</p>
  </div>
</div>
</body>
</html>
