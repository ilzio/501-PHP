<?php

const BASEDIR = '/var/www/html/501/aula5/todo-list/';

const DBUSER   = 'developer';
const DBPASS   = '4linux';
// const DBPASS   = '123';
const DBNAME   = 'tarefas';
const DBHOST   = 'localhost';
// const DBDRIVER = 'mysql';
const DBDRIVER = 'pgsql';
const DBDSN    = DBDRIVER.':host='.DBHOST.';dbname='.DBNAME;
