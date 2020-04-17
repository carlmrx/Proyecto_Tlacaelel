-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-04-2020 a las 09:25:50
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pruebas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mytable`
--

CREATE TABLE `mytable` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `no_cuenta` varchar(10) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `carrera` text DEFAULT NULL,
  `correo` varchar(255) DEFAULT NULL,
  `telefono` varchar(100) DEFAULT NULL,
  `asunto` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mytable`
--

INSERT INTO `mytable` (`id`, `no_cuenta`, `nombre`, `carrera`, `correo`, `telefono`, `asunto`) VALUES
(1, '16899467', 'Wanda Hardy', 'I.S.C', 'ullamcorper.eu.euismod@odio.net', '1-934-597-1344', 'clase'),
(2, '16610461', 'Quentin Blackburn', 'I.S.C', 'sed.est.Nunc@euodio.org', '1-172-105-2851', 'clase'),
(3, '16594615', 'Angelica Gonzalez', 'I.S.C', 'quam.vel.sapien@odioapurus.edu', '1-865-434-0152', 'clase'),
(4, '17759870', 'Tarik Conway', 'I.S.C', 'lacinia.orci.consectetuer@nibh.org', '1-380-918-8020', 'clase'),
(5, '14829447', 'Veronica Ray', 'I.S.C', 'nisl.sem@tellusfaucibus.ca', '1-947-301-0430', 'clase'),
(6, '15038297', 'Brynn Gross', 'I.S.C', 'magna.Ut.tincidunt@vulputatelacusCras.ca', '1-963-305-0759', 'clase'),
(7, '15784960', 'Kato Brewer', 'I.S.C', 'Duis.sit@ipsumDonecsollicitudin.co.uk', '1-290-943-8399', 'clase'),
(8, '14392056', 'Tanner Pate', 'I.S.C', 'ac.urna.Ut@odiosagittissemper.net', '1-149-886-1965', 'clase'),
(9, '15634497', 'Charlotte Hester', 'I.S.C', 'pellentesque.tellus.sem@nunc.net', '1-367-734-8624', 'clase'),
(10, '15218183', 'Kiara Burnett', 'I.S.C', 'augue.porttitor@Ut.net', '1-823-221-4139', 'clase'),
(11, '15110591', 'Kelsey Gallegos', 'I.S.C', 'fringilla.ornare.placerat@IntegerurnaVivamus.co.uk', '1-390-149-5974', 'clase'),
(12, '14972277', 'Lawrence Craft', 'I.S.C', 'arcu.Sed.eu@etarcu.com', '1-785-191-2328', 'clase'),
(13, '15619853', 'Kadeem Glenn', 'I.S.C', 'faucibus@luctusipsum.edu', '1-291-667-9352', 'clase'),
(14, '16487847', 'Price Heath', 'I.S.C', 'ante.dictum@sit.net', '1-839-552-6021', 'clase'),
(15, '14033195', 'Stewart Stone', 'I.S.C', 'pulvinar.arcu.et@eu.org', '1-924-597-5321', 'clase'),
(16, '15494109', 'Lysandra Best', 'I.S.C', 'est@placeratCras.org', '1-351-306-1904', 'clase'),
(17, '17542943', 'Mannix Rosales', 'I.S.C', 'pharetra.sed@Namconsequat.org', '1-574-125-9540', 'clase'),
(18, '17364067', 'Teagan Walls', 'I.S.C', 'Etiam.bibendum.fermentum@euismodmauris.ca', '1-235-515-6447', 'clase'),
(19, '15862295', 'Amal Spencer', 'I.S.C', 'non.ante.bibendum@ornare.com', '1-831-962-0324', 'clase'),
(20, '15579007', 'Roth Randall', 'I.S.C', 'Duis@iaculislacus.com', '1-365-511-3838', 'clase'),
(21, '14514513', 'Neville Salazar', 'I.S.C', 'dolor.Nulla@risusDuis.net', '1-180-205-4169', 'clase'),
(22, '15502026', 'Ezekiel Peterson', 'I.S.C', 'sit.amet.risus@tempor.org', '1-628-787-8572', 'clase'),
(23, '17026511', 'Rhona Cleveland', 'I.S.C', 'Sed@Maecenas.net', '1-474-783-0139', 'clase'),
(24, '17713210', 'Odette Wagner', 'I.S.C', 'amet.ante.Vivamus@egetvariusultrices.net', '1-401-831-4000', 'clase'),
(25, '17999722', 'Vladimir Andrews', 'I.S.C', 'luctus.Curabitur@Fusce.com', '1-145-993-7517', 'clase'),
(26, '14404426', 'Conan Howe', 'I.S.C', 'cursus.purus@ipsumsodales.edu', '1-971-195-0315', 'clase'),
(27, '16332918', 'Rebecca Barnes', 'I.S.C', 'lectus.quis@Duis.net', '1-293-742-0566', 'clase'),
(28, '16894987', 'Yetta Reilly', 'I.S.C', 'velit.Sed.malesuada@magnaseddui.edu', '1-176-757-0777', 'clase'),
(29, '16446192', 'Hadassah Sweet', 'I.S.C', 'Mauris.vestibulum.neque@mi.co.uk', '1-448-556-0178', 'clase'),
(30, '15918368', 'Kendall Rodgers', 'I.S.C', 'amet.consectetuer@utcursusluctus.com', '1-488-151-3843', 'clase'),
(31, '14894517', 'Barry Castro', 'I.S.C', 'Quisque.imperdiet.erat@augue.net', '1-584-209-4190', 'clase'),
(32, '16738337', 'Shelly Bonner', 'I.S.C', 'Duis@euismod.org', '1-730-891-7930', 'clase'),
(33, '16863577', 'Dominique Boone', 'I.S.C', 'dignissim@nonleo.edu', '1-396-104-3606', 'clase'),
(34, '15679725', 'Kuame Deleon', 'I.S.C', 'ut.dolor.dapibus@euturpis.co.uk', '1-283-253-8176', 'clase'),
(35, '17033280', 'Wesley Ortiz', 'I.S.C', 'nulla.magna.malesuada@velit.ca', '1-286-283-0961', 'clase'),
(36, '17164022', 'Ezra Walter', 'I.S.C', 'dictum.augue.malesuada@placeratCrasdictum.edu', '1-634-718-7928', 'clase'),
(37, '16545305', 'Alvin Richardson', 'I.S.C', 'Curabitur@Phaselluselitpede.org', '1-743-526-2602', 'clase'),
(38, '17668772', 'Candace Gomez', 'I.S.C', 'Nullam.enim@elementum.net', '1-962-292-1800', 'clase'),
(39, '15847851', 'Carol Morrison', 'I.S.C', 'at.velit.Pellentesque@ipsumPhasellusvitae.co.uk', '1-541-329-3447', 'clase'),
(40, '16198208', 'Randall Mckee', 'I.S.C', 'laoreet.posuere@utpharetra.edu', '1-688-360-5273', 'clase'),
(41, '15923522', 'Gannon Wall', 'I.S.C', 'suscipit@necimperdiet.edu', '1-219-142-4100', 'clase'),
(42, '15034359', 'Zenia Diaz', 'I.S.C', 'Ut.semper@Nunc.net', '1-405-935-7745', 'clase'),
(43, '16458385', 'Marshall Wilkins', 'I.S.C', 'arcu@Proin.org', '1-931-851-1043', 'clase'),
(44, '16868456', 'Breanna Oneill', 'I.S.C', 'eget.ipsum.Donec@augue.co.uk', '1-958-863-7288', 'clase'),
(45, '16694679', 'Leilani Dorsey', 'I.S.C', 'hymenaeos.Mauris@eterosProin.net', '1-499-728-5195', 'clase'),
(46, '15457004', 'Bethany Walls', 'I.S.C', 'molestie.pharetra@sedduiFusce.edu', '1-349-978-1256', 'clase'),
(47, '14413297', 'Avye Raymond', 'I.S.C', 'sed.orci.lobortis@fringilla.ca', '1-950-150-4716', 'clase'),
(48, '17597771', 'Quinn Norton', 'I.S.C', 'Pellentesque.habitant@ategestasa.co.uk', '1-158-137-2799', 'clase'),
(49, '16321508', 'Joshua Navarro', 'I.S.C', 'Fusce.mollis@loremsemperauctor.co.uk', '1-362-376-7689', 'clase'),
(50, '16839353', 'Orson Kerr', 'I.S.C', 'Nam.tempor@liberoProinmi.org', '1-338-283-6429', 'clase'),
(51, '16766631', 'Deanna Wyatt', 'I.S.C', 'Fusce.mi.lorem@luctusaliquetodio.ca', '1-606-110-3069', 'clase'),
(52, '17497813', 'Shad Holman', 'I.S.C', 'sit@arcueu.co.uk', '1-238-491-3499', 'clase'),
(53, '14662708', 'Garth Payne', 'I.S.C', 'Donec.non@risus.co.uk', '1-639-119-2852', 'clase'),
(54, '16743858', 'Paul Kirk', 'I.S.C', 'dictum.magna.Ut@MorbimetusVivamus.edu', '1-964-322-0176', 'clase'),
(55, '15521057', 'Ryder Gardner', 'I.S.C', 'et.magna@vehicula.net', '1-153-348-6994', 'clase'),
(56, '15545051', 'Felix Richards', 'I.S.C', 'Duis.dignissim@gravida.co.uk', '1-582-169-9840', 'clase'),
(57, '17812507', 'Trevor Love', 'I.S.C', 'Lorem.ipsum.dolor@felisDonec.co.uk', '1-927-943-0186', 'clase'),
(58, '17973415', 'Ayanna Dillon', 'I.S.C', 'Sed.id@eutelluseu.edu', '1-431-457-2556', 'clase'),
(59, '14895243', 'Megan Strong', 'I.S.C', 'fermentum.vel.mauris@sociisnatoquepenatibus.org', '1-195-656-6761', 'clase'),
(60, '15968332', 'Caleb Rocha', 'I.S.C', 'eu.arcu.Morbi@facilisis.co.uk', '1-621-626-9698', 'clase'),
(61, '15473080', 'Hector Bridges', 'I.S.C', 'ligula.Aenean.gravida@ridiculusmusProin.net', '1-120-658-2758', 'clase'),
(62, '15414348', 'Evelyn Knight', 'I.S.C', 'sit.amet@varius.edu', '1-544-199-1014', 'clase'),
(63, '14363873', 'Cyrus Quinn', 'I.S.C', 'Nullam@PraesentluctusCurabitur.com', '1-679-461-2089', 'clase'),
(64, '17361700', 'Thor Frank', 'I.S.C', 'blandit@Maurisnulla.edu', '1-563-264-3082', 'clase'),
(65, '16292835', 'Aphrodite Marquez', 'I.S.C', 'id@venenatislacus.com', '1-736-718-3579', 'clase'),
(66, '14101420', 'Portia Sosa', 'I.S.C', 'semper@vestibulum.org', '1-895-550-2048', 'clase'),
(67, '15146198', 'Jessica Estrada', 'I.S.C', 'odio.Phasellus.at@Nunclaoreet.edu', '1-777-269-1493', 'clase'),
(68, '15790398', 'Shad Olson', 'I.S.C', 'lacus.pede.sagittis@facilisis.com', '1-856-581-0016', 'clase'),
(69, '17640405', 'Kirby Parks', 'I.S.C', 'ipsum@sapienCras.org', '1-729-665-3810', 'clase'),
(70, '16994645', 'Garrison English', 'I.S.C', 'nonummy.ultricies@rhoncusNullam.org', '1-799-159-0013', 'clase'),
(71, '15586254', 'Tanisha Griffith', 'I.S.C', 'sem@etrisus.ca', '1-133-859-4198', 'clase'),
(72, '17488000', 'Quamar Sweet', 'I.S.C', 'ut@dictumeu.net', '1-739-490-6602', 'clase'),
(73, '15130699', 'Trevor Figueroa', 'I.S.C', 'quis.urna@asollicitudinorci.edu', '1-353-459-2193', 'clase'),
(74, '17465702', 'Vera Morrison', 'I.S.C', 'lorem@variusultricesmauris.edu', '1-734-997-3468', 'clase'),
(75, '14357272', 'Pearl Spence', 'I.S.C', 'molestie.pharetra@aliquetlibero.org', '1-116-627-9499', 'clase'),
(76, '17952846', 'Derek Warren', 'I.S.C', 'aliquet@at.org', '1-934-284-5383', 'clase'),
(77, '17898514', 'Mercedes Roach', 'I.S.C', 'risus.Donec.egestas@imperdietornareIn.edu', '1-228-402-9848', 'clase'),
(78, '16347670', 'Sawyer Mayo', 'I.S.C', 'ut.quam.vel@Quisque.com', '1-392-576-0092', 'clase'),
(79, '14023897', 'Darryl Watson', 'I.S.C', 'nulla.Integer@auguescelerisque.com', '1-566-734-2481', 'clase'),
(80, '17355805', 'Sigourney Harrell', 'I.S.C', 'massa.Vestibulum.accumsan@convallisligulaDonec.com', '1-586-627-5059', 'clase'),
(81, '15039084', 'Hilda Melendez', 'I.S.C', 'ut.nisi@enimnectempus.co.uk', '1-926-533-0462', 'clase'),
(82, '17347249', 'Timothy Kidd', 'I.S.C', 'tellus.lorem.eu@montes.com', '1-513-988-5315', 'clase'),
(83, '15891908', 'Merritt Holmes', 'I.S.C', 'a@elitNullafacilisi.ca', '1-523-564-7946', 'clase'),
(84, '15405398', 'Xyla Kerr', 'I.S.C', 'tincidunt.aliquam.arcu@magnisdis.com', '1-883-435-5135', 'clase'),
(85, '14552990', 'Blair Banks', 'I.S.C', 'nunc@turpisAliquamadipiscing.net', '1-567-377-6466', 'clase'),
(86, '17364153', 'Ingrid Fitzgerald', 'I.S.C', 'sit.amet@fermentumfermentum.com', '1-714-705-0507', 'clase'),
(87, '15381329', 'Hilary Campos', 'I.S.C', 'eros.non.enim@penatibusetmagnis.edu', '1-873-721-0880', 'clase'),
(88, '14309370', 'Moses Garner', 'I.S.C', 'malesuada@Cras.ca', '1-523-140-2277', 'clase'),
(89, '15705903', 'Frances May', 'I.S.C', 'Lorem.ipsum@morbi.org', '1-563-653-6264', 'clase'),
(90, '15529881', 'Tana Camacho', 'I.S.C', 'magna@parturientmontesnascetur.org', '1-503-756-4675', 'clase'),
(91, '16310351', 'Jerry Trujillo', 'I.S.C', 'nascetur.ridiculus@eleifendvitaeerat.net', '1-604-398-3845', 'clase'),
(92, '16818741', 'Nicholas Oconnor', 'I.S.C', 'justo.eu.arcu@vel.edu', '1-248-914-1651', 'clase'),
(93, '16938142', 'MacKenzie Kidd', 'I.S.C', 'arcu.Sed.eu@Praesenteunulla.com', '1-434-799-0333', 'clase'),
(94, '15741202', 'Peter Dudley', 'I.S.C', 'urna@laciniaat.ca', '1-182-246-6052', 'clase'),
(95, '14838868', 'Keane Vang', 'I.S.C', 'mollis.lectus@consectetueradipiscing.org', '1-769-779-5492', 'clase'),
(96, '15460608', 'Stacy Taylor', 'I.S.C', 'bibendum.Donec@nonsapien.net', '1-314-975-0501', 'clase'),
(97, '16296620', 'Jesse Schneider', 'I.S.C', 'Nunc.lectus.pede@Utsagittislobortis.com', '1-791-586-9715', 'clase'),
(98, '17475207', 'Colette Harmon', 'I.S.C', 'malesuada.vel@Nullamscelerisqueneque.ca', '1-588-422-1677', 'clase'),
(99, '14879144', 'Cain Blair', 'I.S.C', 'Curabitur@eleifend.co.uk', '1-471-122-6350', 'clase'),
(100, '17171857', 'Zelda Reilly', 'I.S.C', 'ligula.Aenean.gravida@egestas.net', '1-100-700-5305', 'clase');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_persona`
--

CREATE TABLE `t_persona` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telefono` varchar(50) DEFAULT NULL,
  `personal` varchar(60) NOT NULL,
  `fecha` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `mytable`
--
ALTER TABLE `mytable`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `t_persona`
--
ALTER TABLE `t_persona`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `mytable`
--
ALTER TABLE `mytable`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT de la tabla `t_persona`
--
ALTER TABLE `t_persona`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
