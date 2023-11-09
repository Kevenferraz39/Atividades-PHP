<center><h1>PHPt</h1></center>

Esse e um projeto que desenvolvi no primeiro modulo do meu curso na ETEC, ele hospeda algumas atividades em PHP que desenvolvemos durantes as aulas.

## Índice

- [Instalação](#instalação)
- [Banco de dados](#Copie-e-cole-no-phpmyadmin)


## Instalação

Para utilizar basta seguir os seguintes pacos:

-- Baixar o projeto em sua maquina

-- Colocalo no htdocs do seu XAMPP

-- Executar o XAMPP e buscar esse diretorio no seu navegador " http://localhost/PHPt "

 ## Copie e cole no phpmyadmin
-- Copie o banco de dados SQL que esta na pasta banco e cole no SQL do phpmyadmin e execute.

Apos isso basta voce secadastrar e logar para utilizar 
```bash

 CREATE DATABASE `loguin-phpt`;

USE`loguin-phpt`;

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(140) DEFAULT NULL,
  `email` varchar(140) NOT NULL,
  `senha` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'usuario', 'usuario@gmail.com', 'oirausu23');

ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;


