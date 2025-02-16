<!DOCTYPE html>
<html>
<head>
    <title>Ticket Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body >
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<div class="card">
    <div class="card-body">
    <table>
        <thead>
        <tbody>
    <h2>Ticket Details</h2>
    <tr>
    <th >Ticket ID: </th>
    <td><?php echo $ticket->id; ?></td>
</tr>
<tr>
<th >Ticket: </th>
   <td> <?php echo $ticket->Ticket; ?></td>
</tr>
<tr>
<th >Description:</th>
    <td> <?php echo $ticket->Description; ?></td>
</tr>
<tr>
<th >Created On:</th>
   <td><?php echo $ticket->Created_On; ?></td>
</tr>
<tr>
<th >Status:</th>
   <td><?php echo $ticket->Status; ?></td>
</tr>
<tr>
    <td><a class=" btn btn-secondary" href="<?php echo site_url('dashboard'); ?>">Back to Dashboard</a></td>
</tr>
</tbody>
</body>
</html>
