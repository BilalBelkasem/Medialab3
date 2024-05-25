<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
</head>

/* Try at school can't connect with vpn at home */

<body>
    <div class="User view">
        <h1>User Management</h1>
        <table class="table board">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</Nav>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <a href="#" class="btn btn-primary btn-sm">Edit</a>
                            <a href="#" class="btn btn-danger btn-sm">Delete</a>
                        
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
</body>
</html>