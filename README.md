# Kompatybilne z wersją Pi-hole v5.1.1 Interfejs sieciowy v5.1  FTL v5.1

[pi-hole](https://github.com/pi-hole/pi-hole).

![Screenshot](https://i.ibb.co/yWNkGtS/2020-07-23-14h19-45.png)


## Instalacja
Wpisz następujące polecenia w SSH, linia po linii, lub skopiuj i wklej całość

```
cd /var/www/
sudo git clone https://github.com/Janasek/pi-hole-pl.git
sudo cp -fR ./pi-hole-pl/html /var/www
sudo rm -rf pi-hole-pl
```
# Czasami przeglądarka wymaga czyszczenia aby uzyskać i wyświetlić wszystkie zmiany

## Przywracanie do stanu faktycznego
Wpisz następujące polecenia w SSH, linia po linii.

```
cd /var/www/html/admin/style/vendor/
sudo git reset --hard
```

---
# Testowane na Ubuntu 18.4

### License
This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.


### Warning, this is the Polish version, do not install if you want to keep the original English language because it converts English to Polish

## Enjoy
