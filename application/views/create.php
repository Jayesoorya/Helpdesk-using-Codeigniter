<!DOCTYPE html>
<html>
<head>
    <title>Create Ticket</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style.css'); ?>">
</head>
<body>
    <div class ="form">
    <h2>Create New Ticket</h2>
    <form method="post" action="<?php echo site_url('dashboard/store'); ?>">
        <label>Ticket:</label>
        <input type="text" name="Ticket" required><br>
        <label>Description:</label>
        <textarea name="description" ></textarea><br>
        <label>Status:</label>
        <select name="status">
            <option value="Open">Open</option>
            <option value="In Progress">In Progress</option>
            <option value="Closed">Closed</option>
        </select><br>
        <button type="submit">Create Ticket</button>
    </form>
    <a href="<?php echo site_url('dashboard'); ?>">Back to Dashboard</a>
</div>
</body>
</html>
