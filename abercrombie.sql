-- phpMyAdmin SQL Dump
-- version 3.1.3
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Ven 11 Janvier 2013 à 14:49
-- Version du serveur: 5.1.32
-- Version de PHP: 5.2.9-1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Base de données: `abercrombie`
--

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id_comment` int(11) NOT NULL AUTO_INCREMENT,
  `posts_id` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `comments` text NOT NULL,
  `date_create` datetime NOT NULL,
  PRIMARY KEY (`id_comment`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `comments`
--


-- --------------------------------------------------------

--
-- Structure de la table `jobs`
--

CREATE TABLE IF NOT EXISTS `jobs` (
  `id_job` int(11) NOT NULL AUTO_INCREMENT,
  `cashier` int(11) NOT NULL,
  `impact1` int(11) NOT NULL,
  `impact2` int(11) NOT NULL,
  `model` int(11) NOT NULL,
  `stylist` int(11) NOT NULL,
  PRIMARY KEY (`id_job`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `jobs`
--


-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id_post` int(11) NOT NULL AUTO_INCREMENT,
  `message` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `date_create` datetime NOT NULL,
  `job` varchar(255) NOT NULL,
  PRIMARY KEY (`id_post`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `posts`
--


-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `job` varchar(255) NOT NULL,
  `date_create` datetime NOT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `users`
--

