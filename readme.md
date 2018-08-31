
##Sobre o Projeto
Bom esse projeto tem a funcionalidade de automatizar inserção de dados utilizando o upload de arquivos XML.
Dentro da aplicação foi utilizado o Laravel 5.4, Composer, MySQL e algumas frameworks para automatizar alguns processos sendo elas:
- [Laravel 5 IDE Helper Generator](https://github.com/barryvdh/laravel-ide-helper).
- [XML Document Parser](https://github.com/orchestral/parser).
- [Bootstrap Fileinput](https://github.com/kartik-v/bootstrap-fileinput).

Dentro da aplicação temos os uma rota principal apontando para a index, assim após realizado o upload do arquivo ele é direcionado para o UploadController que é responsável por guardar os arquivos dentro do sistema e deixá-los disponíveis para os procedimentos de cadastro.
Após realizado o upload é verificado pelo nome do arquivo o dito de que será inserido, assim será chamado o respectivo Controller de cada classe específica, sendo elas inicialmente "Person" e "ShipOrders".

Há uma pequena limitação encontrada dentro do projeto, sendo que se um XML enviado com mais de 1 item por "ShipOrder" ele não insere a informação, pois ele defini que aquele item é outro tipo de array.
