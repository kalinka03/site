<form method="post" action="">
    <div class="container table-responsive">
        <table class="table table-bordered table-striped table-hover table-condensed">
            <tr class="text-center">
                <td>id</td>
                <td>Name</td>
                <td>Role</td>
                <td>Password</td>
                <td>Login</td>
                <td>last activity</td>
                <td>Update</td>
                <td>Delete</td>

            </tr>
<!-- <?php
if($data){
    foreach ($data as $key => $value) {
        echo "<tr class='text-center'>";
        echo "<td>".$value['id']."</td>";
        echo "<td>".$value['name']."</td>";
        echo "<td>".$value['role']."</td>";
        echo "<td>".$value['password']."</td>";
        echo "<td>".$value['login']."</td>";
        echo "<td>".$value['last_activity']."</td>";
        echo "<td><a href=/admin/users?delete=".$value['id'].">delete</a>";
        echo "<td><a href=/admin/users?update=".$value['id'].">update</a>";
        echo "<tr>";
    }
} -->