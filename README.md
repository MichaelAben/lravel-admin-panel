# Admin Panel For Laravel

This is a simple base to start developing your own amazing admin panel in laravel!

Nothing more than a easy to use layout with some menu's.

### Getting started
It's realy easy!
Run this command:\
`php artisan vendor:publish --provider="MabenDev\AdminPanel\AdminPanelProvider"`

After that you go to the view of your page and let it extend:\
`@extends('mabendev.adminpanel.layouts.app')`

Your page content goes in between:\
```
@section('content')
    // Your content goes here
@endsection
```

### Need help?
Please contact me on: m.aben@live.nl