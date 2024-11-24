<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>table dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
    .container {
        max-width: 800px;
        margin: 0 auto;
    }

    table {
        border: 1px solid #ccc;
        border-collapse: collapse;
        width: 100%;
    }

    tr {}

    td,
    th {
        padding: 0.5rem;
    }

    td {
        border: 1px solid #ccc;
    }

    th {
        border: 1px solid #ccc;
    }

    .table__heading {
        color: #fff;
        background-color: blue;
        padding: 1rem;
    }

    .remove-btn-icon {
        color: red;
    }

    .edit-btn-icon {
        color: green;
    }

    a {
        color: blue;
        text-decoration: none;
    }
    </style>
</head>

<body>

    <div class="container">