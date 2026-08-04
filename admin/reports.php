<?php
$pageTitle = 'Reports';
include __DIR__ . '/../includes/header.php';
?>
<div class="row">
    <div class="col-12 mb-3">
        <div class="card shadow-sm">
            <div class="card-body">
                <h1 class="h4 mb-3">Monthly SEO Reports</h1>
                <div class="table-responsive">
                    <table class="table table-bordered align-middle">
                        <thead>
                        <tr>
                            <th>Client</th>
                            <th>Project</th>
                            <th>Period</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Demo Client</td>
                            <td>example.com</td>
                            <td>Aug 2026</td>
                            <td><span class="badge bg-success">Generated</span></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include __DIR__ . '/../includes/footer.php'; ?>
