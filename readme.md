Recordatorio:

-Instalar un .deb:
~/DondeEstaElInstalador sudo dpkg -i nombreDelInstalador.deb

-Instalar un tar.gz:
~/DondeEstaElArchivo tar -zxvf nombredelarchivo.tar.gz
~/DondeEstaElArchivo tar -jxvf nombredelarchivo.tar.bz2
~ ./configure
~ make
~ sudo make install

-Crear un launcher-icon:
~$ sudo gnome-desktop-item-edit /usr/share/applications/ --create-new

-Desinstalar por completo VirtualBox:
~$ sudo apt-get remove virtualbox-\*

-Mapear sitios:
sudo su
vi /etc/hosts

i - habilitar modo insertar
esc - deshabilitar modo insertar
: - abrir terminal interna
