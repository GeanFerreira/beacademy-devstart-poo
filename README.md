
# Controller MVC

MVC é o acrônimo de Model-View-Controller é um padrão de projeto de software, ou padrão de arquitetura de software formulado na década de 1970, focado no reuso de código e a separação de conceitos em três camadas interconectadas, onde a apresentação dos dados e interação dos usuários (front-end) são separados dos métodos que interagem com o banco de dados (back-end).

### Vantagens do modelo MVC:

    - Como o modelo MVC gerencia múltiplos views usando o mesmo modelo é fácil manter, testar e atualizar sistemas compostos;
    - É muito simples adicionar novos clientes apenas incluindo seus views e controles;
    - Torna a aplicação escalável;
    - É possível ter desenvolvimento em paralelo para o modelo, visualizador e controle pois são independentes;
    - Facilita o reuso do código;
    - Melhor nível de sustentabilidade, pois facilita a manutenção da aplicação;
    - Fácil transformação da interface, sem que haja necessidade de modificar a camada de negócio;
    - Melhor desempenho e produtividade, graças a estrutura de pacotes modulares;
    - A arquitetura modular permite aos desenvolvedores e designers desenvolverem em paralelo;
    - Partes da aplicação podem ser alteradas sem a necessidade de alterar outras.


## Instalação rápida do Composer no Linux:

```bash
  sudo apt update
  sudo apt install php-cli unzip

  cd ~
  curl -sS https://getcomposer.org/installer -o composer-setup.php

  HASH=`curl -sS https://composer.github.io/installer.sig`
  echo $HASH
  php -r "if (hash_file('SHA384', 'composer-setup.php') === '$HASH') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"

  sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer

  composer
```
    
