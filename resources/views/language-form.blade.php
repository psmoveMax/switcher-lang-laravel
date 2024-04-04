<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>



<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <label for="dropdownMenuButton1" class="form-label">Выбранный язык</label>
            <div class="dropdown mb-3">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ $currentLanguage }}
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="{{ route('changeLang', ['lang' => 'en']) }}">English</a></li>
                    <li><a class="dropdown-item" href="{{ route('changeLang', ['lang' => 'ru']) }}">Русский</a></li>
                    <li><a class="dropdown-item" href="{{ route('changeLang', ['lang' => 'ru2']) }}">Ru2</a></li>
                </ul>
            </div>

            <form>
                <div class="mb-3">
                    <label for="firstname" class="form-label">{{ __('fields.firstname') }}</label>
                    <input type="text" class="form-control" name="firstname" id="firstname">
                </div>

                <div class="mb-3">
                    <label for="lastname" class="form-label">{{ __('fields.lastname') }}</label>
                    <input type="text" class="form-control" name="lastname" id="lastname">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">{{ __('fields.description') }}</label>
                    <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>



</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>






