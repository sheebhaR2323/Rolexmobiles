<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Invoice</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>
    <h1>Create Invoice</h1>
    <form action="<?= site_url('billing/create') ?>" method="post">
        <label for="customer_name">Customer Name</label>
        <input type="text" name="customer_name" id="customer_name" required>
        <label for="amount">Amount</label>
        <input type="number" name="amount" id="amount" required>
        <button type="submit">Create</button>
    </form>
</body>
</html>
