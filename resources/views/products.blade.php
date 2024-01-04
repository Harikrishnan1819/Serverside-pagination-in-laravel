<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <title>Pagination</title>
</head>
<body>
    
    <div class="container mt-5">
        <h2>Datatable with server side pagination</h2>
        <table class="table table-bordered table-striped" id="data-table">
            <thead>
                <tr>
                     <th>S.no</th>
                     <th>Name</th>
                     <th>Price</th>
                </tr>
            </thead>
        </table>

    </div>
<script type="text/javascript">
   let table = new DataTable('#data-table').DataTable({
    processing: true,
    serverside: true,
    ajax: "table",
    columns: [
        {data: 'id', name: 'id'},
        {data: 'name', name: 'name'},
        {data: 'price', name: 'price'},
    ]
   });
</script>
</body>
</html>