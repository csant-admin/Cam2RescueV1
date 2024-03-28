<?php 

    class DBConnection {

        private $server = "localhost";
        private $user = "root";
        private $password ="";
        private $databaseName = "cam2rescue_db";

        protected function connect() {
            try {
                $dsn = 'mysql:host='. $this->server. '; dbname='. $this->databaseName;
                $pdoConnect = new PDO($dsn, $this->user, $this->password);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
                return $pdo;
            } catch(PDOException $e) {
                echo 'ERROR ' . $e->getMessage();
            }
        }
    }

?>