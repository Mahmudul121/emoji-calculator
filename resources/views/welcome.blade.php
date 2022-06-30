<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Claculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="alert alert-success mt-5 text-center" role="alert">
            Emoji Based Calculator:
        </div>
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-10">
                    <form method="post" action="{{ route('data-calculate') }}" enctype="multipart/form-data">
                        @csrf
                        @method('post')
                        <div class="row">
                            <div class="col-3">
                                <input class="form-control" type="number" placeholder="Enter Value 1" name='value1'
                                    aria-label="default input example">

                                @error('value1')
                                    <div class="alert alert-danger mt-4" role="alert">{{ $message }}</div>
                                @enderror

                            </div>
                            <div class="col-3">
                                <input class="form-control" type="number" placeholder="Enter Value 2" name='value2'
                                    aria-label="default input example">
                                @error('value2')
                                    <div class="alert alert-danger mt-4" role="alert">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-3">
                                <select class="form-select" name='type' aria-label="Default select example">
                                    <option value='' selected>Select option</option>
                                    <option value="+">{!! '&#128125;' !!}</option>
                                    <option value="-">{!! '&#128128;' !!}</option>
                                    <option value="*">{!! '&#128123;' !!}</option>
                                    <option value="/">{!! '&#128561;' !!}</option>
                                </select>
                                @error('type')
                                    <div class="alert alert-danger mt-4" role="alert">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-3">
                                <button type="submit" class="btn btn-primary mb-3">Calculate</button>
                            </div>
                        </div>
                    </form>
                    <div class="row justify-content-center">
                        <div class="col d-flex align-items-center justify-content-center">
                            @if (session()->has('result'))
                                <p class="mb-0 me-4">Result:</p>
                                <p class="mb-0">{{ session()->get('result') }}</p>
                            @endif
                            @if (session()->has('server_error'))
                                <p class="alert alert-danger mt-4">{{ session()->get('server_error') }}</p>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>
