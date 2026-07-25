<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Data Buku</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Font: Plus Jakarta Sans -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #f4f6f9;
            color: #334155;
            min-height: 100vh;
        }
        .main-card {
            background: #ffffff;
            border: none;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.04);
            padding: 28px;
        }
        .btn-custom-primary {
            background: linear-gradient(135deg, #4f46e5, #6366f1);
            color: #fff;
            border: none;
            border-radius: 10px;
            padding: 10px 20px;
            font-weight: 600;
            transition: all 0.2s ease;
        }
        .btn-custom-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(99, 102, 241, 0.35);
            color: #fff;
        }
        .btn-action-edit {
            background-color: #fef3c7;
            color: #d97706;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            padding: 6px 14px;
        }
        .btn-action-edit:hover {
            background-color: #fde68a;
            color: #b45309;
        }
        .btn-action-delete {
            background-color: #fee2e2;
            color: #dc2626;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            padding: 6px 14px;
        }
        .btn-action-delete:hover {
            background-color: #fca5a5;
            color: #991b1b;
        }
        .table-custom {
            border-collapse: separate;
            border-spacing: 0;
        }
        .table-custom thead th {
            background-color: #f8fafc;
            color: #64748b;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.75rem;
            letter-spacing: 0.05em;
            border-bottom: 2px solid #e2e8f0;
            padding: 14px 16px;
        }
        .table-custom tbody td {
            padding: 16px;
            border-bottom: 1px solid #f1f5f9;
            vertical-align: middle;
        }
        .table-custom tbody tr:hover {
            background-color: #f8fafc;
        }
        .form-control-custom {
            border-radius: 10px;
            border: 1px solid #cbd5e1;
            padding: 10px 14px;
            font-size: 0.95rem;
        }
        .form-control-custom:focus {
            border-color: #6366f1;
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.15);
        }
    </style>
</head>
<body class="py-5">
<div class="container">