Haproxy on Ubuntu 14.04
=======================

## 1. Start

```
vagrant up; vagrant ssh
```

## 2. Run

```
php -S 127.0.0.1:8081 -t apps/www.example1.com/ &
php -S 127.0.0.1:8082 -t apps/www.example2.com/ &
php -S 127.0.0.1:8083 -t apps/default/ &
```

## 3. Profit

`curl -H "host: www.example1.com" 192.168.33.10:443`

## Litterature

* [How To Use HAProxy to Set Up HTTP Load Balancing on an Ubuntu VPS](https://www.digitalocean.com/community/tutorials/how-to-use-haproxy-to-set-up-http-load-balancing-on-an-ubuntu-vps)
* [HAProxy - route by domain name](http://seanmcgary.com/posts/haproxy---route-by-domain-name)
* [Using SSL/HTTPS with HAProxy](http://seanmcgary.com/posts/using-sslhttps-with-haproxy)
* [Using HAProxy to offload SSL](http://labs.qandidate.com/blog/2014/09/18/using-haproxy-to-offload-ssl/)
