<!DOCTYPE html>
<html>

<head>
    <title>Edit data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <section class="mt-5 container p-5">
        <section class="mb-5 p-5 text-dark rounded">EDIT DATA USER</section>
        <form method="post" action="store_user_data.php">
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">name</label>
                <div class="col-sm-10">
                    <input required type="text" placeholder="name" name="name" class="form-control" id="inputPassword">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">username</label>
                <div class="col-sm-10">
                    <input required type="text" placeholder="username" name="username" class="form-control" id="inputPassword">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Level</label>

                <div class="col-sm-10">
                    <select required name="level" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                        <option selected>Select Level</option>
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                    </select>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input required placeholder="password" type="password" name="password" class="form-control" id="inputPassword">
                </div>
            </div>

            <div class="d-flex justify-content-end gap-2" style="width: 100%;">
                <a href="index.php" class="btn btn-outline-success float-end">Cancel</a>
                <button class="btn btn-success float-end" type="submit">Update</button>
            </div>
        </form>
    </section>
</body>

</html>