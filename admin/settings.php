<?php
$pageTitle = 'Settings';
include __DIR__ . '/../includes/header.php';
?>
<div class="row">
    <div class="col-12">
        <div class="card shadow-sm">
            <div class="card-body">
                <h1 class="h4 mb-3">System Settings</h1>
                <form>
                    <div class="mb-3">
                        <label class="form-label">Company Name</label>
                        <input type="text" class="form-control" value="SEO Client Management System">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Telegram Bot Token</label>
                        <input type="text" class="form-control" placeholder="Enter bot token">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Default Package Duration</label>
                        <select class="form-select">
                            <option>3 Months</option>
                            <option>6 Months</option>
                            <option>12 Months</option>
                            <option>Custom</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Save Settings</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include __DIR__ . '/../includes/footer.php'; ?>
