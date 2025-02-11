<!DOCTYPE html>
<html>
<head>
    <title>Update</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style.css'); ?>">
</head>
<body>
    <div class="form">
    <h2>Edit Ticket</h2>
    <form method="post" action="<?php echo site_url('dashboard/update/'.$ticket->id); ?>">
        <label>Ticket:</label>
        <input type="text" name="ticket" value="<?php echo $ticket->Ticket; ?>" required><br>
        <label>Description:</label>
        <textarea name="description" ><?php echo $ticket->Description; ?></textarea><br>
        <label>Status:</label>
        <select name="status">
            <option value="Open" <?php echo ($ticket->Status == 'Open') ? 'selected' : ''; ?>>Open</option>
            <option value="In Progress" <?php echo ($ticket->Status == 'In Progress') ? 'selected' : ''; ?>>In Progress</option>
            <option value="Closed" <?php echo ($ticket->Status == 'Closed') ? 'selected' : ''; ?>>Closed</option>
        </select><br>
        <button type="submit">Update Ticket</button>
    </form>
    <a href="<?php echo site_url('dashboard'); ?>">Back to Dashboard</a>
</div>
</body>
</html>
