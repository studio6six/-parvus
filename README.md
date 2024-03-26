# Parvus
Parvus is latin for small, This small PHP framework is extra usefull when trying to quickly mock up a crud application.

<div align="center">
  <a href="https://Studio6six.com">
    <img
      src="https://avatars.githubusercontent.com/u/160778005"
      alt="Studio6Six"
      height="64"
    />
  </a>
  <h3>
    <b>
      Studio6Six - Parvus
    </b>
  </h3>
  <b>
    Open Source Development Ecosystem
  </b>
  <p>

[![contributions welcome](https://img.shields.io/badge/contributions-welcome-brightgreen?logo=github)](CODE_OF_CONDUCT.md) [![Website](https://img.shields.io/website?url=https://studio6six.com&logo=html)](https://studio6six.com) [![PHP 8.0.0](https://img.shields.io/badge/php-8.2.0-brightgreen?logo=php)](https://github.com/hoppscotch/hoppscotch/actions) 
</div>

_We highly recommend you take a look at the [**Studio6Six Documentation**](https://docs.studio6six.com) for more infromation._

## Features

- Lightweight
- No need for composer or installer
- PHP CRUD included(Create, Read, Update, and Delete.)
- Native PHP code
- demo AJAX call

## Requirements

- PHP 8.0.0 
- MySQL 8.0.31
- Apache rewrite_module

## Installation

- Edit the DB Creds in app/config/config.php
- Import the setup.sql in the /setup folder.

## Goodies

The original framework that got me going can be found 

MINI comes with a little customized [PDO debugger tool](https://github.com/panique/pdo-debug) (find the code in
application/libs/helper.php), trying to emulate your PDO-SQL statements. It's extremely easy to use:

```php
$sql = "SELECT id, artist, track, link FROM song WHERE id = :song_id LIMIT 1";
$query = $this->db->prepare($sql);
$parameters = array(':song_id' => $song_id);

echo Helper::debugPDO($sql, $parameters);

$query->execute($parameters);
```
## License

This project is licensed under the MIT License.
This means you can use and modify it for free in private or commercial projects.

## Credit
Need to give credit to Panique. https://github.com/panique/mini

One of the first github projects i ever used, and use it did. I built many mock apps using the original. 

The reason this codes looks and feel like the orignal MINI code, is because its roots are built off giants(panique) 

