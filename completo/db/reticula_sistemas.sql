-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-11-2022 a las 00:31:18
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `reticula_sistemas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clases`
--

CREATE TABLE `clases` (
  `id_class` int(11) NOT NULL,
  `class_key` varchar(10) NOT NULL,
  `semester` int(10) NOT NULL,
  `class_name` varchar(50) NOT NULL,
  `theo_credits` int(11) NOT NULL,
  `prac_credits` int(11) NOT NULL,
  `total_credits` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clases`
--

INSERT INTO `clases` (`id_class`, `class_key`, `semester`, `class_name`, `theo_credits`, `prac_credits`, `total_credits`) VALUES
(1, 'ACF-0901', 1, 'Cálculo Diferencial', 3, 2, 5),
(2, 'AED-1285', 1, 'Fundamentos de Programación', 2, 3, 5),
(3, 'ACA-0907', 1, 'Taller de Ética', 0, 4, 4),
(4, 'AEF-1041', 1, 'Matemáticas Discretas', 3, 2, 5),
(5, 'SCH-1024', 1, 'Taller de Administración', 1, 3, 4),
(6, 'ACC-0906', 1, 'Fundamentos de Investigación', 2, 3, 4),
(7, 'ACF-0902', 2, 'Cálculo Integral', 3, 2, 5),
(8, 'AED-1286', 2, 'Programación Orientada a Objetos', 2, 3, 5),
(9, 'AEC-1008', 2, 'Contabilidad Financiera', 2, 2, 4),
(10, 'AEC-1058', 2, 'Química', 2, 2, 4),
(11, 'ACF-0903', 2, 'Álgebra Lineal', 3, 2, 5),
(12, 'AEF-1052', 2, 'Probabilidad y Estadística', 3, 2, 5),
(13, 'ACF-0904', 3, 'Cálculo Vectorial', 3, 2, 5),
(14, 'AED-1026', 3, 'Estructura de Datos', 2, 3, 5),
(15, 'SCC-1005', 3, 'Cultura Empresarial', 2, 2, 4),
(16, 'SCC-1013', 3, 'Investigación de Operaciones', 2, 2, 4),
(17, 'ACD-0908', 3, 'Desarrollo Sustentable', 2, 3, 5),
(18, 'SCF-1006', 3, 'Física General', 3, 2, 5),
(19, 'ACF-0905', 4, 'Ecuaciones Diferenciales', 3, 2, 5),
(20, 'SCC-1017', 4, 'Métodos Numéricos', 2, 2, 4),
(21, 'SCD-1027', 4, 'Tópicos Avanzados de Programación', 2, 3, 5),
(22, 'AEF-1031', 4, 'Fundamentos de Base de Datos', 3, 2, 5),
(23, 'SCD-1022', 4, 'Simulación', 2, 3, 5),
(24, 'SCD-1018', 4, 'Principios Eléctricos y Aplicaciones Digitales', 2, 3, 5),
(25, 'SCC-1010', 5, 'Graficación', 2, 2, 4),
(26, 'AEC-1034', 5, 'Fundamentos de Telecomunicacione', 2, 2, 4),
(27, 'AEC-1061', 5, 'Sistemas Operativos', 2, 2, 4),
(28, 'SCA-1025', 5, 'Taller de Base de Datos', 0, 4, 4),
(29, 'SCC-1007', 5, 'Fundamentos de Ingeniería de Software', 2, 2, 4),
(30, 'SCD-1003', 5, 'Arquitectura de Computadoras', 2, 3, 5),
(31, 'SCD-1015', 6, 'Lenguajes y Autómatas I', 2, 3, 5),
(32, 'SCD-1021', 6, 'Redes de Computadoras', 2, 3, 5),
(33, 'SCA-1026', 6, 'Taller de Sistemas Operativos', 0, 4, 4),
(34, 'SCB-1001', 6, 'Administración de Base de Datos', 1, 4, 5),
(35, 'SCD-1011', 6, 'Ingeniería de Software', 2, 3, 5),
(36, 'SCC-1014', 6, 'Lenguajes de Interfaz', 2, 2, 4),
(37, 'SCD-1016', 7, 'Lenguajes y Autómatas II', 2, 3, 5),
(38, 'SCD-1004', 7, 'Conmutacion y Enrutamiento en Redes de Datos', 2, 3, 5),
(39, 'ACA-0909', 7, 'Taller de Investigación I', 0, 4, 4),
(40, 'SCG-1009', 7, 'Gestión de Proyectos de Software', 3, 3, 6),
(41, 'SCC-1023', 7, 'Sistemas Programables', 2, 2, 4),
(42, 'SCC-1019', 8, 'Programación Lógica y Funcional', 2, 2, 4),
(43, 'SCA-1002', 8, 'Administración de Redes', 0, 4, 4),
(44, 'ACA-0910', 8, 'Taller de Investigación II', 0, 4, 4),
(45, 'AEB-1055', 8, 'Programación Web', 1, 4, 5),
(46, 'SCC-1012', 9, 'Inteligencia Artificial', 2, 2, 4),
(47, 'XXX-XXXX', 9, 'Residencia Profesional', 0, 0, 0),
(48, 'XXX-XXXX', 8, 'Servicio Social', 0, 0, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clases`
--
ALTER TABLE `clases`
  ADD PRIMARY KEY (`id_class`);
ALTER TABLE `clases`
  MODIFY `id_class` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
