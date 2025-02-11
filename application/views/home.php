<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style.css'); ?>">
</head>
<body>
    <header class="header">
    <button ><a href="<?php echo site_url('dashboard/create'); ?>" class="add">Create Ticket</a></button>
    <button class="logout"><a href="<?php echo site_url('auth/logout'); ?>" class="logout">Logout</a></button>
    <h1 class="h">Helpdesk 2.0</h1> 
</header>
<h2>Welcome, <?php echo $this->session->userdata('user'); ?></h2>
<div>
    <table class="table">
        <thead class="thead">
        <tr class="tr">
            <th>S.No</th>
            <th>Ticket</th>
            <th>View Details</th>
            <th>Status</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        
        <tbody class="tbody">
        <?php if (!empty($tickets)): ?> 
        <?php foreach ($tickets as $index => $ticket): ?>
            <tr class="tr">
            <?php if (isset($ticket->id)): ?>
            <td class="td"><?php echo $ticket->id; ?></td>
            <td class="td"><?php echo $ticket->Ticket; ?></td>
            <td class="td"><a href="<?php echo site_url('dashboard/details/'.$ticket->id); ?>">Details</a></td>
            <td class="td"><?php echo $ticket->Status; ?></td>
            <td class="td"> <a href="<?php echo site_url('dashboard/edit/'.$ticket->id); ?>">Update</a></td>
            <td class="td"> <a href="<?php echo site_url('dashboard/delete/'.$ticket->id); ?>">Delete</a> </td>
            <?php else: ?>
                    <span>No ID Found</span>
                <?php endif; ?>
            </td>
        </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="5">No tickets found.</td>
        </tr>
    <?php endif; ?>
       
    </table>
    </div>
</body>
</html>
