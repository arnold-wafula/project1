<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <!--Bootstrap CSS CDN-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="bg-dark">
    <div class="container mt-5">
        <form method="POST" action="{{ route('admin') }}" class="col-md-6 mx-auto bg-white p-4 rounded">
            @csrf
            <div class="row mb-4">
                <div class="col-md-4">
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" class="form-control" placeholder="john"/>
                </div>

                 <div class="col-md-4">
                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" class="form-control" placeholder="doe"/>
                </div>

                <div class="col-md-4">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="john.doe@groupmfi.com"/>
                </div>
    
            </div>

            <div class="row mt-4">
                <div class="col-md-4">
                    <label for="country">Country</label>
                    <select name="country" class="form-control">
                        <option value="">Select Country</option>
                        @foreach($countries as $country)
                        <option value="{{$country->id}}">{{ $country->country_name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-4">
                <label for="dept">Department</label>
                <select name="department" class="form-control" placeholder="">
                    <option value="">Select Department</option>
                    @foreach ($departments as $department)
                        <option value="{{ $department->id }}">{{ $department->department_name }}</option>
                    @endforeach
                    
                </select>
                </div>

                <div class="col-md-4">
                    <label for="role">Role</label>
                    <select name="role" class="form-control">
                        <option value="">Select Role</option>
                        @foreach($roles as $role)
                        <option value="{{$role->id}}">{{ $role->role_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            
            <div class="row mt-4">
                <div class="col-md-12">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="*******">
                </div>
            </div>

            <div class="row mt-4">
            <div class="col-md-12">
            <button type="submit" class="btn btn-primary btn-block">Create User</button>
                </div>
            </div>
        </form>
    </div>    


    <!-- Bootstrap JS and Popper.js CDN (required for Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>