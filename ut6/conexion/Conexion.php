<?php

class Conexion{
    private static ?Conexion $instance = null;
    private mysqli $conn;

    // Constructor privado para evitar "new Conexion()"
    private function __construct(
        string $host,
        string $username,
        string $password,
        string $db,
        int $port = 3307
    ) {
        $this->conn = new mysqli($host, $username, $password, $db, $port);

        if ($this->conn->connect_error) {
            throw new Exception("Error de conexión: " . $this->conn->connect_error);
        }

        // Opcional: charset
        $this->conn->set_charset("utf8mb4");
    }

    // Método estático para obtener la única instancia
    public static function getInstance(
        string $host = 'localhost',
        string $username = 'root',
        string $password = '',
        string $db = 'prueba',
        int $port = 3307
    ): Conexion {
        if (self::$instance === null) {
            self::$instance = new self($host, $username, $password, $db, $port);
        }

        return self::$instance;
    }

    // Acceso a la conexión real
    public function getConnection(): mysqli
    {
        return $this->conn;
    }

    // Prevenir clonación
    private function __clone() {}

    // Prevenir deserialización
    public function __wakeup()
    {
        throw new Exception("No se puede deserializar un Singleton");
    }
}