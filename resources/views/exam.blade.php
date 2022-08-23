<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXAM</title>
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/bootstrap/css/dataTables.bootstrap5.min.css">

</head>

<body class="container">

    <section class="mt-5">
        <div class="row text-center">
            <div class="col-md-12">
                <h1>Laravel EXAM</h1>
            </div>
        </div>
    </section>
    <hr>
    <section>
        <h3>Student Info</h3>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Student code</th>
                            <th>Student ID</th>
                            <th>Class</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Nguyễn Văn Hưng</td>
                            <td>hungnvth2104019@fpt.edu.vn</td>
                            <td>0973772755</td>
                            <td>TH2104019</td>
                            <td>Student1316992</td>
                            <td>T2108E</td>
                        </tr>
                    </tbody>
                </table>
            </div>
    </section>
    <section class="mt-5">
        <div class="row text-center">
            <div class="col-md-12">
                <h2>PRACTICE</h2>
            </div>
        </div>
    </section>
    <hr>

    <section>
        <h3>Library</h3>
        <table id="exam" class="table table-bordered">
            <thead>
                <tr>
                    <th>AuthorID</th>
                    <th>Book Title</th>
                    <th>ISBN</th>
                    <th>Pub Year</th>
                    <th>Available</th>
                </tr>
            </thead>
            <tbody>
                <!-- $books -->
                @foreach ($books as $book)
                <tr>
                    <td>{{ $book->authorid }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->ISBN }}</td>
                    <td>{{ $book->pub_year }}</td>
                    <td>{{ $book->available }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>

    <script src="/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/bootstrap/js/jquery-3.5.1.js"></script>
    <script src="/assets/bootstrap/js/jquery.dataTables.min.js"></script>
    <script src="/assets/bootstrap/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#exam').DataTable();
        });
    </script>
</body>

</html>