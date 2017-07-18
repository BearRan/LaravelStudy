<!doctype html>
<html lang="$ENV_LOCALE$">
<head>
<meta charset="$CHARSET$">
             <meta name="viewport" content="width=$WIDTH$, user-scalable=$SCALABLE$, initial-scale=$INITIAL_SCALE$, maximum-scale=$MAX_SCALE$, minimum-scale=$MIN_SCALE$">
                         <meta http-equiv="X-UA-Compatible" content="ie=$IE$">
             <title>$TITLE$</title>
</head>
<body>

  <h1>About me <?= $first; ?>.</h1>
  <h1>About me {{ $first }}.</h1>
  <h1>About me {!! $first !!}.</h1>
  <h1>About me {{$first}} {{$last}}</h1>
</body>
</html>


