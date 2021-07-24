<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## API de contatos

Esta aplicação conta com um CRUD completo de contatos, também conta com um CRUD de telefones relacionados aos contatos.

Clone este repositório para sua máquina e execute:

```bash
composer install 
php artisan serve
```
Se você tiver o laradock instalado, basta clonar dentro de um dos workspaces e rodar:

```bash
docker-compose up -d nginx postgres pgadmin
```

Para ter acesso ao Front-end desta API, construida em Angular, acesse:  [front-end](https://github.com/Lsantos-art/angular-jwt-implementado).

Por fim, rode:

```bash
npm install
ng serve --port 4222
```


## Contribuidores<br>

<table>
  <tr>
    <td align="center">
      <a href="https://github.com/Lsantos-art">
        <img src="https://avatars.githubusercontent.com/u/59149941?v=4" width="100px;" alt="Foto do Lindomar Lima no GitHub"/><br>
        <sub>
          <b>Lindomar Lima</b>
        </sub>
      </a>
    </td>
  </tr>
</table>



## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
