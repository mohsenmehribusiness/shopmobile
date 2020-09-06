<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>elequent</title>
    <link href="<?= url('css/bootstrap.css'); ?>  " rel="stylesheet" />
    <link href="<?= url('css/bootstrap-rtl.css'); ?>  " rel="stylesheet" />
    <link href="<?= url('css/w3.css'); ?>  " rel="stylesheet" />
    <script src="<?= Url('js/jquery.js'); ?>"></script>
    <script src="<?= Url('js/bootstrap_.js'); ?>"></script>
    <link href="<?= url('panel/css/sweetalert.css'); ?>  " rel="stylesheet" />
    <script src="<?= Url('panel/js/sweetalert.min.js'); ?>"></script>
</head>
<body class="rtl">
    <div class="container w3-animate-zoom w3-opacity-max">
      <div class="w3-card-4 w3-margin-top " style="width:50%;">
          <header class="w3-container w3-blue">
            <h1>
              elequent
            </h1>
          </header>
          <div class="w3-container w3-padding">
            @for ($i = 0; $i < 3; $i++)
                   {{ $i}}
            @endfor
          </div>
          @include('partials.flash')
      </div>
        <div class="w3-card-4 w3-margin-top " style="width:50%;">
            <header class="w3-container w3-blue">
              <h1>تاریخ شمسی</h1>
            </header>
            <div class="w3-container w3-padding">
                  <p>
                      {{ jDate($dat)->format('%B %d، %Y')}}
                  </p>
            </div>

            @include('partials.flash')
        </div>
</div>
</body>
</html>
