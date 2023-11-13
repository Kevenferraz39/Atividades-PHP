create DATABASE `loguin-phpt`;
 use`loguin-phpt`;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(140) DEFAULT NULL,
  `email` varchar(140) NOT NULL,
  `senha` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'keven ferraz', 'kevenferraz39@gmail.com', '0408Kw12'),
(2, 'Marcos alencar', 'malino840@gmail.com', '12345');

ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;
