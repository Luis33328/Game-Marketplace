-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21-Jun-2022 às 17:27
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ghost`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `profile_image` varchar(255) NOT NULL,
  `country` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `about` varchar(255) DEFAULT NULL,
  `cash` varchar(255) DEFAULT '00.00',
  `authCode` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`, `email`, `profile_image`, `country`, `state`, `about`, `cash`, `authCode`) VALUES
(10, 'admin', 'dbd4e256d636c8d2fe2ddab0eb04725baf68e81134fd709029ccccda9e6fc3e5', 'luissouzasanto@gmail.com', 'kafe300.png', 'Brasil', 'Parana', 'ado ado ado ', '196.71', 0),
(15, 'luigi', '463ba6f2f39f601214626741b90b1e1e44c5e1d860e5c54632a3d74fd7cc4068', 'luissouzasanto@gmail.com', '', NULL, NULL, NULL, '00.00', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `developer` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `brief_description` varchar(255) NOT NULL,
  `launch_date` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `storeImg1` varchar(255) NOT NULL,
  `storeImg2` varchar(255) NOT NULL,
  `storeImg3` varchar(255) NOT NULL,
  `storeImg4` varchar(255) NOT NULL,
  `storeImg5` varchar(255) NOT NULL,
  `tag1` varchar(255) NOT NULL,
  `tag2` varchar(255) NOT NULL,
  `tag3` varchar(255) NOT NULL,
  `tag4` varchar(255) NOT NULL,
  `tag5` varchar(255) NOT NULL,
  `libImg` varchar(255) NOT NULL,
  `logoImg` varchar(255) NOT NULL,
  `heroImg` varchar(255) NOT NULL,
  `heroLogoImg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `games`
--

INSERT INTO `games` (`id`, `title`, `image`, `developer`, `file`, `brief_description`, `launch_date`, `about`, `price`, `storeImg1`, `storeImg2`, `storeImg3`, `storeImg4`, `storeImg5`, `tag1`, `tag2`, `tag3`, `tag4`, `tag5`, `libImg`, `logoImg`, `heroImg`, `heroLogoImg`) VALUES
(16, 'Resident Evil 3 ', 're3M.jpg', ' CAPCOM Co, Ltd', 'empty.rar', 'Jill Valentine é uma das últimas sobreviventes de Raccoon City a testemunhar as atrocidades da Umbrella. Para a travar, a Umbrella liberta a sua derradeira arma secreta: Nemesis! Também inclui Resident Evil Resistance, um novo jogo multijogador online 1 v', ' 3 Abr, 2020', 'Jill Valentine é uma das últimas sobreviventes de Raccoon City a testemunhar as atrocidades da Umbrella. Para a travar, a Umbrella liberta a sua derradeira arma secreta: Nemesis!\r\n\r\nTambém inclui Resident Evil Resistance, um novo jogo multijogador online ', '129,99', 're31.jpg', 're32.jpg', 're33.jpg', 're34.jpg', 're35.jpg', 'Ação', 'Remake', 'Zumbis', 'Terror', '', 're3Lib.jpg', '', 'RE3Hero.jpg', 're3B.jpg'),
(17, 'Project Winter', 'pWinter_H.jpg', 'Other Ocean Interactive', 'empty.zip', 'The perfect game to back-stab your friends. Project Winter is an 8 person multiplayer game focusing on social deception and survival. Communication and teamwork is essential to the survivors’ ultimate goal of escape. Gather resources, repair structures, a', '23 Mai, 2019', 'Betray your friends in this 8 person multiplayer focused on social deception and survival.\r\n\r\nCommunication and teamwork is essential to the survivors’ ultimate goal of escape. Gather resources, repair structures, and brave the wilderness together. Just b', '37,99', 'pWinterImg1.jpg', 'pWinterImg2.jpg', 'pWinterImg3.jpg', 'pWinterImg4.jpg', 'pWinterImg5.jpg', 'Survival', 'Multiplayer', 'Dedução', 'Indie', '', 'pWinter_lib.jpg', '', 'pWinter_hero.jpg', 'pWinter_heroLogo.jpg'),
(18, 'Resident Evil 2', 'RE2_H.jpg', ' CAPCOM Co, Ltd', 'empty.zip', 'Um vírus maligno toma conta dos residentes de Raccoon City em setembro de 1998, afundando a cidade no caos enquanto zumbis comedores de carne humana vagam pelas ruas em busca de sobreviventes', '25 Jan, 2019', 'Obra prima que definiu o gênero, Resident Evil 2 retorna, completamente refeito com uma experiência narrativa mais profunda. Usando o RE Engine de propriedade da Capcom, Resident Evil 2 oferece uma nova visão na clássica saga de horror de sobrevivência co', '89,99', 're21.jpg', 're22.jpg', 're23.jpg', 're24.jpg', 're25.jpg', 'Terror', 'Zumbis', 'Remake', 'História', '', 're2Lib.jpg', '', 'RE2_HeroLogo.jpg', 're2B.jpg'),
(19, 'Sekiro™: Shadows Die Twice', 'sekiro_H.jpg', 'FromSoftware', 'empty.zip', 'Jogo do Ano - The Game Awards 2019 Melhor Jogo de Ação de 2019 - IGN Trilhe seu próprio caminho de vingança nesta premiada aventura da FromSoftware, os criadores de Bloodborne e da franquia Dark Souls. Obtenha vingança. Retome sua honra. Mate astuciosamen', '21 Mar, 2019', 'Em Sekiro™: Shadows Die Twice, você é o lobo de um braço só, um guerreiro desfigurado e desgraçado, resgatado da beira da morte. Jurado para proteger um jovem lorde descendente de uma antiga linhagem de sangue, você vira alvo de muitos inimigos perigosos,', '199,90', 'sekiro1.jpg', 'sekiro2.jpg', 'sekiro3.jpg', 'sekiro4.jpg', 'sekiro5.jpg', 'Souls-like', 'Histórico', 'RPG', 'Difícil', '', 'sekiroLib.jpg', '', 'sekiro_hero.jpg', 'sekiroB.jpg'),
(20, 'Cyberpunk 2077', 'cyberM.jpg', 'CD PROJEKT RED', 'empty.rar', 'Cyberpunk 2077 é um RPG de ação e aventura em mundo aberto que se passa em Night City, uma megalópole perigosa onde todos são obcecados por poder, glamour e alterações corporais.', '9 Dez, 2020', 'Cyberpunk 2077 é um RPG de ação e aventura em mundo aberto ambientado na megalópole de Night City, onde você é um mercenário cyberpunk envolvido em uma intensa luta pela sobrevivência. Com diversas melhorias e conteúdo adicional gratuito, personalize o se', '199,90', 'cyber1.jpg', 'cyber2.jpg', 'cyber3.jpg', 'cyber4.jpg', 'cyber5.jpg', 'Mundo Aberto', 'Cyberpunk', 'RPG', 'História', '', 'cyberLib.jpg', '', 'cyber_hero.jpg', 'cyberB.jpg'),
(21, 'The Witcher® 3: Wild Hunt', 'witcherM.jpg', 'CD PROJEKT RED', 'empty.rar', 'Enquanto a guerra assola todos os Reinos do Norte, você enfrenta o maior conflito de sua vida: ir em busca da criança da profecia, uma arma senciente capaz de alterar o mundo', '18 Mai, 2015', 'The Witcher: Wild Hunt é um RPG de mundo aberto de fantasia cheio de escolhas vitais. Em The Witcher, você joga como um caçador de monstros profissional, Geralt de Rívia, em busca da criança da profecia em um vasto mundo aberto, rico em cidades mercantis,', '79,99', 'witcher1.jpg', 'witcher2.jpg', 'witcher3.jpg', 'witcher4.jpg', 'witcher5.jpg', 'RPG', 'Atmosférico', 'Mundo Aberto', 'Aventura', '', 'witcherLib.jpg', '', 'witcher_hero.jpg', 'witcherB.jpg'),
(22, 'Resident Evil Village', 'reVM.jpg', 'CAPCOM Co, Ltd', 'empty.rar', 'Vivencie o horror de sobrevivência como nunca na 8ª sequência parte da franquia Resident Evil - Resident Evil Village. Com gráficos detalhados, ação intensa em primeira pessoa e uma narrativa primorosa, o terror nunca foi tão realista', '7 Mai, 2021', 'Vivencie o horror de sobrevivência como nunca na 8ª grande sequência da franquia Resident Evil - Resident Evil Village.\r\n\r\nAmbientado em alguns anos depois dos terríveis eventos do consagrado pela crítica Resident Evil 7 bioharzard, o novo enredo começa c', '179,99', 'reV1.jpg', 'reV2.jpg', 'reV3.jpg', 'reV4.jpg', 'reV5.jpg', 'Terror', 'Sobrevivência', 'História', 'Ação', '', 'reVLib.jpg', '', 'REV_hero.jpg', 'reVM.jpg'),
(23, 'Stardew Valley', 'stardew_h.jpg', 'ConcernedApe', 'empty.rar', 'Você herdou a antiga fazenda do seu avô, em Stardew Valley. Com ferramentas de segunda-mão e algumas moedas, você parte para dar início a sua nova vida. Será que você vai aprender a viver da terra, a transformar esse matagal em um próspero lar?', '26 Fev, 2016', 'Você herdou a antiga fazenda do seu avô, em Stardew Valley. Com ferramentas de segunda-mão e algumas moedas, você parte para dar início a sua nova vida. Será que você vai aprender a viver da terra, a transformar esse matagal em um próspero lar?', '24,99', 'stardew1.jpg', 'stardew2.jpg', 'stardew3.jpg', 'stardew4.jpg', 'stardew5.jpg', 'Sandbox', 'RPG', 'Indie', 'Pixel', '', 'stardew_lib.jpg', '', 'stardew_hero.jpg', 'stardew_heroLogo.png'),
(24, 'Cuphead', 'cuphead_h.jpg', 'Studio MDHR Entertainment Inc', 'empty.rar', 'Cuphead é um jogo de ação e tiros clássico, com enorme ênfase nas batalhas de chefes. Inspirado nas animações infantis da década de 1930, os visuais e efeitos sonoros foram minuciosamente recriados com as mesmíssimas técnicas dessa era, com destaque para ', '29 Set, 2017', 'Cuphead é um jogo de ação e tiros clássico, com enorme ênfase nas batalhas de chefes. Inspirado nas animações infantis da década de 1930, os visuais e efeitos sonoros foram minuciosamente recriados com as mesmíssimas técnicas dessa era, com destaque para ', '36,99', 'cup1.jpg', 'cup2.jpg', 'cup3.jpg', 'cup4.jpg', 'cup5.jpg', 'Difícil', 'Desenho', 'Plataforma', 'Indie', '', 'cuphead_lib.jpg', '', 'cuphead_hero.jpg', 'cuphead_heroLogo.png'),
(25, 'Missing Children | 行方不明', 'maigo_h.jpg', 'Chillas Art', 'empty.rar', 'Missing Children | 行方不明 is a Japanese horror-themed adventure game about a bully detective searching for reported missing children', '12 Jun, 2020', 'Missing Children | 行方不明 is a Japanese horror-themed adventure game about a bully detective searching for reported missing children', '6,49', 'maigo1.jpg', 'maigo2.jpg', 'maigo3.jpg', 'maigo4.jpg', 'maigo5.jpg', 'Indie', 'Terror', 'Casual', 'Aventura', '', 'maigo_lib.jpg', '', 'maigo_hero.jpg', 'maigo_heroLogo.png'),
(26, 'The Stanley Parable', 'stanley_h.jpg', 'Galactic Cafe', 'empty.zip', 'The Stanley Parable is a first person exploration game. You will play as Stanley, and you will not play as Stanley. You will follow a story, you will not follow a story. You will have a choice, you will have no choice. The game will end, the game will nev', '17 Out, 2013', 'The Stanley Parable is a first person exploration game. You will play as Stanley, and you will not play as Stanley. You will follow a story, you will not follow a story. You will have a choice, you will have no choice. The game will end, the game will nev', '24,99', 'stanley1.jpg', 'stanley2.jpg', 'stanley3.jpg', 'stanley4.jpg', 'stanley5.jpg', 'Indie', 'Liminar', 'História', 'Atmosférico', '', 'stanley_lib.jpg', '', 'stanley_hero.jpg', 'stanley_heroLogo.png'),
(27, 'Fall Guys: Ultimate Knockout', 'fall_h.jpg', 'Mediatonic', 'empty.zip', 'Fall Guys é um party game para multijogador com até 60 jogadores online, em uma louca corrida free-for-all, com rounds e rounds cada vez mais caóticos até sobrar um único vencedor!', '4 Ago, 2020', 'Fall Guys: Ultimate Knockout reúne hordas de participantes online em disparada por rounds e rounds cada vez mais caóticos até sobrar um único vencedor! Enfrente obstáculos bizarros, empurre seus concorrentes inconvenientes e desafie as leis da física a ca', '37,99', 'fall1.jpg', 'fall2.jpg', 'fall3.jpg', 'fall4.jpg', 'fall5.jpg', 'Multijogador', 'Fofo', 'Party-Game', 'Casual', '', 'fall_lib.jpg', '', 'fall_hero.jpg', 'fall_heroLogo.png'),
(28, 'Night Delivery | 例外配達', 'nightDelivery_H.jpg', ' Chillas Art', 'empty.zip', 'Night Delivery | 例外配達 is a psychological Japanese horror adventure game', '4 Jun, 2021', 'Night Delivery | 例外配達 is a psychological Japanese horror adventure game.\r\nPlease note that there are shocking scenes.\r\n\r\nVHS film aesthetics : VHS effects can be turned off in the options menu. VHS aesthetics emulate the look and feel of CRT screens, incl', '6,49', 'night1.jpg', 'night2.jpg', 'night3.jpg', 'night4.jpg', 'night5.jpg', 'Indie', 'Terror', 'Atmosférico', 'Aventura', '', 'night_lib.jpg', '', 'night_hero.jpg', 'night_heroLogo.png'),
(29, 'Jump King', 'jKing_H.jpg', 'Nexile', 'empty.zip', 'Aceite o desafio e enfrente os riscos das plataformas de Jump King! Vá até o topo na procura da Gata da lenda, mas explore com cuidado: um único pulo errado pode levar a uma longa queda até o início', '3 Mai, 2019', '-Prepare-se para os riscos das plataformas!\r\nO único caminho é para cima e seu único inimigo é você mesmo! A tensão aumenta com cada pulo quando um simples erro resulta em uma longa queda - e você precisa subir tudo de novo', '29,99', 'jump.jpg', 'jump2.jpg', 'jump3.jpg', 'jump4.jpg', 'jump5.jpg', 'Difícil', 'Plataforma', 'Pixel', 'Indie', '', 'jKing_lib.jpg', '', 'jKing_hero.jpg', 'jump_heroLogo.png'),
(30, 'Okami HD', 'okami_h.jpg', ' CAPCOM Co, Ltd', 'empty.zip', 'Vivencie esta aclamada obra-prima com sua renomada arte em estilo sumi-ê em uma alta resolução de tirar o fôlego', '12 Dez, 2017', 'Vivencie esta aclamada obra-prima com sua renomada arte em estilo sumi-ê em uma alta resolução de tirar o fôlego. Assuma o papel de Amaterasu, a deusa japonesa do sol que habita a forma de um lendário lobo branco, em uma missão para derrotar Orochi, um de', '39,99', 'okami1.jpg', 'okami2.jpg', 'okami3.jpg', 'okami4.jpg', 'okami5.jpg', 'Aventura', 'Mitologia', 'Clássico', 'Remake', '', 'okami_lib.jpg', '', 'okami_hero.jpg', 'okami_heroLogo.png'),
(31, 'Katana ZERO', 'katana_h.jpg', 'Askiisoft', 'empty.zip', 'Katana ZERO é um estiloso jogo de plataforma e ação neo-noir em uma velocidade eletrizante e combates com morte instantânea. Ataque, corra e manipule o tempo para desvendar seu passado em meio a acrobacias espetacularmente brutais', '18 Abr, 2019', 'Katana ZERO é um estiloso jogo de plataforma e ação neo-noir em uma velocidade eletrizante e combates com morte instantânea. Ataque, corra e manipule o tempo para desvendar seu passado em meio a acrobacias espetacularmente brutais.\r\n\r\nCombate excepcional:', '28,99', 'katana1.jpg', 'katana2.jpg', 'katana3.jpg', 'katana4.jpg', 'katana5.jpg', 'Ação', 'Pixel', 'Difícil', 'História', '', 'katana_lib.jpg', '', 'katana_hero.jpg', 'katana_heroLogo.png'),
(32, 'God of War', 'god_h.jpg', 'PlayStation PC LLC', 'empty.rar', 'Com a vingança contra os deuses do Olimpo em um passado distante, Kratos agora vive como um mortal no reino dos deuses e monstros nórdicos. É nesse mundo duro e implacável que ele deve lutar para sobreviver... e ensinar seu filho a fazer o mesmo.', '14 Jan, 2022', 'Adentre o reino nórdico\r\nCom a vingança contra os deuses do Olimpo em um passado distante, Kratos agora vive como um mortal no reino dos deuses e monstros nórdicos. É nesse mundo duro e implacável que ele deve lutar para sobreviver... e ensinar seu filho ', '199,90', 'god1.jpg', 'god2.jpg', 'god3.jpg', 'god4.jpg', 'god5.jpg', 'Ação', 'Aventura', 'RPG', 'História', '', 'god_lib.jpg', '', 'god_hero.jpg', 'god_heroLogo.png'),
(33, 'Counter-Strike: Global Offensive', 'cs_h.jpg', 'Valve', 'empty.zip', 'O Counter-Strike: Global Offensive (CS:GO) melhora a jogabilidade de ação baseada em equipes na qual foi pioneiro quando lançado há 19 anos. O CS:GO contém novos mapas, personagens e armas, além de contar com versões atualizadas de conteúdos do CS clássic', '21 Ago, 2012', 'Counter-Strike: Global Offensive (CS:GO) expandirá na jogabilidade de ação baseada em equipes na qual foi pioneiro quando foi lançado há 19 anos.\r\n\r\nCS:GO contém novos mapas, personagens e armas, além de contar com versões atualizadas de conteúdos do CS c', '19,90', 'cs1.jpg', 'cs2.jpg', 'cs3.jpg', 'cs4.jpg', 'cs5.jpg', 'FPS', 'Multiplayer', 'Ação', 'Competitivo', '', 'cs_lib.jpg', '', 'cs_hero.jpg', 'cs_heroLogo.jpg'),
(34, 'NARUTO SHIPPUDEN: Ultimate Ninja STORM 2', 'storm2_h.jpg', 'BANDAI NAMCO Entertainment', 'empty.rar', 'NARUTO SHIPPUDEN: Ultimate Ninja STORM 2 é um espetáculo emocionante no mundo de Naruto. Fiel ao universo do anime, o jogo conduz os jogadores pela narrativa de Naruto Shippuden. Ultimate Ninja STORM 2 foi remasterizado em HD', '25 Ago, 2017', 'NARUTO SHIPPUDEN: Ultimate Ninja STORM 2 é um espetáculo emocionante no mundo de Naruto. Fiel ao universo do anime, o jogo conduz os jogadores pela narrativa de Naruto Shippuden, com novos sistemas de batalha e jogabilidade aprimorada. Os jogadores devem ', '79,90', 'storm2_1.jpg', 'storm2_2.jpg', 'storm2_3.jpg', 'storm2_4.jpg', 'storm2_5.jpg', 'Ação', 'Aventura', 'Luta', 'História', '', 'storm2_lib.png', '', 'storm2_hero.png', 'storm2_heroLogo.png'),
(35, 'METAL GEAR SOLID V: THE PHANTOM PAIN', 'metalV_h.jpg', 'Konami Digital Entertainment', 'empty.rar', 'Inaugurando uma nova era para a franquia METAL GEAR com tecnologia de ponta alimentada pelo Fox Engine, METAL GEAR SOLID V: The Phantom Pain irá proporcionar aos jogadores uma experiência de jogo de primeira linha com liberdade tática para realizar missõe', '1 Set, 2015', 'Konami Digital Entertainment segue adiante com a \"Experiência do METAL GEAR SOLID V\" com o capítulo mais recente, METAL GEAR SOLID V: The Phantom Pain. Inaugurando uma nova era para a franquia com tecnologia de ponta alimentada pelo Fox Engine, MGSV: The ', '129,00', 'metalV1.jpg', 'metalV2.jpg', 'metalV3.jpg', 'metalV4.jpg', 'metalV5.jpg', 'Furtivo', 'Mundo Aberto', 'Ação', 'RPG', '', 'metalV_lib.jpg', '', 'metalV_hero.jpg', 'metalV_heroLogo.png'),
(36, 'Hotline Miami 2: Wrong Number', 'htM.jpg', 'Devolver Digital', 'empty.rar', 'Hotline Miami 2: Wrong Number é a conclusão brutal da saga Hotline Miami, tendo como pano de fundo uma escalada de violência e vingança pelo sangue derramado no jogo original', '10 Mar, 2015', 'Hotline Miami 2: Wrong Number é a conclusão brutal da saga Hotline Miami, tendo como pano de fundo uma escalada de violência e vingança pelo sangue derramado no jogo original. Siga os caminhos de várias facções diferentes, cada uma com seus próprios métod', '24,99', 'ht1.jpg', 'ht2.png', 'ht3.jpg', 'ht4.png', 'ht5.jpg', 'Difícil', 'Violento', 'Pixel', 'Retrô', '', 'ht2Lib.jpg', '', 'ht2_hero.jpg', 'ht2B.jpg'),
(38, 'Murder House', 'murder_h.jpg', 'Puppet Combo', 'empty.zip', 'A local news team breaks into an abandoned house to chase a salacious ghost story... until a MANIAC chases them! ...VHS era 80s slasher. PS1 style survival horror!', '22 Out, 2020', 'A news crew breaks into the old abandoned home of an executed serial killer Anthony Smith, planning to shoot a salacious haunted house story. But is the notorious Easter Ripper really dead or is he waiting inside, ready to wipe them out one by one? Who wi', '24,89', 'murder1.jpg', 'murder2.jpg', 'murder3.jpg', 'murder4.jpg', 'murder5.jpg', 'Terror', 'Anos 80', 'PSX', 'Atmosférico', '', 'murder_lib.jpg', '', 'murder_hero.jpg', 'murder_heroLogo.png'),
(39, 'Pac-Man', 'pacmanM.png', 'dev', 'empty.rar', 'O clássico Pac-Man. Ou será que é mesmo? ', '23 Mai, 2019', 'O clássico Pac-Man. Ou será que é mesmo? \r\n\r\nIncorpore o famigerado Pac-Man e se aventure pelos lugares mais distintos que você pode imaginar. Com a já conhecida gameplay do clássico e alguns adicionais.\r\n', '15,50', 'pacman1.png', 'pacman2.png', 'pacman3.png', 'pacman4.png', 'pacman5.png', 'Pixel', 'Aventura', 'Clássico', 'Storytelling', '', 'pacLib.png', '', 'pacB.png', 'pacB.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usergames`
--

CREATE TABLE `usergames` (
  `id` int(11) NOT NULL,
  `gameID` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usergames`
--

INSERT INTO `usergames` (`id`, `gameID`, `user`) VALUES
(35, 'Night Delivery | 例外配達', 'admin'),
(36, 'NARUTO SHIPPUDEN: Ultimate Ninja STORM 2', 'admin'),
(37, 'Resident Evil 2', 'admin'),
(38, 'Murder House', 'admin'),
(39, 'Pac-Man', 'admin'),
(40, 'God of War', 'admin'),
(41, 'Fall Guys: Ultimate Knockout', 'admin'),
(42, 'Sekiro™: Shadows Die Twice', 'admin');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usergames`
--
ALTER TABLE `usergames`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de tabela `usergames`
--
ALTER TABLE `usergames`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
