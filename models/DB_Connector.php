<?php

class DB_Connector {

    private $db_instance = null;

    private $serverName = "bh-4.webhostbox.net";
    private $userName = "haseebiq_dev";
    private $password = ".QCDL%g.k6@9";
    private $isConnectedToDB = false;

    /*
     * Makes Connection to Remote Database
     */
    function connect() {
        // Create connection
        $this->db_instance = new mysqli($this->serverName, $this->userName, $this->password);

        // Check connection
        if ($this->db_instance->connect_error) {
            Utilities::goToURL(Page::$Error . '?error=' . $this->db_instance->connect_error);
            $this->isConnectedToDB = false;
        }else {
            $this->isConnectedToDB = true;
        }
    }

    /*
     * Returns BOOLEAN value to tell if server is connected with Database
     */
    function connected() {
        return $this->isConnectedToDB;
    }

    public function __destruct() {
        // TODO: Implement __destruct() method.
        $this->db_instance->close();
    }

}