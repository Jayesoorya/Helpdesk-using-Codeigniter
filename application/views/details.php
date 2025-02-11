<!DOCTYPE html>
<html>
<head>
    <title>Ticket Details</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style.css'); ?>">
</head>
<body>
    <h2>Ticket Details</h2>
    <p><strong>Ticket id:</strong> <?php echo $ticket->id; ?></p>
    <p><strong>Ticket:</strong> <?php echo $ticket->Ticket; ?></p>
    <p><strong>Description:</strong> <?php echo $ticket->Description; ?></p>
    <p><strong>Created On:</strong> <?php echo $ticket->Created_On; ?></p>
    <p><strong>Status:</strong> <?php echo $ticket->Status; ?></p>
    <a href="<?php echo site_url('dashboard'); ?>">Back to Dashboard</a>
</body>
</html>
