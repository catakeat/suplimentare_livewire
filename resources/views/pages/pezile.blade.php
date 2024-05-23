<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ore suplimentare, UPT</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap 5 CSS -->
      
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
        <link rel="stylesheet" href="{{asset('css/main.css') }} ">  
<body>
<div>
    <?php

    $table = "<table style=\"width:100%\"  class=\"table table-bordered table-striped table-hover\"   ><thead><th>Expediaza</th><th>Destinatar</th><th>Ora</th><th>Data</th><th>Mesaj</th><th>Data postarii</th><th>Status</th></thead>";
    echo $table;
?>


    @foreach($users as $user)
    <tr>
        <td><?php  $username = App\Classes\Helpers::getUsernameById($user->sender); echo $username[0]->username; ?></td>
        <td>{{ $user->username }} </td>
        <td>{{ $user->ora }} </td>
        <td>{{ $user->data }} </td>
        <td>{{ $user->mesaj }} </td>
        <td>{{ $user->data_postarii }} </td>
        <td>{{ $user->approval }} </td>
    </tr>
    @endforeach

</table>
</div>

</body>
</html>