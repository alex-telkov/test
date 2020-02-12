# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://poser.pugx.org/laravel/lumen-framework/d/total.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/lumen-framework/v/stable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://poser.pugx.org/laravel/lumen-framework/license.svg)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

## Installation

We expect you to know how to setup Lumen via Composer. Documentation for the framework can be found on the [Lumen website](https://lumen.laravel.com/docs).

## The challenge

First of all thank you for participating in our backend code challenge.

### Headsup:

There is command you find called `ClientMatchesDaemonCommand`, which will run a daemon to fetch betting event data from one of our existing providers.

### Goal:

You are expected to fill out the client_matches  and client_matches_your_fake tables with the fetched data.

### Task breakdown:

More precisely you are supposed to:

1. Create a seeder of random data for tables 'matches', 'rosters' and 'match_opponents'
2. Create entity ClientMatchesYourFake and make ClientMatchesYourFake as JOINED inherence type (https://www.doctrine-project.org/projects/doctrine-orm/en/2.7/reference/inheritance-mapping.html) 
3. Create another "custom" fetcher which will use seeded matches from the database to fill out `client_matches` and `client_matches_your_fake` tables, with creating randomized odds analog to the data you can find in "SomeClient" Client Matches

### Stretch-goals related to this challenge are:

1. You cover your additionals by tests (use tdd).
2. Find three (3) hidden bugs
3. Do a proposal of possible improvements of test and readme file.

