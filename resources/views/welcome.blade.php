<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>



    <div class="container mt-5">


        <div class="row">


            <form class="row g-3">

                <div class="col-md-6">
                    <label for="inputState" class="form-label">FROM</label>
                    <select id="from" class="form-select" name="from">
                        <option selected>Choose...</option>
                        @foreach ($exc as $e)
                            <option>{{ $e->form }} {{ $e->id }}</option>
                        @endforeach

                    </select>
                </div>
                <div class="col-md-6">
                    <label for="inputState" class="form-label">TO</label>
                    <select id="to" class="form-select" name="to">
                        <option selected>Choose...</option>
                        @foreach ($exc as $e)
                            <option>{{ $e->form }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="inputZip" class="form-label">Amout</label>
                    <input type="text" class="form-control" id="amount" name="amount">
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary" name="exs">EXCHNGE</button>
                </div>
            </form>

        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

    <script>
        $("#to").on('change', function() {
            $.ajax({ //Process the form using $.ajax()
                url: 'converter/IDR/USD', //Your form processing file URL
                type: 'get', //Method type
                data: {
                    to: 'IDR'
                },
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                }
            });

        });
    </script>
</body>

</html>
