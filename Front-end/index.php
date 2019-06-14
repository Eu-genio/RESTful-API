
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="Style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <title>Resful Api CRUD</title>
</head>
</html>

<table class ="Library" align = "center">

<thead>

<tr>
<th>ID</th>
<th>Name</th>
<th>Date</th>
<th>URL</th>
<th>Description</th>
<th>Operations</th>
</tr>
</thead>

<tbody>

<tr>
  <form id='formPost' method='POST'>
    <td><input id = 'id' type="number" placeholder="ID"></td>
    <td><input id = 'name' type = 'text' placeholder='Name'></td>
    <td><input id = 'date' type = 'text' placeholder='yyyy-mm-dd'></td>
    <td><input id = 'url' type = 'text' placeholder='URL'></td>
    <td><input id = 'desc' type = 'text' placeholder='Description'></td>
    <td><button name = 'POST' type = "submit" name = 'POST'>Post</button></td>
  </form>
</tr>

<tr>
  <form id='formPut' method='POST'>
    <td><input if = 'id' type="text" placeholder="ID"></td>
    <td><input id = 'name' type = 'text' placeholder='Name'></td>
    <td><input id = 'date' type = 'text' placeholder='yyyy-mm-dd'></td>
    <td><input id = 'url' type = 'text' placeholder='URL'></td>
    <td><input id = 'desc' type = 'text' placeholder='Description'></td>
    <td><button type = "submit" name = 'PUT'>Put</button></td>
  </form>
</tr>

<tr>
  <form id='formDelete' method='POST'>
    <td><input id = 'id' type="text" placeholder="ID"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td><button type = "submit" name = 'DELETE'>Delete</button></td>
  </form>
</tr>

<tr>
  <form id='formShow' method='POST'>
    <td><input id = 'id' type="text" placeholder="ID"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td><button type = "submit" name = 'GET'>Get</button></td>
  </form>
</tr>

</tbody>



<script type="text/javascript" src = 'fetch.js'>
 
</script>