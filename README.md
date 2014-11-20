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

