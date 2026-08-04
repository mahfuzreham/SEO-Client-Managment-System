<?php
session_start();
$stats = [
    'clients' => 12,
    'projects' => 18,
    'keywords' => 64,
    'backlinks' => 142,
];
$recentActivities = [
    ['Client login', 'today', 'Client dashboard opened'],
    ['SEO report', 'yesterday', 'Monthly report generated'],
    ['Backlink update', '2 days ago', 'Off-page progress logged'],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body class="bg-light">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">SEO Client Management</a>
    </div>
</nav>

<div class="container py-4">
    <div class="row g-3 mb-4">
        <div class="col-md-3"><div class="card shadow-sm"><div class="card-body"><div class="text-muted">Total Clients</div><h3><?= $stats['clients'] ?></h3></div></div></div>
        <div class="col-md-3"><div class="card shadow-sm"><div class="card-body"><div class="text-muted">Projects</div><h3><?= $stats['projects'] ?></h3></div></div></div>
        <div class="col-md-3"><div class="card shadow-sm"><div class="card-body"><div class="text-muted">Keywords</div><h3><?= $stats['keywords'] ?></h3></div></div></div>
        <div class="col-md-3"><div class="card shadow-sm"><div class="card-body"><div class="text-muted">Backlinks</div><h3><?= $stats['backlinks'] ?></h3></div></div></div>
    </div>

    <div class="row g-4">
        <div class="col-lg-8">
            <div class="card shadow-sm">
                <div class="card-header bg-white"><strong>Quick Overview</strong></div>
                <div class="card-body">
                    <div class="mb-3">
                        <div class="d-flex justify-content-between"><span>On-Page SEO</span><span>82%</span></div>
                        <div class="progress"><div class="progress-bar" style="width:82%"></div></div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex justify-content-between"><span>Off-Page SEO</span><span>67%</span></div>
                        <div class="progress"><div class="progress-bar bg-success" style="width:67%"></div></div>
                    </div>
                    <div class="mb-0">
                        <div class="d-flex justify-content-between"><span>Reporting</span><span>91%</span></div>
                        <div class="progress"><div class="progress-bar bg-info" style="width:91%"></div></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card shadow-sm h-100">
                <div class="card-header bg-white"><strong>Recent Activity</strong></div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <?php foreach ($recentActivities as $activity): ?>
                            <li class="list-group-item px-0">
                                <div class="fw-semibold"><?= htmlspecialchars($activity[0]) ?></div>
                                <div class="small text-muted"><?= htmlspecialchars($activity[1]) ?> · <?= htmlspecialchars($activity[2]) ?></div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>