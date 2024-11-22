<?php
if($_SERVER['REQUEST_METHOD']==='POST'){
$fname=$_POST['fname'] ?? 'N/A';
$sname=$_POST['sname']?? 'N/A';
$gender = isset($_POST['male']) ? 'Male' : (isset($_POST['female']) ? 'Female' : 'N/A');
$company=$_POST['company'] ?? 'N/A';
$email=$_POST['email'] ?? 'N/A';
$contact=$_POST['contact'] ?? 'N/A';
$password=$_POST['password'] ?? 'N/A';
$team_size=$_POST['teamsize'] ?? 'N/A';
$time=$_POST['time'] ?? '00:00';
$txt=$_POST['txt'] ?? 'N/A';
$file=$_FILES['file']['name'] ?? 'N/A';
$range=$_POST['range'] ?? 'N/A';
$color=$_POST['color'] ?? '#ffffff';
$masked_password = str_repeat('*', strlen($password));
echo "<table border='1'>
            <tr>
                <th>Field</th>
                <th>Value</th>
            </tr>
            <tr>
                <td>First Name</td>
                <td>$fname</td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td>$sname</td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>$gender</td>
            </tr>
            <tr>
                <td>Company</td>
                <td>$company</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>$email</td>
            </tr>
            <tr>
                <td>Contact Phone</td>
                <td>$contact</td>
            </tr>
            <tr>
                <td>Password</td>
                <td>$masked_password</td>
            </tr>
             <tr>
                <td>Account  file</td>
                <td>$file</td>
            </tr>
             <tr>
                <td>Chosen range</td>
                <td>$range</td>
            </tr>
             <tr>
                <td>color</td>
                <td>$color</td>
            </tr>
            <tr>
                <td>Team Size</td>
                <td>$team_size</td>
            </tr>
            <tr>
                <td>Visit Time</td>
                <td>$time</td>
            </tr>
            <tr>
                <td>Account Description</td>
                <td>$txt</td>
            </tr>
           
        </table>";





}
?>