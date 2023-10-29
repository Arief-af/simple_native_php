<!DOCTYPE html>
<html>

<head>
    <title>tambah data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <section class="mt-5 container p-5">
        <section class="mb-5  text-dark rounded">TAMBAH DATA TASK</section>
        <form method="post" action="store_task_data.php">
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input required type="text" placeholder="title" name="title" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <textarea name="description" class="form-control" placeholder="Write your description here" id="floatingTextarea2" style="height: 100px"></textarea>
                </div>
            </div>


            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Deadline</label>
                <div class="col-sm-10">
                    <input required type="date" name="deadline" class="form-control">
                </div>
            </div>

            <div class="d-flex justify-content-end gap-2" style="width: 100%;">
                <a href="index.php" class="btn btn-outline-success float-end">Cancel</a>
                <button class="btn btn-success float-end" type="submit">Submit</button>
            </div>
        </form>
    </section>
</body>

</html>