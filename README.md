# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://poser.pugx.org/laravel/lumen-framework/d/total.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/lumen-framework/v/stable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://poser.pugx.org/laravel/lumen-framework/license.svg)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

## Installation, we expect you to know how to setup Lumen via Composer

Documentation for the framework can be found on the [Lumen website](https://lumen.laravel.com/docs).

## The test

Thank you for considering to do test challenge.

There is comman you find called ClientMatchesDaemonCommand, which will run daemon of fetcher betting events from one of our clients.
You expect it to fill out client_matches and client_matches_some_client tables to be filled by this.

We need you to do:

1. Create seeder of random matches for tables 'matches', 'rosters', 'match_opponents'.
2. Create a another "custom" fetcher which will use seeded matches from database and fill out `client_matches` and `client_matches_your_fake` table, with creating / random odds like presented for "SomeClient".

Bonus work:
1. You can cover only your additionals by tests (use tdd).
2. Find 3 hidden bugs/issues.
3. Do a proposal of possible improvements of test and readme file.

## License

This is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
