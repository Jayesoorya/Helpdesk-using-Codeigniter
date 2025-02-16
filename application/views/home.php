<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <div class="text-right mt-4">
    <button class="btn btn-info"><a class="text-white text-decoration-none" href="<?php echo site_url('dashboard/create'); ?>" >Create Ticket</a></button>
    <button class="btn btn-info"><a class="text-white text-decoration-none" href="<?php echo site_url('auth/logout'); ?>" >Logout</a></button>
</div>
    <h1>Helpdesk 2.0</h1>
    <h2 class="mt-4">Welcome, <?php echo $this->session->userdata('user'); ?></h2>
    <div class="table-responsive">
    <table class="table table-bordered table-hover mt-5 " >
        <thead class="thead-dark">
        <tr>
            <th>S.No</th>
            <th>Ticket</th>
            <th>View Details</th>
            <th>Status</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        
        <tbody>
        <?php  $id=1; ?>
        <?php if (!empty($tickets)): ?> 
        <?php foreach ($tickets as $index => $ticket): ?>
            <tr>
            <?php if (isset($ticket->id)): ?>
            <td ><?php echo $id++; ?></td>
            <td ><?php echo $ticket->Ticket; ?></td>
            <td ><a class="btn btn-info" href="<?php echo site_url('dashboard/details/'.$ticket->id); ?>">Details</a></td>
            <td ><?php echo $ticket->Status; ?></td>
            <td ><a class=" btn btn-success" href="<?php echo site_url('dashboard/edit/'.$ticket->id); ?>">Update</a></td>
            <td ><a class="btn btn-danger" href="<?php echo site_url('dashboard/delete/'.$ticket->id); ?>">Delete</a> </td>
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
    </div>
</body>
</html>
