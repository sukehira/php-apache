<?php


class MiniBlogApplication extends Application
{
    protected $login_action = ['account', 'signin'];

    public function getRootDir()
    {
        return dirname(__FILE__);
    }

    protected function registerRoutes()
    {
        return [];
    }

    protected function configure()
    {
        $this->db_manager->connect('master', [
                'dsn'      => 'mysql:dbname=docker_db;host=db;charset=utf8',
                'user'     => 'docker_user',
                'password' => 'docker_pass',
            ]
        );
    }
}
